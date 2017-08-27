<?php
$newsList = null;
?>
<div class="col-lg-12">
    <section class="post-detail">

        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <h3 class="title-line"><i class="fa fa-lg fa-gamepad"></i> E-SPORT NEWS</h3>
            </div>
            <div class="foreach-news">
                @if(count($newsList) == 0)
                    <center>
                        <br><br>
                        <h3><i class="fa fa-lg fa-times"></i> ยังไม่มีข่าวสาร ณ เวลานี้.</h3>
                    </center>
                    @else
                    <div class="col-md-4">
                        <a class="articles-posts" href="detail-style6.html">
                            <div class="v-player"><img src="images/player-icon.png" alt=""></div>
                            <div class="post-meta">
                                <span class="title">Car Collection</span>
                                <span class="author">John Doe <span class="date">Jul 6, 2015</span></span>
                            </div>
                            <div class="black-shadow"></div>
                            <img src="images/featured-14.jpg" alt="">
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </section>
</div>