<?php
session_start();
include 'classes.php';
if($_SESSION['islogin'] != 1){
    header("Location: login.php");
    die();
}

$sessionid = $_COOKIE['sessionid'];
$deser = unserialize(base64_decode($sessionid));

$role = $deser->r;
$uname = $deser->u;
$dn = $deser->dn;

if($role == 'admin'){
    $dn = "Admin";
}

?>

<html>
  <head>
    <title>Books Library</title>
    <link rel="stylesheet" type="text/css" href="../style/css.css">
  </head>
  <body id="bodyId">
    <div class="header">
      <a href="index.php" class="logo">Books Library</a>
      <div class="header-right">
        <a href="index.php">Home</a>
        <a class="active" href="profile.php">Profile</a>
        <a href="login.php">Login</a>
      </div>
    </div>
    <center>
        <h3>Welcome <?php echo $dn;?>.</h3>
    </center>
    <div class="container">
    <div class="be-comment-block">
    </div>
    </div>
  </body>
</html>