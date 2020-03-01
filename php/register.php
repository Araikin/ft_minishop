<?php
include ('connect_db.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="#">
</head>
<body>
    <form action="register.php" method="POST">
    <input type="text" name="username" placeholder="Enter username" value="<?php echo $username ?>"> 
    <input type="password" name="passwd" placeholder="Enter password">
    <input type="password" name="passwd2" placeholder="Confirm password" value="">
    <input type="submit" name="register" value="REGISTER">
    </form>
</body>
</html>
