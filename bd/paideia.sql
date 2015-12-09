
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
	text_answer          TEXT NULL
);

ALTER TABLE Answers
ADD PRIMARY KEY (ANID);

CREATE TABLE Form
(
	FID                  INTEGER NOT NULL,
	subject              VARCHAR(20) NULL,
	name                 VARCHAR(50) NULL,
	RID                  INTEGER NULL
);

ALTER TABLE Form
ADD PRIMARY KEY (FID);

CREATE TABLE Instituição
(
	InstID               INTEGER NOT NULL,
	name                 VARCHAR(40) NULL,
	endereco             VARCHAR(30) NULL,
	telefone             VARCHAR(20) NULL,
	cidade               VARCHAR(20) NULL,
	estado               VARCHAR(20) NULL
);

ALTER TABLE Instituição
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

CREATE TABLE Questions_Answers
(
	QID                  INTEGER NOT NULL,
	ANID                 INTEGER NOT NULL,
	FID                  INTEGER NOT NULL
);

ALTER TABLE Questions_Answers
ADD PRIMARY KEY (QID,ANID,FID);

CREATE TABLE Room
(
	RID                  INTEGER NOT NULL,
	Room_Name            VARCHAR(40) NULL,
	IDUser               INTEGER NULL
);

ALTER TABLE Room
ADD PRIMARY KEY (RID);

CREATE TABLE Session
(
	UserAnswer           VARCHAR(20) NULL,
	QID                  INTEGER NOT NULL,
	ANID                 INTEGER NOT NULL,
	FID                  INTEGER NOT NULL,
	RID                  INTEGER NOT NULL,
	IDUser               INTEGER NOT NULL
);

ALTER TABLE Session
ADD PRIMARY KEY (QID,ANID,FID,RID,IDUser);

ALTER TABLE Account
ADD CONSTRAINT R_23 FOREIGN KEY (InstID) REFERENCES Instituição (InstID);

ALTER TABLE Form
ADD CONSTRAINT R_15 FOREIGN KEY (RID) REFERENCES Room (RID);

ALTER TABLE Lista_Membros
ADD CONSTRAINT R_18 FOREIGN KEY (RID) REFERENCES Room (RID);

ALTER TABLE Lista_Membros
ADD CONSTRAINT R_19 FOREIGN KEY (IDUser) REFERENCES Account (IDUser);

ALTER TABLE Questions
ADD CONSTRAINT R_22 FOREIGN KEY (FID) REFERENCES Form (FID);

ALTER TABLE Questions_Answers
ADD CONSTRAINT R_2 FOREIGN KEY (QID, FID) REFERENCES Questions (QID, FID);

ALTER TABLE Questions_Answers
ADD CONSTRAINT R_3 FOREIGN KEY (ANID) REFERENCES Answers (ANID);

ALTER TABLE Room
ADD CONSTRAINT R_14 FOREIGN KEY (IDUser) REFERENCES Account (IDUser);

ALTER TABLE Session
ADD CONSTRAINT R_5 FOREIGN KEY (IDUser) REFERENCES Account (IDUser);

ALTER TABLE Session
ADD CONSTRAINT R_10 FOREIGN KEY (QID, ANID, FID) REFERENCES Questions_Answers (QID, ANID, FID);

ALTER TABLE Session
ADD CONSTRAINT R_12 FOREIGN KEY (FID) REFERENCES Form (FID);

ALTER TABLE Session
ADD CONSTRAINT R_13 FOREIGN KEY (RID) REFERENCES Room (RID);
