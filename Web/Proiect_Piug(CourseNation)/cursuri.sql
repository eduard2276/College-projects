-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 20, 2020 at 11:38 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `piug`
--

-- --------------------------------------------------------

--
-- Table structure for table `cursuri`
--

DROP TABLE IF EXISTS `cursuri`;
CREATE TABLE IF NOT EXISTS `cursuri` (
  `idCurs` int(11) NOT NULL AUTO_INCREMENT,
  `numeCurs` text NOT NULL,
  `topicCurs` text NOT NULL,
  `linkYoutube` text NOT NULL,
  `descriereCurs` text NOT NULL,
  `pozaCurs` text NOT NULL,
  `nrAccesari` int(11) NOT NULL,
  `timpCurs` float NOT NULL,
  `creatorCurs` text NOT NULL,
  PRIMARY KEY (`idCurs`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cursuri`
--

INSERT INTO `cursuri` (`idCurs`, `numeCurs`, `topicCurs`, `linkYoutube`, `descriereCurs`, `pozaCurs`, `nrAccesari`, `timpCurs`, `creatorCurs`) VALUES
(1, 'PHP Programming Language Tutorial', 'PHP', '<iframe width=\"700\" height=\"500\" src=\"https://www.youtube.com/embed/OK_JCtrrv-c\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Learn the PHP programming language in this full course / tutorial. The course is designed for new programmers, and will introduce common programming topics using the PHP language.', 'assets/img/courses/php5hr', 19, 5, 'freeCodeCamp.org'),
(2, 'C# Tutorial - Full Course for Beginners', 'C#', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/GhQdlIFylQ8\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'This course will give you a full introduction into all of the core concepts in C# (aka C Sharp). Follow along with the course and you\'ll be a C# programmer in no time!', 'assets/img/courses/csharp.jpg', 3, 4, 'freeCodeCamp.org'),
(3, 'Learn Java 8 - Full Tutorial for Beginners', 'Java', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/grEKMHGYyns\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Learn Java 8 and object oriented programming with this complete Java course for beginners.', 'assets/img/courses/java9hr.jpg', 3, 9, 'freeCodeCamp.org'),
(4, 'HTML Full Course - Build a Website', 'HTML', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/pQN-pnXPaVg\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Learn the basics of HTML5 and web development in this awesome course for beginners. ', 'assets/img/courses/html2hr.jpg', 9, 2, 'freeCodeCamp.org'),
(5, 'CSS Tutorial - Zero to Hero', 'CSS', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1Rs2ND1ryYc\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Learn CSS in this full course for beginners. CSS, or Cascading Style Sheet, is responsible for the styling and looks of a website. \r\n\r\nIn this course, we cover CSS from the ground up. You will learn everything from basic skills, such as coloring and text, to highly advanced skills, like custom animations.', 'assets/img/courses/csszth.jpg', 33, 6, 'freeCodeCamp.org'),
(6, 'C++ Tutorial for Beginners - Full Course', 'C++', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/vLnPwxZdW4Y\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'This course will give you a full introduction into all of the core concepts in C++. Follow along with the videos and you\'ll be a C++ programmer in no time!\r\n', 'assets/img/courses/cplusplus.jpg', 4, 4, 'freeCodeCamp.org'),
(7, 'Learn Python - Full Course for Beginners', 'Python', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/rfscVS0vtbw\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'This course will give you a full introduction into all of the core concepts in python. Follow along with the videos and you\'ll be a python programmer in no time!', 'assets/img/courses/python4hr.jpg', 8, 4, 'freeCodeCamp.org'),
(8, 'Java Tutorial for Beginners [2020]', 'Java', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/eIrMbAQSU34\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Java tutorial for beginners - Learn Java, the language behind millions of apps and websites. ', 'assets/img/courses/java2hr.jpg', 4, 2, 'Programming with Mosh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
