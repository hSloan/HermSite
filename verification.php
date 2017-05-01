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

$username = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['password'];

function createUser ($username, $email, $password) {
  //Insert statement 
  $insertUser = "INSERT INTO " . $tblName . " VALUES (". $username . $email . $password . ")";
}

//TODO create a function to be used upon pressing the submit button. 

$conn -> close();
?>
