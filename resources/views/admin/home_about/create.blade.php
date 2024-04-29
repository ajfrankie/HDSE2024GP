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
                        <h5 class="mb-0">Create Home About</h5>
                        <small class="text-muted float-end">Merged input group</small>
                      </div>
                      <div class="card-body">
                      <form action="{{route('store.about')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Home About Head</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class='bx bx-heading'></i></span>
                              <input
                                type="text"
                                class="form-control"
                                id="head"
                                name="head"
                              />
                            </div>




                          <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Home About Tittle</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class='bx bx-heading'></i></span>
                              <input
                                type="text"
                                class="form-control"
                                id="tittle"
                                name="tittle"
                              />
                            </div>
                          </div>



                          <!-- <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Home About Short Discription</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class='bx bx-heading'></i></span>
                              <input
                                type="text"
                                class="form-control"
                                id="short_dis"
                                name="short_dis"
                              />
                            </div>
                          </div> -->



                          <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-message">Slider Discription</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-message2" class="input-group-text"
                                ><i class='bx bx-paragraph' ></i></span>
                              <textarea
                                id="short_dis"
                                name="short_dis"
                                class="form-control"
                                placeholder="Hi, Do you have a moment to talk Joe?"
                              ></textarea>
                            </div>
                          </div>

                          <div class="mb-3">
                        <label for="formFile" class="form-label"><i class='bx bx-image-add' ></i>>Home About Image One</label>
                        <input class="form-control" type="file" id="imageone" name="imageone"/>
                      </div>

                      <div class="divider divider-success">
                        <div class="divider-text">Success</div>
                      </div>


                      <div class="mb-3">
                        <label for="formFile" class="form-label"><i class='bx bx-image-add' ></i>>Home About Image Two</label>
                        <input class="form-control" type="file" id="imagetwo" name="imagetwo"/>
                      </div>

                      <div class="divider divider-success">
                        <div class="divider-text">Success</div>
                      </div>
                      
                          <button type="submit" class="btn btn-primary"><i class='bx bx-layer-plus'></i> Add Home About</button>
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