<!DOCTYPE html>
	<head>
		<title>Delete User - Zulu Music</title>
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
						require "burger-admin.php"
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
			<h2>Delete User</h2><br>
			<form method="post" id="delete.php">
				<!-- Username Field -->
				<div class="row">
					<div class="column">
						<h3><label for = "login">Username</label></h3>
					</div>
					<div class="column2">
						<input type="text" name="Username" placeholder="Username" style="width:350px; height:25px;">
					</div>
				</div>
				<br><br>
			
				<!-- Submit Button -->
				<div class="row2">
					<input type="submit" value="Delete">
				</div>
			</form>
			<br><?php
					require "13csi_Database_Assessment_mysqli.php";
						
					$Username = isset($_POST["Username"]) ? $_POST['Username']: '';

					//create a variable to store sql code for the 'Add Users' query					
					$deletequery = "DELETE FROM Users WHERE Username = '$Username'";
					
					if (mysqli_query($conn,$deletequery))
					{
					}
					else
					{
					}					
				?>
		</div>


		<br><br><br>
		
		<!-- Copyright Statement -->
		<div class="footer4">
			<p>&copy; Copyright Jake Boyd, all rights reserved, Tawa College 2022</p>
		</div>

	</div>
					
	</body>