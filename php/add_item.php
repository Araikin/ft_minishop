<?php
include ('connect_db.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Add item</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
		<div class="register">
			<div>
				<a href='../index.php'>
					<img id="logo1" src="../src/logo.png" width="10%" />
					<img id="logo2" src="../src/logo2.png" width="20%" />
				</a>
			</div>
			<h1 style='font-size:larger'>Add New Item</h1>
			<p style='font-size:smaller'>Add item is easy. Just fill all! fields in the form below.</p>
			<div>
				<div id="login">
					<form action="add_item.php" method="POST">
						<input type="text" name="name" placeholder="Item name" /> 
						<input type="text" name="price" placeholder="Item price" />
						<select type="text" name="category" placeholder="Item category" required>
							<option value="newborn">Newborn</option>
							<option value="infant">Infant</option>
							<option value="1 year">1 year</option>
							<option value="toddler">Toddler</option>
							<option value="prechool/kids">Preschool/Kids</option>
						</select>
						<input type="text" name="img-url" placeholder="Image url" />
						<input type="submit" name="add_item" value="ADD ITEM" />
						<p><?php include('errors.php'); ?></p>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>