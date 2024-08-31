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
                        <h5 class="mb-0">Create Room Card</h5>
                        <small class="text-muted float-end">Merged input group</small>
                      </div>
                      <div class="card-body">
                      <form action="{{route('store.roomcard')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                          <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Room Card Tittle</label>
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
                            <label class="form-label" for="basic-icon-default-fullname">Room Card Person Count</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class='bx bx-heading'></i></span>
                                <input class="form-control" type="number" id="person_count" name="person_count"/>
                            </div>
                          </div>



                          <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Room Category</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class='bx bx-heading'></i></span>
                              <input
                                type="text"
                                class="form-control"
                                id="room_category"
                                name="room_category"
                              />
                            </div>
                          </div>


                          <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-fullname">Room Card Price</label>
                            <div class="input-group input-group-merge">
                            <span class="input-group-text btn-group">LKR
                            </span>
                            <input
                            type="text"
                            class="form-control"
                            id="price"
                            name="price"
                            placeholder="Amount"
                            />
                            <span class="input-group-text">.00</span>
                            </div>
                          </div>


                          <div class="mb-2">
                            <label class="form-label" for="basic-icon-default-message">Room Card Discription</label>
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

                        <div class="divider divider-primary">
                            <div class="divider-text">Primary</div>
                        </div>

                    <div class="mb-3">
                        <div class="row">
                        @foreach($amenity as $amenity)
                            @if($amenity->status == 1)
                            <div class="col-4" style="margin:10px;">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" checked />
                                <label class="form-check-label" for="defaultCheck3">{{ ($amenity->name) }}</label>
                            </div>
                            </div>
                            @else

                            @endif
                        @endforeach
                        </div>
                    </div>


                        <div class="divider divider-primary">
                            <div class="divider-text">Primary</div>
                        </div>

                          <div class="mb-3">
                        <label for="formFile" class="form-label"><i class='bx bx-image-add' ></i>Room Card Image</label>
                        <input class="form-control" type="file" id="image" name="image"/>
                      </div>

                      <div class="divider divider-primary">
                        <div class="divider-text">Primary</div>
                      </div>
                      
                          <button type="submit" class="btn btn-primary"><i class='bx bx-layer-plus'></i> Add Room Card</button>
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