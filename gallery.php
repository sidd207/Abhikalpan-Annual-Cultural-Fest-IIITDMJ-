


<?php

    if (isset($_COOKIE['logged_user']))
        $logged=true;

    else
        $logged = false;

?><!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gallery</title>
	<meta name="description" content="Effect inspiration for opening an image grid item." />
	<meta name="keywords" content="image grid, effect, inspiration, css, javascript, animation, masonry" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="img/fav.png">
	
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/boo.css" />
	
	<link rel="stylesheet" type="text/css" href="css/gallery.css" />
	<script src="js/modernizr-custom.js"></script>
</head>

<body class="demo-4">
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
            </div><br><br><br><br><center><h1 style="font-family:courier; background-color:;">ABHIKALPAN GALLERY<h1></center><br>
		<div class="content">
			<div class="grid">
				<div class="grid__item" data-size="1280x853">
					<a href="img/original/12.jpg" class="img-wrap"><img src="img/thumbs/12.jpg" alt="img08" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="865x1280">
					<a href="img/original/9.jpg" class="img-wrap"><img src="img/thumbs/9.jpg" alt="img09" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x1280">
					<a href="img/original/10.jpg" class="img-wrap"><img src="img/thumbs/10.jpg" alt="img10" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x850">
					<a href="img/original/11.jpg" class="img-wrap"><img src="img/thumbs/11.jpg" alt="img11" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x853">
					<a href="img/original/1.jpg" class="img-wrap"><img src="img/thumbs/1.jpg" alt="img01" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="958x1280">
					<a href="img/original/2.jpg" class="img-wrap"><img src="img/thumbs/2.jpg" alt="img02" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="837x1280">
					<a href="img/original/3.jpg" class="img-wrap"><img src="img/thumbs/3.jpg" alt="img03" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x961">
					<a href="img/original/4.jpg" class="img-wrap"><img src="img/thumbs/4.jpg" alt="img04" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x1131">
					<a href="img/original/5.jpg" class="img-wrap"><img src="img/thumbs/5.jpg" alt="img05" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x857">
					<a href="img/original/6.jpg" class="img-wrap"><img src="img/thumbs/6.jpg" alt="img06" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x1280">
					<a href="img/original/7.jpg" class="img-wrap"><img src="img/thumbs/7.jpg" alt="img07" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x853">
					<a href="img/original/8.jpg" class="img-wrap"><img src="img/thumbs/8.jpg" alt="img08" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="865x1280">
					<a href="img/original/91.jpg" class="img-wrap"><img src="img/thumbs/91.jpg" alt="img09" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x1280">
					<a href="img/original/101.jpg" class="img-wrap"><img src="img/thumbs/101.jpg" alt="img10" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x850">
					<a href="img/original/111.jpg" class="img-wrap"><img src="img/thumbs/111.jpg" alt="img11" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x853">
					<a href="img/original/81.jpg" class="img-wrap"><img src="img/thumbs/81.jpg" alt="img08" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="865x1280">
					<a href="img/original/92.jpg" class="img-wrap"><img src="img/thumbs/92.jpg" alt="img09" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x1280">
					<a href="img/original/102.jpg" class="img-wrap"><img src="img/thumbs/102.jpg" alt="img10" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x850">
					<a href="img/original/112.jpg" class="img-wrap"><img src="img/thumbs/112.jpg" alt="img11" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x853">
					<a href="img/original/15.jpg" class="img-wrap"><img src="img/thumbs/15.jpg" alt="img01" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="958x1280">
					<a href="img/original/21.jpg" class="img-wrap"><img src="img/thumbs/21.jpg" alt="img02" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="837x1280">
					<a href="img/original/31.jpg" class="img-wrap"><img src="img/thumbs/31.jpg" alt="img03" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x961">
					<a href="img/original/41.jpg" class="img-wrap"><img src="img/thumbs/41.jpg" alt="img04" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x1131">
					<a href="img/original/51.jpg" class="img-wrap"><img src="img/thumbs/51.jpg" alt="img05" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
				<div class="grid__item" data-size="1280x857">
					<a href="img/original/61.jpg" class="img-wrap"><img src="img/thumbs/61.jpg" alt="img06" />
						<div class="description description--grid">Abhikalpan Gallery</div>
					</a>
				</div>
			</div>
			<!-- /grid -->
			<div class="preview">
				<button class="action action--close"><i class="fa fa-times"></i><span class="text-hidden">Close</span></button>
				
				<div class="description description--preview"></div>
			</div>
			<!-- /preview -->
		
		  <div class="city">
                <div class="footer_nav">
                    <div class="container">
                        <div class="text-center">
                           <a href="guest.php" target="_blank">Guest Lectures</a>
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
		
		</div>
		<!-- /content -->
		<!-- Related demos -->
	
	<!-- /container -->
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
	<script>
		(function() {
			var support = { transitions: Modernizr.csstransitions },
				// transition end event name
				transEndEventNames = { 'WebkitTransition': 'webkitTransitionEnd', 'MozTransition': 'transitionend', 'OTransition': 'oTransitionEnd', 'msTransition': 'MSTransitionEnd', 'transition': 'transitionend' },
				transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
				onEndTransition = function( el, callback ) {
					var onEndCallbackFn = function( ev ) {
						if( support.transitions ) {
							if( ev.target != this ) return;
							this.removeEventListener( transEndEventName, onEndCallbackFn );
						}
						if( callback && typeof callback === 'function' ) { callback.call(this); }
					};
					if( support.transitions ) {
						el.addEventListener( transEndEventName, onEndCallbackFn );
					}
					else {
						onEndCallbackFn();
					}
				};

			new GridFx(document.querySelector('.grid'), {
				imgPosition : {
					x : 1,
					y : -0.75
				},
				onOpenItem : function(instance, item) {
					var win = {width: window.innerWidth, height: window.innerHeight};
					instance.items.forEach(function(el) {
						if(item != el) {
							var delay = Math.floor(Math.random() * 130);
							el.style.WebkitTransition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), -webkit-transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
							el.style.transition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
							
							var elOffset = el.getBoundingClientRect(),
								elSize = {width : el.offsetWidth, height : el.offsetHeight};

							el.style.WebkitTransform = 'translate3d(' + (win.width/2 - elOffset.left - elSize.width/2) + 'px,' + (win.height - elOffset.top - elSize.height/2) + 'px,0) scale3d(0,0,1)';
							el.style.transform = 'translate3d(' + (win.width/2 - elOffset.left - elSize.width/2) + 'px,' + (win.height - elOffset.top - elSize.height/2) + 'px,0) scale3d(0,0,1)';
							el.style.opacity = 0;
						}
					});
				},
				onCloseItem : function(instance, item) {
					instance.items.forEach(function(el) {
						if(item != el) {
							el.style.WebkitTransition = 'opacity .3s, -webkit-transform .3s';
							el.style.transition = 'opacity .3s, transform .3s';

							el.style.WebkitTransform = 'translate3d(0,0,0) scale3d(1,1,1)';
							el.style.transform = 'translate3d(0,0,0) scale3d(1,1,1)';
							el.style.opacity = 1;

							onEndTransition(el, function() {
								el.style.transition = 'none';
								el.style.WebkitTransform = 'none';
							});
						}
					});
				}
			});
		})();
	</script>
</body>

</html>
