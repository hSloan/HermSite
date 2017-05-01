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

//Insert statement 
$insertUser = "INSERT INTO " . $tblName . " VALUES ("./*Insert Form Data Here*/.")"; 
//TODO create a function to be used upon pressing the submit button. 

$conn -> close();
?>
