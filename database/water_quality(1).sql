-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 10:51 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `water_quality`
--

-- --------------------------------------------------------

--
-- Table structure for table `indikator`
--

CREATE TABLE `indikator` (
  `id_sumber` int(11) DEFAULT NULL,
  `ind_pH` float NOT NULL,
  `ind_DO` float NOT NULL,
  `ind_BOD` float NOT NULL,
  `ind_TDS` float NOT NULL,
  `ind_turbidity` float NOT NULL,
  `ind_PO4` float NOT NULL,
  `ind_NO3` float NOT NULL,
  `ind_CI` float NOT NULL,
  `ind_tot_hardness` float NOT NULL,
  `ind_conductivity` float NOT NULL,
  `ind_alkalinity` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indikator`
--

INSERT INTO `indikator` (`id_sumber`, `ind_pH`, `ind_DO`, `ind_BOD`, `ind_TDS`, `ind_turbidity`, `ind_PO4`, `ind_NO3`, `ind_CI`, `ind_tot_hardness`, `ind_conductivity`, `ind_alkalinity`) VALUES
(1, 6.73, 5.43, 1.72, 13.18, 19.08, 0.12, 0.01, 5.87, 8.07, 27.07, 0.12),
(2, 6.72, 5.65, 1.62, 11.2, 17.82, 0.04, 0.03, 4.23, 3.84, 18.56, 150),
(3, 7.4, 8.2, 1.6, 691, 81, 0.13, 4.13, 167, 321, 991, 165);

-- --------------------------------------------------------

--
-- Table structure for table `sumber_air`
--

CREATE TABLE `sumber_air` (
  `id_sumber` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `kualitas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sumber_air`
--

INSERT INTO `sumber_air` (`id_sumber`, `nama`, `lokasi`, `jenis`, `kualitas`) VALUES
(1, 'Egini', 'Nigeria', 'sungai', 'poor'),
(2, 'Ubogo', 'Nigeria', 'sungai', 'poor'),
(3, 'Al-Gharraf', 'Iraq', 'sungai', 'good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `indikator`
--
ALTER TABLE `indikator`
  ADD KEY `id_sumber` (`id_sumber`);

--
-- Indexes for table `sumber_air`
--
ALTER TABLE `sumber_air`
  ADD PRIMARY KEY (`id_sumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sumber_air`
--
ALTER TABLE `sumber_air`
  MODIFY `id_sumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `indikator`
--
ALTER TABLE `indikator`
  ADD CONSTRAINT `indikator_ibfk_1` FOREIGN KEY (`id_sumber`) REFERENCES `sumber_air` (`id_sumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
