<!DOCTYPE html>
<html lang="en">
<title>HighEd</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="logo.ico">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->

<div class="w3-top">
  <body class="bg-info" >


<nav class="navbar navbar-expand-md bg-light navbar-light">

    <img src="logo.png" alt="Logo" style="width:50px; height:85px">
    <a class="navbar-brand" href="index.html"style="font-family: "Times New Roman", Times, serif;">HighEd</a>

  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="programmes.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Programmes</a>
    <a href="user.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sign Up</a>
    <a href="contactUs.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>
    <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"  style="float:right">Login</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="programmes.php" class="w3-bar-item w3-button w3-padding-large">Programmes</a>
    <a href="user.php" class="w3-bar-item w3-button w3-padding-large">Sign Up</a>
    <a href="contactUs.php" class="w3-bar-item w3-button w3-padding-large">Contact Us</a>
    <a href="login.php" class="w3-bar-item w3-button w3-padding-large">Login</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <div class="carousel-inner">
  <div class="carousel-item active">
    <img src="graduate.png" alt="graduate" width="100%" height="550">
    <div class="carousel-caption">
      <h1 class="w3-margin w3-jumbo" style="color: black;">FIND THE RIGHT COURSE & UNIVERSITY</h1>
      <p class="w3-xlarge" style="color:black ;text-shadow: 2px 2px white">No.1 Higher Education Website</p>
        <button class="w3-button w3-red w3-padding-large w3-large w3-margin-top">Available Programmes</button>
    </div>
  </div>
</div>
</header>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <img src="uniLogo.png" alt="Icon of university" style="width:100%">
    </div>
    <div class="w3-twothird">
      <h1>One Application. 200+ Institutions</h1>
      <h5 class="w3-padding-20">- Explore top-ranking universities catered to your needs, in one place.</h5>
      <h5 class="w3-padding-20">- Key in details ONCE to apply to multiple institutions.</h5>
      <h5 class="w3-padding-20">- Sift through numerous offers and find the best one for you & your future!</h5>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p style="color: white; font-size: 20px; ">Copyright by Sharifah & Khadijah</p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
