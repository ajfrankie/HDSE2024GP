@extends('admin.admin_master')

@section('admin')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>

              <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="col-xl">
                    <div class="card mb-12">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{session('success')}}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Create Home About</h5>
                            <small class="text-muted float-end">Merged input group</small>
                        </div>
                        <div class="card-body">
                        @foreach($contacts as $contacts)
                        <form action="{{url('home/contact/update/'.$contacts->id)}}" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label"><i class="fa-solid fa-wifi fa-beat fa-2xs" style="color: #28a745;"></i>Contact Address</label>
                            <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $contacts-> address}}" id="html5-text-input" name="address"/>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">Contact Number</label>
                            <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $contacts-> email}}" id="html5-text-input" name="email"/>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">Contact Email</label>
                            <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $contacts-> phone}}" id="html5-text-input" name="phone"/>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">Contact Website</label>
                            <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $contacts-> weburl}}"  id="html5-text-input" name="weburl"/>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary"><i class='bx bx-layer-plus'></i> Update Contact Details</button>
                        </form>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection