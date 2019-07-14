-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 20-Jan-2017 às 18:58
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
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `nome` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT 'nome',
  `email` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT 'emial',
  `senha` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT 'seha',
  `senhac` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT 'seha dmS',
  `status` int(11) NOT NULL DEFAULT '1',
  `nivel` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senhac`, `status`, `nivel`) VALUES
(1, 'Ariosvaldo Risos Cledivanderson da Silva Neves', 'ari@osvaldo.com.br', 'ari', 'fc292bd7df071858c2d0f955545673c1', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
