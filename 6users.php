<?php
	include("1connection.php");
	$q="SELECT * FROM 1signup";
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

			<h1 style="margin-left: 629px; font-family: sans-serif;color: white;">All Users</h1>
		 	
		 	
		 		

		 	<table style="" class="usertable" >
			  <tr >
			  	<th >Sr no</th>
			    <th >Username</th> 
			    <th>Email</th>
			    <th >Type</th>
			    <th >Action</th>
			  </tr>
			  <?php while ($row=mysqli_fetch_array($res)) {; ?>
			<tr>
			  	<td class="rowpost"><?php echo $row['id'] ?></td>
			  	<td class="rowpost"><?php echo $row['username'] ?></td>
		  		<td class="rowpost"><?php echo $row['email'] ?></td>
		  		<td class="rowpost"><?php echo $row['usertype'] ?></td>
		  		<td >
			  		<a href="6edit.php?id=<?php echo $row['id'] ?>">
			  			<button class="buttonpost""> Edit</button>
				  	</a>
			  		<a href="6delete.php?id=<?php echo $row['id'] ?>">
			  			<button class="buttonpost"> Delete</button>
			  		</a>
		  		</td>
		 	 </tr>
		  
			<?php	} ?>
			</table>
				
		</div>	


		<?php
			include('1footer.php')
		?>
</body>
</html>