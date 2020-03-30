<?php
	session_start();
	include("./connect.php");
  include("./vars.php");

	//updating account type in database

	if(!empty($_GET["id"]) && !empty($_GET["type"])) {
		$id = $_GET["id"];
		$type = $_GET["type"];

		$sql = "UPDATE `users` SET `account_type` = '$type' WHERE `user_id` = $id;";
		
		mysqli_query($link, $sql);

		$_SESSION["user"]["admin_status"] = $type;

		if(mysqli_affected_rows($link) > 0) {
			header("Location: ./../users.php?updatedT=yup");
		} else {
			header("Location: ./../users.php?updatedT=nope");
		}
	}

	

	mysqli_close($link);

	
?>