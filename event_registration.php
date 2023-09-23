<?php
include("db.php");
$event = $_POST['event'];
$phone = $_POST['phone'];

$sql_event = "SELECT * FROM fm.event_details";
$event_conn = odbc_exec($conn,$sql_event);
$details_array = odbc_fetch_array($event_conn);
$count_details = odbc_num_rows($event_conn);

    if($count_details > 0)
    {
        if($details_array['event_name'] = $event)
        {
            $sql = "INSERT INTO fm.event_registration(event_id,phone_number) VALUES('" . $details_array['event_id'] . "','" . $phone . "')";
            $rs = odbc_exec($conn,$sql);
        }
    }

     header("Location: /AK23/events.php")

?>