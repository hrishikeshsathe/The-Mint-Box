<?php

if (!empty($_POST["Hall"])) {
    $room = $_POST["Hall"];    
}
elseif (!empty($_POST["Kitchen"])){
	$room = $_POST["Kitchen"];
}

$con = mysql_connect("localhost","wisproadmin","fPVrm4nhFzJFqUmN");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("home_automation", $con);

$result = mysql_query("select * FROM room_init");
$total = mysql_num_rows($result);

$icon_query = mysql_query("select * from eq_icon");


mysql_close($con);

?>
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
		<script type="text/javascript" src="js/script.js"></script>
		
</head>
<body>
<?php include 'header.php'?>
<?php
while( $row = mysql_fetch_array($result))
{

$icon = mysql_fetch_array($icon_query);
$src = $icon['src_icon'];
?>
<div class="comment-box">
					<div class="comment-people-pic">
						<?php echo "<a href='#'><img src='$src' alt='' /></a>" ;?>
					</div>
					<div class="comment-info">
						<div class="comment-info-head">
							<div class="comment-info-head-left">
								<a href="#"><?php echo $row['eq_name'] ?></a>
							</div>
							<div class="comment-info-head-right">
								<ul>
									<li><a class="date-of-post" href="#">August 7,2013</a></li>
									<li><a class="replay" href="#">Replay</a></li>
								</ul>
							</div>
							<div class="clear"> </div>
							<div class="comment-place">
							<?php include 'remoterelay.php'?>
									
							</div>
							<div class="clear"> </div>
						</div>
					</div>
					<div class="clear"> </div>
</div>
<?php
}
?>
</body>
</html>