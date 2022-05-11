

CREATE DATABASE IFhealth;

USE IFhealth;

CREATE TABLE Discente(
idDiscente INT PRIMARY KEY,
nome VARCHAR(45),
senha VARCHAR(45),
numMatricula VARCHAR(14),
peso FLOAT,
sexo VARCHAR(20),
idade INT,
altura FLOAT);

DROP TABLE Agendamento;

CREATE TABLE Agendamento(
idAgendar INT PRIMARY KEY,
idtutor INT,
idDiscente INT,
idDisponivel INT);

ALTER TABLE Agendamento ADD CONSTRAINT `fk_Agendarmento_idTutor` 
FOREIGN KEY (idTutor) REFERENCES Tutor(idTutor);


ALTER TABLE Agendamento ADD CONSTRAINT `fk_Agendarmento_idDisponivel` 
FOREIGN KEY (idDisponivel) REFERENCES Disponibilidade(idDisponivel);


ALTER TABLE Agendamento ADD CONSTRAINT `fk_Agendarmento_idDiscente` 
FOREIGN KEY (idDiscente) REFERENCES Discente(idDiscente);



CREATE TABLE Disponibilidade(
idDisponivel INT PRIMARY KEY,
nome VARCHAR(45),
senha VARCHAR(45),
numMatricula VARCHAR(14),
peso FLOAT,
sexo VARCHAR(20),
idade INT,
altura FLOAT);



CREATE TABLE Tutor(
idTutor INT PRIMARY KEY,
nome VARCHAR(45),
senha VARCHAR(45),
numRegistro VARCHAR(14),
idAdmin INT);


ALTER TABLE Tutor ADD CONSTRAINT `fk_Tutor_idAdmin` 
FOREIGN KEY (idAdmin) REFERENCES Administrador(idAdmin);




CREATE TABLE Administrador(
idAdmin INT PRIMARY KEY,
nome VARCHAR(45),
senha VARCHAR(45),
numRegistro VARCHAR(14));








CREATE OR REPLACE FUNCTION apagarAgendamento(nomDiscente VARCHAR(45))
RETURNS INTEGER AS 
$$
DECLARE idDiscente INT;
DECLARE idDisponivel INT;
	BEGIN 
		idDiscente = (SELECT idDiscente FROM Discente WHERE nome = nomeDiscente);
		idDisponivel = (SELECT idDisponivel FROM Agendamento ag WHERE ag.idDiscente = idDiscente);
		
		DELETE FROM Agendamento ag WHERE ag.idDiscente = idDiscente;
		DELETE FROM Disponibilidade dp WHERE dp.idDisponivel = idDisponivel;
		
	RETURN idDiscente;
	END;
$$ 
LANGUAGE plpgsql;








CREATE OR REPLACE PROCEDURE apagarAgendamento(nomDiscente VARCHAR(45))
LANGUAGE SQL 
AS 
$$
DECLARE idDiscente INT;
DECLARE idDisponivel INT;

		idDiscente = (SELECT idDiscente FROM Discente WHERE nome = nomeDiscente);
		idDisponivel = (SELECT idDisponivel FROM Agendamento ag WHERE ag.idDiscente = idDiscente);
		
		DELETE FROM Agendamento ag WHERE ag.idDiscente = idDiscente;
		DELETE FROM Disponibilidade dp WHERE dp.idDisponivel = idDisponivel;
		
$$;
























