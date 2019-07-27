-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 12:39 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alhusna`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE IF NOT EXISTS `agama` (
  `id_agama` varchar(6) NOT NULL,
  `nama_agama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id_agama`, `nama_agama`) VALUES
('1', 'islam'),
('2', 'kristen');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` varchar(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `id_agama` varchar(11) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `id_agama`, `jabatan`, `no_telp`, `email`) VALUES
('101', 'ade', 'jakarta', '2019-06-04', 'jauhhh seklai', 'laki-laki', '2', 'kepala sekolah', '8976', 'addfft@ggg'),
('102', 'amar', 'sulawesi', '2019-06-24', 'aaaaaaa', 'laki-laki', '1', 'guru matematik', '7656', 'dfghjhl@mialhh');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
`id_jadwal` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `id_jurusan` varchar(12) NOT NULL,
  `kelas` varchar(12) NOT NULL,
  `id_mapel` varchar(4) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `jam` varchar(14) NOT NULL,
  `ruangan` varchar(4) NOT NULL,
  `hari` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_tahun`, `id_jurusan`, `kelas`, `id_mapel`, `nip`, `jam`, `ruangan`, `hari`) VALUES
(1, 1, '1', '12', '1', '101', '08:00', 'b01', 'senin');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` varchar(12) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
('1', 'ilmu  pengetahuan alam'),
('2', 'ilmu pengetahuan sosial'),
('3', 'apa ');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(5) NOT NULL,
  `nama_kelas` varchar(15) NOT NULL,
  `id_tahun` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_tahun`) VALUES
(1, 'IPA 1', 0),
(2, 'IPA 2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `id_mapel` varchar(20) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
('1', 'olahraga'),
('b.indo', 'bahasa indonesia'),
('b.ing', 'bahasa inggris'),
('c1', 'Pendidikan agama dan budi peke');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` varchar(12) NOT NULL,
  `nis` int(12) NOT NULL,
  `id_mapel` varchar(12) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `nilai` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_pembayaran` varchar(12) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `nis` int(12) NOT NULL,
  `jenis_pembayaran` varchar(30) NOT NULL,
  `jumlah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `tanggal_pembayaran`, `nis`, `jenis_pembayaran`, `jumlah`) VALUES
('p01', '2019-06-12', 1111111, 'spp', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
`nis` int(12) NOT NULL,
  `password` char(32) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(11) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `agama` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_telpon` int(15) NOT NULL,
  `golongan_darah` varchar(15) NOT NULL,
  `nama_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(20) NOT NULL,
  `asal_sekolah` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1111112 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `password`, `nama_siswa`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `email`, `no_telpon`, `golongan_darah`, `nama_ayah`, `nama_ibu`, `asal_sekolah`) VALUES
(1111111, '7fa8282ad93047a4d6fe6111c93b308a', 'adi', 'tangerang', 'tangerang', '2019-03-03', 'laki-laki', 'islam', 'adeeee', 975627, 'o', 'ridwan', 'anisa', 'man aa');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE IF NOT EXISTS `tahun_akademik` (
  `id_tahun` int(5) NOT NULL,
  `tahun_akademik` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id_tahun`, `tahun_akademik`) VALUES
(1, '2017/2018'),
(2, '2018/2019'),
(3, '234'),
(4, '2017/2014'),
(5, '2345'),
(6, '2567');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE IF NOT EXISTS `tbuser` (
`id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(32) NOT NULL,
  `level` enum('admin','guru','siswa','keuangan','kepalasekolah') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '123456', 'admin'),
(2, 'guru', '1234567', 'guru'),
(3, 'elisa', '12345678', 'siswa'),
(4, 'uang', '123456789', 'keuangan'),
(5, 'ica', '05081997', 'admin'),
(7, 'elis', 'dede', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
 ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
 ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
 ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
 ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
 ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
MODIFY `nis` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1111112;
--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
