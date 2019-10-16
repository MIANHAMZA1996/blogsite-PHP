<?php
	include('1connection.php');
	$id=$_GET['id'];
	$q="DELETE FROM  1signup WHERE id='$id'";
	$res=mysqli_query($conn,$q);

	header("location:6users.php");

?>