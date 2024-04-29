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