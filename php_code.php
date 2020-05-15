<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'snur0000');

	// initialize variables
	$name = "";
	$shade = "";
	$finish = "";
	
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$shade = $_POST['shade'];
		$finish = $_POST['finish'];
	

		mysqli_query($db, "INSERT INTO info (name, shade, finish) VALUES ('$name', '$shade', $finish)"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: crud.php');
	}

// ...
?>