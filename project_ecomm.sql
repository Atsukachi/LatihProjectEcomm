-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 06:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id_file` int(11) NOT NULL,
  `nama_berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id_file`, `nama_berkas`) VALUES
(3, 'Logo.png'),
(7, 'Salatiga_2.png'),
(10, 'click_location.png'),
(11, 'HMDTI_logo.png'),
(12, 'pngbarn.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_order`
--

CREATE TABLE `tbl_detail_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) DEFAULT NULL,
  `produk` int(10) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `nama_kategori`) VALUES
(1, 'Laptop'),
(2, 'Smartphone'),
(3, 'Robot');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `pelanggan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `kategori` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `gambar`, `kategori`) VALUES
(1, 'Laptop 1', 'Lorem ipsum dolor sit amet, consectetur \r\nadipisic', '3500000', 'laptop1.jpg', 1),
(2, 'Laptop 2', 'Lorem ipsum \r\ndolor sit amet, consectetur \r\nadipis', '6250000', 'laptop2.jpg', 1),
(3, 'Laptop 3', 'Lorem ipsum \r\ndolor sit amet, consectetur \r\nadipis', '7250000', 'laptop3.jpg', 1),
(4, 'Smartphone 1', 'Lorem \r\nipsum dolor sit amet, consectetur \r\nadipis', '3560000', 'hp1.jpg', 2),
(5, 'Smartphone 2', 'Lorem ipsum \r\ndolor sit amet, consectetur \r\nadipis', '4300000', 'hp2.jpg', 2),
(6, 'Smartphone 3', 'Lorem ipsum \r\ndolor sit amet, consectetur \r\nadipis', '5100000', 'hp3.jpg', 2),
(7, 'Robot 1', 'Lorem ipsum \r\ndolor sit amet, consectetur \r\nadipis', '3500000', 'robot1.jpg', 3),
(8, 'Robot 2', 'Lorem ipsum \r\ndolor sit amet, consectetur \r\nadipis', '4500000', 'robot2.jpg', 3),
(9, 'Robot 3', 'Lorem ipsum \r\ndolor sit amet, consectetur \r\nadipis', '6100000', 'robot3.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `jenis` enum('1','2') NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `email`, `password`, `jenis`) VALUES
(1, 'Didan Hatama', 'Tama', 'didan.hafizpp16@gmail.com', 'da0944fca55008aff2d1402b8f5f4e7e', '2'),
(2, 'Admin', 'Admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '1'),
(3, 'Bambang Eko', 'Eko', 'bambang.eko@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', '2'),
(9, 'Rianeko', 'Rian', 'rianeko.saputro@gmail.com', '68053af2923e00204c3ca7c6a3150cf7', '2'),
(30, 'Dwi Bhakti', 'Bhakti', 'bhakti.dwi@gmail.com', '202cb962ac59075b964b07152d234b70', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_detail_order`
--
ALTER TABLE `tbl_detail_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
