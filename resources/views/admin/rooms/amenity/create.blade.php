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
                            <form action="{{route('store.amenity')}}" method="POST"  >
                                @csrf

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Amenity Name</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text" id="name"
                                    name="name"/>
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                    
                                </div>

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Amenity Icon</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="icon"
                                name="icon"/>
                                @error('icon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary"><i class='bx bx-layer-plus'></i> Update Home About</button>
                            </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- / Content -->




@endsection