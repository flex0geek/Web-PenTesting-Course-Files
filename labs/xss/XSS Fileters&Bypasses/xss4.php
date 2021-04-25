<?php

# Bypass using external js

$input = $_GET['q'];

function check($val){
	echo strtoupper($val);
}

?>

<div id=xssMe><?php echo check($input);?></div>