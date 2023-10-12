-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 12 oct. 2023 à 10:34
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bddsite`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `titre`, `description`, `image`, `prix`) VALUES
(1, 'Impact Whey Isolate', 'Impact Whey Isolate est une protéine en poudre de haute qualité, faible en matières grasses et en glucides, idéale pour soutenir la croissance musculaire et la récupération.', 'https://static.thcdn.com/productimg/1600/1600/10530911-5884889444360331.jpg', '25.99'),
(2, 'Impact Whey Protein', 'Impact Whey Protein est une protéine en poudre polyvalente qui fournit un mélange équilibré de protéines de lactosérum de haute qualité pour aider à atteindre vos objectifs nutritionnels et sportifs.', 'https://static.thcdn.com/productimg/1600/1600/10530943-1224889444460882.jpg', '27.50'),
(3, 'Clear Whey Isolate', 'Clear Whey Isolate est une protéine transparente et rafraîchissante qui se mélange facilement dans l\'eau. Elle est idéale pour une hydratation protéinée après l\'entraînement.', 'https://static.thcdn.com/productimg/1600/1600/12081396-1994792209042321.jpg', '23.75'),
(4, 'Pack d\'échantillons de Clear Whey Isolate', 'Le pack d\'échantillons de Clear Whey Isolate vous permet de découvrir différentes saveurs de cette protéine transparente, parfaite pour varier vos goûts.', 'https://static.thcdn.com/productimg/1600/1600/12658366-1954793218403016.jpg', '22.99'),
(5, 'Substitut de repas protéiné', 'Le substitut de repas protéiné est une option pratique pour un repas équilibré et riche en protéines lorsque vous êtes en déplacement ou que vous avez peu de temps pour cuisiner.', 'https://static.thcdn.com/productimg/1600/1600/11324199-2954889445905523.jpg', '29.95'),
(6, 'Smoothie petit déjeuner', 'Le smoothie petit déjeuner est un mélange de protéines et de superaliments pour un petit déjeuner nutritif et énergisant.', 'https://static.thcdn.com/productimg/1600/1600/13251950-1864964048566950.jpg', '26.50'),
(7, 'Peptide de Collagène Hydrolysé', 'Les peptides de collagène hydrolysé sont un complément de collagène de haute qualité qui peut aider à soutenir la santé de la peau, des cheveux, des ongles et des articulations.', 'https://static.thcdn.com/productimg/1600/1600/11067704-1584924200215988.jpg', '24.25'),
(8, 'Mélange de protéines végétales', 'Le mélange de protéines végétales est une option sans produits d\'origine animale, idéale pour les personnes suivant un régime végétalien ou végétarien.', 'https://static.thcdn.com/productimg/1600/1600/12449297-1324835817451914.jpg', '28.75'),
(9, 'Pastilles gélifiées protéinées', 'Les pastilles gélifiées protéinées sont une collation pratique et délicieuse qui vous apporte une dose de protéines tout en satisfaisant vos envies de sucreries.', 'https://static.thcdn.com/productimg/1600/1600/13528283-1274975517707869.jpg', '21.99'),
(10, 'Isolat de protéine de soja', 'L\'isolat de protéine de soja est une source de protéines végétales de haute qualité, sans lactose ni produits d\'origine animale, adaptée aux régimes spécifiques.', 'https://static.thcdn.com/productimg/1600/1600/10529701-1475045150428389.jpg', '23.50'),
(11, 'Clear Whey Vegan', 'Clear Whey Vegan est une version végétalienne de la protéine transparente, idéale pour les personnes suivant un régime végétalien ou végétarien.', 'https://static.thcdn.com/productimg/1600/1600/12360408-1634794080497722.png', '30.00'),
(12, 'Impact Diet Whey', 'Impact Diet Whey est une protéine conçue pour aider à la gestion du poids tout en fournissant une dose adéquate de protéines pour le maintien musculaire.', 'https://static.thcdn.com/productimg/1600/1600/10530657-1444924184327073.jpg', '29.25'),
(13, 'Impact Whey Isolate', 'Impact Whey Isolate est une protéine en poudre de haute qualité, faible en matières grasses et en glucides, idéale pour soutenir la croissance musculaire et la récupération.', 'https://static.thcdn.com/productimg/1600/1600/10530911-5884889444360331.jpg', '26.99'),
(14, 'Impact Whey Protein', 'Impact Whey Protein est une protéine en poudre polyvalente qui fournit un mélange équilibré de protéines de lactosérum de haute qualité pour aider à atteindre vos objectifs nutritionnels et sportifs.', 'https://static.thcdn.com/productimg/1600/1600/10530943-1224889444460882.jpg', '29.50'),
(15, 'Clear Whey Isolate', 'Clear Whey Isolate est une protéine transparente et rafraîchissante qui se mélange facilement dans l\'eau. Elle est idéale pour une hydratation protéinée après l\'entraînement.', 'https://static.thcdn.com/productimg/1600/1600/12081396-1994792209042321.jpg', '24.75'),
(16, 'Pack d\'échantillons de Clear Whey Isolate', 'Le pack d\'échantillons de Clear Whey Isolate vous permet de découvrir différentes saveurs de cette protéine transparente, parfaite pour varier vos goûts.', 'https://static.thcdn.com/productimg/1600/1600/12658366-1954793218403016.jpg', '22.49'),
(17, 'Substitut de repas protéiné', 'Le substitut de repas protéiné est une option pratique pour un repas équilibré et riche en protéines lorsque vous êtes en déplacement ou que vous avez peu de temps pour cuisiner.', 'https://static.thcdn.com/productimg/1600/1600/11324199-2954889445905523.jpg', '28.95'),
(18, 'Smoothie petit déjeuner', 'Le smoothie petit déjeuner est un mélange de protéines et de superaliments pour un petit déjeuner nutritif et énergisant.', 'https://static.thcdn.com/productimg/1600/1600/13251950-1864964048566950.jpg', '27.50'),
(19, 'Peptide de Collagène Hydrolysé', 'Les peptides de collagène hydrolysé sont un complément de collagène de haute qualité qui peut aider à soutenir la santé de la peau, des cheveux, des ongles et des articulations.', 'https://static.thcdn.com/productimg/1600/1600/11067704-1584924200215988.jpg', '23.25'),
(20, 'Mélange de protéines végétales', 'Le mélange de protéines végétales est une option sans produits d\'origine animale, idéale pour les personnes suivant un régime végétalien ou végétarien.', 'https://static.thcdn.com/productimg/1600/1600/12449297-1324835817451914.jpg', '27.75'),
(21, 'Pastilles gélifiées protéinées', 'Les pastilles gélifiées protéinées sont une collation pratique et délicieuse qui vous apporte une dose de protéines tout en satisfaisant vos envies de sucreries.', 'https://static.thcdn.com/productimg/1600/1600/13528283-1274975517707869.jpg', '21.99'),
(22, 'Isolat de protéine de soja', 'L\'isolat de protéine de soja est une source de protéines végétales de haute qualité, sans lactose ni produits d\'origine animale, adaptée aux régimes spécifiques.', 'https://static.thcdn.com/productimg/1600/1600/10529701-1475045150428389.jpg', '25.50'),
(23, 'Clear Whey Vegan', 'Clear Whey Vegan est une version végétalienne de la protéine transparente, idéale pour les personnes suivant un régime végétalien ou végétarien.', 'https://static.thcdn.com/productimg/1600/1600/12360408-1634794080497722.png', '28.00'),
(24, 'Impact Diet Whey', 'Impact Diet Whey est une protéine conçue pour aider à la gestion du poids tout en fournissant une dose adéquate de protéines pour le maintien musculaire.', 'https://static.thcdn.com/productimg/1600/1600/10530657-1444924184327073.jpg', '29.25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
