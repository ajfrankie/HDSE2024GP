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
                        @foreach($home_services as $home_services)
                            <form action="{{url('/home/service/update/'.$home_services->id)}}" method="POST"  >
                                @csrf


                                
                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Hotel Name</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text" id="head"
                                    name="head"
                                    value="{{ $home_services-> head}}" />
                                    </div>
                                </div>




                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Hotel Service About</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="tittle"
                                name="tittle"
                                value="{{ $home_services-> tittle}}"/>
                                    </div>
                                </div>


                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Service One Name</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="servicenameone"
                                name="servicenameone"
                                value="{{ $home_services-> servicenameone}}"/>
                                    </div>
                                </div>




                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Service One Icon</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="serviceiconone"
                                name="serviceiconone"
                                value="{{ $home_services-> serviceiconone}}"/>
                                    </div>
                                </div>




                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Service Two Name</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="servicenametwo"
                                name="servicenametwo"
                                value="{{ $home_services-> servicenametwo}}"/>
                                    </div>
                                </div>




                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Service Two Icon</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="serviceicontwo"
                                name="serviceicontwo"
                                value="{{ $home_services-> serviceicontwo}}"/>
                                    </div>
                                </div>




                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Service Three Name</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="servicenamethree"
                                name="servicenamethree"
                                value="{{ $home_services-> servicenamethree}}"/>
                                    </div>
                                </div>



                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Service Three Icon</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="serviceiconthree"
                                name="serviceiconthree"
                                value="{{ $home_services-> serviceiconthree}}"/>
                                    </div>
                                </div>


                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Service Four Name</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="servicenamefour"
                                name="servicenamefour"
                                value="{{ $home_services-> servicenamefour}}"/>
                                    </div>
                                </div>


                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Service Four Icon</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="serviceiconfour"
                                name="serviceiconfour"
                                value="{{ $home_services-> serviceiconfour}}"/>
                                    </div>
                                </div>

       

                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Service Five Name</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="servicenamefive"
                                name="servicenamefive"
                                value="{{ $home_services-> servicenamefive}}"/>
                                    </div>
                                </div>


                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Service Five Icon</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="serviceiconfive"
                                name="serviceiconfive"
                                value="{{ $home_services-> serviceiconfive}}"/>
                                    </div>
                                </div>


                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Service Six Name</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="servicenamesix"
                                name="servicenamesix"
                                value="{{ $home_services-> servicenamesix}}"/>
                                    </div>
                                </div>


                                <div class="mb-3 row">
                                    <label for="html5-text-input" class="col-md-2 col-form-label">Service Six Icon</label>
                                    <div class="col-md-10">
                                    <input class="form-control" type="text"  id="serviceiconsix"
                                name="serviceiconsix"
                                value="{{ $home_services-> serviceiconsix}}"/>
                                    </div>
                                </div>



                                <button type="submit" class="btn btn-primary"><i class='bx bx-layer-plus'></i> Update Home About</button>
                            </form>
                        @endforeach
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- / Content -->




@endsection