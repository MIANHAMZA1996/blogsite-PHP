<?php
	include ('1connection.php');
	$id=$_GET['id'];
	$m="SELECT * FROM 3posts WHERE id='$id'";
	$res=mysqli_query($conn,$m);
	$row=mysqli_fetch_object($res);
	?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="icon" href="pics/logo.png">
	<head>
		<title>
			BLOG SITE
		</title>
	</head>
<body  class="body" >
<!--MAIN BODY STARTS HERE-->

	<div class="mainbody">

<!--HEADER-->
	<?php
	include('1header.php') ;
	?>
<!--CONTAINER-->
			<div class="container">
									<h1 style="text-align: center;font-family: sans-serif;color: white;">Create Your New Post</h1>

				<div class="newpostform" >
					<form action="5update.php" method="POST" enctype="multipart/form-data" style="margin-top: 30px; padding: 10px;" >
				       <input type="hidden" name="id" value="<?php echo $row->id?>;" >
				        <label class="text5" >POST TITLE</label><br>
				        	<input type="text" class ="text5" name="posttitle" value="<?php echo $row->posttitle?>" placeholder="Your post name.." <br>
				       
				        <label class="text5"></label><br>
				        	<input type="file" name="image" style="margin-top: 10px;" method="FILES" value="<?php echo $row->image?>;" class="buttonimage" ><br>
				       
				        <label class="text5"  >CATEGORY</label><br>
				        	<select class="category" name="category" value="<?php echo $row->category?>;">
					          <option value="BIKE">BIKE</option>
					          <option value="SPORTS">SPORTS</option>
					          <option value="FOOD">FOOD</option>
					          <option value="TECHNOLOGY">TECHNOLOGY</option>
					          <option value="NEPAL">NEPALI</option>
				        	</select><br>

				        <label class="text5"  >DESCRIPTION</label><br>
				        	<textarea class="des" name="description" placeholder="Write something.." style="height:150px" ><?php echo $row->description?></textarea><br>

				        <input type="submit" name="submit" value="Update">
			      </form>	
			  </div>
			</div>

<!--FOOTER-->
		<?php
			include('1footer.php')
		?>
		
	</div>

</body>	
</html>