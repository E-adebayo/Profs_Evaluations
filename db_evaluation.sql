-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 27 déc. 2019 à 19:26
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
('L2A', 'Licence2 A', 'MSI_S3'),
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
  `FK_Code_PROF` varchar(10) NOT NULL,
  `FK_Code_UE` varchar(10) NOT NULL,
  `FK_Code_CLASSE` varchar(10) NOT NULL,
  PRIMARY KEY (`Code_EC`) USING BTREE,
  KEY `FK_Code_CLASSE` (`FK_Code_CLASSE`),
  KEY `FK_Code_PROF` (`FK_Code_PROF`),
  KEY `FK_Code_UE` (`FK_Code_UE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ec`
--

INSERT INTO `ec` (`Code_EC`, `Libelle_EC`, `FK_Code_PROF`, `FK_Code_UE`, `FK_Code_CLASSE`) VALUES
('AAR_6S', 'Architectures Avancees des Reseaux', '', '', ''),
('AIN_6G', 'Audit Informatique', '', '', ''),
('AIN_6M', 'Audit Informatique', '', '', ''),
('AIN_6S', 'Audit Informatique', '', '', ''),
('ALI_3', 'Algebre Lineaire', '', '', ''),
('AMA_1', 'Architecture et Maintenance', '', '', ''),
('ANE_5G', 'Anglais Expert', '', '', ''),
('ANE_5M', 'Anglais Expert', '', '', ''),
('ANE_5S', 'Anglais Expert', '', '', ''),
('ANG_1', 'Anglais', '', '', ''),
('ANM_1', 'Analyse Mathematique', '', '', ''),
('ANS_4', 'Anglais Scientifique', '', '', ''),
('ASB_5S', 'Administration et Securite des Bases de Donnees', '', '', ''),
('ASR_5S', 'Administration et Securite des Reseaux', '', '', ''),
('ASS_5S', 'Administration et Securite des Systemes', '', '', ''),
('BDM_5M', 'Bases de Donnees Mobiles', '', '', ''),
('BDO_5G', 'Bases de Donnees Orientee Objet et NoSQL', '', '', ''),
('BDR_5G', 'Bases de Donnees Distribuees et Reparties', '', '', ''),
('CBD_3', 'Conception des Bases de Donnees', '', '', ''),
('CEN_6G', 'Creation d Entreprise', '', '', ''),
('CEN_6M', 'Creation d Entreprise', '', '', ''),
('CEN_6S', 'Creation d Entreprise', '', '', ''),
('CGE_2', 'Comptabilite Generale', '', '', ''),
('CIM_6M', 'Creation et Integration de Medias Numeriques', '', '', ''),
('CPQ_5M', 'Conduite d un Projet de Multimedia et Qualite', '', '', ''),
('CRY_3', 'Cryptographie', '', '', ''),
('CSD_2', 'Conception et Implementation des Structures de Donnees', '', '', ''),
('DIS_2', 'Discipline', '', '', ''),
('DIS_4', 'Discipline', '', '', ''),
('DIS_6G', 'Discipline', '', '', ''),
('DIS_6M', 'Discipline', '', '', ''),
('DIS_6S', 'Discipline', '', '', ''),
('DMO_6G', 'Developpement Mobile', '', '', ''),
('DMO_6M', 'Developpement Mobile', '', '', ''),
('DTI_4', 'Droit des TIC', '', '', ''),
('DTR_6G', 'Droit du Travail', '', '', ''),
('DTR_6M', 'Droit du Travail', '', '', ''),
('DTR_6S', 'Droit du Travail', '', '', ''),
('EAI_4', 'Electronique Applique a l informatique', '', '', ''),
('EAI_5S', 'Electronique Informatique', '', '', ''),
('EEC_2', 'Environnement Economique', '', '', ''),
('EEO_1', 'Expression Ecrite et Orale', '', '', ''),
('ELN_1', 'Electronique Numerique', '', '', ''),
('FOP_5S', 'Fibre Optique', '', '', ''),
('GDM_5M', 'Gestion des Donnees Multimedia', '', '', ''),
('GPI_6G', 'Gestion des Projets Informatiques', '', '', ''),
('GPI_6M', 'Gestion des Projets Informatiques', '', '', ''),
('GPI_6S', 'Gestion des Projets Informatiques', '', '', ''),
('IAL_1', 'Initiation a l algorithmique', '', '', ''),
('IBD_2', 'Initiation aux Bases de Donnees', '', '', ''),
('IBD_3', 'Implementation des Bases de Donnees', '', '', ''),
('IGL_5G', 'Initiation au Genie Logiciel', '', '', ''),
('IHM_5M', 'Interface Homme Machine pour les produits logiciels', '', '', ''),
('ILI_1', 'Initiation a GNU / LINUX', '', '', ''),
('IMM_5M', 'Introduction au Multimedia', '', '', ''),
('IPO_2', 'Initiation a la Programmation Objet', '', '', ''),
('IPW_2', 'Initiation a la Programmation Web', '', '', ''),
('ISI_6G', 'Integration des Systemes d Information', '', '', ''),
('LAC_1', 'Langage C', '', '', ''),
('LOU_1', 'Suites IC3 de Microsoft', '', '', ''),
('MDI_1', 'Mathematiques Discretes', '', '', ''),
('MER_3', 'Merise', '', '', ''),
('MI2_4', 'Maintenance Informatique Niveau II', '', '', ''),
('MI2_5S', 'Maintenance Niveau II', '', '', ''),
('MSQ_5G', 'Administration des Bases de Donnees Libre(MySQL, Postgree)', '', '', ''),
('MSQ_5M', 'Administration des Bases de Donnees Libre(MySQL, Postgree)', '', '', ''),
('MSR_6S', 'Modele de Structuration des Reseaux', '', '', ''),
('ORA_5G', 'Administration des Bases de Donnees Oracle', '', '', ''),
('PAO_6M', 'Publication Assistee par Ordinateur, Outils', '', '', ''),
('PDW_5M', 'Plateforme et Outils de Developpement Web', '', '', ''),
('PFI_6G', 'Projet Final', '', '', ''),
('PFI_6M', 'Projet Final', '', '', ''),
('PFI_6S', 'Projet Final', '', '', ''),
('POD_5G', 'Plateforme et Outils de Developpement', '', '', ''),
('POO_3', 'Programmation Orientee Objet', '', '', ''),
('PRO_2', 'Projet Professionnel', '', '', ''),
('PRO_3', 'Probabilites et Statistiques', '', '', ''),
('PSQ_2', 'Pratique de SQL', '', '', ''),
('PW2_3', 'Programmation Web II', '', '', ''),
('RMO_5S', 'Reseaux Mobiles', '', '', ''),
('ROO_4', 'Recherche Operationnelle et Optimisation', '', '', ''),
('RT1_2', 'Reseaux et Technologie CISCO CCNA1', '', '', ''),
('RT2_2', 'Reseaux et Technologie CISCO CCNA2', '', '', ''),
('SAD_5G', 'Systeme d Information d Aide a la Decision', '', '', ''),
('SAD_5M', 'Systeme d Information d Aide a la Decision', '', '', ''),
('SBD_5G', 'Securite des Bases de Donnees', '', '', ''),
('SBD_5M', 'Securite des Bases de Donnees', '', '', ''),
('SCI_3', 'Securite Informatique', '', '', ''),
('SEA_5S', 'Systeme d Exploitation Avance', '', '', ''),
('SIG_5S', 'Systeme d Information Geographique', '', '', ''),
('SPO_2', 'Sport', '', '', ''),
('SPO_4', 'Discipline', '', '', ''),
('SPO_6G', 'Sport', '', '', ''),
('SPO_6M', 'Sport', '', '', ''),
('SPO_6S', 'Sport', '', '', ''),
('SQL_5G', 'Administration des Bases de Donnees SQL-Server', '', '', ''),
('SQL_5M', 'Administration des Bases de Donnees SQL-Server', '', '', ''),
('STA_4', 'Stage', '', '', ''),
('TEC_5G', 'Techniques de Communication', '', '', ''),
('TEC_5M', 'Techniques de Communication', '', '', ''),
('TEC_5S', 'Techniques de Communication', '', '', ''),
('TGR_4', 'Theorie des Graphes', '', '', ''),
('TME_4', 'TIC et Management de l Entreprise', '', '', ''),
('TMU_6G', 'Technique Multimedia', '', '', ''),
('UML_3', 'UML', '', '', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enseigner`
--

INSERT INTO `enseigner` (`Id_Eng`, `FK_Code_EC`, `FK_Code_UE`, `FK_Code_PROF`) VALUES
(1, 'UML_3', 'MSI_S3', 'KE_L2');

-- --------------------------------------------------------

--
-- Structure de la table `evaluer`
--

DROP TABLE IF EXISTS `evaluer`;
CREATE TABLE IF NOT EXISTS `evaluer` (
  `Id_Ev` int(10) NOT NULL AUTO_INCREMENT,
  `FK_Code_PROF` varchar(10) CHARACTER SET latin1 NOT NULL,
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
  PRIMARY KEY (`Id_Ev`),
  KEY `FK_Code_PROF` (`FK_Code_PROF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Structure de la table `faire`
--

DROP TABLE IF EXISTS `faire`;
CREATE TABLE IF NOT EXISTS `faire` (
  `Id_Ft` int(10) NOT NULL AUTO_INCREMENT,
  `FK_Code_EC` varchar(10) NOT NULL,
  `FK_Code_PROF` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_Ft`),
  KEY `FK_Code_PROF` (`FK_Code_PROF`),
  KEY `FK_Code_EC` (`FK_Code_EC`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `faire`
--

INSERT INTO `faire` (`Id_Ft`, `FK_Code_EC`, `FK_Code_PROF`) VALUES
(1, 'UML_3', 'KE_L2');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `intervenir`
--

INSERT INTO `intervenir` (`Id_Int`, `FK_Code_CLASSE`, `FK_Code_PROF`, `FK_Code_UE`) VALUES
(1, 'L1A', 'AGB_L1', 'APR_S1'),
(2, 'L1A', 'AME_L1', 'APR_S1'),
(3, 'L1A', 'BOK_L1', 'ARC_S1'),
(4, 'L1A', 'GBO_L1', 'APR_S1'),
(5, 'L1A', 'AME_L1', 'CAP_S2'),
(6, 'L2A', 'DA_L2', 'MSI_S3'),
(7, 'L2A', 'KE_L2', 'MSI_S3');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `Code_PROF` varchar(10) NOT NULL,
  `Nom_Prof` text NOT NULL,
  `Prenom_Prof` text NOT NULL,
  `FK_Code_CLASSE` varchar(10) NOT NULL,
  `FK_Code_UE` varchar(10) NOT NULL,
  `FK_Id_Ev` int(10) NOT NULL,
  PRIMARY KEY (`Code_PROF`),
  KEY `FK_Code_CLASSE` (`FK_Code_CLASSE`),
  KEY `FK_Code_EC` (`FK_Code_UE`),
  KEY `Code_PROF` (`Code_PROF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`Code_PROF`, `Nom_Prof`, `Prenom_Prof`, `FK_Code_CLASSE`, `FK_Code_UE`, `FK_Id_Ev`) VALUES
('AB_L1', 'AGBETI', 'Yao', '', '', 0),
('AGB_L1', 'AGBETI', 'Kodjo', '', '', 0),
('AGB_L2', 'AGBODJAN', '', '', '', 0),
('AGK_L1', 'AGBOKA', '', '', '', 0),
('AKP_L1', 'AKPA', '', '', '', 0),
('AKU_L1', 'AKUETE-AKUE', 'Akouete', '', '', 0),
('AK_L2', 'AKOGO', 'Raphael', '', '', 0),
('AME_L1', 'AMEVOR', '', '', '', 0),
('AME_L2', 'AMEVOR', '', '', '', 0),
('AMY_L1', 'AMYETI', 'Kossi', '', '', 0),
('AM_L1', 'AMEVOR', '', '', '', 0),
('AM_L2', 'AMEVOR', '', '', '', 0),
('AT_L1', 'ATIOGBE', '', '', '', 0),
('AWU_L1', 'AWUTE', 'Marius', '', '', 0),
('BOK_L1', 'BOKOVI', '', '', '', 0),
('DAV_L1', 'DAVON', '', '', '', 0),
('DA_L2', 'DAVON', '', '', '', 0),
('GBO_L1', 'GBODUI', 'Joseph-Roland', '', '', 0),
('GBO_L2', 'GBODUI', 'Joseph-Roland', '', '', 0),
('GB_L1', 'GBINU', '', '', '', 0),
('GNO_L1', 'GNOFAM', 'Sina', '', '', 0),
('HAN_L1', 'HANTZ', '', '', '', 0),
('HOU_L1', 'HOUNGBO', 'Antoine-Marie', '', '', 0),
('KE_L2', 'KETOGLO', 'ALFRED', '', '', 0),
('LAK_L1', 'LAKMON', '', '', '', 0),
('MEN_L1', 'MENSAH', 'Yao Peter', '', '', 0),
('MEN_L2', 'MENSAH', 'Peter Yaogan', '', '', 0),
('MIH_L1', 'MIHESSO', '', '', '', 0),
('MI_L2', 'MIHESSO', '', '', '', 0),
('MOD_L1', 'MODEDZI', 'Atsu', '', '', 0),
('MO_L1', 'MODEDZI', 'Atsu', '', '', 0),
('NU_L1', 'NUYABU', '', '', '', 0),
('TET_L1', 'TETE', '', '', '', 0),
('TET_L2', 'TETE', 'Sename', '', '', 0),
('TID_L2', 'TIDJANI', '', '', '', 0),
('TOM_L1', 'TOMEYBA', '', '', '', 0),
('VOV_L2', 'VOVOR-SEGBENYA', 'Felix', '', '', 0);

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
('', ''),
('ABD_S5G', 'Applications des Bases de Données '),
('ABD_S5M', 'Application et Administration des Bases de Donnees'),
('APR_S1', 'Algorithme et Programmation'),
('ARC_S1', 'Architectures'),
('ARC_S6S', 'Architecture'),
('BDA_S5G', 'Bases de Données Avancées'),
('BDO_S2', 'Bases de Donnees'),
('BDS_S5M', 'Bases de Données Avancées et Sécurité'),
('BMA_S1', 'Bases Mathematiques'),
('CAP_S2', 'Conception et Application'),
('CEX_S4', 'Communication Expert'),
('COM_S1', 'Communication de Base'),
('COM_S5G', 'Communication'),
('COM_S5M', 'Communication'),
('COM_S5S', 'Communication'),
('CRE_S5S', 'Commutation et Réseaux Etendus'),
('CUB_S3', 'Conception et Utilisation des Bases de Données'),
('DLA_S6G', 'Droit et Entreprenariat'),
('DLA_S6M', 'Droit et Entreprenariat'),
('DLA_S6S', 'Droit et Entreprenariat'),
('EGO_S2', 'Economie et Gestion des Organisations'),
('EGO_S4', 'Economie et Gestion des Organisations'),
('FRE_S2', 'Initiation aux Reseaux'),
('GEL_S5G', 'Génie Logiciel'),
('IAM_S6M', 'Infographie et Application Mobile'),
('MAIN_S4', 'Maintenance'),
('MAIN_S5S', 'Maintenance'),
('MAR_S5S', 'Management des Systèmes'),
('MIN_S6G', 'Management Informatique'),
('MIN_S6M', 'Management Informatique'),
('MIN_S6S', 'Management Informatique'),
('MMD_S5M', 'Multimedia'),
('MMW_S6G', 'Multimedia et Web'),
('MSI_S3', 'Modélisation des Systèmes d\'Information'),
('OMA_S3', 'Outils Mathématiques'),
('OMA_S5G ', 'Administration des Bases de Données et Sécurité'),
('OMM_S4', 'Outils de Modélisation Mathématiques'),
('PAV_S3', 'Programmation Avancée'),
('PFC_S6G', 'Projet de Fin de Cycle'),
('PFC_S6M', 'Projet de Fin de Cycle'),
('PFC_S6S', 'Projet de Fin de Cycle'),
('PMO_S1', 'Prise en main de l\'Outil Informatique'),
('PPP_S2', 'Projet Professionnel Personnalise'),
('SEC_S3', 'Securite'),
('SEE_S4', 'Stages d\'Entreprise'),
('TAR_S5S', 'Technologies Avancées des Réseaux'),
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Code_user`, `Nom_User`, `Prenom_User`, `FK_Code_CLASSE`, `login`, `password`, `Telephone`, `Email_User`) VALUES
(1, 'USER', 'user', 'L2A', 'admin', 'admin', '21212121', ''),
(2, 'KIKI', 'sophie', 'L2A', 'kk', 'kkb', '2255554', 'kkb@php.iai'),
(3, 'eudes', 'eudes', 'L2A', 'eudes', 'eudes', '', ''),
(7, 'vd', 'eyoze', 'L2B', 'OUI', 'OUI', '', ''),
(24, '', '', '', '', '', '', '');

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
-- Contraintes pour la table `classe`
--
ALTER TABLE `classe`
  ADD CONSTRAINT `FK` FOREIGN KEY (`FK_Code_UE`) REFERENCES `ue` (`Code_UE`);

--
-- Contraintes pour la table `ec`
--
ALTER TABLE `ec`
  ADD CONSTRAINT `ec_ibfk_1` FOREIGN KEY (`FK_Code_UE`) REFERENCES `ue` (`Code_UE`);

--
-- Contraintes pour la table `enseigner`
--
ALTER TABLE `enseigner`
  ADD CONSTRAINT `FK11` FOREIGN KEY (`FK_Code_UE`) REFERENCES `ue` (`Code_UE`),
  ADD CONSTRAINT `FK12` FOREIGN KEY (`FK_Code_PROF`) REFERENCES `professeur` (`Code_PROF`),
  ADD CONSTRAINT `enseigner_ibfk_1` FOREIGN KEY (`FK_Code_EC`) REFERENCES `ec` (`Code_EC`);

--
-- Contraintes pour la table `evaluer`
--
ALTER TABLE `evaluer`
  ADD CONSTRAINT `FK0` FOREIGN KEY (`FK_Code_PROF`) REFERENCES `professeur` (`Code_PROF`);

--
-- Contraintes pour la table `faire`
--
ALTER TABLE `faire`
  ADD CONSTRAINT `FK13` FOREIGN KEY (`FK_Code_EC`) REFERENCES `ec` (`Code_EC`),
  ADD CONSTRAINT `FK14` FOREIGN KEY (`FK_Code_PROF`) REFERENCES `professeur` (`Code_PROF`);

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
