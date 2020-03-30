<?php
	session_start();
	include("./connect.php");
	include("./vars.php");

	//deleting from database

		$sql = "DELETE FROM `users` WHERE `login` = '$login';";

		mysqli_query($link, $sql);

		if(mysqli_affected_rows($link) > 0) {
			header("Location: ./../logout.php");
		} else {
			header("Location: ./../my-account.php?deleted=nope");
		}

	mysqli_close($link);
?>