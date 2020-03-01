<?php
include ("php/db.php");

$conn = connect_db();
$GLOBALS['conn'] = $conn;
mysqli_select_db($conn, $GLOBALS['db_username']);

if (table_exists($conn, 'users') === FALSE)
    create_table_users($conn);
?>
