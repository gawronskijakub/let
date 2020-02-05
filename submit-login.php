<?php
  session_start();
  // login form validation

  if(password_verify($_POST["password_log"], $_SESSION["password_hash"])) {
    
    header("location: logged.php");
  }
  else header("location: login.php");


  

?>