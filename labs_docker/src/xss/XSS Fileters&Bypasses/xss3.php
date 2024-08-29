<?php

# wirte valid syntax

$input = @$_GET['q'];

function check($val){
	$finder = 0;
	if($finder)
		echo "fixed value";
	else
		echo $val;
}

?>

<div id=xssMe></div>
<script type="text/javascript">
	function vulnFunc(){
		var x = "<?php echo check($input);?>";
	}

	document.getElementById('xssMe').innerHTML = "<h1>Dummy String</h1>"
</script>