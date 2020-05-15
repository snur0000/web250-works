<?php
	include 'header.php';
?>
<?php
	include 'includes/dbh.inc.php';
?>
<style>

table, th, td {
    border: 1px solid hotpink;
    border-collapse: collapse;
    padding: 8px;
    font-size:25px;
}
</style>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Home</h2>
		<?php
			if (isset($_SESSION['u_id'])) {
				echo "you are logged in!";
                
                
                
                //code for personalized page
                
                echo "<br>" . "This is your personalized dashboard. Feel free to make as many lipsticks you'd like!";
                
                echo'<form class="signup-form" action="includes/lipstickdash.inc.php" method="POST">
            
            <input type="text" name="user_uid" placeholder="user_uid">
            <input type="text" name="lipstickid" placeholder="lipstickid">
			<input type="text" name="lipstickname" placeholder="lipstickname">
			<input type="color" name="lipstickshade" value = "#ff0080">
            
            
            <input type="radio" id="finishchoice1"
             name="lipstickfinish" value="matte">
            <label for="finishchoice1">matte</label>

            <input type="radio" id="finishchoice2"
             name="lipstickfinish" value="glossy">
            <label for="finishchoice2">glossy</label>

            <input type="radio" id="finishchoice3"
             name="lipstickfinish" value="satin">
            <label for="finishchoice3">satin</label>
            
			<button type="submit" name="submit">submit</button>
		</form>';
                
                
                
                
                // WHERE user_uid='$uid' OR user_email='$uid'
                //$sql = "SELECT * FROM lipsticks";
                
                
                $sql = "SELECT *
                        FROM lipsticks 
                        join users on lipsticks.user_uid = users.users_uid;";
                $result = $conn->query($sql);
                //mysqli_query($conn , $sql);
                
             if ($result< 0) {
                        echo "<table><tr>
                        <th>ID</th>
                        <th>userid</th>
                        <th>name</th>
                        <th>color</th>
                        <th>finish</th>
                        


                        </tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>" . 
                            "<td>" . $row["lipstickid"]. "</td>" . 
                            "<td>" . $row["user_uid"]. "</td>" . 
                            "<td>" . $row["lipstickname"] . "</td>" .
                            "<td>" . $row["lipstickshade"]. "</td>" .
                            "<td>" . $row["lipstickfinish"]. "</td>" .
                            "</tr>"
                           ;
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }

                  
                
                
                
                
			}
        
		?>	
	</div>
</section>


<?php
	include 'footer.php';
?>
