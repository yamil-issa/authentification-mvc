-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 01 jan. 2023 à 17:30
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `authentification`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `password` varchar(300) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `adress` varchar(45) NOT NULL,
  `postalCode` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `role` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `firstName`, `lastName`, `adress`, `postalCode`, `city`, `role`) VALUES
(15, 'issa@gmail.com', '$2y$10$rA08pUPT/M52Y114gsu4nO9HThLhoXmAwcxvFgeT7W5JHyoRV0hv2', 'Yamil', 'Issa', '54 rue de la liberté ', '75009', 'Paris', 0),
(16, 'albert@gmail.com', '$2y$10$CO7fLY6a1mJtbZHNZrbD2.0u1g7HWrH9c3yGjsTa7XvWXRZC/vfMG', 'camus', 'albert', '32 rue de la croix', '75009', 'Paris', 0),
(17, 'admin@gmail.com', '$2y$10$K6RXqC5oOm71g8xFwBWq3ep8Hd9/RjC7pywUaWhSTbUh9r/ZTlwHe', 'admin', 'admin', '34 rue des lilas', '75011', 'Paris', 1),
(18, 'coppola@gmail.com', '$2y$10$hbOx8q8ViRFsiT.WJ8WZsu8/iNxqhYbSp7hAsx8TNBt54/JZdTjm2', 'Sofia', 'Coppola', '54 rue de la liberté ', '75012', 'Paris', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
