<style>
table, th, td {
    border: 2px solid white;
    border-collapse: collapse;
    padding: 10px;
    background-color: rgba(0,128,128,.1);
    
}

</style>

<h1> Run Some SQL </h1>
<strong>Some data pulled from my lipstick table:</strong> <br><br>

<?php
$servername = "localhost";
$username = "snur0000";
$password = "@Barbie101";
$dbname = "snur0000";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM lipstick";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr>
    <th>ID</th>
    <th>name</th>
    <th>color</th>
    <th>finish</th>
    <th>price</th>
    
    
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>" . 
        "<td>" . $row["lipstick_id"]. "</td>" . 
        "<td>" . $row["lipstick_name"] . "</td>" .
        "<td>" . $row["lipstick_color"]. "</td>" .
        "<td>" . $row["lipstick_finish"]. "</td>" .
        "<td>" . $row["lipstick_price"]. "</td>" .
        "</tr>"
       ;
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 
<br>


