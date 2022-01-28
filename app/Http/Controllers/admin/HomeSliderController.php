<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Homeslider;
class HomeSliderController extends Controller
{
    ////admin page  all slider manage view 
    public function home_slider(){
        $data['get_home_slider']=Homeslider::all();
        return view('backend.slider.index',$data);

    }

    //add home page slider
    public function add_home_slider(Request $request){

        $validatedData = $request->validate([
            'title' => 'required|unique:homesliders',
            'boldtitle'=>'required' ,
            'subtitle'=>'required',
            'image'=>'required|',
            'alttag'=>'required',
     
        ],[
            'title.required' => 'ਓ ਮਾਮਾ ਖਾਲੀ ਨਾ ਛੱਡ',
            'boldtitle.required'=>'ਓ ਮਾਮਾ ਖਾਲੀ ਨਾ ਛੱਡ' ,
            'subtitle.required'=>'ਓ ਮਾਮਾ ਖਾਲੀ ਨਾ ਛੱਡ',
            'image.required'=>'ਓ ਮਾਮਾ ਖਾਲੀ ਨਾ ਛੱਡ',
            'alttag.required'=>'ਓ ਮਾਮਾ ਖਾਲੀ ਨਾ ਛੱਡ',
        ]);
    
        $data =new  Homeslider();
        $data->title = $request->title;
        $data->boldtitle = $request->boldtitle;
        $data->subtitle = $request->subtitle;
        $data->alttag = 'image of '. $request->alttag;
       
        // list end 
            if ($request->File('image')) {
            $file = $request->file('image');
            // @unlink(public_path('backend/images/slider/'.$data->image));

            $name_gen = hexdec(uniqid());
            $get_ext= strtolower($file->getClientOriginalExtension());
            $img_name=$name_gen.'.'.$get_ext;
            $image_location= 'backend/images/slider/';
            $last_img=$image_location.$img_name;
            $file->move($image_location,$img_name);
            $data['image']=$last_img;
            } //end if
            $data->save();
            return redirect()->route('homepage.slider')->with('success','Slider data inserted successfully');


    }

    //================ edit Home page slider ======================== 

    public function edit_home_slider($id){
        $data['edit_slider']=  Homeslider::find($id);
        return view('backend.slider.edit',$data);

    }
    //================ Update Home page slider ======================== 

        public function update_home_slider(Request $request, $id){

            $data =Homeslider::find($id);
            $data->title = $request->title;
            $data->boldtitle = $request->boldtitle;
            $data->subtitle = $request->subtitle;
            $data->alttag = 'image of '. $request->alttag;
           
            // list end 
                if ($request->File('image')) {
                $file = $request->file('image');
                // dd($data->image);
                @unlink($data->image);
                $name_gen = hexdec(uniqid());
                $get_ext= strtolower($file->getClientOriginalExtension());
                $img_name=$name_gen.'.'.$get_ext;
                $image_location= 'backend/images/slider/';
                $last_img=$image_location.$img_name;
                $file->move($image_location,$img_name);
                $data['image']=$last_img;
                } //end if
                $data->save();
                return redirect()->route('homepage.slider')->with('success','Slider data Updated successfully');


        }
    //================ delete Home page slider ======================== 

  public function delete_slider($id){

    $data =  Homeslider::find($id);
    @unlink($data->image);

    $data->delete();

    return redirect()->route('homepage.slider')->with('alert','Slider data Deleted successfully');


  }
}
