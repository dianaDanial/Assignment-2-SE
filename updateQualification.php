<?php
include("connection.php");

$qualificationName ="";
$maximumScore = "";


if (isset($_POST['update_page'])){
  $qualificationID = mysqli_real_escape_string($db, $_POST['qualificationID']);

  $sql_select_qualification = "SELECT qualificationName, maximumScore FROM qualification WHERE qualificationID = '$qualificationID'";
  $result = mysqli_query($db, $sql_select_qualification);
  $user = mysqli_fetch_assoc($result);
  $qualificationName = $user['qualificationName'];
  $maximumScore = $user['maximumScore'];

}

if (isset($_POST['update_qualification'])){
  $qualificationID = mysqli_real_escape_string($db, $_POST['qualificationID']);
  $qualificationName = mysqli_real_escape_string($db, $_POST['qualificationName']);
  $minimumScore = mysqli_real_escape_string($db, $_POST['minimumScore']);
  $maximumScore = mysqli_real_escape_string($db, $_POST['maximumScore']);
  $gradeList = mysqli_real_escape_string($db, $_POST['gradeList']);
  $resultCalcDescription = mysqli_real_escape_string($db, $_POST['resultCalcDescription']);

  $query =  "UPDATE qualification SET qualificationName = '$qualificationName', minimumScore = '$minimumScore', maximumScore = '$maximumScore', gradeList = '$gradeList', resultCalcDescription = '$resultCalcDescription' WHERE qualificationID = '$qualificationID'";
  mysqli_query($db, $query);

  header('location: maintainQualifications.php');
}
//$sql = "UPDATE qualification SET WHERE qualificationID = $qualificationID";
?>
<!DOCTYPE html>
<html lang="en">
<title>Update Qualifications</title>
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
      <div class="w3-top">

          <div class="w3-bar w3-black w3-card">

              <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
              <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
              <a href="maintainQualifications.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Maintain Qualification</a>
              <a href="registerUni.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Register University</a>
							<a href="viewAdmin.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">View University Admin</a>
              <a href="logOut.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"  style="float:right">Logout</a>
              <div class="w3-dropdown-hover w3-hide-small">

              </div>

								<h5 class="w3-padding-large w3-hide-small w3-right">Hi ,<?php echo $_SESSION['username']; ?> </h5>
          </div>
      </div>
    </div>
  <div class="w3-container w3-white w3-center" style="padding:80px 16px; ">

  <div class="w3-content">
    <div class= "w3-center"style="width:auto;">
      <br>
      <br>
      <h1 style="text-decoration: underline;">Edit Qualification</h1>
      <br>
      <form action = "updateQualification.php" method="post">
        <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">QualificationID: </span>
        </div>
        <input readonly class="form-control" id = "qualificationID" name = "qualificationID" value = "<?php echo $qualificationID;?>">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Qualification Name: </span>
        </div>
        <input type="text" class="form-control" placeholder=" Enter Name" id = "qualificationName" name = "qualificationName" value="<?php echo $qualificationName;?>">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Minimum Score: </span>
        </div>
        <input type="text" class="form-control" placeholder="0 - 100" id = "minimumScore" name = "minimumScore" value="<?php echo $minimumScore;?>">
        <div class="input-group-prepend">
          <span class="input-group-text">Maximum Score: </span>
        </div>
        <input type="text" class="form-control" placeholder="0 - 100" id = "maximumScore" name = "maximumScore" value="<?php echo $maximumScore;?>">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">List of Possible Grades: </span>
        </div>
        <textarea class="form-control" placeholder="Input Grade" id = "gradeList" name = "gradeList" value="<?php echo $gradeList;?>"></textarea>
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Description of calculated result: </span>
        </div>
      <textarea class="form-control"  placeholder="Enter the description" id="resultCalcDescription"name = "resultCalcDescription" value="<?php echo $resultCalcDescription;?>"></textarea>
      </div>
      <br>
      <button type="submit" class="btn btn-info btn-lg btn-block" name="update_qualification">Save</button>
    </form>
  </div>
</div>
</div>
</body>
  <!-- Footer -->
  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-center w3-black">
    <div class="w3-large w3-padding-20">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
   </div>
   <p style="color: white; font-size: 20px; ">Copyright by Sharifah & Khadijah</p>
  </footer>
</html>
