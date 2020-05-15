<?php
#first if
if (isset($_POST['submit'])) {

	include 'dbh.inc.php';
    $lipstickid = mysqli_real_escape_string( $conn , $_POST['lipstickid']);
	$lipstickname = mysqli_real_escape_string( $conn , $_POST['lipstickname']);
	$lipstickshade = mysqli_real_escape_string( $conn , $_POST['lipstickshade']);
	$lipstickfinish = mysqli_real_escape_string( $conn , $_POST['lipstickfinish']);
	
    
    
    $sql = "SELECT 'lipstickname', 'lipstickshade', 'lipstickfinish' from lipsticks;";
    
    echo "thank you for submitting";
    
    $sql = "INSERT INTO lipsticks (lipstickid, lipstickname, lipstickshade, lipstickfinish) VALUES ('$lipstickid','$lipstickname','$lipstickshade','$lipstickfinish');";
	mysqli_query($conn , $sql);
    
}


    else {
	header("Location: ../index.php");
	exit();
    }

