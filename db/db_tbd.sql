-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2016 at 09:14 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `ttl` varchar(15) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `no_telp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nama_lengkap`, `ttl`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `alamat_lengkap`, `kode_pos`, `no_telp`) VALUES
(13, '', '94e723dc305f28b58ba1aba04e14aade037baa95', '', '2016-03-03', '', '', '', '', '', '', ''),
(10, 'bayu@gmail.com', '8df603b8c91605bb1fc7a692b4b00e6f281bd74c', 'Muhamad Bayu Wilanda', '2016-03-03', '', '', '', '', '', '', ''),
(29, 'by', 'fa9b1572b2804836954baa5bddf82529addbabf7', '', '', '', '', '', '', '', '', ''),
(21, 'byancha71@gmail.com', '06d21efa4f6d4e4f32392346e691b9e70117fc24', 'tes', '', '', '', '', '', '', '', ''),
(14, 'byancharizka@yahoo.com', 'e22b54a29bf3a535e6082263bd83d1bbe32d1a2f', 'byancha rizka', '14', '', '', '', '', '', '', ''),
(30, 'charizkaaa@gmail.com', '559ccabb41261c9b2d23dca2fb6b905649ecc3d3', 'byanchaaa', '', 'Bali', 'bhsvds', 'cdhvcb', 'dcnbd', 'cdbvc', 'cdnbc', ''),
(11, 'hub@gmail.com', '0ba42f91902ccd115dd8f44a772602c3af4a592a', 'Huwala Huwala', '2016-03-03', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
