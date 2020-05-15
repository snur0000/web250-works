<style>
input[type=text], input[type=number], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    
}

input[type=submit] {
    width: 100%;
    background-color: hotpink;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    
}

input[type=submit]:hover {
    background-color: #ff1d8e;
}

div {
    border-radius: 5px;
    background-color: rgba(0,128,128,.2);
    padding: 20px;
    
    
}
form{font-weight:bold;}
</style>





<?php
// define variables and set to empty values
$firstname = $lastname = $startnumber = $endnumber = $firstword = $secondword = $thirdword = $firstdivisor = $seconddivisor = $thirddivisor = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = test_input($_POST["firstname"]);
  $lastname = test_input($_POST["lastname"]);
  
  
  $startnumber = test_input($_POST["startnumber"]);
  $endnumber = test_input($_POST["endnumber"]);
  
  
  $firstword = test_input($_POST["firstword"]);
  $secondword = test_input($_POST["secondword"]);
  $thirdword = test_input($_POST["thirdword"]);
  
  
   $firstdivisor = test_input($_POST["firstdivisor"]);
  $seconddivisor = test_input($_POST["seconddivisor"]);
  $thirddivisor = test_input($_POST["thirddivisor"]);
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>FizzBuzzBang!</h1> 
<div>
<br>
<form method="post" action="#">  
  First Name: <input type="text" name="firstname"  value="Sabrina" required>
  Last Name: <input type="text" name="lastname" value="Nur" required>
  
  Start Number: <input type="number" name="startnumber" value="2">
  End Number: <input type="number" name="endnumber" value="210">
  
  
  First Word: <input type="text" name="firstword" value="eye">  
  Second word: <input type="text" name="secondword" value="Candy">
  Third word: <input type="text" name="thirdword" value="Cosmetics">
  
  
  
  First divisor: <input type="number" name="firstdivisor" value="3">
  Second divisor: <input type="number" name="seconddivisor" value="5">
  Third divisor: <input type="number" name="thirddivisor" value="7">
  
  <input type="submit" name="submit" value="Submit">  
  
  
</form>
<br>

<?php
if ($_POST['submit']){

echo "<h2> &hearts; Hey, $firstname $lastname &hearts; </h2>";
echo "<br>";



for ($i = $startnumber; $i <= $endnumber; $i++)
{
    if($i % $firstdivisor == 0 && $i % $seconddivisor ==0 && $i % $thirddivisor ==0){
       
        echo $i. " - " . $firstword.$secondword.$thirdword;
        echo "<br>";
    }
    
    //3 ,5
    else if($i % $firstdivisor == 0 && $i % $seconddivisor ==0){
        
        echo $i." - " . $firstword . $secondword;
        echo "<br>";
    }
    
    //3,7
    
        else if($i % $firstdivisor == 0 && $i % $thirddivisor ==0){
        
        echo $i." - " . $firstword . $thirdword;
        echo "<br>";
    }
    
    
    //5,7
    else if($i % $seconddivisor == 0 && $i % $thirddivisor ==0){
        
        echo $i." - " . $secondword . $thirdword;
        echo "<br>";
    }
    
    
    else if($i % $firstdivisor == 0){
        
        echo $i." - " . $firstword;
        echo "<br>";
    }
    
    else if($i % $seconddivisor == 0){
        
        echo $i." - " . $secondword;
        echo "<br>";
    }
    
    else if($i % $thirddivisor == 0){
        
        echo $i." - " . $thirdword;
        echo "<br>";
    }
    else {
        echo $i."<br />";
        
    }
  }
}

?>

</div>
<br>