-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 12 Okt 2022 pada 06.28
-- Versi server: 10.3.36-MariaDB-log-cll-lve
-- Versi PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalilashop_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_chat_wa`
--

CREATE TABLE `tbl_chat_wa` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `startOnline` time NOT NULL,
  `endOnline` time NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `createUserId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_chat_wa`
--

INSERT INTO `tbl_chat_wa` (`id`, `nama`, `phone`, `image`, `startOnline`, `endOnline`, `createDate`, `createUserId`) VALUES
(1, 'Admin', '081522701020', 'Admin_2022-08-26 10:52:20.png', '07:00:14', '17:00:00', '2022-08-26 03:52:20', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery1`
--

CREATE TABLE `tbl_gallery1` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tbl_gallery1`
--

INSERT INTO `tbl_gallery1` (`id`, `name`, `image`) VALUES
(139, '', '1.png'),
(140, '', '3.png'),
(141, '', '4.png'),
(142, '', '1.png'),
(143, '', '4.png'),
(144, '', 'hero-people.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery2`
--

CREATE TABLE `tbl_gallery2` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tbl_gallery2`
--

INSERT INTO `tbl_gallery2` (`id`, `name`, `image`) VALUES
(1, '', '4.png'),
(2, '', '3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery3`
--

CREATE TABLE `tbl_gallery3` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tbl_gallery3`
--

INSERT INTO `tbl_gallery3` (`id`, `name`, `image`) VALUES
(1, '', 'hero-people.png'),
(2, '', '3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_homeweb`
--

CREATE TABLE `tbl_homeweb` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_homeweb`
--

INSERT INTO `tbl_homeweb` (`id`, `title`, `deskripsi`) VALUES
(1, 'Pusat Penjualan', 'Mukena, Hijab Modern & Syar\'i');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_katalog`
--

CREATE TABLE `tbl_katalog` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_katalog`
--

INSERT INTO `tbl_katalog` (`id`, `nama`, `image`) VALUES
(1, 'Delta Set', '1.png'),
(2, 'Kanaya Set', '2.png'),
(3, 'Dolly Set', '3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_populer`
--

CREATE TABLE `tbl_populer` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_populer`
--

INSERT INTO `tbl_populer` (`id`, `nama`, `image`) VALUES
(1, 'Karmila Collection', '630b0ed8c5a8e.jpg'),
(4, 'Syamil Collection', '630b0ee4c5f42.jpg'),
(10, 'Aisyah Collection', '630b0e7231d13.jpg'),
(11, 'Jilbab Bayi', '630b12490386b.jpg'),
(12, 'Jilbab Bayi', '630b12583e9b0.jpg'),
(13, 'Mukena Nayla', '630b12a7d7d82.jpg'),
(14, 'Mukena Nayla', '630b12b879ee0.jpg'),
(15, 'Denay', '630b1302ca5e7.jpg'),
(16, 'Manela Scarf', '630b1321c6205.jpg'),
(17, 'Manela Scarf', '630b13309caab.jpg'),
(18, 'Pasmina Oval', '630b1348c9f5e.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_set_hijab`
--

CREATE TABLE `tbl_set_hijab` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `deks1` text NOT NULL,
  `desk2` text NOT NULL,
  `desk3` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_set_hijab`
--

INSERT INTO `tbl_set_hijab` (`id`, `nama`, `price`, `deks1`, `desk2`, `desk3`, `image`) VALUES
(1, 'Mukena Set', 170000, 'Nayla Collection', 'Bahan Katun Mikro', '-', '630b6512d298e.jpg'),
(2, 'Mukena Set	', 170000, 'Nayla Collection', 'Bahan Katun Mikro', '-', '630b6d1c94f72.jpg'),
(3, 'Mukena Set', 285000, 'Nayla Collection', 'Bahan Jersey Casandra', '-', '630b6dc703b80.jpg'),
(4, 'Mukena Set', 285000, 'Nayla Collection', 'Bahan Jersey Casandra', '-', '630b6e2aaf8c5.jpg'),
(5, 'Mukena Set', 285000, 'Nayla Collection', 'Bahan Jersey Casandra', '-', '630b6e7f82013.jpg'),
(6, 'Mukena Set', 285000, 'Nayla Collection', 'Bahan Jersey Casandra', '-', '630b6eb34787b.jpg'),
(7, 'Mukena Set', 285000, 'Nayla Collection', 'Bahan Jersey Casandra', '-', '630b6f56575d3.jpg'),
(8, 'Mukena Set', 285000, 'Nayla Collection', 'Bahan Jersey Casandra', '-', '630b6fc547a16.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sosmed`
--

CREATE TABLE `tbl_sosmed` (
  `id` int(11) NOT NULL,
  `sosmed` varchar(30) NOT NULL,
  `name` varchar(125) NOT NULL,
  `link` varchar(125) NOT NULL,
  `icon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sosmed`
--

INSERT INTO `tbl_sosmed` (`id`, `sosmed`, `name`, `link`, `icon`) VALUES
(1, 'Facebook', 'Kalilashop', 'https://www.facebook.com/kalilashop2', 'fb.png'),
(3, 'Instagram', '@kalilashop.pbun', 'https://www.instagram.com/kalilashop.pbun/', 'ig.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_website`
--

CREATE TABLE `tbl_website` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `metaTitle` varchar(80) NOT NULL,
  `metaKeywords` text NOT NULL,
  `metaDescription` text NOT NULL,
  `working_hours` varchar(50) NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_website`
--

INSERT INTO `tbl_website` (`id`, `name`, `address`, `phone`, `fax`, `email`, `image`, `description`, `metaTitle`, `metaKeywords`, `metaDescription`, `working_hours`, `map`) VALUES
(2, 'KALILA SHOP', '<p>Jl. Matnor, Kel. Baru, Kec. Arut Selatan, Kab. Kotawaringin Barat, Pangkalan Bun, Kalimantan Tengah 74112</p>\r\n', '081522701020', '', '', 'KalilaShop Logo (Fix3) Vector.png', '<p>Di sini kamu bisa mendapatkan banyak pilihan mukena serta hijab kekinian dengan pilihan model dan warna, cocok dipakai untuk acara formal maupun daily.</p>\r\n', 'Pusat Hijab dan Mukena Murah', '', '', '07.00 - 17.00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.4803035268737!2d111.64772119999999!3d-2.6720589999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe83c3c862283f799!2sKalila%20Shop!5e0!3m2!1sid!2sid!4v1661481387669!5m2!1sid!2sid\" width=\"100%\" height=\"100%\" style=\"border:0;border-radius: 10px;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_chat_wa`
--
ALTER TABLE `tbl_chat_wa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_gallery1`
--
ALTER TABLE `tbl_gallery1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_gallery2`
--
ALTER TABLE `tbl_gallery2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_gallery3`
--
ALTER TABLE `tbl_gallery3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_homeweb`
--
ALTER TABLE `tbl_homeweb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_katalog`
--
ALTER TABLE `tbl_katalog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_populer`
--
ALTER TABLE `tbl_populer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_set_hijab`
--
ALTER TABLE `tbl_set_hijab`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_website`
--
ALTER TABLE `tbl_website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_chat_wa`
--
ALTER TABLE `tbl_chat_wa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery1`
--
ALTER TABLE `tbl_gallery1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery2`
--
ALTER TABLE `tbl_gallery2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery3`
--
ALTER TABLE `tbl_gallery3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_homeweb`
--
ALTER TABLE `tbl_homeweb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_katalog`
--
ALTER TABLE `tbl_katalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_populer`
--
ALTER TABLE `tbl_populer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_set_hijab`
--
ALTER TABLE `tbl_set_hijab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_website`
--
ALTER TABLE `tbl_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
