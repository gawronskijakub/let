<?php
	session_start();
	include("./connect.php");
  include("./vars.php");

	//updating account status in database

	if(!empty($_GET["id"]) && !empty($_GET["status"])) {
		$id = $_GET["id"];
		$status = $_GET["status"];

		$sql = "UPDATE `users` SET `account_status` = '$status' WHERE `user_id` = $id;";
		
		mysqli_query($link, $sql);

		$_SESSION["user"]["account_status"] = $status;

		if(mysqli_affected_rows($link) > 0) {
			header("Location: ./../users.php?updatedS=yup");
		} else {
			header("Location: ./../users.php?updatedS=nope");
		}
	}

	

	mysqli_close($link);

	
?>