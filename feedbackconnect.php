<?php
include("db.php");
$subject = $_POST['subject'];
$country = $_POST['country'];
$phone = $_POST['phone'];


    $sql = "INSERT INTO fm.feedback(phone_number,fb_event_name,fb_comment) VALUES('" . $phone . "','" . $country . "','" . $subject . "')";
    $rs = odbc_exec($conn,$sql);
    
    header("Location: /AK23/feedback.php ");
    
    
   

?>