-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2019 at 08:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alhusna`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id_agama` int(6) NOT NULL,
  `nama_agama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id_agama`, `nama_agama`) VALUES
(123, 'Islam'),
(124, 'Kristem');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `id_agama` varchar(11) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `id_agama`, `jabatan`, `no_telp`, `email`, `password`) VALUES
('1234567', 'Yuniar giffari Bachri', 'Tangerang', '2019-07-26', 'Kyaimaja', 'laki-laki', '123', 'WAKASEK', '8855455', 'fia@gmail.com', '4f46e6bb6c822c2a9e9c7a9b4d6c48aa'),
('1234568', 'Lutfia', 'Tangerang', '2019-07-27', 'Kyaimaja', 'laki-laki', '123', 'WAKASEK', '8855455', 'agiffals@yahoo.com', 'fe743d8d97aa7dfc6c93ccdc2e749513');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `kelas` varchar(12) NOT NULL,
  `id_mapel` varchar(20) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `jam` varchar(14) NOT NULL,
  `ruangan` varchar(4) NOT NULL,
  `hari` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_tahun`, `kelas`, `id_mapel`, `nip`, `jam`, `ruangan`, `hari`) VALUES
(4, 2, '3', 'b.ing', '1234567', '19.00-06-00', 'xi', 'Selasa'),
(5, 1, '3', '1', '1234568', '19.00-06-00', 'xi', 'Sabtu'),
(6, 1, '2', 'b.indo', '1234567', '19.00-06-00', 'xi', 'Senin');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(12) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'ilmu  pengetahuan alamasd'),
(2, 'ilmu pengetahuan sosials'),
(3, 'apa '),
(4, 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(5) NOT NULL,
  `nama_kelas` varchar(15) NOT NULL,
  `id_tahun` int(10) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `bayaran` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_tahun`, `id_jurusan`, `bayaran`) VALUES
(2, 'XI IPS 3', 2, 3, 1000000),
(3, 'X IPA 2', 2, 1, 900000);

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id_keuangan` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `bayar` int(15) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `pembayaran` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id_keuangan`, `nis`, `bayar`, `tgl_bayar`, `pembayaran`) VALUES
(1, 1000001, 900000, '2019-07-25', 'Juni'),
(2, 1000001, 900000, '2019-07-27', 'Juli'),
(3, 1000001, 900000, '2019-07-27', 'Agustus'),
(4, 1000002, 1000000, '2019-07-27', 'Januari'),
(5, 1000002, 1000000, '2019-07-27', 'April');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` varchar(20) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
('1', 'sadasfasd'),
('asd', 'asdas'),
('b.indo', 'bahasa indonesia'),
('b.ing', 'bahasa inggris'),
('c1', 'Pendidikan agama dan budi peke');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(12) NOT NULL,
  `nis` int(12) NOT NULL,
  `id_mapel` varchar(12) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `nilai` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nis`, `id_mapel`, `nip`, `nilai`) VALUES
(3, 1000002, 'b.indo', '1234567', 100);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
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

CREATE TABLE `siswa` (
  `nis` int(12) NOT NULL,
  `password` char(32) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `agama` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `golongan_darah` varchar(15) NOT NULL,
  `nama_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(20) NOT NULL,
  `asal_sekolah` varchar(20) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `password`, `nama_siswa`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `email`, `no_telpon`, `golongan_darah`, `nama_ayah`, `nama_ibu`, `asal_sekolah`, `id_kelas`) VALUES
(123123, '4297f44b13955235245b2497399d7a93', 'Yuniar giffari Bachri', 'asdasd', 'Tangerang', '2019-07-08', 'perempuan', '2', 'fia@gmail.com', '8855455', 'O', '23', '123', 'tangerang', 0),
(1000001, '59e711d152de7bec7304a8c2ecaf9f0f', 'Bachri Y', 'tangerang', 'Tangerang', '2019-07-25', 'perempuan', '123', 'agiffals@yahoo.com', '123123', 'AB', 'sjaiful', 'sumiati', 'sman 4 tangerang', 3),
(1000002, '4f46e6bb6c822c2a9e9c7a9b4d6c48aa', 'Yuniar giffari Bachri', 'tangerang', 'Tangerang', '2019-07-25', 'laki-laki', '123', 'agiffals@yahoo.com', '8855455', 'AB', 'sjaiful', 'sumiati', 'sman 4 tangerang', 2),
(1000004, 'f68ec4f0c6df90137749af75a929a3eb', 'Yuniar giffari Bachris', 'Kyaimaja', 'Tangerang', '2019-07-27', 'laki-laki', '124', 'whyhertanto97@gmail.', '8855455', 'O', '23', 'sumiati', 'sman 4 tangerang', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id_tahun` int(5) NOT NULL,
  `tahun_akademik` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id_tahun`, `tahun_akademik`) VALUES
(1, '2017/2018'),
(2, '2018/2011'),
(3, '2017/2019'),
(4, '2019/2010');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','guru','siswa','keuangan','kepalasekolah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id_user`, `username`, `nama_user`, `password`, `level`) VALUES
(9, 'yuniargb', 'Yuniar Giffari Bachri', 'a5f8698c7c778063ddb7a188fea74b14', 'keuangan'),
(10, 'bachriy', 'agif', '4f46e6bb6c822c2a9e9c7a9b4d6c48aa', 'admin'),
(11, 'lutfia', 'lutfia', 'a944d3aada843aeb93e11b9b92f5ad5a', 'kepalasekolah');

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
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id_keuangan`);

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
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id_agama` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id_keuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nis` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000005;

--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id_tahun` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
