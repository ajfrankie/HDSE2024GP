<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use App\Models\Board;
use App\Mail\BookingMail;
use Auth;
use Image;
use Mail;


class BookingController extends Controller
{
    public function RoomCheckPage(Request $request, $tittle)
    {
        DB::table('bookings')->where('tittle', $tittle)->get();
        $key = $request->$tittle;
        // echo $tittle;
        return view('pages.booking', compact('tittle'));
    }

    public function RoomIdGet($key)
    {
        echo $key;
        return view('pages.booking', compact('key'));
    }



    public function BookingForm()
    {
        $bookings = Booking::latest()->get();
        $boards = DB::table('boards')->get();
        return view('admin.booking.index', compact('bookings'));
    }

    public function InActiveBooking($id)
    {
        DB::table('bookings')->where('id', $id)->update(['status' => 0]);
        return Redirect()->back()->with('success', 'Amenity InActive Successfully');
    }

    public function ActiveBooking($id)
    {
        DB::table('bookings')->where('id', $id)->update(['status' => 1]);
        return Redirect()->back()->with('success', 'Amenity Active Successfully');
    }


    public function BookingFormAdd(Request $request)
    {
        Booking::insert([
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'tittle' => $request->tittle,
            'fst_name' => $request->fst_name,
            'lst_name' => $request->lst_name,
            'email' => $request->email,
            'phone_num' => $request->phone_num,
            'message' => $request->message,
            // 'id' => Slider::slider()->id,
            // 'user_name' => Auth::user()->name,
            'created_at' => Carbon::now()
        ]);
        return Redirect()->route('rooms.page')->with('success', 'Send Message SuccessFull');
    }

    public function DeleteBooking($id)
    {
        Booking::find($id)->forceDelete();
        return Redirect()->back()->with('success', 'Booking Permanently Deleted  Successfull');
    }


    // public function BookingMailSend(Request $request)
    // {

    //     Mail::to('nescafe1157@gmail.com')->send(new BookingMail($request));
    //     return Redirect()->route('rooms.page')->with('success', 'Send Message SuccessFull');
    // }
}
