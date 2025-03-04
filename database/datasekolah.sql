-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2025 at 07:54 AM
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
-- Database: `sma1`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `idberita` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`idberita`, `judul`, `isi`, `foto`) VALUES
(1, 'UJIAN PRAKTEK SMAN 7 YOGYAKARTA', 'Sebagai syarat kelulusan, pastinya bagi peserta didik, sudah tidak asing dengan yang\r\nnamanya Ujian Praktik atau di kalangan siswa siswi biasanya disingkat menjadi UPRAK. Ujian\r\nPraktik ini disesuaikan dengan mata pelajaran selama tiga tahun pembelajaran di sekolah.\r\n\r\nSelama seminggu mulai dari tanggal 6-10 Februari 2023, siswa siswi kelas 12 SMAN 8\r\nTernate melaksanakan Ujian Praktik mereka. Di kelas IPA, ada praktikum di laboratorium\r\npada mata pelajaran IPA bidang Biologi, Fisika, dan Kimia. Untuk kelas IPS, pada mata\r\npelajaran IPS tidak ada Ujian Praktik. Tetapi tetap ada praktik di mata pelajaran di luar mata\r\npelajaran IPS seperti membuat video berbicara menggunakan Bahasa Jerman. Selain mata\r\npelajaran di setiap jurusan, seluruh kelas 12 mendapatkan ujian yang sama. Praktik memasak\r\npada mata pelajaran PKWU, melakukan serangkaian olahraga pada mata pelajaran PJOK,\r\nmembuat video materi Bahasa Jawa, membuat kritik karya pada mata pelajaran Bahasa\r\nIndonesia, dan praktik sholat jenazah pada mata pelajaran Pendidikan Agama Islam.\r\n\r\nPada UPRAK kali ini, ada praktik yang paling menarik yaitu ketika siswa siswi kelas 12\r\nmelakukan praktik mata pelajaran Seni Budaya. Seluruh kelas 12 dibagi menjadi dua kelompok,\r\nkelompok seni lukis dan kelompok seni musik. Pada kelompok seni lukis, yaitu kelas XII MIPA\r\n1, XII MIPA 2, XII MIPA 3, dan XII MIPA 4, mereka diminta untuk membuat lukisan yang akan\r\ndipamerkan di masing-masing kelas. Lalu untuk kelompok seni musik, kelas XII MIPA 5, XII\r\nMIPA 6, XII IPS 1, dan XII IPS 2, mereka menampilkan dua buah lagu menggunakan instrumen\r\npianika, seruling, gitar, bass, drum, dan keyboard di Bangsal Wiyata Mandala.\r\n\r\nPelaksanaan UPRAK mata pelajaran Seni Budaya dilakukan pada Jumat, 10 Februari\r\n2023, yang disaksikan seluruh warga sekolah. Penampilan musik pertama dari XII MIPA 6,\r\nkemudian XII IPS 1, XII MIPA 5, dan terakhir XII IPS 2. Bersamaan dengan penampilan musik,\r\nkelompok seni lukis memamerkan lukisan mereka. Ada tema khusus yang diberikan, yaitu XII\r\nMIPA 1 dengan tema “Degradasi Budaya”, XII MIPA 2 dengan tema “Cerita Rakyat”, XII MIPA\r\n3 bertema “Andai Aku Jadi”, dan XII MIPA 4 bertema “Fantasi”. Ujian Praktik kelas 12 diakhiri\r\noleh Remuk Yo Band, sebuah band milik guru SMAN 8 Ternate. Dengan itu juga Ujian\r\nPraktik kelas 12 telah berakhir.', 'img1.jpg'),
(2, 'Uji Coba Model Literasi Sosial Budaya Jenjang SMA', 'Sesuai dengan edaran dari Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi pada tanggal 26 dan 27 Oktober 2022 SMA Negeri 8 Ternate sebagai salah satu sekolah yang ditunjuk untuk mengikuti kegiatan Uji Coba Model Literasi Sosial Budaya Jenjang SMA yang berada di Kota Yogyakarta. Kegiatan tersebut dilakukan secara daring dengan melibatkan 80 peserta didik kelas XI di SMA Negeri 8 Ternate.\r\nKegiatan ini bertujuan untuk menguji cobakan instrumen literasi sosial budaya yang akan dilakukan oleh kementerian. Berkembangnya teknologi yang sangat cepat ini tentu akan mempengaruhi tingkat pengetahuan yang akan didapatkan, khususnya di kalangan pelajar. Sangat penting budaya literasi ini apabila diaplikasikan pada kehidupan sosial masyarakat pelajar. Literasi akan meningkatkan kemampuan pelajar dalam menafsirkan setiap kejadian yang sedang menjadi perbincangan publik sehingga akan menjadi pegangan siswa dalam melakukan sesuatu ataupun berpendapat di depan publik.\r\nDengan adanya kegiatan ini diharapkan dapat memberikan dampak terhadap pelajar untuk bertindak berdasarkan kenyataan yang sebenarnya sesuai dengan literasi yang didapatkan.', 'img3.jpeg'),
(3, 'PENILAIAN KINERJA KEPALA SEKOLAH (PKKS) TAHUN 2021', 'Pada Hari Senin dan Selasa, tanggal 18 dan 19 Oktober 2021 dilaksanakan kegiatan Penilaian Kinerja Kepala Sekolah (PKKS) untuk Tahun 2021. Kegiatan ini adalah kegiatan Rutin yang dilaksanakan oleh Dinas Pendidikan Menengah Kota Yogyakarta dengan menugaskan Pengawas SMA untuk pelaksanaan kegiatan tersebut. Di masa Pandemi Covid 19 ini kegiatan PKKS dilaksanakan sesuai dengan protokol kesehatan oleh Pengawas Dinas Pendidikan Menengah Kota Ternate dan Pengawas Dinas Pendidikan Pemuda dan Olahraga Provinsi Maluku Utara\r\n\r\nKegiatan dilaksanakan 2 hari:\r\n\r\nHari Senin, 18 Oktober 2021 penilaian oleh Pengawas Dinas Pendidikan Menengah Kota Ternate dan Dinas Pendidikan Pemuda dan Olahraga Provinsi Maluku Utara\r\nHari Selasa, 19 Oktober 2021 penilaian oleh Pengawas Pendamping\r\nPenilaian Kinerja Kepala Sekolah (PKKS) di SMA Negeri 8 Ternate dimulai pada Hari Senin, 18 Oktober 2021 pukul 11.00.\r\n\r\nPada penutupan acara Penilaian Kinerja Kepala Sekolah (PKKS) Bapak Sri Sunardiyanto, M.Pd. mengucapkan terima kasih kepada seluruh pihak yang telah membantu terlaksananya kegiatan tersebut. “Kami selaku Kepala Sekolah mengucapkan banyak terima kasih kepada Bapak/ Ibu Pengawas yang telah mendampingi dan menilai kinerja kami selama tahun 2021 ini, tidak lupa Bapak Ibu Wakil Kepala Sekolah, Kepala Tata Usaha, Bapak Ibu Guru dan Karyawan SMA Negeri 8 Ternate yang telah mendukung kegiatan ini. Semoga dengan hasil penilaian ini akan menjadi lebih baik khususnya untuk diri pribadi saya dan secara umum untuk SMA Negeri 8 Ternate. Amiin.” Ujarnya.', 'img1.jpeg'),
(4, 'Workshop Budaya untuk Siswa Ternate Berbudaya', 'Workshop dilaksanakan dalam sehari untuk kelas X dan XI dengan pembagian sesi yang berbeda. Pelaksanaan bertempat di aula sekolah oleh narasumber Slamet Nugroho, S.Pd. guru Bahasa Jawa sekaligus narasumber yang berkaitan dengan budaya Jawa. Kegiatan workshop dikemas melalui ceramah interaktif. Siswa antusias mengikuti ceramah sambil tanya jawab seputar budaya. “Memayu Hayuning Bawana, itu istilah yang sering kita dengar, ada yang tahu artinya?” ujar Slamet untuk memotivasi siswa agar berani menyampaikan pendapat dan aspirasi. Beberapa siswa pun menjawab secara bergantian dengan penuh semangat didampingi para wali kelas.', 'download.jpeg'),
(7, 'info', 'sfdj;sadji', 'imgp3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `idgaleri` int(3) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`idgaleri`, `foto`, `judul`) VALUES
(6, 'download (1).jpeg', 'Lomba Paduan Suara'),
(7, 'images.jpeg', 'FLS2N Tingkat Kabupaten'),
(8, 'download (2).jpeg', 'Praktikum Kimia Uji Kadar Cuka Dapur'),
(9, 'WhatsApp-Image-2022-12-12-at-08.16.37-3-1-1024x768.jpeg', 'Lomba Band'),
(10, 'IMG_0060-FILEminimizer-1024x683.jpg', 'Foto Lab Kimia'),
(11, 'download (3).jpeg', 'Ruang Rapat'),
(12, 'post-image-1640829530832.jpg', 'Class Meeting Futsal'),
(13, 'ruangkelas.jpg', 'Ruang Kelas'),
(14, 'images (1).jpeg', 'Class Meeting Basket');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `NIK` int(10) NOT NULL,
  `Nama_guru` varchar(255) DEFAULT NULL,
  `Alamat` varchar(200) DEFAULT NULL,
  `Tanggal_lahir` date DEFAULT NULL,
  `Jenis_kelamin` varchar(10) DEFAULT NULL,
  `No_hp` varchar(20) DEFAULT NULL,
  `Jabatan` varchar(50) NOT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`NIK`, `Nama_guru`, `Alamat`, `Tanggal_lahir`, `Jenis_kelamin`, `No_hp`, `Jabatan`, `foto`) VALUES
(1173223, 'Ahmad Jayus, S.Pd', 'maluku', '1991-05-06', 'Laki-Laki', '0987868', 'fisika', NULL),
(1232433, 'Marjan, S.Pd., M.Pd.I', 'maluku', '1991-05-06', 'Laki-Laki', '0987868', 'tu', 'pict/tu.jpeg'),
(1234532, 'Munira Assagaf M.pd', 'maluku', '1991-05-06', 'Perempuan', '0987868', 'kepala', 'pict/kepala.jpeg'),
(1273223, 'Mukhlis Sosnar, S.Pd', 'maluku', '1991-05-06', 'Laki-Laki', '0987868', 'kimia', NULL),
(1373222, 'Luiso Marthina, S.Pd', 'maluku', '1991-05-06', 'Perempuan', '0987868', 'kimia', NULL),
(1423453, 'Tranta Kusis, S.Pd', 'maluku', '1991-05-06', 'Perempuan', '0987868', 'penjas', NULL),
(1523453, 'Mindo Piwolo, S.Pd', 'maluku', '1991-05-06', 'Laki-Laki', '0987868', 'penjas', NULL),
(1623453, 'Janar, S.Pd', 'maluku', '1991-05-06', 'Laki-Laki', '0987868', 'inggris', NULL),
(1723453, 'Tantri, S.Pd', 'maluku', '1991-05-06', 'Perempuan', '0987868', 'inggris', NULL),
(1732232, 'Mulastri Tika, S.Pd', 'maluku', '1991-05-06', 'Perempuan', '0987868', 'fisika', NULL),
(1823453, 'Inadtri, S.Pd', 'maluku', '1991-05-06', 'Perempuan', '0987868', 'pkn', NULL),
(1923453, 'Siwolo P, S.Pd', 'maluku', '1991-05-06', 'Laki-Laki', '0987868', 'pkn', NULL),
(2023453, 'Abdul Muin, S.Ag., M.Pd.I.', 'maluku', '1991-05-06', 'Laki-Laki', '0987868', 'agama', NULL),
(2123453, 'Albertha Imanusa', 'maluku', '1991-05-06', 'Perempuan', '0987868', 'agama', NULL),
(3324242, 'Hj. Henrina Puspita Permana, S.Pd', 'maluku', '1991-05-06', 'Perempuan', '0987868', 'kurikulum', 'pict/kurikulum.jpeg'),
(4323223, 'Istikomah, S.Pd', 'maluku', '1991-05-06', 'Perempuan', '0987868', 'kesiswaan', 'pict/kesis.jpeg'),
(5322322, 'Drs. Dulkodir', 'maluku', '1991-05-06', 'Laki-Laki', '0987868', 'osis', 'pict/osis.jpeg'),
(6232323, 'Dra. Hj. Diani Widiyani', 'maluku', '1991-05-06', 'Perempuan', '0987868', 'bindo', NULL),
(7322322, 'Nurkholis, S.Pd', 'maluku', '1991-05-06', 'Laki-Laki', '0987868', 'bindo', NULL),
(8732232, 'Surtoto, S.Pd', 'maluku', '1991-05-06', 'Laki-Laki', '0987868', 'mtk', NULL),
(9732232, 'Sundari, S.Pd', 'maluku', '1991-05-06', 'Perempuan', '0987868', 'mtk', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id` int(11) NOT NULL,
  `kurikulum` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `isi2` text NOT NULL,
  `isi3` text NOT NULL,
  `catatan1` text NOT NULL,
  `catatan2` text NOT NULL,
  `catatan3` text NOT NULL,
  `catatan4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`id`, `kurikulum`, `keterangan`, `isi`, `isi2`, `isi3`, `catatan1`, `catatan2`, `catatan3`, `catatan4`) VALUES
(1, 'Kurikulum 2013', 'Struktur Kurikulum 2013 SMA/MA (Sesuai Dengan Permendikbud No. 69 Tahun 2013)', 'Struktur kurikulum menggambarkan konseptualisasi konten kurikulum dalam bentuk mata pelajaran, posisi konten/mata pelajaran dalam kurikulum, dostribusi konten/mata pelajaran dalam semester atau tahun, beban belajar untuk mata pelajaran dan beban belajar per minggu untuk setiap siswa. Struktur kurikulum adalah juga merupakan aplikasi konsep pengorganisasian konten dalam sistem belajar dan pengorganisasian beban belajar dalam sistem pembelajaran. Pengorganisasian konten dalam sistem belajar yang digunakan adalah sistem semester sedangkan pengorganisasian beban belajar dalam sistem pembelajaran berdasarkan jam pelajaran per semester.', 'Struktur kurikulum juga gambaran mengenai penerapan prinsip kurikulum mengenai posisi seorang siswa dalam menyelesaikan pembelajaran di suatu satuan atau jenjang pendidikan. Lebih lanjut, struktur kurikulum menggambarkan posisi belajar seorang siswa yaitu apakah mereka harus menyelesaikan seluruh mata pelajaran yang tercantum dalam struktur ataukah kurikulum memberi kesempatan kepada siswa untuk menentukan berbagai pilihan. Struktur kurikulum pendidikan menengah terdiri atas sejumlah mata pelajaran, beban belajar, dan kalender pendidikan.', 'Kelompok mata pelajaran wajib yaitu kelompok A dan kelompok B. Kelompok A adalah mata pelajaran yang memberikan orientasi kompetensi lebih kepada aspek kognitif dan afektif sedangkan kelompok B adalah mata pelajaran yang lebih menekankan pada aspek afektif dan psikomotor.\r\nKelompok Mata Pelajaran Peminatan terdiri atas 3 (tiga) kelompok yaitu Peminatan Matematika dan Sains, Peminatan Sosial, dan Peminatan Bahasa.\r\nMata Pelajaran Pilihan Lintas Minat yaitu mata pelajaran yang dapat diambil oleh peserta didik di luar Kelompok Mata Pelajaran Peminatan yang dipilihnya tetapi masih dalam Kelompok Peminatan lainnya. Misalnya bagi peserta didik yang memilih Kelompok Peminatan Bahasa dapat memilih mata pelajaran dari Kelompok Peminatan Sosial dan/atau Kelompok Peminatan Matematika dan Sains.\r\nMata Pelajaran Pendalaman dimaksudkan untuk mempelajari salah satu mata pelajaran dalam kelompok Peminatan untuk persiapan ke perguruan tinggi.\r\nMata Pelajaran Pilihan Lintas Minat dan Mata Pelajaran Pendalaman bersifat opsional, dapat dipilih keduanya atau salah satu.', 'Matapelajaran dalam kelompok Bahasa Asing Lain ditentukan oleh SMA/MA masing-masing sesuai dengan ketersediaan guru dan fasilitas belajar.', 'Sekolah Menengah Atas/Madrasah Aliyah yang tidak memiliki Kelompok Peminatan Ilmu Bahasa dan Budaya, dapat menyediakan pilihan matapelajaran Bahasa dan Sastra Indonesia, Bahasa dan Sastra Inggris, Antropologi atau salah satu matapelajaran dalam kelompok B', 'Bagi peserta didik yang menggunakan pilihan untuk menguasai satu bahasa asing tertentu atau matapelajaran tertentu, dianjurkan untuk memilih matapelajaran yang sama sejak tahun X sampai tahun XII.', 'Sangat dianjurkan setiap SMA/MA memiliki ketiga Kelompok Peminatan.');

-- --------------------------------------------------------

--
-- Table structure for table `login_guru`
--

CREATE TABLE `login_guru` (
  `NIK` int(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_guru`
--

INSERT INTO `login_guru` (`NIK`, `password`) VALUES
(2023453, 'admin'),
(1173223, 'admin'),
(2123453, 'admin'),
(2123453, 'admin\r\n'),
(6232323, 'admin'),
(5322322, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login_siswa`
--

CREATE TABLE `login_siswa` (
  `NIS` int(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_siswa`
--

INSERT INTO `login_siswa` (`NIS`, `password`) VALUES
(21114170, 'adam'),
(21114123, 'alivia'),
(21114142, 'kresna'),
(21114180, 'satria');

-- --------------------------------------------------------

--
-- Table structure for table `orang_tua`
--

CREATE TABLE `orang_tua` (
  `Id` int(6) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Tanggal_lahir` date DEFAULT NULL,
  `Pekerjaan` varchar(50) DEFAULT NULL,
  `No_hp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orang_tua`
--

INSERT INTO `orang_tua` (`Id`, `Nama`, `Tanggal_lahir`, `Pekerjaan`, `No_hp`) VALUES
(21114123, 'Luhut Binsar', '1980-11-23', 'MPR ', '0888323232'),
(21114142, 'Raffi Ahmad', '1979-06-25', 'DPR', '0888342234'),
(21114170, 'Aldi Taher', '1945-07-17', 'DPR RI', '08832023224'),
(21114180, 'Ngabalin ', '1955-05-09', 'Kritikus', '0883423243');

-- --------------------------------------------------------

--
-- Table structure for table `osis`
--

CREATE TABLE `osis` (
  `id_osis` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `osis`
--

INSERT INTO `osis` (`id_osis`, `nama`, `jabatan`) VALUES
(1, 'GEDE RAPTA RYAN', 'Ketua'),
(2, 'PUTRI KUSUMA', 'Wakil ketua '),
(3, 'NASWA ADINDA', 'Bendahara_1'),
(4, 'AGUS WINDA HALAWA', 'Bendahara_2'),
(5, 'MUH IHLZAM FIKRI', 'Sekretaris_1'),
(6, 'MEITA AMARTYA', 'Sekretaris_2');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_data`
--

CREATE TABLE `pdf_data` (
  `id` int(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdf_data`
--

INSERT INTO `pdf_data` (`id`, `judul`, `keterangan`, `filename`) VALUES
(68, 'Modul Teknologi Informasi Part I', 'Modul Teknologi Informasi', 'ea8f3f732576083156e509657614f551 (1).pdf'),
(69, 'Modul Teknologi Informasi Part II', 'Modul Teknologi Informasi', 'ab9a183ff240deadbedaff78e639af2f.pdf'),
(70, 'Modul Teknologi Informasi Part III', 'Modul Teknologi Informasi', '029143a3980232ab2900d94df36dbb0c (3) (2) (1).pdf'),
(71, 'Naskah Publikasi IT', 'Naskah Teknolgi Informasi', 'c5e5e7d16e4cd6c3d22c11f64b0db2af (1).pdf'),
(72, 'Jurnal Teknolgi Informasi I', 'Jurnal Teknolgi Informasi ', '30f588eb5c55324f8d18213f11651855 (1).pdf'),
(73, 'Jurnal Teknolgi Informasi II', 'Jurnal Teknolgi Informasi', '029143a3980232ab2900d94df36dbb0c.pdf'),
(74, '8 Racun dalam kehidupan kita', 'Mengetahui 8 Racun dalam kehidupan kita', 'c4e966ba2c6e142155082854dc5b3602.pdf'),
(75, '7 Tips Penting mengatasi Kritik', 'Cara Agar Dapat Mengatasi Kritik', 'ab9a183ff240deadbedaff78e639af2f.pdf'),
(76, 'Bagaimana Membentuk Pola Pikir yang Baru', 'Ebook ini membantu anda membentuk pola pikir baru', '30f588eb5c55324f8d18213f11651855 (3).pdf'),
(77, '14 Teknik Komunikasi Yang Paling Efektif', 'Ebook 14 teknik komunikasi paling efektif', '87ae0f009714ddfdd79e2977b2a64632.pdf'),
(78, 'Dasar-dasar CSS', 'Modul dasar-dasar CSS 3. Modul ini membantu menguasai CSS', '87ae0f009714ddfdd79e2977b2a64632.pdf'),
(79, '12123w3454', 'dadada', 'Catatan Sejarah SMA (1) (1).pdf'),
(80, 'Tips mengerjakan Fp WEB', 'Kerjakan Tepat waktu', '87ae0f009714ddfdd79e2977b2a64632 (1).pdf'),
(81, 'coba123', 'coba123', '1420-ArticleText-3128-1-10-20210902.pdf'),
(82, 'coba123', 'coba123', '1420-ArticleText-3128-1-10-20210902.pdf'),
(83, 'testbaru123', 'sdsdsdsd', 'KALENDER AKADEMIK SMAN8 GANJIL.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `idpeng` int(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`idpeng`, `judul`, `isi`, `tanggal`) VALUES
(1, 'Libur Semester Ganjil Tahun Ajaran 2021/2022', 'Libur Semester Ganjil Tahun Ajaran 2021/2022 mulai tanggal 1 Juli 2022 sampai dengan 10 Juli 2022', '2023-07-08'),
(2, 'Libur Hari Raya Natal dan Tahun Baru 2022 ', 'Libur Hari Raya Natal dan Tahun Baru 2022 mulai tanggal 17 Desember 2022 sampai dengan 2 Januari 2023', '2023-07-09'),
(3, 'Libur Hari Raya Idul Fitri 2023', 'Libur Hari Raya Idul Fitri 2023 dimulai pada tanggal 28 April 2023 sampai dengan 15 Mei 2023', '2023-04-21'),
(5, 'Libur Natal dan Tahun Baru', 'Libur dimulai pada tanggal 20 Desember 2023 - 5 Januari 2024', '2023-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `idprestasi` int(3) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `foto` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`idprestasi`, `judul`, `isi`, `foto`) VALUES
(1, 'Juara 1 Menulis Essay Tingkat Kabupaten', 'Nurul Halima Kelas XII Juara Harapan 1 Lomba Mural Tingkat Nasional SMA Tahun 2022', 'imgp1.jpeg'),
(2, 'Juara 1 Popda Maluku Utara', 'Putri siswi kelas 11 MIPA 7 memperoleh juara 1 pada kategori tanding kelas B putri', 'imgp2.jpg'),
(3, 'Juara Harapan 1 Olimpiade Aktuaria ASiQ 2022', 'uara Harapan 1 dalam Olimpiade Aktuaria ASiQ 2022 yang diselenggarakan oleh Himpunan Mahasiswa Ilmu Aktuaria', 'imgp3.jpeg'),
(4, 'Juara 1 Lomba Karya Tulis Ilmiah Tingkat Daerah ', 'Putri Syifa, siswi kelas 10 MIPA 8\r\nJuara 1 Lomba Karya Tulis Ilmiah SMA Tingkat Daerah', 'imgp4.jpg'),
(13, 'ljsefjhsfdh', 'pitek lemin hoo', 'download (1).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `sarana`
--

CREATE TABLE `sarana` (
  `id` int(11) NOT NULL,
  `sarana` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sarana`
--

INSERT INTO `sarana` (`id`, `sarana`, `keterangan`) VALUES
(5, 'Akses Internet', 'Telkom Astinet'),
(6, 'Daya Listrik', '16,000'),
(7, 'Luas Tanah', '4,814 M persegi'),
(8, 'Ruang Kelas', '22'),
(9, 'Laboratorium', '5'),
(10, 'Perpustakaan', '1'),
(11, 'Ruang UKS', '2'),
(12, 'Ruang BK', '1'),
(13, 'Ruang Kepala Sekolah', '1'),
(14, 'Ruang Guru', '1'),
(15, 'Ruang Osis', '1'),
(16, 'Kamar Mandi Guru', '1'),
(17, 'Ruang Mandi Siswa', '4'),
(18, 'Mushola', '1'),
(19, 'Kantin', '1'),
(30, 'test', 'test'),
(31, 'test', 'test12'),
(32, 'test', 'test12'),
(33, 'testtt111111', '1221');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NIS` int(8) NOT NULL,
  `Nama_siswa` varchar(50) DEFAULT NULL,
  `Alamat_siswa` varchar(200) DEFAULT NULL,
  `Tanggal_lahir_siswa` date DEFAULT NULL,
  `Jenis_kelamin` varchar(10) DEFAULT NULL,
  `No_hp_siswa` varchar(20) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `foto_siswa` text NOT NULL,
  `kts` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIS`, `Nama_siswa`, `Alamat_siswa`, `Tanggal_lahir_siswa`, `Jenis_kelamin`, `No_hp_siswa`, `email`, `foto_siswa`, `kts`) VALUES
(21114123, 'Alivia Dyatama Arisusanto', 'Klaten, Jateng', '2003-12-19', 'Perempuan', '08983832332', 'Alivia@students.amikom.ac.id', 'pict/alivia.jpeg', 'pict/ktsaliviad.png'),
(21114142, 'Karisma Septa Kresna', 'Tegal Rejo RT03/RW02, Nangsri, Manisrenggo, Klaten', '2003-09-05', 'Laki-Laki', '08813909537', 'kresna@students.amikom.ac.id', 'pict/kresna.png', 'pict/ktskresnaa.png'),
(21114170, 'Adam Kurniantoro', 'Maguwoharjo, Sleman, DIY', '2002-04-07', 'Laki-Laki', '08822121211', 'adamkurniantoro@students.amikom.ac.id', 'pict/adamm.jpeg', 'pict/ktsadamk.png'),
(21114180, 'Yohanes Satria Pamungkas', 'Kulon progo, DIY', '2003-07-13', 'Laki-Laki', '08563232237', 'Yohan@students.amikom.ac.id', 'pict/satriaa.png', 'pict/ktssatriaa.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idberita`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`idgaleri`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_guru`
--
ALTER TABLE `login_guru`
  ADD KEY `NIK` (`NIK`);

--
-- Indexes for table `login_siswa`
--
ALTER TABLE `login_siswa`
  ADD KEY `NIS` (`NIS`);

--
-- Indexes for table `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pdf_data`
--
ALTER TABLE `pdf_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`idpeng`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`idprestasi`);

--
-- Indexes for table `sarana`
--
ALTER TABLE `sarana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `idberita` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `idgaleri` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pdf_data`
--
ALTER TABLE `pdf_data`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `idpeng` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `idprestasi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sarana`
--
ALTER TABLE `sarana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login_guru`
--
ALTER TABLE `login_guru`
  ADD CONSTRAINT `login_guru_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `guru` (`NIK`);

--
-- Constraints for table `login_siswa`
--
ALTER TABLE `login_siswa`
  ADD CONSTRAINT `login_siswa_ibfk_1` FOREIGN KEY (`NIS`) REFERENCES `siswa` (`NIS`);

--
-- Constraints for table `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD CONSTRAINT `orang_tua_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `siswa` (`NIS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
