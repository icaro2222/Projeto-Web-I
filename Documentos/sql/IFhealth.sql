-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 26/05/2022 às 14:07
-- Versão do servidor: 8.0.29-0ubuntu0.20.04.3
-- Versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `IFhealth`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `idAgendamento` int NOT NULL,
  `fkTutor` int DEFAULT NULL,
  `fkDiscente` int DEFAULT NULL,
  `fkDisponibilidade` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `agendamento`
--

INSERT INTO `agendamento` (`idAgendamento`, `fkTutor`, `fkDiscente`, `fkDisponibilidade`) VALUES
(3, 12, 12, NULL),
(4, 12, 12, NULL),
(5, 12, 12, NULL),
(6, 12, 12, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `bloqueio`
--

CREATE TABLE `bloqueio` (
  `idBloqueio` int NOT NULL,
  `idDiscente` int DEFAULT NULL,
  `idTutor` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `disponibilidade`
--

CREATE TABLE `disponibilidade` (
  `idDisponibilidade` int NOT NULL,
  `dia` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `livre` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `disponibilidade`
--

INSERT INTO `disponibilidade` (`idDisponibilidade`, `dia`, `hora`, `livre`) VALUES
(1, '2022-05-26', '00:54:15', 1),
(2, '2022-05-10', '03:18:00', NULL),
(3, '2022-05-10', '03:18:00', 1),
(4, '2022-05-18', '04:20:00', 1),
(5, '2022-05-20', '04:28:00', 1),
(6, '2022-05-20', '04:28:00', 2),
(7, '2022-05-20', '04:28:00', 2),
(8, '2022-05-20', '04:28:00', 2),
(9, '2022-05-20', '04:28:00', 2),
(10, '2022-05-04', '02:52:00', 2),
(11, '2022-05-04', '02:52:00', 2),
(12, '2022-05-12', '01:57:00', 2),
(13, '2022-05-12', '01:57:00', 2),
(14, '2022-05-11', '04:54:00', 2),
(15, '2022-05-11', '04:54:00', 2),
(16, '2022-05-11', '03:59:00', 2),
(17, '2022-05-04', '03:56:00', 2),
(18, '2022-05-04', '03:56:00', 2),
(19, '2022-05-04', '11:10:00', 2),
(20, '2022-05-17', '15:58:00', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia`
--

CREATE TABLE `noticia` (
  `idNoticia` int NOT NULL,
  `descricao` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `noticia`
--

INSERT INTO `noticia` (`idNoticia`, `descricao`) VALUES
(24, 'Não terá agendamento do dia 25 ao dia 31'),
(25, 'O tutor Ícaro por motivos adversos não estará disponível essa semana.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `regulamento`
--

CREATE TABLE `regulamento` (
  `idRegulamento` int NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `num_registro` int DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `idade` int DEFAULT NULL,
  `altura` float DEFAULT NULL,
  `bloqueado` tinyint(1) DEFAULT NULL,
  `endereco` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `login` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nivel` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `senha`, `num_registro`, `peso`, `sexo`, `idade`, `altura`, `bloqueado`, `endereco`, `login`, `nivel`) VALUES
(12, 'admin', '934b535800b1cba8f96a5d72f72f1611', 2222, 22, '2', 21, 222, NULL, NULL, 'admin', 1),
(14, 'discente', 'dba538946456c740662acaa8aa677094', 2222, NULL, NULL, NULL, NULL, NULL, NULL, 'discente', 3),
(44, 'Ícaro Dias dos Santos', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icaro-tutor', 2),
(45, 'João', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'joao', 2),
(46, 'João', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'joao', 3),
(47, 'icaro-discente', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icaro-discente', 3),
(48, 'icaro-discente', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icaro-discente', 3),
(49, 'icaro-discente', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icaro-discente', 3),
(50, 'icaro-discente', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icaro-discente', 3),
(51, 'icaro-discente', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icaro-discente', 3);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`idAgendamento`),
  ADD KEY `fk_Agendamento_idTutor` (`fkTutor`),
  ADD KEY `fk_Agendamento_idDisponivel` (`fkDisponibilidade`),
  ADD KEY `fk_Agendamento_idDiscente` (`fkDiscente`);

--
-- Índices de tabela `bloqueio`
--
ALTER TABLE `bloqueio`
  ADD PRIMARY KEY (`idBloqueio`);

--
-- Índices de tabela `disponibilidade`
--
ALTER TABLE `disponibilidade`
  ADD PRIMARY KEY (`idDisponibilidade`);

--
-- Índices de tabela `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`idNoticia`);

--
-- Índices de tabela `regulamento`
--
ALTER TABLE `regulamento`
  ADD PRIMARY KEY (`idRegulamento`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `idAgendamento` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `bloqueio`
--
ALTER TABLE `bloqueio`
  MODIFY `idBloqueio` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `disponibilidade`
--
ALTER TABLE `disponibilidade`
  MODIFY `idDisponibilidade` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `idNoticia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `regulamento`
--
ALTER TABLE `regulamento`
  MODIFY `idRegulamento` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `fk_Agendamento_idDiscente` FOREIGN KEY (`fkDiscente`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `fk_Agendamento_idDisponivel` FOREIGN KEY (`fkDisponibilidade`) REFERENCES `disponibilidade` (`idDisponibilidade`),
  ADD CONSTRAINT `fk_Agendamento_idTutor` FOREIGN KEY (`fkTutor`) REFERENCES `usuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
