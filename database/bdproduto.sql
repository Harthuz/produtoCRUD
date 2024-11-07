CREATE DATABASE `bdproduto`;
USE `bdproduto`;

-- Estrutura para tabela `tblproduto`
CREATE TABLE `tblproduto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `estoque` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- Inserindo dados na tabela `tblproduto`
INSERT INTO `tblproduto` (`nome`, `estoque`) VALUES
('Caneta', 100),
('Caderno', 80),
('Smartphone', 20),
('Mouse', 70);

-- Estrutura para tabela `usuario`
CREATE TABLE `usuario` (
  `usuario` varchar(50) NOT NULL,
  `senha` int NOT NULL
) ENGINE=MyISAM;

-- Inserindo dados na tabela `usuario`
INSERT INTO `usuario` (`usuario`, `senha`) VALUES
('Hernandes', 123456);