-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 16/06/2024 às 23:28
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Rsmercearia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Categorias`
--

CREATE TABLE `Categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Categorias`
--

INSERT INTO `Categorias` (`id`, `nome`) VALUES
(1, 'Perecíveis'),
(2, 'Limpeza'),
(3, 'Papelaria'),
(4, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Items`
--

CREATE TABLE `Items` (
  `id_item` mediumint(9) NOT NULL,
  `nome` varchar(75) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Items`
--

INSERT INTO `Items` (`id_item`, `nome`, `id_categoria`, `valor`, `img`) VALUES
(101, 'Estrato de Tomate', 1, 9.00, 'tomate.jpg'),
(102, 'Nescau', 1, 8.89, 'nescau.jpg'),
(103, 'Desinfetante Casa&Perfume', 2, 11.99, 'desinfetantecep.jpg'),
(104, 'Caneta Esferográfica Azul', 3, 2.00, 'canetaazul.jpg\r\n'),
(105, 'Papel Higienico', 4, 2.00, 'higienico.jpg'),
(106, 'Massa de Bolo Regina', 1, 8.99, 'boloregina.jpg'),
(107, 'Picolé', 1, 2.00, 'picoles.jpg'),
(108, 'Vassoura Piaçava', 2, 11.00, 'vassoura.jpg'),
(109, 'Sacolé', 1, 3.00, 'sacole.jpg'),
(110, 'Detergente Ype', 2, 3.00, 'detergenteype.jpg'),
(111, 'Lápis', 3, 1.50, 'lapisgenerico.jpg'),
(112, 'Borracha', 3, 1.50, 'borrachaescola.jpg'),
(113, 'Marca Texto', 3, 3.00, 'marcatexto.jpg'),
(114, 'Gillete de Barbear', 4, 2.00, 'gilletebar.jpg'),
(115, 'Pasta de Dente Colgate', 4, 6.99, 'pastacolgate.jpg'),
(116, 'Escova de Dente', 4, 8.00, 'escovadente.jpg'),
(117, 'Água Sanitária Brilux', 2, 9.00, 'aguasanitariab.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Users`
--

CREATE TABLE `Users` (
  `id_user` mediumint(9) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tell` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Users`
--

INSERT INTO `Users` (`id_user`, `fullname`, `email`, `tell`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '1234', '$2y$10$jk7LCOVJiJQbOeEXhS/T0.09cd5zxZx8O/JZtYFqJcbytUioQ7x0y'),
(1000, 'f', 'f@gmail.com', '123', '$2y$10$E.SKCU3h84vJsCBa/Hj42eCZ7dT7V4x02nlYP1trNZZE4l1mvd07q'),
(1001, 'a', 'a@gmail.com', '2123231', '$2y$10$Xx84ED4q3RHQpj0SQrcZfOgc4BSNaHoDVSGVS2xrtokN7TVQ1yWJK'),
(1002, 'teste', 'teste@gmail.com', '12345678', '$2y$10$xSphIstHFtaKQEhkcQYypuq52qua99WhYde8E/DVZl71.lf01KaDy'),
(1003, 'Jonathan M. Toledo', 'jonathan@gmail.com', '21 9921-2134', '$2y$10$WRulk6kfHMXfRvCqipD3CeMJl5WwGRjCT9rXLePNNaSaZU6o542X2'),
(1004, 'h', 'h@gmail.com', 'h', '$2y$10$Dyd68GRTOXzYlnBacByVEu5YhXnuPAZD2lddhIL2z8uhYG4ldVfRW'),
(1007, 'teste2', 'teste2@gmail.com', '32132122', '$2y$10$y63JCO3.h.TXxip.vRJWb.JBMANXNzWzNJh0IKoSu7zRS9GmbCale');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Categorias`
--
ALTER TABLE `Categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `Items`
--
ALTER TABLE `Items`
  ADD PRIMARY KEY (`id_item`);

--
-- Índices de tabela `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Categorias`
--
ALTER TABLE `Categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `Items`
--
ALTER TABLE `Items`
  MODIFY `id_item` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT de tabela `Users`
--
ALTER TABLE `Users`
  MODIFY `id_user` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
