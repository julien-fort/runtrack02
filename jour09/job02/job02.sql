-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : jeu. 24 nov. 2022 à 12:27
-- Version du serveur : 10.6.5-MariaDB
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `etudiants`
--

-- --------------------------------------------------------

--
-- Structure de la table `etage`
--

DROP TABLE IF EXISTS `etage`;
CREATE TABLE IF NOT EXISTS `etage` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `NUMERO` int(11) NOT NULL,
  `SUPERFICIE` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `etage`
--

INSERT INTO `etage` (`ID`, `NOM`, `NUMERO`, `SUPERFICIE`) VALUES
(1, 'RDC', 0, 500);

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRENOM` varchar(255) NOT NULL,
  `NOM` varchar(255) NOT NULL,
  `DATE` varchar(255) NOT NULL,
  `SEXE` varchar(25) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`ID`, `PRENOM`, `NOM`, `DATE`, `SEXE`, `EMAIL`) VALUES
(1, 'Cyril', 'Zimmermann', '1989-01-02', 'homme', 'cyril@laplateforme.io'),
(2, 'Jessica', 'Soriano', '1995-09-08', 'femme', 'jessica@laplateforme.io'),
(3, 'Roxan', 'Roumégas', '2016-09-08', 'homme', 'roxan@laplateforme.io'),
(4, 'Pascal', 'Assens', '1999-12-31', 'homme', 'pascal@laplateforme.io'),
(5, 'Terry', 'Cristinelli', '2005-02-01', 'homme', 'terry@laplateforme.io'),
(6, 'Ruben', 'Habib', '1993-05-26', 'homme', 'ruben.habib@laplateforme.io'),
(7, 'Toto', 'Dupont', '2019-11-07', 'homme', 'toto@laplateforme.io');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(255) NOT NULL,
  `ID-ETAGE` int(11) NOT NULL,
  `CAPACITE` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`ID`, `NOM`, `ID-ETAGE`, `CAPACITE`) VALUES
(1, 'LOUNGE', 1, 100),
(2, 'Studio Son', 1, 5),
(3, 'Broadcasting', 2, 50),
(4, 'Bocal Peda', 2, 4),
(5, 'Coworking', 2, 80),
(6, 'Studio Video', 2, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
