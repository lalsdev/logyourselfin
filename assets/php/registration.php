<?php 
require 'connectdb.php';
include 'appregistration.php';

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Registration</title>
	</head>
	<body>
		<form action="" method="post" accept-charset="utf-8">
			<label for="username">Your username</label>
			<input type="text" name="username" id="username" />
			<label for="mail">Your email</label>
			<input type="email" name="mail" id="mail"/>
			<label for="login">Choose a password</label>
			<input type="password" name="login" id="login"/>
            <!-- <label for="firstname">First name</label>
            <input type="text" name="firstname" id="firstname"/>
            <label for="lastname">Last name</label>
            <input type="text" name="lastname" id="lastname"/>
            <label for="linkedin">Linkedin</label>
            <input type="url" name="linkedin" id="linkedin">
            <label for="github">Github</label>
            <input type="url" name="github" id="github"> -->
			<button type="submit" name="register">Register</button>
            <!-- shows the inputs from registration page-->
		</form>
	</body>
</html>