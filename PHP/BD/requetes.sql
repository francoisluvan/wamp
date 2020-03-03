
Question 1:
SELECT adherent.nom, adherent.prenom
FROM adherent, cotisation
WHERE paye='oui' AND anneecot='2019';


Question 2:
SELECT adherent.nom FROM adherent, chefdebord
WHERE skipper='oui' AND not exists (select chefdebord.numadh from chefdebord);

Question 3:
SELECT adherent.nom,avg(cotisation.montant) FROM adherent, cotisation
GROUP BY adherent.nom;

Question 4:
SELECT adherent.nom,cotisation.montant FROM adherent, cotisation
WHERE paye='oui' AND anneecot='2019'
and cotisation.montant=(select min(cotisation.montant)
						from cotisation where anneecot='2019')
						and adherent.numadh=cotisation.numadh;

Question 11:
						SELECT adherent.nom, resultat.classement
						FROM adherent, chefdebord, resultat
						WHERE classement='1' AND resultat.numbat=chefdebord.numbat
						AND adherent.numadh=chefdebord.numadh
						;
