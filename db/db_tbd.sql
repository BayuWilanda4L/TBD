-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 30 Des 2016 pada 13.30
-- Versi Server: 5.5.46-0ubuntu0.14.04.2
-- Versi PHP: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_tbd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nama_lengkap`, `ttl`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `alamat_lengkap`, `kode_pos`, `no_telp`) VALUES
(41, 'bayuwilanda@protonmail.com', '8cb9186ace8fbd0d40239e55bc15aa74e5f185cd', 'Muhamad Bayu Wilanda', '1996-06-22', 'Jawa Barat', 'Depok', 'jahjhdjadh', 'jhahgdhad', 'Depok', '57656', '7676765554');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
