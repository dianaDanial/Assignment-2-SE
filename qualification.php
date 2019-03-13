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
        <h1>Set Up Qualifications</h1><br>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            Qualification Name: <input type="text" name="name"><br>
            Minimum Score: <input type="number" name="minscore">
            Maximum Score: <input type="number" name="maxscore"><br>
            <input type="radio" name="desc" value="total" > Total
            <input type="radio" name="desc" value="average" > Average,
            No of Subject: <input type="number" name="noofsubject"><br>
            <input type="submit" name="addsubject" value="Add Subjects and Scores"><br>
            <input type="submit" name="set" value="Set Qualification">
            
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
