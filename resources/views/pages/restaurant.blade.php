@extends('layouts.master_home')



@section('home_content')

@php
$restaurant_abouts = DB::table('restaurant_abouts')->get()
@endphp

<section class="ftco-section">
    	<div class="container">
    		<div class="row">
			@foreach($restaurant_abouts as $restaurant_abouts)
    			<div class="col-md-6">
      			<div class="single-slider-resto mb-4 mb-md-0 owl-carousel">
      				<div class="item">
      					<div class="resto-img rounded" style="background-image: url({{asset($restaurant_abouts->imageone)}});"></div>
      				</div>
      				<div class="item">
      					<div class="resto-img rounded" style="background-image: url({{asset($restaurant_abouts->imagetwo)}});"></div>
      				</div>
      				<div class="item">
      					<div class="resto-img rounded" style="background-image: url({{asset($restaurant_abouts->imagethree)}});"></div>
      				</div>
      			</div>
    			</div>
    			<div class="col-md-6 pl-md-5">
    				<div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">{{ $restaurant_abouts-> head}}</span>
	            <h2 class="mb-4">{{ $restaurant_abouts-> tittle}}</h2>
	          </div>
	          <p>{{ $restaurant_abouts-> short_dis}}</p>
	          
    			</div>
			@endforeach
    		</div>
    	</div>
    </section>
@php
$restaurants = DB::table('home_restaurants')->get()
@endphp
    <section class="ftco-section ftco-menu bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Harborlights Resto Menu</span>
            <h2>Our Specialties</h2>
          </div>
        </div>
		<div class="row">
        @foreach($restaurants as $restaurants)
        	<div class="col-lg-6 col-xl-6 d-flex">
        		<div class="pricing-entry rounded d-flex ftco-animate">
        			<div class="img" style="background-image: url({{asset($restaurants->image)}});"></div>
        			<div class="desc p-4">
	        			<div class="d-md-flex text align-items-start">
	        				<h3><span>{{ $restaurants-> tittle}}</span></h3>
	        				<span class="price">LKR.<span>{{ $restaurants-> price}}</span></span>
	        			</div>
	        			<div class="d-block">
	        				<p>{{ $restaurants-> short_dis}}</p>
	        			</div>
        			</div>
        		</div>
        	</div>
        @endforeach
        </div>
			</div>
		</section>

@endsection