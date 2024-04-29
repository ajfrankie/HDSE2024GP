
@php
$home_testimonys = DB::table('home_testimonies')->get()
@endphp



<section class="testimony-section">
    <div class="container">
        <div class="row no-gutters ftco-animate justify-content-center">
        	<div class="col-md-5 d-flex">
        		<div class="testimony-img aside-stretch-2" style="background-image: url({{asset('fontend/images/testimony-img.jpg')}});"></div>
        	</div>
          <div class="col-md-7 py-5 pl-md-5">
          		<div class="py-md-5">
					<div class="heading-section ftco-animate mb-4">
						<span class="subheading">Testimony</span>
						<h2 class="mb-0">Happy Customer</h2>
					</div>
					<div class="carousel-testimony owl-carousel ftco-animate">
					@foreach($home_testimonys as $home_testimonys)
						<div class="item">
							<div class="testimony-wrap pb-4">
							<div class="text">
								<p class="mb-4">{{$home_testimonys->message}}</p>
							</div>
							<div class="d-flex">
								<div class="user-img" style="background-image: url({{asset($home_testimonys->ptofile)}})">
								</div>
								<div class="pos ml-3">
									<p class="name">{{$home_testimonys->name}}</p>
									<span class="position">{{$home_testimonys->profession}}</span>
								</div>
								</div>
							</div>
						</div>
					@endforeach

					</div>
	          	</div>
          	</div>
        </div>
    </div>
    </section>