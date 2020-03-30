<?php 
  include("./templates/config.php"); 
  include("./scripts/connect.php"); 
  session_start();  

  if(empty($_SESSION['user'])) {
    header("location: ./login.php");

    die("Redirecting to login page");
  }

  if($_GET["updatedS"] == "yup") {
    echo "<script>alert('Status użytkownika został zaktualizowany.');</script>";
  }

  if($_GET["updatedS"] == "nope") {
    echo "<script>alert('Status użytkownika nie został zaktualizowany.');</script>";
  }
  
  if($_GET["updatedT"] == "yup") {
    echo "<script>alert('Typ konta użytkownika został zaktualizowany.');</script>";
  }

  if($_GET["updatedT"] == "nope") {
    echo "<script>alert('Typ konta użytkownika nie został zaktualizowany.');</script>";
  }

  if($_GET["deletedA"] == "yup") {
    echo "<script>alert('Konto użytkownika zostało usunięte.');</script>";
  }

  if($_GET["deletedA"] == "nope") {
    echo "<script>alert('Konto użytkownika nie zostało usunięte.');</script>";
  }
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
  <?php include("./templates/head-tag.php"); ?>
</head>
<body>
  <div class="wrap">
    <?php 
      if($_SESSION["user"]["admin_status"] === "admin") {
        include("./templates/header-logged-admin.php"); 
      } else {
        include("./templates/header-logged.php"); 
      }
    ?>
    <main class="main">
      <article class="article" style="overflow: auto;">
        <section class="article__section">
          <section class="users">
            <?php
              $users = "SELECT * FROM `users`;";
              $res = mysqli_query($link, $users);
              echo "<table class='table'>";
              echo "<tr>
                <th>ID</th>
                <th>Login</th>
                <th>Status konta</th>
                <th>Typ konta</th>
                <th>Zmień status konta</th>
                <th>Zmień typ konta</th>
                <th>Usuń konto</th>
              </tr>";
              while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>
                  <th>$row[user_id]</th>
                  <td>$row[login]</td>
                  <td>$row[account_status]</td>
                  <td>$row[account_type]</td>";
                  if($row["account_status"] === "active") {
                    echo "
                    <td>
                      <a href='./scripts/change-status.php?id=$row[user_id]&status=disabled' class='link'>
                        active <i class='fas fa-arrow-right'></i> disabled
                      </a>
                    </td>
                    ";
                  } else {
                    echo "
                    <td>
                      <a href='./scripts/change-status.php?id=$row[user_id]&status=active' class='link'>
                        disabled <i class='fas fa-arrow-right'></i> active
                      </a>
                    </td>";
                  }
                  if($row["account_type"] === "admin") {
                    echo "
                    <td>
                      <a href='./scripts/change-type.php?id=$row[user_id]&type=user' class='link'>
                        admin <i class='fas fa-arrow-right'></i> user
                      </a>
                    </td>";
                  } else {
                    echo "
                    <td>
                      <a href='./scripts/change-type.php?id=$row[user_id]&type=admin' class='link'>
                        user <i class='fas fa-arrow-right'></i> admin
                      </a>
                    </td>";
                  }
              echo "
              <td>
                <a href='./scripts/delete-user.php?id=$row[user_id]' class='link'>
                  <i class='fa fa-times' style='font-size: 250%; color: crimson;'></i>
                </a>
              </td>
              </tr>";
              }

              echo "</table>";
            ?>
          </section>
        </section>
      </article>
    </main>
    <?php 
      include("./templates/footer.php"); 
      mysqli_close($link);
    ?>
  </div>
  <script src="./scripts/script.js"></script>
</body>
</html>