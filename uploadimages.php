<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Image Upload</title>
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

        input[type="file"] {
            display: block;
            width: 80%;
            margin: 10px auto;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .preview {
            margin: 10px auto;
            width: 80%;
            max-height: 500px;
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
            <h2>Upload an Image</h2>
            <input type="file" id="image-upload" accept="image/*">
            <img id="preview" class="preview">
        </div>
    </div>
    <script>
        document.getElementById('image-upload').addEventListener('change', function (event) {
            var file = event.target.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('preview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>
