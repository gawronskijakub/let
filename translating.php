<?php 
  include("templates/config.php"); 
  include("./scripts/connect.php"); 
  session_start();

  if(empty($_SESSION['user'])) {
    header("location: login.php");

    die("Redirecting to login page");
  }

  if($_SESSION['user']['admin_status'] == "admin") {
    header("location: courses-admin.php");
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
          <section class="courses">
            <section class="courses__course">
              <h2 class="course__entitle">Nauka słówek</h2>
              <div class="course__content">
                <div class="arrows">
                  <a href="#" class="control_next">></a>
                  <a href="#" class="control_prev"><</a>
                </div>
                <div id="slider1">
                  <?php
                    $sql = "SELECT `polish` FROM `words`;";
                    $res = mysqli_query($link, $sql);
                    echo "<ul class='list'>";
                    while($row = mysqli_fetch_assoc($res)) {
                      echo "<li class='polish'><img src='/let/images/poland.jpg'>$row[polish]</li>";
                    }
                    echo "</ul>";
                    ?>
                </div>
                <div id="slider2">
                  <?php
                    $sql = "SELECT `english` FROM `words`;";
                    $res = mysqli_query($link, $sql);
                    echo "<ul class='list'>";
                    while($row = mysqli_fetch_assoc($res)) {
                      echo "<li class='english'><img src='/let/images/great_britain.png'>$row[english]</li>";
                    }
                    echo "</ul>";
                  ?>
                </div>
              </div>
            </section>
          </section>
        </section>
      </article>
    </main>
    <?php include("templates/footer.php"); ?>
  </div>
  <script src="./scripts/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./scripts/slider.js"></script>
</body>
</html>