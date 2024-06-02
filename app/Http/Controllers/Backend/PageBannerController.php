<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommonHeaderBanner;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use File;

class PageBannerController extends Controller
{
    public function index(){
        return view('backend.headerBanner.addPageHeader');
    }
    public function store(Request $request){
        $request->validate([
            'b_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
            'b_title' => 'required|max:180',
            'b_textContent' => 'max:300',
           
            'page_type' => 'required|unique:common_header_banners,type',
        ]);

        $headerInfo=new CommonHeaderBanner;
        $headerInfo->b_title =$request->b_title ;
        $headerInfo->b_textContent =$request->b_textContent ;
        $headerInfo->type = $request->page_type ;

        if($request->file('b_image')){
            $manager = new ImageManager(new Driver());
            if(File::exists(public_path('uploads/banner/'.$headerInfo->b_image))){
                File::delete(public_path('uploads/banner/'.$headerInfo->b_image));
            }
            $image = $request->file('b_image');

            $customName = 'banner' . rand() . '.' . $image->getClientOriginalExtension();  
            $img = $manager->read($image);          
            $img->toJpeg(100)->save(public_path('uploads/banner/'.$customName));          
            $headerInfo->b_image= 'uploads/banner/'.$customName;
 
        }
        $msg =$headerInfo->save();
        if($msg){
            return redirect('/header/info/manage')->with('success','Data successfully added.');
        }
        else{
            return back()->with('error','Oops! Data Not add.');
        }
    }
    // banner manage
    public function manage(){
        $banner_datas =CommonHeaderBanner::all();
        return view('backend.headerBanner.manage',compact('banner_datas'));
    }
    // banner edit
    public function edit($id){
        $banner_data =CommonHeaderBanner::findOrFail($id);
        return view('backend.headerBanner.edit',compact('banner_data'));
    }
    // banner update
    public function update(Request $request, $id){
        $banner_data =CommonHeaderBanner::findOrFail($id);
        $request->validate([
            'b_image' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
            'b_title' => 'required|max:180',
            'b_textContent' =>'max:300',

        ]);
        $banner_data->b_title =$request->b_title ;
        $banner_data->b_textContent =$request->b_textContent ;
        if($request->file('b_image')){
            $manager = new ImageManager(new Driver());
            if(File::exists(public_path($banner_data->b_image))){
                File::delete(public_path($banner_data->b_image));
            }
            $image = $request->file('b_image');
            $customName = 'banner' . rand() . '.' . $image->getClientOriginalExtension();            
            $img = $manager->read($image);          
            $img->toJpeg(100)->save(public_path('uploads/banner/'.$customName));  
            $banner_data->b_image= 'uploads/banner/'.$customName;
 
        }
        $msg =$banner_data->update();
        if($msg){
            return redirect('/header/info/manage')->with('success','Data successfully Updated.');
        }
        else{
            return back()->with('error','Data Not update.');
        }
    }
    // banner delete
    public function delete($id){
        $banner_data =CommonHeaderBanner::findOrFail($id);
        $msg = $banner_data->delete();
        if($msg){
            if(File::exists(public_path($banner_data->b_image))){
                File::delete(public_path($banner_data->b_image));
            }
            return back()->with('success','Data Successfully Deleted.');
        }
        else{
            return back()->with('error','Data Not Delete.');
        }
    }


}
