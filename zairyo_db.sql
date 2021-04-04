-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2021 at 10:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zairyo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `s_list`
--

CREATE TABLE `s_list` (
  `dbnm` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qty` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `s_list`
--

INSERT INTO `s_list` (`dbnm`, `category`, `qty`) VALUES
('user2', '菓子類', 22),
('user1', 'カップ麺', 10),
('user1', 'カレー', 10),
('user1', 'パスタ', 5),
('user1', 'パスタソース', 5),
('user1', '米', 10),
('user1', '缶詰', 10),
('user1', '菓子類', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(12) NOT NULL,
  `category` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `item` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `expire` date NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `category`, `item`, `location`, `expire`, `indate`) VALUES
(1, '缶詰', '鯖味噌煮', '冷蔵庫', '2025-11-26', '2021-03-29 21:47:49'),
(2, '缶詰', '鯖味噌煮', '冷蔵庫', '2025-11-26', '2021-03-29 21:47:49'),
(3, '缶詰', '鯖味噌煮', '冷蔵庫', '2023-08-26', '2021-03-29 21:47:49'),
(4, '缶詰', '鯖トマト煮', '冷蔵庫', '2025-03-11', '2021-03-29 21:48:23'),
(5, '缶詰', '鯖トマト煮', '冷蔵庫', '2025-03-11', '2021-03-29 21:48:23'),
(6, '缶詰', 'ツナ缶', '冷蔵庫', '2024-07-16', '2021-03-29 21:49:10'),
(7, '缶詰', 'ツナ缶', '冷蔵庫', '2024-07-16', '2021-03-29 21:49:10'),
(8, '缶詰', 'ツナ缶', '冷蔵庫', '2024-07-16', '2021-03-29 21:49:10'),
(9, '缶詰', 'ツナ缶', '冷蔵庫', '2024-07-16', '2021-03-29 21:49:10'),
(10, 'カップ麺', '焼そば', 'キチンキャビネット', '2023-01-08', '2021-03-29 21:49:55'),
(11, 'カップ麺', '焼そば', 'キチンキャビネット', '2023-01-08', '2021-03-29 21:49:55'),
(12, 'カップ麺', '焼そば', 'キチンキャビネット', '2023-01-08', '2021-03-29 21:49:55'),
(13, 'カップ麺', '担々麺', 'キチンキャビネット', '2022-12-08', '2021-03-29 21:50:17'),
(14, 'カップ麺', '担々麺', 'キチンキャビネット', '2022-12-08', '2021-03-29 21:50:17'),
(16, 'カップ麺', '味噌ラーメン', 'キチンキャビネット', '2023-04-10', '2021-03-29 21:50:53'),
(18, 'カップ麺', '味噌ラーメン', 'キチンキャビネット', '2022-04-10', '2021-03-29 21:50:53'),
(19, 'パスタ', 'スパゲティー', '押入れ', '2024-11-09', '2021-03-29 21:51:23'),
(20, 'パスタ', 'スパゲティー', '押入れ', '2024-11-09', '2021-03-29 21:51:23'),
(21, 'パスタ', 'スパゲティー', '押入れ', '2024-11-09', '2021-03-29 21:51:23'),
(22, 'パスタ', 'スパゲティー', '押入れ', '2021-08-12', '2021-03-29 21:51:49'),
(23, 'パスタソース', 'トマトソース', '冷蔵庫', '2023-06-06', '2021-03-29 21:52:14'),
(24, 'パスタソース', 'トマトソース', '冷蔵庫', '2023-06-06', '2021-03-29 21:52:14'),
(25, 'パスタソース', 'ペスト', '冷蔵庫', '2023-02-23', '2021-03-29 21:52:36'),
(26, 'パスタソース', 'ペスト', '冷蔵庫', '2023-02-23', '2021-03-29 21:52:36'),
(27, 'パスタソース', 'アラビアータ', '冷蔵庫', '2022-01-07', '2021-03-29 21:53:01'),
(28, '菓子類', '羊羮', '非常持出袋', '2023-10-04', '2021-03-29 21:53:32'),
(29, '菓子類', '羊羮', '非常持出袋', '2023-10-04', '2021-03-29 21:53:32'),
(30, '菓子類', '羊羮', '非常持出袋', '2023-10-04', '2021-03-29 21:53:32'),
(31, '菓子類', '羊羮', '非常持出袋', '2023-10-04', '2021-03-29 21:53:32'),
(32, '菓子類', '板チョコ', '押入れ', '2023-06-13', '2021-03-29 21:53:59'),
(33, '菓子類', '板チョコ', '押入れ', '2023-06-13', '2021-03-29 21:53:59'),
(34, '菓子類', '板チョコ', '押入れ', '2023-06-13', '2021-03-29 21:53:59'),
(38, 'カレー', '野菜カレー', 'キチンキャビネット', '2024-08-08', '2021-03-31 14:44:08'),
(39, 'カレー', '野菜カレー', 'キチンキャビネット', '2024-08-08', '2021-03-31 14:44:08'),
(40, 'カレー', '野菜カレー', 'キチンキャビネット', '2024-08-08', '2021-03-31 14:44:08'),
(41, 'カレー', '野菜カレー', 'キチンキャビネット', '2024-08-08', '2021-03-31 14:44:08'),
(42, 'カレー', 'キーマカレー', 'キチンキャビネット', '2025-01-20', '2021-03-31 14:44:35'),
(43, 'カレー', 'キーマカレー', 'キチンキャビネット', '2025-01-20', '2021-03-31 14:44:35'),
(44, 'カレー', 'ハヤシライス', 'キチンキャビネット', '2023-09-17', '2021-03-31 14:44:59'),
(45, 'カレー', 'ハヤシライス', 'キチンキャビネット', '2023-09-17', '2021-03-31 14:44:59'),
(46, 'カレー', 'ハヤシライス', 'キチンキャビネット', '2023-09-17', '2021-03-31 14:44:59'),
(47, '米', 'インスタントライス', 'キチンキャビネット', '2022-12-07', '2021-03-31 14:45:39'),
(48, '米', 'インスタントライス', 'キチンキャビネット', '2022-12-07', '2021-03-31 14:45:39'),
(50, '米', 'インスタントライス', 'キチンキャビネット', '2022-12-07', '2021-03-31 14:45:39'),
(51, '米', 'インスタントライス', 'キチンキャビネット', '2022-12-07', '2021-03-31 14:45:39'),
(52, '米', 'インスタントライス', 'キチンキャビネット', '2022-12-07', '2021-03-31 14:45:39'),
(53, '米', 'インスタントライス', 'キチンキャビネット', '2022-12-07', '2021-03-31 14:45:39'),
(54, '米', 'インスタントライス', 'キチンキャビネット', '2022-12-07', '2021-03-31 14:45:39'),
(55, '米', 'インスタントライス', 'キチンキャビネット', '2022-12-07', '2021-03-31 14:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `user2`
--

CREATE TABLE `user2` (
  `id` int(12) NOT NULL,
  `category` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `item` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `expire` date NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user2`
--

INSERT INTO `user2` (`id`, `category`, `item`, `location`, `expire`, `indate`) VALUES
(10, '菓子類', 'チョコレート', '菓子引出し', '2022-04-13', '2021-03-31 18:36:56'),
(11, '菓子類', 'チョコレート', '菓子引出し', '2022-04-13', '2021-03-31 18:36:56'),
(12, '菓子類', 'チョコレート', '菓子引出し', '2022-04-13', '2021-03-31 18:36:56'),
(13, '菓子類', 'チョコレート', '菓子引出し', '2022-04-13', '2021-03-31 18:36:56'),
(14, '菓子類', 'チョコレート', '菓子引出し', '2022-04-13', '2021-03-31 18:36:56'),
(15, '菓子類', 'お煎餅', '菓子引出し', '2022-11-05', '2021-03-31 18:37:24'),
(16, '菓子類', 'お煎餅', '菓子引出し', '2022-11-05', '2021-03-31 18:37:24'),
(17, '菓子類', 'お煎餅', '菓子引出し', '2022-11-05', '2021-03-31 18:37:24'),
(18, '菓子類', 'お煎餅', '菓子引出し', '2022-11-05', '2021-03-31 18:37:24'),
(19, '菓子類', 'お煎餅', '菓子引出し', '2022-11-05', '2021-03-31 18:37:24'),
(20, '菓子類', 'お煎餅', '菓子引出し', '2022-11-05', '2021-03-31 18:37:24'),
(21, '菓子類', 'お煎餅', '菓子引出し', '2022-11-05', '2021-03-31 18:37:24'),
(22, '菓子類', '羊羮', '菓子引出し', '2025-03-03', '2021-03-31 18:37:47'),
(23, '菓子類', '羊羮', '菓子引出し', '2025-03-03', '2021-03-31 18:37:47'),
(24, '菓子類', '羊羮', '菓子引出し', '2025-03-03', '2021-03-31 18:37:47'),
(25, '菓子類', '羊羮', '菓子引出し', '2025-03-03', '2021-03-31 18:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `user_id`
--

CREATE TABLE `user_id` (
  `id` int(12) NOT NULL,
  `user_nm` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `user_pw` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `u_table` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_id`
--

INSERT INTO `user_id` (`id`, `user_nm`, `user_pw`, `u_table`) VALUES
(21, 'user1', 'pass1', 'user1'),
(22, 'user2', 'pass2', 'user2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user2`
--
ALTER TABLE `user2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_id`
--
ALTER TABLE `user_id`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_nm` (`user_nm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `user2`
--
ALTER TABLE `user2`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_id`
--
ALTER TABLE `user_id`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `s_list`
--
ALTER TABLE `s_list`
  ADD CONSTRAINT `s_list_ibfk_1` FOREIGN KEY (`dbnm`) REFERENCES `user_id` (`user_nm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
