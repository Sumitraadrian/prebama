-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jan 2021 pada 05.52
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpenew`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id_brand` int(10) NOT NULL,
  `nama_brand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_brand`
--

INSERT INTO `tbl_brand` (`id_brand`, `nama_brand`) VALUES
(1, ' Xiaomiaa'),
(2, 'Samsung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id_feedback` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_penjual` int(10) NOT NULL,
  `isi_feedback` text NOT NULL,
  `tgl_feedback` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id_feedback`, `id_user`, `id_penjual`, `isi_feedback`, `tgl_feedback`) VALUES
(8, 4, 3, 'sdfas', '2021-01-10'),
(9, 4, 3, 'Barangnya bagus sesuai pesanan', '2021-01-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kabupaten`
--

CREATE TABLE `tbl_kabupaten` (
  `id_kabupaten` int(10) NOT NULL,
  `nama_kabupaten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kabupaten`
--

INSERT INTO `tbl_kabupaten` (`id_kabupaten`, `nama_kabupaten`) VALUES
(1, 'Sleman'),
(2, 'Gunungkidul'),
(3, 'Bantul'),
(4, 'Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komen`
--

CREATE TABLE `tbl_komen` (
  `id_komen` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `isi_komen` text NOT NULL,
  `tgl_komen` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_komen`
--

INSERT INTO `tbl_komen` (`id_komen`, `id_user`, `id_produk`, `isi_komen`, `tgl_komen`) VALUES
(39, 4, 37, 'awdwa', '2020-12-13'),
(44, 4, 35, 'wad', '2021-01-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konfirmasi`
--

CREATE TABLE `tbl_konfirmasi` (
  `id_konfirmasi` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_konfirmasi` varchar(50) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_konfirmasi`
--

INSERT INTO `tbl_konfirmasi` (`id_konfirmasi`, `id_user`, `status_konfirmasi`, `id_produk`, `date`) VALUES
(62, 4, 'bayar', 35, '2020-12-12'),
(69, 6, 'bayar', 37, '2020-12-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_brand` int(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `nama_p` varchar(200) NOT NULL,
  `layar` varchar(100) NOT NULL,
  `cpu` varchar(100) NOT NULL,
  `kamera` varchar(100) NOT NULL,
  `battrey` varchar(100) NOT NULL,
  `lama_pemakaian` varchar(100) NOT NULL,
  `gambar1` varchar(100) NOT NULL,
  `gambar2` varchar(100) NOT NULL,
  `gambar3` varchar(100) NOT NULL,
  `detail` text NOT NULL,
  `tgl_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `id_user`, `id_brand`, `harga`, `nama_p`, `layar`, `cpu`, `kamera`, `battrey`, `lama_pemakaian`, `gambar1`, `gambar2`, `gambar3`, `detail`, `tgl_post`) VALUES
(35, 2, 1, 1100000, 'Xiaomi Redmi Note 4x Snapdragon ', '5.5 inches', 'Qualcomm MSM8953 Snapdragon 625 (14 nm)', '13 MP', '4100 mAh', '-+ Dua setengah tahun', 'g1.jpg', 'g2.jpg', 'g3.jpg', 'Barang Muluss no minuss bonus softcase.\r\nMinta bisa langsung japri wa.\r\nMau COD an atau pakai rekber bisa, kirim - kirim wilayah jogja only\r\n                                        ', '2020-12-17'),
(37, 3, 2, 3090000, 'SAMSUNG GALAXY S8 64GB Second Seken Mulus Fullset', '5.8 inches', 'Exynos 8895 (10 nm) ', '12 MP', '3000 mAh', '-+ 2 tahun', 'ga1.jpeg', 'ga2.jpeg', 'g3.jpeg', 'Deskripsi SAMSUNG GALAXY S8 64GB Second Seken Mulus Fullset\r\nSAMSUNG GALAXY S8 INTERNAL 64 RAM 4GB\r\n\r\nKelengkapan Produk :\r\n* Smartphone\r\n* Box\r\n* Earphone\r\n* Charger + Cable\r\n* Manual Book\r\n\r\nUntuk pertanyaan lebih lanjut bisa chat atau pun menghubungi Wa \r\nUntuk kirim kirim bisa pakai rekber, Yogyakarta only\r\n\r\n\r\n                                        ', '2020-12-14'),
(43, 10, 1, 1500000, 'Redmi Note 5 Pro 4/64like new', '5,5 inch', 'Snapdragon 636', '12 mp', '4000mah', '-+ 2 bulan', 'WhatsApp Image 2020-12-31 at 9.51.15 AM.jpeg', 'WhatsApp Image 2020-12-31 at 9.51.16 AM.jpeg', 'WhatsApp Image 2020-12-31 at 9.51.15 AM (1).jpeg', 'Mulusss udah ada cast monggo yang mau datang ke toko langsung atau kirim\" via rekber \r\n                                        ', '2021-01-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `id_konfirmasi` int(10) NOT NULL,
  `id_pembeli` int(10) NOT NULL,
  `id_penjual` int(10) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `tgl_tansaksi` date NOT NULL,
  `tgl_tenggat` date NOT NULL,
  `bukti_bayar` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_konfirmasi`, `id_pembeli`, `id_penjual`, `id_produk`, `tgl_tansaksi`, `tgl_tenggat`, `bukti_bayar`, `keterangan`, `status`) VALUES
(102, 62, 4, 2, 35, '2020-12-12', '2020-12-13', 'Struk ATM Untuk Modus Tipu2.jpg', 'Mohon barang segera dikirimm\r\n                                        ', 'selesai'),
(108, 69, 6, 3, 37, '2020-12-18', '2020-12-19', NULL, NULL, 'bayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `id_kabupaten` int(10) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `status_user` varchar(50) NOT NULL,
  `tgl_gabung` date DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `notlp` varchar(100) DEFAULT NULL,
  `detail_alamat` text DEFAULT NULL,
  `fotop` varchar(100) DEFAULT NULL,
  `norek` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_kabupaten`, `username`, `email`, `password`, `level`, `status_user`, `tgl_gabung`, `nama_lengkap`, `notlp`, `detail_alamat`, `fotop`, `norek`) VALUES
(1, 3, 'admin', 'admin@gmail.com', 'admin', 'admin', 'aktif', '2020-12-21', NULL, NULL, NULL, NULL, NULL),
(2, 1, 'JuraganHP', 'Juragan@gmail.com', '123', 'penjual', 'aktif', '2020-12-12', 'Juragan Hp jogja', '0895396785047', 'Konter Bealakang Amikom\r\n                                        ', '3799201_201811250822500214.jpg', '3445345565'),
(3, 2, 'KandidatCell', 'Kandidat@gmail.com', '123', 'penjual', 'aktif', '2020-12-12', 'Kandidat Cell Gunung Kidul', '0818296784056', 'Kandidat konter belakang alun alun gunung kidul\r\n                                        ', '69185852.jpg', '4536456456456'),
(4, 2, 'Wahyu', 'wahyu.0550@students.amikom.ac.id', '123', 'pembeli', 'aktif', '2020-12-12', 'Wahyu Nugroho', '0895396784047', 'awsdawd\r\n                                        ', 'meong.png', '345345345345'),
(5, 2, 'Tes', 'nueg44@gmail.com', '123', 'penjual', 'aktif', '2020-12-13', 'Tess', '0895396784047', 'dwadwadawdaw\r\n                                        ', 'meong.png', '546456675656'),
(6, 3, 'pembeli1', 'nueg44@gmail.com', '123', 'pembeli', 'aktif', '2020-12-14', 'Rendra WIcv', '0895396784047', 'awdwadawdaw\r\n                                        ', 'animated_anime_wallpaper_006.jpg', '546456675656'),
(9, 1, 'aaa', 'nueg44@gmail.com', '123', 'pembeli', 'aktif', '2020-12-22', 'Wahyu Nugroho', '0895396784047', 'dwadwad\r\n                                        ', '3799201_201811250834510243.png', '546456675656'),
(10, 4, 'Jayacell', 'Jayacell@gmail.com', '123', 'penjual', 'aktif', '2021-01-01', 'Jaya Cell Yogyakarta', '090998766878', 'Belakang kampus UPN yogyakarta\r\n                                        ', 'Jayacell.jpg', '3242345243313');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indeks untuk tabel `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tbl_kabupaten`
--
ALTER TABLE `tbl_kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indeks untuk tabel `tbl_komen`
--
ALTER TABLE `tbl_komen`
  ADD PRIMARY KEY (`id_komen`),
  ADD KEY `id_user` (`id_user`,`id_produk`),
  ADD KEY `tbl_komen_ibfk_2` (`id_produk`);

--
-- Indeks untuk tabel `tbl_konfirmasi`
--
ALTER TABLE `tbl_konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`),
  ADD KEY `id_user` (`id_user`,`id_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_konfirmasi` (`id_konfirmasi`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_kabupaten` (`id_kabupaten`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id_brand` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id_feedback` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_kabupaten`
--
ALTER TABLE `tbl_kabupaten`
  MODIFY `id_kabupaten` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_komen`
--
ALTER TABLE `tbl_komen`
  MODIFY `id_komen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `tbl_konfirmasi`
--
ALTER TABLE `tbl_konfirmasi`
  MODIFY `id_konfirmasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD CONSTRAINT `tbl_feedback_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_komen`
--
ALTER TABLE `tbl_komen`
  ADD CONSTRAINT `tbl_komen_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`),
  ADD CONSTRAINT `tbl_komen_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_konfirmasi`
--
ALTER TABLE `tbl_konfirmasi`
  ADD CONSTRAINT `tbl_konfirmasi_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`),
  ADD CONSTRAINT `tbl_konfirmasi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD CONSTRAINT `tbl_produk_ibfk_1` FOREIGN KEY (`id_brand`) REFERENCES `tbl_brand` (`id_brand`),
  ADD CONSTRAINT `tbl_produk_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`id_konfirmasi`) REFERENCES `tbl_konfirmasi` (`id_konfirmasi`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`id_kabupaten`) REFERENCES `tbl_kabupaten` (`id_kabupaten`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
