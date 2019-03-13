<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>User Details</h1><br>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            Full Name: <input type="text" name="name"><br>
            <input type="radio" name="desc" value="total" > MyKad
            <input type="radio" name="desc" value="average" > Passport,
            ID No: <input type="number" name="idnumber"><br>
            Email: <input type="email" name="email"><br>
            Username: <input type="text" name="uname"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" name="submit" value="Submit"><br>
            
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
