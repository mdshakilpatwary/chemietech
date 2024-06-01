<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusinessArea;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use File;
class BusinessAreaController extends Controller
{
    public function index(){
        return view('backend.businessArea.index');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:180',
            'description' => 'required',
            'page' => 'required',
        ]);
        $businessArea =new BusinessArea;
        $businessArea->title = $request->title;
        $businessArea->type = $request->page;
        $businessArea->description = $request->description;
        $msg =$businessArea->save();
        if($msg){
            return redirect('/businessArea/manage')->with('success','Data Successfully Added');
        }
        else{
            return back()->with('error','Oops! Data Not Add.');
        }
    }

    public function manage(){
        $businessAreas =BusinessArea::orderBy('id','desc')->get();
        return view('backend.businessArea.manage',compact('businessAreas'));
    }

    public function edit($id){
        $businessArea =BusinessArea::findOrFail($id);
        return view('backend.businessArea.edit',compact('businessArea'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'title' => 'required|max:180',
            'description' => 'required',
        ]);
        $businessArea =BusinessArea::findOrFail($id);
        $businessArea->title = $request->title;
        $businessArea->description = $request->description;
        $msg =$businessArea->update();
        if($msg){
            return redirect('/businessArea/manage')->with('success','Data Successfully Updated');
        }
        else{
            return back()->with('error','Oops! Data Not Update.');
        }
        
    }
    public function delete($id){
        $businessArea =BusinessArea::findOrFail($id);
        $msg =$businessArea->delete();
        if($msg){
            return back()->with('success','Data Successfully Deleted');
        }
        else{
            return back()->with('error','Oops! Data Not Delete.');
        }
    }
    public function status($id){
        $businessArea =BusinessArea::findOrFail($id);
       if($businessArea->status == 1){
        $businessArea->status =0;
        $msg =$businessArea->update();
        if($msg){
            return back()->with('success','Status Successfully Inactivated');
        }
        else{
            return back()->with('error','Oops! Status Not Inactive');
        }
       }
       else{
        $businessArea->status =1;
        $msg =$businessArea->update();
        if($msg){
            return back()->with('success','Status Successfully Activated');
        }
        else{
            return back()->with('error','Oops! Status Not Activate');
        }

       }
    }
   
    

}
