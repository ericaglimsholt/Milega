-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:8889
-- Tid vid skapande: 23 nov 2016 kl 14:19
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
  `goalDate` date NOT NULL,
  `fulfilled` date NOT NULL,
  `reminder` date NOT NULL,
  `done` tinyint(1) NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `goals`
--

INSERT INTO `goals` (`goalId`, `goalType`, `goalTitle`, `goalContent`, `goalDate`, `fulfilled`, `reminder`, `done`, `updated`) VALUES
(3, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-15', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(4, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-16', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(5, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-16', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(6, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-16', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(7, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-16', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(8, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-17', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(9, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-17', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(10, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-17', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(11, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-17', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(12, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-17', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(13, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-17', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(14, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-17', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(15, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-17', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(16, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-17', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(17, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-17', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(18, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-18', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(19, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-18', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(20, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-18', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(21, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-18', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(22, '', 'billy bolle', 'Billy bolles updaterade inlägg', '2016-11-18', '2017-02-01', '2016-11-24', 1, '2016-11-19 00:01:50'),
(23, '', 'billy bolle', 'bissy', '2016-11-18', '2017-02-01', '2016-11-24', 1, '2016-11-19 09:52:23'),
(24, '', 'Mitt mål', 'Uppdaterad Bulle', '2016-11-20', '2016-11-29', '2016-11-23', 1, '2016-11-20 12:01:42'),
(25, '', 'Målet', 'Bulle', '2016-11-20', '2016-11-29', '2016-11-23', 0, '0000-00-00 00:00:00'),
(26, '', 'Sensate målet', 'igen', '2016-11-20', '2016-11-30', '2016-11-22', 1, '2016-11-21 11:21:36'),
(27, '', 'nytt mål', 'bp', '2016-11-21', '2016-11-30', '2016-11-23', 0, '0000-00-00 00:00:00');

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
  MODIFY `goalId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT för tabell `reflection`
--
ALTER TABLE `reflection`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
