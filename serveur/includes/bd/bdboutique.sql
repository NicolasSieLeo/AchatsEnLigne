CREATE DATABASE bdboutique;
USE bdboutique;
 
CREATE TABLE membres (
idm int PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(30) NOT NULL,
prenom VARCHAR (30) NOT NULL,
sexe ENUM('M','F','N'),
datenaissance DATE,
courriel VARCHAR(127)
);
 
CREATE TABLE connexion (
idm int PRIMARY KEY,
courriel VARCHAR(256) NOT NULL,
pass VARCHAR (60) NOT NULL,
role ENUM('A', 'M', 'E') NOT NULL DEFAULT 'A',
statut ENUM('A', 'I') NOT NULL DEFAULT 'A',
CONSTRAINT connexion_idm_FK FOREIGN KEY (idm) REFERENCES membres(idm)
);
 
INSERT INTO membres VALUES (0, "admin", "admin", "M", "1985-03-18", "admin@boutique.com");
INSERT INTO connexion VALUES (1, "admin@boutique.com", "12345", 'A', 'A');