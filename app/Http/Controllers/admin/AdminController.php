<?php

namespace App\Http\Controllers\admin;
use Auth;
use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //dashboard view 
    public function dashboard_view(){
      
        return view('backend.index');
  


    }
    
            // footer email stored
public function newsletter_reg(Request $request){
            
    $validated = $request->validate([
       'email' => 'required',
         
    ]);
        $data =new  Newsletter();
        $data->email = $request->email;
        $data->name = "client mail";
       $data->save();
// ---------------------
$notification = array(
    'message' => 'Thanks for subscribe',
    'alert-type' => 'success'
);
      return redirect()->back()->with($notification);
}

    //logout function 
    public function Logout(){
        Auth::logout();
        return redirect()->route('login');
    }
//================= View email page  =================
public function backend_email(){

    return view('backend.email.index');



}
//================= View compose email page  =================
public function compose_backend_email(){

    return view('backend.email.compose');



}
//================= View read  email page  =================
public function read_backend_email(){
    return view('backend.email.read');


}

//================= View profile  =================
public function view_profile(){
    return view('backend.profile.index');

}
}
