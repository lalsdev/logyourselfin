<?php
require 'assets/php/connectdb.php';
include 'assets/php/appindex.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>login</title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<div class="mx-auto col-5">
			<form action="" method="post" accept-charset="utf-8" class="mt-5 bordercool">
				<div class="form-group">
					<label for="userName">Username</label>
					<input class="form-control" type="text" name="username" id="userName" value="" />
				</div>
				<div class="form-group">
					<label for="login">Password</label>
					<input class="form-control" type="password" name="login" id="" value="" />
				</div>
				<button type="submit" class="btn btn-outline-secondary" name="submit">Log in</button>
				<p>Don't have an account yet? Create it <a href="assets/php/registration.php">here</a></p>
			</form>
		</div>
	</body>
</html>
