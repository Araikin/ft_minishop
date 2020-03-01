<?php
session_start();
include ("php/db.php"); 
$conn = connect_db();
$GLOBALS['conn'] = $conn;
mysqli_select_db($conn, $GLOBALS['db_username']);
?>
