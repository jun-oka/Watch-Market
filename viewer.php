<?php
	include('include/global_var.php');
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $site_name; ?></title>

<link href="style.css" rel="stylesheet" type="text/css">

<?php include('include/html_head.php'); ?>
</head>

<body>
	
    <!-- Header -->
	<div class="header stack">
    	<a href="index.php">
	    	<img src="img_asset/logo.png" />
        </a>
		<i class="fa fa-ellipsis-v"></i>
    </div>
    
    <!-- Player -->
    <div class="player_holder">
        <div class="video-container"></div> <!-- a spacer for when the player is fixed at the top after scroll, don't remove!! -->
        <div class="player">
            <div class="video-container">
	            <iframe src="http://www.youtube.com/embed/CieuGZ7TthE?autoplay=1&rel=0&wmode=opaque&autohide=1&playsinline=1" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
    
    <!-- Video Info -->
    <div class="video_info stack">
    	<h1>Marvel's Avengers: Age of Ultron Trailer 3</h1>
        <p>
        	When Tony Stark tries to jumpstart a dormant peacekeeping program, things go awry and it is up to The Avengers to stop the villainous Ultron from enacting his terrible plans.
        </p>
        <div class="vote">
        	456 <i class="fa fa-thumbs-o-up"></i>
        </div>
        <div class="vote">
        	12 <i class="fa fa-thumbs-o-down"></i>
        </div>
    </div>
    
    <!-- Shop items -->
    <div class="shop_wrap stack">
    	<div class="shop_item">
        	<img src="include/imgresize.php?src=img_content/shop_item/1.jpg&w=300&h=300&q=80" />
            <div class="description">
            	<div class="type">Lego</div>
            	Quinjet Aerial Battle
                <div class="price">HK$620.00</div>
            </div>
        </div>
    	<div class="shop_item">
        	<img src="include/imgresize.php?src=img_content/shop_item/2.jpg&w=300&h=300&q=80" />
            <div class="description">
            	<div class="type">Hot Toys</div>
            	Damaged Ultron Mark I
                <div class="price">HK$2400.00</div>
            </div>
        </div>
    	<div class="shop_item id1">
        	<img src="include/imgresize.php?src=img_content/shop_item/3.jpg&w=300&h=300&q=80" />
            <div class="description">
            	<div class="type">Hot Toys</div>
            	Hulkbuster Armour Firgure
                <div class="price">HK$6800.00</div>
            </div>
        </div>
    	<div class="shop_item id2">
        	<img src="include/imgresize.php?src=img_content/shop_item/4.jpg&w=300&h=300&q=80" />
            <div class="description">
            	<div class="type">Marvel Studios</div>
            	Captain America: The Winter Soldier Blur-Ray
                <div class="price">HK$155.00</div>
            </div>
        </div>
    	<div class="shop_item">
        	<img src="include/imgresize.php?src=img_content/shop_item/5.jpeg&w=300&h=300&q=80" />
            <div class="description">
            	<div class="type">Marvel Ltd.</div>
				Thor Mr. Potatoe Head
                <div class="price">HK$130.00</div>
            </div>
        </div>
    </div>
    
    <!-- Next/Prev -->
    <div class="next_prev" style="background:url(http://www.blastr.com/sites/blastr/files/who-do-you-think-will-die-in-avengers-age-of-ultron_0.jpeg); background-size:cover; background-position:center center;">
		<div class="control">
	        <i class="fa fa-step-backward fa-2x"></i>
        </div>
    </div><!--
    --><div class="next_prev" style="background:url(http://d.ibtimes.co.uk/en/full/1405837/avengers-age-ultron.jpg); background-size:cover; background-position:center center;">
		<div class="control">
	        <i class="fa fa-step-forward fa-2x"></i>
        </div>
    </div>	
    
    <!-- Facebook Comments -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1585627401719480&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="comment_wrap stack">
    	<div class="fb-comments" data-href="http://developers.facebook.com/docs/plugins/comments/" data-numposts="5" data-colorscheme="light"></div>
    </div>
    
    
    <!-- Fixed divs -->
    <!-- Return to top button -->
    <div class="return_top">
    	<i class="fa fa-angle-up"></i>	
    </div>
    
    <!-- MasterPass Overlay -->
    <div class="masterpass id1">
    	<div class="container">
        	<img src="include/imgresize.php?src=img_content/shop_item/3.jpg&w=500&q=80" />
			<div class="type">Hot Toys</div>
            <h1>Hulkbuster Armour Figure</h1>
            <div class="price">
                <span class="express">Express Checkout:</span><br>
                HK$6800.00
            </div>
            <img class="buy" src="img_asset/masterpass.png" />
            <p>This is the Iron Man armor you have been waiting for! Ever since the first official appearance of the massive anti-Hulk Iron Man suit, Hulkbuster, in Marvel’s Avengers: Age of Ultron trailer, fans worldwide have been filled with excitement! Its fight against Hulk is an unforgettable moment from the clip and pushes the popularity of the huge machine to a new level even before the movie launch! 

Today, we are proud to officially introduce the collectible figure that many fans and collectors have been longing for – the spectacular 1/6th scale Hulkbuster Collectible Figure!

The movie-accurate collectible figure is specially crafted based on the image of Hulkbuster in Avengers: Age of Ultron. This colossal figure stands approximately 55 cm (21 inches) tall, featuring a Mark XLIII bust inside the Hulkbuster with LED light-up eyes and arc reactor on chest. The metallic red, gold and silver armor with weathering effect, and over 16 LED light-up areas in the eyes, chest, repulsor palms, back, and legs.

Prepare to make room for this gigantic machine in your Avengers: Age of Ultron collection! </p>
        </div>
        <div class="close id1">
        	<i class="fa fa-angle-down"></i>
        </div>
    </div>
    
    <div class="masterpass id2">
    	<div class="container">
        	<img src="include/imgresize.php?src=img_content/shop_item/4.jpg&w=500&q=80" />
			<div class="type">Marvel Studios</div>
            <h1>Captain America: The Winter Soldier Blur-Ray</h1>
            <div class="price">
                <span class="express">Express Checkout:</span><br>
                HK$155.00
            </div>
            <img class="buy" src="img_asset/masterpass.png" />
            <p>Steve Rogers struggles to embrace his role in the modern world and teams up with Natasha Romanoff, aka Black Widow, to battle a powerful yet shadowy enemy in present-day Washington, D.C.</p>
        </div>
        <div class="close id2">
        	<i class="fa fa-angle-down"></i>
        </div>
    </div>
    
    
    <script>
		$(document).ready(function(){
			// Find height of window
			var window_height = $( window ).height();
			
			// Find height of header
			var header_height = $('.header').outerHeight();
			
			// Find height of player
			var player_height = $('.player').outerHeight();
				
			// Lock player div after scroll
			$(window).on("scroll touchmove", function() {
				$('.player').toggleClass('top', $(document).scrollTop() > header_height);
				$('.return_top').toggleClass('visible', $(document).scrollTop() > header_height);
			});
			
			// Return to top
			$(".return_top").click(function(){
				 $("html, body").animate({ scrollTop: 0 }, "slow");
			});
			
			// Apply max height to MasterPass overlay
			var max_height = window_height-header_height-player_height-20;
			$('.masterpass .container').css('max-height', max_height);
			
			// Open MasterPass overlay when shop item is clicked
			$(".shop_item.id1").click(function(){
				 $(".masterpass.id1").addClass('show');
			});

			// Close MasterPass overlay when shop item is clicked
			$(".masterpass .close.id1").click(function(){
				 $(".masterpass.id1").removeClass('show');
			});
			
			// Open MasterPass overlay when shop item is clicked
			$(".shop_item.id2").click(function(){
				 $(".masterpass.id2").addClass('show');
			});

			// Close MasterPass overlay when shop item is clicked
			$(".masterpass .close.id2").click(function(){
				 $(".masterpass.id2").removeClass('show');
			});
			
		});
	</script>
</body>
</html>