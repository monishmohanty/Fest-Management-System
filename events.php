<?php

session_start();

include("db.php");

if(isset($_SESSION['phone_number'])){

?>

   
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
<li><a href="welcome.php">Home</a></li>
      <li><a href="events.php">Events</a></li>
      <li><a href="feedback.php">Contact us</a></li> 
      <li><a href="Dashboard.php">Dashboard </a></li>
      <li><a href="food.php">Food </a></li>
      <li><a href="fooddetails.php">Order Details </a></li>
      <li><a href="spon.php">Sponsorship </a></li>
      <li><a href="uploadimages.php">Upload images </a></li>
      <li><a href="report.php">Report </a></li> 
      <!-- <li><a href="login.php">Logout </a></li>  -->
</ul>
<ul>
    
    
 
</div>
<div class="maindiv"></div>
<div class="event">
<section class="one">
<div id="containerIntro" >
    <h1 style="color:white;" >Abhinaya: The Drama Club presents nautanki</h1>
    <img src="img/nautanki.png" width="500" height="600" padding="20px" class="center">
    <p><p style="color:white;font-size:25px">Event Description <br><br>
Roll the dice of magic with 3 of your friends
But do not fret for that's not where the fun end
In a land of magic and mystery
You stand a chance to gain the sweet taste of victory
Come say hi and do yourself a favor
Sign up on spot and the excitement you shall savor
The name of this beautiful land is ABHINAYA
Jahan par sabko maza aaya
The festival of joy named NAUTANKI
Chalo dekhen ye trophy kiske naam hogi
Sudhamani hall on 14th November
For a day you shall always remember
Try to make it on time
As the game starts at 9
Abhinaya: The Drama Club presents
Nautanki: Welcome to Drama
A game of chance, and luck. But luck can only get you so far. ACT! ACT! and
ACT! On this Stage of Life. For on this board...."</p>
<p style="color:white;font-size:25px">
    For more details Contact<br><br>
    Harsh Kumar Singh: +91 70003 30883<br>
    Shubha S: +91 93805 99860<br>
</p>
<div class="centre">
<button onclick="show('popup')"><a href="#">Click Here to register</a></button>
</div>
</div>
</section>    

<div class="popup" id="popup">
    <br>
<h1 align="center" style="color:white"> Register For Nautanki! </h1>
<br>
<br>
<form action="event_registration.php" method = "POST">
<div class="padding">
<div class="form-group row">
<label style="color:white" for="Event Name" class="col-sm-2 col-form-label">Event Name</label>
<div class="col-sm-10">
<input type="text"  class="form-control-plaintext" id="event" placeholder="Nautanki" name="event" required>
</div>
</div>  
</div>
<div class="padding">
  <div class="form-group row">
    <label style="color:white" for="Name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="inputName" placeholder="name" name="name" required>
    </div>
  </div>
</div>
<div class="padding">
  <div class="form-group row">
    <label style="color:white" for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" placeholder="abc@gmail.com" name="email" required>
    </div>
  </div>
</div>
<div class="padding">
  <div class="form-group row">
    <label style="color:white" class="col-sm-2 col-form-label" for="exampleInputPhone">Phone No</label>
    <div class="col-sm-10">
    <input type="number" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp" placeholder="Enter Phone" name="phone" required>
  </div>
</div>
</div>
<div class="centre"> 
<button onclick="window.location.href='events.php'"><a href="#">Go back</a></button>
<button style="color:white" name="submit" type="submit" class="btn btn-primary">Register</button>
</div>
</div>
</form> 


    <div class="popup" id="popup">
    <div class="error">
  <h1 align="center" style="color:white">You need to Login to register for events</h1>
  <div class="centre"> 
  <button onclick="window.location.href='login.php'"><a href="#">Login</a></button>
  <button onclick="window.location.href='events.php'"><a href="#">Go back</a></button>
</div>
</div>
</div>

<section class="two">
<div id="containerIntro" >
    <h1 style="color:white">Dhwani: The literatry club presents Icon</h1>
    <img src="img/icon.png" width="500" height="600" padding="20px" class="center">
    <p><p style="color:white; font-size:25px">Event Description<br>
    <br>
"Appearances make Impressions but Personalities make an impact"<br><br>
Dhwani means voice and we at dhwani wish to provide everyone a stage
to voice out. Icon is our flagship event which puts you through few of
the most exciting rounds. The 4 round contest tests your spontaneity ,
creativity and personality. The one who manages to clear all the rounds
is titled as the Fresher of the year.
Each round is uniquely built to bring out the best in you. Do you think
that your personality stands out among the crowd? Are you filled with
creativity? Do you have it in you to be the fresher of the year? Well, Icon
is your sport then!</p>
<p style="color:white;font-size:25px">
    For more details Contact<br><br>
    Varun Kulkarni: +91 81978 70997<br>
    Aditi S: +91 6362 953 740<br>
    Aryan: +91 91545 46070
</p>
<div class="centre">
<button onclick="show('popup2')" ><a href="#">Click Here to register</a></button>
</div>
</div>


<div class="popup2" id="popup2">
    <br>
<h1 align="center" style="color:white"> Register For Icon! </h1>
<br>
<br>
<form action="event_registration.php" method = "POST">
<div class="padding">
<div class="form-group row">
<label style="color:white" for="Event Name" class="col-sm-2 col-form-label">Event Name</label>
<div class="col-sm-10">
<input type="text"  class="form-control-plaintext" id="event" placeholder="Icon: Fresher of The Year" name="event" required>

</div>
</div>
</div>
<div class="padding">
  <div class="form-group row">
    <label style="color:white" for="Name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="inputName" placeholder="name" name="name" required>
    </div>
  </div>
</div>
<div class="padding">
  <div class="form-group row">
    <label style="color:white" for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" placeholder="abc@gmail.com" name="email" required>
    </div>
  </div>
</div>
<div class="padding">
  <div class="form-group row">
    <label style="color:white" class="col-sm-2 col-form-label" for="exampleInputPhone">Phone No</label>
    <div class="col-sm-10">
    <input type="number" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp" placeholder="Enter Phone" name="phone" required>
  </div>
</div>
</div>
<div class="centre"> 
<button onclick="window.location.href='events.php'"><a href="#">Go back</a></button>
<button style="color:white"  type="submit" class="btn btn-primary">Register</button>
</div>
</div>
</form> 


<div class="popup2" id="popup2">
    <div class="error">
  <h1 align="center" style="color:white">You need to Login to register for events</h1>
  <div class="centre"> 
  <button onclick="window.location.href='login.php'"><a href="#">Login</a></button>
  <button onclick="window.location.href='events.php'"><a href="#">Go back</a></button>
</div>
</div>
</div>

</section>

<section class="three">
<div id="containerIntro" >
    <h1 style="color:white">Raaga: The music club presents Harmonic Flair</h1>
    <img src="img/raaga.png" width="500" height="600" padding="20px" class="center">
    <p><p style="color:white; font-size:25px">Event Description<br>
    <br>
"“Music is the language of the spirit. It opens the secret of life
bringing peace, abolishing strife.
” — Kahlil Gibran<br><br>
Where the words fail, music does the job, they say!
Do you have a voice that can resonate with the masses? Do you
have that itch to play that sweet tune on your instrument of choice?
Then dont miss this opportunity!
Whether you wanna perform western or classical, solo or group,
when we say open for all, we do mean it in every sense of the word!
So what are you waiting for? Register now and we cant wait to see
what tunes you come up with!</p>
<p style="color:white;font-size:25px">
    For more details Contact<br><br>
    Aditya Maanas:+91 89782 54001<br>
    Sheetal: +91 70190 12767<br>
    Manogna: +91 93464 96041
</p>
<div class="centre">
<button onclick="show('popup3')" ><a href="#">Click Here to register</a></button>
</div>
</div>
</section>

<div class="popup3" id="popup3">
    <br>
<h1 align="center" style="color:white"> Register For Harmonic Flair! </h1>
<br>
<br>
<form action="event_registration.php" method = "POST">
<div class="padding">
<div class="form-group row">
<label style="color:white" for="Event Name" class="col-sm-2 col-form-label">Event Name</label>
<div class="col-sm-10">
<input type="text"  class="form-control-plaintext" id="event" placeholder="Harmonic Flair" name="event" required>

</div>
</div>
</div>
<div class="padding">
  <div class="form-group row">
    <label style="color:white" for="Name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="inputName" placeholder="name" name="name" required>
    </div>
  </div>
</div>
<div class="padding">
  <div class="form-group row">
    <label style="color:white" for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" placeholder="abc@gmail.com" name="email" required>
    </div>
  </div>
</div>
<div class="padding">
  <div class="form-group row">
    <label style="color:white" class="col-sm-2 col-form-label" for="exampleInputPhone">Phone No</label>
    <div class="col-sm-10">
    <input type="number" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp" placeholder="Enter Phone" name="phone" required>
  </div>
</div>
</div>
<div class="centre"> 
<button onclick="window.location.href='events.php'"><a href="#">Go back</a></button>
<button style="color:white"  type="submit" class="btn btn-primary">Register</button>
</div>
</div>
</form> 

<div class="popup3" id="popup3">
    <div class="error">
  <h1 align="center" style="color:white">You need to Login to register for events</h1>
  <div class="centre"> 
  <button onclick="window.location.href='login.php'"><a href="#">Login</a></button>
  <button onclick="window.location.href='events.php'"><a href="#">Go back</a></button>
</div>
</div>
</div>

<section class="four">
<div id="containerIntro" >
    <h1 style="color:white">Narthana: The dance club presents Group Dance</h1>
    <img src="img/dance.png" width="500" height="600" padding="20px" class="center">
    <p><p style="color:white; font-size:25px">Event Description<br>
    <br>
    Listen.. Listen.. Listen!<br>
All the Dancers.. Listen!<br><br>
Narthana - The Dance Club is coming up with a competition you
wouldn't have thought of. For this Kalakriti, come showcase your
dance skills with a Group dance competition!<br><br>
Song Limit: 03:00 - 06:00 minutes<br>
Venue: B and C block stage<br>
Time: 1:40PM - 4:00 PM<br>
The judging criteria would be:<br>
• Originality<br>
• Technicality<br>
• Costume<br>
• Choreography<br>
• Overall impact<br>
We are waiting!</p>
<p style="color:white;font-size:25px">
    For more details Contact<br><br>
    Chinchu:+91 95858 18599<br>
    Achutha: +91 70937 18773<br>
    Ammu: +91 97396 65314
</p>
<div class="centre">
<button  onclick="show('popup4')" ><a href="#">Click Here to register</a></button>
</div>
</div>
</section>

<div class="popup4" id="popup4">
    <br>
<h1 align="center" style="color:white"> Register For Group Dance! </h1>
<br>
<br>
<form action="event_registration.php" method = "POST">
<div class="padding">
<div class="form-group row">
<label style="color:white" for="Event Name" class="col-sm-2 col-form-label">Event Name</label>
<div class="col-sm-10">
<input type="text"  class="form-control-plaintext" id="event" placeholder="Group dance" name="event" required>
</div>
</div>
</div>
<div class="padding">
  <div class="form-group row">
    <label style="color:white" for="Name" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="inputName" placeholder="name" name="name" required>
    </div>
  </div>
</div>
<div class="padding">
  <div class="form-group row">
    <label style="color:white" for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail" placeholder="abc@gmail.com" name="email" required>
    </div>
  </div>
</div>
<div class="padding">
  <div class="form-group row">
    <label style="color:white" class="col-sm-2 col-form-label" for="exampleInputPhone">Phone No</label>
    <div class="col-sm-10">
    <input type="number" class="form-control" id="exampleInputPhone" aria-describedby="emailHelp" placeholder="Enter Phone" name="phone" required>
  </div>
</div>
</div>
<div class="centre"> 
<button onclick="window.location.href='events.php'"><a href="#">Go back</a></button>
<button style="color:white"  type="submit" class="btn btn-primary">Register</button>
</div>
</div>
</form> 

 
 <div class="popup4" id="popup4">
    <div class="error">
  <h1 align="center" style="color:white">You need to Login to register for events</h1>
  <div class="centre"> 
  <button onclick="window.location.href='login.php'"><a href="#">Login</a></button>
  <button onclick="window.location.href='events.php'"><a href="#">Go back</a></button>
</div>
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
.form-control-plaintext{
    background: white;
    width: 500px;
    border: 3px solid #FFA500;
}
.form-control{
    width: 500px;
    border: 3px solid #FFA500;
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
.maindiv{
    width: 50%;
    align-items: center;
    justify-content: center;
    height: 600px;
    position: absolute;
    vertical-align:top;
    left:25%;
    top:15%;
    bottom:10%;
    background-image:url("img/icon.jpeg");
    background-size:100% 100%;
    box-shadow:1px 2px 10px 5px #CC6600;
    animation:slider 15s infinite linear;
}

@keyframes slider {
    15%{background-image:url('img/icon.png');}
    30%{background-image:url('img/dance.png');}
    50%{background-image:url("img/icon.jpeg");}
    65%{background-image:url("img/raaga.png");}
    80%{background-image:url("img/nautanki.png");}
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

.event button{
    color: #9F2B68;
    align-items: center;
    background-color: #9F2B68;
    padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 20px;
}
.event button:hover {
    background-color: wheat;
    color: white;
  }
.event button a{
    color:white;
    text-decoration: none;   
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

#popup:before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: black;
  z-index: -1;
}

.popup2 {
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

#popup2:after {
  position: fixed;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: rgba(0,0,0,0.5);
  z-index: -2;
}

#popup2:before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: black;
  z-index: -1;
}

.popup3 {
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

#popup3:after {
  position: fixed;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: rgba(0,0,0,0.5);
  z-index: -2;
}

#popup3:before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: black;
  z-index: -1;
}
.popup4 {
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

#popup4:after {
  position: fixed;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: rgba(0,0,0,0.5);
  z-index: -2;
}

#popup4:before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: black;
  z-index: -1;
}
/* Styling buttons & webpage */

body {
  background: offwhite;
  font-family: Arial, sans-serif;

}

button {
    margin-top: 50px;
    background-color: rgba(255,255,255,0.3);
    border: 3px solid #F04A49;
    color: #F04A49;
    font-size: 25px;
    padding: 10px 20px;
    
}
.error{
    padding-top: 30%;
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


.popupk {
  display: none;
  position: fixed;
  padding: 10px;
  width: 280px;
  left: 50%;
  margin-left: -150px;
  height: 180px;
  top: 50%;
  margin-top: -100px;
  background: #FFF;
  border: 3px solid #F04A49;
  z-index: 20;
}

#popupk:after {
  position: fixed;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: rgba(0,0,0,0.5);
  z-index: -2;
}

#popupk:before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: #FFF;
  z-index: -1;
}





    </style>
  
  <?php
}
?>

</html>