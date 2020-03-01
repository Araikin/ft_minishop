<?php
include ('connect_db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="#">
</head>
<body>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Enter username" value=""> 
        <input type="password" name="passwd" placeholder="Enter password" value="">
        <input type="submit" name="register" value="LOGIN">
    </form>
</body>
</html>