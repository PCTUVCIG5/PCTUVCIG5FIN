CREATE TABLE `habitants` (
	`idHabi` int NOT NULL AUTO_INCREMENT,
	`nomHabi` varchar(250) NOT NULL,
	`prenHabi` varchar(250) NOT NULL,
	`dateNHabi` varchar(250) NOT NULL,
	`lieuNHabi` varchar(250) NOT NULL,
	`sexeHabi` varchar(250) NOT NULL,
	`telHabi` varchar(250) NOT NULL,
	PRIMARY KEY (`idHabi`)
);

CREATE TABLE `activites` (
	`idActi` int NOT NULL AUTO_INCREMENT,
	`nomActi` varchar(250) NOT NULL,
	`typeActi` varchar(250) NOT NULL,
	PRIMARY KEY (`idActi`)
);

CREATE TABLE `centreInteret` (
	`idCeIn` int NOT NULL AUTO_INCREMENT,
	`nomCeIn` varchar(250) NOT NULL,
	`typeCeIn` varchar(250) NOT NULL,
	`Habi_id` INT NOT NULL,
	PRIMARY KEY (`idCeIn`)
);

CREATE TABLE `metiers` (
	`idMtie` int NOT NULL AUTO_INCREMENT,
	`nomMtie` varchar(250) NOT NULL,
	`typeMtie` varchar(250) NOT NULL,
	PRIMARY KEY (`idMtie`)
);

CREATE TABLE `refMetier` (
	`idRMtie` int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`idRMtie`)
);

CREATE TABLE `actualités` (
	`idActu` int NOT NULL AUTO_INCREMENT,
	`description` varchar(250) NOT NULL,
	`image1` varchar(250) NOT NULL,
	`image2` varchar(250) NOT NULL,
	`image3` varchar(250) NOT NULL,
	`typeActu` varchar(250) NOT NULL,
	`statutActu` varchar(250) NOT NULL,
	PRIMARY KEY (`idActu`)
);

CREATE TABLE `centreSantes` (
	`idCent` int NOT NULL AUTO_INCREMENT,
	`description` varchar(250) NOT NULL,
	`image1` varchar(250) NOT NULL,
	`image2` varchar(250) NOT NULL,
	`image3` varchar(250) NOT NULL,
	`typeCent` varchar(250) NOT NULL,
	`statutCent` varchar(250) NOT NULL,
	PRIMARY KEY (`idCent`)
);

CREATE TABLE `pharmacies` (
	`idPhar` int NOT NULL AUTO_INCREMENT,
	`description` varchar(250) NOT NULL,
	`image1` varchar(250) NOT NULL,
	`image2` varchar(250) NOT NULL,
	`image3` varchar(250) NOT NULL,
	`typePhar` varchar(250) NOT NULL,
	`statutPhar` varchar(250) NOT NULL,
	`gardePhar` varchar(250) NOT NULL,
	PRIMARY KEY (`idPhar`)
);

CREATE TABLE `naissances` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`prefecture` varchar(30) NOT NULL,
	`centretatcivil` varchar(30) NOT NULL,
	`registre` int(5) NOT NULL DEFAULT 'null',
	`acte` int(5) NOT NULL,
	`date_acte` DATE NOT NULL,
	`nom` varchar(30) NOT NULL,
	`prenom` varchar(30) NOT NULL,
	`delivre_a` varchar(30) NOT NULL,
	`delivre_le` varchar(30) NOT NULL,
	`delivre_an` varchar(30) NOT NULL,
	`num_serie` int(10) NOT NULL,
	`naissance_jour_moi` varchar(30) NOT NULL,
	`naissance_an` varchar(30) NOT NULL,
	`naissance_heure` varchar(30) NOT NULL DEFAULT 'null',
	`naissance_minuite` varchar(30) NOT NULL DEFAULT 'null',
	`naissance_nom_prenom` varchar(30) NOT NULL,
	`naissance_lieu` varchar(30) NOT NULL,
	`naissance_sexe` varchar(30) NOT NULL,
	`idMerer` int(10) NOT NULL,
	`idPerer` int(10) NOT NULL,
	`declaration_faite_par` varchar(60) NOT NULL,
	`declaration_recue_pa` varchar(60) NOT NULL
);

CREATE TABLE `deces` (
	`idDece` INT NOT NULL AUTO_INCREMENT,
	`Habi_id` INT NOT NULL,
	`deces_date` DATE NOT NULL,
	`deces_cause` varchar(32) NOT NULL,
	PRIMARY KEY (`idDece`)
);

CREATE TABLE `femmes` (
	`idFem` INT NOT NULL AUTO_INCREMENT,
	`Habi_id` INT NOT NULL,
	PRIMARY KEY (`idFem`)
);

CREATE TABLE `hommes` (
	`idHom` INT NOT NULL AUTO_INCREMENT,
	`Habi_id` INT NOT NULL,
	PRIMARY KEY (`idHom`)
);

CREATE TABLE `amenagements` (
	`idAme` INT NOT NULL AUTO_INCREMENT,
	`dateAme` DATE NOT NULL,
	`ancienQtier` varchar(250) NOT NULL,
	`Habi_id` INT NOT NULL,
	PRIMARY KEY (`idAme`)
);

CREATE TABLE `demenagements` (
	`idDme` INT NOT NULL AUTO_INCREMENT,
	`dateDme` DATE NOT NULL,
	`nouveauQtier` varchar(250) NOT NULL,
	`Habi_id` INT NOT NULL,
	PRIMARY KEY (`idDme`)
);

CREATE TABLE `divoces` (
	`idDiv` int NOT NULL AUTO_INCREMENT,
	`epouse_id` int NOT NULL,
	`epoux_id` int NOT NULL,
	`divoces_date` DATE NOT NULL,
	`divoces_lieu` varchar(32) NOT NULL,
	PRIMARY KEY (`idDiv`,`epouse_id`,`divoces_date`)
);

CREATE TABLE `mariages` (
	`idMar` int NOT NULL AUTO_INCREMENT,
	`epouse_id` int NOT NULL,
	`epoux_id` int NOT NULL,
	`mariage_date` DATE NOT NULL,
	`mariage_lieu` varchar(32) NOT NULL,
	PRIMARY KEY (`idMar`,`epouse_id`,`mariage_date`)
);

CREATE TABLE `offreEmplois` (
	`idOfr` INT NOT NULL AUTO_INCREMENT,
	`descriptionOfr` varchar(250) NOT NULL,
	`dateDebutOfr` DATE NOT NULL,
	`dateFinOfr` DATE NOT NULL,
	`entrepriseOfr` varchar(250) NOT NULL,
	`statutOfr` varchar(250) NOT NULL,
	PRIMARY KEY (`idOfr`)
);

CREATE TABLE `demandeEmplois` (
	`idDman` INT NOT NULL AUTO_INCREMENT,
	`descriptionDman` varchar(250) NOT NULL,
	`cvDman` varchar(250) NOT NULL,
	`dateDebutDman` DATE NOT NULL,
	`Habi_id` INT NOT NULL,
	`Ofr_id` INT NOT NULL,
	`entrepriseDman` varchar(250) NOT NULL,
	`statutDman` varchar(250) NOT NULL,
	PRIMARY KEY (`idDman`)
);

ALTER TABLE `centreInteret` ADD CONSTRAINT `centreInteret_fk0` FOREIGN KEY (`Habi_id`) REFERENCES `habitants`(`idHabi`);

ALTER TABLE `naissances` ADD CONSTRAINT `naissances_fk0` FOREIGN KEY (`idMerer`) REFERENCES `femmes`(`idFem`);

ALTER TABLE `naissances` ADD CONSTRAINT `naissances_fk1` FOREIGN KEY (`idPerer`) REFERENCES `hommes`(`idHom`);

ALTER TABLE `deces` ADD CONSTRAINT `deces_fk0` FOREIGN KEY (`Habi_id`) REFERENCES `habitants`(`idHabi`);

ALTER TABLE `femmes` ADD CONSTRAINT `femmes_fk0` FOREIGN KEY (`Habi_id`) REFERENCES `habitants`(`idHabi`);

ALTER TABLE `hommes` ADD CONSTRAINT `hommes_fk0` FOREIGN KEY (`Habi_id`) REFERENCES `habitants`(`idHabi`);

ALTER TABLE `amenagements` ADD CONSTRAINT `amenagements_fk0` FOREIGN KEY (`Habi_id`) REFERENCES `habitants`(`idHabi`);

ALTER TABLE `demenagements` ADD CONSTRAINT `demenagements_fk0` FOREIGN KEY (`Habi_id`) REFERENCES `habitants`(`idHabi`);

ALTER TABLE `divoces` ADD CONSTRAINT `divoces_fk0` FOREIGN KEY (`epouse_id`) REFERENCES `femmes`(`idFem`);

ALTER TABLE `divoces` ADD CONSTRAINT `divoces_fk1` FOREIGN KEY (`epoux_id`) REFERENCES `hommes`(`idHabi`);

ALTER TABLE `mariages` ADD CONSTRAINT `mariages_fk0` FOREIGN KEY (`epouse_id`) REFERENCES `femmes`(`idFem`);

ALTER TABLE `mariages` ADD CONSTRAINT `mariages_fk1` FOREIGN KEY (`epoux_id`) REFERENCES `hommes`(`idHabi`);

ALTER TABLE `demandeEmplois` ADD CONSTRAINT `demandeEmplois_fk0` FOREIGN KEY (`Habi_id`) REFERENCES `habitants`(`idHabi`);

ALTER TABLE `demandeEmplois` ADD CONSTRAINT `demandeEmplois_fk1` FOREIGN KEY (`Ofr_id`) REFERENCES `offreEmploi`(`idOfr`);