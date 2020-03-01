<?php
session_start();
include ("php/db.php"); 
$conn = connect_db();
$GLOBALS['conn'] = $conn;
mysqli_select_db($conn, $GLOBALS['db_username']);
?>

<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	</head>
	<body>
		<div class="header">
			<div id="logo">
				<img id="logo1" src="src/logo.png" width="10%" />
				<img id="logo2" src="src/logo2.png" width="20%" />
                
			</div>
			<div class="account">
				<!-- <i class="material-icons cart">local_grocery_store</i> -->
				<a href="php/register.php"><i id="register" class="material-icons">account_circle</i></a>
				<p id="register">Sign in/Register</p>
			</div>
		</div>
		<div class="category">
			<?php echo str_repeat("<a>categ</a>", 5); ?>
		</div>
		<div class="flex-container">
			<?php echo str_repeat("<div></div>", 12); ?>
		</div>
	</body>
</html> 