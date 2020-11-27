-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Czas generowania: 05 Lis 2020, 13:16
-- Wersja serwera: 5.7.31
-- Wersja PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `tom`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `organizacja`
--

CREATE TABLE `organizacja` (
  `id_org` int(11) NOT NULL,
  `nazwa_dzial` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `organizacja`
--

INSERT INTO `organizacja` (`id_org`, `nazwa_dzial`) VALUES
(1, 'serwis'),
(2, 'handel'),
(3, 'marketing'),
(4, 'it');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `id_pracownicy` int(11) NOT NULL,
  `imie` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `dzial` int(11) NOT NULL,
  `zarobki` int(11) NOT NULL,
  `data_urodzenia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`id_pracownicy`, `imie`, `dzial`, `zarobki`, `data_urodzenia`) VALUES
(4, 'jan', 1, 25, '1975-01-28'),
(5, 'ania', 2, 35, '1987-04-13'),
(6, 'adam', 3, 45, '1997-11-14'),
(7, 'marcin', 4, 15, '2001-09-01'),
(8, 'michał', 3, 45, '1999-10-22'),
(9, 'patrycja', 1, 33, '2002-03-16'),
(10, 'robert', 1, 51, '1992-09-14'),
(11, 'basia', 3, 15, '1987-04-25'),
(12, 'dagmara', 2, 20, '1998-04-08'),
(13, 'andrzej', 2, 30, '1987-04-15'),
(14, 'jarek', 1, 10, '1987-02-05'),
(15, 'dorota', 3, 35, '1999-04-17'),
(16, 'zosia', 3, 9, '1988-02-21'),
(17, 'dawid', 4, 45, '1985-01-15'),
(18, 'klaudia', 4, 65, '1984-12-12'),
(19, 'franek', 1, 60, '1999-01-15');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `organizacja`
--
ALTER TABLE `organizacja`
  ADD PRIMARY KEY (`id_org`);

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`id_pracownicy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `organizacja`
--
ALTER TABLE `organizacja`
  MODIFY `id_org` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `id_pracownicy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
