 -- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2025 pada 15.59
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_abisatya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galery`
--

CREATE TABLE `tb_galery` (
  `id_galery` int(11) NOT NULL,
  `galery_name` varchar(255) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_galery`
--

INSERT INTO `tb_galery` (`id_galery`, `galery_name`, `kategori`) VALUES
(1, 'kelas 7(1).png', 'kelas 7'),
(2, 'kelas 7(2).png', 'kelas 7'),
(3, 'kelas 8(1).png', 'kelas 8'),
(4, 'kelas 8(2).png', 'kelas 8'),
(5, 'kelas 9(1).png', 'kelas 9'),
(6, 'kelas 9(2).png', 'kelas 9'),
(7, 'kelas 9(3).png', 'kelas 9'),
(8, 'kelas 9(4).png', 'kelas 9'),
(9, 'kelas 9(5).png', 'kelas 9'),
(10, 'kelas 9(6).png', 'kelas 9'),
(11, 'kelas 9(7).png', 'kelas 9'),
(12, 'kelas 9(8).png', 'kelas 9'),
(13, 'kelas 9(9).png', 'kelas 9'),
(14, 'kelas 9(10).png', 'kelas 9'),
(15, 'perpisahan (1).png', 'perpisahan'),
(16, 'perpisahan (2).png', 'perpisahan'),
(17, 'perpisahan (3).png', 'perpisahan'),
(18, 'perpisahan (4).png', 'perpisahan'),
(19, 'perpisahan (5).png', 'perpisahan'),
(20, 'wisuda.png', 'wisuda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil_guru`
--

CREATE TABLE `tb_profil_guru` (
  `id_guru` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `usia` int(20) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `mengajar` varchar(100) NOT NULL,
  `hobi` varchar(255) NOT NULL,
  `motto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_profil_guru`
--

INSERT INTO `tb_profil_guru` (`id_guru`, `foto`, `nama`, `usia`, `mapel`, `mengajar`, `hobi`, `motto`) VALUES
(1, 'bu eka.png', 'Eka Puji Mutiara', 31, 'Bahasa Indonesia', 'tahun 2023', 'Menata kata, hingga menjadi kalimat yang sempurna. Menyusun kalimat hingga menjadi paragraf. Memadukan kalimat hingga menjadi sebuah wacana.', 'Daun yang terbang tidak pernah memaki angin, begitulah hidup. Tergantung dari sudut mana kita melihatnya.'),
(2, 'bu sofie.png', 'Siti Sofiani', 44, 'Matematika & Al-Qur\'an Hadis', 'tahun 2023', 'Membaca', 'عِشْ كَرِيْمًا أَوْ مُتْ شَهِيْدًا'),
(3, 'pak imam.png', 'M Imam Febriansyah', 25, 'IPS, PKN dan SBK', 'tahun 2023', 'Bermain Sepeda, Touring, Membaca Buku dan Main Game.', 'Perbanyak Sabar, Perbanyak Doa, Perbanyak Bersyukur, Perbanyak Berusaha, selalu Ikhtiar dan terus berusaha untuk Istiqomah dalam menjalankan kebaikan.'),
(4, 'pak hendi.png', 'Hendi Eka Hidayat', 30, 'IPA', 'tahun 2021', 'Bermain', 'Submit Decision By Trusting In Allah'),
(5, 'pak ihsan.png', 'Ihsan Zulhamda', 27, 'bahasa inggris, aqidah akhlak dan SKI', 'tahun 2024', 'Olahraga', 'padi tumbuh semakin menunduk');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_galery`
--
ALTER TABLE `tb_galery`
  ADD PRIMARY KEY (`id_galery`);

--
-- Indeks untuk tabel `tb_profil_guru`
--
ALTER TABLE `tb_profil_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_galery`
--
ALTER TABLE `tb_galery`
  MODIFY `id_galery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_profil_guru`
--
ALTER TABLE `tb_profil_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;