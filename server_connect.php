<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


$servername = "localhost";
$username = "snur0000";
$password = "";
$dbname = "snur0000";


// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);



 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>