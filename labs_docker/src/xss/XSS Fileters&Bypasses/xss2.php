<?php

# Bypass using eval

$input = $_GET['q'];

function check($val){
	$f = preg_match_all('#(write|confirm|alert|prompt|src)#i', $GLOBALS['input']);
	if($f)
		echo "XSS DETECTED";
	else
		echo $val;
}

?>

<div id=xssMe><?php check($input);?></div>
