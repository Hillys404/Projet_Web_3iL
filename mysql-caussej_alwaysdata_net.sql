-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-caussej.alwaysdata.net
-- Generation Time: Nov 08, 2024 at 05:42 PM
-- Server version: 10.11.9-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caussej_site_poules`
--
CREATE DATABASE IF NOT EXISTS `caussej_site_poules` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `caussej_site_poules`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `telephone`, `adresse`) VALUES
(1, 'La Terre des Poules', 'laterredespoules12@gmail.com', '06.66.66.66.66', '12000 Rodez');

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `id` int(11) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`id`, `contenu`, `description`) VALUES
(1, 'poule_araucana.jpg', 'L\'Araucana est une race de poule domestique venant du Chili. Elle pond des œufs à coquille vert-bleu.La poule araucana est bonne couveuse et pondeuse. Elle possède des toupets d\'oreilles (ou oreillards), mais n\'a pas de queue.'),
(2, 'poule_gauloise_doree.jpg', 'La gauloise dorée est de taille modeste. La poule pond régulièrement au printemps et durant l\'été des œufs blancs d\'au moins soixante grammes. En dépit de sa domestication, cette race a conservé une partie de son caractère sauvage.'),
(3, 'poule_harco.jpg', 'La Harco est une poule sociable reconnue pour sa ponte importante. Elle est facile à élever en enclos restreint. Elle commence à pondre à l\'âge de 21 semaines et pond 280 œufs par an. C\'est une poule très robuste, très rustique.'),
(5, '671a7b6dd7ca2-poule_sussex.jpg', 'La sussex est une race très répandue à travers le monde. Honorable pondeuse. Cette race est caractérisée par sa forme rectangulaire, avec un dos large et plat, des cuisses dégagées et assez musclées et un plumage abondant, mais sans bouffant.'),
(7, '671a7ccfdf160-poule_gasconne.jpg', 'La poule gasconne est une volaille de type fermier, svelte, de taille moyenne. Sportive, elle aime parcourir de grands espaces à la recherche de nourriture. Elle se développe rapidement, et pond environ 200 œufs par an.'),
(8, '671baacc29278-poule_bleue_de_france.jpg', 'La Bleue de France ou Pondeuse Cendrée est une pondeuse correcte, avec généralement 290 oeufs la première année puis une baisse de la ponte à une cadence d\'un jour sur deux et quelquefois un jour sur trois.');

-- --------------------------------------------------------

--
-- Table structure for table `presentation`
--

CREATE TABLE `presentation` (
  `id` int(11) NOT NULL,
  `contenu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `presentation`
--

INSERT INTO `presentation` (`id`, `contenu`) VALUES
(2, 'Bienvenue à la Ferme des Poules !'),
(3, 'La Terre des Poules est une ferme aveyronnaise spécialisée dans l\'élevage et la vente de différentes races de poules.'),
(4, 'Nous vous accompagnons dans le choix de vos poules, que vous recherchiez des pondeuses, des poules rustiques ou des races spécifiques.'),
(5, 'Utilisez les onglets ci-dessus pour naviguer facilement sur notre site et découvrir nos volailles. Que vous cherchiez des informations ou souhaitiez acheter une poule, contactez-nous !');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_connected` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `username`, `password`, `is_connected`) VALUES
(1, 'admin', 'admin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presentation`
--
ALTER TABLE `presentation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `presentation`
--
ALTER TABLE `presentation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
