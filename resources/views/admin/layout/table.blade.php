@extends('admin.admin_master')

@section('admin')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Slider Tables</h4>
        <div class="row">
            <div class="col-md-9">
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
                    <h5 class="card-header col-md-11">Amenity</h5>
                    </div>
                    <div class="col-md-2">
                    <a href="{{route('add.amenity')}}">
                    <button type="button" class="btn btn-info" style="float: right; margin:10px;">
                    <i class='bx bx-layer-plus'></i> Add Amenity
                    </button>
                    </a>
                    </div>
                    </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Amenity Id</th>
                            <th>Amenity Name</th>
                            <th>Amenity Icon</th>
                            <th>Amenity Status</th>
                            <th>Amenity Action</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @php($i = 1)
                        @foreach($amenities as $amenities)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$i++ }}</strong></td>
                            <td>{{ ($amenities->name) }}</td>
                            <td>{{ ($amenities->icon) }}</td>
                            <td>
                                @if($amenities->status == 1)
                                <span class="badge bg-label-success">Active</span>
                                @else
                                <span class="badge bg-label-danger">DeActive</span>
                                @endif
                            </td>
                            
                            <td>
                            <div class="demo-inline-spacing card-body">
                                <a href="{{url('/home/amenity/edit/'.$amenities->id)}}">
                                <button type="button" class="btn btn-primary">
                                <i class="bx bx-edit-alt me-1"></i>Edit
                                </button>
                                </a>
                                <a href="{{url('/delete/home/amenity/'.$amenities->id)}}">
                                <button type="button" class="btn btn-danger">
                                <i class="bx bx-trash me-1"></i> Delete
                                </button>
                                </a>

                            @if($amenities->status == 1)
                                <a href="{{url('/inactive/home/amenity/'.$amenities->id)}}">
                                <button type="button" class="btn btn-primary">
                                <i class="bx bx-edit-alt me-1"></i>DeActive
                                </button>
                                </a>

                            @else
                                <a href="{{url('/active/home/amenity/'.$amenities->id)}}">
                                <button type="button" class="btn btn-primary">
                                <i class="bx bx-edit-alt me-1"></i>Active
                                </button>
                                </a>
                            @endif

                            </div>
                            </td>
                            @endforeach
                        </tr>
                    
                        </tbody>
                    </table>
                    </div>
            </div>

        </div>
</div>
            
              <!--/ Basic Bootstrap Table -->


              <!-- Trush -->

              <!--/ Basic Bootstrap Table -->

             

@endsection