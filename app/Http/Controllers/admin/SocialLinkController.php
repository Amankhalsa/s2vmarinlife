<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialLink;
use Auth;
use Illuminate\Support\Facades\DB;
class SocialLinkController extends Controller
{
    // View social links 
    public function view_social_links(){

        $data['get_social_links']=SocialLink::all();

        return view('backend.sociallinks.index',$data);

    }
    // ================ Add social links =====================
    public function store_social_links(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|unique:social_links',
            'links'=>'required' ,
     
     
        ],[
            'name.required' => 'ਓ ਮਾਮਾ ਖਾਲੀ ਨਾ ਛੱਡ',
            'links.required'=>'ਓ ਮਾਮਾ ਖਾਲੀ ਨਾ ਛੱਡ' ,
   
        ]);


        $data = new SocialLink();
        $data->user_id = Auth::user()->id;
        $data->name =$request->name;
        $data->links =$request->links;
        $data->save();

        return redirect()->route('view.social.links')->with('success','Social link inserted successfully');




    }
// ====================== Edit Socail link =========================
public function edit_social_link($id){

    $data['edit_link']=SocialLink::find($id);

    return view('backend.sociallinks.edit',$data);
}

// =================== update link ====================
public function update_social_link(Request $request, $id){

    $data=SocialLink::find($id);
    $data->user_id = Auth::user()->id;
    $data->name =$request->name;
    $data->links =$request->links;
    $data->save();
    $notification = array(
        'message' => 'Social link Updated successfully',
        'alert-type' => 'success'
    );
        return redirect()->route('view.social.links')->with($notification);

}
// =================== Delete link ====================

public function delete_social_link($id){

    
    $data=SocialLink::find($id)->delete();
    $notification = array(
        'message' => 'Social link Deleted successfully',
        'alert-type' => 'error'
    );
    return redirect()->route('view.social.links')->with($notification);



}


}
