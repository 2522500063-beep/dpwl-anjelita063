-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2026 at 11:10 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status_akun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `status_akun`) VALUES
('anjelitacahaya2007@gmail.com', 'Matcha123!', 'Aktif'),
('anjelitacahaya@gmail.com', '27222', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE `bayar` (
  `kode_bayar` varchar(20) NOT NULL,
  `tgl_wkt_byr` datetime NOT NULL,
  `ft_byr` varchar(255) DEFAULT NULL,
  `mtode_byr` varchar(30) NOT NULL,
  `jns_byr` varchar(30) NOT NULL,
  `nominal` decimal(12,2) NOT NULL,
  `sttus_byr` varchar(30) NOT NULL,
  `tgl_wkt_ver` datetime DEFAULT NULL,
  `kode_sewa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `kode_denda` varchar(20) NOT NULL,
  `telat_jam` int(11) NOT NULL,
  `tarif_per_jam` decimal(12,2) NOT NULL,
  `kode_kembali` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kembali`
--

CREATE TABLE `kembali` (
  `kode_kembali` varchar(20) NOT NULL,
  `tgl_wkt_blk` datetime NOT NULL,
  `stts_blk` varchar(30) NOT NULL,
  `ket_blk` text,
  `kode_bayar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `no_plat` varchar(10) NOT NULL,
  `nm_mobil` varchar(100) NOT NULL,
  `nkursi` int(11) NOT NULL,
  `nbagasi` int(11) NOT NULL,
  `jns_mobil` varchar(50) NOT NULL,
  `transmisi` varchar(30) NOT NULL,
  `thn_buat` year(4) NOT NULL,
  `ft_depan` varchar(255) DEFAULT NULL,
  `ft_blkg` varchar(255) DEFAULT NULL,
  `ft_interior` varchar(255) DEFAULT NULL,
  `hrg_hari` decimal(12,2) NOT NULL,
  `cttn_unit` text,
  `status_unit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`no_plat`, `nm_mobil`, `nkursi`, `nbagasi`, `jns_mobil`, `transmisi`, `thn_buat`, `ft_depan`, `ft_blkg`, `ft_interior`, `hrg_hari`, `cttn_unit`, `status_unit`) VALUES
('BMW 1260', 'BMW', 2, 1, 'Sedan', 'Automatic', '2026', 'bmw_depan.jpeg', 'bmw_belakang.jpeg', 'bmw_interior.jpeg', 1200000.00, 'sangat indah', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `user_plg` varchar(50) NOT NULL,
  `sandi` varchar(255) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nm_lngkp` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `almt_lngkp` text NOT NULL,
  `ft_ktp` varchar(255) DEFAULT NULL,
  `ft_sim_a` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`user_plg`, `sandi`, `nik`, `nm_lngkp`, `no_hp`, `almt_lngkp`, `ft_ktp`, `ft_sim_a`) VALUES
('anjelita', '$2y$10$I8MxGdjxgrNKs1H7LkPr2OSWVOW5Llhqdmohs6wmYrJhb6lzlz3Rm', '25000000629', 'Anjelita Cahaya', '0832565145123', 'selindung', 'ft_ktp25000000629.jpg', 'ft_sim_a25000000629.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pilih`
--

CREATE TABLE `pilih` (
  `kode_sewa` varchar(20) NOT NULL,
  `no_plat` varchar(15) NOT NULL,
  `hrg_sewa` decimal(12,2) NOT NULL,
  `n_hari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `kode_sewa` varchar(20) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `wkt_ambil` datetime DEFAULT NULL,
  `status_sewa` varchar(30) NOT NULL,
  `user_plg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`no_plat`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`user_plg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
