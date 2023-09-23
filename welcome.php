
<html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  

    <title>Student login!</title>
  </head>
  <body>

<div class="hero">

  <video autoplay loop muted plays-inline class="back-video"> <source src="vid\bg1.mp4" type="video/mp4"></video> 
  <nav>
  <img src="img\logo.png">
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


  <h1> Welcome To Amrita Kalanjali 2023</h1>
  <br>
   <button onclick="window.location.href='register.php'"><a href="#">Register today</a></button>
   <br>
   <button onclick="window.location.href='login.php'"><a href="#">Login</a></button>
</div>
</div>
</body>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins','sans-serif';
}

.hero{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(12,3,51,0.3),rgba(12,3,51,0.3));
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
.content {
    text-align: center;
}
.content h1{
    color: white;
    font-size: 60px;
}
.content button{
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
.content button a{
    color:white;
    text-decoration: none;   
}
.back-video{
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: -1;
}

@media(min-aspect-ratio:16/9){
    .back-video{
        width: 100%;
        height: auto;
    }
}

@media(max-aspect-ratio:16/9){
    .back-video{
        width: auto;
        height: 100%;
    }
}
.hero2{
    background-color: blanchedalmond;
}
</style>
</html>