<?php

    if (isset($_COOKIE['logged_user']))
        $logged=true;

    else
        $logged = false;

?>

<!doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Guest Lecture | Abhikalpan 2k16</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/fav.png">
    <link rel="stylesheet" href="guest/css/normalize.min.css">
    <link rel="stylesheet" href="guest/css/bootstrap.min.css">
    <link rel="stylesheet" href="guest/css/jquery.fancybox.css">
    <link rel="stylesheet" href="guest/css/flexslider.css">
    <link rel="stylesheet" href="guest/css/styles.css">
    <link rel="stylesheet" href="guest/css/queries.css">
    <link rel="stylesheet" href="guest/css/gueststyle.css">
    <link rel="stylesheet" href="guest/animate.css/animate.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="guest/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body id="top">
    
    
    
             <div class="header">
                <img src="img/web_logo2.png" id="logo">
                <ul style="padding-top:15px;">
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
        
        
    <section class="testimonial-slider section-padding text-center pad-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flexslider">
                        <h1 style="font-weight:bold; color:white;">Guest Lectures</h1>
                        <ul class="slides">
                            <li>
                                <div class="avatar"><img src="img/ajay.jpg" alt="Sedna Testimonial Avatar"></div>
                                <br>
                                <div class="cap">Principle Invigilator of research project sponsored by Intel corporation 
Speaker in NASCOM
Prof of Electronics and Electrical Communication Engineering
                                    Head of School of Medical Science  and technology IIT Kharagpur
                                <br>
                                Director : IIEST Shibpur
                                </div>
                                
                                    <div class="col-md-12" style="font-size:20px; color:white">
                            
Date : 13/03/2016

</div>
                                <br>
                                <div><p class="author" style="font-size:30px;font-style:italic;font-weight:bold;">Ajoy Kumar Ray</p></div>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/pawan.jpg" alt="Sedna Testimonial Avatar"></div>
                                <br>
                                <div class="cap">Working on Indian Literacy Project
Sidh Community Society for Integrated Development of Himalayas a institute established by Pawan Gupta.
In search of deep meaning of life he migrated to Himalayas 
View Points--Creativity and Originality is missing in entire school system
Shared a very close relation with Mr Dharampal ji,  Published his book "British Origin of Cow Slaughter in India....".
Rites regularly for Hindi Newspaper ,Magazines and Journals  regarding social political issues and education.
                                    <br>
                                </div>
                                    <div class="col-md-12" style="font-size:20px; color:white">
Date : 13/03/2016
                                    <br>
Topic : “ATMAVISHWAS,SAHAJATA AUR BHASHA”
                                    
                                    

</div>
                                <br>
                                <p class="author" style="font-size:30px;font-style:italic;font-weight:bold;">Pawan Gupta</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/ravi.jpg" alt="Sedna Testimonial Avatar"></div>
                                <br>
                                <div class="cap">Ravi Nawal has had a distinguished career as a management consultant focused on strategy. An alumnus of the famed Indian Institute of Management Ahmedabad (IIM- A), Ravi has always had a keen interest in innovation and its application to developmental issues before India. 
His passion for innovation led development resulted in his first full-fledged book: India Can, which is a national best seller and has been acclaimed as one of a kind work in the space of social innovation. The Bloomsbury published book has received acclaim from Nandan Nilekani, Deepak Parekh and even made it to the Rashtrapati Bhavan. 
He devotes his energies to addressing issues that have an impact on an India’s myriad socio-economic challenges. He writes for impact, advises start-ups and speaks, motivating and counselling the young and marginalized.
                                    <br>
                                </div>
                                    <div class="col-md-12" style="font-size:20px; color:white">

                                    Date : 13/03/2016

</div>
                                <br>
                                <p class="author" style="font-size:30px;font-style:italic;font-weight:bold;">Ravi Nawal</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/sankar.jpg" alt="Sedna Testimonial Avatar"></div>
                                <br>
                                <div class="cap">Founded the machine intelligence unit
Founder president of Indian National Academy of Engineering
Awarded Parma Shri in Science and Engineering in recognition of his work in machine Intelligence
First computer scientist to be the director of ISI
                                    <br>
                                </div>
                                    <div class="col-md-12" style="font-size:20px; color:white">

Date : 12/03/2016
                                    <br>
Topic : Machine Intelligence

</div>
                                <br>
                                <p class="author" style="font-size:30px;font-style:italic;font-weight:bold;">Sankar Kumar Pal</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="guest/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="guest/retina.js/dist/retina.js"></script>
    <script src="guest/js/jquery.fancybox.pack.js"></script>
    <script src="guest/js/vendor/bootstrap.min.js"></script>
    <script src="guest/js/scripts.js"></script>
    <script src="guest/js/jquery.flexslider-min.js"></script>
    <script src="guest/classie/classie.js"></script>
    <script src="guest/jquery-waypoints/lib/jquery.waypoints.min.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
</body>
</html>