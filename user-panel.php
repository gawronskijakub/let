<?php 
  include("./templates/config.php"); 
  session_start();

  if(empty($_SESSION['user'])) {
    header("location: ./login.php");

    die("Redirecting to login page");
  }

  if($_SESSION['user']['admin_status'] == "admin") {
    header("location: ./admin-panel.php");
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
          <section class="home">
            <h1 class="home__entitle">Witaj, <?php echo $_SESSION["user"]["login"]; ?></h1>
            <div class="home__container">
              <p class="home__content marginCenter">Aby przejść do kursów, wejdź w zakładkę <span class="bold italic">Kursy</span></p>
            </div>
            <div class="home__container">
              <p class="home__content marginCenter">W celu aktualizacji konta proszę przejść do zakładki <span class="bold italic">Moje konto</span></p>
            </div>
            <div class="home__container">
              <p class="home__content marginCenter">Aby skontaktować się z administratorem, proszę udać się do zakładki <span class="bold italic">Kontakt</span></p>
            </div>
            <div class="home__container">
              <p class="home__content marginCenter">W celu wylogowania się wciśnij <span class="bold italic">Wyloguj się</span></p>
            </div>
          </section>
        </section>
      </article>
    </main>
    <?php include("./templates/footer.php"); ?>
  </div>
  <script src="./scripts/script.js"></script>
</body>
</html>