-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Lut 2020, 13:27
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
-- Struktura tabeli dla tabeli `courses`
--

CREATE TABLE `courses` (
  `course_id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `courses_words`
--

CREATE TABLE `courses_words` (
  `cw_id` int(10) UNSIGNED NOT NULL,
  `course_id` tinyint(3) UNSIGNED NOT NULL,
  `word_p_e_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `statistics`
--

CREATE TABLE `statistics` (
  `stat_id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'John', 'Doe', 'admin', '$argon2id$v=19$m=65536,t=4,p=1$MHFyUVZLSkg2bG00UTdMZw$PcqYLVT94suaH9ZF13Icn0R/6/kdH7iF3XRXXf6ckN8', 'learnenglishtoday.contact@gmail.com', '1970-01-01', '2020-02-08', 'active', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users_courses`
--

CREATE TABLE `users_courses` (
  `uc_id` int(10) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `course_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `words_eng`
--

CREATE TABLE `words_eng` (
  `word_e_id` int(10) UNSIGNED NOT NULL,
  `word_e` varchar(40) NOT NULL,
  `description_e` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `words_pol`
--

CREATE TABLE `words_pol` (
  `word_p_id` int(10) UNSIGNED NOT NULL,
  `word_p` varchar(40) NOT NULL,
  `description_p` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `words_pol_eng`
--

CREATE TABLE `words_pol_eng` (
  `word_p_e_id` int(10) UNSIGNED NOT NULL,
  `word_p_id` int(10) UNSIGNED NOT NULL,
  `word_e_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indeksy dla tabeli `courses_words`
--
ALTER TABLE `courses_words`
  ADD PRIMARY KEY (`cw_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `word_p_e_id` (`word_p_e_id`);

--
-- Indeksy dla tabeli `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`stat_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `password_hash` (`password_hash`);

--
-- Indeksy dla tabeli `users_courses`
--
ALTER TABLE `users_courses`
  ADD PRIMARY KEY (`uc_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indeksy dla tabeli `words_eng`
--
ALTER TABLE `words_eng`
  ADD PRIMARY KEY (`word_e_id`);

--
-- Indeksy dla tabeli `words_pol`
--
ALTER TABLE `words_pol`
  ADD PRIMARY KEY (`word_p_id`);

--
-- Indeksy dla tabeli `words_pol_eng`
--
ALTER TABLE `words_pol_eng`
  ADD PRIMARY KEY (`word_p_e_id`),
  ADD KEY `word_p_id` (`word_p_id`),
  ADD KEY `word_e_id` (`word_e_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `courses_words`
--
ALTER TABLE `courses_words`
  MODIFY `cw_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `statistics`
--
ALTER TABLE `statistics`
  MODIFY `stat_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `user_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `users_courses`
--
ALTER TABLE `users_courses`
  MODIFY `uc_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `words_eng`
--
ALTER TABLE `words_eng`
  MODIFY `word_e_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `words_pol`
--
ALTER TABLE `words_pol`
  MODIFY `word_p_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `courses_words`
--
ALTER TABLE `courses_words`
  ADD CONSTRAINT `courses_words_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `courses_words_ibfk_2` FOREIGN KEY (`word_p_e_id`) REFERENCES `words_pol_eng` (`word_p_e_id`);

--
-- Ograniczenia dla tabeli `statistics`
--
ALTER TABLE `statistics`
  ADD CONSTRAINT `statistics_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Ograniczenia dla tabeli `users_courses`
--
ALTER TABLE `users_courses`
  ADD CONSTRAINT `users_courses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `users_courses_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Ograniczenia dla tabeli `words_pol_eng`
--
ALTER TABLE `words_pol_eng`
  ADD CONSTRAINT `words_pol_eng_ibfk_1` FOREIGN KEY (`word_p_id`) REFERENCES `words_pol` (`word_p_id`),
  ADD CONSTRAINT `words_pol_eng_ibfk_2` FOREIGN KEY (`word_e_id`) REFERENCES `words_eng` (`word_e_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
