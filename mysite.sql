-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 06 2023 г., 21:07
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mysite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `username_2` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `username`, `title`, `text`, `data`) VALUES
(1, 'gjghg', 'прпрапа', 'аповвапвв', '2023-01-18'),
(2, 'gjghg', 'воквкекеу', 'унуункук', '2023-01-04'),
(3, 'yguytut', 'арарпара', 'апввп', '2023-01-14'),
(4, 'yguytut', 'впвапв', 'рпыарвыраы', '2023-01-05'),
(5, 'yguytut', 'впвапв', 'рпыарвыраы', '2023-01-05'),
(6, 'yguytut', 'впвапв', 'рпыарвыраы', '2023-01-05'),
(7, 'yguytut', 'впвапв', 'рпыарвыраы', '2023-01-05'),
(8, 'yguytut', 'впвапв', 'рпыарвыраы', '2023-01-05'),
(9, 'yguytut', 'впвапв', 'рпыарвыраы', '2023-01-05'),
(10, 'yguytut', 'впвапв', 'рпыарвыраы', '2023-01-05'),
(11, 'yguytut', 'впвапв', 'рпыарвыраы', '2023-01-05'),
(12, 'yguytut', 'впвапв', 'рпыарвыраы', '2023-01-05'),
(13, 'yguytut', 'впвапв', 'рпыарвыраы', '2023-01-05'),
(14, 'yguytut', 'впвапв', 'рпыарвыраы', '2023-01-05'),
(15, 'nina', 'title', 'text', '2023-01-12'),
(16, 'ninochka', 'post', 'text text ext', '2022-12-28'),
(17, 'kolya', 'text', 'text', '0000-00-00'),
(18, 'kolya', 'title', 'text', '0000-00-00'),
(19, 'kolya', 'title', 'text', '2002-02-20'),
(20, 'kolya', 'title', 'text', '2002-02-20'),
(21, 'kolya', 'title', 'text', '2002-02-20'),
(22, 'anna', 'title', 'text text text text text', '2004-02-20'),
(23, 'danya', 'title', 'text text text text ', '2006-02-20');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `image` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `username_2` (`username`),
  KEY `username_3` (`username`),
  KEY `username_4` (`username`),
  KEY `username_5` (`username`),
  KEY `username_6` (`username`),
  KEY `username_7` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=182 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `image`) VALUES
(1, NULL, NULL, NULL, NULL, ''),
(13, 'рор', 'ytrtyryr', 'hghjghg', '232434sds', ''),
(32, 'nina', 'nina', 'fgfgff', '12345', ''),
(42, 'nina', 'nna', 'jhgkgkh', '123456', ''),
(57, 'adm', 'admin', 'ghghgh', '12345', ''),
(63, 'Vasya', 'vasya', 'fgfdgf', '1234567', ''),
(65, 'kolya', 'kolya', 'fgfgfgfgd', '12345', ''),
(72, 'Lesha', 'Lesha', 'gjhgjh', '12345', ''),
(77, 'kostya', 'kostya', 'fdgfggg', '12345', ''),
(93, 'olya', 'olga', 'fdgfggg', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(108, 'nastya', 'nastya', 'ghghg', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(110, 'anya', 'anna', 'fgfgffffgf', '21232f297a57a5a743894a0e4a801fc3', ''),
(133, 'tanya', 'tatiana', 'tan.14@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(151, 'ilya', 'ilya', 'ilya123@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(154, 'tamara', 'toma', 'toma@gmail.com', '058576c4bfcb80f21a15c859ee5c30ae', ''),
(157, 'hjhjh', 'ghg', 'sdsdssd@sdsd', '7879377bfc39b82e00b803c547910c5f', ''),
(174, 'dan', 'danya', 'dan123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
