-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 04:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan_purnama`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'Virgi', 'admin', 'Ayu Virgiana'),
(2, 'Purnama', 'admin', 'Ayu Purnama');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_produk` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `barcode` varchar(12) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `pengarang` varchar(40) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `tahun` int(11) NOT NULL,
  `halaman` varchar(20) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `resep_produk` varchar(100) NOT NULL,
  `stok_produk` int(5) NOT NULL,
  `isbn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_produk`, `foto_produk`, `barcode`, `nama_produk`, `deskripsi_produk`, `pengarang`, `penerbit`, `kategori`, `tahun`, `halaman`, `harga_beli`, `harga_jual`, `berat_produk`, `resep_produk`, `stok_produk`, `isbn`) VALUES
(1, 'tb5.jpg', 'B00000000001', 'Laskar Pelangi', ' Novel Laskar Pelangi bercerita tentang kehidupan 10 anak dari keluarga miskin yang bersekolah (SD dan SMP) di sebuah sekolah Muhammadiyah di Belitung yang penuh dengan keterbatasan. Mereka bersekolah dan belajar pada kelas yang sama dari kelas 1 SD sampai kelas 3 SMP, dan menyebut diri mereka sebagai Laskar Pelangi. Pada bagian-bagian akhir cerita, anggota Laskar Pelangi bertambah satu anak perempuan yang bernama Flo, seorang murid pindahan. Keterbatasan yang ada bukan membuat mereka putus asa, tetapi malah membuat mereka terpacu untuk dapat melakukan sesuatu yang lebih baik.', 'Andrea Hirata', 'Bentang Pustaka', 'Novel', 2005, '529', 40000, 50000, 500, 'tb5.jpg', 5, '9793062797'),
(2, '3thing.jpg', 'B00000000002', 'Things You Can See Only When You Slow Down: How to be Calm in a Busy World', 'Buku yang sedang populer ini sudah berhasil meraih penjualan mencapai lebih dari tiga juta eksemplar di Korea, dan menjadi buku best-seller selama 41 minggu, serta meraih berbagai penghargaan sebagai buku terbaik sepanjang tahun. Tidak hanya di Korea, juga populer kalangan masyarakat seluruh dunia. Maka itu, buku ini diterjemahkan ke dalam beberapa bahasa seperti bahasa Cina, bahasa Jepang, bahasa Inggris, bahasa Thailand, dan bahasa Perancis.', 'Haemin Sunim', 'Sinar Star Book', 'Kehidupan', 2019, '288', 175000, 200000, 500, '3thing.jpg', 5, '9780241340660'),
(3, 'tb3.jpg', 'B00000000003', 'Harry Potter', '  Novel Harry Potter', 'J.K. Rowling', '', '', 0, '', 0, 0, 0, 'tb3alt.jpg', 0, ''),
(4, 'coba1.jpg', 'B00000000004', ' Harry Potter and The Sorcerers Stone', '  Harry Potter and The Sorcerers Stone blablabla', 'a', 'a', 'a', 2000, '200', 10000, 13000, 500, 'coba1alt.jpg', 5, '1111111111111'),
(5, 'tb6.jpg', 'B00000000005', 'The Pale Horse', '   The Pale Horse blablabla', ' Agatha Christie', 'Gramedia Pustaka Utama', 'Novel', 2018, '336', 20000, 50000, 125000, 'tb6alt.jpg', 5, ' 9789792280142');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `gmail_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `gmail_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`) VALUES
(1, 'ayu10@gmail.com', 'pembeliayucantik', 'ayu', '081267856785'),
(2, 'purnama100@gmail.com', 'pembelipurnama', 'purnama', '081267575678'),
(3, 'virgiana1000@gmail.com', 'pembelivirgiana', 'virgiana', '083819085582'),
(6, 'lisablekping@gmail.com', 'lisablekping', 'lisa', '086765432111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
