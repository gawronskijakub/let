<?php
	session_start();
	include("connect.php");
	include("vars.php");

	//deleting from database

	$sql = "DELETE FROM `users` WHERE `login` = '$login';";

	mysqli_query($link, $sql);

	if(mysqli_affected_rows($link) > 0) {
		header("Location: ./../login.php?deleted=yup");
	} else {
		if($_SESSION["user"]["admin_status"] === "admin") {
			header("Location: ./../my-account-admin.php?deleted=nope");
		} else {
			header("Location: ./../my-account.php?deleted=nope");
		}
	}

	mysqli_close($link);
?>