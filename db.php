<?php

$conn = odbc_connect(
    "DRIVER={SQL Server};Server=PANCHAMI;Database=master",
    "prod_fm", "pwd4prod_fm");
  if (!($conn)) {
    echo "<p>Connection to DB via ODBC failed: ";
    echo odbc_errormsg ($conn );
    echo "</p>\n";
  }
 
?>
