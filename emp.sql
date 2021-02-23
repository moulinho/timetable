-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 18 jan. 2021 à 14:25
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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `temps`
--

INSERT INTO `temps` (`id`, `nom`, `prenom`, `sex`, `contact`, `matiere`, `daydispo1`, `Hdispo1`, `daydispo2`, `Hdispo2`, `daydispo3`, `Hdispo3`, `daydispo4`, `Hdispo4`, `daydispo5`, `Hdispo5`, `id_perso`, `Date_enr`) VALUES
(1, 'badi', 'BGTY', 'homme', '2215744555', 'francais', 'Lundi', '8h-9h', 'Mardi', '9h-10h', 'Mercredi', '11h-12h', '', '', '', '', '0', '2021-01-14 19:52:42'),
(2, 'blabla', 'BGTY', 'homme', '4731334825', 'francais', 'Lundi', '9h-10h', 'Mardi', '9h-10h', 'Mercredi', '10h-11h', '', '', '', '', '0', '2021-01-15 09:45:15'),
(3, 'badi', 'agnes', 'femme', '2215744555', 'atelier', 'Lundi', '9h-10h ,10h-11h', 'Mardi', '8h-9h ,13h-14h ,14h-16h', '', '', 'Jeudi', '8h-9h ,10h-11h', '', '', '0', '2021-01-15 09:46:38'),
(4, 'badi', 'agnes', 'femme', '2215744555', 'atelier', 'Lundi', '9h-10h ,10h-11h', '', '', '', '', 'Jeudi', '8h-9h ,10h-11h', '', '', '0', '2021-01-15 09:47:42'),
(5, 'badi', 'agnes', 'femme', '2215744555', 'atelier', 'Lundi', '9h-10h ,10h-11h', 'Mardi', '8h-9h ,9h-10h ,10h-11h ,11h-12h ,13h-14h ,14h-16h', '', '', 'Jeudi', '8h-9h ,10h-11h', '', '', '0', '2021-01-15 09:47:56'),
(6, 'badi', 'BGTY', 'femme', '4415744555', 'francais', 'Lundi', '9h-10h', 'Mardi', '8h-9h ,9h-10h', '', '', '', '', '', '', '0', '2021-01-17 12:42:20'),
(7, 'blabla', 'BGTY60043f9fe10c5', 'femme', '4415744555', 'anglais', 'Lundi', '8h-9h ,9h-10h', 'Mardi', '8h-9h ,9h-10h', 'Mercredi', '9h-10h ,10h-11h', '', '', '', '', '0', '2021-01-17 13:46:08'),
(8, 'zrsd', 'sqfe', 'femme', '47313348', 'atelier', 'Lundi', '9h-10h', 'Mardi', '13h-14h', '', '', '', '', '', '', '600443f2a8ef0', '2021-01-17 14:04:34'),
(9, 'zrsd', 'sqfe', 'femme', '47313348', 'atelier', 'Lundi', '9h-10h', 'Mardi', '13h-14h', '', '', '', '', '', '', '6004443931853', '2021-01-17 14:05:45'),
(10, 'zrsd', 'sqfe', 'femme', '47313348', 'atelier', 'Lundi', '9h-10h', 'Mardi', '13h-14h', '', '', '', '', '', '', '6004443935f74', '2021-01-17 14:05:45'),
(11, 'jdsfhefdkjhg', 'jkdfhgd', 'homme', '2215744555', 'atelier', 'Lundi', '11h-12h ,13h-14h', 'Mardi', '10h-11h ,11h-12h', '', '', '', '', '', '', '60044457051cf', '2021-01-17 14:06:15'),
(12, 'blabla', 'agnes', 'femme', '4415744555', 'anglais', '', '', 'Mardi', '9h-10h ,10h-11h', 'Mercredi', '9h-10h ,10h-11h', '', '', '', '', '60045764e66bc', '2021-01-17 15:27:32');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
