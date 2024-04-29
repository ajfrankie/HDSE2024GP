@extends('admin.admin_master')

@section('admin')
<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Slider Tables</h4>

                <div class="card">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session('success')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card-body">
                @foreach($home_pics as $home_pics)
                <form action="{{url('/home/pic/update/'.$home_pics->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <input type="hidden" name="old_image_1" value="{{$home_pics->imageone}}">
                    <input type="hidden" name="old_image_2" value="{{$home_pics->imagetwo}}">
                    <input type="hidden" name="old_image_3" value="{{$home_pics->imagethree}}">
                    <input type="hidden" name="old_image_4" value="{{$home_pics->imagefour}}">
                    <input type="hidden" name="old_image_5" value="{{$home_pics->imagefive}}">
                    <h5 class="card-header">Home Pictures</h5>
                
                 
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Image One</label>
                        <input class="form-control" type="file" id="formFile" name="imageone" value="{{ $home_pics ->imageone}}"/>
                        @error('imageone')
                                <span class="text-danger">{{ $message }}</span>
                        @enderror
                        
                        <div class="divider divider-success">
                            <div class="divider-text">Success</div>
                          </div>
                          
                        <div class="form-group">
                            <img src="{{asset($home_pics-> imageone)}}" style="width: 350px; height: 250px;">
                        </div>
                    </div>



                      <div class="mb-3">
                        <label for="formFile" class="form-label">Image Two</label>
                        <input class="form-control" type="file" id="formFile" name="imagetwo" value="{{ $home_pics ->imagetwo}}"/>
                        @error('imagetwo')
                                <span class="text-danger">{{ $message }}</span>
                        @enderror
                        
                        <div class="divider divider-success">
                            <div class="divider-text">Success</div>
                          </div>
                          
                        <div class="form-group">
                            <img src="{{asset($home_pics-> imagetwo)}}" style="width: 350px; height: 250px;">
                        </div>
                    </div>


                      <div class="mb-3">
                        <label for="formFile" class="form-label">Image Three</label>
                        <input class="form-control" type="file" id="formFile" name="imagethree" value="{{ $home_pics ->imagethree}}"/>
                        @error('imagethree')
                                <span class="text-danger">{{ $message }}</span>
                        @enderror
                        
                        <div class="divider divider-success">
                            <div class="divider-text">Success</div>
                          </div>
                          
                        <div class="form-group">
                            <img src="{{asset($home_pics-> imagethree)}}" style="width: 350px; height: 250px;">
                        </div>
                    </div>



                      <div class="mb-3">
                        <label for="formFile" class="form-label">Image Four</label>
                        <input class="form-control" type="file" id="formFile" name="imagefour" value="{{ $home_pics ->imagefour}}"/>
                        @error('imagefour')
                                <span class="text-danger">{{ $message }}</span>
                        @enderror
                        
                        <div class="divider divider-success">
                            <div class="divider-text">Success</div>
                          </div>
                          
                        <div class="form-group">
                            <img src="{{asset($home_pics-> imagefour)}}" style="width: 350px; height: 250px;">
                        </div>
                    </div>


                    
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Image Five</label>
                        <input class="form-control" type="file" id="formFile" name="imagefive" value="{{ $home_pics ->imagefive}}"/>
                        @error('imagefive')
                                <span class="text-danger">{{ $message }}</span>
                        @enderror
                        
                        <div class="divider divider-success">
                            <div class="divider-text">Success</div>
                          </div>
                          
                        <div class="form-group">
                            <img src="{{asset($home_pics-> imagefive)}}" style="width: 350px; height: 250px;">
                        </div>
                    </div>
                    

                    
                    <button type="submit" class="btn btn-primary"><i class='bx bx-layer-plus'></i> Update Home Pics</button>
                </form>
                @endforeach
                </div>
                </div>
</div>


@endsection                
