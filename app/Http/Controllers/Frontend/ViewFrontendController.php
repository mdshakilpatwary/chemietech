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
use Illuminate\Http\Request;

class ViewFrontendController extends Controller
{
    public function homepage(){
        $products = Product::orderBy('id','desc')->get();
        return view('frontend.index', compact('products'));
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
    // expertise page 
    public function expertisePage(){
        $expertises = ExpertisePageElement::where('status','=',1)->get();

        return view('frontend.page.expertise',compact('expertises'));

    }
    // csr page 
    public function csrPage(){
        return view('frontend.page.csr');

    }
    // ccontactsr page 
    public function contactPage(){
        return view('frontend.page.contact');

    }

}
