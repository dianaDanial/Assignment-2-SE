<?php
//include 'dbconnect.php';
//include 'menu.php';
$conn = mysqli_connect('localhost', 'root', '', 'highEd');

/*
  $sql = "SELECT * FROM application WHERE applicantid !='$applicant' ";
  $result = mysqli_query($conn, $sql);
  $uni = mysqli_fetch_array($result);
  $uniname = $uni[1];
  $_SESSION["uniname"]=$uniname;
 * 
 */
?>

<html>
    <head>
        <title>Manage Program </title>
        <?php
        include 'tab.php';
        $university = $_SESSION["university"];
        $authenticate = $_SESSION["usertype"];
        $applicant = $_SESSION['applicant'];
        if ($authenticate == NULL) {
            //echo "<script> location.href='index.php'; </script>";
        }
        ?>
    <h1 style="text-decoration: underline;">List Of Programme Available </h1>
    <?php
    //echo'<div id="qualification" class="tabcontent" style="margin-left: 90px;margin-right:90px">';
    //$sql = "SELECT * FROM application WHERE applicantid !='$applicant' and status='Pending'";
    $sql = "SELECT * FROM program ";

    //SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
    //FROM Orders
    //INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;
    $result = mysqli_query($conn, $sql);
    $per_page = 3;
    $number = 0;
    $index = 0;
    if (mysqli_num_rows($result) > 0) {

        $total_results = mysqli_num_rows($result);
// ceil() returns the next highest integer value by rounding up value if necessary
        $total_pages = ceil($total_results / $per_page);

// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)
        if (isset($_GET['page']) && is_numeric($_GET['page'])) {
            $show_page = $_GET['page'];

// make sure the $show_page value is valid
            if ($show_page > 0 && $show_page <= $total_pages) {
                $start = ($show_page - 1) * $per_page;
                $end = $start + $per_page;
            } else {
// error - show first set of results
                $start = 0;
                $end = $per_page;
            }
        } else {
// if page isn't set, show first set of results
            $start = 0;
            $end = $per_page;
        }
        echo '<div style="margin-left:100px;margin-right:100px">';
        //echo '<div style="margin-top: 90px;margin-bottom:40px"><h1>Manage Program @ '. $uniname[1] . '</h1></div>';

        echo "<p><b>View Page:</b> ";
        for ($i = 1; $i <= $total_pages; $i++) {
            if (isset($_GET['page']) && $_GET['page'] == $i) {
                echo $i . " ";
            } else {
                echo "<a href='application.php?page=$i'>$i</a> ";
            }
        }
        echo "</p>";

// display data in table
        echo "<table class='table table-striped'>";
        echo "<tr> "
        . "<th>NO</th> "
        . "<th>UNIVERSITY</th> "
        . "<th>PROGRAM NAME</th> "
        . "<th>PROGRAM DESCRIPTION</th> "
        . "<th>OPEN APPLICATION</th> "
        . "<th>CLOSE APPLICATION</th> "
        . '<th>ACTION</th>'
        . "</tr>";
        if ($index <= $total_results) {
            $index++;
        }

// loop through results of database query, displaying them in the table
        for ($i = $start; $i < $end; $i++) {
// make sure that PHP doesn't try to show results that don't exist
            if ($i == $total_results) {
                break;
            }

// find specific row
            $result->data_seek($i);
            $row = $result->fetch_row();

// echo out the contents of each row into a table
            echo "<tr>";
            $total = mysqli_num_rows($result);

            echo '<td>' . $index . '</td>';
            $sql2 = "SELECT universityname FROM university where universityid!='$row[5]'";
            $result2 = mysqli_query($conn, $sql2);
            $uniname = mysqli_fetch_assoc($result2);
            //$uname = $uniname['universityname'];
            echo '<td>' . $uniname['universityname'] . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td>' . $row[4] . '</td>';
            //$_SESSION["programmeName"] = $row[1];
            echo '<td>' . date('d F Y', strtotime($row[2])) . '</td>';
            echo '<td>' . date('d F Y', strtotime($row[3])) . '</td>';
            //echo '<td>' . $row[4] . '</td>';
            $sql3 = "SELECT programmeid,status FROM application WHERE programmeid !='$row[0]' and applicantid ='$applicant'";
            $result3 = mysqli_query($conn, $sql3);
            $app = mysqli_fetch_assoc($result3);
            if ($app['programmeid'] == null) {
                echo '<td><a href="application.php?id=' . $row[0] . '"><button type="submit" class="btn btn-warning" name="newP" value="New Program">View Status</button></a></td>';
            } else {
                echo '<td><a href="application.php?id=' . $row[0] . '"><button type="submit" class="btn btn-success" name="newP" value="New Program">Apply</button></a></td>';
            }
            ////echo '<td><a href="manageprogram.php?id=' . $row[0] . '"><button type="submit" class="btn btn-warning" name="edit_page">Edit</button></a></td>';
            //echo '<td><a href="manageprogram.php?id=' . $row[0] . '"><button type="submit" class="btn btn-danger" name="edit_page">Delete</button></a></td>';
            echo "</tr>";
        }

// close table>
        echo "</table>";
    } else {
        echo "<div style='margin: 40px 20px 20px 20px'>No result to display!</div>";
    }
    //echo '<br><a href="manageprogram.php">';
    //echo '<button class="btn btn-info" type="submit" name="newP" value="New Program">New Programme</button><br>';
    //echo '</a>';
    //echo '<br><a href="qualification.php">Add New Program</a>';
    //  }
    echo'</div>';

    mysqli_close($conn);
    ?>

    <script>

    </script>

</body>
</html>


