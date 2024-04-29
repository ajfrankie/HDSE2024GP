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
                        <h5 class="mb-0">Create Restaurant About</h5>
                        <small class="text-muted float-end">Merged input group</small>
                      </div>
                      <div class="card-body">
                      @foreach($restaurant_abouts as $restaurant_abouts)
                      <form action="{{url('/home/restaurant/about/update/'.$restaurant_abouts->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="old_image_1" value="{{$restaurant_abouts->imageone}}">
                        <input type="hidden" name="old_image_2" value="{{$restaurant_abouts->imagetwo}}">
                        <input type="hidden" name="old_image_3" value="{{$restaurant_abouts->imagethree}}">

                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Restaurant About Head</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class='bx bx-heading'></i></span>
                              <input
                                type="text"
                                class="form-control"
                                id="head"
                                name="head"
                                value="{{ $restaurant_abouts-> head}}"
                              />
                            </div>




                          <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Restaurant About Tittle</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class='bx bx-heading'></i></span>
                              <input
                                type="text"
                                class="form-control"
                                id="tittle"
                                name="tittle"
                                value="{{ $restaurant_abouts-> tittle}}"
                              />
                            </div>
                          </div>



                          <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Restaurant About Short Discription</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class='bx bx-heading'></i></span>
                              <input
                                type="text"
                                class="form-control"
                                id="short_dis"
                                name="short_dis"
                                value="{{ $restaurant_abouts-> short_dis}}"
                              />
                            </div>
                          </div>

                          <div class="mb-3">
                        <label for="formFile" class="form-label"><i class='bx bx-image-add' ></i>>Restaurant About Image One</label>
                        <input class="form-control" type="file" id="imageone" name="imageone" value="{{ $restaurant_abouts-> imageone}}"/>

                        @error('imageone')
                                <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="divider divider-dark">
                            <div class="divider-text">Dark</div>
                        </div>
                                    
                        <div class="form-group">
                            <img src="{{asset($restaurant_abouts-> imageone)}}" style="width: 500px; height: 300px;">
                        </div>
                      </div>



                      <div class="mb-3">
                        <label for="formFile" class="form-label"><i class='bx bx-image-add' ></i>>Restaurant About Image Two</label>
                        <input class="form-control" type="file" id="imagetwo" name="imagetwo" value="{{ $restaurant_abouts-> imagetwo}}"/>

                        @error('imagetwo')
                                <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="divider divider-dark">
                            <div class="divider-text">Dark</div>
                        </div>
                                    
                        <div class="form-group">
                            <img src="{{asset($restaurant_abouts-> imagetwo)}}" style="width: 500px; height: 300px;">
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="formFile" class="form-label"><i class='bx bx-image-add' ></i>>Restaurant About Image Three</label>
                        <input class="form-control" type="file" id="imagethree" name="imagethree" value="{{ $restaurant_abouts-> imagethree}}"/>

                        @error('imagethree')
                                <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="divider divider-dark">
                            <div class="divider-text">Dark</div>
                        </div>
                                    
                        <div class="form-group">
                            <img src="{{asset($restaurant_abouts-> imagethree)}}" style="width: 500px; height: 300px;">
                        </div>
                      </div>


                      
                          <button type="submit" class="btn btn-primary"><i class='bx bx-layer-plus'></i> Add Restaurant About</button>
                        </form>
                      @endforeach
                      </div>
                    </div>
                  </div>
                  <div class="card mb-4">
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->




@endsection