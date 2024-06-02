<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use File;

class TestimonialController extends Controller
{
    public function index(){
        return view('backend.testimonial.index');
    }

    // testimonial store 
    public function store(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1048',
            'name' => 'required|max:100',
            'title' => 'required|max:100',
            'description' => 'required|max:500',
        ]);

        $testimonial = new Testimonial;
        $testimonial->name = $request->name;
        $testimonial->title = $request->title;
        $testimonial->description = $request->description;


        if($request->file('image')){
            $file = $request->file('image');
            
            $customname='testimonial'.rand().'.'. $file->getClientOriginalExtension();                           
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file)->resize(200,150);          
            $img->toJpeg(80)->save(public_path('uploads/testimonial/'.$customname));
                 
            $testimonial->image ='uploads/testimonial/'.$customname;
            
        }
        $msg =$testimonial->save();
        if($msg){
            return redirect('/testimonial/manage')->with('success','Successfully testimonial added.');
        }
        else{
            return back()->with('error','Oops! Testimonial Not Add.');
        }

    }
    // testimonial manage 

    public function manage(){
        $testimonials = Testimonial::orderBy('id','desc')->get();
        return view('backend.testimonial.manage',compact('testimonials'));
    }
    // Edit testimonial 
    public function edit($id){
        $testimonial = Testimonial::findOrfail($id);
        return view('backend.testimonial.edit',compact('testimonial'));
    }

    // Update testimonial 
    public function update(Request $request, $id){
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1048',
            'name' => 'required|max:100',
            'title' => 'required|max:100',
            'description' => 'required|max:500',
        ]);

        $testimonial =Testimonial::findOrFail($id);
        $testimonial->name = $request->name;
        $testimonial->title = $request->title;
        $testimonial->description = $request->description;


        if($request->file('image')){
            if(File::exists(public_path($testimonial->image))){
                File::delete(public_path($testimonial->image));
            }
            $file = $request->file('image');
            
            $customname='testimonial'.rand().'.'. $file->getClientOriginalExtension();                           
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file)->resize(200,150);          
            $img->toJpeg(80)->save(public_path('uploads/testimonial/'.$customname));
                 
            $testimonial->image ='uploads/testimonial/'.$customname;
            
        }
        $msg =$testimonial->update();
        if($msg){
            return redirect('/testimonial/manage')->with('success','Successfully Testimonial Updated.');
        }
        else{
            return back()->with('error','Oops! Testimonial Not Update.');
        }
    }
    // testimonial delete 
    public function delete($id){
        $testimonial = Testimonial::findOrFail($id);

   
        if(File::exists(public_path($testimonial->image))){
            File::delete(public_path($testimonial->image));
        }
        $msg =$testimonial->delete();
        if($msg){
            return back()->with('success','Successfully Deleted.');
        }
        else{
            return back()->with('error','Oops! testimonial Not Delete.');
        }
        
    }

    // testimonial status
    public function status($id){
        $testimonial =Testimonial::findOrFail($id);
        if($testimonial->status == 1){
        $testimonial->status =0;
        $msg =$testimonial->update();
        if($msg){
            return back()->with('success','Testimonial Successfully Inactivated');
        }
        else{
            return back()->with('error','Oops! Testimonial Not Inactive');
        }
        }
        else{
        $testimonial->status =1;
        $msg =$testimonial->update();
        if($msg){
            return back()->with('success','Testimonial Successfully Activated');
        }
        else{
            return back()->with('error','Oops! Testimonial Not Activate');
        }

        }
    }

}
