<?php
	session_start();
	include("connect.php");
  
  // if(empty($_SESSION['user'])) {
  //   header("location: /let/login.php");

  //   die("Redirecting to login page");
  // }
	// echo "<pre>";
	// print_r($_SESSION);
	// echo "</pre>";


	//adding to database

	$stmt = mysqli_prepare($link, "INSERT INTO `users` (`first_name`, `last_name`, `login`, `password_hash`, `email`, `birth_date`, `create_date`, `account_status`, `account_type`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

  include("vars.php");

	mysqli_stmt_bind_param($stmt, "sssssssss", $first_name, $last_name, $login, $password_hash, $email, $birth_date, $create_date, $account_status, $account_type);

	mysqli_stmt_execute($stmt);

	// echo "<pre>";
	// print_r($_SESSION);
  // echo "</pre>";
  
	// if(mysqli_stmt_num_rows() > 0)
	// 	echo "Row inserted. Affected rows: ", mysqli_stmt_num_rows($stmt);

	// else 
	// 	echo "Row not inserted. Affected rows: ", mysqli_stmt_num_rows($stmt), '. ', mysqli_stmt_error($stmt);

	mysqli_stmt_close($stmt);
	// var_dump($account_status);


	mysqli_close($link);

	
?>