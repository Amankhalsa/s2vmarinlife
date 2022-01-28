<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Models\SocialLink;
use Illuminate\Support\Facades\DB;
class Home2Controller extends Controller
{
    //
    public function homepage2_view(){
 
        return view('frontend2.index');
    }

    //About us 
    public function aboutus(){
        return view('frontend2.aboutus.about');

    }

    public function shopnow(){
        return view('frontend2.shop.shopnow');

    }

    // product detail 
    public function product_details(){
        return view('frontend2.detail.productdetail');

    }
// Home page contact us 
    public function contact_us(){
        return view('frontend2.contact.contactus');

    }


    public function thankyou(){
        return view('frontend2.thankyou.thanks');

    }

    // cart 
    public function add_cart(){
        return view('frontend2.cart.cart');

    }

    public function checkout(){
        return view('frontend2.checkout.checkout');

    }
}
