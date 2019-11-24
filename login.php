<?php include("templates/config.php"); ?>
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
        <section class="article__section" id="log">
          <div class="form__container">
            <form action="submit.php" method="post" class="article__form" id="login_form">
                <h2 class="article__form__header">Zaloguj się: </h2>
                <label for="firstName">Imię: </label>
                <input type="text" name="firstName" tabindex="1">
            </form>
            <div class="article__buttons">
              <button class="article__button" form="login_form">Logowanie&nbsp;<i class="fa fa-arrow-right"></i></button>
              <button class="article__button" type="button"><a href="#reg" class="article__link link">Rejestracja&nbsp;<i class="fa fa-arrow-down"></i></a></button>
            </div>
          </div>
        </section>
        <section class="article__section" id="reg">
        <div class="form__container">
            <form action="" method="post" class="article__form" id="reg_form">
                <h2 class="article__form__header">Zarejestruj się: </h2>
                <label for="firstName">Imię: </label>
                <input type="text" name="firstName" tabindex="1">
            </form>
            <div class="article__buttons">
              <button class="article__button" type="button"><a href="#log" class="article__link link">Logowanie&nbsp;<i class="fa fa-arrow-up"></i></a></button>
              <button class="article__button" form="reg_form">Rejestracja&nbsp;<i class="fa fa-arrow-right"></i></button>
            </div>
          </div>
        </section>
      </article>
    </main>
    <?php include("templates/footer.php"); ?>
    <script src="/let/scripts/script.js"></script>
  </div>
</body>
</html>