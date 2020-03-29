<?php 
  include("./templates/config.php"); 
  include("./scripts/connect.php"); 
  session_start();

  if(empty($_SESSION['user'])) {
    header("location: ./login.php");

    die("Redirecting to login page");
  }

  if($_GET['added'] == "no") {
    echo "<script>alert('Słówko nie zostało dodane. Prawdopodobnie już istnieje.');</script>";
  }

  if($_GET['added'] == "yes") {
    echo "<script>alert('Słówko zostało dodane.');</script>";
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
        <section class="form__container">
            <form action="./scripts/add-word.php" method="post" class="article__form" id="addWord">
                <h2 class="form__header">Dodaj słówko: </h2>
                <label for="polish"><img src="./images/poland.jpg" alt="Polish flag"></label>
                <input type="text" name="polish" id="polish" required autocomplete="off">
                <label for="english"><img src="./images/great_britain.png" alt="English flag"></label>
                <input type="text" name="english" id="english" required autocomplete="off">
                <input type="submit" value="Dodaj" id="addW">
            </form>
          </section>
        </section>
      </article>
    </main>
    <?php include("./templates/footer.php"); ?>
  </div>
  <script src="./scripts/script.js"></script>
</body>
</html>