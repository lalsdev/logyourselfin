<?php
require 'connectdb.php';
######### USERNAME UPDATE ########################
# functions error and filter #
function error($message, $color){
	return "<small class='$color'> $message </small>";
}
function succeed($message,$color){
    return "<small class='$color'> $message </small>";
}
function filter($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
# gets userinput and filters #
$usernameupdate = filter($_POST['username']);


# update username #
$sql = "UPDATE student SET username='".$usernameupdate. "' WHERE id = '".$_SESSION['id']."'";
if($usernameupdate == $_POST['username']){
    if (mysqli_query($connectdb, $sql)) {
        if(!empty($usernameupdate)){
        $succeedus = succeed('Record updated successfully','ok');
        }
    } 
} else {
    $errorus = error('Choose another one', 'error'); 
    }


?>