
@extends('backend.admin_master')
  
  @section('title')
  Edit Social Account link
  @endsection
    
  @section('content')
  <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">  Edit Social Account link </h4>
                                <p class="text-muted m-b-15 f-s-12">Manage and edit Social Account link.</p>
                                <div class="basic-form">
                                <form method="post" action="{{route('update.social.link',[$edit_link->id])}}" enctype="multipart/form-data"> 
                        @csrf
                                   <!-- ---------------  -->
                                        <div class="form-group">
                                            <label for="name"> Name</label>
                                            <input type="text" class="form-control input-rounded" name="name"  value="{{$edit_link->name }}">
                                        </div>
                                   <!-- ---------------  -->
                                     <!-- ---------------  -->
                                     <div class="form-group">
                                     <label for="">Link</label>

                                            <input type="url" class="form-control input-rounded" name="links"  value="{{$edit_link->links }}">
                                        </div>
                                   <!-- ---------------  -->
                  
     
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