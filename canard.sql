-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Ven 17 Août 2018 à 13:48
-- Version du serveur :  5.7.23-0ubuntu0.18.04.1
-- Version de PHP :  7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `canard_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `canard`
--

CREATE TABLE `canard` (
  `id` int(11) NOT NULL,
  `lieu` text NOT NULL,
  `date` text NOT NULL,
  `nombre` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `canard`
--

INSERT INTO `canard` (`id`, `lieu`, `date`, `nombre`) VALUES
(1, '3 Place du Préfet Erignac, 32000 Auch. ', '17/08/2018', 6),
(2, '81 Route de Pessan, 32000 Auch', '18/06/2018', 3),
(4, '81 Route de marge, 32000 Auc32', '16/06/2018', 12),
(5, '6 Avenue des Pyrénées, 32170 Miélan', '12/06/2018', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `canard`
--
ALTER TABLE `canard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `canard`
--
ALTER TABLE `canard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
