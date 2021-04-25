<?php
session_start();

if($_SESSION['islogin'] != 1){
    header("Location: login.php");
    die();
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
        <a class="active" href="profile.php">Profile</a>
        <a href="login.php">Login</a>
      </div>
    </div>
    <div id=output>
    	
    </div>
    <div class="container">
    	<script type="text/javascript">
    		function userInfo(data){
    			var name = '<center><span>User Name: '+data["username"]+'</span><br>',
    				email = '<span>Email: '+data['email']+'</span><br>',
    				fname = '<span>Full Name: '+data['Full Name']+'</span></center>';
    			document.getElementById('output').innerHTML = name+email+fname;
    		}
    	</script>
    	<script src="http://vuln.labs/labs/jsonp/info.php?callback=userInfo"></script>
    </div>
  </body>
</html>