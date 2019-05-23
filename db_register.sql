-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2019 at 10:46 AM
-- Server version: 10.1.34-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `20181122`
--

CREATE TABLE `20181122` (
  `primär nyckel` int(11) NOT NULL COMMENT 'Unikt index',
  `fnamn` varchar(255) NOT NULL COMMENT 'Förnamn',
  `enamn` varchar(255) NOT NULL COMMENT 'Efternamn',
  `tfn` varchar(255) NOT NULL COMMENT 'Telefonnummer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Namn och telefon till medlemmarna';

-- --------------------------------------------------------

--
-- Table structure for table `projekt`
--

CREATE TABLE `projekt` (
  `nyckel` int(250) NOT NULL COMMENT 'Unikt index',
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL COMMENT 'användarnamn',
  `password` varchar(255) NOT NULL COMMENT 'lösenord',
  `fnamn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL COMMENT 'Förnamn',
  `enamn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL COMMENT 'Efternamn',
  `tfn` varchar(20) NOT NULL COMMENT 'telefonnummer',
  `admin` tinyint(30) NOT NULL COMMENT 'administratör'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='namn på personer och deras favoritlag';

--
-- Dumping data for table `projekt`
--

INSERT INTO `projekt` (`nyckel`, `username`, `password`, `fnamn`, `enamn`, `tfn`, `admin`) VALUES
(0, 'berrabus123', '$2y$10$Rxt8fFVNsSoZ4C5yA.2Uh.nT3mJDmKKures6ekd2WTk.MuPjn2lBG', 'Anton', 'Stenberg', '0727421127', 0),
(1, 'edvin', '$2y$10$hPGrc5.YPoGvUF/z/Kq67.SKWrO.BER8tyK12SnmtY/pr608ea7iy', 'Edvin', 'Åkeson', '0700000001', 0),
(2, 'piggy', '$2y$10$ol4QeWP32pp340rkxAUAVebuNkUF18jvMzgNKgOv7u0IFTZEp3D3y', 'Isak', 'Wikman', '0700000002', 0),
(3, 'barr', '$2y$10$s192DCxTiWuraDBk12k2iedEXkdKb5GbuLKAKyAhqkxn/wqeQv2T.', 'Arvid', 'Ahlborg', '0700000003', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `nyckel` int(10) UNSIGNED NOT NULL COMMENT 'Unikt index',
  `fnamn` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL COMMENT 'Förnamn',
  `enamn` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL COMMENT 'Efternamn',
  `fotbollslag` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL COMMENT 'Favoritfotbollslag'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='namn på personer och deras favoritlag';

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`nyckel`, `fnamn`, `enamn`, `fotbollslag`) VALUES
(1, 'Anton', 'Stenberg', 'Manchester United'),
(2, 'Isak', 'Wikman', 'Manchester City'),
(3, 'Edvin', 'Åkeson', 'Hull'),
(4, 'Arvid', 'Ahlborg', 'Hamburg'),
(5, 'Simon', 'Georgsson', 'Kinnahult'),
(6, 'Karl', 'Persson', 'West Ham'),
(7, 'Erik', 'Persson', 'Arsenal'),
(8, 'Isak', 'Persson', 'Tottenham'),
(9, 'Simon', 'Gunnarsson', 'de flesta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `20181122`
--
ALTER TABLE `20181122`
  ADD PRIMARY KEY (`primär nyckel`);

--
-- Indexes for table `projekt`
--
ALTER TABLE `projekt`
  ADD PRIMARY KEY (`nyckel`),
  ADD UNIQUE KEY `användarnamn` (`username`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`nyckel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `nyckel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Unikt index', AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
