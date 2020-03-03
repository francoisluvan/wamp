SET datestyle TO european;

-- insertion dans ADHERENT
-- (numadh, nom,prenom,fonction,adresse,telephone,skipper,anneeadh)
insert into ADHERENT values
		(1,'aflau','jean','president','grenoble','0476441250','oui',2005);
insert into ADHERENT values
		(2,'maire','pierre','vice-president','grenoble','0476501265','oui',2005);
insert into ADHERENT values
		(3,'boucher','anne','vice-president','meylan','0476152360','non',2005);
insert into ADHERENT values
		(4,'michal','veronique','secretaire','grenoble','0476451252','non',2006);
insert into ADHERENT values
		(5,'guy','fabien','tresorier','meylan','0476441250','oui',2006);
insert into ADHERENT values
		(6,'rousseau','julien','membre actif','veurey','0476531256','non',2006);
insert into ADHERENT values
		(7,'frantz','paul','membre actif','st-égrève','0476531278','non',2006);
insert into ADHERENT values
		(8,'colin','serge','membre actif','st-ismier','0476531237','non',2006);
insert into ADHERENT values
		(9,'boulle','yves','membre actif','meylan','0476531586','non',2006);
insert into ADHERENT values
		(10,'rondet','audrey','membre actif','grenoble','0476527130','oui',2007);
insert into ADHERENT values
		(11,'garnier','christophe','autre','échirolles','0476852130','non',2007);
insert into ADHERENT values
		(12,'bar','thierry','autre','st-égrève','0476535678','non',2007);
insert into ADHERENT values
		(13,'merlu','christian','autre','veurey','0476371852','oui',2007);
insert into ADHERENT values
		(14,'crevette','sylvie','autre','st-ismier','0476458293','non',2007);
insert into ADHERENT values
		(15,'morue','dominique','autre','grenoble','0476349725','non',2007);
insert into ADHERENT values
		(16,'saumon','claude','autre','grenoble','0476482497','non',2007);
insert into ADHERENT values
		(17,'limande','thierry','autre','voiron','0476165874','non',2007);
insert into ADHERENT values
		(18,'turbot','pascale','autre','vif','0476462597','non',2007);
insert into ADHERENT values
		(19,'crabe','sylvie','membre actif','st-ismier','0476452843','non',2007);

-- insertion dans BATEAU (numbat,nombat,taille,typebat,nbplaces)
insert into BATEAU values(1,'le renard',11.80,'pouvreau',6);
insert into BATEAU values(2,'imagine',11.30,'selection',6);
insert into BATEAU values(3,'rêve des iles',14.50,'sun fast',8);
insert into BATEAU values(4,'intermède',11.80,'sun magic',10);
insert into BATEAU values(5,'évasion',12.10,'gypsea 402',7);
insert into BATEAU values(6,'cauchemar des mers',11.50,'coulapic',5);

-- insertion dans ACTIVITE (numact, typeact,depart,arrivee,datedebut,datefin)
insert into ACTIVITE values(1,'rallye','Toulon','Toulon','8/06/2018','10/06/2018');
insert into ACTIVITE values(2,'sortie','Hyeres','Hyeres','8/06/2018','8/06/2018');
insert into ACTIVITE values(3,'sortie','Hyeres','Hyeres','8/08/2018','10/08/2018');
insert into ACTIVITE values(4,'sortie','Hyeres','Hyeres','9/08/2018','13/08/2018');
insert into ACTIVITE values(5,'rallye','Hyeres','Hyeres','16/08/2018','16/08/2018');
insert into ACTIVITE values(6,'rallye','Toulon','Toulon','02/09/2018','16/09/2018');
insert into ACTIVITE values(7,'sortie','Toulon','Toulon','14/09/2018','14/09/2018');
insert into ACTIVITE values(8,'rallye','Toulon','Toulon','14/10/2018','15/10/2018');

-- insertion dans COTISATION (numadh, anneecot, paye)
insert into COTISATION values(1,2017, 100, 'oui');
insert into COTISATION values(1,2018, 110, 'oui');
insert into COTISATION values(1,2019, 120, 'oui');
insert into COTISATION values(2,2017, 100, 'oui');
insert into COTISATION values(2,2018, 110, 'oui');
insert into COTISATION values(2,2019, 120, 'non');
insert into COTISATION values(3,2017, 100, 'oui');
insert into COTISATION values(3,2018, 120, 'non');
insert into COTISATION values(4,2018, 110, 'non');
insert into COTISATION values(4,2019, 120, 'non');
insert into COTISATION values(5,2018, 110, 'oui');
insert into COTISATION values(5,2019, 120, 'oui');
insert into COTISATION values(6,2018, 110, 'oui');
insert into COTISATION values(7,2018, 110, 'oui');
insert into COTISATION values(8,2017, 110, 'non');
insert into COTISATION values(8,2018, 120, 'non');
insert into COTISATION values(9,2018, 110, 'oui');
insert into COTISATION values(9,2019, 120, 'non');
insert into COTISATION values(10,2019, 120, 'oui');
insert into COTISATION values(11,2019, 120, 'oui');
insert into COTISATION values(12,2019, 120, 'oui');
insert into COTISATION values(13,2019, 120, 'oui');
insert into COTISATION values(14,2019, 120, 'oui');
insert into COTISATION values(15,2019, 130, 'oui');
insert into COTISATION values(16,2019, 130, 'oui');
insert into COTISATION values(17,2019, 130, 'oui');
insert into COTISATION values(18,2019, 130, 'oui');
insert into COTISATION values(19,2019, 130, 'oui');

-- insertion dans AGENCE (nomagence,telephone,fax,adresse)
insert into  AGENCE values('plaisance','0494952013',null,'Marseille');
insert into  AGENCE values('nauticloc','0494526412',null,'toulon');

-- insertion dans PROPRIETAIRE (numadh, numbat)
insert into PROPRIETAIRE values(13,1);
insert into PROPRIETAIRE values(17,6);

-- insertion dans LOUEUR (nomagence,numbat)
insert into LOUEUR values('nauticloc',4);
insert into LOUEUR values('plaisance',2);
insert into LOUEUR values('plaisance',3);
insert into LOUEUR values('nauticloc',5);

-- insertion dans CHEFDEBORD (numact,numadh, numbat)
insert into CHEFDEBORD values(1,1,2);
insert into CHEFDEBORD values(1,11,1);
insert into CHEFDEBORD values(2,10,3);
insert into CHEFDEBORD values(3,13,1);
insert into CHEFDEBORD values(4,5,5);
insert into CHEFDEBORD values(5,1,5);
insert into CHEFDEBORD values(5,13,4);
insert into CHEFDEBORD values(6,1,4);
insert into CHEFDEBORD values(6,13,5);
insert into CHEFDEBORD values(6,2,6);

-- insertion dans EQUIPAGE (numact,numadh, numbat)
insert into EQUIPAGE values(1,2,2);
insert into EQUIPAGE values(1,3,2);
insert into EQUIPAGE values(1,4,2);
insert into EQUIPAGE values(1,5,2);
insert into EQUIPAGE values(1,6,1);
insert into EQUIPAGE values(1,7,1);
insert into EQUIPAGE values(1,8,1);
insert into EQUIPAGE values(1,9,1);
insert into EQUIPAGE values(2,12,3);
insert into EQUIPAGE values(2,13,3);
insert into EQUIPAGE values(2,14,3);
insert into EQUIPAGE values(2,15,3);
insert into EQUIPAGE values(2,16,3);
insert into EQUIPAGE values(2,17,3);
insert into EQUIPAGE values(2,18,3);
insert into EQUIPAGE values(3,2,1);
insert into EQUIPAGE values(3,12,1);
insert into EQUIPAGE values(3,14,1);
insert into EQUIPAGE values(3,8,1);
insert into EQUIPAGE values(3,6,1);
insert into EQUIPAGE values(4,3,5);
insert into EQUIPAGE values(4,4,5);
insert into EQUIPAGE values(4,7,5);
insert into EQUIPAGE values(4,9,5);
insert into EQUIPAGE values(4,10,5);
insert into EQUIPAGE values(4,11,5);
insert into EQUIPAGE values(5,2,5);
insert into EQUIPAGE values(5,3,5);
insert into EQUIPAGE values(5,4,5);
insert into EQUIPAGE values(5,5,5);
insert into EQUIPAGE values(5,6,5);
insert into EQUIPAGE values(5,7,5);
insert into EQUIPAGE values(5,8,4);
insert into EQUIPAGE values(5,9,4);
insert into EQUIPAGE values(5,10,4);
insert into EQUIPAGE values(5,11,4);
insert into EQUIPAGE values(5,12,4);
insert into EQUIPAGE values(5,14,4);
insert into EQUIPAGE values(5,15,4);
insert into EQUIPAGE values(6,3,4);
insert into EQUIPAGE values(6,14,4);
insert into EQUIPAGE values(6,6,4);
insert into EQUIPAGE values(6,11,4);
insert into EQUIPAGE values(6,10,4);
insert into EQUIPAGE values(6,16,4);
insert into EQUIPAGE values(6,9,4);
insert into EQUIPAGE values(6,4,5);
insert into EQUIPAGE values(6,7,5);
insert into EQUIPAGE values(6,12,5);
insert into EQUIPAGE values(6,17,5);
insert into EQUIPAGE values(6,19,5);
insert into EQUIPAGE values(6,5,6);
insert into EQUIPAGE values(6,8,6);
insert into EQUIPAGE values(6,15,6);
insert into EQUIPAGE values(6,18,6);

-- insertion dans REGATE (numact,numregate, forcevent)
insert into REGATE values(1,1,1);
insert into REGATE values(1,2,7);
insert into REGATE values(5,1,5);
insert into REGATE values(5,2,3);
insert into REGATE values(5,3,4);
insert into REGATE values(6,1,5);
insert into REGATE values(6,2,3);
insert into REGATE values(6,3,6);
insert into REGATE values(6,4,7);

-- insertion dans RESULTAT (numbat, numact,numregate, classement,points)
insert into RESULTAT values(2,1,1,1,4);
insert into RESULTAT values(1,1,1,2,0);
insert into RESULTAT values(2,1,2,1,4);
insert into RESULTAT values(1,1,2,2,0);
insert into RESULTAT values(4,5,1,1,2);
insert into RESULTAT values(5,5,1,2,0);
insert into RESULTAT values(4,5,2,2,0);
insert into RESULTAT values(5,5,2,1,2);
insert into RESULTAT values(4,5,3,1,2);
insert into RESULTAT values(5,5,3,2,0);
insert into RESULTAT values(4,6,1,3,0);
insert into RESULTAT values(5,6,1,2,2);
insert into RESULTAT values(6,6,1,1,4);
insert into RESULTAT values(4,6,2,2,2);
insert into RESULTAT values(5,6,2,3,0);
insert into RESULTAT values(6,6,2,1,4);
insert into RESULTAT values(4,6,3,1,4);
insert into RESULTAT values(5,6,3,3,0);
insert into RESULTAT values(6,6,3,2,2);
insert into RESULTAT values(4,6,4,2,2);
insert into RESULTAT values(5,6,4,1,4);
insert into RESULTAT values(6,6,4,3,0);
