-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2017 at 01:43 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dv_technoit`
--

-- --------------------------------------------------------

--
-- Table structure for table `oc_visitor`
--

CREATE TABLE `oc_visitor` (
  `id_visitor` int(11) NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `device` varchar(35) NOT NULL,
  `browser` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_aboutus`
--

CREATE TABLE `pc_aboutus` (
  `id_about` int(4) NOT NULL,
  `judul` varchar(75) NOT NULL,
  `slug_judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_admin`
--

CREATE TABLE `pc_admin` (
  `id_admin` char(10) NOT NULL,
  `nama_admin` varchar(35) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` enum('Administrator','Operator') NOT NULL,
  `status_login` enum('off','login','','') NOT NULL,
  `aktif` tinyint(1) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `thumbs` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc_admin`
--

INSERT INTO `pc_admin` (`id_admin`, `nama_admin`, `pass`, `level`, `status_login`, `aktif`, `foto`, `thumbs`) VALUES
('ID001', 'Si Ketjeeh', 'e10adc3949ba59abbe56e057f20f883e', 'Administrator', 'login', 0, 'file_1512909450.jpg', 'file_1512909450_thumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pc_develop`
--

CREATE TABLE `pc_develop` (
  `id_dev` int(11) NOT NULL,
  `id_katdev` tinyint(4) NOT NULL,
  `des_produk` text NOT NULL,
  `harga` double NOT NULL,
  `id_admin` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_katdev`
--

CREATE TABLE `pc_katdev` (
  `id_katdev` tinyint(4) NOT NULL,
  `kategori_develop` varchar(30) NOT NULL,
  `slug_katdev` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_katlayanan`
--

CREATE TABLE `pc_katlayanan` (
  `id_katlay` int(2) NOT NULL,
  `kategori_layanan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_katpost`
--

CREATE TABLE `pc_katpost` (
  `id_katpost` tinyint(4) NOT NULL,
  `kategori_post` varchar(35) NOT NULL,
  `slug_katpost` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_layanan`
--

CREATE TABLE `pc_layanan` (
  `id_layanan` int(11) NOT NULL,
  `id_katlay` int(2) NOT NULL,
  `nama_layanan` varchar(35) NOT NULL,
  `detail_layanan` text NOT NULL,
  `slug_layanan` varchar(50) NOT NULL,
  `id_admin` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_mail`
--

CREATE TABLE `pc_mail` (
  `id_mail` int(11) NOT NULL,
  `pengirim` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_order`
--

CREATE TABLE `pc_order` (
  `id_order` int(11) NOT NULL,
  `id_dev` int(11) NOT NULL,
  `pemesan` varchar(35) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_post`
--

CREATE TABLE `pc_post` (
  `id_post` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `slug_post` varchar(100) NOT NULL,
  `foto_header` varchar(25) NOT NULL,
  `thumbs` varchar(30) NOT NULL,
  `headline` varchar(200) NOT NULL,
  `isi_post` text NOT NULL,
  `tgl_post` date NOT NULL,
  `id_katpost` tinyint(4) NOT NULL,
  `id_admin` char(10) NOT NULL,
  `jml_like` tinyint(4) NOT NULL,
  `post_aktif` tinyint(1) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_profil`
--

CREATE TABLE `pc_profil` (
  `id_profil` tinyint(1) NOT NULL,
  `profil` text NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pc_testimoni`
--

CREATE TABLE `pc_testimoni` (
  `id_testi` int(11) NOT NULL,
  `id_siswa` char(10) NOT NULL,
  `testimonial` varchar(200) NOT NULL,
  `aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oc_visitor`
--
ALTER TABLE `oc_visitor`
  ADD PRIMARY KEY (`id_visitor`);

--
-- Indexes for table `pc_aboutus`
--
ALTER TABLE `pc_aboutus`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `pc_admin`
--
ALTER TABLE `pc_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `pc_develop`
--
ALTER TABLE `pc_develop`
  ADD PRIMARY KEY (`id_dev`),
  ADD KEY `id_katdev` (`id_katdev`);

--
-- Indexes for table `pc_katdev`
--
ALTER TABLE `pc_katdev`
  ADD PRIMARY KEY (`id_katdev`);

--
-- Indexes for table `pc_katlayanan`
--
ALTER TABLE `pc_katlayanan`
  ADD PRIMARY KEY (`id_katlay`);

--
-- Indexes for table `pc_katpost`
--
ALTER TABLE `pc_katpost`
  ADD PRIMARY KEY (`id_katpost`);

--
-- Indexes for table `pc_layanan`
--
ALTER TABLE `pc_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `pc_mail`
--
ALTER TABLE `pc_mail`
  ADD PRIMARY KEY (`id_mail`);

--
-- Indexes for table `pc_order`
--
ALTER TABLE `pc_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `pc_post`
--
ALTER TABLE `pc_post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `pc_profil`
--
ALTER TABLE `pc_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `pc_testimoni`
--
ALTER TABLE `pc_testimoni`
  ADD PRIMARY KEY (`id_testi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oc_visitor`
--
ALTER TABLE `oc_visitor`
  MODIFY `id_visitor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pc_aboutus`
--
ALTER TABLE `pc_aboutus`
  MODIFY `id_about` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pc_develop`
--
ALTER TABLE `pc_develop`
  MODIFY `id_dev` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pc_katdev`
--
ALTER TABLE `pc_katdev`
  MODIFY `id_katdev` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pc_katlayanan`
--
ALTER TABLE `pc_katlayanan`
  MODIFY `id_katlay` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pc_katpost`
--
ALTER TABLE `pc_katpost`
  MODIFY `id_katpost` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pc_layanan`
--
ALTER TABLE `pc_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pc_mail`
--
ALTER TABLE `pc_mail`
  MODIFY `id_mail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pc_order`
--
ALTER TABLE `pc_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pc_post`
--
ALTER TABLE `pc_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pc_testimoni`
--
ALTER TABLE `pc_testimoni`
  MODIFY `id_testi` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pc_develop`
--
ALTER TABLE `pc_develop`
  ADD CONSTRAINT `pc_develop_ibfk_1` FOREIGN KEY (`id_katdev`) REFERENCES `pc_katdev` (`id_katdev`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
