<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Head -->
    @include('frontend.layouts.head')
    <!-- Styles -->
    @include('frontend.layouts.style')
</head>
<body>
<div id="app" data-content="Laravel - Content">
@yield('content')
</div>
<!-- Scripts , JS -->
@include('frontend.layouts.js')
</body>
</html>
