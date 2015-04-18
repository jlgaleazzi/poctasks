<?php
 $host="127.0.0.1";
 $user='taskweb';
 $pass='web09task';
 $connect = mysql_connect($host,$user,$pass);

 if (!$connect) {
	die ('Could not connect: '.mysql_error()); 
 }
 mysql_select_db('taskdb');
 
?>