-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 mrt 2017 om 19:17
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voetbaltoernooi`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `land`
--

CREATE TABLE `land` (
  `id_land` int(11) NOT NULL,
  `land_naam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `land`
--

INSERT INTO `land` (`id_land`, `land_naam`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rooster`
--

CREATE TABLE `rooster` (
  `id_rooster` int(11) NOT NULL,
  `tijdstip` time NOT NULL,
  `id_team1` int(11) NOT NULL,
  `id_team2` int(11) NOT NULL,
  `id_uitslag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `rooster`
--

INSERT INTO `rooster` (`id_rooster`, `tijdstip`, `id_team1`, `id_team2`, `id_uitslag`) VALUES
(1, '12:05:12', 1, 2, 1),
(2, '15:05:12', 3, 4, 3),
(3, '09:05:12', 3, 1, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `toernooi`
--

CREATE TABLE `toernooi` (
  `id_toernooi` int(11) NOT NULL,
  `id_toernooitype` int(11) NOT NULL,
  `toernooi_jaar` year(4) NOT NULL,
  `id_rooster` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `toernooi`
--

INSERT INTO `toernooi` (`id_toernooi`, `id_toernooitype`, `toernooi_jaar`, `id_rooster`) VALUES
(1, 1, 2016, 1),
(2, 2, 2014, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `toernooitype`
--

CREATE TABLE `toernooitype` (
  `id_toernooitype` int(11) NOT NULL,
  `toernooitype` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `toernooitype`
--

INSERT INTO `toernooitype` (`id_toernooitype`, `toernooitype`) VALUES
(1, 'Europees Kampioenschap'),
(2, 'Wereld Kampioenschap');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `uitslag`
--

CREATE TABLE `uitslag` (
  `id_uitslag` int(11) NOT NULL,
  `goalteam_1` int(11) DEFAULT NULL,
  `goalteam_2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `uitslag`
--

INSERT INTO `uitslag` (`id_uitslag`, `goalteam_1`, `goalteam_2`) VALUES
(1, 5, 1),
(2, 5, 1),
(3, NULL, NULL);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`id_land`);

--
-- Indexen voor tabel `rooster`
--
ALTER TABLE `rooster`
  ADD PRIMARY KEY (`id_rooster`),
  ADD KEY `id_team1` (`id_team1`),
  ADD KEY `id_team2` (`id_team2`),
  ADD KEY `id_uitslag` (`id_uitslag`);

--
-- Indexen voor tabel `toernooi`
--
ALTER TABLE `toernooi`
  ADD PRIMARY KEY (`id_toernooi`),
  ADD KEY `id_toernooitype` (`id_toernooitype`),
  ADD KEY `id_rooster` (`id_rooster`);

--
-- Indexen voor tabel `toernooitype`
--
ALTER TABLE `toernooitype`
  ADD PRIMARY KEY (`id_toernooitype`);

--
-- Indexen voor tabel `uitslag`
--
ALTER TABLE `uitslag`
  ADD PRIMARY KEY (`id_uitslag`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `land`
--
ALTER TABLE `land`
  MODIFY `id_land` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `rooster`
--
ALTER TABLE `rooster`
  MODIFY `id_rooster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `toernooi`
--
ALTER TABLE `toernooi`
  MODIFY `id_toernooi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `toernooitype`
--
ALTER TABLE `toernooitype`
  MODIFY `id_toernooitype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `uitslag`
--
ALTER TABLE `uitslag`
  MODIFY `id_uitslag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `rooster`
--
ALTER TABLE `rooster`
  ADD CONSTRAINT `rooster_ibfk_1` FOREIGN KEY (`id_team1`) REFERENCES `land` (`id_land`),
  ADD CONSTRAINT `rooster_ibfk_2` FOREIGN KEY (`id_team2`) REFERENCES `land` (`id_land`),
  ADD CONSTRAINT `rooster_ibfk_3` FOREIGN KEY (`id_uitslag`) REFERENCES `uitslag` (`id_uitslag`);

--
-- Beperkingen voor tabel `toernooi`
--
ALTER TABLE `toernooi`
  ADD CONSTRAINT `toernooi_ibfk_1` FOREIGN KEY (`id_toernooitype`) REFERENCES `toernooitype` (`id_toernooitype`),
  ADD CONSTRAINT `toernooi_ibfk_2` FOREIGN KEY (`id_rooster`) REFERENCES `rooster` (`id_rooster`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
