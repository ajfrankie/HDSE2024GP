<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\HomeAboutController;
use App\Http\Controllers\HomeTestimonyController;
use App\Http\Controllers\HomeServiceController;
use App\Http\Controllers\HomeRoomsController;
use App\Http\Controllers\HomeRestController;
use App\Http\Controllers\HomePicController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\HomeRestaurantController;
use App\Http\Controllers\RestaurantAboutController;
use App\Http\Controllers\RoomPageController;
use App\Http\Controllers\AmenityController;
use App\Http\Controllers\RoomCardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BookingController;
// use App\Models\HomeService;
// use App\Models\Slider;
// use App\Models\HomeAbout;
// use App\Models\Contact;
// use App\Models\HomeRooms;
// use App\Models\HomeRest;
use App\Models\User;
// use App\Models\HomePic;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});


// Route::get('/re' , [AdminDashboardController::class, 'HomeRoute']);
//User Login 


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


// Admin Dashboard
Route::get('/profile', [AdminDashboardController::class, 'AdminProfile'])->name('admin.profile');
Route::get('/', [AdminDashboardController::class, 'AdminLogout'])->name('admin.logout');

//User Login 
Route::get('/user/login', [PagesController::class, 'UserLogin'])->name('user.log');
Route::get('/user/register', [PagesController::class, 'UserRegister'])->name('user.register');

// Home Route 
Route::get('/home', [SliderController::class, 'HomePage'])->name('home');

// Admin Slider 
Route::get('/slider/show', [SliderController::class, 'Slider'])->name('home.slider');
Route::get('/slider/add', [SliderController::class, 'AddSlider'])->name('add.slider');
Route::post('/store/slider', [SliderController::class, 'StoreSlider'])->name('store.slider');

Route::get('/slider/edit/{id}', [SliderController::class, 'EditSlider']);
Route::post('/slider/update/{id}', [SliderController::class, 'UpdateSlider']);
// Route::get('/softdelete/slider/{id}' , [SliderController::class, 'SoftDelete']);
// Route::get('/slider/restore/{id}' , [SliderController::class, 'RestoreSlider']);
Route::get('/delete/slider/{id}', [SliderController::class, 'DeleteSlider']);

// Admin Home Service
Route::get('/home/service', [HomeServiceController::class, 'HomeService'])->name('home.service');
Route::get('/home/service/edit/{id}', [HomeServiceController::class, 'EditHomeService']);
Route::post('/home/service/update/{id}', [HomeServiceController::class, 'UpdateHomeService']);

// Admin Home Testimony
Route::get('/home/testimony/show', [HomeTestimonyController::class, 'HomeTestimony'])->name('home.testinomy');
Route::get('/home/testimony/add', [HomeTestimonyController::class, 'AddHomeTestimony'])->name('add.testinomy');
Route::post('/store/home/testimony', [HomeTestimonyController::class, 'StoreHomeTestimony'])->name('store.testinomy');
Route::get('/home/testimony/edit/{id}', [HomeTestimonyController::class, 'EditHomeTestimony']);
Route::post('/home/testimony/update/{id}', [HomeTestimonyController::class, 'UpdateHomeTestimony']);
Route::get('/delete/testimony/{id}', [HomeTestimonyController::class, 'DeleteHomeTestimony']);

// Admin Home About
Route::get('/home/about/show', [HomeAboutController::class, 'HomeAbout'])->name('home.about');
Route::get('/home/about/add', [HomeAboutController::class, 'AddHomeAbout'])->name('add.about');
Route::post('/store/home/about', [HomeAboutController::class, 'StoreHomeAbout'])->name('store.about');
Route::get('/home/about/edit/{id}', [HomeAboutController::class, 'EditHomeAbout']);
Route::post('/home/about/update/{id}', [HomeAboutController::class, 'UpdateHomeAbout']);
Route::get('/delete/home/about/{id}', [HomeAboutController::class, 'DeleteHomeAbout']);

// Admin Home Rooms
Route::get('/home/rooms/show', [HomeRoomsController::class, 'HomeRooms'])->name('home.rooms');
// Route::get('/home/rooms/add' , [HomeRoomsController::class, 'AddHomeRooms']) -> name('add.rooms');
// Route::post('/store/home/rooms' , [HomeRoomsController::class, 'StoreHomeRooms']) -> name('store.rooms');
Route::get('/home/rooms/edit/{id}', [HomeRoomsController::class, 'EditHomeRooms'])->name('edit.rooms');
Route::post('/home/rooms/update/{id}', [HomeRoomsController::class, 'UpdateHomeRooms']);


// Admin Home Rest
Route::get('/home/rest/show', [HomeRestController::class, 'HomeRest'])->name('home.rest');
Route::get('/home/rest/add', [HomeRestController::class, 'AddHomeRest'])->name('add.rest');
Route::post('/store/home/rest', [HomeRestController::class, 'StoreHomeRest'])->name('store.rest');
Route::get('/home/rest/edit/{id}', [HomeRestController::class, 'EditHomeRest']);
Route::post('/home/rest/update/{id}', [HomeRestController::class, 'UpdateHomeRest']);
Route::get('/delete/home/rest/{id}', [HomeRestController::class, 'DeleteHomeRest']);

// Admin Home Pic
Route::get('/home/pic/show', [HomePicController::class, 'HomePic'])->name('home.pic');
Route::get('/home/pic/edit/{id}', [HomePicController::class, 'EditHomePic']);
Route::post('/home/pic/update/{id}', [HomePicController::class, 'UpdateHomePic']);


// Contact Page Route
Route::get('/contact', [ContactController::class, 'HomeContactPage'])->name('contact');
Route::post('contact', [ContactFormController::class, 'ContactFormView'])->name('contacts.formview');
Route::post('contact', [ContactFormController::class, 'ContactFormAdd'])->name('contacts.formviewadd');
// Admin Contact Page
// Admin Contact Page Details
Route::get('home/contact', [ContactController::class, 'HomeContact'])->name('contacts');
Route::get('home/contact/edit/{id}', [ContactController::class, 'EditContact']);
Route::post('home/contact/update/{id}', [ContactController::class, 'UpdateContact']);
// Admin Contact Page Icons
Route::get('contact/icon', [ContactController::class, 'HomeContactIcon'])->name('contacts.icon');
Route::get('contact/icon/edit/{id}', [ContactController::class, 'EditContactIcon']);
Route::post('contact/icon/update/{id}', [ContactController::class, 'UpdateContactIcon']);
// Admin Contact Form
Route::get('contact/form/show', [ContactFormController::class, 'ContactForm'])->name('contacts.form');
Route::get('/delete/contact/form/{id}', [ContactFormController::class, 'DeleteContactForm']);

// About Page Route
Route::get('/aboutus', [AboutPageController::class, 'AboutPage'])->name('aboutus');

// Restaurant Page Route
Route::get('/restaurant', [AboutPageController::class, 'RestaurantPage'])->name('restaurant');

// Admin Restaurant
Route::get('/home/restaurant/show', [HomeRestaurantController::class, 'Restaurant'])->name('home.restaurant');
Route::get('/home/restaurant/add', [HomeRestaurantController::class, 'AddRestaurant'])->name('add.restaurant');
Route::post('/store/home/restaurant', [HomeRestaurantController::class, 'StoreRestaurant'])->name('store.restaurant');
Route::get('/home/restaurant/edit/{id}', [HomeRestaurantController::class, 'EditRestaurant']);
Route::post('/home/restaurant/update/{id}', [HomeRestaurantController::class, 'UpdateRestaurant']);
Route::get('/delete/home/restaurant/{id}', [HomeRestaurantController::class, 'DeleteRestaurant']);

// Admin Restaurant About 
Route::get('home/restaurant/about', [RestaurantAboutController::class, 'RestaurantAbout'])->name('home.restaurantabout');
Route::get('home/restaurant/about/edit/{id}', [RestaurantAboutController::class, 'EditRestaurantAbout']);
Route::post('home/restaurant/about/update/{id}', [RestaurantAboutController::class, 'UpdateRestaurantAbout']);


// Rooms Route 
Route::get('/rooms', [RoomPageController::class, 'RoomsPage'])->name('rooms.page');
//Booking page
Route::get('booking/{tittle}', [BookingController::class, 'RoomCheckPage']);
Route::get('booking/{key}', [BookingController::class, 'RoomIdGet']);
Route::get('booking/form/show', [BookingController::class, 'BookingForm'])->name('booking.form');
Route::post('/rooms', [BookingController::class, 'BookingFormAdd'])->name('booking.formviewadd');
// Route::post('/rooms' , [BookingController::class, 'BookingMailSend'])-> name('booking.formviewadd');
Route::get('/active/home/booking/{id}', [BookingController::class, 'ActiveBooking']);
Route::get('/inactive/home/booking/{id}', [BookingController::class, 'InActiveBooking']);
Route::get('/delete/home/booking/{id}', [BookingController::class, 'DeleteBooking']);

//Amenity 
Route::get('/home/amenity/show', [AmenityController::class, 'Amenity'])->name('home.amenity');
Route::get('/home/amenity/add', [AmenityController::class, 'AddAmenity'])->name('add.amenity');
Route::post('/store/home/amenity', [AmenityController::class, 'StoreAmenity'])->name('store.amenity');
Route::get('/home/amenity/edit/{id}', [AmenityController::class, 'EditAmenity']);
Route::post('/home/amenity/update/{id}', [AmenityController::class, 'UpdateAmenity']);
Route::get('/delete/home/amenity/{id}', [AmenityController::class, 'DeleteAmenity']);
Route::get('/active/home/amenity/{id}', [AmenityController::class, 'ActiveAmenity']);
Route::get('/inactive/home/amenity/{id}', [AmenityController::class, 'InActiveAmenity']);


//Room Card 
Route::get('/home/room/card/show', [RoomCardController::class, 'RoomCard'])->name('home.roomcard');
Route::get('/home/room/card/add', [RoomCardController::class, 'AddRoomCard'])->name('add.roomcard');
Route::post('/store/home/room/card', [RoomCardController::class, 'StoreRoomCard'])->name('store.roomcard');
Route::get('/home/room/card/edit/{id}', [RoomCardController::class, 'EditRoomCard']);
Route::post('/home/room/card/update/{id}', [RoomCardController::class, 'UpdateRoomCard']);
Route::get('/delete/home/room/card/{id}', [RoomCardController::class, 'DeleteRoomCard']);
Route::get('/active/home/room/card/{id}', [RoomCardController::class, 'ActiveRoomCard']);
Route::get('/inactive/home/room/card/{id}', [RoomCardController::class, 'InActiveRoomCard']);
