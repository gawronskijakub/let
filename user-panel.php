<?php 
  include("templates/config.php"); 
  session_start();

  if(empty($_SESSION['user'])) {
    header("location: login.php");

    die("Redirecting to login page");
  }

  if($_SESSION['user']['admin_status'] == "admin") {
    header("location: admin-panel.php");
  }
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
  <?php include("templates/head-tag.php"); ?>
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
            <section class="tiles__tile">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam est optio odio dignissimos, nam delectus assumenda sed obcaecati laboriosam dicta illo maiores, maxime dolorum harum, modi omnis quaerat quam commodi.Minima id quam adipisci ipsa. Pariatur, voluptas assumenda. Doloremque maxime deserunt consequatur vel consectetur omnis beatae quae, accusamus rerum sequi, commodi cumque sunt, necessitatibus eum ut nesciunt doloribus veritatis laudantium!</section>
            <section class="tiles__tile">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam est optio odio dignissimos, nam delectus assumenda sed obcaecati laboriosam dicta illo maiores, maxime dolorum harum, modi omnis quaerat quam commodi.Minima id quam adipisci ipsa. Pariatur, voluptas assumenda. Doloremque maxime deserunt consequatur vel consectetur omnis beatae quae, accusamus rerum sequi, commodi cumque sunt, necessitatibus eum ut nesciunt doloribus veritatis laudantium!</section>
            <section class="tiles__tile">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam est optio odio dignissimos, nam delectus assumenda sed obcaecati laboriosam dicta illo maiores, maxime dolorum harum, modi omnis quaerat quam commodi.Minima id quam adipisci ipsa. Pariatur, voluptas assumenda. Doloremque maxime deserunt consequatur vel consectetur omnis beatae quae, accusamus rerum sequi, commodi cumque sunt, necessitatibus eum ut nesciunt doloribus veritatis laudantium!</section>
            <section class="tiles__tile">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam est optio odio dignissimos, nam delectus assumenda sed obcaecati laboriosam dicta illo maiores, maxime dolorum harum, modi omnis quaerat quam commodi.Minima id quam adipisci ipsa. Pariatur, voluptas assumenda. Doloremque maxime deserunt consequatur vel consectetur omnis beatae quae, accusamus rerum sequi, commodi cumque sunt, necessitatibus eum ut nesciunt doloribus veritatis laudantium!</section>
          </section>
        </section>
      </article>
    </main>
    <?php include("templates/footer.php"); ?>
  </div>
  <script src="scripts/script.js"></script>
</body>
</html>