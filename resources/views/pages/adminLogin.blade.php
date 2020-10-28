<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @include('css')
  <title>Document</title>
</head>
<body style="background-image: url('/assets/images/unnamed.jpg');">
    <div class="col-lg-6 offset-lg-3 ">
    <div>&nbsp></div>
    <div>&nbsp></div> 
    <div style="max-width: 500px; margin: auto;">@include('partials._notification')</div>   
    <div class="card card-primary" style="max-width: 500px; margin: auto;">
        <div class="card-header">
          <h3 class="card-title">Login</small></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->  
        <form action="{{action("Auth\LoginController@postLogin")}}" method="POST" role="form" id="quickForm" novalidate="novalidate">
          {{ csrf_field() }}
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="email" name="username" class="form-control is-invalid" id="username" placeholder="Enter email" aria-describedby="exampleInputEmail1-error" aria-invalid="true"></div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control is-invalid" id="password" placeholder="Password" aria-describedby="exampleInputPassword1-error"></div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  @include('javascripts')
</body>
</html>

