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
                <div id="slider">
                <a href="#" class="control_next">></a>
                <a href="#" class="control_prev"><</a>
                  <?php
                    $sql = "SELECT * FROM `words`;";
                    $res = mysqli_query($link, $sql);
                    echo "<ul class='list'>";
                    while($row = mysqli_fetch_assoc($res)) {
                      echo "<li class='polish'>$row[polish]</li>";
                      echo "<li class='english'>$row[english]</li>";
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
  <script>
    var slideCount = $('#slider ul li').length;
    var slideWidth = $('#slider ul li').width();
    var slideHeight = $('#slider ul li').height();
    var sliderUlWidth = slideCount * slideWidth;

    // $('#slider').css({ width: slideWidth, height: slideHeight });
	
	  // $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
	
    // $('#slider ul li:last-child').prependTo('#slider ul');

    const moveLeft = () => {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, () => {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    const moveRight = () => {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, () => {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').on("click", () => {
        moveLeft();
    });

    $('a.control_next').on("click", () => {
        moveRight();
    });
  </script>
</body>
</html>