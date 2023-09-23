<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Sponsorship Form</title>
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

        input {
            display: block;
            width: 80%;
            margin: 10px auto;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            display: block;
            padding: 10px;
            width: 80%;
            margin: 10px auto;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
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
            <h2>Sponsorship Form</h2>
            <form action="sponsor_process.php" method="POST">
                <input type="text" name="companyname" placeholder="Company name" required>
                <input type="text" name="det" placeholder="Description" required>
                <input type="number" name="amount" placeholder="Amount sponsoring" required>
                <input type="text" name="sponsorname" placeholder="Sponsor name" required>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>
