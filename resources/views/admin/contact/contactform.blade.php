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
                      <th>Contact Form Id</th>
                      <th>Contact Form Name</th>
                      <th>Contact Form Email</th>
                      <th>Contact Form Subject</th>
                      <th>Contact Form Message</th>
                      <th>Contact Form Action</th>
                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                  @php($i = 1)
                  @foreach($contact_forms as $contact_forms)
                    <tr>
                      <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$i++ }}</strong></td>
                      <td>{{ $contact_forms ->name}}</td>
                      <td>{{ $contact_forms ->email}}</td>
                      <td>{{ $contact_forms ->subject}}</td>
                      <td><p><pre>{{ $contact_forms ->message}}</pre></p></td>
                      
                      <td>
                        <div class="demo-inline-spacing card-body">
                          <a href="{{url('delete/contact/form/'.$contact_forms->id)}}">
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




@endsection