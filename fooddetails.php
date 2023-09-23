<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Order Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            text-align: center;
        }

        th, td {
            padding: 10px;
            border: 1px solid black;
        }

        nav {
            width: 100%;
            padding: 20px 8%;
            display: flex;
            background-color: black;
            align-items: center;
            justify-content: space-between;
        }

        nav .logo {
            width: 80px;
        }

        nav ul li {
            list-style: none;
            display: inline-block;
            margin-left: 40px;
        }

        nav ul li a {
            text-decoration: none;
            color: #CC6600;
            font-size: 17px;
        }

        .content {
            text-align: center;
        }

        .content h2 {
            color: black;
            font-size: 40px;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <div class="hero">
        <nav>
            <img src="img\logo.png" class="logo">
            <ul>
                <li><a href="welcome.php">Home</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="feedback.php">Contact us</a></li>
                <li><a href="Dashboard.php">Dashboard </a></li>
                <li><a href="food.php">Food </a></li>
                <li><a href="fooddetails.php">Order Details </a></li>
                <li><a href="spon.php">Sponsorship </a></li>
                <li><a href="uploadimages.php">Upload images </a></li>
                <li><a href="report.php">Report </a></li>
            </ul>
        </nav>
        <div class="content">
            <h2>Orders Report</h2>

            <table>
                <thead>
                    <tr>
                        <th>Pizza</th>
                        <th>Burger</th>
                        <th>Pasta</th>
                        <th>Ice Cream</th>
                        <th>Soft Drinks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Database connection
                    $serverName = "PANCHAMI";
                    $connectionOptions = array(
                        "Database" => "master",
                        "Uid" => "prod_fm",
                        "PWD" => "pwd4prod_fm"
                    );

                    // Establishes the connection
                    $conn = sqlsrv_connect($serverName, $connectionOptions);

                    // Check the connection
                    if ($conn === false) {
                        die(print_r(sqlsrv_errors(), true));
                    }

                    // Fetch data from orders table
                    $sql = "SELECT * FROM fm.orders";
                    $stmt = sqlsrv_query($conn, $sql);

                    // Display the data in the table
                    if ($stmt !== false) {
                        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                            echo "<tr>";
                            echo "<td>" . $row['pizza'] . "</td>";
                            echo "<td>" . $row['burger'] . "</td>";
                            echo "<td>" . $row['pasta'] . "</td>";
                            echo "<td>" . $row['icecream'] . "</td>";
                            echo "<td>" . $row['softdrink'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        die(print_r(sqlsrv_errors(), true));
                    }

                    // Close the connection
                    sqlsrv_free_stmt($stmt);
                    sqlsrv_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
