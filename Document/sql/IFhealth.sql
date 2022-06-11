-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 03/06/2022 às 11:08
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
);

--
-- Despejando dados para a tabela `agendamento`
--

INSERT INTO `agendamento` (`idAgendamento`, `fkTutor`, `fkDiscente`, `fkDisponibilidade`) VALUES
(3, 12, 12, NULL),
(4, 12, 12, NULL),
(5, 12, 12, NULL),
(6, 12, 12, NULL),
(7, 44, 14, NULL),
(8, 44, 14, NULL),
(9, 44, 14, NULL),
(10, 44, 14, NULL),
(11, 44, 14, NULL),
(12, 44, 14, NULL),
(13, 44, 14, NULL),
(14, 44, 14, NULL),
(15, 44, 14, NULL),
(16, 44, 14, 22),
(17, 44, 14, 22),
(18, 44, 14, 22),
(19, 44, 14, 22),
(20, 44, 14, 22),
(21, 44, 14, 21),
(22, 44, 14, 21),
(23, 44, 14, 21);

-- --------------------------------------------------------

--
-- Estrutura para tabela `bloqueio`
--

CREATE TABLE `bloqueio` (
  `idBloqueio` int NOT NULL,
  `idDiscente` int DEFAULT NULL,
  `idTutor` int DEFAULT NULL
);

-- --------------------------------------------------------

--
-- Estrutura para tabela `disponibilidade`
--

CREATE TABLE `disponibilidade` (
  `idDisponibilidade` int NOT NULL,
  `dia` date DEFAULT NULL,
  `horaInicial` time DEFAULT NULL,
  `horaFinal` time DEFAULT NULL,
  `idTutor` int DEFAULT NULL,
  `livre` tinyint(1) DEFAULT NULL
);

--
-- Despejando dados para a tabela `disponibilidade`
--

INSERT INTO `disponibilidade` (`idDisponibilidade`, `dia`, `horaInicial`, `horaFinal`, `idTutor`, `livre`) VALUES
(1, '2022-05-26', '00:54:15', NULL, 44, 1),
(2, '2022-05-10', '03:18:00', NULL, 12, NULL),
(3, '2022-05-10', '03:18:00', NULL, 12, 1),
(4, '2022-05-18', '04:20:00', NULL, 12, 1),
(5, '2022-05-20', '04:28:00', NULL, 12, 1),
(6, '2022-05-20', '04:28:00', NULL, 12, 2),
(7, '2022-05-20', '04:28:00', NULL, 12, 2),
(8, '2022-05-20', '04:28:00', NULL, 12, 2),
(9, '2022-05-20', '04:28:00', NULL, 12, 2),
(10, '2022-05-04', '02:52:00', NULL, 12, 2),
(11, '2022-05-04', '02:52:00', NULL, 12, 2),
(12, '2022-05-12', '01:57:00', NULL, 12, 2),
(13, '2022-05-12', '01:57:00', NULL, 12, 2),
(14, '2022-05-11', '04:54:00', NULL, 53, 2),
(15, '2022-05-11', '04:54:00', NULL, 12, 2),
(16, '2022-05-11', '03:59:00', NULL, 12, 2),
(17, '2022-05-04', '03:56:00', NULL, 12, 2),
(18, '2022-05-04', '03:56:00', NULL, 12, 2),
(19, '2022-05-04', '11:10:00', NULL, 56, 2),
(20, '2022-05-17', '15:58:00', NULL, 12, 2),
(21, '2022-06-03', '08:58:00', '20:39:59', 44, 1),
(22, '2022-06-03', '08:32:00', '08:36:00', 44, 1),
(23, '2022-06-03', '08:32:00', '08:36:00', 12, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia`
--

CREATE TABLE `noticia` (
  `idNoticia` int NOT NULL,
  `descricao` text
);

--
-- Despejando dados para a tabela `noticia`
--

INSERT INTO `noticia` (`idNoticia`, `descricao`) VALUES
(24, 'eeeeeeeeeeeeeee'),
(25, 'eeeeeeeeeee'),
(28, 'teste');

-- --------------------------------------------------------

--
-- Estrutura para tabela `regulamento`
--

CREATE TABLE `regulamento` (
  `idRegulamento` int NOT NULL,
  `descricao` text NOT NULL
);

--
-- Despejando dados para a tabela `regulamento`
--

INSERT INTO `regulamento` (`idRegulamento`, `descricao`) VALUES
(16, 'teste');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int NOT NULL,
  `usuario` varchar(45)  DEFAULT NULL,
  `senha` varchar(45)  DEFAULT NULL,
  `num_registro` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `idade` int DEFAULT NULL,
  `altura` float DEFAULT NULL,
  `bloqueado` tinyint(1) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `login` varchar(45)  DEFAULT NULL,
  `nivel` int DEFAULT NULL
);

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `senha`, `num_registro`, `peso`, `sexo`, `idade`, `altura`, `bloqueado`, `endereco`, `login`, `nivel`) VALUES
(12, 'admin', '934b535800b1cba8f96a5d72f72f1611', '2222', 22, '2', 21, 222, NULL, NULL, 'admin', 1),
(14, 'discente', 'dba538946456c740662acaa8aa677094', '2222', NULL, NULL, NULL, NULL, NULL, NULL, 'discente', 3),
(44, 'Ícaro Dias dos Santos', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icaro-tutor', 2),
(45, 'João', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'joao', 2),
(46, 'João', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'joao', 3),
(52, 'Gili', '3a9929d7b57122c12902951d8c61122b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gili', 2),
(53, 'Ana Caroline', 'a2b7c845cbd398d3be1e1801c53ad69a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'loly', 2),
(54, 'Ana Caroline', 'a2b7c845cbd398d3be1e1801c53ad69a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'loly', 2),
(55, 'Ana Caroline', 'a2b7c845cbd398d3be1e1801c53ad69a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'loly', 2),
(56, 'Ana Caroline', 'a2b7c845cbd398d3be1e1801c53ad69a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'loly', 2),
(57, 'ana', 'a2b7c845cbd398d3be1e1801c53ad69a', '33', NULL, NULL, NULL, NULL, NULL, NULL, 'loly', 3),
(58, 'ana', 'a2b7c845cbd398d3be1e1801c53ad69a', '33', NULL, NULL, NULL, NULL, NULL, NULL, 'loly', 3),
(59, 'ana', 'a2b7c845cbd398d3be1e1801c53ad69a', '33', NULL, NULL, NULL, NULL, NULL, NULL, 'loly', 3),
(60, 'tg', 'e3fd2afa75b6e2e40021c7054361fbf4', 'ert', NULL, NULL, NULL, NULL, NULL, NULL, 'rt', 3),
(61, 'jikyu', 'b6b4ce6df035dcfaa26f3bc32fb89e6a', 'yt', NULL, NULL, NULL, NULL, NULL, NULL, 'y', 3),
(62, 'jikyu', 'b6b4ce6df035dcfaa26f3bc32fb89e6a', 'yt', NULL, NULL, NULL, NULL, NULL, NULL, 'y', 3),
(63, '23', '6364d3f0f495b6ab9dcf8d3b5c6e0b01', '32', NULL, NULL, NULL, NULL, NULL, NULL, '23', 3);

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
  ADD PRIMARY KEY (`idDisponibilidade`),
  ADD KEY `FK_disponibilidade_usuario` (`idTutor`);

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
  MODIFY `idAgendamento` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `bloqueio`
--
ALTER TABLE `bloqueio`
  MODIFY `idBloqueio` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `disponibilidade`
--
ALTER TABLE `disponibilidade`
  MODIFY `idDisponibilidade` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `idNoticia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `regulamento`
--
ALTER TABLE `regulamento`
  MODIFY `idRegulamento` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

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

--
-- Restrições para tabelas `disponibilidade`
--
ALTER TABLE `disponibilidade`
  ADD CONSTRAINT `FK_disponibilidade_usuario` FOREIGN KEY (`idTutor`) REFERENCES `usuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
