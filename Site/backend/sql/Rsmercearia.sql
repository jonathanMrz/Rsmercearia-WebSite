-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 16/06/2024 às 04:01
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
(1, 'pereciveis'),
(2, 'limpeza'),
(3, 'papelaria'),
(4, 'outros');

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
(101, 'aaa', 1, 13.00, 'a.png'),
(102, 'testeas', 1, 14.89, 'a.png'),
(103, 'teste_item_limpeza', 2, 11.99, 'a.png'),
(104, 'item_teste_papelaria', 3, 41.99, 'a.png\r\n'),
(105, 'item_teste_outros', 4, 99.99, 'a.png');

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
  MODIFY `id_item` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT de tabela `Users`
--
ALTER TABLE `Users`
  MODIFY `id_user` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
