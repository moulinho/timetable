-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 03 fév. 2021 à 22:36
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `emp`
--

-- --------------------------------------------------------

--
-- Structure de la table `temps`
--

DROP TABLE IF EXISTS `temps`;
CREATE TABLE IF NOT EXISTS `temps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `matiere` varchar(250) NOT NULL,
  `daydispo1` varchar(250) NOT NULL,
  `Hdispo1` varchar(250) NOT NULL,
  `daydispo2` varchar(250) NOT NULL,
  `Hdispo2` varchar(250) NOT NULL,
  `daydispo3` varchar(250) NOT NULL,
  `Hdispo3` varchar(250) NOT NULL,
  `daydispo4` varchar(250) NOT NULL,
  `Hdispo4` varchar(250) NOT NULL,
  `daydispo5` varchar(250) NOT NULL,
  `Hdispo5` varchar(250) NOT NULL,
  `id_perso` varchar(250) NOT NULL,
  `Date_enr` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `temps`
--

INSERT INTO `temps` (`id`, `nom`, `prenom`, `sex`, `contact`, `matiere`, `daydispo1`, `Hdispo1`, `daydispo2`, `Hdispo2`, `daydispo3`, `Hdispo3`, `daydispo4`, `Hdispo4`, `daydispo5`, `Hdispo5`, `id_perso`, `Date_enr`) VALUES
(1, 'blabla', 'BGTY', 'femme', '4415744555', 'francais', 'Lundi', '8h-9h', '', '', '', '', '', '', '', '', '601abf4748a62', '2021-02-03 15:20:39'),
(3, 'blabla', 'BGTY', 'femme', '4415744555', 'francais', 'Lundi', '8h-9h', 'Mardi', '8h-9h', '', '', '', '', '', '', '601abf4b85d23', '2021-02-03 15:20:43'),
(5, 'blabla', 'BGTY', 'femme', '4415744555', 'francais', 'Lundi', '8h-9h', 'Mardi', '8h-9h', 'Mercredi', '8h-9h', '', '', '', '', '601abf4ed2e05', '2021-02-03 15:20:46'),
(7, 'blabla', 'BGTY', 'femme', '4415744555', 'francais', 'Lundi', '8h-9h', 'Mardi', '8h-9h', 'Mercredi', '8h-9h', 'Jeudi', '9h-10h', '', '', '601abf520afc1', '2021-02-03 15:20:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
