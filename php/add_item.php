<?php
include ('connect_db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add item</title>
    <link rel="stylesheet" href="#">
</head>
<body>
    <form action="add_item.php" method="POST">
        <input type="text" name="name" placeholder="Item name"> 
        <input type="text" name="price" placeholder="Item price"> 
        <input type="text" name="category" placeholder="Item category">
        <input type="submit" value="ADD ITEM" name="add_item">
    </form>
</body>
</html>