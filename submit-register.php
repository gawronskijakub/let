<?php
  session_start();
  // register form validation

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

        $_SESSION['user']['first_name'] = $_POST['first_name'];
        $_SESSION['user']['last_name'] = $_POST['last_name'];
        $_SESSION['user']['login'] = $_POST['login'];
        $_SESSION['user']['password_hash'] = password_hash($_POST["password"], PASSWORD_ARGON2ID);
        $_SESSION['user']['email'] = $_POST['email'];
        $_SESSION['user']['birth_date'] = $_POST['birth_date'];

      // print "<pre>";
      // print_r($_SESSION);
      // print "</pre>";

      header("location: login.php#log");
      }
      else {
        echo "Incorrect passwords";
        print "<pre>";
        print_r($_SESSION);
        print "</pre>";
        // header("location: /let/login.php");
      }
  }
?>