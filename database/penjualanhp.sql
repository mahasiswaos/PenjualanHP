-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 09, 2014 at 11:48 AM
-- Server version: 5.5.37
-- PHP Version: 5.5.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penjualanhp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblhp`
--

CREATE TABLE IF NOT EXISTS `tblhp` (
  `kode_hp` varchar(15) NOT NULL,
  `merek_hp` text NOT NULL,
  `tipe_hp` varchar(15) NOT NULL,
  `jenis_hp` varchar(15) NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpembeli`
--

CREATE TABLE IF NOT EXISTS `tblpembeli` (
  `kode_pembeli` varchar(15) NOT NULL,
  `nama` text NOT NULL,
  `jeniskelamin` text NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telpon` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbltransaksi`
--

CREATE TABLE IF NOT EXISTS `tbltransaksi` (
  `kode_transaksi` varchar(15) NOT NULL,
  `kode_hp` varchar(15) NOT NULL,
  `kode_pembeli` varchar(15) NOT NULL,
  `bayar` int(30) NOT NULL,
  `totalbayar` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
