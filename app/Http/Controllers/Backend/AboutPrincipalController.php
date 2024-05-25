<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPageElement;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use File;

class AboutPrincipalController extends Controller
{
                // About principal story element
                public function index(){
                    return view('backend.aboutElement.principal.index');
                }
                // About principal manage element
                public function manage(){
                    $principals = AboutPageElement::where('type','=',3)->orderBy('id','desc')->get();             
        
                    return view('backend.aboutElement.principal.manage',compact('principals'));
                }
        
                // About principal manage element
        
                public function store(Request $request){
                    $request->validate([
                        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                        'title' => 'required|max:200',
                        'url' => 'nullable|url',
                    ]);
                    $principal=new AboutPageElement;
                  
            
                        if($request->file('image')){
                            $singlefiles = $request->file('image');
                            
                            $customnamefile='principal'.rand().'.'. $singlefiles->getClientOriginalExtension();                           
                            $manager = new ImageManager(new Driver());
                            $img = $manager->read($singlefiles);          
                            $img->toJpeg(80)->save(public_path('uploads/about/'.$customnamefile));
                                 
                            $principal->image ='uploads/about/'.$customnamefile;
                            
                        }
            
                        $principal->type =3;
                        $principal->title =$request->title;
                        $principal->url =$request->url;
                        $msg = $principal->save();
            
                        if($msg){
                            return redirect('/about/principal/manage')->with('success','Successfully about Principal added.');
                        }
                        else{
                            return back()->with('error','Oops! About Principal Not Add.');
                        }
            
                }
            // edit part 
            public function edit($id){
                $principal = AboutPageElement::findOrFail($id);             
                return view('backend.aboutElement.principal.edit',compact('principal'));
            }
            public function update(Request $request,$id){
                $request->validate([
                    'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                    'title' => 'required|max:200',
                    'url' => 'nullable|url',
                ]);
        
        
                $principal = AboutPageElement::findOrFail($id);             
                    // single image 
                    if($request->file('image')){
                        if(File::exists(public_path($principal->image))){
                            File::delete(public_path($principal->image));
                        }
                        $singlefiles = $request->file('image');
                        
                        $customnamefile='principal'.rand().'.'. $singlefiles->getClientOriginalExtension();                           
                        $manager = new ImageManager(new Driver());
                        $img = $manager->read($singlefiles);          
                        $img->toJpeg(80)->save(public_path('uploads/about/'.$customnamefile));
                                
                        
                        $principal->image ='uploads/about/'.$customnamefile;
                        
                    }
                    
                $principal->title =$request->title;
                $principal->url =$request->url;
        
                $msg = $principal->update();
        
                if($msg){
                    return redirect('/about/principal/manage')->with('success','Successfully about principal Updated.');
                }
                else{
                    return back()->with('error','Oops! About Principal Not Update.');
                }
            }
        
             // delete part 
             public function delete($id){
                $principal = AboutPageElement::findOrFail($id);             
                $msg =$principal->delete();
                if($msg){
                    if(File::exists(public_path($principal->image))){
                        File::delete(public_path($principal->image));
                    }     
                    return back()->with('success','About Principal Successfully Deleted.');
                }
                else{
                    return back()->with('error','Oops! About Principal Not Delete.');
                }
        
            }
        
            // status part
            public function status($id){
                $principal = AboutPageElement::findOrFail($id);             
                if($principal->status == 1){
                $principal->status =0;
                $msg =$principal->update();
                if($msg){
                    return back()->with('success','About Principal Successfully Inactivated');
                }
                else{
                    return back()->with('error','Oops! About Principal Not Inactive');
                }
                }
                else{
                $principal->status =1;
                $msg =$principal->update();
                if($msg){
                    return back()->with('success','About Principal Successfully Activated');
                }
                else{
                    return back()->with('error','Oops! About Principal Not Activate');
                }
        
                }
            } 
}
