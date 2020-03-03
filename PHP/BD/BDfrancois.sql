-- code pour insérer dans phpmyadmin



INSERT INTO `proprietaire` (`numadh`, `numbat`) VALUES
(13, 1),
(17, 6);



INSERT INTO `loueur` (`nomagence`, `numbat`) VALUES
('nauticloc', 4),
('plaisance', 2),
('plaisance', 3),
('nauticloc', 5);



INSERT INTO `cotisation` (`numadh`, `anneecot`, `montant`, `paye`) VALUES
(1, 2017, 100, 'oui'),
(1, 2018, 110, 'oui'),
(1, 2019, 120, 'oui'),
(2, 2017, 100, 'oui'),
(2, 2018, 110, 'oui'),
(2, 2019, 120, 'non'),
(3, 2017, 100, 'oui'),
(3, 2018, 120, 'non'),
(4, 2018, 110, 'non'),
(4, 2019, 120, 'non'),
(5, 2018, 110, 'oui'),
(5, 2019, 120, 'oui'),
(6, 2018, 110, 'oui'),
(7, 2018, 110, 'oui'),
(8, 2017, 110, 'non'),
(8, 2018, 120, 'non'),
(9, 2018, 110, 'oui'),
(9, 2019, 120, 'non'),
(10, 2019, 120, 'oui'),
(11, 2019, 120, 'oui'),
(12, 2019, 120, 'oui'),
(13, 2019, 120, 'oui'),
(14, 2019, 120, 'oui'),
(15, 2019, 130, 'oui'),
(16, 2019, 130, 'oui'),
(17, 2019, 130, 'oui'),
(18, 2019, 130, 'oui'),
(19, 2019, 130, 'oui');


INSERT INTO `chefdebord` (`numact`, `numadh`, `numbat`) VALUES
(1, 1, 2),
(1, 11, 1),
(2, 10, 3),
(3, 13, 1),
(4, 5, 5),
(5, 1, 5),
(5, 13, 4),
(6, 1, 4),
(6, 13, 5),
(6, 2, 6);



INSERT INTO `bateau` (`numbat`, `nombat`, `taille`, `typebat`, `nbplaces`) VALUES
(1, 'le renard', 12, 'pouvreau', 6),
(2, 'imagine', 11, 'selection', 6),
(3, 'rêve des iles', 15, 'sun fast', 8),
(4, 'intermède', 12, 'sun magic', 10),
(5, 'évasion', 12, 'gypsea 402', 7),
(6, 'cauchemar des mers', 12, 'coulapic', 5);



INSERT INTO `agence` (`nomagence`, `telephone`, `fax`, `adresse`) VALUES
('plaisance', '0494952013', NULL, 'Marseille'),
('nauticloc', '0494526412', NULL, 'toulon');



INSERT INTO `adherent` (`numadh`, `nom`, `prenom`, `fonction`, `adresse`, `telephone`, `skipper`, `anneeadh`) VALUES
(1, 'aflau', 'jean', 'president', 'grenoble', '0476441250', 'oui', 2005),
(2, 'maire', 'pierre', 'vice-president', 'grenoble', '0476152360', 'non', 2005),
(3, 'boucher', 'anne', 'vice-president', 'meylan', '0476152360', 'non', 2005),
(4, 'michal', 'veronique', 'secretaire', 'grenoble', '0476451252', 'non', 2006),
(5, 'guy', 'fabien', 'tresorier', 'meylan', '0476441250', 'oui', 2006),
(6, 'rousseau', 'julien', 'membre actif', 'veurey', '0476531256', 'non', 2006),
(7, 'frantz', 'paul', 'membre actif', 'st-égrève', '0476531278', 'non', 2006),
(8, 'colin', 'serge', 'membre actif', 'st-ismier', '0476531237', 'non', 2006),
(9, 'boulle', 'yves', 'membre actif', 'meylan', '0476531586', 'non', 2006),
(10, 'rondet', 'audrey', 'membre actif', 'grenoble', '0476527130', 'oui', 2007),
(11, 'garnier', 'christophe', 'autre', 'échirolles', '0476852130', 'non', 2007),
(12, 'bar', 'thierry', 'autre', 'st-égrève', '0476535678', 'non', 2007),
(13, 'merlu', 'christian', 'autre', 'veurey', '0476371852', 'oui', 2007),
(14, 'crevette', 'sylvie', 'autre', 'st-ismier', '0476458293', 'non', 2007),
(15, 'morue', 'dominique', 'autre', 'grenoble', '0476349725', 'non', 2007),
(16, 'saumon', 'claude', 'autre', 'grenoble', '0476482497', 'non', 2007),
(17, 'limande', 'thierry', 'autre', 'voiron', '0476165874', 'non', 2007),
(18, 'turbot', 'pascale', 'autre', 'vif', '0476462597', 'non', 2007),
(19, 'crabe', 'sylvie', 'membre actif', 'st-ismier', '0476452843', 'non', 2007);



INSERT INTO `activite` (`numact`, `typeact`, `depart`, `arrivee`, `datedebut`, `datefin`) VALUES
(1, 'rallye', 'Toulon', 'Toulon', '2018-06-08', '2018-06-10'),
(2, 'sortie', 'Hyeres', 'Hyeres', '2018-06-08', '2018-06-08'),
(3, 'sortie', 'Hyeres', 'Hyeres', '2018-08-08', '2018-08-10'),
(4, 'sortie', 'Hyeres', 'Hyeres', '2018-08-09', '2018-08-13'),
(5, 'rallye', 'Hyeres', 'Hyeres', '2018-08-16', '2018-08-16'),
(6, 'rallye', 'Toulon', 'Toulon', '2018-09-02', '2018-09-16'),
(7, 'sortie', 'Toulon', 'Toulon', '2018-09-14', '2018-09-14'),
(8, 'rallye', 'Toulon', 'Toulon', '2018-10-14', '2018-10-15');

-- insertion dans equipage
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES (1,2,2);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(1,3,2);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(1,4,2);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(1,5,2);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(1,6,1);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(1,7,1);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(1,8,1);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(1,9,1);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(2,12,3);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(2,13,3);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES (2,14,3);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(2,15,3);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(2,16,3);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(2,17,3);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(2,18,3);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(3,2,1);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(3,12,1);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(3,14,1);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(3,8,1);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(3,6,1);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES (4,3,5);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(4,4,5);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(4,7,5);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(4,9,5);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(4,10,5);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(4,11,5);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(5,2,5);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(5,3,5);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(5,4,5);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(5,5,5);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES (5,6,5);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(5,7,5);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(5,8,4);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(5,9,4);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(5,10,4);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(5,11,4);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(5,12,4);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(5,14,4);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(5,15,4);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(6,3,4);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES (6,14,4);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(6,6,4);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(6,11,4);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(6,10,4);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(6,16,4);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(6,9,4);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(6,4,5);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(6,7,5);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(6,12,5);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(6,17,5);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(6,19,5);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(6,5,6);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(6,8,6);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(6,15,6);
INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES(6,18,6);


-- insertion dans regate
INSERT INTO `regate` (`numact`, `numregate`, `forcevent`) VALUES (1,1,1);
INSERT INTO `regate` (`numact`, `numregate`, `forcevent`) VALUES (1,2,7);
INSERT INTO `regate` (`numact`, `numregate`, `forcevent`) VALUES (5,1,5);
INSERT INTO `regate` (`numact`, `numregate`, `forcevent`) VALUES (5,2,3);
INSERT INTO `regate` (`numact`, `numregate`, `forcevent`) VALUES (5,3,4);
INSERT INTO `regate` (`numact`, `numregate`, `forcevent`) VALUES (6,1,5);
INSERT INTO `regate` (`numact`, `numregate`, `forcevent`) VALUES (6,2,3);
INSERT INTO `regate` (`numact`, `numregate`, `forcevent`) VALUES (6,3,6);
INSERT INTO `regate` (`numact`, `numregate`, `forcevent`) VALUES (6,4,7);

-- insertion dans resultat
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES (2,1,1,1,4);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES(1,1,1,2,0);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES(2,1,2,1,4);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES (1,1,2,2,0);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES (4,5,1,1,2);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES (5,5,1,2,0);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES (4,5,2,2,0);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES (5,5,2,1,2);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES (4,5,3,1,2);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES (5,5,3,2,0);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES (4,6,1,3,0);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES(5,6,1,2,2);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES(6,6,1,1,4);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES (4,6,2,2,2);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES (5,6,2,3,0);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES (6,6,2,1,4);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES (4,6,3,1,4);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES (5,6,3,3,0);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES (6,6,3,2,2);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES (4,6,4,2,2);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES (5,6,4,1,4);
INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES (6,6,4,3,0);
