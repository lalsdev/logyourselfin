<?php 
session_start();
require 'connectdb.php';
include 'appinfo.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Update info </title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
    <div class="mx-auto col-5">
            <form action="" method="post" accept-charset="utf-8" class="mt-5 bordercool">
                <h5>Welcome <?php echo $_SESSION['username'];?></h5>
                <div class="form-group">
                    <label for="username">username</label>
                    <input class="form-control" type="text" name="username" id="username" />
                    <?php
                    echo $succeedus;
                    echo $errorus;
                    ?>
                </div>
                <div class="form-group">
                    <label for="mail">email</label>
                    <input class="form-control" type="email" name="mail" id="mail"/>
                </div>
                <div class="form-group">
                <label for="login">password</label>
                <input class="form-control" type="password" name="login" id="login"/>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                    <label for="firstname">First name</label>
                    <input class="form-control" type="text" name="firstname" id="firstname"/>
                    </div>
                    <div class="form-group col-6">
                    <label for="lastname">Last name</label>
                    <input class="form-control" type="text" name="lastname" id="lastname"/>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                    <label for="linkedin">Linkedin</label>
                    <input class="form-control" type="text" name="linkedin" id="linkedin"/>
                    </div>
                    <div class="form-group col-6">
                    <label for="github">GitHub</label>
                    <input class="form-control" type="text" name="github" id="github"/>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-outline-secondary">Update</button><br/>
            </form>
        </div>
	</body>
</html>