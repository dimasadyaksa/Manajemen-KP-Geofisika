-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 03:49 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

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
  `NIM` int(12) NOT NULL,
  `Tanggal` date DEFAULT NULL,
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
  `idperusahaan` int(3) DEFAULT NULL,
  `NIM` int(12) DEFAULT NULL,
  `MulaiMagang` date DEFAULT NULL,
  `SelesaiMagang` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `idUser` int(8) DEFAULT NULL,
  `Nama` varchar(30) DEFAULT NULL,
  `NIM` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `No_telp` int(13) NOT NULL,
  `IPK` float DEFAULT NULL,
  `SKS` int(3) DEFAULT NULL,
  `Angkatan` int(4) DEFAULT NULL,
  `JudulProposal` varchar(8000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`idUser`, `Nama`, `NIM`, `email`, `No_telp`, `IPK`, `SKS`, `Angkatan`, `JudulProposal`) VALUES
(24, 'tes2', 11111, 'hello', 0, NULL, NULL, NULL, NULL),
(21, 'dimas', 22101998, 'dimas@gmail', 0, NULL, NULL, NULL, NULL);

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
  `BahasaTataTulis` int(3) NOT NULL,
  `Rata_rata` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilailapangan`
--

CREATE TABLE `nilailapangan` (
  `idNilaiLapagan` int(3) NOT NULL,
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
  `Spesialisasi` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kontak` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembimbingdosen`
--

INSERT INTO `pembimbingdosen` (`idUser`, `Nama`, `NIP`, `Spesialisasi`, `email`, `kontak`) VALUES
(23, 'testes', 12212, '', 'qwe', '');

-- --------------------------------------------------------

--
-- Table structure for table `pembimbinglapangan`
--

CREATE TABLE `pembimbinglapangan` (
  `idDosenL` int(4) NOT NULL,
  `idPerusahaan` int(3) DEFAULT NULL,
  `Nama` varchar(30) NOT NULL,
  `Kontak` char(13) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `Posisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembimbinglapangan`
--

INSERT INTO `pembimbinglapangan` (`idDosenL`, `idPerusahaan`, `Nama`, `Kontak`, `email`, `Posisi`) VALUES
(22, NULL, 'tes', NULL, 'tes', '');

-- --------------------------------------------------------

--
-- Table structure for table `tempatkerja`
--

CREATE TABLE `tempatkerja` (
  `idPerusahaan` int(3) NOT NULL,
  `NamaPerusahaan` varchar(300) NOT NULL,
  `Bidang` varchar(20) DEFAULT NULL,
  `Alamat` varchar(300) NOT NULL,
  `kontak` int(15) NOT NULL,
  `Badan Hukum` varchar(30) NOT NULL,
  `Web` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempatkerja`
--

INSERT INTO `tempatkerja` (`idPerusahaan`, `NamaPerusahaan`, `Bidang`, `Alamat`, `kontak`, `Badan Hukum`, `Web`) VALUES
(1, 'PT. Caltex', 'Geologi', 'Tanjung Karang', 2147483647, '', ''),
(11, 'PT. Pertamina', 'Geologi', 'Batu Raden', 2147483647, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(8) NOT NULL,
  `NIM` int(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` enum('Mahasiswa','Pembimbing Dosen','Pembimbing Lapangan','Koordinator') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `NIM`, `email`, `password`, `status`) VALUES
(21, 22101998, 'dimas@gmail', '12345', 'Mahasiswa'),
(22, 0, 'tes', '123', 'Pembimbing Lapangan'),
(23, 0, 'qwe', '123', 'Pembimbing Dosen'),
(24, 11111, 'hello', '123', 'Mahasiswa');

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
  ADD PRIMARY KEY (`idLogbook`),
  ADD KEY `NIM` (`NIM`);

--
-- Indexes for table `magang`
--
ALTER TABLE `magang`
  ADD PRIMARY KEY (`idMagang`),
  ADD KEY `NIM` (`NIM`),
  ADD KEY `idperusahaan` (`idperusahaan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);

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
  ADD PRIMARY KEY (`idDosenL`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwalseminar`
--
ALTER TABLE `jadwalseminar`
  MODIFY `idSeminar` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `koordinator`
--
ALTER TABLE `koordinator`
  MODIFY `NIP` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `idLogbook` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `magang`
--
ALTER TABLE `magang`
  MODIFY `idMagang` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilaidosen`
--
ALTER TABLE `nilaidosen`
  MODIFY `idNilaiDosen` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilailapangan`
--
ALTER TABLE `nilailapangan`
  MODIFY `idNilaiLapagan` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tempatkerja`
--
ALTER TABLE `tempatkerja`
  MODIFY `idPerusahaan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwalseminar`
--
ALTER TABLE `jadwalseminar`
  ADD CONSTRAINT `jadwalseminar_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`);

--
-- Constraints for table `logbook`
--
ALTER TABLE `logbook`
  ADD CONSTRAINT `logbook_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `magang`
--
ALTER TABLE `magang`
  ADD CONSTRAINT `magang_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`),
  ADD CONSTRAINT `magang_ibfk_2` FOREIGN KEY (`idperusahaan`) REFERENCES `tempatkerja` (`idPerusahaan`);

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
  ADD CONSTRAINT `nilailapangan_ibfk_2` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`);

--
-- Constraints for table `pembimbinglapangan`
--
ALTER TABLE `pembimbinglapangan`
  ADD CONSTRAINT `pembimbinglapangan_ibfk_2` FOREIGN KEY (`idDosenL`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
