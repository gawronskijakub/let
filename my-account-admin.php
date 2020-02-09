<?php 
  include("templates/config.php"); 
  session_start();  

  if(empty($_SESSION['user'])) {
    header("location: login.php");

    die("Redirecting to login page");
  }

  if($_SESSION['user']['admin_status'] == "admin") {
    header("location: my-account-admin.php");
  }
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
  <?php include("templates/head-tag.php"); ?>
</head>
<body>
  <div class="wrap">
    <?php include("templates/header-logged-admin.php"); ?>
    <main class="main">
      <article class="article">
        <section class="article__section">
        <section class="tiles">
            <section class="tiles__tile">Lorem ipsum dolor sit amet consectetur adipisicing elit. In veritatis voluptatum, doloremque nisi adipisci laboriosam tempore saepe quis possimus quam! Natus, temporibus! Quae placeat repellendus laborum magni? Eius, aliquam ea. Eum cum magnam rem rerum sit recusandae exercitationem eaque unde tempora eos aperiam excepturi velit repellendus optio similique corrupti sint quas quidem, totam, doloribus deleniti tempore possimus ex tenetur. Cum.</section>
            <section class="tiles__tile">Lorem ipsum dolor sit amet consectetur adipisicing elit. In veritatis voluptatum, doloremque nisi adipisci laboriosam tempore saepe quis possimus quam! Natus, temporibus! Quae placeat repellendus laborum magni? Eius, aliquam ea. Eum cum magnam rem rerum sit recusandae exercitationem eaque unde tempora eos aperiam excepturi velit repellendus optio similique corrupti sint quas quidem, totam, doloribus deleniti tempore possimus ex tenetur. Cum.</section>
            <section class="tiles__tile">Lorem ipsum dolor sit amet consectetur adipisicing elit. In veritatis voluptatum, doloremque nisi adipisci laboriosam tempore saepe quis possimus quam! Natus, temporibus! Quae placeat repellendus laborum magni? Eius, aliquam ea. Eum cum magnam rem rerum sit recusandae exercitationem eaque unde tempora eos aperiam excepturi velit repellendus optio similique corrupti sint quas quidem, totam, doloribus deleniti tempore possimus ex tenetur. Cum.</section>
            <section class="tiles__tile">Lorem ipsum dolor sit amet consectetur adipisicing elit. In veritatis voluptatum, doloremque nisi adipisci laboriosam tempore saepe quis possimus quam! Natus, temporibus! Quae placeat repellendus laborum magni? Eius, aliquam ea. Eum cum magnam rem rerum sit recusandae exercitationem eaque unde tempora eos aperiam excepturi velit repellendus optio similique corrupti sint quas quidem, totam, doloribus deleniti tempore possimus ex tenetur. Cum.</section>
          </section>
        </section>
      </article>
    </main>
    <?php include("templates/footer.php"); ?>
  </div>
  <script src="scripts/script.js"></script>
</body>
</html>