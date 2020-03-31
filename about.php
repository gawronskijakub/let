<?php 
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
           <h1 class="home__entitle">O autorze</h1>
            <div class="home__container" style="height: 80%;">
              <p class="home__content" style="width: 100%; text-align: justify;">
                Nazywam się Jakub Gawroński. Jestem uczniem klasy maturalnej roku 2019/2020. Interesuję się informatyką w szerokim tego słowa znaczeniu, czyli gry komputerowe, ciekawostki ze świata IT, programowanie itp., dokształcaniem i samodoskonaleniem się oraz lubię spędzać czas ze znajomymi. <br>
                Strona ta powstała na szkolny projekt i prawdopodobnie ze względu na (nie)mały bałagan, brak profesjonalizmu oraz lenistwo (chęć zrobienia interaktywnych kursów przeobraziła się w slider ze słówkami 1:1) repozytorium z tym projektem zostanie ukryte... <br>
                Więcej informacji w zakładce <span class="bold italic">Kontakt</span>.
              </p>
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