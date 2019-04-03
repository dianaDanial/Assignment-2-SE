<?php
include_once ('connection.php');
$sql = 'SELECT * FROM uniadmin';
$result = mysqli_query($db, $sql);
$resultCheck = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<title>View University Admin</title>
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
							<a href="viewAdmin.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Manage University Admin</a>
              <a href="logOut.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"  style="float:right">Logout</a>

								<h5 class="w3-padding-large w3-hide-small w3-right">Hi ,<?php echo $_SESSION['username']; ?> </h5>
          </div>
      </div>

  </div>
  <div class="w3-container w3-white w3-center" style="padding:80px 16px; ">
    <div class="card"  "center" style="width:auto;" >
      <br>
      <br>
        <h2 style="color:#000080 ;text-decoration: underline;">View All University Admin</h2>
        <table style="width:100%"  class='table table-bordered'>
        <thead>
    	  <tr>
    		<th scope="col">Username</th>
    		<th scope="col">Password</th>
    		<th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">University</th>
    	  </tr>
      </thead>
        <tbody>
        <?php
           while ($row = mysqli_fetch_assoc($result)): ?>
           <tr>
            <?php for ($i=1; $i <1 ; $i++) {
               echo "$i";
             } ?>
             <td><?php echo $row['username'];?></td>
             <td><?php echo $row['password'];?></td>
             <td><?php echo $row['name'];?></td>
             <td><?php echo $row['email'];?></td>
             <td><?php echo $row['university'];?></td>
         </tr>
       <?php endwhile; ?>
     </tbody>
    	</table>
      <br>
      <br>
      <a href="registerUniAdmin.php" class="btn btn-info btn-lg btn-block" type="button">Add University Admin</a>
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
