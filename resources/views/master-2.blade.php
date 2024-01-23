<!DOCTYPE html>
<!--
   Theme Name: HASWELL
   Description: HTML/CSS
   Author: ABCgomel
   Designed & Coded by ABCgomel

   -->
<html lang="en">
   <head>
      <title>Haswell - Responsive HTML5 Template</title>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="robots" content="index, follow" >
      <meta name="keywords" content="HTML5 Template" >
      <meta name="description" content="Haswell - Responsive HTML5 Template" >
      <meta name="author" content="ABCgomel">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- FAVICONS -->
      <link rel="shortcut icon" href="images/favicon/favicon.png">
      <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png">
      <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png">
      <!-- CSS -->
      <!-- REVOSLIDER CSS SETTINGS -->
      <link rel="stylesheet" type="text/css" href="{{asset('theme/rs-plugin/css/settings.min.css')}}" media="screen">
      <!-- BOOTSTRAP -->
      <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
      <!-- GOOGLE FONT -->
      <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700' rel='stylesheet' type='text/css'>
      <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS -->
      <link rel="stylesheet" href="{{asset('theme/css/icons-fonts.css')}}" >
      <!-- CSS THEME -->
      <link rel="stylesheet" href="{{asset('theme/css/style.css')}}" >
      <!-- ANIMATE -->
      <link rel='stylesheet' href="{{asset('theme/css/animate.min.css')}}">
      <!-- IE Warning CSS -->
      <!--[if lte IE 8]>
      <link rel="stylesheet" type="text/css" href="{{asset('theme/css/ie-warning.css')}}" >
      <![endif]-->
      <!--[if lte IE 8]>
      <link rel="stylesheet" type="text/css" href="{{asset('theme/css/ie8-fix.css')}}" >
      <![endif]-->
      <!-- Magnific popup  in style.css	Owl Carousel Assets in style.css -->
      <!-- CSS end -->
      <!-- JS begin some js files in bottom of file-->
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Modernizr -->
      <!-- <script src="{{asset('theme/js/modernizr.js')}}"></script> -->
   </head>
   <body>
      <!-- LOADER -->
      <div id="loader-overflow">
         <div id="loader3">Please enable JS</div>
      </div>
      <div id="wrap" class="boxed ">
         <div class="grey-bg">
            <!-- Grey BG  -->
            <!--[if lte IE 8]>
            <div id="ie-container">
               <div id="ie-cont-close">
                  <a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='images/ie-warn/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
               </div>
               <div id="ie-cont-content" >
                  <div id="ie-cont-warning">
                     <img src='images/ie-warn/ie-warning.jpg' alt='Warning!'>
                  </div>
                  <div id="ie-cont-text" >
                     <div id="ie-text-bold">
                        You are using an outdated browser
                     </div>
                     <div id="ie-text">
                        For a better experience using this site, please upgrade to a modern web browser.
                     </div>
                  </div>
                  <div id="ie-cont-brows" >
                     <a href='http://www.firefox.com' target='_blank'><img src='images/ie-warn/ie-warning-firefox.jpg' alt='Download Firefox'></a>
                     <a href='http://www.opera.com/download/' target='_blank'><img src='images/ie-warn/ie-warning-opera.jpg' alt='Download Opera'></a>
                     <a href='http://www.apple.com/safari/download/' target='_blank'><img src='images/ie-warn/ie-warning-safari.jpg' alt='Download Safari'></a>
                     <a href='http://www.google.com/chrome' target='_blank'><img src='images/ie-warn/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
                  </div>
               </div>
            </div>
            <![endif]-->
            @yield('content')

            <!-- FOOTER 2 -->
            <footer class="page-section pt-80 pb-50">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3 col-sm-3 widget">
                        <div class="logo-footer-cont">
                           <a href="index.html">
                           <img class="logo-footer" src="images/logo-footer.png" alt="logo">
                           </a>
                        </div>
                        <div class="footer-2-text-cont">
                           <address>
                              555 California str, Suite 100<br>
                              San&nbsp;Francisco, CA 94107
                           </address>
                        </div>
                        <div class="footer-2-text-cont">
                           1-800-312-2121<br>
                           1-800-310-1010
                        </div>
                        <div class="footer-2-text-cont">
                           <a class="a-text" href="mailto:info@haswell.com">info@haswell.com</a>
                        </div>
                     </div>
                     <div class="col-md-3 col-sm-3 widget">
                        <h4>NAVIGATE</h4>
                        <ul class="links-list bold a-text-cont">
                           <li><a href="index.html">HOME</a></li>
                           <li><a href="grid-system.html">GRID SYSTEM</a></li>
                           <li><a href="services.html">SERVICES</a></li>
                           <li><a href="index-portfolio.html">PORTFOLIO</a></li>
                           <li><a href="index-blog.html">BLOG</a></li>
                           <li><a href="index-shop.html">SHOP</a></li>
                           <li><a href="intro.html">PAGES</a></li>
                        </ul>
                     </div>
                     <div class="col-md-3 col-sm-3 widget">
                        <h4>ABOUT US</h4>
                        <ul class="links-list a-text-cont" >
                           <li><a href="about-us.html">COMPANY</a></li>
                           <li><a href="services.html">WHAT WE DO</a></li>
                           <li><a href="https://help.market.envato.com/hc/en-us">HELP CENTER</a></li>
                           <li><a href="http://themeforest.net/legal/market">TERMS OF SERVICE</a></li>
                           <li><a href="contact.html">CONTACT</a></li>
                        </ul>
                     </div>
                     <div class="col-md-3 col-sm-3 widget">
                        <h4>RECENT POSTS</h4>
                        <div id="post-list-footer">
                           <div class="post-prev-title">
                              <h3><a class="a-text"  href="blog-single-sidebar-right.html">New trends in web design</a></h3>
                           </div>
                           <div class="post-prev-info">
                              Jule 10
                           </div>
                           <div class="post-prev-title">
                              <h3><a class="a-text"  href="blog-single-sidebar-right.html">The sound of life</a></h3>
                           </div>
                           <div class="post-prev-info">
                              October 10
                           </div>
                           <div class="post-prev-title">
                              <h3><a class="a-text"  href="blog-single-sidebar-right.html">Time for minimalism</a></h3>
                           </div>
                           <div class="post-prev-info">
                              September 21
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="footer-2-copy-cont clearfix">
                     <!-- Social Links -->
                     <div class="footer-2-soc-a right">
                        <a href="https://1.envato.market/a1gQR" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://1.envato.market/a1gQR" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://1.envato.market/a1gQR" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
                        <a href="https://1.envato.market/a1gQR" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="https://dribbble.com/abcgomel" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a>
                     </div>
                     <!-- Copyright -->
                     <div class="left">
                        <a class="footer-2-copy" href="https://1.envato.market/a1gQR" target="_blank">&copy; HASWELL 2020</a>
                     </div>
                  </div>
               </div>
            </footer>
            <!-- BACK TO TOP -->
            <p id="back-top">
               <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
            </p>
         </div>
         <!-- End BG -->
      </div>
      <!-- End wrap -->
      <!-- JS begin -->
      <!-- jQuery  -->
      <script src="{{asset('theme/js/jquery-1.11.2.min.js')}}"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
      <!-- MAGNIFIC POPUP -->
      <script src="{{asset('theme/js/jquery.magnific-popup.min.js')}}"></script>
      <!-- PORTFOLIO SCRIPTS -->
      <script src="{{asset('theme/js/isotope.pkgd.min.js')}}"></script>
      <script src="{{asset('theme/js/imagesloaded.pkgd.min.js')}}"></script>
      <script src="{{asset('theme/js/masonry.pkgd.min.js')}}"></script>
      <!-- COUNTER -->
      <script src="{{asset('theme/js/jquery.countTo.js')}}"></script>
      <!-- APPEAR -->
      <script src="{{asset('theme/js/jquery.appear.js')}}"></script>
      <!-- OWL CAROUSEL -->
      <script src="{{asset('theme/js/owl.carousel.min.js')}}"></script>
      <!-- PARALLAX -->
      <script src="{{asset('theme/js/jquery.stellar.min.js')}}"></script>
      <!-- MAIN SCRIPT -->
      <script src="{{asset('theme/js/main.js')}}"></script>
      <!-- JS end -->
      <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
      <script src="{{asset('theme/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
      <script src="{{asset('theme/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
      <!-- SLIDER REVOLUTION INIT  -->
      <script>
         jQuery(document).ready(function() {

            jQuery('#rs-fullwidth').revolution(
             {
               dottedOverlay:"none",
               delay:16000,
               startwidth:1170,
               startheight:700,
               hideThumbs:200,

               thumbWidth:100,
               thumbHeight:50,
               thumbAmount:5,

               //fullScreenAlignForce: "off",

               navigationType:"none",
               navigationArrows:"solo",
               navigationStyle:"preview4",

               hideTimerBar:"on",

               touchenabled:"on",
               onHoverStop:"on",

               swipe_velocity: 0.7,
               swipe_min_touches: 1,
               swipe_max_touches: 1,
               drag_block_vertical: false,

               parallax:"scroll",
               parallaxBgFreeze:"on",
               parallaxLevels:[45,40,35,50],
               parallaxDisableOnMobile:"on",

               keyboardNavigation:"off",

               navigationHAlign:"center",
               navigationVAlign:"bottom",
               navigationHOffset:0,
               navigationVOffset:20,

               soloArrowLeftHalign:"left",
               soloArrowLeftValign:"center",
               soloArrowLeftHOffset:20,
               soloArrowLeftVOffset:0,

               soloArrowRightHalign:"right",
               soloArrowRightValign:"center",
               soloArrowRightHOffset:20,
               soloArrowRightVOffset:0,

               shadow:0,
               fullWidth:"on",
               fullScreen:"off",

               spinner:"spinner4",

               stopLoop:"off",
               stopAfterLoops:-1,
               stopAtSlide:-1,

               shuffle:"off",

               autoHeight:"off",
               forceFullWidth:"off",

               hideThumbsOnMobile:"off",
               hideNavDelayOnMobile:1500,
               hideBulletsOnMobile:"off",
               hideArrowsOnMobile:"off",
               hideThumbsUnderResolution:0,

               hideSliderAtLimit:0,
               hideCaptionAtLimit:0,
               hideAllCaptionAtLilmit:0,
               startWithSlide:0,
               //fullScreenOffsetContainer: ""
             });

         });	//ready

      </script>
   </body>
</html>
