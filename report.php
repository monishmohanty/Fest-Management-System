<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Registration Report</title>
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

        #registration-report {
            font-size: 20px;
            color: #333;
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
            <h2>Registration Report for College Fest</h2>
            <div id="registration-report">
                <!-- PHP code goes here -->
            </div>
        </div>
    </div>
</body>
<head>
    <title>Registration Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        #registration-report {
            font-size: 24px;
            margin-top: 20px;
        }
    </style>
    <?php
    include("db.php"); // Assuming this file contains your database connection code

    $sql = "SELECT * FROM fm.user_login";
    $rs = odbc_exec($conn, $sql);

    // Check if the query was successful
    if ($rs) {
        // Create an empty array to store the fetched rows
        $rows = array();

        // Loop through the result set and store each row in the array
        while ($row = odbc_fetch_array($rs)) {
            $rows[] = $row;
        }

        // Free the result set
        odbc_free_result($rs);
    } else {
        // Handle the case when the query fails
        echo "Error executing the SQL query: " . odbc_errormsg($conn);
    }

    // Close the database connection
    odbc_close($conn);
    ?>
</head>
<body>
    <!-- <h2>Registration Report for College Fest</h2> -->
    
    <div id="registration-report">
        <?php
        // Display the number of rows fetched from the table
        echo "Number of Registered Users: " . count($rows);

        // Display the entries from the table
        foreach ($rows as $row) {
            echo "<p>";
            echo "Phone Number: " . $row['phone_number'] . "<br>";
            echo "Password: " . $row['user_password'] . "<br>";
            echo "User Name: " . $row['user_name'] . "<br>";
            echo "Institution Name: " . $row['institution_name'] . "<br>";
            echo "Email ID: " . $row['email_id'] . "<br>";
            echo "</p>";
        }
        ?>
    </div>

</body>
</html>
