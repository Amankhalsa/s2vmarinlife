
@extends('backend.admin_master')
  
  @section('title')
  Edit Contact address
  @endsection
    
  @section('content')
  <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Address</h4>
                                <p class="text-muted m-b-15 f-s-12">Manage and edit home page slider here.</p>
                                <div class="basic-form">
                                <form method="post" action="{{route('update.contact',[$edit_contactus->id])}}" enctype="multipart/form-data"> 
                        @csrf
                                   <!-- ---------------  -->
                                        <div class="form-group">
                                            <label for=""> Address</label>
                                            <input type="text" class="form-control input-rounded" name="address"  value="{{$edit_contactus->address }}">
                                        </div>
                                   <!-- ---------------  -->
                                     <!-- ---------------  -->
                                     <div class="form-group">
                                     <label for="">Email</label>

                                            <input type="email" class="form-control input-rounded" name="email"  value="{{$edit_contactus->email }}">
                                        </div>
                                   <!-- ---------------  -->
                                     <!-- ---------------  -->
                                     <div class="form-group">
                                     <label for="">Phone</label>

                                            <input type="text" class="form-control input-rounded" name="phone"  value="{{$edit_contactus->phone }}">
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