<?php
$print = 0;
if(isset($_POST['name'])){

	$conn = mysqli_connect('localhost','root','','test');

	$name = $_POST['name'];
	$sql = 'SELECT * FROM books where name like "%'.$name.'%"';

	$res = mysqli_query($conn, $sql);
	$rows = @mysqli_fetch_array($res);
	$print = 1;
}

?>
<html>
  <head>
    <title>Books Application</title>
    <link rel="stylesheet" type="text/css" href="../style/css.css">
  </head>
  <body>
    <div class="header">
      <a href="index.php" class="logo">Books Library</a>
      <div class="header-right">
        <a href="index.php">Home</a>
        <a class="active" href="search.php">Search</a>
        <a href="profile.php">Profile</a>
        <a href="login.php">Login</a>
      </div>
    </div><br><br><br><br>
    <center>
        <form method="post">
            <label>Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter a name here" autocomplete="off">
            <input type="submit" id="search" value="search">
        </form>
    <div ng-app>
        <p id="printOut">
        	<?php
if ($print == 1){
	if($rows){
		echo "<label>Auther: ".$rows['auther']."</label><br>";
		echo "<label>Book Name: ".$rows['name']."</label><br>";
		echo "<label>Story: ".$rows['story']."</label>";
	}
}

        	?>
        </p>
    </div>
    </center>
  </body>
</html>