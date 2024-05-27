<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamManagement;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use File;

class AboutManagementController extends Controller
{
        // About management story element
        public function index(){
            return view('backend.aboutElement.management.index');
        }
        // About management manage element
        public function manage(){
            $managements = TeamManagement::where('type','=',2)->orderBy('id','desc')->get();             
    
            return view('backend.aboutElement.management.manage',compact('managements'));
        }
    
        // About management manage element
    
        public function store(Request $request){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'name' => 'required|max:100',
                'title' => 'required|max:100',
                'facebook' => 'nullable|url',
                'twitter' => 'nullable|url',
                'instagram' => 'nullable|url',
                'linkedin' => 'nullable|url',
            ]);
            $management=new TeamManagement;
            
    
                if($request->file('image')){
                    $singlefiles = $request->file('image');
                    
                    $customnamefile='management'.rand().'.'. $singlefiles->getClientOriginalExtension();                           
                    $manager = new ImageManager(new Driver());
                    $img = $manager->read($singlefiles)->resize(350,300);          
                    $img->toJpeg(80)->save(public_path('uploads/about/'.$customnamefile));
                            
                    $management->image ='uploads/about/'.$customnamefile;
                    
                }
    
                $management->type =2;
                $management->name =$request->name;
                $management->title =$request->title;
                $management->facebook =$request->facebook;
                $management->twitter =$request->twitter;
                $management->instagram =$request->instagram;
                $management->linkedin =$request->linkedin;
                $msg = $management->save();
    
                if($msg){
                    return redirect('/about/management/manage')->with('success','Successfully about management added.');
                }
                else{
                    return back()->with('error','Oops! About management Not Add.');
                }
    
        }
    // edit part 
    public function edit($id){
        $management = TeamManagement::findOrFail($id);             
        return view('backend.aboutElement.management.edit',compact('management'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|max:100',
            'title' => 'required|max:100',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);
    
    
        $management = TeamManagement::findOrFail($id);             
            // single image 
            if($request->file('image')){
                if(File::exists(public_path($management->image))){
                    File::delete(public_path($management->image));
                }
                $singlefiles = $request->file('image');
                
                $customnamefile='management'.rand().'.'. $singlefiles->getClientOriginalExtension();                           
                $manager = new ImageManager(new Driver());
                $img = $manager->read($singlefiles)->resize(350,300);          
                $img->toJpeg(80)->save(public_path('uploads/about/'.$customnamefile));
                        
                
                $management->image ='uploads/about/'.$customnamefile;
                
            }
            
            $management->name =$request->name;
            $management->title =$request->title;
            $management->facebook =$request->facebook;
            $management->twitter =$request->twitter;
            $management->instagram =$request->instagram;
            $management->linkedin =$request->linkedin;
    
        $msg = $management->update();
    
        if($msg){
            return redirect('/about/management/manage')->with('success','Successfully About Management Updated.');
        }
        else{
            return back()->with('error','Oops! About Management Not Update.');
        }
    }
    
        // delete part 
        public function delete($id){
        $management = TeamManagement::findOrFail($id);             
        $msg =$management->delete();
        if($msg){
            if(File::exists(public_path($management->image))){
                File::delete(public_path($management->image));
            }     
            return back()->with('success','About management Successfully Deleted.');
        }
        else{
            return back()->with('error','Oops! About management Not Delete.');
        }
    
    }
    
    // status part
    public function status($id){
        $management = TeamManagement::findOrFail($id);             
        if($management->status == 1){
        $management->status =0;
        $msg =$management->update();
        if($msg){
            return back()->with('success','About Management Successfully Inactivated');
        }
        else{
            return back()->with('error','Oops! About Management Not Inactive');
        }
        }
        else{
        $management->status =1;
        $msg =$management->update();
        if($msg){
            return back()->with('success','About Management Successfully Activated');
        }
        else{
            return back()->with('error','Oops! About Management Not Activate');
        }
    
        }
    } 
}
