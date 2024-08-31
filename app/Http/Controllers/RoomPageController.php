<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\RoomCard;
use App\Models\Amenity;
use Auth;
use Image;

class RoomPageController extends Controller
{
    public function RoomsPage() {
        return view('pages.rooms.rooms');
    }



}
