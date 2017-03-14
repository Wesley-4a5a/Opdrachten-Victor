-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 mrt 2017 om 12:55
-- Serverversie: 5.7.14
-- PHP-versie: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boekenlijst`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `auteur`
--

CREATE TABLE `auteur` (
  `auteur_id` int(11) NOT NULL,
  `voornaam` varchar(45) NOT NULL,
  `tussenvoegsel` varchar(45) NOT NULL,
  `achternaam` varchar(45) NOT NULL,
  `geboortedatum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `auteur`
--

INSERT INTO `auteur` (`auteur_id`, `voornaam`, `tussenvoegsel`, `achternaam`, `geboortedatum`) VALUES
(1, 'Wesley', '-', 'Koning', '1990-09-09'),
(2, 'Kevin', '-', 'Klaassen', '1966-06-06');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `boek`
--

CREATE TABLE `boek` (
  `boek_id` int(11) NOT NULL,
  `isbnNummer` int(11) NOT NULL,
  `auteur_id` int(11) NOT NULL,
  `vertaling_id` int(11) NOT NULL,
  `uitgeverij_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `taal`
--

CREATE TABLE `taal` (
  `taal_id` int(11) NOT NULL,
  `taal` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `taal`
--

INSERT INTO `taal` (`taal_id`, `taal`) VALUES
(2, 'Engels'),
(1, 'Nederlands');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `uitgeverij`
--

CREATE TABLE `uitgeverij` (
  `uitgeverij_id` int(11) NOT NULL,
  `uitgeverij` varchar(45) NOT NULL,
  `uitgeverijCode` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `uitgeverij`
--

INSERT INTO `uitgeverij` (`uitgeverij_id`, `uitgeverij`, `uitgeverijCode`) VALUES
(4, 'WesselKing', '666'),
(5, 'Frikandel', '537'),
(6, 'Aap', '674');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vertaling`
--

CREATE TABLE `vertaling` (
  `vertaling_id` int(11) NOT NULL,
  `taal_id` int(11) NOT NULL,
  `boekTitel` varchar(234) NOT NULL,
  `paginas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`auteur_id`),
  ADD UNIQUE KEY `auteur_id_UNIQUE` (`auteur_id`);

--
-- Indexen voor tabel `boek`
--
ALTER TABLE `boek`
  ADD PRIMARY KEY (`boek_id`),
  ADD KEY `auteur_id` (`auteur_id`),
  ADD KEY `vertaling_id` (`vertaling_id`),
  ADD KEY `uitgeverij_id` (`uitgeverij_id`);

--
-- Indexen voor tabel `taal`
--
ALTER TABLE `taal`
  ADD PRIMARY KEY (`taal_id`),
  ADD UNIQUE KEY `taal_UNIQUE` (`taal`);

--
-- Indexen voor tabel `uitgeverij`
--
ALTER TABLE `uitgeverij`
  ADD PRIMARY KEY (`uitgeverij_id`),
  ADD UNIQUE KEY `uitgeverij_id_UNIQUE` (`uitgeverij_id`),
  ADD UNIQUE KEY `uitgeverij_UNIQUE` (`uitgeverij`),
  ADD UNIQUE KEY `uitgeverijCode_UNIQUE` (`uitgeverijCode`);

--
-- Indexen voor tabel `vertaling`
--
ALTER TABLE `vertaling`
  ADD PRIMARY KEY (`vertaling_id`),
  ADD KEY `taal_id` (`taal_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `auteur`
--
ALTER TABLE `auteur`
  MODIFY `auteur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `boek`
--
ALTER TABLE `boek`
  MODIFY `boek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT voor een tabel `taal`
--
ALTER TABLE `taal`
  MODIFY `taal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `uitgeverij`
--
ALTER TABLE `uitgeverij`
  MODIFY `uitgeverij_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `vertaling`
--
ALTER TABLE `vertaling`
  MODIFY `vertaling_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `boek`
--
ALTER TABLE `boek`
  ADD CONSTRAINT `boek_ibfk_1` FOREIGN KEY (`auteur_id`) REFERENCES `auteur` (`auteur_id`),
  ADD CONSTRAINT `boek_ibfk_2` FOREIGN KEY (`vertaling_id`) REFERENCES `vertaling` (`vertaling_id`),
  ADD CONSTRAINT `boek_ibfk_3` FOREIGN KEY (`uitgeverij_id`) REFERENCES `uitgeverij` (`uitgeverij_id`);

--
-- Beperkingen voor tabel `vertaling`
--
ALTER TABLE `vertaling`
  ADD CONSTRAINT `vertaling_ibfk_1` FOREIGN KEY (`taal_id`) REFERENCES `taal` (`taal_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
