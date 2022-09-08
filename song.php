<?php
        session_start();
        if(!isset($_SESSION['login_user'])){
			header("location: login.php");
				}
		else{
			$User = $_SESSION['login_user'];
        }
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="images/ZULU.png"/>
	<link rel = "stylesheet" href = "css/style.css"/>
	<link rel = "stylesheet" href = "css/menu.css"/>
		
	<title>Zulu Music</title>
		<meta charset="UTF-8">
		<meta name="Keywords" content="html5, layout, 10 Credit Project, Jake B"/>
		<meta name="Author" content="Jake Boyd"/>
		<meta name="Description" content="10 Credit Project - Jake Boyd">
		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
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
	<?php
		require("connect4.php")		
	?>

	<?php
		require("13csi_Database_Assessment_mysqli.php")			
	?>
			
	
	<div class="header">
			<h1>Z U L U</h1><br>
	</div>
	<br>
	<div class="content-song">
		<h3><?php echo $_GET['Title']; ?> by <?php echo $_GET['Artist']; ?></h3><hr>
		<img src="images/<?php echo $_GET['Image']; ?>" width="300" height="300">
	</div>

	<div class="content-song2">	
		<p>Album: <?php echo $_GET['Title']; ?></p>
		<p>Genre: <?php echo $_GET['Genre']; ?></p>
		<p>Duration: <?php echo $_GET['Seconds']; ?>s</p>
		<p>Size: <?php echo $_GET['Size']; ?>KB</p>
		<p>Total Time: <?php echo $_GET['TotalTime']; ?>s</p>
	</div>
	<!-- Copyright Statement -->
	<div class="footer">
		<p>&copy; Copyright Jake Boyd, all rights reserved, Tawa College 2022</p>
	</div>	
	</body>
</html>
