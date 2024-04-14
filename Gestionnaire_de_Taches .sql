-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 15 avr. 2024 à 01:34
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Gestionnaire_de_Taches`
--

-- --------------------------------------------------------

--
-- Structure de la table `Client`
--

CREATE TABLE `Client` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Taches`
--

CREATE TABLE `Taches` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `Date_insertion` datetime NOT NULL,
  `Date_echeance` datetime NOT NULL,
  `priorite` enum('faible','moyenne','élevée') NOT NULL,
  `etat` enum('F','C','T') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Taches`
--

INSERT INTO `Taches` (`id`, `libelle`, `description`, `Date_insertion`, `Date_echeance`, `priorite`, `etat`) VALUES
(3, 'Creation de la base de donnée', 'XXX', '2024-04-11 04:21:27', '2024-04-11 04:21:27', 'faible', 'F'),
(4, 'Dump de la base de donnée', 'XXY', '2024-04-11 04:21:56', '2024-04-11 04:21:56', 'faible', 'F'),
(5, 'Les fonctionnalités', 'ZZZZZ', '2024-04-11 04:22:30', '2024-04-11 04:22:30', 'élevée', 'F'),
(6, 'Dev Perso', 'a', '2024-04-12 04:38:48', '2024-05-02 00:00:00', 'moyenne', 'C'),
(8, 'Mariam', 'ser', '2024-04-12 05:41:33', '2024-04-20 00:00:00', 'moyenne', 'C'),
(10, 'GINDINKO', 'ZZZ', '2024-04-12 05:59:19', '2024-04-19 00:00:00', 'faible', 'C'),
(20, 'Droit', 'eoten dvfieoim qpezrn cnvioeh \'jtolsdl,xqjqwxl;snf!,b vc ;lkkjgdqm;glk, dsmljfm<, dmlfekj mùPAPĴZG ,EZQMEEEML!L, ,mrejl ', '2024-04-12 21:46:12', '2024-04-10 00:00:00', 'élevée', 'C'),
(23, 'azrz', 'szeds', '2024-04-13 18:19:57', '2024-04-16 00:00:00', 'élevée', 'T'),
(24, 'AZERTOJHGFDS', 'AZERT', '2024-04-13 20:33:20', '2024-04-12 00:00:00', 'faible', 'T'),
(25, 'Dev Perso', 'aze', '2024-04-14 01:41:54', '2024-04-07 00:00:00', 'faible', 'T'),
(27, 'sybersecurité', 'piouiyuterzaz', '2024-04-13 04:26:03', '2024-04-26 00:00:00', 'moyenne', 'T'),
(29, 'è-(\'\"', 'iuytrez', '2024-04-15 00:21:40', '2024-04-11 00:00:00', 'élevée', 'C');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Taches`
--
ALTER TABLE `Taches`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Client`
--
ALTER TABLE `Client`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Taches`
--
ALTER TABLE `Taches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
