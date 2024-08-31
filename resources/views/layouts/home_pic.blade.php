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
