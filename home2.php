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
        <title></title>
    </head>
    <body>
        <h1>Manage University Program</h1>
        <a href="program.php">
        <input type="submit" name="newP" value="New Program"><br>
        </a>
        
        <?php
        mysqli_select_db($conn,"program");
        $sql="SELECT * FROM program ";
        $result = mysqli_query($conn,$sql);

        echo "<table>
        <tr>
        <th>Program Name</th>
        <th>Start Date</th>
        <th>End Date Score</th>
        <th>Description</th>
        <th>No Of Applicant</th>
        </tr>";
        while($row = mysqli_fetch_array($result)) {
        echo '<tr style="width:20%">';
            echo '<td style="width:20%">' . $row['name'] . "</td>";
            echo '<td style="width:20%">' . $row['startdate'] . "</td>";
            echo '<td style="width:20%">' . $row['enddate'] . "</td>";
            echo '<td style="width:20%">' . $row['desc'] . "</td>";
            echo '<td style="width:20%">' . $row['noofsubject'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($conn);
        ?>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
