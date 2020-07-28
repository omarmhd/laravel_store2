<!DOCTYPE html>
<html lang="en">
    @include('header.header')
    @yield('css-styles')
<body>
    @include('header.headerhome')
    @include('header.headerbot')
    @include('header.menu')
    @yield('content')
    @include('footer.footer')
    @include('footer.javascriptfiles')
</body>
@yield('js-scripts')
</html>