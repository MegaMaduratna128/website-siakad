-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2018 at 11:42 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_desain_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `bab_matakuliah`
--

CREATE TABLE IF NOT EXISTS `bab_matakuliah` (
  `KODE_BAB` int(11) NOT NULL,
  `KODE_MATAKULIAH` int(20) DEFAULT NULL,
  `NAMA_BAB` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bab_matakuliah`
--

INSERT INTO `bab_matakuliah` (`KODE_BAB`, `KODE_MATAKULIAH`, `NAMA_BAB`) VALUES
(1, 111, 'BELAJAR HTML'),
(2, 211, 'BELAJAR ERD');

-- --------------------------------------------------------

--
-- Table structure for table `datadosen`
--

CREATE TABLE IF NOT EXISTS `datadosen` (
  `NIP` varchar(20) NOT NULL,
  `KODE_MATAKULIAH` int(11) DEFAULT NULL,
  `NAMA_DOSEN` varchar(50) DEFAULT NULL,
  `JK_DOSEN` varchar(10) DEFAULT NULL,
  `AGAMA_DOSEN` varchar(20) DEFAULT NULL,
  `ALAMAT_DOSEN` varchar(200) DEFAULT NULL,
  `TELP_DOSEN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datadosen`
--

INSERT INTO `datadosen` (`NIP`, `KODE_MATAKULIAH`, `NAMA_DOSEN`, `JK_DOSEN`, `AGAMA_DOSEN`, `ALAMAT_DOSEN`, `TELP_DOSEN`) VALUES
('123456', 111, 'Elok Nur Hamdana, ST., MT.', 'Perempuan', 'Islam', 'Malang', '085655104757'),
('234567', 211, 'Muhammad Unggul Pamenang, ST., M.Kom.', 'Laki-Laki', 'Islam', 'Surabaya', '085854855100'),
('admin', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `datamahasiswa`
--

CREATE TABLE IF NOT EXISTS `datamahasiswa` (
  `NIM` int(200) NOT NULL,
  `KODE_KELAS` int(11) NOT NULL,
  `KODE_JURUSAN` int(11) DEFAULT NULL,
  `NAMA_MAHASISWA` varchar(50) DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(30) DEFAULT NULL,
  `TGL_LAHIR` date DEFAULT NULL,
  `JK_MAHASISWA` varchar(10) DEFAULT NULL,
  `AGAMA_MAHASISWA` varchar(20) DEFAULT NULL,
  `ALAMAT_MAHASISWA` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datamahasiswa`
--

INSERT INTO `datamahasiswa` (`NIM`, `KODE_KELAS`, `KODE_JURUSAN`, `NAMA_MAHASISWA`, `TEMPAT_LAHIR`, `TGL_LAHIR`, `JK_MAHASISWA`, `AGAMA_MAHASISWA`, `ALAMAT_MAHASISWA`) VALUES
(173170, 21, 2, 'Fesia Cindy', 'Kediri', '1998-07-27', 'Perempuan', 'Islam', 'Kediri'),
(173171, 11, 1, 'Budi Setiawan', 'Sidoarjo', '1998-02-02', 'Laki-Laki', 'Islam', 'Sidoarjo');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `NIP` varchar(200) NOT NULL,
  `KODE_MATAKULIAH` int(11) NOT NULL,
  `KODE_KELAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIP`, `KODE_MATAKULIAH`, `KODE_KELAS`) VALUES
('123456', 111, 11),
('234567', 211, 21);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `KODE_JURUSAN` int(11) NOT NULL,
  `NAMA_JURUSAN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`KODE_JURUSAN`, `NAMA_JURUSAN`) VALUES
(1, 'TI'),
(2, 'MI');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `KODE_KELAS` int(11) NOT NULL,
  `NAMA_KELAS` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`KODE_KELAS`, `NAMA_KELAS`) VALUES
(11, 'TI-1A'),
(21, 'MI-1A');

-- --------------------------------------------------------

--
-- Table structure for table `login_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `login_mahasiswa` (
  `ID` int(200) NOT NULL,
  `PASSWORD` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_mahasiswa`
--

INSERT INTO `login_mahasiswa` (`ID`, `PASSWORD`) VALUES
(173170, 173170),
(173171, 173171);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
  `KODE_MATAKULIAH` int(11) NOT NULL,
  `NAMA_MATAKULIAH` varchar(20) DEFAULT NULL,
  `KODE_JURUSAN` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=212 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`KODE_MATAKULIAH`, `NAMA_MATAKULIAH`, `KODE_JURUSAN`) VALUES
(111, 'PEMROGRAMAN WEB', 1),
(211, 'BASISDATA', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `KODE_NILAI` int(11) NOT NULL,
  `KODE_MATAKULIAH` int(11) NOT NULL,
  `KODE_BAB` int(11) DEFAULT NULL,
  `NIM` int(200) NOT NULL,
  `NILAI_M1` int(11) DEFAULT NULL,
  `NILAI_M2` int(11) NOT NULL,
  `NILAI_M3` int(11) NOT NULL,
  `RATA2_NILAI` double NOT NULL,
  `NILAI_HURUF` varchar(50) DEFAULT NULL,
  `KET_NILAI` varchar(20) DEFAULT NULL,
  `SEMESTER` int(11) DEFAULT NULL,
  `TH_AJARAN` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=216 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`KODE_NILAI`, `KODE_MATAKULIAH`, `KODE_BAB`, `NIM`, `NILAI_M1`, `NILAI_M2`, `NILAI_M3`, `RATA2_NILAI`, `NILAI_HURUF`, `KET_NILAI`, `SEMESTER`, `TH_AJARAN`) VALUES
(215, 211, 2, 173170, 90, 90, 90, 90, 'A', 'PERTAHANKAN PRESTASI', 1, '2017');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `KODE_USER` int(11) NOT NULL,
  `ID` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `STATUS_USER` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`KODE_USER`, `ID`, `PASSWORD`, `STATUS_USER`) VALUES
(11, '123456', '11111', 'DOSEN'),
(12, 'admin', 'admin', 'ADMIN'),
(21, '234567', '22222', 'DOSEN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bab_matakuliah`
--
ALTER TABLE `bab_matakuliah`
  ADD PRIMARY KEY (`KODE_BAB`),
  ADD KEY `KD_MD` (`KODE_MATAKULIAH`);

--
-- Indexes for table `datadosen`
--
ALTER TABLE `datadosen`
  ADD PRIMARY KEY (`NIP`),
  ADD KEY `FK_MENGAMBIL_KD_KK2` (`KODE_MATAKULIAH`);

--
-- Indexes for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD PRIMARY KEY (`NIM`),
  ADD KEY `FK_KOMPETENSI_KEAHLIAN` (`KODE_JURUSAN`),
  ADD KEY `KD_KELAS` (`KODE_KELAS`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`KODE_JURUSAN`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`KODE_KELAS`);

--
-- Indexes for table `login_mahasiswa`
--
ALTER TABLE `login_mahasiswa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`KODE_MATAKULIAH`),
  ADD KEY `KD_KK` (`KODE_JURUSAN`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`KODE_NILAI`),
  ADD KEY `FK_MENGAMBIL_KD_SK` (`KODE_BAB`),
  ADD KEY `KD_MD` (`KODE_MATAKULIAH`),
  ADD KEY `NISN` (`NIM`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`KODE_USER`),
  ADD KEY `FK_MENGAMBIL_NIP_GURU` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bab_matakuliah`
--
ALTER TABLE `bab_matakuliah`
  MODIFY `KODE_BAB` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `KODE_JURUSAN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `KODE_KELAS` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `KODE_MATAKULIAH` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=212;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `KODE_NILAI` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=216;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `KODE_USER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bab_matakuliah`
--
ALTER TABLE `bab_matakuliah`
  ADD CONSTRAINT `bab_matakuliah_ibfk_1` FOREIGN KEY (`KODE_MATAKULIAH`) REFERENCES `matakuliah` (`KODE_MATAKULIAH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `datadosen`
--
ALTER TABLE `datadosen`
  ADD CONSTRAINT `datadosen_ibfk_1` FOREIGN KEY (`KODE_MATAKULIAH`) REFERENCES `matakuliah` (`KODE_MATAKULIAH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `datamahasiswa`
--
ALTER TABLE `datamahasiswa`
  ADD CONSTRAINT `ambil_kelas` FOREIGN KEY (`KODE_KELAS`) REFERENCES `kelas` (`KODE_KELAS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datamahasiswa_ibfk_1` FOREIGN KEY (`KODE_JURUSAN`) REFERENCES `jurusan` (`KODE_JURUSAN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login_mahasiswa`
--
ALTER TABLE `login_mahasiswa`
  ADD CONSTRAINT `login_mahasiswa_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `datamahasiswa` (`NIM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD CONSTRAINT `matakuliah_ibfk_1` FOREIGN KEY (`KODE_JURUSAN`) REFERENCES `jurusan` (`KODE_JURUSAN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `datamahasiswa` (`NIM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`KODE_MATAKULIAH`) REFERENCES `matakuliah` (`KODE_MATAKULIAH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_3` FOREIGN KEY (`KODE_BAB`) REFERENCES `bab_matakuliah` (`KODE_BAB`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_MENGAMBIL_NIP_GURU` FOREIGN KEY (`ID`) REFERENCES `datadosen` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
