-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- ホスト: mysql154.phy.lolipop.lan
-- 生成日時: 2022 年 5 月 27 日 11:33
-- サーバのバージョン: 5.6.23-log
-- PHP のバージョン: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `LAA1291599-teamkakizaki`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `Client`
--

CREATE TABLE IF NOT EXISTS `Client` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mailaddress` varchar(50) NOT NULL,
  `loginid` varchar(20) NOT NULL,
  `loginpw` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `telephone` bigint(11) NOT NULL,
  `postalcode` int(7) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mailaddress` (`mailaddress`,`loginid`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- テーブルのデータのダンプ `Client`
--

INSERT INTO `Client` (`id`, `mailaddress`, `loginid`, `loginpw`, `name`, `telephone`, `postalcode`, `address`) VALUES
(1, 'aaaa@gmail.com', 'aaaa@gmail.com', 'aaabbbccc', '麻生　太郎', 0, 8120019, '博多区');

-- --------------------------------------------------------

--
-- テーブルの構造 `Detail`
--

CREATE TABLE IF NOT EXISTS `Detail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `detail_id` varchar(50) NOT NULL,
  `goods_id` int(10) NOT NULL,
  `goodsname` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- テーブルのデータのダンプ `Detail`
--

INSERT INTO `Detail` (`id`, `detail_id`, `goods_id`, `goodsname`, `price`, `quantity`) VALUES
(1, '120211207122035', 1, '豚肉', 800, 1),
(2, '120211207122508', 2, '牛肉', 1000, 1),
(3, '120211207132552', 1, '豚肉', 800, 1),
(4, '120211207132552', 2, '牛肉', 1000, 1),
(5, '120211207140403', 2, '牛肉', 1000, 10),
(6, '120211208130800', 1, '豚肉', 800, 10),
(7, '120211208130800', 2, '牛肉', 1000, 10);

-- --------------------------------------------------------

--
-- テーブルの構造 `Goods`
--

CREATE TABLE IF NOT EXISTS `Goods` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `goodsname` varchar(50) NOT NULL,
  `jancode` bigint(13) NOT NULL,
  `category` varchar(10) NOT NULL,
  `goodsstatus` varchar(999) NOT NULL,
  `price` int(10) NOT NULL,
  `market_id` int(10) NOT NULL,
  `stockstatus` tinyint(1) NOT NULL,
  `image` varchar(999) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- テーブルのデータのダンプ `Goods`
--

INSERT INTO `Goods` (`id`, `goodsname`, `jancode`, `category`, `goodsstatus`, `price`, `market_id`, `stockstatus`, `image`) VALUES
(1, '豚肉', 2147483647666, '肉類', '福岡産', 800, 1, 1, '豚肉.jpg'),
(2, '牛肉', 9874565412365, '肉類', '広島産', 1000, 1, 1, '牛肉.jpg');

-- --------------------------------------------------------

--
-- テーブルの構造 `History`
--

CREATE TABLE IF NOT EXISTS `History` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `client_id` int(10) NOT NULL,
  `detail_id` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- テーブルのデータのダンプ `History`
--

INSERT INTO `History` (`id`, `client_id`, `detail_id`, `date`) VALUES
(1, 1, '120211207122035', '0000-00-00'),
(2, 1, '120211207122508', '2021-12-07'),
(3, 1, '120211207132552', '2021-12-07'),
(4, 1, '120211207140403', '2021-12-07'),
(5, 1, '120211208130800', '2021-12-08');

-- --------------------------------------------------------

--
-- テーブルの構造 `Marklist`
--

CREATE TABLE IF NOT EXISTS `Marklist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `telephone` bigint(11) NOT NULL,
  `image` varchar(999) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  FULLTEXT KEY `name_2` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- テーブルのデータのダンプ `Marklist`
--

INSERT INTO `Marklist` (`id`, `name`, `longitude`, `latitude`, `telephone`, `image`) VALUES
(1, 'testmaket1', 10, 10, 0, '1.jpg'),
(2, 'testmaket2', 11, 11, 0, '2.jpg'),
(3, 'testmaket3', 12, 12, 0, '3.jpg'),
(4, 'testmaket4', 13, 13, 0, '4.jpg'),
(5, 'testmaket5', 14, 14, 0, '5.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
