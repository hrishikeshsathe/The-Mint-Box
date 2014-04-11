<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style_login.css" >
	<title>Login</title>
</head>
<body>	
	<div id="container">
	<?php include 'includes/menu.php'; ?>

		<h1>Login</h1>

		<?php 
		if(empty($errors) === false){
			echo '<p>' . implode('</p><p>', $errors) . '</p>';	
		}
		?>

		<form method="post" action="">
			<h4>Username:</h4>
			<input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlentities($_POST['username']); ?>" />
			<h4>Password:</h4>
			<input type="password" name="password" />
			<br>
			<input type="submit" name="submit" />
		</form>
		<br>
		<a href="confirm-recover.php">Forgot your username/password?</a>

	</div>
</body>
</html>