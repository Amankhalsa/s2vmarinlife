<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Homeslider;
use App\Models\Contactu;
class ContactController extends Controller
{
//================== view contact  ==================
    public function add_contact_info(){
        $data['get_contact']=Contactu::all();
        return view('backend.contact.index',$data);
    }

//================== add contact  ==================

public function add_Address(Request $request){
    $validatedData = $request->validate([
    'address' => 'required|unique:contactus',
    'email'=>'required',
    'phone'=>'required|',

],[
    'address.required' => 'ਓ ਮਾਮਾ ਖਾਲੀ ਨਾ ਛੱਡ',
    'email.required'=> 'ਓ ਮਾਮਾ ਖਾਲੀ ਨਾ ਛੱਡ' ,
    'phone.required'=> 'ਓ ਮਾਮਾ ਖਾਲੀ ਨਾ ਛੱਡ',

]);


        $data =new  Contactu();
        $data->address = $request->address;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->save();
        return redirect()->route('homepage.contact')->with('success','Contact us data inserted successfully');
}


// ================= Edit Contact data =================
public function edit_contactus($id){

    $data['edit_contactus']=Contactu::find($id);
    return view('backend.contact.edit',$data);

}
public function update_contactus(Request $request, $id){
    $data =  Contactu::find($id);
    $data->address = $request->address;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->save();
    return redirect()->route('homepage.contact')->with('success','Contact us data Updated successfully');

}

//================= Delete contact us ===================

public function delete_contactus($id){

    $data=Contactu::find($id)->delete();
    return redirect()->route('homepage.contact')->with('alert','Data Deleted successfully');


}
// ========================= ================================

}
