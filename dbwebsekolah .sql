-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 08:16 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwebsekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `nik` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `nama_karyawan` varchar(45) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tmp_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status` enum('ketua','guru','staf') NOT NULL,
  `mengajar` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`nik`, `foto`, `nama_karyawan`, `jk`, `tmp_lahir`, `tgl_lahir`, `status`, `mengajar`, `alamat`, `no_hp`) VALUES
(1243534, 'team-member.jpg', 'qomariyah', 'P', 'Jakarta', '2017-11-06', 'guru', 'Olahraga', 'jakarta', '534667458'),
(12345678, 'man1.jpg', 'erik wibowo', 'L', 'Pekalongan', '2017-11-21', 'guru', 'IPS', 'Kajen', '43453644');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategoripost`
--

CREATE TABLE `tb_kategoripost` (
  `id_kat` int(11) NOT NULL,
  `kategori_post` varchar(30) NOT NULL,
  `slug_katpost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategoripost`
--

INSERT INTO `tb_kategoripost` (`id_kat`, `kategori_post`, `slug_katpost`) VALUES
(1, 'Kesehatan', 'kesehatan'),
(2, 'Peristiwa', 'peristiwa'),
(4, 'Prestasi Siswa', 'PrestasiSiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `menu`) VALUES
(1, 'Profil'),
(2, 'Visi dan Misi'),
(3, 'Struktur Organisasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menudetail`
--

CREATE TABLE `tb_menudetail` (
  `id_md` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `isi_menu` text NOT NULL,
  `slug_menu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_menudetail`
--

INSERT INTO `tb_menudetail` (`id_md`, `id_menu`, `isi_menu`, `slug_menu`) VALUES
(1, 1, 'ISi menu profil', 'profil'),
(2, 2, 'Isi menu Visi dan Misi', 'visimisi'),
(3, 3, 'Isi menu Struktur Organisasi', 'strukturorganisasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_post`
--

CREATE TABLE `tb_post` (
  `id_post` int(11) NOT NULL,
  `id_kat` int(11) NOT NULL,
  `tgl_post` date NOT NULL,
  `judul` varchar(100) NOT NULL,
  `slug_judul` varchar(200) NOT NULL,
  `header` varchar(20) NOT NULL,
  `isi_post` text NOT NULL,
  `id_user` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_post`
--

INSERT INTO `tb_post` (`id_post`, `id_kat`, `tgl_post`, `judul`, `slug_judul`, `header`, `isi_post`, `id_user`) VALUES
(10, 1, '2019-06-10', 'Kesehatan Siswa dan Guru', 'KesehatanSiswadanGuru', 'accordion1.png', '<b><i>Kesehatan siswa&nbsp;Kesehatan siswa&nbsp;Kesehatan siswa dan guru&nbsp;Kesehatan siswa&nbsp;Kesehatan siswa&nbsp;Kesehatan siswa dan guru&nbsp;Kesehatan siswa&nbsp;Kesehatan siswa&nbsp;Kesehatan siswa dan guru&nbsp;Kesehatan siswa&nbsp;Kesehatan siswa&nbsp;Kesehatan siswa dan guru&nbsp;Kesehatan siswa&nbsp;Kesehatan siswa&nbsp;Kesehatan siswa dan guru&nbsp;Kesehatan siswa&nbsp;Kesehatan siswa&nbsp;Kesehatan siswa dan guru&nbsp;Kesehatan siswa&nbsp;Kesehatan siswa&nbsp;Kesehatan siswa dan guru&nbsp;Kesehatan siswa&nbsp;Kesehatan siswa&nbsp;Kesehatan siswa dan guru&nbsp;Kesehatan siswa&nbsp;Kesehatan siswa&nbsp;Kesehatan siswa dan guru&nbsp;</i></b><b><i>Kesehatan siswa&nbsp;Kesehatan siswa&nbsp;</i></b><b><i>Kesehatan siswa dan guru</i></b><b><i></i></b><b><i></i></b><b><i></i></b><b><i></i></b><b><i></i></b><b><i></i></b><b><i></i></b><b><i></i></b><b><i></i></b><b><i></i></b>', 'ID001'),
(12, 4, '2019-06-10', 'Siswa Berprestasi Sekali', 'SiswaBerprestasiSekali', 'tab1.png', 'Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi&nbsp;Siswa Berprestasi', 'ID001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` varchar(10) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `nama_siswa` varchar(45) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tmp_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `tahun_masuk` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `foto`, `nama_siswa`, `jk`, `tmp_lahir`, `tgl_lahir`, `alamat`, `tahun_masuk`) VALUES
('001', 'team-member.jpg', 'Novelia Anita', 'P', 'Jakarta', '2017-11-14', 'Pekalongan', 2017),
('002', 'client3.png', 'Dimas Bayu', 'L', 'Pekalongan', '2017-11-03', 'Pekalongan', 2016),
('003', '2.png', 'Bambangs', 'L', 'Pekalongan', '2019-06-26', 'Meikarta', 2018),
('004', '3.png', 'Suryanti', 'P', 'Pekalongan', '2015-04-18', 'Pandanarum', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id_slider` int(11) NOT NULL,
  `slider` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id_slider`, `slider`) VALUES
(1, 'gallery1.jpg'),
(2, 'gallery2.jpg'),
(4, 'accordion1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` char(5) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `password`) VALUES
('ID001', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
('ID002', 'admin2', 'c84258e9c39059a89ab77d846ddab909');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_kategoripost`
--
ALTER TABLE `tb_kategoripost`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_menudetail`
--
ALTER TABLE `tb_menudetail`
  ADD PRIMARY KEY (`id_md`,`id_menu`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id_post`,`id_kat`,`id_user`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kategoripost`
--
ALTER TABLE `tb_kategoripost`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_menudetail`
--
ALTER TABLE `tb_menudetail`
  MODIFY `id_md` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
