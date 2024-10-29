-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Paź 29, 2024 at 10:12 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ziel_en`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `energia_geotermalna`
--

CREATE TABLE `energia_geotermalna` (
  `id` int(11) NOT NULL,
  `doradztwo_badania` text NOT NULL,
  `projektowanie` text NOT NULL,
  `wiercenia` text NOT NULL,
  `instalacja_pomp` text NOT NULL,
  `serwis_konserwacja` text NOT NULL,
  `modernizacja_optymalizacja` text NOT NULL,
  `magazynowanie_ciepla` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `energia_geotermalna`
--

INSERT INTO `energia_geotermalna` (`id`, `doradztwo_badania`, `projektowanie`, `wiercenia`, `instalacja_pomp`, `serwis_konserwacja`, `modernizacja_optymalizacja`, `magazynowanie_ciepla`) VALUES
(1, 'Badania geologiczne i hydrologiczne w celu oceny potencjału geotermalnego.', 'Projektowanie instalacji geotermalnych do ogrzewania budynków.', 'Wiercenia pionowe i poziome.', 'Montaż pomp ciepła.', 'Regularne przeglądy techniczne.', 'Modernizacja systemów w celu zwiększenia efektywności.', 'Magazynowanie ciepła geotermalnego, integracja z innymi źródłami energii.'),
(2, 'Analiza lokalnych warunków geotermalnych.', 'Dobór odpowiednich pomp ciepła.', 'Budowa studni geotermalnych.', 'Podłączenie pomp do systemów.', 'Naprawa i wymiana komponentów.', 'Dostosowanie systemów do zmieniających się potrzeb.', 'Integracja z innymi źródłami odnawialnej energii.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fotowoltaika`
--

CREATE TABLE `fotowoltaika` (
  `id` int(11) NOT NULL,
  `doradztwo_techniczne` text NOT NULL,
  `projektowanie` text NOT NULL,
  `montaz_paneli` text NOT NULL,
  `serwis_konserwacja` text NOT NULL,
  `monitorowanie_optymalizacja` text NOT NULL,
  `magazynowanie_energii` text NOT NULL,
  `dotacje_ulg_podatkowe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fotowoltaika`
--

INSERT INTO `fotowoltaika` (`id`, `doradztwo_techniczne`, `projektowanie`, `montaz_paneli`, `serwis_konserwacja`, `monitorowanie_optymalizacja`, `magazynowanie_energii`, `dotacje_ulg_podatkowe`) VALUES
(1, 'Audyty energetyczne.', 'Projektowanie systemów PV.', 'Instalacja paneli na dachach.', 'Regularne przeglądy instalacji.', 'Zdalne monitorowanie instalacji.', 'Instalacja akumulatorów.', 'Doradztwo w zakresie dotacji.'),
(2, 'Konsultacje w zakresie wyboru instalacji.', 'Symulacje wydajności instalacji.', 'Montaż inwerterów i komponentów.', 'Czyszczenie paneli i naprawa usterek.', 'Optymalizacja działania systemu.', 'Integracja z magazynami energii.', 'Pomoc w formalnościach dotacyjnych.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `turbiny_wiatrowe`
--

CREATE TABLE `turbiny_wiatrowe` (
  `id` int(11) NOT NULL,
  `doradztwo_audyty` text NOT NULL,
  `projektowanie` text NOT NULL,
  `montaz_turbin` text NOT NULL,
  `serwis_konserwacja` text NOT NULL,
  `monitorowanie_optymalizacja` text NOT NULL,
  `demontaz_modernizacja` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `turbiny_wiatrowe`
--

INSERT INTO `turbiny_wiatrowe` (`id`, `doradztwo_audyty`, `projektowanie`, `montaz_turbin`, `serwis_konserwacja`, `monitorowanie_optymalizacja`, `demontaz_modernizacja`) VALUES
(1, 'Ocena warunków wiatrowych.', 'Projektowanie farmy wiatrowej.', 'Montaż turbin.', 'Regularne przeglądy turbin.', 'Monitorowanie pracy turbin.', 'Demontaż starych turbin.'),
(2, 'Pomiar prędkości wiatru.', 'Dobór turbin.', 'Budowa infrastruktury.', 'Naprawa turbin.', 'Optymalizacja ustawień.', 'Modernizacja instalacji.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wiadomosci`
--

CREATE TABLE `wiadomosci` (
  `id` int(11) NOT NULL,
  `imie` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `temat` varchar(255) NOT NULL,
  `wiadomosc` text NOT NULL,
  `czas` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `energia_geotermalna`
--
ALTER TABLE `energia_geotermalna`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `fotowoltaika`
--
ALTER TABLE `fotowoltaika`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `turbiny_wiatrowe`
--
ALTER TABLE `turbiny_wiatrowe`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wiadomosci`
--
ALTER TABLE `wiadomosci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `energia_geotermalna`
--
ALTER TABLE `energia_geotermalna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fotowoltaika`
--
ALTER TABLE `fotowoltaika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `turbiny_wiatrowe`
--
ALTER TABLE `turbiny_wiatrowe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wiadomosci`
--
ALTER TABLE `wiadomosci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

