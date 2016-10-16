-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2016 at 07:23 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `checkout_id` int(11) NOT NULL,
  `date_` date NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `checkout_detail`
--

CREATE TABLE `checkout_detail` (
  `id` int(11) NOT NULL,
  `checkout_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menu_harga` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_menu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_menu`) VALUES
(1, 'Main Course'),
(2, 'Dessert'),
(3, 'Coffee'),
(4, 'Soft Drink'),
(5, 'Side Dishes'),
(6, 'Beer');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `kategori_id` int(25) NOT NULL,
  `menu_name` varchar(25) NOT NULL,
  `menu_harga` varchar(25) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `kategori_id`, `menu_name`, `menu_harga`, `image`) VALUES
(21, 2, 'Kue Apem', '2000', ''),
(22, 6, 'Heineken', '25000', ''),
(23, 5, 'Kentang Bakar', '5000', ''),
(24, 4, 'Milkshake', '15000', ''),
(25, 1, 'Nasi Lempar', '27000', ''),
(26, 3, 'Kopi Lada', '17000', ''),
(27, 1, 'Nasi Tutug Terasi', '25000', ''),
(28, 2, 'Tiramisu', '15000', ''),
(29, 3, 'Kopi Kumis', '14500', ''),
(30, 5, 'Seblak Sukhoi', '5000', ''),
(31, 4, 'Milkshake Strawberry', '7500', ''),
(32, 6, 'Tuak campur duren di koce', '5000', '');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `meja` int(20) NOT NULL,
  `menu_nama` varchar(50) NOT NULL,
  `menu_harga` varchar(50) NOT NULL,
  `menu_qty` int(11) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `meja`, `menu_nama`, `menu_harga`, `menu_qty`, `total`) VALUES
(1, 0, 'Kue Apem', '2400', 1, '2400'),
(2, 0, 'Milkshake', '15000', 2, '30000'),
(3, 2, 'Milkshake', '15000', 2, '30000'),
(4, 2, 'Milkshake', '15000', 2, '30000'),
(5, 2, 'Milkshake', '15000', 2, '30000');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `order_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `meja` int(15) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `qty` int(50) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`order_id`, `tanggal`, `meja`, `menu_id`, `qty`, `total`) VALUES
(133, '0000-00-00', 1, 25, 0, 0),
(134, '0000-00-00', 1, 25, 0, 0),
(135, '0000-00-00', 1, 21, 0, 0),
(136, '0000-00-00', 1, 26, 0, 0),
(137, '0000-00-00', 1, 24, 0, 0),
(138, '0000-00-00', 1, 22, 0, 0),
(139, '0000-00-00', 1, 25, 0, 0),
(140, '0000-00-00', 1, 25, 0, 0),
(141, '0000-00-00', 1, 25, 0, 0),
(142, '0000-00-00', 1, 25, 0, 0),
(143, '0000-00-00', 1, 25, 0, 0),
(144, '0000-00-00', 1, 25, 0, 0),
(145, '0000-00-00', 1, 22, 0, 0),
(146, '0000-00-00', 1, 23, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `phone`, `user_type`, `password`) VALUES
(1, 'apit', '089640421894', 'Cashier', 'admin'),
(2, 'gilang', '083820317994', 'Admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`checkout_id`);

--
-- Indexes for table `checkout_detail`
--
ALTER TABLE `checkout_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `checkout_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `checkout_detail`
--
ALTER TABLE `checkout_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
