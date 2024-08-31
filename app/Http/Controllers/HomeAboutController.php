<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\HomeAbout;
use Auth;
use Image;

class HomeAboutController extends Controller
{
    public function HomeAbout() {
        $home_abouts = HomeAbout::latest()->get();
        return view('admin.home_about.index', compact('home_abouts'));
    }

    public function AddHomeAbout() {
        // $sliders = Slider::latest()->get();
         return view('admin.home_about.create');
    }


    public function StoreHomeAbout(Request $request) {
        $validatedData = $request->validate([
            'head' => 'required|unique:home_abouts|max:30',
            'tittle' => 'required|unique:home_abouts|max:70',
            'short_dis' => 'required|unique:home_abouts|max:220',
            'imageone' => 'required|image|mimes:jpg,jpeg,png',
            'imagetwo' => 'required|image|mimes:jpg,jpeg,png'
        ],
        [
            'tittle.required' => 'Please Input Slider Tittle'
        ]);

        $slider_image1 = $request->file('imageone');
        $slider_image2 = $request->file('imagetwo');

    // $name_gen = hexdec(uniqid());
    // $img_ext = strtolower($brand_image->getClientOriginalExtension());
    // $img_name = $name_gen.'.'.$img_ext;
    // $up_location = 'storage/image/brand/';
    // $last_img = $up_location.$img_name;
    // $brand_image->move($up_location,$img_name);

    $name_gen1 = hexdec(uniqid()).'.'.$slider_image1->getClientOriginalExtension();
    Image::make($slider_image1)->resize(1000,1780)->save('storage/image/home_about/image-1/'.$name_gen1);
    $last_img1 = 'storage/image/home_about/image-1/'.$name_gen1;

    $name_gen2 = hexdec(uniqid()).'.'.$slider_image2->getClientOriginalExtension();
    Image::make($slider_image2)->resize(1000,1330)->save('storage/image/home_about/image-2/'.$name_gen2);
    $last_img2 = 'storage/image/home_about/image-2/'.$name_gen2;

    HomeAbout::insert([
        'head' => $request->head,
        'tittle' => $request->tittle,
        'short_dis' => $request->short_dis,
        'imageone' =>$last_img1,
        'imagetwo' =>$last_img2, 
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

    return Redirect()->route('home.about')->with('success', 'About Added Successfully');
    }

    public function EditHomeAbout($id)  {
        $home_abouts = HomeAbout::find($id);
        return view('admin.home_about.edit',compact('home_abouts'));

    }


    public function UpdateHomeAbout(Request $request, $id) {

        $validatedData = $request->validate([
            'head' => 'max:30',
            'tittle' => 'max:70',
            'short_dis' => 'max:220',
            'imageone' => 'image|mimes:jpg,jpeg,png',
            'imagetwo' => 'image|mimes:jpg,jpeg,png'
        ],
        [
            'tittle.max' => 'Maximum Characters is 70'
        ]);

    $old_image_1 = $request->old_image_1;
    $old_image_2 = $request->old_image_2;

    $slider_image_1 = $request->file('imageone');
    $slider_image_2 = $request->file('imagetwo');

    if($slider_image_1) {

    $name_gen1 = hexdec(uniqid());
    $img_ext1 = strtolower($slider_image_1->getClientOriginalExtension());
    $img_name1 = $name_gen1.'.'.$img_ext1;
    $up_location1 = 'storage/image/home_about/image-1/';
    $last_img1 = $up_location1.$img_name1;
    $slider_image_1->move($up_location1,$img_name1);


    unlink($old_image_1);
    HomeAbout::find($id)->update([
        'head' => $request->head,
        'tittle' => $request->tittle,
        'short_dis' => $request->short_dis,
        'imageone' =>$last_img1,
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

    // return Redirect()->route('home.about')->with('success', 'Slider Update Successfully');
    
    $old_image_2 = $request->old_image_2;
    $slider_image_2 = $request->file('imagetwo');

        if($slider_image_2) {

            $name_gen2 = hexdec(uniqid());
            $img_ext2 = strtolower($slider_image_2->getClientOriginalExtension());
            $img_name2 = $name_gen2.'.'.$img_ext2;
            $up_location2 = 'storage/image/home_about/image-2/';
            $last_img2 = $up_location2.$img_name2;
            $slider_image_2->move($up_location2,$img_name2);
        
        
            unlink($old_image_2);
            HomeAbout::find($id)->update([
                'imagetwo' =>$last_img2, 
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
        
                return Redirect()->route('home.about')->with('success', 'Slider Update Successfully'); 
            }
            else {
                return Redirect()->route('home.about')->with('success', 'ImageOne and TextArea Update Successfully'); 
            }

    } elseif($slider_image_2) {
        
        $name_gen2 = hexdec(uniqid());
            $img_ext2 = strtolower($slider_image_2->getClientOriginalExtension());
            $img_name2 = $name_gen2.'.'.$img_ext2;
            $up_location2 = 'storage/image/home_about/image-2/';
            $last_img2 = $up_location2.$img_name2;
            $slider_image_2->move($up_location2,$img_name2);
        
        
            unlink($old_image_2);
            HomeAbout::find($id)->update([
                'imagetwo' =>$last_img2, 
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
        
                return Redirect()->route('home.about')->with('success', 'Image Two Update Successfully'); 
    } else {
        HomeAbout::find($id)->update([
            'head' => $request->head,
            'tittle' => $request->tittle,
            'short_dis' => $request->short_dis,
            // 'id' => Slider::slider()->id,
            // 'user_name' => Auth::user()->name,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('home.about')->with('success', 'TextArea Update Successfully');
    }

    }


    public function DeleteHomeAbout($id) {

        $image = HomeAbout::find($id);
        $old_image_1 = $image->imageone;
        $old_image_2 = $image->imagetwo;
        unlink($old_image_1);
        unlink($old_image_2);

        HomeAbout::find($id)->forceDelete();
        return Redirect()->back()->with('success', 'Slider Permanently Deleted  Successfull');
    }
}
