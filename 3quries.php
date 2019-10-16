<?php
	include('1connection.php');
	$name=$_POST['name'];
	$mobilenumber=$_POST['mobilenumber'];
	$country=$_POST['country'];
	$subject=$_POST['subject'];
	$q="INSERT INTO 2contactus(name,mobilenumber,country,subject)
	VALUES ('$name','$mobilenumber','$country','$subject') ";


	mysqli_query($conn,$q);
	header("location:3contactus.php");


?>