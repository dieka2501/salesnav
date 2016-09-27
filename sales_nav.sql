-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 27, 2016 at 03:46 
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sales_nav`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `idprofile` int(11) NOT NULL,
  `profile_name` text COLLATE utf8_unicode_ci NOT NULL,
  `profile_email` text COLLATE utf8_unicode_ci NOT NULL,
  `profile_phone` text COLLATE utf8_unicode_ci NOT NULL,
  `profile_handphone` text COLLATE utf8_unicode_ci NOT NULL,
  `profile_job_position` text COLLATE utf8_unicode_ci NOT NULL,
  `profile_company` text COLLATE utf8_unicode_ci NOT NULL,
  `profile_business_line` text COLLATE utf8_unicode_ci NOT NULL,
  `profile_gender` enum('l','p') COLLATE utf8_unicode_ci NOT NULL,
  `profile_experiece` text COLLATE utf8_unicode_ci NOT NULL,
  `profile_interest` text COLLATE utf8_unicode_ci NOT NULL,
  `profile_note` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dikdik kusdinar', 'dieka.koes@gmail.com', '$2y$10$nzRO4oDbATtdihOc9t65l.pIQejHaSNBOdlKGjNamcldXHqqFVXDm', '26rM7tP0G82jlba6YuBplfwX5y6cjY6FcBYXdXmP0Y06ru5HZNSqjhy8Mah8', '2016-09-27 03:32:40', '2016-09-27 03:34:47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`idprofile`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `idprofile` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
