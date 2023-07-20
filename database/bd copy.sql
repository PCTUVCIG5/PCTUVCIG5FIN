
-- $table->id();
-- $table->string('idHom');
-- $table->string('typeCeIn');
-- $table->SoftDeletes();
-- $table->timestamps();





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