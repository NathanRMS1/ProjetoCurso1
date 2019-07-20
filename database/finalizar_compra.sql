-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2019 at 02:43 AM
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
-- Table structure for table `finalizar_compra`
--

DROP TABLE IF EXISTS `finalizar_compra`;
CREATE TABLE IF NOT EXISTS `finalizar_compra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_comprador` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `email_comprador` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `id_produto_comprado` int(11) DEFAULT NULL,
  `produto_comprado` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `meio_pagamento` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `valor_total` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `data_compra` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `finalizar_compra`
--

INSERT INTO `finalizar_compra` (`id`, `nome_comprador`, `email_comprador`, `id_produto_comprado`, `produto_comprado`, `meio_pagamento`, `valor_total`, `data_compra`) VALUES
(1, 'aree', 'are@o', 1, 'Monitor LG LED 25\" Full HD Widescreen - 2 HDMI', 'A Vista', '1199', '08/06/2019'),
(2, 'aree', 'are@o', 1, 'Monitor LG LED 25\" Full HD Widescreen - 2 HDMI', 'A Vista', '1199', '08/06/2019');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
