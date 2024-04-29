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
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Testimony</h5>
                        <small class="text-muted float-end">Merged input group</small>
                      </div>
                      <div class="card-body">
                      <form action="{{url('home/testimony/update/'.$home_testimonys->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="old_image" value="{{$home_testimonys->ptofile}}">
                          <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Testimony Name</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class='bx bx-heading'></i></span>
                              <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                value="{{ $home_testimonys-> name}}"
                              />
                            </div>
                          </div>


                          <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Testimony Profession</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class='bx bx-heading'></i></span>
                              <input
                                type="text"
                                class="form-control"
                                id="profession"
                                name="profession"
                                value="{{ $home_testimonys-> profession}}"
                              />
                            </div>
                          </div>

                          <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-message">Testimony Messsage</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-message2" class="input-group-text"
                                ><i class='bx bx-paragraph' ></i></span>
                              <textarea
                                id="message"
                                name="message"
                                class="form-control"
                              >{{ $home_testimonys->message}}</textarea>
                            </div>
                          </div>
                          <div class="mb-3">
                        <label for="formFile" class="form-label"><i class='bx bx-image-add' ></i> Testimony Profile</label>
                        <input class="form-control" type="file" id="ptofile" name="ptofile"/>

                        @error('ptofile')
                                <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="divider divider-primary">
                        <div class="divider-text">Primary</div>
                      </div>
                        <div class="form-group">
                            <img src="{{asset($home_testimonys->ptofile)}}" style="width: 300px; height: 300px; border-radius:50%;">
                        </div>
                      </div>

                      
                          <button type="submit" class="btn btn-primary"><i class='bx bx-layer-plus'></i> Add Slider</button>
                        </form>
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