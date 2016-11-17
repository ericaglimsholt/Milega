-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:8889
-- Tid vid skapande: 17 nov 2016 kl 14:06
-- Serverversion: 5.6.33
-- PHP-version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `milega`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `goals`
--

CREATE TABLE `goals` (
  `goalId` int(11) NOT NULL,
  `goalType` varchar(50) NOT NULL,
  `goalTitle` varchar(50) NOT NULL,
  `goalContent` varchar(1000) NOT NULL,
  `goalDate` datetime NOT NULL,
  `fulfilled` datetime NOT NULL,
  `reminder` datetime NOT NULL,
  `done` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `goals`
--

INSERT INTO `goals` (`goalId`, `goalType`, `goalTitle`, `goalContent`, `goalDate`, `fulfilled`, `reminder`, `done`) VALUES
(3, '', 'titel', 'beskrivning\r\n', '2016-11-15 19:23:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(4, '', 'MIn titel', 'bajskorv content', '2016-11-16 14:16:00', '2016-12-01 00:00:00', '2016-11-28 00:00:00', 0),
(5, '', 'Bäst', 'Jag vill bli bässsst!!!', '2016-11-16 14:45:28', '2016-11-30 00:00:00', '2016-11-18 00:00:00', 0),
(6, '', 'Banne mig städa skrivbordet', 'Det har änna vatt görstökigt nu i tre veckor.', '2016-11-16 16:02:48', '2016-11-27 00:00:00', '2016-11-17 00:00:00', 0),
(7, '', 'Styra upp världen', 'Är trött på den', '2016-11-16 16:07:58', '2017-01-18 00:00:00', '2016-11-20 00:00:00', 0),
(8, '', 'Ericas mål', 'Jag ska bli en sjuuuukt grym develioper', '2016-11-17 09:39:28', '2016-11-19 00:00:00', '2016-11-20 00:00:00', 0),
(9, '', 'Ett gött mål', 'Jag måste sluta tuta', '2016-11-17 09:48:43', '2017-02-10 00:00:00', '2016-11-24 00:00:00', 0),
(10, '', 'Joachims lmål', 'Jag ska bli en awesme designer', '2016-11-17 10:08:11', '2016-11-30 00:00:00', '2016-11-18 00:00:00', 0),
(11, '', 'Joachims lmål', 'Jag ska bli en awesme designer', '2016-11-17 10:09:04', '2016-11-30 00:00:00', '2016-11-18 00:00:00', 0),
(12, '', 'jahsdf', 'asdf', '2016-11-17 10:29:27', '2016-11-24 00:00:00', '2016-11-18 00:00:00', 0),
(13, '', 'asd', 'sdf', '2016-11-17 10:30:38', '2016-11-30 00:00:00', '2016-11-18 00:00:00', 0),
(14, '', 'sdf', 'sdf', '2016-11-17 10:31:29', '2017-04-08 00:00:00', '2016-11-18 00:00:00', 0),
(15, '', 'sdaf', 'asdf', '2016-11-17 10:38:13', '2016-11-30 00:00:00', '2016-11-18 00:00:00', 0),
(16, '', 'sar', 'aSR', '2016-11-17 10:59:52', '2016-11-30 00:00:00', '2016-11-18 00:00:00', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `reflection`
--

CREATE TABLE `reflection` (
  `postId` int(11) NOT NULL,
  `postTitle` varchar(50) NOT NULL,
  `postContent` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`goalId`);

--
-- Index för tabell `reflection`
--
ALTER TABLE `reflection`
  ADD PRIMARY KEY (`postId`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `goals`
--
ALTER TABLE `goals`
  MODIFY `goalId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT för tabell `reflection`
--
ALTER TABLE `reflection`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
