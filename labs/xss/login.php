<?php
session_start();
if(isset($_POST['uname']) && isset($_POST['pwd'])){
	if($_POST['uname'] == "guest" && $_POST['pwd'] == "guest123") {
		$_SESSION['islogin'] = 1;
		$_SESSION['username'] = $_POST['uname'];
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
        <a href="search.php">Search</a>
        <a href="contact.php">Contact</a>
        <a href="about.php#about">About</a>
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