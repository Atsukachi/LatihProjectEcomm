-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 10:21 AM
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

--
-- Dumping data for table `tbl_detail_order`
--

INSERT INTO `tbl_detail_order` (`id`, `order_id`, `produk`, `qty`, `harga`) VALUES
(21, 17, 3, 1, '10600000'),
(22, 17, 6, 1, '12500000'),
(23, 18, 4, 1, '8400000'),
(24, 18, 9, 1, '3700000'),
(26, 20, 74, 1, '4000000'),
(27, 21, 74, 1, '4000000'),
(28, 22, 7, 1, '4860000'),
(29, 23, 74, 1, '4000000'),
(30, 23, 6, 1, '12500000');

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
(3, 'Mainan'),
(4, 'Sepatu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `pelanggan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `tanggal`, `pelanggan`) VALUES
(17, '2021-04-19', 17),
(18, '2021-04-19', 18),
(20, '2021-04-22', 21),
(21, '2021-04-22', 22),
(22, '2021-04-22', 23),
(23, '2021-04-22', 24);

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

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id`, `nama`, `email`, `alamat`, `telp`) VALUES
(17, 'Didan Hatama', 'didan.hafizpp16@gmail.com', 'Jalan Badak IV No. 36', '081319263062'),
(18, 'Rian Eko Saputro', 'rianeko.saputro@gmail.com', 'Jalan Diponegoro 1', '085456456456'),
(21, 'Didan Hatama', 'didan.hafizpp16@gmail.com', 'Jalan', '081319263062'),
(22, 'Rizki Shafara', 'rizki.shafara@gmail.com', 'Jalan A', '08134134141'),
(23, 'Muhammad Rizki', 'rizki@gmail.com', 'Jalan B', '0671623124'),
(24, 'Dwi', 'dwi@gmail.com', 'Jalan Dwi Bhakti', '0812929293030');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `kategori` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `gambar`, `kategori`) VALUES
(1, 'Lenovo ThinkPad X1 Carbon', 'Laptop ini memiliki prosesor Intel Core i5 Gen 8th dengan kapasitas ruang penyimpanan menggunakan SSD 256 GB. Dilengkapi dengan RAM sebesar 8 GB dan Input Output ports yaitu 2 Intel Thunderbolt 3, 2 USB 3.0, HDMI, Native RJ45, MicroSD dan MicroSIM. Serta ukuran layar sebesar 14 inch FHD (1920 x 1080) 300 nits.', '10500000', 'laptop1.jpg', 1),
(2, 'MacBook Pro 13', 'Laptop dilengkapi dengan spesifikasi sebagai berikut :<br>\r\n- Apple M1 chip with 8-core CPU, 8-core GPU, and 16-core Neural Engine<br>\r\n- 8GB unified memory<br>\r\n- 256/512GB SSD storage¹<br>\r\n- 13-inch Retina display with True Tone<br>\r\n- Magic Keyboard<br>\r\n- Touch Bar and Touch ID<br>\r\n- Force Touch trackpad<br>\r\n- Two Thunderbolt / USB 4 ports<br>\r\n', '18400000', 'laptop2.jpg', 1),
(3, 'Acer Swift 3', 'Acer Swift 3 adalah ultrabook dengan berat 1.5kg yang mengusung layar 14\" dan resolusi 1920 x 1080 pixels. Dibekali dengan Intel Core i5 berkecepatan 1.6GHz, kartu grafis NVIDIA GeForce MX150, tipe penyimpanan SSD berkapasitas 512GB, dan sistem operasi Windows 10 Home, laptop ini mampu hasilkan performa maksimal.', '10600000', 'laptop3.jpg', 1),
(4, 'Samsung Galaxy A80', 'Chipset	Qualcomm SDM730 Snapdragon 730 (8 nm)<br>\r\nCPU Octa-core (2×2.2 GHz Kryo 460 Gold & 6×1.7 GHz Kryo 460 Silver)<br>\r\nGPU Adreno 618<br>\r\nRAM 8GB<br>\r\nStorage 1 28GB (microSD up to 512GB)<br>\r\nOS Android 9.0 (Pie)<br><br>\r\nDimensi	165.2 x 76.5 x 9.3 mm\r\nLayar	Super AMOLED 6.7 inci (1080 x 2400 piksel)<br>\r\nBaterai	Non-removable Li-Po 3700 mAh (Fast battery charging 15W)<br><br>', '8400000', 'hp1.jpg', 2),
(5, 'Oppo Reno 10x', 'Oppo Reno 10x Zoom merupakan handphone HP dengan kapasitas 4065mAh dan layar 6.4\" yang dilengkapi dengan kamera belakang 48 + 20MP dengan tingkat densitas piksel sebesar 403ppi dan tampilan resolusi sebesar 1080 x 2340pixels. Dengan berat sebesar 210g, handphone HP ini memiliki prosesor Octa Core.', '7600000', 'hp2.jpg', 2),
(6, 'Iphone 11', 'Prosesor Apple A13 Bionic (7 nm+), Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)<br>\r\nGPU Apple GPU (4-core graphics)<br>\r\nRAM 4 GB / ROM 128 GB<br>\r\nUkuran Layar 6.1 inch<br>\r\nResolusi Layar 828 x 1792 pixels, 19.5:9 ratio (~326 ppi density)<br>\r\nKamera Belakang Dual 12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4, 13mm (ultrawide)<br>\r\nKamera Depan 12 MP, f/2.2, 23mm (wide) SL 3D camera', '12500000', 'hp3.jpg', 2),
(7, 'Tank Mainan Anak RC', 'Tank Remote Control', '4860000', 'robot1.jpg', 3),
(8, 'LEGO Creator Porsche 911', 'Both the Turbo and the Targa model cars feature authentic Porsche 911 details like the iconic front and rear bumpers, angled headlights, printed logo and number plates. And the interior is just as impressive with working steering, gearshift, emergency brake, tilting seats and a dark orange and nougat color scheme. The LEGO Porsche 911 is part of a collection of buildable model kits for adults.', '2150000', 'robot2.jpg', 3),
(9, 'PG Strike Freedom Gundam', 'Release date: December 2010<br>\r\nSeries: Mobile Suit Gundam SEED Destiny<br>\r\nSize: 1/60', '3700000', 'robot3.jpg', 3),
(74, 'Nike Air Jordan 1', '<p>Sepatu Nike Air Jordan 1<br>\r\nKualitas original<br>\r\nSeri : Mid Chicago 2020</p>\r\n', '4000000', 'sepatu1.jpg', 4);

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
(1, 'Didan Hatama', 'Tama', 'didan.hafizpp16@gmail.com', '407b056f5e6197a948b7f836567fb63d', '2'),
(2, 'Admin', 'Admin', 'Admin@gmail.com', '202cb962ac59075b964b07152d234b70', '1'),
(3, 'Rian Eko Saputro', 'Rian', 'rianeko.saputro@gmail.com', '54a2ec5f4421fa24bfa9bf6461e649a2', '2'),
(43, 'Dwi Bhakti', 'Dwi', 'bhakti.dwi@gmail.com', '7aa2602c588c05a93baf10128861aeb9', '2'),
(46, 'Rizki Shafara', 'Rizki', 'rizki.shafara@gmail.com', '3e089c076bf1ec3a8332280ee35c28d4', '2');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
