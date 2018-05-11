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
	$Salutation=$_POST['sal'];
	$UserId=$_POST['u_id'];
	$CustomerId=$_POST['cust_id'];
	$FirstName=$_POST['fname'];
	$LastName=$_POST['lname'];
	$City=$_POST['city'];
	$Town=$_POST['town'];
	$Surname=$_POST['sname'];
	$County=$_POST['county'];
	$Address=$_POST['add'];
	$PostalCode=$_POST['code'];
	$PhoneNumber=$_POST['pnumb'];
	$EmailAddress=$_POST['email'];

	$sql ="INSERT INTO new_user (DOB,Salutation,UserId,CustomerId,FirstName,LastName,City,Town,Surname,County,Address,PostalCode,PhoneNumber,EmailAddress)
	       VALUES('$DOB','$Salutation','$UserId','$CustomerId','$FirstName','$LastName','$City','$Town','$Surname','$County','$Address','$PostalCode','$PhoneNumber','$EmailAddress')";

	if(!mysqli_query($con,$sql))
	{
		echo "Account Not Created";
		}
	else
	{
		echo "Account Created";
		}
	header("refresh:4;url=home.html")

?>