<?php
$conn = mysqli_connect('localhost', 'root', '', 'highed');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

$name = $_POST["name"];
$minscore = $_POST["minscore"];
$maxscore = $_POST["maxscore"];
$desc = $_POST["desc"];
$noofsubject = $_POST["noofsubject"];
if (isset($_POST["set"])) {
    if (!(empty($_POST["name"]) && empty($_POST["minscore"]) && empty($_POST["maxscore"]) && empty($_POST["desc"]) && empty($_POST["noofsubject"]))) {
        $sql = "INSERT INTO qualification (name, minscore, maxscore, desc, noofsubject) VALUES ('$name', '$minscore', '$maxscore', '$desc', '$noofsubject')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        $conn->close();
        
    }
    
}
?>
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
        <h1>Register University and Admins</h1><br>
        <form action="home1.php.php" method="post">
            University Name: <input type="text" name="name"><br>
            University Email: <input type="email" name="name"><br>
            <a href="user.php">
            <input type="submit" name="newuser" value="New Admin"><br>
            </a>
            University Admin Username: <input type="text" name="username">
            University Admin Password: <input type="text" name="password"><br>
            <input type="submit" name="addsubject" value="Register University and Admin"><br>
            
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
