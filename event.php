





<?php



    if (isset($_COOKIE['logged_user']))

        $logged=true;



    else

        $logged = false;



?><!DOCTYPE html>

<html lang="en">

    <head>

		<meta charset="UTF-8" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 

        <title>Events | Abhikalpan 2k16</title>

<!--        <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

        

        <link rel="shortcut icon" href="img/fav.png"> 

		<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="css/events_component.css" />

        <link rel="stylesheet" type="text/css" href="css/events_style.css" />

        <link rel="stylesheet" type="text/css" href="css/events_mystyle.css" />

        

		<script type="text/javascript" src="js/events_modernizr.custom.79639.js"></script> 

        <script type="text/javascript" src="js/events_modernizr.custom.js"></script> 

		<!--[if lte IE 8]>

			 <link rel="stylesheet" type="text/css" href="css/events_simple.css" />

		<![endif]-->

    </head>

    <body>

    <div class="header">

                <img src="img/web_logo2.png" id="logo">

                <ul>

                    <li><a href="index.php">Home</a></li>

                    <li><a href="event.php">Events</a></li>

					 <li><a href="about.php">About Us</a></li>

					 		 

                     <li><a href="workshops.php">Mega Events & Workshops </a></li>

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

			<div class="st-container">

				<input type="radio" name="radio-set" checked="checked" id="st-control-1"/>

				<a href="#st-panel-1">

                    <img class="club_icon" src="img/astro.png">

                    <span  class="club_name">Astronomy</span>

                </a>

				<input type="radio" name="radio-set" id="st-control-2"/>

				<a href="#st-panel-2">

                    <img class="club_icon" src="img/prog.png">

                    <span  class="club_name">Computer Science</span>

                </a>

				<input type="radio" name="radio-set" id="st-control-3"/>

				<a href="#st-panel-3">

                    <img class="club_icon" src="img/electronics.png">

                    <span  class="club_name">Electronics</span>

                </a>

				<input type="radio" name="radio-set" id="st-control-4"/>

				<a href="#st-panel-4">

                    <img class="club_icon" src="img/fmc.png">

                    <span  class="club_name">Film Making Club</span>

                </a>

				<input type="radio" name="radio-set" id="st-control-5"/>

				<a href="#st-panel-5">

                    <img class="club_icon" src="img/mechanical.png">

                    <span  class="club_name">Mechanical</span>

                </a>

                <input type="radio" name="radio-set" id="st-control-6"/>

                <a href="#st-panel-6">

                    <img class="club_icon" src="img/management.png">

                    <span  class="club_name">Management</span>

                </a>

                <input type="radio" name="radio-set" id="st-control-7"/>

                <a href="#st-panel-7">

                    <img class="club_icon" src="img/photography.png">

                    <span  class="club_name">Photography</span>

                </a>

				

				<div class="st-scroll">

					

					<section class="st-panel" id="st-panel-1">

						<div class="st-deco" data-icon="A"></div>

						<h2>Astronomy Events</h2>

						<p>"Astronomy compels the soul to look upwards and <br>leads us from this world to another."</p>

                        <section class="grid3d vertical" id="grid3d1">

                            <div class="grid-wrap">

                                <div class="grid">

                                    <figure><img src="img/astro1.jpg" alt="img01"/><span class="event-name">Exhibition</span></figure>

                                    <figure><img src="img/astro2.jpg" alt="img05"/><span class="event-name">Quiz</span></figure>

                                    <figure><img src="img/astro3.jpg" alt="img08"/><span class="event-name">Event Horizon</span></figure>

                                </div>

                            </div><!-- /grid-wrap -->

                            <div class="content">

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="border-bottom:1px solid lightgrey;" class="event-head">Astonomy Exhibition</h2>

                                       <div id="exhibition" class="event-container">

                                           We here at Astronomy Club of IIITDMJ heartiliy invite you all to come and feast your eyes on the wondours of space as you may have never see before, <br>to be awestruck by the most fascinating of science which you could not have comprehended in your wildest of dreams that governs the whole Universe,<br> to be amazed by the smallest of phenomena that you may have witnessed often enough but would not have been enlighted enough to appreciate the intricate beauty from its fascinating fabrication to it's mesmerizing denouement.<br>So we are eagarly waiting for you to join us and see the cosmos as we see it.

                                       </div>

                                   </section>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="border-bottom:1px solid lightgrey;" class="event-head">Astonomy Quiz</h2>

                                       <div class="event-container">

                                           <h4>Decription</h4>

Like the last time and all other times we are again back with one of the Abhikalpan's most awaited quizing event 'THE ASTRONOMY QUIZ'. <br>So don't miss a chance to be a part of this exhilarating quizing arena to battle with 'Light Saber's', clearing through obstacles and to emerge as a VICTOR.<br><br>

                                            <h4>Rules and Regulations</h4>

                                            1. Registration of the event will be done both online and offline (on the spot registration).<br>

                                            2. Teams with a maximum of two players can participate for the event. Ofcourse 'Lone wolves' are more than welcomed.<br>

                                            3. The quiz will consist of two rounds. Teams which will be qualifying for the next round will be solely based upon the number of teams participating, decided upon by the quiz masters of the event.    <br>

                                       

                                           <h4>Prize</h4>

                                           1250 INR<br>

                                           <h4>Contacts</h4>

                                           1. Shvetank Baderia - 8989635065<br>

                                           2. Shlok Mohta - 9407226268<br>

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="border-bottom:1px solid lightgrey;" class="event-head">Event Horizon</h2>

                                       <div class="event-container">

                                           <h4>Decription</h4>

This year again we have prepared a stage for you to come forth with your genius, imagination, understanding of the laws governing the cosmos, to showcase a well defined solution of the engimatic situations we face with, with our endeavours to understand, to grow, to outreach our boundaries over and over gain.<br><br>

                                           <h4>Rules and Regulations</h4>

                                            1. Registration of the event will be done both online and offline (on the spot registration).<br>

                                            2. A team will consist of maximum of two players, who will come forth showcasing their idea using all sorts of physical inputs like a powerpoint presentation and such, to aid in better understanding of their showcased idea for the problem statement.<br> 

                                            3. The problem statement for the event will be anounced two weeks prior too the commencement of Abhikalpan.<br>

                                            4. Evaluation scheme will be explained at the commencement of the event. So all the teams buckle up with the best in your armoury.<br>

                                            5. Maximum time limit for presenting your ideas is 8 minute, upon which the jury ask questions to the teams regarding the same.<br>

                                            6. Decision of the jury regarding any matter will be considered final.<br>

                                           

                                           <h4>Prize</h4>

                                           1000 INR<br>

                                           

                                           <h4>Contacts</h4>

                                            Tatini Sri Pavan Teja - 9479874834<br>

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

					

                                <span class="loading"></span>

                                <span class="icon close-content"></span>

				            </div>

                        </section>

					</section>

					

					<section class="st-panel st-color" id="st-panel-2">

						<div class="st-deco" data-icon="CSE"></div>

                            <h2 class="left">Programming</h2>

                            <h2 class="right">Webix</h2>

                            <p class="left">"Programs must be written for people to read, and only incidentally for machines to execute."</p>

                            <p class="right">"There are three responses to a piece of design – yes, no, and WOW! Wow is the one to aim for."</p>

                            <section class="grid3d vertical" id="grid3d2">

                            <div class="grid-wrap cs">

                                <div class="grid">

                                    <figure><img src="img/prog1.jpg" alt="img01"/><span class="event-name">Coding</span></figure>

                                    <figure><img src="img/prog2.png" alt="img05"/><span class="event-name">Debugging</span></figure>

                                    <figure style="margin-right:70px;"><img src="img/prog3.jpg" alt="img08"/><span class="event-name">Hackathon</span></figure>

                                    <figure><img src="img/web1.jpg" alt="img01"/><span class="event-name">Minial Poster</span></figure>

                                    <figure><img src="img/web2.jpg" alt="img05"/><span class="event-name">Web Design</span></figure>

                                    <figure><img src="img/web3.jpg" alt="img08"/><span class="event-name">Web Mock Up</span></figure>
                                    
                                    <figure><img src="img/prog4.png" alt="img08"/><span class="event-name">CryptoCracker</span></figure>

                                </div>

                            </div><!-- /grid-wrap -->

                            <div class="content">

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">N-Code</h2>

                                       <div class="event-container">

                                           <h4>Decription</h4>

Are you a person who is crazy about algorithms and puzzles? Do words like Greedy, Divide and Conquer, Space-Time Complexity, AC, TLE, SIGSEGV sound familiar? While looking at a map you start thinking of ways to travel that will give you the shortest path (and thus saving you from expending less on the "inflamed" petrol). Or maybe, you think to schedule tasks in least slots in order to reduce your workload. Are you the one who thinks about a run time error when all others around ' you are worried about Dhoni's run out? Does your loop counter matter more to you than the crowd in a theatre counter? If yes, then this event is just for you. :D It is the place where optimization techniques, programming-analytical skills and hard work are all that matters!!.<br>

                                            <h4>Rules and Regulations</h4>

                                            1. This contest is open for all the students. <br>

                                            2. Individual event. No team participation. <br>

                                            3. Open to all college students with valid college ID cards.<br> 

                                            4. Ranking is based on the number of problems solved. Ties are broken by the sum of submission times for each accepted solution on the judge. <br>

                                            5. There is no penalty for wrong submission.<br>

                                           

                                           <h4>Registration</h4>

                                           Online Registration.<br>

                                           <h4>Prize</h4>

                                           5000 INR<br>

                                           <h4>Contacts</h4>

                                       1) Shubham Gupta ( 9424605578)<br>
2) Vaibhav Jaimini (8349875295)<br>

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="https://www.hackerearth.com/ncode/"> <button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Debugging</h2>

                                       <div class="event-container">

                                           <h4>Decription</h4>

" If debugging is the process of removing software bugs, then programming must be the process of putting them in."<br> 

													 - Edsger Dijkstra<br><br>



Bugs are known to rattle coders but can you rattle the others by overhauling the bugs in a jiffy? Are you the person who loves to spend hours debugging codes and make them right? Are you the person your friends look up to for correcting their codes? If yes, then this is the best place to follow your passion for debugging! The contest will include of a single written round consisting of general coding, debugging and output estimation in C language. Given an incorrect code and the program statement, the contestant must debug to make it work correctly such that it satisfies all the test cases and give the desired result.<br>

                                            <h4>Rules and Regulations</h4>

                                            1. This contest is open for all the students. <br>

                                            2. Individual event. No team participation.<br>

                                            3. The contest will be an onsite contest and would be held on (TBD) .<br>

                                            4. Open to all college students with valid college ID cards.<br>

                                            5. Scoring is based on number of questions correctly solved in a given span of time.<br> 

                                            There will be penalty for wrong answer. 6-30 minutes prior to the end of contest, a set of 2 surprise bonus problem will be disclosed. <br>

                                           <h4>Registration</h4>

                                           Onsite Registration.<br>

                                           <h4>Prize</h4>

                                           3000 INR<br>

                                           <h4>Contacts</h4>
Arpan Gupta (9454754717)<br>
Sachin Kukreja (9479807317)<br>
                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Hackathon</h2>

                                       <div class="event-container">

                                           <h4>Decription</h4>

Who is a hacker? Hacker is an attitude of passionate curiosity. Hacker is a culture of excellence. Hacker is a mind set of innovation. Hackers built the internet. Hackers built the personal computer. Hackers built the mobile phone. Hackers built everything that is awesome today.<br>

                                           

                                            <h4>Rules and Regulations</h4>

                                                1. This contest is open for all the students. <br>

                                                2. The contest will be an onsite contest and would be held on (TBD).<br> 

                                                3. Open to all college students with valid college ID card.<br>

                                           <h4>Registration</h4>

                                           Onsite Registration.(Optional)<br>

                                           <h4>Prize</h4>

                                           5000 INR<br>

                                           <h4>Contacts</h4>
Himanshu Maurya ( 9407000339)<br>
Utsav Poddar ( 9407477344)<br>
                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://crowdsourcing.topcoder.com/tc-university-hackathon-series-IIITDM"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Minimal Poster Design</h2>

                                       <div class="event-container">

                                           <h4>Decription</h4>

Time to show off your graphic designing skills . If you think minimal is the new fad and if over the top posters bother you, then this is the event where you should surely be . If yes, then this event is just for you. 

<br><br>

What is Minimalism?

Minimalism is a style that, in graphics, presents the object in question plainly, starkly and with a high degree of realism without extra decoration . Think of it as a representation of the thing itself without added artistic devices. <br>

                                           

                                           <h4>Theme</h4>

                                           1. Black<br>

2. Culture<br>

3. Politics<br>

4. Women Power<br>

                                           

                                           <h4>Rules and Regulations</h4>

                                                1. Adobe Photoshop, Illustrator can only be used.<br>

                                                2. Number of posters will be 3-5.<br>

                                                3. Individual entries are only accepted.<br> 

                                           <h4>Registration</h4>

                                           Onsite Registration.<br>

                                           <h4>Prize</h4>

                                           1000 INR<br>

                                           <h4>Contacts</h4>

                                           Shivam Kumar-9407490775<br>

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Web Design Competition</h2>

                                       <div class="event-container">

                                           <h4>Decription</h4>

Are you a competitive web-designer? Do you want to design cool web-pages and win loads of prizes? You've come to just the right place. Welcome to the web-o-mania - The Web Design Competition. The Web Design competition will be 

a two day event in which you will be designing both the front end and the business logic. You need to know HTML,CSS,javascript and jQuery to participate in the event. You will be designing the front end on the first day and the corresponding business logic on the second day. <br>

                                           

                                           

                                           

                                           <h4>Registration</h4>

                                           Onsite Registration.<br>

                                           <h4>Prize</h4>

                                           1000 INR<br>

                                           <h4>Contacts</h4>

                                           1. Rohit Rajwani - 7839500180<br>

                                           2. Arpit Garg - 7597722491

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Web Mock Up</h2>

                                       <div class="event-container">

                                           <h4>Decription</h4>

A unique amalgamation of Fine Arts and Photoshop Skills. The idea behind it is really trivial, roam around this beautiful world. Design A Web MockUp and win prizes.<br>

                                           

                                       

                                        

                                           <h4>Registration</h4>

                                           Onsite Registration.<br>

                                              <h4>Prize</h4>

                                           1000 INR<br>

                                           <h4>Contacts</h4>

                                         1. Diwakar Vaish<br>

2. Samay Kumar Jain - 9407541887<br>

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>
                                
                                <div style="overflow-y:scroll;">

                                   <section>
                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Cryptocracker</h2>
                                       <div class="event-container">
                                           <h4>Decription</h4>

Are you passionate about brain teasing puzzles / mathematical computations ?<br>
Had a knap for unraveling puzzles and patterns in your childhood?<br>
Then come and compete with best hackers and puzzle solving geeks.<br>
Choose whatever means you need at your part to win.<br>
If you love breaking rules,passing system security this challenge is made for you.<br>

                                            <h4>Rules and Regulations</h4>
                                                1. This contest is open for all the students. <br>
                                                2. The contest will be an onsite contest and would be held on (TBD).<br>
                                                3. Open to all college students with valid college ID card.<br>
                                           <h4>Registration</h4>
                                           The event will be hosted on <a href="http://web.iiitdmj.ac.in/~saurabh.joshi/" target="_blank">web.iiitdmj.ac.in/~saurabh.joshi</a> .<br>
<h4>Price Money</h4>
1000 INR<br>                                           <h4>Contacts</h4>
                                           1. Saurabh Joshi - 9406816268<br>
                                           2. Naman Lal - 9424764887
                                       </div>
                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <span class="loading"></span>

                                <span class="icon close-content"></span>

				            </div>

                        </section>

					</section>

					

					<section class="st-panel" id="st-panel-3">

						<div class="st-deco" data-icon="ECE"></div>

						<h2>Electronics</h2>

						<p>"All the electronic devices are powered by white smoke. When smoke goes out, device is dead."</p>

                        <section class="grid3d vertical" id="grid3d3">

                            <div class="grid-wrap">

                                <div class="grid">

                                    <figure style="width:200px;"><img src="img/ec1.jpg" alt="img01"/><span class="event-name" style="width:200px;">Circuit Simulatum</span></figure>

                                    <figure style="width:200px;"><img src="img/ec2.jpg" alt="img05"/><span class="event-name" style="width:200px;">LED Matrix</span></figure>

                                    <figure style="width:200px;"><img src="img/ec3.jpg" alt="img08"/><span class="event-name" style="width:200px;">Quizzard</span></figure>

                                </div>

                            </div><!-- /grid-wrap -->

                            <div class="content">

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="border-bottom:1px solid lightgrey;" class="event-head">Circuit Simulatum</h2>

                                       <div class="event-container">

                                           <h4>Theme</h4>

Ever had fun doing electronics? You better get ready to revolutionize the 'excellence’ in you! You're gonna design a circuit to meet the required specifications using the given components in the most genius manner. Just got real! So, get ready to build circuits.<br>



 

                                           <h4>Problem Statement</h4>

 You have to make a circuit which can accomplish the given task. You will be given required electronics components for making your circuit. For this, you will be provided electronics tools (multimeter, wires, breadboards etc.). The circuit can be made by using basic Analog and Digital electronic devices and is to be designed on a Bread Board.<br>

 

                                           <h4>Rules and General Guidelines</h4>

1. There will be total 2 rounds. <br>

- First round will be qualifying round in which you have to use any simulation software and show the outputs. <br>

 -Second round will be hardware making round in which actual application has to be made. <br>

2. Maximum of two students can form a team.<br>

3. The team members can be from different institutes or colleges.<br>

4. The organizers reserve the right to change any or all of the above rules as they deem fit.

Change in rules, if any, will be highlighted on the website and notified to the registered participants.<br>

5. Organizers reserve the right to disqualify any team indulging in misbehaviour or violating any rules. In case of any disputes/discrepancies, the organizer's decision will be final and binding.<br>

6. Note that at any point of time, the latest information will be that which is on the website. The information provided in the pdf downloaded earlier may not be the latest.<br>

7. The circuit will be simulated in software and participants have to build it on board in the final round. <br>

8. They will be provided tools of electronics and Datasheet of the ICs used in the circuit. <br>

9. The participants must bring their own laptop for simulation and viewing the Datasheet.<br>

10. If any instrument gets damaged due to mishandling then that team will be immediately disqualified.<br>



                                           <h4>First round</h4>

1. In this qualifying round you have to make circuit on any simulation software like pspice, Proteus, multi-sim etc.<br>

2.  There will be time limit. <br>

3.  Time bonus will be considered for tie-breaking between two or more teams.<br>

 

                                           <h4>Second round</h4>

1. This will be hardware round where the teams have to make circuit on given breadboard and show the task completion.<br>

2. There will also be time limit in this round. <br>

 

                                           <h4>Scoring</h4>

1. In the first round score will be based on time taken in simulation and the technique/concept used to accomplish the task.<br>

2. In the second round a team is declared to be winner if they made circuit on hardware and show the output of the task and it will be judged on :<br>

I. Complexity of the circuit<br>

II. Concept behind the circuit<br>

III. Time taken to accomplish the task<br>



                                           <h4>Prize money</h4>

 Cash prize of Rs 3500.<br> 





                                           <h4>Contacts:</h4>

                                           1. Bhoopesh keshari – 8516043026<br>

                                           2. Shilpi Mishra - 9425834742<br>

                                           3. Soumya Kansal - 7354553448

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="border-bottom:1px solid lightgrey;" class="event-head">LED Matrix Gaming</h2>

                                       <div class="event-container">

                                           <h4>Theme</h4>

Ever stared at flames dancing in the fireplace? Got lost in them? Lost track of time? Led Matrix is an electronic analogue to those dancing flames. Programming LED Matrices to for animations that capture your imagination is an art, and if you have it in you, come and show us what you got. So, IIITDM Jabalpur brings you the challenge of showing your creative thinking with the use of technology.<br>



 

                                           <h4>Problem Statement</h4>

 Teams will be asked to bring an LED Matrix of atleast 8*8 to the competition. The Matrix should be interfaced to a microcontroller (Atmega8/16/32).  At the competition venue, participants will be asked to display an animation pattern on the LED matrix by programming their microcontroller/ICs. It will be based on a theme which will be given on spot.  Stipulated time will be allotted to participants. The programming must be completed within or before the maximum allotted time.

For Final round, you have to show any shortest innovative game like Snake, Tetris, and Space Invaders etc on LED Matrix in the most revolutionary manner. <br>

 

                                           <h4>Task</h4>

You have to make a LED matrix of size 8X8 with associated circuitry (micro controller interfacing). You will be given a particular theme on the spot and you will have to display it on the LED matrix. The event consists of two rounds.<br>

 

                                           <h4>Qualifying Round</h4>

You need to display animation based on given theme. First five teams to complete the task will be granted entry to the next round.<br>

 

                                           <h4>Final round</h4>

You will have to show a game designed by you on LED Matrix. We allow you to be free in your creativity. The game should be small, creative and enthralling. You will not have to write code for game on spot. Come with already made game and you can edit the code or you will have some extra time to improve your game design on the spot. When you will declare for evaluation of your game design then it will be evaluated. Top three designed game will be announced as winner of the competition and all games can also be shown on exhibition counter. <br>

                                           

                                           <h4>Rules and General Guidelines</h4>

1. Each team can consist of a maximum of 4 members. <br>

2. The team members can be from different institutes or colleges.<br> 

3.  The decision of judges will be final and binding.<br>

4. The teams are allowed to use readymade microcontrollers, programmers, development boards and LED matrix module (8X8) or bigger.<br>

5. You should inform the organizers about the simulators you are using for testing before the event otherwise you may be disqualified if you hide information which is unfair.<br>

6. You can use any self-made calculators/Microsoft Excel to calculate the binary value of O/P pins but you are not allowed to use any software for automatic generation of the whole code based on the O/P to the matrix. You will be immediately disqualified if you fail to follow rule 3.<br>

7. The organizers reserve the right to change any or all of the above rules as they deem fit.Change in rules, if any, will be highlighted on the website and notified to the registered participants.<br>

8. Organizers reserve the right to disqualify any team indulging in misbehaviour or violating any rules. In case of any disputes/discrepancies, the organizer's decision will be final and binding.<br>

9. Note that at any point of time, the latest information will be that which is on the website. The information provided in the pdf downloaded earlier may not be the latest.<br>



 

                                           <h4>Scoring:</h4>

1. In the qualifying round, you will have to show the animation within given time limit and first 5 teams will be selected who completes the task. 

Score will be awarded on the basis of:<br>

I. Idea which you will demonstrate through animation.<br>

II. Number of independent frames used in the animation <br>

III. Time elapsed in completing the task.<br>

IV. In final round,<br>

Shortest code, new innovative ideas of games, the complexity of the game designed, the game playing experience, and visual appeal will be given more weightage.<br>



2. There will also be a best creativity prize based on the Game designing. So, don't worry if you are unable to complete the final round. <br>

3. Remember your task of final round is declared to be complete only when something meaningful is inferred from your game. Meaningful is directly related to the fact that every game has some rules which is followed while playing.<br>

 

                                           <h4>Prize money</h4>

1. Cash prize of Rs 4000 for the winner, <br>

2. Rs. 2000 for the runners up <br>





                                           <h4>Contacts</h4>

1. Aakash Prajapati - 8226048365<br>

2. Smriti Asthana - 9407477437<br>

3. Shivangi Khare - 7354553448<br>

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="border-bottom:1px solid lightgrey;" class="event-head">Quizzard</h2>

                                       <div class="event-container">

                                           <h4>Theme</h4>

People have interest in gaining knowledge and experience more and more. You have to play with your knowledge on the paper. That's some good exercise for the brain, 'eh? So it’s challenge of knowledge and experience because challenge is the pathway to engagement and progress in our lives.<br>



 

                                           <h4>Problem Statement</h4>

 Show your knowledge and experience through answering some questions related to electronics.<br>

 

                                           <h4>Rules and General Guidelines</h4>                                            

1. Each team can consist of a maximum of 2 members or can take part alone.<br> 

2.  The team members can be from different institutes or colleges.<br>

3.  The decision of judges will be final.<br>

4. Question paper will be objective type and you have to tick the correct answer on the question paper itself.<br>

5.  The organizers reserve the right to change any or all of the above rules as they deem fit.<br>

6. Change in rules, if any, will be highlighted on the website and notified to the registered participants.<br>

7. Organizers reserve the right to disqualify any team indulging in misbehavior or violating any rules. In case of any disputes/discrepancies, the organizer's decision will be final and binding.<br>

8. Note that at any point of time, the latest information will be that which is on the website. The information provided in the pdf downloaded earlier may not be the latest.<br>



                                           <h4>First round</h4>

1. In this qualifying round you have to give answer of theoretical questions. And it will be objective and general knowledge common sense type.<br>

2.  There will be time limit. <br>

 

                                           <h4>Second round</h4>

1. In final round you have to tick answers of practical type questions which you learn through experience in making circuits.<br>

2. There will also be time limit in this round. <br>



 

                                           <h4>Scoring</h4>

There will be marking scheme which will be written on question paper. Negative marking for each incorrect answer will also be there.<br>



                                           <h4>Prize money</h4>

Cash prize of Rs 2500  <br>





                                           <h4>Contacts</h4>

1. Nand Kumar - 9407476854<br>

2. Mukesh Kumar Yadav - 7354553448<br>

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

					

                                <span class="loading"></span>

                                <span class="icon close-content"></span>

				            </div>

                        </section>

					</section>

					

					<section class="st-panel st-color" id="st-panel-4">

						<div class="st-deco" data-icon="FMC"></div>

						<h2 style="left:25%;width:50%;">Aakriti - The Film Making Club</h2>

						<p>"The most honest form of filmmaking is to make a film for yourself."</p>

                        <section class="grid3d vertical" id="grid3d4">

                            <div class="grid-wrap">

                                <div class="grid">

                                    <figure style="width:200px;"><img src="img/fmc1.jpg" alt="img01"/><span class="event-name" style="width:200px;">Dubsmash</span></figure>

                                    <figure style="width:200px;"><img src="img/fmc2.jpg" alt="img05"/><span class="event-name" style="width:200px;">Pic Slide Show</span></figure>

                                    <figure style="width:200px;"><img src="img/fmc3.jpg" alt="img08"/><span class="event-name" style="width:200px;">Prankster</span></figure>

                                    <figure style="width:200px;"><img src="img/fmc4.jpg" alt="img02"/><span class="event-name" style="width:200px;">Short Film Making</span></figure>
                                    
                                    <figure style="width:200px;"><img src="img/fmc5.jpg" alt="img02"/><span class="event-name" style="width:200px;">Life at Abhikalpan</span></figure>
                                    
                                    <figure style="width:200px;"><img src="img/fmc6.jpg" alt="img02"/><span class="event-name" style="width:200px;">Moviekeeda</span></figure>

                                </div>

                            </div><!-- /grid-wrap -->

                            <div class="content">

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Dubsmash</h2>

                                       <div class="event-container">

                                           <h4>Description</h4>

                                           Dubsmash is a video messaging that lets users add soundtracks to videos recorded on their phones – often matching a clip of themselves performing a song or film scene with audio from the original.<br>



                                           <h4>Salient features of Dubsmash</h4>

1. Time Limit  : 90 sec<br>

2. Should not be monotonous.<br>

3. Expressions well synchronised with Audio.<br>

4. Better audio &amp; video quality.<br>

5. Video can be shot at any venue.<br>



                                           <h4>Terms &amp; Conditions</h4>

1.Final decision on videos will be done on the basis of some judging criterias :-<br>     

	:  Time limit should not be exceeded.<br>

: Better Sound quality with better visuality of actions.<br>  

: Expressions should be well synchronized.<br>

2. It should be sent before 2 days of Techfest Abhikalpan.<br>

3. Language can either be English or Hindi.<br>

4. Youtube Views and likes.<br>





You can submit your video on<a href="mailto:dsmash.abhikalpan@gmail.com"> dsmash.abhikalpan@gmail.com (Send google drive link )</a><br>

 Send it in following format<br>

Name – <br>

College Name –<br>

Contact no. -<br>

 <h4>Prize money</h4>

 Cash prize of Rs 1000.<br> 



                                           <h4>Contacts</h4>

                                           1. Abhishek Singh - 8370033894<br>

                                           2. Rohit Kumar Suman - 9406816046<br>

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Pic Slide Show</h2>

                                       <div class="event-container">

                                           <h4>Theme</h4>

                                           <strong>Abhikalpan</strong><br>

                                           <h4>About</h4>

Abhikalpan brings you an opportunity of showing your creativity.<br>

Use your imagination and participate in the 'picture slideshow' competition ,

Prepare a slide show using the pics provided by us......<br>



                                           <h4>Rules and Regulations</h4>



1.Only pictures that are provided by us(the coordinating team) can be used.<br>

2.Participants can edit, add text , use sound effects, filters etc..<br>

3.Minimum length of the slideshow is 40 seconds.<br>

4.No pictures other than the ones provided by the coordinating team 

shall be used.<br>

5.You can dowmload the picture from <a href="https://www.dropbox.com/sh/icmdl1lznxabgq0/AACp73aClX3Ann-tR9_F7h1Ra?dl=0" >Here</a>.<br>

6.To submit the slide show, compress and mail it to <strong>pixozz.abhikalpan@gmail.com</strong>.<br><br>

*Submit your entries before 12th March.<br>



 <h4>Prize money</h4>

 Cash prize of Rs 1000.<br> 

                                           <h4>Contacts</h4>

                                           1. Abhishek Singh - 8370033894<br>

                                           2. Rohit Kumar Suman - 9406816046<br>

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Prankster</h2>

                                       <div class="event-container">

                                           <h4>About</h4>

 We all love to have FUN and play PRANKS with friends and strangers.<br> 

Here you get a chance to share with everyone the  everyday PRANKS with friends.<br>



                                           <h4>Rules &amp; Regulations</h4>

1. There is no theme as such.<br>

2. Obscenity and Vulgarity of any kind will lead to direct disqualification.<br>

3. The time of the video should not exceed 3 minutes.<br>

4. You can perform the prank outside and upload, or in the college and submit it by person here.<br>

5. The entries should reach us on or before 12th March.<br>

6.You can submit your video on <a href="mailto:prankbaaz.online@gmail.com">prankbaaz.online@gmail.com (google drive link)</a><br>

                                           <h4>Prize money</h4>

 Cash prize of Rs 1000.<br> 



										  <h4>Contacts</h4>

                                          Jogendra Chaudhary-9479810936<br>

                                            Vishal Garg-7770997624

<br>

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Short Film Making</h2>

                                       <div class="event-container">

                                           <h4>About</h4>

 ‘Pick up a camera. Shoot something. No matter how small, no matter how cheesy, no matter whether your friends and your sister star in it. Put your name on it as director. Now you're a director. Everything after that you're just negotiating your budget and your fee.' James Cameron This is an event for all the visionaries who want to make it big in the film industry, and don’t worry, we make sure your fee is worth it. <br>



                                           <h4>Themes allowed are</h4> 

1. On College life<br>

2. Exam time<br>

3. On startup<br>

4. Politics<br>

5. Women improvement<br> 

                                           <h4>Rules</h4>

1. The team size can be 10 to 15 people including actors.<br>  

2. Duration—3 minutes to 10 minutes.  <br>

3. The movie should either be in Hindi or English or both. No other languages are permitted.<br> 

4. You have to upload the video on google drive and just share the link with us.<br>

5. The video may be taken with any device. <br>

6. At least one of these situations has to be included in the short film.  <br>

7. It is imperative that at least one of the actors in the short film registers at the control tent to confirm the authenticity of the short film or do online registration and send your video along with abhikalpan id.<br>

8. Abhikalpan fest will not be responsible for any issues arising out of non-compatibility of the videos.  <br>

9. Obscenity of any kind is not allowed and shall lead to disqualification.  <br>

10. The decision of the judge's and the organizing team will be final and binding.<br>



11.You can submit your video on <a href="mailto:shortfilm2016iiitdmj@gmail.com ">shortfilm2016iiitdmj@gmail.com (it can be google drive link)</a><br>



 <h4>Prize money</h4>

 Cash prize of Rs 2000.<br> 

                                           <h4>Contacts</h4>

                                           1. Abhishek Singh - 8370033894<br>

                                                                 2. Shubham Chak<br>

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>
                                
                                <div style="overflow-y:scroll;">

                                   <section>
                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Life at Abhikalpan</h2>
                                       <div class="event-container">
                                           <h4>Description</h4>
Let your imagination know no bounds,<br>
Let your emotions go on a roller-coaster ride.<br>
Share with the world what you feel about... Life @ Abhikalpan<br>
Aakriti The FMC gives you a chance to awaken the hidden talent in you.<br>
So go on make a video but be remindful to include:<br>
•	Your Experiences @ Abhikalpan<br>
•	Enthralling moments<br>
•	Your Emotions<br>
You can always use a snap or two to let the picture speak and give life to your video.<br>
So go on get that smart device out of your pocket and use it to pour out your feelings and chance to win exciting prizes.<br><br>

But..........


                                           <h4>Before you jump right in remember:</h4>
•	The video must be shot in the campus itself.<br>
•	Video length must be between 2-5 minutes.<br>
•	No copyright infringement.<br>
•	Deadline for submission is.....#after abhikalpan(2-3 days)<br>
•	#submission link<br>
                                           
                                           <h4>Judgement criteria:</h4>
•	You will be judged by the video and audio quality of your work<br>
•	Time Length<br>
•	Idea and Concept<br>

                                           <h4>Contacts</h4>
                                           1. Abhishek Singh - 8370033894<br>
                                           2. Rohit Kumar Suman - 9406816046<br>
                                       </div>
                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>
                                
                                <div style="overflow-y:scroll;">

                                   <section>
                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Moviekeeda</h2>
                                       <div class="event-container">
                                           <h4>Desciption</h4>
										   Show us how great a fan you are. Prove whether you are a movie addict or not.
Here is a chance for you to compete with people who are amateur participants as well as some very smart people having too much knowledge of movies.

<br> <h4>About</h4>
1.	All questions will be related to movies, TV series or real life of actors and actresses.<br>
2.	There will be 3 rounds in total.<br>
3.	Different rounds consist of objectives, clip recognition, sound recognition, one word answer, fast-answering round, scene recognition, genre recognition, about favourite superstar etc.
<br>4.	Each level will be knock-out in which half of the participants will be eliminated.<br>
5.	Difficulty level will increase with each level of a particular quiz.<br>
6.	There can be wild card entries too.
<br> <h4>Rules</h4>

1.	Judge’s decision will be final, no cross questioning.<br>
2.	In second level, their will be teaming of participants.<br>
3.	Answer first spoken will be final, no second chance will be given.<br>
4.	There will be minus marking in certain rounds and would be told at the time of quiz itself.<br>
5.	Internet usage will not be allowed.<br>
6.	There will be few options resembling to KBC Quiz, such as fifty-50, ask a friend etc.<br>
7.	And rest of all depends on your knowledge of TV world <br>

                                           <h4>Contacts</h4>
                                          Saket Patel-9479346958
                                       </div>
                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

					

                                <span class="loading"></span>

                                <span class="icon close-content"></span>

				            </div>

                        </section>

					</section>

					

					<section class="st-panel" id="st-panel-5">

						<div class="st-deco" data-icon="ME"></div>

						<h2 style="position: absolute;top:0px;left: 10%;width: 30%;font-size:2.75em;line-height:1.1;border-bottom: 1px solid lightgrey;">Robotics</h2>

                        <h2 style="position: absolute;top:0px;left: 65%;width: 30%;font-size:2.75em;line-height:1.1;border-bottom: 1px solid lightgrey;">Automotive</h2>

						<p style="position: absolute;top:70px;left: 5%;width: 40%;margin-bottom: 50px;text-align: center;">"Robotics are beginning to cross that line from absolutely primitive motion to motion that resembles animal or human behavior."</p>

                        <p style="position: absolute;top:70px;left: 62.5%;width: 35%;margin-bottom: 50px;text-align: center;">"Building a mechanical device for its appearance is like putting lace on a bowling ball."</p>

                        <section class="grid3d vertical" id="grid3d5">

                            <div class="grid-wrap">

                                <div class="grid mech">

                                    <figure><img src="img/robo3.jpg" alt="img08"/><span class="event-name">Robosoccer</span></figure>

                                    <figure><img src="img/robo2.jpg" alt="img05"/><span class="event-name">Minefield Escape</span></figure>

                                    <figure><img src="img/robo1.jpg" alt="img01"/><span class="event-name">Junk-Yard</span></figure>

                                    <figure><img src="img/robo4.jpg" alt="img02"/><span class="event-name">Roboshark</span></figure>

                                    <figure><img src="img/robo5.png" alt="img04"/><span class="event-name">Robothon</span></figure>

                                    <figure><img src="img/robo6.jpg" alt="img01"/><span class="event-name">Robowar</span></figure>

                                    <figure><img src="img/cad.jpg" alt="img05"/><span class="event-name">CAD Sutra</span></figure>

                                    <figure><img src="img/auto1.jpg" alt="img08"/><span class="event-name">Bridged</span></figure>

                                    <figure><img src="img/auto2.jpg" alt="img02"/><span class="event-name">Hovercraft</span></figure>

                                    <figure style="width:220px;"><img src="img/auto3.jpg" alt="img04"/><span class="event-name">Mechnismo De Fiesta</span></figure>

                                    <figure><img src="img/auto4.jpg" alt="img04"/><span class="event-name">Mechbot Racer</span></figure>

                                </div>

                            </div><!-- /grid-wrap -->

                            <div class="content">

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Robosoccer</h2>

                                       <div class="event-container">

                                           <h4>Description</h4>

                                           An Indian Revolutionary truck containing extremely confidential reports got wrecked due to a gruesome storm. Those documents were however not destroyed but they are presently spread amid the vast expanse of the desert. So a recovery team has to be sent to recover as many documents as possible before the nemesis power get hold of them. So your task is to make a bot to avert this situation of intel chaos. Sweep the expanse of desert gathering report container and safely delivering them to the safe point. So get yourself ready to operate in this situation of fanatical pressure. India relies on your success….<br>

                                           <h4>Task</h4>

                                           Teams have to make a manually controlled bot which can grab as many balls as possible in the arena and bring it to its home. <br>

                                           

                                           <h4>Rules</h4>

                                           <h4>Rounds</h4>

There will be two rounds in the game:<br>

                                           <h4>Round 1</h4>

1.  Two teams will start the match at the same time. <br>

2.  Balls of the same or different colour are placed randomly in the arena. <br>

3. The balls are scattered only on the surface for this round.<br>

4.  Time limit is 5 minutes. <br>

5.  Obstacles will be placed on the arena.<br> 

6.  Robot gets negative points each time it touches the obstacle and border. <br>

7.  If the ball is hit out of the arena then it will not be replaced in the arena.<br> 

8.  The criteria for the negative points will be disclosed on the day of the event. <br>

9.  Points for each goal will also be revealed on the day of the event. <br>

10.  8 teams will make it to the round 2 (depends on the number of teams). <br>

                                           <h4>Round 2</h4>

1.  This is also one on one round. <br>

2.  Teams will be playing against each other.<br> 

3.  Obstacles are placed on the arena. <br>

4.  5 balls of the same or different colour are placed randomly in the arena. <br>

5.  If the ball is hit out of the arena then it will be placed in the centre of the arena. <br>



                                           <h4>Retries</h4>

Only one retries will be given only in following case: <br>

Wires of both bots get entangled. <br>



                                           <h4>Safety<br>

Once the robots have entered into the arena, no team members can enter into the arena at any point of time. In case if bout has to be halted in between and some changes have to be done in the arena or condition of the robot(s), it will be done by organizers only. <br>





                                               <h4>Not allowed</h4>

Intentional Pushing OR Hitting OR Kicking OR Thrashing OR Flipping the other bot.<br>



 NOTE: The decision of the event organizers is final and binding to all.<br> 



                                           

                                           <h4>Specifications</h4>

                                               <h4>Bot Specifications</h4>



The dimensions of the bot should be less than or equal to 300mm X 300mm X 300mm at the start of the game failing which the team will be disqualified from the competition. <br>However the bot can extend its dimension once the run starts. 

The bot should be controlled manually.<br> 

Teams can use both wired as well as wireless control mechanisms. <br>In case of wired bots, the length of wire should be minimum 2 meters so that the wire remains slack at any instant of time. <br>If the participants use wireless mechanism then it is mandatory to use a dual frequency remote. <br>

The dimensions of the remote are not included in the size constraint of the bot. <br>

Bot can have an on-board power supply. <br>

Participants are not supposed to use any readymade lego components.<br>

Irrespective of the mechanism used, only one person will be allowed to control the bot.<br> 



                                               <h4>Power Supply</h4>



The participants can use any external or on board electric or non-electric power supply.<br> The power source must be non-polluting and must satisfy the safety constraints determined by the organisers. <br>In case of non-electric power supply, the participants must get it approved from the organisers beforehand via email. <br>Organisers are not responsible for the inconvenience if the approval is not sought. <br>

In case of an electric power supply, the voltage between any two points should be less than or equal to 12 V DC at all times during the run. <br>

AC power supply will not be provided at the time of the competition. <br>







                                           

                                           <h4>Judging</h4>

                                               <h4>Gameplay</h4>

1. Every team will be required to pick the balls scattered in the arena and take it to their home section.<br>

2. A robot can push or hit the ball.<br>

3.  Ball is considered of the team if it is present in the home section.<br>

4.  Teams can increase their score by taking the opponents balls or preventing them to take any balls.<br>

5.  Opposite home ball posting point will be given to the opposite team. <br>

6.  Any team must not block the opposite teams home section. <br>

7.  In case of a tie during a match, there will be a short match again.<br> 

8.  Compensation time will be given on the discretion of referee. <br>

9.  The ball used will be Table Tennis ball. <br>

10.  Timeouts will be on the discretion of the referee.<br> 

11.  Dead bots are not allowed. <br>

12.  All bots will be checked at the start of every round that they are moving. In case of any discrepancy, referee will decide that the bot is moving or not. <br>



                                               <h4>Team Specifications</h4>



Any team can participate in this competition. A team may consist of a maximum of 3 participants. These participants can be from same or different institutes. <br>

Team Name: <br>Every team must have a name which must be unique. <br>We reserves the right to reject entries from any Team whose name it deems inappropriate, offensive or conflicting. <br>Organizers must be notified during if a Team's name has been changed. <br>

Team Representative: <br>Each team must specify their Team Representative (Leader) at the time of registration on the website. All important communications between us and the registered teams will be done through their Team Representative. <br>The Team Representatives must submit valid contact details (phone no., email ID etc.) at the time of registration. <br>

NOTE: During any kind of conversation, registration, communication, mails or submissions the team must identify themselves by their Team ID only provided at the time of registration and not by your team name. Please do not use your team name as your identification in any kind of communication with us. <br>

                                               <h4>Certificate Policy</h4>



Certificate of Excellence will be given to all the winners. <br>

Certificates of Participation will be given to others. <br>

The teams which get disqualified due to disobeying any of the competition rules will not be considered for the certificate.<br>



 <h4>Prize money</h4>

 Cash prize of Rs 3000.<br> 

                                           <h4>Contacts</h4>

                                               1. Harshit Gupta - 9530172819<br>
                                               
                                               2. Shivam Agarwal - 9479874426	<br>				

                                               3. Shivam Parashar<br>

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>
                                
                                <div style="overflow-y:scroll;">

                                    <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Minefield Escape</h2>

                                       <div class="event-container">

                                           <h4>Description</h4>

                                           You are a field operative for RAW. You have to make an escape for nemesis ground but it’s a mine field. But using advanced technology developed by DRDO you have sight WHITE highlighted path which will safely take you to your extraction point. So get on your best of LFR’s to get going on this final objective of your mission. But take care to reach the extraction point in time as the nemesis guardians might be following onto your lead. Everything depends on how precisely and efficiently you follow your path as you don’t want to get BLOWN….<br>

                                           <h4>Task</h4>

                                           Teams have to build an autonomous bot (line following bot) which can detect the white lines on the arena and follow the same to complete the task.<br>

                                           

                                           <h4>Rules</h4>

                                           Participants have to submit a portfolio of their robot, consisting of a written abstract of the working model before the competition. This portfolio will be used to seed teams for the competition. Last date for portfolio submission is 28th February 2015. <br>



                                           <h4>Specifications</h4>

                                           <h4>Dimensions and Fabrications</h4>

                                           1. The machine should fit in a box of dimension 200mm x 200mm x 200 mm (l x b x h) at any given point during the match. <br>

                                           2. There is no weight limit for the bot. Power Supply can be external or on-board.<br>

                                           

                                           <h4>Robot Control Requirements</h4>

                                           No remote control mechanism is required for this robot. The robot should be fully autonomous. Any wired or wireless remote is not allowed.<br>

                                           <h4>Battery and Power</h4>

                                           1.The electric voltage between 2 points anywhere in the machine should not be more than 12V DC at any point of time. <br>

                                           2. The teams can use on-board power supply or can use adapters for power supply.<br>

                                           3. Teams have to bring their own power supply. No power supply will be provided for this event.<br>

                                           It is suggested to have extra battery ready and charged up during competition so that on advancing to next level, you don’t have to wait or suffer due to uncharged battery. <br>

                                           If teams don’t show up on allotted slot, they will be disqualified. <br>

                                           

                                           <h4>Judging</h4>

                                           <h4>Criteria for Winning</h4>

                                           For the first round, teams have to traverse the whole arena and on the basis of the time taken by the teams, they are shortlisted for the next round.<br>

In the next round again the same procedure will be done and the team completing the tasks in minimum time will be declared as winner.<br>



                                           <h4>Team Specifications</h4>



Any team can participate in this competition. <br>A team may consist of a maximum of 4 participants. <br>These participants can be from same or different institutes. <br>

Team Name: Every team must have a name which must be unique.<br> We reserves the right to reject entries from any Team whose name it deems inappropriate, offensive or conflicting. <br>Organizers must be notified during if a Team's name has been changed. <br>

Team Representative: Each team must specify their Team Representative (Leader) at the time of registration on the website. All important communications between us and the registered teams will be done through their Team Representative. The Team Representatives must submit valid contact details (phone no., email ID etc.) at the time of registration. <br><br>

NOTE: During any kind of conversation, registration, communication, mails or submissions the team must identify themselves by their Team ID only provided at the time of registration and not by your team name. Please do not use your team name as your identification in any kind of communication with us. 

                                           

                                           <h4>Certificate Policy</h4>



Certificate of Excellence will be given to all the winners. <br>

Certificates of Participation will be given to others. <br>

The teams which get disqualified due to disobeying any of the competition rules will not be considered for the certificate.<br>



 <h4>Prize money</h4>

 Cash prize of Rs 5000.<br> 

                                           <h4>Contacts</h4>
                                           1. Megha Chittora - 9406676861<br>
                                           2. Shivani Srivastava - 9479874277<br>
                                           3. Samta Joshi - 9462730881

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Junk-Yard</h2>

                                       <div class="event-container">

                                           <h4>Cancel due to some reason...</h4>

                                           

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>
                                    
                                <div style="overflow-y:scroll;">
                                    
                                    <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Roboshark</h2>

                                       <div class="event-container">

                                            <h4>Description</h4>
                                           An Indian Revolutionary ship containing extremely confidential reports got wrecked due to a gruesome storm. Those documents were however not destroyed but they are presently floating amid the vast expanse of the sea. So a recovery team has to be sent to recover as many documents as possible before the nemesis power get hold of them. So your task is to make a Roboshark to avert this situation of intel chaos. Sweep the expanse of sea gathering report container and safely delivering them to the safe point. So get yourself ready to operate in this situation of fanatical pressure. India relies on your success….<br>
                                           <h4>Task</h4>
                                           Teams have to make a manually controlled aqua bot which can grab as many balls as possible in the arena and bring it to its home. <br>
                                           
                                           <h4>Rules</h4>
                                           <h4>Rounds</h4>
There will be two rounds in the game:<br>
                                           <h4>Round 1</h4>
1.  Two teams will start the match at the same time. <br>
2.  Balls of the same or different colour are placed randomly in the arena. <br>
3. The balls are scattered only on the water surface for this round.<br>
4.  Time limit is 5 minutes. <br>
5.  Obstacles will be placed on the arena.<br> 
6.  Robot gets negative points each time it touches the obstacle and border. <br>
7.  If the ball is hit out of the arena then it will not be replaced in the arena.<br> 
8.  The criteria for the negative points will be disclosed on the day of the event. <br>
9.  Points for each goal will also be revealed on the day of the event. <br>
10.  8 teams will make it to the round 2 (depends on the number of teams). <br>
                                           <h4>Round 2</h4>
1.  This is also one on one round. <br>
2.  Teams will be playing against each other.<br> 
3.  Obstacles are placed on the arena. <br>
4.  5 balls of the same or different colour are placed randomly in the arena. <br>
5.  The balls will be scattered not only on the surface of the water but also inside the water.<br> 
6.  If the ball is hit out of the arena then it will be placed in the centre of the arena. <br>

                                           <h4>Retries</h4>
Only one retries will be given only in following case: <br>
1.  Wires of both bots get entangled. <br>
2.  Bot gets submerged in water because of some external factors.<br> 

                                           <h4>Safety<br>
1. Once the robots have entered into the arena, no team members can enter into the arena at any point of time. In case if bout has to be halted in between and some changes have to be done in the arena or condition of the robot(s), it will be done by organizers only. <br>
2. Battery and Motors should be protected from the water.<br>


                                               <h4>Not allowed</h4>
Hitting OR Kicking OR Thrashing OR Flipping the other bot.<br>

 NOTE: The decision of the event organizers is final and binding to all.<br> 

                                           
                                           <h4>Specifications</h4>
                                               <h4>Bot Specifications</h4>

The dimensions of the bot should be less than or equal to 300mm X 300mm X 300mm at the start of the game failing which the team will be disqualified from the competition. <br>However the bot can extend its dimension once the run starts. 
The bot should be controlled manually.<br> 
Teams can use both wired as well as wireless control mechanisms. <br>In case of wired bots, the length of wire should be minimum 2 meters so that the wire remains slack at any instant of time. <br>If the participants use wireless mechanism then it is mandatory to use a dual frequency remote. <br>
The dimensions of the remote are not included in the size constraint of the bot. <br>
Bot can have an on-board power supply. <br>
Participants are not supposed to use any readymade lego components.<br>
Irrespective of the mechanism used, only one person will be allowed to control the bot.<br> 

                                               <h4>Power Supply</h4>

The participants can use any external or on board electric or non-electric power supply.<br> The power source must be non-polluting and must satisfy the safety constraints determined by the organisers. <br>In case of non-electric power supply, the participants must get it approved from the organisers beforehand via email. <br>Organisers are not responsible for the inconvenience if the approval is not sought. <br>
In case of an electric power supply, the voltage between any two points should be less than or equal to 12 V DC at all times during the run. <br>
AC power supply will not be provided at the time of the competition. <br>



                                           
                                           <h4>Judging</h4>
                                               <h4>Gameplay</h4>
1. Every team will be required to pick the balls scattered in the arena and take it to their home section.<br>
2. A robot can push or hit the ball.<br>
3.  Ball is considered of the team if it is present in the home section.<br>
4.  Teams can increase their score by taking the opponents balls or preventing them to take any balls.<br>
5.  Opposite home ball posting point will be given to the opposite team. <br>
6.  Any team must not block the opposite teams home section. <br>
7.  In case of a tie during a match, there will be a short match again.<br> 
8.  Compensation time will be given on the discretion of referee. <br>
9.  The ball used will be Table Tennis ball. <br>
10.  Timeouts will be on the discretion of the referee.<br> 
11.  Dead bots are not allowed. <br>
12.  All bots will be checked at the start of every round that they are moving. In case of any discrepancy, referee will decide that the bot is moving or not. <br>

                                               <h4>Team Specifications</h4>

Any team can participate in this competition. A team may consist of a maximum of 3 participants. These participants can be from same or different institutes. <br>
Team Name: <br>Every team must have a name which must be unique. <br>We reserves the right to reject entries from any Team whose name it deems inappropriate, offensive or conflicting. <br>Organizers must be notified during if a Team's name has been changed. <br>
Team Representative: <br>Each team must specify their Team Representative (Leader) at the time of registration on the website. All important communications between us and the registered teams will be done through their Team Representative. <br>The Team Representatives must submit valid contact details (phone no., email ID etc.) at the time of registration. <br>
NOTE: During any kind of conversation, registration, communication, mails or submissions the team must identify themselves by their Team ID only provided at the time of registration and not by your team name. Please do not use your team name as your identification in any kind of communication with us. <br>
                                               <h4>Certificate Policy</h4>

Certificate of Excellence will be given to all the winners. <br>
Certificates of Participation will be given to others. <br>
The teams which get disqualified due to disobeying any of the competition rules will not be considered for the certificate.<br>

 <h4>Prize money</h4>
 Cash prize of Rs 7000.<br> 
                                           <h4>Contacts</h4>
                                               1. Diwakar Vaish: 9407477270	<br>				
                                               2. Abhinav  Singh: 8948684213<br>
                                               3. Abhishek Kumar: 94078384912<br>

                                           

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Robothon</h2>

                                       <div class="event-container">

                                          <h4>Description</h4>
                                           The world believes in the survival of the fittest and it is in your hands to prove how fit your country men are. But this time the criterion is a bit different; you need to show the world how efficient your designed bot is. So pull up your socks and get ready to put forward a show that shall vouch for your mental and your bot’s physical speed. Just go onto the racing track and get to experience the thrill of a Robothon.<br>
                                           <h4>Task</h4>
                                           A robot must begin from the Start line, proceed to different hurdles, execute turns, and then reach to the Finish line. The race ends when the robot has completely crossed the end line. <br>
                                           
                                           <h4>Rules</h4>
                                           <h4>Rounds</h4>
There will be two rounds in the game<br>

                                           <h4>Round 1 (Elimination Round):</h4>
 Only one team will be there in this round.<br> 
Time limit will be decided on the day of the event, there will negative points for exceeding the time limit. <br>
 Obstacles will be placed on the arena. <br>
 There will be no negative point if robot touches the border.<br> 
 The criteria for the negative points will be disclosed on the day of the event.<br> 
 8 teams will make it to the round 2 (depends on the number of teams). <br>
                                           <h4>Round 2:</h4>
The team completing the same task in minimum time out of first round selected teams will be the winner.<br>

                                           <h4>Specifications</h4>
                                           <h4>Robot Specifications</h4>
Robot dimension and fabrication<br>
Each bot should fit in a box of dimension 300 mm x 300 mm x300 mm (l*b*h) at the start of the match. <br>
The external device used to control the machine is not included in the size constraint. <br>
Any machine component should not be detached (intentionally) during any point of the bout.<br>

                                           <h4>Robot Control Requirements</h4>
The bot can be controlled through wired or wireless remote. <br>
In case of wired bot, minimum length of wire should be 6 meter. Also the wire should remain slack at any instant during the bout.<br>
All the wires coming out of the bot should be stacked as a single unit.<br>
The bots using wireless remote must at least have a two frequency remote control circuit or two dual control circuits which may be interchanged before the start of the race to avoid frequency interference with other teams. <br>
Remote control systems that are readily available in the market may also be used.<br> 

                                           <h4>Battery &amp; Power</h4>
The machine can be powered electrically only. <br>
In case of wired bots, teams can use external batteries.<br> 
In case of wireless bots, batteries should be placed on the bot.<br> 
The electric voltage between 2 points anywhere in the machine should not be more than 18V DC at any point of time and net current flowing through the circuit should not be more than 10A.<br>
While in the second round the net current flowing through the circuit should not be more than 3.5 amp.


                                           
                                           <h4>Judging</h4>
                                           <h4>ROUND 1-</h4>8 teams with best timings will be selected.<br>
                                           <h4>ROUND2-</h4>The team completing the task with best timing will be the winner.<br>

                                           <h4>Team Specifications</h4>

Any team can participate in this event. <br>A team may consist of a maximum of 4 participants. <br>These participants can be from same or different institutes.<br><br> 
Team Name: <br>Every team must have a name which must be unique. We reserves the right to reject entries from any Team whose name it deems inappropriate, offensive or conflicting. Organizers must be notified during if a Team's name has been changed. <br>
Team Representative: <br>Each team must specify their Team Representative (Leader) at the time of registration on the website. All important communications between us and the registered teams will be done through their Team Representative. The Team Representatives must submit valid contact details (phone no., email ID etc.) at the time of registration. <br><br>
NOTE: During any kind of conversation, registration, communication, mails or submissions the team must identify themselves by their Team ID only provided at the time of registration and not by your team name. Please do not use your team name as your identification in any kind of communication with us. 


                                           <h4>Certificate Policy</h4>

Certificate of Excellence will be given to all the winners. <br>
Certificates of Participation will be given to all the teams who qualify two rounds of the competition. <br>
The teams which get disqualified due to disobeying any of the competition rules will not be considered for the certificate.<br>


 <h4>Prize money</h4>
 Cash prize of Rs 12000.<br> 
                                           <h4>Contacts</h4>
                                           1. Yash Jain : 9926012352<br>
                                           2. Rohan Rajput : 7587528802	<br>								
                                           3. Quamruz Zaman: 9479330559<br>

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Robowar</h2>

                                       <div class="event-container">

                                           <h4>Description</h4>
                                           Imagine yourself in a situation when your country is surrounded by enemies on all sides and only you can rescue it to safety. It is your skills and knowledge that can beat the enemy out of your nation. It is time for a Robowars where either you crush away the enemy’s bot or get your own sliced into pieces.
So get ready to fight for your life, to fight for your pride, to fight for your glory and let your bot shine to the entire world.<br>
                                           <h4>Task</h4>
                                           Design and construct a wired or wireless remote controlled robot capable of fighting a one on one tournament.<br>
                                           
                                           <h4>Rules</h4>
                                           <h4>Video and Abstract Submission</h4>

Participants have to submit a portfolio of their machine, consisting of a written abstract and a video of the working model before the competition. This portfolio will be used to seed teams for the competition. Last date for portfolio submission is 28th February 2016.<br> 

                                           <h4>Abstract</h4>

The written abstract should be prepared on the following lines: <br>
The weapon systems and power supply method should be explained in detail. <br>Picture(s) showing these should be attached. <br>
In case of wireless remote, functioning of wireless remote and the frequency or any other wireless module used for wireless remote must be explained in detail. <br>
Description of any unusual advantageous mechanism used. <br>The specifications of all the components used, including motors, suspension springs, remote controller, wires, battery etc. have to be mentioned.<br> 
You can email the portfolio minus the video and send the video later. <br>This will make sure that at least the abstract part of your portfolio reaches us before the deadline. <br>
An email will be sent to the team leader confirming the receipt of the entry.<br>
                                           
                                           <h4>Video Abstract</h4>

The video should be of at least 1 minute with the unedited clip showing the machine performance to the fullest. <br>All destructive mechanism(s) being used must be shown working. <br>
It is not necessary to explain the mechanisms in the video<br>
Please note that this video abstract will not be the sole criteria for selection of your robot to perform at Robowars. <br>

                                           <h4>Safety Rules</h4>

Compliance with all event rules is mandatory. <br>It is expected that competitors stay within the rules and procedures of their own accord and do not require constant policing. <br>
If you have a robot or weapon design that does not fit within the categories set forth in these rules or is in some way ambiguous or borderline, please contact the event organizers. <br>Safe innovation is always encouraged, but surprising the organizers with your brilliant exploitation of a loophole may cause your robot to be disqualified before it even competes.<br> 
Each event has safety inspections. <br>It is at their sole discretion that your robot is allowed to compete .<br>
All weapons must have a safety cover on any sharp edges. <br>
All participants build and operate robots at their own risk.<br> 
All the resources provided at the time of competition from the organizers should be strictly used only after the consent of the organizers. <br>
Once the robots have entered into the arena, no team member can enter into the arena at any point of time. In case if a fight has to be halted in between and some changes have to be done in the arena or condition on the robot(s), it will be done by organizers only. <br>
                                           
                                           <h4>Specifications</h4>
                                           <h4>Dimensions and Fabrications</h4>

The machine should fit in a box of dimension 350mm x 350mm x 350 mm (l x b x h) at any given point during the match. <br>The external device used to control the machine or any external tank is not included in the size constraint. <br>
The machine should not exceed 12 kg of weight including the weight of pneumatic source/tank. <br>Weight of remote controller will not be counted.<br> Power Supply can be external or on-board.<br>

                                           <h4>Mobility</h4>

All robots must have easily visible and controlled mobility in order to compete. Methods of mobility include: <br>
Rolling (wheels, tracks or the whole robot). <br>
Non-wheeled robots having no rolling elements in contact with the floor and no continuous rolling or cam operated motion in contact with the floor, either directly or via a linkage. <br>Linear-actuated legs and novel non-wheeled drive systems come under this category. <br>
Jumping and hopping is not allowed. <br>
Flying (using airfoil, helium balloons, etc.) is not allowed.<br> 

                                           <h4>Robot Control Requirements</h4>
The machine can be controlled through wireless or wired remote. Power supply can be external or on board. Refer below for further details on battery and power. <br>
In case of wireless remote, there should be binding capability between transmitters and receivers. <br>The remotes with such facility will only be allowed. <br>The team must have at least two frequency wireless remote control circuit or two dual control circuits<br>
Remote control systems from toys might be used. Remote control systems available in the market may also be used. <br>
Nonstandard or self-made remote control systems must first be approved by the organizers. <br>

                                           <h4>Battery and Power</h4>

The machine can be powered electrically only. Use of an IC engine in any form is not allowed. <br>
The Battery and other power source can be provided by the institute in case the team has no other source of power supply.<br>
On board batteries must be sealed, immobilized-electrolyte types (such as gel cells, lithium, NiCad, NiMH, or dry cells). <br>
The electric voltage between 2 points anywhere in the machine should not be more than 24V DC at any point of time. <br>
It is suggested to have extra battery ready and charged up during competition so that on advancing to next level, you don’t have to wait or suffer due to uncharged battery. If teams don’t show up on allotted slot, they will be disqualified. <br>
Change of battery will not be allowed during the match.<br>

                                           <h4>Pneumatics</h4>

Robot can use pressurized non-inflammable gases to actuate pneumatic devices. <br>Maximum allowed outlet nozzle pressure is 6 bar. <br>The storage tank and pressure regulators used by teams need to be certified and teams using pneumatics are required to produce the Safety and Security letters at the Registration Desk at the venue. <br>Failing to do so will lead to direct disqualification. <br>
The maximum pressure in cylinder should not exceed the rated pressure at any point of time. <br>
All pneumatic components on board a robot must be securely mounted. <br>

                                           <h4>Hydraulics</h4>

Robot can use non-inflammable liquid to actuate hydraulic devices e.g. cylinders. <br>
All hydraulic components on-board must be securely mounted. <br>Special care must be taken while mounting pump, accumulator and armour to ensure that if ruptured direct fluid streams will not escape the robot. <br>
All hydraulic liquids are required to be non-corrosive and your device should be leak proof. Maximum allowed pressure is 6 bars. <br>

                                           <h4>Weapon Systems</h4>

Robots can have any kind of magnetic weapons, cutters, flippers, saws, lifting devices, spinning hammers etc. as weapons with following exceptions and limitations: <br>
Liquid projectiles.<br> 
Any kind of inflammable liquid.<br> 
Flame-based weapons. <br>
Any kind of explosive or intentionally ignited solid or potentially ignitable solid. <br>
Nets, tape, glue, or any other entanglement device. <br>
High power magnets or electromagnets. <br>
Radio jamming, Tasers, tesla coils, or any other high-voltage device. <br>
Tethered or untethered projectiles. <br>
Spinning weapons which do not come in contact with the arena at any point of time are allowed. <br>In no case should the arena be damaged by any bot.<br> The competition will be played on a knock-out basis. <br>

                                           
                                           <h4>Judging</h4>
                                           <h4>Criteria for Winning</h4>

A robot is declared victorious if its opponent is immobilized. <br>
A robot will be declared immobile if it cannot display linear motion of at least one inch in a timed period of 30 seconds. <br>A bot with one side of its drivetrain disabled will not be counted out if it can demonstrate some degree of controlled movement.<br>In case both the robots remain mobile after the end of the round then the winner will be decided subjectively.<br>
A robot that is deemed unsafe by the judges after the match has begun will be disqualified and therefore declared the loser.<br>The match will be immediately halted and the opponent will be awarded a win.<br>
If a robot is thrown out of the arena the match will stop immediately, and the robot still inside the arena will automatically be declared as the winner.<br>
Robots cannot win by pinning or lifting their opponents.<br>Organizers will allow pinning or lifting for a maximum of 20 seconds per pin/lift then the attacker robot will be instructed to release the opponent. If, after being instructed to do so, the attacker is able to release but does not, their robot may be disqualified.<br>If two or more robots become entangled or a crushing or gripping weapon is employed and becomes trapped within another robot, then the competitors should make the timekeeper aware, the fight should be stopped and the robots separated by the safest means.<br>
Points will be given on the basis of aggression, damage, control and strategy.<br>
Aggressiveness – Aggressiveness is judged by the frequency, severity, boldness and effectiveness of attacks deliberately initiated by the robot against its opponent.<br>If a robot appears to have accidentally attacked an opponent, that act will not be considered Aggressiveness.<br>
Control – Control means a robot is able to attack an opponent at its weakest point, use its weapons in the most effective way, and minimize the damage caused by the opponent or its weapons.<br>
Damage – Through deliberate action, a robot either directly or indirectly reduces the functionality, effectiveness or defensibility of an opponent.<br>Damage is not considered relevant if a robot inadvertently harms itself.<br>

Note: Qualification of a robot to next level is subjective and totally on the decision of the judges.<br>A robot winning in a round against its opponent doesn’t guarantee its entrance into the next round.<br>If the judges found the winner robot incompetent to enter into the next round, it may get disqualified. Judges can disqualify both the robots of a match from advancing to the next round. All the decisions taken by the judge will be final and binding to all. Any queries afterwards will not be entertained.<br>

                                           <h4>Team Specifications</h4>

Any team can participate in Robowars. <br>A team may consist of a maximum of 4 participants. <br>These participants can be from same or different institutes. <br><br>
Team Name:<br>Every team must have a name which must be unique. Robowars reserves the right to reject entries from any Team whose name it deems inappropriate, offensive or conflicting. Organizers must be notified during if a Team's name has been changed. 
Team Representative: <br>Each team must specify their Team Representative (Leader) at the time of registration on the website. All important communications between us and the registered teams will be done through their Team Representative. The Team Representatives must submit valid contact details (phone no., email ID etc.) at the time of registration. <br><br>
NOTE: During any kind of conversation, registration, communication, mails or submissions the team must identify themselves by their Team ID only provided at the time of registration and not by your team name. Please do not use your team name as your identification in any kind of communication with us. 


                                           <h4>Certificate Policy</h4>

Certificate of Excellence will be given to all the winners. <br>
Certificates of Participation will be given to all the teams who qualify two rounds of the competition. <br>
The teams which get disqualified due to disobeying any of the competition rules will not be considered for the certificate.<br> 

                                           <strong>* Prizes worth INR 12,000 to be won for best designs, engineering, weapon and other subjective criterion (subject to discretion of judges) </strong>


                                           <h4>Contacts</h4>
                                           1. Vipul Gupta: 9074249984<br>								                
                                           2. Parth Singh: 8989694710<br>

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">CAD Sutra</h2>

                                       <div class="event-container">

 <h4>Contest Terms and Conditions:</h4>

1.Please read contest rules before participating.<br>

2.You will be required to make a computerized CAD model for which you are
free to choose any CAD software like CATIA,SolidWorks,etc.<br>

3.You can either bring your own laptops(recommended) or you will be
provided a system with a CAD software installed in it as per the
availability of the software or the number of participants.<br>

4.The duration of the competition will be 3 hours(maximum).<br>

5.Use of internet is strictly prohibited during the competition.<br>

6.A theme will be provided on-the-spot based on which you are supposed to
make a CAD model.Use of pre-made model or any other unfair means is
absolutely not allowed.<br>

7.Each contestant can submit only one CAD model.<br>

8.Submission via the internet are sent entirely at the risk of the
contestant.CAD SUTRA conducting team is not responsible for technical
malfunction of any network.<br>

9.Winners will be decided by the jury members of the CAD SUTRA and judge
decision will be final.<br>

10.Entries that are incomplete,illegible or rules and regulations not
being followed will be disqualified.<br>

11.CAD SUTRA reserves the right to alter these terms and conditions where
necessary.<br>

 <h4>Prize money</h4>
 Cash prize of Rs 2000.<br> 
                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Bridged</h2>

                                       <div class="event-container">

                                          <h4>Task: </h4>
                                           <h4>Design a bridge</h4>
                                           <strong>Cable Stayed suspension bridge OR Truss bridge</strong><br>
 It sustain the maximum possible load with minimum deflection<br>
 Satisfying all the understated constraints.<br>
 The bridge will be placed on a given stand arena<br>
The weights are applied from the centre through a hole provided in on the bridge <br>

                                           <h4>Material Used:</h4>
  Ice cream sticks, Popsicle sticks, cotton strings and Fevicol as adhesive (without using any strengthening coating)<br>

                                           <h4>Design Constraints:</h4>

                                           <h4>Bridge in General:</h4>

1. The Bridge must be of length under limit 700 mm.<br>

2. The maximum breadth (B) of the bridge should be 80mm.<br>

3. The bridge must have only two vertical towers (in case of suspension bridge) and the span (S) i.e. the distance between the center of their points of contact with the top chord and the distance between the centers of the footings must be exactly 500mm.<br>

4. The roadway should be continuous and should allow a 65 mm x 65mm hypothetical vehicle to pass the entire length of the bridge.
(Penalty: Participants will be disqualified if any of the above four rules is violated.)<br>

5. The maximum vertical height of the top of the tower from the base of the foot of the tower is 250mm<br>

6. The dead mass of the bridge should not exceed 1.5 kg.<br>

(Penalty : 10% of final load taken by the bridge will be deducted for breaking this rule.)<br>

                                           <h4>DECK</h4>

Overlap criteria for truss members - Not more than two Popsicle sticks should be overlapped longitudinally to make a truss member.<br>

Joint criteria for Truss Members - Joints should resemble a pin connection i.e. all ends of members should meet exactly at a point which is the joint and not more than 8 Popsicle sticks should be overlapped at joints.<br>

The bridge should have a 10 mm diameter circular hole through the deck for suspension of weight.<br>

                                           <h4>Rules: </h4>
 Shape - the deck should be rectangular in the longitudinal direction. <br>
Once the structure is weighed, you are not allowed to modify your structure in any way.<br> 
Any team that is not ready at the time specified will be disqualified immediately. <br>
Judges' decision shall be final and binding on all.  <br>
Change in rules, if any will be highlighted on the website and will be mailed to all the registered participants.<br>
                                           <h4>Judging Criteria:  </h4>
Dead mass of the Bridge (M) in kg <br>
Vertical Deflection of the center of the bridge deck during failure (D) in mm <br>
Load carried by the structure before failure (L) <br>

                                           <h4>POINTS</h4>

o Deflection at yield  = 20%<br>

o Efficiency (maximum weight)= 50%<br>

o Aesthetics = 30%<br>
 <h4>Prize money</h4>
 Cash prize of Rs 2000.<br> 
<h4>Contacts</h4><br>
1. Shivam Vikram Singh 9424037616

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Hovercraft</h2>

                                       <div class="event-container">

                                          <h4>Event Structure </h4>
                                           <strong>Task:</strong> <br>You have to make a hovercraft that can be operated using wired or wireless Remote Control. <br>
                                           <strong>Round 1 - Qualifying Round</strong><br> 
▸Each team will have to race their bots on the provided track for two lap and the lap time will be taken into consideration.<br>
The lap time is calculated as : T= t+n(seconds)<br>
Where T is total time<br>
t is actual time<br>
n is no. of times the hovercraft hits the arena boundary. <br>
 ▸Top teams having minimum lap time will qualify for the second round.<br><br>
 
                                           <strong>Round 2 – Final Round</strong><br>
Top qualified teams will participate in final round of single lap.<br>
The teams will be further divided into groups accordingly<br>
The minimum time in each group will be qualified.<br>
They will compete in further new groups until the winner is selected.<br>

                                           <h4>Model Specifications:</h4>
 ▸ Maximum dimensions of the hovercraft should not exceed 50 cm X 50 cm X 50 cm.<br> 
▸There is no limitation on weight.<br>
 ▸The models should be handmade. <br>
▸Hovercrafts assembled from kits are strictly prohibited.<br>
▸Electronic equipment such as ESCs, electric motors, servos, batteries etc. can be purchased. <br>

                                           <h4>Team Structure </h4>
A team can consist of maximum 3 members. Students from different colleges can form a team. <br>
                                           <strong>ELIGIBILITY</strong><br>
Any student of any academic institution is eligible to participate.<br>
                                           <h4>Rules</h4>
 ▸Only one attempt in the arena will be given. No another chance will be provided. You have to race your hovercraft in a single go.<br>
NOTE: <br>The bot can be operated using a wireless or wired remote control system.<br>
▸Please fine-tune your hovercrafts before the race.<br>
▸In Round 2, time-out of 1 minute will be provided only in the condition when the hovercrafts are stuck (immobile).<br>
 PENALTY<br> 
▸If during the lap a participant touch his/her bot he will need to place their bot back to the last checkpoint it has crossed.<br>
 ▸Race will continue during this period of time and the time lost during placing the bot back at the checkpoint will not be adjusted.<br>
 ▸If the dimensions of the bot exceeds the allowed dimensions (i.e. 50x50x50 cm) <br>
 ▸To prevent interference between transmitters during the race, the participants can use remote with frequency of band spectrum 2.4 GHz.<br>
 ▸The participants are allowed to bring more than one hovercraft<br>
. ▸Within the same round/set the participants are not allowed to change their hovercraft.<br> 
▸The hovercraft must not contain any structure or modification which damages other hovercrafts or harms the audience. In any such case it will be disqualified.<br>
 The decisions made by the referees will be final. <br>They cannot be questioned or claimed for any of their decisions. 
 
  <h4>Prize money</h4>
 Cash prize of Rs 4000.<br> 
<h4>Contacts</h4>
Shiv Kumar<br>
9406885986
                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Mechnismo De Fiesta</h2>

                                       <div class="event-container">

                                          <h4>Task:</h4>
It will be a marble racing.<br>
You have to design a mechanism in given arena.<br>
The marble will run from starting point to end point on the mechanism.<br>

                                           <h4>Rules:</h4>
Maximum 6 members are allowed in a team.<br>
The mechanism should have atleast 10 steps.<br>

Only one team member is allowed to interact with the machine once the evaluation has begun. This includes resetting the machine during the run. This means that only one person will be allowed inside the arena. <br>However, if the team goes for another run, the restriction of one person inside the arena is uplifted until the machine is ready for the other run.<br>

Every team must have a leader. But it is not necessary for the leader to give the presentation or handle the machine during machine run.<br>

Programmable Logic Controllers or any other electronic controller/devices may be used on the machines. The use of these devices must be in line with a step.<br>

                                           <h4>Arena:</h4>

10*10 ft<br>

                                           <h4>Judging:</h4>
Marks will be on a scale of 10 which include:<br>
Design: 4<br>
Task Completion: 6<br>
 <h4>Prize money</h4>
 Cash prize of Rs 2000.<br>     
<h4>Contacts</h4>
1. Ramawtar Kulhary 9406886703<br>
2. Upendra Reddy Sura 9407476962                     
                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Mechbot Racer</h2>

                                       <div class="event-container">

                                            <h4>Task:</h4>
Design and built a vehicle that uses only pure mechanical mechanism.<br>

                                           <h4>Round 1:</h4>
It will be a race of 15 seconds.<br>
Each team will be given a maximum of three attempts. <br>
The longest covered distance will be taken in consideration.<br>
The team covering maximum distance will be qualified for next round.<br>
                                           <h4>Round 2:</h4>
It will be test of accuracy and reverse mechanism.<br>
The race will be on 2m wide and 7 m long track.<br>
Once the vehicle has stopped it has to travel back at least 3m in reverse direction.<br>
                                           <h4>Rules:</h4>
Maximum 3 members per team.<br>
Electric components cannot be used to provide any power to the wheels directly or using any direct/indirect link mechanism.<br>
                                           <h4>Judging Criteria:</h4>
Round 1= 40 marks.<br>
The maximum distance travelled by any bot will be scaled to 40 and rest will be given marks accordingly.<br>
Round 2=60 marks.<br>
30 for covering 7m in forward.<br>
30 for covering 3m in backward.<br>
 <h4>Prize money</h4>
 Cash prize of Rs 2000.<br> 
<h4>Contacts</h4>

                                           1. Surendra Sevliya 9407476924<br>


                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Mechnismo De Fiesta</h2>

                                       <div class="event-container">

                                           <h4>Task:</h4>

It will be a marble racing.<br>

You have to design a mechanism in given arena.<br>

The marble will run from starting point to end point on the mechanism.<br>



                                           <h4>Rules:</h4>

Maximum 6 members are allowed in a team.<br>

The mechanism should have atleast 10 steps.<br>



Only one team member is allowed to interact with the machine once the evaluation has begun. This includes resetting the machine during the run. This means that only one person will be allowed inside the arena. <br>However, if the team goes for another run, the restriction of one person inside the arena is uplifted until the machine is ready for the other run.<br>



Every team must have a leader. But it is not necessary for the leader to give the presentation or handle the machine during machine run.<br>



Programmable Logic Controllers or any other electronic controller/devices may be used on the machines. The use of these devices must be in line with a step.<br>



                                           <h4>Arena:</h4>



10*10 ft<br>



                                           <h4>Judging:</h4>

Marks will be on a scale of 10 which include:<br>

Design: 4<br>

Task Completion: 6<br>

 <h4>Prize money</h4>

 Cash prize of Rs 2000.<br>                          

						 </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Mechbot Racer</h2>

                                       <div class="event-container">

                                           <h4>Task:</h4>

Design and built a vehicle that uses only pure mechanical mechanism.<br>



                                           <h4>Round 1:</h4>

It will be a race of 15 seconds.<br>

Each team will be given a maximum of three attempts. <br>

The longest covered distance will be taken in consideration.<br>

The team covering maximum distance will be qualified for next round.<br>

                                           <h4>Round 2:</h4>

It will be test of accuracy and reverse mechanism.<br>

The race will be on 2m wide and 5 m long track.<br>

Once the vehicle has stopped it has to travel back at least 3m in reverse direction.<br>

                                           <h4>Rules:</h4>

Maximum 3 members per team.<br>

Electric components cannot be used to provide any power to the wheels directly or using any direct/indirect link mechanism.<br>

                                           <h4>Judging Criteria:</h4>

Round 1= 40 marks.<br>

The maximum distance travelled by any bot will be scaled to 40 and rest will be given marks accordingly.<br>

Round 2=60 marks.<br>

30 for covering 7m in forward.<br>

30 for covering 3m in backward.<br>

 <h4>Prize money</h4>

 Cash prize of Rs 2000.<br> 

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

					

                                <span class="loading"></span>

                                <span class="icon close-content"></span>

				            </div>

                        </section>

					</section>

                    

                    <section class="st-panel st-color" id="st-panel-6">

						<div class="st-deco" data-icon="BMC"></div>

						<h2>Business and Management</h2>

						<p>"Management is doing things right; leadership is doing the right things."</p>

                        <section class="grid3d vertical" id="grid3d6">

                            <div class="grid-wrap">

                                <div class="grid">

                                    <figure><img src="img/bmc1.jpg" alt="img01"/><span class="event-name">B-Plan</span></figure>

                                    <figure><img src="img/bmc2.jpg" alt="img05"/><span class="event-name">Case-Study</span></figure>

                                    <figure style="width:200px;"><img src="img/bmc3.jpg" alt="img08"/><span class="event-name">Brand Presentation</span></figure>

                                    <figure><img src="img/bmc4.jpg" alt="img02"/><span class="event-name">B-Quiz</span></figure>

                                    <figure><img src="img/bmc5.jpg" alt="img04"/><span class="event-name">Group Discussion</span></figure>

                                    <figure><img src="img/bmc6.jpg" alt="img02"/><span class="event-name">Debate</span></figure>

                                </div>

                            </div><!-- /grid-wrap -->

                            <div class="content">

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="border-bottom:1px solid lightgrey;" class="event-head">B-Plan</h2>

                                       <div class="event-container">

                                           <h4>Desciption</h4>

                                      Show that you are one among those who lead the corporate world tomorrow by exhibiting your Business Plan in ABHIKALPAN 2016. You don’t have to be well equipped with technical knowledge to write a Business Plan it’s just a matter of Business and Management that you have to show. The team with the best plan will be the winner..<br>

                                         

What you have to present in B-Plan:<br>

1.	 Topic of the Plan <br>

2.	A description of your company including your budget, products or services and everything required in the stage of establishment.

<br>3.	Mission Statement.<br>

4.	Business’s Management.<br>

5.	Overview of Marketing.<br>

6.	Competitive Advantage

7.	Your estimated turnover.<br>



										 <h4>Rules</h4>

1.	The B Plan should be a write-up with pages not exceeding 10.<br>

2.	The B Plan should be submitted to the Coordinators by hand during ABHIKALPAN 2016 by 15:00 HRS on 13th March 2016.  

<br>3.	Initial Budget should not exceed Rs. 10,00,000.<br>



                                           <h4>Judging criteria:</h4>

1.	Creativity in the plan/product.<br>

2.	Feasibility of the plan.<br>



                                    <h4> Entry Fees: Rs. 50</h4>

<h4>Prize Money:</h4> 

 1500 INR <br>



										  

                                           <h4>Contacts</h4>

                                           1. Jayvardhan 9553533511<br>

                                           2. Vyshnavi - 9479877960



                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="border-bottom:1px solid lightgrey;" class="event-head">Case-Study</h2>

                                       <div class="event-container">

                                           <h4>Desciption</h4>

                                           Show that you equip a Detective who investigates on Business and situations relating to business in you.

      "Case studies are analyses of persons, events, decisions, periods, projects, policies, institutions, or other systems that are studied holistically by one or more method. The case that is the subject of the inquiry will be an instance of a class of phenomena that provides an analytical frame — an object — within which the study is conducted and which the case illuminates and explicates."

<br>

<h4>MAX. TEAM SIZE:  2</h4>

                                           <h4>Rules</h4>

1.	Case will be revealed on 5th March, 2016. <br>

2.	 The case study should not exceed 10 pages.<br>



3.	All types of data essential should be presented in the case.

<br>

4.	The competition is both online and offline. So, those who are interested to do it online can mail it to mohammadnazim@iiitdmj.ac.in or grandhisupraja@iiitdmj.ac.in by the dead line which will be provided along with the case.

<br>

5.	The offline competition will be held during Abhikalpan 2016, the participants have to give the report to the coordinators.

<br>







Download the case study by <a href="casestudy.pdf">click</a>

                                           <h4>Judging criteria:</h4>

1.	Depth in the Case study<br>

2.	Accuracy in the data<br>

3.	Creativity in the solution and its feasibility.

<br>



<h4>Entry fees: 50 INR .</h4> 

<h4>Prize Money:</h4> 

2000 INR<br>





                                           

                                           <h4>Contacts</h4>

                                         

 Shubham Chak   8989903725<br>

Rambha Sireesha     8985829702





                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="border-bottom:1px solid lightgrey;" class="event-head">Brand Presentation</h2>

                                       <div class="event-container">

                                           <h4>Rules</h4>

1.Registration fee is Rs.50 per head.<br>

2.Group of max. 2 members.<br>

3.Time limit is 7min.<br>

4.Presentation should be brought in pendrive.<br>

 <h4>Prize money</h4>

 Cash prize of Rs 2000.<br> 

                                           

                                           <h4>Contacts</h4>

                                           1. Tejaswini - 9822656702<br>

                                           2. Anurag Kumar - 7389321233



                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="border-bottom:1px solid lightgrey;" class="event-head">B-Quiz</h2>

                                       <div class="event-container">

                                           

										   

										   <h4>Introduction:</h4>

               Get ready to compete with the sharpest and fastest minds with a passion for the business world. With the likes of quiz master firing a volley of questions, only lightning fast responses and out of the box thinking can sail you through the tough competition. Do you have the mettle to battle it out at the BIZ-QUIZ in ABHIKALPAN 2016



										   

										   <h4>Rules</h4>



1.	There are two rounds in the Biz-Quiz.<br>

a.	Round 1: Written Test will be conducted in this round. This is basically a qualification round.

<br>b.	Round 2: The top 6 teams from the Qualification round will be selected and there will be final round in which there will winners.

( the number of teams in this round may change with respect to marks scored by teams in first round)

<br>2.	The Quiz Master will decide in case of any disputes.

<br>Judging Criteria: Purely based on number of question answered.

<br>Entry fees:  50 INR.

<br>

<h4>Prize Money:</h4>

  500 INR<br>

    



                                           

                                           <h4>Contacts</h4>

                                         Bellamkonda Venkatesh 9479875383<br>

                                          Tejaswini             9822656702





                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="border-bottom:1px solid lightgrey;" class="event-head">Group Discussion</h2>

                                       <div class="event-container">

                                          

<h4>Introduction:</h4>

‘Wise men don’t raise their voice, they improve their argument.’

It is only by discussing that we excel. Exhibit your reasoning ability, knowledge and communication skills in the Group Discussion event. 

The Group Discussion will be in group of 7-8 in which the member should discuss regarding the topic given. 



										  <h4>Rules</h4>

1.	On the spot by the moderator<br>

2.	Time limit : Marks will be reduced if the group exceeds given time limit which will be decided by the judge on spot.<br>

3.	In case of any dispute, coordinator’s decision will be final.<br>




<h4>Topics</h4>
The topics for final round of Group Discussion conducted by Business and Management Club are:<br>
1. Government is spending thousands of crores in building 'Smart Cties', where as more than 50% of the population lives in villages and rural areas. Shouldn't a better idea be to make 'Smart Villages' instead?
<br>2. Will GST (Goods and Service Tax) be instrumental to boost economic growth of India? 
<br>The topics for the first round will be generic and will be given on the spot, the qualifiers in first round will lead to final round and will discuss on the above given topics. Be prepared for the final round. 

              <br>                       Entry fees: 50 INR



<h4>Prize Money:</h4>   

1250 INR<br>

      

                                           <h4>Contacts</h4>

                                          Daniel Sinha        9407407695<br>

                                           Simran Soni 8827159989



                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="border-bottom:1px solid lightgrey;" class="event-head">Group Discussion</h2>

                                       <div class="event-container">

                                           <h4>Rules</h4>

1.Registration fee is Rs.30 per head.<br>

2.Topic will be soon updated.<br>

 <h4>Prize money</h4>

 Cash prize of Rs 1250.<br> 

                                           

                                           <h4>Contacts</h4>

                                           1. B.Venkatesh - 9479875383<br>

                                           2. Daniel Sinha

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

					

                                <span class="loading"></span>

                                <span class="icon close-content"></span>

				            </div>

                        </section>

					</section>



                    <section class="st-panel" id="st-panel-7">

						<div class="st-deco" data-icon="P"></div>

						<h2>Photography</h2>

						<p>"Photography is a kind of virtual reality, and it helps if you can create the illusion of being in an interesting world."</p>

                        <section class="grid3d vertical" id="grid3d7">

                            <div class="grid-wrap">

                                <div class="grid">

                                    <figure><img src="img/photo1.jpg" alt="img01"/><span class="event-name">Clairvoyance</span></figure>

                                    <figure style="width:200px;"><img src="img/photo2.jpg" alt="img05"/><span class="event-name">Faces,Places,Fancies</span></figure>

                                </div>

                            </div><!-- /grid-wrap -->

                            <div class="content">

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Clairvoyance</h2>

                                       <div class="event-container">

                                           <h4>Theme</h4>

                                           Macro Photography<br>

       Macro photography is extreme close-up photography, usually of very small subjects, in which the size of the subject in the photograph is greater than life size.<br>



                                           <h4>Rules and Regulations</h4>

1. You are allowed to submit a maximum of 2 photos.<br>

2. Photos must be in JPEG Format, with good quality and a minimum of 2MB memory.<br>

3. Mail your photos to clairvoyance.shutterbox@gmail.com along with your name, college and contact details.<br>

4. you can also give a small description about the photograph.<br>

5. Photos submitted must be the genuine work of the photographer. In case of violation, the participant will be disqualified.<br>

6. submitted photos must not contain any tags, signatures, initials, frame, border, logos or any other references.<br>

7. Your photographs will be posted on the official facebook page of Abhikalpan, The Techincal Fest, IIITDM Jabalpur and the awardee will be decided on the basis of Number of likes on your pictures( 30% ) and the points given by the judges on Quality, concept and your aesthetic sense.<br>

8. The winning photographs will be declared on our page soon after 13th march,2016, 1700 hrs.<br><br>

Last Day and time of Submission is 10th March, 2016, 2100 hrs.<br>



                                           <h4>Prize Money</h4> 

                                           Rs. 1000<br> 



                                           <h4>Contact</h4>

                                           Bhavya Sri - 09407476903<br>

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

                                <div style="overflow-y:scroll;">

                                   <section>

                                       <h2 style="color: #3E779A;text-shadow: 1px 1px 1px #3E779A;border-bottom:1px solid lightgrey;" class="event-head">Faces, Places, Fancies</h2>

                                       <div class="event-container">

                                           <h4>Theme</h4>

                                           Potrait and Fashion<br>



                                           <h4>Rules and Regulations</h4>

1. You are allowed to submit a maximum of 2 photos.<br>

2. Photos must be in JPEG Format, with good quality and a minimum of 2MB memory.<br>

3. Photographs can be submitted at the photography exhibition conducted by Shutterbox, The photography Club of IIITDMJ.<br>

4. Photos must be captured only during the contest and must be in the fest location .<br>

5. Photos submitted must be the genuine work of the photographer. In case of violation, the participant will be disqualified.<br>

6. submitted photos must not contain any tags, signatures, initials, frame, border,logos or any other references.<br>

7. The winning photographs will be declared on 13th march,2016, 1300 hrs.<br><br>

Last Day and time of Submission is 13th March, 2016, 1200 hrs.<br>

                                           <h4>Prize Money</h4> 

                                           Rs. 1000<br> 



                                           <h4>Contact</h4>

                                           Bhavya Sri - 09407476903<br>

                                       </div>

                                   </section>

                                    <div class="register">

                                       <a href="http://abhikalpan.org/cms/index.php/user/login"><button class="register_btn">Register</button></a>

                                   </div>

                                </div>

					

                                <span class="loading"></span>

                                <span class="icon close-content"></span>

				            </div>

                        </section>

					</section>    

                

				</div><!-- // st-scroll -->

				

			</div><!-- // st-container -->

			

        </div>

        

        <script src="js/events_classie.js"></script>

        <script src="js/events_helper.js"></script>

        <script src="js/events_grid3d.js"></script>

        <script>

			new grid3D( document.getElementById( 'grid3d1' ) );

            new grid3D( document.getElementById( 'grid3d2' ) );

            new grid3D( document.getElementById( 'grid3d3' ) );

            new grid3D( document.getElementById( 'grid3d4' ) );

            new grid3D( document.getElementById( 'grid3d5' ) );

            new grid3D( document.getElementById( 'grid3d6' ) );

            new grid3D( document.getElementById( 'grid3d7' ) );

		</script>

	</body>

</html>

