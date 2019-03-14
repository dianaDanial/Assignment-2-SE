<?php

//if(isset($_POST['set'])){
//if (!(empty($_POST["name"]) && empty($_POST["minscore"]) && empty($_POST["maxscore"]) && empty($_POST["desc"]) && empty($_POST["noofsubject"]))) {
//if( isset( $_POST['name'], $_POST['minscore'], $_POST['maxscore'], $_POST['desc'], $_POST['noofsubject']) ) {
/*
    $host   =   'localhost';
    $uname  =   'root'; 
    $pwd    =   ''; 
    $db     =   'highed';

    $conn   =   new mysqli( $host, $uname, $pwd, $db );

    if ( !$conn ) {
        die("Connection failed: " . mysqli_connect_error() );
    }

/*
    $sql="insert into qualification ( name, minscore, maxscore, description, noofsubject ) values (  ?,?,?,?,? )";
    $stmt=$conn->prepare( $sql );

    if( $stmt ){

        $name=$_POST['name'];
        $minscore=$_POST['minscore'];
        $maxscore=$_POST['maxscore'];
        $desc=$_POST['desc'];
        $noofsubject=$_POST['noofsubject'];
        //$avail=$_POST['availabilty'];

          //  use i for integers
          //  use s for strings
        
        $stmt->bind_params( 'siisi', $name,$minscore,$maxscore,$desc,$noofsubject );
        $result=$stmt? 'Success!' : 'Fail!';

        $stmt->close();
        $conn->close();

    } else {
        echo 'Error creating statement';
    }
} else {
    echo 'One or more required POST variables are not set';
}*/
//}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "highed";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//$conn = mysqli_connect('localhost', 'root', '', 'highed');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
 $minscore = $_POST['minscore'];
 $maxscore = $_POST['maxscore'];
 $desc = $_POST['desc'];
 $noofsubject = $_POST['noofsubject'];
 
 //echo $name; echo $minscore; echo $maxscore; echo $desc; echo $noofsubject;
 if(isset($_POST['set'])){
     if (!(empty($_POST["name"]) && empty($_POST["minscore"]) && empty($_POST["maxscore"]) && empty($_POST["desc"]) && empty($_POST["noofsubject"]))) {
 
 $sql = "INSERT INTO qualification (name,minscore,maxscore,description,noofsubject) VALUES ('$name','$minscore','$maxscore','$desc','$noofsubject')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 }
 }
mysqli_close($conn);



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
        <form action="qualification.php" method="post">
            Qualification Name: <input type="text" name="name"><br>
            Minimum Score: <input type="number" name="minscore">
            Maximum Score: <input type="number" name="maxscore"><br>
            <input type="radio" name="desc" value="Total" > Total
            <input type="radio" name="desc" value="Average" > Average,
            No of Subject: <input type="number" name="noofsubject"><br>
            <input type="submit" name="addsubject" value="Add Subjects and Scores"><br>
            <input type="submit" name="set" value="Set Qualification">
            
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
