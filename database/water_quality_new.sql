-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 03:18 PM
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
(1, 7.4, 8.2, 1.6, 691, 81, 0.13, 4.1, 167, 321, 997, 165),
(2, 7.5, 7.95, 2.75, 700, 75.25, 0.195, 4.55, 196, 361, 1075, 189),
(3, 7.175, 7.325, 3.8, 727, 68, 0.3, 4.7, 216, 355, 1082, 200),
(4, 7.5, 6.825, 3.5, 710, 67, 0.59, 4.775, 192, 337, 1027, 196),
(5, 7.5, 7.125, 1.86, 700, 50, 0.363, 4.56, 195, 341, 1043, 189),
(6, 6.1, 8.16, 3.54, 389, 8.35, 0.317, 4.1, 184, 335, 1027, 162),
(7, 6.7, 6.93, 1.68, 297, 8.14, 0.33, 3.53, 172, 341, 1093, 166),
(8, 6.8, 8.85, 2.78, 333, 7.12, 0.386, 3.88, 200, 333, 1055, 178),
(9, 6.3, 7.93, 2.13, 389, 8.84, 0.361, 4.13, 186, 293, 1050, 169),
(10, 6.6, 7.9, 2.88, 357, 5.19, 0.392, 4.06, 203, 347, 1041, 202),
(11, 6.8, 8.36, 1.19, 391, 8.81, 0.313, 3.95, 180, 325, 1075, 191),
(12, 6.7, 7.19, 3.55, 343, 6.71, 0.31, 4.13, 168, 313, 1066, 192),
(13, 6.4, 7.04, 1.96, 369, 5.63, 0.312, 4.02, 210, 363, 1003, 192),
(14, 6.6, 8.48, 3.25, 368, 7.76, 0.378, 3.54, 191, 348, 1027, 204),
(15, 6.4, 8, 2.17, 321, 5, 0.335, 3.76, 190, 325, 1093, 173),
(16, 6.8, 7.91, 3.23, 329, 8.9, 0.309, 4.27, 200, 319, 1041, 166),
(17, 6.6, 7.02, 3.49, 387, 5.93, 0.341, 3.87, 202, 388, 1072, 179),
(18, 6.7, 8.24, 3.26, 296, 5.6, 0.358, 4.21, 210, 388, 1002, 161),
(19, 6.4, 8.58, 2.77, 358, 8.93, 0.393, 3.6, 200, 357, 1042, 163),
(20, 6.7, 8.81, 2.88, 317, 6.63, 0.399, 4.31, 182, 327, 1087, 186),
(21, 6.1, 8.2, 2.16, 347, 8.99, 0.373, 3.75, 181, 293, 1088, 203),
(22, 6.1, 8.11, 3.95, 400, 6.21, 0.295, 3.65, 172, 355, 1005, 173),
(23, 6.6, 7.51, 3.07, 316, 7.58, 0.35, 3.96, 162, 340, 997, 183),
(24, 6.6, 7.82, 3.89, 389, 8.2, 0.393, 4.07, 183, 317, 1020, 201),
(25, 6.3, 7.76, 1.23, 311, 5.42, 0.331, 3.76, 169, 380, 1058, 179),
(26, 6.5, 7.28, 3.56, 342, 8.06, 0.311, 3.78, 205, 370, 1099, 197),
(27, 6.1, 8.87, 1.01, 344, 6.19, 0.324, 4, 184, 325, 1008, 205),
(28, 6.6, 8.92, 1.19, 375, 6.8, 0.297, 3.63, 163, 352, 1005, 190),
(29, 6.1, 7.81, 2.49, 307, 5.11, 0.332, 3.93, 204, 349, 1088, 209),
(30, 6.4, 8.68, 1.16, 330, 6.72, 0.323, 4.28, 210, 322, 1095, 160);

-- --------------------------------------------------------

--
-- Table structure for table `sumber_air`
--

CREATE TABLE `sumber_air` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `kualitas` varchar(255) NOT NULL,
  `WQI` int(11) NOT NULL,
  `ind_time` varchar(255) NOT NULL,
  `ind_temp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sumber_air`
--

INSERT INTO `sumber_air` (`id`, `nama`, `lokasi`, `jenis`, `kualitas`, `WQI`, `ind_time`, `ind_temp`) VALUES
(1, 'Bengawan Solo', 'Jawa Tengah', 'Sungai', '', 0, 09.00, 29),
(2, 'Citarum', 'Jawa Barat', 'Sungai', '', 0, 12.00, 31),
(3, 'Ciliwung', 'Jakarta', 'Sungai', '', 0, 15.00, 30),
(4, 'Brantas', 'Jawa Timur', 'Sungai', '', 0, 20.00, 27),
(5, 'Progo', 'Yogyakarta', 'Sungai', '', 0, 21.00, 33),
(6, 'Serayu', 'Jawa Tengah', 'Sungai', '', 0, 09.01, 34),
(7, 'Klawing', 'Jawa Tengah', 'Sungai', '', 0, 12.01, 34),
(8, 'Code', 'Yogyakarta', 'Sungai', '', 0, 15.01, 29),
(9, 'Opak', 'Yogyakarta', 'Sungai', '', 0, 20.01, 34),
(10, 'Selokan Mataram', 'Yogyakarta', 'Sungai', '', 0, 21.01, 32),
(11, 'Winongo', 'Yogyakarta', 'Sungai', '', 0, 09.02, 32),
(12, 'Krasak', 'Yogyakarta', 'Sungai', '', 0, 12.02, 32),
(13, 'Oyo', 'Yogyakarta', 'Sungai', '', 0, 15.02, 30),
(14, 'Tinalah', 'Yogyakarta', 'Sungai', '', 0, 20.02, 28),
(15, 'Porong', 'Jawa Timur', 'Sungai', '', 0, 21.02, 28),
(16, 'Widas', 'Jawa Timur', 'Sungai', '', 0, 09.03, 29),
(17, 'Bengawan Madiun', 'Jawa Timur', 'Sungai', '', 0, 12.03, 29),
(18, 'Banyupahit', 'Jawa Timur', 'Sungai', '', 0, 15.03, 34),
(19, 'Tuntang', 'Jawa Tengah', 'Sungai', '', 0, 20.03, 30),
(20, 'Pesanggrahan', 'Jawa Barat', 'Sungai', '', 0, 21.02, 28),
(21, 'Ciherang', 'Jawa Barat', 'Sungai', '', 0, 09.03, 31),
(22, 'Ciasem', 'Jawa Barat', 'Sungai', '', 0, 12.03, 29),
(23, 'Cisadane', 'Jawa Barat', 'Sungai', '', 0, 15.03, 34),
(24, 'Cibuni', 'Jawa Barat', 'Sungai', '', 0, 20.03, 31),
(25, 'Cakung', 'Jakarta', 'Sungai', '', 0, 21.03, 28),
(26, 'Cilamaya', 'Jawa Barat', 'Sungai', '', 0, 09.04, 29),
(27, 'Cisanggar', 'Jawa Barat', 'Sungai', '', 0, 12.04, 28),
(28, 'Cigentis', 'Jawa Barat', 'Sungai', '', 0, 15.04, 29),
(29, 'Ciasem', 'Jawa Barat', 'Sungai', '', 0, 20.04, 29),
(30, 'Citanduy', 'Jawa Barat', 'Sungai', '', 0, 09.05, 29);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sumber_air`
--
ALTER TABLE `sumber_air`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `indikator`
--
ALTER TABLE `indikator`
  ADD CONSTRAINT `indikator_ibfk_1` FOREIGN KEY (`id_sumber`) REFERENCES `sumber_air` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
