-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:8889
-- Tid vid skapande: 08 nov 2016 kl 13:51
-- Serverversion: 5.6.28
-- PHP-version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `Milega`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `Goals`
--

CREATE TABLE `Goals` (
  `goal_id` int(10) NOT NULL,
  `goal_title` varchar(50) NOT NULL,
  `goal_content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellstruktur `Journal`
--

CREATE TABLE `Journal` (
  `post_id` int(10) NOT NULL,
  `post_title` varchar(50) NOT NULL,
  `post_content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `Goals`
--
ALTER TABLE `Goals`
  ADD PRIMARY KEY (`goal_id`);

--
-- Index för tabell `Journal`
--
ALTER TABLE `Journal`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `Goals`
--
ALTER TABLE `Goals`
  MODIFY `goal_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT för tabell `Journal`
--
ALTER TABLE `Journal`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
