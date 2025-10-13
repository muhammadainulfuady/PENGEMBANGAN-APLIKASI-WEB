<?php 
	require 'validate.inc';
	$erros = array();
	validateName($erros, $_POST, 'username');
	validateName($erros, $_POST, 'password');
	if ($erros) {
		foreach($erros as $err => $k) {
			echo "$err => $k". "<br>";
		}
	} else {
		echo 'Data OK!!';	
	}
?>