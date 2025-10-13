<!doctype html>
<html lang="{{ $app->getLocale() }}">
@include('layout.partial.head')
<body>
    @yield('content')
</body>

@include('layout.partial.script')
</html>
