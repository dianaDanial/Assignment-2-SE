<?php
$connect = new PDO("mysql:host=localhost;dbname=highEd", "root", "");

include ('connection.php');
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
      <div class="w3-top">

          <div class="w3-bar w3-black w3-card">

              <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
              <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
              <a href="maintainQualifications.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Maintain Qualification</a>
              <a href="registerUni.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Register University</a>
							<a href="viewAdmin.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Manage University Admin</a>
              <a href="logOut.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"  style="float:right">Logout</a>
              <div class="w3-dropdown-hover w3-hide-small">

              </div>

								<h5 class="w3-padding-large w3-hide-small w3-right">Hi ,<?php echo $_SESSION['username']; ?> </h5>
          </div>
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
                  <th>University</th>
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
    html += '<td><input type="text" name="university[]" class="form-control university" /></td>';
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
    $('.university').each(function(){
      var count = 1;
      if($(this).val() == '')
          {
          error += "<p>Enter University at "+count+" Row</p>";
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
