<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Head -->
@include('frontend.layouts.head')
<!-- Styles -->
    @include('frontend.layouts.style')
</head>
<body>
<div id="warp">
    @include('frontend.layouts.html.top_bar')

    @include('frontend.layouts.html.title')

    @stack('slider')

    @include('frontend.layouts.html.content')

    @include('frontend.layouts.html.footer')
</div>
<!-- Scripts , JS -->
@include('frontend.layouts.js')
</body>
</html>
