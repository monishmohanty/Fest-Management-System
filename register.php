

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Student login!</title>
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
<div class="card" top="10%" style="width: 40rem;">
  <div class="card-body">
  <h1 style="color:white";>Register yourself for the fest today!</h1>   
  <form action="connect.php" method = "POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <h5 for="inputEmail4" style="color:white">Email</h5>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required>
    </div>
    <div class="form-group col-md-6">
      <h5 for="inputPassword4" style="color:white">Password</h5>
      <input type="password" class="form-control" id="inputPassword4" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="Password" name="password" required>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
  <h5 for="inputPassword4" style="color:white">Confirm Password</h5>
      <input type="password" class="form-control" id="confirmPass" placeholder="cPassword" name="cpassword" required>
  </div>
  <div class="form-group col-md-6">
    <h5 for="inputName" style="color:white">Name</h5>
    <input type="text" class="form-control" id="Name" placeholder="Enter your name" name="name" required>
  </div>
  </div>
  <div class="form-row" >
    <div class="form-group col-md-6">
      <h5 for="inputCollege" style="color:white">College</h5>
      <input type="text" class="form-control" id="inputCollege" name="college" required>
</div>
<div class="form-group col-md-6">
      <h5 for="inputNumber" style="color:white">Phone Number</h5>
      <input type="tel" class="form-control" id="inputNumber" name="phone" required>
    
    <div class="form-group col-md-6">
  </div>
  </div>
  <div class="form-group col-md-6">
    <centre>
  <button type="submit" class="btn btn-primary">Sign in</button>
  <hr>
  <button type="login" class="btn btn-primary" onclick="window.location.href='login.php'">Have an account already? log in</button>
  <centre>
  </div>
</form>
  </div>
  <div id="message">
  <h3 style="color:white;">Password must contain the following:</h3>
  <p id="letter" class="invalid" style="color:white;">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid" style="color:white;">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid" style="color:white;">A <b>number</b></p>
  <p id="length" class="invalid" style="color:white;">Minimum <b>8 characters</b></p>
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
}

.hero{
    width: 100%;
    height: 100vh;
    background-image: url("img/bg.jpg");
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
.card{
  top: 5%;
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
.card{
    background-color: #F5F5DC;
    background-image: url("img/bg2.jpg");
    opacity: 0.7;
}

/* Add a green text color and a checkmark when the requirements are right */
</style>

<script>
  var password = document.getElementById("inputPassword4")
  , confirm_password = document.getElementById("confirmPass");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
  </script>
</html>