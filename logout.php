<?php
  session_start();
  // logout session unsetting

  unset($_SESSION['user']);
  die("Redirecting to login page");
  header("location: login.php");


  

?>