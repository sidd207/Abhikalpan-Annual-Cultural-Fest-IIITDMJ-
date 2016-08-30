<div class="header">
    <div class="container">

        <div class="col-sm-4 text-center" style="padding-top: 8px;">
            <a href="index.php#home" role="tab" id="home-tab" data-toggle="tab" aria-controls="home" aria-expanded="true"> <img src="img/web_logo2.png" class=" logo-img" alt="Abhikalpan Logo" /></a>
        </div>

        <div class="col-sm-8">
            <nav class="navbar navbar-default" style="margin-bottom:0px;">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php" role="tab" id="home-tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a></li>
                        <li><a href="event.php" role="tab" id="about-tab" data-toggle="tab" aria-controls="about" aria-expanded="About">Events</a></li>
                        <li><a href="about.php" role="tab" id="about-tab" data-toggle="tab" aria-controls="about" aria-expanded="About">About Us</a></li>
                       
						<li><a href="workshops.php" role="tab" id="home-tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Workshops</a></li>
                        <li><a href="exhibitions.php" role="tab" id="about-tab" data-toggle="tab" aria-controls="about" aria-expanded="About">Exhibitions</a></li>
                      
                        
                        
                         <!-- <li>   <a href="ambassador.php" > Campus Connect</a></li> -->
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
            </nav>
        </div>
    </div>
</div> <!-- Header ends -->