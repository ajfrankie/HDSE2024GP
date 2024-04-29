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
                        @foreach($contact_icons as $contact_icons)
                        <form action="{{url('contact/icon/update/'.$contact_icons->id)}}" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">Contact Address Icon</label>
                            <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $contact_icons-> address_icon}}" id="html5-text-input" name="address"/>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">Contact Number Icon</label>
                            <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $contact_icons-> email_icon}}" id="html5-text-input" name="email"/>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">Contact Email Icon</label>
                            <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $contact_icons-> phone_icon}}" id="html5-text-input" name="phone"/>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-2 col-form-label">Contact Website Icon</label>
                            <div class="col-md-10">
                            <input class="form-control" type="text" value="{{ $contact_icons-> weburl_icon}}"  id="html5-text-input" name="weburl"/>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary"><i class='bx bx-layer-plus'></i> Update Contact Icon Details</button>
                        </form>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection