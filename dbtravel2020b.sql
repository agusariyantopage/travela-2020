-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 06:38 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtravel2020b`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `phone`, `gender`, `username`, `password`) VALUES
(1, 'Ketut Armini', 'Dalung', '08129398393898', 'Perempuan', 'armini', 'armini'),
(2, 'Ni Putu Sintya Oktapriani', '2', '2', 'Perempuan', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(10) NOT NULL,
  `reservation_code` varchar(15) NOT NULL,
  `reservation_at` varchar(30) NOT NULL,
  `reservation_date` date NOT NULL,
  `customer_id` int(10) NOT NULL,
  `seat_code` varchar(5) NOT NULL,
  `ruteid` int(10) NOT NULL,
  `depart_id` int(10) NOT NULL,
  `price` int(15) NOT NULL,
  `userid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `reservation_code`, `reservation_at`, `reservation_date`, `customer_id`, `seat_code`, `ruteid`, `depart_id`, `price`, `userid`) VALUES
(1, '0001', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(2, '0002', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(3, '0003', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(4, '0001', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(5, '0002', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(6, '0003', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(7, '0001', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(8, '0002', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(9, '0003', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(10, '0001', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(11, '0002', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(12, '0003', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(13, '0001', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(14, '0002', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(15, '0003', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(16, '0001', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(17, '0002', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(18, '0003', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(19, '0001', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(20, '0002', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(21, '0003', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(22, '0001', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(23, '0002', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1),
(24, '0003', 'Denpasar', '2020-10-06', 1, 'A1', 1, 1, 20000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id` int(10) NOT NULL,
  `depart_at` varchar(30) NOT NULL,
  `rute_from` varchar(40) NOT NULL,
  `rute_to` varchar(40) NOT NULL,
  `price` int(10) NOT NULL,
  `transportationid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id`, `depart_at`, `rute_from`, `rute_to`, `price`, `transportationid`) VALUES
(1, 'Bandara Ngurah Rai', 'Denpasar', 'Surabaya', 500000, 1),
(2, 'Bandara Ngurah Rai', 'Denpasar', 'Jakarta', 1500000, 1),
(3, 'Bandara Ngurah Rai', 'Denpasar', 'Medan', 1500000, 1),
(4, 'Bandara Ngurah Rai', 'Denpasar', 'Jayapura', 1500000, 1),
(5, 'Bandara Ngurah Rai', 'Denpasar', 'Padang', 1500000, 1),
(6, 'Pelabuhan Gilimanuk', 'Jembrana', 'Banyuwangi', 10000, 2),
(7, 'Pelabuhan Padang Bai', 'Klungkung', 'Lombok', 750000, 2),
(8, 'Pelabuhan Padang Bai', 'Klungkung', 'Nusa Penida', 15000, 2),
(9, 'Pelabuhan Lembar', 'Lombok', 'Klungkung', 750000, 2),
(10, 'Ketapang', 'Banyuwangi', 'Jembrana', 75000, 2),
(11, 'Stasiun Gambir', 'Yogyakarta', 'Solo', 15000, 3),
(12, 'Stasiun Tanjung Wangi', 'Banyuwangi', 'Surabaya', 75000, 3),
(13, 'Stasiun Tanjung Wangi', 'Banyuwangi', 'Yogyakarta', 150000, 3),
(14, 'Stasiun Senen', 'Jakarta', 'Bogor', 15000, 3),
(15, 'Stasiun Senen', 'Jakarta', 'Bandung', 150000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `id` int(5) NOT NULL,
  `code` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `seat_qty` int(4) NOT NULL,
  `transportation_typeid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`id`, `code`, `description`, `seat_qty`, `transportation_typeid`) VALUES
(1, '0001', 'Garuda Indonesia', 100, 1),
(2, '0002', 'Pelni', 100, 2),
(3, '0003', 'PT KAI', 100, 3);

-- --------------------------------------------------------

--
-- Table structure for table `transportation_type`
--

CREATE TABLE `transportation_type` (
  `id` int(5) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transportation_type`
--

INSERT INTO `transportation_type` (`id`, `description`) VALUES
(1, 'Pesawat'),
(2, 'Kapal Laut'),
(3, 'Kereta Api');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `level`) VALUES
(1, 'admin', 'admin@ytsj', 'Mimin Sarumin', 1),
(2, 'kasir', 'kasir', 'Desi Permata Sari\r\n', 2),
(3, 'bunga', 'bunga', 'bunga', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transportation_type`
--
ALTER TABLE `transportation_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transportation_type`
--
ALTER TABLE `transportation_type`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
