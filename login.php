<?php 
  include("templates/config.php"); 
  session_start();

  if(!empty($_GET['wrong_pass'])) {
    echo "
    <script>
      var ask = window.confirm('Błedne hasło. Spróbuj ponownie.');
      if(ask) window.location = './login.php';
      else window.location = './login.php';
    </script>";
  }

  if(!empty($_GET['no_data'])) {
    echo "
    <script>
      var ask = window.confirm('Nie ma takiego użytkownika');
      if(ask) window.location = './login.php';
      else window.location = './login.php';
    </script>";
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
        <section class="article__section" id="log">
          <section class="form__container">
            <form action="submit-login.php" method="post" class="article__form" id="login_form">
                <h2 class="form__header">Zaloguj się: </h2>
                <label for="login_log">Nazwa użytkownika: </label>
                <input type="text" name="login_log" tabindex="1" required autocomplete="off">
                <label for="password_log">Hasło: </label>
                <input type="password" name="password_log" tabindex="1" required autocomplete="off">
            </form>
            <section class="article__buttons">
              <button class="article__button" form="login_form">Logowanie&nbsp;<i class="fa fa-arrow-right"></i></button>
              <button class="article__button" type="button"><a href="#reg" class="article__link link">Rejestracja&nbsp;<i class="fa fa-arrow-down"></i></a></button>
            </section>
          </section>
        </section>
        <section class="article__section" id="reg">
        <section class="form__container">
            <form action="./submit-register.php" method="post" class="article__form" id="reg_form">
                <h2 class="form__header">Zarejestruj się: </h2>
                <label for="first_name">Imię: </label>
                <input type="text" name="first_name" required autocomplete="off">
                <label for="last_name">Nazwisko: </label>
                <input type="text" name="last_name" required autocomplete="off">
                <label for="login">Nazwa użytkownika: </label>
                <input type="text" name="login" required autocomplete="off">
                <label for="password">Hasło: </label>
                <input type="password" name="password" required autocomplete="off">
                <label for="password_confirm">Potwierdź hasło: </label>
                <input type="password" name="password_confirm" required autocomplete="off">
                <label for="email">E-mail: </label>
                <input type="email" name="email" required autocomplete="off">
                <label for="birth_date">Data urodzenia: </label>
                <input type="date" name="birth_date" required autocomplete="off" min="01-01-1900" max="<?php print date("Y-m-d"); ?>">
            </form>
            <section class="article__buttons">
              <button class="article__button" type="button"><a href="#log" class="article__link link">Logowanie&nbsp;<i class="fa fa-arrow-up"></i></a></button>
              <button class="article__button" form="reg_form">Rejestracja&nbsp;<i class="fa fa-arrow-right"></i></button>
            </section>
          </section>
        </section>
      </article>
    </main>
    <?php include("templates/footer.php"); ?>
    <script src="/let/scripts/script.js"></script>
  </div>
</body>
</html>