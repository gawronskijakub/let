<?php 
  include("templates/config.php"); 
  session_start();  

  if(empty($_SESSION['user'])) {
    header("location: login.php");

    die("Redirecting to login page");
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
            <section class="tiles__tile">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iure mollitia, quibusdam iusto doloribus perspiciatis, nihil, eos natus quasi voluptatum reiciendis. Dolores delectus optio ea accusantium corporis, modi minus deleniti.Officia nulla vero cum consequuntur voluptas ipsam alias, repellat fugiat minus. Modi aperiam tenetur dolorum aliquam voluptatum eos natus iure. Sit et iure fugiat unde optio deserunt iusto quo odit?</section>
            <section class="tiles__tile">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iure mollitia, quibusdam iusto doloribus perspiciatis, nihil, eos natus quasi voluptatum reiciendis. Dolores delectus optio ea accusantium corporis, modi minus deleniti.Officia nulla vero cum consequuntur voluptas ipsam alias, repellat fugiat minus. Modi aperiam tenetur dolorum aliquam voluptatum eos natus iure. Sit et iure fugiat unde optio deserunt iusto quo odit?</section>
            <section class="tiles__tile">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iure mollitia, quibusdam iusto doloribus perspiciatis, nihil, eos natus quasi voluptatum reiciendis. Dolores delectus optio ea accusantium corporis, modi minus deleniti.Officia nulla vero cum consequuntur voluptas ipsam alias, repellat fugiat minus. Modi aperiam tenetur dolorum aliquam voluptatum eos natus iure. Sit et iure fugiat unde optio deserunt iusto quo odit?</section>
            <section class="tiles__tile">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus iure mollitia, quibusdam iusto doloribus perspiciatis, nihil, eos natus quasi voluptatum reiciendis. Dolores delectus optio ea accusantium corporis, modi minus deleniti.Officia nulla vero cum consequuntur voluptas ipsam alias, repellat fugiat minus. Modi aperiam tenetur dolorum aliquam voluptatum eos natus iure. Sit et iure fugiat unde optio deserunt iusto quo odit?</section>
          </section>
        </section>
      </article>
    </main>
    <?php include("templates/footer.php"); ?>
  </div>
  <script src="scripts/script.js"></script>
</body>
</html>