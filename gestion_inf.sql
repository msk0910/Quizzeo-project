-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 07 fév. 2025 à 13:40
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_inf`
--

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

CREATE TABLE `quiz` (
  `id_quiz` int(11) NOT NULL,
  `titre` varchar(60) NOT NULL,
  `question1` varchar(255) NOT NULL,
  `question2` varchar(255) NOT NULL,
  `question3` varchar(255) NOT NULL,
  `question4` varchar(255) NOT NULL,
  `question5` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `quiz`
--

INSERT INTO `quiz` (`id_quiz`, `titre`, `question1`, `question2`, `question3`, `question4`, `question5`, `description`, `status`) VALUES
(1, 'Football', 'Le plus riche ', 'LE NOMBRE DE GOSS', 'Le plus pauvre', 'Le plus coll', 'le naze man ', 'JE suis le premier quiz DE TEST', 0),
(2, 'BASKET', 'C\'est lebronx', 'Voici choisir ', 'C\'est qui est les meilleur joueur ', 'Je veux tester le quiz', 'Je dit que c\'est correct ', 'Voici un autre quiz pour tester vos compétences', 1),
(3, 'Autre thème', 'Je suis encore présent ici', 'Voici une autre questio', 'une autre rubique', 'Je suis de retour', 'Ma dernière question', 'Revient si t\'es fort man', 0);

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id_reponse` int(11) NOT NULL,
  `titre` varchar(60) NOT NULL,
  `reponse1` varchar(60) NOT NULL,
  `reponse2` varchar(60) NOT NULL,
  `reponse3` varchar(60) NOT NULL,
  `reponse4` varchar(60) NOT NULL,
  `reponse5` varchar(60) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `user_role` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'statut du compte'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `last_name`, `first_name`, `user_role`, `email`, `password`, `status`) VALUES
(1, 'gueule', 'dAnge', 'Ecole', 'cedren@gmail.com', 'goodman', 1),
(2, 'cedrenho', 'rodriguez', 'stagiaire', 'ced@gmail.com', 'cedrogold', 0),
(3, 'Mac', 'Holden\'s', 'chef', 'macholde@gmail.com', 'macman', 1),
(4, 'pacman', 'john', 'stagiaire', 'man@gmail.com', 'manpac', 0),
(5, 'saitama', 'king', 'Ecole', 'sa@g.com', 'sait', 0),
(6, 'pacmanr', 'dAnge', 'Ecole', 'ced@em', 'cedro', 1),
(7, 'ced', 'goled', 'Entreprise', 'cedre@gmail.com', 'ced', 1),
(8, 'ced', 'betb', 'Ecole', 'cedre@gmail.com', 'cedr', 1),
(9, 'cedr', 'golt', 'Utilisateur simple', 'uti@gmail.com', 'cedro', 1),
(10, 'asdfghj', 'dfghjkl', 'Ecole', 'fdghj@dfghgjkl.dfghk', '321654', 1),
(11, 'cedr', 'dsfdghjgk', 'Utilisateur simple', 'fdghj@dfghgjkl.dfghk', '321654', 1),
(12, 'cedr', 'rwrg', 'Utilisateur simple', 'fdghj@dfghgjkl.dfghkk', '321654', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id_quiz`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id_reponse`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id_quiz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id_reponse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
