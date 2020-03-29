<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/let/index.php":
			$currentPage = "Index";
			$pageTitle = "LET Strona Główna (niezalogowany)";
			break;
		case "/let/login.php":
			$currentPage = "Login";
			$pageTitle = "Zaloguj się";
			break;
		case "/let/about.php":
			$currentPage = "About"; 
			$pageTitle = "O autorze";
			break;
		case "/let/contact.php":
			$currentPage = "Contact"; 
			$pageTitle = "Kontakt";
			break;
		case "/let/user-panel.php":
			$currentPage = "User panel";
			$pageTitle = "Panel użytkownika";
		break;
		case "/let/admin-panel.php":
			$currentPage = "Admin panel";
			$pageTitle = "Panel administratora";
		break;
		case "/let/courses.php":
			$currentPage = "Courses";
			$pageTitle = "Kursy";
		break;
		case "/let/dictionary.php":
			$currentPage = "Dictionary";
			$pageTitle = "Słownik";
		break;
		case "/let/pol-to-eng.php":
			$currentPage = "Polish to English";
			$pageTitle = "Tłumaczenie polski na angielski";
		break;
		case "/let/eng-to-pol.php":
			$currentPage = "English to Polish";
			$pageTitle = "Tłumaczenie angielski na polski";
		break;
		case "/let/add-words.php":
			$currentPage = "Add words";
			$pageTitle = "Dodaj słówko";
		break;
		case "/let/my-account.php":
			$currentPage = "My account";
			$pageTitle = "Moje konto";
		break;
		case "/let/contact-logged.php":
			$currentPage = "Contact logged";
			$pageTitle = "Kontakt";
		break;
		case "/let/users.php":
			$currentPage = "Users";
			$pageTitle = "Użytkownicy";
		break;
		default:
			$currentPage = "Lost";
			$pageTitle = "Strona nie istnieje";
	}
?>