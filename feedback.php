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
</div>
<div class="front">
<p  style="font-size:9vw;color:#CC6600">Your Feedback Matters!</p>
</div>

<div class="section">
<div class="padding">
    <h1 style="color:white">Fill up this feedback form </h1>
</div>
<br>
    <div class="padding-side">
    <form action="feedbackconnect.php" method = "POST">

    <label  style="color:white" for="inputNumber"> Number</label>
    <input  style="color:white" type="tel" id="inputNumber" name="phone" placeholder="Your number.." required>
<br>
    <label  style="color:white" for="country">Which Event Did you attend?</label>
    <select style="color:white" id="country" name="country" required>
      <option style="color:white" value="Nautanki">Nautanki</option>
      <option style="color:white" value="Icon">Icon</option>
      <option  style="color:white" value="Harmonic Flair">Harmonic Flair</option>
      <option  style="color:white" value="Group Dance">Group Dance</option>
      <option  style="color:white" value="General">General Feedback</option>
    </select>

    <label  style="color:white" for="subject">Tell us what you feel</label>
    <textarea  id="subject" name="subject" placeholder="Write something.." style="height:200px;color:white" required></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
</div>

<div class="section">
<div class="padding">
    <br>
    <br>
    <br>
    <br>
    <h1 style="color:white">Meet The Team</h1>
    <br>
    <div class="row">
  <div class="column">
    <div class="card">
      <img src="img/monish.png" alt="Jane" style="width:100%; height:70%">
      <div class="container">
        <h2 style="color:white; text-align:center">Monish</h2>
        <p style="color:white; text-align:center" class="title">Product Owner</p>
        <p style="color:white; text-align:center">Monish, a visionary product owner, creates innovative solutions with strategic thinking, excellent communication, and a passion for user-centric products. He shares his expertise through writing, inspiring others in the industry.</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/sathvik.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2 style="color:white; text-align:center">Sathvik</h2>
        <p style="color:white; text-align:center" class="title">Front end d eveloper</p>
        <p style="color:white; text-align:center">Sathvik is a skilled front-end developer who excels at creating captivating user interfaces. With a strong eye for design and attention to detail, he crafts seamless and engaging digital experiences.</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/panchami.png" alt="John" style="width:100%">
      <div class="container">
        <h2 style="color:white; text-align:center">Panchami</h2>
        <p style="color:white; text-align:center" class="title">Back end developer</p>
        <p style="color:white; text-align:center">Panchami is a highly skilled back-end developer who excels at building robust and scalable server-side applications. With expertise in programming languages and databases, he ensures the smooth functioning and optimal performance of web applications.</p>
        
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <img src="img/nitish.png" alt="Jane" style="width:100%; height:70%">
      <div class="container">
        <h2 style="color:white; text-align:center">Nithish</h2>
        <p style="color:white; text-align:center" class="title">Middle ware developer </p>
        <p style="color:white; text-align:center">Nitish is a proficient middleware developer who specializes in integrating systems and ensuring smooth communication between different components. With expertise in middleware technologies, she ensures efficient and reliable data flow for seamless operations.</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/sushma.png" alt="Jane" style="width:100%; height:70%">
      <div class="container">
        <h2 style="color:white; text-align:center">Sushma</h2>
        <p style="color:white; text-align:center" class="title">Scrum Master</p>
        <p style="color:white; text-align:center">Sushma is an experienced Scrum Master who excels at facilitating effective teamwork and ensuring the successful implementation of Agile methodologies. With strong leadership and organizational skills, she guides the team towards delivering high-quality products and achieving project goals.</p>
        
      </div>
    </div>
  </div>
</body>

<script>
    $ = function(id) {
  return document.getElementById(id);
}

var show = function(id) {
	$(id).style.display ='block';
}
var hide = function(id) {
	$(id).style.display ='none';
}
    </script>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins','sans-serif';
    background-color: black;
    background: -ms-linear-gradient(to top bottom, black, white);
}
.padding{
    padding: 10px;
    padding-left: 20px;
    margin-left:8%;
    align: center;
    align-items: center;
}
.padding-side{
    padding-left: 200px;
    padding-right: 80px;
}
.form-control-plaintext{
    background: white;
    width: 500px;
    border: 3px solid #FFA500;
}
.container{
    background-color:black;
}
.form-control{
    width: 500px;
    border: 3px solid #FFA500;
}

.one{
    padding: 10%;
}

input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #CC6600; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}
.section .h1{
    padding-left:40px;
}
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}


.hero{
    width: 100%;
    height: 100vh;
    z-index = -1
    opacity = 0.8
    position: relative;
    padding: 0.5%;
    display: flex;
    align-items: center;
    justify-content: center;
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
.front{

    align-items: center;
    justify-content: center;
    
    position: absolute;
    vertical-align:top;
    padding-left:80px;
    padding-right:40px;
    top:10%;

}


    .event {
    padding-top:3%;
}
.two{
    margin-top:3%;
}
.three{
    margin-top:5%;
}
.four{
    margin-top:20%;
}
section {
    align-items: center;
    justify-content: center;
    background-color:black;
  height: 180vh;
  display: flex;
  left:5%;
  top:5%;
  right: 5%;
 padding: 100px;
 align:center;
}
.center {
  margin-top:3% ;
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-bottom:3%;
  width: 50%;
  
}
.centre {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
}



button {
    margin-top: 50px;
    background-color: rgba(255,255,255,0.3);
    border: 3px solid #F04A49;
    color: #F04A49;
    font-size: 25px;
    padding: 10px 20px;
    
}

button:hover {
    background-color: #F04A49;
    color: #FFF;
    border: 3px solid #F04A49;
    transition: all 0.3s ease 0s;
}

p {
	margin: 1em 0;
  font-size: 16px;
}





    </style>
</html>
