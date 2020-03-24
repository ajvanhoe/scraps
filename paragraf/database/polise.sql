-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2019 at 05:04 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polise`
--

-- --------------------------------------------------------

--
-- Table structure for table `grupe`
--

CREATE TABLE `grupe` (
  `id` int(11) NOT NULL,
  `polise_id` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `rodjen` date NOT NULL,
  `pasos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grupe`
--

INSERT INTO `grupe` (`id`, `polise_id`, `ime`, `prezime`, `rodjen`, `pasos`) VALUES
(12, 27, 'Dzon', 'Lenon', '1988-04-11', '2352357568'),
(13, 27, 'Ringo', 'Star', '1990-01-08', '2623476484689'),
(14, 27, 'Dzordz', 'Harison', '1989-08-08', '235235235235');

-- --------------------------------------------------------

--
-- Table structure for table `polise`
--

CREATE TABLE `polise` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `rodjen` date DEFAULT NULL,
  `pasos` varchar(50) DEFAULT NULL,
  `telefon` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `grupa` tinyint(1) DEFAULT NULL,
  `polazak` date DEFAULT NULL,
  `dolazak` date DEFAULT NULL,
  `broj_dana` int(11) NOT NULL,
  `datum_unosa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `polise`
--

INSERT INTO `polise` (`id`, `ime`, `prezime`, `rodjen`, `pasos`, `telefon`, `email`, `grupa`, `polazak`, `dolazak`, `broj_dana`, `datum_unosa`) VALUES
(24, 'Marinko', 'Rokvic', '1975-11-04', '23590860256C', '643536772', 'marinko@hotmail.com', 0, '2019-11-03', '2019-11-29', 26, '2019-11-03'),
(25, 'Nedeljko', 'Subotic', '1986-11-11', '51513523523G', '612346346', 'nedeljko.subotic@gmail.com', 0, '2019-11-18', '2019-12-26', 38, '2019-11-03'),
(26, 'Damir', 'Omeragic', '1956-12-11', '235235235', '23523523', 'damiro@mail.ru', 0, '2019-11-15', '2019-11-29', 14, '2019-11-03'),
(27, 'Pol', 'Makartni', '1957-12-24', '697434523', '2352357', 'paul.mcartny@beatles.com', 1, '2019-11-03', '2019-11-20', 17, '2019-11-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grupe`
--
ALTER TABLE `grupe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polise`
--
ALTER TABLE `polise`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grupe`
--
ALTER TABLE `grupe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `polise`
--
ALTER TABLE `polise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
