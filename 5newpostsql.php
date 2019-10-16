<?php
	include('1connection.php');
	$posttitle=$_POST['posttitle'];
	$image=$_FILES['image']['name'];
	$category=$_POST['category'];
	$description=$_POST['description'];

	$path='uploads/';
//destination
	$destination=$path.$image;

	move_uploaded_file($_FILES['image']['tmp_name'], $destination);


	$n="INSERT INTO 3posts(posttitle,image,category,description)
		values ('$posttitle','$image','$category','$description') ";

	mysqli_query($conn,$n);
	header("location:5posts.php");




?>



<!-- 
	 move_uploaded_file($_FILES['picture']['tmp_name'],'uploads/'.$name);
	$img='name';
 	}
 	else
 	{
	 	$img='0';
 	}
 -->