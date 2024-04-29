<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function AdminLogout() {
         Auth::logout();
        //  return Redirect()->route('login')->with('Success', 'User Logout');
        return view('home');

    }

    // public function Adminlogin() {

    //     $role=Auth::user()->role;

    //     if($role=='0') {
    //         return view('home');
    //     } else {
    //         return view('admin.index');
    //     }
    // }

    public function AdminProfile() {
        return view('admin.profile.show');
    }


}
