-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 juil. 2021 à 01:16
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `transmission`
--

-- --------------------------------------------------------

--
-- Structure de la table `fiche`
--

CREATE TABLE `fiche` (
  `id` int(32) NOT NULL,
  `agence` varchar(4) NOT NULL,
  `signature` varchar(40) NOT NULL,
  `client` varchar(128) DEFAULT NULL,
  `interlocuteur` varchar(40) DEFAULT NULL,
  `message` text NOT NULL,
  `code` int(1) NOT NULL,
  `date_fiche` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fiche`
--

INSERT INTO `fiche` (`id`, `agence`, `signature`, `client`, `interlocuteur`, `message`, `code`, `date_fiche`) VALUES
(1, 'JSE', 'Khaled Ahamada', 'YVELINE', 'SARAH TABOUL', 'Positionnement de madame VERSEGUE TAMARA le 15/06 de 8h à 18h\r\nannoncée par appel', 2, '2021-06-17'),
(2, 'JPE', 'Mutar Soilihi', 'BABILOU 134', 'ANNE VERVISCH', 'Positionnement de madame Petit-Frère Pauline (AGCO) le 19/06 de 8h à 18h.\r\n\r\nannoncée par mail', 1, '2021-06-17'),
(3, 'J02', 'Khaled Ahamada', '', '', 'Madame Samira Amine n\'a pas reçu sa paye.', 3, '2021-06-17'),
(4, 'JPE', 'widad', 'CHANTENAY clinique', NULL, 'Annulation de madame Sylvain odile (ais) le 4/06/2020.', 2, '2021-06-17'),
(6, 'JSE', 'Mandy', 'Furtado heine', NULL, 'Le cadre aurait besoin que \'équipe de journée l\'appelle demain à 14h.', 3, '2021-06-17'),
(7, 'J09', 'Sophie', 'Hopital d\'anthony', 'Barbara Amelie', 'Mission AIS du 15/07 de 13h à 18h\r\nintérimaire positionnée : Hadjira halifa\r\nannoncée par mail', 1, '2021-06-17'),
(8, 'J09', 'Jaahed', 'Henry Mondor', '', 'Monsieur Kamal Djamil (IDE) s\'annule le 13/07 en raison d\'un imprévu familial.\r\nMonsieur Kamal Djamil (IDE) s\'annule le 13/07 en raison d\'un imprévu familial.\r\nMonsieur Kamal Djamil (IDE) s\'annule le 13/07 en raison d\'un imprévu familial.\r\nMonsieur Kamal Djamil (IDE) s\'annule le 13/07 en raison d\'un imprévu familial.\r\nMonsieur Kamal Djamil (IDE) s\'annule le 13/07 en raison d\'un imprévu familial.', 2, '2021-06-17'),
(9, 'J02', 'Khaled', 'Saint antoine', 'P. SOMABERE', 'Demande d\'annulation de la mission de madame Bertrand Sarah le 25/06 de 15h à 20h en raison d\'un surplus en effectif.\r\nDemande d\'annulation de la mission de madame Bertrand Sarah le 25/06 de 15h à 20h en raison d\'un surplus en effectif.\r\nDemande d\'annulation de la mission de madame Bertrand Sarah le 25/06 de 15h à 20h en raison d\'un surplus en effectif.\r\nDemande d\'annulation de la mission de madame Bertrand Sarah le 25/06 de 15h à 20h en raison d\'un surplus en effectif.\r\nDemande d\'annulation de la mission de madame Bertrand Sarah le 25/06 de 15h à 20h en raison d\'un surplus en effectif.\r\nDemande d\'annulation de la mission de madame Bertrand Sarah le 25/06 de 15h à 20h en raison d\'un surplus en effectif.\r\nDemande d\'annulation de la mission de madame Bertrand Sarah le 25/06 de 15h à 20h en raison d\'un surplus en effectif.', 2, '2021-06-17'),
(10, 'J02', 'Mandy', 'Saint Joseph', 'Philip somabere', 'Demande du cadre de nuit de lui fournir le numero des intérimaires en missions dans son établissement cette semaine.\r\n\r\npermanence', 3, '2021-06-19'),
(11, 'J02', 'Khaled', 'SIAD ISATIS', '', 'Mission AIS du 25/06 de 8h à 13h\r\nintérimaire positionnée : SAMIRA ADBOU\r\nannoncé par appel + mail', 1, '2021-06-19'),
(12, 'JSE', 'Khaled', 'Saintre des platres', 'Bernard Yvan', 'Monsieur Eric Geran s\'est absentée le 13/06 de 15h à 18h\r\nil a eu une urgence familiale.\r\nil n\'a effectué que 3 heures de sa mission.', 2, '2021-06-19'),
(13, 'JPE', 'Khaled Ahamada', 'babilou 64', '', 'mission ape du 25/06 de 8h à 16h\r\ninterimaire : anne vervisch', 1, '2021-06-19'),
(14, 'JSP', 'Mouthar Mohadji', 'BRINTARD', '', 'Positionnement de madame Samira Halfaoui (IAD) le 15/17 de 14h à 22h\r\nannoncée par mail', 1, '2021-06-19'),
(15, 'JPE', 'widad', 'PARIS NORD', 'BRASSENS GEORGE', 'Le cadre de nuit est mécontent du service de notre intérimaire Sylvia Samahir et souhaite l\'interdire dans son l\'établissement.', 3, '2020-06-10'),
(17, 'J02', 'JAAHED', 'GHU', '', 'XGDFDFHFH', 2, '2021-06-19'),
(18, 'J02', 'Khaled Ahamada', 'Saint Antoine', '-', 'annulation de la mission de madame Kotsuki Djamila (AIS) \r\nle 23 juin de 21h à 7h.\r\nintérimaire prévenu par mail.', 2, '2021-06-19'),
(20, 'udfh', 'uhefuyhe', 'ygbfy', 'fdbyg', 'ydfbdyb', 1, '2021-06-26'),
(21, 'fjfy', 'hgdth', 'gfjyfjy', 'gjfjfj', 'ygfjfjy', 1, '2021-06-27'),
(26, 'hte', 'eye', 'eth', 'eth', 'eht', 2, '2021-06-28'),
(30, 'JPE', 'Khaled', 'babilou 347', 'Samira arfane', 'Mission de madame LOUBOU TAMARA (APE) (du 25/07 de 9h à 17h) annulée par l\'établissement car fermeture de l\'établissement.', 2, '2021-06-29'),
(32, 'J09', 'Khaled Ahamada', 'ETRECHY', '', 'Positionnement de madame Abernak Vami (AIS) le 05/07 de 10h à 16h.\r\nannoncée par mail + appel. ', 1, '2021-06-29'),
(46, 'JPE', 'khaled', 'babilou 215', '', 'Positionnement de madame SAMIRA CHAVEZ (APE) le 15/12/2021 de 15h à 19h.\r\nannoncée par appel.', 1, '2021-07-01'),
(47, 'J02', 'Mutar Mohadji', 'GHU', 'MAANA ASSIA', 'L\'établissement demande à ce que l\'intérimaire GRACE BANZOUZI (AIS) ne soit plus jamais positionnée dans leurs établissement. Ils pointent un manque de serieux de sa part.\r\n ', 3, '2021-07-10'),
(48, 'J02', 'Khaled Ahamada', 'ALICE PRIN', '', 'Positionnement de madame SOULE FANIA (AIS) le mercredi 29 juin de 14h à 21h sur le remplacement de madame GAMABOUNTA SEVERINE.\r\n\r\nAnnoncée par mail', 1, '2021-07-10'),
(49, 'J09', 'SOPHIE', 'JACQUES CARTIER', 'Samira BANTOU', 'L\'établissment a éffectuer un changement de code d\'entrée et un nouveau badge.\r\nIls veulent que l\'équipe de journée puisse les contacter demain matin pour mettre en place une adaptation.\r\n', 3, '2021-07-10'),
(50, 'JPE', 'JAAHED', 'BABILOU 23', '', 'Positionnement de madame HBILI SAMIRA (APE) du lundi 12 au vendredi 16 juillet de 8h à 16h sur le remplacement de madame SANDRA OMAR.\r\n\r\nAnnoncée par mail + appel', 1, '2021-07-10'),
(51, 'JSE', 'Widad', 'DEPARTEMENT DES YVELINE : Geoffroy Baptiste', 'ERIC GERAN', 'Monsieur Julien Amrani (EDUSPE) s\'est fait poignardé dans le dos par le jeune Baptiste, qui a ensuite fugué.\r\nL\'éducateur est hospitalisé au GHU.', 3, '2021-07-10'),
(52, 'J09', 'Khaled Ahamada', 'EHPAD ETRECHI', '', 'Positionnement de monsieur BAH Amir (IDE) le lundi 33 juillet de 15h à 16h.\r\nAnnoncé par mail.', 1, '2021-07-10'),
(53, 'j02', 'Khaled Ahamada', 'ghu', '', 'positionnement de madame bla bla ais le 25/02 de 14h a 22h.', 1, '2021-07-10'),
(54, 'J02', 'K.A', 'MGEN', 'MARIA', 'Positionnement MARIMAR VEGAS (AIS)\r\nle 15/08 de 15h à 17h\r\nannoncée par mail.', 1, '2021-07-11'),
(55, 'J02', 'K.A', 'MGEN', 'MARIA', 'Positionnement MARIMAR VEGAS (AIS)\r\nle 15/08 de 15h à 17h\r\nannoncée par mail.', 1, '2021-07-11'),
(56, 'J02', 'K.A', 'MGEN', 'MARIA', 'Positionnement MARIMAR VEGAS (AIS)\r\nle 15/08 de 15h à 17h\r\nannoncée par mail.', 1, '2021-07-11'),
(57, 'J02', 'K.A', 'MGEN', 'MARIA', 'Positionnement MARIMAR VEGAS (AIS)\r\nle 15/08 de 15h à 17h\r\nannoncée par mail.', 1, '2021-07-11'),
(58, 'J02', 'K.A', 'MGEN', 'MARIA', 'Positionnement MARIMAR VEGAS (AIS)\r\nle 15/08 de 15h à 17h\r\nannoncée par mail.', 1, '2021-07-11'),
(59, 'J02', 'K.A', 'MGEN', 'MARIA', 'Positionnement MARIMAR VEGAS (AIS)\r\nle 15/08 de 15h à 17h\r\nannoncée par mail.', 1, '2021-07-11'),
(60, 'JSP', 'K.A', 'GALIANI HOSPITAL', '', 'Confirmation de madame ALIA SAMIRA (IBODE) le 11 juillet de 14h à 21h.\r\nAnnoncée par mail + appel.', 1, '2021-07-12');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `fiche`
--
ALTER TABLE `fiche`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fiche`
--
ALTER TABLE `fiche`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
