-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 05:03 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_postest`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_kapal`
--

CREATE TABLE `akun_kapal` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Jenis_akun` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun_kapal`
--

INSERT INTO `akun_kapal` (`ID`, `username`, `email`, `password`, `Jenis_akun`) VALUES
(1, 'user', 'mamakau@gmail.com', '$2y$10$jCf68aPdwMUQT.xGsAnPleQyPJy1TKfmGDE18oOxEM2z4PBOsQ3Xe', 'member'),
(2, 'ADMIN', 'admin@gmail.com', '$2y$10$ZQjFGlYMbvgFrp0Ngnmi9ex12fovo6VQ09D2tmBYpRCqB8X9gMY8q', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_kapal`
--

CREATE TABLE `data_kapal` (
  `ID` int(11) NOT NULL,
  `Nama_Kapal` varchar(30) NOT NULL,
  `Jenis` varchar(30) DEFAULT NULL,
  `Jumlah_ABK` int(2) DEFAULT NULL,
  `Foto_kapal` varchar(255) DEFAULT NULL,
  `Tahun_Masuk` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kapal`
--

INSERT INTO `data_kapal` (`ID`, `Nama_Kapal`, `Jenis`, `Jumlah_ABK`, `Foto_kapal`, `Tahun_Masuk`) VALUES
(5, 'Ini Sih Buaya', 'Kayu', 11, 'Ini Sih Buaya.jpg', 'Friday 28-10-22 - 21:29:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_kapal`
--
ALTER TABLE `akun_kapal`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `data_kapal`
--
ALTER TABLE `data_kapal`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun_kapal`
--
ALTER TABLE `akun_kapal`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_kapal`
--
ALTER TABLE `data_kapal`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
