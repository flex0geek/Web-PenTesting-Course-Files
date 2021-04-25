<?php
session_start();
include 'fun.php';

$f = @$_GET['f'];
$blocked = array('../');

if( !in_array($f, $blocked) ){
    getFile($f);
}

// Delete lines fomr 5 to 10
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
        <a class="active" href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="add.php">Add</a>
        <a href="login.php">Login</a>
      </div>
    </div>
    <div>
        <center>
            <br><br><br><h3 id="type"></h3>
        </center>
    </div>
    <script type="text/javascript">
        var msg = "Welcome.",
            i=0,
            body=document.getElementById('bodyId');
        body.onload = function(){
            'use strict';
            var typeWriter = setInterval(function(){

                document.getElementById('type').innerHTML += msg[i];
                i = i + 1;

                if(i>msg.length-1){
                    clearInterval(typeWriter)
                }
            }, 100);
        }
    </script>
  </body>
</html>