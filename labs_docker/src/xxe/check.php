<?php
session_start();

// libxml_disable_entity_loader(true);

$xm = file_get_contents("php://input");
$dom = new DOMDocument();
$dom->loadXML($xm, LIBXML_NOENT | LIBXML_DTDLOAD);
$login = simplexml_import_dom($dom);
$user = $login->user;
$pass = $login->pass;

if( $user == "guest" && $pass == "guest" ){
	$_SESSION['islogin'] = 1;
	$_SESSION['username'] = $user;
	header("Location: profile.php");
}else{
	echo "t";
}