<!DOCTYPE html>
<html lang="en">

    <head>
        <title>LineXTI - Desenvolvimento</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/images/favicon.png" rel="icon">
        <link rel="stylesheet" type="text/css" href="assets/css/master.css">	

    </head>

    <body id="home" data-offset="80" data-target=".navbar" data-spy="scroll">

        <div id="page-preloader"><span class="spinner"></span></div>
        
        @include('partials.header') <!-- Header -->

        @yield('content')

        @include('partials.footer') <!-- Footer -->    

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
        <!-- Include BOOTSTRAP plugins  -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Include plugins --> 
        <script src="assets/js/jquery.mb.YTPlayer.js"></script>		
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/jquery.ui.effect.min.js"></script>
        <script src="assets/js/contact.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/jquery.waypoints.min.js"></script>
        <script src="assets/js/fancybox/jquery.fancybox.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script>
            new WOW().init();
            (function($) {
                $(document).ready(function() {
                    if (!Modernizr.touch) {
                        $(".player").mb_YTPlayer();
                    } else {
                        $('.video-bg ').css('display', 'block');
                    }
                });
            })(jQuery);
        </script>
        <script>
            new WOW().init();
        </script>
        <!-- Google maps -->    
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="assets/js/map.js"></script>  
        <!-- Include local script calls -->  
        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/TweenMax.min.js"></script>
        <script src="assets/js/highcharts.js"></script>
        <script src="assets/js/Chart.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(document).on("scroll", function() {
                    if ($(window).scrollTop() > $("#programs").position().top - $(window).height() - 100) {
                        $('.program-icon .chart').easyPieChart({
                            animate: 2000,
                            'size': '130',
                            'lineWidth': '4',
                            trackColor: '#069  ',
                            scaleColor: false,
                            barColor: "#fff",
                            onStep: function(from, to, percent) {
                                this.el.children[0].innerHTML = Math.round(percent);
                            }
                        });
                    }
                });
            });
        </script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>
