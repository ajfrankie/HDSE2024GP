@extends('admin.admin_master')

@section('admin')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Slider Tables</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
              <div class="container">
                <div class="row">
                <div class="col-md-10">
                <h5 class="card-header col-md-11">Sliders</h5>
                </div>
                <div class="col-md-2">
                <a href="{{route('add.slider')}}">
                <button type="button" class="btn btn-info" style="float: right; margin:10px;">
                <i class='bx bx-layer-plus'></i> Add Slider
                </button>
                </a>
                </div>
                </div>
                </div>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Slider Id</th>
                        <th>Slider Tittle</th>
                        <th>Slider Discription</th>
                        <th>Slider Image</th>
                        <th>Slider Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    @foreach($sliders as $slider)
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$sliders->firstItem()+$loop->index }}</strong></td>
                        <td>{{ $slider ->tittle}}</td>
                        <td>{{ $slider ->description}}</td>
                        <td><img src="{{asset($slider->image)}}" style="height:40px; width:70px;"></td>
                        <td>
                          <div class="demo-inline-spacing card-body">
                            <a href="{{url('slider/edit/'.$slider->id)}}">
                            <button type="button" class="btn btn-primary">
                            <i class="bx bx-edit-alt me-1"></i>Edit
                            </button>
                            </a>
                            <a href="{{url('slider/delete/'.$slider->id)}}">
                            <button type="button" class="btn btn-danger">
                            <i class="bx bx-trash me-1"></i> Delete
                            </button>
                            </a>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->


@endsection