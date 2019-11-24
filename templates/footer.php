<footer class="footer">
  <p class="footer__copyright">
    Made with &nbsp;<i class='fa fa-heart'></i>&nbsp; by JG / 
    <?php echo date("Y"), ' / '; ?>
    <span class="footer__time">    
      <?php 
        echo "<script>
          const footer__time = document.querySelector('.footer__time');
          function tick() {
            let xTime = new Date();
            footer__time.innerHTML = xTime.toLocaleTimeString();
          }
          setInterval(tick,1000);
          </script>";
      ?>
    </span>
  </p>
  <p class="footer__socials">
    <a href="https://www.facebook.com/kubek201" class="footer__link link">
      <i class="fab fa-facebook-square"></i>
    </a>
    <a href="https://www.linkedin.com/in/jakub-gawro%C5%84ski-51a14a18b/" class="footer__link link">
      <i class="fab fa-linkedin"></i>
    </a>
    <a href="https://github.com/gawronskijakub" class="footer__link link">
      <i class="fab fa-github-square"></i>
    </a>
  </p>
</footer>