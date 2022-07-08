/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES  */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE IF NOT EXISTS "agendamento" (
	"idAgendamento" INTEGER NOT NULL DEFAULT 'nextval(''"agendamento_idAgendamento_seq"''::regclass)',
	"fkTutor" INTEGER NULL DEFAULT NULL,
	"fkDiscente" INTEGER NULL DEFAULT NULL,
	"fkDisponibilidade" INTEGER NULL DEFAULT NULL,
	PRIMARY KEY ("idAgendamento"),
	CONSTRAINT "fk_Agendamento_idDiscente" FOREIGN KEY ("fkDiscente") REFERENCES "public"."usuario" ("idUsuario") ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT "fk_Agendamento_idDisponivel" FOREIGN KEY ("fkDisponibilidade") REFERENCES "public"."disponibilidade" ("idDisponibilidade") ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT "fk_Agendamento_idTutor" FOREIGN KEY ("fkTutor") REFERENCES "public"."usuario" ("idUsuario") ON UPDATE NO ACTION ON DELETE NO ACTION
);

/*!40000 ALTER TABLE "agendamento" DISABLE KEYS */;
/*!40000 ALTER TABLE "agendamento" ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS "bloqueio" (
	"idBloqueio" INTEGER NOT NULL DEFAULT 'nextval(''"bloqueio_idBloqueio_seq"''::regclass)',
	"idDiscente" INTEGER NULL DEFAULT NULL,
	"idTutor" INTEGER NULL DEFAULT NULL,
	"tempo" VARCHAR(45) NULL DEFAULT NULL,
	"bloqueio" BOOLEAN NULL DEFAULT NULL,
	PRIMARY KEY ("idBloqueio"),
	CONSTRAINT "FK_bloqueio_usuario" FOREIGN KEY ("idDiscente") REFERENCES "public"."usuario" ("idUsuario") ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT "FK_bloqueio_usuario_2" FOREIGN KEY ("idTutor") REFERENCES "public"."usuario" ("idUsuario") ON UPDATE NO ACTION ON DELETE NO ACTION
);

/*!40000 ALTER TABLE "bloqueio" DISABLE KEYS */;
INSERT INTO "bloqueio" ("idBloqueio", "idDiscente", "idTutor", "tempo", "bloqueio") VALUES
	(4, 152, 152, '7', 'true'),
	(3, 61, 152, '6', 'true'),
	(2, 61, 152, '1 dia', 'true'),
	(1, 61, 152, '2 dias', 'true'),
	(10, 44, 152, '1', 'true'),
	(11, 44, 152, '1', 'false'),
	(12, 44, 152, '1', 'false'),
	(6, 44, 152, '6', 'true'),
	(7, 44, 152, '6', 'true'),
	(8, 44, 152, '1', 'true'),
	(9, 44, 152, '1', 'true'),
	(5, 52, 152, 'sempre', 'true');
/*!40000 ALTER TABLE "bloqueio" ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS "disponibilidade" (
	"idDisponibilidade" INTEGER NOT NULL DEFAULT 'nextval(''"disponibilidade_idDisponibilidade_seq"''::regclass)',
	"dia" DATE NULL DEFAULT NULL,
	"horaInicial" TIME NULL DEFAULT NULL,
	"horaFinal" TIME NULL DEFAULT NULL,
	"idTutor" INTEGER NULL DEFAULT NULL,
	"livre" INTEGER NULL DEFAULT NULL,
	"fkevent" INTEGER NULL DEFAULT NULL,
	PRIMARY KEY ("idDisponibilidade"),
	CONSTRAINT "FK_disponibilidade_events" FOREIGN KEY ("fkevent") REFERENCES "public"."events" ("id") ON UPDATE NO ACTION ON DELETE NO ACTION,
	CONSTRAINT "FK_disponibilidade_usuario" FOREIGN KEY ("idTutor") REFERENCES "public"."usuario" ("idUsuario") ON UPDATE NO ACTION ON DELETE NO ACTION
);

/*!40000 ALTER TABLE "disponibilidade" DISABLE KEYS */;
INSERT INTO "disponibilidade" ("idDisponibilidade", "dia", "horaInicial", "horaFinal", "idTutor", "livre", "fkevent") VALUES
	(36, '2022-06-03', '12:52:00', '23:52:00', 52, 1, 9);
/*!40000 ALTER TABLE "disponibilidade" ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS "events" (
	"id" INTEGER NOT NULL DEFAULT 'nextval(''events_id_seq''::regclass)',
	"title" VARCHAR(90) NULL DEFAULT 'NULL::character varying',
	"description" TEXT NULL DEFAULT NULL,
	"color" VARCHAR(10) NULL DEFAULT 'NULL::character varying',
	"start" TIMESTAMP NULL DEFAULT NULL,
	"end" TIMESTAMP NULL DEFAULT NULL,
	PRIMARY KEY ("id")
);

/*!40000 ALTER TABLE "events" DISABLE KEYS */;
INSERT INTO "events" ("id", "title", "description", "color", "start", "end") VALUES
	(6, 'testte', 'teste', 'red', '2022-06-25 10:27:41', '2022-06-25 10:27:43'),
	(9, 'testte', 'teste', 'green', '2022-06-25 10:27:41', '2022-06-28 10:27:43'),
	(8, 'testte', 'teste', 'green', '2022-06-25 10:27:41', '2022-06-29 10:27:43'),
	(1, 'testte', 'teste', 'red', '2022-06-22 10:27:41', '2022-06-25 10:27:43'),
	(3, 'testte', 'teste', 'red', '2022-06-21 10:27:41', '2022-06-25 10:27:43'),
	(4, 'testte', 'teste', 'red', '2022-06-24 10:27:41', '2022-06-25 10:27:43'),
	(10, 'testte', 'teste', 'green', '2022-06-22 10:27:41', '2022-06-27 10:27:43'),
	(7, 'testte', 'teste', 'red', '2022-06-21 10:27:41', '2022-06-23 10:27:43'),
	(5, 'testte', 'teste', 'red', '2022-06-21 10:27:41', '2022-06-25 10:27:43'),
	(11, 'testte', 'teste', 'green', '2022-06-25 10:27:41', '2022-06-25 10:27:43'),
	(12, NULL, NULL, NULL, '2022-06-25 15:40:27', '2022-06-25 15:40:28'),
	(24, NULL, NULL, NULL, '2022-06-25 15:40:27', '2022-06-25 15:40:28'),
	(25, NULL, NULL, NULL, '2022-06-25 15:40:27', '2022-06-26 15:40:27'),
	(26, NULL, NULL, NULL, '2022-06-11 15:45:00', '2022-06-26 15:40:27'),
	(27, NULL, NULL, NULL, '2022-06-01 10:45:00', '2022-06-01 15:45:00');
/*!40000 ALTER TABLE "events" ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS "noticia" (
	"idNoticia" INTEGER NOT NULL DEFAULT 'nextval(''"noticia_idNoticia_seq"''::regclass)',
	"descricao" TEXT NULL DEFAULT NULL,
	PRIMARY KEY ("idNoticia")
);

/*!40000 ALTER TABLE "noticia" DISABLE KEYS */;
INSERT INTO "noticia" ("descricao") VALUES
	('Instrutor Roberto está doente, dado isso ele não poderá atender nessa semana!'),
	('Tamas cuidado com higienização!'),
	('Use máscara ');
/*!40000 ALTER TABLE "noticia" ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS "regulamento" (
	"idRegulamento" INTEGER NOT NULL DEFAULT 'nextval(''"regulamento_idRegulamento_seq"''::regclass)',
	"descricao" TEXT NOT NULL,
	PRIMARY KEY ("idRegulamento")
);

/*!40000 ALTER TABLE "regulamento" DISABLE KEYS */;
INSERT INTO "regulamento" ("descricao") VALUES
	('Proibido uso Bebidas Alcoolicas'),
	('Uso Obrigatório de mascara em locais fechados.'),
	('Não usar sandália ');
/*!40000 ALTER TABLE "regulamento" ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS "usuario" (
	"idUsuario" INTEGER NOT NULL DEFAULT 'nextval(''"usuario_idUsuario_seq"''::regclass)',
	"usuario" VARCHAR(45) NULL DEFAULT 'NULL::character varying',
	"senha" VARCHAR(45) NULL DEFAULT 'NULL::character varying',
	"num_registro" VARCHAR(50) NULL DEFAULT 'NULL::character varying',
	"peso" DOUBLE PRECISION NULL DEFAULT NULL,
	"sexo" VARCHAR(20) NULL DEFAULT 'NULL::character varying',
	"idade" INTEGER NULL DEFAULT NULL,
	"altura" DOUBLE PRECISION NULL DEFAULT NULL,
	"bloqueado" INTEGER NULL DEFAULT NULL,
	"endereco" VARCHAR(100) NULL DEFAULT 'NULL::character varying',
	"login" VARCHAR(45) NULL DEFAULT 'NULL::character varying',
	"nivel" INTEGER NULL DEFAULT NULL,
	PRIMARY KEY ("idUsuario")
);

/*!40000 ALTER TABLE "usuario" DISABLE KEYS */;
INSERT INTO "usuario" ("idUsuario", "usuario", "senha", "num_registro", "peso", "sexo", "idade", "altura", "bloqueado", "endereco", "login", "nivel") VALUES
	(161, 'icaro', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icaro', 3),
	(612, 'icaro', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icaro-tutor', 2),
	(641, 'icaro', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icaro-tutor', 2),
	(616, 'icaro', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icaro-tutor', 2),
	(618, 'icaro', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icaro-tutor', 2),
	(619, 'icaro', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icaro-tutor', 2),
	(714, 'teste', '698dc19d489c4e4db73e28a713eab07b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'teste', 2),
	(716, 'teste', '698dc19d489c4e4db73e28a713eab07b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'teste', 2),
	(718, 'teste', '698dc19d489c4e4db73e28a713eab07b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'teste', 2),
	(719, 'teste', '698dc19d489c4e4db73e28a713eab07b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'teste', 2),
	(810, 'teste', '698dc19d489c4e4db73e28a713eab07b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'teste', 2),
	(813, 'teste', '698dc19d489c4e4db73e28a713eab07b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'teste', 3),
	(812, 'teste', '698dc19d489c4e4db73e28a713eab07b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'teste', 3),
	(811, 'teste', '698dc19d489c4e4db73e28a713eab07b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'teste', 3),
	(715, 'teste', '698dc19d489c4e4db73e28a713eab07b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'teste', 3),
	(711, 'icaro', '443e41d6c89eddc57b47e7f1630b43cf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icaro', 3),
	(710, 'icaro', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icaro-tutor', 3),
	(617, 'icaro', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icaro-tutor', 3),
	(1163, 'icaro', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icaro-tutor', 3),
	(172, 'teste', '698dc19d489c4e4db73e28a713eab07b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'teste', 3),
	(177, 'teste', '698dc19d489c4e4db73e28a713eab07b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'teste', 3),
	(165, 'icaro', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'icaro-tutor', 3),
	(185, 'Ana Paula ', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rsd', 3),
	(151, 'discente', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'discente', 3),
	(152, 'Tutor', 'dba538946456c740662acaa8aa677094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tutor', 2);
/*!40000 ALTER TABLE "usuario" ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;



=====================================================================================================================================================================================




=====================================================================================================================================================================================








INSERT INTO "public"."events" ("title", "description", "color", "start", "end") 
VALUES ('testte', 'teste', 'green', '2022-06-25 10:27:41', '2022-06-25 10:27:43');

CREATE TABLE "events" (
	"id" SERIAL PRIMARY KEY NOT NULL,
	"title" VARCHAR(90) NULL DEFAULT NULL,
	"description" TEXT NULL DEFAULT NULL,
	"color" VARCHAR(10) NULL DEFAULT NULL,
	"start" TIMESTAMP NULL DEFAULT NULL,
	"end" TIMESTAMP NULL DEFAULT NULL
)
;



DELETE cascade FROM usuario WHERE 'idUsuario' = '83' ;

SELECT * FROM bloqueio AS b
        INNER JOIN usuario AS u
        ON b."idDiscente" = u."idUsuario"
        WHERE b.bloqueio = 'false'
        
        

INSERT INTO "public"."events" ("start", "end") 
VALUES ('2022-06-25 15:40:27', '2022-06-25 15:40:28');





ALTER TABLE usuario 
	
	DROP CONSTRAINT 





ALTER TABLE usuario 
ADD COLUMNS idUsuario SERIAL PRIMARY KEY;



CREATE TABLE "events" (
)
;



SELECT * FROM events WHERE "end" > CAST('2022-06-28 22:37:00' AS date);

SELECT now();



SELECT TIMe;

SET timezone TO 'GMT3';


INSERT INTO "public"."usuario" 
( "usuario", "senha", "num_registro",
 "peso", "sexo", "idade", "altura", "endereco",
  "login", "nivel")
   VALUES ('admin', 'dba538946456c740662acaa8aa677094',
   '2222', '22', '2', '21', '222', NULL, 'admin', '1');






=====================================================================================================================================================================================




=====================================================================================================================================================================================





-- --------------------------------------------------------

--
-- Estrutura para tabela "agendamento"
--

CREATE TABLE "agendamento" (
  "idAgendamento" SERIAL PRIMARY KEY NOT NULL,
  "fkTutor" int DEFAULT NULL,
  "fkDiscente" int DEFAULT NULL,
  "fkDisponibilidade" int DEFAULT NULL
);      

--
-- Despejando dados para a tabela "agendamento"
--

INSERT INTO "agendamento" ("idAgendamento", "fkTutor", "fkDiscente", "fkDisponibilidade") VALUES
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
-- Estrutura para tabela "bloqueio"
--

CREATE TABLE "bloqueio" (
  "idBloqueio" SERIAL PRIMARY KEY NOT NULL,
  "idDiscente" int DEFAULT NULL,
  "idTutor" int DEFAULT NULL
);

-- --------------------------------------------------------

--
-- Estrutura para tabela "disponibilidade"
--

CREATE TABLE "disponibilidade" (
  "idDisponibilidade" SERIAL PRIMARY KEY NOT NULL,
  "dia" date DEFAULT NULL,
  "horaInicial" time DEFAULT NULL,
  "horaFinal" time DEFAULT NULL,
  "idTutor" int DEFAULT NULL,
  "livre" INT DEFAULT NULL
);

--
-- Despejando dados para a tabela "disponibilidade"
--

INSERT INTO "disponibilidade" ("idDisponibilidade", "dia", "horaInicial", "horaFinal", "idTutor", "livre") VALUES
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
-- Estrutura para tabela "noticia"
--

CREATE TABLE "noticia" (
  "idNoticia" SERIAL PRIMARY KEY NOT NULL,
  "descricao" text
);

--
-- Despejando dados para a tabela "noticia"
--

INSERT INTO "noticia" ("idNoticia", "descricao") VALUES
(24, 'eeeeeeeeeeeeeee'),
(25, 'eeeeeeeeeee'),
(28, 'teste');

-- --------------------------------------------------------

--
-- Estrutura para tabela "regulamento"
--

CREATE TABLE "regulamento" (
  "idRegulamento" SERIAL PRIMARY KEY NOT NULL,
  "descricao" text NOT NULL
);

--
-- Despejando dados para a tabela "regulamento"
--

INSERT INTO "regulamento" ("idRegulamento", "descricao") VALUES
(16, 'teste');

-- --------------------------------------------------------

--
-- Estrutura para tabela "usuario"
--

CREATE TABLE "usuario" (
  "idUsuario" SERIAL PRIMARY KEY NOT NULL,
  "usuario" varchar(45)  DEFAULT NULL,
  "senha" varchar(45)  DEFAULT NULL,
  "num_registro" varchar(50) DEFAULT NULL,
  "peso" float DEFAULT NULL,
  "sexo" varchar(20) DEFAULT NULL,
  "idade" int DEFAULT NULL,
  "altura" float DEFAULT NULL,
  "bloqueado" INT DEFAULT NULL,
  "endereco" varchar(100) DEFAULT NULL,
  "login" varchar(45)  DEFAULT NULL,
  "nivel" int DEFAULT NULL
);

--
-- Despejando dados para a tabela "usuario"
--

INSERT INTO "usuario" ("idUsuario", "usuario", "senha", "num_registro", "peso", "sexo", "idade", "altura", "bloqueado", "endereco", "login", "nivel") VALUES
(122, 'admin', '934b535800b1cba8f96a5d72f72f1611', '2222', 22, '2', 21, 222, NULL, NULL, 'admin', 1),
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
-- Restrições para tabelas "agendamento"
--
ALTER TABLE "agendamento"
  ADD CONSTRAINT "fk_Agendamento_idDiscente" 
  FOREIGN KEY ("fkDiscente") 
  REFERENCES "usuario" ("idUsuario")
  ON DELETE CASCADE,
  
  ADD CONSTRAINT "fk_Agendamento_idDisponivel" 
  FOREIGN KEY ("fkDisponibilidade") 
  REFERENCES "disponibilidade" ("idDisponibilidade")
  ON DELETE CASCADE,
  ADD CONSTRAINT "fk_Agendamento_idTutor" 
  FOREIGN KEY ("fkTutor") 
  REFERENCES "usuario" ("idUsuario")
  ON DELETE CASCADE;

--
-- Restrições para tabelas "disponibilidade"
--
ALTER TABLE "disponibilidade"
  ADD CONSTRAINT "FK_disponibilidade_usuario" 
  FOREIGN KEY ("idTutor") 
  REFERENCES "usuario" ("idUsuario")
  ON DELETE CASCADE;
COMMIT;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela "agendamento"
--
ALTER TABLE "agendamento"
  ADD KEY "fk_Agendamento_idTutor" ("fkTutor"),
  ADD KEY "fk_Agendamento_idDisponivel" ("fkDisponibilidade"),
  ADD KEY "fk_Agendamento_idDiscente" ("fkDiscente");

--
-- Índices de tabela "disponibilidade"
--
ALTER TABLE "disponibilidade"
  ADD KEY "FK_disponibilidade_usuario" ("idTutor");

--




        



