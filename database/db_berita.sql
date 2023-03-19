-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 04:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_img` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_img`, `nama`) VALUES
(21, 'hfefw.jpg'),
(22, 'pantai.jpg'),
(23, 'WhatsApp Image 2023-01-06 at 22.28.39.jpg'),
(24, 'WhatsApp Image 2023-01-06 at 22.28.40 (1).jpg'),
(25, 'WhatsApp Image 2023-01-06 at 22.28.40 (2).jpg'),
(26, 'WhatsApp Image 2023-01-06 at 22.28.40.jpg'),
(27, 'WhatsApp Image 2023-01-06 at 22.28.41 (1).jpg'),
(28, 'WhatsApp Image 2023-01-06 at 22.28.41.jpg'),
(29, 'WhatsApp Image 2023-01-06 at 22.28.42 (1).jpg'),
(30, 'WhatsApp Image 2023-01-06 at 22.28.42 (2).jpg'),
(31, 'WhatsApp Image 2023-01-06 at 22.28.42.jpg'),
(32, 'WhatsApp Image 2023-01-06 at 22.28.43 (1).jpg'),
(33, 'WhatsApp Image 2023-01-06 at 22.28.43.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kebijakan`
--

CREATE TABLE `tbl_kebijakan` (
  `id` int(25) NOT NULL,
  `pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kebijakan`
--

INSERT INTO `tbl_kebijakan` (`id`, `pdf`) VALUES
(1, 'kebijakan.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kependudukan`
--

CREATE TABLE `tbl_kependudukan` (
  `id` int(9) NOT NULL,
  `nama_dusun` varchar(50) NOT NULL,
  `jumlah_kk` int(50) NOT NULL,
  `laki_laki` int(50) NOT NULL,
  `perempuan` int(50) NOT NULL,
  `jumlah_jiwa` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kependudukan`
--

INSERT INTO `tbl_kependudukan` (`id`, `nama_dusun`, `jumlah_kk`, `laki_laki`, `perempuan`, `jumlah_jiwa`, `total`) VALUES
(1, 'Beringin Dua', 43, 4343, 24, 42, 34),
(2, 'Bujang Salim', 321, 32, 12, 32, 12),
(3, 'Bujang Salim', 321, 32, 12, 32, 12),
(4, 'Cot Trieng', 40, 4343, 24, 100, 34);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lvuser`
--

CREATE TABLE `tbl_lvuser` (
  `id_lvuser` int(10) NOT NULL,
  `leveluser` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lvuser`
--

INSERT INTO `tbl_lvuser` (`id_lvuser`, `leveluser`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organisasi`
--

CREATE TABLE `tbl_organisasi` (
  `id` int(25) NOT NULL,
  `pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_organisasi`
--

INSERT INTO `tbl_organisasi` (`id`, `pdf`) VALUES
(1, 'STRUKTUR ORGANISASI PEMERINTAHAN.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peraturan`
--

CREATE TABLE `tbl_peraturan` (
  `id` int(25) NOT NULL,
  `pdf` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_peraturan`
--

INSERT INTO `tbl_peraturan` (`id`, `pdf`) VALUES
(1, 'Peraturan_Daerah.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `id_post` int(25) NOT NULL,
  `img` varchar(255) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `artikel` text DEFAULT NULL,
  `date` date NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`id_post`, `img`, `judul`, `artikel`, `date`, `kategori`, `author`) VALUES
(26, 'pantai.png', 'Wisata Pantai Utara Krukuh', 'Banyak sekali wisata yg ada di Krukuh, namun yang paling terkenal ialah wisata pantainya, yang pantai disekitaran krukuh sangatlah indah, karena memiliki dataran pantai yang cukup luas dan bersih serta fasilitas penunjang untuk para wisatawan semakin betah ada juga, contohnya seperti banana boat, motor atv, motor cross, dan lainya. Dan jika anda lapar ataupun haus, maka anda tidak perlu jauh-jauh untuk mencari makanan atau minuman, karena disekitaran pinggir pantai tersebut sudah banya para pedagang yang siap menemani wisata anda, Have enjoy.', '2023-01-05', 'info-umum', 'RidhoesArt'),
(27, 'ikut serta mengamati sayuran polyback bersama dosen pembimbing lp.jpg', 'Ikut Serta Dalam Pengamatan Sayuran Berbasis Polyback Bersama Dosen Pembimbing Lapangan', 'Observasi yang dilakukan oleh dosen pembingbing lapangan KKNT-12 yakni bapak Said Jalilul Akbar pada perkembangan tanaman yang ditanam menggunakan polyback ekosistem yang ditanam oleh mahasiswa KKNT-12 Unimal. Ada beberapa jenis sayuran yang ditanam oleh mahasiswa KKNT-12 Unimal, salah satunya ialah sayuran kangkung, pakcoi, seledri, sawi dan lainnya. Penanaman sayuran menggunakan polyback system juga tidak kalah baik dalam manuai hasil sayurannya, dengan keperluan lahan yang tidak besar siapapun dapat menanam dan menikmati sayuran yang ia tanam dengan kualitas yang tidak kalah jauh dengan sayuran yang ditanam menggunakan metode tanah.', '2023-01-22', 'info-umum', 'RidhoesArt'),
(28, 'membantu maulid nabi di kantor lurah.jpg', 'Mahasiswa KKNT kelompok 12 Ikut Serta Dalam Menyukseskan Maulid Nabi Muhammad SAW di Kantor Camat Dewantara', 'Mahasiswa KKNT-12 Unimal Ikut serta dalam mensukseskan maulid nabi Muhammad SAW di kantor camat Dewantara, maulid nabi Muhammad SAW adalah sebuah kegiatan tahunan yang diadakan di kantor camat Dewantara, namun maulid nabi kali ini berbeda dengan maulid nabi yang telah diadakan sebelumnya, pasalnya pada maulid nabi Muhammad SAW kali ini melibatkan mahasiswa Unimal dalam pelaksanaanya, tepatnya KKNT kalompok 12 yang sudah bersinergi ikut serta dalam menyukseskan maulid tersebut dengan menyumbang tenaga maupun waktu dan pikiran.', '2023-01-22', 'info-umum', 'RidhoesArt'),
(29, 'WhatsApp Image 2023-01-22 at 21.46.42.jpg', 'Hasil Panen Bermacam Jenis Sayuran Dengan Menggunakan Metode Polyback Oleh  Mahasiswa KKNT-12 Unimal', 'Sayur yang indah dan segar tidak datang begitu saja, begitula kira-kira gambaran dari hasil kegiatan penanaman sayuran yang dilakukan oleh mahasiswa KKNT-12 Unimal. Pasalnya sayuran yang ditanam oleh mahasiswa KKNT-12 Unimal sudah menjadi sayuran yang layak dan baik untuk dikonsumsi. Dengan hasil sayuran yang ditanam menggunakan metode Polyback yang tidak kalah dari penanaman sayur menggunakan metode tanah, maka penanaman sayur menggunakan metode Polyback diharapkan menjadi solusi bagi siapapun masyarakat yang tidak memiliki lahan yang luas, terutama masyarakat Desa Keude Krueng Geukueh, yang mana masyarakat desa tersebut tidak memiliki lahan yang memadai untuk penanaman sayuran menggunakan metode tanah ', '2023-01-22', 'info-umum', 'RidhoesArt'),
(30, 'WhatsApp Image 2023-01-22 at 21.46.54.jpg', 'Hasil Dari Pembuatan Paving Blok Oleh Mahasiswa Unimal Yang Disaksikan Oleh Geuchik Keude Krueng Geukueh', 'Inovasi tanpa batas, itulah kata yang pantas disematkan kepada kelompok 12 KKNT Unimal, bukan tanpa alasan, mahasiswa KKNT-12 Unimal membuat sebuah inovasi baru dalam pengganti batu batako secara fungional yakni membuat  sebuah Paving Blok dengan menggunakan bahan dasar utama plastik. Paving Blok menggunakan bahan dasar plastik bukan hanya bermanfaat untuk pengadaan pengganti batako saja, namun juga berdampak besar pada pengurangan sampah yang ada, terkhusus pada kasus ini ialah di Desa Kaude Krueng Geukueh, yang mana desa tersebut sudah terkenal dengan tumpukan sampah dimana-mana dan masalah tersebut tidak terselesaikan selama beberapa tahun belakangan, namun dengan adanya inovasi yang telah diciptakan oleh mahasiswa KKNT-12 Unimal, maka diharapkan dapat menjadi solusi dari permasalahan sampah yang ada di Desa Keude Krueng Geukueh, minimal dapat meminimalisir tumpukan sampahnya. ', '2023-01-22', 'info-umum', 'RidhoesArt'),
(31, 'WhatsApp Image 2023-01-22 at 21.46.37.jpg', 'Ikut Serta Dalam Pengamatan Sayuran Berbasis Polyback Bersama Dosen Pembimbing Lapangan', 'Observasi yang dilakukan oleh dosen pembingbing lapangan KKNT-12 yakni bapak Said Jalilul Akbar pada perkembangan tanaman yang ditanam menggunakan polyback ekosistem yang ditanam oleh mahasiswa KKNT-12 Unimal. Ada beberapa jenis sayuran yang ditanam oleh mahasiswa KKNT-12 Unimal, salah satunya ialah sayuran kangkung, pakcoi, seledri, sawi dan lainnya. Penanaman sayuran menggunakan polyback system juga tidak kalah baik dalam manuai hasil sayurannya, dengan keperluan lahan yang tidak besar siapapun dapat menanam dan menikmati sayuran yang ia tanam dengan kualitas yang tidak kalah jauh dengan sayuran yang ditanam menggunakan metode tanah.', '2023-01-23', 'berita', 'RidhoesArt'),
(32, 'membantu maulid nabi di kantor lurah.jpg', 'Ikut Serta Mahasiswa KKT-12 Unimal Pada Acara Maulid Nabi Di Rumah Dinas Camat', 'Penyelengggaran maulid nabi Muhammad SAW yang di adakan di rumah dinas kecamatan desa Keude Krueng Geukueh sukses diselenggarakan dengan baik. Hal tersebut tidak terlepas dari ke ikutsertaan mahasiswa Unimal KKNT-12 dalam memberikan bantuan berupa tenaga dan pikiran, yang mana kita mengetahui adanya balasan dari Allah atas perbuatan baik maupun jahat yang kita lakukan, maka dari itu kegiatan maulid tersebut memberi dampak positive bagi siapa saja yang ikut serta didalamnya, selagi perayaan tersebut tidak menyalahi aturan agama islam. ', '2023-01-24', 'berita', 'RidhoesArt'),
(33, 'WhatsApp Image 2023-01-22 at 21.46.42.jpg', 'Pemanenan Berbagai Jenis Sayuran Hasil Penanaman Dan Ekosistem Hydroponik Oleh Mahasiswa KKNT-12 Unimal', 'Panen sayuran segar hasil dari hydroponik system yang ditanam oleh mahasiswa KKNT-12 Unimal, dengan memanfaatkan lahan yang tidak luas, maka siapapun dapat berkebun dengan menggunakan  hydroponik system. Bukan hanya wacana semata, mahasiswa KKNT-12 telah membuktikan bahwa penanaman sayuran menggunakan metode hydroponik tidak memiliki hasil panen yang tidak kalah baik daripada penanaman menggunakan metode tanah. Modal utama dalam penanaman sayuran menggunakan system hydroponik memang cukup besar, namun hal sesuai dengan apa yang didapatkan, karena biaya yang besar hanya dimodal awalnya saja, setelah itu maka perawatan selanjutnya akan mudah dan pastinya tidak kalah menguntukngkan apabila ingin dipasarkan dibandingkan menggunakan system tanah. Dengan adanya praktek penanaman tersebut, mahasiswa KKNT-12 akan memberikan pelatihan untuk melakukan penanaman sayuran menggunakan system hydroponik serta berharap inovasi berikut dapat di implementasikan olah masyarakat Desa Keude Krueng Geukueh, yang dimana adalah tempat kknt kelompok 12 unimal.', '2023-01-24', 'berita', 'RidhoesArt'),
(34, 'WhatsApp Image 2023-01-27 at 02.22.33.jpg', 'Laga Persahabatan Antara Gecik FC vs Aparatur Desa Di Lapangan Futsal Depan Polsek ', 'Pertandingan persahabatan antara gecik fc vs aparatur desa, yang mana gecik fc diisi pemain-pemain dari KKNT-12 Unimal. Pertandingan ini dilaksanakan guna mempererat hubungan persaudaraan antara mahasiswa KKNT-12 dengan para masyarakat Desa Keude Krueng Geukueh. Pertandingan berlangsung meriah, dengan disaksikan oleh banyak masyarakat Keude krueng Geukueh.', '2023-01-26', 'berita', 'RidhoesArt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sejarahpemimpin`
--

CREATE TABLE `tbl_sejarahpemimpin` (
  `id` int(11) NOT NULL,
  `priode` varchar(50) NOT NULL,
  `nama_geuchik` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sejarahpemimpin`
--

INSERT INTO `tbl_sejarahpemimpin` (`id`, `priode`, `nama_geuchik`, `keterangan`) VALUES
(1, '1990-1995', 'Ummi Kalsum', ''),
(2, '1997-2007', 'H. M. Yasin H. Ishak', ''),
(3, '2007-2010', 'Yuhelmi Yunus, Bsc', ''),
(4, '2010-2015', 'Rusli Ibrahin', ''),
(5, '2016-2022', 'Ardi Ilyas', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(255) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `id_lvuser` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `username`, `password`, `nama_pengguna`, `img`, `id_lvuser`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'RIDHOESART ', 'HD-wallpaper-monkey-d-luffy-portrait-artwork-manga-one-piece.jpg', 1),
(2, 'user', '5d8a8a118ab27197bd9689846e67131f', 'Nopek', 'avatar2.png', 2),
(32, 'isa', '165a1761634db1e9bd304ea6f3ffcf2b', 'Isa Nur', 'avatar4.png', 2),
(33, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Hus', 'avatar4.png', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_img`);

--
-- Indexes for table `tbl_kebijakan`
--
ALTER TABLE `tbl_kebijakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kependudukan`
--
ALTER TABLE `tbl_kependudukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lvuser`
--
ALTER TABLE `tbl_lvuser`
  ADD PRIMARY KEY (`id_lvuser`);

--
-- Indexes for table `tbl_organisasi`
--
ALTER TABLE `tbl_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_peraturan`
--
ALTER TABLE `tbl_peraturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `tbl_sejarahpemimpin`
--
ALTER TABLE `tbl_sejarahpemimpin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `tbl_users_ibfk_1` (`id_lvuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_kebijakan`
--
ALTER TABLE `tbl_kebijakan`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kependudukan`
--
ALTER TABLE `tbl_kependudukan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_lvuser`
--
ALTER TABLE `tbl_lvuser`
  MODIFY `id_lvuser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_organisasi`
--
ALTER TABLE `tbl_organisasi`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_peraturan`
--
ALTER TABLE `tbl_peraturan`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `id_post` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_sejarahpemimpin`
--
ALTER TABLE `tbl_sejarahpemimpin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`id_lvuser`) REFERENCES `tbl_lvuser` (`id_lvuser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
