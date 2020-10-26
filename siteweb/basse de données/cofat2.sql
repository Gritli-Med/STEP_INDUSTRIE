-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 26 juil. 2020 à 20:42
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
-- Base de données :  `cofat2`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `idt` varchar(50) NOT NULL,
  `jours` date NOT NULL,
  `heure` time NOT NULL,
  `type` varchar(100) NOT NULL,
  `des` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`idt`, `jours`, `heure`, `type`, `des`) VALUES
('ref5050', '2020-04-02', '11:12:00', 'electrique', 'capteur de proximitÃ©'),
('ref5050', '2020-04-05', '10:00:00', 'mecanique', 'planche d\'assemblage'),
('ref5050', '2020-04-10', '11:02:00', 'mecanique', 'galets ( bruit )'),
('ref1520', '2020-05-10', '10:03:00', 'mecanique', 'dÃ©raillement'),
('ref502', '2020-05-12', '13:20:00', 'electrique', 'automate'),
('ref4050', '2020-05-20', '11:00:00', 'electrique', 'lampes '),
('ref4023', '2020-05-28', '09:00:00', 'electrique', 'moteur ');

-- --------------------------------------------------------

--
-- Structure de la table `donee`
--

DROP TABLE IF EXISTS `donee`;
CREATE TABLE IF NOT EXISTS `donee` (
  `date` date NOT NULL,
  `projet` varchar(50) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `poste` int(50) NOT NULL,
  `demande` int(50) NOT NULL,
  `realise` int(50) NOT NULL,
  `duree` int(50) NOT NULL,
  `effectif` int(50) NOT NULL,
  `id` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `donee`
--

INSERT INTO `donee` (`date`, `projet`, `ref`, `poste`, `demande`, `realise`, `duree`, `effectif`, `id`) VALUES
('2020-04-04', 'GOLF8', 'ref:9820939380', 22, 800, 600, 400, 25, 1),
('2020-04-05', 'GOLF8 ', 'ref:9821499980', 22, 850, 800, 400, 24, 2),
('2020-04-22', 'PSA', 'ref:9821499780', 22, 966, 800, 450, 24, 3),
('2020-05-03', 'PSA', 'ref:9820939380', 24, 700, 520, 350, 28, 4),
('2020-05-12', 'PSA', 'ref:9821500280', 22, 800, 750, 450, 24, 5),
('2020-05-15', 'valeo', 'ref:9820939380', 20, 700, 600, 400, 24, 6),
('2020-05-28', 'valeo', 'ref:9820939380', 20, 900, 850, 450, 22, 7),
('2020-05-29', 'GOLF8', 'ref:9820939380', 20, 400, 420, 450, 29, 8),
('2020-06-01', 'PSA', 'ref:9820939380', 24, 400, 350, 280, 25, 9),
('2020-06-05', 'valeo', 'ref:9821499780', 24, 950, 800, 380, 28, 10),
('2020-06-06', 'GOLF8', 'ref:9821499780', 22, 450, 300, 400, 22, 11),
('2020-06-20', 'GOLF8', 'ref:9821499780', 20, 300, 350, 250, 22, 12),
('2020-06-22', 'GOLF8', 'ref:9820939380', 24, 400, 400, 350, 26, 13),
('2020-06-26', 'GOLF8', 'ref:9821499780', 26, 500, 480, 300, 24, 14),
('2020-06-30', 'GOLF8', 'ref:9821499780', 24, 400, 380, 340, 25, 15),
('2020-07-01', 'PSA', 'ref:9821499780', 24, 800, 780, 380, 28, 16);

-- --------------------------------------------------------

--
-- Structure de la table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `arret urgence` tinyint(1) NOT NULL,
  `arret production` tinyint(1) NOT NULL,
  `heure` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `info`
--

INSERT INTO `info` (`id`, `arret urgence`, `arret production`, `heure`) VALUES
(1, 0, 0, '09:00:00'),
(2, 1, 0, '19:43:00'),
(3, 0, 1, '19:40:00'),
(4, 0, 0, '20:00:00'),
(9, 1, 0, '15:11:00'),
(10, 0, 0, '11:40:00'),
(11, 1, 0, '12:39:00');

-- --------------------------------------------------------

--
-- Structure de la table `mainte`
--

DROP TABLE IF EXISTS `mainte`;
CREATE TABLE IF NOT EXISTS `mainte` (
  `idt` varchar(100) NOT NULL,
  `dep` varchar(100) NOT NULL,
  `jours` date NOT NULL,
  `heure` time NOT NULL,
  `duree` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `cause` varchar(100) NOT NULL,
  `methodes` varchar(100) NOT NULL,
  `pieces` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mainte`
--

INSERT INTO `mainte` (`idt`, `dep`, `jours`, `heure`, `duree`, `type`, `cause`, `methodes`, `pieces`, `des`) VALUES
('ref20252', 'electrique', '2020-04-02', '11:30:00', 20, 'capteur', 'xxxxx', 'changement capteur', 'capteur ref:4545', 'rien'),
('ref50234', 'electrique', '2020-04-05', '11:00:00', 30, 'planche', 'desserrage', 'fixation boulon', 'non', 'rien'),
('ref25252', 'electrique', '2020-04-10', '10:45:00', 10, 'galets', 'usure', 'graissage', 'non', 'rien'),
('ref25252', 'electrique', '2020-05-12', '10:50:00', 60, 'dÃ©raillement', 'blocage', 'xxx', 'vis M12 ref:M1260', 'non'),
('ref252522', 'electrique', '2020-05-12', '15:00:00', 50, 'automate', 'inconnue', 'xx', 'non', 'rien'),
('ref85852', 'electrique', '2020-05-20', '11:10:00', 30, 'eclairages', 'lampes', 'changement lampes', 'lampes ref:458', 'rien'),
('ref80502a', 'electrique', '2020-05-28', '09:00:00', 60, 'moteur', 'bobinage', 'xxxx', 'xx', 'rien'),
('ref252522', 'electrique', '2020-05-12', '15:00:00', 50, 'automate', 'inconnue', 'xx', 'non', 'rien.');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', '123456\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
