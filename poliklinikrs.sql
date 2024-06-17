-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2024 at 06:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poliklinikrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_poli`
--

CREATE TABLE `daftar_poli` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pasien` int(11) UNSIGNED DEFAULT NULL,
  `id_jadwal` int(11) UNSIGNED DEFAULT NULL,
  `keluhan` text DEFAULT NULL,
  `no_antrian` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_poli`
--

INSERT INTO `daftar_poli` (`id`, `id_pasien`, `id_jadwal`, `keluhan`, `no_antrian`) VALUES
(1, 2, 1, 'Gigi berlubang', 1),
(2, 4, 10, 'demam tinggi, batuk, pilek', 1),
(3, 4, 1, 'gusi berdarah', 2),
(4, 10, 10, 'sakit perut', 2);

-- --------------------------------------------------------

--
-- Table structure for table `detail_periksa`
--

CREATE TABLE `detail_periksa` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_periksa` int(11) UNSIGNED DEFAULT NULL,
  `id_obat` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_periksa`
--

INSERT INTO `detail_periksa` (`id`, `id_periksa`, `id_obat`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 2, 2),
(4, 2, 5),
(5, 3, 2),
(6, 3, 3),
(7, 4, 2),
(8, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `id_poli` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `alamat`, `no_hp`, `id_poli`) VALUES
(1, 'Mark', 'Semarang', '085848976634', 1),
(2, 'Johnny', 'Medan', '089654345678', 3),
(3, 'Giselle', 'Jakarta', '0823478321890', 2),
(4, 'Anton', 'Semarang Barat', '081456321678', 3),
(5, 'Hendery', 'Semarang Timur', '08253486709', 4),
(6, 'Irene', 'Semarang Tengah', '085109287365', 5),
(7, 'Wendy', 'Semarang Timur', '085123456789', 6),
(8, 'Pharita', 'Semarang Utara', '085012345678', 7),
(11, 'Chiquita', 'Semarang Selatan', '0823478321892', 8),
(13, 'Luna', 'Semarang', '089654342777', 5);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_periksa`
--

CREATE TABLE `jadwal_periksa` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_dokter` int(11) UNSIGNED DEFAULT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal_periksa`
--

INSERT INTO `jadwal_periksa` (`id`, `id_dokter`, `hari`, `jam_mulai`, `jam_selesai`) VALUES
(1, 1, 'Kamis', '09:30:00', '14:37:00'),
(5, 1, 'Selasa', '10:00:00', '15:30:00'),
(7, 1, 'Sabtu', '13:52:00', '20:52:00'),
(8, 1, 'Rabu', '10:32:00', '16:32:00'),
(10, 3, 'Senin', '10:44:00', '16:44:00'),
(11, 3, 'Rabu', '11:46:00', '16:52:00'),
(12, 3, 'Sabtu', '09:29:00', '19:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_obat` varbinary(50) DEFAULT NULL,
  `kemasan` varchar(35) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `kemasan`, `harga`) VALUES
(1, 0x41435420284172746573756e617465207461626c6574203530206d67202b20416d6f6469617175696e6520616e6879647269, '2 blister @ 12 tablet / kotak', 34000),
(2, 0x50617261636574616d6f6c, 'Tablet 500 mg, Strip isi 10 tablet', 10000),
(3, 0x416d6f786963696c6c696e, 'Kapsul 500 mg, Strip isi 10 kapsul', 20000),
(4, 0x4365746972697a696e65, 'Tablet 10 mg, Strip isi 10 tablet', 25000),
(5, 0x4d6574666f726d696e, 'Tablet 500 mg, Strip isi 10 tablet', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `no_rm` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `alamat`, `no_ktp`, `no_hp`, `no_rm`) VALUES
(1, 'Karina', 'Semarang', '331813641002005', '085890675432', '202405-001'),
(2, 'Jasmeen', 'Pati', '3318654310010001', '085787453212', '202405-002'),
(4, 'Dino', 'Bandung', '331813456789096', '089654367123', '202406-003'),
(5, 'Ghayda', 'Kendal', '3318439080010002', '081432907653', '202406-004'),
(7, 'Naraya', 'Semarang', '339183100041', '09823782040', '202406-005'),
(10, 'Niya', 'Jogja', '3318136510010001', '085848976655', '202406-008'),
(11, 'Adhana', 'Semarang', '3316754560010002', '085436789321', '202406-009'),
(15, 'yaya', 'Boja', '7391444444444444444', '093733382', '202406-010');

-- --------------------------------------------------------

--
-- Table structure for table `periksa`
--

CREATE TABLE `periksa` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_daftar_poli` int(11) UNSIGNED DEFAULT NULL,
  `tgl_periksa` datetime DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `biaya_periksa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `periksa`
--

INSERT INTO `periksa` (`id`, `id_daftar_poli`, `tgl_periksa`, `catatan`, `biaya_periksa`) VALUES
(1, 1, '2024-05-30 11:08:00', 'gusi berdarah', 150000),
(2, 1, '2024-05-30 11:08:00', 'gusi berdarah', 150000),
(3, 3, '2024-06-12 11:28:00', 'istirahat teratur', 150000),
(4, 2, '2024-06-15 17:30:00', 'istirahat total', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_poli` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id`, `nama_poli`, `keterangan`) VALUES
(1, 'Poli Gigi dan Mulut', 'Melayani pemeriksaan, perawatan, dan pencegahan penyakit gigi dan mulut, termasuk pencabutan gigi, tambal gigi, dan pembersihan karang gigi.'),
(2, 'Poli Umum', 'Melayani pemeriksaan dan pengobatan untuk penyakit umum. Pasien pertama kali akan diperiksa di sini untuk menentukan apakah perlu rujukan ke spesialis.'),
(3, 'Poli Anak (Pediatri)', 'Menyediakan layanan kesehatan khusus untuk anak-anak mulai dari bayi baru lahir hingga remaja, termasuk imunisasi dan pemeriksaan tumbuh kembang.'),
(4, 'Poli Kandungan dan Kebidanan (Obstetri dan Ginekologi)', 'Melayani kesehatan reproduksi wanita, pemeriksaan kehamilan, persalinan, dan masalah kesehatan kandungan lainnya.'),
(5, 'Poli Jantung (Kardiologi)', 'Menyediakan layanan untuk pasien dengan masalah kesehatan jantung dan pembuluh darah, seperti hipertensi, penyakit jantung koroner, dan gagal jantung.'),
(6, 'Poli Saraf (Neurologi)', 'Melayani pemeriksaan dan perawatan untuk penyakit yang berhubungan dengan sistem saraf, seperti epilepsi, stroke, dan penyakit Parkinson.'),
(7, 'Poli Mata (Oftalmologi)', 'Menyediakan layanan pemeriksaan dan perawatan kesehatan mata, termasuk katarak, glaukoma, dan masalah penglihatan lainnya.'),
(8, 'Poli Telinga, Hidung, dan Tenggorokan (THT)', 'Melayani pemeriksaan dan pengobatan untuk penyakit yang berhubungan dengan telinga, hidung, dan tenggorokan, seperti infeksi, gangguan pendengaran, dan sinusitis.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_poli`
--
ALTER TABLE `daftar_poli`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_daftarPoli_jadwal` (`id_jadwal`),
  ADD KEY `fk_daftarPoli_pasien` (`id_pasien`);

--
-- Indexes for table `detail_periksa`
--
ALTER TABLE `detail_periksa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detailPeriksa_periksa` (`id_periksa`),
  ADD KEY `fk_detailPeriksa_obat` (`id_obat`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dokter_poli` (`id_poli`);

--
-- Indexes for table `jadwal_periksa`
--
ALTER TABLE `jadwal_periksa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jadwal_dokter` (`id_dokter`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_periksa_daftarPoli` (`id_daftar_poli`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_poli`
--
ALTER TABLE `daftar_poli`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detail_periksa`
--
ALTER TABLE `detail_periksa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jadwal_periksa`
--
ALTER TABLE `jadwal_periksa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `periksa`
--
ALTER TABLE `periksa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_poli`
--
ALTER TABLE `daftar_poli`
  ADD CONSTRAINT `fk_daftarPoli_jadwal` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal_periksa` (`id`),
  ADD CONSTRAINT `fk_daftarPoli_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id`);

--
-- Constraints for table `detail_periksa`
--
ALTER TABLE `detail_periksa`
  ADD CONSTRAINT `fk_detailPeriksa_obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id`),
  ADD CONSTRAINT `fk_detailPeriksa_periksa` FOREIGN KEY (`id_periksa`) REFERENCES `periksa` (`id`);

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `fk_dokter_poli` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id`);

--
-- Constraints for table `jadwal_periksa`
--
ALTER TABLE `jadwal_periksa`
  ADD CONSTRAINT `fk_jadwal_dokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id`);

--
-- Constraints for table `periksa`
--
ALTER TABLE `periksa`
  ADD CONSTRAINT `fk_periksa_daftarPoli` FOREIGN KEY (`id_daftar_poli`) REFERENCES `daftar_poli` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
