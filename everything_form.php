<h1>Everything Form</h1>
 <br>
This form uses post method<br/><br/>
 
 Sign up for a <strong> free </strong>personalized lipstick!!!
 <p>
<form name="myform" action="#" method="POST">
    <input type="hidden" name="check_submit" value="1" />
    First name: <input type="text" name="firstname" placeholder = "Sabrina" required/><br />
    Last name: <input type="text" name="lastname" placeholder = "Nur" required /><br />
    
    
  
    Email: <input type="text" name="email" placeholder = "sabby_nur@gmail.com" required/><br />
    Password: <input type="password" name="Password" minlength= "5" maxlength="10" placeholder = "Must be at least 5 characters" required /><br />
    
    Address:<input type="text" name="addy" placeholder = "333 E Trade St" required/><br />
    Country: 
      <input type="radio" name="Country" value="USA" required/> USA
      <input type="radio" name="Country" value="Canada" required/> Canada
      <input type="radio" name="Country" value="Other" required/> Other
    <br />
    Favorite lipstick shade: <select name="Shades" >
      <option value="reds">Reds</option>
      <option value="Oranges">Oranges</option>
      <option value="Pinks">Pinks</option>
      <option value="Nudes">Nudes</option>
      <option value="Muaves">Muaves</option>
      <option value="Browns">Browns</option>
    </select><br /><br />
    
    Favorite finishes: 
      <input type="checkbox" name="finish[]" value="matte"  checked="checked"/> Matte
      <input type="checkbox" name="finish[]" value="satin"/> Satin
      <input type="checkbox" name="finish[]" value="glossy"/> Glossy
      
    <br /><br />
    Comments:<br /> 
    <textarea name="Comments" rows="10" cols="60" placeholder="Anything else you'd like to tell us to help improve making your personalized lipstick!! &hearts; ;)" ></textarea><br />
    <input type="submit" />
  </form>
   
  <?php
//Check whether the form has been submitted
if (array_key_exists('check_submit', $_POST)) {
   //Converts the new line characters (\n) in the text area into HTML line breaks (the <br /> tag)
   $_POST['Comments'] = nl2br($_POST['Comments']); 
   //Check whether a $_GET['Languages'] is set
   if ( isset($_POST['finish']) ) { 
     $_POST['finish'] = implode(', ', $_POST['finish']); //Converts an array into a single string
   }

   //Let's now print out the received values in the browser
   echo "Your name: {$_POST['firstname']}";
	echo " {$_POST['lastname']} <br>";
   
   echo "Your email: {$_POST['email']}<br/>";
   echo "Your password: {$_POST['Password']}<br />";
   
   echo "Your address: {$_POST['addy']}<br />";
   echo "Country: {$_POST['Country']}<br />";
   
   
   echo "Your favorite lipstick shade: {$_POST['Shades']}<br />";
   echo "Favorite finishes: {$_POST['finish']}<br />";
   
   
   echo "Your comments:<br />{$_POST['Comments']}<br /><br />";
   
   
} else {
    echo "Your Input:";
}
?>
 
  
  
  
  
