<!--Created By Samay Kumar jain -->

<?php

    if (isset($_COOKIE['logged_user']))
        $logged=true;

    else
        $logged = false;

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Team|Abhikalpan 2k16</title>
    <link rel="shortcut icon" href="img/fav.png"> 
    <link href="css/webteam/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/webteam/flexslider.css" rel="stylesheet" >
    <link href="css/webteam/styles.css" rel="stylesheet">
    <link href="css/webteam/queries.css" rel="stylesheet">
    <link href="css/webteam/animate.css" rel="stylesheet">
      <link href="css/webteam/webteam.css" rel="stylesheet">
       
      </head>
    

      <body id="top">
        
          <div class="container">
             <div class="header">
                <img src="img/web_logo2.png" id="logo">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="event.php">Events</a></li>
					 <li><a href="about.php">About Us</a></li>
                    <li><a href="workshops.php">Mega Events & Workshops</a></li>
					<li><a href="exhibitions.php">Exhibitions</a></li>
					           <?php if (isset($logged) && $logged)
                         {
                            echo '<li><a href="cms/index.php/user/panel">User Panel</a></li>
                            <li><a href="cms/index.php/user/logout">Logout</a></li>
                        ';
                        goto skipregister;
                         }
                                

                                ?>

                                <li><a href="javascript:void(0);" onclick="window.open('cms/index.php/user/login', '_blank', 'width=800,height=600,scrollbars=yes,status=yes,resizable=yes,screenx='+((parseInt(screen.width) - 800)/2)+',screeny='+((parseInt(screen.height) - 600)/2)+'');">Log In</a><li>

                                <li><a href="javascript:void(0);" onclick="window.open('cms/index.php/user/register', '_blank', 'width=800,height=600,scrollbars=yes,status=yes,resizable=yes,screenx='+((parseInt(screen.width) - 800)/2)+',screeny='+((parseInt(screen.height) - 600)/2)+'');">Register</a><li>

                                

                            <?php
                                skipregister:

                            ?>
                </ul>
            </div>
          
        <section class="intro text-center pad-top" id="intro">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 wp6 hei">
                <div class="arrow font">Web & Graphics Team</div>
                
              </div>
            </div>
          </div>
        </section>
       
        
        
        <section class="team text-center pad" id="team">
          <div class="container">
            
              <div class="row cen">
                  <div class="disp wp5 outline delay-05s" >
                        <img src="img/siddarth.png" alt="Team Member">
                        <h2>Siddarth Gupta</h2>
                        <h3>Designer & Developer</h3>
                        
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="https://www.facebook.com/siddhartha.gupta.5437" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:siddharthaosvn@gmail.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      
					  <div class="disp wp5 outline delay-1s" >
                        <img src="img/abhi.png" alt="Team Member">
                        <h2>Abhishek Kumar</h2>
                        <h3>Designer</h3>
                        
                        <div class="social">
                          <ul class="social-buttons">
                            
                           <li><a href="https://www.facebook.com" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:abhishek12594@gmail.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
					  
					  
                      
              </div>
              <br>
            <div class="row">
              
                
                  
                      <div class="disp wp2 outline" >
                        <img src="img/rohit.png" alt="Team Member">
                         <h2>Rohit Rajwani</h2>
                        <h3>Developer</h3>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="https://www.facebook.com/rohit.rajwani.9" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:rohit18031995@gmail.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      
                      <div class="disp wp2 outline delay-05s">
                        <img src="img/samay.png" alt="Team Member">
                        <h2>Samay Jain</h2>
                        <h3>Designer & Developer</h3>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="https://www.facebook.com/samayjainSJ" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:sj10.04.1996@gmail.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="disp wp2 outline delay-1s">
                        <img src="img/arpit.png" alt="Team Member">
                        <h2>Arpit Garg</h2>
                        <h3>Developer</h3>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="https://www.facebook.com/arpit.garg.5201" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:arpitgg@gmail.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    
              </div>
                      
                      <br>
                    <div class="row cen">
                  <div class="disp wp2 outline delay-15s" >
                        <img src="img/suraj.png" alt="Team Member">
                        <h2>Suraj Devnani</h2>
                        <h3>Developer</h3>
                        
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="https://www.facebook.com/suraj.devnani.3" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      
					  <div class="disp wp2 outline delay-2s" >
                        <img src="img/diwakar.png" alt="Team Member">
                        <h2>Diwakar Vaish</h2>
                        <h3>Designer</h3>
                        
                        <div class="social">
                          <ul class="social-buttons">
                            
                           <li><a href="https://www.facebook.com/diwakar.vaish.5" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
					  
					  
                      
              </div>
                     
              </div>
            
        </section>
        
              <div class="col-lg-12 text-center">
<p>< / > with  <span class="fa fa-heart heart pulse2"></span> in IIIT</p>
</div>
              
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/waypoints.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/modernizr.js"></script>
      </body>
    </html>
<!-- Designed by SAMAY KUMAR JAIN -->