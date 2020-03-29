<?php
  session_start();
  // login form validation

  include("./scripts/connect.php");

  $sql = "SELECT `login`, `password_hash`, `account_type` FROM `users` WHERE `login` = ?;";

  
  $stmt = mysqli_prepare($link, $sql);
  mysqli_stmt_bind_param($stmt, "s", $_POST['login_log']);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_store_result($stmt);

  if(mysqli_stmt_num_rows($stmt) > 0) {

    mysqli_stmt_bind_result($stmt, $dbLogin, $dbPass, $dbAdmin);
    mysqli_stmt_fetch($stmt);


    if(password_verify($_POST['password_log'], $dbPass)) {

      $user = "SELECT * FROM `users` WHERE `login` = '$dbLogin';";
      $res = mysqli_query($link, $user);

      while($row = mysqli_fetch_assoc($res)) {
          $_SESSION['user']['id'] = $row['user_id'];
          $_SESSION['user']['first_name'] = $row['first_name'];
          $_SESSION['user']['last_name'] = $row['last_name'];
          $_SESSION['user']['login'] = $row['login'];
          $_SESSION['user']['email'] = $row['email'];
          $_SESSION['user']['birth_date'] = $row['birth_date'];
          $_SESSION['user']['logged_in'] = true;
          $_SESSION['user']['name'] = $dbLogin;
          $_SESSION['user']['admin_status'] = $dbAdmin;
        }

      if($dbAdmin == "admin") {
        header("location: ./admin-panel.php");  
      } 
      else {
        header("location: ./user-panel.php");
      }
    }

    else {
      header("location: ./login.php?wrong_pass=yup");
    }
    
  }
  
  else {
    header("location: ./login.php?no_data=yup");
  }
  
  
  mysqli_stmt_close($stmt);

  mysqli_close($link);
?>