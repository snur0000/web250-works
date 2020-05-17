<!DOCTYPE html>
<html lang = "en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<title>TOC - Sabrina Nur</title>

	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="styles/brand.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<div class = "wholepage">
<header>
<h1> Table of contents: Eye Candy Cosmetics</h1>
<h2>makeup for everyone </h2>



	<a href = "?p=home_toc.php">home</a> &hearts;
	<a href = "?p=contract.php">contract</a> &hearts;
	<a href = "?p=brand.php">brand</a> &hearts;
	<a href = "?p=form.php">form</a> &hearts;
	<a href = "?p=fizz_buzz_1.php">fizzBuzz_1</a> &hearts;
	<a href = "?p=everything_form.php">everything form</a> &hearts;
	<a href = "?p=text_driven_website.php">text_driven_site </a> &hearts;
	<a href = "?p=fizz_buzz_everything.php">fizzBuzzBang!</a> &hearts;
	<a href = "?p=run_some_sql.php">run_some_sql</a> &hearts;
	<a href = "http://sabrinanur.com/full_crud/" target="_blank">CRUD</a> &hearts;
	<a href = "http://sabrinanur.com/finalproject/register.php" target="_blank">Validating & Processing Forms</a> &hearts;
	<a href = "http://sabrinanur.com/finalproject/" target="_blank">Final Project</a> &hearts;




</header>
	<hr />

<!-- dynamic content goes here -->

<?php
	$sPage = $_GET["p"];
	//echo ("You picked the page: " . $sPage);

	if($sPage == "") {  $sPage = "home_toc.php"; }
	include($sPage);
?>


<hr />
<br/>

<footer>
<a href="http://validator.w3.org/check?uri=referer"> <img src ="images/valid_html5/valid_html5.gif" alt = "html5"></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"> <img src ="images/valid_html5/vcss-blue.gif" alt= "css"></a>
<p>

<?php
echo date('m/d/y');
?>
 &hearts; email: snur0000@email.cpcc.edu

</footer>
</div>
</body>
</html>
