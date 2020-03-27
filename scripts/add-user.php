<?php
	session_start();
	include("connect.php");

	//adding to database

	$stmt = mysqli_prepare($link, "INSERT INTO `users` (`first_name`, `last_name`, `login`, `password_hash`, `email`, `birth_date`, `create_date`, `account_status`, `account_type`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

  include("vars.php");

	mysqli_stmt_bind_param($stmt, "sssssssss", $first_name, $last_name, $login, $password_hash, $email, $birth_date, $create_date, $account_status, $account_type);

	mysqli_stmt_execute($stmt);

	mysqli_stmt_close($stmt);

	mysqli_close($link);

	
?>