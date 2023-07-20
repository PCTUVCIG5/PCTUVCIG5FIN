habitants {
	idHabi int pk increments
	nomHabi varchar(250)
	prenHabi varchar(250)
	dateNHabi varchar(250)
	lieuNHabi varchar(250)
	sexeHabi varchar(250)
	telHabi varchar(250)
}

activites {
	idActi int pk increments
	nomActi varchar(250)
	typeActi varchar(250)
}

centreInteret {
	idCeIn int pk increments
	nomCeIn varchar(250)
	typeCeIn varchar(250)
	Habi_id integer > habitants.idHabi
}

metiers {
	idMtie int pk increments
	nomMtie varchar(250)
	typeMtie varchar(250)
}

refMetier {
	idRMtie int pk increments
}

actualités {
	idActu int pk increments
	description varchar(250)
	image1 varchar(250)
	image2 varchar(250)
	image3 varchar(250)
	typeActu varchar(250)
	statutActu varchar(250)
}

centreSantes {
	idCent int pk increments
	description varchar(250)
	image1 varchar(250)
	image2 varchar(250)
	image3 varchar(250)
	typeCent varchar(250)
	statutCent varchar(250)
}

pharmacies {
	idPhar int pk increments
	description varchar(250)
	image1 varchar(250)
	image2 varchar(250)
	image3 varchar(250)
	typePhar varchar(250)
	statutPhar varchar(250)
	gardePhar varchar(250)
}

naissances {
	id int(10) increments
	prefecture varchar(30)
	centretatcivil varchar(30)
	registre int(5) def(null)
	acte int(5)
	date_acte date
	nom varchar(30)
	prenom varchar(30)
	delivre_a varchar(30)
	delivre_le varchar(30)
	delivre_an varchar(30)
	num_serie int(10)
	naissance_jour_moi varchar(30)
	naissance_an varchar(30)
	naissance_heure varchar(30) def(null)
	naissance_minuite varchar(30) def(null)
	naissance_nom_prenom varchar(30)
	naissance_lieu varchar(30)
	naissance_sexe varchar(30)
	idMerer int(10) > femmes.idFem
	idPerer int(10) > hommes.idHom
	declaration_faite_par varchar(60)
	declaration_recue_pa varchar(60)
}

mariage {
	idMar int pk increments
	epouse_id int pk > femmes.idFem
	epoux_id int > hommes.idHabi
	mariage_date date pk
	mariage_lieu varchar(32)
}

divoces {
	idDiv int pk increments
	epouse_id int pk > femmes.idFem
	epoux_id int > hommes.idHabi
	divoces_date date pk
	divoces_lieu varchar(32)
}

deces {
	idDece integer pk increments
	Habi_id integer > habitants.idHabi
	deces_date date
	deces_cause varchar(32)
}

femmes {
	idFem integer pk increments
	Habi_id integer > habitants.idHabi
}

hommes {
	idHom integer pk increments
	Habi_id integer > habitants.idHabi
}

amenagements {
	idAme integer pk increments
	dateAme date
	ancienQtier varchar(250)
	Habi_id integer > habitants.idHabi
}

demenagements {
	idDme integer pk increments
	dateDme date
	nouveauQtier varchar(250)
	Habi_id integer > habitants.idHabi
}

offreEmploi {
	idOfr integer pk increments
	descriptionOfr varchar(250)
	dateDebutOfr date
	dateFinOfr date
	entrepriseOfr varchar(250)
	statutOfr varchar(250)
}

demandeEmploi {
	idDman integer pk increments
	descriptionDman varchar(250)
	cvDman varchar(250)
	dateDebutDman date
	Habi_id integer > habitants.idHabi
	Ofr_id integer > offreEmploi.idOfr
	entrepriseDman varchar(250)
	statutDman varchar(250)
}
