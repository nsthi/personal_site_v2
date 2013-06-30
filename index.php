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
        $(function(){
          /* Here is the slider using default settings */
          $('#slider-id').liquidSlider({
            slideEaseDuration: 120});     
        });
        </script>
        
        <script>
        $(document).ready(function() {

                  //General
                  $('h1').css('color', '#575A5C'); //Header 1
                  $('h2').css('color', '#03588C'); //Header 2
                  $('h2 a').css('color', '#3FA7ED'); //Header 2
                  $('h3').css('color', '#3FA7ED'); //Header 3
                  
                  //Footer
                  $('.footer_font a').css('color', '#03588C'); //Header 3
                  $('.footer_font a').css('font-weight', 'bold'); //Header 3

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
                  
                  $("a#fb").popover({
                    trigger: 'hover',
                    placement: 'top',
                    container: 'body',
                    html: true,
                    content: 'Facebook'
                  });

                  $("a#twitter").popover({
                    trigger: 'hover',
                    placement: 'top',
                    container: 'body',
                    html: true,
                    content: 'Twitter'
                  });

                  $("a#github").popover({
                    trigger: 'hover',
                    placement: 'top',
                    container: 'body',
                    html: true,
                    content: 'Github'
                  });

                  $("a#linkedin").popover({
                    trigger: 'hover',
                    placement: 'top',
                    container: 'body',
                    html: true,
                    content: 'LinkedIn'
                  });

                  $("a#soundcloud").popover({
                    trigger: 'hover',
                    placement: 'top',
                    container: 'body',
                    html: true,
                    content: 'Soundcloud'
                  });

                  $("a#instagram").popover({
                    trigger: 'hover',
                    placement: 'top',
                    container: 'body',
                    html: true,
                    content: 'Instagram'
                  });

                  $("a#hypem").popover({
                    trigger: 'hover',
                    placement: 'top',
                    container: 'body',
                    html: true,
                    content: 'Hype Machine'
                  });
                  
                  $("a#foursquare").popover({
                    trigger: 'hover',
                    placement: 'top',
                    container: 'body',
                    html: true,
                    content: 'Foursquare'
                  });

                  $("a#spotify").popover({
                    trigger: 'hover',
                    placement: 'top',
                    container: 'body',
                    html: true,
                    content: 'Spotify'
                  });

                  $(function() {
                    $('li.tab1').attr('onclick', 'changeText()');
                    $('li.tab1').attr('value', 'Change Text');
                    $('li.tab2').attr('onclick', 'changeText2()');
                    $('li.tab2').attr('value', 'Change Text');
                    $('li.tab3').attr('onclick', 'changeText3()');
                    $('li.tab3').attr('value', 'Change Text');                    
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
            <center>
              <h1>Neil Sethi</h1>
              <h2><a href="mailto:neilsethi@gmail.com">neilsethi@gmail.com</a></h2>
              <div class='horizontal-line'></div>
              <br>
            </center>
        
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
                  <a href="http://www.ecommhub.com"><i class="icon-shopping-cart"></i> eCommHub</a>, &<br></p>
                <p class="bang3"> an intern</p> 
                <br>
                <p class="bang3">@ <a href="http://www.dropbox.com"><i class="icon-cloud"></i> Dropbox.</a></p>   
              </div>            
            </div>
            
            <!-- RIGHT HAND PANEL HERE-->
            <div class="span6" id="right">
              <br>
              <!--SLIDER STARTS HERE-->       
              <div class="liquid-slider"  id="slider-id"> 
            <!--STARTER TAB-->
                <div>
                  <h2 class="title">About Me</h2>
                  <center><img class="portrait" src="img/portrait.jpg"></img>
                  <p><br>I'm an aspiring engineer (& a self-proclaimed FIFA 13 legend). 
                    <br>
                    I love poetry/literature, as well as listening to and making interesting music. 
                    </p><br>
                  </center>
                </div>
                
                <!--PROJECT SECTION-->
                <div>
                  <h2 class="title">Projects</h2>
                  <center>
                    <label class="download"> 
                      <a target="_blank" href="resume.pdf"><i class="icon-download"></i> Download my resume</a>
                    </label>
                    <hr style="margin-bottom: 5px">
                  </center>
                  <div class="row-fluid">
                      <div class="span6">
                      <center><h3>WMRE.fm</h3>
                        <a id="various1" href="#inline1" title="WMRE" name="various1">
                          <img class="grayscale" src="img/wmre.png"/>
                        </a>
                          <div id="inline1" style="display:none;width:45em;height:35em;overflow:none;">
                            <center><a href="http://wmre.fm" target="_blank"><img src="img/wmre.png" style="width:90%"/></a></center><br>
                            <p>WMRE is Emory's official radio station. As a DJ and the technical
                              director of WMRE, I re-designed the website and regulate the stream to
                              ensure content delivery both on campus and beyond. The latest iteration
                              of the site features
                              an image carousel, a music player, a music stream player, and a blog.
                              You can view it live by clicking the picture above!  </p>
                          </div>
                       </center>
                     </div>
                    
                      <div class="span6">
                      <center><h3>Cooperat.es</h3>
                        <a id="various2" href="#inline2" title="Cooperat.es" name="various2">
                          <img class="grayscale" src="img/cooperates.png"/>
                        </a>
                          <div id="inline2" style="display:none;width:45em;height:35em;overflow:none;">
                            <center><a href="http://cooperat.es" target="_blank"><img src="img/cooperates.png" style="width:90%"/></a></center><br>
                            <p>Cooperat.es is a B2B automation platform for inventory management by
                              restaurants and ingredient suppliers. It was the final project for CS 370: Software
                              Engineering Practicum and built on Rails. You can view it live by clicking the picture above! 
                              </p>
                          </div>
                       </center>
                     </div>
                  </div>   
                  <br>
                  <div class="row-fluid">
                      <div class="span6">
                      <center><h3>EduCakeMe</h3>
                        <a id="various3" href="#inline3" title="Educake.me" name="various3">
                          <img class="grayscale" src="img/educakeme.png"/>
                        </a>
                          <div id="inline3" style="display:none;width:45em;height:38em;overflow:none;">
                            <center><img src="img/educakeme.png" style="width:90%"/></center><br>
                            <p>EducakeMe was a product of Georgia Tech's 3 Day Startup. EduCakeMe was
                              a cake ordering and routing service built on Rails that processed orders for Highland Bakery
                              and enabled them to deliver on campus. Using the 1-800-Flowers model, parents would now have 
                              the option to give their students fresh cakes without the expensive overhaul of having to ship
                              a frozen cake or locate a bakery over the phone. It is still in production.</p>
                          </div>
                       </center>
                     </div>
                      
                      <div class="span6">
                      <center><h3>eCommHub&trade;</h3>
                        <a id="various4" href="#inline4" title="eCommHub" name="various4">
                          <img class="grayscale" src="img/ecommhub.png"/>
                        </a>
                          <div id="inline4" style="display:none;width:55em;height:41em;overflow:none;">
                            <center><a href="http://ecommhub.com" target="_blank">
                              <img src="img/ecommhub.png" style="width:90%"/></a></center><br>
                            <p>eCommHub is a 500 Startups-backed eCommerce automation platform built on Rails that's changing
                              the way eCommerce works. I develop various things on the back-end/front-end, conduct support,
                               and "growth hack" at eCommHub with a team based in Atlanta. 
                               Check it out if you are thinking of automating your
                               Shopify, Magento, or BigCommerce store!</p>
                          </div>
                       </center>
                     </div>
                      
                  </div><!--END FLUID ROW-->
                </div><!--END Half Span & PROJECTS-->
                
                
                <!--CONTACT-->
                <div id="yay">
                    <div class="row-fluid">
                      <div class="span6">
                        <h2 class="title" >Contact Me</h2>
                        <div class="social">
                          <span class="social" style="font-size:60px">
                            <ul style="list-style: none;" id="social">
                              <li><a id="linkedin" href="http://www.linkedin.com/pub/neil-sethi/48/500/462/">*</a></li>
                              <li><a id="fb" href="http://facebook.com/nsthi108">A</a></li>
                              <li><a id="twitter" href="http://www.twitter.com/nsthi">?</a></li>
                              <li><a id="github" href="http://www.github.com/nsthi">P</a></li>
                              <li><a id="soundcloud" href="http://www.soundcloud.com/tentativelife">G</a></li>
                              <li><a id="instagram" href="http://instagram.com/nsthi">T</a></li>
                              <li><a id="foursquare" href="https://foursquare.com/user/28889226">L</a></li>
                              <li><a id="hypem" href="http://www.hypem.com/nsthi">-</a></li>
                              <li><a id="spotify" href="http://open.spotify.com/user/1214784042">%</a></li>
                            </ul>
                          </span>  
                        </div>
                      </div>
                      
                      <div class="span6">

                        <div class="ss-form"><br><form action="https://docs.google.com/forms/d/1RRrYUobdqvxBs2kDPvN2LgZogUKJ_Jn9ulfVP2tOyRk/formResponse" method="POST" id="ss-form" target="_self" onsubmit="">
                        <div class="ss-form-question errorbox-good">
                        <div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-item-label" for="entry_923104800"><div class="ss-q-title"><h2 style="font-size:18px">Name</h2>
                        </div>
                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
                        <input type="text" name="entry.923104800" value="" class="ss-q-short" id="entry_923104800" dir="auto" aria-required="true">
                        </div></div></div> <div class="ss-form-question errorbox-good">
                        <div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-item-label" for="entry_483431502"><div class="ss-q-title"><h2 style="font-size:18px">Email</h2>
                        </div>
                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
                        <input type="email" name="entry.483431502" value="" class="ss-q-short" id="entry_483431502" dir="auto" aria-required="true">
                        </div></div></div> <div class="ss-form-question errorbox-good">
                        <div dir="ltr" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry"><label class="ss-q-item-label" for="entry_796930225"><div class="ss-q-title"><h2 style="font-size:18px">Message</h2>
                        </div>
                        <div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
                        <textarea name="entry.796930225" rows="8" cols="0" class="ss-q-long" id="entry_796930225" dir="auto" aria-required="true"></textarea>
                        </div></div></div>
                        <input type="hidden" name="draftResponse" value="[]
                        ">
                        <input type="hidden" name="pageHistory" value="0">


                        <div class="ss-item ss-navigate"><div class="ss-form-entry">
                        <input type="submit" name="submit" value="Submit" id="ss-submit" class="btn btn-info">
                        </div></div></form></div>

                      </div>
                  </div>
                </div>
              </div> <!--END SLIDER-->
            </div> <!--END RIGHT HAND PANEL-->
          </div> <!--END ROW-->
          <div class='horizontal-line'></div>
          <center><br><p class="footer_font"> Built with Twitter Bootstrap, Font-Awesome, FancyBox, Liquid-Slider, jQuery<br>
            Code and design by Neil Sethi &copy; 2013, Credit to <a href="http://williamhockey.com">Will</a> and <a href="http://www.angelaconstance.com">Angela</a> for design inspiration.</p></center>
        </div> <!--END CONTAINER-->

        
        <script>
          function changeText()
          {
            jQuery.fx.interval = 50;
            $('.inside2').attr('class', 'inside');          
            
            $('.inside').fadeOut("slow", function() {
                $('.inside').replaceWith('<div class="inside2"><p class="bang1"> I\'m a senior in </p><br><p class="bang1"> Computer Science</p><br><span><p class="bang1" > @ <a href="http://www.emory.edu">Emory University</a>, </p><p class="bang2" style="float: right"> a product dev</p><br><p class="bang2" style="float:right">@<a href="http://www.ecommhub.com"><i class="icon-shopping-cart"></i> eCommHub</a>, &<br></p><p class="bang3" style="float:right"> an intern</p><br><p class="bang3">at <a href="http://www.dropbox.com"><i class="icon-cloud"></i>Dropbox.</a></p></div>');
                $('.inside').hide().fadeIn("slow", function() {
                    $('.inside').fadeOut(2000, function() {
                        $('.inside').replaceWith('<div class="inside2"><p class="bang1"> I\'m a senior in </p><br><p class="bang1"> Computer Science</p><br><span><p class="bang1" > @ <a href="http://www.emory.edu">Emory University</a>, </p><p class="bang2" style="float: right"> a product dev</p><br><p class="bang2" style="float:right">@<a href="http://www.ecommhub.com"><i class="icon-shopping-cart"></i> eCommHub</a>, &<br></p><p class="bang3" style="float:right"> an intern</p><br><p class="bang3">at <a href="http://www.dropbox.com"><i class="icon-cloud"></i>Dropbox.</a></p></div>');
                        $('.inside').hide().fadeIn(3000);
                    });
                });
            });       
  	 	    }
        </script>

        <script>
           function changeText2()
           {
             jQuery.fx.interval = 50;
             $('.inside2').attr('class', 'inside');          

             $('.inside').fadeOut("slow", function() {
                 $('.inside').replaceWith('<div class="inside2"><br><br><div id="navcontainer"><h2 style="padding-top:10px">Other Relevant Skills</h2><ul><li><a href="#">Ruby on Rails</a></li><li><a href="#">Java/C# .NET</a></li><li><a href="#"> HTML/CSS</a></li><li><a href="#">Javascript/jQuery</a></li><li><a href="#"> Wordpress CMS</a></li><li><a href="#">Graphic Design</a></li><li><a href="#">Git</a></li><li><a href="#">Photography</a></li><li><a href="#">SQL</a></li><li><a href="#">Video Production</a></li><li><a href="#">Amazon EC2</a></li><li><a href="#">Social Networking</a></li></ul></div><br><br><br><center><img style="border-width:0px" src="img/lol.png"/></center></div>');
                 $('.inside').hide().fadeIn("slow", function() {
                     $('.inside').fadeOut(2000, function() {
                         $('.inside').replaceWith('<div class="inside2"><br><br><div id="navcontainer"><h2 style="padding-top:10px">Other Relevant Skills</h2><ul><li><a href="#">Ruby on Rails</a></li><li><a href="#">Java/C# .NET</a></li><li><a href="#"> HTML/CSS</a></li><li><a href="#">Javascript/jQuery</a></li><li><a href="#"> Wordpress CMS</a></li><li><a href="#">Graphic Design</a></li><li><a href="#">Git</a></li><li><a href="#">Photography</a></li><li><a href="#">SQL</a></li><li><a href="#">Video Production</a></li><li><a href="#">Amazon EC2</a></li><li><a href="#">Social Networking</a></li></ul></div><br><br><br><center><img style="border-width:0px" src="img/lol.png"/></center></div>');
                         $('.inside').hide().fadeIn(3000);
                     });
                 });
             });       
                          
   	 	    }
         </script>
        <script>
          function changeText3()
          {
            jQuery.fx.interval = 50;
            $('.inside2').attr('class', 'inside');          
            
            $('.inside').fadeOut("slow", function() {
                $('.inside').replaceWith('<div class="inside2"><p class="bang1">Thanks for</p><br><p class="bang1" style="float:right">visiting! Please</p><br><p class="bang2" style="float:right">come</p><br><p class="bang3" style="float:right">back soon!</p></div>');
                $('.inside').hide().fadeIn("slow", function() {
                    $('.inside').fadeOut(2000, function() {
                        $('.inside').replaceWith('<div class="inside2"><p class="bang1">Thanks for</p><br><p class="bang1" style="float:right">visiting! Please</p><br><p class="bang2" style="float:right">come</p><br><p class="bang3" style="float:right">back soon!</p></div>');
                        $('.inside').hide().fadeIn(3000);
                    });
                });
            });       
  	 	    }
        </script>
        
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
