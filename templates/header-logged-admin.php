<header class="header">
  <h1 class="header__entitle">
    <a href="/let/admin-panel.php" class="header__link link" title="LET Strona główna (zalogowany)">
      <img src="/let/images/logo.png" alt="LET logo" class="header__logo">
    </a>
  </h1>
  <nav class="nav">
    <ul class="nav__list">
      <li class="nav__item <?php if($currentPage == "Admin panel") print 'active' ?>">
        <a href="/let/admin-panel.php" class="nav__link link">Panel administracyjny</a>
      </li>
      <li class="nav__item <?php if($currentPage == "Courses") print 'active' ?>">
        <a href="/let/courses.php" class="nav__link link">Kursy</a>
      </li>
      <li class="nav__item <?php if($currentPage == "My account") print 'active' ?>">
        <a href="/let/my-account.php" class="nav__link link">Moje konto</a>
      </li>
      <li class="nav__item <?php if($currentPage == "Users") print 'active' ?>">
        <a href="/let/users.php" class="nav__link link">Użytkownicy</a>
      </li>
      <li class="nav__item" style="width: 30%;">
        <a href="/let/logout.php" class="nav__link link">Wyloguj się</a>
      </li>
    </ul>
  </nav>
</header>