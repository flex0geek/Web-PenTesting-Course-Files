<?php
session_start();
if(isset($_POST['uname']) && isset($_POST['pwd'])){
	if($_POST['uname'] == "guest" && $_POST['pwd'] == "guest") {
		$_SESSION['islogin'] = 1;
		$_SESSION['username'] = $_POST['uname'];
		setcookie("msg","msg.txt",time()+3600);
		setcookie("uid","2356452745678",time()+3600);
		setcookie("sessionid","asdfS4DFJ3ty354yV4uyvuvSDFVg",time()+3600);
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