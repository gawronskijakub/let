<?php 
  include("./scripts/connect.php");
  include("./templates/config.php");
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
  <?php include("./templates/head-tag.php"); ?>
</head>
<body>
  <div class="wrap">
    <?php include("./templates/header.php"); ?>
    <main class="main">
      <article class="article">
        <section class="article__section">
          <section class="home">
            <h1 class="home__entitle">Witaj na LET</h1>
            <div class="home__container">
              <span class="home__entrance">Co?</span>
              <p class="home__content"><span class="bold">LET (Learn English Today)</span> to strona, która ma na celu pomóc w nauce języka angielskiego technicznego / z zakresu IT (słówka ogólnie powiązane z działem Information Technology).</p>
            </div>
            <h3 class="home__entrance">Dla kogo?</h3>
            <p class="home__content">Dla każdego, kto ma ochotę pouczyć się terminów z zagadnienia IT.</p>
            <h3 class="home__entrance">Po co?</h3>
            <p class="home__content">LET to aplikacja internetowa stworzona na projekt szkolny w technikum w roku szkolnym 2019/2020.</p>
            <h3 class="home__entrance">Jak?</h3>
            <p class="home__content">Wejdź na zakładkę <span class="italic bold">Zaloguj się</span>, zarejestruj się i korzystaj ;)</p>
          </section>
        </section>
      </article>
    </main>
    <?php include("./templates/footer.php"); ?>
  </div>
  <script src="./scripts/script.js"></script>
  <script>
    const entrances = document.querySelectorAll(".home__entrance");
    const active = e => {
      e.target.classList.toggle("active");
    }
    entrances.forEach(entrance => {
      entrance.addEventListener("click", active);
    });
  </script>
</body>
</html>