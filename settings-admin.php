<?php 
  include("templates/config.php"); 
  session_start();  

  if(empty($_SESSION['user'])) {
    header("location: login.php");

    die("Redirecting to login page");
  }

  if($_SESSION['user']['admin_status'] != "admin") {
    header("location: settings.php");
  }
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
  <?php include("templates/head-tag.php"); ?>
</head>
<body>
  <div class="wrap">
    <?php include("templates/header-logged-admin.php"); ?>
    <main class="main">
      <article class="article">
        <section class="article__section">
        <section class="tiles">
            <section class="tiles__tile">Lorem ipsum dolor.</section>
            <section class="tiles__tile">Lorem ipsum dolor.</section>
            <section class="tiles__tile">Lorem ipsum dolor.</section>
            <section class="tiles__tile">Lorem ipsum dolor.</section>
          </section>
        </section>
      </article>
    </main>
    <?php include("templates/footer.php"); ?>
  </div>
  <script src="scripts/script.js"></script>
</body>
</html>