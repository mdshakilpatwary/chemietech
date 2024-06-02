<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BannerSlider;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use File;

class BannerSliderController extends Controller
{
    // About banner Slider store element
    public function index(){
        return view('backend.bannerSlider.index');
    }
    // About bannerSlider manage element
    public function manage(){
        $bannerSliders = BannerSlider::orderBy('id','desc')->get();             

        return view('backend.bannerSlider.manage',compact('bannerSliders'));
    }

    // About bannerSlider manage element

    public function store(Request $request){
        $request->validate([
            'image' => 'required|image|max:2048',
            'title' => 'required|max:180',
            'sub_title' => 'nullable|max:180',
            'short_text' => 'nullable|max:300',
        ]);
        $bannerSlider=new BannerSlider;
        

            if($request->file('image')){
                $singlefiles = $request->file('image');
                
                $customnamefile='bannerSlider'.rand().'.'. $singlefiles->getClientOriginalExtension();                           
                $manager = new ImageManager(new Driver());
                $img = $manager->read($singlefiles);          
                $img->toJpeg(80)->save(public_path('uploads/bannerSlider/'.$customnamefile));
                        
                $bannerSlider->image ='uploads/bannerSlider/'.$customnamefile;
                
            }

            $bannerSlider->title =$request->title;
            $bannerSlider->sub_title =$request->sub_title;
            $bannerSlider->short_text =$request->short_text;
            $msg = $bannerSlider->save();

            if($msg){
                return redirect('/bannerSlider/manage')->with('success','Successfully Banner Slider added.');
            }
            else{
                return back()->with('error','Oops!  Banner Slider Not Add.');
            }

    }
// edit part 
public function edit($id){
    $bannerSlider = BannerSlider::findOrFail($id);             
    return view('backend.bannerSlider.edit',compact('bannerSlider'));
}
public function update(Request $request,$id){
    $request->validate([
        'image' => 'nullable|image|max:2048',
        'title' => 'required|max:180',
        'sub_title' => 'nullable|max:180',
        'short_text' => 'nullable|max:300',
    ]);


    $bannerSlider = BannerSlider::findOrFail($id);             
        // single image 
        if($request->file('image')){
            if(File::exists(public_path($bannerSlider->image))){
                File::delete(public_path($bannerSlider->image));
            }
            $singlefiles = $request->file('image');
            
            $customnamefile='bannerSlider'.rand().'.'. $singlefiles->getClientOriginalExtension();                           
            $manager = new ImageManager(new Driver());
            $img = $manager->read($singlefiles);          
            $img->toJpeg(80)->save(public_path('uploads/bannerSlider/'.$customnamefile));
                    
            
            $bannerSlider->image ='uploads/bannerSlider/'.$customnamefile;
            
        }
        
        $bannerSlider->title =$request->title;
        $bannerSlider->sub_title =$request->sub_title;
        $bannerSlider->short_text =$request->short_text;

    $msg = $bannerSlider->update();

    if($msg){
        return redirect('/bannerSlider/manage')->with('success','Successfully Banner Slider Updated.');
    }
    else{
        return back()->with('error','Oops! Banner Slider Not Update.');
    }
}

    // delete part 
    public function delete($id){
    $bannerSlider = BannerSlider::findOrFail($id);             
    $msg =$bannerSlider->delete();
    if($msg){
        if(File::exists(public_path($bannerSlider->image))){
            File::delete(public_path($bannerSlider->image));
        }     
        return back()->with('success','Banner Slider Successfully Deleted.');
    }
    else{
        return back()->with('error','Oops! Banner Slider Not Delete.');
    }

}

// status part
public function status($id){
    $bannerSlider = BannerSlider::findOrFail($id);             
    if($bannerSlider->status == 1){
    $bannerSlider->status =0;
    $msg =$bannerSlider->update();
    if($msg){
        return back()->with('success','Banner Slider Successfully Inactivated');
    }
    else{
        return back()->with('error','Oops! Banner Slider Not Inactive');
    }
    }
    else{
    $bannerSlider->status =1;
    $msg =$bannerSlider->update();
    if($msg){
        return back()->with('success',' Banner Slider Successfully Activated');
    }
    else{
        return back()->with('error','Oops! Banner Slider Not Activate');
    }

    }
}  
}
