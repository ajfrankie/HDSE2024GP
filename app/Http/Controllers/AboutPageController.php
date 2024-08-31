<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function AboutPage() {
        return view('pages.aboutus');
    }

    public function RestaurantPage() {
        return view('pages.restaurant');
    }



}
