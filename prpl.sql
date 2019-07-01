-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 05:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data_ayam`
--

CREATE TABLE `data_ayam` (
  `id` int(11) NOT NULL,
  `tgl_pem` date NOT NULL,
  `jml_ayam` int(11) NOT NULL,
  `ayam_hidup` int(11) NOT NULL,
  `ayam_mati` int(11) NOT NULL,
  `pemberian_vaksin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_telur`
--

CREATE TABLE `data_telur` (
  `id` int(11) NOT NULL,
  `jumlah_telur` int(11) NOT NULL,
  `telur_sehat` int(11) NOT NULL,
  `telur_cacat` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_krw` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_krw`, `user`, `pass`, `nama`, `alamat`) VALUES
(7, 'okky', 'c821adbe2db2d35a30551480105cb919', 'okky alwi', 'jalan sisingamangaraja IV');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_control` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pem_keb`
--

CREATE TABLE `pem_keb` (
  `id` int(11) NOT NULL,
  `modal` int(11) NOT NULL,
  `harga_ayam` int(11) NOT NULL,
  `jumlah_ayam` int(11) NOT NULL,
  `harga_pakan` int(11) NOT NULL,
  `jumlah_pakan` int(11) NOT NULL,
  `harga_air` int(11) NOT NULL,
  `air_lt` int(11) NOT NULL,
  `harga_listrik` int(11) NOT NULL,
  `jumlah_watt` int(11) NOT NULL,
  `harga_vaksin` int(11) NOT NULL,
  `jmlh_vaksin` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penj_laku`
--

CREATE TABLE `penj_laku` (
  `id_laku` int(11) NOT NULL,
  `jml_ayam` int(11) NOT NULL,
  `jml_telur` int(11) NOT NULL,
  `jml_kotoran` int(11) NOT NULL,
  `hrg_ayam` int(11) NOT NULL,
  `hrg_telur` int(11) NOT NULL,
  `hrg_kotoran` int(11) NOT NULL,
  `ayam_tlk` int(11) NOT NULL,
  `telur_tlk` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_ayam`
--
ALTER TABLE `data_ayam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_telur`
--
ALTER TABLE `data_telur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_krw`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_control`);

--
-- Indexes for table `pem_keb`
--
ALTER TABLE `pem_keb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penj_laku`
--
ALTER TABLE `penj_laku`
  ADD PRIMARY KEY (`id_laku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_ayam`
--
ALTER TABLE `data_ayam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data_telur`
--
ALTER TABLE `data_telur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_krw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_control` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pem_keb`
--
ALTER TABLE `pem_keb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `penj_laku`
--
ALTER TABLE `penj_laku`
  MODIFY `id_laku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
