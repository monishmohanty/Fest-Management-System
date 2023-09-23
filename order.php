<?php
$serverName = "PANCHAMI";
$connectionOptions = array(
    "Database" => "master",
    "Uid" => "prod_fm",
    "PWD" => "pwd4prod_fm"
);

// Establish the connection to SQL Server
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Check if the connection is successful
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

$pasta_qty = isset($_POST['pasta']) ? $_POST['pasta'] : 0;
$icecream_qty = isset($_POST['icecream']) ? $_POST['icecream'] : 0;
$softdrink_qty = isset($_POST['softdrink']) ? $_POST['softdrink'] : 0;


$pizza_qty = $_POST['pizza'];
$burger_qty = $_POST['burger'];
$pasta_qty = $_POST['pasta'];
$icecream_qty = $_POST['icecream'];
$softdrink_qty = $_POST['softdrink'];
// add more variables here as needed...

// Assuming you have an `orders` table with columns for each food item
$sql = "INSERT INTO fm.orders (pizza, burger, pasta, icecream, softdrink) VALUES (?, ?, ?, ?, ?)"; // add more parameters as needed...
$params = array($pizza_qty, $burger_qty, $pasta_qty, $icecream_qty, $softdrink_qty); // ...and here too

$stmt = sqlsrv_query($conn, $sql, $params);

if($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

echo "Order placed successfully!";
header("Location: /AK23/food.php")
?>
