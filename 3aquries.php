<?php
	include('1connection.php');
	$q="SELECT * FROM 2contactus";
	$res=mysqli_query($conn, $q);
	$row=mysqli_fetch_array($res);

?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="icon" href="pics/logo.png">
	<head>
		<title>
			USERS
		</title>
	</head>
<body  class="body" >
<!--MAIN BODY STARTS HERE-->

	<div class="mainbody">

<!--HEADER-->
		<?php
	include('1header.php') ;
	?>

		<div class="container">

			<h1 style="text-align: center;font-family: sans-serif;color: white;">All Users</h1>
		 	<table style="" class="usertable" >
			  <tr >
			  	<th >Sr no</th>
			    <th >Name</th> 
			    <th>Number</th>
			    <th >Country</th>
			    <th>Comments</th>
			    <th >Action</th>
			  </tr>
				<?php while ($row=mysqli_fetch_array($res)) {;?>
			<tr>
			  	<td class="rowpost"><?php echo $row['id'] ?></td>
			  	<td class="rowpost"><?php echo $row['name'] ?></td>
		  		<td class="rowpost"><?php echo $row['mobilenumber'] ?></td>
		  		<td class="rowpost"><?php echo $row['country'] ?></td>
		  		<td class="rowpost"><?php echo $row['subject'] ?></td>
		  		<td >
			  		<a href="3delete.php?id=<?php echo $row['id'] ?>">
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