<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPageElement;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use File;

class AboutMembershipController extends Controller
{
        // About membership story element
        public function index(){
            return view('backend.aboutElement.membership.index');
        }
        // About membership manage element
        public function manage(){
            $memberships = AboutPageElement::where('type','=',1)->orderBy('id','desc')->get();             

            return view('backend.aboutElement.membership.manage',compact('memberships'));
        }

        // About membership manage element

        public function store(Request $request){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'title' => 'required|max:200',
            ]);
            $membership=new AboutPageElement;
          
    
                if($request->file('image')){
                    $singlefiles = $request->file('image');
                    
                    $customnamefile='membership'.rand().'.'. $singlefiles->getClientOriginalExtension();                           
                    $manager = new ImageManager(new Driver());
                    $img = $manager->read($singlefiles);          
                    $img->toJpeg(80)->save(public_path('uploads/about/'.$customnamefile));
                         
                    $membership->image ='uploads/about/'.$customnamefile;
                    
                }
    
                $membership->type =1;
                $membership->title =$request->title;
                $msg = $membership->save();
    
                if($msg){
                    return redirect('/about/membership/manage')->with('success','Successfully about membership added.');
                }
                else{
                    return back()->with('error','Oops! About membership Not Add.');
                }
    
        }
    // edit part 
    public function edit($id){
        $membership = AboutPageElement::findOrFail($id);             
        return view('backend.aboutElement.membership.edit',compact('membership'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|max:200',
        ]);


        $membership = AboutPageElement::findOrFail($id);             
            // single image 
            if($request->file('image')){
                if(File::exists(public_path($membership->image))){
                    File::delete(public_path($membership->image));
                }
                $singlefiles = $request->file('image');
                
                $customnamefile='membership'.rand().'.'. $singlefiles->getClientOriginalExtension();                           
                $manager = new ImageManager(new Driver());
                $img = $manager->read($singlefiles);          
                $img->toJpeg(80)->save(public_path('uploads/about/'.$customnamefile));
                        
                
                $membership->image ='uploads/about/'.$customnamefile;
                
            }
            
        $membership->title =$request->title;

        $msg = $membership->update();

        if($msg){
            return redirect('/about/membership/manage')->with('success','Successfully about membership Updated.');
        }
        else{
            return back()->with('error','Oops! About membership Not Update.');
        }
    }

     // delete part 
     public function delete($id){
        $membership = AboutPageElement::findOrFail($id);             
        $msg =$membership->delete();
        if($msg){
            if(File::exists(public_path($membership->image))){
                File::delete(public_path($membership->image));
            }     
            return back()->with('success','About Membership Successfully Deleted.');
        }
        else{
            return back()->with('error','Oops! About Membership Not Delete.');
        }

    }

    // status part
    public function status($id){
        $membership = AboutPageElement::findOrFail($id);             
        if($membership->status == 1){
        $membership->status =0;
        $msg =$membership->update();
        if($msg){
            return back()->with('success','About Membership Successfully Inactivated');
        }
        else{
            return back()->with('error','Oops! About Membership Not Inactive');
        }
        }
        else{
        $membership->status =1;
        $msg =$membership->update();
        if($msg){
            return back()->with('success','About Membership Successfully Activated');
        }
        else{
            return back()->with('error','Oops! About Membership Not Activate');
        }

        }
    }     

}
