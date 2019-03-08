<?php
include_once ('connection.php');
$qualificationName ="";
$minimumScore = "";
$maximumScore = "";
$gradeList = "";
$resultCalcDescription = "";

if (isset($_POST['add_qualification'])){
  $qualificationName = mysqli_real_escape_string($db, $_POST['qualificationName']);
  $minimumScore = mysqli_real_escape_string($db, $_POST['minimumScore']);
  $maximumScore = mysqli_real_escape_string($db, $_POST['maximumScore']);
  $gradeList = mysqli_real_escape_string($db, $_POST['gradeList']);
  $resultCalcDescription = mysqli_real_escape_string($db, $_POST['resultCalcDescription']);
  $sasAdmin = mysqli_real_escape_string($db, $_SESSION['username']);
  $query =  "INSERT INTO qualification (qualificationName, minimumScore, maximumScore, gradeList,resultCalcDescription, SASadmin)
        VALUES('$qualificationName', '$minimumScore', '$maximumScore', '$gradeList', '$resultCalcDescription', '$sasAdmin')";
  mysqli_query($db, $query);
  header('location: maintainQualifications.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">
<title>Add Qualifications</title>
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
  <nav class="navbar navbar-expand-md bg-light navbar-light">
      <img src="logo.png" alt="Logo" style="width:50px; height:85px">
      <a class="navbar-brand" href="index.html"style="font-family: "Times New Roman", Times, serif;">HighEd</a>
    <div class="w3-bar w3-red w3-card w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Maintain Qualifications</a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Register University</a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"  style="float:right">Log Out</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
      <a href="#" class="w3-bar-item w3-button w3-padding-large">Home</a>
      <a href="#" class="w3-bar-item w3-button w3-padding-large">Maintain Qualifications</a>
      <a href="#" class="w3-bar-item w3-button w3-padding-large">Record University</a>
      <a href="#" class="w3-bar-item w3-button w3-padding-large">Log Out</a>
    </div>
  </div>
  <div class="w3-container w3-light-grey w3-center" style="padding:80px 16px; "
  <div class="container">
  <div class="w3-content">
    <div class= "w3-center"style="width:auto;">
      <br>
      <br>
      <h1 style="text-decoration: underline;">Add Qualification</h1>
      <br>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Qualification Name: </span>
        </div>
        <input type="text" class="form-control" placeholder=" Enter Name" id = "qualiName" name = "qualiName" value="<?php echo $qualificationName;?>">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Minimum Score: </span>
        </div>
        <input type="text" class="form-control" placeholder="0 - 100" id = "minScore" name = "minScore" value="<?php echo $minimumScore;?>">
        <div class="input-group-prepend">
          <span class="input-group-text">Maximum Score: </span>
        </div>
        <input type="text" class="form-control" placeholder="0 - 100" id = "maxScore" name = "maxScore" value="<?php echo $maximumScore;?>">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">List of Possible Grades: </span>
        </div>
        <input type="text" class="form-control" placeholder="Input Grade" id = "possibleGrade" name = "possibleGrade" value="<?php echo $gradeList;?>">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Description of calculated result: </span>
        </div>
      <textarea class="form-control"  placeholder="Enter the description" id="comments" value="<?php echo $resultCalcDescription;?>"></textarea>
      </div>
      <br>
      <button type="submit" class="btn btn-success btn-lg btn-block" name="add_qualification">Submit</button>
    </div>
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
  </html>
