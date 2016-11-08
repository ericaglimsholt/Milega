-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:8889
-- Tid vid skapande: 08 nov 2016 kl 15:29
-- Serverversion: 5.6.28
-- PHP-version: 7.0.10

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
  `goalContent` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `goalId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT för tabell `reflection`
--
ALTER TABLE `reflection`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
