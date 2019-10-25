<?php 
session_start();
require 'connectdb.php';
include 'appcustom.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Welcome </title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
        <div class="mx-auto col-5">
            <form action="" method="post" accept-charset="utf-8" class="mt-5 bordercool">
                <h5>Welcome <?php echo $_SESSION['username'];?></h5>
                <small>Want to update your info? Come <a href="info.php">here</a></small><br/>
                <br/>
                <button type="submit" name="submit" class="btn btn-outline-secondary">Log out</button>
            </form>
        </div>
	</body>
</html>