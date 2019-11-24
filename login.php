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
        <section class="article__section">
          <form action="" method="post" class="article__form">
              <h2 class="article__form__header">Zaloguj się: </h2>
              <label for="firstName">Imię: </label>
              <input type="text" name="firstName" tabindex="1">
          </form>
          <div class="article__buttons">
            <button class="article__button">Logowanie</button>
            <button class="article__button">Rejestracja</button>
          </div>
        </section>
        <section class="article__section">
          d
        </section>
      </article>
    </main>
    <?php include("templates/footer.php"); ?>
  </div>
</body>
</html>