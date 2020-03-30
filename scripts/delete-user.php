<?php
	session_start();
	include("./connect.php");
	include("./vars.php");

	//deleting from database (from users.php)

	if(!empty($_GET["id"])) {

		$id = $_GET["id"];

		$sql = "DELETE FROM `users` WHERE `user_id` = $id;";

		mysqli_query($link, $sql);

		if(mysqli_affected_rows($link) > 0) {
			if($_SESSION["user"]["id"] === $id) {
				header("Location: ./../logout.php");
			} else {
				header("Location: ./../users.php?deletedA=yup");
			}
		} else {
			header("Location: ./../users.php?deletedA=nope");
		}
	}

	mysqli_close($link);
?>