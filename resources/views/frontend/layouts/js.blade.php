<script type="text/javascript" src="{{ url("frontend/dist/js/jquery.js") }}"></script>
<script type="text/javascript" src="{{ url("frontend/dist/js/bootstrap.js") }}"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="{{ url("frontend/dist/js/jquery.themepunch.tools.min.js") }}"></script>
<script type="text/javascript" src="{{ url("frontend/dist/js/jquery.themepunch.revolution.min.js") }}"></script>

<script type="text/javascript">
    jQuery(document).ready(function() { jQuery('.tp-banner').show().revolution( { dottedOverlay:"none", delay:16000, startwidth:1280, startheight:518, hideThumbs:200, thumbWidth:100, thumbHeight:50, thumbAmount:5, navigationType:"bullet", navigationArrows:"solo", navigationStyle:"preview1", touchenabled:"on", onHoverStop:"on", swipe_velocity: 0.7, swipe_min_touches: 1, swipe_max_touches: 1, drag_block_vertical: false, parallax:"mouse", parallaxBgFreeze:"on", parallaxLevels:[7,4,3,2,5,4,3,2,1,0], keyboardNavigation:"off", navigationHAlign:"center", navigationVAlign:"bottom", navigationHOffset:0, navigationVOffset:20, soloArrowLeftHalign:"left", soloArrowLeftValign:"center", soloArrowLeftHOffset:20, soloArrowLeftVOffset:0, soloArrowRightHalign:"right", soloArrowRightValign:"center", soloArrowRightHOffset:20, soloArrowRightVOffset:0, shadow:0, fullWidth:"on", fullScreen:"off", spinner:"spinner4", stopLoop:"off", stopAfterLoops:-1, stopAtSlide:-1, shuffle:"off", autoHeight:"off", forceFullWidth:"off", hideThumbsOnMobile:"off", hideNavDelayOnMobile:1500, hideBulletsOnMobile:"off", hideArrowsOnMobile:"off", hideThumbsUnderResolution:0, hideSliderAtLimit:0, hideCaptionAtLimit:0, hideAllCaptionAtLilmit:0, startWithSlide:0, videoJsPath:"rs-plugin/videojs/", fullScreenOffsetContainer: "" }); });	//ready
</script>
<!-- Stick Header -->
<script type="text/javascript" src="{{ url("frontend/dist/js/jquery-scrolltofixed.js") }}"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner.
        // This is the default behavior.

        jQuery('.sticky-header').scrollToFixed();


        // Dock the footer to the bottom of the page, but scroll up to reveal more
        // content if the page is scrolled far enough.



        // Dock each summary as it arrives just below the docked header, pushing the
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.sticky-header').outerHeight(true) + 10,
                limit: function() {
                    var limit = 0;
                    if (next) {
                        limit = $(next).offset().top - $(this).outerHeight(true) - 10;
                    } else {
                        limit = $('.footer').offset().top - $(this).outerHeight(true) - 10;
                    }
                    return limit;
                },
                zIndex: 999
            });
        });
    });
</script>

<script type="text/javascript">

    /* ------------------------------------------------------------------------ */
    /* Social Drop Down *///
    /* ------------------------------------------------------------------------ */
    function DropDown(el) {
        this.dd = el;
        this.initEvents();
    }
    DropDown.prototype = {
        initEvents : function() {
            var obj = this;
            obj.dd.on('click', function(event){
                $(this).toggleClass('active');
                event.stopPropagation();
            });
        }
    }
    $(function() {

        var dd = new DropDown( $('#dd') );
        $(document).click(function() {
// all dropdowns
            $('.wrapper-dropdown-2').removeClass('active');
        });
    });


    /* ------------------------------------------------------------------------ */
    /* Search bar *///
    /* ------------------------------------------------------------------------ */

    jQuery("#show-search").click(function(){
        jQuery("#search").fadeIn();
    });
    jQuery("#close-search").click(function(){
        jQuery("#search").fadeOut();
    });
    //TextRotators
    ({
        animation: "flipUp",
        speed: 0
    });

</script>


<script type="text/javascript" src="{{ url("frontend/dist/js/jquery.cubeportfolio.min.js") }}"></script>
<script type="text/javascript" src="{{ url("frontend/dist/js/main.js") }}"></script>
<script type="text/javascript" src="{{ url("frontend/dist/js/jquery.mmenu.min.all.js") }}"></script>

<script type="text/javascript" src="{{ url("frontend/app.js") }}"></script>
@stack('js')
