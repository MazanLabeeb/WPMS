<?php

// 	ADMIN EMAIL: admin@wpms.com
//  ADMIN PASS : wpmsproject100
$servername = "sql6.freemysqlhosting.net";
$username = "sql6519225";
$password = "QNei76tGUX";
$db = "sql6519225";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
  ?>
