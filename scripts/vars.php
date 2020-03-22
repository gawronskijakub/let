<?php
  session_start();

  $id = $_SESSION['user']['id'];
  $first_name = $_SESSION['user']['first_name'];
  $last_name = $_SESSION['user']['last_name'];
  $login = $_SESSION['user']['login'];
  $old_login = $_SESSION['user']['old_login'];
  $password_hash = $_SESSION['user']['password_hash'];
  $email = $_SESSION['user']['email'];
  $birth_date = $_SESSION['user']['birth_date'];
  $create_date = $_SESSION['user']['create_date'];
  $account_status = $_SESSION['user']['account_status'];
  $account_type = $_SESSION['user']['account_type'];

  unset($_SESSION['user']['password_hash']);
  unset($_SESSION['user']['create_date']);
  unset($_SESSION['user']['account_status']);
  unset($_SESSION['user']['account_type']);
?>