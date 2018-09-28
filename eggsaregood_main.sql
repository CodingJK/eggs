-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2018 at 05:58 PM
-- Server version: 10.0.36-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eggsaregood_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images_sm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `sp` tinyint(1) NOT NULL DEFAULT '0',
  `gp` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `firstname`, `lastname`, `email`, `phone`, `images`, `images_sm`, `display`, `sp`, `gp`, `created_at`, `updated_at`) VALUES
(1, '陈', '天任', 'forceseal@hotmail.com', '6479686025', '1.jpg', '1_small.jpg', 0, 0, 0, '2018-09-28 04:08:48', '2018-09-28 21:36:06'),
(2, 'LIU', 'JIAO', 'venus0604@sina.com', '7783888664', '2.jpg', '2_small.jpg', 0, 0, 0, '2018-09-28 17:21:22', '2018-09-28 21:19:05'),
(3, 'Zhang', 'Lingli', 'ling2maomao@hotmail.com', '6479901005', '3.jpeg', '3_small.jpeg', 0, 0, 0, '2018-09-28 19:38:18', '2018-09-28 21:32:11'),
(4, 'Shi', 'Jingying', 'crystalshi2015@gmail.com', '6472160880', '4.jpeg', '4_small.jpeg', 0, 0, 0, '2018-09-28 19:54:57', '2018-09-28 21:32:38'),
(5, 'JI', 'YIYUN', 'jessiexj1991@gmail.com', '4165605997', '5.png', '5_small.png', 0, 0, 0, '2018-09-28 19:55:30', '2018-09-28 21:18:33'),
(7, 'Eita', 'Wani', 'eashita@hotmail.com', '6474917003', '7.png', '7_small.png', 0, 0, 0, '2018-09-28 20:57:29', '2018-09-28 21:01:22'),
(8, 'Sun', 'Lin', 'sherry730@hotmail.com', '6479986219', '8.png', '8_small.png', 0, 0, 0, '2018-09-28 21:37:58', '2018-09-28 21:37:59'),
(9, 'Sun', 'Lin', 'sherry730@hotmail.com', '6479986219', '9.png', '9_small.png', 0, 0, 0, '2018-09-28 21:40:59', '2018-09-28 21:40:59'),
(10, 'sun', 'lin', 'sherry730@hotmail.com', '6479986219', '10.png', '10_small.png', 0, 0, 0, '2018-09-28 21:46:01', '2018-09-28 21:46:01'),
(11, 'sun', 'lin', 'sherry730@hotmail.com', '6479986219', '11.png', '11_small.png', 0, 0, 0, '2018-09-28 21:47:10', '2018-09-28 21:47:10'),
(12, 'Sun', 'Lin', 'sherry730@hotmail.com', '6479986219', '12.png', '12_small.png', 0, 0, 0, '2018-09-28 21:48:45', '2018-09-28 21:48:45'),
(13, 'sun', 'lin', 'sherry730@hotmail.com', '6479986219', '13.png', '13_small.png', 0, 0, 0, '2018-09-28 21:52:55', '2018-09-28 21:52:55'),
(14, 'sun', 'lin', 'sherry730@hotmail.com', '6479986219', '14.png', '14_small.png', 0, 0, 0, '2018-09-28 21:54:12', '2018-09-28 21:54:12'),
(15, 'sun', 'lin', 'sherry730@hotmail.com', '6479986219', '15.png', '15_small.png', 0, 0, 0, '2018-09-28 21:55:20', '2018-09-28 21:55:20'),
(16, 'sun', 'lin', 'sherry730@hotmail.com', '6479986219', '16.png', '16_small.png', 0, 0, 0, '2018-09-28 21:57:18', '2018-09-28 21:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kangfei', '1@1.com', '$2y$10$kDQBcPvubddhK4AQ7zccfe9u2VdtCtHeC6jgvqCXkwoy6XaRRCx.u', 'zi5BKQOs4CxSykf2TNzNOICVG5tsCtoMZhtRjrTOFxWU2z97XEbpBQkYoUug', '2018-09-12 13:23:58', '2018-09-12 13:23:58'),
(2, 'Kooadmin', 'kooadmin', '$2y$10$t1x2WItTTByfUytk0x9AZuV1PvPPdZ8n0GRNlWWKf.wkTiS2axMfm', 'Vm3JvhvhaG0fxgPuXBpAUX0fTMs8qbd5aMzqAwbsODC0pYgxE96rv1os2deM', '2018-09-28 20:40:31', '2018-09-28 20:40:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

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
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
