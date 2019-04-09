<?php

include("connection.php");

$username = $_SESSION['username'];

$sql_select_qualification = "SELECT * FROM qualification";
if ($result_select_qualification = mysqli_query($db, $sql_select_qualification)) {
	$row_count_select_qualification =mysqli_num_rows($result_select_qualification);
	if ($row_count_select_qualification>0) {
		$i = 1;
		while($row_select_qualification=mysqli_fetch_assoc($result_select_qualification)) {
			$qualificationName_selected_qualification[$i] = $row_select_qualification['qualificationName'];
			$maximumScore_selected_qualification[$i] = $row_select_qualification['maximumScore'];
			$minimumScore_selected_qualification[$i] = $row_select_qualification['minimumScore'];
			$resultCalcDescription_selected_qualification[$i] = $row_select_qualification['resultCalcDescription'];
			$gradeList_selected_qualification[$i] = $row_select_qualification['gradeList'];
			$i++;
		}
	}
} else{
	$row_count_select_qualification = 0;
}

?>
<!DOCTYPE html>
<html lang="en">
<title>Maintain Qualifications</title>
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
  <div class="w3-container w3-white w3-center" style="padding:80px 16px; "
  <div class="w3-content">
    <div class= "w3-center"style="width:auto;">
			<br>
      <br>
      <h1 style="text-decoration: underline;">Available Qualifications</h1>
      <br>
      <?php if ($row_count_select_qualification == 0) {
        echo "<p style='color:red;'>No qualification have been created yet</p>";
      } else {
        echo "
        <table class='table table-bordered'>
         <thead class='thead-primary'>
            <tr>
              <th class='table-info'scope='col'>Qualification Name</th>
              <th class='table-info'scope='col'>Maximum Score</th>
							<th class='table-info'scope='col'>Minimum Score</th>
							<th class='table-info'scope='col'>Calculation of Overall Result</th>
              <th class='table-info'scope='col'>Grade List</th>
            </tr>
          </thead>
          <tbody>";
            for ($i = 1; $i <=$row_count_select_qualification; $i++) {
              echo "
                <tr>
                <form action='listQualification.php' method='post'>
                  <td>$qualificationName_selected_qualification[$i]</td>
                  <td>$maximumScore_selected_qualification[$i]</td>
                  <td>$minimumScore_selected_qualification[$i]</td>
									<td>$resultCalcDescription_selected_qualification[$i]</td>
									<td>$gradeList_selected_qualification[$i]</td>
                    </form>
                  </td>
                </tr>
              ";
            } echo "
          </tbody>
        </table>
        ";
      }
      ?>

      <!--
      <table class="table table-striped">
        <thead>
          <tr>
            <th class="table-info"scope="col">Qualification Name</th>
            <th class="table-info"scope="col">Maximum Score</th>
            <th class="table-info"scope="col">Update</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>STPM</td>
            <td>4.0</td>
            <td scope="row"><a href="addQualification.html" type="button" class="btn btn-success">Edit</a></td>
          </tr>
          <tr>
            <td>A-Levels</td>
            <td>5.0</td>
            <td scope="row"><a href="addQualification.html" type="button" class="btn btn-success">Edit</a></td>
          </tr>
        </tbody>
      </table>
    -->
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
