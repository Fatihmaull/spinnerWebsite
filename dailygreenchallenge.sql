-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2024 pada 21.00
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
-- Database: `dailygreenchallenge`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `spin`
--

CREATE TABLE `spin` (
  `idspin` int(11) NOT NULL,
  `dataspin` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `spin`
--

INSERT INTO `spin` (`idspin`, `dataspin`, `tanggal`, `userid`) VALUES
(1, 'Membuang sampah', '2024-06-24', 6),
(2, 'Menanam pohon', '2024-06-24', 6),
(3, 'Membuang sampah', '2024-06-24', 6),
(4, 'Membuang sampah', '2024-06-24', 6),
(5, 'Membuang sampah', '2024-06-24', 6),
(6, 'Membuang sampah', '2024-06-24', 6),
(7, 'Membuang sampah', '2024-06-24', 6),
(8, 'Menanam pohon', '2024-06-24', 6),
(9, 'Menanam pohon', '2024-06-24', 6),
(10, 'Menghemat energi', '2024-06-24', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `notlpn` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `notlpn`) VALUES
(4, 'Rahardian Baihaqi', 'rahardianbaihaqi@gmail.com', '$2y$10$7qNzu3X.uzriy1u0ActiIe7', '0823363733'),
(5, 'Rahardian Baihaqi', 'haqistream@gmail.com', '202cb962ac59075b964b07152d234b', '0823363733'),
(6, 'Rahardian Baihaqi', 'rahardianbaihaqi03@gmail.com', '$2y$10$wQZklUnrAO6R1A4G/Exjx.QZl9hnyEsRmsXR.P6d5nfh.zNxWtPo.', '0823363733');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `spin`
--
ALTER TABLE `spin`
  ADD PRIMARY KEY (`idspin`),
  ADD KEY `fk_user` (`userid`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `spin`
--
ALTER TABLE `spin`
  MODIFY `idspin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `spin`
--
ALTER TABLE `spin`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
