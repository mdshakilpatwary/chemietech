<?php

// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\ViewFrontendController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend route start 

Route::controller(ViewFrontendController::class)->group(function () {
    Route::get('/', 'homepage')->name('homepage');
    Route::get('/about', 'aboutpage')->name('about.page');
    Route::get('/product/{id}', 'productSinglePage')->name('product.single');
    Route::get('/our/product', 'productPage')->name('our.product');
    Route::get('/career/info', 'careerPage')->name('career.page');
    Route::get('/our/expertise', 'expertisePage')->name('expertise');
    Route::get('/csr', 'csrPage')->name('csr');
    Route::get('/contact', 'contactPage')->name('contact');

});

// Frontend route end 

?>