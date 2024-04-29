<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\HomeTestimony;
use Auth;
use Image;

class HomeTestimonyController extends Controller
{
    public function HomeTestimony() {
        $home_testimonys = HomeTestimony::latest()->get();
        return view('admin.home_testimony.index', compact('home_testimonys'));
    }

    public function AddHomeTestimony()  {
        // $home_testimonys = HomeTestimony::find($id);
        return view('admin.home_testimony.create');
      
    }


    public function StoreHomeTestimony(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:20',
            'profession' => 'required|max:20',
            'message' => 'required|max:200',
            'ptofile' => 'required|image|mimes:jpg,jpeg,png'
        ],
        [
            'name.required' => 'Please Input Testimony Name',
            'profession.required' => 'Please Input Testimony Profession',
            'message.required' => 'Please Input Testimony Message'
        ]);

        $slider_image = $request->file('ptofile');

    // $name_gen = hexdec(uniqid());
    // $img_ext = strtolower($brand_image->getClientOriginalExtension());
    // $img_name = $name_gen.'.'.$img_ext;
    // $up_location = 'storage/image/brand/';
    // $last_img = $up_location.$img_name;
    // $brand_image->move($up_location,$img_name);

    $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
    Image::make($slider_image)->resize(480,480)->save('storage/image/home_testimony/profile/'.$name_gen);

    $last_img = 'storage/image/home_testimony/profile/'.$name_gen;

    HomeTestimony::insert([
        'name' => $request->name,
        'profession' => $request->profession,
        'message' => $request->message,
        'ptofile' =>$last_img, 
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

    return Redirect()->route('home.testinomy')->with('success', 'Testinomy Added Successfully');
    }

    public function EditHomeTestimony($id)  {
        $home_testimonys = HomeTestimony::find($id);
        return view('admin.home_testimony.edit',compact('home_testimonys'));

    }


    public function UpdateHomeTestimony(Request $request, $id) {

        $old_image = $request->old_image;
    
        $slider_image = $request->file('ptofile');
    
        if($slider_image) {
    
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($slider_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'storage/image/home_testimony/profile/';
        $last_img = $up_location.$img_name;
        $slider_image->move($up_location,$img_name);
    
    
        unlink($old_image);
        HomeTestimony::find($id)->update([
            'name' => $request->name,
            'profession' => $request->profession,
            'message' => $request->message,
            'ptofile' =>$last_img, 
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
    
            return Redirect()->route('home.testinomy')->with('success', 'Testinomy Update Successfully');
    
    
        }else {
            HomeTestimony::find($id)->update([
                'name' => $request->name,
                'profession' => $request->profession,
                'message' => $request->message,
                // 'user_id' => Auth::user()->id,
                // 'user_name' => Auth::user()->name,
                'created_at' => Carbon::now()
            ]);
    
            return Redirect()->route('home.testinomy')->with('success', 'Testinomy Texts Update Successfully');
        }

    }

    public function DeleteHomeTestimony($id) {

        $image = HomeTestimony::find($id);
        $old_image = $image->ptofile;
        unlink($old_image);

        HomeTestimony::find($id)->forceDelete();
        return Redirect()->back()->with('success', 'Testinomy Permanently Deleted  Successfull');
    }

}
