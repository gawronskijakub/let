<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/let/login.php":
			$currentPage = "Login";
			$pageTitle = "Zaloguj się";
			break;
		case "/let/about.php":
			$currentPage = "About"; 
			$pageTitle = "O mnie";
			break;
		case "/let/contact.php":
			$currentPage = "Contact"; 
			$pageTitle = "Kontakt";
			break;
		case "/let/logged.php":
			$currentPage = "Index logged";
			$pageTitle = "Strona główna";
		break;
		case "/let/courses.php":
			$currentPage = "Courses";
			$pageTitle = "Kursy";
		break;
		case "/let/my-account.php":
			$currentPage = "My account";
			$pageTitle = "Moje konto";
		break;
		case "/let/contact-logged.php":
			$currentPage = "Contact logged";
			$pageTitle = "Kontakt";
		break;
		default:
			$currentPage = "Index";
			$pageTitle = "Strona główna";
	}
?>