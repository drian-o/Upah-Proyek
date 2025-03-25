-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 11:40 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_famma`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absen`
--

CREATE TABLE `tb_absen` (
  `absen_id` varchar(20) NOT NULL,
  `absen_tukang_id` varchar(20) NOT NULL,
  `absen_hari` varchar(10) NOT NULL,
  `absen_status` enum('lembur','normal') NOT NULL DEFAULT 'normal',
  `absen_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absen`
--

INSERT INTO `tb_absen` (`absen_id`, `absen_tukang_id`, `absen_hari`, `absen_status`, `absen_date_created`) VALUES
('ABS-02880', 'PEG-02852', 'Kamis', 'lembur', '2022-08-25 11:48:00'),
('ABS-03212', 'PEG-03160', 'Kamis', 'normal', '2022-08-25 11:53:32'),
('ABS-16661', 'PEG-43411', 'Rabu', 'normal', '2023-05-17 16:44:21'),
('ABS-27916', 'PEG-02852', 'Selasa', 'normal', '2022-08-30 09:51:56'),
('ABS-28074', 'PEG-03160', 'Selasa', 'normal', '2022-08-30 09:54:34'),
('ABS-42670', 'PEG-65768', 'Senin', 'normal', '2023-05-15 16:24:30'),
('ABS-43420', 'PEG-54647', 'Senin', 'normal', '2023-05-15 16:37:00'),
('ABS-43430', 'PEG-43411', 'Senin', 'normal', '2023-05-15 16:37:10'),
('ABS-46529', 'PEG-46497', 'Jumat', 'normal', '2023-07-28 19:15:29'),
('ABS-46539', 'PEG-46210', 'Jumat', 'normal', '2023-07-28 19:15:39'),
('ABS-46544', 'PEG-46332', 'Jumat', 'normal', '2023-07-28 19:15:44'),
('ABS-46549', 'PEG-46388', 'Jumat', 'normal', '2023-07-28 19:15:49'),
('ABS-46553', 'PEG-46451', 'Jumat', 'normal', '2023-07-28 19:15:53'),
('ABS-46568', 'PEG-46273', 'Jumat', 'normal', '2023-07-28 19:16:08'),
('ABS-51807', 'PEG-51796', 'Senin', 'normal', '2023-01-09 15:10:07'),
('ABS-52939', 'PEG-65768', 'Senin', 'normal', '2023-05-08 20:35:39'),
('ABS-55522', 'PEG-02852', 'Senin', 'normal', '2022-08-29 13:45:22'),
('ABS-55534', 'PEG-03160', 'Senin', 'normal', '2022-08-29 13:45:34'),
('ABS-64836', 'PEG-03160', 'Rabu', 'normal', '2022-09-21 19:53:56'),
('ABS-93217', 'PEG-43411', 'Jumat', 'normal', '2023-05-19 17:46:57'),
('ABS-93267', 'PEG-93258', 'Jumat', 'normal', '2023-05-19 17:47:47'),
('ABS-95583', 'PEG-03160', 'Jumat', 'normal', '2022-08-26 13:33:04'),
('ABS-95590', 'PEG-02852', 'Jumat', 'lembur', '2022-08-26 13:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gaji`
--

CREATE TABLE `tb_gaji` (
  `gaji_id` varchar(20) NOT NULL,
  `gaji_tukang_id` varchar(20) NOT NULL,
  `gaji_lembur` int(20) DEFAULT '0',
  `gaji_total` int(20) NOT NULL,
  `gaji_bayar_pinjaman` int(20) NOT NULL,
  `gaji_tanggal` date DEFAULT NULL,
  `gaji_bulan_ke` int(11) DEFAULT NULL,
  `gaji_status` enum('sudah','belum') NOT NULL DEFAULT 'belum',
  `gaji_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gaji`
--

INSERT INTO `tb_gaji` (`gaji_id`, `gaji_tukang_id`, `gaji_lembur`, `gaji_total`, `gaji_bayar_pinjaman`, `gaji_tanggal`, `gaji_bulan_ke`, `gaji_status`, `gaji_date_created`) VALUES
('GJI-02880', 'PEG-02852', 130000, 520000, 0, '2022-08-30', 1, 'belum', '2022-08-25 11:48:00'),
('GJI-03212', 'PEG-03160', 0, 750000, 0, '2022-09-21', 1, 'sudah', '2022-08-25 11:53:32'),
('GJI-43420', 'PEG-54647', 0, 130000, 0, '2023-05-15', 1, 'belum', '2023-05-15 16:37:00'),
('GJI-43430', 'PEG-43411', 0, 600000, 50000, '2023-05-19', 1, 'sudah', '2023-05-15 16:37:10'),
('GJI-46529', 'PEG-46497', 0, 150000, 0, '2023-07-28', 1, 'belum', '2023-07-28 19:15:29'),
('GJI-46539', 'PEG-46210', 0, 230000, 0, '2023-07-28', 1, 'belum', '2023-07-28 19:15:39'),
('GJI-46544', 'PEG-46332', 0, 150000, 0, '2023-07-28', 1, 'belum', '2023-07-28 19:15:44'),
('GJI-46549', 'PEG-46388', 0, 120000, 0, '2023-07-28', 1, 'belum', '2023-07-28 19:15:49'),
('GJI-46553', 'PEG-46451', 0, 120000, 0, '2023-07-28', 1, 'belum', '2023-07-28 19:15:53'),
('GJI-46568', 'PEG-46273', 0, 150000, 0, '2023-07-28', 1, 'belum', '2023-07-28 19:16:08'),
('GJI-51807', 'PEG-51796', 0, 130000, 0, '2023-01-09', 1, 'belum', '2023-01-09 15:10:07'),
('GJI-52939', 'PEG-65768', 0, 40000, 0, '2023-05-15', 1, 'belum', '2023-05-08 20:35:39'),
('GJI-93267', 'PEG-93258', 0, 20000, 0, '2023-05-19', 1, 'sudah', '2023-05-19 17:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `tb_golgaji`
--

CREATE TABLE `tb_golgaji` (
  `gol_id` varchar(20) NOT NULL,
  `gol_nama` varchar(255) DEFAULT NULL,
  `gol_gaji` int(20) DEFAULT NULL,
  `gol_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_golgaji`
--

INSERT INTO `tb_golgaji` (`gol_id`, `gol_nama`, `gol_gaji`, `gol_date_created`) VALUES
('JAB-43347', 'Putra Naingolan', 200000, '2023-05-15 16:35:47'),
('JAB-46006', 'yono', 150000, '2023-07-28 19:06:46'),
('JAB-46016', 'nandi', 120000, '2023-07-28 19:06:56'),
('JAB-46030', 'putra', 120000, '2023-07-28 19:07:10'),
('JAB-46109', 'Geri liandi', 150000, '2023-07-28 19:08:29'),
('JAB-46130', 'jon', 150000, '2023-07-28 19:08:50'),
('JAB-46143', 'budiman', 230000, '2023-07-28 19:09:03'),
('JAB-65853', 'Yanto', 200000, '2023-02-21 14:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `pengguna_id` int(20) NOT NULL,
  `pengguna_username` varchar(255) DEFAULT NULL,
  `pengguna_password` varchar(255) DEFAULT NULL,
  `pengguna_nama` varchar(255) DEFAULT NULL,
  `pengguna_foto` text,
  `pengguna_hak_akses` enum('manajer','admin','tukang') DEFAULT NULL,
  `pengguna_date_created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`pengguna_id`, `pengguna_username`, `pengguna_password`, `pengguna_nama`, `pengguna_foto`, `pengguna_hak_akses`, `pengguna_date_created`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Daniel Gin', NULL, 'manajer', '2022-06-15 21:06:43'),
(2, 'project_manager', '5be057accb25758101fa5eadbbd79503', 'Saptoni Khusni', NULL, '', '2019-07-15 12:27:55'),
(3, 'drian', '21232f297a57a5a743894a0e4a801fc3', 'adri', NULL, 'manajer', '2022-08-15 13:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `pinjam_id` varchar(20) NOT NULL,
  `pinjam_karyawan_id` varchar(20) NOT NULL,
  `pinjam_jumlah` int(20) NOT NULL,
  `pinjam_bayar` int(20) NOT NULL DEFAULT '0',
  `pinjam_date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pinjam`
--

INSERT INTO `tb_pinjam` (`pinjam_id`, `pinjam_karyawan_id`, `pinjam_jumlah`, `pinjam_bayar`, `pinjam_date_created`, `keterangan`) VALUES
('PJM-43892', 'PEG-43411', 50000, 50000, '2023-05-15 16:44:52', 'bensin'),
('PJM-59030', 'PEG-02852', 10000, 0, '2022-08-29 14:43:50', 'Kasbon'),
('PJM-61244', '', 2147483647, 0, '2022-12-16 10:27:24', 'gtrr'),
('PJM-62767', '', 3, 0, '2023-02-21 13:59:27', 'asdsd'),
('PJM-62837', '', 23000, 0, '2023-02-21 14:00:37', 'minjem'),
('PJM-62928', '', 23000, 0, '2023-02-21 14:02:08', 'minjem');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tukang`
--

CREATE TABLE `tb_tukang` (
  `tukang_id` varchar(20) NOT NULL,
  `tukang_gol_id` varchar(20) DEFAULT NULL,
  `tukang_nama` varchar(255) DEFAULT NULL,
  `tukang_tempat_lahir` varchar(255) DEFAULT NULL,
  `tukang_tanggal_lahir` date DEFAULT NULL,
  `tukang_alamat` text,
  `tukang_tanggal_gabung` date DEFAULT NULL,
  `tukang_nomor_hp` varchar(20) DEFAULT NULL,
  `tukang_no_rekening` varchar(30) DEFAULT NULL,
  `tukang_date_created` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tukang`
--

INSERT INTO `tb_tukang` (`tukang_id`, `tukang_gol_id`, `tukang_nama`, `tukang_tempat_lahir`, `tukang_tanggal_lahir`, `tukang_alamat`, `tukang_tanggal_gabung`, `tukang_nomor_hp`, `tukang_no_rekening`, `tukang_date_created`) VALUES
('PEG-43411', 'JAB-43347', 'Adrian', 'asdasd', '2000-09-13', 'MBR Raya', '2022-09-20', '786867867', '678686786', '2023-05-15 16:36:51'),
('PEG-46210', 'JAB-46143', 'budiman', 'jakarta', '2001-04-28', 'Jl Tembok cina', '2021-05-01', '086515381627', '7568163511', '2023-07-28 19:10:10'),
('PEG-46273', 'JAB-46130', 'jonn', 'Sukabumi', '2005-07-28', 'JL Lodan Raya', '2023-05-12', '085134511387', '76263719371', '2023-07-28 19:11:13'),
('PEG-46329', 'JAB-46109', 'geri liandi', 'batam', '2009-02-28', 'JL Lodan Raya', '2023-02-11', '0861637163617', '8367361187', '2023-07-28 19:12:09'),
('PEG-46332', 'JAB-46109', 'geri liandi', 'batam', '2009-02-28', 'JL Lodan Raya', '2023-02-11', '0861637163617', '8367361187', '2023-07-28 19:12:12'),
('PEG-46388', 'JAB-46016', 'nandi', 'Tanggerang', '2000-07-28', 'JL Bandengan Utara', '2022-06-28', '083616361835', '74727173861', '2023-07-28 19:13:08'),
('PEG-46451', 'JAB-46030', 'putra', 'Lampung', '1996-07-28', 'JL bandengan utara', '2023-05-28', '0836183718', '048173771737', '2023-07-28 19:14:11'),
('PEG-46497', 'JAB-46006', 'yono', 'Jakarta', '1995-07-28', 'JL duri utara', '2021-06-28', '0836173617937', '87371836627', '2023-07-28 19:14:57'),
('PEG-65768', 'JAB-65662', 'syalala', 'jakarta', '2002-04-30', 'okekeke', '2023-02-03', '2929929292', '7137283712', '2023-02-21 14:49:28'),
('PEG-93258', 'JAB-65853', 'syalala', 'bojonegoro', '2000-02-25', 'erw4w', '2023-04-30', '8997979', '5675757', '2023-05-19 17:47:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`absen_id`);

--
-- Indexes for table `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD PRIMARY KEY (`gaji_id`);

--
-- Indexes for table `tb_golgaji`
--
ALTER TABLE `tb_golgaji`
  ADD PRIMARY KEY (`gol_id`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`pinjam_id`);

--
-- Indexes for table `tb_tukang`
--
ALTER TABLE `tb_tukang`
  ADD PRIMARY KEY (`tukang_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `pengguna_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
