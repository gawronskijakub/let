<?php
  session_start();

  $first_name = $_SESSION['user']['first_name'];
  $last_name = $_SESSION['user']['last_name'];
  $login = $_SESSION['user']['login'];
  $password_hash = $_SESSION['user']['password_hash'];
  $email = $_SESSION['user']['email'];
  $birth_date = $_SESSION['user']['birth_date'];
  $create_date = $_SESSION['user']['create_date'];
  $account_status = $_SESSION['user']['account_status'];
  $account_type = $_SESSION['user']['account_type'];

?>