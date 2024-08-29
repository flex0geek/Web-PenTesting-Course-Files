<?php
# 8889
# 3306

$username = "ctfuser";
$password = "P@sswp@@1";
$db = 'labs_db';

$conn = mysqli_connect(
  '127.0.0.1', # service name
  $username, # username
  $password, # password
  $db # db table
);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
