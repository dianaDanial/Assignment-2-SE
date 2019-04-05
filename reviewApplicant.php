<?php
include("connection.php");

$senior = $_SESSION['username'];

if (isset($_POST['review_page'])){
  $programmeID = mysqli_real_escape_string($db, $_POST['programmeID']);
  $sql_select_programme = "SELECT programmeID FROM programme WHERE programmeID = '$programmeID'";
  $result = mysqli_query($db, $sql_select_programme);
  $user = mysqli_fetch_assoc($result);

}
$sql = "SELECT * FROM application";
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);

$applicationID ="";
$status = "";
$applicantName = "";
if (isset($_POST['submit_page'])){
  $applicationID = mysqli_real_escape_string($db, $_POST['applicationID']);
  $applicantName = mysqli_real_escape_string($db, $_POST['applicantName']);
  $status = mysqli_real_escape_string($db, $_POST['applicationStatus']);
  $query =  "UPDATE application SET status = '$status' WHERE applicationID = '$applicationID'";
  mysqli_query($db, $query);

  header('location: reviewApplicant.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<title>List of Applications</title>
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

					</div>

						<h5 class="w3-padding-large w3-hide-small w3-right">Hi ,<?php echo $_SESSION['username']; ?> </h5>
			</div>
		</div>
  <div class="w3-container w3-white w3-center" style="padding:80px 16px; "
  <div class="w3-content">
    <div class= "w3-center"style="width:auto;">
      <input readonly class='invisible'class="form-control" id = "programmeID" name = "programmeID" value = "<?php echo $programmeID;?>">
      <h1 style="text-decoration: underline;">List Of Programme Available</h1>
      <br>
      <div class="table-responsive">
      <table style="width:100%" class='table table-striped'>
  	  <tr>
  		<th>Application ID</th>
  		<th>Application Name</th>
  		<th>Application Status</th>
  		<th>Qualification Obtained</th>
  		<th>Score</th>
  	  </tr>

  	  <tr>
  	<?php
  		  while($row = mysqli_fetch_assoc($result))
  		  {
  			echo "<tr><form action=reviewApplicant.php method=post>";
  			echo "<td><input type=text name=applicationID readOnly value='".$row ['applicationID']."'></td>";
  			echo "<td><input type=text name=applicantName readOnly value='".$row ['applicantName']."'></td>";
        echo "<td><form action='reviewApplicant.php'  method='post'>
  			<select class='form-control' id='applicationStatus' name='applicationStatus'>
  			<option value='SUCCESSFUL'>SUCCESSFUL </option>
  			<option value='UNSUCCESSFUL '>UNSUCCESSFUL  </option>
  		  </select>
  			<br><button type='submit' class='btn btn-danger' name='submit_page'>Save</button></td></form></td>";
  			echo "<td><input type=text name=qualificationObtained readOnly value='".$row['qualificationObtained']."'></td>";
  			echo "<td><input type=text name=score readOnly value='".$row['score']."'></td>";
         }
  		  ?>
  	  </tr>
  	</table>
  </div>
    </div>
  </div>
</div>
</body>
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
