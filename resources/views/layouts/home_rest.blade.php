@php
$home_rests = DB::table('home_rests')->get()
@endphp




<section class="ftco-section ftco-menu bg-light">
			<div class="container-fluid px-md-4">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Restaurant</span>
            <h2>Restaurant</h2>
          </div>
        </div>
			<div class="row">

			@foreach($home_rests as $home_rests)			
        	<div class="col-lg-6 col-xl-4 d-flex">
        		<div class="pricing-entry rounded d-flex ftco-animate">
        			<div class="img" style="background-image: url({{asset($home_rests->image)}});"></div>
        			<div class="desc p-4">
	        			<div class="d-md-flex text align-items-start">
	        				<h3><span>{{ $home_rests-> tittle}}</span></h3>
	        				<span class="price">LKR.<span>{{ $home_rests-> price}}</span></span>
	        			</div>
	        			<div class="d-block">
	        				<p>{{ $home_rests-> short_dis}}</p>
	        			</div>
        			</div>
        		</div>
        	</div>
			@endforeach
        	<div class="col-md-12 text-center ftco-animate">
        		<p><a href="#" class="btn btn-primary rounded">View All Menu</a></p>
        	</div>
			
        </div>
			</div>
		</section>
