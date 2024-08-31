@extends('layouts.master_home')

@php
$roomcards = DB::table('room_cards')->where('status', 1)->get();
@endphp

@php
$bookings = DB::table('bookings')->get();
@endphp

@php
$boards = DB::table('boards')->get();
@endphp

@section('home_content')

<!-- Icons. Uncomment required icon fonts -->
<link rel="stylesheet" href="{{asset('backend/assets/vendor/fonts/boxicons.css')}}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{asset('backend/assets/vendor/css/core1.css')}}" class="template-customizer-core-css" />


<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>

  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Basic Layout</h5>
          <small class="text-muted float-end">Default label</small>
        </div>

        <div class="card-body">

          <form action="{{route('booking.formviewadd')}}" method="POST">
            @csrf
            <div class="row">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">CHECK-IN DATE</label>
                <div class="">
                  <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" name="check_in" />
                </div>
              </div>

              <div class="col">
                <label class="form-label" for="basic-default-fullname">CHECK-OUT DATE</label>
                <div class="">
                  <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" name="check_out" />
                </div>
              </div>


              <div class="col">
                <label class="form-label" for="basic-default-fullname">Room Number</label>

                <input type="text" class="form-control" id="basic-default-fullname" name="tittle" value="{{$tittle}}" />

              </div>

              <div class="col">
                <label for="defaultSelect" class="form-label">Hotel Board Types</label>
                <select id="board" class="form-select" name="board">
                  <option>Select board</option>
                  @foreach($boards as $boards)
                  <option value="{{ $boards-> id}}">{{ $boards-> board_name}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">First Name</label>
                <input type="text" class="form-control" id="basic-default-fullname" placeholder="First Name" name="fst_name" />
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-company">Last Name</label>
                <input type="text" class="form-control" id="basic-default-company" placeholder="Last Name" name="lst_name" />
              </div>
            </div>

            <div class="row">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Email</label>
                <input type="text" class="form-control" id="basic-default-fullname" placeholder="Email" name="email" />
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-company">Phone Numer</label>
                <input type="text" class="form-control" id="basic-default-company" placeholder="Phone Numer" name="phone_num" />
              </div>
            </div>


            <div class="row">
              <div class="col">
                <label class="form-label" for="basic-default-company">Other Messages</label>
                <div class="input-group">
                  <span class="input-group-text">Others</span>
                  <textarea class="form-control" aria-label="With textarea" placeholder="Comment" name="message"></textarea>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
          </form>

        </div>


      </div>
    </div>
  </div>

</div>
<!-- / Content -->



@endsection