<?php
	ini_set('display_errors',0) // Remvoing notice error for burger menu
	  							// (messes up the burger menu when logining in for the first time)
?>

<?php
	ob_start();
	session_start();
		$error = NULL;
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			//connect/php (tells where to connect servername dbaseName, Username, Password)
			require "13csi_Database_Assessment_mysqli.php";
			// username and password sent from form
			$myusername = mysqli_real_escape_string($conn,$_POST['Username']);
			$mypassword = mysqli_real_escape_string($conn,$_POST['Password']);
			
			$query = "SELECT Username FROM Users WHERE Username = '$myusername' and Password = '$mypassword'";
			
			$result = mysqli_query($conn,$query);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			$count = mysqli_num_rows($result);
			
			// If result matched $myusername and $mypassword, table row must be 1 row
			if($count == 1) {
				$_SESSION['login_user'] = $myusername;
				header("location: index.php");

			} else {
				$error = "ERROR! Your Login Name or Password is invalid";
				}
			}
	ob_end_flush();
?>

<!DOCTYPE html>
	<head>
		<title>Login - Zulu Music</title>
		<link rel="icon" type="image/png" href="images/gannet-icon.png"/>
		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/style.css">
		
		<meta charset="UTF-8">
		<meta name="Keywords" content="html5, layout, Zulu Music Website, Jake B"/>
		<meta name="Author" content="Jake Boyd"/>
		<meta name="Description" content="10 Credit Project - Jake Boyd">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	
	<body>
	<div id="main">	
		<div class="menu-wrap"> <!-- https://www.youtube.com/watch?v=DZg6UfS5zYg Video used for burger menu --> 
		<input type="checkbox" class="toggler">
		<div class="hamburger"><div></div></div>
			<div class="menu">
				<div>
					<?php
						if($_SESSION['login_user'] != 'Admin'){
							require "burger.php";
						}
						else {
							require "burger-admin.php";
						}
					?>
				</div>
			</div>
		</div>
		
		<div class="nav">
			<?php
				require "nav.php"
			?>
		</div>
		
		<div class="heading">
			<h1>Z U L U</h1>
		</div>
		<br><br><br><br><br><br>
		
		<div class="contact_container3">
			<h2>Login</h2><br>
			<form method="post" method="post" target="_blank" id="login_user">
			<!-- Username Field -->
			<div class="row">
				<div class="column">
					<h3><label for="Username">Username</label></h3>
				</div>
				<div class="column2">
					<input type="text" name="Username" placeholder="Username" style="width:350px; height:25px;">
				</div>
			</div>
			<br>
			<!-- Password Field -->
			<div class="row">
				<div class="column">
					<h3><label for="Password">Password</label></h3>
				</div>
				<div class="column2">
					<input type="password" name="Password" placeholder="Password" style="width:350px; height:25px;">
				</div>
			</div>

			<br><br>
			
			<!-- Submit Button -->
			<div class="row2">
				<input type="submit" value="Submit">
			</div>
			</form>
		</div>
		
		<br><br><br>
		
		<!-- Copyright Statement -->
		<div class="footer4">
			<p>&copy; Copyright Jake Boyd, all rights reserved, Tawa College 2022</p>
		</div>

	</div>
					
	</body>
