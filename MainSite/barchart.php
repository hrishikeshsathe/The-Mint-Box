<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<?php include 'header2.php';?>
<style>.fnt {
font-size : 20px;
}</style>
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
          <div class="message-status">
				<h3>The following chart shows he usage of the appliances shown for the month of March</h3>
        <div class="wrapper">
            <div class="container clearfix">


      <div class="third widget doughnut left-chart">
                    <div class="canvas-container">
                        <canvas id="hours"> </canvas>
                        <span class="status"> </span>
                    </div>

                    <ul class="left-chart-skils-row">
                    	<li>
                    		<label>Air Conditioner</label>
                    		<h5>20%</h5>
                    	</li>
                    	<li>
                    		<label>Television</label>
                    		<h5>30%</h5>
                    	</li>
                    	<li>
                    		<label>Refrigerator</label>
                    		<h5>50%</h5>
                    	</li>
                    	<div class="clear"> </div>
                    </ul>
                    <div class="clear"> </div>
                </div>

                <!--start-script-chrtss---->
				<script src="js/Chart.js"></script>
				<script src="js/chart-plugins.js"></script>
	       		 <script src="js/chart-main.js"></script>
				 <!--//End-script-chrtss---->
                
            </div>
            

	</body>
</html>

