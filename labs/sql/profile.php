<?php
session_start();

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
        <a href="search.php">Search</a>
        <a class="active" href="profile.php">Profile</a>
        <a href="login.php">Login</a>
      </div>
    </div>
    
    <div class="container">
    <div class="be-comment-block">
        <div class="be-comment">
        <?php

        echo "<center><h1>Welcome <i>".@$_SESSION['username']."</i></h1></center>";

        ?>
        </div>
    </div>
    </div>
  </body>
</html>