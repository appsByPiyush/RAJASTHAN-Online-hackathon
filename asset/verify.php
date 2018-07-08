<?php

//MySQLi connection
$con =mysqli_connect('127.0.0.1','root','','guide_validator');

// Check connection for any errors
if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
session_start();


//check whether data with the name username has been submitted
if (isset($_POST['guide_id'])) {

	//variables to hold our submitted data with post
	$guide_id = $_POST['guide_id'];
        

	//our sql statement that we will execute
	$sql = "SELECT * FROM table1 WHERE guide_id='$guide_id'";

	//Executing the sql query with the connection
	$re = mysqli_query($con, $sql);

	//check to see if there is any record or row in the database if there is then the user exists
	if ($re->num_rows > 0) {
    // output data of each row
    while($row = $re->fetch_assoc()) {
        echo $row["guide_id"]; 
        echo"<br>";
        echo $row["guide_name"];
    }
}
                else{
		//display error if no record exists
		echo "Error : Invalid Login Credentials";
	        }
}
?>
