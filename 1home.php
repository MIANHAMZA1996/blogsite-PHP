<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="icon" href="pics/logo.png">
	<head>
		<title>
			BLOG SITE
		</title>
	</head>
	<STYLE>A {text-decoration: none; } </STYLE>
<body  class="body" >
<!--MAIN BODY STARTS HERE-->

	<div class="mainbody">

<!--HEADER-->
	<?php
	include('1header.php');
	include('1connection.php');
	 $q="SELECT * FROM 3posts"; 
     $res=mysqli_query($conn,$q);
	?>
<!--CONTAINER-->
		<div class="container">
			
		<?php 
        		while ($row=mysqli_fetch_array($res)) 
         {?>
			<div class="post">
				<div class="text2"><?php echo $row['posttitle']?>  </div>
				<div>
					<img src="uploads/<?php echo $row['image']?>" class="postimg">
				</div>
				<div class="paragraph">
					<?php echo $row['description'] ?>
				</div>
				
			</div>
<?php 
        		
         }?>

		</div>

		
<!--FOOTER-->
		<?php
			include('1footer.php')
		?>
	</div>

</body>	
</html>