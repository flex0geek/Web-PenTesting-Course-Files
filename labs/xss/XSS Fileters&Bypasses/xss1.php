<?php

# Bypass using Hex / unicode
echo "\u003Cimg src=x onerror=alert(0)\u003C";
$input = $_GET['q'];

function check($val){
	$illegal = "<>'\"";
	$ch = strpbrk($val, $illegal);

	if( $ch ){
		echo "'XSS DETECTED'";
	}else{
		echo "'".$val."'";
	}
}

?>

<div id=xssMe></div>

<script type="text/javascript">
	document.getElementById('xssMe').innerHTML = <?php check($input);?>;
</script>