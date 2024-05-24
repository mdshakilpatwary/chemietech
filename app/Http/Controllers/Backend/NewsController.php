<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GroupImage;
use App\Models\NewsEvent;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use File;
use Carbon\Carbon;
class NewsController extends Controller
{
    public function index(){
        return view('backend.news.index');
    }
    public function store(Request $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|max:200|unique:news_events,title',
            'group_image' => 'required',
            'group_image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|max:1200',
        ]);
        
        $imagePath = null;
        if($request->file('image')){
            $manager = new ImageManager(new Driver());
            $image = $request->file('image');
            $customName = 'product' . rand() . '.' . $image->getClientOriginalExtension();            
            $img = $manager->read($image)->resize(400,350);          
            $img->toPng(80)->save(public_path('uploads/news/'.$customName)); 
            $imagePath= 'uploads/news/'.$customName;
 
        }
        $msg = false;
        $newsid = NewsEvent::insertGetId([
            
            'title' =>$request->title,
            'slug' =>Str::slug($request->title).'_'.rand(),
            'description' =>$request->description,
            'image' =>$imagePath,
            'created_at' =>Carbon::now(),
            
        ]);
        // group image part 
        if($request->file('group_image')){
            $group_image = $request->file('group_image');
            foreach($group_image as $g_image){
                $groupImageManager = new ImageManager(new Driver());
                $customNameImage = 'newsImage' . rand() . '.' . $g_image->getClientOriginalExtension();
                $g_img = $groupImageManager->read($g_image)->resize(500,400);            
                $g_img->toJpeg(80)->save(public_path('uploads/news/'.$customNameImage)); 
                $group_image = new GroupImage;
                $group_image->news_id = $newsid;
                $group_image->group_image ='uploads/news/'.$customNameImage;
                $msg =$group_image->save();
            }
            
 
        }
        if($msg){
            return redirect('/news/manage')->with('success','News successfully added.');
        }
        else{
            return back()->with('error','Oops! News Not add.');
        }
    }

    // manage part 
    public function manage(){
        $newsevents =NewsEvent::orderBy('id','desc')->get();
        return view('backend.news.manage', compact('newsevents'));
    }
    // edit part 
    public function edit($id){
        $news =NewsEvent::findOrFail($id);
        $gImages =GroupImage::where('news_id',$id)->get();
        return view('backend.news.edit', compact('gImages','news'));
    }
    // update part 
    public function update(Request $request,$id){
        $news =NewsEvent::findOrFail($id);
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|max:200',
            'group_image' => 'nullable',
            'group_image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|max:1200',
        ]);
        $news->title = $request->title;
        $news->slug = Str::slug($request->title).'_'.rand();
        $news->description = $request->description;
        $news->updated_at = Carbon::now();
        if($request->file('image')){
            if(File::exists(public_path($news->image))){
                File::delete(public_path($news->image));
            }
            $manager = new ImageManager(new Driver());
            $image = $request->file('image');
            $customName = 'product' . rand() . '.' . $image->getClientOriginalExtension();            
            $img = $manager->read($image)->resize(400,350);          
            $img->toPng(80)->save(public_path('uploads/news/'.$customName)); 
            $imagePath= 'uploads/news/'.$customName;
            $news->image = $imagePath;

 
        }
        // group image part 
        if($request->file('group_image')){
            $group_image = $request->file('group_image');
            foreach($group_image as $g_image){
                $groupImageManager = new ImageManager(new Driver());
                $customNameImage = 'newsImage' . rand() . '.' . $g_image->getClientOriginalExtension();
                $g_img = $groupImageManager->read($g_image)->resize(500,400);            
                $g_img->toJpeg(80)->save(public_path('uploads/news/'.$customNameImage)); 
                $group_image = new GroupImage;
                $group_image->news_id = $id;
                $group_image->group_image ='uploads/news/'.$customNameImage;
                $group_image->save();
            }
        }

        $msg= $news->update();

        if($msg){
            return redirect('/news/manage')->with('success','News successfully Updated.');
        }
        else{
            return back()->with('error','Oops! News Not Update.');
        }

    }
    // delete part 
    public function delete($id){
        $news =NewsEvent::findOrFail($id);
        $gImages =GroupImage::where('news_id',$id)->get();
        $msg =$news->delete();
        if($msg){
            foreach($gImages as $gImage){
                
                $dmsg = $gImage->delete();
                if($dmsg){
                    if(File::exists(public_path($gImage->group_image))){
                        File::delete(public_path($gImage->group_image));
                    } 
                }

            }
            if(File::exists(public_path($news->image))){
                File::delete(public_path($news->image));
            }     
            return back()->with('success','News successfully Deleted.');
        }
        else{
            return back()->with('error','Oops! News Not Delete.');
        }

    }
    //group image delete part 
    public function gimagedelete($id){
        $gimage =GroupImage::findOrFail($id);
        $msg =$gimage->delete();
        if($msg){
           
            if(File::exists(public_path($gimage->group_image))){
                File::delete(public_path($gimage->group_image));
            }     
            return back()->with('success','Image successfully Deleted.');
        }
        else{
            return back()->with('error','Oops! Image Not Delete.');
        }

    }

    // product status
    public function status($id){
        $news =NewsEvent::findOrFail($id);
        if($news->status == 1){
        $news->status =0;
        $msg =$news->update();
        if($msg){
            return back()->with('success','News Successfully Inactivated');
        }
        else{
            return back()->with('error','Oops! News Not Inactive');
        }
        }
        else{
        $news->status =1;
        $msg =$news->update();
        if($msg){
            return back()->with('success','News Successfully Activated');
        }
        else{
            return back()->with('error','Oops! News Not Activate');
        }

        }
    }
}
