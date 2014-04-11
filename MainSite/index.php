<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<script src="D:\MainSite\js\jquery1.83.js"></script>
		<link src='D:\MainSite\css\googleFont.css' rel='stylesheet' type='text/css'>
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
		  
		  </head>
<body>
<?php include 'header.php'?>
				<div class="centre">
				<div class="big-buttons-col1">
					<ul>
					<form action="temp.php" method="POST">
						<li><input class="b-btnblue" type="submit" name="Hall" value="Hall" /></li>
						<li><input class="b-btnblue" type="submit" name="Kitchen" value="Kitchen" /></li>
						<li><input class="b-btnblue" type="button" value="Bedroom" /></li>
						<li><input class="b-btnblue" type="button" value="Washrooms" /></li>
					</form>
					</ul>
				</div>
				</div>
				
			</body>
			</html>