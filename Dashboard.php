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

$Registered = false;

// Query to retrieve the user information from the database
$query = "SELECT *FROM fm.event_registration";
$result = sqlsrv_query($conn, $query);

// Check if the query executed successfully
if ($result === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Fetch the row from the result set
$row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

// Close the result set and the database connection
sqlsrv_free_stmt($result);
sqlsrv_close($conn);
?>

<!-- Rest of your HTML code -->

<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
<div class="hero">
<nav>
<img src="img\logo.png" class="logo">
<ul>
    <?php if (isset($_SESSION["logged_in"])): ?>
        <li><a href="welcome.php">Home</a></li>
      <li><a href="events.php">Events</a></li>
      <li><a href="feedback.php">Contact us</a></li> 
      <li><a href="Dashboard.php">Dashboard </a></li>
      <li><a href="food.php">Food </a></li>
      <li><a href="fooddetails.php">Order Details </a></li>
      <li><a href="spon.php">Sponsorship </a></li>
      <li><a href="uploadimages.php">Upload images </a></li>
      <li><a href="report.php">Report </a></li>
      <?php 
endif; 
?>
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
<div class="front">
    <br>
<p style="font-size:3vw;color:#CC6600">Basic Information</p>


<div class="field">
<div class="InfoField">
<p  style="font-size:2vw;color:#CC6600">Phone Number:</p>
</div>
<div class="InfoField">
<p style="font-size:2vw;color:#CC6600;"><?php echo $row['phone_number']; ?></p>
</div>
</div>

<div class="field">
<div class="InfoField">
<p  style="font-size:2vw;color:#CC6600">Event ID:</p>
</div>
<div class="InfoField">
<p style="font-size:2vw;color:#CC6600;"><?php echo $row['event_id']; ?></p>
</div>
</div>



<br>
<br>


<?php if ($Registered=False): ?>
    <p style="font-size:3vw;color:#CC6600">You havent Registered in any event yet, Register right away!</p>
    <?php 
endif; 
?>


    
</div>
</div>
</div>
</div>
</body>

<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins','sans-serif';
    background-color: black;
}
.popup {
  display: none;
  color:black;
  position: fixed;
  padding: 10px;
  width: 800px;
  left: 35%;
  margin-left: -150px;
  height: 600px;
  top: 25%;
  margin-top: -100px;
  background: black;
  background-color:black;
  border: 3px solid #FFA500;
  z-index: 20;
}

#popup:after {
  position: fixed;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: rgba(0,0,0,0.5);
  z-index: -2;
}
.front{

align-items: left;
justify-content: left;
text-align:left;
position: absolute;
vertical-align:top;
padding-left:20px;
top:10%;
}

.front .field{
    padding-top:30px;
    padding-left:400px;
}

.front .field .InfoField{
    padding-left: 45px;
    display: inline-block;
}

.InfoField{
    align-items:center;
}
.hero{
    width: 100%;
    height: 100vh;
    z-index = -1
    opacity = 0.8
    position: relative;
    padding: 0.5%;
    display: flex;
}
nav{
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

button {
    font-size: 1.25em;
    font-weight: bold;
    line-height: 0.3;
    text-transform: uppercase;
    position: relative;
    border: .1875em solid;
    padding: 1em;
    color: white;
    background: transparent;
    border-radius: .125em;
    transition: background .3s;
    
    &:hover,
    &:focus {
        color: orange;
        background: orange;
        border-color: white;
    }
    
    &:active {
        top: .08em;
    }
}

.svg-icon {
    /* Place the icon on the text baseline. */
    position: relative;
    top: .125em;

    /* Prevent the icon from shrinking inside a flex container. */
    flex-shrink: 0;

    /* Scale the icon to match the font-size of the parent element. */
    height: 1em;
    width: 1em;

    /* Let the icon take whatever color the parent has. */
    fill: currentColor;

    /*
     * If the icon is used on a link, which has a color transition,
     * we can also use a transition on the fill value.
    */
   transition: fill .3s;
}

/* Helper Class to hide text visually but keep it accessible for screen reader or other assistive software. */
.visually-hidden {
    // Move the text out of the flow of the container.
    position: absolute;
    
    // Reduce its height and width to just one pixel.
    height: 0.8px;
    width: 1px;
    
    // Hide any overflowing elements or text.
    overflow: hidden;
    
    // Clip the box to zero pixels.
    clip: rect(0, 0, 0, 0);
    
    // Text won't wrap to a second line.
    white-space: nowrap;
}
nav .logo{
    width: 80px;
}

nav ul li{
    list-style: none;
    display: inline-block;
    margin-left: 40px;
}

nav ul li a{
    text-decoration: none;
    color: #CC6600;
    font-size: 17px;
}
    </style>