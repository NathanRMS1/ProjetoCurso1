-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 23-Jul-2019 às 18:15
-- Versão do servidor: 5.7.26
-- versão do PHP: 5.6.40

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
-- Estrutura da tabela `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE IF NOT EXISTS `carrinho` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) DEFAULT NULL,
  `idProduto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id`, `idUsuario`, `idProduto`) VALUES
(3, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `finalizar_compra`
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `finalizar_compra`
--

INSERT INTO `finalizar_compra` (`id`, `nome_comprador`, `email_comprador`, `id_produto_comprado`, `produto_comprado`, `meio_pagamento`, `valor_total`, `data_compra`) VALUES
(1, 'aree', 'are@o', 1, 'Monitor LG LED 25\" Full HD Widescreen - 2 HDMI', 'A Vista', '1199', '08/06/2019'),
(2, 'aree', 'are@o', 1, 'Monitor LG LED 25\" Full HD Widescreen - 2 HDMI', 'A Vista', '1199', '08/06/2019'),
(3, 'Ariosvaldo Risos Cledivanderson da Silva Neves', 'ari@osvaldo.com.br', 7, 'Gabinete Dunno    GAUBUINETI Bonito', 'Ã€ Vista', '1520', '16/06/2019'),
(4, 'Ariosvaldo Risos Cledivanderson da Silva Neves', 'ari@osvaldo.com.br', 7, 'Gabinete Dunno    GAUBUINETI Bonito', 'Ã€ Vista', '1520', '16/06/2019'),
(5, 'VICENILDA RODRIGUES MENDES DE SOUSA', 'nildanth@hotmail.com', 8, 'PcGamer Dunno    pece', 'Ã€ Vista', '22', '20/06/2019'),
(6, 'VICENILDA RODRIGUES MENDES DE SOUSA', 'nildanth@hotmail.com', 7, 'Gabinete Dunno    GAUBUINETI Bonito', 'Ã€ Vista', '1520', '20/06/2019'),
(7, 'VICENILDA RODRIGUES MENDES DE SOUSA', 'nildanth@hotmail.com', 8, 'PcGamer Dunno    pece', 'Ã€ Vista', '22', '20/06/2019'),
(8, 'VICENILDA RODRIGUES MENDES DE SOUSA', 'nildanth@hotmail.com', 4, 'Monitor LG LED 25\" Full HD Widescreen - 2 HDMI', 'A Vista', '1199', '20/06/2019'),
(9, 'VICENILDA RODRIGUES MENDES DE SOUSA', 'nildanth@hotmail.com', 6, 'Mouse Dunno    Mouse Bonito', 'Ã€ Vista', '1520', '20/06/2019'),
(10, 'Bruno Spinelli', 'spinellibisneto@hotmail.com', 1, 'Monitor LG LED 25\" Full HD Widescreen - 2 HDMI', 'A Vista', '1199', '30/06/2019'),
(11, 'Bruno Spinelli', 'spinellibisneto@hotmail.com', 1, 'Monitor LG LED 25\" Full HD Widescreen - 2 HDMI', 'A Vista', '1199', '30/06/2019'),
(12, 'Bruno Spinelli', 'spinellibisneto@hotmail.com', 1, 'Monitor LG LED 25\" Full HD Widescreen - 2 HDMI', 'A Vista', '1199', '30/06/2019');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
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
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `img`, `tipo_produto`, `marca`, `titulo_produto`, `preco`, `promocao`, `meio_pagamento`, `detalhes_produto`, `qtd_estoque`) VALUES
(1, 'img/produtos/monitor1.jpg', 'Monitor', 'LG', 'LED 25\" Full HD Widescreen - 2 HDMI', 1199, 0, 'A Vista', 'Seja para jogos ou para trabalhar, o monitor 25UM58 Ultrawide LG é perfeito para você. Com funções que facilitam a sua vida, você vai se apaixonar pela nova tela 21:9 IPS da LG, otimizado com Flicker Safe e Reader Mode para sua conveniência. Ideal para quem busca otimizar seu tempo com uma super tela multitarefas. E para os Gamers ainda conta com algumas funcionalidades como DAS, Game Mode e Black Stabilizer.', 45),
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `senhac`, `status`, `nivel`) VALUES
(1, 'Ariosvaldo Risos Cledivanderson da Silva Neves', 'ari@osvaldo.com.br', 'ari', 'fc292bd7df071858c2d0f955545673c1', 1, 1),
(8, 'NATHAN RODRIGUES MENDES DE SOUSA', 'mendesousanth@gmail.com', '11', 'af52651b001c6d1b7b6fceb1b9a669cc', 1, 0),
(10, 'VICENILDA RODRIGUES MENDES DE SOUSA', 'nildanth@hotmail.com', '123', '202cb962ac59075b964b07152d234b70', 1, 0),
(11, 'aree', 'are@o', '12', 'c20ad4d76fe97759aa27a0c99bff6710', 1, 0),
(12, 'Bruno Spinelli', 'spinellibisneto@hotmail.com', '040300bb', '4c724f3815c5021d3328ef3bbe16d3ff', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
