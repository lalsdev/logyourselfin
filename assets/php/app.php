<?php 
// prepare variable for connexion
$servername = "database";
$username = "root";
$password = "root";
$dbname = "becode";
// create connexion
$connectdb = new mysqli($servername,$username,$password,$dbname);
// 

//sanitize and validate inputs
// function myFilter($input) {
// 	$input = trim($input);
// 	$input = stripslashes($input);
// 	$input = htmlspecialchars($input);
//     echo "ok $input<>";
//     return $input;

// }
?>