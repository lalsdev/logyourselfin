<?php
### function error ##################
function error($message, $color){
	return "<small class='$color'> $message </small>";
}
###################### filters data ########################
function filter($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
########## checking values username and password in database ######################
if (isset($_POST['submit'])){
    $username = filter($_POST['username']);
    $passwordlogin = $_POST['password'];
    // check username is in db
    $sql = "SELECT username, password FROM student WHERE username='$username';";
    $result = mysqli_query($connectdb, $sql); //var storing query result
    if(mysqli_num_rows($result) > 0){
        // gets data from row and shows it
        while($row = mysqli_fetch_assoc($result)){
            // echo 'username:'. $row['username']. '<br>' . $row['password'] . '<br>';
                if(password_verify($passwordlogin,$row['password'])){
                    session_start();
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['username']= $username;

                    header('Location: assets/php/custom.php');
                } else {
                    echo error('incorrect password', 'error');
                }
        }
    } else if (empty($passwordlogin)){ // checks if password not in db
        $errorall =  error('Fields can\'t be empty','error');
    } else {
        $errorlogin = error('Not recognized','error');
    }
}
?>