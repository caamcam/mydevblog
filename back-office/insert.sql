-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 17 juil. 2020 à 12:29
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `mydevblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `mydevblog`
--

CREATE TABLE `mydevblog` (
  `un titre` text NOT NULL,
  `une image` varchar(255) NOT NULL,
  `une date de publication` datetime NOT NULL,
  `un auteur` text NOT NULL,
  `un contenu text` varchar(255) NOT NULL,
  `Extrait` varchar(255) NOT NULL DEFAULT '300'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;






INSERT INTO `mydevblog` (`un titre`, `une image`, `une date de publication`, `un auteur`, `un contenu text`, `Extrait`) 
VALUES ('un nouveau article', 'azerty', '2020-07-29 13:32:41', "cam's ", 'testeee ere ', '300');