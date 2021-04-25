<?php
session_start();
$conn = mysqli_connect('localhost', 'root','','test');
if(isset($_POST['csrftoken']) && isset($_POST['nemail'])){

  $csrftoken = $_POST['csrftoken'];
  $newEmail = addslashes($_POST['nemail']);

  $sql2update = "UPDATE users_csrf SET email='$newEmail' WHERE username='guest';";
  $res2update = mysqli_query($conn, $sql2update);

}

// if(isset($_POST['csrftoken']) && isset($_POST['nemail'])){
//   if($_SESSION['t'] != $_POST['csrftoken']){
//     echo "<script>alert('CSRF Token invalid.')</script>";
//   }else{
//     $csrftoken = $_POST['csrftoken'];
//     $newEmail = addslashes($_POST['nemail']);

//     $sql2update = "UPDATE users_csrf SET email='$newEmail' WHERE username='guest';";
//     $res2update = mysqli_query($conn, $sql2update);
//   }
// }

$token = md5(random_bytes(100));
// $_SESSION['t'] = $token;


$sql2getEmail = "SELECT email FROM users_csrf";
$res2getEmail = mysqli_query($conn, $sql2getEmail);
$rows = mysqli_fetch_array($res2getEmail);

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
        <a class="active" href="settings.php">Settings</a>
        <a href="login.php">Login</a>
      </div>
    </div>
    <div><br><br>
    	<center>
    		<h2>Email: <?php if($rows){echo $rows['email'];}?></h2>
    		<hr>
    	<form method="POST">
    		
    		<div>
    			<input id="email" type="text" name="nemail" placeholder="New Email">
    			<input type="hidden" name="csrftoken" value="<?php echo $token;?>">
    		</div>

    		<input type="submit" id="send" value="Change" style="background-color: dodgerblue;">
    	</form>
    	</center>
    </div>
  </body>
</html>