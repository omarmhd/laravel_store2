<!DOCTYPE html >
<html >
  <head>

    @include('backend.base_layout.header.header')
    @stack('style')
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('backend.base_layout.nav-bar')
      <!-- Left side column. contains the logo and sidebar -->
       @include('backend.base_layout.side-bar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @yield('content')
      </div>
      <!-- /.content-wrapper -->

      @includeIf('backend.base_layout.footer.footer')

    </div><!-- ./wrapper -->
    @includeIf('backend.base_layout.footer.footer-meta')
    @stack('js')

  </body>
</html>


