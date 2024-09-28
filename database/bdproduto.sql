-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Ago-2024 às 19:23
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdproduto`
--
CREATE DATABASE `bdproduto`;
USE `bdproduto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblproduto`
--

CREATE TABLE `tblproduto` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `estoque` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblproduto`
--

INSERT INTO `tblproduto` (`id`, `nome`, `estoque`) VALUES
(1, 'Camiseta', 50),
(2, 'Caneta', 100),
(3, 'Caderno', 80),
(4, 'Smartphone', 20),
(5, 'Mouse', 70);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tblproduto`
--
ALTER TABLE `tblproduto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblproduto`
--
ALTER TABLE `tblproduto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
