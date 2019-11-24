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
                <h2 class="form__header">Zaloguj się: </h2>
                <label for="login">Nazwa użytkownika: </label>
                <input type="text" name="login_log" tabindex="1" required autocomplete="off">
                <label for="">Hasło: </label>
                <input type="text" name="password_log" tabindex="1" required autocomplete="off">
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
                <h2 class="form__header">Zarejestruj się: </h2>
                <label for="first_name">Imię: </label>
                <input type="text" name="first_name" required autocomplete="off">
                <label for="last_name">Nazwisko: </label>
                <input type="text" name="last_name" required autocomplete="off">
                <label for="last_name">Nazwa użytkownika: </label>
                <input type="text" name="login" required autocomplete="off">
                <label for="last_name">Hasło: </label>
                <input type="password" name="password" required autocomplete="off">
                <label for="last_name">Potwierdź hasło: </label>
                <input type="password" name="password_confirm" required autocomplete="off">
                <label for="last_name">E-mail: </label>
                <input type="email" name="mail" required autocomplete="off">
                <label for="last_name">Data urodzenia: </label>
                <input type="date" name="birth_date" required autocomplete="off" min="01-01-1900" max="<?php print date("Y-m-d"); ?>">
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