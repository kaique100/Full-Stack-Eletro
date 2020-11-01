-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Nov-2020 às 17:33
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fseletro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `msg` varchar(300) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `msg`, `data`) VALUES
(1, 'Kaique Santos de Andrade', 'teste', '0000-00-00 00:00:00'),
(2, 'Kaique Santos de Andrade', 'teste', '0000-00-00 00:00:00'),
(3, 'Kaique Santos de Andrade', 'teste', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `nomeCliente` int(11) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `nomeProduto` varchar(100) NOT NULL,
  `valorUnitario` decimal(8,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valorTotal` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `preco_venda` float DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `categoria`, `descricao`, `preco`, `preco_venda`, `imagem`) VALUES
(1, 'geladeira', 'Geladeira Frost Free Brastemp Side Inverse 540 Litros', 6389, 5019, 'imagens/p1.jpg'),
(2, 'geladeira', 'Geladeira Frost Free Brastemp Side Inverse 540 Litros', 6389, 5019, 'imagens/p2.jpg'),
(3, 'geladeira', 'Geladeira Frost Free Brastemp Side Inverse 540 Litros', 6389, 5019, 'imagens/p3.jpg'),
(4, 'fogao', 'Folgão meia boca', 6389, 5019, 'imagens/p4.jpg'),
(5, 'fogao', 'Folgão meia boca', 6389, 5019, 'imagens/p5.jpg'),
(6, 'microondas', 'Micro ondas branco', 6389, 5019, 'imagens/p6.jpg'),
(7, 'microondas', 'Micro ondas branco', 6389, 5019, 'imagens/p7.jpg'),
(8, 'lavaloucas', 'Lava loucas', 6389, 5019, 'imagens/p8.jpg'),
(9, 'lavaloucas', 'Lava loucas', 6389, 5019, 'imagens/p9.jpg'),
(10, 'Lavaroupas', 'Maquina de lavar roupas', 6389, 5019, 'imagens/p10.jpg'),
(11, 'Lavaroupas', 'Maquina de lavar roupas', 6389, 5019, 'imagens/p11.jpg'),
(12, 'microondas', 'Micro ondas branco', 6389, 5019, 'imagens/p12.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
