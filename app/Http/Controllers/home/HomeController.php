<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newsletter;
class HomeController extends Controller
{
    //
    public function homepage_view(){
        return view('frontend.index');
    }
    public function filters_psge_view(){
        return view('frontend.filter.aquarium_filters');
    }

    

}
