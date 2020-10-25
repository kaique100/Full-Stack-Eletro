CREATE DATABASE `fseletro`;

CREATE TABLE `pedidos` (
  `nomeCliente` int(11) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `nomeProduto` varchar(100) NOT NULL,
  `valorUnitario` decimal(8,2) NOT NULL,
  `quantidade` tinytext NOT NULL,
  `valorTotal` decimal(8,2) NOT NULL
);



CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `preco_venda` float DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL
);



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

ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

