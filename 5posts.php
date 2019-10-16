<?php
include('1connection.php');
$q="SELECT * FROM 3posts";
$s=mysqli_query($conn,$q);

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="icon" href="pics/logo.png">
	<head>
		<title>
			Posts
		</title>
	</head>
<body  class="body" >
<!--MAIN BODY STARTS HERE-->

	<div class="mainbody">

<!--HEADER-->
	<?php
	include('1header.php') ;
	include ('1connection.php');
	?>

		<div class="container">


			<h1 style="text-align: center;font-family: sans-serif;color: white;">All Users</h1>

				<a href="5newpost.php" ><button class="newpost" style="" >Create New Post</button></a>
		 	<table style="" class="posttable" >
			  <tr >
			  	<th >Sr no</th>
			    <th >Post Title</th>
			    <th >Image</th> 
			    <th>Category</th>
			    <th >Description</th>
			    <th >Action</th>
			  </tr>
			  <?php while ($row=mysqli_fetch_array($s)) {;?>
			<tr>
			  	<td class="rowpost"><?php echo $row['id']?></td>
			  	<td class="rowpost"><?php echo $row['posttitle']?></td>
			  	<td class="rowpost">
		  			<img src="uploads/<?php echo $row['image'] ?>" style="height: 60px; width: 70px;">
		  		</td>
		  		<td class="rowpost"><?php echo $row['category']?></td>
		  		<td class="rowpost1"><?php echo $row['description']?></td>
		  		<td >
			  		<a href="5edit.php?id=<?php echo $row['id'] ?>">
			  			<button class="buttonpost""> Edit</button>
				  	</a>
			  		<a href="5delete.php?id=<?php echo $row['id'] ?>">
			  			<button class="buttonpost"> Delete</button>
			  		</a>
		  		</td>
		 	 </tr>

			 <?php } ?>
		  
			</table>
				
				
		</div>	


		<?php
			include('1footer.php')
		?>
	</div>
</body>
</html>
