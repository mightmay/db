<?php
//this php code is used to create user type staff for this database store
include_once("config.php");



 
    $sql =  "INSERT INTO user (f_name, l_name, street, city, state, email, password, flag) 
VALUES ('man', 'nager', '23 str st', 'cc', 'WI', 'manager@manager.com', 'managerpassword', '3')";

    if($mysqli->query($sql)){
    echo"staff created: username=manager@manager.com password=managerpassword";}

?>

