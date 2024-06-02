<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CommonHeaderBanner;
use App\Models\Product;
use App\Models\ProductSubCat;
use App\Models\ClientCategory;
use App\Models\ProductCategory;
use App\Models\Career;
use App\Models\AboutPageElement;
use App\Models\careerCommonInfo;
use App\Models\NewsEvent;
use App\Models\BusinessArea;
use App\Models\Testimonial;
use App\Models\BannerSlider;
use Illuminate\Http\Request;

class ViewFrontendController extends Controller
{
    public function homepage(){
        $productCategories = ProductCategory::where('status',1)->orderBy('id','desc')->get();
        $newsevents = NewsEvent::where('status',1)->orderBy('id','desc')->take(3)->get();
        $testimonials = Testimonial::where('status',1)->orderBy('id','desc')->get();
        $bannerSliders = BannerSlider::where('status',1)->orderBy('id','desc')->get();
        return view('frontend.index', compact('productCategories','testimonials','newsevents','bannerSliders'));
    }
    public function aboutMembership(){
        $memberships =AboutPageElement::where('status',1)->where('type',1)->orderBy('id','desc')->get();
        return view('frontend.page.aboutmembership', compact('memberships'));
    }
    public function aboutPrincipal(){
        $principals =AboutPageElement::where('status',1)->where('type',3)->orderBy('id','desc')->get();
        return view('frontend.page.aboutprincipal', compact('principals'));
    }
    public function aboutClient(){
        $clientcats =ClientCategory::where('status',1)->orderBy('id','desc')->get();
        return view('frontend.page.aboutclient', compact('clientcats'));
    }
    public function aboutCertification(){
        $certifications =AboutPageElement::where('status',1)->where('type',2)->orderBy('id','desc')->get();

        return view('frontend.page.aboutcertification', compact('certifications'));
    }
    public function newsPage(){
        $newsevents =NewsEvent::where('status',1)->orderBy('id','desc')->paginate(9);

        return view('frontend.page.newsevent', compact('newsevents'));
    }
    public function singleNewsPage($slug){
        $newsevent =NewsEvent::where('slug',$slug)->where('status',1)->first();

        return view('frontend.page.singlenewsevent', compact('newsevent'));
    }

    // product page 
    public function productPage($id){
        $subcats = ProductSubCat::where('cat_id', $id)->where('status',1)->orderBy('id','desc')->get();
        $category =ProductCategory::findOrFail($id);
        return view('frontend.page.product',compact('subcats','category'));
    }

    // career page 
    public function careerPage(){
        $careers = Career::where('status','=',1)->orderBy('id','desc')->get();
        $careercommon = careerCommonInfo::where('type','=',1)->first();

        return view('frontend.page.career',compact('careers','careercommon'));
    }

    // Business Area page 01 
    public function businessArea1(){
        $businessArea = BusinessArea::where('type',1)->where('status',1)->orderBy('id','desc')->get();
        return view('frontend.page.businessArea1',compact('businessArea'));
    }
    // Business Area page 02
    public function businessArea2(){
        $businessArea = BusinessArea::where('type',2)->where('status',1)->orderBy('id','desc')->get();
        return view('frontend.page.businessArea2',compact('businessArea'));
    }
    // Business Area page 03
    public function businessArea3(){
        $businessArea = BusinessArea::where('type',3)->where('status',1)->orderBy('id','desc')->get();
        return view('frontend.page.businessArea3',compact('businessArea'));
    }
    // contact page 
    public function contactPage(){
        return view('frontend.page.contact');
    }

}
