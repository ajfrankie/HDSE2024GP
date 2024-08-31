@extends('layouts.master_home')
@php
$contacts = DB::table('contacts')->get()
@endphp
@php
$contact_icons = DB::table('contact_icons')->get()
@endphp

@section('home_content')

<!-- <div class="hero-wrap" style="background-image: url({{asset('fontend/images/bg_3.jpg')}});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact Us</span></p>
	            <h1 class="mb-4 bread">Contact Us</h1>
            </div>
          </div>
        </div>
      </div>
    </div> -->

<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      @foreach($contacts as $contacts)
      @foreach($contact_icons as $contact_icons)
      <div class="col-md-12 mb-4" style="padding:30px;">
        <h2 class="h3">Contact Information</h2>
      </div>
      <div class="w-100"></div>
      <div class="col-md-3 d-flex">
        <div class="info rounded bg-white p-4">
          <div class="media block-6 services py-2 d-block text-center align-items-center">
            <div class="d-flex justify-content-center">
              <div class="icon d-flex align-items-center justify-content-center">
                <span><i class="{{$contact_icons->address_icon}}" style="color: #28a745;"></i></span>
              </div>
            </div>
          </div>
          <p style="padding:1em 0 0 0;"><span>Address:</span></p>
          <p> {{$contacts->address}}</p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info rounded bg-white p-4">
          <div class="media block-6 services py-2 d-block text-center align-items-center">
            <div class="d-flex justify-content-center">
              <div class="icon d-flex align-items-center justify-content-center">
                <span><i class="{{$contact_icons->phone_icon}}" style="color: #28a745;"></i></span>
              </div>
            </div>
          </div>
          <p style="padding:1em 0 0 0;"><span>Phone:</span></p>
          <p><a href="tel://1234567920">{{$contacts->phone}}</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info rounded bg-white p-4">
          <div class="media block-6 services py-2 d-block text-center align-items-center">
            <div class="d-flex justify-content-center">
              <div class="icon d-flex align-items-center justify-content-center">
                <span><i class="{{$contact_icons->email_icon}}" style="color: #28a745;"></i></span>
              </div>
            </div>
          </div>
          <p style="padding:1em 0 0 0;"><span> Email:</span></p>
          <p><a href="mailto:info@yoursite.com">{{$contacts->email}}</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info rounded bg-white p-4">
          <div class="media block-6 services py-2 d-block text-center align-items-center">
            <div class="d-flex justify-content-center">
              <div class="icon d-flex align-items-center justify-content-center">
                <span><i class="{{$contact_icons->email_icon}}" style="color: #28a745;"></i></span>
              </div>
            </div>
          </div>
          <p style="padding:1em 0 0 0;"><span>Website</span></p>
          <p> <a href="#">{{$contacts->weburl}}</a></p>
        </div>
      </div>
      @endforeach
      @endforeach
    </div>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{session('success')}}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="row block-9">
      <div class="col-md-6 order-md-last d-flex">
        <form action="{{route('contacts.formviewadd')}}" class="bg-white p-5 contact-form" Method="POST">
          @csrf
          <div class="form-group">
            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="text" name="email" id="email" class="form-control" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>

      </div>

      <!--  <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div> 
          </div> -->
    </div>
  </div>
</section>
@endsection