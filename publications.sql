-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 20 nov. 2023 à 22:54
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `publications`
--

-- --------------------------------------------------------

--
-- Structure de la table `ass`
--

DROP TABLE IF EXISTS `ass`;
CREATE TABLE IF NOT EXISTS `ass` (
  `IdAss` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Postnom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Prenom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Tel` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Sexe` enum('M','F') CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Article` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Pdf` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `FKIdProf` int DEFAULT NULL,
  `FKIdDep` int DEFAULT NULL,
  PRIMARY KEY (`IdAss`),
  KEY `FKIdProf` (`FKIdProf`),
  KEY `FKIdDep` (`FKIdDep`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `ass`
--

INSERT INTO `ass` (`IdAss`, `Nom`, `Postnom`, `Prenom`, `Email`, `Tel`, `Sexe`, `Article`, `Date`, `Pdf`, `FKIdProf`, `FKIdDep`) VALUES
(1, 'j2ejej', 'emwm', '2em2m', 'panzutania@gmai.com', '32323424', 'M', 'acarcae', '2023-11-21', 'METHODE D\'ANALYSE INFORMATIQUE.pdf', 2, 2),
(2, 'patrick', 'ere', 'ersfr', 'pkaskazadi360@gmail.com', '45335', 'M', 'efewf', '2023-11-21', 'METHODE D\'ANALYSE INFORMATIQUE.pdf', 2, 2),
(3, 'patrick', 'ere', 'ersfr', 'pkaskazadi360@gmail.com', '45335', 'M', 'efewf', '2023-11-21', 'METHODE D\'ANALYSE INFORMATIQUE.pdf', 2, 2),
(4, 'patrick', 'ere', 'ersfr', 'pkaskazadi360@gmail.com', '45335', 'M', 'efewf', '2023-11-21', 'METHODE D\'ANALYSE INFORMATIQUE.pdf', 2, 2),
(5, 'patrick', 'ere', 'ersfr', 'pkaskazadi360@gmail.com', '45335', 'M', 'efewf', '2023-11-21', 'METHODE D\'ANALYSE INFORMATIQUE.pdf', 2, 2),
(6, 'rcar33r', 'rtrr', 'jrjk', 'rrkrk@gkk.com', '4343', 'M', 'ccrcr', '2023-11-29', 'I4-BdD-v2.pdf', 2, 2),
(7, 'rcar33r', 'rtrr', 'jrjk', 'rrkrk@gkk.com', '4343', 'M', 'ccrcr', '2023-11-29', 'I4-BdD-v2.pdf', 2, 2),
(8, 'rcar33r', 'rtrr', 'jrjk', 'rrkrk@gkk.com', '4343', 'M', 'ccrcr', '2023-11-29', 'I4-BdD-v2.pdf', 2, 2);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `assistant`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `assistant`;
CREATE TABLE IF NOT EXISTS `assistant` (
`Ass_Id` int
,`Ass_Nom` varchar(25)
,`Ass_Postnom` varchar(25)
,`Ass_Prenom` varchar(25)
,`Ass_Sexe` enum('M','F')
,`Ass_Article` varchar(255)
,`Ass_Date` date
,`Ass_Pdf` varchar(255)
,`Professeur_Nom` varchar(25)
,`Departement_Nom` varchar(25)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `chef`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `chef`;
CREATE TABLE IF NOT EXISTS `chef` (
`CT_Id` int
,`CT_Nom` varchar(25)
,`CT_Postnom` varchar(25)
,`CT_Prenom` varchar(25)
,`CT_Sexe` enum('M','F')
,`CT_Article` varchar(255)
,`CT_Date` date
,`CT_Pdf` varchar(255)
,`Professeur_Nom` varchar(25)
,`Departement_Nom` varchar(25)
);

-- --------------------------------------------------------

--
-- Structure de la table `connecter`
--

DROP TABLE IF EXISTS `connecter`;
CREATE TABLE IF NOT EXISTS `connecter` (
  `IdCon` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `gmail` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`IdCon`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `connecter`
--

INSERT INTO `connecter` (`IdCon`, `nom`, `gmail`, `password`) VALUES
(1, 'Hangi', 'sheriaelie@gmai.com', '1999'),
(2, 'Shaina', 'shaina@gmai.com', '2000'),
(3, 'patrick', 'pkaskazadi360@gmail.com', '1234'),
(4, 'bite', 'bite@gmail.com', '1234'),
(7, 'Ronaldo', 'ronaldo@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `ct`
--

DROP TABLE IF EXISTS `ct`;
CREATE TABLE IF NOT EXISTS `ct` (
  `IdCt` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Postnom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Prenom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Tel` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Sexe` enum('M','F') CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Article` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Pdf` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `FKIdProf` int DEFAULT NULL,
  `FKIdDep` int DEFAULT NULL,
  PRIMARY KEY (`IdCt`),
  KEY `FKIdProf` (`FKIdProf`),
  KEY `FKIdDep` (`FKIdDep`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `ct`
--

INSERT INTO `ct` (`IdCt`, `Nom`, `Postnom`, `Prenom`, `Email`, `Tel`, `Sexe`, `Article`, `Date`, `Pdf`, `FKIdProf`, `FKIdDep`) VALUES
(1, 'AMANI', 'HANGI', 'Henoch', 'amanihangi23@gmail.com', '+243830594057', 'M', 'Nos efforts payeront.', '2023-10-05', 'banque de donnees.pdf', 1, 1),
(2, 'qkkdk', 'dmsd,sd,', 'sdmsdm', 'sdmdsms@gmail.com', '243819559461', 'M', 'wddwd', '2023-12-05', 'Déontologie.pdf', 2, 2),
(3, 'patrick kasamda kazadi', 'wqw', 'qqw', 'pkaskazadi359@gmail.com', '2132', 'F', 'dwaxe', '2023-11-22', 'rkm finale.pdf', 2, 2),
(4, 'patrick kasamda kazadi', 'wqw', 'qqw', 'pkaskazadi359@gmail.com', '2132', 'F', 'dwaxe', '2023-11-22', 'rkm finale.pdf', 2, 2),
(5, 'jfjf', 'efce', 'efr', 'rrkrk@gkk.com', '332242', 'M', 'wfmwfmfm,', '2023-11-13', 'FFF_lettre_221209_130924.pdf', 3, 2),
(6, 'jfjf', 'efce', 'efr', 'rrkrk@gkk.com', '332242', 'M', 'wfmwfmfm,', '2023-11-13', 'FFF_lettre_221209_130924.pdf', 3, 2),
(7, 'jfjf', 'efce', 'efr', 'rrkrk@gkk.com', '332242', 'M', 'wfmwfmfm,', '2023-11-13', 'FFF_lettre_221209_130924.pdf', 3, 2),
(8, 'jfjf', 'efce', 'efr', 'rrkrk@gkk.com', '332242', 'M', 'wfmwfmfm,', '2023-11-13', 'FFF_lettre_221209_130924.pdf', 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

DROP TABLE IF EXISTS `departement`;
CREATE TABLE IF NOT EXISTS `departement` (
  `IdDep` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Description` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`IdDep`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`IdDep`, `Nom`, `Description`) VALUES
(1, 'INFORMATIQUE', 'Gestion Info & Genie Info.'),
(2, 'MATHEMATIQUE', 'Mathematicien.'),
(3, 'PHYSIQUE', 'Physiciens.');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `gmail` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `message` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id_notif` int NOT NULL AUTO_INCREMENT,
  `idCon` varchar(255) NOT NULL,
  `id_target` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL DEFAULT 'on',
  PRIMARY KEY (`id_notif`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`id_notif`, `idCon`, `id_target`, `type`, `state`) VALUES
(70, '1', '16', 'prof', 'on'),
(69, '7', '15', 'prof', 'on'),
(68, '4', '15', 'prof', 'off'),
(67, '3', '15', 'prof', 'off'),
(66, '2', '15', 'prof', 'on'),
(65, '1', '15', 'prof', 'on'),
(64, '7', '14', 'prof', 'on'),
(63, '4', '14', 'prof', 'off'),
(62, '3', '14', 'prof', 'off'),
(61, '2', '14', 'prof', 'on'),
(60, '1', '14', 'prof', 'on'),
(59, '4', '13', 'prof', 'off'),
(58, '3', '13', 'prof', 'off'),
(57, '2', '13', 'prof', 'off'),
(56, '1', '13', 'prof', 'off'),
(55, '4', '12', 'prof', 'off'),
(54, '3', '12', 'prof', 'off'),
(53, '2', '12', 'prof', 'off'),
(52, '1', '12', 'prof', 'off'),
(51, '4', '4', 'ct', 'off'),
(50, '3', '4', 'ct', 'off'),
(49, '2', '4', 'ct', 'off'),
(48, '1', '4', 'ct', 'off'),
(47, '4', '3', 'ct', 'off'),
(46, '3', '3', 'ct', 'off'),
(45, '2', '3', 'ct', 'off'),
(44, '1', '3', 'ct', 'off'),
(43, '4', '5', 'ass', 'off'),
(42, '3', '5', 'ass', 'off'),
(41, '2', '5', 'ass', 'off'),
(40, '1', '5', 'ass', 'off'),
(71, '2', '16', 'prof', 'on'),
(72, '3', '16', 'prof', 'off'),
(73, '4', '16', 'prof', 'off'),
(74, '7', '16', 'prof', 'on'),
(75, '1', '17', 'prof', 'on'),
(76, '2', '17', 'prof', 'on'),
(77, '3', '17', 'prof', 'off'),
(78, '4', '17', 'prof', 'off'),
(79, '7', '17', 'prof', 'on'),
(80, '1', '6', 'ass', 'on'),
(81, '2', '6', 'ass', 'on'),
(82, '3', '6', 'ass', 'off'),
(83, '4', '6', 'ass', 'off'),
(84, '7', '6', 'ass', 'on'),
(85, '1', '7', 'ass', 'on'),
(86, '2', '7', 'ass', 'on'),
(87, '3', '7', 'ass', 'off'),
(88, '4', '7', 'ass', 'off'),
(89, '7', '7', 'ass', 'on'),
(90, '1', '8', 'ass', 'on'),
(91, '2', '8', 'ass', 'on'),
(92, '3', '8', 'ass', 'off'),
(93, '4', '8', 'ass', 'off'),
(94, '7', '8', 'ass', 'on'),
(95, '1', '5', 'ct', 'on'),
(96, '2', '5', 'ct', 'on'),
(97, '3', '5', 'ct', 'off'),
(98, '4', '5', 'ct', 'off'),
(99, '7', '5', 'ct', 'on'),
(100, '1', '6', 'ct', 'on'),
(101, '2', '6', 'ct', 'on'),
(102, '3', '6', 'ct', 'off'),
(103, '4', '6', 'ct', 'off'),
(104, '7', '6', 'ct', 'on'),
(105, '1', '7', 'ct', 'on'),
(106, '2', '7', 'ct', 'on'),
(107, '3', '7', 'ct', 'off'),
(108, '4', '7', 'ct', 'off'),
(109, '7', '7', 'ct', 'on'),
(110, '1', '8', 'ct', 'on'),
(111, '2', '8', 'ct', 'on'),
(112, '3', '8', 'ct', 'off'),
(113, '4', '8', 'ct', 'off'),
(114, '7', '8', 'ct', 'on');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `prof`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `prof`;
CREATE TABLE IF NOT EXISTS `prof` (
`Professeur_Id` int
,`Professeur_Nom` varchar(25)
,`Professeur_Postnom` varchar(25)
,`Professeur_Prenom` varchar(25)
,`Professeur_Sexe` enum('M','F')
,`Professeur_Article` varchar(255)
,`Professeur_Date` date
,`Professeur_Pdf` varchar(255)
,`Departement_Nom` varchar(25)
);

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `IdProf` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Postnom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Prenom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Tel` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Sexe` enum('M','F') CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Article` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Pdf` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `FKIdDep` int DEFAULT NULL,
  PRIMARY KEY (`IdProf`),
  KEY `FKIdDep` (`FKIdDep`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`IdProf`, `Nom`, `Postnom`, `Prenom`, `Email`, `Tel`, `Sexe`, `Article`, `Date`, `Pdf`, `FKIdDep`) VALUES
(1, 'MASAKUNA', 'FELICIEN', 'Jordan', 'jordanmasakuna@gmail.com', '+2763849961', 'M', 'Le savoir faire.', '2023-10-04', 'Audit Info.pdf', 1),
(2, 'njj', 'njjkj', 'mkklk', 'panzutania@gmai.com', '+243819559461', 'M', 'jlljbibon biouoiohpioj', '2023-11-28', 'Déontologie.pdf', 1),
(7, 'wsnqnn', 'qnqnqn', 'qsnnqsn', 'qsnqnqsan@gmail.com', '243819559461', 'M', 'dxe3dewed3', '2023-11-21', 'rkm finale.pdf', 0),
(8, 'jllnij', 'm;m;l', ',\'l,p', 'aa@gmail.com', '+243819559461', 'M', 'wddwdxwdx', '2023-11-21', 'rkm finale.pdf', 2),
(9, 'jllnij', 'm;m;l', ',\'l,p', 'aa@gmail.com', '+243819559461', 'M', 'wddwdxwdx', '2023-11-21', 'rkm finale.pdf', 2),
(10, 'jllnij', 'm;m;l', ',\'l,p', 'aa@gmail.com', '+243819559461', 'M', 'wddwdxwdx', '2023-11-21', 'rkm finale.pdf', 2),
(11, 'jllnij', 'm;m;l', ',\'l,p', 'aa@gmail.com', '+243819559461', 'M', 'wddwdxwdx', '2023-11-21', 'rkm finale.pdf', 2),
(12, 'ew2erdfser', 'waf43', 'scer', 'rer@gmail.com', '23234', 'M', 'cserce', '2023-12-06', 'rkajos.pdf', 2),
(13, 'ew2erdfser', 'waf43', 'scer', 'rer@gmail.com', '23234', 'M', 'cserce', '2023-12-06', 'rkajos.pdf', 2),
(14, '3dkl3kl', '3emds.e3m', 'e3md,3em', '3dms3@hejej.com', '3444', 'M', 'erexcer', '2023-11-21', 'rkm finale.pdf', 2),
(15, '3dkl3kl', '3emds.e3m', 'e3md,3em', '3dms3@hejej.com', '3444', 'M', 'erexcer', '2023-11-21', 'rkm finale.pdf', 2),
(16, '3dkl3kl', '3emds.e3m', 'e3md,3em', '3dms3@hejej.com', '3444', 'M', 'erexcer', '2023-11-21', 'rkm finale.pdf', 2),
(17, '3dkl3kl', '3emds.e3m', 'e3md,3em', '3dms3@hejej.com', '3444', 'M', 'erexcer', '2023-11-21', 'rkm finale.pdf', 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `IdUtil` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `postnom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `gmail` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `fonction` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`IdUtil`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`IdUtil`, `nom`, `postnom`, `gmail`, `fonction`, `password`) VALUES
(1, 'Yongo', 'Lola', 'yongololadaniel@gmai.com', 'Etudiant', '1997'),
(2, 'Panzu', 'Tania', 'panzutania@gmai.com', 'Etudiant', '2003');

-- --------------------------------------------------------

--
-- Structure de la vue `assistant`
--
DROP TABLE IF EXISTS `assistant`;

DROP VIEW IF EXISTS `assistant`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `assistant`  AS  select `a`.`IdAss` AS `Ass_Id`,`a`.`Nom` AS `Ass_Nom`,`a`.`Postnom` AS `Ass_Postnom`,`a`.`Prenom` AS `Ass_Prenom`,`a`.`Sexe` AS `Ass_Sexe`,`a`.`Article` AS `Ass_Article`,`a`.`Date` AS `Ass_Date`,`a`.`Pdf` AS `Ass_Pdf`,`p`.`Nom` AS `Professeur_Nom`,`d`.`Nom` AS `Departement_Nom` from ((`professeur` `p` join `ass` `a`) join `departement` `d`) where ((`a`.`FKIdDep` = `d`.`IdDep`) and (`a`.`FKIdProf` = `p`.`IdProf`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `chef`
--
DROP TABLE IF EXISTS `chef`;

DROP VIEW IF EXISTS `chef`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chef`  AS  select `c`.`IdCt` AS `CT_Id`,`c`.`Nom` AS `CT_Nom`,`c`.`Postnom` AS `CT_Postnom`,`c`.`Prenom` AS `CT_Prenom`,`c`.`Sexe` AS `CT_Sexe`,`c`.`Article` AS `CT_Article`,`c`.`Date` AS `CT_Date`,`c`.`Pdf` AS `CT_Pdf`,`p`.`Nom` AS `Professeur_Nom`,`d`.`Nom` AS `Departement_Nom` from ((`professeur` `p` join `ct` `c`) join `departement` `d`) where ((`c`.`FKIdDep` = `d`.`IdDep`) and (`c`.`FKIdProf` = `p`.`IdProf`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `prof`
--
DROP TABLE IF EXISTS `prof`;

DROP VIEW IF EXISTS `prof`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `prof`  AS  select `p`.`IdProf` AS `Professeur_Id`,`p`.`Nom` AS `Professeur_Nom`,`p`.`Postnom` AS `Professeur_Postnom`,`p`.`Prenom` AS `Professeur_Prenom`,`p`.`Sexe` AS `Professeur_Sexe`,`p`.`Article` AS `Professeur_Article`,`p`.`Date` AS `Professeur_Date`,`p`.`Pdf` AS `Professeur_Pdf`,`d`.`Nom` AS `Departement_Nom` from (`professeur` `p` join `departement` `d`) where (`p`.`FKIdDep` = `d`.`IdDep`) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
