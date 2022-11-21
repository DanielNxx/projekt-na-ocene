-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Lis 2022, 09:06
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dane_uzytkonika`
--

CREATE TABLE `dane_uzytkonika` (
  `uzytkonik_id` int(9) NOT NULL,
  `email` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `nazwa` varchar(30) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `dane_uzytkonika`
--

INSERT INTO `dane_uzytkonika` (`uzytkonik_id`, `email`, `haslo`, `nazwa`) VALUES
(1, 'email@daniel.com', '1234', 'daniel'),
(2, 'email2@daniel.com', '12345', 'daniel2');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarze`
--

CREATE TABLE `komentarze` (
  `komentarze` int(9) NOT NULL,
  `uzytkonik_id` int(9) NOT NULL,
  `nowosc_id` int(9) NOT NULL,
  `zawartowsc` varchar(300) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `komentarze`
--

INSERT INTO `komentarze` (`komentarze`, `uzytkonik_id`, `nowosc_id`, `zawartowsc`) VALUES
(1, 2, 1, 'jest super nie narzekaj');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nowosc`
--

CREATE TABLE `nowosc` (
  `nowosc_id` int(9) NOT NULL,
  `zawartowsc` varchar(1000) COLLATE utf8_polish_ci NOT NULL,
  `uzytkownik_id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `nowosc`
--

INSERT INTO `nowosc` (`nowosc_id`, `zawartowsc`, `uzytkownik_id`) VALUES
(1, 'mam problem z tym że za godzine jest niemiecki a potem anglieski.', 1),
(2, 'jest super.', 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dane_uzytkonika`
--
ALTER TABLE `dane_uzytkonika`
  ADD PRIMARY KEY (`uzytkonik_id`);

--
-- Indeksy dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  ADD PRIMARY KEY (`komentarze`),
  ADD UNIQUE KEY `uzytkonik_id` (`uzytkonik_id`),
  ADD UNIQUE KEY `nowosc_id` (`nowosc_id`);

--
-- Indeksy dla tabeli `nowosc`
--
ALTER TABLE `nowosc`
  ADD PRIMARY KEY (`nowosc_id`),
  ADD KEY `uzytkownik_id` (`uzytkownik_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `dane_uzytkonika`
--
ALTER TABLE `dane_uzytkonika`
  MODIFY `uzytkonik_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  MODIFY `komentarze` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `nowosc`
--
ALTER TABLE `nowosc`
  MODIFY `nowosc_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  ADD CONSTRAINT `komentarze_ibfk_1` FOREIGN KEY (`uzytkonik_id`) REFERENCES `dane_uzytkonika` (`uzytkonik_id`),
  ADD CONSTRAINT `komentarze_ibfk_2` FOREIGN KEY (`nowosc_id`) REFERENCES `nowosc` (`nowosc_id`);

--
-- Ograniczenia dla tabeli `nowosc`
--
ALTER TABLE `nowosc`
  ADD CONSTRAINT `nowosc_ibfk_1` FOREIGN KEY (`uzytkownik_id`) REFERENCES `dane_uzytkonika` (`uzytkonik_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
