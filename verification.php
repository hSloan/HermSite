<?php

$servername = "localhost";
$username = "herm";
$password = "nagrus9";
$dbname = "hermDB";
$tblName = "Users"

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$username = mysql_real_escape_string($_POST['name']);
$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['password']);
$fname  = mysql_real_escape_string($_POST['fname']);
$lname = mysql_real_escape_string($_POST['lname']);

function createUser ($u, $e, $p, $f, $l) {
  //Insert statement 
  $insertUser = "INSERT INTO " . $tblName . " VALUES (". $u . $e . $p . $f . $l .")";
  mysql_query($insertUser);
}

createUser($username, $email, $password, $fname, $lname); 
$conn -> close();
?>
