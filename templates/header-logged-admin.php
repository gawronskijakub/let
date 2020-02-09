<header class="header">
  <h1 class="header__entitle">
    <a href="/let/logged.php" class="header__link link" title="LET Strona główna (zalogowany)">
      <img src="/let/images/logo.png" alt="LET logo" class="header__logo">
    </a>
  </h1>
  <nav class="nav">
    <ul class="nav__list">
      <li class="nav__item <?php if($currentPage == "Admin panel") print 'active' ?>">
        <a href="/let/admin-panel.php" class="nav__link link">Panel administracyjny</a>
      </li>
      <li class="nav__item <?php if($currentPage == "Courses admin") print 'active' ?>">
        <a href="/let/courses-admin.php" class="nav__link link">Kursy</a>
      </li>
      <li class="nav__item <?php if($currentPage == "My account admin") print 'active' ?>">
        <a href="/let/my-account-admin.php" class="nav__link link">Moje konto</a>
      </li>
      <li class="nav__item <?php if($currentPage == "Settings admin") print 'active' ?>">
        <a href="/let/settings-admin.php" class="nav__link link">Ustawienia</a>
      </li>
      <li class="nav__item <?php if($currentPage == "Contact logged") print 'active' ?>">
        <a href="/let/contact-logged-admin.php" class="nav__link link">Kontakt</a>
      </li>
      <li class="nav__item" style="width: 25%;">
        <a href="/let/logout.php" class="nav__link link">Wyloguj się</a>
      </li>
    </ul>
  </nav>
</header>