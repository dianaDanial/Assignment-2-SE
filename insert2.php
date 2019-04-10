<?php

if(isset($_SESSION["username"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=highEd", "root", "");
 for($count = 0; $count < count($_POST["username"]); $count++)
 {
  $query = "INSERT INTO result
  (subjectName, grade, score)
  VALUES ('$_SESSION["username"]',:subjectName, :grade, :score)
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':subjectName'  => $_POST["subjectName"][$count],
    ':grade' => $_POST["grade"][$count],
    ':score'  => $_POST["score"][$count],
   )
  );
 }
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'ok';
 }
}
?>
