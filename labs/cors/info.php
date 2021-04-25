<?php
session_start();

if($_SESSION['islogin'] != 1){
	header("Location: login.php");
	die();
}

$origin = "mydomain.com";
if ( strpos(@$_SERVER['HTTP_ORIGIN'], "mydomain.com") ){
	$origin = @$_SERVER['HTTP_ORIGIN'];
}

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");

echo '{"name":"Guest user", "phone number":"0234235","email":"email@gmail.com","adddress":"street 3","own books":["Book one","Book two","Book three"],"private books":["book 4","book 5"]}';