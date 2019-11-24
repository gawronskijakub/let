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
		default:
			$currentPage = "Index";
			$pageTitle = "Strona główna";
	}
?>