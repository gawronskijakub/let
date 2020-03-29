<?php 
  include("./templates/config.php"); 
  include("./scripts/connect.php"); 
  session_start();  

  if(empty($_SESSION['user'])) {
    header("location: ./login.php");

    die("Redirecting to login page");
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
      <article class="article">
        <section class="article__section">
          <section class="users">
            <?php
              $users = "SELECT * FROM `users`;";
              $res = mysqli_query($link, $users);
              echo "<table>";
              echo "<tr>
                <th>ID</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Login</th>
                <th>E-mail</th>
                <th>Status konta</th>
                <th>Typ konta</th>
              </tr>";
              while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>
                  <td>$row[user_id]</td>
                  <td>$row[first_name]</td>
                  <td>$row[last_name]</td>
                  <td>$row[login]</td>
                  <td>$row[email]</td>
                  <td>$row[account_status]</td>
                  <td>$row[account_type]</td>
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