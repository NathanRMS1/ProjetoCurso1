-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 20-Jan-2017 às 18:57
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `pessoas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `img`, `tipo_produto`, `marca`, `titulo_produto`, `preco`, `promocao`, `meio_pagamento`, `detalhes_produto`, `qtd_estoque`) VALUES
(1, 'img/produtos/monitor1.jpg', 'Monitor', 'LG', 'LED 25" Full HD Widescreen - 2 HDMI', 1199, 0, 'A Vista', 'Seja para jogos ou para trabalhar, o monitor 25UM58 Ultrawide LG é perfeito para você. Com funções que facilitam a sua vida, você vai se apaixonar pela nova tela 21:9 IPS da LG, otimizado com Flicker Safe e Reader Mode para sua conveniência. Ideal para quem busca otimizar seu tempo com uma super tela multitarefas. E para os Gamers ainda conta com algumas funcionalidades como DAS, Game Mode e Black Stabilizer.', 50),
(2, 'img/produtos/monitor2.jpg', 'Monitor', 'Acer', '19.5´´ TN VGA V206HQL', 474, 0, 'A Vista', 'Monitor Acer 19.5´´ TN VGA V206HQL', 60);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
