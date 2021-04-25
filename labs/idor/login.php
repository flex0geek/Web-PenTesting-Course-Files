<?php
session_start();
if(isset($_POST['uname']) && isset($_POST['pwd'])){
    if($_POST['uname'] == "guest" && $_POST['pwd'] == "guest") {
        $_SESSION['islogin'] = 1;
        $_SESSION['username'] = $_POST['uname'];
        setcookie("uid","a9b6b5a8a81a04a77ce3c809a94fda13",time()+3600);
        setcookie("sessionid","5de6277abc3a11b8ad3e5b7ce97aa5be",time()+3600);
        setcookie("dump","d9d4f495e875a2e075a1a4a6e1b9770f",time()+3600);
        header("Location: profile.php");
    }else{
        echo "<script>alert('Username/Password is invalid.')</script>";
    }
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
        <a href="profile.php">Profile</a>
        <a class="active" href="login.php">Login</a>
      </div>
    </div>
    <div><br><br>
        <center>
        <form method="POST">
            <input type="text" id="uname" name="uname" placeholder="Username" autocomplete="off"><br>
            <input type="password" id="pwd" name="pwd" placeholder="Password" autocomplete="off"><br>
            <input type="submit" value="Login" style="background-color: dodgerblue;">
        </form>
        </center>
    </div>
  </body>
</html>