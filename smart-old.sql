-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 09:38 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_bobot_kriteria`
--

CREATE TABLE `tabel_bobot_kriteria` (
  `id` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_bobot_kriteria`
--

INSERT INTO `tabel_bobot_kriteria` (`id`, `id_kriteria`, `id_alternatif`, `bobot`) VALUES
(974, 286, 292, 0),
(975, 287, 292, 8),
(976, 288, 292, 8),
(977, 289, 292, 8),
(978, 290, 292, 8),
(979, 291, 292, 8),
(980, 292, 292, 8),
(1009, 286, 292, 0),
(1010, 287, 292, 8),
(1011, 288, 292, 8),
(1012, 289, 292, 8),
(1013, 290, 292, 8),
(1014, 291, 292, 8),
(1015, 292, 292, 8),
(1023, 286, 299, 8),
(1024, 287, 299, 8),
(1025, 288, 299, 8),
(1026, 289, 299, 8),
(1027, 290, 299, 8),
(1028, 291, 299, 8),
(1029, 292, 299, 8),
(1030, 286, 300, 8),
(1031, 287, 300, 8),
(1032, 288, 300, 8),
(1033, 289, 300, 8),
(1034, 290, 300, 8),
(1035, 291, 300, 8),
(1036, 292, 300, 8),
(1037, 286, 301, 7),
(1038, 287, 301, 7),
(1039, 288, 301, 7),
(1040, 289, 301, 7),
(1041, 290, 301, 7),
(1042, 291, 301, 7),
(1043, 292, 301, 7),
(1044, 286, 292, 0),
(1045, 286, 299, 0),
(1046, 286, 300, 0),
(1047, 286, 301, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_data_alternatif`
--

CREATE TABLE `tabel_data_alternatif` (
  `id` int(11) NOT NULL,
  `alternatif` varchar(128) NOT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `lat` varchar(128) NOT NULL,
  `lng` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_data_alternatif`
--

INSERT INTO `tabel_data_alternatif` (`id`, `alternatif`, `alamat`, `lat`, `lng`, `gambar`) VALUES
(292, 'a', 'a', '8', '8', 'bella2.jpeg'),
(299, 'wad', 'awd', '8', '8', ''),
(300, 'awdawd', 'awd88', '8', '8', ''),
(301, 'aeawdawda', 'd654', '7', '7', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kriteria`
--

CREATE TABLE `tabel_kriteria` (
  `id` int(128) NOT NULL,
  `kriteria` varchar(128) NOT NULL,
  `cMAX` int(128) NOT NULL,
  `cMIN` int(128) NOT NULL,
  `utility` varchar(128) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_kriteria`
--

INSERT INTO `tabel_kriteria` (`id`, `kriteria`, `cMAX`, `cMIN`, `utility`, `bobot`) VALUES
(286, 'harga', 400, 20, 'cost', 7),
(287, 'luas', 210, 15, 'benefit', 7),
(288, 'keramaian', 3, 1, 'benefit', 7),
(289, 'fasilitas', 3, 1, 'benefit', 7),
(290, 'keamanan', 3, 1, 'benefit', 7),
(291, 'kompetitor', 5, 1, 'benefit', 7),
(292, 'perijinan', 3, 1, 'benefit', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id`, `username`, `password`) VALUES
(9, 'randy', '163218e536c13ff2fc9a4d76e34be085'),
(10, 'ari', 'fc292bd7df071858c2d0f955545673c1'),
(34, 'aa', '2fb1c5cf58867b5bbc9a1b145a86f3a0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_bobot_kriteria`
--
ALTER TABLE `tabel_bobot_kriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_alternatif` (`id_alternatif`);

--
-- Indexes for table `tabel_data_alternatif`
--
ALTER TABLE `tabel_data_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_bobot_kriteria`
--
ALTER TABLE `tabel_bobot_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1052;

--
-- AUTO_INCREMENT for table `tabel_data_alternatif`
--
ALTER TABLE `tabel_data_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

--
-- AUTO_INCREMENT for table `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=325;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_bobot_kriteria`
--
ALTER TABLE `tabel_bobot_kriteria`
  ADD CONSTRAINT `tabel_bobot_kriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `tabel_kriteria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_bobot_kriteria_ibfk_2` FOREIGN KEY (`id_alternatif`) REFERENCES `tabel_data_alternatif` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
