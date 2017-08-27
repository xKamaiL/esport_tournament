@extends('frontend.layouts.app')
@section('content')
    <div class="col-md-8">
        <!-- Posts Start -->
        <section class="left-sec row post-style">

        </section>
        <!-- Posts End -->
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