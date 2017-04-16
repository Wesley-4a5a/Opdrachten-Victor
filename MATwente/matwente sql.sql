-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.17-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for matwente
CREATE DATABASE IF NOT EXISTS `matwente` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `matwente`;


-- Dumping structure for table matwente.Configuraties
CREATE TABLE IF NOT EXISTS `Configuraties` (
  `ConfiguratieID` int(11) NOT NULL AUTO_INCREMENT,
  `ConfiguratieModel` varchar(50) DEFAULT NULL,
  `ConfiguratieCPU` varchar(50) DEFAULT NULL,
  `ConfiguratieMemory` varchar(50) DEFAULT NULL,
  `ConfiguratieHarddisk` varchar(50) DEFAULT NULL,
  `ConfiguratieOS` varchar(50) DEFAULT NULL,
  `ConfiguratieVideocard` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ConfiguratieID`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

-- Dumping data for table matwente.Configuraties: ~59 rows (approximately)
/*!40000 ALTER TABLE `Configuraties` DISABLE KEYS */;
INSERT INTO `Configuraties` (`ConfiguratieID`, `ConfiguratieModel`, `ConfiguratieCPU`, `ConfiguratieMemory`, `ConfiguratieHarddisk`, `ConfiguratieOS`, `ConfiguratieVideocard`) VALUES
	(1, 'DESKTOP', 'I3', '2 GB', '500MB', 'Windows 10 Pro', '512 GB'),
	(2, 'DESKTOP', 'I5', '4 GB', '500 GB', 'Windows 10 Pro', '512 GB'),
	(3, 'DESKTOP', 'I5', '4 GB', '500 GB', 'Windows 10 Pro', '512 GB'),
	(4, 'LAPTOP', 'I7', '8 GB', '250 GB SSD', '', ''),
	(5, 'DESKTOP', 'I7', '4 GB', '2 TB', 'Windows 10 Pro', '1 GB'),
	(6, 'DESKTOP', 'I7', '4 GB', '2 TB', 'Windows 10 Pro', '1 GB'),
	(7, 'DESKTOP', 'I7', '4 GB', '2 TB', 'Windows 10 Pro', '1 GB'),
	(8, 'DESKTOP', 'I7', '4 GB', '2 TB', 'Windows 10 Pro', '1 GB'),
	(9, 'DESKTOP', 'I7', '4 GB', '2 TB', 'Windows 10 Pro', '1 GB'),
	(10, 'DESKTOP', 'I7', '4 GB', '2 TB', 'Windows 10 Pro', '1 GB'),
	(11, 'DESKTOP', 'I7', '4 GB', '2 TB', 'Windows 10 Pro', '1 GB'),
	(12, 'DESKTOP', 'I7', '4 GB', '2 TB', 'Windows 10 Pro', '1 GB'),
	(13, 'DESKTOP', 'I7', '4 GB', '2 TB', 'Windows 10 Pro', '1 GB'),
	(14, 'DESKTOP', 'I7', '4 GB', '2 TB', 'Windows 10 Pro', '1 GB'),
	(15, 'DESKTOP', 'I7', '4 GB', '2 TB', 'Windows 10 Pro', '1 GB'),
	(16, 'DESKTOP', 'I7', '4 GB', '2 TB', 'Windows 10 Pro', '1 GB'),
	(17, 'DESKTOP', 'I7', '4 GB', '2 TB', 'Windows 10 Pro', '1 GB'),
	(18, 'DESKTOP', 'I7', '4 GB', '2 TB', 'Windows 10 Pro', 'On Board'),
	(19, 'DESKTOP', 'I7', '4 GB', '2 TB', 'Windows 10 Pro', 'On Board'),
	(20, 'LAPTOP', 'I7', '8 GB', '250 GB SSD', '', ''),
	(21, 'LAPTOP', 'I3', '4 GB', '320 GB', 'Windows 10 Pro', 'On Board'),
	(22, 'LAPTOP', 'I3', '4 GB', '320 GB', 'Windows 10 Pro', 'On Board'),
	(23, 'LAPTOP', 'I3', '4 GB', '320 GB', 'Windows 10 Pro', 'On Board'),
	(24, 'LAPTOP', 'I3', '4 GB', '320 GB', 'Windows 10 Pro', 'On Board'),
	(25, 'LAPTOP', 'I7', '8 GB', '250 GB SSD', '', ''),
	(26, 'DESKTOP', 'I3', '4 GB', '640GB', 'Windows 10 Pro', 'On Board'),
	(27, 'DESKTOP', 'I3', '4 GB', '640GB', 'Windows 10 Pro', 'On Board'),
	(28, 'DESKTOP', 'I3', '4 GB', '120 GB SSD', 'Windows 10 Pro', '2 GB'),
	(29, 'DESKTOP', 'I5', '6 GB', '120 GB SSD + 1 TB', 'Windows 10 Pro', '2 GB'),
	(30, 'DESKTOP', 'I3', '4 GB', '120 GB SSD', 'Windows 10 Pro', '2 GB'),
	(31, 'DESKTOP', 'I5', '6 GB', '120 GB SSD + 1 TB', 'Windows 10 Pro', '2 GB'),
	(32, 'DESKTOP', 'I3', '4 GB', '120 GB SSD', 'Windows 10 Pro', '2 GB'),
	(33, 'DESKTOP', 'I5', '6 GB', '120 GB SSD + 1 TB', 'Windows 10 Pro', '2 GB'),
	(34, 'DESKTOP', 'I3', '4 GB', '120 GB SSD', 'Windows 10 Pro', '1 GB'),
	(35, 'DESKTOP', 'I5', '6 GB', '120 GB SSD + 1 TB', 'Windows 10 Pro', '1 GB'),
	(36, 'DESKTOP', 'I3', '4 GB', '120 GB SSD', 'Windows 10 Pro', '2 GB'),
	(37, 'DESKTOP', 'I5', '6 GB', '120 GB SSD + 1 TB', 'Windows 10 Pro', '2 GB'),
	(38, 'LAPTOP', 'I3', '4 GB', '128 GB SSD', 'Mac OSX', 'On Board'),
	(39, 'LAPTOP', 'I3', '4 GB', '128 GB SSD', 'Mac OSX', 'On Board'),
	(40, 'DESKTOP', 'I7', '8 GB', '120 GB SSD + 640GB', 'Windows 10 Pro', '2 GB'),
	(41, 'DESKTOP', 'I7', '8 GB', '120 GB SSD + 640GB', 'Windows 10 Pro', '2 GB'),
	(42, 'DESKTOP', 'I7', '8 GB', '120 GB SSD + 640GB', 'Windows 10 Pro', '2 GB'),
	(43, 'DESKTOP', 'I7', '8 GB', '120 GB SSD + 640GB', 'Windows 10 Pro', '2 GB'),
	(44, 'DESKTOP', 'I7', '8 GB', '120 GB SSD + 640GB', 'Windows 10 Pro', '2 GB'),
	(45, 'DESKTOP', 'I7', '8 GB', '120 GB SSD + 640GB', 'Windows 10 Pro', '2 GB'),
	(46, 'DESKTOP', 'I7', '8 GB', '120 GB SSD + 640GB', 'Windows 10 Pro', '2 GB'),
	(47, 'DESKTOP', 'I7', '8 GB', '120 GB SSD + 640GB', 'Windows 10 Pro', '2 GB'),
	(48, 'DESKTOP', 'I7', '8 GB', '120 GB SSD + 640GB', 'Windows 10 Pro', '2 GB'),
	(49, 'DESKTOP', 'I7', '8 GB', '120 GB SSD + 640GB', 'Windows 10 Pro', '2 GB'),
	(50, 'DESKTOP', 'I7', '8 GB', '120 GB SSD + 640GB', 'Windows 10 Pro', '2 GB'),
	(51, 'DESKTOP', 'I7', '8 GB', '120 GB SSD + 640GB', 'Windows 10 Pro', '2 GB'),
	(52, 'LAPTOP', 'I5', '6 GB', '500 GB', 'Windows 10 Pro', 'On Board'),
	(53, 'LAPTOP', 'I5', '6 GB', '500 GB', 'Windows 10 Pro', 'On Board'),
	(54, 'LAPTOP', 'I5', '6 GB', '500 GB', 'Windows 10 Pro', 'On Board'),
	(55, 'DESKTOP', 'I7', '16 GB', '120 GB SSD +2TB', 'Windows 10 Pro', '4 GB Videocard'),
	(56, 'DESKTOP', 'I7', '16 GB', '120 GB SSD +2TB', 'Windows 10 Pro', '2 GB'),
	(57, 'LAPTOP', 'I7', '8 GB', '250 GB SSD', 'Windows 10 Pro', '2 GB on board'),
	(58, 'LAPTOP', 'I7', '8 GB', '250 GB SSD', 'Windows 10 Pro', '2 GB on board'),
	(59, 'LAPTOP', 'I7', '8 GB', '250 GB SSD', 'Windows 10 Pro', '2 GB on board');
/*!40000 ALTER TABLE `Configuraties` ENABLE KEYS */;


-- Dumping structure for table matwente.FAQ
CREATE TABLE IF NOT EXISTS `FAQ` (
  `FAQID` int(11) NOT NULL AUTO_INCREMENT,
  `FAQTitle` varchar(50) DEFAULT NULL,
  `FAQOmschrijving` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`FAQID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table matwente.FAQ: ~0 rows (approximately)
/*!40000 ALTER TABLE `FAQ` DISABLE KEYS */;
/*!40000 ALTER TABLE `FAQ` ENABLE KEYS */;


-- Dumping structure for table matwente.Medewerkers
CREATE TABLE IF NOT EXISTS `Medewerkers` (
  `MedewerkerID` int(11) NOT NULL AUTO_INCREMENT,
  `PCID` int(11) DEFAULT NULL,
  `MedewerkerGeslacht` varchar(50) NOT NULL,
  `MedewerkerVoorletter` varchar(50) NOT NULL,
  `MedewerkerAchternaam` varchar(50) NOT NULL,
  `MedewerkerAfdeling` varchar(50) NOT NULL,
  `MedewerkerInternTelefoonNummer` int(11) DEFAULT NULL,
  `MedewerkerBinnenOfBuitenDienst` int(11) NOT NULL,
  PRIMARY KEY (`MedewerkerID`),
  KEY `PCID` (`PCID`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

-- Dumping data for table matwente.Medewerkers: ~58 rows (approximately)
/*!40000 ALTER TABLE `Medewerkers` DISABLE KEYS */;
INSERT INTO `Medewerkers` (`MedewerkerID`, `PCID`, `MedewerkerGeslacht`, `MedewerkerVoorletter`, `MedewerkerAchternaam`, `MedewerkerAfdeling`, `MedewerkerInternTelefoonNummer`, `MedewerkerBinnenOfBuitenDienst`) VALUES
	(1, 41, 'Dhr.', 'V', 'Campbell', 'CAD', 254, 1),
	(2, 43, 'Dhr.', 'S', 'Geerman', 'CAD', 253, 1),
	(3, 42, 'Mevr.', 'S', 'Nahuys, (Van)', 'CAD', 252, 1),
	(4, 44, 'Mevr.', 'F', 'Çiçek', 'Directie', 235, 1),
	(5, 39, 'Dhr.', 'O', 'Neville', 'Directie', 236, 1),
	(6, 24, 'Mevr.', 'M', 'Oldeneel tot Oldenzeel, Van', 'Directie', 234, 1),
	(7, 25, 'Dhr.', 'M', ' Barney', 'Engeneering', 250, 1),
	(8, 5, 'Mevr.', 'K', 'Ali', 'Engeneering', 244, 1),
	(9, 21, 'Dhr.', 'Z', 'Bozkurt', 'Engeneering', 239, 1),
	(10, 26, 'Mevr.', 'A', 'Conley', 'Engeneering', 245, 1),
	(11, 2, 'Mevr.', 'H', 'Grotenhuis van Onstein, Van', 'Engeneering', 241, 1),
	(12, 3, 'Dhr.', 'C', 'Hall', 'Engeneering', 240, 1),
	(13, 4, 'Mevr.', 'M', 'Hugenpoth, Van', 'Engeneering', 242, 1),
	(14, 6, 'Dhr.', 'P', 'Koning', 'Engeneering', 237, 1),
	(15, 7, 'Dhr.', 'B', 'Rochussen', 'Engeneering', 247, 1),
	(16, 8, 'Mevr.', 'K', 'Schwartzenberg en Hohenlansberg, Thoe', 'Engeneering', 246, 0),
	(17, 9, 'Mevr.', 'J', 'Wilder', 'Engeneering', 249, 0),
	(18, 10, 'Mevr.', 'E', 'Yalçin', 'Engeneering', 248, 0),
	(19, 11, 'Dhr.', 'J', 'Matse', 'Financiele Administratie', 290, 1),
	(20, 27, 'Mevr.', 'N', 'Kinschot, Van', 'Financiele Administratie', 290, 1),
	(21, 29, 'Mevr.', 'K', 'Nguyen', 'Financiele Administratie', 290, 1),
	(22, 30, 'Dhr.', 'A', 'Girard de Mielet van Coehoorn, De', 'HRM', 276, 0),
	(23, 31, 'Mevr.', 'H', 'Aktaş', 'ICT', 278, 1),
	(24, 32, 'Dhr.', 'S', 'Harrison', 'ICT', 279, 1),
	(25, 45, 'Mevr.', 'V', 'Delen, Van', 'Onderzoek', 263, 1),
	(26, 23, 'Dhr.', 'T', 'Gülcher', 'Onderzoek', 264, 1),
	(27, 40, 'Mevr.', 'L', 'Leyden, Van', 'Onderzoek', 282, 0),
	(28, 48, 'Dhr.', 'A', 'Posson, De', 'Onderzoek', 261, 0),
	(29, 49, 'Mevr.', 'M', 'Tahiri', 'Onderzoek', 265, 0),
	(30, 37, 'Dhr.', 'J', 'Thompson', 'Onderzoek', 266, 0),
	(31, 56, 'Dhr.', 'L', 'Vos van Steenwijk, De', 'Onderzoek', 281, 0),
	(32, 51, 'Dhr.', 'E', 'Westreenen van Tiellandt, Van', 'Onderzoek', 280, 0),
	(33, 12, 'Dhr.', 'F', 'Erp, Van', 'Planning', 260, 0),
	(34, 33, 'Mevr.', 'J', 'Flugi van Aspermont', 'Planning', 262, 0),
	(35, 34, 'Dhr.', 'V', 'Harrison', 'Project planning', 259, 1),
	(36, 13, 'Mevr.', 'K', 'Malik', 'Project planning', 258, 1),
	(37, 14, 'Dhr.', 'L', 'Sasse van Ysselt, Van', 'Project planning', 257, 1),
	(38, 15, 'Mevr.', 'M', 'Schinne, Van', 'Project planning', 251, 1),
	(39, 16, 'Mevr.', 'T', 'Wolters', 'Project planning', 256, 0),
	(40, 57, 'Dhr.', 'R', 'Jansz.', 'Rapportage', 277, 1),
	(41, 52, 'Mevr.', 'D', 'Bergh, Van Benthem van den', 'Rapportage', 268, 1),
	(42, 17, 'Dhr.', 'O', 'Chamberlain', 'Rapportage', 275, 1),
	(43, 35, 'Dhr.', 'L', 'Hesselt van Dinter', 'Rapportage', 267, 0),
	(44, 36, 'Mevr.', 'D', 'Festetics de Tolna', 'Secretariaat', 243, 1),
	(45, 18, 'Mevr.', 'S', 'Sandberg', 'Secretariaat', 238, 1),
	(46, 19, 'Mevr.', 'B', 'Wydenbruck, Von', 'Secretariaat', 255, 1),
	(47, 20, 'Dhr.', 'E', 'Aslan', 'Verkoop en Marketing', 270, 1),
	(48, 28, 'Mevr.', 'F', 'Suasso, Lopes', 'Verkoop en Marketing', 270, 1),
	(49, 54, 'Mevr.', 'J', 'Thompson', 'Verkoop en Marketing', 270, 1),
	(64, 53, 'Mevr.', 'M', 'Tahiri', 'Onderzoek', 265, 0),
	(65, 47, 'Mevr.', 'L', 'Leyden, Van', 'Onderzoek', 282, 0),
	(66, 55, 'Dhr.', 'A', 'Posson, De', 'Onderzoek', 261, 0),
	(67, 58, 'Dhr.', 'L', 'Vos van Steenwijk, De', 'Onderzoek', 281, 0),
	(68, 59, 'Mevr.', 'D', 'Bergh, Van Benthem van den', 'Rapportage', 268, 1),
	(69, 60, 'Dhr.', 'E', 'Westreenen van Tiellandt, Van', 'Onderzoek', 280, 0),
	(70, 22, 'Mevr.', 'V', 'Delen, Van', 'Onderzoek', 263, 1),
	(71, 46, 'Dhr.', 'T', 'Gülcher', 'Onderzoek', 264, 1),
	(72, 50, 'Dhr.', 'J', 'Thompson', 'Onderzoek', 266, 0);
/*!40000 ALTER TABLE `Medewerkers` ENABLE KEYS */;


-- Dumping structure for table matwente.MeldingenResultaten
CREATE TABLE IF NOT EXISTS `MeldingenResultaten` (
  `MeldingResultaatID` int(11) NOT NULL AUTO_INCREMENT,
  `MeldingVraagID` int(11) DEFAULT NULL,
  `MeldingResultaatVerantwoordelijke` varchar(50) NOT NULL,
  `MeldingResultaatAfhandeltijdUren` decimal(10,2) NOT NULL,
  `MeldingVraagHardOfSoftware` int(2) DEFAULT NULL COMMENT '1=hardware 2=software',
  `MeldingResultaatOorzaak` varchar(500) NOT NULL,
  `MeldingResultaatOplossing` varchar(500) DEFAULT NULL,
  `MeldingResultaatTerugkoppeling` varchar(200) NOT NULL,
  PRIMARY KEY (`MeldingResultaatID`),
  KEY `MeldingVraagID` (`MeldingVraagID`)
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=utf8;

-- Dumping data for table matwente.MeldingenResultaten: ~33 rows (approximately)
/*!40000 ALTER TABLE `MeldingenResultaten` DISABLE KEYS */;
INSERT INTO `MeldingenResultaten` (`MeldingResultaatID`, `MeldingVraagID`, `MeldingResultaatVerantwoordelijke`, `MeldingResultaatAfhandeltijdUren`, `MeldingVraagHardOfSoftware`, `MeldingResultaatOorzaak`, `MeldingResultaatOplossing`, `MeldingResultaatTerugkoppeling`) VALUES
	(95, NULL, 'MaTW - ICT Afdeling', 0.10, NULL, 'Niet van toepassing', 'Wachtwoord gereset naar standaard waarden. Optie Change password at next logon aagezet.', 'Gebruiker gebeld met nieuw tijdelijk wachtwoord.'),
	(96, NULL, 'MaTW - ICT Afdeling', 1.00, NULL, 'Bestand gewist', 'Bestand teruggehaald van restore.', 'Gemeld dat bestand terug staat.'),
	(97, NULL, 'Hosting provider', 2.00, NULL, 'DNS-configuratie fout Hosting provider', 'Provider gecontact, deze hebben de fout in DNS-server opgelost. Aanpassing duurt 4 uur voordat deze overal doorwerkt.', 'Alle gebruikers een e-mail gestuurd dat het probleem opgelost is.'),
	(98, NULL, 'MaTW - ICT Afdeling', 0.50, NULL, 'Secties gebruiken', 'Met gebruiker meegekeken, de werking van secties uitgelegd en samen ingesteld voor het document.', 'Niet van toepassing.'),
	(99, NULL, 'MaTW - ICT Afdeling', 1.50, NULL, 'Geheugen vervangen', 'Geheugen blijkt defect. Geheugen vervangen. Geheugen wordt RMA gestuurd.', 'Gebruiker heeft laptop direct meegenomen.'),
	(100, NULL, 'MaTW - ICT Afdeling', 0.25, NULL, 'Standaard instellingen', 'Telefonisch samen met de gebruiker tablet ingesteld.', 'Niet van toepassing.'),
	(101, NULL, 'MaTW - ICT Afdeling', 1.50, NULL, 'Tijdelijk andere laptop', 'Data overgezet naar tijdelijke laptop. Deze laptop wordt opgestuurd naar leverancier voor reparatie.', 'Aan gebruiker gemeld dat nieuwe laptop opgehaald kan worden.'),
	(102, NULL, 'MaTW - ICT Afdeling', 1.00, NULL, 'Wachtwoord terug gezocht.', 'Met behulp van wachtwoord tool wachtwoord in Outlook zichtbaar gemaakt.', 'Wachtwoord telefonisch aan gebruiker doorgegeven.'),
	(103, NULL, 'MaTW - ICT Afdeling', 3.00, NULL, 'IP-routing niet goed', 'Route naar VPN server toegevoegd aan routing tabel van server.', 'Alle buitendienstmedewerkers gemaild.'),
	(104, NULL, 'MaTW - ICT Afdeling', 0.25, NULL, 'Bedrijfsbeleid uitgelegd', 'Uitgelegd aan gebruiker dat deze optie niet aanstaat in het systeem. Bedrijfsbeleid is om collega\'s tijdens de vakantie toegang te geven tot je mailbox zodat deze de mail kunnen bijhouden.', 'Niet van toepassing.'),
	(105, NULL, 'MaTW - ICT Afdeling', 3.00, NULL, 'Bestand gerecoverd', 'Met tool bestand teruggehaald.', 'Bestand op server gezet en gebruiker gemaild.'),
	(106, NULL, 'MaTW - ICT Afdeling', 2.00, NULL, 'BIOS-instellingen goed zetten', 'Na draaien van performace tool bleken BIOS-instellingen geheugen niet goed te staan.', 'Gebruiker laptop terug gegeven.'),
	(107, NULL, 'MaTW - ICT Afdeling', 1.50, NULL, 'Wachtwoord teruggezocht', 'Met behulp van tool Windows wachtwoord achterhaald.', 'Wachtwoord telefonisch aan gebruiker doorgegeven.'),
	(108, NULL, 'MaTW - ICT Afdeling', 1.00, NULL, 'Malware verwijderd', 'Malware van laptop verwijderd.', 'Gebruiker gemeld en komt laptop weer ophalen.'),
	(109, NULL, 'MaTW - ICT Afdeling', 0.50, NULL, 'Logfiles bekeken', 'Remote log\'s bekeken en er probeert inderdaad iemand via remote desktop in te loggen. Remote desktop op laptop is nu uitgezet.', 'Telefonisch aan gebruiker doorgegeven.'),
	(110, NULL, 'MaTW - ICT Afdeling', 4.00, NULL, 'Interface in router defect', 'WAN-interface van router die werkt als VPN-server defect. Reservekaart geplaatst, opnieuw geconfigureerd en getest.', 'Alle buitendienstmedewerkers gemaild.'),
	(126, NULL, 'MaLoZ - ICT Afdeling', 0.25, NULL, 'Niet van toepassing', 'Gebruiker is aangemaakt.', 'Mail met login gegevens verzonden aan hoofd van afdeling.'),
	(127, NULL, 'MaLoZ - ICT Afdeling', 3.00, NULL, 'CPU-koeling zal vol met stof.', 'Pc schoongemaakt en getest. Probleem lijkt verholpen.', 'Pc terug geplaatst en aan gebruiker gemeld.'),
	(128, NULL, 'MaLoZ - ICT Afdeling', 2.00, NULL, 'Switch defect', 'Switch was defect. Deze is vervangen. Nieuwe switch is voorzien van de juiste configuratie-instellingen.', 'Bij afdeling langs gelopen om te vertellen dat het probleem verholpen is.'),
	(129, NULL, 'MaLoZ - ICT Afdeling', 0.10, NULL, 'Niet van toepassing', 'Wachtwoord gereset naar standaard waarden. Optie Change password at next logon aagezet.', 'Gebruiker gebeld met nieuw tijdelijk wachtwoord.'),
	(130, NULL, 'MaLoZ - ICT Afdeling', 1.50, NULL, 'Defecte harddisk', 'Hardisk vervangen en standaard image terug gezet.', 'Persoonlijk aan gebuiker doorgegeven dat pc weer werkt.'),
	(131, NULL, 'Leverancier printer', 0.25, NULL, 'Tandwiel defect', 'Bij leverancier aangemeld; wordt binnen 4 werkdagen vervangen.', 'Gebruikers gemaild dat de printer binnen 4 werkdagen gerepareerd wordt door de leverancier.'),
	(132, NULL, 'MaLoZ - ICT Afdeling', 2.00, NULL, 'Oude versie van JAVA was geïnstalleerd', 'Via AD nieuwe versie van JAVA uitgerold.', 'Niet direct teruggemeld aan gebruikers.'),
	(133, NULL, 'MaLoZ - ICT Afdeling', 3.00, NULL, 'Configuratiefout in switch', 'Alle poorten op 1000 mbps full duplex gezet.', 'Oplossing aan afdelingshoofd gemeld.'),
	(134, NULL, 'MaLoZ - ICT Afdeling', 3.00, NULL, 'Geen capaciteit meer op virtuele disken', 'Virtuele disken en partities vergroot.', 'Gemeld aan CAD-tekenaars dat er weer capaciteit is.'),
	(135, NULL, 'MaLoZ - ICT Afdeling', 0.25, NULL, 'Account disabelen', 'Account gedisabeld.', 'Aan HRM doorgegeven dat account uitstaat.'),
	(136, NULL, 'MaLoZ - ICT Afdeling', 2.00, NULL, 'Niet van toepassing', 'Desktop verhuisd, nieuwe patch gemaakt en oude verwijderd. Patch documentatie is bijgewerkt.', 'Gebruiker ging direct op nieuwe plaats aan het werk.'),
	(137, NULL, 'MaLoZ - ICT Afdeling', 1.00, NULL, 'Voetteksten in Excel', 'Gebruiker uitgelegd hoe voetteksten in Excel werken. En verteld van de werking van CutePDF. Enkele malen het hele proces gezamenlijk doorlopen. Gebruiker vindt dit lastig.', 'Niet van toepassing'),
	(138, NULL, 'MaLoZ - ICT Afdeling', 2.50, NULL, 'Patchfout', 'Patchfout heeft netwerkloop veroorzaakt.', 'Gemeld aan secretariaat. Die verzorgen communicatie naar rest van het bedrijf.'),
	(139, NULL, 'MaLoZ - ICT Afdeling', 0.25, NULL, 'Andere standaard printer', 'Remote HRM printer ingesteld als standaard.', 'Niet van toepassing'),
	(140, NULL, 'MaLoZ - ICT Afdeling', 0.25, NULL, 'Gebruiker aanmaken in administratiepakket', 'Gebuiker aangemaakt in administratiepakket. Gebruiker had nog geen account.', 'Aan hoofd van de afdeling gemeld dat de gebruiker kan inloggen.'),
	(141, NULL, 'MaLoZ - ICT Afdeling', 1.00, NULL, 'Malware verwijderd.', 'Malware van laptop verwijderd.', 'Gebruiker gemeld en komt laptop weer ophalen.'),
	(142, NULL, 'MaLoZ - ICT Afdeling', 1.50, NULL, 'Wachtwoord terug gezocht.', 'Met behulp van tool Windows wachtwoord achterhaald.', 'Wachtwoord telefonisch aan gebruiker doorgegeven.');
/*!40000 ALTER TABLE `MeldingenResultaten` ENABLE KEYS */;


-- Dumping structure for table matwente.MeldingenVragen
CREATE TABLE IF NOT EXISTS `MeldingenVragen` (
  `MeldingenVraagID` int(11) NOT NULL AUTO_INCREMENT,
  `GebruikerID` int(11) NOT NULL DEFAULT '0',
  `PrioreitID` int(11) NOT NULL DEFAULT '0',
  `MedewerkerID` int(11) DEFAULT '0',
  `MeldingVraagBetrekkeningGebruikers` int(11) DEFAULT '0',
  `MeldingVraagAanmeldDag` varchar(50) DEFAULT NULL,
  `MeldingVraagOmschrijving` varchar(100) DEFAULT NULL,
  `MeldingVraagOmschrijvingDetails` varchar(500) NOT NULL,
  `MeldingVraagBinnenOfBuitenDienst` int(11) NOT NULL DEFAULT '0' COMMENT '0=binnen 1=buiten',
  PRIMARY KEY (`MeldingenVraagID`),
  KEY `GebruikerID` (`GebruikerID`),
  KEY `MedewerkerID` (`MedewerkerID`),
  KEY `PrioreitID` (`PrioreitID`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

-- Dumping data for table matwente.MeldingenVragen: ~31 rows (approximately)
/*!40000 ALTER TABLE `MeldingenVragen` DISABLE KEYS */;
INSERT INTO `MeldingenVragen` (`MeldingenVraagID`, `GebruikerID`, `PrioreitID`, `MedewerkerID`, `MeldingVraagBetrekkeningGebruikers`, `MeldingVraagAanmeldDag`, `MeldingVraagOmschrijving`, `MeldingVraagOmschrijvingDetails`, `MeldingVraagBinnenOfBuitenDienst`) VALUES
	(1, 0, 0, 0, 1, NULL, NULL, 'Mark Barney weet na zijn vakantie zijn wachtwoord niet meer.', 1),
	(2, 0, 0, 0, 2, NULL, NULL, 'Bestand staat niet meer in de map van het project. Bestand is vorige week dinsdag voor het laatst aangevuld en opgeslagen.', 1),
	(3, 0, 0, 0, 80, NULL, NULL, 'E-mailomgeving is niet te benaderen door kantoor en buitendienst medewerkers.', 1),
	(4, 0, 0, 0, 1, NULL, NULL, 'Gebruiker wil een pagina in een Word document landscape afdrukken. Pagina\'s voor en na deze pagina dienen portrait te blijven.', 1),
	(5, 0, 0, 0, 1, NULL, NULL, 'Als laptop opstart alleen drie piepjes te horen. Laptop doet verder niets.', 1),
	(6, 0, 0, 0, 1, NULL, NULL, 'Gebruiker wilt zakeljke e-mail op privétablet', 1),
	(7, 0, 0, 0, 1, NULL, NULL, 'Laptop is gevallen. Er zit nu een breuk in scherm.', 1),
	(8, 0, 0, 0, 1, NULL, NULL, 'Ik wil e-mailinstellingen van een extern e-mailadres op mijn tablet instellen, maar ik weet het wachtwoord niet meer. Account met wachtwoord zit nog wel op laptop van de zaak.', 1),
	(9, 0, 0, 0, 1, NULL, NULL, 'Alle buitendienstmedewerkers kunnen na de update niet meer inloggen op de urenadministratie.', 1),
	(10, 0, 0, 0, 1, NULL, NULL, 'Gebruiker wil tijdens vakantie afwezigheidsassistent aanzetten.', 1),
	(11, 0, 0, 0, 1, NULL, NULL, 'Op de harddisk van mijn laptop heb ik per ongeluk een bestand verwijderd. Dit is een rapportage die ik nog niet had opgeslagen op de server. Hier zit drie weken werk in. Het is belangrijk dat deze terug komt.', 1),
	(12, 0, 0, 0, 1, NULL, NULL, 'Pc is traag. Ook nadat door ICT-afdeling een nieuwe image geïnstalleerd is.', 1),
	(13, 0, 0, 0, 1, NULL, NULL, 'Gebruiker is het wachtwoord van privélaptop vergeten. Graag wachtwoord verwijderen of instellen op ander wachtwoord.', 1),
	(14, 0, 0, 0, 1, NULL, NULL, 'Bij opstarten internetbrowser worden advertenties getoond. Bij wegklikken komen er steeds meer advertenties.', 1),
	(16, 24, 0, 0, 1, 'Maandag', 'Nieuwe medewerker op projectplanning', 'Er is een nieuwe medewerkster aangenomen voor projectplanning. Haar naam is Fee Willemse. Ze begint volgende week maandag. Graag account aanmaken met dezelfde rechten als die van haar collega Sigrid van der Wiel.', 0),
	(17, 43, 0, 0, 1, 'Maandag', 'PC loopt soms vast', 'Detail informatie: Na een half uur werken met de pc wordt het scherm zwart en slaat de pc uit. Na 5 minuten kan de pc weer gebruikt worden, maar werkt dan nog ongeveer een kwartier voordat hij weer uitvalt.', 0),
	(18, 13, 0, 0, 6, 'Maandag', 'Secretariaat zonder netwerk', 'Alle pc\'s van het secretariaat geven aan dat ze niet verbonden zijn met een netwerk.', 0),
	(19, 20, 0, 0, 1, 'Maandag', 'Wachtwoord vergeten', 'Sarisa de Hoogt weet na vakantie haar wachtwoord niet meer.', 0),
	(20, 14, 0, 0, 1, 'Dinsdag', 'PC start niet meer op', 'Bij het opstarten van de pc verschijnt de melding "Boot failure. Reboot en Select proper Boot device or Insert Boot Media in selected Boot device".', 0),
	(21, 27, 0, 0, 15, 'Dinsdag', 'Papier zit vast in printer', 'Printer geeft melding "Engine Error please contact administrator". Gebruikers printen nu op printer van financiële administratie.', 0),
	(22, 36, 0, 0, 40, 'Dinsdag', 'Java update melding', 'Op alle kantoorwerkplekken verschijnt dagelijks meerdere malen de melding dat JAVA geupdate moet worden.', 0),
	(23, 3, 0, 0, 4, 'Dinsdag', 'Netwerk is traag bij financiele administratie', 'Het benaderen van data vanaf de servers en vanaf het internet is traag. Het gaat wel, maar heel langzaam.', 0),
	(24, 5, 0, 0, 6, 'Woensdag', 'Geen oplag capaciteit meer op CAD-server', 'Er kunnen geen bestanden meer opgeslagen worden op de CAD-server. Het openen van bestanden gaat nog wel.', 0),
	(25, 21, 0, 0, 1, 'Woensdag', 'Ontslagen medewerker CAD-afdeling', 'Evert de Vrind, een medewerker van de CAD-afdeling, is op staande voet ontslagen. Zijn account moet per direct afgelosten worden.', 0),
	(26, 6, 0, 0, 1, 'Woensdag', 'Verhuizen werkplek', 'Werkplek van secretariaat moet omgezet worden naar de afdeling HRM.', 0),
	(27, 28, 0, 0, 1, 'Donderdag', 'Voettekst op spreadsheet PDF', 'Gebruiker wilt PDF maken met spreadsheet. In die voettekst moet datum en versie vermeld worden.', 0),
	(28, 15, 0, 0, 80, 'Donderdag', 'Netwerk plat. ', 'Netwerk lijkt in zijn geheel niet meer te werken. ', 0),
	(29, 45, 0, 0, 1, 'Donderdag', 'Standaard printer', 'In verband met defecte printer wilt gebruiker dat prints automatisch uit de printer van HRM komen.', 0),
	(30, 37, 0, 0, 1, 'Vrijdag', 'Administratie pakket niet toegangelijk', 'Gebruiker kan niet inloggen op administratiepakket.', 0),
	(31, 38, 0, 0, 1, 'Vrijdag', 'Vreemde pagina\'s op internet', 'Bij opstarten internetbrowser worden advertenties getoond. Bij weg klikken komen er steeds meer advertenties.', 0),
	(32, 16, 0, 0, 1, 'Vrijdag', 'Lokaal wachtwoord kwijt', 'Is het wachtwoord van privélaptop vergeten. Graag wachtwoord verwijderen of instellen op ander wachtwoord.', 0);
/*!40000 ALTER TABLE `MeldingenVragen` ENABLE KEYS */;


-- Dumping structure for table matwente.PC
CREATE TABLE IF NOT EXISTS `PC` (
  `PCID` int(11) NOT NULL AUTO_INCREMENT,
  `ConfiguratieID` int(11) DEFAULT NULL,
  `PCNummer` varchar(11) DEFAULT NULL,
  `PCAanschafDatum` date DEFAULT NULL,
  PRIMARY KEY (`PCID`),
  KEY `ConfiguratieID` (`ConfiguratieID`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

-- Dumping data for table matwente.PC: ~59 rows (approximately)
/*!40000 ALTER TABLE `PC` DISABLE KEYS */;
INSERT INTO `PC` (`PCID`, `ConfiguratieID`, `PCNummer`, `PCAanschafDatum`) VALUES
	(2, 1, '20-162', '2014-11-29'),
	(3, 2, '20-163', '2014-12-20'),
	(4, 3, '20-164', '2014-12-20'),
	(5, 4, '20-165', '2014-11-29'),
	(6, 5, '20-166', '2014-11-29'),
	(7, 6, '20-167', '2014-11-29'),
	(8, 7, '20-168', '2014-11-29'),
	(9, 8, '20-169', '2014-11-29'),
	(10, 9, '20-170', '2014-11-29'),
	(11, 10, '20-171', '2014-11-29'),
	(12, 11, '20-172', '2014-11-29'),
	(13, 12, '20-173', '2014-11-29'),
	(14, 13, '20-174', '2014-11-29'),
	(15, 14, '20-175', '2014-11-29'),
	(16, 15, '20-176', '2014-11-29'),
	(17, 16, '20-177', '2014-11-29'),
	(18, 17, '20-178', '2014-11-29'),
	(19, 18, '20-179', '2014-11-29'),
	(20, 19, '20-180', '2014-11-29'),
	(21, 20, '20-181', '2015-02-12'),
	(22, 21, '20-182', '2015-02-12'),
	(23, 22, '20-183', '2015-02-12'),
	(24, 23, '20-184', '2015-02-12'),
	(25, 24, '20-185', '2015-02-12'),
	(26, 25, '20-186', '2015-02-12'),
	(27, 26, '20-187', '2015-05-07'),
	(28, 27, '20-188', '2015-05-07'),
	(29, 28, '20-189', '2015-06-12'),
	(30, 29, '20-190', '2015-06-12'),
	(31, 30, '20-191', '2015-06-12'),
	(32, 31, '20-192', '2015-06-12'),
	(33, 32, '20-193', '2015-06-12'),
	(34, 33, '20-194', '2015-06-12'),
	(35, 34, '20-195', '2015-06-12'),
	(36, 35, '20-196', '2015-06-12'),
	(37, 36, '20-197', '2015-06-12'),
	(38, 37, '20-198', '2015-06-12'),
	(39, 38, '20-199', '2015-10-10'),
	(40, 39, '20-200', '2015-10-10'),
	(41, 40, '20-201', '2015-12-03'),
	(42, 41, '20-202', '2015-12-03'),
	(43, 42, '20-203', '2015-12-03'),
	(44, 43, '20-204', '2015-12-03'),
	(45, 44, '20-205', '2015-12-03'),
	(46, 45, '20-206', '2015-12-03'),
	(47, 46, '20-207', '2015-12-03'),
	(48, 47, '20-208', '2015-12-03'),
	(49, 48, '20-209', '2015-12-03'),
	(50, 49, '20-210', '2015-12-03'),
	(51, 50, '20-211', '2015-12-03'),
	(52, 51, '20-212', '2015-12-03'),
	(53, 52, '20-213', '2015-12-12'),
	(54, 53, '20-214', '2015-12-12'),
	(55, 54, '20-215', '2015-12-12'),
	(56, 55, '20-216', '2016-05-03'),
	(57, 56, '20-217', '2016-05-03'),
	(58, 57, '20-218', '2016-10-21'),
	(59, 58, '20-219', '2016-10-21'),
	(60, 59, '20-220', '2016-10-21');
/*!40000 ALTER TABLE `PC` ENABLE KEYS */;


-- Dumping structure for table matwente.Prioriteit
CREATE TABLE IF NOT EXISTS `Prioriteit` (
  `PrioriteitID` int(11) NOT NULL AUTO_INCREMENT,
  `PrioriteitUrgentie` varchar(50) DEFAULT NULL,
  `PrioriteitGevolgVerstoring` varchar(50) DEFAULT NULL,
  `PrioriteitCode` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`PrioriteitID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table matwente.Prioriteit: ~0 rows (approximately)
/*!40000 ALTER TABLE `Prioriteit` DISABLE KEYS */;
/*!40000 ALTER TABLE `Prioriteit` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
