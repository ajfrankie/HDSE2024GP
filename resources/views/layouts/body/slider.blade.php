@php
$sliders = DB::table('sliders')->get()

@endphp


<!-- Slider -->

<div class="hero">

	<section class="home-slider owl-carousel">
	@foreach($sliders as $slider)
	    <div class="slider-item" style="background-image:url({{asset($slider->image)}});">
	      	<div class="overlay"></div>
	        <div class="container">
	          	<div class="row no-gutters slider-text align-items-center justify-content-end">
	          	<div class="col-md-6 ftco-animate">
	          	<div class="text">
	          		<h1>{{$slider->tittle}}</h1>
		            <p class="mb-3">{{$slider->discription}}</p>
	            </div>
	          	</div>
	       	 	</div>
	      	</div>
	    </div>
		@endforeach
	</section>

</div>
<!-- End Slider -->