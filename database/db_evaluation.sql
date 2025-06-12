-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 06 jan. 2020 à 15:23
-- Version du serveur :  10.3.14-MariaDB
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_evaluation`
--

CREATE DATABASE IF NOT EXISTS `db_evaluation` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `Id_Admin` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_Admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`Id_Admin`, `login`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

DROP TABLE IF EXISTS `appartenir`;
CREATE TABLE IF NOT EXISTS `appartenir` (
  `Id_App` int(10) NOT NULL AUTO_INCREMENT,
  `FK_Code_CLASSE` varchar(10) CHARACTER SET latin1 NOT NULL,
  `FK_Code_user` int(10) NOT NULL,
  PRIMARY KEY (`Id_App`),
  KEY `FK_Code_CLASSE` (`FK_Code_CLASSE`),
  KEY `FK_Code_user` (`FK_Code_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `Code_CLASSE` varchar(10) NOT NULL,
  `Libelle_CLASSE` text NOT NULL,
  `FK_Code_UE` varchar(10) NOT NULL,
  PRIMARY KEY (`Code_CLASSE`),
  KEY `FK_Code_UE` (`FK_Code_UE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`Code_CLASSE`, `Libelle_CLASSE`, `FK_Code_UE`) VALUES
('ASR3', 'Administration des Systemes et Reseaux3', ''),
('GLSI3', 'Genie Logiciel et Systeme d\'Information3 ', ''),
('L1A', 'Licence1 A', ''),
('L1B', 'Licence1 B', ''),
('L1C', 'Licence1 C', ''),
('L2A', 'Licence2 A', ''),
('L2B', 'Licence2 B', ''),
('MTWI3', ' Multimedia Technologie Web et Infographie', '');

-- --------------------------------------------------------

--
-- Structure de la table `ec`
--

DROP TABLE IF EXISTS `ec`;
CREATE TABLE IF NOT EXISTS `ec` (
  `Code_EC` varchar(10) NOT NULL,
  `Libelle_EC` text NOT NULL,
  PRIMARY KEY (`Code_EC`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ec`
--

INSERT INTO `ec` (`Code_EC`, `Libelle_EC`) VALUES
('AAR_6S', 'Architectures Avancees des Reseaux'),
('AIN_6G', 'Audit Informatique'),
('AIN_6M', 'Audit Informatique'),
('AIN_6S', 'Audit Informatique'),
('ALI_3', 'Algebre Lineaire'),
('AMA_1', 'Architecture et Maintenance'),
('ANE_5G', 'Anglais Expert'),
('ANE_5M', 'Anglais Expert'),
('ANE_5S', 'Anglais Expert'),
('ANG_1', 'Anglais'),
('ANM_1', 'Analyse Mathematique'),
('ANS_4', 'Anglais Scientifique'),
('ASB_5S', 'Administration et Securite des Bases de Donnees'),
('ASR_5S', 'Administration et Securite des Reseaux'),
('ASS_5S', 'Administration et Securite des Systemes'),
('BDM_5M', 'Bases de Donnees Mobiles'),
('BDO_5G', 'Bases de Donnees Orientee Objet et NoSQL'),
('BDR_5G', 'Bases de Donnees Distribuees et Reparties'),
('CBD_3', 'Conception des Bases de Donnees'),
('CEN_6G', 'Creation d Entreprise'),
('CEN_6M', 'Creation d Entreprise'),
('CEN_6S', 'Creation d Entreprise'),
('CGE_2', 'Comptabilite Generale'),
('CIM_6M', 'Creation et Integration de Medias Numeriques'),
('CPQ_5M', 'Conduite d un Projet de Multimedia et Qualite'),
('CRY_3', 'Cryptographie'),
('CSD_2', 'Conception et Implementation des Structures de Donnees'),
('DIS_2', 'Discipline'),
('DIS_4', 'Discipline'),
('DIS_6G', 'Discipline'),
('DIS_6M', 'Discipline'),
('DIS_6S', 'Discipline'),
('DMO_6G', 'Developpement Mobile'),
('DMO_6M', 'Developpement Mobile'),
('DTI_4', 'Droit des TIC'),
('DTR_6G', 'Droit du Travail'),
('DTR_6M', 'Droit du Travail'),
('DTR_6S', 'Droit du Travail'),
('EAI_4', 'Electronique Applique a l\' informatique'),
('EAI_5S', 'Electronique Informatique'),
('EEC_2', 'Environnement Economique'),
('EEO_1', 'Expression Ecrite et Orale'),
('ELN_1', 'Electronique Numerique'),
('FOP_5S', 'Fibre Optique'),
('GDM_5M', 'Gestion des Donnees Multimedia'),
('GPI_6G', 'Gestion des Projets Informatiques'),
('GPI_6M', 'Gestion des Projets Informatiques'),
('GPI_6S', 'Gestion des Projets Informatiques'),
('IAL_1', 'Initiation a l\' algorithmique'),
('IBD_2', 'Initiation aux Bases de Donnees'),
('IBD_3', 'Implementation des Bases de Donnees'),
('IGL_5G', 'Initiation au Genie Logiciel'),
('IHM_5M', 'Interface Homme Machine pour les produits logiciels'),
('ILI_1', 'Initiation a GNU / LINUX'),
('IMM_5M', 'Introduction au Multimedia'),
('IPO_2', 'Initiation a la Programmation Objet'),
('IPW_2', 'Initiation a la Programmation Web'),
('ISI_6G', 'Integration des Systemes d Information'),
('LAC_1', 'Langage C'),
('LOU_1', 'Suites IC3 de Microsoft'),
('MDI_1', 'Mathematiques Discretes'),
('MER_3', 'Merise'),
('MI2_4', 'Maintenance Informatique Niveau II'),
('MI2_5S', 'Maintenance Niveau II'),
('MSQ_5G', 'Administration des Bases de Donnees Libre(MySQL, Postgree)'),
('MSQ_5M', 'Administration des Bases de Donnees Libre(MySQL, Postgree)'),
('MSR_6S', 'Modele de Structuration des Reseaux'),
('ORA_5G', 'Administration des Bases de Donnees Oracle'),
('PAO_6M', 'Publication Assistee par Ordinateur, Outils'),
('PDW_5M', 'Plateforme et Outils de Developpement Web'),
('PFI_6G', 'Projet Final'),
('PFI_6M', 'Projet Final'),
('PFI_6S', 'Projet Final'),
('POD_5G', 'Plateforme et Outils de Developpement'),
('POO_3', 'Programmation Orientee Objet'),
('PRO_2', 'Projet Professionnel'),
('PRO_3', 'Probabilites et Statistiques'),
('PSQ_2', 'Pratique de SQL'),
('PW2_3', 'Programmation Web II'),
('RDS_4', 'Redaction Scientifique'),
('RMO_5S', 'Reseaux Mobiles'),
('ROO_4', 'Recherche Operationnelle et Optimisation'),
('RT1_2', 'Reseaux et Technologie CISCO CCNA1'),
('RT2_2', 'Reseaux et Technologie CISCO CCNA2'),
('SAD_5G', 'Systeme d\' Information d\' Aide a la Decision'),
('SAD_5M', 'Systeme d\' Information d\' Aide a la Decision'),
('SBD_5G', 'Securite des Bases de Donnees'),
('SBD_5M', 'Securite des Bases de Donnees'),
('SCI_3', 'Securite Informatique'),
('SEA_5S', 'Systeme d Exploitation Avance'),
('SIG_5S', 'Systeme d Information Geographique'),
('SPO_2', 'Sport'),
('SPO_4', 'Discipline'),
('SPO_6G', 'Sport'),
('SPO_6M', 'Sport'),
('SPO_6S', 'Sport'),
('SQL_5G', 'Administration des Bases de Donnees SQL-Server'),
('SQL_5M', 'Administration des Bases de Donnees SQL-Server'),
('STA_4', 'Stage'),
('TEC_5G', 'Techniques de Communication'),
('TEC_5M', 'Techniques de Communication'),
('TEC_5S', 'Techniques de Communication'),
('TGR_4', 'Theorie des Graphes'),
('TME_4', 'TIC et Management de l Entreprise'),
('TMU_6G', 'Technique Multimedia'),
('UML_3', 'UML');

-- --------------------------------------------------------

--
-- Structure de la table `enseigner`
--

DROP TABLE IF EXISTS `enseigner`;
CREATE TABLE IF NOT EXISTS `enseigner` (
  `Id_Eng` int(10) NOT NULL AUTO_INCREMENT,
  `FK_Code_EC` varchar(10) CHARACTER SET latin1 NOT NULL,
  `FK_Code_UE` varchar(10) CHARACTER SET latin1 NOT NULL,
  `FK_Code_PROF` varchar(10) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`Id_Eng`),
  KEY `FK_Code_EC` (`FK_Code_EC`),
  KEY `FK_Code_UE` (`FK_Code_UE`),
  KEY `FK_Code_PROF` (`FK_Code_PROF`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enseigner`
--

INSERT INTO `enseigner` (`Id_Eng`, `FK_Code_EC`, `FK_Code_UE`, `FK_Code_PROF`) VALUES
(1, 'UML_3', 'MSI_S3', 'KE_L2'),
(2, 'MER_3', 'MSI_S3', 'DA_L2'),
(3, 'CBD_3', 'CUB_S3', 'TID_L2'),
(12, 'IBD_3', 'CUB_S3', 'GBO_L2'),
(13, 'PRO_3', 'OMA_S3', 'AGB_L2'),
(14, 'ALI_3', 'OMA_S3', 'MI_L2'),
(15, 'CRY_3', 'SEC_S3', 'MEN_L2'),
(16, 'SCI_3', 'SEC_S3', 'TET_L2'),
(17, 'PW2_3', 'PAV_S3', 'AM_L2'),
(18, 'POO_3', 'PAV_S3', 'AK_L2'),
(19, 'RDS_4', 'CEX_S4', 'AWU_L2'),
(20, 'IAL_1', 'APR_S1', 'AGB_L1'),
(21, 'LAC_1', 'APR_S1', 'GBO_L1'),
(22, 'AMA_1', 'ARC_S1', 'MOD_L1'),
(23, 'ELN_1', 'ARC_S1', 'BOK_L1'),
(24, 'MDI_1', 'BMA_S1', 'LAK_L1'),
(25, 'ANM_1', 'BMA_S1', 'AKP_L1'),
(26, 'LOU_1', 'PMO_S1', 'KIV_L1'),
(27, 'ANG_1', 'COM_S1', 'AKU_L1'),
(28, 'EEO_1', 'COM_S1', 'AWU_L1'),
(29, 'EEO_1', 'COM_S1', 'HAN_L1'),
(30, 'IPW_2', 'CAP_S2', 'AME_L1'),
(31, 'IPW_2', 'CAP_S2', 'GBO_L1'),
(32, 'IPO_2', 'CAP_S2', 'AME_L1'),
(33, 'CSD_2', 'CAP_S2', 'GBO_L1'),
(34, 'RT1_2', 'FRE_S2', 'ATT_L1'),
(35, 'RT1_2', 'FRE_S2', 'DAV_L1'),
(36, 'RT2_2', 'FRE_S2', 'SEB_L1'),
(37, 'RT2_2', 'FRE_S2', 'DAV_L1'),
(38, 'IBD_2', 'BDO_S2', 'GBO_L1'),
(39, 'PSQ_2', 'BDO_S2', 'HOU_L1'),
(40, 'EEC_2', 'EGO_S2', 'NU_L1'),
(41, 'CGE_2', 'EGO_S2', 'AMY_L1'),
(42, 'CGE_2', 'EGO_S2', 'DAV_L1'),
(43, 'POO_3', 'PAV_S3', 'AME_L2'),
(44, 'ANS_4', 'CEX_S4', 'LAR_L2'),
(45, 'LAC_1', 'APR_S1', 'GNO_L1'),
(46, 'AMA_1', 'ARC_S1', 'TEP_L1'),
(47, 'ANM_1', 'BMA_S1', 'MIH_L1'),
(48, 'ILI_1', 'PMO_S1', 'HOUM_L1'),
(49, 'ANG_1', 'COM_S1', 'TOM_L1'),
(50, 'ROO_4', 'OMM_S4', 'AGB_L2'),
(51, 'IBD_3', 'CUB_S3', 'KE_L2'),
(52, 'MDI_1', 'BMA_S1', 'MEN_L1'),
(53, 'CGE_2', 'EGO_S2', 'DAV_L1');

-- --------------------------------------------------------

--
-- Structure de la table `evaluer`
--

DROP TABLE IF EXISTS `evaluer`;
CREATE TABLE IF NOT EXISTS `evaluer` (
  `Id_Ev` int(10) NOT NULL AUTO_INCREMENT,
  `Nom_Prof` varchar(50) NOT NULL,
  `Prenom_Prof` varchar(50) NOT NULL,
  `Classe` varchar(10) NOT NULL,
  `Mention1` varchar(15) NOT NULL,
  `Mention2` varchar(15) NOT NULL,
  `Mention3` varchar(15) NOT NULL,
  `Mention4` varchar(15) NOT NULL,
  `Mention5` varchar(15) NOT NULL,
  `Mention6` varchar(15) NOT NULL,
  `Mention7` varchar(15) NOT NULL,
  `Mention8` varchar(15) NOT NULL,
  `Mention9` varchar(15) NOT NULL,
  `Mention10` varchar(15) NOT NULL,
  `Mention11` varchar(15) NOT NULL,
  `Mention12` varchar(15) NOT NULL,
  `Mention13` varchar(15) NOT NULL,
  `Mention14` varchar(15) NOT NULL,
  `Mention15` varchar(15) NOT NULL,
  `Mention16` varchar(15) NOT NULL,
  `Mention17` varchar(15) NOT NULL,
  `Mention18` varchar(15) NOT NULL,
  `Mention19` varchar(15) NOT NULL,
  `Mention20` varchar(15) NOT NULL,
  `Suggestion1` text NOT NULL,
  `Mention21` varchar(15) NOT NULL,
  `Mention22` varchar(15) NOT NULL,
  `Mention23` varchar(15) NOT NULL,
  `Mention24` varchar(15) NOT NULL,
  `Mention25` varchar(15) NOT NULL,
  `Mention26` varchar(15) NOT NULL,
  `Suggestion2` text NOT NULL,
  PRIMARY KEY (`Id_Ev`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `evaluer`
--

INSERT INTO `evaluer` (`Id_Ev`, `Nom_Prof`, `Prenom_Prof`, `Mention1`, `Mention2`, `Mention3`, `Mention4`, `Mention5`, `Mention6`, `Mention7`, `Mention8`, `Mention9`, `Mention10`, `Mention11`, `Mention12`, `Mention13`, `Mention14`, `Mention15`, `Mention16`, `Mention17`, `Mention18`, `Mention19`, `Mention20`, `Suggestion1`, `Mention21`, `Mention22`, `Mention23`, `Mention24`, `Mention25`, `Mention26`, `Suggestion2`) VALUES
(6, 'AGBETI', 'Kodjo', 'Tres Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'jdjjdsjjsdjds', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', '666666'),
(7, 'AGBETI', 'Kodjo', 'Tres Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'jdjjdsjjsdjds', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', '666666'),
(8, 'AGBETI', 'Kodjo', 'Tres Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'jdjjdsjjsdjds', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', 'TrÃ¨s Satisfait', '666666'),
(12, 'GBODUI', 'Joseph-Roland', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'bof', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'Tres Satisfait', 'tkt');

-- --------------------------------------------------------

--
-- Structure de la table `intervenir`
--

DROP TABLE IF EXISTS `intervenir`;
CREATE TABLE IF NOT EXISTS `intervenir` (
  `Id_Int` int(10) NOT NULL AUTO_INCREMENT,
  `FK_Code_CLASSE` varchar(10) NOT NULL,
  `FK_Code_PROF` varchar(10) NOT NULL,
  `FK_Code_UE` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_Int`),
  KEY `FK_Code_PROF` (`FK_Code_PROF`) USING BTREE,
  KEY `FK_Code_CLASSE` (`FK_Code_CLASSE`),
  KEY `FK_Code_UE` (`FK_Code_UE`)
) ENGINE=InnoDB AUTO_INCREMENT=195 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `intervenir`
--

INSERT INTO `intervenir` (`Id_Int`, `FK_Code_CLASSE`, `FK_Code_PROF`, `FK_Code_UE`) VALUES
(105, 'L1A', 'AGB_L1', 'APR_S1'),
(106, 'L1A', 'GBO_L1', 'APR_S1'),
(107, 'L1A', 'MOD_L1', 'ARC_S1'),
(108, 'L1A', 'BOK_L1', 'ARC_S1'),
(109, 'L1A', 'MIH_L1', 'BMA_S1'),
(111, 'L1A', 'KIV_L1', 'PMO_S1'),
(112, 'L1A', 'TAP_L1', 'PMO_S1'),
(113, 'L1A', 'HOUM_L1', 'PMO_S1'),
(114, 'L1A', 'TOM_L1', 'COM_S1'),
(115, 'L1A', 'HAN_L1', 'COM_S1'),
(116, 'L1A', 'GBO_L1', 'CAP_S2'),
(117, 'L1A', 'AME_L1', 'CAP_S2'),
(118, 'L1A', 'GBO_L1', 'CAP_S2'),
(119, 'L1A', 'ATT_L1', 'FRE_S2'),
(120, 'L1A', 'DAV_L1', 'FRE_S2'),
(121, 'L1A', 'GBO_L1', 'BDO_S2'),
(122, 'L1A', 'AME_L1', 'BDO_S2'),
(123, 'L1A', 'NU_L1', 'EGO_S2'),
(124, 'L1A', 'AMY_L1', 'EGO_S2'),
(125, 'L1B', 'AGB_L1', 'APR_S1'),
(126, 'L1B', 'AME_L1', 'APR_S1'),
(127, 'L1B', 'TEP_L1', 'ARC_S1'),
(128, 'L1B', 'BOK_L1', 'ARC_S1'),
(129, 'L1B', 'LAK_L1', 'BMA_S1'),
(130, 'L1B', 'MIH_L1', 'BMA_S1'),
(131, 'L1B', 'KIV_L1', 'PMO_S1'),
(132, 'L1B', 'TAP_L1', 'PMO_S1'),
(133, 'L1B', 'HOUM_L1', 'PMO_S1'),
(134, 'L1B', 'TOM_L1', 'COM_S1'),
(135, 'L1B', 'TOM_L1', 'COM_S1'),
(136, 'L1B', 'AME_L1', 'CAP_S2'),
(137, 'L1B', 'AME_L1', 'CAP_S2'),
(138, 'L1B', 'AB_L1', 'CAP_S2'),
(139, 'L1B', 'ATT_L1', 'FRE_S2'),
(140, 'L1B', 'SEB_L1', 'FRE_S2'),
(141, 'L1B', 'GBO_L1', 'BDO_S2'),
(142, 'L1B', 'HOU_L1', 'BDO_S2'),
(143, 'L1B', 'NU_L1', 'EGO_S2'),
(144, 'L1B', 'DAV_L1', 'EGO_S2'),
(145, 'L1B', 'HAN_L1', 'COM_S1'),
(146, 'L1C', 'AGB_L1', 'APR_S1'),
(147, 'L1C', 'GNO_L1', 'APR_S1'),
(148, 'L1C', 'MOD_L1', 'ARC_S1'),
(149, 'L1C', 'BOK_L1', 'ARC_S1'),
(150, 'L1C', 'AKP_L1', 'BMA_S1'),
(151, 'L1C', 'LAK_L1', 'BMA_S1'),
(152, 'L1C', 'KIV_L1', 'PMO_S1'),
(153, 'L1C', 'TAP_L1', 'PMO_S1'),
(154, 'L1C', 'AWU_L1', 'COM_S1'),
(155, 'L1C', 'AKU_L1', 'COM_S1'),
(156, 'L1C', 'AME_L1', 'CAP_S2'),
(157, 'L1C', 'AME_L1', 'CAP_S2'),
(158, 'L1C', 'GBO_L1', 'CAP_S2'),
(159, 'L1C', 'ATT_L1', 'FRE_S2'),
(160, 'L1C', 'SEB_L1', 'FRE_S2'),
(161, 'L1C', 'GBO_L1', 'BDO_S2'),
(162, 'L1C', 'HOU_L1', 'BDO_S2'),
(163, 'L1C', 'NU_L1', 'EGO_S2'),
(164, 'L1C', 'AMY_L1', 'EGO_S2'),
(165, 'L2A', 'ADO_L2', 'MSI_S3'),
(166, 'L2A', 'DA_L2', 'MSI_S3'),
(167, 'L2A', 'GBO_L2', 'MSI_S3'),
(168, 'L2A', 'KE_L2', 'MSI_S3'),
(169, 'L2A', 'TID_L2', 'CUB_S3'),
(170, 'L2A', 'GBO_L2', 'CUB_S3'),
(171, 'L2A', 'AGB_L2', 'OMA_S3'),
(172, 'L2A', 'VOV_L2', 'OMA_S3'),
(173, 'L2A', 'MI_L2', 'OMA_S3'),
(174, 'L2A', 'MEN_L2', 'SEC_S3'),
(175, 'L1A', 'MEN_L1', 'BMA_S1'),
(176, 'L2A', 'TET_L2', 'SEC_S3'),
(177, 'L2A', 'AME_L2', 'PAV_S3'),
(178, 'L2A', 'AK_L2', 'PAV_S3'),
(179, 'L2A', 'AWU_L2', 'CEX_S4'),
(180, 'L2A', 'LAR_L2', 'CEX_S4'),
(181, 'L2A', 'AGB_L2', 'OMM_S4'),
(182, 'L2B', 'ADO_L2', 'MSI_S3'),
(183, 'L2B', 'AZO_L2', 'MSI_S3'),
(184, 'L2B', 'GBO_L2', 'MSI_S3'),
(185, 'L2B', 'AME_L2', 'MSI_S3'),
(186, 'L2B', 'TCH_L2', 'CUB_S3'),
(187, 'L2B', 'KOE_L2', 'CUB_S3'),
(188, 'L2B', 'AGB_L2', 'OMA_S3'),
(189, 'L2B', 'VOV_L2', 'OMA_S3'),
(190, 'L2B', 'AKP_L2', 'OMA_S3'),
(191, 'L2B', 'MEN_L2', 'SEC_S3'),
(192, 'L2B', 'TET_L2', 'SEC_S3'),
(193, 'L2B', 'ATG_L2', 'PAV_S3'),
(194, 'L2B', 'AME_L2', 'PAV_S3');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `Code_PROF` varchar(10) NOT NULL,
  `Nom_Prof` text NOT NULL,
  `Prenom_Prof` text NOT NULL,
  PRIMARY KEY (`Code_PROF`),
  KEY `Code_PROF` (`Code_PROF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`Code_PROF`, `Nom_Prof`, `Prenom_Prof`) VALUES
('AB_L1', 'AGBETI', 'Yao'),
('ADO_L2', 'ADOBOE', 'Francis'),
('AGB_L1', 'AGBETI', 'Kodjo'),
('AGB_L2', 'AGBODJAN', ''),
('AGK_L1', 'AGBOKA', ''),
('AKP_L1', 'AKPA', ''),
('AKP_L2', 'AKPA', ''),
('AKU_L1', 'AKUETE-AKUE', 'Akouete'),
('AK_L2', 'AKOGO', 'Raphael'),
('AME_L1', 'AMEVOR', ''),
('AME_L2', 'AMEVOR', ''),
('AMY_L1', 'AMEYIKPO', 'Kossi'),
('AM_L2', 'AMEVOR', ''),
('ATG_L1', 'ATIOGBE', ''),
('ATG_L2', 'ATIOGBE', ''),
('ATT_L1', 'ATTIVOE', ''),
('AWU_L1', 'AWUTE', 'Marius'),
('AWU_L2', 'AWUTE', 'Marius'),
('AZO_L2', 'AZOTI', ''),
('BAK_L1', 'BAKPESSI', ''),
('BOK_L1', 'BOKOVI', ''),
('DAV_L1', 'DAVON', ''),
('DA_L2', 'DAVON', ''),
('GBO_L1', 'GBODUI', 'Joseph-Roland'),
('GBO_L2', 'GBODUI', 'Joseph-Roland'),
('GB_L1', 'GBINU', ''),
('GNO_L1', 'GNOFAM', 'Sina'),
('HAN_L1', 'HANTZ', ''),
('HOUM_L1', 'HOUMAVO', ''),
('HOU_L1', 'HOUNGBO', 'Antoine-Marie'),
('KE_L2', 'KETOGLO', 'Alfred'),
('KIV_L1', 'KIVI', ''),
('KOE_L2', 'KEOULA', ''),
('LAK_L1', 'LAKMON', ''),
('LAR_L2', 'LARE', ''),
('MEN_L1', 'MENSAH', 'Peter Yoagan'),
('MEN_L2', 'MENSAH', 'Peter Yaogan'),
('MIH_L1', 'MIHESSO', ''),
('MI_L2', 'MIHESSO', ''),
('MOD_L1', 'MODEDZI', 'Atsu'),
('MO_L2', 'MODEDZI', 'Atsu'),
('NU_L1', 'NUNYABU', ''),
('SEB_L1', 'SEBA', 'Eryam'),
('TAP_L1', 'TAKPA-SOUKA', 'David'),
('TCH_L1', 'TCHANTCHO', ''),
('TCH_L2', 'TCHANTCHO', ''),
('TEP_L1', 'TEPE', ''),
('TET_L2', 'TETE', 'Sename'),
('TID_L2', 'TIDJANI', ''),
('TOM_L1', 'TOMEYABA', ''),
('VOV_L2', 'VOVOR-SEGBENYA', 'Felix');

-- --------------------------------------------------------

--
-- Structure de la table `ue`
--

DROP TABLE IF EXISTS `ue`;
CREATE TABLE IF NOT EXISTS `ue` (
  `Code_UE` varchar(10) CHARACTER SET latin1 NOT NULL,
  `Libelle_UE` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`Code_UE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `ue`
--

INSERT INTO `ue` (`Code_UE`, `Libelle_UE`) VALUES
('ABD_S5G', 'Applications des Bases de Donnees '),
('ABD_S5M', 'Application et Administration des Bases de Donnees'),
('APR_S1', 'Algorithme et Programmation'),
('ARC_S1', 'Architectures'),
('ARC_S6S', 'Architecture'),
('BDA_S5G', 'Bases de Donnees Avancees'),
('BDO_S2', 'Bases de Donnees'),
('BDS_S5M', 'Bases de Donnees Avancees et Securite'),
('BMA_S1', 'Bases Mathematiques'),
('CAP_S2', 'Conception et Application'),
('CEX_S4', 'Communication Expert'),
('COM_S1', 'Communication de Base'),
('COM_S5G', 'Communication'),
('COM_S5M', 'Communication'),
('COM_S5S', 'Communication'),
('CRE_S5S', 'Commutation et Reseaux Etendus'),
('CUB_S3', 'Conception et Utilisation des Bases de Donnees'),
('DLA_S6G', 'Droit et Entreprenariat'),
('DLA_S6M', 'Droit et Entreprenariat'),
('DLA_S6S', 'Droit et Entreprenariat'),
('EGO_S2', 'Economie et Gestion des Organisations'),
('EGO_S4', 'Economie et Gestion des Organisations'),
('FRE_S2', 'Initiation aux Reseaux'),
('GEL_S5G', 'Genie Logiciel'),
('IAM_S6M', 'Infographie et Application Mobile'),
('MAIN_S4', 'Maintenance'),
('MAIN_S5S', 'Maintenance'),
('MAR_S5S', 'Management des Systemes'),
('MIN_S6G', 'Management Informatique'),
('MIN_S6M', 'Management Informatique'),
('MIN_S6S', 'Management Informatique'),
('MMD_S5M', 'Multimedia'),
('MMW_S6G', 'Multimedia et Web'),
('MSI_S3', 'Modelisation des Systemes d\'Information'),
('OMA_S3', 'Outils Mathematiques'),
('OMA_S5G ', 'Administration des Bases de Donnees et Securite'),
('OMM_S4', 'Outils de Modelisation Mathematiques'),
('PAV_S3', 'Programmation Avancee'),
('PFC_S6G', 'Projet de Fin de Cycle'),
('PFC_S6M', 'Projet de Fin de Cycle'),
('PFC_S6S', 'Projet de Fin de Cycle'),
('PMO_S1', 'Prise en main de l\'Outil Informatique'),
('PPP_S2', 'Projet Professionnel Personnalise'),
('SEC_S3', 'Securite'),
('SEE_S4', 'Stages d\'Entreprise'),
('TAR_S5S', 'Technologies Avancees des Reseaux'),
('TWB__S5M', 'Technologie Web');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Code_user` int(10) NOT NULL AUTO_INCREMENT,
  `Nom_User` varchar(25) NOT NULL,
  `Prenom_User` varchar(30) NOT NULL,
  `FK_Code_CLASSE` varchar(10) NOT NULL,
  `login` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `Telephone` varchar(15) NOT NULL,
  `Email_User` text NOT NULL,
  PRIMARY KEY (`Code_user`),
  KEY `FK_Code_CLASSE` (`FK_Code_CLASSE`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Code_user`, `Nom_User`, `Prenom_User`, `FK_Code_CLASSE`, `login`, `password`, `Telephone`, `Email_User`) VALUES
(2, 'KIKI', 'sophie', 'L2A', 'kk', 'kkb', '2255554', 'kkb@php.iai'),
(3, 'eudes', 'eudes', 'L2A', 'eudes', 'eudes', '', ''),
(7, 'vd', 'eyoze', 'L2B', 'OUI', 'OUI', '', ''),
(25, 'az', 'az', 'L1A', 'az', 'az', 'az', 'ezjzrl@ezjk.com');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD CONSTRAINT `FK4` FOREIGN KEY (`FK_Code_CLASSE`) REFERENCES `classe` (`Code_CLASSE`),
  ADD CONSTRAINT `FK6` FOREIGN KEY (`FK_Code_user`) REFERENCES `utilisateur` (`Code_user`);

--
-- Contraintes pour la table `enseigner`
--
ALTER TABLE `enseigner`
  ADD CONSTRAINT `FK11` FOREIGN KEY (`FK_Code_UE`) REFERENCES `ue` (`Code_UE`),
  ADD CONSTRAINT `FK12` FOREIGN KEY (`FK_Code_PROF`) REFERENCES `professeur` (`Code_PROF`),
  ADD CONSTRAINT `enseigner_ibfk_1` FOREIGN KEY (`FK_Code_EC`) REFERENCES `ec` (`Code_EC`);

--
-- Contraintes pour la table `intervenir`
--
ALTER TABLE `intervenir`
  ADD CONSTRAINT `FK10` FOREIGN KEY (`FK_Code_UE`) REFERENCES `ue` (`Code_UE`),
  ADD CONSTRAINT `FK7` FOREIGN KEY (`FK_Code_CLASSE`) REFERENCES `classe` (`Code_CLASSE`),
  ADD CONSTRAINT `FK8` FOREIGN KEY (`FK_Code_PROF`) REFERENCES `professeur` (`Code_PROF`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
