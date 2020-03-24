<?php 
  include("templates/config.php"); 
  session_start();

  if(empty($_SESSION['user'])) {
    header("location: login.php");

    die("Redirecting to login page");
  }

  if($_SESSION['user']['admin_status'] == "admin") {
    header("location: courses-admin.php");
  }
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
  <?php include("templates/head-tag.php"); ?>
</head>
<body>
  <div class="wrap">
    <?php include("templates/header-logged.php"); ?>
    <main class="main">
      <article class="article">
        <section class="article__section">
          <section class="tiles">
            <section class="tiles__tile">
              <h2 class="tiles__entitle">
                <a href="./translating.php" class="tiles__link link">Nauka słówek</a>
              </h2>
            </section>
            <section class="tiles__tile">
              <h2 class="tiles__entitle">
                <a href="#" class="tiles__link link">Kurs 2</a>
              </h2>
            </section>
            <section class="tiles__tile">
              <h2 class="tiles__entitle">
                <a href="#" class="tiles__link link">Kurs 3</a>
              </h2>
            </section>
            <section class="tiles__tile">
              <h2 class="tiles__entitle">
                <a href="#" class="tiles__link link">Kurs 4</a>
              </h2>
            </section>
          </section>
        </section>
      </article>
    </main>
    <?php include("templates/footer.php"); ?>
  </div>
  <script src="./scripts/script.js"></script>
</body>
</html>