<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserContactInformation;
use App\Models\NewsLetter;
use Carbon\Carbon;

class UserContactController extends Controller
{
    public function userContactManage(){
        $userContacts =UserContactInformation::orderBy('id','desc')->get();
        return view('backend.userContactManage',compact('userContacts'));
    }

    public function userContactStore(Request $request){
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|max:50',
            'phone' => 'required|numeric|digits_between:10,16',
            'subject' => 'required|max:180',
            'message' => 'required|max:300',
        ]);
        $userContact = new UserContactInformation;
        $userContact->name = $request->name;
        $userContact->email = $request->email;
        $userContact->phone = $request->phone;
        $userContact->subject = $request->subject;
        $userContact->message = $request->message;
        $userContact->created_at = Carbon::now();
        $msg =$userContact->save();
        if($msg){
            return back()->with('success','Successfully Your Data Submitted.');
        }
        else{
            return back()->with('error','Oops! Your Data Not Submit Please Try Again.');
        }
    }
    public function userContactDelete($id){
        $userContact =UserContactInformation::findOrFail($id);
        $msg=$userContact->delete();
        if($msg){
            return back()->with('success','Successfully Deleted.');
        }
        else{
            return back()->with('error','Oops!Data Not Delete.');
        }
    }


    // news letter 

    public function newsLetterManage(){
        $newsletters =NewsLetter::orderBy('id','desc')->get();
        return view('backend.newsLetter',compact('newsletters'));
    }
    
    public function newsLetterStore(Request $request){
        $request->validate([
            'email' => 'required|email|max:50',
            
        ]);
        $newsLetter = new NewsLetter;
        $newsLetter->email = $request->email;
        $newsLetter->created_at = Carbon::now();
        $msg =$newsLetter->save();
        if($msg){
            return back()->with('success','Successfully Your Data Submitted.');
        }
        else{
            return back()->with('error','Oops! Your Email Not Submit Please Try Again.');
        }
    }

    public function newsLetterDelete($id){
        $newsLetter =NewsLetter::findOrFail($id);
        $msg=$newsLetter->delete();
        if($msg){
            return back()->with('success','Successfully Deleted.');
        }
        else{
            return back()->with('error','Oops!Data Not Delete.');
        }
    }
}
