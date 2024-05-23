<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductSubCat;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use File;

class ProductCatController extends Controller
{
    public function index(){
        return view('backend.product.productCategory.index');
    }

    // category store 
    public function store(Request $request){
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:1048',
            'name' => 'required|max:100',
            'description' => 'nullable|max:500',
        ]);

        $category = new ProductCategory;
        $category->name = $request->name;
        $category->description = $request->description;


        if($request->file('image')){
            $file = $request->file('image');
            
            $customname='category'.rand().'.'. $file->getClientOriginalExtension();                           
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file);          
            $img->toJpeg(80)->save(public_path('uploads/product/'.$customname));
                 
            $category->image ='uploads/product/'.$customname;
            
        }
        $msg =$category->save();
        if($msg){
            return back()->with('success','Successfully category added.');
        }
        else{
            return back()->with('error','Oops! Category Not Add.');
        }

    }
    // category manage 

    public function manage(){
        $categories = ProductCategory::orderBy('id','desc')->get();
        return view('backend.product.productCategory.manage',compact('categories'));
    }
    // Edit category 
    public function edit($id){
        $category = ProductCategory::findOrfail($id);
        return view('backend.product.productCategory.edit',compact('category'));
    }

    // Update category 
    public function update(Request $request, $id){
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1048',
            'name' => 'required|max:100',
            'description' => 'nullable|max:500',
        ]);

        $category =ProductCategory::findOrFail($id);
        $category->name = $request->name;
        $category->description = $request->description;


        if($request->file('image')){
            if(File::exists(public_path($category->image))){
                File::delete(public_path($category->image));
            }
            $file = $request->file('image');
            
            $customname='category'.rand().'.'. $file->getClientOriginalExtension();                           
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file);          
            $img->toJpeg(80)->save(public_path('uploads/product/'.$customname));
                 
            $category->image ='uploads/product/'.$customname;
            
        }
        $msg =$category->update();
        if($msg){
            return redirect('/category/manage')->with('success','Successfully category Updated.');
        }
        else{
            return back()->with('error','Oops! Category Not Update.');
        }
    }
    // category delete 
    public function delete($id){
        // Check if there are related sub category
        $subcategory = ProductSubCat::where('cat_id', $id)->count();

        if ($subcategory > 0) {
            return redirect()->back()->with('error', 'Cannot delete the Category because it has related Subcategory.');
        }
        else{
            $category =ProductCategory::findOrFail($id);
        if(File::exists(public_path($category->image))){
            File::delete(public_path($category->image));
        }
        $msg =$category->delete();
        if($msg){
            return back()->with('success','Successfully Deleted.');
        }
        else{
            return back()->with('error','Oops! Category Not Delete.');
        }
        }
    }

    // Category status
    public function status($id){
        $category =ProductCategory::findOrFail($id);
        if($category->status == 1){
        $category->status =0;
        $msg =$category->update();
        if($msg){
            return back()->with('success','Category Successfully Inactivated');
        }
        else{
            return back()->with('error','Oops! Category Not Inactive');
        }
        }
        else{
        $category->status =1;
        $msg =$category->update();
        if($msg){
            return back()->with('success','Category Successfully Activated');
        }
        else{
            return back()->with('error','Oops! Category Not Activate');
        }

        }
    }


}
