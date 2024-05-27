<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamManagement;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use File;

class AboutTeamController extends Controller
{
    // About team story element
    public function index(){
        return view('backend.aboutElement.team.index');
    }
    // About team manage element
    public function manage(){
        $teams = TeamManagement::where('type','=',1)->orderBy('id','desc')->get();             

        return view('backend.aboutElement.team.manage',compact('teams'));
    }

    // About team manage element

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
        $team=new TeamManagement;
        

            if($request->file('image')){
                $singlefiles = $request->file('image');
                
                $customnamefile='team'.rand().'.'. $singlefiles->getClientOriginalExtension();                           
                $manager = new ImageManager(new Driver());
                $img = $manager->read($singlefiles)->resize(350,300);          
                $img->toJpeg(80)->save(public_path('uploads/about/'.$customnamefile));
                        
                $team->image ='uploads/about/'.$customnamefile;
                
            }

            $team->type =1;
            $team->name =$request->name;
            $team->title =$request->title;
            $team->facebook =$request->facebook;
            $team->twitter =$request->twitter;
            $team->instagram =$request->instagram;
            $team->linkedin =$request->linkedin;
            $msg = $team->save();

            if($msg){
                return redirect('/about/team/manage')->with('success','Successfully about team added.');
            }
            else{
                return back()->with('error','Oops! About Team Not Add.');
            }

    }
// edit part 
public function edit($id){
    $team = TeamManagement::findOrFail($id);             
    return view('backend.aboutElement.team.edit',compact('team'));
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


    $team = TeamManagement::findOrFail($id);             
        // single image 
        if($request->file('image')){
            if(File::exists(public_path($team->image))){
                File::delete(public_path($team->image));
            }
            $singlefiles = $request->file('image');
            
            $customnamefile='team'.rand().'.'. $singlefiles->getClientOriginalExtension();                           
            $manager = new ImageManager(new Driver());
            $img = $manager->read($singlefiles)->resize(350,300);          
            $img->toJpeg(80)->save(public_path('uploads/about/'.$customnamefile));
                    
            
            $team->image ='uploads/about/'.$customnamefile;
            
        }
        
        $team->name =$request->name;
        $team->title =$request->title;
        $team->facebook =$request->facebook;
        $team->twitter =$request->twitter;
        $team->instagram =$request->instagram;
        $team->linkedin =$request->linkedin;

    $msg = $team->update();

    if($msg){
        return redirect('/about/team/manage')->with('success','Successfully About Team Updated.');
    }
    else{
        return back()->with('error','Oops! About Team Not Update.');
    }
}

    // delete part 
    public function delete($id){
    $team = TeamManagement::findOrFail($id);             
    $msg =$team->delete();
    if($msg){
        if(File::exists(public_path($team->image))){
            File::delete(public_path($team->image));
        }     
        return back()->with('success','About Team Successfully Deleted.');
    }
    else{
        return back()->with('error','Oops! About Team Not Delete.');
    }

}

// status part
public function status($id){
    $team = TeamManagement::findOrFail($id);             
    if($team->status == 1){
    $team->status =0;
    $msg =$team->update();
    if($msg){
        return back()->with('success','About Team Successfully Inactivated');
    }
    else{
        return back()->with('error','Oops! About Team Not Inactive');
    }
    }
    else{
    $team->status =1;
    $msg =$team->update();
    if($msg){
        return back()->with('success','About Team Successfully Activated');
    }
    else{
        return back()->with('error','Oops! About Team Not Activate');
    }

    }
} 


}
