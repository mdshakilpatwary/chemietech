<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPageElement;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use File;

class AboutCertificationController extends Controller
{
            // About certification story element
            public function index(){
                return view('backend.aboutElement.certification.index');
            }
            // About certification manage element
            public function manage(){
                $certifications = AboutPageElement::where('type','=',2)->orderBy('id','desc')->get();             
    
                return view('backend.aboutElement.certification.manage',compact('certifications'));
            }
    
            // About certification manage element
    
            public function store(Request $request){
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                    'title' => 'required|max:200',
                    'subtitle' => 'nullable|max:200',
                ]);
                $certification=new AboutPageElement;
              
        
                    if($request->file('image')){
                        $singlefiles = $request->file('image');
                        
                        $customnamefile='certification'.rand().'.'. $singlefiles->getClientOriginalExtension();                           
                        $manager = new ImageManager(new Driver());
                        $img = $manager->read($singlefiles);          
                        $img->toJpeg(80)->save(public_path('uploads/about/'.$customnamefile));
                             
                        $certification->image ='uploads/about/'.$customnamefile;
                        
                    }
        
                    $certification->type =2;
                    $certification->title =$request->title;
                    $certification->sub_title =$request->subtitle;
                    $msg = $certification->save();
        
                    if($msg){
                        return redirect('/about/certification/manage')->with('success','Successfully about certification added.');
                    }
                    else{
                        return back()->with('error','Oops! About Certification Not Add.');
                    }
        
            }
        // edit part 
        public function edit($id){
            $certification = AboutPageElement::findOrFail($id);             
            return view('backend.aboutElement.certification.edit',compact('certification'));
        }
        public function update(Request $request,$id){
            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'title' => 'required|max:200',
                'subtitle' => 'nullable|max:200',
            ]);
    
    
            $certification = AboutPageElement::findOrFail($id);             
                // single image 
                if($request->file('image')){
                    if(File::exists(public_path($certification->image))){
                        File::delete(public_path($certification->image));
                    }
                    $singlefiles = $request->file('image');
                    
                    $customnamefile='certification'.rand().'.'. $singlefiles->getClientOriginalExtension();                           
                    $manager = new ImageManager(new Driver());
                    $img = $manager->read($singlefiles);          
                    $img->toJpeg(80)->save(public_path('uploads/about/'.$customnamefile));
                            
                    
                    $certification->image ='uploads/about/'.$customnamefile;
                    
                }
                
            $certification->title =$request->title;
            $certification->sub_title =$request->subtitle;
    
            $msg = $certification->update();
    
            if($msg){
                return redirect('/about/certification/manage')->with('success','Successfully about certification Updated.');
            }
            else{
                return back()->with('error','Oops! About Certification Not Update.');
            }
        }
    
         // delete part 
         public function delete($id){
            $certification = AboutPageElement::findOrFail($id);             
            $msg =$certification->delete();
            if($msg){
                if(File::exists(public_path($certification->image))){
                    File::delete(public_path($certification->image));
                }     
                return back()->with('success','About Certification Successfully Deleted.');
            }
            else{
                return back()->with('error','Oops! About Certification Not Delete.');
            }
    
        }
    
        // status part
        public function status($id){
            $certification = AboutPageElement::findOrFail($id);             
            if($certification->status == 1){
            $certification->status =0;
            $msg =$certification->update();
            if($msg){
                return back()->with('success','About Certification Successfully Inactivated');
            }
            else{
                return back()->with('error','Oops! About Certification Not Inactive');
            }
            }
            else{
            $certification->status =1;
            $msg =$certification->update();
            if($msg){
                return back()->with('success','About Certification Successfully Activated');
            }
            else{
                return back()->with('error','Oops! About Certification Not Activate');
            }
    
            }
        } 
}
