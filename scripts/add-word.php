<?php
	session_start();
	include("connect.php");

	//adding word to database

	$stmt = mysqli_prepare($link, "INSERT INTO `words` (`polish`, `english`) VALUES (?, ?)");

	$polish = mysqli_real_escape_string($link, $_POST['polish']);
	$english = mysqli_real_escape_string($link, $_POST['english']);
	
	mysqli_stmt_bind_param($stmt, "ss", $polish, $english);

	mysqli_stmt_execute($stmt);

	if(mysqli_stmt_affected_rows($stmt) > 0) {
		header("Location: ./../add-words.php?added=yes");
	} else {
		header("Location: ./../add-words.php?added=no");
	}

	mysqli_stmt_close($stmt);


	mysqli_close($link);

	
?>