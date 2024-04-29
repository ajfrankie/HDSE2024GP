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
                <h5 class="card-header col-md-11">Testimony</h5>
                </div>
                <div class="col-md-2">
                <a href="{{route('add.testinomy')}}">
                <button type="button" class="btn btn-info" style="float: right; margin:10px;">
                <i class='bx bx-layer-plus'></i> Add Testimony
                </button>
                </a>
                </div>
                </div>
                </div>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Testimony Id</th>
                        <th>Testimony Name</th>
                        <th>Testimony Profession</th>
                        <th>Testimony Messsage</th>
                        <th>Testimony Profile</th>
                        <th>Slider Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @php($i = 1)
                    @foreach($home_testimonys as $home_testimonys)
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$i++ }}</strong></td>
                        <td>{{ $home_testimonys ->name}}</td>
                        <td>{{ $home_testimonys ->profession}}</td>
                        <td><p><pre>{{ $home_testimonys ->message}}</pre></p></td>
                        <td><img src="{{asset($home_testimonys->ptofile)}}" style="height:70px; width:70px; border-radius:50%;"></td>
                        <td>
                          <div class="demo-inline-spacing card-body">
                            <a href="{{url('home/testimony/edit/'.$home_testimonys->id)}}">
                            <button type="button" class="btn btn-primary">
                            <i class="bx bx-edit-alt me-1"></i>Edit
                            </button>
                            </a>
                            <a href="{{url('delete/testimony/'.$home_testimonys->id)}}">
                            <button type="button" class="btn btn-danger">
                            <i class="bx bx-trash me-1"></i> Delete
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