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
                        <h5 class="mb-0">Create Home Rooms</h5>
                        <small class="text-muted float-end">Merged input group</small>
                      </div>
                        <div class="card-body">
                            <form action="{{url('/home/rooms/update/'.$home_rooms->id)}}" method="POST"  enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="old_image_1" value="{{$home_rooms->roomoneimg}}">
                                <input type="hidden" name="old_image_2" value="{{$home_rooms->roomtwoimg}}">
                                <input type="hidden" name="old_image_3" value="{{$home_rooms->roomthreeimg}}">
                                <input type="hidden" name="old_image_4" value="{{$home_rooms->roomfourimg}}">



                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Hotel Name</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text" id="head"
                                    name="head"
                                    value="{{ $home_rooms-> head}}" />
                                    </div>
                                </div>


                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Home Rooms Tittle</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="tittle"
                                name="tittle"
                                value="{{ $home_rooms-> tittle}}"/>
                                    </div>
                                </div>

    

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Home Rooms One</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="roomone"
                                name="roomone"
                                value="{{ $home_rooms-> roomone}}"/>
                                    </div>
                                </div>




                                <div class="mb-3">
                                    <label for="formFile" class="form-label"><i class='bx bx-image-add' ></i>>Home Rooms Image One</label>
                                    <input class="form-control" type="file" id="roomoneimg" name="roomoneimg" value="{{ $home_rooms-> roomoneimg}}"/>
                                    @error('roomoneimg')
                                            <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="divider divider-dark">
                                        <div class="divider-text">Dark</div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <img src="{{asset($home_rooms-> roomoneimg)}}" style="width: 500px; height: 300px;">
                                    </div>
                                </div>



                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Home Rooms Two</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="roomtwo"
                                name="roomtwo"
                                value="{{ $home_rooms-> roomtwo}}"/>
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="formFile" class="form-label"><i class='bx bx-image-add' ></i>>Home Rooms Image Two</label>
                                    <input class="form-control" type="file" id="roomtwoimg" name="roomtwoimg" value="{{ $home_rooms-> roomtwoimg}}"/>
                                    @error('roomtwoimg')
                                            <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="divider divider-dark">
                                        <div class="divider-text">Dark</div>
                                    </div>

                                    <div class="form-group">
                                        <img src="{{asset($home_rooms-> roomtwoimg)}}" style="width: 500px; height: 300px;">
                                    </div>
                                </div>

                               


                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Home Rooms Three</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="roomthree"
                                name="roomthree"
                                value="{{ $home_rooms-> roomthree}}"/>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label"><i class='bx bx-image-add' ></i>>Home Rooms Image Three</label>
                                    <input class="form-control" type="file" id="roomthreeimg" name="roomthreeimg" value="{{ $home_rooms-> roomthreeimg}}"/>
                                    @error('roomthreeimg')
                                            <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="divider divider-dark">
                                        <div class="divider-text">Dark</div>
                                    </div>

                                    <div class="form-group">
                                        <img src="{{asset($home_rooms-> roomthreeimg)}}" style="width: 500px; height: 300px;">
                                    </div>
                                </div>


                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Home Rooms Four</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="roomfour"
                                name="roomfour"
                                value="{{ $home_rooms-> roomfour}}"/>
                                    </div>
                                </div>



                                <div class="mb-3">
                                    <label for="formFile" class="form-label"><i class='bx bx-image-add' ></i>>Home Rooms Image Four</label>
                                    <input class="form-control" type="file" id="roomfourimg" name="roomfourimg" value="{{ $home_rooms-> roomfourimg}}"/>
                                    @error('roomfourimg')
                                            <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    
                                    <div class="divider divider-dark">
                                        <div class="divider-text">Dark</div>
                                    </div>

                                    <div class="form-group">
                                        <img src="{{asset($home_rooms-> roomfourimg)}}" style="width: 500px; height: 300px;">
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