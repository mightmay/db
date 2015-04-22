<?php
//this php code is used to create user type staff for this database store
include_once("config.php");



 
    $sql =  "INSERT INTO user (f_name, l_name, street, city, state, email, password, flag) 
VALUES ('stafff', 'staffl', '123 str st', 'nyc', 'HI', 'staff@staff.com', 'staffpassword', '2')";

    if($mysqli->query($sql)){
    echo"staff created: username=staff@staff.com password=staffpassword";}

?>

