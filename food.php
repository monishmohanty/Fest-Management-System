<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .order-btn {
            background: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        .order-btn:hover {
            background: #0056b3;
        }

        .hero {
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(12, 3, 51, 0.3), rgba(12, 3, 51, 0.3));
            position: relative;
            padding: 0.5%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        nav {
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
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

        .content h1 {
            color: white;
            font-size: 60px;
        }

        .content button {
            color: black;
            align-items: center;
            background-color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 30px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 20px;
        }

        .content button:hover {
            background-color: wheat;
            color: white;
        }

        .content button a {
            color: white;
            text-decoration: none;
        }

        .back-video {
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: -1;
        }

        @media (min-aspect-ratio: 16/9) {
            .back-video {
                width: 100%;
                height: auto;
            }
        }

        @media (max-aspect-ratio: 16/9) {
            .back-video {
                width: auto;
                height: 100%;
            }
        }

        .hero2 {
            background-color: blanchedalmond;
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
                <li><a href="Dashboard.php">Dashboard</a></li>
                <li><a href="food.php">Food</a></li>
                <li><a href="fooddetails.php">Order Details</a></li>
                <li><a href="spon.php">Sponsorship</a></li>
                <li><a href="uploadimages.php">Upload images</a></li>
                <li><a href="report.php">Report</a></li>
            </ul>
        </nav>
        <div class="content">
            <h1>Food Menu</h1>
            <div class="container">
                <form action="order.php" method="post">
                    <div>
                        <label for="pizza">Pizza</label>
                        <input type="number" id="pizza" name="pizza" min="0" value="0">
                    </div>
                    <div>
                        <label for="burger">Burger</label>
                        <input type="number" id="burger" name="burger" min="0" value="0">
                    </div>
                    <div>
                        <label for="pasta">Pasta</label>
                        <input type="number" id="pasta" name="pasta" min="0" value="0">
                    </div>
                    <div>
                        <label for="icecream">Icecream</label>
                        <input type="number" id="icecream" name="icecream" min="0" value="0">
                    </div>
                    <div>
                        <label for="softdrink">Soft drink</label>
                        <input type="number" id="softdrink" name="softdrink" min="0" value="0">
                    </div>
                    <button type="submit" class="order-btn">Order</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
