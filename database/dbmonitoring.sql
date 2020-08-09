-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2020 at 04:51 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmonitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `idpelanggaran` int(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama` char(50) NOT NULL,
  `tanggal` date NOT NULL,
  `nmpelanggaran` char(25) NOT NULL,
  `poin` varchar(3) NOT NULL,
  `total_poin` varchar(3) NOT NULL,
  `sanksi` char(25) NOT NULL,
  `kategori` char(6) NOT NULL,
  `saran` char(150) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `idnmpelanggaran` varchar(10) NOT NULL,
  `idsanksi` varchar(10) NOT NULL,
  `idkategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `nip` varchar(10) NOT NULL,
  `nama` char(50) NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `level` char(35) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`nip`, `nama`, `jk`, `alamat`, `level`, `password`) VALUES
('12345', 'Admin', 'laki-laki', 'Jl. Kesadaran RT/RW 002/003 Pondok Benda, Pamulang.', 'admin', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Table structure for table `tbbk`
--

CREATE TABLE `tbbk` (
  `nip` varchar(18) NOT NULL,
  `nama` char(50) NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `notlpn` varchar(12) NOT NULL,
  `masa_jabatan` varchar(10) NOT NULL,
  `level` char(35) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbbk`
--

INSERT INTO `tbbk` (`nip`, `nama`, `jk`, `alamat`, `notlpn`, `masa_jabatan`, `level`, `password`) VALUES
('123456789010111212', 'HaidirBz', 'laki-laki', 'e', '2', '2', 'bimbingan konseling', 'c87052c9513655f632c91ed7e8fbde86'),
('123456789010111213', 'Siti Fatimah, S.PSi', 'perempuan', 'a', '12', '2020-2024', 'bimbingan konseling', '9da179e382ec7decce29f6bff65de520');

-- --------------------------------------------------------

--
-- Table structure for table `tbkategori`
--

CREATE TABLE `tbkategori` (
  `idkategori` varchar(10) NOT NULL,
  `kategori` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkategori`
--

INSERT INTO `tbkategori` (`idkategori`, `kategori`) VALUES
('KTG001', 'Berat'),
('KTG002', 'Ringan');

-- --------------------------------------------------------

--
-- Table structure for table `tbkelas`
--

CREATE TABLE `tbkelas` (
  `idkelas` int(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama` char(50) NOT NULL,
  `jurusan` char(50) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `ruangan` varchar(25) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkelas`
--

INSERT INTO `tbkelas` (`idkelas`, `nis`, `nip`, `nama`, `jurusan`, `kelas`, `ruangan`, `tahun_ajaran`) VALUES
(2, 2, '2', 'haidir', 'w', 'w', 'w', 'w'),
(231, 123, '123', 'e', 'e', 'eqwe', 'eq', 'qew');

-- --------------------------------------------------------

--
-- Table structure for table `tbkepsek`
--

CREATE TABLE `tbkepsek` (
  `nip` varchar(18) NOT NULL,
  `nama` char(50) NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `notlpn` varchar(12) NOT NULL,
  `masa_jabatan` varchar(10) NOT NULL,
  `level` char(35) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkepsek`
--

INSERT INTO `tbkepsek` (`nip`, `nama`, `jk`, `alamat`, `notlpn`, `masa_jabatan`, `level`, `password`) VALUES
('123456789011121314', 'Abdul Haris, S.Pd', 'laki-laki', 'Jl. Mutiara Indah', '082112436699', '2020-2024', 'kepala sekolah', 'e9a5051fcc6fce918fd7ec455b1b67ff');

-- --------------------------------------------------------

--
-- Table structure for table `tbmurid`
--

CREATE TABLE `tbmurid` (
  `nis` int(10) NOT NULL,
  `nama` char(50) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `nama_ayah` char(50) NOT NULL,
  `pekerjaan` char(25) NOT NULL,
  `notlpn` varchar(12) NOT NULL,
  `level` char(35) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmurid`
--

INSERT INTO `tbmurid` (`nis`, `nama`, `agama`, `jk`, `ttl`, `alamat`, `nama_ayah`, `pekerjaan`, `notlpn`, `level`, `password`) VALUES
(1, 'haidir', 'w', 'w', '2020-07-02', 'w', 'w', 'w', '08121212121', 'wali_murid', 'w'),
(2, 'admin', 'islam', 'w', '2020-07-01', '2', 'e', 'e', 'e', 'Admin', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `tbnmpelanggaran`
--

CREATE TABLE `tbnmpelanggaran` (
  `idnmpelanggaran` varchar(10) NOT NULL,
  `nmpelanggaran` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbnmpelanggaran`
--

INSERT INTO `tbnmpelanggaran` (`idnmpelanggaran`, `nmpelanggaran`) VALUES
('NMP001', 'Membawa senjata tajam'),
('NMP002', 'Berpacaran di lingkungan sekolah'),
('NMP003', 'Berkelahi diantara sesama siswa SMK Letris, maupun sekolah lain'),
('NMP004', 'Merokok selama masih mengenakan seragam sekolah'),
('NMP005', 'Berjudi atau hal-hal yang bisa diindikasikan perjudian'),
('NMP006', 'Mengambil barang-barang milik sekolah'),
('NMP007', 'Melakukan pemerasan terhadap siswa lain'),
('NMP008', 'Membawa buku bacaan / kaset video porno'),
('NMP009', 'Membawa/mengkonsumsi/mengedarkan obat-obatan terlarang'),
('NMP010', 'Pelecehan seksual dan perbuatan tidak senonoh'),
('NMP011', 'Bertato'),
('NMP012', 'Memalsukan dokument administrasi sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `tbsanksi`
--

CREATE TABLE `tbsanksi` (
  `idsanksi` varchar(10) NOT NULL,
  `sanksi` char(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsanksi`
--

INSERT INTO `tbsanksi` (`idsanksi`, `sanksi`) VALUES
('SNK001', 'Mendapat teguran dari guru bk'),
('SNK002', 'Membersihkan kamar mandi'),
('SNK003', 'Menulis surat pernyataan'),
('SNK004', 'Berjemur di lapangan'),
('SNK005', 'Hormat bendera'),
('SNK006', 'Mendapat teguran'),
('SNK007', 'Tidak diperbolehkan masuk kelas'),
('SNK008', 'Pemanggilan orang tua'),
('SNK009', 'Skorsing tidak boleh mengikuti pela'),
('SNK010', 'Di kembalikan kepada orang tua/wali'),
('SNK011', 'Dikeluarkan dari sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `tbsp`
--

CREATE TABLE `tbsp` (
  `idsp` int(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama` char(50) NOT NULL,
  `nama_orangtua` char(50) NOT NULL,
  `tanggal` date NOT NULL,
  `nmpelanggaran` char(25) NOT NULL,
  `jenis_sp` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbwalikls`
--

CREATE TABLE `tbwalikls` (
  `nip` varchar(18) NOT NULL,
  `idkelas` int(10) NOT NULL,
  `nama` char(50) NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `jurusan` char(50) NOT NULL,
  `ruangan` varchar(20) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `level` char(35) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`idpelanggaran`),
  ADD KEY `idpelanggaran` (`idpelanggaran`),
  ADD KEY `nis` (`nis`),
  ADD KEY `idpelanggaran_2` (`idpelanggaran`),
  ADD KEY `idnmpelanggaran` (`idnmpelanggaran`),
  ADD KEY `idsanksi` (`idsanksi`),
  ADD KEY `idkategori` (`idkategori`),
  ADD KEY `nipbk` (`nip`);

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `tbbk`
--
ALTER TABLE `tbbk`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `nipbk` (`nip`);

--
-- Indexes for table `tbkategori`
--
ALTER TABLE `tbkategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `tbkelas`
--
ALTER TABLE `tbkelas`
  ADD PRIMARY KEY (`idkelas`),
  ADD KEY `idkelas` (`idkelas`),
  ADD KEY `nis` (`nis`),
  ADD KEY `nipwk` (`nip`),
  ADD KEY `nip` (`nip`),
  ADD KEY `nip_2` (`nip`);

--
-- Indexes for table `tbkepsek`
--
ALTER TABLE `tbkepsek`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tbmurid`
--
ALTER TABLE `tbmurid`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tbnmpelanggaran`
--
ALTER TABLE `tbnmpelanggaran`
  ADD PRIMARY KEY (`idnmpelanggaran`),
  ADD KEY `idnmpelanggaran` (`idnmpelanggaran`);

--
-- Indexes for table `tbsanksi`
--
ALTER TABLE `tbsanksi`
  ADD PRIMARY KEY (`idsanksi`),
  ADD KEY `idsanksi` (`idsanksi`);

--
-- Indexes for table `tbsp`
--
ALTER TABLE `tbsp`
  ADD PRIMARY KEY (`idsp`),
  ADD KEY `idsp` (`idsp`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tbwalikls`
--
ALTER TABLE `tbwalikls`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `idkelas` (`idkelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `idpelanggaran` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbkelas`
--
ALTER TABLE `tbkelas`
  MODIFY `idkelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;
--
-- AUTO_INCREMENT for table `tbsp`
--
ALTER TABLE `tbsp`
  MODIFY `idsp` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD CONSTRAINT `pelanggaran_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tbmurid` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggaran_ibfk_10` FOREIGN KEY (`idnmpelanggaran`) REFERENCES `tbnmpelanggaran` (`idnmpelanggaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggaran_ibfk_7` FOREIGN KEY (`idsanksi`) REFERENCES `tbsanksi` (`idsanksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggaran_ibfk_8` FOREIGN KEY (`idkategori`) REFERENCES `tbkategori` (`idkategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggaran_ibfk_9` FOREIGN KEY (`nip`) REFERENCES `tbbk` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbsp`
--
ALTER TABLE `tbsp`
  ADD CONSTRAINT `tbsp_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tbmurid` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
