@extends('frontend.layouts.app')
@section('content')
    <!-- Error-404 Start -->

    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error">
                        <div class="error-page">
                            <div class="detail">
                                <h1>OOOPS... ERROR 404</h1>
                                <h3>ขออภัย, ระบบไม่พบหน้าที่คุณต้องการ.</h3>
                                <a href="{{ route("index") }}"><i class="icon-home"></i> Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Error-404 End -->
@endsection