<?php

# Bypass CSP using jsonp

$headerCSP = "Content-Security-Policy: default-src 'self';script-src 'self';img-src 'self';object-src 'none';";
header($headerCSP);

$input = $_GET['q'];

function check($val){
	
	echo $val;

}

?>

<div id=xssMe><?php check($input);?></div>