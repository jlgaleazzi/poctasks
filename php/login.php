<?php

require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$userId = $_POST['user'];
	$password = $_POST['password'];
	
	
	$query = mysql_query("SELECT employee_id,employee_type FROM employees  WHERE employee_id = '$userId' AND employee_password = '$password'") or die(mysql_error());
	
	$row = mysql_fetch_array($query);
	
	if (!empty($row['employee_id'])) {
		session_start();
		echo "looged in as ";
	} else
	{
		echo ("not logged in");
	}
	
	
	
	
}

?>