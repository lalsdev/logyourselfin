<?php

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
    // check username is in db
    $sql = 'SELECT username, password FROM student'; 
    $result = mysqli_query($conn, $sql); //var storing query result
    if(mysqli_num_rows($result > 0)){
        // gets data from row and shows it
        while($row = mysqli_fetch_assoc($result)){
            echo 'username:'. $row['username'];
        }
    } else {
        echo '0 results';
    }
}
?>