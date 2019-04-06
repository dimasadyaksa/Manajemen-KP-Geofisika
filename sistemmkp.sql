-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2019 at 03:43 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemmkp`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwalseminar`
--

CREATE TABLE `jadwalseminar` (
  `idSeminar` int(5) NOT NULL,
  `NIM` int(12) DEFAULT NULL,
  `Ruang` char(4) NOT NULL,
  `Gedung` char(3) NOT NULL,
  `waktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `koordinator`
--

CREATE TABLE `koordinator` (
  `idUser` int(8) DEFAULT NULL,
  `Nama` varchar(30) NOT NULL,
  `NIP` int(16) NOT NULL,
  `kontak` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `idLogbook` int(8) NOT NULL,
  `Hari` date DEFAULT NULL,
  `JamMulai` time DEFAULT NULL,
  `JamSelesai` time DEFAULT NULL,
  `Kegiatan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `magang`
--

CREATE TABLE `magang` (
  `idMagang` int(4) NOT NULL,
  `NIM` int(12) DEFAULT NULL,
  `idPerusahaan` int(4) DEFAULT NULL,
  `MulaiMagang` date DEFAULT NULL,
  `SelesaiMagang` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `idUser` int(8) DEFAULT NULL,
  `idLogbook` int(8) DEFAULT NULL,
  `Nama` varchar(30) DEFAULT NULL,
  `NIM` int(12) NOT NULL,
  `IPK` float DEFAULT NULL,
  `SKS` int(3) DEFAULT NULL,
  `Angkatan` int(4) DEFAULT NULL,
  `JudulProposal` varchar(8000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilaidosen`
--

CREATE TABLE `nilaidosen` (
  `idNilaiDosen` int(3) NOT NULL,
  `NIM` int(12) DEFAULT NULL,
  `NIP` int(16) DEFAULT NULL,
  `Materi` int(3) NOT NULL,
  `PenugasanMateri` int(3) NOT NULL,
  `BahasaTataTulis` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilailapangan`
--

CREATE TABLE `nilailapangan` (
  `idNilaiLapagan` int(3) NOT NULL,
  `idDosenL` int(4) DEFAULT NULL,
  `NIM` int(12) DEFAULT NULL,
  `Pemahaman` int(3) NOT NULL,
  `KemampuanPenugasan` int(3) NOT NULL,
  `Komunikasi` int(3) NOT NULL,
  `MenulisLaporan` int(3) NOT NULL,
  `Adaptasi` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembimbingdosen`
--

CREATE TABLE `pembimbingdosen` (
  `idUser` int(8) DEFAULT NULL,
  `Nama` varchar(30) NOT NULL,
  `NIP` int(16) NOT NULL,
  `Spesialis` varchar(12) NOT NULL,
  `kontak` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembimbinglapangan`
--

CREATE TABLE `pembimbinglapangan` (
  `idDosenL` int(4) NOT NULL,
  `idPerusahaan` int(4) DEFAULT NULL,
  `Nama` varchar(30) NOT NULL,
  `Kontak` char(13) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `Posisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tempatkerja`
--

CREATE TABLE `tempatkerja` (
  `idPerusahaan` int(3) NOT NULL,
  `NamaPerusahaan` varchar(300) NOT NULL,
  `Alamat` varchar(300) NOT NULL,
  `kontak` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` enum('Mahasiswa','PDosen','PLapangan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwalseminar`
--
ALTER TABLE `jadwalseminar`
  ADD PRIMARY KEY (`idSeminar`),
  ADD KEY `NIM` (`NIM`);

--
-- Indexes for table `koordinator`
--
ALTER TABLE `koordinator`
  ADD PRIMARY KEY (`NIP`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`idLogbook`);

--
-- Indexes for table `magang`
--
ALTER TABLE `magang`
  ADD PRIMARY KEY (`idMagang`),
  ADD KEY `NIM` (`NIM`),
  ADD KEY `idPerusahaan` (`idPerusahaan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idLogbook` (`idLogbook`);

--
-- Indexes for table `nilaidosen`
--
ALTER TABLE `nilaidosen`
  ADD PRIMARY KEY (`idNilaiDosen`),
  ADD KEY `NIM` (`NIM`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `nilailapangan`
--
ALTER TABLE `nilailapangan`
  ADD PRIMARY KEY (`idNilaiLapagan`),
  ADD KEY `idDosenL` (`idDosenL`),
  ADD KEY `NIM` (`NIM`);

--
-- Indexes for table `pembimbingdosen`
--
ALTER TABLE `pembimbingdosen`
  ADD PRIMARY KEY (`NIP`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `pembimbinglapangan`
--
ALTER TABLE `pembimbinglapangan`
  ADD PRIMARY KEY (`idDosenL`),
  ADD KEY `idPerusahaan` (`idPerusahaan`);

--
-- Indexes for table `tempatkerja`
--
ALTER TABLE `tempatkerja`
  ADD PRIMARY KEY (`idPerusahaan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwalseminar`
--
ALTER TABLE `jadwalseminar`
  ADD CONSTRAINT `jadwalseminar_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`);

--
-- Constraints for table `koordinator`
--
ALTER TABLE `koordinator`
  ADD CONSTRAINT `koordinator_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Constraints for table `magang`
--
ALTER TABLE `magang`
  ADD CONSTRAINT `magang_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`),
  ADD CONSTRAINT `magang_ibfk_2` FOREIGN KEY (`idPerusahaan`) REFERENCES `tempatkerja` (`idPerusahaan`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`idLogbook`) REFERENCES `logbook` (`idLogbook`);

--
-- Constraints for table `nilaidosen`
--
ALTER TABLE `nilaidosen`
  ADD CONSTRAINT `nilaidosen_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`),
  ADD CONSTRAINT `nilaidosen_ibfk_2` FOREIGN KEY (`NIP`) REFERENCES `pembimbingdosen` (`NIP`);

--
-- Constraints for table `nilailapangan`
--
ALTER TABLE `nilailapangan`
  ADD CONSTRAINT `nilailapangan_ibfk_1` FOREIGN KEY (`idDosenL`) REFERENCES `pembimbinglapangan` (`idDosenL`),
  ADD CONSTRAINT `nilailapangan_ibfk_2` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`);

--
-- Constraints for table `pembimbingdosen`
--
ALTER TABLE `pembimbingdosen`
  ADD CONSTRAINT `pembimbingdosen_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Constraints for table `pembimbinglapangan`
--
ALTER TABLE `pembimbinglapangan`
  ADD CONSTRAINT `pembimbinglapangan_ibfk_1` FOREIGN KEY (`idPerusahaan`) REFERENCES `tempatkerja` (`idPerusahaan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
