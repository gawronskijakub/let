<?php 
  include("templates/config.php"); 
  session_start();

  if(isset($_SESSION["user"]) && $_SESSION["user"]["logged_in"] == true) {
    if($_SESSION["user"]["admin_status"] === "admin") {
      header("Location: ./admin-panel.php");
    } else {
      header("Location: ./user-panel.php");
    }
  }
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
  <?php include("templates/head-tag.php"); ?>
</head>
<body>
  <div class="wrap">
    <?php include("templates/header.php"); ?>
    <main class="main">
      <article class="article">
        <section class="article__section">
          <section class="home">
           <h1 class="home__entitle">Kontakt</h1>
            <div class="home__container">
              <h3 class="home__entrance flexCenter two0s">
                <i class="fas fa-envelope-square"></i>
              </h3>
              <p class="home__content flexCenter onefifty">
                <a href="mailto:gawronskijakub0@gmail.com" class="link">E-mail</a>
              </p>
            </div>
            <div class="home__container">
              <h3 class="home__entrance flexCenter two0s">
                <i class="fab fa-facebook-square"></i>
              </h3>
              <p class="home__content flexCenter onefifty">
                <a href="https://www.facebook.com/gawronskijakub" class="link">Facebook</a>
              </p>
            </div>
            <div class="home__container">
              <h3 class="home__entrance flexCenter two0s">
                <i class="fab fa-linkedin"></i>
              </h3>
              <p class="home__content flexCenter onefifty">
                <a href="https://www.linkedin.com/in/jakub-gawro%C5%84ski-51a14a18b/" class="link">LinkedIn</a>
              </p>
            </div>
            <div class="home__container">
              <h3 class="home__entrance flexCenter two0s">
                <i class="fab fa-github-square"></i>
              </h3>
              <p class="home__content flexCenter onefifty">
                <a href="https://github.com/gawronskijakub" class="link">GitHub</a>
              </p>
            </div>
          </section>
        </section>
      </article>
    </main>
    <?php include("templates/footer.php"); ?>
  </div>
  <script src="scripts/script.js"></script>
  <script src="./scripts/contact.js"></script>
</body>
</html>