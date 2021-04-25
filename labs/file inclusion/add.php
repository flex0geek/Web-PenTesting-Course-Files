<?php
session_start();
include 'fun.php';
$msg = "";
if(isset($_POST['url'])){
    $url = $_POST['url'];
    if(!strpos($url, ".json")){
        $msg = "Not allowed extension, try (json) extension.";
    }else{
        $urlSplit = explode("/", $url);
        $file = $urlSplit[count($urlSplit)-1];
        get($url, $file);
    }
}

?>
<html>
  <head>
    <title>Books Library</title>
    <script src="https://code.angularjs.org/1.1.5/angular.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../style/css.css">
  </head>
  <body id="bodyId">
    <div class="header">
      <a href="index.php" class="logo">Books Library</a>
      <div class="header-right">
        <a href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <a class="active" href="add.php">Add</a>
        <a href="login.php">Login</a>
      </div>
    </div>
    <div>
        <center>
            <form method="post">
                <input id=email type="url" name="url" autocomplete="off" placeholder="URL to file"><br>
                <input id=send type="submit" value="get content">
            </form>
            <p><?php if($msg != ""){echo $msg;}?></p>
        </center>
    </div>
  </body>
</html>