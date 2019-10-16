<STYLE>A {text-decoration: none; } </STYLE><!-- <STYLE>A {text-decoration: none;} </STYLE> -->


<?php
	SESSION_start();
	if (!empty($_SESSION && $_SESSION['usertype']=='Admin')) 
		{
?>

			<div class="header">
				<div class="logo">
					<a href="1home.php">	
						<img src="pics/logos.png"class="logoimg">
					</a>
				</div>
			
				<div class="menubar">
					<a href="1home.php" class="text1">Home</a> 
					<a href="2aboutus.php" class="text1">About us</a>
					<a href="3contactus.php" class="text1">Contact us</a>
					<a href="4category.php" class="text1">Category</a>
					<a href="5posts.php" class="text1">Posts</a>
					<a href="6users.php" class="text1">Users</a>
					<a href="3aquries.php" class="text1">Quries</a>
				</div>
				<div class="option">
					<a href="8logout.php" class="text1">Logout</a>
				</div>
			</div>	

<?php	}

	elseif (!empty($_SESSION && $_SESSION['usertype']=='Author')) 
		{
?>

			<div class="header">
				<div class="logo">
					<a href="1home.php">	
						<img src="pics/logos.png"class="logoimg">
					</a>
				</div>
			
				<div class="menubar">
					<a href="1home.php" class="text1">Home</a> 
					<a href="2aboutus.php" class="text1">About us</a>
					<a href="3contactus.php" class="text1">Contact us</a>
					<a href="4category.php" class="text1">Category</a>
					<a href="5posts.php" class="text1">Posts</a>
				</div>	
				<div class="option">
					<a href="8logout.php" class="text1">Logout</a>
				</div>

			</div>	
<?php	}		

	else
		{
?>
			<div class="header">
				<div class="logo">
					<a href="1home.php">	
						<img src="pics/logos.png"class="logoimg">
					</a>
				</div>
			
				<div class="menubar">
					<a href="1home.php" class="text1">Home</a> 
					<a href="2aboutus.php" class="text1">About us</a>
					<a href="3contactus.php" class="text1">Contact us</a>
					<a href="4category.php" class="text1">Category</a>
				</div>
				<div class="option">
					<a href="8login.php" class="text1">Login</a>
					<a href="9signup.php" class="text1">Signup</a>
				</div>
			</div>
<?php   }
?>
