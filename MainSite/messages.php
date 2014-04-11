<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<?php include 'header3.php';?>
		<title>FLAT ROUNDED SQUARE UI KIT</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="css/jquery.sidr.light.css">
		 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		  <link rel="stylesheet" href="css/style.css">
		 <script src="js/jquery.sidr.min.js"></script>
		 <script type="text/javascript" src="js/login.js"></script>
		  <!----Calender -------->
		  <link rel="stylesheet" href="css/clndr.css" type="text/css" />
		  <script src="js/underscore-min.js"></script>
		  <script src= "js/moment-2.2.1.js"></script>
		  <script src="js/clndr.js"></script>
		  <script src="js/site.js"></script>
		  <!----End Calender -------->
		  <!----images-text-sliedr---->
		 <link rel="stylesheet" href="css/responsiveslides.css">
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
		  <!---starrt-bx-slider---->
		  <!-- bxSlider Javascript file -->
			<script src="js/jquery.bxslider.min.js"></script>
			<!-- bxSlider CSS file -->
			<link href="css/jquery.bxslider.css" rel="stylesheet" />
			<script>
				$(document).ready(function(){
					  $('.bxslider').bxSlider();
				});
			</script>
			<!----progress-meter---->
			<script>
				$(function() {
					$(".meter > span").each(function() {
						$(this)
							.data("origWidth", $(this).width())
							.width(0)
							.animate({
								width: $(this).data("origWidth")
							}, 1200);
					});
				});
			</script>
			<!----//progress-meter---->
		</head>
		<body>



<!---start-Messages and stats----->
			<div class="message-status">
				<h3>Message status</h3>
				<div class="message-box">
					<div class="message-box-header">
						<div class="message-box-header-left">
							<a href="#"><img src="images/ms.png" alt="" />Message <span>2</span></a>
						</div>
						<div class="message-box-header-right">
							<div class="message-box-header-right-left">
								<p>3 total messages </p>
								<label>1 of 1</label>
							</div>
							<div class="message-box-header-right-right">
								<ul>
									<li><a class="left-msg" href="#"><img src="images/dark-arrow.png" alt="" /></a></li>
									<li><a href="#"><img src="images/right-arrow-right.png" alt="" /></a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="messge-row">
						<div class="messge-row-col1"> 
							<ul>
								<li><a href="#"><img src="images/right-msg.png"></a></li>
								<li class='yewllow-notification'><a href="#"><img src="images/msg-notifi-wite.png"></a></li>
							</ul>
						</div>
						<div class="messge-row-col2"> 
							<a href="#">Mint Box Services</a>
							<span>Bill Predictions for March 2014</span>
						</div>
						<div class="messge-row-col3"> 
							<p>Based on the data gathered over 25 days, we have estimated that your bill will be approximately 1300INR.</p>
						</div>
						<div class="messge-row-col4"> 
							<p>March 29th 2014</p>
							<p>11:00 am</p>
						</div>
						<div class="clear"> </div>
					</div>
					
					<div class="messge-row">
						<div class="messge-row-col1"> 
							<ul>
								<li><a href="#"><img src="images/right-msg.png"></a></li>
								<li class="yewllow-notification"><a href="#"><img src="images/msg-notifi-wite.png"></a></li>
							</ul>
						</div>
						<div class="messge-row-col2"> 
							<a href="#">Mint Box Services</a>
							<span>Subscription fee</span>
						</div>
						<div class="messge-row-col3"> 
							<p>Your subscription fee for the month of March is pending. Please pay the 100INR at the Earliest. Thank you</p>
						</div>
						<div class="messge-row-col4"> 
							<p>March 28th 2014</p>
							<p>09:15 pm</p>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="messge-row">
						<div class="messge-row-col1"> 
							<ul>
								<li class="green-right"><a href="#"><img src="images/green-r.png"></a></li>
								<li><a href="#"><img src="images/msg-notifi.png"></a></li>
							</ul>
						</div>
						<div class="messge-row-col2"> 
							<a href="#">Mint Box Services</a>
							<span>Subscription offer for Gudi Padwa!</span>
						</div>
						<div class="messge-row-col3"> 
							<p>Hurry! For the special occasion of Gudi Padwa we offer you a discount of 200 for the yearly subscription! Hurry recharge for 1000INR and get 12 months!</p>
						</div>
						<div class="messge-row-col4"> 
							<p>March 28th 2014</p>
							<p>01:05 pm</p>
						</div>
						<div class="clear"> </div>
					</div>
					
</body>
</html>