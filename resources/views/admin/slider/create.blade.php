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
                        <h5 class="mb-0">Create Slider</h5>
                        <small class="text-muted float-end">Merged input group</small>
                      </div>
                      <div class="card-body">
                      <form action="{{route('store.slider')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                          <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Slider Tittle</label>
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


                          <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Slider Discription</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class='bx bx-heading'></i></span>
                              <input
                                type="text"
                                class="form-control"
                                id="discription"
                                name="discription"
                              />
                            </div>
                          </div>


                          <!-- <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-message">Slider Discription</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-message2" class="input-group-text"
                                ><i class='bx bx-paragraph' ></i></span>
                              <textarea
                                id="discription"
                                name="discription"
                                class="form-control"
                                placeholder="Hi, Do you have a moment to talk Joe?"
                              ></textarea>
                            </div>
                          </div> -->
                          <div class="mb-3">
                        <label for="formFile" class="form-label"><i class='bx bx-image-add' ></i> Slider Image</label>
                        <input class="form-control" type="file" id="image" name="image"/>
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
                    <!-- <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Basic Layout</h5>
                      <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Full Name</label>
                          <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Company</label>
                          <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-email">Email</label>
                          <div class="input-group input-group-merge">
                            <input
                              type="text"
                              id="basic-default-email"
                              class="form-control"
                              placeholder="john.doe"
                              aria-label="john.doe"
                              aria-describedby="basic-default-email2"
                            />
                            <span class="input-group-text" id="basic-default-email2">@example.com</span>
                          </div>
                          <div class="form-text">You can use letters, numbers & periods</div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-phone">Phone No</label>
                          <input
                            type="text"
                            id="basic-default-phone"
                            class="form-control phone-mask"
                            placeholder="658 799 8941"
                          />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-message">Message</label>
                          <textarea
                            id="basic-default-message"
                            class="form-control"
                            placeholder="Hi, Do you have a moment to talk Joe?"
                          ></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                      </form>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->




@endsection