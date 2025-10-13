<?php 
	function validateName(&$errors, $field_list, $field_name) {
	$patternName = "/^[a-zA-Z'-]{3,}+$/"; // format username (alfabet)
	// $patternEmail = "/^[a-z0-9]@[a-z]\.[a-z]/";
	// $patternPassword = "/^[a-z0-9!@+$]{3,}$/";
	if (!isset($field_list[$field_name]) ||
		empty($field_list[$field_name])) {
		$errors[$field_name] = 'required';
	}else if (!preg_match($patternName, $field_list[$field_name])) {
		$errors[$field_name] = 'invalid';
	}else if(!preg_match($patternPassword, $field_list[$field_name])) {
		$errors[$field_name] = 'invalid';
	}
}
?>