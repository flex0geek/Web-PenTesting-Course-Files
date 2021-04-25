<?php

setcookie("sessionid","21232f297a57a5a743894a0e4a801fc3",time()+3600,"../secret/");

$conn = mysqli_connect("localhost","root","","test");

$sql = "SELECT * FROM contact";

$result = mysqli_query($conn, $sql);

?>

<html>
  <head>
    <title>Books Library</title>
    <link rel="stylesheet" type="text/css" href="../../style/css.css">
  </head>
  <body id="bodyId">
    <div class="header">
      <a href="index.php" class="logo">Books Library</a>
      <div class="header-right">
        <a href="../index.php">Home</a>
        <a href="../search.php">Search</a>
        <a href="../contact.php">Contact</a>
        <a href="../about.php#about">About</a>
        <a href="../profile.php">Profile</a>
        <a href="../login.php">Login</a>
      </div>
    </div>
    
    <div class="container">
    <div class="be-comment-block">
    	<div class="be-comment">
        <?php
        while($rows=mysqli_fetch_array($result)){
            echo '<span class="be-comment-name">';
            echo '<a>'.$rows['name'].'</a>';
            echo '<br><a>'.$rows['email'].'</a>';
            echo '<br><input type="hidden" value="'.$rows['user_agent'].'">';
            echo '</span>';
            echo '<p class="be-comment-text">'.$rows['message'].'</p>';
            echo '</div>';
        }
        ?>
    </div>
    </div>
    </div>
  </body>
</html>