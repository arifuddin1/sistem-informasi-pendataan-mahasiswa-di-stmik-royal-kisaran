-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 12:00 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbstmik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE IF NOT EXISTS `tbl_mhs` (
  `Nim` int(10) NOT NULL AUTO_INCREMENT,
  `Nama_Mahasiswa` varchar(35) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Jurusan` varchar(20) NOT NULL,
  `Semester` varchar(15) NOT NULL,
  PRIMARY KEY (`Nim`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16220383 ;

--
-- Dumping data for table `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`Nim`, `Nama_Mahasiswa`, `Kelas`, `Jurusan`, `Semester`) VALUES
(16220381, 'M.Bayu Setiawan', 'SI N', 'SISTEM INFORMASI', '7'),
(16220382, 'M.Arif', 'si N', 'SISTEM INFORMASI', '7');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `level` int(5) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama_lengkap`, `email`, `level`, `keterangan`) VALUES
('stmik', '25d55ad283aa400af464c76d713c07ad', 'royal', 'royal@ac.id', 1, 'staf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
