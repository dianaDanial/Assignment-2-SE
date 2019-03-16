<?php
$conn = mysqli_connect('localhost', 'root', '', 'highed');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";


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
        <title>HighEd</title>

    </head>
    <body>
        <h1>Manage Qualifications</h1>
        <a href="qualification.php">
        <input type="submit" name="newQ" value="New Qualification"><br>
        </a>

        <?php
        mysqli_select_db($conn,"qualification");
        $sql="SELECT * FROM qualification ";
        $result = mysqli_query($conn,$sql);

        echo "<table>
        <tr>
        <th>Qualification Name</th>
        <th>Minimum Score</th>
        <th>Maximum Score</th>
        <th>Description</th>
        <th>No Of Subject</th>
        </tr>";
        while($row = mysqli_fetch_array($result)) {
        echo '<tr style="width:20%">';
            echo '<td style="width:20%">' . $row['name'] . "</td>";
            echo '<td style="width:20%">' . $row['minscore'] . "</td>";
            echo '<td style="width:20%">' . $row['maxscore'] . "</td>";
            echo '<td style="width:20%">' . $row['desc'] . "</td>";
            echo '<td style="width:20%">' . $row['noofsubject'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>


        <h1>Manage Universities and Admins</h1>
        <a href="university.php">
        <input type="submit" name="newU" value="New University/Admin"><br><br>
        </a>

        <?php
        mysqli_select_db($conn,"university");
        $sql="SELECT * FROM university ";
        $result = mysqli_query($conn,$sql);

        echo "<table>
        <tr>
        <th>University Name</th>
        <th>University Email</th>
        <th>Admin</th>
        </tr>";
        while($row = mysqli_fetch_array($result)) {
        echo '<tr style="width:20%">';
            echo '<td style="width:20%">' . $row['name'] . "</td>";
            echo '<td style="width:20%">' . $row['email'] . "</td>";
            echo '<td style="width:20%">' . $row['admin'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($conn);
        ?>
    </body>
</html>
