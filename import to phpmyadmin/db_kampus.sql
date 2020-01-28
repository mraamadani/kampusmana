-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2020 at 11:07 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

CREATE TABLE `tbl_data` (
  `id` int(11) NOT NULL,
  `kode_prodi` int(11) NOT NULL,
  `kode_minat` int(11) NOT NULL,
  `kode_perting` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`id`, `kode_prodi`, `kode_minat`, `kode_perting`) VALUES
(15, 1, 2, 1),
(16, 2, 3, 2),
(17, 3, 4, 3),
(18, 4, 5, 4),
(19, 5, 6, 5),
(20, 6, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_minat`
--

CREATE TABLE `tbl_minat` (
  `kode_minat` int(11) NOT NULL,
  `id_minat` int(11) NOT NULL,
  `nama_minat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_minat`
--

INSERT INTO `tbl_minat` (`kode_minat`, `id_minat`, `nama_minat`) VALUES
(2, 111, 'Komputer'),
(3, 112, 'Hukum'),
(4, 113, 'Manajemen'),
(5, 114, 'Kedokteran'),
(6, 115, 'Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perting`
--

CREATE TABLE `tbl_perting` (
  `kode_perting` int(11) NOT NULL,
  `id_perting` int(11) NOT NULL,
  `nama_perting` varchar(128) NOT NULL,
  `link` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_perting`
--

INSERT INTO `tbl_perting` (`kode_perting`, `id_perting`, `nama_perting`, `link`) VALUES
(1, 311, 'Universitas Amikom Yogyakarta', 'amikom'),
(2, 312, 'Universitas Atma Jaya Yogyakarta', 'uajy'),
(3, 313, 'Universitas Gadjah Mada', 'ugm'),
(4, 314, 'Universitas Islam Indonesia', 'uii'),
(5, 315, 'UPN Veteran Yogyakarta', 'upnyk'),
(6, 316, 'Universitas Sanata Dharma', 'usd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prodi`
--

CREATE TABLE `tbl_prodi` (
  `kode_prodi` int(11) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(128) NOT NULL,
  `jenjang` varchar(128) NOT NULL,
  `biaya` int(128) NOT NULL,
  `akreditas` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prodi`
--

INSERT INTO `tbl_prodi` (`kode_prodi`, `id_prodi`, `nama_prodi`, `jenjang`, `biaya`, `akreditas`) VALUES
(1, 211, 'Informatika', 'S1', 4615000, 'B'),
(2, 212, 'Hukum tentang Hubungan Internasional', 'S1', 4300000, 'A'),
(3, 213, 'Manajemen Operasi dan Sistem Informasi', 'S1', 3500000, 'A'),
(4, 214, 'Farmasi', 'S1', 4300000, 'A'),
(5, 215, 'Pendidikan Guru Sekolah Dasar', 'S1', 3800000, 'B'),
(6, 216, 'Sistem Informasi', 'S1', 4615, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Muhamad Ramadani', 'uwedz', 'default.jpg', '$2y$10$DElgOqBLXXl6gblyWgiaNOFE0W9x/QaWAHlH4Q5AYQB3TmPH7uUd2', 1, 1, 1575590922),
(2, 'Yahya Sugandi Y.', 'yahya', 'default.jpg', '$2y$10$jRnm5FBzBXGVQ45hli.aOu0cjGL86hZMU3aIKY9FSqCsKRgvRwT5K', 1, 1, 1575752812),
(3, 'Luthfi Pratama', 'luthfi', 'default.jpg', '$2y$10$nW8To.XacEP3MFKLnnhRKOxVPAy.8qg7ZT2iL7d.IJDwI0Hh9JkC6', 1, 1, 1575990327);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(1) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(2, 1, 'Index Data', 'data', 'fas fa-fw fa-layer-group', 1),
(3, 1, 'Minat', 'minat', 'fas fa-fw fa-layer-group', 1),
(4, 1, 'Prodi', 'prodi', 'fas fa-fw fa-layer-group', 1),
(5, 1, 'Perguruan Tinggi', 'perting', 'fas fa-fw fa-layer-group', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_prodi` (`kode_prodi`),
  ADD KEY `kode_minat` (`kode_minat`),
  ADD KEY `kode_perting` (`kode_perting`);

--
-- Indexes for table `tbl_minat`
--
ALTER TABLE `tbl_minat`
  ADD PRIMARY KEY (`kode_minat`);

--
-- Indexes for table `tbl_perting`
--
ALTER TABLE `tbl_perting`
  ADD PRIMARY KEY (`kode_perting`);

--
-- Indexes for table `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  ADD PRIMARY KEY (`kode_prodi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data`
--
ALTER TABLE `tbl_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_minat`
--
ALTER TABLE `tbl_minat`
  MODIFY `kode_minat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_perting`
--
ALTER TABLE `tbl_perting`
  MODIFY `kode_perting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  MODIFY `kode_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD CONSTRAINT `tbl_data_ibfk_1` FOREIGN KEY (`kode_prodi`) REFERENCES `tbl_prodi` (`kode_prodi`),
  ADD CONSTRAINT `tbl_data_ibfk_2` FOREIGN KEY (`kode_minat`) REFERENCES `tbl_minat` (`kode_minat`),
  ADD CONSTRAINT `tbl_data_ibfk_3` FOREIGN KEY (`kode_perting`) REFERENCES `tbl_perting` (`kode_perting`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
