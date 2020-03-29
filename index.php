<?php 
  include("./scripts/connect.php");
  include("./templates/config.php");
  session_start();

  // if(!empty($_SESSION["user"])) {
  //   if($_SESSION["user"]["admin_status"] === "admin") {
  //     header("Location: ./admin-panel.php");
  //   } else {
  //     header("Location: ./user-panel.php");
  //   }
  // }
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
  <?php include("./templates/head-tag.php"); ?>
</head>
<body>
  <div class="wrap">
    <?php include("./templates/header.php"); ?>
    <main class="main">
      <article class="article">
        <section class="article__section">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, dolorum animi. Sapiente incidunt animi minima quasi quae enim officiis voluptatum modi culpa autem in, tenetur, suscipit non sit nemo. Accusamus.
          Temporibus dolor corrupti eligendi deleniti ipsum pariatur maxime nam, alias tenetur quia necessitatibus in voluptatem ipsa culpa quaerat soluta nesciunt magnam sed dicta ab rerum. Assumenda, repellendus iste? Ratione, dignissimos?
          Numquam iure molestiae itaque dolor ab labore deserunt nam fugiat soluta at magnam officiis ea aspernatur saepe sunt, modi dolores? Dolorem neque voluptatem distinctio doloribus, repudiandae adipisci voluptates necessitatibus dolore?
          Recusandae, necessitatibus odio? Qui, natus ex? Maxime voluptatibus sit, esse magnam tempora totam facilis omnis, harum, minus voluptates soluta tempore natus facere praesentium dolore magni illum alias explicabo commodi mollitia.
          Totam recusandae magnam, ducimus dolorem eos non doloremque reiciendis iusto eum autem laboriosam rerum mollitia ea voluptatem. Nobis similique architecto numquam eligendi ut magnam ducimus distinctio, blanditiis deserunt consequatur unde?
        </section>
      </article>
    </main>
    <?php include("./templates/footer.php"); ?>
  </div>
  <script src="./scripts/script.js"></script>
</body>
</html>