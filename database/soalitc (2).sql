-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2020 at 11:05 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soalitc`
--

-- --------------------------------------------------------

--
-- Table structure for table `curent_status`
--

CREATE TABLE `curent_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `session` tinyint(4) NOT NULL,
  `question` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `curent_status`
--

INSERT INTO `curent_status` (`id`, `session`, `question`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-01-15 20:16:27', '2020-01-16 22:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2014_10_12_000000_create_users_table', 2),
(24, '2019_12_12_181710_create_participants_table', 2),
(25, '2019_12_12_181904_create_transaction_logs_table', 2),
(26, '2019_12_15_162219_create_questions_table', 2),
(27, '2019_12_15_165105_create_current_status_table', 2),
(28, '2019_12_15_171259_create_observer_participant_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `observer_participants`
--

CREATE TABLE `observer_participants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `observer_id` bigint(20) NOT NULL,
  `participant_id` bigint(20) NOT NULL,
  `session` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `school` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `absent` date NOT NULL,
  `point_1` int(11) NOT NULL,
  `point_2` int(11) NOT NULL,
  `point_3` int(11) NOT NULL,
  `point_4` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `user_id`, `name`, `school`, `absent`, `point_1`, `point_2`, `point_3`, `point_4`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Choirunnisa Hasna', 'SMK N 9 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(2, NULL, 'Ruth Fiona Ayu Sibarani', 'SMK N 9 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(3, NULL, 'Agustina Dewi Puspitasari', 'SMK N 9 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(4, NULL, 'Egitya Melati Sukma', 'SMK N 9 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(5, NULL, 'Khoerul Umam', 'SMK Askhabul Kahfi Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(6, NULL, 'RIZKI DARMAWAN', 'SMK Askhabul Kahfi Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(7, NULL, 'HISYAM FUADY', 'MA Askhabul Kahfi Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(8, NULL, 'Aprilia Tri Ardani', 'SMK Askhabul Kahfi Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(9, NULL, 'Rike Saidatur Rohmah', 'SMK Askhabul Kahfi Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(10, NULL, 'Azra Muhammad Bhaskarogra', 'SMK N 7 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(11, NULL, 'Amelia Maulida Wulandari', 'SMK PEMBANGUNAN MRANGGEN', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(12, NULL, 'Putri Dewi Setianingsih', 'SMK PEMBANGUNAN MRANGGEN', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(13, NULL, 'Reza Sindy Permata Sari', 'SMK PEMBANGUNAN MRANGGEN', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(14, NULL, 'Deva Budi Tata Laksana', 'SMK PEMBANGUNAN MRANGGEN', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(15, NULL, 'Martien Dani P', 'SMK N 9 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(16, NULL, 'AZ-ZAHRA AURELL PUTRIANSYAH', 'SMK N 9 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(17, NULL, 'Vicky Rahma Santoso', 'SMK N 9 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(18, NULL, 'Kintani Adjani', 'SMK PEMBANGUNAN MRANGGEN', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(19, NULL, 'SETIYOSO', 'SMK PEMBANGUNAN MRANGGEN', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(20, NULL, 'Nawaf Abdul Aziz', 'SMK PEMBANGUNAN MRANGGEN', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(21, NULL, 'Ananda Bachtiar Rahman', 'SMK PEMBANGUNAN MRANGGEN', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(22, NULL, 'yunianti vitdya triningsih', 'SMK PEMBANGUNAN MRANGGEN', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(23, NULL, 'dennis adi mahendra', 'SMK PEMBANGUNAN MRANGGEN', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(24, NULL, 'Gabriella Fani Suciarti Medantoro', 'SMK N 4 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(25, NULL, 'Kezia Maria Ardianawati', 'SMK N 4 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(26, NULL, 'Ardi Prassetiyo', 'SMK N 4 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(27, NULL, 'Aisyah Rahmawati Imran', 'SMK N 9 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(28, NULL, 'Mochammad Dennis Alfarizi', 'SMK N 9 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(29, NULL, 'Raisha Permata Cahyani', 'SMK N 9 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(30, NULL, 'Rhenald Daeng Lommpo', 'SMK N 4 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(31, NULL, 'Gerardus Aditya Wahyu Prasetyo', 'SMK IBU KARTINI', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(32, NULL, 'Aditya Fajar Mulyana', 'SMK IBU KARTINI', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(33, NULL, 'Wahyu Trifiana Indriyani', 'SMK IBU KARTINI', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(34, NULL, 'ANA FITRIANI', 'SMK IBU KARTINI', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(35, NULL, 'KUKUH SETYA ARUMANSYAH', 'SMK N 2 Purwodadi', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(36, NULL, 'FATHONI KURNIAWAN', 'SMK N 2 Purwodadi', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(37, NULL, 'MIKA HONGKI ALVIAN', 'SMK N 2 Purwodadi', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(38, NULL, 'BAGAS PERDANA SAPUTRA', 'SMK N 2 Purwodadi', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(39, NULL, 'RAGAZZO RAFIF MIDOPTA', 'SMK N 2 Purwodadi', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(40, NULL, 'ARYA ADHI NUGRAHA', 'SMK N 2 Purwodadi', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(41, NULL, 'Junianto Endra Kartika', 'SMK Negeri 7 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(42, NULL, 'Lukman Nur Azmi', 'SMK NEGERI 11 SEMARANG', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(43, NULL, 'Naufal Hilmy', 'SMK NEGERI 11 SEMARANG', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(44, NULL, 'Muhammad David Kurniawan', 'SMK MUHAMMADIYAH KUDUS', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(45, NULL, 'Muhammad Rouf Alfian Hidayat', 'SMK MUHAMMADIYAH KUDUS', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(46, NULL, 'Ayub Osa Maulana Sukarno', 'SMK NEGERI JAWA TENGAH', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(47, NULL, 'Arya Pramudya', 'SMK MUHAMMADIYAH KUDUS', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(48, NULL, 'Dhia Ahmad Arya Shah', 'SMK MUHAMMADIYAH KUDUS', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(49, NULL, 'Ahsanu Amala Aditya', 'SMK MUHAMMADIYAH KUDUS', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(50, NULL, 'Mochamad Azizan', 'SMK NEGERI JAWA TENGAH', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(51, NULL, 'Alief Rizky Febriyan', 'SMK NEGERI JAWA TENGAH', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(52, NULL, 'Faojan Sukrinas', 'SMK NEGERI JAWA TENGAH', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(53, NULL, 'Burhanudin Yusuf', 'SMK NEGERI JAWA TENGAH', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(54, NULL, 'Danang Wahyu Setiawan', 'SMK NEGERI JAWA TENGAH', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(55, NULL, 'Sabil Darell Nandawan', 'Sma Islam Sultan Agung 1 semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(56, NULL, 'Muhammad Iqbal Ali Sa\'idil Muna', 'SMKN 7 SEMARANG', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(57, NULL, 'M.Hanif Azhar', 'Sma Islam Sultan Agung 1 semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(58, NULL, 'Fuad bagus setiawan', 'SMK NUSA BHAKTI SEMARANG', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(59, NULL, 'Annisa Aulia Sani', 'SMK NEGERI 10 SEMARANG', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(60, NULL, 'Fiqih Rahma Nugraha', 'SMK NEGERI 10 SEMARANG', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(61, NULL, 'Dimas Manik Alayubi', 'SMK NUSA BHAKTI SEMARANG', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(62, NULL, 'Gabriel Steve', 'SMK Nusaputera 1 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(63, NULL, 'Henley Raharjo', 'SMK Nusaputera 1 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(64, NULL, 'Nicholas Avellino', 'SMK Nusaputera 1 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(65, NULL, 'Gabriel Septio Rivaldi Gultom', 'SMK Nusaputera 1 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(66, NULL, 'Nico Darmawan', 'SMK Nusaputera 1 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(67, NULL, 'Peter Harrry Widodo', 'SMK Nusaputera 1 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(68, NULL, 'Vincentius Kurniawan Indra S.', 'SMK Nusaputera 1 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(69, NULL, 'Daffa Setya Ramadhan', 'SMK Nusaputera 1 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(70, NULL, 'Gabriel Indrawan', 'SMK Nusaputera 1 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(71, NULL, 'Halim Jayakusuma Wiradinata', 'SMK Nusaputera 1 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(72, NULL, 'Ivan Christian Godtomo', 'SMK Nusaputera 1 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(73, NULL, 'Bernard', 'SMK Nusaputera 1 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL),
(74, NULL, 'Kho, Jonathan Davi V Nanda', 'SMK Nusaputera 1 Semarang', '0000-00-00', 0, 0, 20, 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` enum('1','2','3','4') COLLATE utf8_unicode_ci NOT NULL,
  `question` longtext COLLATE utf8_unicode_ci NOT NULL,
  `answer_key` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `option_a` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_b` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_c` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_d` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `session`, `question`, `answer_key`, `option_a`, `option_b`, `option_c`, `option_d`, `created_at`, `updated_at`) VALUES
(1, '1', 'Yang dimaksud dengan halaman Web adalah...', 'B', 'Halaman elektronik yang dibuka dengan web browser', 'Halaman digital yang dibuka dengan web browser', '-', '-', '2020-01-17 20:37:35', '2020-01-17 20:37:35'),
(2, '1', 'Shortcut Keys untuk masuk menu Help dalam Microsoft Word adalah ....', 'A', 'F1', 'F2', '-', '-', '2020-01-17 20:39:17', '2020-01-17 20:39:17'),
(3, '1', 'Program yang melakukan request terhadap konten dari Internet/Intranet adalah fungsi dari….', 'A', 'Proxy', 'Firewall', '-', '-', '2020-01-18 01:27:47', '2020-01-18 01:27:47'),
(4, '1', 'Untuk menerima masukan berupa pilihan dalam formulir adalah..', 'A', 'Radio', 'Checkbox', '-', '-', '2020-01-18 01:28:42', '2020-01-18 01:28:42'),
(5, '1', 'Yang membuat www (world wide web) bernama ....', 'B', 'John Markoff', 'Berners-Lee', '-', '-', '2020-01-18 01:29:39', '2020-01-18 01:29:39'),
(6, '1', 'Arsitektur Kecerdasan buatan memiliki dua bagian utama, yaitu...', 'A', 'Knowledge Base and Inference Engine', 'Best First Search and Dept First Search', '-', '-', '2020-01-18 01:30:53', '2020-01-18 01:30:53'),
(7, '1', 'Yang merupakan web server adalah ....', 'B', 'Samba', 'IIS', '-', '-', '2020-01-18 01:32:38', '2020-01-18 01:32:38'),
(8, '1', 'Range ukuran font yang disediakan dalam Microsoft Word adalah ....', 'A', '8-72', '6-72', '-', '-', '2020-01-18 01:33:29', '2020-01-18 01:33:29'),
(9, '1', 'Komputer generasi Ketiga dikembangkan pada tahun....', 'A', '1965 – awal tahun 80 an', '1969– awal tahun 80 an', '-', '-', '2020-01-18 01:34:49', '2020-01-18 01:34:49'),
(10, '1', 'Android merupakan sistem yang berjalan pada perangkat', 'B', 'Buku Pintar', 'Telepon Pintar', '-', '-', '2020-01-18 01:35:42', '2020-01-18 01:35:42'),
(11, '1', 'Jumlah baris dan kolom pada Microsoft Excel 2019 adalah ....', 'B', '1.048.376 baris kali 16.584 kolom', '1.048.576 baris kali 16.384 kolom', '-', '-', '2020-01-18 01:37:40', '2020-01-18 01:37:40'),
(12, '1', 'Processor Intel Core I7 menggunakan socket processor dengan tipe….', 'A', 'LGA 1156', 'LGA 775', '-', '-', '2020-01-18 01:38:55', '2020-01-18 01:38:55'),
(13, '1', 'Server yang berfungsi sebagai pemberi akses/pertukaran transfer data antara dua computer adalah….', 'B', 'DHCP Server', 'FTP Server', '-', '-', '2020-01-18 01:39:48', '2020-01-18 01:39:48'),
(14, '1', 'Sebuah teknik yang mengembangkan efisiensi dalam proses pencarian, namun dengan kemungkinan mengorbankan kelengkapan, disebut...', 'B', 'Pencarian Melebar', 'Pencarian Heuristik', '-', '-', '2020-01-18 01:41:10', '2020-01-18 01:41:10'),
(15, '1', 'Dalam Model OSI Layer, yang berfungsi untuk menerima data dari Session Layer adalah….', 'B', 'Data Link Layer', 'Transport Layer', '-', '-', '2020-01-18 01:42:22', '2020-01-18 01:42:22'),
(16, '1', 'Yang termasuk kedalam jenis-jenis teknik pencarian heuristik, yaitu....', 'A', 'Best First Search', 'Breadth First Search', '-', '-', '2020-01-18 01:44:00', '2020-01-18 01:44:00'),
(17, '1', 'Software yang digunakan untuk membuat web design adalah….', 'A', 'Dreamweaver', 'Macromedia Flash', '-', '-', '2020-01-18 01:45:27', '2020-01-18 01:45:27'),
(18, '1', 'Cara untuk merepresentasikan ruang, yaitu….', 'B', 'Graf Keadaan, Pohon Pelacakan, dan AND/NOT', 'Graf Keadaan, Pohon Pelacakan, dan AND/OR', '-', '-', '2020-01-18 01:46:47', '2020-01-18 01:46:47'),
(19, '1', 'Software yang digunakan untuk membuat animasi teks adalah....', 'B', 'Corel Draw', 'Swish Max', '-', '-', '2020-01-18 01:48:02', '2020-01-18 01:48:02'),
(20, '1', 'Teknologi yang digunakan pada komputer generasi ke-3 adalah....', 'B', 'Transistor', 'Sirkuit Terintegrasi', '-', '-', '2020-01-18 01:49:03', '2020-01-18 01:49:03'),
(21, '1', 'Kebutuhan hardware pengembangan android yang disarankan adalah….', 'B', 'Satu Giga HDD', 'Satu Giga RAM', '-', '-', '2020-01-18 01:54:02', '2020-01-18 01:54:02'),
(22, '1', 'Menambahkan fungsi di lembaran kerja dapat dilakukan dengan menjalankan perintah insert function. Perintah insert function terdapat di menu ....', 'B', 'Insert', 'Formulas', '-', '-', '2020-01-18 01:57:15', '2020-01-18 01:57:15'),
(23, '1', 'Kita dapat menyimpan beberapa versi dari dokumen word dalam satu file menggunakan fitur ....', 'A', 'Track Change', 'Version Change', '-', '-', '2020-01-18 01:57:58', '2020-01-18 01:57:58'),
(24, '1', 'Perintah mengubah format (konversi) data grafik ke format grafik lain adalah ....', 'B', 'Import', 'Export', '-', '-', '2020-01-18 01:59:20', '2020-01-18 01:59:20'),
(25, '1', 'Yang termasuk perintah external pada DOS adalah….', 'B', 'MD', 'CHKDSK', '-', '-', '2020-01-18 02:00:37', '2020-01-18 02:00:37'),
(26, '1', 'Muncul sekitar berapa tahun yang lalu, ketika di temukannya abacus?', 'A', '5000 Tahun yang lalu', '500 Tahun yang lalu', '-', '-', '2020-01-18 02:02:42', '2020-01-18 02:02:42'),
(27, '1', 'Webcam adalah salah satu periferal yang dapat digunakan sebagai media masukan grafis dan dapat berfungsi karena adanya teknologi yang disebut dengan ....', 'A', 'Internet', 'Jaringan listrik', '-', '-', '2020-01-18 02:03:29', '2020-01-18 02:03:29'),
(28, '1', 'Type data hasil scanning yang dimanipulasi dengan software digital imaging dapat disimpan dengan berbagai format antara lain ....', 'A', 'bmp, jpeg, jpg', 'png, fla, jpeg', '-', '-', '2020-01-18 02:04:12', '2020-01-18 02:04:12'),
(29, '1', 'Di bawah ini adalah software aplikasi yang dapat digunakan untuk membuat animasi 2D yaitu ....', 'B', 'Macromedia Dreamweaver', 'Macromedia Flash MX 2004', '-', '-', '2020-01-18 02:05:06', '2020-01-18 02:05:06'),
(30, '1', 'Suatu slide presentasi yang dibuat menggunakan macromedia flash dapat dihubungkan dengan slide lain yang dikenal dengan istilah ....', 'A', 'goto', 'hyperlink', '-', '-', '2020-01-18 02:05:44', '2020-01-18 02:05:44'),
(31, '2', 'P1: Topologi Star atau bintang, pada topologi ini menggunakan switch yang berfungsi sebagai node tengah sekaligus pusatnya jaringan. Apabila switch ini mati/terganggu, maka jaringan tidak dapat berjalan. | P2: Topologi Ring adalah suatu metode atau cara untuk menghubungkan dua atau lebih komputer secara serial, dengan memakai kabel utama sebagai center atau pusat lalu lintas data.\n', 'A', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:08:35', '2020-01-18 02:08:35'),
(32, '2', 'P1: File yang dijalankan untuk memulai Ms Word adalah WORD.exe | P2: File yang dijalankan untuk memulai Ms Word adalah WINWORD.exe', 'B', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:08:57', '2020-01-18 02:08:57'),
(33, '2', 'P1: Apache & IIS merupakan contoh web server. | P2: JRun & SunOne merupakan contoh web server. ', 'C', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:09:18', '2020-01-18 02:09:18'),
(34, '2', 'P1: Lapisan ke-5 ini berfungsi untuk mendefinisikan bagaimana koneksi dapat dibuat, dipelihara, atau dihancurkan. | P2: Selain itu, di level ini juga dilakukan resolusi nama. Protokol yang berada dalam lapisan ini adalah RPC (Remote Procedure Call), dan DSP (AppleTalk Data Stream Protocol).', 'C', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:09:40', '2020-01-18 02:09:40'),
(35, '2', 'P1: Full duplex adalah Komunikasi yang terjadi dapat mengirim dan menerima data secara bersamaan | P2: Half duplex  adalah Komunikasi yang terjadi dapat mengirim dan menerima data secara bergantian', 'C', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:10:09', '2020-01-18 02:10:09'),
(36, '2', 'P1: Kabel UTP memiliki kecepatan transfer data 10-100 Mbps | P2: Kabel UTP mempunyai biaya per node relative murah', 'B', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:10:25', '2020-01-18 02:10:25'),
(37, '2', 'P1: Batas default undo pada Microsoft Office adalah 50 kali | P2: Batas default undo pada Microsoft Office adalah 100 kali ', 'B', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:10:37', '2020-01-18 02:10:37'),
(38, '2', 'P1: Code “&#169;” pada html akan menghasilkan simbol “©” . | P2: Code “&copyright;” pada html akan menghasilkan simbol “©” .', 'A', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:10:49', '2020-01-18 02:10:49'),
(39, '2', 'P1: Komputer generasi kedua tidak lagi menggunakan tabung vakum sebagai medianya, melainkan teknologi transistor digadang-gadang adalah cikal bakal dari terciptanya komputer ini | P2: Komputer generasi keempat menggunakan teknologi Integrated Circuit (ICs)', 'A', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:10:59', '2020-01-18 02:10:59'),
(40, '2', 'P1: Android 2.3 Gingerbread Pertama kali diperkenalkan pada 6 Desember 2010. | P2: Android 3.0/3.1 Honeycomb Pertama kali diperkenalkan pada 22 Februari 2011 dan Motorola Xoom adalah yang pertama kali menggunakannya.', 'C', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:11:11', '2020-01-18 02:11:11'),
(41, '2', 'P1: Website Dinamis adalah web yang mempunyai halaman tidak berubah. | P2: Website Statis merupakan website yang secara struktur diperuntukan untuk update sesering mungkin.', 'D', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:11:30', '2020-01-18 02:11:30'),
(42, '2', 'P1: Teori – teori yang berhubungan dengan ketidakpastian pada penalaran, yaitu Teori Fuzzy | P2: Teori – teori yang berhubungan dengan ketidakpastian pada penalaran, yaitu Teori Shanon', 'C', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:11:40', '2020-01-18 02:11:40'),
(43, '2', 'P1: Tautologi termasuk dalam logika proposisi | P2: Konjungsi termasuk dalam logika proposisi', 'B', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:11:51', '2020-01-18 02:11:51'),
(44, '2', 'P1: Cara melakukan pembaharuan Android Studio dengan melalui Standart Development Kit | P2: Cara melakukan pembaharuan Android Studio dengan melalui situs resmi Android Studio', 'A', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:12:02', '2020-01-18 02:12:02'),
(45, '2', 'P1: WWW dapat digunakan gratis pada tanggal 30 April 1995. | P2: WWW dapat digunakan gratis pada tanggal 30 April 1993.', 'B', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:12:13', '2020-01-18 02:12:13'),
(46, '2', 'P1: Android menggunakan bahasa pemrograman berbasis Java | P2: Android menggunakan bahasa pemrograman berbasis Kotlin', 'C', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:12:30', '2020-01-18 02:12:30'),
(47, '2', 'P1: Format ukuran kertas 210 x 297 mm adalah A4 | P2: Format ukuran kertas 210 x 297 mm adalah A5', 'A', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:12:51', '2020-01-18 02:12:51'),
(48, '2', 'P1: Pengaturan, layout aplikasi android dilakukan melalui file layout java | P2: Pengaturan, layout aplikasi android dilakukan melalui file layout xml', 'B', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:13:04', '2020-01-18 02:13:04'),
(49, '2', 'P1: Tahun 1982, istilah dari “internet” mualai di gunakan dan TCP/IP di adopsi sebagai protocol. | P2: Tahun 1986, Mulai di perkenalkan sistem nama domain,yang sekarang dikenal dengan DNS', 'C', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:13:23', '2020-01-18 02:13:23'),
(50, '2', 'P1: Horizontal termasuk dalam orientasi dalam Linear Layout, pada Android | P2: Variabel termasuk dalam orientasi dalam Linear Layout, pada Android', 'A', 'Pernyataan 1 benar ', 'Pernyataan 2 benar ', 'Jawaban A dan B benar', 'Jawaban C salah', '2020-01-18 02:13:34', '2020-01-18 02:13:34'),
(51, '3', '-', 'C', '-', '-', '-', '-', '2020-01-18 02:13:34', '2020-01-18 02:13:34');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_logs`
--

CREATE TABLE `transaction_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `participant_id` bigint(20) NOT NULL,
  `question_id` bigint(20) NOT NULL,
  `answer` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `calc` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$WNp84aQoZ8YHnJnnlfczoe/nZjjNbfY5rcYRKwMRW4XJDD3Ifvh5W', 'admin', 'cxuczTVsREEf3PC58NwSy3mQxowXyaMlLA4qs8nrYFfg2WahHUi37Wc74egw', '2020-01-17 16:19:09', '2020-01-17 16:19:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curent_status`
--
ALTER TABLE `curent_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `observer_participants`
--
ALTER TABLE `observer_participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_logs`
--
ALTER TABLE `transaction_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curent_status`
--
ALTER TABLE `curent_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `observer_participants`
--
ALTER TABLE `observer_participants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `transaction_logs`
--
ALTER TABLE `transaction_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
