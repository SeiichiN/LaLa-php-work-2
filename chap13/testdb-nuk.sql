
--
-- データベース: `testdb`
--
CREATE DATABASE IF NOT EXISTS `testdb`;
USE `testdb`;

CREATE USER IF NOT EXISTS 'testuser'@'localhost'
IDENTIFIED BY 'testuser';

GRANT ALL ON testdb.* TO 'testuser'@'localhost';

-- --------------------------------------------------------

--
-- テーブルの構造 `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(10) AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `age` int(10) UNSIGNED DEFAULT NULL,
  `sex` varchar(2) NOT NULL DEFAULT '男',
  PRIMARY KEY (`id`)
);

--
-- テーブルのデータのダンプ `member`
--

INSERT INTO `member` (`name`, `age`, `sex`) VALUES
('持田香織', 26, '女'),
('佐藤一郎', 32, '男'),
('雨木さくら', 26, '女'),
('高峯信夫', 23, '男'),
('新倉建雄', 51, '男'),
('青木由香里', 32, '女'),
('佐々木慎吾', 28, '男'),
('井上珠理', 27, '女');


