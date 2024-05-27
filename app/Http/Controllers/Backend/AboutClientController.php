<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientCategory;
use App\Models\Client;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use File;

class AboutClientController extends Controller
{
            // About client element
            public function index(){
                $clientCats = ClientCategory::where('status', 1)->orderBy('id','desc')->get();
                return view('backend.aboutElement.client.index',compact('clientCats'));
            }
            // About client manage element
            public function manage(){
                $clients = Client::all();             
    
                return view('backend.aboutElement.client.manage',compact('clients'));
            }
    
            // About client store element
    
            public function store(Request $request){
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                    'category' => 'required',
                ]);
                $client=new Client;
              
        
                    if($request->file('image')){
                        $singlefiles = $request->file('image');
                        
                        $customnamefile='client'.rand().'.'. $singlefiles->getClientOriginalExtension();                           
                        $manager = new ImageManager(new Driver());
                        $img = $manager->read($singlefiles)->resize(400,350);          
                        $img->toJpeg(80)->save(public_path('uploads/about/'.$customnamefile));
                             
                        $client->image ='uploads/about/'.$customnamefile;
                        
                    }
        
                    $client->clientCat_id =$request->category;
                    $msg = $client->save();
        
                    if($msg){
                        return redirect('/about/client/manage')->with('success','Successfully about client Added.');
                    }
                    else{
                        return back()->with('error','Oops! About Client Not Add.');
                    }
        
            }
        // edit part 
        public function edit($id){
            $clientCats = ClientCategory::where('status', 1)->orderBy('id','desc')->get();
            $client = Client::findOrFail($id);             
            return view('backend.aboutElement.client.edit',compact('client','clientCats'));
        }
        public function update(Request $request,$id){
            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'category' => 'required',
            ]);
    
    
            $client = Client::findOrFail($id);             
                // single image 
                if($request->file('image')){
                    if(File::exists(public_path($client->image))){
                        File::delete(public_path($client->image));
                    }
                    $singlefiles = $request->file('image');
                    
                    $customnamefile='client'.rand().'.'. $singlefiles->getClientOriginalExtension();                           
                    $manager = new ImageManager(new Driver());
                    $img = $manager->read($singlefiles)->resize(400,350);          
                    $img->toJpeg(80)->save(public_path('uploads/about/'.$customnamefile));
                            
                    
                    $client->image ='uploads/about/'.$customnamefile;
                    
                }
                
            $client->clientCat_id =$request->category;
    
            $msg = $client->update();
    
            if($msg){
                return redirect('/about/client/manage')->with('success','Successfully about Client Updated.');
            }
            else{
                return back()->with('error','Oops! About Client Not Update.');
            }
        }
    
         // delete part 
         public function delete($id){
            $client = Client::findOrFail($id);             
            $msg =$client->delete();
            if($msg){
                if(File::exists(public_path($client->image))){
                    File::delete(public_path($client->image));
                }     
                return back()->with('success','About client Successfully Deleted.');
            }
            else{
                return back()->with('error','Oops! About client Not Delete.');
            }
    
        }
    
        // status part
        public function status($id){
            $client = Client::findOrFail($id);             
            if($client->status == 1){
            $client->status =0;
            $msg =$client->update();
            if($msg){
                return back()->with('success','About Client Successfully Inactivated');
            }
            else{
                return back()->with('error','Oops! About client Not Inactive');
            }
            }
            else{
            $client->status =1;
            $msg =$client->update();
            if($msg){
                return back()->with('success','About Client Successfully Activated');
            }
            else{
                return back()->with('error','Oops! About Client Not Activate');
            }
    
            }
        } 


    // client category part 


    public function storeCategory(Request $request){
        $request->validate([
            'name' => 'required|max:50',
        ]);
        $clientcat=new ClientCategory;


            $clientcat->name =$request->name;
            $msg = $clientcat->save();

            if($msg){
                return back()->with('success','Successfully Client Category Added.');
            }
            else{
                return back()->with('error','Oops! Client Category Not Add.');
            }
    }

// manage 
    public function manageCategory(){
        $clientCats = ClientCategory::all();             
    
        return view('backend.aboutElement.client.clientCategory',compact('clientCats'));
    }
    // delete 
    public function deleteCategory($id){
        // Check if there are related product
        $client = Client::where('clientCat_id', $id)->count();

        if ($client > 0) {
            return redirect()->back()->with('error', 'Cannot delete the Calient Category because it has related Client.');
        }
        else{
            $clientCat = ClientCategory::findOrFail($id);             
        $msg =$clientCat->delete();
        if($msg){
            return back()->with('success','Successfully Deleted.');
        }
        else{
            return back()->with('error','Oops! SubCategory Not Delete.');
        }
        }
    }

    // update 
    public function updateCategory(Request $request, $id){
        $request->validate([
            'name' => 'required|max:50',
        ]);
        $clientcat=ClientCategory::findOrFail($id);


            $clientcat->name =$request->name;
            $msg = $clientcat->update();

            if($msg){
                return back()->with('success','Successfully Client Category Updated.');
            }
            else{
                return back()->with('error','Oops! Client Category Not Update.');
            }
    }

    // status 
    public function statusCategory($id){
        $clientCat = ClientCategory::findOrFail($id);             
        if($clientCat->status == 1){
            $clientCat->status =0;
            $msg =$clientCat->update();
            if($msg){
                return back()->with('success','About Client Category Successfully Inactivated');
            }
            else{
                return back()->with('error','Oops! About Client Category Not Inactive');
            }
            }
            else{
            $clientCat->status =1;
            $msg =$clientCat->update();
            if($msg){
                return back()->with('success','About Client Category Successfully Activated');
            }
            else{
                return back()->with('error','Oops! About Client Category Not Activate');
            }
    
            }
    }





}
