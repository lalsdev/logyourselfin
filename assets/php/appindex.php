<?php

//filters data
function filter($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//if button login pressed
if (isset($_POST['submit'])){
    $username = filter($_POST['username']);
    //query sql
    $sql = "SELECT * FROM student WHERE username='".$username."'";
    //if value exist it stocks in $result
    $result = mysqli_query($connectdb,$sql);
    $resultrow = mysqli_num_rows($result);
}
?>