-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2025-04-25 13:52:17
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `testdb`
--
CREATE DATABASE IF NOT EXISTS `testdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `testdb`;

-- --------------------------------------------------------

--
-- テーブルの構造 `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `age` int(10) UNSIGNED DEFAULT NULL,
  `sex` varchar(2) NOT NULL DEFAULT '男'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `member`
--

INSERT INTO `member` (`id`, `name`, `age`, `sex`) VALUES
(1, '持田香織', 26, '女'),
(2, '佐藤一郎', 32, '男'),
(3, '雨木さくら', 26, '女'),
(4, '高峯信夫', 23, '男'),
(5, '新倉建雄', 51, '男'),
(6, '青木由香里', 32, '女'),
(7, '佐々木慎吾', 28, '男'),
(8, '井上珠理', 27, '女');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
