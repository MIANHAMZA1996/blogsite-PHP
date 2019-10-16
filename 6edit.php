<?php
	include('1connection.php');
	$id=$_GET['id'];
	$q="SELECT * FROM 1signup WHERE id='$id'";
	$res=mysqli_query($conn,$q);
	$row=mysqli_fetch_object($res);
?>

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
	?>
		<div class="container" style="margin-left: 327px; margin-top: 40px;">
			<div class="signupform">
				<div class="dataentry">
					<h1 class="text9">Sign Up</h1>

						<form action="6update.php" method="POST" >	
							
							<input type="hidden" name="id"  value="<?PHP echo $row->id ?>">	

							<label class="text11">Username</label><br>
							<input type="text" name="username" class="text11" value="<?php echo $row->username ?>"><br>

							<label class="text11">Email</label><br>
							<input type="text" name="email" class="text11" value="<?PHP echo $row->email ?>"><br>

							<label class="text11"> Password</label><br>
							<input type="password" name="password" class="password" value="<?PHP echo $row->password ?>" style="margin-left: 50px;"><br>

							<label class="text11">Retype Password</label><br>
							<input type="password" name="retypepassword" class="password" value="<?PHP echo $row->retypepassword ?>" style="margin-left: 50px;"><br>

							<select  style="width: 180px; margin-left: 50px;" name="usertype" value="<?PHP echo $row->usertype?>">
									<option>Author</option>
									<option>Reader</option>
									<option>Admin</option>
							</select>

							<input type="submit" name="submitsignup" value="UPDATE"  >
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
