<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\RoomCard;
use App\Models\Amenity;
use Auth;
use Image;

class PagesController extends Controller
{
    // public function RoomCheckPage() {
    //     // $roomcards = DB::table('room_cards')->get();
    //     return view('pages.booking');
    // }


    public function UserLogin() {
        // $roomcards = DB::table('room_cards')->get();
        return view('user_login.login');
    }

    public function UserRegister() {
        // $roomcards = DB::table('room_cards')->get();
        return view('user_login.register');
    }
}
