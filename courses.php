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
            <section class="tiles__tile">
              <h2 class="tiles__entitle">
                <a href="./dictionary.php" class="tiles__link link">
                  Nauka słówek
                  <i class="fa fa-book-open"></i>
                </a>
              </h2>
            </section>
            <section class="tiles__tile">
              <h2 class="tiles__entitle">
                <a href="./pol-to-eng.php" class="tiles__link link">
                  <img src="./images/poland.jpg" alt="polish flag">
                  <i class="fa fa-arrow-down"></i>
                  <img src="./images/great_britain.png" alt="great britain flag">
                </a>
              </h2>
            </section>
            <section class="tiles__tile">
              <h2 class="tiles__entitle">
                <a href="./eng-to-pol.php" class="tiles__link link">
                  <img src="./images/great_britain.png" alt="great britain flag">
                  <i class="fa fa-arrow-down"></i>
                  <img src="./images/poland.jpg" alt="polish flag">
                </a>
              </h2>
            </section>
            <section class="tiles__tile">
              <h2 class="tiles__entitle">
                <a href="./add-words.php" class="tiles__link link">
                  Dodaj słówka
                  <i class="fa fa-plus"></i>
                </a>
              </h2>
            </section>
          </section>
        </section>
      </article>
    </main>
    <?php include("./templates/footer.php"); ?>
  </div>
  <script src="./scripts/script.js"></script>
</body>
</html>