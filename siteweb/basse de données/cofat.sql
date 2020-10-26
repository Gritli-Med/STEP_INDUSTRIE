-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 26 juil. 2020 à 20:34
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
-- Base de données :  `cofat`
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
  `des` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `donee`
--

DROP TABLE IF EXISTS `donee`;
CREATE TABLE IF NOT EXISTS `donee` (
  `date` date NOT NULL,
  `projet` varchar(100) NOT NULL,
  `ref` varchar(100) NOT NULL,
  `poste` varchar(100) NOT NULL,
  `demande` varchar(100) NOT NULL,
  `realise` varchar(100) NOT NULL,
  `duree` varchar(100) NOT NULL,
  `effectif` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `donee`
--

INSERT INTO `donee` (`date`, `projet`, `ref`, `poste`, `demande`, `realise`, `duree`, `effectif`) VALUES
('2020-05-13', '1278', '12', '1287', '1254', '12', '12', '1278');

-- --------------------------------------------------------

--
-- Structure de la table `informations`
--

DROP TABLE IF EXISTS `informations`;
CREATE TABLE IF NOT EXISTS `informations` (
  `m` int(10) NOT NULL,
  `a` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `duree` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `cause` varchar(100) NOT NULL,
  `methodes` varchar(100) NOT NULL,
  `pieces` varchar(100) NOT NULL,
  `des` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mainte`
--

INSERT INTO `mainte` (`idt`, `dep`, `jours`, `heure`, `duree`, `type`, `cause`, `methodes`, `pieces`, `des`) VALUES
('dsf', 'electrique', '2020-04-02', '20:20:00', '202', '202', '20', '20', '202', '202'),
('020202', 'electrique', '2020-02-02', '20:20:00', '202', '20', '20', '20', '20', '20'),
('el2050', 'electrique', '2020-02-20', '20:25:00', '35', 'simens', 'cable hdmi', 'rien', 'rien', 'il faut reviser avant travailler'),
('el2050', 'electrique', '2020-02-20', '20:25:00', '25', '52', '52', '52', '52', '52'),
('el2050', 'electrique', '2020-02-20', '20:25:00', '25', '52', '52', '52', '52', '52d sd ds ff df dsf jkljkkljjkljkljkl kljkljkljkljkljkl jkljkl jkjkl jkl jkl jkjkljkllllllllllllllllllllllllllllljjjjjjjjjjjjkldfm d  df dfdfdf d df'),
('REF-8050', 'electrique', '2020-04-20', '16:39:00', '30min', 'variateur', 'chauffement exesive', 'revision', 'non', 'rien de spÃ©cial a commentÃ©'),
('ref20052', 'electrique', '2020-12-25', '14:02:00', '35', 'couroit', 'tendeure', 'rien', 'non', 'rien de spÃ©cial a commentÃ©'),
('ref2055', 'electrique', '2020-02-25', '20:20:00', '20', 'h', 'fd', 'dfÂ²dfÂ²df', 'ddfdf', 'ddffd'),
('lmlm', 'electrique', '2020-02-02', '20:20:00', '20', '12', '12', '21', '12', '12'),
('ref5050', 'electrique', '2020-05-10', '01:08:00', '30', 'automate', 'led bf', 'changmenet led ', 'led ref205', 'rien'),
('ref5050', 'electrique', '2020-05-10', '01:08:00', '30', 'automate', 'led bf', 'changmenet led ', 'led ref205', 'rien');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('gritli', '123456'),
('fadhel', '123456'),
('admin', '123456');

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
('gritli', '123456'),
('', ''),
('fadhel', '123456\r\n'),
('cofat-departement', '123456\r\n'),
('admin', '123456'),
('hassen', 'hassen'),
('1', '1'),
('2', '2\r\n'),
('3', '3'),
('admin', '123456'),
('fadhel', '123456'),
('abdelbaset', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `anneé` int(100) NOT NULL,
  `hello` tinyint(1) NOT NULL,
  `okk` float NOT NULL,
  `bolean` tinyint(1) NOT NULL,
  `num` int(100) NOT NULL,
  `9` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`prenom`, `nom`, `email`, `anneé`, `ok`, `okk`, `bolean`, `num`, `9`) VALUES
('wael', 'manaa', 'wael@@', 1995, 0, 0.2, 2, 0, 0),
('weal', 'makaka', 'lklkl', 1995, 25, 52, 2, 0, 0),
('mohamed', 'lkmklm', 'mlkklmk', 213, 123, 12, 21, 0, 0),
('wael', 'man', '123', 123, 123, 123, 1, 0, 0),
('wael', 'mana', '01', 12, 12, 12, 12, 0, 0),
('12', '21', '12', 12, 12, 12, 12, 12, 0),
('21', '12', '12', 12, 12, 12, 21, 12, 0),
('12', '12', '12', 12, 2, 1, 6, 5, 0),
('jkl', 'jkl', 'jkl', 45, 45, 45, 45, 412, 0),
('45', '45', '54', 45, 45, 0, 45, 45, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
