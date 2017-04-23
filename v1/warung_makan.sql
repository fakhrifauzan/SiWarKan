-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 08:18 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warung_makan`
--

-- --------------------------------------------------------

--
-- Table structure for table `wm_barang`
--

CREATE TABLE `wm_barang` (
  `id_barang` int(11) NOT NULL,
  `id_barang_jenis` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wm_barang`
--

INSERT INTO `wm_barang` (`id_barang`, `id_barang_jenis`, `nama_barang`, `harga_barang`) VALUES
(1, 3, 'Nasi Aking', 130000),
(3, 3, 'Sayur Asem', 2000),
(4, 2, 'Pop Ice', 10000),
(5, 2, 'Extra Jos Susu (Josu)', 6000),
(6, 1, 'Nasi Kolor (Kornet Telor)', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `wm_barang_jenis`
--

CREATE TABLE `wm_barang_jenis` (
  `id_barang_jenis` int(11) NOT NULL,
  `nama_barang_jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wm_barang_jenis`
--

INSERT INTO `wm_barang_jenis` (`id_barang_jenis`, `nama_barang_jenis`) VALUES
(1, 'Makanan Fermentasi'),
(2, 'Minuman'),
(3, 'Sayur');

-- --------------------------------------------------------

--
-- Table structure for table `wm_operator`
--

CREATE TABLE `wm_operator` (
  `id_operator` int(11) NOT NULL,
  `nama_operator` varchar(255) NOT NULL,
  `divisi_operator` varchar(100) NOT NULL,
  `alamat_operator` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wm_operator`
--

INSERT INTO `wm_operator` (`id_operator`, `nama_operator`, `divisi_operator`, `alamat_operator`) VALUES
(2, 'Tukul', 'Goreng', 'Sukapura'),
(3, 'Fakhri Fauzan', 'Owner', 'Antamulya No.2');

-- --------------------------------------------------------

--
-- Table structure for table `wm_transaksi`
--

CREATE TABLE `wm_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `id_operator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wm_transaksi`
--

INSERT INTO `wm_transaksi` (`id_transaksi`, `tanggal_transaksi`, `id_operator`) VALUES
(1, '2017-04-22', 2),
(2, '2017-04-22', 2),
(3, '2017-04-22', 3),
(4, '2017-04-22', 3),
(5, '2017-03-01', 3),
(6, '2017-04-23', 2);

-- --------------------------------------------------------

--
-- Table structure for table `wm_transaksi_detail`
--

CREATE TABLE `wm_transaksi_detail` (
  `id_transaksi_detail` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qty_barang` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` enum('0','1','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wm_transaksi_detail`
--

INSERT INTO `wm_transaksi_detail` (`id_transaksi_detail`, `id_transaksi`, `id_barang`, `qty_barang`, `harga`, `status`) VALUES
(1, 1, 4, 7, 10000, '1'),
(4, 1, 3, 1, 2000, '1'),
(5, 1, 1, 4, 8000, '1'),
(6, 2, 6, 9, 9000, '1'),
(7, 2, 3, 900, 2000, '1'),
(8, 2, 4, 6, 10000, '1'),
(9, 2, 5, 5, 6000, '1'),
(10, 3, 1, 2, 8000, '1'),
(11, 4, 6, 4, 9000, '1'),
(12, 4, 4, 1, 10000, '1'),
(13, 5, 4, 3, 7000, '1'),
(14, 6, 1, 4, 8000, '1'),
(15, 6, 5, 5, 6000, '1'),
(16, 6, 6, 2, 9000, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wm_barang`
--
ALTER TABLE `wm_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `wm_barang_jenis`
--
ALTER TABLE `wm_barang_jenis`
  ADD PRIMARY KEY (`id_barang_jenis`);

--
-- Indexes for table `wm_operator`
--
ALTER TABLE `wm_operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `wm_transaksi`
--
ALTER TABLE `wm_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `wm_transaksi_detail`
--
ALTER TABLE `wm_transaksi_detail`
  ADD PRIMARY KEY (`id_transaksi_detail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wm_barang`
--
ALTER TABLE `wm_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `wm_barang_jenis`
--
ALTER TABLE `wm_barang_jenis`
  MODIFY `id_barang_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wm_operator`
--
ALTER TABLE `wm_operator`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wm_transaksi`
--
ALTER TABLE `wm_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `wm_transaksi_detail`
--
ALTER TABLE `wm_transaksi_detail`
  MODIFY `id_transaksi_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
