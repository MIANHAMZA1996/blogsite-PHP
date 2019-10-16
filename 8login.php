<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="icon" href="pics/logo.png">
	<head>
		<title>
			Login
		</title>
	</head>
<body  class="body" >
<!--MAIN BODY STARTS HERE-->

	<div class="mainbody">

<!--HEADER-->
		<?php
	include('1header.php') ;
	?>
			<a href=""> <img src="pics/1.png" class="loginlogo"></a>

		<div class="logincontainer">       

	        <form action="8loginquery.php" method="post">

	        	<h3 class="text6" >Login Here</h3>
	        	<label class="text7">Username</label>	
	        	<input type="text" name="username" class="text7" placeholder="Enter your username">

	        	<label class="text7">password</label>	
	        	<input type="password" name="password" class="password" >

	        	<input type="submit" name="submitlogin" class="text7" value="Login" ><br>

				<a href="#" class="text8">Lost your password?</a><br>
	            <a href="signup.php" class="text8">Don't have an account?</a>

	        </form>

		</div>
		<?php
			include('1footer.php')
		?>

	</div>
</body>
</html>	