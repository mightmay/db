<?php

//session_start();
//include_once("config.php");


        $username = "dle232";
        $password = "u0816536";
        $dbname = "dle232";
        $server = "mysql.cs.uky.edu";//"mysql.cs.uky.edu";
        // Connecting to the SQL server at cs.uky.edu.
        $conn = mysqli_connect( $server, $username, $password, $dbname);
        if (!$conn) {
                 die("Connection failed: " . mysqli_connect_error);
        }


function login($conn) {


    session_start();

$inemail = $_POST['email'];
$inpassword = $_POST['password'];


   if (!empty($_POST['email'])) { 
       $getInfo = mysqli_query($conn, "SELECT * FROM user WHERE email = '$inemail' AND password = '$inpassword';")
 or die("error querying".mysqli_error($conn));
        $row = mysqli_fetch_array($getInfo) or die("error fetching" . mysqli_error($conn));
      

 if (!empty($row['email']) AND !empty($row['password'])) {
            $_SESSION['email'] = $row['password'];
            $_SESSION['name'] = $row['f_name'];
            $_SESSION['user_id'] = $row['u_id'];
            $_SESSION['flag'] = $row['flag'];
            if ($row['flag'] == 1) {
                header("Location: http://cs.uky.edu/~dle232/index2.php");
                die;
            } elseif ($row['flag'] == 2) {
                header("Location: http://cs.uky.edu/~dle232/staff.php");
                die;
            } else {
                header("Location: http://cs.uky.edu/~dle232/manager.php");
                die;
            }
        } else {
            echo "Incorrect Username or Password Entered";
        }
   }
}

if (isset($_POST['submit'])) {
    login($conn);
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Logging In</title>
    </head>
    <body>
    </body>
</html>

