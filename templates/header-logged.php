<header class="header">
  <h1 class="header__entitle">
    <a href="/let/logged.php" class="header__link link" title="LET Strona główna (zalogowany)">
      <img src="/let/images/logo.png" alt="LET logo" class="header__logo">
    </a>
  </h1>
  <nav class="nav">
    <ul class="nav__list">
      <li class="nav__item <?php if($currentPage == "Index logged") print 'active' ?>">
        <a href="/let/logged.php" class="nav__link link">Strona główna</a>
      </li>
      <li class="nav__item <?php if($currentPage == "Courses") print 'active' ?>">
        <a href="/let/courses.php" class="nav__link link">Kursy</a>
      </li>
      <li class="nav__item <?php if($currentPage == "My account") print 'active' ?>">
        <a href="/let/my-account.php" class="nav__link link">Moje konto</a>
      </li>
      <li class="nav__item <?php if($currentPage == "Contact logged") print 'active' ?>">
        <a href="/let/contact-logged.php" class="nav__link link">Kontakt</a>
      </li>
    </ul>
  </nav>
</header>