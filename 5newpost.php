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
					<form action="5newpostsql.php" method="POST" enctype="multipart/form-data" style="margin-top: 30px; padding: 10px;" >
				       
				        <label class="text5" >POST TITLE</label><br>
				        	<input type="text" class ="text5" name="posttitle" placeholder="Your post name.."><br>
				       
				        <label class="text5">SELECT A PICTURE</label><br>
				        	<input type="file" name="image" style="margin-top: 10px;" method="FILES" class="buttonimage"><br>
				       
				        <label class="text5" >CATEGORY</label><br>
				        	<select class="category" name="category">
					          <option value="BIKE">BIKE</option>
					          <option value="SPORTS">SPORTS</option>
					          <option value="FOOD">FOOD</option>
					          <option value="TECHNOLOGY">TECHNOLOGY</option>
					          <option value="NEPAL">NEPALI</option>
				        	</select><br>

				        <label class="text5" >DESCRIPTION</label><br>
				        	<textarea class="des" name="description" placeholder="Write something.." style="height:150px"></textarea><br>

				        <input type="submit" name="submit" value="Post">
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