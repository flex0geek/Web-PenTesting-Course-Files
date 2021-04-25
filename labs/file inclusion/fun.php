<?php

function read($fileName){
	@include $fileName;
}

function get($url, $name){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	$data = curl_exec($ch);

	if(!$data){
		$data = @file_get_contents($url);
	}
	@file_put_contents("files/".$name, $data);
}

function getFile($file){
	$path =__DIR__.$file;
	$open = @fopen($path,"r");
	$data = @fread($open,8192);

	echo $data;
	@fclose($open);
}