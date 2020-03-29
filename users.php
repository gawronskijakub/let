<?php 
  include("./templates/config.php"); 
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
        <section class="tiles">
            <section class="tiles__tile">Lorem ipsum dolor.</section>
            <section class="tiles__tile">Lorem ipsum dolor.</section>
            <section class="tiles__tile">Lorem ipsum dolor.</section>
            <section class="tiles__tile">Lorem ipsum dolor.</section>
          </section>
        </section>
      </article>
    </main>
    <?php include("./templates/footer.php"); ?>
  </div>
  <script src="./scripts/script.js"></script>
</body>
</html>