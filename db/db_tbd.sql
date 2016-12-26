-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2016 at 10:41 AM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_tbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
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
  `no_telp` varchar(20) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nama_lengkap`, `ttl`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `alamat_lengkap`, `kode_pos`, `no_telp`) VALUES
(32, 'bayuwilanda@protonmail.com', '3bcd05f7c46e54053f71651ff7f05e006fa74e7f', 'Muhamad bayu wilanda', '1996-06-22', 'Jawa Barat', 'Pangandaran', 'Parigi', 'Karang benda', 'Jl. Raya Cigugur No.578', '46393', '087725984564'),
(33, 'ossas@gmail.com', 'b9f052500b7d77f42c58e1c633e17002f2672ca9', 'Ossas', '1943-06-22', 'Jawa Barat', 'Ciamis', 'Paraguay', 'Itulah', 'jauh', '46393', '085677654');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
