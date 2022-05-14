

CREATE DATABASE IFhealth;

USE IFhealth;

CREATE TABLE usuario(
	idUsuario int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(45),
	senha VARCHAR(45),
	num_registro INT(14)
);


CREATE TABLE Discente(
	idDiscente int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(45),
	senha VARCHAR(45),
	numMatricula VARCHAR(14),
	peso FLOAT,
	sexo VARCHAR(20),
	idade INT,
	altura FLOAT,
	bloqueado BOOLEAN
);

CREATE TABLE Disponibilidade(
	idDisponibilidade int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	dia date,
	hora time,
	livre BOOLEAN
);

CREATE TABLE Agendamento(
	idAgendamento int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	fkTutor INT,
	fkDiscente INT,
	fkDisponibilidade INT
);

CREATE TABLE Anotacoes(
	idAnotacoes int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	descricao TEXT
);

CREATE TABLE Bloqueio(
	idBloqueio int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	idDiscente INT,
	idTutor INT
	
);

ALTER TABLE Agendamento ADD CONSTRAINT `fk_Agendamento_idTutor` 
FOREIGN KEY (fkTutor) REFERENCES Usuario(idUsuario);

ALTER TABLE Agendamento ADD CONSTRAINT `fk_Agendamento_idDisponivel` 
FOREIGN KEY (fkDisponibilidade) REFERENCES Disponibilidade(idDisponibilidade);


ALTER TABLE Agendamento ADD CONSTRAINT `fk_Agendamento_idDiscente` 
FOREIGN KEY (fkDiscente) REFERENCES Discente(idDiscente);

