-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Mai 2024 um 20:59
-- Server-Version: 10.4.32-MariaDB
-- PHP-Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `webshop`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE `benutzer` (
  `ID_B` int(11) NOT NULL,
  `B_Name` varchar(100) NOT NULL,
  `B_Vorname` varchar(100) NOT NULL,
  `B_Geburtstag` int(11) NOT NULL,
  `B_Adresse` varchar(100) NOT NULL,
  `B_Telefonnummer` int(11) NOT NULL,
  `B_Mail` varchar(100) NOT NULL,
  `B_Passwort` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bestellungen`
--

CREATE TABLE `bestellungen` (
  `O_ID` int(11) NOT NULL,
  `O_Datum` int(11) NOT NULL,
  `B_ID` int(11) NOT NULL,
  `P_ID` int(11) NOT NULL,
  `O_Endsumme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `produkte`
--

CREATE TABLE `produkte` (
  `P_ID` int(11) NOT NULL,
  `P_Name` varchar(50) NOT NULL,
  `P_Beschreibung` varchar(500) NOT NULL,
  `P_Anzahl` text NOT NULL,
  `P_Preis` double NOT NULL,
  `P_Bewertung` double NOT NULL,
  `P_Größe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Daten für Tabelle `produkte`
--

INSERT INTO `produkte` (`P_ID`, `P_Name`, `P_Beschreibung`, `P_Anzahl`, `P_Preis`, `P_Bewertung`, `P_Größe`) VALUES
(1, 'Jeans Blau', 'Alltagshose, bequemer Schnitt, 100% Baumwolle\r\n', 'Verfügbar', 39.99, 4.3, 'S,M,L,XL'),
(2, 'T-Shirt Schwarz', 'Basic T-Shirt, für jeden Style, 100% Baumwolle', 'Verfügbar', 10.99, 4.5, 'S,M,L,XL'),
(3, 'Grauer Pullover', 'Schöner grauer Pullover, bequemer Schnitt, 100% Baumwolle', 'Verfügbar', 40.99, 4.6, 'S,M,L,XL'),
(4, 'Weißes T-Shirt', 'Basic T-Shirt, für jeden Style, 100% Baumwolle', 'Verfügbar', 10.99, 4.2, 'S,M,L,XL'),
(5, 'Pullover mit Blumen Muster', 'Schicker Pullover mit Blumen, Gute Passform, 90% Baumwolle, 10% Polyester', 'Verfügbar', 35.99, 4.2, 'S,M,L,XL'),
(6, 'Gerade geschnittene Jogginghose in Schwarz', 'Seitenstreifen\r\nTaillenbund mit Kordelzug\r\nSeitentaschen\r\nGerader Schnitt\r\n100% Baumwolle', 'Vefügbar', 45.99, 5, 'S,M,L,XL'),
(7, 'Oversize-Sweatshirt in Weiß mit „Hamptons“-Schrift', 'Kapuzenpullover & Sweatshirts von Miss Selfridge \r\n    Rundhalsausschnitt\r\n    Langärmlig\r\n    Stickereien\r\n    Normale Passform\r\n\r\n', 'Verfügbar', 60.99, 4.4, 'S,M,L,XL');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  ADD PRIMARY KEY (`ID_B`);

--
-- Indizes für die Tabelle `bestellungen`
--
ALTER TABLE `bestellungen`
  ADD PRIMARY KEY (`O_ID`),
  ADD KEY `B_ID` (`B_ID`),
  ADD KEY `P_ID` (`P_ID`);

--
-- Indizes für die Tabelle `produkte`
--
ALTER TABLE `produkte`
  ADD PRIMARY KEY (`P_ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  MODIFY `ID_B` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `bestellungen`
--
ALTER TABLE `bestellungen`
  MODIFY `O_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `produkte`
--
ALTER TABLE `produkte`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `bestellungen`
--
ALTER TABLE `bestellungen`
  ADD CONSTRAINT `bestellungen_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `produkte` (`P_ID`),
  ADD CONSTRAINT `bestellungen_ibfk_2` FOREIGN KEY (`B_ID`) REFERENCES `benutzer` (`ID_B`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
