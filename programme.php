<?php
include ('connection.php');
$username = $_SESSION['username'];
$sql_select_university = "SELECT university FROM uniadmin WHERE username = '$username'";
$result_university = mysqli_query($db, $sql_select_university);
$row_select_university = mysqli_fetch_assoc($result_university);
$university_selected_university = $row_select_university['university'];

if (isset($_POST['publish'])){
  $name = mysqli_real_escape_string($db, $_POST['programmeName']);
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $end = mysqli_real_escape_string($db, $_POST['end']);
  $uniAdmin = mysqli_real_escape_string($db, $_SESSION['username']);
  $query =  "INSERT INTO programme(programmeName,description,closingDate, uniAdmin, university)
        VALUES('$name','$description','$end','$uniAdmin','$university_selected_university')";
  mysqli_query($db, $query);
  header('location: home2.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<title>Record Programme</title>
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
  <body class="bg-info" >
     <div class="w3-top">
       <div class="w3-bar w3-black w3-card">
         <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                   <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
                   <a href="home2.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Manage Programme</a>
                   <a href="reviewProgramme.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Review Applications</a>
                   <a href="logOut.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"  style="float:right">Logout</a>
                   <div class="w3-dropdown-hover w3-hide-small">
                     -          </div>
                     <h5 class="w3-padding-large w3-hide-small w3-right">Hi ,<?php echo $_SESSION['username']; ?> </h5>
     </div>
   </div>
 <div class="w3-container w3-white w3-center" style="padding:80px 16px; ">
 <div class="w3-content">
   <div class= "w3-center"style="width:auto;">
     <br>
     <br>
     <h1 style="text-decoration: underline;">Set Up New Programme</h1>
     <br>

     <form action="program.php" method="post">
       <div class="input-group mb-3">
       <div class="input-group-prepend">
         <span class="input-group-text">University: </span>
       </div>
       <input readonly class="form-control" id = "university" name = "university" value = "<?php echo " $university_selected_university";?>">
     </div>
       <div class="input-group mb-3">
         <div class="input-group-prepend">
           <span class="input-group-text">Programme Name: </span>
         </div>
         <input type="text" class="form-control" placeholder=" Enter Name of Programme" id = "programmeName" name = "programmeName" value="<?php echo $name;?>">
       </div>
       <div class="input-group mb-3">
       <div class="input-group-prepend">
         <span class="input-group-text">Closing Date: </span>
       </div>
       <input type="date" class="form-control" placeholder=" Enter Date" id = "end" name = "end" value="<?php echo $end;?>">
     </div>
     <div class="input-group mb-3">
     <div class="input-group-prepend">
       <span class="input-group-text">Description: </span>
     </div>
     <textarea class="form-control" placeholder=" Enter Description" id = "description" name = "description" value="<?php echo $description;?>"></textarea>
   </div>
   <br>
   <button type="submit" class="btn btn-success btn-lg btn-block" name="publish">Publish Programme</button>
     </form>
   </div>
 </div>
</div>
</body>
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
