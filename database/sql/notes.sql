-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Wrz 2022, 22:27
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `yetta_db`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret_key` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `notes`
--

INSERT INTO `notes` (`id`, `title`, `author`, `category`, `date`, `body`, `secret_key`, `created_at`, `updated_at`) VALUES
(1, 'Logotypy', 'Kamil Cecherz', 'web-design', '2022-09-08', 'Projektowanie logotypów wymaga dużej wiedzy i wyczucia smaku.', 39248968, NULL, NULL),
(2, 'HTML I CSS to podstawa', 'Kamil Cecherz', 'Aplikacje webowe', '2022-09-12', 'Nie da się tworzyć stron WWW nie znając bazowych technologii jak HTML i CSS dlatego każdy programista zaczyna od front-end\'u.', 789065431, '2022-09-09 13:00:40', '2022-09-12 13:48:34'),
(3, 'Programowanie w Pythonie', 'Agnieszka Lasota', 'Nauka programowania', '2022-09-12', 'Python jest prostym językiem do nauki na początek przygody z programowaniem, co nie oznacza, że pisanie w nim jest w nim łatwiejsze.', 875665, '2022-09-09 18:40:30', '2022-09-12 13:49:16'),
(4, 'Clojure - język funkcyjny', 'Kamil Cecherz', 'Programowanie funkcyjne', '2022-09-09', 'Clojure to język funkcyjny wysokiego poziomu przeznaczony dla zaawansowych programistów. Jest on bardziej ekspresyjny przez to trudniejszy w opanowaniu.', 86567777, '2022-09-09 18:43:00', '2022-09-09 18:43:00'),
(5, 'Błędy składniowe', 'Agnieszka Lasota', 'Nauka programowania', '2022-09-12', 'Początkujący bardzo często popełniają błędy składniowe, przejawiące się w postaci braku średnika końcu instrukcji. Jest to prosty w weryfikacji bug, spędza on jednak godziny czasu adeptom kodowania.', 131355, '2022-09-12 11:05:07', '2022-09-12 13:40:25');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
