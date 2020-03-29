<?php
  session_start();
  // register form validation
  include("./scripts/connect.php");

  if(
      !empty($_POST['first_name']) &&
      !empty($_POST['last_name']) &&
      !empty($_POST['login']) &&
      !empty($_POST['password']) &&
      !empty($_POST['password_confirm']) &&
      !empty($_POST['email']) &&
      !empty($_POST['birth_date'])
  ) {
      if($_POST['password'] === $_POST['password_confirm']) {
        $first_name = mysqli_real_escape_string($link, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($link, $_POST['last_name']);
        $login = mysqli_real_escape_string($link, $_POST['login']);
        $password_hash = mysqli_real_escape_string($link, password_hash($_POST["password"], PASSWORD_ARGON2ID));
        $email = mysqli_real_escape_string($link, $_POST['email']);
        $birth_date = mysqli_real_escape_string($link, $_POST['birth_date']);
        $create_date = date("Y-m-d");
        $account_status = "active";
        $account_type = "user";

        $_SESSION['user']['first_name'] = stripslashes($first_name);
        $_SESSION['user']['last_name'] = stripslashes($last_name);
        $_SESSION['user']['login'] = stripslashes($login);
        $_SESSION['user']['password_hash'] = $password_hash;
        $_SESSION['user']['email'] = stripslashes($email);
        $_SESSION['user']['birth_date'] = stripslashes($birth_date);
        $_SESSION['user']['create_date'] = $create_date;
        $_SESSION['user']['account_status'] = $account_status;
        $_SESSION['user']['admin_status'] = $account_type;


        include("./scripts/add-user.php");

        header("location: ./login.php#log");
      }
      else {

        header("location: ./login.php#reg");

        die("Incorrect passwords. Redirecting to registration page");
      }
  }
  mysqli_close($link);
?>