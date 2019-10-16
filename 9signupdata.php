<?php
	include('1connection.php');
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$retypepassword=$_POST['retypepassword'];
	$usertype=$_POST['usertype'];

	$q="INSERT INTO 1signup(username,email,password,retypepassword,usertype)
		VALUES ('$username','$email','$password','$retypepassword','$usertype')";

	mysqli_query($conn,$q);
	header("location:8login.php");


?>