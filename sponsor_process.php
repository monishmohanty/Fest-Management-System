<?php
include("db.php");
$companyname = $_POST['companyname'];
$det = $_POST['det'];
$amount = $_POST['amount'];

$sponsorname = $_POST['sponsorname'];


    $sql = "INSERT INTO fm.sponsorship(company_name,det,amount,sponsor_name) VALUES('" . $companyname . "','" . $det . "','" . $amount . "','" . $sponsorname . "')";
    $rs = odbc_exec($conn,$sql);
header('location:/AK23/spon.php');

   

?>