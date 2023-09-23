<?php
include("db.php");
$email = $_POST['email'];
$pass = $_POST['password'];
$name = $_POST['name'];
$college = $_POST['college'];
$phone = $_POST['phone'];


    $sql = "INSERT INTO fm.user_login(phone_number,user_password,user_name,institution_name,email_id) VALUES('" . $phone . "','" . $pass . "','" . $name . "','" . $college . "','" . $email . "')";
    $rs = odbc_exec($conn,$sql);
header('location:/AK23/login.php');

   

?>