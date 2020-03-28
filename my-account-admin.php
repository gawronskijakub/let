<?php 
  include("./scripts/connect.php");
  include("./templates/config.php"); 
  session_start();  

  if(empty($_SESSION['user'])) {
    header("location: ./login.php");

    die("Redirecting to login page");
  }

  if($_GET["updated"] == "yup") {
    echo "<script>alert('Twoje dane zostały zaktualizowane.');</script>";
  }
  
  if($_GET["updated"] == "nope") {
    echo "<script>alert('Twoje dane nie zostały zaktualizowane.');</script>";
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
        include("templates/header-logged-admin.php"); 
      } else {
        include("templates/header-logged.php"); 
      }
    ?>
    <main class="main">
    <article class="article">
        <section class="article__section">
          <section class="tiles">
            <section class="tiles__tile">
              <h2 class="tiles__entitle">
                <a href="./my-account-admin.php?update=1" class="link tiles__link">Zaktualizuj</a>
              </h2>
            </section>
            <section class="tiles__tile">
              <h2 class="tiles__entitle">
                <button class="btn" id="deleteUser">Usuń</button>
              </h2>
            </section>
            <?php 
              if(!empty($_GET["update"])) {
                $login = $_SESSION["user"]["name"];
                $sql = "SELECT * FROM `users` WHERE `login` = '$login';";
                $res = mysqli_query($link, $sql);
                $row = mysqli_fetch_assoc($link, $sql);
                $date = date("Y-m-d");

                while($row = mysqli_fetch_assoc($res)) {
                  $first_name = $row["first_name"];
                  $last_name = $row["last_name"];
                  $login = $row["login"];
                  $email = $row["email"];
                  $birth_date = $row["birth_date"];
                }
                echo <<< F
                <section id="upform">
                  <form action="./scripts/update-user.php" method="post" class="article__form" id="update_form">
                      <h2 class="form__header">Zmień dane: </h2>
                      <label for="first_name">Imię: </label>
                      <input type="text" name="first_name" required value="$first_name"><br>
                      <label for="last_name">Nazwisko: </label>
                      <input type="text" name="last_name" required value="$last_name"><br>
                      <label for="login">Nazwa użytkownika: </label>
                      <input type="text" name="login" required value="$login"><br>
                      <label for="password">Hasło: </label>
                      <input type="password" name="password" required placeholder='obecne, jeżeli bez zmian'><br>
                      <label for="email">E-mail: </label>
                      <input type="email" name="email" required value="$email"><br>
                      <label for="birth_date">Data urodzenia: </label>
                      <input type="date" name="birth_date" required  min="01-01-1900" max="$date" value="$birth_date"><br><br>
                      <label for="old_password">Potwierdź obecne hasło: </label>
                      <input type="password" name="old_password" required ><br>
                      <input type="submit" value="Potwierdź">
                  </form>
                </section>
F;
              } ?>
          </section>
        </section>
      </article>
    </main>
    <?php include("templates/footer.php"); ?>
  </div>
  <script src="./scripts/script.js"></script>
  <script>
    const deleteConfirmation = () => {
      let ask = window.confirm("Czy na pewno chcesz usunąć konto?");
      if(ask) {
        window.alert("Twoje konto zostało pomyślnie usunięte.");
        window.location.href = "./scripts/del-user.php";
      } else {
        window.location.href = "./my-account.php";
      }
    }
    document.querySelector("#deleteUser").addEventListener("click", deleteConfirmation);
  </script>
</body>
</html>