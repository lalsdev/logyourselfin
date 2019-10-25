<?php 
require 'connectdb.php';
include 'appregistration.php';

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Registration</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
        <div class="mx-auto col-5">
            <form action="" method="post" accept-charset="utf-8" class="mt-5 bordercool">
                <div class="form-group">
                    <label for="username">Your username</label>
                    <input class="form-control" type="text" name="username" id="username" />
                </div>
                <div class="form-group">
                    <label for="mail">Your email</label>
                    <input class="form-control" type="email" name="mail" id="mail"/>
                </div>
                <div class="form-group">
                <label for="login">Choose a password</label>
                <input class="form-control" type="password" name="login" id="login"/>
                </div>
                <button type="submit" name="submit" class="btn btn-outline-secondary">Register</button><br/>
                <?php
                echo $errorregistration;
                ?>
            </form>
        </div>
	</body>
</html>