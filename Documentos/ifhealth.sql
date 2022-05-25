-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Maio-2022 às 00:12
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ifhealth`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `idAgendamento` int(11) NOT NULL,
  `fkTutor` int(11) DEFAULT NULL,
  `fkDiscente` int(11) DEFAULT NULL,
  `fkDisponibilidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `anotacoes`
--

CREATE TABLE `anotacoes` (
  `idAnotacoes` int(11) NOT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bloqueio`
--

CREATE TABLE `bloqueio` (
  `idBloqueio` int(11) NOT NULL,
  `idDiscente` int(11) DEFAULT NULL,
  `idTutor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `discente`
--

CREATE TABLE `discente` (
  `idDiscente` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `numMatricula` varchar(14) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `altura` float DEFAULT NULL,
  `bloqueado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disponibilidade`
--

CREATE TABLE `disponibilidade` (
  `idDisponibilidade` int(11) NOT NULL,
  `dia` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `livre` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `num_registro` int(14) DEFAULT NULL,
  `nivel` int(11) NOT NULL,
  `login` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `senha`, `num_registro`, `nivel`, `login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 435376327, 1, 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`idAgendamento`),
  ADD KEY `fk_Agendamento_idTutor` (`fkTutor`),
  ADD KEY `fk_Agendamento_idDisponivel` (`fkDisponibilidade`),
  ADD KEY `fk_Agendamento_idDiscente` (`fkDiscente`);

--
-- Índices para tabela `anotacoes`
--
ALTER TABLE `anotacoes`
  ADD PRIMARY KEY (`idAnotacoes`);

--
-- Índices para tabela `bloqueio`
--
ALTER TABLE `bloqueio`
  ADD PRIMARY KEY (`idBloqueio`);

--
-- Índices para tabela `discente`
--
ALTER TABLE `discente`
  ADD PRIMARY KEY (`idDiscente`);

--
-- Índices para tabela `disponibilidade`
--
ALTER TABLE `disponibilidade`
  ADD PRIMARY KEY (`idDisponibilidade`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `idAgendamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `anotacoes`
--
ALTER TABLE `anotacoes`
  MODIFY `idAnotacoes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `bloqueio`
--
ALTER TABLE `bloqueio`
  MODIFY `idBloqueio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `discente`
--
ALTER TABLE `discente`
  MODIFY `idDiscente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `disponibilidade`
--
ALTER TABLE `disponibilidade`
  MODIFY `idDisponibilidade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `fk_Agendamento_idDiscente` FOREIGN KEY (`fkDiscente`) REFERENCES `discente` (`idDiscente`),
  ADD CONSTRAINT `fk_Agendamento_idDisponivel` FOREIGN KEY (`fkDisponibilidade`) REFERENCES `disponibilidade` (`idDisponibilidade`),
  ADD CONSTRAINT `fk_Agendamento_idTutor` FOREIGN KEY (`fkTutor`) REFERENCES `usuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
