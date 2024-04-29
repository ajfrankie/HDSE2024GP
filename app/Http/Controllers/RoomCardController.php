<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\RoomCard;
use App\Models\Amenity;
use Auth;
use Image;


class RoomCardController extends Controller
{
    public function RoomCard() {
        $roomcards = RoomCard::latest()->get();
        $amenity = DB::table('amenities')->get();
        return view('admin.rooms.roomscard.index', compact('amenity', 'roomcards'));
    }

    public function AddRoomCard() {
        // $sliders = Slider::latest()->get();
        $amenity = DB::table('amenities')->get();
         return view('admin.rooms.roomscard.create', compact('amenity'));
    }

    public function InActiveRoomCard($id) {
        DB::table('room_cards')->where('id',$id)->update(['status'=>0]);
        return Redirect()->back()->with('success', 'Room Card InActive Successfully');

    }

    public function ActiveRoomCard($id) {
        DB::table('room_cards')->where('id',$id)->update(['status'=>1]);
        return Redirect()->back()->with('success', 'Room Card Active Successfully');
    }

    public function StoreRoomCard(Request $request) {
        $validatedData = $request->validate([
            'tittle' => 'required|max:25',
            'person_count' => 'required',
            'room_category' => 'required|max:25',
            'price' => 'required',
            'short_dis' => 'required|max:150',
            'image' => 'required|image|mimes:jpg,jpeg,png'
        ],
        [
            'tittle.required' => 'Please Input Room Card Tittle'
        ]);

        $slider_image = $request->file('image');

    $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
    Image::make($slider_image)->resize(340,220)->save('storage/image/room_card/'.$name_gen);

    $last_img = 'storage/image/room_card/'.$name_gen;

    RoomCard::insert([
        'tittle' => $request->tittle,
        'person_count' => $request->person_count,
        'room_category' => $request->room_category,
        'price' => $request->price,
        'short_dis' => $request->short_dis,
        'image' =>$last_img, 
        // 'id' => Slider::slider()->id,
        // 'user_name' => Auth::user()->name,
        'created_at' => Carbon::now()
    ]);



    return Redirect()->route('home.roomcard')->with('success', 'Room Card Added Successfully');
    }


    public function EditRoomCard($id)  {
        $roomcards = RoomCard::find($id);
        return view('admin.rooms.roomscard.edit',compact('roomcards'));

    }


    public function UpdateRoomCard(Request $request, $id) {

        $old_image = $request->old_image;
        $slider_image = $request->file('image');
    
        if($slider_image) {
    
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($slider_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'storage/image/room_card/';
        $last_img = $up_location.$img_name;
        $slider_image->move($up_location,$img_name);
    
    
        unlink($old_image);
        RoomCard::find($id)->update([
            'tittle' => $request->tittle,
            'person_count' => $request->person_count,
            'room_category' => $request->room_category,
            'price' => $request->price,
            'short_dis' => $request->short_dis,
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
    
            return Redirect()->route('home.roomcard')->with('success', 'Room Card Update Successfully');
    
    
        }else {
            RoomCard::find($id)->update([
                'tittle' => $request->tittle,
                'person_count' => $request->person_count,
                'room_category' => $request->room_category,
                'price' => $request->price,
                'short_dis' => $request->short_dis,
                // 'user_id' => Auth::user()->id,
                // 'user_name' => Auth::user()->name,
                'created_at' => Carbon::now()
            ]);
    
            return Redirect()->route('home.roomcard')->with('success', 'Room Card Texts Update Successfully');
        }

    }


   


    public function DeleteRoomCard($id) {

        $image = RoomCard::find($id);
        $old_image = $image->image;
        unlink($old_image);

        RoomCard::find($id)->forceDelete();
        return Redirect()->back()->with('success', 'Room Card Permanently Deleted  Successfull');
    }
    

}
