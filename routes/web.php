<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\home\Home2Controller;
use App\Http\Controllers\admin\HomeSliderController;
use App\Http\Controllers\admin\AdminController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.index');
// });
// ============ 2nd frontend ============
Route::get('/', [Home2Controller::class,'homepage2_view'])->name('frontend.view');

Route::get('about', [Home2Controller::class,'aboutus'])->name('frontend.about');

Route::get('shop', [Home2Controller::class,'shopnow'])->name('frontend.shopnow');

Route::get('product/details', [Home2Controller::class,'product_details'])->name('frontend.pro_detail');

Route::get('contact-us', [Home2Controller::class,'contact_us'])->name('frontend.contactus');

Route::get('thanksyou', [Home2Controller::class,'thankyou'])->name('frontend.thanks');

Route::get('add/cart', [Home2Controller::class,'add_cart'])->name('frontend.cart');

Route::get('shop/checkout', [Home2Controller::class,'checkout'])->name('frontend.checkout');

// ============ 2nd frontend ============



// Route::get('/', [HomeController::class,'homepage_view'])->name('homepage.view');
// aquarium-filters view
Route::get('/aquarium-filters', [HomeController::class,'filters_psge_view'])->name('filters_psge.view');

//newsletter route 
Route::post('/subscribed', [HomeController::class,'newsletter_reg'])->name('subscribed.reg');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // return view('dashboard');
    return redirect()->route('dashboard.view');
})->name('dashboard');
// =======================
//middle ware 
Route::group(['middleware'=>'auth'],function (){
    //prefix 
    Route::prefix('admin')->group(function(){

Route::get('/dashboard/view', [AdminController::class,'dashboard_view'])->name('dashboard.view');

Route::get('/users', [AdminController::class,'Logout'])->name('user.logout');

// ================ manage home page  slider ================

Route::get('/home/slider', [HomeSliderController::class,'home_slider'])->name('homepage.slider');


//============== store home page slider  ==============

Route::post('/store/slider', [HomeSliderController::class,'add_home_slider'])->name('store.home.slider');

//============== Edit home page slider  ==============
Route::get('/edit/slider/{id}', [HomeSliderController::class,'edit_home_slider'])->name('edit.home.slider');

//============== update home page slider  ==============
Route::post('/update/slider/{id}', [HomeSliderController::class,'update_home_slider'])->name('update.home.slider');


// ================== delete home slider =======================
Route::get('/delete/slider/{id}', [HomeSliderController::class,'delete_slider'])->name('delete.home.slider');


//============== Manage home page contact detail ==============
Route::post('/add/contact', [HomeSliderController::class,'add_contact_info'])->name('homepage.contact');

 
});
});
