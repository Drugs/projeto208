<?php
	$host = 'localhost'; //o caminho do servidor, ou um ip, ou DNS, ou local
	$user = 'root';
	$pass = '';
	$db = 'bd208'; #o nome do banco que vocês criaram
		
	$con = mysqli_connect($host, $user, $pass, $db);
	
	#if($con){
	#	echo "Connected.";
	#}else{
	#	echo "Error.";
	#}
?>