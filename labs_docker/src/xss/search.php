<html>
  <head>
    <title>Books Application</title>
    <script src="https://code.angularjs.org/1.1.5/angular.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../style/css.css">
  </head>
  <body>
    <div class="header">
      <a href="index.php" class="logo">Books Library</a>
      <div class="header-right">
        <a href="index.php">Home</a>
        <a class="active" href="search.php">Search</a>
        <a href="contact.php">Contact</a>
        <a href="about.php#about">About</a>
        <a href="profile.php">Profile</a>
        <a href="login.php">Login</a>
      </div>
    </div><br><br><br><br>
    <center>
        <form method="get">
            <label>Name:</label>
            <input type="text" id="name" name="u" placeholder="Enter a name here" autocomplete="off">
            <input type="submit" id="search" value="search">
        </form>
    <div ng-app>
        <p id="printOut">
            <?php 
            if(isset($_GET['u'])){
                echo "There is no result for: <b>".htmlspecialchars($_GET['u'])."</b>";
            }
            ?>
        </p>
    </div>
    </center>
  </body>
</html>