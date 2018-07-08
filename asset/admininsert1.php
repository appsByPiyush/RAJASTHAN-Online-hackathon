<?php

	$con =mysqli_connect('127.0.0.1','root','','guide_validator');
	
	if (!$con)
	{
		echo 'Not Connected To Server';
	}
	
	if (!mysqli_select_db($con,'guide_validator'))
	{
		echo 'Database Not Selected';
	}

    $guide_id = $_POST['guide_id'];
	$guide_name = $_POST['guide_name'];
	
    mysqli_query($con,"INSERT INTO table1(guide_id,guide_name) VALUES ('$guide_id','$guide_name')");
				
	if(mysqli_affected_rows($con) > 0){
	echo "<p> Inserted</p>";
    } else {
	echo "NOT Inserted<br />";
	echo mysqli_error ($con);
}
//	header("refresh:2; url=http://localhost/login/signup.html");
    $con->close();




    
?>