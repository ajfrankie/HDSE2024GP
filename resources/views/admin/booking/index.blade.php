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
              <div class="col-md-12">
              <h5 class="card-header col-md-11">Contact Form</h5>
              </div>
              </div>
              </div>
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Booking Form Id</th>
                      <th>Booking Check In</th>
                      <th>Booking Check Out</th>
                      <th>Booking Room Name</th>
                      <th>Booking First Name</th>
                      <th>Booking Last Name</th>
                      <th>Booking Email</th>
                      <th>Booking Phone Number</th>
                      <th>Booking Message</th>
                      <th>Booking Status</th>
                      <th>Booking Action</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                  @php($i = 1)
                  @foreach($bookings as $bookings)
                    <tr>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$i++ }}</strong></td>
                      <td>{{ $bookings ->check_in}}</td>
                      <td>{{ $bookings ->check_out}}</td>
                      <td>{{ $bookings ->tittle}}</td>
                      <td>{{ $bookings ->fst_name}}</td>
                      <td>{{ $bookings ->lst_name}}</td>
                      <td>{{ $bookings ->email}}</td>
                      <td>{{ $bookings ->phone_num}}</td>
                      <td><p><pre>{{ $bookings ->message}}</pre></p></td>


                        <td>
                            @if($bookings->status == 1)
                            <span class="badge bg-label-success">Mailed</span>
                            @else
                            <span class="badge bg-label-danger">UnMailed</span>
                            @endif
                        </td>
                      
                      <td>
                        <div class="demo-inline-spacing card-body">
                          <a href="{{url('delete/home/booking/'.$bookings->id)}}">
                          <button type="button" class="btn btn-danger">
                          <i class="bx bx-trash me-1"></i> Delete
                          </button>
                          </a>


                          @if($bookings->status == 1)
                                <a href="{{url('/inactive/home/booking/'.$bookings->id)}}">
                                <button type="button" class="btn btn-primary">
                                <i class="bx bx-edit-alt me-1"></i>UnMailed
                                </button>
                                </a>

                            @else
                                <a href="{{url('/active/home/booking/'.$bookings->id)}}">
                                <button type="button" class="btn btn-primary">
                                <i class="bx bx-edit-alt me-1"></i>Mailed
                                </button>
                                </a>
                            @endif

                        </div>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>




@endsection