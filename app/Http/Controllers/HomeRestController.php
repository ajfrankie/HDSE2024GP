<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\HomeRest;
use Auth;
use Image;

class HomeRestController extends Controller
{
    public function HomeRest() {
        $home_rests = HomeRest::latest()->get();
        return view('admin.home_rest.index', compact('home_rests'));
    }

    public function AddHomeRest()  {
        // $home_rests = HomeRest::find($id);
        return view('admin.home_rest.create');
      
    }

    public function StoreHomeRest(Request $request) {
        $validatedData = $request->validate([
            'tittle' => 'required|max:40',
            'price' => 'required|max:10',
            'short_dis' => 'required|max:100',
            'image' => 'required|image|mimes:jpg,jpeg,png',
        ],
        [
            'tittle.required' => 'Please Input Slider Tittle'
        ]);

        $slider_image1 = $request->file('image');

        $name_gen1 = hexdec(uniqid()).'.'.$slider_image1->getClientOriginalExtension();
        Image::make($slider_image1)->resize(800,530)->save('storage/image/home_rest/'.$name_gen1);
        $last_img1 = 'storage/image/home_rest/'.$name_gen1;

        HomeRest::insert([
            'tittle' => $request->tittle,
            'price' => $request->price,
            'short_dis' => $request->short_dis,
            'image' =>$last_img1,
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

        return Redirect()->route('home.rest')->with('success', 'Home Restaurant Added Successfully');
    }

    public function EditHomeRest($id)  {
        $home_rests = HomeRest::find($id);
        return view('admin.home_rest.edit',compact('home_rests'));

    }

    public function UpdateHomeRest(Request $request, $id) {


        $old_image_1 = $request->old_image_1;

        $slider_image_1 = $request->file('image');

        if($slider_image_1) {

        $name_gen1 = hexdec(uniqid());
        $img_ext1 = strtolower($slider_image_1->getClientOriginalExtension());
        $img_name1 = $name_gen1.'.'.$img_ext1;
        $up_location1 = 'storage/image/home_rest/';
        $last_img1 = $up_location1.$img_name1;
        $slider_image_1->move($up_location1,$img_name1);


        unlink($old_image_1);
        HomeRest::find($id)->update([
            'tittle' => $request->tittle,
            'price' => $request->price,
            'short_dis' => $request->short_dis,
            'image' =>$last_img1,
            // 'id' => Slider::slider()->id,
            // 'user_name' => Auth::user()->name,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('home.rest')->with('success', 'Home Restaurant Update Successfully');

        }else {
            HomeRest::find($id)->update([
                'tittle' => $request->tittle,
                'price' => $request->price,
                'short_dis' => $request->short_dis,
                // 'id' => Slider::slider()->id,
                // 'user_name' => Auth::user()->name,
                'created_at' => Carbon::now()
            ]);

            return Redirect()->route('home.rest')->with('success', 'Home Restaurant TextArea Update Successfully');
        }
        
    }

    public function DeleteHomeRest($id) {

        $image = HomeRest::find($id);
        $old_image_1 = $image->image;
        unlink($old_image_1);
        
        HomeRest::find($id)->forceDelete();
        return Redirect()->back()->with('success', 'Home Restaurant Permanently Deleted  Successfull');
    }
}