<?php

class User{
	
	public $u;
	public $r;
	public $dn;

}

class getDate{
	public $command2GetDate;

	function __construct($d){
		$this->command2GetDate = $d;
	}

	function __wakeup(){
		system($this->command2GetDate);
	}
}

?>