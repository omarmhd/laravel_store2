<!DOCTYPE html>
<html lang="en">
    @include('header.header')
<body>
    @include('header.headerhome')
    @include('header.headerbot')
    @include('header.menu')
    @yield('content')
    @include('footer.footer')
    @include('footer.javascriptfiles')
</body>
   
</html>