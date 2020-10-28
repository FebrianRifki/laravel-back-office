@extends('master')
@section('content')
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-9 col-md-offset-2">
        @include('partials._notification')
    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Create Form</h3>
        </div> 
        {{ Form::open(array('route' => 'users.store')) }} 
            <div class="card-body">
            <div class="form-group row">
                {{ Form::label('employee_id', 'Employee ID', ['class' => 'col-sm-2 col-form-label']) }}
                    <div class="col-sm-10">
                        {{ Form::text('employee_id', null,  ['class' => 'form-control'] ) }}
                    </div>
            </div>
            <div class="form-group row">
                {{ Form::label('user_type', 'User Type', ['class' => 'col-sm-2 col-form-label']) }}
                    <div class="col-sm-10">
                        {{ Form::text('user_type', null,  ['class' => 'form-control'] ) }}
                    </div>
            </div>
            <div class="form-group row">
                {{ Form::label('username', 'Username', ['class' => 'col-sm-2 col-form-label']) }}
                    <div class="col-sm-10">
                        {{ Form::text('username', null,  ['class' => 'form-control'] ) }}
                    </div>
            </div>
            <div class="form-group row">
                {{ Form::label('password', 'Password', ['class' => 'col-sm-2 col-form-label']) }}
                    <div class="col-sm-10">
                        {{ Form::password('password',  ['class' => 'form-control'] ) }}
                    </div>
                    </div>
            </div>
            
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-10 text-right">
                        {{ Form::submit('Submit', ['class' => 'btn btn-info', 'value' => 'submit']) }}
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-default" onclick="window.location='{{ route("users.index") }}'">Cancel</button>
                    </div>
                </div>
            </div> 
        {{ Form::close() }}
    </div>
</div>
</div>
@endsection