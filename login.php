<?php

        $username = "dle232";
        $password = "u0816536";
        $dbname = "dle232";
        $server = "mysql.cs.uky.edu";//"mysql.cs.uky.edu";
        // Connecting to the SQL server at cs.uky.edu.
        $conn = mysqli_connect( $server, $username, $password, $dbname);
        if (!$conn) {
                 die("Connection failed: " . mysqli_connect_error);
        }
        
        function login($conn)
        {
session_start();           
      
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $queryl= "SELECT * FROM user WHERE email='$email' AND password='$pass'";
            $data = mysqli_query($conn, $queryl) or die("error querying" . mysqli_error($conn));
     
 if (mysqli_num_rows($data) > 0)
            {        
       $row = mysqli_fetch_array($data, MYSQLI_ASSOC);

  $_SESSION['email']= $row["email"];
 $_SESSION['name']= $row["f_name"];
          $_SESSION['user_id']= $row["u_id"];
        $_SESSION['flag']= $row["flag"];


  
             if ($_SESSION['flag'] == 1) {
                header("Location: http://cs.uky.edu/~dle232/index2.php");
                die;
            } elseif ($_SESSION['flag']  == 2) {
                header("Location: http://cs.uky.edu/~dle232/staff.php");
                die;
            } elseif ($_SESSION['flag'] == 3) {
                header("Location: http://cs.uky.edu/~dle232/manager.php");
              die;
            }else{echo $_SESSION['flag'];}
	}
	
	else{
			$return_url = "http://cs.uky.edu/~dle232/login.html";
                echo 'You entered wrong username or password';
               header('Location:'.$return_url);
		}
mysqli_close($conn);
       }
        
        if(isset($_POST['submit']))
        {
            
            login($conn);
        }
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login Complete</title>
    </head>
    <body>
    </body>
</html>
