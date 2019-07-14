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
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'img/produtos/not_defined.png',
  `tipo_produto` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'Not Defined',
  `marca` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'Not Defined',
  `titulo_produto` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'Not Defined',
  `preco` float NOT NULL,
  `promocao` int(11) NOT NULL DEFAULT '0',
  `meio_pagamento` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT 'Importar da tabela Meios de Pagamento',
  `detalhes_produto` longtext COLLATE utf8_general_mysql500_ci NOT NULL,
  `qtd_estoque` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `img`, `tipo_produto`, `marca`, `titulo_produto`, `preco`, `promocao`, `meio_pagamento`, `detalhes_produto`, `qtd_estoque`) VALUES
(1, 'img/produtos/monitor1.jpg', 'Monitor', 'LG', 'LED 25\" Full HD Widescreen - 2 HDMI', 1199, 0, 'A Vista', 'Seja para jogos ou para trabalhar, o monitor 25UM58 Ultrawide LG é perfeito para você. Com funções que facilitam a sua vida, você vai se apaixonar pela nova tela 21:9 IPS da LG, otimizado com Flicker Safe e Reader Mode para sua conveniência. Ideal para quem busca otimizar seu tempo com uma super tela multitarefas. E para os Gamers ainda conta com algumas funcionalidades como DAS, Game Mode e Black Stabilizer.', 48),
(2, 'img/produtos/not_defined.png', 'Monitor', 'LG', 'LED 25\" Full HD Widescreen - 2 HDMI', 1199, 0, 'A Vista', 'Seja para jogos ou para trabalhar, o monitor 25UM58 Ultrawide LG é perfeito para você. Com funções que facilitam a sua vida, você vai se apaixonar pela nova tela 21:9 IPS da LG, otimizado com Flicker Safe e Reader Mode para sua conveniência. Ideal para quem busca otimizar seu tempo com uma super tela multitarefas. E para os Gamers ainda conta com algumas funcionalidades como DAS, Game Mode e Black Stabilizer.', 50),
(3, 'img/produtos/not_defined.png', 'Monitor', 'LG', 'LED 25\" Full HD Widescreen - 2 HDMI', 1199, 0, 'A Vista', 'Seja para jogos ou para trabalhar, o monitor 25UM58 Ultrawide LG é perfeito para você. Com funções que facilitam a sua vida, você vai se apaixonar pela nova tela 21:9 IPS da LG, otimizado com Flicker Safe e Reader Mode para sua conveniência. Ideal para quem busca otimizar seu tempo com uma super tela multitarefas. E para os Gamers ainda conta com algumas funcionalidades como DAS, Game Mode e Black Stabilizer.', 50),
(4, 'img/produtos/not_defined.png', 'Monitor', 'LG', 'LED 25\" Full HD Widescreen - 2 HDMI', 1199, 0, 'A Vista', 'Seja para jogos ou para trabalhar, o monitor 25UM58 Ultrawide LG é perfeito para você. Com funções que facilitam a sua vida, você vai se apaixonar pela nova tela 21:9 IPS da LG, otimizado com Flicker Safe e Reader Mode para sua conveniência. Ideal para quem busca otimizar seu tempo com uma super tela multitarefas. E para os Gamers ainda conta com algumas funcionalidades como DAS, Game Mode e Black Stabilizer.', 49),
(5, 'img/produtos/not_defined.png', 'Monitor', 'LG', 'LED 25\" Full HD Widescreen - 2 HDMI', 1190, 0, 'A Vista', 'Seja para jogos ou para trabalhar, o monitor 25UM58 Ultrawide LG é perfeito para você. Com funções que facilitam a sua vida, você vai se apaixonar pela nova tela 21:9 IPS da LG, otimizado com Flicker Safe e Reader Mode para sua conveniência. Ideal para quem busca otimizar seu tempo com uma super tela multitarefas. E para os Gamers ainda conta com algumas funcionalidades como DAS, Game Mode e Black Stabilizer.', 50),
(6, 'img/produtos/02-06-201923-29-05mouse1.png', 'Mouse', 'Dunno', '   Mouse Bonito', 1520, 5, 'Ã€ Vista', 'Mouse', 99),
(7, 'img/produtos/16-06-201916-34-17WhatsApp Image 2018-02-05 at 17.41.56(1).jpeg', 'Gabinete', 'Dunno', '   GAUBUINETI Bonito', 1520, 0, 'Ã€ Vista', 'gabinete', -2),
(8, 'img/produtos/16-06-201916-35-118879e901-fbec-499c-97bb-01dc6495956a.jfif', 'PcGamer', 'Dunno', '   pece', 22, 0, 'Ã€ Vista', 'pc', 1198),
(9, 'img/produtos/16-06-201916-36-038879e901-fbec-499c-97bb-01dc6495956a.jfif', 'PcGamer', 'Dunno', '   pece', 22, 0, 'Ã€ Vista', 'pc', 1200),
(10, 'img/produtos/16-06-201916-37-01WhatsApp Image 2018-02-05 at 17.41.57(1).jpeg', 'Teclado', 'Dunno', '   tecado', 1520, 0, 'Ã€ Vista', '2', 1111),
(11, 'img/produtos/16-06-201916-37-19WhatsApp Image 2018-02-05 at 17.41.59.jpeg', 'Headset', 'Dunno', '   hedset', 12, 0, 'Ã€ Vista', 'pa', 321);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
