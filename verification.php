<html>
<head>
  <meta charset="UTF-8">
  <title>HERM App Dev and Research</title>
  <link href="base.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-3.1.0.min.js">
  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
  </script>
  <script src="functions.js">
  </script>
</head>
<body>
  <div class="mainLogo"><img src='img/HermHeader.png'></div>
  <div class="menu-bar fixed full tl p0">
    <div class="menu">
      <ul>
        <li class="link relative tl block fl" id="link-1">WHO IS HERM?</li>
        <li class="link relative tl block fl" id="link-2">WEB SERVICE</li>
        <li class="link relative tl block fl" id="link-3">SOCIAL MEDIA</li>
        <li class="link relative tl block fl" id="link-4">LOGIN</li>
        <li class="link relative tl block fl" id="link-5">CONTACT US</li>
      </ul>
    </div>
  </div>
<?php

function connect () {
  static $conn; 

  if(!isset($conn)) {
    $config = parse_ini_file('../config.ini'); 
    // Create connection
    $conn = mysqli_connect('localhost',$config['username'],$config['password'],$config['dbname']);
  }
  // Check connection
  if ($conn === false) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  return $conn;
}

function query($query) {
  $connection = connect(); 

  $result = mysqli_query($connection,$query); 

  return $result;
}

function error() {
  $connection = connect(); 
  return mysqli_error($connection);
}

function select($query) {
  $tuple = array(); 
  $result = query($query); 
  if ($result === false) {
    return false;
  }

  //get all attributes within tuple
  while ($row = mysqli_fetch_assoc($result)) {
    $tuple[] = $row;  
  }
  return $tuple; 
}

function escape($value) {
  $connection = connect();
  return "'". mysqli_real_escape_string($connection,$value) . "'";
}

function createUser ($u, $e, $p, $f, $l) {
  //Insert statement 
  $insertUser = query("INSERT INTO `users` VALUES (". $u . "," . $e . "," . $p . ",". $f . "," . $l .")");
  $result = mysql_query($insertUser);
  if ($result === false) {
    echo "<p>New User Not Added!</p>"; 
  }
}

$username = escape($_POST['name']);
$email = escape($_POST['email']);
$password = escape($_POST['password']);
$fname  = escape($_POST['fname']);
$lname = escape($_POST['lname']);



createUser($username, $email, $password, $fname, $lname);
?>
 <div class="scroller"><!--<div class="scroll-arrow" id="scrollleft">
      </div>
      <div class="scroll-arrow" id="scrollright">
      </div>
      <div class="clear"></div>-->
      <img src="img/HermShell1.png"></div>
    </div>
  </div>
  <div class="footer block bl fixed">
    Click one of the tabs above to learn more.
  </div><!--<div class="wrapper">
        <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        </ul>
      </div>-->
</body>
</html>
