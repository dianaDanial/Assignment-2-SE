<?php
session_start();

// initializing variables
$username = "";
$name = "";
$email = "";
$mobileNo = "";
$IDtype = "";
$IDnumber = "";
$dateOfBirth = "";
$qualificationName ="";
$minimumScore = "";
$maximumScore = "";
$gradeList = "";
$resultCalcDescription = "";
$universityName = "";
$university = "";
$name ="";
$description = "";
$end = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'highEd');

// REGISTER UniAdmin
if (isset($_POST['reg_uniAdmin'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $fullname = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $university = mysqli_real_escape_string($db, $_POST['university']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['Confirmpassword']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM uniAdmin WHERE username='$username'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }


  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO uniAdmin (username, password, name, email,university)
  			  VALUES('$username', '$password', '$name', '$email','$university')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
    $_SESSION['university'] = $university;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: recordProgramme.php');
  }
}
// REGISTER SASadmin
if (isset($_POST['reg_SASadmin'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['Confirmpassword']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM SASadmin WHERE username='$username'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }


  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO SASadmin (username, password, name, email)
  			  VALUES('$username', '$password', '$name', '$email')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: maintainQualifications.php');
  }
}

// REGISTER Applicant
if (isset($_POST['reg_applicant'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['Confirmpassword']);
  $IDtype = mysqli_real_escape_string($db, $_POST['idType']);
  $IDnumber = mysqli_real_escape_string($db, $_POST['idNumber']);
  $mobileNo = mysqli_real_escape_string($db, $_POST['mobileNo']);
  $dateOfBirth = mysqli_real_escape_string($db, $_POST['dateOfBirth']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($IDtype)) { array_push($errors, "IDtype is required"); }
  if (empty($IDnumber)) { array_push($errors, "IDnumber is required"); }
  if (empty($mobileNo)) { array_push($errors, "Mobile No is required"); }
  if (empty($dateOfBirth)) { array_push($errors, "Date of birth is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM applicant WHERE username='$username'  LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "");
      echo '<script language="javascript">';
      echo 'alert("Username already exists")';
      echo '</script>';

    }


  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO applicant (username, password, name, email, IDtype, IDnumber, mobileNo, dateOfBirth)
  			  VALUES('$username', '$password', '$name', '$email', '$IDtype', '$IDnumber',  '$mobileNo', '$dateOfBirth')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home3.php');
  }
}

// ...
// LOGIN Applicant
if (isset($_POST['login_applicant'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM applicant WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: home3.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

// LOGIN UniAdmin
if (isset($_POST['login_uniAdmin'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM uniAdmin WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: manageProgramme.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

// LOGIN SASadmin
if (isset($_POST['login_SASadmin'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM SASadmin WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: maintainQualifications.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

if (isset($_POST['add_qualification'])){
  $qualificationName = mysqli_real_escape_string($db, $_POST['qualificationName']);
  $minimumScore = mysqli_real_escape_string($db, $_POST['minimumScore']);
  $maximumScore = mysqli_real_escape_string($db, $_POST['maximumScore']);
  $gradeList = mysqli_real_escape_string($db, $_POST['gradeList']);
  $resultCalcDescription = mysqli_real_escape_string($db, $_POST['resultCalcDescription']);
  $query =  "INSERT INTO qualification (qualificationName, minimumScore, maximumScore, gradeList,resultCalcDescription)
        VALUES('$qualificationName', '$minimumScore', '$maximumScore', '$gradeList', '$resultCalcDescription')";
  mysqli_query($db, $query);
  header('location: maintainQualifications.php');
}

if (isset($_POST['register_Uni'])){
  $universityName = mysqli_real_escape_string($db, $_POST['universityName']);
  $query =  "INSERT INTO university(universitName)
        VALUES('$universityName')";
  mysqli_query($db, $query);
  header('location: registerUniAdmin.php');
}


?>
