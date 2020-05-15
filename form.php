
<?php
// define variables and set to empty values
$firstnameErr = $lastnameErr = $emailErr = "";
$firstname =  $lastname = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstnameErr = "first name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $firstnameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["lastname"])) {
    $lastnameErr = "last name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lasttnameErr = "Only letters and white space allowed"; 
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1> Form </h1>
<hr>
<h2>Post Form</h2>
<br>
 
<form method="post" action="#">
    
  first name: <input type="text" name="firstname" required value="<?php echo $firstname;?>">
   <?php echo $firstnameErr;?>
  <br><br>
    
     last name: <input type="text" name="lastname" required value="<?php echo $lastname;?>">
   <?php echo $lastnameErr;?>
  <br><br>
    
    
  e-mail: <input type="text" name="email" required value="<?php echo $email;?>">
   <?php echo $emailErr;?>
  <br><br>
  <input type="submit" name="submit" value="Submit">

</form>

<?php
echo "<h2>Your Input:</h2>";
echo $firstname;
echo " ";
echo $lastname;
echo "<br>";
echo $email;

?>
        
     <hr>
     
     
     <h2> Get form</h2>
     <br>

     <form method="get" action="#">
         <input type="hidden" name="p" value="form.php">	
  first name: <input type="text" name="firstname" required  value="<?php echo $firstname;?>">
  <br><br>
    
     last name: <input type="text" name="lastname" required value="<?php echo $lastname;?>">
  <br><br>
    
    
  e-mail: <input type="text" name="email" required value="<?php echo $email;?>">
  <br><br>
  
  <input type="submit" name="submit" value="Submit">
  </form>

<div id = "values">
<?php
echo "<h2> Your Input:</h2>" ?>
<?php
echo $_GET["firstname"];
echo " ";
echo $_GET[" lastname"];
echo "<br>";
 echo $_GET["email"];


 ?>
</div>


        