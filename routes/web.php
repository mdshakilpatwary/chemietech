<?php

// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\PageBannerController;
use App\Http\Controllers\Backend\PageElementController;
use App\Http\Controllers\Backend\AboutMembershipController;
use App\Http\Controllers\Backend\AboutCertificationController;
use App\Http\Controllers\Backend\AboutPrincipalController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ProductCatController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\ProductSubCatController;
use App\Http\Controllers\Backend\ExpertisePageController;
use App\Http\Controllers\Backend\CareerController;
use App\Http\Controllers\Backend\CsrPageController;
use App\Http\Controllers\Backend\MenuController;
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
    //Page Element route part controller group------- 04
    Route::controller(PageElementController::class)->group(function () {
        // home industrial element 
        Route::get('/home/industrial/element', 'index')->name('home.industrial.element');
        Route::post('/home/industrial/element/store', 'store')->name('home.industrial.store');
        Route::post('/home/industrial/element/update/{id}', 'update')->name('home.industrial.update');
       
        // home client element 

        Route::get('/home/client/element', 'client')->name('home.client.element');
        Route::post('/home/client/element/store', 'clientStore')->name('home.client.element.store');
        Route::post('/home/client/element/update/{id}', 'clientUpdate')->name('home.client.element.update');


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

    //Expertise page route part controller group------- 10
    Route::controller(ExpertisePageController::class)->group(function () {
        // career part 
        Route::get('/expertise/element', 'index')->name('expertise.element');
        Route::post('/expertise/element/store', 'store')->name('expertise.element.store');
        Route::get('/expertise/element/manage', 'manage')->name('expertise.element.manage');
        Route::post('/expertise/element/update/{id}', 'update')->name('expertise.element.update');
        Route::get('/expertise/element/edit/{id}', 'edit')->name('expertise.element.edit');
        Route::get('/expertise/element/delete/{id}', 'delete')->name('expertise.element.delete');
        Route::get('/expertise/element/status/{id}', 'status')->name('expertise.element.status');

    });
    //Csr page route part controller group------- 11
    Route::controller(CsrPageController::class)->group(function () {
        // casr common part 
        Route::get('/csr/common', 'csrCommon')->name('csr.common');
        Route::post('/csr/common/store', 'csrCommonStore')->name('csr.common.store');
        Route::post('/csr/common/update/{id}', 'csrCommonUpdate')->name('csr.common.update');
        
        // csr raw meterial part

        Route::get('/csr/raw_maretial', 'csrRaw')->name('csr.raw_material');
        Route::post('/csr/raw_maretial/store', 'csrRawStore')->name('csr.raw_material.store');
        Route::post('/csr/raw_maretial/update/{id}', 'csrRawUpdate')->name('csr.raw_material.update');
        // csr pre-production part

        Route::get('/csr/pre_production', 'csrPreProduction')->name('csr.pre_production');
        Route::post('/csr/pre_production/store', 'csrPreProductionStore')->name('csr.pre_production.store');
        Route::post('/csr/pre_production/update/{id}', 'csrPreProductionUpdate')->name('csr.pre_production.update');
        // csr production part

        Route::get('/csr/production', 'csrProduction')->name('csr.production');
        Route::post('/csr/production/store', 'csrProductionStore')->name('csr.production.store');
        Route::post('/csr/production/update/{id}', 'csrProductionUpdate')->name('csr.production.update');


    });
    
        //menubar route part controller group------- 12
    Route::controller(MenuController::class)->group(function () {
        // manu part 
        Route::get('/header/menu', 'create')->name('menu.create');
        Route::post('/header/menu/update/{id}', 'update')->name('menu.update');
        Route::get('/header/menu/status/{id}', 'status')->name('header.menu.status');

    });

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


});
// Home controller backend routing part end 



require __DIR__.'/auth.php';

include('frontend.php');

