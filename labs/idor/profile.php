<?php
session_start();

if($_SESSION['islogin'] != 1){
	header("Location: login.php");
	die();
}

$conn = mysqli_connect('localhost', 'root', '', 'test');

$csrfToken = md5("SECRET");

if( isset($_POST['userId']) && isset($_POST['comment']) ){
	$uname = htmlentities($_SESSION['username']);
	if($_COOKIE['uid'] == "c4ca4238a0b923820dcc509a6f75849b"){
		$uname = "Admin";
	}
    $comment = htmlentities($_POST['comment']);
    $link = "#";
    $sql = "INSERT INTO comments values('$uname','$comment','$link')";
    $res = mysqli_query($conn, $sql);
}

$sql = "SELECT * FROM comments";

$result = mysqli_query($conn, $sql);

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
        <a class="active" href="profile.php">Profile</a>
        <a href="login.php">Login</a>
      </div>
    </div>
    <div class="container">
    <div class="be-comment-block">
        <div class="be-comment">
        <?php
			while($rows=mysqli_fetch_array($result)){
			    echo '<span class="be-comment-name">';
			    echo '<a href="'.$rows['link'].'">'.$rows['uname'].'</a></span>';
			    echo '<p class="be-comment-text">'.$rows['comment'].'</p>';
			    echo '</div>';
			}
        ?>
        </div>
        <form class="form-block" method="post">
            <div class="row">
                <div class="col-xs-12">                         
                    <div class="form-group">
                        <textarea name="comment" class="form-input" required="" placeholder="Your text"></textarea><br>
                        <input type="hidden" name="csrfToken" value="<?php echo $csrfToken;?>">
                        <input type="hidden" name="userId" value="51324">
                    </div>
                </div>
                <input style="width: 100px;" type="submit" value="Comment">
            </div>
        </form>
    </div>
    </div>
  </body>
</html>