



<?php

    if (isset($_COOKIE['logged_user']))
        $logged=true;

    else
        $logged = false;

?><!DOCTYPE html><!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Exhibitions | Abhikalpan 2k16</title>
		<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="/img/fav.png">
		<link rel="stylesheet" type="text/css" href="css/workshops_normalize.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/workshops_style1.css" />
        <link rel="stylesheet" type="text/css" href="css/workshops_mystyle.css" />
		<script src="js/workshops_modernizr.custom.js"></script>
	</head>
	<body>
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
		<div class="container">
			<button id="menu-toggle" class="menu-toggle"><span>Menu</span></button>
			<div id="theSidebar" class="sidebar">
			</div>
			<div id="theGrid" class="main">
                <h1 id="whead">Exhibitions</h1>
				<section class="grid">
					<a class="grid__item" href="#">
                        <img src="img/ex1.png" class="workshop-logo">
						<div class="loader"></div>
						<span class="workshop-name">Robotics Exhibition</span>
					</a>
                    <a class="grid__item" href="#">
						<img src="img/ex2.png" class="workshop-logo">
						<div class="loader"></div>
						<span class="workshop-name">Astronomy Exhibition</span>
					</a>
                    <a class="grid__item" href="#">
						<img src="img/ex3.png" class="workshop-logo">
						<div class="loader"></div>
						<span class="workshop-name">Photography Exhibition</span>
					</a>
                    <a class="grid__item" href="#">
						<img src="img/ex4.png" class="workshop-logo">
						<div class="loader"></div>
						<span class="workshop-name">Arts Exhibition</span>
					</a>
					 <a class="grid__item" href="#">
						<img src="img/ex4.png" class="workshop-logo">
						<div class="loader"></div>
						<span class="workshop-name">Jenesys Exhibition</span>
					</a>
                </section>
				<section class="content">
					<div class="scroll-wrap">
						<article class="content__item">
							<h1>Robotics Exhibitions</h1>
                            <br>
                            <h4>Highlights</h4>
                            <p style="font-size:0.95em;">
                           It is organised by Robokriti.
                            <h4>Dates</h4>
                            <p style="font-size:0.95">
                                <strong>12 & 13 March</strong>  <br>
                                
                            </p>
                            
						</article>
                        <article class="content__item">
							<h1 style="font-size:2em;width:75%">Astronomy Exhibition</h1>
                            <br>
                            <h4>Highlights</h4>
                            <p style="font-size:0.95em;">
                              We here at Astronomy Club of IIITDMJ heartiliy invite you all to come and feast your eyes on the wondours of space as you may have never see before, 
to be awestruck by the most fascinating of science which you could not have comprehended in your wildest of dreams that governs the whole Universe,
to be amazed by the smallest of phenomena that you may have witnessed often enough but would not have been enlighted enough to appreciate the intricate beauty from its fascinating fabrication to it's mesmerizing denouement.
So we are eagarly waiting for you to join us and see the cosmos as we see it.
							   </p>
                            
                            <h4>Dates</h4>
                            <p style="font-size:0.95">
                               <strong>12 & 13 March </strong> 
                            </p>
                           
						</article>
                        <article class="content__item">
							<h1>Photography Exhibition</h1>
                            <br>
                            <h4>Highlights</h4>
                            <p style="font-size:0.95em;">
                               SHUTTERBOX-THE PHOTOGRAPHY CLUB is going to organize
its annual exhibition for ABHIKALPAN which is to be held from
11-13 march where some of the exquisite images captured by
our college budding photographers will be on the show. It will
include a variety of arena including natural sceneries, college
events, macro images, abstract and portrait images and a lot
more. It’s our privilege to be hosting this exhibition and will
be thankful with your esteemed presence. This is surely going
to be a soothy and refreshing experience for the viewers as
they will get a glimpse of the huge variety of subjects that
surrounds us. The Photography Club provides a platform to
the enthusiastic ones to showcase their talent and our efforts
will get the desired results by your active participation.
                            </p>
                           
                            <h4>Dates</h4>
                            <p style="font-size:0.95">
                                <strong>12 & 13 March</strong>
                            </p>
                           
						</article>
                        <article class="content__item">
							<h1>Arts Exhibition</h1>
                            <br>
                            <h4>Highlights</h4>
                            <p style="font-size:0.95em;">
                               Exhibiting arts.
                            </p>
                            
                            <h4>Dates</h4>
                            <p style="font-size:0.95">
                                <strong>12 & 13 March</strong> 
                            </p>
                           
						</article>
						     <article class="content__item">
							<h1>Jenesys Exhibition</h1>
                            <br>
                            <h4>Highlights</h4>
                            <p style="font-size:0.95em;">
                               Exhibition to showcase japan and its cultural.
                            </p>
                            
                            <h4>Dates</h4>
                            <p style="font-size:0.95">
                                <strong>12 & 13 March</strong> 
                            </p>
                           
						</article>
                    </div>
					<button class="close-button"><i class="fa fa-close"></i><span>Close</span></button>
				</section>
			</div>
		</div><!-- /container -->
        <div class="footer">
            <ul>
			 <li><a href="guest.php" target="_blank">Guest Lectures</a></li>
                <li><a href="http://www.iiitdmj.ac.in" target="_blank">our institute</a></li>
                <li><a href="http://www.iiitdmj.ac.in/IIITDM/howtoreach.html">reach us</a></li>
                <li><a href="sponsor.php">sponsor</a></li>
				  <li><a href="timetable.pdf" target="_blank"> Schedule </a>  </li>
				   <li><a href="webteam.php" target="_blank"> Web & Graphics Team</a>  </li>
                <li><a href="gallery.php">gallery</a></li>
            </ul>
        </div>
		<script src="js/workshops_classie.js"></script>
		<script src="js/workshops_main.js"></script>
	</body>
</html>
