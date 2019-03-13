<?php
//include 'functions.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "highed";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
$conn = mysqli_connect('localhost', 'root', '', 'highed');
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";
//$login = $_POST["login"];
$email = $_POST["email"];
$pword = $_POST["pword"];
if (isset($_POST["login"])) {
    if (!(empty($_POST["email"]) && empty($_POST["pword"]))) {
        $sql = "SELECT * FROM login WHERE email='$email' and password='$pword' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result);

        if ($user) {
            
            //$sql = "SELECT usertype FROM login WHERE email='$email'   ";
            //$result = mysqli_query($conn, $sql);
            $usertype = $user[4];//($result);
            //echo print_r($usertype);
            echo $usertype;
            
            if ($usertype == 1) {
                echo "<script> location.href='home1.php'; </script>";
            }else if($usertype == 2){
                echo "<script> location.href='home2.php'; </script>";
            }else if($usertype == 3){
                echo "<script> location.href='home3.php'; </script>";
            }
        } else {
            echo "Login not authenticated.<br>";
        }
    }
}else if(isset($_POST["register"])) {
    echo "<script> location.href='user.php'; </script>";
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
        <title>HighEd</title>
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
            .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
            .fa-anchor,.fa-coffee {font-size:200px}
        </style>        
    </head>

    <body>

<?php
// put your code here
?>

        <form action="index.php" method="post">
            E-mail: <input type="text" name="email">
            Password: <input type="text" name="pword">
            <input type="submit" name="login" value="Login">
            <input type="submit" name="register" value="Register">
        </form>

    </footer>

    <script>

    </script>

</body>
</html>
