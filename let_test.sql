-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 31 Mar 2020, 18:20
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `let_test`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `create_date` date NOT NULL,
  `account_status` varchar(20) NOT NULL,
  `account_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `login`, `password_hash`, `email`, `birth_date`, `create_date`, `account_status`, `account_type`) VALUES
(1, 'John', 'Doe', 'admin', '$argon2id$v=19$m=65536,t=4,p=1$MHFyUVZLSkg2bG00UTdMZw$PcqYLVT94suaH9ZF13Icn0R/6/kdH7iF3XRXXf6ckN8', 'john.doe@example.com', '1980-01-01', '2020-02-08', 'active', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `words`
--

CREATE TABLE `words` (
  `words_id` smallint(5) UNSIGNED NOT NULL,
  `polish` varchar(50) NOT NULL,
  `english` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `words`
--

INSERT INTO `words` (`words_id`, `polish`, `english`) VALUES
(1, 'administrator', 'administrator'),
(2, 'algorytm', 'algorithm'),
(3, 'kopia zapasowa', 'backup'),
(4, 'przeglądarka internetowa', 'web browser'),
(5, 'zasilacz', 'charger'),
(6, 'chmura', 'cloud'),
(7, 'kod', 'code'),
(8, 'komenda', 'command'),
(9, 'zawartość', 'content'),
(10, 'panel sterowania', 'control panel'),
(11, 'procesor', 'central processing unit'),
(12, 'kursor', 'cursor'),
(13, 'wycinać', 'cut'),
(14, 'dane', 'data'),
(15, 'baza danych', 'database'),
(16, 'usuwać', 'delete'),
(17, 'wdrażać', 'deploy'),
(18, 'pulpit', 'desktop'),
(19, 'urządzenie', 'device'),
(20, 'dokument', 'document'),
(21, 'przeciągać', 'drag'),
(22, 'sterowniki', 'drivers'),
(23, 'edytować', 'edit'),
(24, 'szyfrowanie', 'encryption'),
(25, 'deszyfrowanie', 'decryption'),
(26, 'błąd', 'error'),
(27, 'dysk zewnętrzny', 'external drive'),
(28, 'wentylator', 'fan'),
(29, 'plik', 'file'),
(30, 'folder', 'folder'),
(31, 'czcionka', 'font'),
(32, 'dysk twardy', 'hard drive'),
(33, 'ikona', 'icon'),
(34, 'interfejs', 'interface'),
(35, 'dostęp do internetu', 'internet access'),
(36, 'zapora sieciowa', 'firewall'),
(37, 'klawiatura', 'keyboard'),
(38, 'megabajt', 'megabyte'),
(39, 'pamięć', 'memory'),
(40, 'płyta główna', 'motherboard'),
(41, 'mysz', 'mouse'),
(42, 'podkładka pod mysz', 'mouse pad'),
(43, 'sieć', 'network'),
(44, 'system operacyjny', 'operating system'),
(45, 'partycja', 'partition'),
(46, 'hasło', 'password'),
(47, 'wklejać', 'paste'),
(48, 'komputer stacjonarny', 'personal computer'),
(49, 'wtyczka', 'plugin'),
(50, 'język programowania', 'programming language'),
(51, 'rozdzielczość ekranu', 'screen resolution'),
(52, 'serwer', 'server'),
(53, 'arkusz kalkulacyjny', 'spreadsheet'),
(54, 'pasek narzędzi', 'toolbar'),
(55, 'karta dźwiękowa', 'sound card'),
(56, 'karta graficzna', 'video card'),
(57, 'sieć bezprzewodowa', 'wireless network'),
(58, 'głośnik', 'speaker'),
(59, 'panel dotykowy', 'touchpad'),
(60, 'kontrola jakości', 'quality assurance'),
(61, 'oprogramowanie', 'software'),
(62, 'światłowód', 'fiber'),
(63, 'obudowa komputera', 'computer case'),
(64, 'załącznik', 'attachment'),
(67, 'wygaszacz ekranu', 'screensaver'),
(70, 'przepustowość', 'bandwidth');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `password_hash` (`password_hash`);

--
-- Indeksy dla tabeli `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`words_id`),
  ADD UNIQUE KEY `unique_polish` (`polish`),
  ADD UNIQUE KEY `unique_english` (`english`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `user_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `words`
--
ALTER TABLE `words`
  MODIFY `words_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
