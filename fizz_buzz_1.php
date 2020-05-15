<style>
* {
    box-sizing: border-box;
}


/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 10px;
    /*height: 30px;  Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>

<h1 class = "page_title">FizzBuzz 1</h1>
<hr>

<div class="row">

  <div class="column">
    <h2>Example 1</h2>
    <p>
    <?php
$i = 0;
while ($i < 100) {
  $i++;
 
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo ' fizzBuzz' . '<br>';
    }
  else if ($i % 3 == 0) {
    echo ' fizz' . '<br>';
    }
    
	else if ($i % 5 == 0) {
    echo ' Buzz' . '<br>';
    }
    
    else {
     echo $i . '<br>';
      }
  }
?>
</p>
  </div>
  
  
  
  
  
  <div class="column" >
    <h2>Example 2</h2>
    <p><?php
$i = 0;
while ($i < 100) {
  $i++;
 
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo ' eyeCandy' . '<br>';
    }
  else if ($i % 3 == 0) {
    echo ' eye' . '<br>';
    }
    
	else if ($i % 5 == 0) {
    echo ' Candy' . '<br>';
    }
    
    else {
     echo '&hearts;' . '<br>';
      }
  }
?>
</p>
  </div>
</div>



