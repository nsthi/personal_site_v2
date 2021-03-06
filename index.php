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
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
        
   <!--[if IE 7]> 
  <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
   <![endif]-->
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
              <div class="span6" id="right">
                <div class="row">
                    <p>I'm an aspiring software engineer and entrepreneur. I have developed a proclivity for Rails, though
                      I originally coded in Java.
                      <br><br>
                      Outside of coding, I love poetry and literature, as well as listening to and making interesting music. 
                      </p><br>
                  </div>
                    </center>
              
            </div> <!--END RIGHT HAND PANEL-->
          </div> <!--END ROW-->
            <hr>
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
