<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Slider;
use Auth;
use Image;

class SliderController extends Controller
{

    public function HomePage() {
        return view('home');
    }


    public function Slider() {
        $sliders = Slider::latest()->get();
        
        return view('admin.slider.index' , compact('sliders'));
    }

    public function AddSlider() {
        // $sliders = Slider::latest()->get();
         return view('admin.slider.create');
    }

    public function StoreSlider(Request $request) {
        $validatedData = $request->validate([
            'tittle' => 'required|unique:sliders|min:5',
            'image' => 'required|image|mimes:jpg,jpeg,png'
        ],
        [
            'tittle.required' => 'Please Input Slider Tittle'
        ]);

        $slider_image = $request->file('image');

    // $name_gen = hexdec(uniqid());
    // $img_ext = strtolower($brand_image->getClientOriginalExtension());
    // $img_name = $name_gen.'.'.$img_ext;
    // $up_location = 'storage/image/brand/';
    // $last_img = $up_location.$img_name;
    // $brand_image->move($up_location,$img_name);

    $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
    Image::make($slider_image)->resize(2000,1335)->save('storage/image/slider/'.$name_gen);

    $last_img = 'storage/image/slider/'.$name_gen;

    Slider::insert([
        'tittle' => $request->tittle,
        'discription' => $request->discription,
        'image' =>$last_img, 
        // 'id' => Slider::slider()->id,
        // 'user_name' => Auth::user()->name,
        'created_at' => Carbon::now()
    ]);

    // $category = new Category;
    // $category->category_name = $request->category_name;
    // $category->user_id = Auth::user()->id;
    // $category->save();

        // $data = array();
        // $data['category_name'] = $request->category_name;
        // $data['use_id'] = Auth::user()->id;
        // DB::table('categories')->insert($data);

    return Redirect()->route('home.slider')->with('success', 'Slider Added Successfully');
    }

    public function EditSlider($id)  {
        $sliders = Slider::find($id);
        return view('admin.slider.edit',compact('sliders'));

    }

    public function UpdateSlider(Request $request, $id) {

    $old_image = $request->old_image;

    $slider_image = $request->file('image');

    if($slider_image) {

    $name_gen = hexdec(uniqid());
    $img_ext = strtolower($slider_image->getClientOriginalExtension());
    $img_name = $name_gen.'.'.$img_ext;
    $up_location = 'storage/image/slider/';
    $last_img = $up_location.$img_name;
    $slider_image->move($up_location,$img_name);


    unlink($old_image);
    Slider::find($id)->update([
        'tittle' => $request->tittle,
        'discription' => $request->discription,
        'image' =>$last_img, 
        // 'user_id' => Auth::user()->id,
        // 'user_name' => Auth::user()->name,
        'created_at' => Carbon::now()
    ]);

    // $category = new Category;
    // $category->category_name = $request->category_name;
    // $category->user_id = Auth::user()->id;
    // $category->save();

        // $data = array();
        // $data['category_name'] = $request->category_name;
        // $data['use_id'] = Auth::user()->id;
        // DB::table('categories')->insert($data);

        return Redirect()->route('home.slider')->with('success', 'Slider Update Successfully');


    }else {
        Slider::find($id)->update([
            'tittle' => $request->tittle,
            'discription' => $request->discription,
            // 'user_id' => Auth::user()->id,
            // 'user_name' => Auth::user()->name,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('home.slider')->with('success', 'Slider Update Successfully');
    }

}

    public function DeleteSlider($id) {

        $image = Slider::find($id);
        $old_image = $image->image;
        unlink($old_image);

        Slider::find($id)->forceDelete();
        return Redirect()->back()->with('success', 'Slider Permanently Deleted  Successfull');
    }
    
   
   
}
