<?php
$connect = new PDO("mysql:host=localhost;dbname=highEd", "root", "");

?>
<!DOCTYPE html>
<html lang="en">
<title>Register University</title>
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
      <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
      <a href="programmes.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Programmes</a>
      <a href="maintainQualifications.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Maintain Qualifications</a>
      <a href="registerUni.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Register University</a>
      <a href="logOut.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"  style="float:right">Log Out</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
      <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
      <a href="programmes.php" class="w3-bar-item w3-button w3-padding-large">Programmes</a>
      <a href="maintainQualifications.php" class="w3-bar-item w3-button w3-padding-large">Maintain Qualifications</a>
      <a href="registerUni.php" class="w3-bar-item w3-button w3-padding-large">Register University</a>
      <a href="logOut.php" class="w3-bar-item w3-button w3-padding-large">Log Out</a>
    </div>
  </div>
  <div class="w3-container w3-light-grey w3-center" style="padding:80px 16px; "
    <div class="card"  "center" style="width:auto;" >
      <br>
      <br>
      <div class="form-group">
        <img class="card-img-top mx-auto d-block" src="register.png" alt=" image icon of register" style="width:20%;" >
        <br>
          <div class="container mt-3">
          <h4 style="float:center; color:#000080;text-decoration: underline;">Details of University Admin</h4>
          <br>
          <form method="post" id="insert_form">
            <div class="table-repsonsive">
              <span id="error"></span>
              <table class="table table-striped" id="item_table">
                <tr>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th><button type="button" name="add" class="btn btn-success btn-sm add">ADD<span class="glyphicon glyphicon-plus"></span></button></th>
                </tr>
              </table>
              <div align="center">
                <input type="submit" name="submit" class="btn btn-info" value="Insert" />
              </div>
            </div>
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
  <script>
  $(document).ready(function(){

   $(document).on('click', '.add', function(){
    var html = '';
    html += '<tr>';
    html += '<td><input type="text" name="username[]" class="form-control username" /></td>';
    html += '<td><input type="text" name="password[]" class="form-control password" /></td>';
    html += '<td><input type="text" name="name[]" class="form-control name" /></td>';
    html += '<td><input type="text" name="email[]" class="form-control email" /></td>';
    html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove">Delete<span class="glyphicon glyphicon-minus"></span></button></td></tr>';
    $('#item_table').append(html);
   });

   $(document).on('click', '.remove', function(){
    $(this).closest('tr').remove();
   });

   $('#insert_form').on('submit', function(event){
    event.preventDefault();
    var error = '';
    $('.username').each(function(){
     var count = 1;
     if($(this).val() == '')
     {
      error += "<p>Enter username at "+count+" Row</p>";
      return false;
     }
     count = count + 1;
    });

    $('.password').each(function(){
     var count = 1;
     if($(this).val() == '')
     {
      error += "<p>Enter Password at "+count+" Row</p>";
      return false;
     }
     count = count + 1;
    });

    $('.name').each(function(){
     var count = 1;
     if($(this).val() == '')
     {
      error += "<p>Enter Name at "+count+" Row</p>";
      return false;
     }
     count = count + 1;
    });

    $('.email').each(function(){
      var count = 1;
      if($(this).val() == '')
         {
          error += "<p>Enter Email at "+count+" Row</p>";
          return false;
         }
         count = count + 1;
        });
    var form_data = $(this).serialize();
    if(error == '')
    {
     $.ajax({
      url:"insert.php",
      method:"POST",
      data:form_data,
      success:function(data)
      {
       if(data == 'ok')
       {
        $('#item_table').find("tr:gt(0)").remove();
        $('#error').html('<div class="alert alert-success">University Saved</div>');
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
