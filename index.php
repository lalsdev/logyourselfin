<?php
require 'assets/php/connectdb.php';
include 'assets/php/appindex.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>login</title>
	</head>
	<body>
		<form action="" method="post" accept-charset="utf-8">
			<label for="userName">username</label>
			<input type="text" name="username" id="userName" value="" />
			<!-- <label for="mail">Email</label>
			<input type="email" name="" id="mail" value="" /> -->
			<label for="login">Password</label>
			<input type="password" name="login" id="" value="" />
			<button type="submit" name="submit">Log in</button>
			<p>Don't have an account yet? Create it <a href="assets/php/registration.php">here</a></p>
		</form>
	</body>
</html>
