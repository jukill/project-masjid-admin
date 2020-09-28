-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 11:34 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masjid`
--

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `hp` int(11) NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id`, `nama`, `hp`, `jumlah`) VALUES
(1, 'rajab', 82218212, 50000),
(2, 'binsal', 77666, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `foto`, `keterangan`) VALUES
(1, 'ngoding', '8d074-admin-masjid.png', 'ini hasil ngoding sudah jadi sedikit aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(2, 'lak jusa jsia ksia', '1bcf4-ak.png', 'ini hasil ngoding sudah jadi sedikit aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(3, 'duduk duduk', 'ba81f-fungsi.png', 'ini lagi duduk dudk'),
(4, 'mobil', '11726-dinamik.png', 'dinamik'),
(5, 'pesawat', 'efc75-tekken.png', 'teken'),
(6, 'titel', 'c08be-perulangan.png', 'keterangan keterangan keterangan keterangan keterangan keterangan keterangan keterangan keterangan keterangan keterangan keterangan keterangan keterangan keterangan keterangan keterangan keterangan keterangan keterangan keterangan keterangan keterangan keterangan ');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `infentaris`
--

CREATE TABLE `infentaris` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keadaan` enum('baik','sedang','rusak','butuh tambahan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `masjid` varchar(1000) NOT NULL,
  `alamat` varchar(5000) NOT NULL,
  `pendiri` varchar(2000) NOT NULL,
  `tahun_berdiri` year(4) NOT NULL,
  `kontak_wa` bigint(16) DEFAULT NULL,
  `kontak_email` varchar(100) NOT NULL,
  `tentang1` varchar(5000) NOT NULL,
  `tentang2` varchar(5000) NOT NULL,
  `tentang3` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `masjid`, `alamat`, `pendiri`, `tahun_berdiri`, `kontak_wa`, `kontak_email`, `tentang1`, `tentang2`, `tentang3`) VALUES
(1, 'Ali Hizam', 'jl.perintis kemerdekaan 7', 'ust. alim', 2001, 81254574653, 'examp@gmail.com', 'Kami mengumpulkan dan menganalisis informasi tentang penggunaan umum situs web, produk, layanan, dan kursus Anda. Kami mungkin melacak pola penggunaan Anda untuk melihat fitur apa dari situs web yang biasa Anda gunakan, volume lalu lintas situs web, frekuensi kunjungan, jenis dan waktu transaksi, jenis browser, bahasa browser.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jamaah`
--

CREATE TABLE `jamaah` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `gender` enum('laki-laki','perempuan','','') NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `hp` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jamaah`
--

INSERT INTO `jamaah` (`id`, `nama`, `gender`, `umur`, `alamat`, `hp`) VALUES
(21, 'hasya', 'perempuan', 19, 'makassar, pk 7, jalan antang', 0),
(22, 'raden kian santang', 'laki-laki', 32, 'jakarta raya', 0),
(23, 'hasya muna', 'perempuan', 19, 'palu', 0),
(25, 'lolopi', 'perempuan', 30, 'palu', 0),
(26, 'rizal kurniawan', 'laki-laki', 18, 'luar', 0),
(27, 'hafidin aja', 'laki-laki', 19, 'mayajaya', 2147483647),
(28, 'hamdi', 'laki-laki', 20, 'monas', 866910566442);

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id` int(11) NOT NULL,
  `kategori` enum('pemasukan','pengeluaran','','') NOT NULL,
  `jumlah` int(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id`, `kategori`, `jumlah`, `keterangan`, `tanggal`) VALUES
(18, 'pemasukan', 1000, '', '2020-09-21'),
(19, 'pengeluaran', 450, '', '2020-09-21'),
(20, 'pemasukan', 300, '', '2020-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mading`
--

CREATE TABLE `mading` (
  `id` int(11) NOT NULL,
  `tentang` varchar(300) NOT NULL,
  `foto` varchar(400) NOT NULL,
  `isi_mading` varchar(2000) NOT NULL,
  `sumber` varchar(400) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mading`
--

INSERT INTO `mading` (`id`, `tentang`, `foto`, `isi_mading`, `sumber`, `tanggal`) VALUES
(2, 'Imam baru, bacaan baru.?', '4d38f-admin-masjid.png', 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak. Wikipedia', 'google', '2020-09-24'),
(3, 'Judul mading', '9905a-cmatrix.png', 'Majalah dinding adalah salah satu jenis media komunikasi massa tulis yang paling sederhana. Disebut majalah dinding karena prinsip dasar majalah terasa dominan di dalamnya, sementara itu penyajiannya biasanya dipampang pada dinding atau yang sejenisnya.', 'wikipedia', '2020-09-24'),
(4, 'pembangunan masjid', '38bc5-masjid.jpg', ' Pembangunan Masjid - Medcom.idwww.medcom.id › tag › pembangunan-masjid Terowongan Penghubung Masjid Istiqlal-Gereja Katedral Dikerjakan Akhir Tahun.  Kumpulan Berita Terkait pembangunan masjid - SINDOnewswww.sindonews.com › terkait › pembangunan-masjid Kumpulan Berita Terkaitpembangunan masjid - - Bupati Agus Hadiri Peletakan Batu Pertama Mesjid Nur-Hijrah Makmur Jaya. Menag Tinjau Lahan Untuk ...  Berita Terkini pembangunan masjid Terbaru Hari Ini ...www.sindonews.com › topic › pembangunan-masjid Kumpulan berita seputar pembangunan masjid Terkin Terbaru Hari Ini - - Putri Wapres dan Ketua Umum Rejo Letakan Batu Pertama Rumah Hafidz Quran.  Pembangunan Masjid - Kitabisa.comwww.kitabisa.com › masjidaliklas 14 Jun 2019 - Pembangunan Masjid. Rp 351.440. terkumpul dari Rp 100.000.000. 5 Donasi 0 hari lagi. CAMPAIGN TELAH BERAKHIR ... Penelusuran yang terkait dengan pembangunan masjid donasi pembangunan masjid  proposal pembangunan masjid  kata-kata untuk pembangunan masjid  ayat tentang pembangunan masjid  lembaga donatur pembangunan masjid 2019  daftar nama donatur pembangunan masjid  strategi penggalangan dana pembangunan masjid  pembangunan masjid madinah selesai dalam waktu  1	 2 3 4 5 6 7 8 9 10 Berikutnya', 'www.google.com', '2020-09-24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$7djciRLMf9xuakXu0TPTNOs8tRukuP/4mBVxn9nVbtAjuR883R1Aq', 'admin@masjid.com', NULL, NULL, NULL, NULL, NULL, 'ccf655de94cb9ad51a6f0962058df61d7cb1309e', '$2y$10$bmW.pw.GYugcen4rK7mImudQDigdrwIbzS5uaE9jdnxxJbIrrJAYa', 1268889823, 1601280475, 1, 'imam', 'masjid', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infentaris`
--
ALTER TABLE `infentaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jamaah`
--
ALTER TABLE `jamaah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mading`
--
ALTER TABLE `mading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `infentaris`
--
ALTER TABLE `infentaris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jamaah`
--
ALTER TABLE `jamaah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mading`
--
ALTER TABLE `mading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
