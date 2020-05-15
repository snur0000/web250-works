<?php
	include 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Sign Up</h2>
        <h3 id="errormsg"></h3>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="first" placeholder="firstname">
			<input type="text" name="last" placeholder="lastname">
			<input type="text" name="email" placeholder="email">
			<input type="text" name="uid" placeholder="username">
			<input type="password" name="pwd" placeholder="password">
			<button type="submit" name="submit">Signup</button>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
