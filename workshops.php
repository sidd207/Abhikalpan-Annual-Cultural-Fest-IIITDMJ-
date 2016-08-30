<?php

    if (isset($_COOKIE['logged_user']))
        $logged=true;

    else
        $logged = false;

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Workshops | Abhikalpan 2k16</title>
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
                <img src="img/abhikalpanlogo.png" id="logo">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Workshops</a></li>
                    <li><a href="#">log in</a></li>
                    <li><a href="#">register</a></li>
                </ul>
        </div>
		<div class="container">
			<button id="menu-toggle" class="menu-toggle"><span>Menu</span></button>
			<div id="theSidebar" class="sidebar">
			</div>
			<div id="theGrid" class="main">
                <h1 id="whead">Workshops</h1>
				<section class="grid">
					<a class="grid__item" href="#">
                        <img src="img/hack.jpg" class="workshop-logo">
						<div class="loader"></div>
						<span class="workshop-name">Ethical Hacking</span>
					</a>
                    <a class="grid__item" href="#">
						<img src="img/quadCopter.jpg" class="workshop-logo">
						<div class="loader"></div>
						<span class="workshop-name">Quadcopter Workshop</span>
					</a>
                    <a class="grid__item" href="#">
						<img src="img/motorbike.jpg" class="workshop-logo">
						<div class="loader"></div>
						<span class="workshop-name">Motorbike Overhauling</span>
					</a>
                    <a class="grid__item" href="#">
						<img src="img/internet-of-things.png" class="workshop-logo">
						<div class="loader"></div>
						<span class="workshop-name">Internet of Things</span>
					</a>
                </section>
				<section class="content">
					<div class="scroll-wrap">
						<article class="content__item">
							<h1>Ethical Hacking Workshop</h1>
                            <br>
                            <h4>Highlights</h4>
                            <p style="font-size:0.95em;">
                            Information Security<br>
                            Cyber Forensics<br>
                            Remote Exploitation<br>
                            Digital Footprinting<br>
                            IDN Homographic Attack<br>
                            Website Hacking/ SQLInjection<br>
                            Malware Analysis<br>
                            Windows O/S Hacking<br>
                            WhatssApp Forensics<br>
                            Software Cracking worth 1 LAC<br>
                            MetaSploit Framework<br>
                            Android Phone Hacking<br>
                            Wi-Fi Hacking<br>
                            </p>
                            <h4>Cost</h4>
                            <p style="font-size:0.95">
                                <strong>Rs.800 </strong>
                            </p>
                            <h4>Contacts</h4>
                            <p style="font-size:0.95">
                                <strong>Gitansh Kataria</strong> - 9926721397 <br>
                                <strong>Abhishek Achanta</strong> - 9424408549 
                            </p>
                            <div class="register">
                                       <button class="register_btn">Register</button>
                            </div>
						</article>
                        <article class="content__item">
							<h1 style="font-size:2em;width:75%">RoboTryst:2015-16 Quadcopter Workshop &amp; Championship</h1>
                            <br>
                            <h4>Highlights</h4>
                            <p style="font-size:0.95em;">
                                A Quadcopter Workshop will be held at the college.<br>
                                A Quadcopter Competition will be held just after the workshop.<br>
                                Winners of the compitition will go to IIT-Delhi to represent their college at Final Round of RoboTyrst-2016 to be held in March during Tyrst-2016.
                            </p>
                            <h4>Cost</h4>
                            <p style="font-size:0.95">
                                <strong>Rs.800 </strong>
                            </p>
                            <h4>Contacts</h4>
                            <p style="font-size:0.95">
                                <strong>Mayur Mishra</strong> - 9424851360 <br>
                                <strong>Ovais Malik </strong> - 9756326662 
                            </p>
                            <div class="register">
                                       <button class="register_btn">Register</button>
                            </div>
						</article>
                        <article class="content__item">
							<h1>Motor Bike OverHauling</h1>
                            <br>
                            <h4>Highlights</h4>
                            <p style="font-size:0.95em;">
                                Complete Dismantling of a 150 cc Motor Bike and a Scooty.<br>
                                Hands On Experience on 2 Stroke and 4 Stroke engine.<br>
                                Lecture On Advance Technologies in Motorbikes.<br>
                                Discussion on Motorbike Maintenance and Diagnostic.<br>
                                Complete Offline Video Assistance.
                            </p>
                            <h4>Cost</h4>
                            <p style="font-size:0.95">
                                <strong>Yet to be uploaded</strong>
                            </p>
                            <h4>Contacts</h4>
                            <p style="font-size:0.95">
                                <strong>Mayur</strong> - 9424851360
                            </p>
                            <div class="register">
                                       <button class="register_btn">Register</button>
                            </div>
						</article>
                        <article class="content__item">
							<h1>Internet of Things</h1>
                            <br>
                            <h4>Highlights</h4>
                            <p style="font-size:0.95em;">
                                Internet of Things means?<br>
                                How it is related to cloud computing?<br>
                                Basic Ardunio Usage.<br>
                                Content Ardunio with Android.<br>
                                Send data to Internet and talk to cloud.<br>
                                Control Kelay Switch.<br>
                                Create your own embedded projects.
                            </p>
                            <h4>Cost</h4>
                            <p style="font-size:0.95">
                                <strong>Rs.800 </strong>
                            </p>
                            <h4>Contacts</h4>
                            <p style="font-size:0.95">
                                <strong>Gitansh Kataria</strong> - 9926721397 <br>
                                <strong>Gaurav K Piyush</strong> - 8827972035 
                            </p>
                            <div class="register">
                                       <button class="register_btn">Register</button>
                            </div>
						</article>
                    </div>
					<button class="close-button"><i class="fa fa-close"></i><span>Close</span></button>
				</section>
			</div>
		</div><!-- /container -->
        <div class="footer">
            <ul>
                <li><a href="#">our institute</a></li>
                <li><a href="#">reach us</a></li>
                <li><a href="#">sponsor</a></li>
                <li><a href="#">gallery</a></li>
            </ul>
        </div>
		<script src="js/workshops_classie.js"></script>
		<script src="js/workshops_main.js"></script>
	</body>
</html>
