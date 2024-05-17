-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Abr-2024 às 00:25
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetointegrador1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome_do_produto` varchar(100) NOT NULL,
  `tipo_do_produto` varchar(100) NOT NULL,
  `imagem_do_produto` varchar(10) NOT NULL,
  `valor_do_produto` varchar(10) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `rating` varchar(5) NOT NULL,
  `quantidade` varchar(100) NOT NULL,  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `cadastro` (`id`, `nome_do_produto`, `tipo_do_produto`, `imagem_do_produto`, `valor_do_produto`, `marca`, `rating`, `quantidade`) VALUES
(1, 'Camisa Adidas', 'roupa', 'imagem', '19.90', 'Addidas', '5', '5'),
(2, 'Camisa Nike', 'roupa', 'imagem', '30.90', 'Nike', '5', '5');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
