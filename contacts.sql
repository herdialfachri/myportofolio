-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2024 at 08:41 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(40, 'Agung Prayoga', 'ap412739@gmail.com', 'Hello herdi.. nama saya Agung, saya dari Jakarta dan sedang bekerja di industri pariwisata bagian IT. Saya sangat senang jika dapat berkolaborasi dengan anda, saya adalah seorang AI engineer dan saya sedang ingin berkolaborasi dengan seorang Mobile Developer seperti anda untuk membangun aplikasi katalog pariwisata di wilayah DKI Jakarta khususnya Food and Beverages. Thank you.', '2024-05-24 15:24:33'),
(41, 'Haykal Ari Senjaya', 'haykalari1234@gmail.com', 'Hello herdi.. nama saya Ari, saya dari Jakarta dan sedang bekerja di industri pariwisata bagian IT. Saya sangat senang jika dapat berkolaborasi dengan anda, saya adalah seorang AI engineer dan saya sedang ingin berkolaborasi dengan seorang Mobile Developer seperti anda untuk membangun aplikasi katalog pariwisata di wilayah DKI Jakarta khususnya Food and Beverages. Thank you.', '2024-05-24 15:25:54'),
(42, 'Anugerah Bintang Sentosa', 'anugerahareudang@gmail.com', 'Hello herdi.. nama saya Ugah, saya dari Jakarta dan sedang bekerja di industri pariwisata bagian IT. Saya sangat senang jika dapat berkolaborasi dengan anda, saya adalah seorang AI engineer dan saya sedang ingin berkolaborasi dengan seorang Mobile Developer seperti anda untuk membangun aplikasi katalog pariwisata di wilayah DKI Jakarta khususnya Food and Beverages. Thank you.', '2024-05-24 15:26:19'),
(43, 'Ujang Senjaya Kusuma Widodo', 'ujangwidodo@gmail.com', 'Hello herdi.. nama saya Widodo, saya dari Jakarta dan sedang bekerja di industri pariwisata bagian IT. Saya sangat senang jika dapat berkolaborasi dengan anda, saya adalah seorang AI engineer dan saya sedang ingin berkolaborasi dengan seorang Mobile Developer seperti anda untuk membangun aplikasi katalog pariwisata di wilayah DKI Jakarta khususnya Food and Beverages. Thank you.', '2024-05-24 15:26:45'),
(49, 'Abdel dan Temon', 'delmonte@gmail.com', 'Hello herdi.. nama saya Delmonte, saya dari Jakarta dan sedang bekerja di industri pariwisata bagian IT. Saya sangat senang jika dapat berkolaborasi dengan anda, saya adalah seorang AI engineer dan saya sedang ingin berkolaborasi dengan seorang Mobile Developer seperti anda untuk membangun aplikasi katalog pariwisata di wilayah DKI Jakarta khususnya Food and Beverages. Thank you.', '2024-05-24 17:03:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
