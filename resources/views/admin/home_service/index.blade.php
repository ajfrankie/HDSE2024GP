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
                <h5 class="card-header col-md-11">Home About</h5>
                </div>
                <div class="col-md-2">
                <a href="{{route('home.service')}}">
                <button type="button" class="btn btn-info" style="float: right; margin:10px;">
                <i class='bx bx-layer-plus'></i> Add About
                </button>
                </a>
                </div>
                </div>
                </div>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>About Id</th>
                        <th>About Head</th>
                        <th>About Tittle</th>
                        <th>About Short_Discription</th>
                        <th>About Image One</th>
                        <th>About Image Two</th>
                        <th>About Id</th>
                        <th>About Id</th>
                        <th>About Id</th>
                        <th>About Id</th>
                        <th>About Id</th>
                        <th>About Id</th>
                        <th>About Id</th>
                        <th>About Id</th>
                        <th>About Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @php($i = 1)
                    @foreach($home_services as $home_services)
                    <tr>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$i++ }}</strong></td>
                      <td>{{ $home_services ->head}}</td>
                      <td><p><pre>{{ $home_services ->tittle}}</pre></p></td>
                      <td>{{ $home_services ->servicenameone}}</td>
                      <td>{{ $home_services ->serviceiconone}}</td>
                      <td>{{ $home_services ->servicenametwo}}</td>
                      <td>{{ $home_services ->serviceicontwo}}</td>
                      <td>{{ $home_services ->servicenamethree}}</td>
                      <td>{{ $home_services ->servicenamefour}}</td>
                      <td>{{ $home_services ->serviceiconfour}}</td>
                      <td>{{ $home_services ->servicenamefive}}</td>
                      <td>{{ $home_services ->serviceiconfive}}</td>
                      <td>{{ $home_services ->servicenamesix}}</td>                      
                      <td>{{ $home_services ->serviceiconsix}}</td>
                      <td>
                          <div class="demo-inline-spacing card-body">
                            <a href="{{url('/home/service/edit/'.$home_services->id)}}">
                            <button type="button" class="btn btn-primary">
                            <i class="bx bx-edit-alt me-1"></i>Edit
                            </button>
                            </a>
                          </div>
                        </td>
                    <tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->


              <!-- Trush -->

              <!--/ Basic Bootstrap Table -->

             

@endsection