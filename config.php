<?php
$currency = '$'; //Currency sumbol or code
$db_username = 'dle232';
$db_password = 'u0816536';
$db_name = 'dle232';
$db_host = 'mysql.cs.uky.edu';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
/* check connection */


if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

?>
