-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 10 juin 2021 à 17:43
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `trainsie1`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `nomadministrateur` varchar(50) NOT NULL,
  `motdepasse` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`nomadministrateur`, `motdepasse`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

CREATE TABLE `billet` (
  `id` int(11) NOT NULL,
  `depart` varchar(55) NOT NULL,
  `arrive` varchar(55) NOT NULL,
  `classe` varchar(55) NOT NULL,
  `age` varchar(55) NOT NULL,
  `typeb` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `billet`
--

INSERT INTO `billet` (`id`, `depart`, `arrive`, `classe`, `age`, `typeb`) VALUES
(1, 'Sousse', 'Tunis', 'premiere', 'Jeune', 'mod'),
(2, ' Sousse ', ' Sousse ', ' premiÃ©re classe ', ' Jeune ', ' Modifiable '),
(3, ' Sousse ', ' Sousse ', ' premiÃ©re classe ', ' Jeune ', ' Modifiable '),
(4, ' Sousse ', ' Sousse ', ' premiÃ©re classe ', ' Jeune ', ' Modifiable '),
(5, 'Sousse', 'Tunis', 'premiere', 'Jeune', 'mod'),
(6, ' Sousse ', ' Sousse ', ' premiÃ©re classe ', ' Jeune ', ' Modifiable '),
(7, ' Sousse ', ' Sousse ', ' premiÃ©re classe ', ' Jeune ', ' Modifiable '),
(8, ' Sousse ', ' Sousse ', ' premiÃ©re classe ', ' Jeune ', ' Modifiable '),
(9, ' Sousse ', ' Sousse ', ' premiÃ©re classe ', ' Jeune ', ' Modifiable '),
(10, ' Sousse ', ' Sousse ', ' premiÃ©re classe ', ' Jeune ', ' Modifiable ');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `gmail` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `gmail`, `mdp`) VALUES
(1, 'nour', 'mosbeh', 'nour@mosbeh.yahoo', 'lol123'),
(3, 'loujayn', 'lou', 'loujay@yahoo.com', 'loulou'),
(4, 'hiba', 'hiba', 'hiba@gmail.fr', 'hello');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `depart` varchar(10) NOT NULL,
  `arrivee` varchar(10) NOT NULL,
  `time` time(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `depart`, `arrivee`, `time`) VALUES
(1, 'tunis', 'sousse', '05:00:00.0'),
(2, 'tunis', 'monastir', '08:00:00.0'),
(3, 'monastir', 'tunis', '12:00:00.0'),
(4, 'monastir', 'sousse', '15:00:00.0'),
(7, 'Tunis', 'Sousse', '06:00:00.0'),
(6, 'sousse', 'monastir', '10:00:00.0');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `billet`
--
ALTER TABLE `billet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `billet`
--
ALTER TABLE `billet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
