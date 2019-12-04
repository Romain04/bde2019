-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 04 Décembre 2019 à 01:59
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bde2019`
--

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `begin` datetime NOT NULL,
  `end` datetime NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`id`, `nom`, `description`, `begin`, `end`, `lieu`, `type`) VALUES
(1, 'Coup de Poing Forain', 'Venez tester votre force et montrer vos biceps de bodybuilder face à la machine infernale !', '2019-12-09 08:00:00', '2019-12-09 23:00:00', 'Diagonale Eiffel (Stand)', 'attraction'),
(2, 'Coup de Poing Forain', 'Venez tester votre force et montrer vos biceps de bodybuilder face à la machine infernale !', '2019-12-10 08:00:00', '2019-12-10 23:00:00', 'Diagonale Eiffel (Stand)', 'attraction'),
(3, 'Coup de Poing Forain', 'Venez tester votre force et montrer vos biceps de bodybuilder face à la machine infernale !', '2019-12-11 08:00:00', '2019-12-11 23:00:00', 'Diagonale Eiffel (Stand)', 'attraction'),
(4, 'Coup de Poing Forain', 'Venez tester votre force et montrer vos biceps de bodybuilder face à la machine infernale !', '2019-12-12 08:00:00', '2019-12-12 23:00:00', 'Diagonale Eiffel (Stand)', 'attraction'),
(5, 'Borne d\'Arcade', 'Envie de retrouver les folles sensations des jeux d\'arcades rétro "made in 80s" ? Alors viens défier la borne et inscrire ton nom sur le leaderboard !', '2019-12-09 08:00:00', '2019-12-09 23:00:00', 'Diagonale Eiffel (Stand)', 'esports'),
(6, 'Borne d\'Arcade', 'Envie de retrouver les folles sensations des jeux d\'arcades rétro "made in 80s" ? Alors viens défier la borne et inscrire ton nom sur le leaderboard !', '2019-12-10 08:00:00', '2019-12-10 23:00:00', 'Diagonale Eiffel (Stand)', 'esports'),
(7, 'Bag Jump', 'Pour se sentir flotter en apesanteur et amérir en douceur comme un astronaute, rendez-vous au Bag Jump ;)', '2019-12-12 13:00:00', '2019-12-12 18:00:00', 'Carré des sciences', 'attraction'),
(8, 'Space Ball', 'Si tu te sens l\'âme d\'un astronaute, viens passer les durs tests de sélection au Space Ball : rotations suivant trois axes, accélérations et perte de repère, sensations garanties!', '2019-12-10 15:00:00', '2019-12-10 19:00:00', 'Devant Bouygues', 'attraction'),
(9, 'Escape Game', '30 minutes, des messages radio d\'alerte et des lampes de poches: c\'est ce dont vous disposez pour sortir de notre station spatiale piégée... ', '2019-12-09 09:00:00', '2019-12-09 19:00:00', 'sc.266', 'run'),
(10, 'Escape Game', '30 minutes, des messages radio d\'alerte et des lampes de poches: c\'est ce dont vous disposez pour sortir de notre station spatiale piégée... ', '2019-12-10 09:00:00', '2019-12-10 19:00:00', 'sc.266', 'run'),
(11, 'Escape Game', '30 minutes, des messages radio d\'alerte et des lampes de poches: c\'est ce dont vous disposez pour sortir de notre station spatiale piégée... ', '2019-12-11 09:00:00', '2019-12-11 19:00:00', 'sc.266', 'run'),
(12, 'Escape Game', '30 minutes, des messages radio d\'alerte et des lampes de poches: c\'est ce dont vous disposez pour sortir de notre station spatiale piégée... ', '2019-12-12 09:00:00', '2019-12-12 19:00:00', 'sc.266', 'run'),
(13, 'Laser Game', 'Quel est le meilleur moyen de défendre une invasion extra-terrestre ? Et oui, s\'entrainer au Laser Game, Pardi !', '2019-12-11 09:00:00', '2019-12-11 19:00:00', 'VI.007', 'esports'),
(14, 'Show PomPim', 'Le show inter-école des Pom-Pom va te mettre des étoiles dans les yeux ! portés, voltiges et dance : recette inégalée pour s\'ambiancer !', '2019-12-12 20:00:00', '2019-12-12 23:00:00', 'Cratère (Breguet)', 'show'),
(15, 'Repas Stand', 'Au menu: Croziflette, compote ou tare au pomme', '2019-12-09 11:45:00', '2019-12-09 13:45:00', 'Diagonale Eiffel (Stand)', 'fastfood'),
(16, 'Repas Stand', 'Au menu: Riz, Moussaka, gateau au chocolat.', '2019-12-10 11:45:00', '2019-12-10 13:45:00', 'Diagonale Eiffel (Stand)', 'fastfood'),
(17, 'Repas Stand', 'Au menu: Chili con carne, riz, crumble.', '2019-12-11 11:45:00', '2019-12-11 13:45:00', 'Diagonale Eiffel (Stand)', 'fastfood'),
(18, 'Repas Stand', 'Au menu: Pâtes Carbonara, quatre-quart.', '2019-12-12 11:45:00', '2019-12-12 13:45:00', 'Diagonale Eiffel (Stand)', 'fastfood'),
(19, 'Repas Stand', 'Au menu: Club Sandwich, Tiramisu.', '2019-12-13 11:45:00', '2019-12-13 13:45:00', 'Diagonale Eiffel (Stand)', 'fastfood'),
(20, 'Soirée SEUL SUR GIF', 'Quand les voisins sont a plus de 3 millions de km, il ne reste qu\'une solution: en profiter pour faire un max de bruit !!!', '2019-12-12 23:00:00', '2019-12-13 03:00:00', 'Canapés Bouygues', 'soiree'),
(21, 'Bar Spé', 'Venez vous régaler avec un bar spé de quaité! Au menu: Burgers, frites/pommes dauphines.', '2019-12-12 19:00:00', '2019-12-12 21:00:00', 'Devant Bouygues', 'bar'),
(22, 'nom', 'desc', '2019-12-04 01:00:00', '2019-12-04 03:00:00', 'la', 'show'),
(23, 'test', 'desc', '2019-12-05 00:00:00', '2019-12-05 17:00:00', 'ici', 'bar'),
(24, 'nice test', 'wow so much skills dude', '2019-12-04 16:00:00', '2019-12-05 00:00:00', 'par ici', 'attraction'),
(25, 'actideref', 'une acti de qualite 1 (ref)', '2019-12-05 01:00:00', '2019-12-06 00:00:00', 'chez lui', 'run');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
