-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jan-2022 às 22:57
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `workscale`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `equipe` int(2) NOT NULL,
  `matricula` int(6) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `equipe`, `matricula`, `nome`, `senha`) VALUES
(1, 1, 394828, 'Ryan Santos', 'ryan123'),
(3, 1, 953601, 'Renan Correia', 'renan123'),
(5, 1, 508075, 'Luiz Ribeiro', 'luiz123'),
(6, 2, 641628, 'Vinicius Melo', 'vinicius123'),
(9, 2, 775897, 'Kaua Cavalcanti', 'kaua123'),
(10, 2, 917857, 'Paulo Cardoso', 'paulo123'),
(11, 3, 726870, 'Marcos Ferreira', 'marcos123'),
(12, 3, 998526, 'Lucas Cunha', 'lucas123'),
(13, 3, 321833, 'Julio Goncalves', 'julio123'),
(14, 4, 533861, 'Julian Oliveira', 'julian123'),
(15, 4, 413025, 'Joao Almeida', 'joao123'),
(16, 4, 573268, 'Tiago Martins', 'tiago123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
