<?php
//requires the connexion to the db 
require 'connectdb.php';

### function error ##################
function error($message, $color){
	return "<small class='$color'> $message </small>";
}

$username = filter($_POST['username']);
$email = $_POST['mail'];
if (!empty($_POST['login'])){
    $password = crypt($_POST['login']);
}

//filters data
function filter($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//error messages
//if empty username email or password, not added to db
if (isset($_POST['submit'])){
    if (empty($username) || empty($email) || empty($password)){
        $errorregistration = error('Fields can\'t be empty','error');
        } else {
        //sql query which asks to insert into db  
        $sql = "INSERT INTO student (username, email, password)
        VALUES ('$username', '$email', '$password')";
            if (mysqli_query($connectdb, $sql)){
                header('Location: custom.php');
                } else {
                echo "Error: " . $sql . "<br>" . $connectdb->error;
            }
            mysqli_close($connectdb);  
    }
}
?>
