<?php
	include('1connection.php');
	$id=$_GET['id'];
	$q="DELETE FROM  2contactus WHERE id='$id'";
	$res=mysqli_query($conn,$q);

	header("location:3aquries.php");

?>