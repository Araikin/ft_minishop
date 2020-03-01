<?php
include ("db.php");
session_start();
$conn = connect_db();
if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $passwd = hash("Whirlpool", mysqli_real_escape_string($conn, $_POST['passwd']));
    $passwd2 = hash("Whirlpool", mysqli_real_escape_string($conn, $_POST['passwd2']));

    if (empty($username) || empty($passwd) || empty($passwd2))
        echo "Fill all data\n";
    else if ($passwd != $passwd2)
        echo "Passwords do not match\n";
    else {
        $getit = "SELECT * FROM users WHERE username='$username'"; 
        $rows = mysqli_query($conn, $getit);
        echo mysqli_num_rows($rows);
        if (mysqli_num_rows($rows) == 1)
            echo "User already exists\n";
        else {
            add_user($conn, $username, $passwd);
            $_SESSION['username'] = $username;
            // $_SESSION['loggedin'] = 'You are now logged in.';
            echo "You are now logged in!\n";
            // header("Location: success.php");
        }

    }
        
}


?>