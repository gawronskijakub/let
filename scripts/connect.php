<?php
  ini_set('display_errors', '0');
  session_start();
  
	$link = mysqli_connect("localhost", "root", "", "let_test");

	if($link === false) {
		die("Connection failed: " . mysqli_connect_errno());
	}


	
?>