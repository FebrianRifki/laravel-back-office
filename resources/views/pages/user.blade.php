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
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">employee_id</th>
      <th scope="col">user_type</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach ($datas as $index => $user)
  <tbody>
    <tr>
      <th scope="row">{{ $index + 1 }}</th>
      <td>{{$user->employee_id}}</td>
      <td>{{$user->user_type}}</td>
      <td>{{$user->username}}</td>
      <td>{{$user->password}}</td>
      <td>
      <a href="{{ route('users.edit', $user->id) }}" class="btn btn-xs btn-info pull-right">Edit</a>
      <a href="{{ route('users.show', $user->id)}}"  class="btn btn-primary btn-xs">Detail</button>
      </td>
    </tr>
  </tbody>
    @endforeach   
</table>
{{ $datas->links() }} 
@endsection
</div>
@section('extra-script')

{{Html::script('assets/js/custom.js')}}

@endsection