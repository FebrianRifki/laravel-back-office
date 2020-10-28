@extends('master')
@section('content')
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-9 col-md-offset-2">
        @include('partials._notification')
         <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Edit Form</h3>
            </div> 
        <form action="{{action("UserController@update",$result['id'])}}" method="POST" class="form-horizontal">
                @method('PUT')
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="employeeId" class="col-sm-2 col-form-label">Employee id</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$result['employee_id']}}" id="employee_id" name="employee_id" placeholder="Employee Id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="usertype" class="col-sm-2 col-form-label">User Type</label>
                        <div class="col-sm-10">
                        <select class="custom-select" id="user_type" name="user_type">
                                <option>SUPER ADMIN</option>
                                <option>ADMIN</option>
                                <option selected>NORMAL</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{$result['username']}}" id="username" name="username" placeholder="Username">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                        <div class="row">
                            <div class="col-md-10 text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-default" onclick="window.location='{{ route("users.index") }}'">Cancel</button>
                            </div>
                        </div>
                    </div> 
                <!-- /.card-footer -->
            </form>
         </div>
    </div>
</div>
@endsection

