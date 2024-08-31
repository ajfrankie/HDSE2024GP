@extends('layouts.master_home')

@php
$roomcards = DB::table('room_cards')->where('status', 1)->orderBy('id')->get();
@endphp

@php
$amenities = DB::table('amenities')->get();
@endphp


@section('home_content')

<section class="ftco-section ftco-menu bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Harborlights Resto Menu</span>
            <h2>Our Specialties</h2>
          </div>
        </div>
        
        <section class="rooms-section spad">
		<div class="container">
        @foreach($roomcards as $roomcards)
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3">
                    
                        <div class="row g-0">
                       
                            <div class="col-md-4">
                                <img class="card-img card-img-left" src="{{ $roomcards-> image}}" alt="Card image" style="margin:10px"/>
                            </div>
                            
                            <div class="col-md-5">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $roomcards-> tittle}}</h5>
                                        <p class="card-text">
                                        {{ $roomcards-> short_dis}}
                                        </p>
                                        <p class="card-text"><small class="text-muted"> 
                                        <button type="button" class="btn btn-primary rounded">
                                        Room Card Person Count<span class="badge text-bg-secondary">{{ $roomcards-> person_count}}</span>
                                        </button>
                                        <button type="button" class="btn btn-primary rounded">
                                        Room Category <span class="badge text-bg-secondary">{{ $roomcards-> room_category}}</span>
                                        </button>
                                        </small></p>
                                </div>
                            </div>
                            
                            <div class="col-md-3 text-center ftco-animate justify-content-center">
                                <a href="{{url('booking/'.$roomcards->tittle)}}"><button class="btn btn-primary rounded" style="padding:10px 30px; margin:30px;"> Book Now >>>>></button></a>
                                <button class="btn btn-primary rounded" style="padding:10px 30px; margin:30px 0 0 30;">LKR.{{ $roomcards-> price}}/Day</button>
                            </div>
                            
                        </div>
                        <div class="card-footer ftco-animate room-item">
                            <div class="row">
                            
                            <div class="col-9">

                                    <button type="button" class="btn btn-primary">
                                    <i class=""></i>
                                    </button>

                            </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            @endforeach

</section>

    
</section>







@endsection