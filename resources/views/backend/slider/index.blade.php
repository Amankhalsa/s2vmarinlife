
@extends('backend.admin_master')
  
  @section('title')
  Slider view
  @endsection
    
  @section('content')

            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Manage/Add Home page slider</h4>
                                <div class="bootstrap-modal">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add slider</button>
                                   
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add slider</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('store.home.slider')}}" enctype="multipart/form-data"> 
                        @csrf
                        <div class="form-group">
                            <label for="title-name" class="col-form-label">Slider title:</label>
                            <input type="text" class="form-control"  name="title" id="title-name">
                    @error('title')
                    <span class=" text-danger">{{ $message }}</span>
                    @enderror
                        </div>
                        <div class="form-group">
                            <label for="boldtitle-name" class="col-form-label">Slider Bold title:</label>
                            <input type="text" class="form-control" name="boldtitle" id="boldtitle-name">
                            @error('boldtitle')
                    <span class=" text-danger">{{ $message }}</span>
                    @enderror
                        </div>
                        <div class="form-group">
                            <label for="subtitle-name" class="col-form-label">Slider Subtitle:</label>
                            <input type="text" class="form-control" name="subtitle" id="subtitle-name">
                            @error('subtitle')
                    <span class=" text-danger">{{ $message }}</span>
                    @enderror
                        </div>
                        <div class="form-group">
                            <label for="image-name" class="col-form-label">Slider Image:</label>
                            <input type="file" class="form-control" name="image" id="image-name">
                            @error('image')
                    <span class=" text-danger">{{ $message }}</span>
                    @enderror
                        </div>
                        <div class="form-group">
                            <label for="alttag-name" class="col-form-label">Alt Tag</label>
                            <input type="text" class="form-control" name="alttag" id="subtitle-name">
                            @error('alttag')
                    <span class=" text-danger">{{ $message }}</span>
                    @enderror
                        </div>
                        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Send message</button>

                </div>
                    </form>
                </div>
            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- datatable  -->
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            @if(session('success'))       
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('success')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<!-- ================= -->
@if(session('alert'))       
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{session('alert')}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif


                                <h4 class="card-title">Slider Data</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>image </th>
                                                <th>Title</th>
                                                <th>Sub Tittle</th>
                                                <th>Alt tag</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                 
                                        @foreach($get_home_slider as $keys => $value)
                                            <tr>
                                                <td>{{ $keys+1 }}</td>
                                                <td>
<img src="{{asset($value->image)}}" alt="{{$value->alttag}}" style="width: 100px; height:50px;">

                                                </td>

                                                <td>{{$value->title}} <b>{{$value->boldtitle}}</b></td>
                                                <td>{{$value->subtitle}}</td>
                                                <td>{{$value->alttag}}</td>
                                                <td>

                                        <a href="{{route('edit.home.slider',$value->id)}}"  class="badge badge-info"><i class="fa fa-pencil color-muted m-r-5"></i></a>
                                        <a href="{{route('delete.home.slider',$value->id)}}"  class="badge badge-danger" onclick="return confirm('Are you sure you want to delete this item')"> <i class="fa fa-close color-danger" data-toggle="modal" data-target="#basicModal" ></i></a>
 
                                    <!-- Delete alert  -->
                                    <div class="card-body">

                                    <div class="bootstrap-modal">
                                    <!-- Button trigger modal -->
                                    <!-- Modal -->
                                    <div class="modal fade" id="basicModal" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete ?</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">Are you sure you want to delete this Slider ?</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <a href="{{route('delete.home.slider',$value->id)}}">
                                                <button type="button" class="btn btn-primary">Delete</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <!-- Delete alert  -->
                                    </td>
                                            </tr>
                                     @endforeach  
                                        </tbody>
                            
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection