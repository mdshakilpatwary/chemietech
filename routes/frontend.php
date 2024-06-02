<?php

// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\ViewFrontendController;
use App\Http\Controllers\Frontend\UserContactController;
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
    Route::get('/news & events', 'newsPage')->name('news.page');
    Route::get('/news & event/{slug}', 'singleNewsPage')->name('single.news.page');
    Route::get('/career/info', 'careerPage')->name('career.page');
    Route::get('/our/expertise', 'expertisePage')->name('expertise');
    Route::get('/csr', 'csrPage')->name('csr');
    Route::get('/contact', 'contactPage')->name('contact.page');
    Route::get('/Representation of Foreign Partner', 'businessArea1')->name('businessArea1.page');
    Route::get('/import for local stock of supply', 'businessArea2')->name('businessArea2.page');
    Route::get('/technical solution of consultancy', 'businessArea3')->name('businessArea3.page');

});
Route::controller(UserContactController::class)->group(function () {
    Route::post('/user/contact/store', 'userContactStore')->name('user.contact.store');
    Route::post('/news/letter/store', 'newsLetterStore')->name('news.letter.store');

});

// Frontend route end 

?>
