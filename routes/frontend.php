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
    Route::get('/about/association & membership', 'aboutMembership')->name('about.membership.page');
    Route::get('/about/certifications', 'aboutCertification')->name('about.certification.page');
    Route::get('/about/our principal', 'aboutPrincipal')->name('about.principal.page');
    Route::get('/about/our client', 'aboutClient')->name('about.client.page');
    Route::get('/category-wise/product/{id}', 'productPage')->name('product.page');
    Route::get('/career/info', 'careerPage')->name('career.page');
    Route::get('/our/expertise', 'expertisePage')->name('expertise');
    Route::get('/csr', 'csrPage')->name('csr');
    Route::get('/contact', 'contactPage')->name('contact');

});

// Frontend route end 

?>
