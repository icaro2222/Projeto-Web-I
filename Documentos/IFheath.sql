

CREATE DATABASE IFhealth;

USE IFhealth;

CREATE TABLE usuario(
	idUsuario int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	usuario VARCHAR(45),
	login VARCHAR(45),
	nivel int),
	senha VARCHAR(45),
	num_registro INT(14),
	peso FLOAT,
	sexo VARCHAR(20),
	idade INT,
	altura FLOAT,
	bloqueado BOOLEAN
);

CREATE TABLE disponibilidade(
	idDisponibilidade int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	dia date,
	hora time,
	livre BOOLEAN
);

CREATE TABLE agendamento(
	idAgendamento int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	fkTutor INT,
	fkDiscente INT,
	fkDisponibilidade INT
);

CREATE TABLE anotacoes(
	idAnotacoes int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	descricao TEXT
);

CREATE TABLE anotacoes(
	idAnotacoes int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	descricao TEXT
);

CREATE TABLE bloqueio(
	idBloqueio int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	idDiscente INT,
	idTutor INT
	
);

ALTER TABLE agendamento ADD CONSTRAINT `fk_Agendamento_idTutor` 
FOREIGN KEY (fkTutor) REFERENCES usuario(idUsuario);

ALTER TABLE agendamento ADD CONSTRAINT `fk_Agendamento_idDisponivel` 
FOREIGN KEY (fkDisponibilidade) REFERENCES disponibilidade(idDisponibilidade);


ALTER TABLE agendamento ADD CONSTRAINT `fk_Agendamento_idDiscente` 
FOREIGN KEY (fkDiscente) REFERENCES usuario(idusuario);

