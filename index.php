<?php
session_start();
include ("php/db.php"); 
$conn = connect_db();
$GLOBALS['conn'] = $conn;
mysqli_select_db($conn, $GLOBALS['db_username']);
$CATEG = array("newborn" => array("Toys for young infants—birth through 6 months", "Babies like to look at people—following them with their eyes. Typically, they prefer faces and bright colors. Babies can reach, be fascinated with what their hands and feet can do, lift their heads, turn their heads toward sounds, put things in their mouths, and much more!"),
	"infant" => array("Toys for older infants—7 to 12 months", "Older babies are movers—typically they go from rolling over and sitting, to scooting, bouncing, creeping, pulling themselves up, and standing. They understand their own names and other common words, can identify body parts, find hidden objects, and put things in and out of containers."),
	"1 year" => array("Toys for 1-year-olds", "One-year-olds are on the go! Typically they can walk steadily and even climb stairs. They enjoy stories, say their first words, and can play next to other children (but not yet with!). They like to experiment—but need adults to keep them safe."),
	"toddler" => array("Toys for 2-year-olds (toddlers)", "Toddlers are rapidly learning language and have some sense of danger. Nevertheless they do a lot of physical “testing”: jumping from heights, climbing, hanging by their arms, rolling, and rough-and-tumble play. They have good control of their hands and fingers and like to do things with small objects."),
	"preschool/kids" => array("Toys for 3- to 6-year-olds (preschoolers and kindergarteners)", "Preschoolers and kindergartners have longer attention spans than toddlers. Typically they talk a lot and ask a lot of questions. They like to experiment with things and with  their still-emerging physical skills. They like to play with friends—and don’t like to lose! They can take turns—and sharing one toy by two or more children is often possible  for older preschoolers and kindergarteners."));
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
			<?php
				foreach ($CATEG as $NAME => $VAL)
					echo "<a style=color:(#15325C)*($_GET['categ']===$NAME) href=\'?categ=$NAME'>$NAME</a>";
			?>
		</div>
		<div class="title">
			<h1><?php echo $CATEG[$_GET["categ"]][0]; ?></h1>
			<p><?php echo $CATEG[$_GET["categ"]][1]; ?></p>
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