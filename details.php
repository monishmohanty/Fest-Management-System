<?php
include("db.php");
        if(isset($_POST['continue'])){
            $phone = $_POST['phone'];
            $pass = $_POST['password'];
        

            $sql = "SELECT * FROM fm.user_login WHERE phone_number = '$phone' AND user_password = '$pass'";
            $res = odbc_exec($conn,$sql);
            $num = odbc_num_rows($res);
            if ($num > 0)
            {
                
                while($row = odbc_fetch_array($res))
                {
                if($phone==isset($row['phone_number']))
                {
                    session_start();
                    $_SESSION['phone_number'] = $row['phone_number'];
                    header('Location: /AK23/events.php');
                }
            }
                
            }
            else{
                echo "Invalid Pasword";
                header('Location: /AK23/login.php');
            }
        }

        
    ?>