<!DOCTYPE html>
<html>
@include('partials._head')
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    @include('partials._navbar')
    @include('partials._slidebar')
    <div class="content-wrapper">
      <div class="content-header">
        <section class="content">
          <div class="container-fluid">
              @yield('content')
          </div>
        </section>
      </div>
    </div>
    @include('partials._footer')
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
  </div>
  @include('javascripts')
</body>
</html>
