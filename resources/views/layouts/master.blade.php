<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head-tag')
    @yield('head-tag')

    @include('layouts.styles')
    @yield('style')
    @stack('style')
</head>

<body>
    @include('layouts.header')

    <hr>

    @yield('content')

    @include('layouts.script')
    @yield('script')
    @stack('script')
</body>

</html>
