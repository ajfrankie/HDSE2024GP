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
                        <h5 class="mb-0">Testimony</h5>
                        <small class="text-muted float-end">Merged input group</small>
                      </div>
                      <div class="card-body">
                      <form action="{{route('store.testinomy')}}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                                placeholder="Hi, Do you have a moment to talk Joe?"
                              ></textarea>
                            </div>
                          </div>
                          <div class="mb-3">
                        <label for="formFile" class="form-label"><i class='bx bx-image-add' ></i> Testimony Profile</label>
                        <input class="form-control" type="file" id="ptofile" name="ptofile"/>
                      </div>

                      <div class="divider divider-primary">
                        <div class="divider-text">Primary</div>
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