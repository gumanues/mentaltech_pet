-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 29-Jun-2022 às 02:45
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `petshop`
--
CREATE DATABASE petshop;
-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `status` enum('0','1','2','3') NOT NULL COMMENT '0 = Em aberto\n1 = Em andamento \n2 = Concluido\n3 = Cancelado',
  `horarioInicio` time NOT NULL,
  `horarioFinal` time NOT NULL,
  `pets_id` int(11) NOT NULL,
  `funcionarios_id` int(11) NOT NULL,
  `servicos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`id`, `data`, `status`, `horarioInicio`, `horarioFinal`, `pets_id`, `funcionarios_id`, `servicos_id`) VALUES
(2, '2022-06-15', '1', '08:15:00', '09:15:00', 3, 3, 1),
(3, '2022-07-16', '2', '02:09:00', '22:09:00', 1, 1, 1),
(4, '2022-06-30', '3', '10:30:00', '11:00:00', 4, 4, 3),
(5, '2022-06-30', '0', '13:30:00', '14:25:00', 2, 1, 5),
(6, '2022-07-01', '1', '16:20:00', '17:30:24', 5, 2, 4),
(7, '2022-07-04', '2', '13:30:00', '17:30:24', 1, 3, 8),
(8, '2022-07-04', '1', '08:15:00', '11:30:00', 3, 2, 7),
(10, '2022-06-30', '2', '16:20:00', '17:40:40', 6, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nomeCompleto` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  `CEP` bigint(20) NOT NULL,
  `numero` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nomeCompleto`, `email`, `cpf`, `telefone`, `CEP`, `numero`) VALUES
(1, 'Poliana Amaral', 'poliamaral@email.com', 0, 99999999, 123456, 12),
(2, 'Juliana Pontes', 'jupontes@email.com', 11111111111, 88888888, 543210, 158),
(3, 'Celton Gomes', 'centonG22@email.com', 636363636, 8989898989, 10101010, 745),
(4, 'Larissa Helena ', 'Larihelena@email.com', 565656565, 0, 5445642, 456),
(5, 'Mario Fernando', 'fernandomario23@gmail.com', 56596955, 445445445, 4545452, 236),
(6, 'Viviane Klint ', 'viviklint@email.com', 565652124, 12545121, 6232323, 125);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nomeCompleto` varchar(255) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `telefone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nomeCompleto`, `cpf`, `telefone`) VALUES
(1, 'Amanda Venon', 888888888, 55555555),
(2, 'Daiane Souza', 89562324, 77777777),
(3, 'Arthur Silva', 87775634, 55662566),
(4, 'Priscila Mendes', 874524325, 142367954);

-- --------------------------------------------------------

--
-- Estrutura da tabela `multa`
--

CREATE TABLE `multa` (
  `id` int(11) NOT NULL,
  `valor` decimal(6,2) NOT NULL,
  `agendamento_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `multa`
--

INSERT INTO `multa` (`id`, `valor`, `agendamento_id`) VALUES
(1, '15.00', 3),
(2, '10.00', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `raca` varchar(255) NOT NULL,
  `dataNasc` date DEFAULT NULL,
  `clientes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pets`
--

INSERT INTO `pets` (`id`, `nome`, `raca`, `dataNasc`, `clientes_id`) VALUES
(1, 'Amora', 'Bulldog Francês', '2020-03-14', 1),
(2, 'Jéssica', 'SRD', '2022-04-19', 2),
(3, 'Preta', 'SRD', '2020-11-15', 3),
(4, 'Budy', 'Beagle', '2018-09-13', 5),
(5, 'Kelen', 'pincher ', '2019-08-04', 5),
(6, 'Cleiton', 'Siamês ', '2021-09-06', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `valor` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `descricao`, `valor`) VALUES
(1, 'Banho e tosa', '100.00'),
(3, 'Consulta com a veterinária', '120.00'),
(4, 'Vacinas ', '95.00'),
(5, 'Banho ', '60.00'),
(7, 'Creche - Meio período ', '80.00'),
(8, 'Creche - Integral', '160.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `senha`) VALUES
(1, 'karol', '1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_agendamento_pets1_idx` (`pets_id`),
  ADD KEY `fk_agendamento_servicos1_idx` (`servicos_id`),
  ADD KEY `fk_agendamento_funcionarios1_idx` (`funcionarios_id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `multa`
--
ALTER TABLE `multa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_multa_agendamento1_idx` (`agendamento_id`);

--
-- Índices para tabela `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pets_clientes_idx` (`clientes_id`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `multa`
--
ALTER TABLE `multa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `fk_agendamento_funcionarios1` FOREIGN KEY (`funcionarios_id`) REFERENCES `funcionarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agendamento_pets1` FOREIGN KEY (`pets_id`) REFERENCES `pets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agendamento_servicos1` FOREIGN KEY (`servicos_id`) REFERENCES `servicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `multa`
--
ALTER TABLE `multa`
  ADD CONSTRAINT `fk_multa_agendamento1` FOREIGN KEY (`agendamento_id`) REFERENCES `agendamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `fk_pets_clientes` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
