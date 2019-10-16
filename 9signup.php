<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="icon" href="pics/logo.png">
	<head>
		<title>
			Signup
		</title>
	</head>
<body  class="body" >
<!--MAIN BODY STARTS HERE-->

	<div class="mainbody">

<!--HEADER-->
<?php
	include('1header.php');
	include ('1connection.php');
	?>
		<div class="container" style="margin-left: 327px; margin-top: 40px;">
			<div class="signupform">
				<div class="dataentry">
					<h1 class="text9">Sign Up</h1>

						<form action="9signupdata.php" method="POST" >	
					
							<label class="text11">Username</label><br>
							<input type="text" name="username" class="text11"><br>

							<label class="text11">Email</label><br>
							<input type="text" name="email" class="text11"><br>

							<label class="text11"> Password</label><br>
							<input type="password" name="password" class="password" style="margin-left: 50px;"><br>

							<label class="text11">Retype Password</label><br>
							<input type="password" name="retypepassword" class="password" style="margin-left: 50px;"><br>

							<select  style="width: 180px; margin-left: 50px;" name="usertype">
									<option>Author</option>
									<option>Reader</option>
									<option>Admin</option>
							</select>

							<input type="submit" name="submitsignup" value="SIGNUP"  >
						</form>	
				</div>
				<div class="sociallink">
					<h2 class="text10">Login with Social</h2>
				</div>
			</div>
		</div>
		<?php
			include('1footer.php')
		?>
	</div>
</body>
</html>
