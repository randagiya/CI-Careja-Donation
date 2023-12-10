-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 03:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_careja`
--

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `nama` varchar(100) NOT NULL COMMENT 'Nama Produk',
  `keterangan` mediumtext NOT NULL COMMENT 'Keterangan tentang produk',
  `gambar` varchar(100) NOT NULL COMMENT 'Gambar Produk',
  `tanggal_upload` date NOT NULL DEFAULT current_timestamp(),
  `tanggal_batas` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id`, `nama`, `keterangan`, `gambar`, `tanggal_upload`, `tanggal_batas`) VALUES
(1, 'Open Donasi Kegiatan Hi-PKM', 'Salam,\r\n\r\nYang kami hormati bapak/ibu dosen dan tendik, serta yang kami sayangi teman-teman mahasiswa. \r\n\r\nMeneruskan informasi, HIMASISTIFO Pengabdian kepada Masyarakat (HI-PKM) 2023 merupakan acara berbentuk kepedulian mahasiswa terhadap masyarakat dalam bidang sosial dengan memberikan jasa dan barang. Berlangsungnya kegiatan ini juga merupakan wadah untuk pengembangan kemampuan dan keterampilan sosial mahasiswa, serta salah satu bentuk rasa syukur.\r\nAkan dilakukan di Panti Asuhan Al Fajar Pekanbaru dengan berbagai kegiatan bermanfaat seperti, senam bersama, sarapan bersama, games,makan siang bersama, kreasi tie dye, renovasi mushola panti dan lain-lain. Rincian kegiatan dan kebutuhan biaya dapat dilihat pada lampiran pada email ini.\r\n\r\nBagi bapak/ibu, kakak/abang, teman-teman dan rekan-rekan yang memiliki rezeki lebih, dapat menyalurkannya melalui kami.\r\nDonasi dapat berupa:\r\n💵 Uang\r\n🍚 Sembako\r\n📖 Buku dan alat tulis\r\n👕 Pakaian', 'poster_donasi.png', '2023-06-18', '2023-07-15'),
(2, 'SEDEKAH DAGING', 'Hari Raya Idul Adha sebentar lagi dan ibadah qurban menjadi moment spesial bagi kita untuk mendekatkan diri kepada Allah SWT dan juga sebagai bentuk ketaatan terhada perintah-Nya. Oleh karena itu kami dari HIMAKSI PCR yang berkolaborasi dengan UKMI dan Human Initiative yaitu \" Sedekah Daging,berbagi daging untuk Indonesia\"\r\n\r\nSedekah Daging adalah suatu kegiatan program patungan qurban dimulai dari Rp10.000. Sedekah yang terkumpul dari hasil donasi ini akan di konversi ke hewan qurban oleh pihak', 'Flayer_Qurban.jpg', '2023-06-18', NULL),
(3, 'HIMATEL BERBAGI', 'Berjalan dengan rendah hati, berbicara dengan sopan, berpakaian rapi, memperlakukan sesama dengan baik, berdoa dengan penuh perhatian, menyumbang dengan murah hati.\r\nBulan Suci Ramadhan merupakan momen yang tepat bagi kita untuk dapat menyempurnakan kebaikan kita, salah satunya adalah dengan bersedekah atau berbagi kepada saudara-saudara kita yang membutuhkan perhatian, bantuan dan berbagi kebahagiaan dibulan yang penuh berkah ini. Uluran tangan kita sangat dinantikan untuk mereka yang membutuhkan.\r\n\r\nHIMATEL berkolaborasi bersama Human Initiative Riau kali ini memberikan kesempatan bagi teman-teman semua untuk dapat menyisihkan sedikit rezekinya yang mana nantinya akan disalurkan kepada saudara atau teman-teman kita yang membutuhkan.', 'HIMATEL BERBAGI.jpeg', '2023-06-18', '2023-07-13'),
(4, ' ITSA PEDULI KASIH\r\n', 'Di bulan Syawal yang penuh berkah ini, kami dari panitia ITSA PEDULI KASIH ingin mengajak kita semua untuk berbagi kebahagiaan dengan anak yatim piatu dengan menyisihkan uang, sembako, dan pakaian seikhlasnya untuk didonasikan kepada anak yatim piatu di panti asuhan terdekat. Acara ini akan dilaksanakan pada:\r\n\r\nHari, Tanggal : Kamis, 18 Mei 2023\r\nWaktu : 08.00 WIB - Selesai\r\nTempat : Panti Asuhan Al  Hikmah\r\n\r\nOleh karena itu, kami membuka wadah donasi bagi siapapun yang ingin menyumbangkan sebagian rezeki untuk acara berbagi ini.', 'Poster Donasi Online Panti (1).png', '2023-06-18', NULL),
(5, 'HIMAKSI RAMADHAN', 'Assalamualaikum Warahmatullahi Wabarakatuh.\r\nSelamat Sore dan Salam Sejahtera untuk kita semua.\r\n\r\nSemoga tetap semangat menjalankan ibadah puasanya sampai akhir✨\r\n\r\nAda kabar gembira nih, HIMAKSI (Himpunan Mahasiswa Akuntansi) sedang open donasi untuk kamu yang ingin beramal di bulan suci ini.\r\n\r\nNah pasti sudah tahu kelebihan beramal baik di bulan Ramadhan, kan? udah pada tau belum?\r\nInsyaallah pahalanya lebih banyak, dilipatgandakan oleh Allah SWT, tentunya dengan niat yang ikhlas✨\r\n\r\nDalam waktu dekat ini HIMAKSI akan mengadakan Program Himaksi Ramadhan di bulan suci Ramadhan Ini. Apasih program himaksi Ramadhan itu? Program Himaksi Ramadhan merupakan kegiatan sosialisasi ke panti asuhan memberikan sembako ke panti asuhan dan memberikan takjil kepada kaum dhuafa juga.\r\n\r\nSebab itu kami membuka open donasi untuk panti asuhan dan juga berbagi takjil. Mari sumbangkan sebagian rezeki kita dan berbagi kebahagiaan serta senyuman untuk mereka yang membutuhkan', 'Poster HIMAKSI RAMADHAN.jpeg', '2023-06-18', '2023-07-10'),
(6, 'RAMADHAN BERBAGI\r\n', 'Assalamualaikum warahmatullahi wabarakatuh\r\nShalom\r\nOm Swastiastu\r\nNamo Buddhaya\r\nSalam Kebajikan\r\n\r\n\r\nHidup Mahasiswa!\r\nViva Legislativa!\r\n\r\nSehubung dengan dilaksanakannya program BLM PCR X BEM PCR yaitu \"RamBer\" Ramadhan Berbagi dengan Tema Berharga(Berbagi Harta dan Tenaga) di bulan Ramadhan , Yang mana donasi yang terkumpul selama bulan Ramadhan akan diberikan untuk saudara kita yang membutuhkan. Untuk itu dalam program ini BLM dan BEM melakukan Collaboration mengadakan Open Donasi yang bersifat umum, terkhusus bagi mahasiswa PCR.\r\n\r\n📌 Periode Open Donasi : 2 - 14 April\r\n📌 Penyerahan Donasi : Sekre BLM\r\n\r\n📍 Untuk Donasi Uang bisa melalui :\r\n• No.Rek. 1080025143612\r\nA.N : Tya Iwani Putri\r\nMANDIRI\r\n• No.rek . 808901004130532\r\nA.N : Tya Iwani Putri\r\nBRI\r\n• Dana\r\n082290498707\r\n\r\nInfo konfirmasi pemberian donasi ataupun pertanyaan lain\r\nContact Person :\r\nPutri Aisyah Meyuka : 085943572994\r\nFavian Hugo Dimitri: 082273147475\r\n\r\nYuk siapkan donasi terbaikmu untuk saudara kita yang membutuhkan.\r\n\r\nSemoga donasi yang kita berikan menjadi amal ibadah yang terus mengalir dan menjadi manfaat bagi saudara yang menerimanya.\r\n\r\nDemikian informasi ini kami sampaikan.\r\nTerimakasih atas perhatiannya.\r\nWassalamu\'alaikum warahmatullahi Wabarakatuh\r\n', 'Poster Ramber.png', '2023-06-18', '2023-06-10'),
(7, 'ITSA PEDULI', 'Assalamualaikum Warahmatullahi Wabarakatuh, Shalom, Om Swastiastu, Namo Buddhaya, Salam Kebajikan. Hidup Mahasiswa!!!  Selamat Pagi untuk rekan-rekan sekalian.  Semoga kita selalu dalam keadaan sehat wal\'afiat serta dalam lindungan-Nya.    ITSA PEDULI merupakan kegiatan sosial yang akan dilakukan ke panti asuhan yaitu panti asuhan Kemuliaan. Dengan kegiatan tersebut diharapkan dapat menjadi wadah sekaligus sarana untuk kita berbagi terhadap sesama kita yang membutuhkan dan dengan kita berbagi bisa menjadi ladang amal bagi kita semua.    Dengan adanya kegiatan tersebut, sebagai bentuk dukungan dan untuk menyukseskan program “ITSA PEDULI”  ini kami memohon kesediaan kakak/abang untuk berpartisipasi menjadi donatur untuk saudara/i kita yang berada di Panti Asuhan Kemuliaan.  Donasi dapat berupa :  - Uang   - Pakaian   - Barang  - Makanan  Dan lainnya    Untuk donasi berupa uang, dapat ditransfer ke nomor rekening yang tersedia di poster, dan untuk barang barang lainnya dapat menghubungi nomor yang tertera di poster. ', 'Poster-itsapeduli1.jpg', '2023-07-02', '2023-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `id_user` int(11) NOT NULL COMMENT 'Foreign Key dari tabel user',
  `id_donasi` int(11) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `id_user`, `id_donasi`, `gambar`, `tanggal`) VALUES
(7, 10, 1, 'bukti1.jpg', '2023-06-19'),
(12, 10, 2, 'buktimandiri.jpg', '2023-06-19'),
(13, 10, 3, 'bukti-transfer-bri-mobile.jpg', '2023-06-19'),
(18, 10, 5, '7a2a54914b7408dbceb49246b0de929f.jpg', '2023-07-02'),
(22, 10, 4, 'bukti-transfer-gopay-ke-gopay.jpg', '2023-07-02'),
(23, 10, 3, 'Emm7LucW4AMEVrB.jpg', '2023-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL COMMENT 'Id Login atau Register',
  `nama` varchar(100) NOT NULL COMMENT 'Nama Admin atau User',
  `email` varchar(100) NOT NULL COMMENT 'Email User atau Admin untuk Login atau Register',
  `password` varchar(100) NOT NULL COMMENT 'Password Admin atau User untuk Login atau Register',
  `role` varchar(100) NOT NULL DEFAULT 'User' COMMENT 'Hak akses untuk halaman admin atau user',
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role`, `date_created`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$EfZ4TMg1NhVfi7QZvYKDyu7ELafxKfYGfznUtdWLNc9uzLVT38Gzi', 'Admin', 1657300123),
(10, 'putra', 'putra@gmail.com', '$2y$10$2AWLr3O/GSzuDk6d6i0VjOpEzS1lWiEl7JPsKDGRdFC2QUWiNWsWW', 'User', 1687001809),
(13, 'randa', 'randa@gmail.com', '$2y$10$m6pyG9FNT3x71wifylDMFOdI5RDZds6ODRGB51zNT4.ad6K5LqTte', 'User', 1688293253);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user2` (`id_user`),
  ADD KEY `fk_id_donasi` (`id_donasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id Login atau Register', AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `fk_id_donasi` FOREIGN KEY (`id_donasi`) REFERENCES `donasi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
