-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 mrt 2017 om 17:54
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hitlist`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artiest`
--

CREATE TABLE `artiest` (
  `Artiest_id` int(11) NOT NULL,
  `Artist_naam` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `artiest`
--

INSERT INTO `artiest` (`Artiest_id`, `Artist_naam`) VALUES
(1, 'De Heer'),
(2, 'Stalin');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artiest_has_song`
--

CREATE TABLE `artiest_has_song` (
  `Arties_has_Song_id` int(11) NOT NULL,
  `Artiest_Artiest_id` int(11) NOT NULL,
  `song_song_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `artiest_has_song`
--

INSERT INTO `artiest_has_song` (`Arties_has_Song_id`, `Artiest_Artiest_id`, `song_song_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `hitlist_date`
--

CREATE TABLE `hitlist_date` (
  `idhitlist_date` int(11) NOT NULL,
  `hitlist_year` varchar(45) DEFAULT NULL,
  `hitlist_weekno` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `hitlist_date`
--

INSERT INTO `hitlist_date` (`idhitlist_date`, `hitlist_year`, `hitlist_weekno`) VALUES
(1, '1999', '12'),
(2, '2007', '1'),
(3, '2017', '3');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `hitlist_type`
--

CREATE TABLE `hitlist_type` (
  `hitlist_id` int(11) NOT NULL,
  `hitlist_name` varchar(45) NOT NULL,
  `hitlist_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `hitlist_type`
--

INSERT INTO `hitlist_type` (`hitlist_id`, `hitlist_name`, `hitlist_date`) VALUES
(1, 'Top 2000', 2),
(2, 'Communisme top 5', 1),
(3, 'BassieHits', 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `hitlist_type_has_song`
--

CREATE TABLE `hitlist_type_has_song` (
  `hitlist_THS_id` int(11) NOT NULL,
  `hitlist_type_id` int(11) NOT NULL,
  `song_song_id` int(11) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `hitlist_type_has_song`
--

INSERT INTO `hitlist_type_has_song` (`hitlist_THS_id`, `hitlist_type_id`, `song_song_id`, `position`) VALUES
(1, 1, 2, 5),
(2, 2, 1, 12),
(3, 3, 1, 1),
(4, 1, 3, 2),
(5, 1, 4, 3),
(6, 1, 5, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `song`
--

CREATE TABLE `song` (
  `song_id` int(11) NOT NULL,
  `song_title` varchar(45) DEFAULT NULL,
  `release_date` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `song`
--

INSERT INTO `song` (`song_id`, `song_title`, `release_date`) VALUES
(1, 'Oliebollen bakken zichzelf niet', '31-12-2016'),
(2, 'Time waits for no one', '06-06-2006'),
(3, 'Zure haring met slagroom', '02-03-2003'),
(4, 'slagroom', '06-03-2003'),
(5, 'Nog een lied', '12-03-2023');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `artiest`
--
ALTER TABLE `artiest`
  ADD PRIMARY KEY (`Artiest_id`);

--
-- Indexen voor tabel `artiest_has_song`
--
ALTER TABLE `artiest_has_song`
  ADD PRIMARY KEY (`Arties_has_Song_id`,`song_song_id`,`Artiest_Artiest_id`),
  ADD KEY `fk_Artiest_has_song_song1_idx` (`song_song_id`),
  ADD KEY `fk_Artiest_has_song_Artiest1_idx` (`Artiest_Artiest_id`);

--
-- Indexen voor tabel `hitlist_date`
--
ALTER TABLE `hitlist_date`
  ADD PRIMARY KEY (`idhitlist_date`);

--
-- Indexen voor tabel `hitlist_type`
--
ALTER TABLE `hitlist_type`
  ADD PRIMARY KEY (`hitlist_id`),
  ADD KEY `hitlist_date` (`hitlist_date`);

--
-- Indexen voor tabel `hitlist_type_has_song`
--
ALTER TABLE `hitlist_type_has_song`
  ADD PRIMARY KEY (`hitlist_THS_id`),
  ADD KEY `hitlist_type_id` (`hitlist_type_id`),
  ADD KEY `song_song_id` (`song_song_id`);

--
-- Indexen voor tabel `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`song_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `artiest_has_song`
--
ALTER TABLE `artiest_has_song`
  MODIFY `Arties_has_Song_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `hitlist_date`
--
ALTER TABLE `hitlist_date`
  MODIFY `idhitlist_date` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `hitlist_type`
--
ALTER TABLE `hitlist_type`
  MODIFY `hitlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `hitlist_type_has_song`
--
ALTER TABLE `hitlist_type_has_song`
  MODIFY `hitlist_THS_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `artiest_has_song`
--
ALTER TABLE `artiest_has_song`
  ADD CONSTRAINT `fk_Artiest_has_song_Artiest1` FOREIGN KEY (`Artiest_Artiest_id`) REFERENCES `artiest` (`Artiest_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Artiest_has_song_song1` FOREIGN KEY (`song_song_id`) REFERENCES `song` (`song_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `hitlist_type`
--
ALTER TABLE `hitlist_type`
  ADD CONSTRAINT `hitlist_type_ibfk_1` FOREIGN KEY (`hitlist_date`) REFERENCES `hitlist_date` (`idhitlist_date`);

--
-- Beperkingen voor tabel `hitlist_type_has_song`
--
ALTER TABLE `hitlist_type_has_song`
  ADD CONSTRAINT `hitlist_type_has_song_ibfk_1` FOREIGN KEY (`hitlist_type_id`) REFERENCES `hitlist_type` (`hitlist_id`),
  ADD CONSTRAINT `hitlist_type_has_song_ibfk_2` FOREIGN KEY (`song_song_id`) REFERENCES `song` (`song_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
