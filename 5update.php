
<?php
	include('1connection.php');
	$id=$_POST['id'];
	$posttitle=$_POST['posttitle'];
	$image=$_FILES['image']['name'];
	$category=$_POST['category'];
	$description=$_POST['description'];

	$path='uploads/';
//destination
	$destination=$path.$image;

	move_uploaded_file($_FILES['image']['tmp_name'], $destination);


	$n="UPDATE 3posts SET posttitle='$posttitle',image='$image',category='$category',description='$description' where id='$id' ";
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