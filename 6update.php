<?php
	include('1connection.php');
	$id=$_POST['id'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$retypepassword=$_POST['retypepassword'];
	$usertype=$_POST['usertype'];
	$q="UPDATE 1signup SET username='$username',email='$email',password='$password',retypepassword='$retypepassword',usertype='$usertype' WHERE id='$id'";

	mysqli_query($conn,$q);
	header("location:6users.php");


?>