
@extends('backend.admin_master')
  
  @section('title')
Social links
  @endsection
    
  @section('content')

            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Manage/Add Home page Social links</h4>
                                <div class="bootstrap-modal">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Social link </button>
                                   
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Social data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
    </div>
                <div class="modal-body">
                    <form method="post" action="{{route('store.social.link')}}" > 
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-form-label">Name :</label>
                            <input type="text" class="form-control" name="name" id="name">
                            @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                        </div>
             
                        <div class="form-group">
                            <label for="link" class="col-form-label">link  :</label>
                            <input type="url" class="form-control" name="links" id="link">
                            @error('links')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                        </div>
                      
                 
                        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Save </button>

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
<!-- ================= -->
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
<!-- ================= -->


                                <h4 class="card-title">Slider Data</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Names </th>
                                                <th>Links</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                 
                                        @foreach($get_social_links as $keys => $value)
                                            <tr>
                                                <td>{{ $keys+1 }}</td>
                                       

                                                <td>{{$value->name}}</td>
                                                <td><a href="{{$value->links}}">{{$value->links}}</a></td>
                                        
                                                <td>
                                      <a href="{{route('edit.social.link',$value->id)}}"  class="badge badge-info"><i class="fa fa-pencil color-muted m-r-5"></i></a>
                                        <a href="{{route('delete.social.link',$value->id)}}"  class="badge badge-danger" onclick="return confirm('Are you sure you want to delete this item')">
                                         <i class="fa fa-close color-danger"  ></i></a>
                              

                                    <!-- Delete alert  -->
                                    <div class="card-body">

                                    <div class="bootstrap-modal">
                                    <!-- Button trigger modal -->

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