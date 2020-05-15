<!--
<style>

table, th, td {
    border: 2px solid white;
    border-collapse: collapse;
    padding: 10px;
    background-color: rgba(0,128,128,.1);  
}

.column {
    
    background-color: rgba(0,128,128,.1);  
    float: left;
    padding: 10px;
    border: solid;

}

</style>
<h1>CRUD </h1>
<p>create and read out of CRUD </p>
<form class = "column" action="#" method="post">
    <p>
        <label for="name">name:</label>
        <input type="text" name="name" id="name" value = "Sabrina" required>
    </p>
    <p>
        <label for="shade">shade:</label>
        <input type="text" name="shade" id="shade" value = "red" required>
    </p>
    <p>
        <label for="finish"> finish:</label>
        <input type="text" name="finish" id="finish" value = "matte" required>
    </p>
    <input type="submit" value="Submit">
</form>


//<?php
/*include('server_connect.php');

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$shade = mysqli_real_escape_string($link, $_REQUEST['shade']);
$finish = mysqli_real_escape_string($link, $_REQUEST['finish']);
 
// attempt insert query execution
$sql = "INSERT INTO crud (name, shade, finish) VALUES ('$name', '$shade', '$finish')";
if(mysqli_query($link, $sql)){
    //echo "Records added successfully."
    ;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>



<?php
include('server_connect.php');


$sql = "SELECT * FROM crud where name is not null;";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr>
    <th>name</th>
    <th>shade</th>
    <th>finish</th>
    
    
    
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>" . 
        "<td>" . $row['name']. "</td>" . 
        "<td>" . $row["shade"] . "</td>" .
        "<td>" . $row["finish"]. "</td>" .
        
        "</tr>"
       ;
    }
    echo "</table>";
} else {
    echo "0 results";
}




$link->close();
?> 

