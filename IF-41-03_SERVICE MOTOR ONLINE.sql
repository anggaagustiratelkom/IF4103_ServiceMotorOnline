-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2019 at 11:56 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `impal`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `no_ktp` varchar(30) NOT NULL,
  `nama_customer` varchar(30) DEFAULT NULL,
  `alamat_customer` varchar(30) DEFAULT NULL,
  `email_customer` varchar(30) DEFAULT NULL,
  `telpon_customer` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`no_ktp`, `nama_customer`, `alamat_customer`, `email_customer`, `telpon_customer`) VALUES
('1234', 'a', 'bandung', 'aaa@gmail.com', '0811111111111'),
('1235', 'b', 'sukabirus', 'bbb@gmail.com', '0811111111112'),
('1236', 'c', 'sukapura', 'ccc@gmail.com', '0811111111113'),
('1237', 'd', 'buah batu', 'ddd@gmail.com', '0811111111114'),
('1238', 'e', 'garut', 'eee@gmail.com', '0811111111115');

-- --------------------------------------------------------

--
-- Table structure for table `detail_service`
--

CREATE TABLE `detail_service` (
  `id_service` varchar(30) NOT NULL,
  `id_montir` varchar(30) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `tanggal_service` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_service`
--

INSERT INTO `detail_service` (`id_service`, `id_montir`, `biaya`, `tanggal_service`, `tanggal_selesai`) VALUES
('1111', '9876', 200000, '2019-06-21', '2019-06-22'),
('2222', '9875', 150000, '2019-06-22', '2019-06-22'),
('3333', '9874', 300000, '2019-06-23', '2019-06-23'),
('4444', '9873', 150000, '2019-06-24', '2019-06-25'),
('5555', '9872', 200000, '2019-06-25', '2019-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `montir`
--

CREATE TABLE `montir` (
  `id_montir` varchar(30) NOT NULL,
  `nama_montir` varchar(30) DEFAULT NULL,
  `alamat_montir` varchar(30) DEFAULT NULL,
  `email_montir` varchar(30) DEFAULT NULL,
  `telpon_montir` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `montir`
--

INSERT INTO `montir` (`id_montir`, `nama_montir`, `alamat_montir`, `email_montir`, `telpon_montir`) VALUES
('9872', 'j', 'bandung', 'jjj@gmail.com', '0822222222225'),
('9873', 'i', 'bandung', 'iii@gmail.com', '0822222222224'),
('9874', 'h', 'bandung', 'hhh@gmail.com', '0822222222223'),
('9875', 'g', 'bandung', 'ggg@gmail.com', '0822222222222'),
('9876', 'f', 'bandung', 'fff@gmail.com', '0822222222221');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `nopol` varchar(30) NOT NULL,
  `no_ktp` varchar(30) DEFAULT NULL,
  `nama_motor` varchar(30) DEFAULT NULL,
  `jenis_motor` varchar(30) DEFAULT NULL,
  `cc` int(11) DEFAULT NULL,
  `tahun_motor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`nopol`, `no_ktp`, `nama_motor`, `jenis_motor`, `cc`, `tahun_motor`) VALUES
('D1234FE', '1234', 'Vario', 'matic', 150, 2017),
('D1235FR', '1237', 'CBR150', 'sport', 150, 2019),
('D1236FT', '1235', 'R25', 'sport', 250, 2019),
('D1237FY', '1236', 'Supra X', 'bebek', 125, 2018),
('D1238FU', '1238', 'NMAX', 'matic', 150, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_service` varchar(30) NOT NULL,
  `nopol` varchar(30) DEFAULT NULL,
  `jenis_daftar` varchar(30) DEFAULT NULL,
  `tanggal_service` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `nopol`, `jenis_daftar`, `tanggal_service`) VALUES
('1111', 'D1234FE', 'service', '2019-06-20'),
('2222', 'D1235FR', 'ganti oli', '2019-06-21'),
('3333', 'D1236FT', 'ganti ban', '2019-06-22'),
('4444', 'D1237FY', 'service', '2019-06-23'),
('5555', 'D1238FU', 'service', '2019-06-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`no_ktp`),
  ADD UNIQUE KEY `customer_uq1` (`email_customer`),
  ADD UNIQUE KEY `customer_uq2` (`telpon_customer`);

--
-- Indexes for table `detail_service`
--
ALTER TABLE `detail_service`
  ADD PRIMARY KEY (`id_service`),
  ADD UNIQUE KEY `id_montir` (`id_montir`);

--
-- Indexes for table `montir`
--
ALTER TABLE `montir`
  ADD PRIMARY KEY (`id_montir`),
  ADD UNIQUE KEY `montir_uq1` (`email_montir`),
  ADD UNIQUE KEY `montir_uq2` (`telpon_montir`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`nopol`),
  ADD UNIQUE KEY `no_ktp` (`no_ktp`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`),
  ADD UNIQUE KEY `nopol` (`nopol`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_service`
--
ALTER TABLE `detail_service`
  ADD CONSTRAINT `detail_service_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`),
  ADD CONSTRAINT `detail_service_ibfk_2` FOREIGN KEY (`id_montir`) REFERENCES `montir` (`id_montir`);

--
-- Constraints for table `motor`
--
ALTER TABLE `motor`
  ADD CONSTRAINT `motor_ibfk_1` FOREIGN KEY (`no_ktp`) REFERENCES `customer` (`no_ktp`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`nopol`) REFERENCES `motor` (`nopol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
