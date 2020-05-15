<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Semester Countdown </title>
	
	<style>
	body{
	margin:150px;
	color:hotpink;
	}
	h1,h2{
	text-align:center;
	font-size:60px;
	}
	h6{
	font-size:5px;
	text-align:center;
	}
	
	</style>
</head>

	<body>
	
	<!--stay strong -->
	
	<?php
	$target = mktime (0,0,0,5,11,2018); //(#of hr, #of min, #of sec, month, day, year) of event
	$today = time(); // today's time
	$difference = ($target - $today); // the difference of the day of event and today's date
	$daysleft = (int) ($difference/86400); // difference divided by the seconds in a day
	$hoursleft = round(($difference % 86400) / 3600);
	$weekleft = ($daysleft/7);
	print "<h2> $weekleft weeks <br> $daysleft days <br> $hoursleft hrs</h2>"; //statement
	?>
	<h6>left until we out this b****</h6>
	
	</body>
<html>