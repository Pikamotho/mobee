<?php
	$con=mysqli_connect('127.0.0.1','root','');
	if(!$con)
	{
		echo "Not connected to the server";
	}
	if(!mysqli_select_db($con,'mobee'))
	{
		echo "Database Not Selected";
	}

	$DOB=$_POST['dob'];
	

	$sql ="INSERT INTO new_user (DOB)
	       VALUES('DOB')";

	if(!mysqli_query($con,$sql))
	{
		echo "Account Not Created";
		}
	else
	{
		echo "Account Created";
		}
	header("refresh:60;url=home.html")

?>