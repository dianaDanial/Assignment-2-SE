<?php
include 'dbconnect.php';
include 'menu.php';
session_start();
$authenticate = $_SESSION["usertype"];

if($authenticate !=1){
    echo "<script> location.href='index.php'; </script>";
}


?>

<html>
    <head>
        <title>Manage Qualification & University</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="logo.ico">
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="style3.css">
        <link rel="stylesheet" href="style4.css">
        <link rel="stylesheet" href="mycss.css">
        <script src="javascript.js"></script>

    </head>
    <body>
        <div w3-include-html="menu.html"></div>

        <h1 class="w3-center " style="margin-top: 90px;margin-bottom:60px">Manage Qualification and University</h1>
        <div class="tab" style="margin-left: 90px;margin-right:90px">
            <button class="tablinks" onclick="openCity(event, 'qualification')" id="defaultOpen">Qualification</button>
            <button class="tablinks" onclick="openCity(event, 'university')">University</button>
        </div>
        <?php
        
        echo'<div id="qualification" class="tabcontent" style="margin-left: 90px;margin-right:90px">';
        $sql = "SELECT * FROM qualification";
        $result = mysqli_query($conn, $sql);

        $per_page = 3;
        $number = 0;

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

            echo '<h1>Manage Qualification</h1>';
            echo "<p><b>View Page:</b> ";
            for ($i = 1; $i <= $total_pages; $i++) {
                if (isset($_GET['page']) && $_GET['page'] == $i) {
                    echo $i . " ";
                } else {
                    echo "<a href='home1.php?page=$i'>$i</a> ";
                }
            }
            echo "</p>";

// display data in table
            echo "<table border='4' cellpadding='10'>";
            echo "<tr> "
            . "<th>No</th> "
            . "<th>Qualification Name</th> "
            . "<th>Minimum Score</th> "
            . "<th>Maximum Score</th> "
            . "<th>Description</th> "
            . "<th>No Of Subject</th>"
            . '<th><img src="pencil.png" alt="Edit" style="width:15px;height:15px;"></th>'
            . '<th><img src="delete.png" alt="Delete" style="width:15px;height:15px;"></th>'
            . "</tr>";

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
                echo '<td></td>';
                echo '<td>' . $row[1] . '</td>';
                echo '<td>' . $row[2] . '</td>';
                echo '<td>' . $row[3] . '</td>';
                echo '<td>' . $row[4] . '</td>';
                echo '<td>' . $row[5] . '</td>';
                echo '<td><a href="qualification.php?id=' . $row[0] . '">Edit</a></td>';
                echo '<td><a href="delete.php?id=' . $row[0] . '">Delete</a></td>';
                echo "</tr>";
            }
// close table>
            echo "</table>";
        } else {
            echo "No results to display!";
        }
        echo '<br><a href="qualification.php">Add New Qualification</a>';
        //  }
        echo'</div>';

        echo'<div id="university" class="tabcontent" style="margin-left: 90px;margin-right:90px">';

        $sql2 = "SELECT * FROM university";
        $result2 = mysqli_query($conn, $sql2);


        if (mysqli_num_rows($result2) > 0) {
            $total_results = mysqli_num_rows($result2);
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
            echo '<h1>Manage University & Admin</h1>';
            echo "<p><b>View Page:</b> ";
            for ($i = 1; $i <= $total_pages; $i++) {
                if (isset($_GET['page']) && $_GET['page'] == $i) {
                    echo $i . " ";
                } else {
                    echo "<a href='home1.php?page=$i'>$i</a> ";
                }
            }
            echo "</p>";

// display data in table
            echo "<table border='4' cellpadding='10'>";
            echo "<tr> "
            . "<th>No</th> "
            . "<th>University Name</th> "
            . "<th>Admin</th>"
            . '<th><img src="pencil.png" alt="Edit" style="width:15px;height:15px;"></th>'
            . '<th><img src="delete.png" alt="Delete" style="width:15px;height:15px;"></th>'
            . "</tr>";

// loop through results of database query, displaying them in the table
            for ($i = $start; $i < $end; $i++) {
// make sure that PHP doesn't try to show results that don't exist
                if ($i == $total_results) {
                    break;
                }

// find specific row
                $result2->data_seek($i);
                $row = $result2->fetch_row();

// echo out the contents of each row into a table
                echo "<tr>";
                echo '<td></td>';
                echo '<td>' . $row[1] . '</td>';
                echo '<td><a href="user.php?id=' . $row[0] . '">Admin</a></td>';
                echo '<td><a href="university.php?id=' . $row[0] . '">Edit</a></td>';
                echo '<td><a href="delete.php?id=' . $row[0] . '">Delete</a></td>';
                echo "</tr>";
            }
// close table>
            echo "</table>";
        } else {
            echo "No results to display!";
        }
        //  }
        echo '<br><a href="university.php">Add New University</a>';
        echo'</div>';
        mysqli_close($conn);
        ?>

        <script>
            
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }

// Get the element with id="defaultOpen" and click on it
            document.getElementById("defaultOpen").click();
        </script>

    </body>
</html>