-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 21, 2019 at 01:31 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pessoas`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `nome` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT 'nome',
  `email` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT 'emial',
  `senha` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT 'seha',
  `senhac` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT 'seha dmS',
  `status` int(11) NOT NULL DEFAULT '1',
  `nivel` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senhac`, `status`, `nivel`) VALUES
(1, 'Ariosvaldo Risos Cledivanderson da Silva Neves', 'ari@osvaldo.com.br', 'ari', 'fc292bd7df071858c2d0f955545673c1', 1, 1),
(8, 'NATHAN RODRIGUES MENDES DE SOUSA', 'mendesousanth@gmail.com', '11', 'af52651b001c6d1b7b6fceb1b9a669cc', 1, 0),
(10, 'VICENILDA RODRIGUES MENDES DE SOUSA', 'nildanth@hotmail.com', '123', '202cb962ac59075b964b07152d234b70', 1, 0),
(11, 'aree', 'are@o', '12', 'c20ad4d76fe97759aa27a0c99bff6710', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
