<?php

    if (isset($_COOKIE['logged_user']))
        $logged=true;

    else
        $logged = false;

?>
<!DOCTYPE html>
<html>
<head>  
 <meta charset="UTF-8" />

	<title>Abhikalpan Sponsors</title>

	<link rel="shortcut icon" href="img/fav.png">

	
	<link rel="stylesheet" type="text/css" href="css/workshops_mystyle.css" />
	
<!-- <link rel="stylesheet" type="text/css" target="_blank" href="css_beta/basic.css"> -->
<link rel="stylesheet" type="text/css" target="_blank" href="css/sponsor_style_new.css">

<style type="text/css">

@font-face
{
font-family: myThirdFont;
src: url(oxygen.ttf);
}

h3,h2{text-align: center; font-family: myThirdFont; color:black;
}
#title{text-align: center; font-family: myThirdFont; color:black; font-size: 3em;}
.head{text-align: center; font-family: myThirdFont; color:black; font-size: 2em;text-transform: uppercase;
}
.cgs{text-align: center; font-family: myThirdFont; color:black; font-size: 1em;text-transform: uppercase;text-decoration: none;
}
.cgs table tr td a{text-align: center; font-family: myThirdFont; color:black; font-size: 1em;text-transform: uppercase;text-decoration: none;
}
.cgs table tr td{width:10em;}
</style>



 



</head>
<body>
 
            <div class="header">
                <img src="img/web_logo2.png" id="logo">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="event.php">Events</a></li>
					 <li><a href="about.php">About Us</a></li>
                      <li><a href="workshops.php">Mega Events & Workshops </a></li>
					<li><a href="exhibitions.php">Exhibitions </a></li>
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
    <br><br><br><br><br><br>
 
<div id="bg" style="position:fixed;top:0px; left:0px;height:768px; width:1368px;background-image:url(pattern.png); background-repeat:repeat;opacity:0.5;"></div>
<div class="rows" id="title" style="z-index:100;">ABHIKALPAN:SPONSORS</div>
<div class="spnsor_container matter scroll" id="spnsor">
<div id="row1" class="rows cgs">
   
</div>
    <br>

	
	<div class="rows head" style="z-index:100;">Partner</div>

<div id="row1" class="rows">
<div class="spic"> <a href="" target="_blank">
<img src="img/Radio Partner/time.PNG"></a></div>
</div>
<br><br>

<div class="rows" id="title" style="z-index:100;">Abhikalpan Previous Sponsors</div>
<div class="rows head" style="z-index:100;">Media Partner</div>



<div class="rows">

<!--<div class="spic"><a href="http://www.cigusta.com/" target="_blank"><h3>Food Partner</h3><img src="spnsor/images/fnb/juice.jpg"/></a></div>-->
<!-- <div class="spic"><a href="http://www.dominos.co.in/" target="_blank"><h3>Pizza Partner</h3><img src="spnsor/images/fnb/dominos.jpg"/></a></div>
 -->
 <!-- <div class="spic"><a href="http://www.subway.co.in/" target="_blank"><h3 style="width:250px;">Subs Partner</h3><img src="spnsor/images/fnb/subway.jpg"/></a></div> -->
<div class="spic"><a href="http:" target="_blank"><h3 style="width:200px;"> Danik Bhaskar</h3>
<img src="img/Media Partner/dainik bhaskar.jpg"></a></div>
<div class="spic"><a href="http:" target="_blank"><h3 style="width:250px;">Patrika</h3>
<img src="img/Media Partner/patrika.jpg"></a></div>

</div>

<br><br>





<div class="rows head" style="z-index:100;">Food Partner</div>

<div class="rows">
<!--<div class="spic"><a href="http://www.faasos.com/" target="_blank"><h3>Food Partner</h3><img src="spnsor/images/fnb/yogos.jpg"/></a></div>   -->

<div class="spic"><a href="http:" target="_blank"><h3>Hyderabad House</h3><br>
<img src="img/Food Partner/hyd.jpg"></a></div>
<div class="spic"><a href="http:" target="_blank"><h3>Freezo</h3>
<img src="img/Food Partner/freezo.jpg"></a></div>

 

<!-- <div class="spic"><a><h3>Paratha Partner</h3><img src="spnsor/images/fnb/paratha.jpg"/></a></div> --> 
</div>



<br><br>


<div class="rows head" style="z-index:100;">Radio Partner</div>

<div id="row1" class="rows">
<div class="spic"> <a href="" target="_blank">
<img src="img/Radio Partner/radio.png"></a></div>
</div>
<br><br>





<div class="rows head" style="z-index:100;">Other Partner</div>

<div class="rows">
<!--<div class="spic"><a href="http://www.faasos.com/" target="_blank"><h3>Food Partner</h3><img src="spnsor/images/fnb/yogos.jpg"/></a></div>   -->

<div class="spic"><a href="http:" target="_blank"><h3>Akash</h3>
<img src="img/Other Sponsors/akash.jpg"></a></div>
<div class="spic"><a href="http:" target="_blank"><h3>AMADA</h3>
<img src="img/Other Sponsors/mada.jpg"></a></div>
<div class="spic"><a href="http:" target="_blank"><h3>Bajaj</h3>
<img src="img/Other Sponsors/bajaj.jpg"></a></div>
</div>
<div class="rows">
<div class="spic"><a href="http:" target="_blank"><h3>Infi Zeal Technologies</h3>
<img src="img/Other Sponsors/infizeal.png"></a></div>
<div class="spic"><a href="http:" target="_blank"><h3>Emerald</h3>
<img src="img/Other Sponsors/emerald.jpg"></a></div>
<div class="spic"><a href="http:" target="_blank"><h3>HackerEarth</h3>
<img src="img/Other Sponsors/hackerearth.jpg"></a></div>
</div>
<div class="rows">
<div class="spic"><a href="http:" target="_blank"><h3>IT Pathshala</h3>
<img src="img/Other Sponsors/itpathshala.jpg"></a></div>
<div class="spic"><a href="http:" target="_blank"><h3>India</h3>
<img src="img/Other Sponsors/india.jpg"></a></div>
<div class="spic"><a href="http:" target="_blank"><h3>STRATASYS OBJET</h3>
<img src="img/Other Sponsors/stratasys.jpg"></a></div>
</div>
<div class="rows">
<div class="spic"><a href="http:" target="_blank"><h3>The Samdariya</h3>
<img src="img/Other Sponsors/samdariya.jpg"></a></div>
<div class="spic"><a href="http://www.abodestore.in/" target="_blank"><h3>The Online Grocery Store</h3>
<img src="img/Other Sponsors/abodestore.jpg"></a></div>
</div>
 

<!-- <div class="spic"><a><h3>Paratha Partner</h3><img src="spnsor/images/fnb/paratha.jpg"/></a></div> --> 
</div>



<br><br><br>


		   <div class="footer">
            <ul>
                 <li><a href="guest.php" target="_blank">Guest Lectures</a></li>
				<li><a href="http://www.iiitdmj.ac.in" target="_blank">our institute</a></li>
                <li><a href="http://www.iiitdmj.ac.in/IIITDM/howtoreach.html">reach us</a></li>
                <li><a href="sponsor.php">sponsors</a></li>
				 <li><a href="timetable.pdf" target="_blank"> Schedule </a>  </li>
				   <li><a href="webteam.php" target="_blank"> Web & Graphics Team</a>  </li>
            
                <li><a href="gallery.php">gallery</a></li>
            </ul>
        </div>





 <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-51616734-1', 'auto');
    ga('send', 'pageview');
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-54741851-1', 'auto');
    ga('send', 'pageview');
</script>

</body></html>