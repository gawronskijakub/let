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
		case "/let/courses-admin.php":
			$currentPage = "Courses admin";
			$pageTitle = "Kursy";
		break;
		case "/let/my-account.php":
			$currentPage = "My account";
			$pageTitle = "Moje konto";
		break;
		case "/let/my-account-admin.php":
			$currentPage = "My account admin";
			$pageTitle = "Moje konto";
		break;
		case "/let/settings.php":
			$currentPage = "Settings";
			$pageTitle = "Ustawienia";
		break;
		case "/let/settings-admin.php":
			$currentPage = "Settings admin";
			$pageTitle = "Ustawienia";
		break;
		case "/let/contact-logged.php":
			$currentPage = "Contact logged";
			$pageTitle = "Kontakt";
		break;
		case "/let/contact-logged-admin.php":
			$currentPage = "Contact logged admin";
			$pageTitle = "Kontakt";
		break;
		default:
			$currentPage = "Index";
			$pageTitle = "Strona główna";
	}
?>