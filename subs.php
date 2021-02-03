<?php

$con = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,'education');

if(isset($_POST['emailsubscibe'])){

	$email = $_POST['email'];

	$sql = "INSERT INTO subscribe (email) VALUES ('$email')";
	
	if( mysqli_query($con,$sql)){

		
		echo "<script>alert('New User Subscribed');</script>";
	}else{
		echo "<script>alert('User Already Subscribed');</script>";
	}
}

?>