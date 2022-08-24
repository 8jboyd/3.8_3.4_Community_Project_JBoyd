<!DOCTYPE html>
	<head>
		<title>Contact - Zulu Music</title>
		<link rel="icon" type="image/png" href="images/gannet-icon.png"/>
		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/style.css">
		
		<meta charset="UTF-8">
		<meta name="Keywords" content="html5, layout, 10 Credit Project, Jake B"/>
		<meta name="Author" content="Jake Boyd"/>
		<meta name="Description" content="10 Credit Project - Jake Boyd">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	
	<body>
	<div id="main">

		<?php
		require_once("13csi_Database_Assessment_mysqli.php");
		?>
		<div class="menu-wrap"> <!-- https://www.youtube.com/watch?v=DZg6UfS5zYg Video used for burger menu --> 
		<input type="checkbox" class="toggler">
		<div class="hamburger"><div></div></div>
			<div class="menu">
				<div>
					<div>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="page2.html">Music by Title</a></li>
							<li><a href="page3.html">Music by Genre</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="nav">
			<ul><a href="login.php">Login</a></ul>
			<li><a href="signup.php">Sign Up</a></li>
		</div>
		
		<div class="heading">
			<h1>Z U L U</h1>
		</div>
		<br><br><br><br><br><br>
		
		<div class="contact_container4">
			<h2>Contact Form</h2>
			<form action="connect.php" method="post" target="_blank">
			<!-- Full Name Field -->
			<div class="row">
				<div class="column">
					<h3><label for="Full_Name">Full Name</label></h3>
				</div>
				<div class="column2">
					<input type="text" id="Full_Name" name="Full_Name" placeholder="Your Full Name" style="width:350px; height:25px;">
				</div>
			</div>

			<!-- Username Field -->
			<div class="row">
				<div class="column">
					<h3><label for="Username">Username</label></h3>
				</div>
				<div class="column2">
					<input type="text" id="Username" name="Username" placeholder="Your Username" style="width:350px; height:25px;">
				</div>
			</div>

			<!-- Email Address Field -->
			<div class="row">
				<div class="column">
					<h3><label for="Email">Email Address</label></h3>
				</div>
				<div class="column2">
					<input type="text" id="Email" name="Email" placeholder="Your Email Address" style="width:350px; height:25px;">
				</div>
			</div>

			<!-- Subject Field -->
			<div class="row">
				<div class="column">
					<h3><label for="Subject">Subject</label></h3>
				</div>
				<div class="column2">
					<textarea id="Subject" name="Subject" placeholder="Write something..." style="height:200px; width:350px;"></textarea>
				</div>
			</div>

			<br>
			
			<!-- Submit Button -->
			<div class="row2">
				<input type="submit" value="Submit">
			</div>
			</form>
		</div>
		
		<br><br><br>
		
		<!-- Copyright Statement -->
		<div class="footer2">
			<p>&copy; Copyright Jake Boyd, all rights reserved, Tawa College 2022</p>
		</div>

	</div>
					
	</body>

</html>
