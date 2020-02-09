<?php
  session_start();
  // logout session unsetting

  unset($_SESSION['user']);
  header("location: login.php");

  die("Redirecting to login page");

?>