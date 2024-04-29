@extends('admin.admin_master')

@section('admin')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Slider Tables</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
              @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              <div class="container">
                <div class="row">
                <div class="col-md-10">
                <h5 class="card-header col-md-11">Home Rooms</h5>
                </div>
                <div class="col-md-2">
                <a href="{{route('home.rooms')}}">
                <button type="button" class="btn btn-info" style="float: right; margin:10px;">
                <i class='bx bx-layer-plus'></i> Add Rooms
                </button>
                </a>
                </div>
                </div>
                </div>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Home Rooms Id</th>
                        <th>Home Head</th>
                        <th>Home Rooms Tittle</th>
                        <th>Home Rooms One</th>
                        <th>Home Rooms Image One</th> 
                        <th>Home Rooms Two</th>
                        <th>Home Rooms Image Two</th>
                        <th>Home Rooms Three</th>
                        <th>Home Rooms Image Three</th>
                        <th>Home Rooms Four</th>
                        <th>Home Rooms Image Four</th>
                        <th>Home Rooms Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @php($i = 1)
                    @foreach($home_rooms as $home_rooms)
                    <tr>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$i++ }}</strong></td>
                      <td>{{ $home_rooms-> head}}</td>
                      <td>{{ $home_rooms-> tittle}}</td>
                      <td><pre>{{ $home_rooms-> roomone}}</pre></td>
                      <td><img src="{{asset($home_rooms->roomoneimg)}}" style="height:40px; width:70px;"></td>
                      <td><pre>{{ $home_rooms-> roomtwo}}</pre></td>
                      <td><img src="{{asset($home_rooms->roomtwoimg)}}" style="height:40px; width:70px;"></td>
                      <td><pre>{{ $home_rooms-> roomthree}}</pre></td>
                      <td><img src="{{asset($home_rooms->roomthreeimg)}}" style="height:40px; width:70px;"></td>
                      <td><pre>{{ $home_rooms-> roomfour}}</pre></td>
                      <td><img src="{{asset($home_rooms->roomfourimg)}}" style="height:40px; width:70px;"></td>
                      <td>
                          <div class="demo-inline-spacing card-body">
                            <a href="{{url('home/rooms/edit/'.$home_rooms->id)}}">
                            <button type="button" class="btn btn-primary">
                            <i class="bx bx-edit-alt me-1"></i>Edit
                            </button>
                            </a>
                          </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->


              <!-- Trush -->

              <!--/ Basic Bootstrap Table -->

             

@endsection