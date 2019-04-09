<?php
$connect = new PDO("mysql:host=localhost;dbname=highEd", "root", "");
include ('connection.php');
$username = $_SESSION['username'];
$qualification = "";
$overallScore = "";
if (isset($_POST['add_qualification_obtained'])){
  $qualification = mysqli_real_escape_string($db, $_POST['qualification']);
  $overallScore = mysqli_real_escape_string($db, $_POST['overallScore']);
  $query =  "INSERT INTO qualificationobtained (qualification, overallScore, applicant)
        VALUES('$qualification', '$overallScore', '$username')";
  $set=mysqli_query($db, $query);
//header('location: qualificationDetails.php');
 if ($set === TRUE) {
     $message = "Qualification Submitted  successfully";
     echo "<script type='text/javascript'>alert('$message');
     window.location.href = 'qualificationDetails.php';
     </script>";
 } else {
     echo "Error: " . $query . "<br>" . $db->error;
 }
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
  <body class="bg-info" >
      <div class="w3-top">
        <div class="w3-bar w3-black w3-card">

          <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
          <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
          <a href="viewProgramme.php" class="w3-bar-item w3-button w3-padding-large">Apply For Programme</a>
          <a href="qualificationDetails.php" class="w3-bar-item w3-button w3-padding-large">Qualification Details</a>
          <a href="listQualification.php" class="w3-bar-item w3-button w3-padding-large">Qualification Available</a>
          <a href="logOut.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"  style="float:right">Logout</a>
          <div class="w3-dropdown-hover w3-hide-small">

          </div>
          <h5 class="w3-padding-large w3-hide-small w3-right">Hi ,<?php echo $_SESSION['username']; ?> </h5>
      </div>
    </div>
  <div class="w3-container w3-white w3-center" style="padding:80px 16px; ">
  <div class="w3-content">
    <div class= "w3-center"style="width:auto;">
      <br>
      <br>
      <h1 style="text-decoration: underline;">Qualification Details</h1>
      <br>
      <form action="qualificationDetails.php" method="post">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Qualification Name: </span>
        </div>
        <input type="text" class="form-control" placeholder=" Enter Name" id = "qualification" name = "qualification" value="<?php echo $qualification;?>">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Overall Score: </span>
        </div>
        <input type="text" class="form-control" placeholder="0 - 100" id = "overallScore" name = "overallScore" value="<?php echo $overallScore;?>">
      </div>
      <br>
      <button type="submit" class="btn btn-info btn-lg btn-block" name="add_qualification_obtained">Submit</button>
    </form>
    <br>
    <div class="container mt-3">
  <h1 style="text-decoration: underline;">Result</h1>
    <br>
    <form method="post" id="insert_form">
      <div class="table-repsonsive">
        <span id="error"></span>
        <table class="table table-striped" id="item_table">
          <tr>
            <th>Subject Name</th>
            <th>Grade</th>
            <th>Score</th>
            <th><button type="button" name="add" class="btn btn-success btn-sm add">ADD<span class="glyphicon glyphicon-plus"></span></button></th>
          </tr>
        </table>
        <div align="center">
          <input type="submit" name="submit" class="btn btn-info btn-lg btn-block" value="Submit" />
        </div>
      </div>
    </form>
  </div>
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
</html>
<script>
$(document).ready(function(){

 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td><input type="text" name="subjectName[]" class="form-control subjectName" /></td>';
  html += '<td><input type="text" name="grade[]" class="form-control grade" /></td>';
  html += '<td><input type="text" name="score[]" class="form-control score" /></td>';
  $('#item_table').append(html);
 });

 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.subjectName').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter subjectName at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });

  $('.grade').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter grade at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });

  $('.score').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Score at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"insert2.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == 'ok')
     {
      $('#item_table').find("tr:gt(0)").remove();
      $('#error').html('<div class="alert alert-success">Result Saved</div>');
     }
    }
   });
  }
  else
  {
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  }
 });

});
</script>
