-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 16 jan. 2020 à 08:16
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `exercice1`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

DROP TABLE IF EXISTS `activite`;
CREATE TABLE IF NOT EXISTS `activite` (
  `numact` int(4) NOT NULL,
  `typeact` varchar(6) NOT NULL,
  `depart` varchar(10) NOT NULL,
  `arrivee` varchar(10) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`numact`, `typeact`, `depart`, `arrivee`, `datedebut`, `datefin`) VALUES
(1, 'rallye', 'Toulon', 'Toulon', '2018-06-08', '2018-06-10'),
(2, 'sortie', 'Hyeres', 'Hyeres', '2018-06-08', '2018-06-08'),
(3, 'sortie', 'Hyeres', 'Hyeres', '2018-08-08', '2018-08-10'),
(4, 'sortie', 'Hyeres', 'Hyeres', '2018-08-09', '2018-08-13'),
(5, 'rallye', 'Hyeres', 'Hyeres', '2018-08-16', '2018-08-16'),
(6, 'rallye', 'Toulon', 'Toulon', '2018-09-02', '2018-09-16'),
(7, 'sortie', 'Toulon', 'Toulon', '2018-09-14', '2018-09-14'),
(8, 'rallye', 'Toulon', 'Toulon', '2018-10-14', '2018-10-15');

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

DROP TABLE IF EXISTS `adherent`;
CREATE TABLE IF NOT EXISTS `adherent` (
  `numadh` int(4) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `fonction` varchar(15) NOT NULL,
  `adresse` varchar(40) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `skipper` char(3) NOT NULL,
  `anneeadh` int(4) NOT NULL,
  PRIMARY KEY (`numadh`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adherent`
--

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

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

DROP TABLE IF EXISTS `agence`;
CREATE TABLE IF NOT EXISTS `agence` (
  `nomagence` varchar(20) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `fax` varchar(10) DEFAULT NULL,
  `adresse` varchar(40) NOT NULL,
  PRIMARY KEY (`nomagence`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `agence`
--

INSERT INTO `agence` (`nomagence`, `telephone`, `fax`, `adresse`) VALUES
('plaisance', '0494952013', NULL, 'Marseille'),
('nauticloc', '0494526412', NULL, 'toulon');

-- --------------------------------------------------------

--
-- Structure de la table `bateau`
--

DROP TABLE IF EXISTS `bateau`;
CREATE TABLE IF NOT EXISTS `bateau` (
  `numbat` int(4) NOT NULL,
  `nombat` varchar(20) NOT NULL,
  `taille` int(4) NOT NULL,
  `typebat` varchar(10) NOT NULL,
  `nbplaces` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bateau`
--

INSERT INTO `bateau` (`numbat`, `nombat`, `taille`, `typebat`, `nbplaces`) VALUES
(1, 'le renard', 12, 'pouvreau', 6),
(2, 'imagine', 11, 'selection', 6),
(3, 'rêve des iles', 15, 'sun fast', 8),
(4, 'intermède', 12, 'sun magic', 10),
(5, 'évasion', 12, 'gypsea 402', 7),
(6, 'cauchemar des mers', 12, 'coulapic', 5);

-- --------------------------------------------------------

--
-- Structure de la table `chefdebord`
--

DROP TABLE IF EXISTS `chefdebord`;
CREATE TABLE IF NOT EXISTS `chefdebord` (
  `numact` int(4) NOT NULL,
  `numadh` int(4) NOT NULL,
  `numbat` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chefdebord`
--

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

-- --------------------------------------------------------

--
-- Structure de la table `cotisation`
--

DROP TABLE IF EXISTS `cotisation`;
CREATE TABLE IF NOT EXISTS `cotisation` (
  `numadh` int(4) NOT NULL,
  `anneecot` int(4) NOT NULL,
  `montant` double NOT NULL,
  `paye` char(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cotisation`
--

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

-- --------------------------------------------------------

--
-- Structure de la table `equipage`
--

DROP TABLE IF EXISTS `equipage`;
CREATE TABLE IF NOT EXISTS `equipage` (
  `numact` int(4) NOT NULL,
  `numadh` int(4) NOT NULL,
  `numbat` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `equipage`
--

INSERT INTO `equipage` (`numact`, `numadh`, `numbat`) VALUES
(1, 2, 2),
(1, 3, 2),
(1, 4, 2),
(1, 5, 2),
(1, 6, 1),
(1, 7, 1),
(1, 8, 1),
(1, 9, 1),
(2, 12, 3),
(2, 13, 3),
(2, 14, 3),
(2, 15, 3),
(2, 16, 3),
(2, 17, 3),
(2, 18, 3),
(3, 2, 1),
(3, 12, 1),
(3, 14, 1),
(3, 8, 1),
(3, 6, 1),
(4, 3, 5),
(4, 4, 5),
(4, 7, 5),
(4, 9, 5),
(4, 10, 5),
(4, 11, 5),
(5, 2, 5),
(5, 3, 5),
(5, 4, 5),
(5, 5, 5),
(5, 6, 5),
(5, 7, 5),
(5, 8, 4),
(5, 9, 4),
(5, 10, 4),
(5, 11, 4),
(5, 12, 4),
(5, 14, 4),
(5, 15, 4),
(6, 3, 4),
(6, 14, 4),
(6, 6, 4),
(6, 11, 4),
(6, 10, 4),
(6, 16, 4),
(6, 9, 4),
(6, 4, 5),
(6, 7, 5),
(6, 12, 5),
(6, 17, 5),
(6, 19, 5),
(6, 5, 6),
(6, 8, 6),
(6, 15, 6),
(6, 18, 6);

-- --------------------------------------------------------

--
-- Structure de la table `loueur`
--

DROP TABLE IF EXISTS `loueur`;
CREATE TABLE IF NOT EXISTS `loueur` (
  `nomagence` varchar(10) NOT NULL,
  `numbat` int(4) NOT NULL,
  PRIMARY KEY (`numbat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `loueur`
--

INSERT INTO `loueur` (`nomagence`, `numbat`) VALUES
('nauticloc', 4),
('plaisance', 2),
('plaisance', 3),
('nauticloc', 5);

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire`
--

DROP TABLE IF EXISTS `proprietaire`;
CREATE TABLE IF NOT EXISTS `proprietaire` (
  `numadh` int(4) NOT NULL,
  `numbat` int(4) NOT NULL,
  PRIMARY KEY (`numadh`),
  UNIQUE KEY `numbat` (`numbat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `proprietaire`
--

INSERT INTO `proprietaire` (`numadh`, `numbat`) VALUES
(13, 1),
(17, 6);

-- --------------------------------------------------------

--
-- Structure de la table `regate`
--

DROP TABLE IF EXISTS `regate`;
CREATE TABLE IF NOT EXISTS `regate` (
  `numact` int(4) NOT NULL,
  `numregate` int(2) NOT NULL,
  `forcevent` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `regate`
--

INSERT INTO `regate` (`numact`, `numregate`, `forcevent`) VALUES
(1, 1, 1),
(1, 2, 7),
(5, 1, 5),
(5, 2, 3),
(5, 3, 4),
(6, 1, 5),
(6, 2, 3),
(6, 3, 6),
(6, 4, 7);

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

DROP TABLE IF EXISTS `resultat`;
CREATE TABLE IF NOT EXISTS `resultat` (
  `numbat` int(4) NOT NULL,
  `numact` int(4) NOT NULL,
  `numregate` int(2) NOT NULL,
  `classement` int(2) NOT NULL,
  `points` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `resultat`
--

INSERT INTO `resultat` (`numbat`, `numact`, `numregate`, `classement`, `points`) VALUES
(2, 1, 1, 1, 4),
(1, 1, 1, 2, 0),
(2, 1, 2, 1, 4),
(1, 1, 2, 2, 0),
(4, 5, 1, 1, 2),
(5, 5, 1, 2, 0),
(4, 5, 2, 2, 0),
(5, 5, 2, 1, 2),
(4, 5, 3, 1, 2),
(5, 5, 3, 2, 0),
(4, 6, 1, 3, 0),
(5, 6, 1, 2, 2),
(6, 6, 1, 1, 4),
(4, 6, 2, 2, 2),
(5, 6, 2, 3, 0),
(6, 6, 2, 1, 4),
(4, 6, 3, 1, 4),
(5, 6, 3, 3, 0),
(6, 6, 3, 2, 2),
(4, 6, 4, 2, 2),
(5, 6, 4, 1, 4),
(6, 6, 4, 3, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
