<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePageElement;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use File;

class HomeElementcontroller extends Controller
{
    public function aboutElement(){
        return view('backend.homeElement.aboutElement');
    }

    // homeAbout store 
    public function aboutElementStore(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1048',
            'title' => 'required|max:150',
            'description' => 'nullable|max:2000',
        ]);

        $homeAbout = new HomePageElement;
        $homeAbout->title = $request->title;
        $homeAbout->type = 1;
        $homeAbout->description = $request->description;


        if($request->file('image')){
            $file = $request->file('image');
            
            $customname='homeAbout'.rand().'.'. $file->getClientOriginalExtension();                           
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file);          
            $img->toJpeg(80)->save(public_path('uploads/homeElement/'.$customname));
                 
            $homeAbout->image ='uploads/homeElement/'.$customname;
            
        }
        $msg =$homeAbout->save();
        if($msg){
            return back()->with('success','Successfully homeAbout added.');
        }
        else{
            return back()->with('error','Oops! homeAbout Not Add.');
        }

    }

    // Update homeAbout 
    public function aboutElementUpdate(Request $request, $type){
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1048',
            'title' => 'required|max:150',
            'description' => 'required|max:2000',
        ]);

        $homeAbout =HomePageElement::where('type',$type)->first();
        $homeAbout->title = $request->title;
        $homeAbout->description = $request->description;


        if($request->file('image')){
            if(File::exists(public_path($homeAbout->image))){
                File::delete(public_path($homeAbout->image));
            }
            $file = $request->file('image');
            
            $customname='homeAbout'.rand().'.'. $file->getClientOriginalExtension();                           
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file);          
            $img->toJpeg(80)->save(public_path('uploads/homeElement/'.$customname));
                 
            $homeAbout->image ='uploads/homeElement/'.$customname;
            
        }
        $msg =$homeAbout->update();
        if($msg){
            return back()->with('success','Successfully homeAbout Updated.');
        }
        else{
            return back()->with('error','Oops! homeAbout Not Update.');
        }
    }
    
// *************************

    // industrial element part start
    public function industrialElement(){
        return view('backend.homeElement.industrialElement');
    }
    // manage 
    public function industrialElementManage(){
        return view('backend.homeElement.industrialElementManage');
    }
        
    
        // industrial store 
        public function industrialElementStore(Request $request){

            $request->validate([
                'image' => 'required',
                'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'title' => 'required|max:150',
            ]);
            $msg = false;
            $titles = $request->title;
            $images = $request->file('image');
            foreach($titles as $index => $title){
                $homeIndustrial = new HomePageElement;
                $homeIndustrial->title = $title;
                $homeIndustrial->type = 2;
                $file = $images[$index];

               if($file ==true){
                $customname='industrial'.rand().'.'. $file->getClientOriginalExtension();                           
                $manager = new ImageManager(new Driver());
                $img = $manager->read($file)->resize(150,120);          
                $img->toJpeg(80)->save(public_path('uploads/homeElement/'.$customname));
                     
                $homeIndustrial->image ='uploads/homeElement/'.$customname;
               }
               $msg =$homeIndustrial->save();

            }
    
           
            if($msg == true){
                return redirect('/home/industrial/element/manage')->with('success','Successfully home industrial added.');
            }
            else{
                return back()->with('error','Oops! home industrial Not Add.');
            }
    
        }
    
    // Update homeIndustrial 
    public function industrialElementUpdate(Request $request, $id){
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1048',
            'title' => 'required|max:150',
        ]);

        $industrial = HomePageElement::findOrFail($id);             
        $industrial->title = $request->title;       
        if($request->file('image')){
            if(File::exists(public_path($industrial->image))){
                File::delete(public_path($industrial->image));
            }
            $file = $request->file('image');
            
            $customname='industrial'.rand().'.'. $file->getClientOriginalExtension();                           
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file)->resize(150,120);          
            $img->toJpeg(80)->save(public_path('uploads/homeElement/'.$customname));
                    
            $industrial->image ='uploads/homeElement/'.$customname;
            
        }
        $msg =$industrial->update();
        if($msg ){
            return redirect('/home/industrial/element/manage')->with('success','Successfully home Industrial Updated.');
        }
        else{
            return back()->with('error','Oops! home Industrial Not Update.');
        }
    }

    // edit
    public function industrialElementEdit($id){
        $industrial = HomePageElement::findOrFail($id);             

        return view('backend.homeElement.industrialElementEdit', compact('industrial'));
    }

    // industrial delete 
    public function industrialElementDelete($id){
        $homeIndustrial = HomePageElement::findOrFail($id);             
        $msg =$homeIndustrial->delete();
        if($msg){
            if(File::exists(public_path($homeIndustrial->image))){
                File::delete(public_path($homeIndustrial->image));
            }     
            return back()->with('success','Industrial Successfully Deleted.');
        }
        else{
            return back()->with('error','Oops! Industrial Not Delete.');
        }
    }

// ******************

    // contact element start 
    public function contactElement(){
        return view('backend.homeElement.contactElement');
    }

    // home contact store 
    public function contactElementStore(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:1048',
            'title' => 'required|max:150',
            'description' => 'nullable|max:500',
        ]);

        $homeContact = new HomePageElement;
        $homeContact->title = $request->title;
        $homeContact->type = 3;
        $homeContact->description = $request->description;


        if($request->file('image')){
            $file = $request->file('image');
            
            $customname='homeContact'.rand().'.'. $file->getClientOriginalExtension();                           
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file);          
            $img->toJpeg(80)->save(public_path('uploads/homeElement/'.$customname));
                 
            $homeContact->image ='uploads/homeElement/'.$customname;
            
        }
        $msg =$homeContact->save();
        if($msg){
            return back()->with('success','Successfully home Contact added.');
        }
        else{
            return back()->with('error','Oops! homeAbout Not Add.');
        }

    }

    // Update  
    public function contactElementUpdate(Request $request, $type){
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1048',
            'title' => 'required|max:150',
            'description' => 'required|max:500',
        ]);

        $homeContact =HomePageElement::where('type',$type)->first();
        $homeContact->title = $request->title;
        $homeContact->description = $request->description;


        if($request->file('image')){
            if(File::exists(public_path($homeContact->image))){
                File::delete(public_path($homeContact->image));
            }
            $file = $request->file('image');
            
            $customname='homeContact'.rand().'.'. $file->getClientOriginalExtension();                           
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file);          
            $img->toJpeg(80)->save(public_path('uploads/homeElement/'.$customname));
                 
            $homeContact->image ='uploads/homeElement/'.$customname;
            
        }
        $msg =$homeContact->update();
        if($msg){
            return back()->with('success','Successfully home Contact Updated.');
        }
        else{
            return back()->with('error','Oops! home Contact Not Update.');
        }
    }


}
