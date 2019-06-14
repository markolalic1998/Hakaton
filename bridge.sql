-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 14, 2019 at 07:40 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bridge`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_rooms`
--

DROP TABLE IF EXISTS `chat_rooms`;
CREATE TABLE IF NOT EXISTS `chat_rooms` (
  `id_cr` int(11) NOT NULL AUTO_INCREMENT,
  `id_comm` int(11) NOT NULL,
  `cr_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_cr`),
  KEY `FK_COMMUNITY` (`id_comm`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chat_rooms`
--

INSERT INTO `chat_rooms` (`id_cr`, `id_comm`, `cr_name`) VALUES
(1, 4, 'general'),
(2, 4, 'php'),
(3, 5, 'Berba2019');

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

DROP TABLE IF EXISTS `community`;
CREATE TABLE IF NOT EXISTS `community` (
  `id_comm` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `c_abs` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `comm_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_comm`,`c_name`),
  KEY `c_name` (`c_name`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `community`
--

INSERT INTO `community` (`id_comm`, `c_name`, `created`, `c_abs`, `comm_logo`, `color`, `description`, `status`) VALUES
(1, 'LoL Srb', '2019-04-03', 'grigorlulic', 'fas fa-gamepad', 'blue', '', 0),
(2, 'VTS SU', '2019-04-16', 'urban', 'fas fa-book', 'royalblue', '', 1),
(3, 'Vasojevici', '2019-04-09', 'marko98', 'fas fa-flag', 'red', '', 0),
(4, 'Chole squad', '2019-04-16', 'urban', 'fab fa-php', 'blueviolet', '', 0),
(5, 'Malinari Kupusarevo', '2019-06-01', 'urban', 'fab fa-raspberry-pi', 'rosybrown', 'U saradnji sa Ambasadom Švajcarske i Razvojnom Agencijom „Zlatibor“ iz Užica, opština Trstenik je otpočela podelu sadnica malina, kupina i sistema za navodnjavanje, kao meru podsticaja za pomoć poljoprivrednicima trsteničke opštine Poljoprivrednici koji su dobili odobrenja o subvencijama po nedavno objavljenom konkursu, počeli su da preuzimaju sadnice maline i sistem za navodnjavanje. ', 0),
(14, 'Olandiro', '2019-06-11', 'kirilooo12', 'fas fa-flag', 'grey', 'Kaktosokdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comm_members`
--

DROP TABLE IF EXISTS `comm_members`;
CREATE TABLE IF NOT EXISTS `comm_members` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_comm` int(11) NOT NULL,
  `role_name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_member`),
  KEY `FK_USERS` (`username`),
  KEY `FK_COMMUNITY` (`id_comm`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comm_members`
--

INSERT INTO `comm_members` (`id_member`, `username`, `id_comm`, `role_name`) VALUES
(1, 'urban', 4, NULL),
(3, 'urban', 5, 'Gazda'),
(4, 'marko98', 4, NULL),
(5, 'grigorlulic', 4, NULL),
(6, 'marko98', 3, 'Poglavica'),
(7, 'tom_kirkman', 5, NULL),
(8, 'bruda1998', 5, NULL),
(9, 'jugoslav', 5, 'Malinar'),
(10, 'kristijan', 5, 'Popara'),
(11, 'marko98', 5, NULL),
(12, 'grigorlulic', 1, 'Chief'),
(13, 'grigorlulic', 5, NULL),
(14, 'grigorlulic', 3, NULL),
(16, 'marko98', 1, NULL),
(17, 'urban', 1, NULL),
(18, 'urban', 3, NULL),
(19, 'kuramble', 1, NULL),
(20, 'jovana1998', 3, NULL),
(21, 'jovana1998', 5, NULL),
(25, 'zdenko54', 5, NULL),
(26, 'zdenko54', 1, NULL),
(27, 'kirilooo12', 1, NULL),
(28, 'kirilooo12', 3, NULL),
(29, 'urban', 14, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comm_status`
--

DROP TABLE IF EXISTS `comm_status`;
CREATE TABLE IF NOT EXISTS `comm_status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `creator` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_comm` int(11) NOT NULL,
  `added` date NOT NULL,
  `s_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_status`),
  KEY `FK_USERS` (`creator`),
  KEY `FK_COMMUNITY` (`id_comm`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comm_status`
--

INSERT INTO `comm_status` (`id_status`, `creator`, `id_comm`, `added`, `s_content`) VALUES
(1, 'urban', 4, '2019-06-03', 'Choletovi kolacici nisu ukusni, jer ih kuva sa laptopom xe xe'),
(2, 'urban', 5, '2019-06-03', 'Jedi maline brateee!'),
(3, 'urban', 4, '2019-06-03', '$_SEXION[\'inside\'];'),
(4, 'urban', 4, '2019-06-03', 'Programer hoce pivo oh ne'),
(5, 'urban', 5, '2019-06-03', 'Maline nisu baline'),
(6, 'urban', 4, '2019-06-03', 'Hocu na samit php sl godine pls !?'),
(7, 'urban', 4, '2019-06-03', 'pls help me'),
(8, 'urban', 4, '2019-06-03', 'zzz'),
(9, 'urban', 4, '2019-06-03', 'ma da'),
(10, 'urban', 5, '2019-06-03', 'Maline su bile slatke, a noci nam bile kratke..'),
(11, 'urban', 4, '2019-06-04', ''),
(12, 'urban', 5, '2019-06-04', 'm'),
(13, 'grigorlulic', 4, '2019-06-04', 'Aj oladi Urbane '),
(14, 'urban', 5, '2019-06-05', 'Ima da ti radi'),
(15, 'marko98', 3, '2019-06-05', 'Pozdrav svima !'),
(16, 'urban', 5, '2019-06-05', 'maaaline'),
(17, 'urban', 4, '2019-06-07', 'AJ cao ti Aladine'),
(18, 'marko98', 4, '2019-06-10', 'asdasdasdasd'),
(19, 'kuramble', 1, '2019-06-10', 'Cao Kuramble je je onaj koji je onaj bio je'),
(20, 'jovana1998', 3, '2019-06-10', 'beri beri'),
(22, 'zdenko54', 1, '2019-06-11', 'Cao svima Heklaton'),
(23, 'urban', 3, '2019-06-11', 'Lijeva Reka'),
(24, 'urban', 4, '2019-06-11', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `cr_mess`
--

DROP TABLE IF EXISTS `cr_mess`;
CREATE TABLE IF NOT EXISTS `cr_mess` (
  `id_mess` int(11) NOT NULL AUTO_INCREMENT,
  `id_cr` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_mess`),
  KEY `FK_CR` (`id_cr`),
  KEY `FK_USERS` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cr_mess`
--

INSERT INTO `cr_mess` (`id_mess`, `id_cr`, `id_user`, `text`) VALUES
(1, 3, 1, 'SLikajte maline i napisite prijatno'),
(2, 3, 5, 'Predsednici Amerike ne znaju da beru maline');

-- --------------------------------------------------------

--
-- Table structure for table `c_logos`
--

DROP TABLE IF EXISTS `c_logos`;
CREATE TABLE IF NOT EXISTS `c_logos` (
  `id_logo` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_logo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `c_logos`
--

INSERT INTO `c_logos` (`id_logo`, `name`, `value`) VALUES
(1, 'php', 'fab fa-php'),
(2, 'book', 'fas fa-book'),
(3, 'flag', 'fas fa-flag'),
(4, 'raspberry', 'fab fa-raspberry-pi'),
(5, 'gamepad', 'fas fa-gamepad');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id_like` int(11) NOT NULL AUTO_INCREMENT,
  `id_topics` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_like`,`id_topics`,`username`),
  KEY `likes_ibfk_1` (`id_topics`),
  KEY `likes_ibfk_2` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id_like`, `id_topics`, `username`) VALUES
(38, 1, 'tom_kirkman'),
(42, 1, 'kevin2000'),
(58, 2, 'urban'),
(46, 3, 'marko98'),
(88, 3, 'urban'),
(44, 4, 'grigorlulic'),
(48, 4, 'marko98'),
(67, 4, 'urban'),
(79, 4, 'jovana1998'),
(83, 4, 'zdenko54'),
(75, 5, 'marko98'),
(76, 5, 'kuramble'),
(82, 5, 'zdenko54'),
(85, 5, 'urban'),
(87, 5, 'kirilooo12'),
(86, 9, 'urban');

-- --------------------------------------------------------

--
-- Table structure for table `notf`
--

DROP TABLE IF EXISTS `notf`;
CREATE TABLE IF NOT EXISTS `notf` (
  `id_notf` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_abs` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_notf`,`id_user`,`id_abs`),
  KEY `notf_ibfk_1` (`id_user`),
  KEY `notf_ibfk_2` (`id_abs`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notf`
--

INSERT INTO `notf` (`id_notf`, `id_user`, `id_abs`, `text`) VALUES
(1, 1, 2, 'asdasdasdasd'),
(2, 6, 2, 'aaa'),
(3, 2, 1, 'Topic which you are posted was deleted by abs grigorlulic'),
(4, 2, 1, 'Topic which you are posted was deleted by abs marko98');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `id_topics` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `creator` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `full_content` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `topic_likes` int(3) NOT NULL,
  PRIMARY KEY (`id_topics`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id_topics`, `title`, `content`, `creator`, `cover`, `tag`, `full_content`, `created`, `topic_likes`) VALUES
(1, 'Los Angeles', 'Najveci grad na pola planete xe xe', 'urban', 'la.jpg', 'Travel', 'asdasdasdasdasdasdasdasdasd', '2019-04-23', 0),
(2, 'Mandjelos', 'Americka hrana ne valja nista xe ', 'urban', 'los-angeles_main_1440x800.jpg', 'Foog', 'asdasdasdasdasd', '2019-04-23', 0),
(3, 'Film ,,Mozda ce pogoditi Ameriku ?!\"', 'Novo remek delo srpske kinematografije ', 'urban', 'amerika.jpg', 'Film', 'Trump was born and raised in the New York City borough of Queens and received an economics degree from the Wharton School. He was appointed president of his family\'s real estate business in 1971, renamed it The Trump Organization, and expanded it from Queens and Brooklyn into Manhattan. The company built or renovated skyscrapers, hotels, casinos, and golf courses. Trump later started various side ventures, including licensing his name for real estate and consumer products. He managed the company until his 2017 inauguration. He co-authored several books, including The Art of the Deal. He owned the Miss Universe and Miss USA beauty pageants from 1996 to 2015, and he produced and hosted The Apprentice, a reality television show, from 2003 to 2015. Forbes estimates his net worth to be $3.1 billion. ', '2019-04-23', 0),
(4, 'Konj pregazio auto', 'kopita su jaca od guma', 'urban', 'amerika.jpg', 'Horse', 'ojdadjaoiwjdoqijdioqjwsoiqwjsoiqjwjiooiqsjoiqwjsiqojsoiqjsoiqjwjosjqow', '2019-04-23', 0),
(5, 'Google', 'Google nalog je super stvar', 'marko98', 'chops_food_meat_roasted_81988_1920x1080.jpg', 'Net', '<p><u><strong><em>Srbija juri dok neko pomorandze guli</em></strong></u></p>\r\n', '2019-05-31', 0),
(9, 'Hakaton', 'Aj cao ssasdads', 'urban', 'eagle_wings-.jpg', 'school', 'lansdljalsdjaklsjdlkajsdlkjalkdjalksjdalkjsdlkkajsdljasldkj', '2019-06-11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `topic_comments`
--

DROP TABLE IF EXISTS `topic_comments`;
CREATE TABLE IF NOT EXISTS `topic_comments` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `id_topics` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `text` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `posted` datetime NOT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `id_topics` (`id_topics`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `topic_comments`
--

INSERT INTO `topic_comments` (`id_comment`, `id_topics`, `id_user`, `text`, `posted`) VALUES
(1, 3, 2, 'Nije los film xe xe', '2019-04-27 03:11:07'),
(2, 3, 1, 'Film je kao Margaret Tacer na pocetku mandata ako me r', '2019-04-27 09:00:00'),
(3, 3, 5, 'Ako bude eksploije u bioskopu, necu prihvatiti mesto diretora bioskopa', '2019-04-27 15:00:00'),
(4, 3, 1, 'aaaaa', '2019-04-27 17:54:55'),
(5, 3, 1, 'qwe', '2019-04-27 17:56:22'),
(6, 3, 1, 'eeee', '2019-04-27 17:58:48'),
(7, 3, 3, 'oooo cao cao je sam Kele volim jesti pite bele', '2019-04-27 17:59:26'),
(8, 2, 3, 'Los Mandjelos se pise poy', '2019-04-27 18:01:14'),
(9, 3, 3, 'asdas', '2019-04-27 18:17:01'),
(16, 3, 1, 'cao cao ajaksce', '2019-05-08 19:06:24'),
(17, 3, 1, 'ajmo raddddiiii skoro', '2019-05-08 19:07:03'),
(18, 3, 1, 'da li se refreshuje ?', '2019-05-08 19:07:22'),
(20, 4, 1, 'da da radi ajajx comm', '2019-05-08 19:08:15'),
(26, 2, 1, 'Gregor lulic p', '2019-05-09 09:24:46'),
(27, 3, 2, 'wp', '2019-05-09 09:31:51'),
(30, 4, 2, 'qqqq', '2019-05-09 10:15:05'),
(31, 4, 2, 'gg wp', '2019-05-09 10:17:31'),
(43, 1, 5, 'Gori Capitol bjez te djeco, postao sam Prezident ali ne onaj SIR ako me r msm samo ako me r \nKOSOVO JE SRBIJA btw', '2019-05-12 15:10:21'),
(44, 4, 6, 'jankovic luka ', '2019-05-13 14:04:24'),
(45, 4, 6, 'aj', '2019-05-13 14:04:32'),
(47, 3, 2, 'aj cao ', '2019-05-15 12:52:21'),
(50, 3, 2, 'ee', '2019-05-15 16:29:10'),
(52, 1, 2, 'cao', '2019-05-16 07:19:21'),
(54, 2, 1, 'aloooo', '2019-05-19 21:11:41'),
(56, 3, 2, 'aa', '2019-05-27 12:47:26'),
(57, 4, 2, 'asad', '2019-05-30 19:39:11'),
(58, 5, 2, 'aj kao neke provera', '2019-05-31 00:22:28'),
(59, 3, 2, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2019-05-31 12:19:12'),
(60, 2, 6, 'aj kao', '2019-06-08 14:15:45'),
(61, 3, 6, 'daaaaj', '2019-06-08 14:17:06'),
(62, 2, 6, 'komentar\n', '2019-06-08 14:24:17'),
(63, 5, 1, 'cao cao', '2019-06-10 08:39:37'),
(64, 5, 1, 'aaaa', '2019-06-10 09:04:49'),
(65, 1, 1, 'tttt', '2019-06-10 12:38:17'),
(67, 5, 14, 'fuj', '2019-06-11 00:47:50'),
(68, 3, 1, 'hakaton', '2019-06-11 06:12:55'),
(69, 9, 1, 'sasda', '2019-06-11 06:18:00'),
(70, 5, 16, 'qqqw', '2019-06-11 19:28:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `abs` tinyint(1) NOT NULL,
  `logged` tinyint(1) NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registered` date NOT NULL,
  `banned` tinyint(1) NOT NULL,
  `warn` int(1) NOT NULL,
  PRIMARY KEY (`id_user`,`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `first`, `last`, `email`, `birth`, `abs`, `logged`, `picture`, `registered`, `banned`, `warn`) VALUES
(1, 'urban', 'aSD2213qse21ewdqwQWEQDWQWE13d1cfaccc9115dfe067e4e976d22d3df9aSD2213qse21ewdqwQWEQDWQWE13', 'Dario', 'Urban', 'urban98@gmail.com', '2019-04-16', 0, 0, 'bil.jpg', '2019-04-23', 0, 0),
(2, 'marko98', 'aSD2213qse21ewdqwQWEQDWQWE133719e2a03e33cb9d46498394e3e71490aSD2213qse21ewdqwQWEQDWQWE13', 'Marko', 'Lalic', 'markolalic1998@gmail.com', '2019-04-16', 1, 0, 'default.jpg', '2019-04-23', 0, 0),
(3, 'kevin2000', 'kevin2000', 'kevin', 'kevinson', 'kevin@gmail.com', '2016-04-21', 0, 0, 'default.jpg', '2019-04-23', 0, 0),
(5, 'tom_kirkman', 'thomaskirkman', 'Thomas', 'Kirkman', 'tomkirkman@gmail.com', '1969-12-31', 0, 0, 'tom.jpg', '2019-04-23', 1, 0),
(6, 'grigorlulic', 'aSD2213qse21ewdqwQWEQDWQWE132f339bb7602292e8558f980e1d293793aSD2213qse21ewdqwQWEQDWQWE13', 'Gregor', 'Bulic', 'gregorijana@gmail.com', '2001-07-16', 1, 0, 'default.jpg', '2019-05-12', 0, 0),
(7, 'aleksaiv', 'aSD2213qse21ewdqwQWEQDWQWE13f3071ec919ba79ea9d6fbe49c2c53a3daSD2213qse21ewdqwQWEQDWQWE13', 'Aleksa', 'Ivanovic', 'aleksaiv@gmail.com', '2001-03-01', 0, 0, 'default.jpg', '2019-05-14', 1, 0),
(8, 'jugoslav', 'aSD2213qse21ewdqwQWEQDWQWE13196afcc6245bf644a2a2878ce2f6c9e0aSD2213qse21ewdqwQWEQDWQWE13', 'Jugoslav', 'Cosic', 'jugocos@gmail.com', '1999-01-20', 0, 0, 'default.jpg', '2019-05-15', 0, 0),
(9, 'kristijan', 'aSD2213qse21ewdqwQWEQDWQWE1336be643e3c2e1d70a40be66843285c65aSD2213qse21ewdqwQWEQDWQWE13', 'Kristijan', 'Palilulic', 'lala@asda.com', '1997-12-29', 0, 0, 'default.jpg', '2019-05-16', 0, 0),
(10, 'bruda1998', 'aSD2213qse21ewdqwQWEQDWQWE135ac03a802bba269a3755a7b7170159e1aSD2213qse21ewdqwQWEQDWQWE13', 'Branislav', 'Brudaric', 'brudaric@gmail.com', '1982-12-31', 0, 0, 'default.jpg', '2019-05-16', 0, 0),
(11, 'zmiki1995', 'aSD2213qse21ewdqwQWEQDWQWE1353f31f271a92acf7d426ff26a9010a2caSD2213qse21ewdqwQWEQDWQWE13', 'Olad', 'Tibetijevic', 'kiriloJjulink@gmail.com', '2000-12-31', 0, 0, 'default.jpg', '2019-06-10', 0, 0),
(12, 'kuramble', 'aSD2213qse21ewdqwQWEQDWQWE135a888f44bf52bb500db9b3690fe6fbd3aSD2213qse21ewdqwQWEQDWQWE13', 'Kuramble', 'Kurtios', 'kurti@asddas.com', '2000-12-31', 0, 0, 'default.jpg', '2019-06-10', 0, 0),
(13, 'jovana1998', 'aSD2213qse21ewdqwQWEQDWQWE1372e66f6ae5981fe050e0e1451b95ddf8aSD2213qse21ewdqwQWEQDWQWE13', 'Jovanka ', 'Jovic', 'asasd@asdasd.com', '1999-12-31', 0, 0, 'default.jpg', '2019-06-10', 0, 0),
(14, 'zdenko54', 'aSD2213qse21ewdqwQWEQDWQWE139644d47b0e578c9ebb6e53f23bd34931aSD2213qse21ewdqwQWEQDWQWE13', 'Zdenko', 'Krivokapic', 'zdene54@gmail.com', '1999-12-31', 0, 0, 'default.jpg', '2019-06-11', 0, 0),
(15, 'ilonka1999', 'aSD2213qse21ewdqwQWEQDWQWE13325099f700633e3e121ba5b9d95b37e2aSD2213qse21ewdqwQWEQDWQWE13', 'Ilonka', 'Grba', 'ilonka@gmail.com', '1999-12-31', 0, 0, 'default.jpg', '2019-06-11', 0, 0),
(16, 'kirilooo12', 'aSD2213qse21ewdqwQWEQDWQWE13da6d7143de3dee99dcd7cfa0af315f1baSD2213qse21ewdqwQWEQDWQWE13', 'Kirilo', 'BOljevic', 'kiri@sads.com', '2001-12-09', 0, 0, 'default.jpg', '2019-06-11', 0, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat_rooms`
--
ALTER TABLE `chat_rooms`
  ADD CONSTRAINT `chat_rooms_ibfk_1` FOREIGN KEY (`id_comm`) REFERENCES `community` (`id_comm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comm_members`
--
ALTER TABLE `comm_members`
  ADD CONSTRAINT `comm_members_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comm_members_ibfk_2` FOREIGN KEY (`id_comm`) REFERENCES `community` (`id_comm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comm_status`
--
ALTER TABLE `comm_status`
  ADD CONSTRAINT `comm_status_ibfk_1` FOREIGN KEY (`creator`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comm_status_ibfk_2` FOREIGN KEY (`id_comm`) REFERENCES `community` (`id_comm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cr_mess`
--
ALTER TABLE `cr_mess`
  ADD CONSTRAINT `cr_mess_ibfk_1` FOREIGN KEY (`id_cr`) REFERENCES `chat_rooms` (`id_cr`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cr_mess_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`id_topics`) REFERENCES `topics` (`id_topics`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notf`
--
ALTER TABLE `notf`
  ADD CONSTRAINT `notf_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notf_ibfk_2` FOREIGN KEY (`id_abs`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `topic_comments`
--
ALTER TABLE `topic_comments`
  ADD CONSTRAINT `topic_comments_ibfk_1` FOREIGN KEY (`id_topics`) REFERENCES `topics` (`id_topics`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `topic_comments_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
