<?php
include 'dbconnect.php';
session_start();
$usertype = $_SESSION["usertype"];
$username = $_SESSION["username"];

?>


<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="logo.ico">
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="style3.css">
        <link rel="stylesheet" href="style4.css">
        <link rel="stylesheet" href="mycss.css">
        <script src="javascript.js"></script>
    </head>
    <body>
<div class="w3-top">

    <div class="w3-bar w3-black w3-card">

        <!--<a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
        <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT</a>
        <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">PROGRAMMES</a>
        <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>-->
        <?php if ($usertype != NULL){?>
        <a href="index.php" onclick="document.getElementById('login').style.display = 'block'" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="float:right">LOGOUT</a>
        <?php } if ($usertype == 3){ ?>
                <a href="applicant.php" onclick="document.getElementById('login').style.display = 'block'" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="float:right">MY QUALIFICATION</a>
        <?php } else { ?>
        <a href="#" onclick="document.getElementById('login').style.display = 'block'" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="float:right">SIGN UP</a>
        <a href="#" onclick="document.getElementById('login').style.display = 'block'" class="w3-bar-item w3-button w3-padding-large w3-hide-small" style="float:right">LOGIN</a>
        <?php } ?>
    </div>
    <i class="w3-tag w3-red w3-hide-small w3-right">Hi <?php echo $username; ?>, you are logged in as a 
        <?php if($usertype==1){echo 'SAS Admin';}else if($usertype==2){echo 'University Admin';}else if($usertype==3){echo 'Student';}else{echo'undefined';}?>
       </i>
</div>
<div id="login" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container w3-black">
            <span onclick="document.getElementById('login').style.display = 'none'" class="w3-button w3-display-topright w3-large">x</span>
            <h1>Login</h1>
        </div>
        <div class="w3-container">
            <form action="/action_page.php" target="_blank">
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Username" required name="username"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="Email" required name="email"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Contact No." required name="tel"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Password" required name="password"></p>
                <p><button class="w3-button" type="submit">SIGNUP</button></p>
            </form>
        </div>
    </div>
</div>
