-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 17-Dez-2016 às 20:34
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senhac`, `status`, `nivel`) VALUES
(1, 'mdskoalÃ§f', 'j@j.com', 'jj', '20abd5d627f76bf6e583b2b107f3cce1', 1, 0),
(2, 'j2', 'j@j.com', 'j', '363b122c528f54df4a0446b6bab05515', 1, 0),
(3, 'coisa', 'j@j.j', 'j', '363b122c528f54df4a0446b6bab05515', 1, 0),
(4, 'nome', 'email@email', 'j', '363b122c528f54df4a0446b6bab05515', 1, 0),
(5, 'jk', 'jk@kj', 'j', '363b122c528f54df4a0446b6bab05515', 1, 0),
(6, 'dsad', 'fff@r', 'ggg', 'ba248c985ace94863880921d8900c53f', 1, 0),
(7, 'qualquer um', 'qualquercoisa@j.com', 'j', '363b122c528f54df4a0446b6bab05515', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
