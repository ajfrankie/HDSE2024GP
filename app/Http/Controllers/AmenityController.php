<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Amenity;
use Auth;
use Image;

class AmenityController extends Controller
{
    public function Amenity() {
        $amenities = Amenity::latest()->get();
        return view('admin.rooms.amenity.index', compact('amenities'));
    }

    public function AddAmenity() {
        // $sliders = Slider::latest()->get();
         return view('admin.rooms.amenity.create');
    }

    public function InActiveAmenity($id) {
        DB::table('amenities')->where('id',$id)->update(['status'=>0]);
        return Redirect()->back()->with('success', 'Amenity InActive Successfully');

    }

    public function ActiveAmenity($id) {
        DB::table('amenities')->where('id',$id)->update(['status'=>1]);
        return Redirect()->back()->with('success', 'Amenity Active Successfully');
    }


    public function StoreAmenity(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'icon' => 'required'
        ],
        [
            'name.required' => 'Please Input  Name',
            'icon.required' => 'Please Input  Icon Name'
        ]);

        Amenity::insert([
        'name' => $request->name,
        'icon' => $request->icon,
        // 'id' => Slider::slider()->id,
        // 'user_name' => Auth::user()->name,
        'created_at' => Carbon::now()
    ]);

    return Redirect()->route('home.amenity')->with('success', 'Amenity Added Successfully');
    }


    public function EditAmenity($id)  {
        $amenities = Amenity::find($id);
        return view('admin.rooms.amenity.edit',compact('amenities'));

    }

    public function UpdateAmenity(Request $request, $id) {

        Amenity::find($id)->update([
            'name' => $request->name,
            'icon' => $request->icon,
        // 'user_id' => Auth::user()->id,
        // 'user_name' => Auth::user()->name,
        'created_at' => Carbon::now()
    ]);

        return Redirect()->route('home.amenity')->with('success', 'Amenity Update Successfully');


    }


    public function DeleteAmenity($id) {

        Amenity::find($id)->forceDelete();
        return Redirect()->back()->with('success', 'Amenity Permanently Deleted  Successfull');
    }
}
