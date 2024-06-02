<?php

// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\PageBannerController;
use App\Http\Controllers\Backend\AboutMembershipController;
use App\Http\Controllers\Backend\AboutCertificationController;
use App\Http\Controllers\Backend\AboutManagementController;
use App\Http\Controllers\Backend\AboutTeamController;
use App\Http\Controllers\Backend\AboutPrincipalController;
use App\Http\Controllers\Backend\AboutClientController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProductCatController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\ProductSubCatController;
use App\Http\Controllers\Backend\CareerController;
use App\Http\Controllers\Backend\BusinessAreaController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\HomeElementcontroller;
use App\Http\Controllers\Backend\BannerSliderController;
// use App\Http\Controllers\Backend\MenuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This route used for only backend manage
|
*/



Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth','role:Admin','verified'])->name('dashboard');

// Route::middleware('auth','role:Admin')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


Route::middleware('guest')->group(function () {
    
    Route::controller(HomeController::class)->group(function () {
        Route::get('/admin', 'login')->name('admin.login');
        Route::get('/forget/password', 'forgatePass')->name('forgate.password');
        Route::post('/forget/password/email', 'forgatePassEmail')->name('forgate.password.email');
        Route::get('/reset/password/{id}', 'resetPass')->name('reset.password');
        Route::post('/update/password/{id}', 'updatePass')->name('update.password');
    });
    
});

// Home controller backend routing part start 
Route::middleware('auth','role:Admin')->group(function () {
 
    // Home route part controller group------- 01
    Route::controller(HomeController::class)->group(function () {
        Route::get('/admin/logout', 'logout')->name('admin.logout');
        Route::get('/site/info', 'siteInfo')->name('site.info');
        Route::post('/site/info/update/{type}', 'siteInfoUpdate')->name('site.info.update');
    });

    //admin profile route part controller group------- 02
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/admin/profile', 'index')->name('admin.profile');
        Route::post('/admin/profile/update/{id}', 'update')->name('admin.profile.update');
        Route::post('/change/password/{id}', 'changePassword')->name('change.password');
    });
    //common header banner route part controller group------- 03
    Route::controller(PageBannerController::class)->group(function () {
        Route::get('/header/info', 'index')->name('header.info');
        Route::post('/header/info/store', 'store')->name('header.info.store');
        Route::get('/header/info/manage', 'manage')->name('header.info.manage');
        Route::get('/header/info/edit/{id}', 'edit')->name('header.info.edit');
        Route::post('/header/info/update/{id}', 'update')->name('header.info.update');
        Route::get('/header/info/delete/{id}', 'delete')->name('header.info.delete');

    });


    //about Element route part controller group------- 05
    // ##################
    Route::controller(AboutMembershipController::class)->group(function () {
        // about membership element 
        Route::get('/about/membership/', 'index')->name('about.membership');
        Route::post('/about/membership/store', 'store')->name('about.membership.store');
        Route::get('/about/membership/manage', 'manage')->name('about.membership.manage');
        Route::get('/about/membership/edit/{id}', 'edit')->name('about.membership.edit');
        Route::get('/about/membership/delete/{id}', 'delete')->name('about.membership.delete');
        Route::post('/about/membership/update/{id}', 'update')->name('about.membership.update');
        Route::get('/about/membership/status/{id}', 'status')->name('about.membership.status');
    });
    // ##################
    Route::controller(AboutCertificationController::class)->group(function () {
        // about certification element 
        Route::get('/about/certification/', 'index')->name('about.certification');
        Route::post('/about/certification/store', 'store')->name('about.certification.store');
        Route::get('/about/certification/manage', 'manage')->name('about.certification.manage');
        Route::get('/about/certification/edit/{id}', 'edit')->name('about.certification.edit');
        Route::get('/about/certification/delete/{id}', 'delete')->name('about.certification.delete');
        Route::post('/about/certification/update/{id}', 'update')->name('about.certification.update');
        Route::get('/about/certification/status/{id}', 'status')->name('about.certification.status');
    });
    // ##################
    Route::controller(AboutTeamController::class)->group(function () {
        // about team element 
        Route::get('/about/team/', 'index')->name('about.team');
        Route::post('/about/team/store', 'store')->name('about.team.store');
        Route::get('/about/team/manage', 'manage')->name('about.team.manage');
        Route::get('/about/team/edit/{id}', 'edit')->name('about.team.edit');
        Route::get('/about/team/delete/{id}', 'delete')->name('about.team.delete');
        Route::post('/about/team/update/{id}', 'update')->name('about.team.update');
        Route::get('/about/team/status/{id}', 'status')->name('about.team.status');
    });
    // ##################
    Route::controller(AboutManagementController::class)->group(function () {
        // about management element 
        Route::get('/about/management/', 'index')->name('about.management');
        Route::post('/about/management/store', 'store')->name('about.management.store');
        Route::get('/about/management/manage', 'manage')->name('about.management.manage');
        Route::get('/about/management/edit/{id}', 'edit')->name('about.management.edit');
        Route::get('/about/management/delete/{id}', 'delete')->name('about.management.delete');
        Route::post('/about/management/update/{id}', 'update')->name('about.management.update');
        Route::get('/about/management/status/{id}', 'status')->name('about.management.status');
    });
    // ##################
    Route::controller(AboutPrincipalController::class)->group(function () {
        // about principal element 
        Route::get('/about/principal/', 'index')->name('about.principal');
        Route::post('/about/principal/store', 'store')->name('about.principal.store');
        Route::get('/about/principal/manage', 'manage')->name('about.principal.manage');
        Route::get('/about/principal/edit/{id}', 'edit')->name('about.principal.edit');
        Route::get('/about/principal/delete/{id}', 'delete')->name('about.principal.delete');
        Route::post('/about/principal/update/{id}', 'update')->name('about.principal.update');
        Route::get('/about/principal/status/{id}', 'status')->name('about.principal.status');
    });
    // ##################
    Route::controller(AboutClientController::class)->group(function () {
        // about client element 
        Route::get('/about/client/', 'index')->name('about.client');
        Route::post('/about/client/store', 'store')->name('about.client.store');
        Route::get('/about/client/manage', 'manage')->name('about.client.manage');
        Route::get('/about/client/edit/{id}', 'edit')->name('about.client.edit');
        Route::get('/about/client/delete/{id}', 'delete')->name('about.client.delete');
        Route::post('/about/client/update/{id}', 'update')->name('about.client.update');
        Route::get('/about/client/status/{id}', 'status')->name('about.client.status');

        // client category 
        Route::post('/about/clientcategory/store', 'storeCategory')->name('about.clientCategory.store');
        Route::post('/about/clientcategory/update/{id}', 'updateCategory')->name('about.clientCategory.update');
        Route::get('/about/clientcategory/manage', 'manageCategory')->name('about.clientCat.manage');
        Route::get('/about/clientcategory/delete/{id}', 'deleteCategory')->name('about.clientCat.delete');
        Route::get('/about/clientcategory/status/{id}', 'statusCategory')->name('about.clientCat.status');

    });

    // #############################
    //product route part controller group------- 06
    Route::controller(ProductController::class)->group(function () {
        Route::get('/product', 'index')->name('product');
        Route::post('/product/store', 'store')->name('product.store');
        Route::post('/product/update/{id}', 'update')->name('product.update');
        Route::get('/product/manage', 'manage')->name('product.manage');
        Route::get('/product/edit/{id}', 'edit')->name('product.edit');
        Route::get('/product/delete/{id}', 'delete')->name('product.delete');
        Route::get('/product/status/{id}', 'status')->name('product.status');
    });

    //product category route part controller group------- 07
    Route::controller(ProductCatController::class)->group(function () {
        Route::get('/category', 'index')->name('category');
        Route::post('/category/store', 'store')->name('category.store');
        Route::post('/category/update/{id}', 'update')->name('category.update');
        Route::get('/category/manage', 'manage')->name('category.manage');
        Route::get('/category/edit/{id}', 'edit')->name('category.edit');
        Route::get('/category/delete/{id}', 'delete')->name('category.delete');
        Route::get('/category/status/{id}', 'status')->name('category.status');
    });
   
    //product Subcategory route part controller group------- 08
    Route::controller(ProductSubCatController::class)->group(function () {
        Route::get('/subcategory', 'index')->name('subcategory');
        Route::post('/subcategory/store', 'store')->name('subcategory.store');
        Route::post('/subcategory/update/{id}', 'update')->name('subcategory.update');
        Route::get('/subcategory/manage', 'manage')->name('subcategory.manage');
        Route::get('/subcategory/edit/{id}', 'edit')->name('subcategory.edit');
        Route::get('/subcategory/delete/{id}', 'delete')->name('subcategory.delete');
        Route::get('/subcategory/status/{id}', 'status')->name('subcategory.status');
    });
    // business route part controller group------- 08
    Route::controller(BusinessAreaController::class)->group(function () {
        Route::get('/businessArea', 'index')->name('businessArea');
        Route::post('/businessArea/store', 'store')->name('businessArea.store');
        Route::post('/businessArea/update/{id}', 'update')->name('businessArea.update');
        Route::get('/businessArea/manage', 'manage')->name('businessArea.manage');
        Route::get('/businessArea/edit/{id}', 'edit')->name('businessArea.edit');
        Route::get('/businessArea/delete/{id}', 'delete')->name('businessArea.delete');
        Route::get('/businessArea/status/{id}', 'status')->name('businessArea.status');
    });

    // Testimonial route part controller group------- 
    Route::controller(TestimonialController::class)->group(function () {
        Route::get('/testimonial', 'index')->name('testimonial');
        Route::post('/testimonial/store', 'store')->name('testimonial.store');
        Route::post('/testimonial/update/{id}', 'update')->name('testimonial.update');
        Route::get('/testimonial/manage', 'manage')->name('testimonial.manage');
        Route::get('/testimonial/edit/{id}', 'edit')->name('testimonial.edit');
        Route::get('/testimonial/delete/{id}', 'delete')->name('testimonial.delete');
        Route::get('/testimonial/status/{id}', 'status')->name('testimonial.status');
    });
    // Banner Slider route part controller group------- 
    Route::controller(BannerSliderController::class)->group(function () {
        Route::get('/bannerSlider', 'index')->name('bannerSlider');
        Route::post('/bannerSlider/store', 'store')->name('bannerSlider.store');
        Route::post('/bannerSlider/update/{id}', 'update')->name('bannerSlider.update');
        Route::get('/bannerSlider/manage', 'manage')->name('bannerSlider.manage');
        Route::get('/bannerSlider/edit/{id}', 'edit')->name('bannerSlider.edit');
        Route::get('/bannerSlider/delete/{id}', 'delete')->name('bannerSlider.delete');
        Route::get('/bannerSlider/status/{id}', 'status')->name('bannerSlider.status');
    });
    //Career route part controller group------- 09
    Route::controller(CareerController::class)->group(function () {
        // career part 
        Route::get('/career', 'index')->name('career');
        Route::post('/career/store', 'store')->name('career.store');
        Route::post('/career/update/{id}', 'update')->name('career.update');
        Route::get('/career/manage', 'manage')->name('career.manage');
        Route::get('/career/edit/{id}', 'edit')->name('career.edit');
        Route::get('/career/delete/{id}', 'delete')->name('career.delete');
        Route::get('/career/status/{id}', 'status')->name('career.status');
        Route::get('/career/common', 'careerCommon')->name('career.common');

        Route::post('/career/common/update/{id}', 'updateCommon')->name('career.common.update');


    });

    
        //menubar route part controller group------- 12
    // Route::controller(MenuController::class)->group(function () {
    //     // manu part 
    //     Route::get('/header/menu', 'create')->name('menu.create');
    //     Route::post('/header/menu/update/{id}', 'update')->name('menu.update');
    //     Route::get('/header/menu/status/{id}', 'status')->name('header.menu.status');

    // });

     //News route part controller group------- 13
     Route::controller(NewsController::class)->group(function () {
        Route::get('/news', 'index')->name('news');
        Route::post('/news/store', 'store')->name('news.store');
        Route::post('/news/update/{id}', 'update')->name('news.update');
        Route::get('/news/manage', 'manage')->name('news.manage');
        Route::get('/news/edit/{id}', 'edit')->name('news.edit');
        Route::get('/news/delete/{id}', 'delete')->name('news.delete');
        Route::get('/news/gimage/delete/{id}', 'gimagedelete')->name('gimage.delete');
        Route::get('/news/status/{id}', 'status')->name('news.status');
    });
     //Home element part controller group------- 13
     Route::controller(HomeElementcontroller::class)->group(function () {
        Route::get('/home/about/element', 'aboutElement')->name('home.about.element');
        Route::post('/home/about/element/store', 'aboutElementStore')->name('home.about.element.store');
        Route::post('/home/about/element/update/{type}', 'aboutElementUpdate')->name('home.about.element.update');
        
        Route::get('/home/industrial/element', 'industrialElement')->name('home.industrial.element');   
        Route::get('/home/industrial/element/manage', 'industrialElementManage')->name('home.industrial.element.manage');   
        Route::post('/home/industrial/element/store', 'industrialElementStore')->name('home.industrial.element.store');
        Route::get('/home/industrial/element/delete/{id}', 'industrialElementDelete')->name('home.industrial.element.delete');
        Route::post('/home/industrial/element/update/{id}', 'industrialElementUpdate')->name('home.industrial.element.update');
        Route::get('/home/industrial/element/edit/{id}', 'industrialElementEdit')->name('home.industrial.element.edit');
        
        Route::get('/home/contact/element', 'contactElement')->name('home.contact.element');   
        Route::post('/home/contact/element/store', 'contactElementStore')->name('home.contact.element.store');
        Route::post('/home/contact/element/update/{type}', 'contactElementUpdate')->name('home.contact.element.update');
    });


});
// Home controller backend routing part end 



require __DIR__.'/auth.php';

include('frontend.php');

