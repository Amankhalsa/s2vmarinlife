<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\home\Home2Controller;
use App\Http\Controllers\admin\HomeSliderController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\SocialLinkController;







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
Route::get('/old', [Home2Controller::class,'homepage2_view'])->name('frontend.view');

Route::get('about', [Home2Controller::class,'aboutus'])->name('frontend.about');

Route::get('shop', [Home2Controller::class,'shopnow'])->name('frontend.shopnow');

Route::get('product/details', [Home2Controller::class,'product_details'])->name('frontend.pro_detail');

Route::get('contact-us', [Home2Controller::class,'contact_us'])->name('frontend.contactus');

Route::get('thanksyou', [Home2Controller::class,'thankyou'])->name('frontend.thanks');

Route::get('add/cart', [Home2Controller::class,'add_cart'])->name('frontend.cart');

Route::get('shop/checkout', [Home2Controller::class,'checkout'])->name('frontend.checkout');

// ============ 2nd frontend ============



Route::get('/', [HomeController::class,'homepage_view'])->name('homepage.view');
// aquarium-filters view
Route::get('/aquarium-filters', [HomeController::class,'filters_psge_view'])->name('filters_psge.view');

//newsletter route 
Route::post('/subscribed', [AdminController::class,'newsletter_reg'])->name('subscribed.reg');

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


// =====================================================================================================================================
// =====================================================================================================================================
//============= view email ===================
Route::get('/user/emails', [AdminController::class,'backend_email'])->name('backend.email');

//============ compose email from backedn ==================
Route::get('/compose/email', [AdminController::class,'compose_backend_email'])->name('composebackend.email');

//============= read_backend_email ===================
Route::get('/read/email', [AdminController::class,'read_backend_email'])->name('read.backend.email');

// ================= View profile ===================
Route::get('/view/profile', [AdminController::class,'view_profile'])->name('view.profile');



// =====================================================================================================================================
// =====================================================================================================================================

//========================= manage Social links ===========================
Route::get('/view/social-links', [SocialLinkController::class,'view_social_links'])->name('view.social.links');

Route::post('/stored/sociallink', [SocialLinkController::class,'store_social_links'])->name('store.social.link');

// =========================== edit link ================================
Route::get('/edit/sociallink/{id}', [SocialLinkController::class,'edit_social_link'])->name('edit.social.link');

//=============== update social links ==================
Route::post('/update/sociallink/{id}', [SocialLinkController::class,'update_social_link'])->name('update.social.link');

// ================ Delete links ===================

Route::get('/delete/sociallink/{id}', [SocialLinkController::class,'delete_social_link'])->name('delete.social.link');


// =====================================================================================================================================
// =====================================================================================================================================

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
// =====================================================================================================================================
// =====================================================================================================================================

// =====================================================================================================================================
// =====================================================================================================================================


//============== Manage home page contact detail ==============
Route::get('/add/contact', [ContactController::class,'add_contact_info'])->name('homepage.contact');
//==================== Contact and address ====================== 
Route::post('/store/contact', [ContactController::class,'add_Address'])->name('store.contact');

// ================== edit contact us ==================

Route::get('/edit/contact/{id}', [ContactController::class,'edit_contactus'])->name('edit.home.contact');

//================== update ==================
Route::post('/update/contact/{id}', [ContactController::class,'update_contactus'])->name('update.contact');

// =========================== Delete contact us data ===========================
Route::get('/delete/contact/{id}', [ContactController::class,'delete_contactus'])->name('delete.home.contact');



});
});
