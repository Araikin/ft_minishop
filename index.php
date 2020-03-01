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
				<div id="login">
					<form action="" method="POST">
						Username: <input type="text" name="login" value="" /><br />
						Password: <input type="text" name="login" value="" />
						<input type="submit" name="OK" value="OK" />
					</form>
				</div>
				<div id="register">
					<a href="php/register.php">
						<i id="register" class="material-icons">account_circle</i>
						<p>Sign&nbsp;in/ Register</p>
					</a>
				</div>
				<div>
					<a href="">
						<i class="material-icons cart">local_grocery_store</i>
						<p>Cart</p>
					</a>
				</div>
			</div>
		</div>
		<div class="category">
			<?php echo str_repeat("<a>categoria</a>", 5); ?>
		</div>
		<div class="title">
			<h1>Categoria of items</h1>
			<p>Discription of categoria<br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<div class="flex-container">
			<?php
				echo str_repeat("<div class='item'>
									<img src='src/item1.jpg'/>
									<p>\$NAME</p>
									<a>SKU: \$VAR_SKU</a>
									<p>PRICE: \$VAR_PRICE</p>
								</div>", 122);
			?>
		</div>
	</body>
</html> 