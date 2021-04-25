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
        <a href="search.php">Search</a>
        <a href="contact.php">Contact</a>
        <a class="active" href="about.php#about">About</a>
        <a href="profile.php">Profile</a>
        <a href="login.php">Login</a>
      </div>
    </div>
    <div>
        <center>
            <br><br><br><h2 id="type"></h2>
        </center>
    </div>
    <script type="text/javascript">

        var source="This is "+decodeURIComponent(location.hash.split("#")[1])+" page.";
        var h3 = document.getElementById("type");
        h3.innerHTML = source;
    </script>
  </body>
</html>