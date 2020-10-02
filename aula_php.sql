-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Set-2020 às 23:04
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aula_php`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_nf`
--

CREATE TABLE `itens_nf` (
  `id` int(11) NOT NULL,
  `cod_produto` int(11) DEFAULT NULL,
  `num_nf` int(11) DEFAULT NULL,
  `qtde` int(11) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens_nf`
--

INSERT INTO `itens_nf` (`id`, `cod_produto`, `num_nf`, `qtde`, `subtotal`) VALUES
(1, 1, 2, 2, '11.00'),
(2, 2, 2, 10, '40.00'),
(3, 1, 5, 2, '11.00'),
(4, 1, 6, 2, '11.00'),
(7, 5, 9, 3, '15.00'),
(8, 1, 10, 3, '16.50'),
(9, 1, 10, 3, '16.50'),
(10, 4, 12, 2, '30.00'),
(11, 1, 14, 2, '11.00'),
(12, 1, 15, 3, '16.50'),
(13, 6, 15, 4, '32.00'),
(14, 1, 17, 0, '0.00'),
(15, 6, 18, 2, '16.00'),
(16, 1, 20, 2, '11.00'),
(17, 1, 22, 3, '16.50'),
(18, 6, 23, 2, '16.00'),
(19, 1, 27, 2, '11.00'),
(20, 1, 28, 0, '0.00'),
(21, 1, 29, 2, '11.00'),
(22, 1, 30, 3, '16.50'),
(23, 9, 30, 5, '17.50'),
(24, 12, 30, 8, '24.00'),
(25, 3, 30, 10, '72.60');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota_fiscal`
--

CREATE TABLE `nota_fiscal` (
  `nf` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `valor_total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `nota_fiscal`
--

INSERT INTO `nota_fiscal` (`nf`, `data`, `valor_total`) VALUES
(2, '2020-09-08', '51.00'),
(5, '2020-09-06', '11.00'),
(6, '2020-09-06', '11.00'),
(9, '2020-09-08', '15.00'),
(10, '2020-09-09', '16.50'),
(12, '2020-09-08', '30.00'),
(14, '2020-09-06', '11.00'),
(15, '0000-00-00', '48.50'),
(16, '0000-00-00', NULL),
(17, '0000-00-00', '0.00'),
(18, '2020-09-08', '16.00'),
(19, '2020-09-14', NULL),
(20, '0000-00-00', '11.00'),
(21, '0000-00-00', NULL),
(22, '2020-09-17', '16.50'),
(23, '2020-09-19', '16.00'),
(24, '0000-00-00', NULL),
(25, '2020-09-21', NULL),
(26, '0000-00-00', NULL),
(27, '2020-09-21', '11.00'),
(28, '0000-00-00', '0.00'),
(29, '2020-09-21', '11.00'),
(30, '2020-09-21', '130.60');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`) VALUES
(1, 'Coca- Cola', '5.50'),
(2, 'Bacon ', '4.00'),
(3, 'Trakinas', '7.26'),
(4, 'Coca Cola', '15.00'),
(5, 'Paçoca', '5.00'),
(6, 'Passa Tempo', '8.00'),
(7, 'Suco de Laranja', '7.00'),
(8, 'Relógio Hamilton', '100000.00'),
(9, 'Lápis', '3.50'),
(10, 'Maria Joana', '1.00'),
(11, 'Brigadeiro', '2.00'),
(12, 'Beijinho', '3.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `itens_nf`
--
ALTER TABLE `itens_nf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod_produto` (`cod_produto`),
  ADD KEY `num_nf` (`num_nf`);

--
-- Índices para tabela `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  ADD PRIMARY KEY (`nf`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `itens_nf`
--
ALTER TABLE `itens_nf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  MODIFY `nf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `itens_nf`
--
ALTER TABLE `itens_nf`
  ADD CONSTRAINT `itens_nf_ibfk_1` FOREIGN KEY (`cod_produto`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `itens_nf_ibfk_2` FOREIGN KEY (`num_nf`) REFERENCES `nota_fiscal` (`nf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
