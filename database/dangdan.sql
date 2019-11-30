-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Nov 2019 pada 22.22
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dangdan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` varchar(255) NOT NULL,
  `username_admin` varchar(5) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username_admin`, `password`) VALUES
('1', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `no_ktp` varchar(30) NOT NULL,
  `nama_customer` varchar(30) DEFAULT NULL,
  `email_customer` varchar(30) DEFAULT NULL,
  `username_customer` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jk` varchar(5) NOT NULL,
  `telpon_customer` varchar(30) DEFAULT NULL,
  `alamat_customer` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`no_ktp`, `nama_customer`, `email_customer`, `username_customer`, `password`, `jk`, `telpon_customer`, `alamat_customer`) VALUES
('000000', 'lasjdkjh', 'abcd@gmail.com', 'kjhasfkjfh', 'e2fc714c4727ee9395f324cd2e7f331f', 'L', '088888888', 'abcd'),
('000001', '1111', 'abcd3@gmail.com', 'asdasd', 'b59c67bf196a4758191e42f76670ceba', 'P', '0888888888', 'BCD'),
('00002', 'dicky', 'dickyhidayat2@gmail.com', 'dickyhdyt', '07a7ac0f121a52fc697f7873a8b46431', 'L', '081311439657', 'Bogor'),
('100', 'a', 'a@gmail.com', 'a', '0cc175b9c0f1b6a831c399e269772661', 'L', '0', '0 '),
('1234', 'a', 'aaa@gmail.com', 'abcdf', '47bce5c74f589f4867dbd57e9ca9f808', 'L', '088888888888', 'bogor'),
('1235', 'b', 'bbb@gmail.com', '', '08f8e0260c64418510cefb2b06eee5cd', '', '0811111111112', 'sukabirus'),
('1236', 'c', 'ccc@gmail.com', '', 'ccc', '', '0811111111113', 'sukapura'),
('1237', 'd', 'ddd@gmail.com', '', 'ddd', '', '0811111111114', 'buah batu'),
('1238', 'e', 'eee@gmail.com', '', 'eee', '', '0811111111115', 'garut'),
('1301174308', 'Angga Agustira', 'anggaagustira@gmail.com', 'anggaagust', '06667471e959401dae4514b8b3ff583f', 'L', '081395145194 ', 'asdsadad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_service`
--

CREATE TABLE `detail_service` (
  `id_service` int(255) NOT NULL,
  `id_montir` varchar(30) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `tanggal_service` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_service`
--

INSERT INTO `detail_service` (`id_service`, `id_montir`, `biaya`, `tanggal_service`, `tanggal_selesai`, `status`) VALUES
(1111, '9876', 200000, '2019-06-21', '2019-06-22', 'Selesai\r\n'),
(2222, '9875', 150000, '2019-06-22', '2019-06-22', 'Proses\r\n'),
(3333, '9874', 300000, '2019-06-23', '2019-06-23', 'Proses'),
(4444, '9873', 35000, '2019-06-24', '0000-00-00', 'Service :');

-- --------------------------------------------------------

--
-- Struktur dari tabel `montir`
--

CREATE TABLE `montir` (
  `id_montir` varchar(30) NOT NULL,
  `nama_montir` varchar(30) DEFAULT NULL,
  `alamat_montir` varchar(30) DEFAULT NULL,
  `email_montir` varchar(30) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `telpon_montir` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `montir`
--

INSERT INTO `montir` (`id_montir`, `nama_montir`, `alamat_montir`, `email_montir`, `password`, `telpon_montir`) VALUES
('1231', 'angga', 'bojong', 'anggaagustira@gmail.com', '8479c86c7afcb56631104f5ce5d6de62', '081395145194'),
('9873', 'i', 'bandung', 'iii@gmail.com', '36347412c7d30ae6fde3742bbc4f21b9', '0822222222224'),
('9874', 'h', 'bandung', 'hhh@gmail.com', '0', '0822222222223'),
('9875', 'g', 'bandung', 'ggg@gmail.com', '0', '0822222222222'),
('9876', 'f', 'bandung', 'fff@gmail.com', '0', '0822222222221');

-- --------------------------------------------------------

--
-- Struktur dari tabel `motor`
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
-- Dumping data untuk tabel `motor`
--

INSERT INTO `motor` (`nopol`, `no_ktp`, `nama_motor`, `jenis_motor`, `cc`, `tahun_motor`) VALUES
('100', '1234', 'CBR RR-R', 'Matic', 1000, 2020),
('1001', '1234', 'asd', 'Matic', 12, 2222),
('D01020EE', '100', 'CBR RR-R', 'Sport', 1000, 2020),
('D1234FE', '1234', 'Vario', 'matic', 150, 2017),
('D1235FR', '1237', 'CBR150', 'sport', 150, 2019),
('D1236FT', '1235', 'R25', 'sport', 250, 2019),
('D1237FY', '1236', 'Supra X', 'bebek', 125, 2018),
('D1238FU', '1238', 'NMAX', 'matic', 150, 2018);

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `id_service` int(255) NOT NULL,
  `nopol` varchar(30) DEFAULT NULL,
  `jenis_daftar` varchar(30) DEFAULT NULL,
  `tanggal_service` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id_service`, `nopol`, `jenis_daftar`, `tanggal_service`) VALUES
(1111, 'D1234FE', 'service', '2019-06-20'),
(2222, 'D1235FR', 'ganti oli', '2019-06-21'),
(3333, 'D1236FT', 'ganti ban', '2019-06-22'),
(4444, 'D1237FY', 'service', '2019-06-23'),
(5555, 'D1238FU', 'service', '2019-06-24'),
(5556, 'D1234FE', 'Ganti Oli', '2019-11-26'),
(5557, 'D1234FE', 'Ganti Oli', '2019-11-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spareparts`
--

CREATE TABLE `spareparts` (
  `id_barang` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spareparts`
--

INSERT INTO `spareparts` (`id_barang`, `nama`, `gambar`, `deskripsi`, `harga`) VALUES
(6, 'Lampu Sein Kanan Dep', 'lampu-sein-kanan-depan-33400k15921.jpg', 'Bahan body lampu sein LED Lightech FRE906NER ABS plastik                         Cahaya lampu sein tipe LED warna orange                         Lampu sein LED Sequential dengan mekanisme sequence / running led light                         Bisa digunakan untuk lampu sein depan atau belakang', 45000),
(7, 'ASPIRA Gear Motor', 'Gear.jpg', 'Produk Gear Set ASPIRA lebih kuat karena Gear belakang menggunakan baja karbon (SC45), Tahan Lama karena Gear depan memiliki kekerasan terbaik (HRC60) tidak cepat aus dapat menahan getaran dari putaran mesin, Tangguh karena rantai berkualitas tinggi (HRA80) kuat dan tahan disegala kondisi.', 60000),
(8, 'Knalpot Beat', 'knalpot.jpg', 'Knalpot, pipa untuk mengalirkan gas hasil pembakaran. Peredam suara atau disebut juga muffler, yang berfungsi untuk meredam suara                             knlpot beat standar asli original honda                             tersedia berbagai pilihan motor                             beat esp                             beat karbu                             beat f1                             vario 110 led                             scopy karbu                             scopy F1', 250000),
(9, 'Ban tubeless 100/80-17 Front &amp; 140/70-17 Rear', 'ban2.jpg', '2 pcs Ban tubeless 100/80-17 Front &amp; 140/70-17 Rear (Hanya Ban Luar, Velg Hanya Contoh Gambar) Lebih tahan lama aman untuk pemakaian dalam keadaan basah maupun kering didesain sporty sesuai dengan area perkotaan yang siap menemani aktivitas harian Anda', 400000),
(11, 'Lampu depan beat', 'lampu_motor2.jpg', 'Reflektor lampu depan                         Dengan auto focus berbahan plastik                         Untuk diaplikasikan pada motor Beat POP yang berfungsi memberikan penerangan kepada pengendara pada waktu malam hari                         Rumah lampu buatan Indonesia ini telah bersertifikasi SNI', 60000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username_admin`);

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
  ADD KEY `motor_ibfk_1` (`no_ktp`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`),
  ADD KEY `service_ibfk_1` (`nopol`);

--
-- Indexes for table `spareparts`
--
ALTER TABLE `spareparts`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_service`
--
ALTER TABLE `detail_service`
  MODIFY `id_service` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4445;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5561;
--
-- AUTO_INCREMENT for table `spareparts`
--
ALTER TABLE `spareparts`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_service`
--
ALTER TABLE `detail_service`
  ADD CONSTRAINT `detail_service_ibfk_2` FOREIGN KEY (`id_montir`) REFERENCES `montir` (`id_montir`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_service_ibfk_3` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`);

--
-- Ketidakleluasaan untuk tabel `motor`
--
ALTER TABLE `motor`
  ADD CONSTRAINT `motor_ibfk_1` FOREIGN KEY (`no_ktp`) REFERENCES `customer` (`no_ktp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`nopol`) REFERENCES `motor` (`nopol`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
