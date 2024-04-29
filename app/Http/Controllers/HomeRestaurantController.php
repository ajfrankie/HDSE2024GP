<?php

namespace App\Http\Controllers;

use App\Models\HomeRest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\HomeRestaurant;
use Auth;
use Image;

class HomeRestaurantController extends Controller
{
    public function Restaurant()
    {
        $restaurants = HomeRestaurant::latest()->get();
        return view('admin.restaurant.index', compact('restaurants'));
    }

    public function AddRestaurant()
    {
        // $home_rests = HomeRest::find($id);
        return view('admin.restaurant.create');
    }

    public function StoreRestaurant(Request $request)
    {
        $validatedData = $request->validate(
            [
                'tittle' => 'required|max:40',
                'price' => 'required|max:10',
                'short_dis' => 'required|max:100',
                'image' => 'required|image|mimes:jpg,jpeg,png',
            ],
            [
                'tittle.required' => 'Please Input Slider Tittle'
            ]
        );

        $slider_image1 = $request->file('image');

        $name_gen1 = hexdec(uniqid()) . '.' . $slider_image1->getClientOriginalExtension();
        Image::make($slider_image1)->resize(800, 530)->save('storage/image/restaurant/foodmenu/' . $name_gen1);
        $last_img1 = 'storage/image/restaurant/foodmenu/' . $name_gen1;

        HomeRestaurant::insert([
            'tittle' => $request->tittle,
            'price' => $request->price,
            'short_dis' => $request->short_dis,
            'image' => $last_img1,
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

        return Redirect()->route('home.restaurant')->with('success', 'Restaurant Added Successfully');
    }

    public function EditRestaurant($id)
    {
        $restaurants = HomeRestaurant::find($id);
        return view('admin.restaurant.edit', compact('restaurants'));
    }

    public function UpdateRestaurant(Request $request, $id)
    {


        $old_image_1 = $request->old_image_1;

        $slider_image_1 = $request->file('image');

        if ($slider_image_1) {

            $name_gen1 = hexdec(uniqid());
            $img_ext1 = strtolower($slider_image_1->getClientOriginalExtension());
            $img_name1 = $name_gen1 . '.' . $img_ext1;
            $up_location1 = 'storage/image/restaurant/foodmenu/';
            $last_img1 = $up_location1 . $img_name1;
            $slider_image_1->move($up_location1, $img_name1);


            unlink($old_image_1);
            HomeRestaurant::find($id)->update([
                'tittle' => $request->tittle,
                'price' => $request->price,
                'short_dis' => $request->short_dis,
                'image' => $last_img1,
                // 'id' => Slider::slider()->id,
                // 'user_name' => Auth::user()->name,
                'created_at' => Carbon::now()
            ]);

            return Redirect()->route('home.restaurant')->with('success', 'Restaurant Update Successfully');
        } else {
            HomeRestaurant::find($id)->update([
                'tittle' => $request->tittle,
                'price' => $request->price,
                'short_dis' => $request->short_dis,
                // 'id' => Slider::slider()->id,
                // 'user_name' => Auth::user()->name,
                'created_at' => Carbon::now()
            ]);

            return Redirect()->route('home.restaurant')->with('success', 'Restaurant TextArea Update Successfully');
        }
    }

    public function DeleteRestaurant($id)
    {

        $image = HomeRest::find($id);
        $old_image_1 = $image->image;
        unlink($old_image_1);

        HomeRestaurant::find($id)->forceDelete();
        return Redirect()->back()->with('success', 'Restaurant Permanently Deleted  Successfull');
    }
}
