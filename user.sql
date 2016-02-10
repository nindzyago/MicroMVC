-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 10 2016 г., 17:11
-- Версия сервера: 5.5.43-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `micro`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `index_username` (`username`),
  UNIQUE KEY `index_email` (`email`),
  KEY `index_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `address`, `password`) VALUES
(1, 'wfwfwef', '111111', 'wfwef@wefwef.wfw', 'wfqwfqwfqwefqwefqwefwe', '111111'),
(2, 'test', 'tttttttt', 'mm@mm.mm', 'wfwfwqfqwgfqegqgqegegergeqrg', '123456'),
(9, 'rrererer', 'ererererer', 'wfwef@f2f.ff', 'wfwfwqfqwef', '111111'),
(10, 'jfjlgljhgljhg', 'wfwefwefwefew', 'wfwef@wfwef.ef', 'qwfqwefqwefqwefwqefqwef', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
