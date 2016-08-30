

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
    <title>About us|Abhikalpan 2k16</title>
    <link rel="shortcut icon" href="img/fav.png"> 
    <link href="css/about/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/about/flexslider.css" rel="stylesheet" >
    <link href="css/about/styles.css" rel="stylesheet">
    <link href="css/about/queries.css" rel="stylesheet">
    <link href="css/about/animate.css" rel="stylesheet">
      <link href="css/about/about.css" rel="stylesheet">
       
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
                <div class="arrow font">About Us</div>
                <p class="para" style="margin-top:auto;"> Abhikalpan, the annual technical festival of IIITDM Jabalpur was brought into action in 2006 with an aim to promote innovative technical excellence and organisational proficieny. This is the perfect platform to cultivate your inner innovative technical potentiaL This Test promises you cut throat competition in wide range of technical events in the domain of ME, CSE, ECE, Robotics. Design, Gaming and Management along with a host of informal events. This year we are also going to witness various exhibits. have informative guest lectures and most inspiring and educating workshops on current and trending technologies.</p>
              </div>
            </div>
          </div>
        </section>
       
        
        
        <section class="team text-center pad" id="team">
          <div class="container">
            <div class="row">
              <div class="col-md-12 wp1">
                <div class="arrow font">Our Team</div>
				<h1></h1>
              </div>
            </div>
              <div class="row cen">
                  <div class="disp wp5 outline delay-05s" >
                        <img src="img/f1.png" alt="Team Member">
                        <h2>Prof. Tanuja Sheorey</h2>
                        <h3>Dean Students</h3>
                        
                        <div class="social">
                          <ul class="social-buttons">
                            
                            
                            <li><a href="mailto:tanush@iiitdmj.ac.in" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      
					  <div class="disp wp5 outline delay-1s" >
                        <img src="img/f2.png" alt="Team Member">
                        <h2>Dr. Manoj Kumar Panda</h2>
                        <h3>Technical  Counsellor</h3>
                        
                        <div class="social">
                          <ul class="social-buttons">
                            
                           
                            <li><a href="mailto:mkpanda@iiitdmj.ac.in" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
					  
					  
                      <div class="disp wp5 outline delay-15s">
                        <img src="img/f3.png" alt="Team Member">
                        <h2>Dr. Neeraj K. Jaiswal</h2>
						<h3>Technical  Counsellor</h3>
                        
                        <div class="social">
                          <ul class="social-buttons">
                            
                            
                            <li><a href="mailto:neeraj@iiitdmj.ac.in" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
              </div>
              <br>
            <div class="row">
              
                
                  
                      <div class="col-md-3 wp2" >
                        <img src="img/d1.png" alt="Team Member">
                         <h2>Siddhartha Gupta</h2>
                        <h3>Design & Development</h3>
                        <p>+91-7898060042</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="https://www.facebook.com/siddhartha.gupta.5437" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:siddharthaosvn@gmail.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      
                      <div class="col-md-3 wp2 delay-05s">
                        <img src="img/d2.png" alt="Team Member">
                        <h2>Abhishek Kumar</h2>
                        <h3>Design & Development</h3>
                        <p>+91-8349872959</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="https://www.facebook.com" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:abhishek12594@gmail.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-3 wp2 delay-1s">
                        <img src="img/h1.png" alt="Team Member">
                        <h2>Ayushi Jain</h2>
                        <h3>HelpDesk & Hospitality</h3>
                        <p>+91-9407123700</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="https://www.facebook.com" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:ayushijain047@gmail.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    <div class="col-md-3 wp2 delay-15s" style="-webkit-animation-delay: 1.5s;">
                        <img src="img/h2.png" alt="Team Member">
                        <h2>Deepak Rai</h2>
                        <h3>HelpDesk & Hospitality</h3>
                        <p>+91-9479935303</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="https://www.facebook.com" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:deepakrai199410@gmail.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
              </div>
                      
                      <br>
                    
                     <div class="row"> 
                      <div class="col-md-3 wp4 " >
                        <img src="img/e1.png" alt="Team Member">
                        <h2>Mayur Mishra</h2>
                        <h3>Event Management</h3>
                        <p>+91-9424851360</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="https://www.facebook.com/mayur.mishra.568" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:mayurmishra14@gmail.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      
                      <div class="col-md-3 wp4 delay-05s">
                        <img src="img/e2.png" alt="Team Member">
                        <h2>Gitansh Kataria</h2>
                        <h3>Event Management</h3>
                        <p>+91-9926721397</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="https://www.facebook.com" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:gitansh95@gmail.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class=" col-md-3 wp4 delay-1s">
                        <img src="img/m1.png" alt="Team Member">
                          <h2>Akshat Jain</h2>
                        <h3>Marketing & Sponsorship</h3>
                        <p>+91-9479753093</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="https://www.facebook.com" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:aj2013015@gmail.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    <div class="col-md-3 wp4 delay-15s">
                        <img src="img/m2.png" alt="Team Member">
                        <h2>Abhishek Achanta</h2>
                        <h3>Marketing & Sponsorship</h3>
                        <p>+91-9424408549</p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="https://www.facebook.com" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:abhishekachanta22@gmail.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      
                      
                      
                    
                </div>
              </div>
            
        </section>
        
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