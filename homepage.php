<?php
	include("header.html");
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>School Management System</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

	<div class="sidebar">
	<ul>
		  <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
		  <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
		  <li><a href="#"><i class="fas fa-user"></i>Teacher</a></li>
		  <li><a href="#"><i class="fas fa-user"></i>Admin</a></li>
		  <li><a href="login.php">Logout</a></li>

		  
	
	</ul>
	<?php echo "<br>Welcome-".$_SESSION['uname'];
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "Today is ".date('l');
	echo "<br>";
	echo "and ".date('d-m-Y');
	
	session_destroy();
	?>


	</div>

	<div class="mainview">
		<h1><center>main content</center></h1>
		
		
	</div>
</body>
</html>
<?php
	include("footer.html");
?>