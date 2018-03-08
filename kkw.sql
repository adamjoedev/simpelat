-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 03:32 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kkw`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_ujipertama`
--

CREATE TABLE `tabel_ujipertama` (
  `napem` varchar(100) NOT NULL,
  `almt` varchar(100) NOT NULL,
  `noken` int(50) NOT NULL,
  `norang` int(50) NOT NULL,
  `nomes` int(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `jenis` varchar(40) NOT NULL,
  `panjang` int(20) NOT NULL,
  `tinggi` int(20) NOT NULL,
  `lebar` int(20) NOT NULL,
  `wb` int(10) NOT NULL,
  `sumbu` varchar(7) NOT NULL,
  `foh` int(20) NOT NULL,
  `roh` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `level_user` varchar(30) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `level_user`) VALUES
(0, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(0, 'admin', 'root@localhost', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', 'member');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
