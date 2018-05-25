-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Mei 2018 pada 06.36
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` int(20) NOT NULL,
  `hadir` int(4) NOT NULL,
  `alfa` int(4) NOT NULL,
  `izin` int(4) NOT NULL,
  `sakit` int(4) NOT NULL,
  `total` int(4) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `siswa_id` int(10) NOT NULL,
  `kode_TA` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id`, `hadir`, `alfa`, `izin`, `sakit`, `total`, `bulan`, `siswa_id`, `kode_TA`) VALUES
(21, 0, 0, 0, 0, 0, 'Juli', 11, '2017'),
(22, 0, 0, 0, 0, 0, 'Agustus', 11, '2017'),
(23, 0, 0, 0, 0, 0, 'September', 11, '2017'),
(24, 0, 0, 0, 0, 0, 'Oktober', 11, '2017'),
(25, 0, 0, 0, 0, 0, 'Nopember', 11, '2017'),
(26, 0, 0, 0, 0, 0, 'Desember', 11, '2017'),
(27, 0, 0, 0, 0, 0, 'Januari', 11, '2017'),
(28, 0, 0, 0, 0, 0, 'Februari', 11, '2017'),
(29, 0, 0, 0, 0, 0, 'Maret', 11, '2017'),
(30, 0, 0, 0, 0, 0, 'April', 11, '2017'),
(31, 0, 0, 0, 0, 0, 'Mei', 11, '2017'),
(32, 0, 0, 0, 0, 0, 'Juni', 11, '2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan_pelanggaran`
--

CREATE TABLE `catatan_pelanggaran` (
  `id` int(10) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `jam` varchar(6) NOT NULL,
  `id_pelanggaran` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `kode_TA` varchar(4) NOT NULL,
  `nip` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `catatan_pelanggaran`
--

INSERT INTO `catatan_pelanggaran` (`id`, `tanggal`, `jam`, `id_pelanggaran`, `id_siswa`, `kode_TA`, `nip`) VALUES
(1, '31-01-2018', '12:10', 1, 3, '2017', '10115314'),
(3, '06-02-2018', '12:10', 2, 11, '2017', '10115314'),
(4, '02-April-2018', '18:10', 2, 3, '2017', '10115314');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`nip`, `nama`, `jabatan`) VALUES
('10115313', 'Fata', 'Wali Kelas'),
('10115314', 'Rahmat', 'Guru BK'),
('10115315', 'Indra', 'Guru Piket');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(8) NOT NULL,
  `jurusan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`) VALUES
(1, 'IPS'),
(2, 'BAHASA'),
(3, 'IPA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(8) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `nip_guru` varchar(10) NOT NULL,
  `jurusan_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`, `nip_guru`, `jurusan_id`) VALUES
(1, 'X IPA', '10115313', 3),
(3, 'XI IPA', '10115313', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id` tinyint(2) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id`, `nama`) VALUES
(1, 'Admin'),
(2, 'Wali Kelas'),
(3, 'Guru BK'),
(4, 'Guru Piket'),
(5, 'Siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id` int(8) NOT NULL,
  `nama_pelanggaran` varchar(100) NOT NULL,
  `poin` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggaran`
--

INSERT INTO `pelanggaran` (`id`, `nama_pelanggaran`, `poin`) VALUES
(1, 'Mencuri', 15),
(2, 'merokok', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(10) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `kewarganegaraan` varchar(5) NOT NULL,
  `tahun_angkatan` varchar(5) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `ttl_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(30) NOT NULL,
  `penghasilan_ayah` int(10) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `ttl_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `penghasilan_ibu` int(10) NOT NULL,
  `kelas_id` int(8) NOT NULL,
  `kode_TA` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama`, `ttl`, `jk`, `agama`, `foto`, `alamat`, `no_hp`, `kewarganegaraan`, `tahun_angkatan`, `nama_ayah`, `ttl_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nama_ibu`, `ttl_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `kelas_id`, `kode_TA`) VALUES
(3, '101', 'Fata', 'Bandung, 20 Maret 1997', 'Laki-Laki', 'Islam', '1517285569101.jpg', '2', '2', 'WNI', '2018', 't', 't', 't', 2, 't', 't', 't', 2, 1, '2017'),
(4, '101', '2', '2', 'Laki-Laki', 'Kristen', '1517282509101.jpg', '2', '2', 'WNA', '2', '22', '2', '2', 2, '2', '2', '2', 2, 1, '2018'),
(10, '10115313', 'Fata', 'Bandung, 20 Maret 1997', 'Laki-Laki', 'Islam', '151729123210115313.jpg', 'Bandung', '09192', 'WNI', '2018', '8', '8', '8', 8, '8', '8', '8', 8, 1, '2018'),
(11, '9', 'hasan', '9', 'Laki-Laki', 'Islam', '15172913659.jpg', '9', '9', 'WNI', '9', '9', '9', '9', 99, '9', '9', '9', 9, 1, '2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skill_karakter`
--

CREATE TABLE `skill_karakter` (
  `id_skill` int(8) NOT NULL,
  `id_siswa` int(8) NOT NULL,
  `kode_TA` varchar(4) NOT NULL,
  `disiplin` int(4) NOT NULL,
  `kerja_sama` int(4) NOT NULL,
  `kreatif` int(4) NOT NULL,
  `tanggung_jawab` int(4) NOT NULL,
  `kerja_keras` int(4) NOT NULL,
  `mandiri` int(4) NOT NULL,
  `komunikatif` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skill_karakter`
--

INSERT INTO `skill_karakter` (`id_skill`, `id_siswa`, `kode_TA`, `disiplin`, `kerja_sama`, `kreatif`, `tanggung_jawab`, `kerja_keras`, `mandiri`, `komunikatif`) VALUES
(1, 3, '2017', 20, 50, 50, 50, 50, 50, 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soft_skill`
--

CREATE TABLE `soft_skill` (
  `id` int(11) NOT NULL,
  `kemampuan` varchar(100) NOT NULL,
  `poin` int(4) NOT NULL,
  `id_siswa` int(8) NOT NULL,
  `kode_TA` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soft_skill`
--

INSERT INTO `soft_skill` (`id`, `kemampuan`, `poin`, `id_siswa`, `kode_TA`) VALUES
(1, 'pidato', 30, 3, '2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahunajaran`
--

CREATE TABLE `tahunajaran` (
  `Kode_TA` varchar(4) NOT NULL,
  `Keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahunajaran`
--

INSERT INTO `tahunajaran` (`Kode_TA`, `Keterangan`) VALUES
('2017', '2017/2018'),
('2018', '2018/2019'),
('2019', '2019/2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'fata', 'fatahasan', '$2y$10$82Y6zDKsz6s0P7O.BgE2/.kLRqSqQSeyxUkrIflduJe1pErN9w86e', 'fuizIiAgBzeWf3dihVPeH3WmlwdMZXjMgPE9sGVDVyRjxQyY9zWt0byOK8ZB', NULL, NULL, 4),
(2, 'hasan', 'hasan', '$2y$10$82Y6zDKsz6s0P7O.BgE2/.kLRqSqQSeyxUkrIflduJe1pErN9w86e', 'J1Ey1CqucEswhp1T559JoD7SULjPntT4zVUEvQDDD8TuzaWpKdLcH2GEtmMQ', '2018-01-19 13:40:07', '2018-01-19 13:40:07', 1),
(3, 'test', 'fata', '$2y$10$82Y6zDKsz6s0P7O.BgE2/.kLRqSqQSeyxUkrIflduJe1pErN9w86e', '2Jrfw50zOGE4ls5y6d3gAWuiRNpCWreuDcDFaSZsOwSSixAqoOnQIemZG9Fp', NULL, NULL, 2),
(4, 'azka', 'azka', '$2y$10$82Y6zDKsz6s0P7O.BgE2/.kLRqSqQSeyxUkrIflduJe1pErN9w86e', 'i1NHKigHWFuuDrYlJebTY8e8LDCPJQPcB5ZhwfFr3HsFufuSUuxaq7VnBX8l', NULL, NULL, 3),
(5, 'ahmad', 'ahmad', '$2y$10$82Y6zDKsz6s0P7O.BgE2/.kLRqSqQSeyxUkrIflduJe1pErN9w86e', 'QLeDRJqh6s49wGQIoNUwgi9BlPKQkHUkFxMPxEf0fkJJ6zmdwCKsyhjni85L', NULL, NULL, 5),
(7, 'Fata', '10115313', '$2y$10$NUcM/TivOHRvgmxa4AWuA.U7fQo445PyH1JmQ2KlmACQUUbEUx8rC', 'WJaxakqSQ7bruhsxzFIaooYzeZ4XTCmi2Q8rkcK18LcQgw8hbn7qTCeydM0m', NULL, NULL, 2),
(8, 'Rahmat', '10115314', '$2y$10$a9y8zmzL2yBU7U.2t2a0v.VV375Az8edC2266dBBR6cOpk6kAo2f.', NULL, NULL, NULL, 3),
(9, 'Indra', '10115315', '$2y$10$2ICdsN6e0WPOZBtA12/CbeQnVo.oqG6KTRl78ZIQc7Maj1v3mJCIq', 'n2jtwGPWlYkI9rEbYDKcIOOH0AF7sM22zOhXWC8kEqWVPhBUbXytBXvAjQxF', NULL, NULL, 4),
(13, '1', '1', '$2y$10$5GZ8.cC/vGmcTYNSQbO4JusDb2vM2MXP.kfefEFTagGcEDeZK8XnG', NULL, NULL, NULL, 5),
(14, 'Fata', '101', '$2y$10$J4RWun7akHrA.FZTE9KR5ep3QMNP5cAAPlZxPg7VOJc.8WUVr2Rz6', NULL, NULL, NULL, 5),
(15, 'h', '111', '$2y$10$dsa/pRzknczM1.MThRlXT.AGJ2HbdGBKsiREx6Ky3r7AvGxlq1ZzW', NULL, NULL, NULL, 5),
(16, '9', '9', '$2y$10$OBs0UTG//y456vu8Mj5Sx.vgwJMQU64VSR5TgDE2vKX2lsspqbapW', NULL, NULL, NULL, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_siswa` (`siswa_id`),
  ADD KEY `kode_TA` (`kode_TA`);

--
-- Indexes for table `catatan_pelanggaran`
--
ALTER TABLE `catatan_pelanggaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pelanggaran` (`id_pelanggaran`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `kode_TA` (`kode_TA`),
  ADD KEY `id_guru` (`nip`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `jurusan_id` (`jurusan_id`),
  ADD KEY `nip` (`nip_guru`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `kode_TA` (`kode_TA`),
  ADD KEY `kelas_id` (`kelas_id`);

--
-- Indexes for table `skill_karakter`
--
ALTER TABLE `skill_karakter`
  ADD PRIMARY KEY (`id_skill`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `kode_TA` (`kode_TA`);

--
-- Indexes for table `soft_skill`
--
ALTER TABLE `soft_skill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `kode_TA` (`kode_TA`);

--
-- Indexes for table `tahunajaran`
--
ALTER TABLE `tahunajaran`
  ADD PRIMARY KEY (`Kode_TA`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`level`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `catatan_pelanggaran`
--
ALTER TABLE `catatan_pelanggaran`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `skill_karakter`
--
ALTER TABLE `skill_karakter`
  MODIFY `id_skill` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `soft_skill`
--
ALTER TABLE `soft_skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_2` FOREIGN KEY (`kode_TA`) REFERENCES `tahunajaran` (`Kode_TA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `catatan_pelanggaran`
--
ALTER TABLE `catatan_pelanggaran`
  ADD CONSTRAINT `catatan_pelanggaran_ibfk_1` FOREIGN KEY (`id_pelanggaran`) REFERENCES `pelanggaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `catatan_pelanggaran_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `catatan_pelanggaran_ibfk_3` FOREIGN KEY (`kode_TA`) REFERENCES `tahunajaran` (`Kode_TA`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `catatan_pelanggaran_ibfk_4` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`nip_guru`) REFERENCES `guru` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`kode_TA`) REFERENCES `tahunajaran` (`Kode_TA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `skill_karakter`
--
ALTER TABLE `skill_karakter`
  ADD CONSTRAINT `skill_karakter_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skill_karakter_ibfk_2` FOREIGN KEY (`kode_TA`) REFERENCES `tahunajaran` (`Kode_TA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `soft_skill`
--
ALTER TABLE `soft_skill`
  ADD CONSTRAINT `soft_skill_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `soft_skill_ibfk_2` FOREIGN KEY (`kode_TA`) REFERENCES `tahunajaran` (`Kode_TA`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`level`) REFERENCES `level` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
