<?php
/*
	This php file is used to create the databases and tables
*/


$serverAddress = 'mysql.cs.uky.edu';				// Address of the running server.

// *************************** IMPORTANT*************************************************
$DatabaseName = 'dle232';	// Name of the database, you should change this your username
//************************************************************************************

$mysqlUser = 'dle232';						// User name of the MySQL user which has been given permission of the database.
$mysqlPassword = 'u0816536';				// Password for the MySQL user.

// Check to ensure you can connect to the server.
$mysqli = new mysqli($serverAddress, $mysqlUser, $mysqlPassword,$DatabaseName);
if(!$mysqli){
	die("Could not connect to MySQL server" . mysql_error());
}

//Create the necessary tables

mysqli_query($mysqli, "CREATE TABLE IF NOT EXISTS products (id INT NOT NULL AUTO_INCREMENT, price DECIMAL(12,2), 
quantity INT, rate DECIMAL(12,2), product_name VARCHAR(40), product_desc TINYTEXT, product_img_name VARCHAR(40),
product_code VARCHAR(40),PRIMARY KEY (id))");

mysqli_query($mysqli, "CREATE TABLE IF NOT EXISTS user (u_id INT NOT NULL AUTO_INCREMENT, f_name VARCHAR(20),l_name VARCHAR(20),
state VARCHAR(20),city VARCHAR(20),street VARCHAR(20),email VARCHAR(25),password VARCHAR(25),flag INT,PRIMARY KEY (u_id))");

mysqli_query($mysqli, "CREATE TABLE IF NOT EXISTS orders (order_no INT NOT NULL AUTO_INCREMENT, u_id INT,Date DATE,status VARCHAR(15),
PRIMARY KEY (order_no))");

mysqli_query($mysqli, "CREATE TABLE IF NOT EXISTS orders_items(order_no INT,i_id INT,quantity INT,price decimal(12,2))");

?>
