<!DOCTYPE html >
<html >
  <head>

    @include('backend.base_layout.header.header')
    <style>
    	h1, h2, h3, h4, h5, h6 {
		font-family: Hacen;
	}
	a {
		font-family: Hacen !important;
		/* font-size: 14px;*/
	}
  </style>
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


