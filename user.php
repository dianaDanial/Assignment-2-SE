<?php include('connection.php')?>
<!DOCTYPE html>
<html lang="en">
<title>Sign Up Applicant</title>
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

  <!-- Navbar -->

  <div class="w3-top">
    <body class="bg-info" >
      <script>
      function validateSignupForm(){
        if (document.getElementById("psw").value!=document.getElementById("psw2").value){
          alert("Password and new password is different They must be same.");
          return false;
        }
        return true;
      }</script>

  <nav class="navbar navbar-expand-md bg-light navbar-light">
      <img src="logo.png" alt="Logo" style="width:50px; height:85px">
      <a class="navbar-brand" href="index.html"style="font-family: "Times New Roman", Times, serif;">HighEd</a>
    <div class="w3-bar w3-red w3-card w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Programmes</a>
      <a href="user.php" class="w3-bar-item w3-button w3-padding-large w3-white">Sign Up</a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contact Us</a>
      <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"  style="float:right">Login</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
      <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
      <a href="programmes.php" class="w3-bar-item w3-button w3-padding-large">Programmes</a>
      <a href="contactUs.php" class="w3-bar-item w3-button w3-padding-large">Contact Us</a>
    </div>
  </div>
  <div class="w3-container w3-light-grey w3-center" style="padding:80px 16px; "
    <div class="card"  "center" style="width:auto;" >
      <br>
      <br>
        <h1 class="text-center">User Details</h1>
        <form method="post" action="user.php">
            <?php include('errors.php'); ?>
          <div class="container mt-3">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Full Name</span>
              </div>
              <input type="text" class="form-control" placeholder="Full Name" id="name" name="name" value="<?php echo $name; ?>" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">ID Type</span>
              </div>
              <select class="form-control" id="idType" name="idType" value = "<?php echo $IDtype;?>">
                <option value="MyKad">MyKad </option>
                <option value="Passport">Passport</option>
              </select>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">ID number</span>
              </div>
              <input type="text" class="form-control" placeholder="Enter ID number" id="idNumber" name="idNumber" value="<?php echo $IDnumber; ?>" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Username</span>
              </div>
              <input type="text" class="form-control" placeholder="Enter Username" id="username" name="username" value="<?php echo $username; ?>"required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Password</span>
              </div>
              <input type="password" class="form-control" placeholder="Enter Password" id="password" name="password" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Confirm Password</span>
              </div>
              <input type="password" class="form-control" placeholder="Re Enter Password" id="Confirmpassword" name="Confirmpassword" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Mobile No</span>
              </div>
              <input type="text" class="form-control" placeholder="Enter Mobile No" id="mobileNo" name="mobileNo"  value="<?php echo $mobileNo; ?>"required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Email</span>
              </div>
              <input type="text" class="form-control" placeholder="Email address" id="email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Date Of Births</span>
              </div>
              <input type="date" class="form-control" placeholder="Enter date of birth" id="dateOfBirth" name="dateOfBirth" value="<?php echo $dateOfBirth; ?>" required>
            </div>
            <button type="submit" class="btn btn-danger" name="reg_applicant" onclick="return validateSignupForm();">Sign Up</button>
          </form>
      </div>
    </div>
  </div>
</body>
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
