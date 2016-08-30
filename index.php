<?php



    if (isset($_COOKIE['logged_user']))

        $logged=true;



    else

        $logged = false;



?>

<!DOCTYPE html>

<html>

<head>  

    <?php

    $title = "Abhikalpan '16 | Technical Festival IIITDM Jabalpur";

    require_once('includes/header/header.inc');

    ?>

        <script type="text/javascript">

      $(window).load(function() { 

        setTimeout(function(){

        $('.continue_link').fadeIn();

        $('.loading').click(function()

        {

            $('.loading').fadeOut();

        })

        },800);

      });

    </script>

 <link href='css/timer.css' rel='stylesheet' type='text/css'>

  <script type="text/javascript" src="js/timer.js"></script>

</head>



<body>

    <section id="slide-1">



	<div class="section-def loading">

<br><br><br><br><br><br>

<div class="container">

                    <div class="row">

                        <div class="col-xs-12 text-center">

						 <img src="img/mascot.png" class="" alt="Abhikalpan Logo" />

							<img src="img/alogo.png" class="" alt="Abhikalpan Logo" /> <div>

                            <button class="btn pulse_btn continue_link btn-lg" style="display:none"> Abhikalpan 2k16 is here... </button>

                              </div>

                        </div>

                    </div>

                </div>

        </div>

	

		

	 

	

	

	   <?php require_once('includes/header/menu.inc'); ?>

	

	

	

		<div class="social">

        

		<ul>

              <li><a href="https://www.facebook.com/iiitdmj.abhikalpan/?fref=ts">Facebook <i class="fa fa-facebook"></i></a></li>

              <li><a href="https://twitter.com/abhikalpan_2k15">Twitter <i class="fa fa-twitter"></i></a></li>

              <li><a href="https://www.youtube.com/user/Abhikalpan">Youtube <i class="fa fa-youtube"></i></a></li>

            

              

          </ul>

      </div>

			

		



<div id="timer">

  Abhikalpan <br>

  is<br>

  Live <br>

  now<br>

</div>

	

	

	     <div class="city">

                <div class="footer_nav">

                    <div class="container">

                        <div class="col-sm-12 text-center">

                           
				<a href="guest.php" target="_blank"> Guest Lectures </a>
                            <a href="http://www.iiitdmj.ac.in" target="_blank"> Our Institute </a>

                            <a href="http://www.iiitdmj.ac.in/IIITDM/howtoreach.html" target="_blank"> Reach Us </a>

							 <a href="sponsor.php" target="_blank"> Sponsors </a>
<a href="timetable.pdf" target="_blank"> Schedule </a>
                                <a href="webteam.php" target="_blank"> Web & Graphics Team</a>

							  <a href="gallery.php" target="_blank"> Gallery </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

		

		

		

	</section>

	

	

	

	

	



	



	

	



</body>

</html>