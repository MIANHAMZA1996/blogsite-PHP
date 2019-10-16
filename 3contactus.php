<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="icon" href="pics/logo.png">
	<head>
		<title>
			CONTACT US
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
<!--CONTAINER-->
		<div class="container">

			<div class="contactimg">
				<img src="pics/contact.jpg" class="contactimg">
			</div>
		<div class="contactform" style="width: 340px;">	
		<form action="3quries.php"  method="POST" style="width: 340px;">

	        <label >NAME</label><br>
	        <input type="text" class="firstname" name="name" placeholder="Enter Your Name."><br>
	        
	        <label >MOBILE NUMBER</label><br>
	        <input type="text" class="number" name="mobilenumber" placeholder="Enter your Mobile Number.."><br>
	        
	        <label >Country</label><br>
	        <select class="country" name="country">
	          <option value="AUSTRALIA">AUSTRALIA</option>
	          <option value="UNITED KINDOM">UNITED KINDOM</option>
	          <option value="SAUDIA ARABIA">SAUDIA ARAB</option>
	          <option value="PAKISTAN">PAKISTAN</option>
	          <option value="NEPAL">NEPAL</option>
	        </select><br>

	       
	        <label for="subject">Subject</label><br>
	         <textarea class ="subject" name="subject" placeholder="Write something.." style="height:70px"></textarea>
	          <input type="submit" value="Submit">
      </form>
    </div>
		
		</div>	


	</div>

	

<!--FOOTER-->
		<?php
			include('1footer.php')
		?>

</body>
</html>		