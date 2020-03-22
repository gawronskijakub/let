<?php
	session_start();
	include("connect.php");
  include("vars.php");

	//deleting from database

	$sql = "DELETE FROM `users` WHERE `login` = '$login';";
	
	// print_r($_SESSION);
	echo $login;

	mysqli_query($link, $sql);

	if($sql) {
		header("Location: ./../login.php");
	} else {
		header("Location: ./my-account.php?nope=1");
	}

	mysqli_close($link);

	
?>