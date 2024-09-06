-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Wrz 2024, 10:55
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
-- Baza danych: `zielona_en`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `energia geometralna`
--

CREATE TABLE `energia geometralna` (
  `Doradztwo i badania geotermalne` varchar(1000) NOT NULL,
  `Projektowanie systemów geotermalnych` varchar(1000) NOT NULL,
  `Wiercenia geotermalne` varchar(1000) NOT NULL,
  `Instalacja pomp ciepła` varchar(1000) NOT NULL,
  `Serwis i konserwacja systemów geotermalnych` varchar(1000) NOT NULL,
  `Modernizacja i optymalizacja systemów geotermalnych` varchar(1000) NOT NULL,
  `Magazynowanie ciepła geotermalnego` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `energia geometralna`
--

INSERT INTO `energia geometralna` (`Doradztwo i badania geotermalne`, `Projektowanie systemów geotermalnych`, `Wiercenia geotermalne`, `Instalacja pomp ciepła`, `Serwis i konserwacja systemów geotermalnych`, `Modernizacja i optymalizacja systemów geotermalnych`, `Magazynowanie ciepła geotermalnego`) VALUES
('o	Badania geologiczne i hydrologiczne w celu oceny potencjału geotermalnego danego terenu.\r\n\r\n', 'o	Projektowanie instalacji geotermalnych do ogrzewania budynków i produkcji energii elektrycznej.\r\n\r\n', 'o	Wykonywanie odwiertów pionowych lub poziomych na potrzeby instalacji geotermalnych.\r\n\r\n', 'o	Montaż pomp ciepła zasilanych energią geotermalną.\r\n\r\n', 'o	Regularne przeglądy techniczne instalacji geotermalnych i pomp ciepła.\r\n\r\n', 'o	Modernizacja istniejących instalacji w celu zwiększenia efektywności.\r\n\r\n', 'o	Instalacja systemów magazynowania ciepła (np. w postaci magazynów cieplnych).\r\no	Integracja geotermalnych systemów z innymi źródłami odnawialnej energii.\r\n'),
('o	Analiza lokalnych warunków geotermalnych (temperatury, głębokości zasobów) i opłacalności inwestycji.', 'o	Dobór odpowiednich pomp ciepła i wymienników ciepła.', 'o	Budowa studni geotermalnych oraz instalacja systemów cyrkulacyjnych.', 'o	Podłączenie pomp do systemów grzewczych i chłodzących w budynkach.', 'o	Naprawa oraz wymiana elementów systemu (np. pomp, wymienników ciepła).', 'o	Dostosowanie systemów do zmieniających się potrzeb energetycznych.', 'o	Integracja geotermalnych systemów z innymi źródłami odnawialnej energii.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fotowoltaika`
--

CREATE TABLE `fotowoltaika` (
  `Doradztwo techniczne i energetyczne` varchar(1000) NOT NULL,
  `Projektowanie instalacji fotowoltaicznych` varchar(1000) NOT NULL,
  `Montaż paneli fotowoltaicznych` varchar(1000) NOT NULL,
  `Serwis i konserwacja systemów fotowoltaicznych` varchar(1000) NOT NULL,
  `Monitorowanie i optymalizacja wydajności` varchar(1000) NOT NULL,
  `Magazynowanie energii` varchar(1000) NOT NULL,
  `Pomoc w uzyskaniu dotacji i ulg podatkowych` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `fotowoltaika`
--

INSERT INTO `fotowoltaika` (`Doradztwo techniczne i energetyczne`, `Projektowanie instalacji fotowoltaicznych`, `Montaż paneli fotowoltaicznych`, `Serwis i konserwacja systemów fotowoltaicznych`, `Monitorowanie i optymalizacja wydajności`, `Magazynowanie energii`, `Pomoc w uzyskaniu dotacji i ulg podatkowych`) VALUES
('o	Audyty energetyczne w celu określenia zapotrzebowania na energię.', 'o	Tworzenie indywidualnych projektów systemów PV dostosowanych do lokalnych warunków i potrzeb użytkownika.', 'o	Instalacja paneli na dachach budynków, gruncie czy innych powierzchniach.', 'o	Regularne przeglądy techniczne instalacji.', 'o	Zdalne monitorowanie działania instalacji PV.', 'o	Instalacja akumulatorów do przechowywania nadmiaru energii.', 'o	Doradztwo w zakresie dostępnych dotacji i programów rządowych.'),
('o	Konsultacje w zakresie wyboru odpowiedniej instalacji fotowoltaicznej (wielkość, moc, technologie).', 'lokalnych warunków i potrzeb użytkownika.\r\no	Symulacje wydajności instalacji na podstawie warunków nasłonecznienia.\r\n', 'o	Montaż inwerterów (falowników) oraz innych komponentów systemu fotowoltaicznego', 'o	Czyszczenie paneli fotowoltaicznych oraz naprawa usterek i wymiana komponentów systemu.', 'o	Optymalizacja działania systemu i poprawa jego efektywności.', 'o	Integracja systemów fotowoltaicznych z magazynami energii.', 'o	Pomoc w formalnościach związanych z dofinansowaniem na instalację fotowoltaiczną.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `turbiny wiatrowe`
--

CREATE TABLE `turbiny wiatrowe` (
  `Doradztwo i audyty wiatrowe` varchar(1000) NOT NULL,
  `Projektowanie instalacji wiatrowych` varchar(1000) NOT NULL,
  `Montaż turbin wiatrowych` varchar(1000) NOT NULL,
  `Serwis i konserwacja turbin wiatrowych` varchar(1000) NOT NULL,
  `Monitorowanie i optymalizacja wydajności` varchar(1000) NOT NULL,
  `Demontaż i modernizacja turbin` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `turbiny wiatrowe`
--

INSERT INTO `turbiny wiatrowe` (`Doradztwo i audyty wiatrowe`, `Projektowanie instalacji wiatrowych`, `Montaż turbin wiatrowych`, `Serwis i konserwacja turbin wiatrowych`, `Monitorowanie i optymalizacja wydajności`, `Demontaż i modernizacja turbin`) VALUES
('o	Ocena warunków wiatrowych w danej lokalizacji.', 'o	Opracowanie projektu farmy wiatrowej lub pojedynczych turbin wiatrowych.', 'o	Opracowanie projektu farmy wiatrowej lub pojedynczych turbin wiatrowych.', 'o	Regularne przeglądy techniczne i diagnostyka turbin.', 'o	Zdalne monitorowanie pracy turbin.', 'o	Demontaż starych lub zużytych turbin wiatrowych.'),
('o	Pomiar prędkości i kierunku wiatru w celu określenia opłacalności inwestycji.', 'o	Dobór odpowiedniego rodzaju turbin (na lądzie lub morzu) oraz ich mocy.', 'o	Budowa infrastruktury towarzyszącej, takiej jak fundamenty, wieże i połączenia elektryczne.', 'o	Naprawa turbin, w tym łopat, generatorów i systemów sterowania oraz usługi konserwacyjne, w tym czyszczenie i smarowanie ruchomych części.\r\n', 'o	Optymalizacja ustawień turbin w celu maksymalizacji produkcji energii.', 'o	Modernizacja istniejących instalacji w celu zwiększenia efektywności lub wydajności.');
COMMIT;


CREATE TABLE gallery (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    image_name VARCHAR(255) NOT NULL
);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
