-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Wrz 2024, 12:08
-- Wersja serwera: 10.4.13-MariaDB
-- Wersja PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `energia_odnawialna`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uslugi`
--

CREATE TABLE `uslugi` (
  `id` int(11) NOT NULL,
  `kategoria` varchar(50) DEFAULT NULL,
  `usluga` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uslugi`
--

INSERT INTO `uslugi` (`id`, `kategoria`, `usluga`) VALUES
(1, 'fotowoltaika', 'Doradztwo techniczne i energetyczne'),
(2, 'fotowoltaika', 'Projektowanie instalacji fotowoltaicznych'),
(3, 'fotowoltaika', 'Montaż paneli fotowoltaicznych'),
(4, 'wiatraki', 'Doradztwo i audyty wiatrowe'),
(5, 'wiatraki', 'Projektowanie instalacji wiatrowych'),
(6, 'wiatraki', 'Montaż turbin wiatrowych'),
(7, 'geotermalna', 'Doradztwo i badania geotermalne'),
(8, 'geotermalna', 'Projektowanie systemów geotermalnych'),
(9, 'geotermalna', 'Wiercenia geotermalne');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
