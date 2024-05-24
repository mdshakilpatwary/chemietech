<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSubCat;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use File;
class ProductController extends Controller
{
    public function index(){
        $categories = ProductCategory::where('status', 1)->get();
        $subcategories = ProductSubCat::where('status', 1)->get();

        return view('backend.product.productAdd', compact('categories','subcategories'));
    }
    public function store(Request $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|max:100|unique:products,name',
            'category' => 'required',
            'subcategory' => 'required',
            'description' => 'required|max:500',
        ]);
        
        $product=new Product;
        $product->name =$request->name;
        $product->slug = Str::slug($request->name).'_'.rand();
        $product->cat_id =$request->category;
        $product->subcat_id =$request->subcategory;
        $product->description =$request->description ;
   

        if($request->file('image')){
            $manager = new ImageManager(new Driver());
            $image = $request->file('image');
            $customName = 'product' . rand() . '.' . $image->getClientOriginalExtension();            
            $img = $manager->read($image)->resize(400,350);          
            $img->toPng(80)->save(public_path('uploads/product/'.$customName)); 
            $product->image= 'uploads/product/'.$customName;
 
        }
        $msg =$product->save();
        if($msg){
            return redirect('/product/manage')->with('success','Product successfully added.');
        }
        else{
            return back()->with('error','Oops! Product Not add.');
        }
    }

    // manage part 
    public function manage(){
        $products =Product::orderBy('id','desc')->get();
        return view('backend.product.productManage', compact('products'));
    }
    // edit part 
    public function edit($id){
        $categories = ProductCategory::where('status', 1)->get();
        $subcategories = ProductSubCat::where('status', 1)->get();
        $product =Product::findOrFail($id);
        return view('backend.product.productEdit', compact('product','categories','subcategories'));
    }
    // update part 
    public function update(Request $request,$id){
        $product =Product::findOrFail($id);
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|max:150',
            'category' => 'required',
            'subcategory' => 'required',
            'description' => 'required|max:500',
        ]);
        $product->name =$request->name;
        $product->slug = Str::slug($request->name).'_'.rand();
        $product->cat_id =$request->category;
        $product->subcat_id =$request->subcategory;
        $product->description =$request->description ;
        

        if($request->file('image')){
            $manager = new ImageManager(new Driver());
            if(File::exists(public_path($product->image))){
                File::delete(public_path($product->image));
            }
            $image = $request->file('image');
            $customName = 'product' . rand() . '.' . $image->getClientOriginalExtension();            
            $img = $manager->read($image)->resize(400,350);          
            $img->toPng()->save(public_path('uploads/product/'.$customName)); 
            $product->image='uploads/product/'.$customName;
 
        }
        
        $msg =$product->update();
        if($msg){
            return redirect('/product/manage')->with('success','Product successfully Updated.');
        }
        else{
            return back()->with('error','Oops! Product Not Update.');
        }

    }
    // delete part 
    public function delete($id){
        $product =Product::findOrFail($id);
        $msg =$product->delete();
        if($msg){
            if(File::exists(public_path($product->image))){
                File::delete(public_path($product->image));
            }     
            return back()->with('success','Product successfully Deleted.');
        }
        else{
            return back()->with('error','Oops! Product Not Delete.');
        }

    }

    // product status
    public function status($id){
        $product =Product::findOrFail($id);
        if($product->status == 1){
        $product->status =0;
        $msg =$product->update();
        if($msg){
            return back()->with('success','Product Successfully Inactivated');
        }
        else{
            return back()->with('error','Oops! Product Not Inactive');
        }
        }
        else{
        $product->status =1;
        $msg =$product->update();
        if($msg){
            return back()->with('success','Product Successfully Activated');
        }
        else{
            return back()->with('error','Oops! Product Not Activate');
        }

        }
    }


}
