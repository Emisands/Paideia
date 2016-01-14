
CREATE TABLE Account
(
	email                VARCHAR(50) NULL,
	name                 VARCHAR(60) NULL,
	password             VARCHAR(15) NULL,
	IDUser               INTEGER NOT NULL,
	tipo_user            boolean NULL,
	InstID               INTEGER NULL
);

ALTER TABLE Account
ADD PRIMARY KEY (IDUser);

CREATE TABLE Answers
(
	ANID                 INTEGER NOT NULL,
	correct              boolean NULL,
	text_answer          TEXT NULL,
	QID                  INTEGER NOT NULL,
	FID                  INTEGER NOT NULL
);

ALTER TABLE Answers
ADD PRIMARY KEY (ANID,QID,FID);

CREATE TABLE Form
(
	FID                  INTEGER NOT NULL,
	name                 VARCHAR(50) NULL,
	RID                  INTEGER NULL
);

ALTER TABLE Form
ADD PRIMARY KEY (FID);

CREATE TABLE Instituicao
(
	InstID               INTEGER NOT NULL,
	name                 VARCHAR(40) NULL,
	endereco             VARCHAR(30) NULL,
	telefone             VARCHAR(20) NULL,
	cidade               VARCHAR(20) NULL,
	estado               VARCHAR(20) NULL
);

ALTER TABLE Instituicao
ADD PRIMARY KEY (InstID);

CREATE TABLE Lista_Membros
(
	RID                  INTEGER NOT NULL,
	IDUser               INTEGER NOT NULL
);

ALTER TABLE Lista_Membros
ADD PRIMARY KEY (RID,IDUser);

CREATE TABLE Questions
(
	QID                  INTEGER NOT NULL,
	enunciado            LONGTEXT NULL,
	FID                  INTEGER NOT NULL,
	image                VARCHAR(100) NULL
);

ALTER TABLE Questions
ADD PRIMARY KEY (QID,FID);

CREATE TABLE Room
(
	RID                  INTEGER NOT NULL,
	Room_Name            VARCHAR(40) NULL,
	IDUser               INTEGER NULL,
	InstID               INTEGER NOT NULL
);

ALTER TABLE Room
ADD PRIMARY KEY (RID);

ALTER TABLE Account
ADD CONSTRAINT R_23 FOREIGN KEY (InstID) REFERENCES Instituição (InstID);

ALTER TABLE Answers
ADD CONSTRAINT R_24 FOREIGN KEY (QID, FID) REFERENCES Questions (QID, FID);

ALTER TABLE Form
ADD CONSTRAINT R_15 FOREIGN KEY (RID) REFERENCES Room (RID);

ALTER TABLE Lista_Membros
ADD CONSTRAINT R_18 FOREIGN KEY (RID) REFERENCES Room (RID);

ALTER TABLE Lista_Membros
ADD CONSTRAINT R_19 FOREIGN KEY (IDUser) REFERENCES Account (IDUser);

ALTER TABLE Questions
ADD CONSTRAINT R_22 FOREIGN KEY (FID) REFERENCES Form (FID);

ALTER TABLE Room
ADD CONSTRAINT R_14 FOREIGN KEY (IDUser) REFERENCES Account (IDUser);

ALTER TABLE Room
ADD CONSTRAINT R_25 FOREIGN KEY (InstID) REFERENCES Instituição (InstID);
