@extends('layouts.master_home')


@section('home_content')

@php
$home_services = DB::table('home_services')->get()
@endphp


<section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
        @foreach($home_services as $home_service)
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Welcome to <span> {{$home_service->head}}</span></span>
            <h2 class="mb-4">{{ $home_service-> tittle}}</h2>
          </div>
        </div>  
        <div class="row d-flex">
          <div class="col-md pr-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span ><i class="{{ $home_service-> serviceiconone}}" style="color: #28a745;"></i></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">{{ $home_service-> servicenameone}}</h3>
              </div>
            </div>      
          </div>
          <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services active py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span><i class="{{ $home_service-> serviceicontwo}}" style="color: #28a745;"></i></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">{{ $home_service-> servicenametwo}}</h3>
              </div>
            </div>    
          </div>
          <div class="col-md px-md-1 d-flex align-sel Searchf-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span><i class="{{ $home_service-> serviceiconthree}}" style="color: #28a745;"></i></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">{{ $home_service-> servicenamethree}}</h3>
              </div>
            </div>      
          </div>
          <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span ><i class="{{ $home_service-> serviceiconfour}}" style="color: #28a745;"></i></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">{{ $home_service-> servicenamefour}}</h3>
              </div>
            </div>      
          </div>
          <div class="col-md pl-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span><i class="{{ $home_service-> serviceiconfive}}" style="color: #28a745;"></i></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">{{ $home_service-> servicenamefive}}</h3>
              </div>
            </div> 
                 
          </div>
          <div class="col-md pl-md-1 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span><i class="{{ $home_service-> serviceiconsix}}" style="color: #28a745;"></i></span>
              	</div>
              </div>
              <div class="media-body">
                <h3 class="heading mb-3">{{ $home_service-> servicenamesix}}</h3>
              </div>
            </div>     
          </div>
          @endforeach
        </div>
      </div>
    </section>

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
		
    @php
$home_pics = DB::table('home_pics')->get()
@endphp


<section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading" style="padding:2em 0 0 0;">Photos</span>
            <h2><span>Instagram</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
        @foreach($home_pics as $home_pics)
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{asset($home_pics->imageone)}}" class="insta-img image-popup" style="background-image: url({{asset($home_pics->imageone)}});">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{asset($home_pics->imagetwo)}}" class="insta-img image-popup" style="background-image:url({{asset($home_pics->imagetwo)}});">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{asset($home_pics->imagethree)}}" class="insta-img image-popup" style="background-image:url({{asset($home_pics->imagethree)}});">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{asset($home_pics->imagefour)}}" class="insta-img image-popup" style="background-image:url({{asset($home_pics->imagefour)}});">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="{{asset($home_pics->imagefive)}}" class="insta-img image-popup" style="background-image: url({{asset($home_pics->imagefive)}});">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        @endforeach
        </div>
      </div>
    </section>

@endsection