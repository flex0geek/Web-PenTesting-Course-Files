<?php
session_start();
include 'fun.php';
if($_SESSION['islogin'] != 1){
    header("Location: login.php");
    die();
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
        <a href="add.php">Add</a>
        <a href="login.php">Login</a>
      </div>
    </div>
    <div><br><br>
<div>
        <center>
            <br><br><br><h3 id="type"><?php @include $_COOKIE['msg']?></h3>
        </center>
    </div>
    </div>
  </body>
</html>