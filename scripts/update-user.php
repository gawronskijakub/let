<?php
	session_start();
	include("connect.php");
  include("vars.php");

	//updating in database
	$user = "SELECT * FROM `users` WHERE `user_id` = '$id';";
	$update = "UPDATE `users` SET";

	$res1 = mysqli_query($link, $user);
	$i = 0;

	while($row = mysqli_fetch_assoc($res1)) {
		$oldPass = $row['password_hash'];
		if($_POST["first_name"] !== $row["first_name"]) {
			$_SESSION['user']['first_name'] = $_POST['first_name'];
			$update .= " `first_name` = '$_POST[first_name]'";
			$i++;
		}
		if($_POST["last_name"] !== $row["last_name"]) {
			$_SESSION['user']['last_name'] = $_POST['last_name'];
			if($i > 0) {
				$update .= ", `last_name` = '$_POST[last_name]'";
			} else {
				$update .= " `last_name` = '$_POST[last_name]'";
				$i++;
			}
		}
		if($_POST["login"] !== $row["login"]) {
			$_SESSION['user']['login'] = $_POST['login'];
			if($i > 0) {
				$update .= ", `login` = '$_POST[login]'";
			} else {
				$update .= " `login` = '$_POST[login]'";
				$i++;
			}
		}
		if(!password_verify($_POST["password"], $row["password_hash"])) {
			$newPassHash = password_hash($_POST['password'], PASSWORD_ARGON2ID);
			if($i > 0) {
				$update .= ", `password_hash` = '$newPassHash'";
			} else {
				$update .= " `password_hash` = '$newPassHash'";
				$i++;
			}
		}
		if($_POST["email"] !== $row["email"]) {
			$_SESSION['user']['email'] = $_POST['email'];
			if($i > 0) {
				$update .= ", `email` = '$_POST[email]'";
			} else {
				$update .= " `email` = '$_POST[email]'";
				$i++;
			}
		}
		if($_POST["birth_date"] !== $row["birth_date"]) {
			$_SESSION['user']['birth_date'] = $_POST['birth_date'];
			if($i > 0) {
				$update .= ", `birth_date` = '$_POST[birth_date]'";
			} else {
				$update .= " `birth_date` = '$_POST[birth_date]'";
			}
		}
	}

	
	$update .= " WHERE `user_id` = $id;";

	if(password_verify($_POST['old_password'], $oldPass)) {
		mysqli_query($link, $update);
		if(mysqli_affected_rows($link) > 0) {
			if($_SESSION["user"]["admin_status"] === "admin") {
				header("Location: ./../my-account-admin.php?updated=yup");
			} else {
				header("Location: ./../my-account.php?updated=yup");
			}
		} else {
			if($_SESSION["user"]["admin_status"] === "admin") {
				header("Location: ./../my-account-admin.php?updated=nope");
			} else {
				header("Location: ./../my-account.php?updated=nope");
			}
		}
	} else {
		if($_SESSION["user"]["admin_status"] === "admin") {
			header("Location: ./../my-account-admin.php?updated=nope");
		} else {
			header("Location: ./../my-account.php?updated=nope");
		}
	}

	mysqli_close($link);

	
?>