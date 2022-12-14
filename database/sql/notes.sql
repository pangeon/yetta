-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Wrz 2022, 16:17
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
  `color` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `notes`
--

INSERT INTO `notes` (`id`, `title`, `author`, `category`, `color`, `body`, `secret_key`, `created_at`, `updated_at`) VALUES
(1, 'Logotypy', 'Kamil Cecherzka', 'web-design', '#fcba03', 'Python jest prostym językiem do nauki na początek przygody z programowaniem, co nie oznacza, że pisanie w nim jest w nim łatwiejsze.', '5f9d7751b9ab15a6fee7275f2437bb21755c', '2022-09-17 18:13:18', '2022-09-18 18:13:18'),
(2, 'HTML I CSS to podstawa', 'Kamil Cecherz', 'Aplikacje webowe', '#5e03fc', 'Nie da się tworzyć stron WWW nie znając bazowych technologii jak HTML i CSS dlatego każdy programista zaczyna od front-end\'u.', '62d31925e42a4d1902948dd18b3513cead50', '2022-09-01 08:13:47', '2022-09-07 06:25:47'),
(3, 'Programowanie w Pythonie', 'Agnieszka Lasota', 'Nauka programowania', '#872f35', 'Python jest prostym językiem do nauki na początek przygody z programowaniem, co nie oznacza, że pisanie w nim jest dużo łatwiejsze.', '548b60d87effc1da90f1f36ac9950dd78f00', '2022-09-06 09:15:53', '2022-09-22 15:56:44'),
(4, 'Clojure - język funkcyjny', 'Kamil Cecherz', 'Programowanie funkcyjne', '#6aad72', 'Clojure to język funkcyjny wysokiego poziomu przeznaczony dla zaawansowych programistów. Jest on bardziej ekspresyjny przez to trudniejszy w opanowaniu.', '8407eeef43a9c8acd3a374410cfad6647fd0', '2022-09-04 01:17:25', '2022-09-14 03:17:25'),
(5, 'Błędy składniowe', 'Agnieszka Lasota', 'Nauka programowania', '#27e3e0', 'Początkujący bardzo często popełniają błędy składniowe, przejawiące się w postaci braku średnika końcu instrukcji. Jest to prosty w weryfikacji bug, spędza on jednak godziny czasu adeptom kodowania.', 'c6acd465dedfef8fd16d4aa21404f91544c1', '2018-09-04 03:17:51', '2019-09-10 18:17:51'),
(6, 'Laravel vs Symfony', 'Kamil Cecherz', 'Programowanie webowe', '#cc0e33', 'Dwa najważniejsze frameworki dla technlogii PHP to Laravel oraz Symfony. Ich znajomość jest konieczna dla każdego web-dewelopera back-end dewelopera. Podstawę stanowi jednak HTML i CSS', '3b35eecb6deea1e574a46a31a2ee2058d755', '2022-09-18 16:10:07', '2022-09-18 16:11:41');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
