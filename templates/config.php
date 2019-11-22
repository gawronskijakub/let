<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/let/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "O mnie";
			break;
    case "/let/login.php":
      $CURRENT_PAGE = "Login";
      $PAGE_TITLE = "Zaloguj się";
      break;
		case "/let/contact.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Kontakt";
      break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Strona główna";
	}
?>