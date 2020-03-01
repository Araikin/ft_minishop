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
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="header">
			<div>
				<img src="src/logo.png" width="10%" />
				<h1>montessori</h1>
				<i>Bazaar</i>
			</div>
			<div class="account">
				<div><img src="src/cart.png" />Cart</div>
				<div><img src="src/account.png" />Account</div>
			</div>
		</div>
		<div class="category">
			<?php echo str_repeat("<a>categ</a>", 5); ?>
		</div>
		<div class="flex-container">
			<?php echo str_repeat("<div></div>", 15); ?>
		</div>
	</body>
</html> 