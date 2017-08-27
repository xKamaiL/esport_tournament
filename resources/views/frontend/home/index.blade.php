@extends('frontend.layouts.wide')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            @include('frontend.home.slider')
        </div>
        @include('frontend.home.youtube')
        <div class="col-lg-12 col-sm-12">
            <div class="margin-30"></div>
        </div>
        @include('frontend.home.news')
    </div>
@endsection
@push('js')
    <script>
        $("#tweet-slide > div:gt(0)").hide();
        setInterval(function() {
            $('#tweet-slide > div:first')
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo('#tweet-slide');
        },  3000);
    </script>
@endpush