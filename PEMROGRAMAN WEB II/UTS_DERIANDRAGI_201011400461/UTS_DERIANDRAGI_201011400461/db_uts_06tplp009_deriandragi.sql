-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2023 pada 07.20
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uts_06tplp009_deriandragi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesanan_deriandragi`
--

CREATE TABLE `tbl_pesanan_deriandragi` (
  `nama_deriandragi` varchar(20) NOT NULL,
  `alamat_deriandragi` varchar(50) NOT NULL,
  `no_hp_deriandragi` int(15) NOT NULL,
  `email_deriandragi` varchar(20) NOT NULL,
  `pesanan_deriandragi` varchar(20) NOT NULL,
  `ukuran_deriandragi` varchar(11) NOT NULL,
  `jumlah_deriandragi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pesanan_deriandragi`
--

INSERT INTO `tbl_pesanan_deriandragi` (`nama_deriandragi`, `alamat_deriandragi`, `no_hp_deriandragi`, `email_deriandragi`, `pesanan_deriandragi`, `ukuran_deriandragi`, `jumlah_deriandragi`) VALUES
('Deri', 'Kp.Karet', 2147483647, 'andragi12@gmail.com', 'Kaos', 'S', 2),
('Lukman', 'Jakarta', 8228877, 'lukman11@gmail.com', 'Kemeja', 'L', 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
