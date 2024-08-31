<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\HomeRooms;
use Auth;
use Image;

class HomeRoomsController extends Controller
{
    public function HomeRooms() {
        $home_rooms = HomeRooms::latest()->get();
        return view('admin.home_rooms.index', compact('home_rooms'));
    }

    public function EditHomeRooms($id)  {
        $home_rooms = HomeRooms::find($id);
        return view('admin.home_rooms.edit',compact('home_rooms'));
      
    }

    public function UpdateHomeRooms(Request $request, $id) {

        $validatedData = $request->validate([
            'head' => 'max:30',
            'tittle' => 'max:40',
            'roomone' => 'max:15',
            'roomtwo' => 'max:15',
            'roomthree' => 'max:15',
            'roomfour' => 'max:15',
            'roomoneimg' => 'image|mimes:jpg,jpeg,png',
            'roomtwoimg' => 'image|mimes:jpg,jpeg,png',
            'roomthreeimg' => 'image|mimes:jpg,jpeg,png',
            'roomfourimg' => 'image|mimes:jpg,jpeg,png'
          ],
          [
            'tittle.max' => 'Maximum Characters is 40'
          ]);

    $old_image_1 = $request->old_image_1;
    $old_image_2 = $request->old_image_2;
    $old_image_3 = $request->old_image_3;
    $old_image_4 = $request->old_image_4;

    $slider_image_1 = $request->file('roomoneimg');
    $slider_image_2 = $request->file('roomtwoimg');
    $slider_image_3 = $request->file('roomthreeimg');
    $slider_image_4 = $request->file('roomfourimg');

    if($slider_image_1) {

    $name_gen1 = hexdec(uniqid());
    $img_ext1 = strtolower($slider_image_1->getClientOriginalExtension());
    $img_name1 = $name_gen1.'.'.$img_ext1;
    $up_location1 = 'storage/image/home_rooms/roomone/';
    $last_img1 = $up_location1.$img_name1;
    $slider_image_1->move($up_location1,$img_name1);


    unlink($old_image_1);
    HomeRooms::find($id)->update([
        'head' => $request->head,
        'tittle' => $request->tittle,
        'roomone' => $request->roomone,
        'roomtwo' => $request->roomtwo,
        'roomthree' => $request->roomthree,
        'roomfour' => $request->roomfour,
        'roomoneimg' =>$last_img1,
        'created_at' => Carbon::now()
    ]);

 
    return Redirect()->route('home.rooms')->with('success', 'ImageOne Update Successfully'); 

    //  $old_image_2 = $request->old_image_2;
    // $old_image_3 = $request->old_image_3;
    // $old_image_4 = $request->old_image_4;

    //  $slider_image_2 = $request->file('roomtwoimg');
    // $slider_image_3 = $request->file('roomthreeimg');
    // $slider_image_4 = $request->file('roomfourimg');


    $old_image_2 = $request->old_image_2;
    $slider_image_2 = $request->file('roomtwoimg');

        if($slider_image_2) {

            $name_gen2 = hexdec(uniqid());
            $img_ext2 = strtolower($slider_image_2->getClientOriginalExtension());
            $img_name2 = $name_gen2.'.'.$img_ext2;
            $up_location2 = 'storage/image/home_rooms/roomtwo/';
            $last_img2 = $up_location2.$img_name2;
            $slider_image_2->move($up_location2,$img_name2);
        
        
            unlink($old_image_2);
            HomeRooms::find($id)->update([
                'roomtwoimg' =>$last_img2, 
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

    
    }elseif($slider_image_2) {
        
        $name_gen2 = hexdec(uniqid());
            $img_ext2 = strtolower($slider_image_2->getClientOriginalExtension());
            $img_name2 = $name_gen2.'.'.$img_ext2;
            $up_location2 = 'storage/image/home_rooms/roomtwo/';
            $last_img2 = $up_location2.$img_name2;
            $slider_image_2->move($up_location2,$img_name2);
        
        
            unlink($old_image_2);
            HomeRooms::find($id)->update([
                'roomtwoimg' =>$last_img2, 
                'created_at' => Carbon::now()
            ]);
        
        
                return Redirect()->route('home.rooms')->with('success', 'Image Two Update Successfully'); 
      
        } elseif($slider_image_3) {
      
            $name_gen3 = hexdec(uniqid());
            $img_ext3 = strtolower($slider_image_3->getClientOriginalExtension());
            $img_name3 = $name_gen3.'.'.$img_ext3;
            $up_location3 = 'storage/image/home_rooms/roomthree/';
            $last_img3 = $up_location3.$img_name3;
            $slider_image_3->move($up_location3,$img_name3);
        
        
            unlink($old_image_3);
            HomeRooms::find($id)->update([
                'roomthreeimg' =>$last_img3, 
                'created_at' => Carbon::now()
            ]);
                return Redirect()->route('home.rooms')->with('success', 'Image Three Update Successfully'); 
      
        } elseif($slider_image_4) {
      
            $name_gen4 = hexdec(uniqid());
            $img_ext4 = strtolower($slider_image_4->getClientOriginalExtension());
            $img_name4 = $name_gen4.'.'.$img_ext4;
            $up_location4 = 'storage/image/home_rooms/roomfour/';
            $last_img4 = $up_location4.$img_name4;
            $slider_image_4->move($up_location4,$img_name4);
        
        
            unlink($old_image_4);
            HomeRooms::find($id)->update([
                'roomfourimg' =>$last_img4, 
                'created_at' => Carbon::now()
            ]);
                return Redirect()->route('home.rooms')->with('success', 'Image Four Update Successfully'); 
      
      
                
            } 

        else {
            HomeRooms::find($id)->update([
                'head' => $request->head,
                'tittle' => $request->tittle,
                'roomone' => $request->roomone,
                'roomtwo' => $request->roomtwo,
                'roomthree' => $request->roomthree,
                'roomfour' => $request->roomfour,
                'created_at' => Carbon::now()
            ]);
    
            return Redirect()->route('home.rooms')->with('success', 'TextArea Update Successfully');
        }
    
        }


}



