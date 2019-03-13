<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//function dbconnect() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "highed";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
//return $conn;
/* Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";*/
//}

function dlookup($table_name, $field_name, $where_condition) {
    global $db;
    //$result="";
    $sql = "SELECT $field_name FROM $table_name";
    if (!empty($where_condition)) { $sql.=" WHERE $where_condition"; }  
    $rec = mysqli_query($db,$sql);
//    echo $sql."<br>";
    $uu = mysqli_fetch_assoc($rec);
    //$row = mysqli_fetch_array($rec);
    return $uu; 
  }
