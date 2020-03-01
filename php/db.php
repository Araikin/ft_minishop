<?php
$GLOBALS['server'] = 'remotemysql.com:3306';
$GLOBALS['db_username'] = 'LaWsYh3Pc4';
$GLOBALS['db_passwd'] = 'AhHRXEXpHr';

function connect_db() {
    $conn = mysqli_connect($GLOBALS['server'], $GLOBALS['db_username'], $GLOBALS['db_passwd']);
    if (!$conn)
        die('Could not connect: ' . mysqli_error());
    mysqli_select_db($conn, $GLOBALS['db_username']);
    return $conn;
}

function table_exists($conn, $tbl_name) {
    $sql = "SHOW TABLES LIKE $tbl_name";
    $result = $conn->query($sql);
    return ($result > 0);
}

function create_table_users($conn) {
    $sql = "CREATE TABLE users( " .
            "username VARCHAR(100) NOT NULL, " .
            "password VARCHAR(128) NOT NULL, " .
            "PRIMARY KEY ( username )); ";
    mysqli_query($conn, $sql)
    or die('Could not create table: ' . mysqli_error($conn));
}

function add_user($conn, $username, $passwd) {
    $sql = "INSERT INTO users " .
            "(username, password) " . "VALUES" .
            "('$username','$passwd')";
    mysqli_query($conn, $sql)
    or die('Could not enter data: ' . mysqli_error($conn));
}

?>
