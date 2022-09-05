<!DOCTYPE html>
	<head>
		<title>Sign Up - Zulu Music</title>
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
			<ol><a href="logout.php">Log Out</a></ol>
			<ul><a href="login.php">Login</a></ul>
			<li><a href="signup.php">Sign Up</a></li>
		</div>
		
		<div class="heading">
			<h1>Z U L U</h1>
		</div>
		<br><br><br><br><br><br>
		
		<div class="contact_container3">
			<h2>Sign Up</h2><br>
			<form action="connect2.php" method="post" target="_blank">
			<!-- Username Field -->
			<div class="row">
				<div class="column">
					<h3><label for="Username">Username</label></h3>
				</div>
				<div class="column2">
					<input type="text" id="Username" name="Username" placeholder="Username" style="width:350px; height:25px;">
				</div>
			</div>
			<br>
			<!-- Username Field -->
			<div class="row">
				<div class="column">
					<h3><label for="Password">Password</label></h3>
				</div>
				<div class="column2">
					<input type="password" id="Password" name="Password" placeholder="Password" style="width:350px; height:25px;">
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

</html>
