<?php

# JSONP endpoint
header("Content-Type: application/json");

if(isset($_GET['callback'])){
	echo $_GET['callback'].'({"name":"Tester","email":"test@gmail.com"})';
}else{
	echo '{"name":"Tester","email":"test@gmail.com"}';
}