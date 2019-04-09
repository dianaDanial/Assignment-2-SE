<?php
include 'dbconnect.php';
include 'menu.php';
?>

<html>
    <head>
        <title>Manage Program</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="logo.ico">
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="style3.css">
        <link rel="stylesheet" href="style4.css">
        <link rel="stylesheet" href="mycss.css">
        <script src="javascript.js"></script>

    </head>
    <body>
        <h1 class="w3-center " style="margin-top: 90px;margin-bottom:60px">Manage Qualification</h1>

            <?php

            function renderForm($name = '', $startdate = '', $enddate = '', $desc = '', $error = '', $id = '') {
                ?>
        <div style=" margin-left: 100px;margin-right:100px; ">
                <h2> <?php
                    if ($id != '') {
                        echo "Edit Program";
                    } else {
                        echo "New Program";
                    }
                    ?></h2></div>
        <div style=" margin-left: 100px;margin-right:100px; border:2px solid gray; border-radius: 15px;">
                <?php
                if ($error != '') {
                    echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error
                    . "</div>";
                }
                ?>

                <form action="" method="post">
                    <div>
                        <?php if ($id != '') { ?>
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                            <p>ID: <?php echo $id; ?></p>
    <?php } ?>
                        <table border='0' cellpadding='10'>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>Program Name</td>
                                <td>: <input type="text" name="name" value="<?php echo $name; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Start Date</td>
                                <td>: <input type="date" name="startdate" value="<?php echo $startdate; ?>"/></td>
                            </tr>
                            <tr>
                                <td>End Date</td>
                                <td>: <input type="date" name="enddate" value="<?php echo $enddate; ?>"/></td>
                            </tr>
                            <tr>
                                <td>Description </td>
                                <td>: <input type="text" name="desc" value="<?php echo $desc; ?>"/></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><input type="submit" style="float:right" name="submit" value="Submit" /></td>
                            </tr>
                        </table>

                    </div>
                </form>
        </body>
    </html>

    <?php
}

/* EDIT */
if (isset($_GET['id'])) {
// if the form's submit button is clicked, we need to process the form
    if (isset($_POST['submit'])) {
// make sure the 'id' in the URL is valid
        if (is_numeric($_POST['id'])) {
// get variables from the URL/form
            $id = $_POST['id'];
            $name = htmlentities($_POST['name'], ENT_QUOTES);
            $startdate = htmlentities($_POST['startdate'], ENT_QUOTES);
            $enddate = htmlentities($_POST['enddate'], ENT_QUOTES);
            $desc = htmlentities($_POST['desc'], ENT_QUOTES);
            $sdate=date("Y-m-d",strtotime($startdate));
            $edate=date("Y-m-d",strtotime($enddate));

// check that firstname and lastname are both not empty
            if ($name == '' || $sdate == '' || $edate == '' || $desc == '') {
// if they are empty, show an error message and display the form
                $error = 'ERROR: Please fill in all required fields!';
                renderForm($name, $startdate, $enddate, $desc, $error, $id);
            } else {
// if everything is fine, update the record in the database
                $sql = "UPDATE program SET name = '$name', startdate = '$sdate', enddate= '$edate', description='$desc' where idprogram='$id'";
                $result = mysqli_query($conn, $sql);
            if ($result) {
                /*if ($stmt = $mysqli->prepare("UPDATE qualification SET name = ?, minscore = ?, maxscore= ?, description=?, noofsubject=? WHERE id=?")) {
                    $stmt->bind_param("sddsi", $name, $minscore, $maxscore, $desc, $noofsubject, $id);
                    $stmt->execute();
                    $stmt->close();*/
                }
// show an error message if the query has an error
                else {
                    echo "ERROR: could not prepare SQL statement.";
                }

// redirect the user once the form is updated
                header("Location: home2.php");
            }
        }
// if the 'id' variable is not valid, show an error message
        else {
            echo "Error!";
        }
    }
// if the form hasn't been submitted yet, get the info from the database and show the form
    else {
// make sure the 'id' value is valid
        if (is_numeric($_GET['id']) && $_GET['id'] > 0) {
// get 'id' from URL
            $id = $_GET['id'];

// get the recod from the database
            $sql = "SELECT * FROM program where idprogram='$id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = $result->fetch_row();
            renderForm($row[2], $row[3], $row[4], $row[5], NULL, $id);
        }
           /* if ($stmt = $mysqli->prepare("SELECT * FROM qualification WHERE idqualification=?")) {
                $stmt->bind_param("i", $id);
                $stmt->execute();

                $stmt->bind_result($id, $name, $minscore, $maxscore, $desc, $noofsubject);
                $stmt->fetch();

                renderForm($name, $minscore, $maxscore, $desc, $noofsubject, NULL, $id);

                $stmt->close();
            } */else {
                echo "Error: could not prepare SQL statement";
            }
        } else {
            header("Location: home2.php");
        }
    }
} else {
    if (isset($_POST['submit'])) {
            $name = htmlentities($_POST['name'], ENT_QUOTES);
            $startdate = htmlentities($_POST['startdate'], ENT_QUOTES);
            $enddate = htmlentities($_POST['enddate'], ENT_QUOTES);
            $desc = htmlentities($_POST['desc'], ENT_QUOTES);
            $sdate=date("Y-m-d",strtotime($startdate));
            $edate=date("Y-m-d",strtotime($enddate));

        if ($name == '' || $sdate == '' || $edate == '' || $desc == '' ) {
            $error = 'ERROR: Please fill in all required fields!';
            renderForm($name, $sdate, $edate, $desc, $error);
        } else {
            $sql = "INSERT INTO program (name, startdate, enddate, description) VALUES ('$name','$sdate','$edate','$desc')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            //if ($stmt = $mysqli->prepare("INSERT INTO qualification (name, minscore, maxscore, description, noofsubject) VALUES ('$name','$minscore','$maxscore','$desc','$noofsubject')")) {
                /*$stmt->bind_param("sddsi", $name, $minscore, $maxscore, $desc, $noofsubject);
                $stmt->execute();
                $stmt->close();*/
            } else {
                echo "ERROR: Could not prepare SQL statement.";
            }
            header("Location: home2.php");
        }
    } else {
        renderForm();
    }
}
?>
</div>
<script>

</script>
</body>
</html>
