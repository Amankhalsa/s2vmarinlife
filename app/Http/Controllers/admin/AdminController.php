<?php

namespace App\Http\Controllers\admin;
use Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //dashboard view 
    public function dashboard_view(){
      
        return view('backend.index');
  


    }

    //logout function 
    public function Logout(){
        Auth::logout();
        return redirect()->route('login');
    }
//================= Add slider =================


}
