<!-- Top Bar Start -->
<section class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navi">
                    <ul class="top-nav">
                        <?php
                        if(!Auth::check()){
                        ?>
                        <li><a href="#"><span class="fa fa-user"></span> Welcome, Guest</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url("auth/login") }}" style="font-family: 'Kanit', sans-serif;"><span class="fa fa-sign-in"></span> Login</a></li>
                                <li><a href="{{ url("auth/register") }}" style="font-family: 'Kanit', sans-serif;"><span class="fa fa-users"></span> Register</a></li>
                            </ul>
                        </li>
                        <?php
                        }else{

                        }
                        ?>

                    </ul>
                </div>

                <div class="top-right">
                    <div class="demos">
                        <a href="{{ route("live") }}" style="background: #ec3233;"><span class="fa fa-youtube-play fa-lg"></span> Live</a>
                    </div>

                    <section class="main">
                        <div class="social-menu">
                            <div id="dd" class="social-dropdown" tabindex="1"><span class="fa fa-share-alt fa-lg"></span> Follow Us
                                <ul class="dropdown">
                                    <li><a href="#"><span class="fa fa-facebook-official"></span> Facebook</a></li>
                                    <li style="display: none"></li>
                                    <li style="display: none"></li>
                                    <li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <div class="search-btn"><i class="fa fa-lg fa-search" id="show-search"></i></div>


                </div>

            </div>
        </div>
    </div>

</section>
<div class="search" id="search">
    <div class="container">
        <form class="form-search" action="" method="post">
            <input type="text" placeholder="ค้นหาสิ่งที่ต้องการ...">
            <a href="#" onclick="event.preventDefault()"><i class="fa fa-times" id="close-search"></i></a>
        </form>
    </div>
</div>
<!-- Top Bar End -->