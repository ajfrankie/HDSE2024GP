<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\RestaurantAbout;
use Auth;
use Image;

class RestaurantAboutController extends Controller
{
    public function RestaurantAbout() {
        $restaurant_abouts = RestaurantAbout::latest()->get();
        return view('admin.restaurant.about.index', compact('restaurant_abouts'));
    }


    public function EditRestaurantAbout($id)  {
        $restaurant_abouts = RestaurantAbout::find($id);
        return view('admin.restaurant.about.index',compact('restaurant_abouts'));

    }



    public function UpdateRestaurantAbout(Request $request, $id) {

        $validatedData = $request->validate([
            'head' => 'max:30',
            'tittle' => 'max:70',
            'short_dis' => 'max:400',
            'imageone' => 'image|mimes:jpg,jpeg,png',
            'imagetwo' => 'image|mimes:jpg,jpeg,png',
            'imagethree' => 'image|mimes:jpg,jpeg,png'
        ],
        [
            'tittle.max' => 'Maximum Characters is 70'
        ]);

    $old_image_1 = $request->old_image_1;
    $old_image_2 = $request->old_image_2;
    $old_image_3 = $request->old_image_3;

    $slider_image_1 = $request->file('imageone');
    $slider_image_2 = $request->file('imagetwo');
    $slider_image_3 = $request->file('imagethree');

    if($slider_image_1) {

    $name_gen1 = hexdec(uniqid());
    $img_ext1 = strtolower($slider_image_1->getClientOriginalExtension());
    $img_name1 = $name_gen1.'.'.$img_ext1;
    $up_location1 = 'storage/image/restaurant/about/';
    $last_img1 = $up_location1.$img_name1;
    $slider_image_1->move($up_location1,$img_name1);


    unlink($old_image_1);
    RestaurantAbout::find($id)->update([
        'head' => $request->head,
        'tittle' => $request->tittle,
        'short_dis' => $request->short_dis,
        'imageone' =>$last_img1,
        'created_at' => Carbon::now()
    ]);

 
    return Redirect()->route('home.restaurantabout')->with('success', 'ImageOne Update Successfully'); 

    //  $old_image_2 = $request->old_image_2;
    // $old_image_3 = $request->old_image_3;
    // $old_image_4 = $request->old_image_4;

    //  $slider_image_2 = $request->file('roomtwoimg');
    // $slider_image_3 = $request->file('roomthreeimg');
    // $slider_image_4 = $request->file('roomfourimg');


    $old_image_2 = $request->old_image_2;
    $slider_image_2 = $request->file('imagetwo');

        if($slider_image_2) {

            $name_gen2 = hexdec(uniqid());
            $img_ext2 = strtolower($slider_image_2->getClientOriginalExtension());
            $img_name2 = $name_gen2.'.'.$img_ext2;
            $up_location2 = 'storage/image/restaurant/about/';
            $last_img2 = $up_location2.$img_name2;
            $slider_image_2->move($up_location2,$img_name2);
        
        
            unlink($old_image_2);
            RestaurantAbout::find($id)->update([
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
        
                return Redirect()->route('home.restaurantabout')->with('success', 'ImageOne,ImageTwo Update Successfully'); 

                $old_image_3 = $request->old_image_3;
                $slider_image_3 = $request->file('imagethree');

                if($slider_image_3) {

                    $name_gen3 = hexdec(uniqid());
                    $img_ext3 = strtolower($slider_image_3->getClientOriginalExtension());
                    $img_name3 = $name_gen3.'.'.$img_ext3;
                    $up_location3 = 'storage/image/restaurant/about/';
                    $last_img3 = $up_location3.$img_name3;
                    $slider_image_3->move($up_location3,$img_name3);
                
                
                    unlink($old_image_3);
                    RestaurantAbout::find($id)->update([
                        'imagethree' =>$last_img3, 
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
                
                        return Redirect()->route('home.restaurantabout')->with('success', 'Restaurant About Update Successfully'); 
                    }
                    else {
                        return Redirect()->route('home.restaurantabout')->with('success', 'ImageOne,ImageTwo and TextArea Update Successfully'); 
                    }
            }
            else {
                return Redirect()->route('home.restaurantabout')->with('success', 'ImageOne and TextArea Update Successfully'); 
            }

    
    }elseif($slider_image_2) {
        
        $name_gen2 = hexdec(uniqid());
            $img_ext2 = strtolower($slider_image_2->getClientOriginalExtension());
            $img_name2 = $name_gen2.'.'.$img_ext2;
            $up_location2 = 'storage/image/restaurant/about/';
            $last_img2 = $up_location2.$img_name2;
            $slider_image_2->move($up_location2,$img_name2);
        
        
            unlink($old_image_2);
            RestaurantAbout::find($id)->update([
                'imagetwo' =>$last_img2, 
                'created_at' => Carbon::now()
            ]);
        
        
                return Redirect()->route('home.restaurantabout')->with('success', 'Image Two Update Successfully'); 
      
        } elseif($slider_image_3) {
      
            $name_gen3 = hexdec(uniqid());
            $img_ext3 = strtolower($slider_image_3->getClientOriginalExtension());
            $img_name3 = $name_gen3.'.'.$img_ext3;
            $up_location3 = 'storage/image/restaurant/about/';
            $last_img3 = $up_location3.$img_name3;
            $slider_image_3->move($up_location3,$img_name3);
        
        
            unlink($old_image_3);
            RestaurantAbout::find($id)->update([
                'imagethree' =>$last_img3, 
                'created_at' => Carbon::now()
            ]);
                return Redirect()->route('home.restaurantabout')->with('success', 'Image Three Update Successfully'); 
      
        }

        else {
            RestaurantAbout::find($id)->update([
                'head' => $request->head,
                'tittle' => $request->tittle,
                'short_dis' => $request->short_dis,
                'created_at' => Carbon::now()
            ]);
    
            return Redirect()->route('home.restaurantabout')->with('success', 'TextArea Update Successfully');
        }
    
        }

    

}
