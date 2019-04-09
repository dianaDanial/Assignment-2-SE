<?php


include("connection.php");

$username = $_SESSION['username'];

$sql_select_programme = "SELECT * FROM programme";
if ($result_select_programme = mysqli_query($db, $sql_select_programme)) {
	$row_count_select_programme =mysqli_num_rows($result_select_programme);
	if ($row_count_select_programme>0) {
		$i = 1;
		while($row_select_programme=mysqli_fetch_assoc($result_select_programme)) {
			$programmeID_selected_programme[$i] = $row_select_programme['programmeID'];
			$university_selected_programme[$i] = $row_select_programme['university'];
      $programmeName_selected_programme[$i] = $row_select_programme['programmeName'];
			$description_selected_programme[$i] = $row_select_programme['description'];
      $closingDate_selected_programme[$i] = $row_select_programme['closingDate'];
			$i++;
		}
	}
} else{
	$row_count_select_programme = 0;
}

?>

<!DOCTYPE html>
<html lang="en">
<title>View Programme</title>
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
h4 {
display: inline-block;
}
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
  <div class="w3-container w3-white" style="padding:80px 16px; ">
    <div class="w3-content">
    <br>
    <div class= "w3-center"style="width:auto;">
      <h1 style="text-decoration: underline;">List of Programme Available</h1>
      <br>
        <?php if ($row_count_select_programme > 0) {
        echo "
        <table class='table table-striped'>
          <thead>
            <tr>
              <th class='table-info'scope='col'>Programme ID</th>
              <th class='table-info'scope='col'>University Name</th>
              <th class='table-info'scope='col'>Programme Name</th>
              <th class='table-info'scope='col'>Closing Date</th>
              <th class='table-info'scope='col'>Description</th>
              <th class='table-info'scope='col'>Action</th>
            </tr>
          </thead>
          <tbody>";
            for ($i = 1; $i <=$row_count_select_programme; $i++) {
              echo "
                <tr>
                <form action='applyProgramme.php' method='post'>
                  <td><input class='center' name='programmeID' value='$programmeID_selected_programme[$i]'></td>
                  <td>$university_selected_programme[$i]</td>
                  <td>$programmeName_selected_programme[$i]</td>
                  <td>$closingDate_selected_programme[$i]</td>
                  <td>$description_selected_programme[$i]</td>
                  <td>
                  <button type='submit' class='btn btn-success' name='select_programme'>Apply</button>
                  </td>
                          </form>
                </tr>
              ";
            } echo "
          </tbody>
        </table>
        ";
      }
      ?>
    </div>
  </div>
</div>
</body>
<br>
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
