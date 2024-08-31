@php
$home_abouts = DB::table('home_abouts')->get()
@endphp



    <section class="ftco-section ftco-wrap-about ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row no-gutters">
        @foreach($home_abouts as $home_about)
					<div class="col-md-7 order-md-last d-flex">
						<div class="img img-1 mr-md-2 ftco-animate" style="background-image: url({{asset($home_about->imageone)}});"></div>
						<div class="img img-2 ml-md-2 ftco-animate" style="background-image: url({{asset($home_about->imagetwo)}});"></div>
					</div>
					<div class="col-md-5 wrap-about pb-md-3 ftco-animate pr-md-5 pb-md-5 pt-md-4">
	          <div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">About <span>{{$home_about->head}}</span></span>
	            <h2 class="mb-4">{{$home_about->tittle}}</h2>
	          </div>
	          <p>{{$home_about->short_dis}}</p>
	          <p><a href="#" class="btn btn-secondary rounded">Reserve Your Room Now</a></p>
					</div>
        @endforeach
				</div>
			</div>
		</section>