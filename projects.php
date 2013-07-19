<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>hi, i'm neil!</title>
        <meta name="description" content="Neil Sethi's personal landing page.">
        <meta name="viewport" content="width=device-width">
        <link rel="icon" type="image/x-icon" href="img/favicon.png" />
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->


        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="css/liquid-slider.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/font-awesome-social.css">
        
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <script src="js/jquery-1.9.1.min.js"></script>
        
        <script src="js/bootstrap.js"></script>
        <!-- Liquid Slider relies on jQuery and easing effects-->
        <script src="js/jquery.easing.1.3.js"></script>
        <!-- Optional code for enabling touch -->
        <script src="js/jquery.touchSwipe.min.js"></script>
        <!-- This is Liquid Slider code. The full version (not .min) is also included in the js directory -->
        <script src="js/jquery.liquid-slider.min.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        
   <!--[if IE 7]> 
  <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
   <![endif]-->
        <script>
        $(document).ready(function() {
                  $("#various1").fancybox({
                      'titlePosition'     : 'inside',
                      'transitionIn'      : 'none',
                      'transitionOut'     : 'none'
                  });
                  $("#various2").fancybox({
                      'titlePosition'     : 'inside',
                      'transitionIn'      : 'none',
                      'transitionOut'     : 'none'
                  });
                  $("#various3").fancybox({
                      'titlePosition'     : 'inside',
                      'transitionIn'      : 'none',
                      'transitionOut'     : 'none'
                  });
                  $("#various4").fancybox({
                      'titlePosition'     : 'inside',
                      'transitionIn'      : 'none',
                      'transitionOut'     : 'none'
                  });
                  
              });
        </script>        
  </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        <br>
        <div class="container">

          <!-- CENTER TITLE PANE -->
          <div class="row">
            <div class="span6">
            </div>
            <div class="span6">
              <h1>Neil Sethi</h1>
              <br><br>
              <ul id="nav-list">
                <li><a href="contact.php"><h2>contact</h2></a></li>
                <li><a href="projects.php"><h2>projects</h2></a></li> 
                <li class="first"><a href="index.php"><h2>home</h2></a></li>
              </ul>
            </div>
          </div>
          <hr>

          <div class="rel-break"></div>
          <div class="row">
            <!-- STATIC LEFT HAND PANEL HERE-->            
            <div class="span6" id="left">
              <div class="inside">
                <p class="bang1"> I'm a senior in </p>
                <br>
                <p class="bang1"> Computer Science </p>
                <br>
                <span><p class="bang1" > @ <a href="http://www.emory.edu">Emory University</a>, </p> 
                <p class="bang2"> a product dev</p>
                <br> 
                <p class="bang2">@ 
                  <a href="http://www.ecommhub.com"><i class="icon-shopping-cart"></i> eCommHub</a>, & <br></p>
                <p class="bang3"> an intern</p> 
                <br>
                <p class="bang3">@ <a href="http://www.dropbox.com"><i class="icon-cloud"></i> Dropbox.</a></p>   

              </div>            

            </div>
            
                        <!-- RIGHT HAND PANEL HERE-->
                      <center>
                      <div class="span6" id="right" style="padding: 0px">
                         <div class="row">
                          <h3>eCommHub&trade;</h3>
                             <a id="various4" href="#inline4" title="eCommHub" name="various4">
                               <img class="grayscale" src="img/ecommhub-prev.png"/>
                             </a>
                               <div id="inline4" style="display:none;width:30em;height:22em;text-align:center;overflow:none;">
                                 <center><a href="http://ecommhub.com" target="_blank">
                                   <img src="img/ecommhub.png" style="width:70%;margin-left:14%"/></a>
                                 </center>
                                 <p class="description" style="font-size:12px">eCommHub is a 500 Startups-backed eCommerce automation platform built on Rails that's changing
                                   the way eCommerce works. I develop various things on the back-end/front-end, conduct support,
                                    and "growth hack" at eCommHub with a team based in Atlanta. 
                                    Check it out if you are thinking of automating your
                                    Shopify, Magento, or BigCommerce store!</p>
                               </div><!--End Description-->
                          </div><!--End Row-->

                          <div class="row">
                            <h3>WMRE.fm</h3>
                              <a id="various1" href="#inline1" title="WMRE" name="various1">
                                <img class="grayscale" src="img/wmre-prev.png"/>
                              </a>
                              <div id="inline1" style="display:none;width:35em;height:25em;text-align:center;overflow:none;">
                                  <a href="http://wmre.fm" target="_blank">
                                    <img src="img/wmre.png" style="width:70%;margin-left:12%"/>
                                  </a>
                                  <p class="description">WMRE is Emory's official radio station. As a DJ and the technical
                                    director of WMRE, I re-designed the website and regulate the stream to
                                    ensure content delivery both on campus and beyond. The latest iteration
                                    of the site features
                                    an image carousel, a music player, a music stream player, and a blog.
                                    You can view it live by clicking the picture above!  </p>
                              </div><!--End Project-->
                          </div><!--End Row-->

                        <div class="row">
                          <h3>Cooperat.es</h3>
                            <a id="various2" href="#inline2" title="Cooperat.es" name="various2">
                              <img class="grayscale" src="img/coop-prev.png" />
                            </a>
                              <div id="inline2" style="display:none;width:30em;height:25em;text-align:center;overflow:none;">
                                <center>
                                  <a href="http://cooperat.es" target="_blank"><img src="img/cooperates.png" style="width:70%;margin-left:14%"/>
                                </a></center>
                                <p class="description">Cooperat.es is a B2B automation platform for inventory management by
                                  restaurants and ingredient suppliers. It was the final project for CS 370: Software
                                  Engineering Practicum and built on Rails. You can view it live by clicking the picture above! 
                                  </p>
                              </div><!--ENd Project-->
                        </div><!--End Row-->
                    </div><!--End Span6-->
                  </div><!--END Half Span & PROJECTS-->
              </center>
              <hr>
              </div> <!--END RIGHT HAND PANEL-->
            </div> <!--END ROW-->
                      <center><br><p class="footer_font"> Built on Twitter Bootstrap, Font-Awesome, FancyBox, & jQuery<br>
                        Code and design by Neil Sethi &copy; 2013, Credit to <a href="http://williamhockey.com">Will</a> and <a href="http://www.angelaconstance.com">Angela</a> for design inspiration.</p></center>
                    </div> <!--END CONTAINER-->


        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-33878629-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='http://www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        
    </body>
</html>
