-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 04:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemrogweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(3) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
('bis', 'Bisnis'),
('eko', 'Ekonomi'),
('utm', 'Utama');

-- --------------------------------------------------------

--
-- Table structure for table `pesawat`
--

CREATE TABLE `pesawat` (
  `kode` int(11) NOT NULL,
  `layanan` varchar(100) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesawat`
--

INSERT INTO `pesawat` (`kode`, `layanan`, `nama`, `email`, `notelp`, `tanggal`) VALUES
(4, 'utm', 'Putri Widya Ardhianti', 'ardhiantiputri19@gmail.com', '087812721777', '2021-01-08'),
(5, 'bis', 'grite', 'putrii@gmail.com', '087812721777', '2021-01-08'),
(6, 'utm', 'Widya', 'wid@gmail.com', '0879123', '2020-11-29'),
(8, 'utm', 'HAHAHAHAHA', 'grett@gmail.com', '000000', '2020-12-08'),
(9, 'eko', 'Widya', 'putri.ardhianti@facebook.com', '123', '2020-12-10'),
(11, 'utm', 'HAHAHAHAHA', 'grett@gmail.com', '000000', '2020-12-08'),
(12, 'utm', 'HAHAHAHAHA', 'grett@gmail.com', '000000', '2020-12-08'),
(13, 'bis', 'WKWKWKWKWK', 'ancur@gmail.com', '087812721777', '2021-01-08'),
(16, 'eko', 'Putri Widya Ardhianti', 'ardhiantiputri19@gmail.com', '087812721777', '2021-01-08'),
(18, 'bis', 'Tree', 'trii@gmail.com', '99999', '2020-12-06'),
(20, 'bis', 'Inggrit', 'iggrt@gmail.com', '126534', '2020-12-09'),
(21, 'bis', 'Isnayni', 'Isnaa@gmail.com', '98123', '2020-11-29'),
(22, 'bis', 'Riri', 'ptr@gmail.com', '652431', '2020-12-31'),
(23, 'bis', 'budi', 'budii@gmail.com', '7901725371', '2020-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `level`) VALUES
('grett@gmail.com', 'gretong', 'pengguna'),
('putrii@gmail.com', '111', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `keykelas` (`layanan`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesawat`
--
ALTER TABLE `pesawat`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD CONSTRAINT `pesawat_ibfk_1` FOREIGN KEY (`layanan`) REFERENCES `kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
