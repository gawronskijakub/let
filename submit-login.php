<?php
  session_start();
  // login form validation

  include("scripts/connect.php");

  $sql = "SELECT `login`, `password_hash`, `account_type` FROM `users` WHERE `login` = ?;";

  
  $stmt = mysqli_prepare($link, $sql);
  mysqli_stmt_bind_param($stmt, "s", $_POST['login_log']);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_store_result($stmt);


  echo mysqli_stmt_num_rows($stmt);

  if(mysqli_stmt_num_rows($stmt) > 0) {

    mysqli_stmt_bind_result($stmt, $dbLogin, $dbPass, $dbAdmin);
    mysqli_stmt_fetch($stmt);


    if(password_verify($_POST['password_log'], $dbPass)) {
      
      $_SESSION['user']['logged_in'] = true;
      $_SESSION['user']['name'] = $dbLogin;
      $_SESSION['user']['admin_status'] = $dbAdmin;
      
      if($dbAdmin == "admin") {
        header("location: admin-panel.php");  
      } 
      else {
        header("location: user-panel.php");
      }
    }

    else {
      header("location: login.php");
    }
    
  }
  
  else {
    header("location: login.php");
  }
  
  
  mysqli_stmt_close($stmt);

  mysqli_close($link);
?>