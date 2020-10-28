@extends('master')

@section('content')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">User List</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">User</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
    
 <div>&nbsp</div>   
  <div class="container-fluid"> 
    <div class="row">
      <div class="col-md-12 text-right">
        <form method="get" action="{{ action('UserController@create') }}">
          @method('DELETE')
          <button type="submit" class="btn btn-success pull-righ" style="width: 150px;">Create</button>
        </form>
      </div>
    </div>
 </div>
 <div class="row">
  <div class="col-12">
    <div class="card">
    <form action="{{ action('UserController@index') }}" method="GET">
      <div class="card-header">
        <h3 class="card-title">Responsive Hover Table</h3>
        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 160px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search Username">
            <div class="input-group-append">
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
    </form> 
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">employee_id</th>
              <th scope="col">user_type</th>
              <th scope="col">username</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          @if($datas == [])
            <tbody>
                <tr>
                  <td>Data Not Found</td>
                </tr>
            </tbody>
          @else
          @foreach ($datas as $index => $user)
          <tbody>
            <tr>
              <th scope="row">{{ $index + 1 }}</th>
              <td>{{$user->employee_id}}</td>
              <td>{{$user->user_type}}</td>
              <td>{{$user->username}}</td>
              <td>
              <a href="{{ route('users.edit', $user->id) }}" class="btn btn-xs btn-info pull-right">Edit</a>
              <a href="{{ route('users.show', $user->id)}}"  class="btn btn-primary btn-xs">Detail</button>
              </td>
            </tr>
          </tbody>
          @endforeach 
            
          @endif
        </table>
        <div style="margin-left: 20px; margin-top: 10px;">{{ $datas->links() }}</div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
</div>
