<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductSubCat;
use App\Models\Product;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use File;

class ProductSubCatController extends Controller
{
    public function index(){
        $categories = ProductCategory::where('status', 1)->get();
        return view('backend.product.productSubCategory.index', compact('categories'));
    }

    // Subcategory store 
    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:100',
            'category' => 'required',
        ]);

        $subcategory = new ProductSubCat;
        $subcategory->name = $request->name;
        $subcategory->cat_id = $request->category;


        
        $msg =$subcategory->save();
        if($msg){
            return back()->with('success','Successfully Subcategory Added.');
        }
        else{
            return back()->with('error','Oops! Subcategory Not Add.');
        }

    }
    // Subcategory manage 

    public function manage(){
        $subcategories = ProductSubCat::orderBy('id','desc')->get();
        return view('backend.product.productSubCategory.manage',compact('subcategories'));
    }
    // Edit subcategory 
    public function edit($id){
        $categories=ProductCategory::where('status', 1)->get();
        $subcategory = ProductSubCat::findOrfail($id);
        return view('backend.product.productSubCategory.edit',compact('subcategory','categories'));
    }

    // Update subcategory 
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|max:100',
        ]);

        $subcategory =ProductSubCat::findOrFail($id);
        $subcategory->name = $request->name;
        $subcategory->cat_id = $request->category;


       
        $msg =$subcategory->update();
        if($msg){
            return redirect('/subcategory/manage')->with('success','Successfully subcategory Updated.');
        }
        else{
            return back()->with('error','Oops! Sub Category Not Update.');
        }
    }
    // Subcategory delete 
    public function delete($id){
        // Check if there are related product
        $product = Product::where('subcat_id', $id)->count();

        if ($product > 0) {
            return redirect()->back()->with('error', 'Cannot delete the SubCategory because it has related Product.');
        }
        else{
            $category =ProductSubCat::findOrFail($id);
        if(File::exists(public_path($category->image))){
            File::delete(public_path($category->image));
        }
        $msg =$category->delete();
        if($msg){
            return back()->with('success','Successfully Deleted.');
        }
        else{
            return back()->with('error','Oops! SubCategory Not Delete.');
        }
        }
    }



    // Sub category status
    public function status($id){
        $subcategory =ProductSubCat::findOrFail($id);
       if($subcategory->status == 1){
        $subcategory->status =0;
        $msg =$subcategory->update();
        if($msg){
            return back()->with('success','Subcategory Successfully Inactivated');
        }
        else{
            return back()->with('error','Oops! Subcategory Not Inactive');
        }
       }
       else{
        $subcategory->status =1;
        $msg =$subcategory->update();
        if($msg){
            return back()->with('success','Subcategory Successfully Activated');
        }
        else{
            return back()->with('error','Oops! Subcategory Not Activate');
        }

       }
    }


}
