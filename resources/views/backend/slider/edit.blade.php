
@extends('backend.admin_master')
  
  @section('title')
  Edit Slider 
  @endsection
    
  @section('content')
  <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Slider</h4>
                                <p class="text-muted m-b-15 f-s-12">Manage and edit home page slider here.</p>
                                <div class="basic-form">
                                <form method="post" action="{{route('update.home.slider',[$edit_slider->id])}}" enctype="multipart/form-data"> 
                        @csrf
                                   <!-- ---------------  -->
                                        <div class="form-group">
                                            <label for=""> Title</label>
                                            <input type="text" class="form-control input-rounded" name="title"  value="{{$edit_slider->title }}">
                                        </div>
                                   <!-- ---------------  -->
                                     <!-- ---------------  -->
                                     <div class="form-group">
                                     <label for="">Bold text</label>

                                            <input type="text" class="form-control input-rounded" name="boldtitle"  value="{{$edit_slider->boldtitle }}">
                                        </div>
                                   <!-- ---------------  -->
                                     <!-- ---------------  -->
                                     <div class="form-group">
                                     <label for="">Sub Title</label>

                                            <input type="text" class="form-control input-rounded" name="subtitle"  value="{{$edit_slider->subtitle }}">
                                        </div>
                                   <!-- ---------------  -->
                                     <!-- ---------------  -->
                                     <div class="form-group">
                                     <label for=""> Alt tag text</label>

                                            <input type="text" class="form-control input-rounded"  name="alttag"  value="{{$edit_slider->alttag }}" >
                                        </div>
                                   <!-- ---------------  -->
                                                 <!-- ---------------  -->
                                                 <div class="form-group">
                                     <label for=""> image</label>

                                            <input type="file" class="form-control input-rounded"  name="image"   accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                   <!-- ---------------  -->
                                     <!-- ---------------  -->
                                     <div class="form-group">
                                     <label for="">image</label><br>

                            <img src="{{asset($edit_slider->image)}}" alt="" style="width: 100px; height:50px;" id="output">
                                        </div>
                                   <!-- ---------------  -->
                                   <button type="submit" class="btn btn-dark">Update </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            @endsection