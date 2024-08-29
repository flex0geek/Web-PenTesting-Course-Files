<?php

# Bypass using operation [ - + * & ^ ]

$input = $_GET['q'];

function check($val){

	$out = preg_replace("/[\%\[\],\{\}]/", "", $val);
	
	echo $out;

}

?>

<script type="text/javascript">
	window.test={
		site: "test",
		page:{
			name: '<?php check($input);?>';
		}
	}
</script>