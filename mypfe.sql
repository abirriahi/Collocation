-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 19 Mai 2017 à 21:03
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mypfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `art_nom` varchar(100) NOT NULL,
  `art_cathegorie` tinyint(1) NOT NULL,
  `art_prix` varchar(20) NOT NULL,
  `art_ville` varchar(10) NOT NULL,
  `art_validation` tinyint(1) NOT NULL,
  `art_description` longtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `month` varchar(3) NOT NULL,
  `year` varchar(4) NOT NULL,
  `image` varchar(300) NOT NULL,
  `chambres` int(11) NOT NULL,
  `espace` varchar(10) NOT NULL,
  `art_desc` varchar(160) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `art_meta` varchar(200) NOT NULL,
  `art_langtuide` varchar(50) NOT NULL,
  `art_latitude` varchar(50) NOT NULL,
  `art_address` varchar(300) NOT NULL,
  `art_type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `art_nom`, `art_cathegorie`, `art_prix`, `art_ville`, `art_validation`, `art_description`, `user_id`, `month`, `year`, `image`, `chambres`, `espace`, `art_desc`, `created_at`, `updated_at`, `art_meta`, `art_langtuide`, `art_latitude`, `art_address`, `art_type`) VALUES
(64, 'maison s+3', 1, '563', 'n-18', 1, 'Cosy studio apartment located in a tranquil street of the Parioli district, very close to parks such as Villa Borghese and the zoo. Composed of one area, the space has been distributed to make it a functional holiday home with all the necessary comforts. Ideal for two people or a small family, it has a living area with a double sofa-bed, a fully equipped open-plan kitchen and a dining table sitting four. There are also stairs that lead to the bedroom area with a double bed and spacious wardrobe. The modern services include fast Wifi internet connection, satellite TV, DVD player, Hi-Fi and MP3 player etc. The kitchen has a cooker, oven, fridge, microwave and utensils. There is also a washing machine, iron with board and hair dryer. The bathroom is composed of a shower. Choose this holiday studio for a genuine Roman home stay!', 70, '4', '2017', 'tapis-tunisien-1.jpg', 3, '', 'Cosy studio apartment located in a tranquil street of the Parioli district, very close to parks such as Villa Borghese and the zoo. ', '2017-05-03 07:30:06', '2017-04-25 01:54:49', '', '10.712912', '34.7567068', 'exemple addresse', 0),
(85, 'Studio S +4', 0, '5000', 'n-21', 1, 'Superbe villa neuve, style moderne,matériaux de luxe,très bel emplacement dans un beau quartier résidentiel ', 76, '', '', '063156333-1.jpg', 4, '250', '', '2017-05-03 07:19:03', '2017-05-03 04:31:56', '', '10.580293215344227', '35.89633208562662', 'Kantaoui, Hammam Sousse, Gouvernorat de Sousse, Tunisie', 0),
(89, 'je cherche un colocataire! ', 0, '330', 'n-16', 1, 'je cherche un colocataire pour partager un appart qui contient un salon & une chambre, meublé, chic et calme! Contactez moi en priver pour plus d\'infos! ', 76, '', '', '1023371298308679-68823.jpg', 1, '20', '', '2017-05-03 08:23:37', '2017-05-03 08:23:37', '', '10.80669655816655', '35.767211377755096', 'Monastir près de faculté de sciences ', 0),
(91, 'Je cherche 3 filles pour partager une s+2', 1, '150', 'n-21', 1, 'Une maison s+3 à Sahloul, richement meublée prés de Planet Food, chaque chambre contient deux lits ! ', 79, '', '', '', 3, '150', '', '2017-05-03 12:07:42', '2017-05-03 12:07:42', '', '10.59367480000003', '35.8348704', 'Planet Food, Avenue de Yasser Arafat, Hammam Sousse, Gouvernorat de Sousse, Tunisie', 0),
(92, 'Chambre dispo à lac 2 ', 0, '350', 'n-4', 1, 'Je cherche une femme fonctionnaire pour partager une s+2 à lac 2, l\'appartement n\'est pas meublé, mais le cartier est hyper calme.\r\nContactez moi en privé pour plus d\'infos.  350dinars la part.', 79, '', '', '141654un_appartement_meuble_satisfaisant_lac_1520132453329628771.jpg', 2, '100', '', '2017-05-03 14:17:17', '2017-05-03 12:17:17', '', '10.166747600000008', '36.7977022', 'Lac2 , tunis ', 0),
(93, '2 chambres disponibles à Nabeul Ma7rsi', 1, '210', 'n-17', 1, 'Je cherche deux fonctionnaires pour partager une maison s+3 à ma7rsi, un cartier calme et chic ! Un parking disponible, la maison contient un parking et un jardin sympa ! Prière de me contacter en privé ! ', 80, '', '', '143319DSC05646.JPG', 3, '130', '', '2017-05-03 12:33:19', '2017-05-03 12:33:19', '', '10.70246192963873', '36.43665018542001', 'Rue Sidi Mahrsi, Nabeul?, Nabeul, Tunisie', 0),
(94, 'Que pour les étudiants ', 0, '100', 'n-8', 1, 'Meublé, au centre ville ! ', 80, '', '', '144031tunis_immobilier1205211501382743.jpg', 2, '70', '', '2017-05-03 14:40:44', '2017-05-03 12:40:44', '', '8.775655599999936', '36.5072263', 'Jendouba centre ville , Gouvernorat de Jendouba, Tunisie', 0),
(106, 'Je cherche une fille! ', 0, '400', 'n-4', 1, 'la part est 400 dt, contactez moi pour plus d\'info ', 67, '', '', '162000images.jpg', 2, '60', '', '2017-05-15 14:20:00', '2017-05-15 14:20:00', '', '10.167348414819344', '36.80100113951731', 'lac 2', 0),
(107, 'un lit dispo, meublé . ', 0, '100', 'n-13', 1, 'je suis un étudiant à la recherche d\'un colo pour partager un simple appart qui contient tout ce qui est nécessaire! NB: pas d\'internet !', 67, '', '', '1622301340438430-106930.jpg', 1, '15', '', '2017-05-15 14:22:30', '2017-05-15 14:22:30', '', '11.045720999999958', '35.5024461', 'mahdia centre', 0),
(108, 'à ne pas rater', 1, '563', 'n-18', 1, 'Cosy studio apartment located in a tranquil street of the Parioli district, very close to parks such as Villa Borghese and the zoo. Composed of one area, the space has been distributed to make it a functional holiday home with all the necessary comforts. Ideal for two people or a small family, it has a living area with a double sofa-bed, a fully equipped open-plan kitchen and a dining table sitting four. There are also stairs that lead to the bedroom area with a double bed and spacious wardrobe. The modern services include fast Wifi internet connection, satellite TV, DVD player, Hi-Fi and MP3 player etc. The kitchen has a cooker, oven, fridge, microwave and utensils. There is also a washing machine, iron with board and hair dryer. The bathroom is composed of a shower. Choose this holiday studio for a genuine Roman home stay!', 70, '4', '2017', 'tapis-tunisien-1.jpg', 3, '', 'Cosy studio apartment located in a tranquil street of the Parioli district, very close to parks such as Villa Borghese and the zoo. ', '2017-05-03 07:30:06', '2017-04-25 01:54:49', '', '10.712912', '34.7567068', 'exemple addresse', 0),
(109, 'je cherche des colocataires! ', 0, '120', 'n-16', 1, 'je cherche un ou des colocataire pour partager un appart qui contient un salon & une chambre, meublé, chic et calme! Contactez moi en priver pour plus d\'infos! ', 76, '', '', '1023371298308679-68823.jpg', 1, '20', '', '2017-05-17 15:34:32', '2017-05-17 13:33:34', '', '10.80669655816655', '35.767211377755096', 'Monastir près de faculté de sciences ', 1),
(124, 'je cherche un appart à sahloul ! ', 0, '100', 'n-4', 1, 'bonsoir, je suis étudiante, 23 ans, je cherche une chambre meublé ', 67, '', '', '', 1, '20', '', '2017-05-17 21:23:25', '2017-05-17 19:23:25', '', '', '', 'Tunis Centre, Gouvernorat de Tunis, Tunisie', 1),
(125, 'dfcec', 0, '350', 'n-1', 0, 'ceeejknn', 67, '', '', '', 0, '20', '', '2017-05-18 18:52:53', '2017-05-18 18:52:53', '', '', '', 'kkkkkk', 0);

-- --------------------------------------------------------

--
-- Structure de la table `articles_images`
--

CREATE TABLE `articles_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles_images`
--

INSERT INTO `articles_images` (`id`, `path`, `article_id`, `created_at`, `updated_at`) VALUES
(7, '22321117797840_534337183403243_1613952897_o.jpg', 38, '2017-04-13 20:32:11', '2017-04-13 20:32:11'),
(8, '22321158296151.jpg', 38, '2017-04-13 20:32:11', '2017-04-13 20:32:11'),
(9, '22532017797840_534337183403243_1613952897_o.jpg', 50, '2017-04-13 20:53:20', '2017-04-13 20:53:20'),
(10, '22555317911100_535965729907055_1114416585_n.jpg', 51, '2017-04-13 20:55:53', '2017-04-13 20:55:53'),
(11, '22555358296151.jpg', 51, '2017-04-13 20:55:53', '2017-04-13 20:55:53'),
(12, '23081617498798_1362563050469895_8574053255556738997_n.jpg', 52, '2017-04-13 21:08:16', '2017-04-13 21:08:16'),
(13, '23081617555143_528077787362516_1482264855_n.jpg', 52, '2017-04-13 21:08:16', '2017-04-13 21:08:16'),
(14, '23081617797840_534337183403243_1613952897_o.jpg', 52, '2017-04-13 21:08:16', '2017-04-13 21:08:16'),
(15, '23081658296151.jpg', 52, '2017-04-13 21:08:16', '2017-04-13 21:08:16'),
(16, '0052041298308603-68820.jpg', 53, '2017-04-14 22:52:04', '2017-04-14 22:52:04'),
(17, '0052041298308624-68821.jpg', 53, '2017-04-14 22:52:04', '2017-04-14 22:52:04'),
(18, '0052041298308679-68823.jpg', 53, '2017-04-14 22:52:04', '2017-04-14 22:52:04'),
(19, '0052041298308702-68824.jpg', 53, '2017-04-14 22:52:04', '2017-04-14 22:52:04'),
(20, '0052041298312160-68825.jpg', 53, '2017-04-14 22:52:04', '2017-04-14 22:52:04'),
(21, '01023711103-2.jpg', 54, '2017-04-14 23:02:37', '2017-04-14 23:02:37'),
(22, '01023711103-3.jpg', 54, '2017-04-14 23:02:37', '2017-04-14 23:02:37'),
(23, '01023711103-4.jpg', 54, '2017-04-14 23:02:37', '2017-04-14 23:02:37'),
(24, '01023711103-5.jpg', 54, '2017-04-14 23:02:37', '2017-04-14 23:02:37'),
(25, '01094016388650_503222876514674_2048625559_o.jpg', 55, '2017-04-14 23:09:40', '2017-04-14 23:09:40'),
(26, '01094016409670_503222823181346_145415621_o.jpg', 55, '2017-04-14 23:09:40', '2017-04-14 23:09:40'),
(27, '01094016409858_503222096514752_300308310_o.jpg', 55, '2017-04-14 23:09:40', '2017-04-14 23:09:40'),
(28, '01094016466087_503222206514741_1239905245_o.jpg', 55, '2017-04-14 23:09:40', '2017-04-14 23:09:40'),
(29, '0129121298308702-68824.jpg', 56, '2017-04-14 23:29:12', '2017-04-14 23:29:12'),
(30, '0129121298312160-68825.jpg', 56, '2017-04-14 23:29:12', '2017-04-14 23:29:12'),
(31, '01335111103-3.jpg', 57, '2017-04-14 23:33:51', '2017-04-14 23:33:51'),
(32, '00155211103-4.jpg', 63, '2017-04-17 22:15:52', '2017-04-17 22:15:52'),
(33, '00155216409670_503222823181346_145415621_o.jpg', 63, '2017-04-17 22:15:52', '2017-04-17 22:15:52'),
(38, '0910371298308624-68821.jpg', 66, '2017-04-22 07:10:37', '2017-04-22 07:10:37'),
(39, '0910371298308679-68823.jpg', 66, '2017-04-22 07:10:37', '2017-04-22 07:10:37'),
(40, '0910371298308702-68824.jpg', 66, '2017-04-22 07:10:37', '2017-04-22 07:10:37'),
(41, '0910371298312160-68825.jpg', 66, '2017-04-22 07:10:37', '2017-04-22 07:10:37'),
(42, '161327img_sub_product06.jpg', 67, '2017-04-24 14:13:27', '2017-04-24 14:13:27'),
(43, '161327Tunisie2_1600_500.jpg', 67, '2017-04-24 14:13:27', '2017-04-24 14:13:27'),
(44, '161729image-gallery.jpeg', 68, '2017-04-24 14:17:29', '2017-04-24 14:17:29'),
(45, '161729IMG_0730_1_0.jpg', 68, '2017-04-24 14:17:29', '2017-04-24 14:17:29'),
(46, '161729IMG_0744.jpg', 68, '2017-04-24 14:17:29', '2017-04-24 14:17:29'),
(47, '161729img_sub_product06.jpg', 68, '2017-04-24 14:17:29', '2017-04-24 14:17:29'),
(48, '015914annonces_en_tunisie_maison_a_kelibia_500_dt_nabeul_ahaya_tn_4500133471204648134.jpg', 64, '2017-04-24 23:59:14', '2017-04-24 23:59:14'),
(49, '015915images (1).jpg', 64, '2017-04-24 23:59:15', '2017-04-24 23:59:15'),
(50, '015915images (2).jpg', 64, '2017-04-24 23:59:15', '2017-04-24 23:59:15'),
(51, '015915images.jpg', 64, '2017-04-24 23:59:15', '2017-04-24 23:59:15'),
(52, '015915tapis-tunisien-1.jpg', 64, '2017-04-24 23:59:15', '2017-04-24 23:59:15'),
(53, '020350annonces_en_tunisie_maison_a_kelibia_500_dt_nabeul_ahaya_tn_4500133471204648134.jpg', 59, '2017-04-25 00:03:50', '2017-04-25 00:03:50'),
(54, '061922gite cuisinesalon.JPG', 69, '2017-04-25 04:19:22', '2017-04-25 04:19:22'),
(55, '061922images (4).jpg', 69, '2017-04-25 04:19:22', '2017-04-25 04:19:22'),
(56, '061922images (3).jpg', 69, '2017-04-25 04:19:22', '2017-04-25 04:19:22'),
(57, '062633Nouveau document texte.txt', 70, '2017-04-25 04:26:33', '2017-04-25 04:26:33'),
(58, '062801annonces_en_tunisie_maison_a_kelibia_500_dt_nabeul_ahaya_tn_4500133471204648134.jpg', 71, '2017-04-25 04:28:01', '2017-04-25 04:28:01'),
(59, '062801tunis_immobilier1205211501382743.jpg', 71, '2017-04-25 04:28:01', '2017-04-25 04:28:01'),
(60, '23390317884614_1904781989754276_8246816685849039153_n.jpg', 72, '2017-04-26 21:39:03', '2017-04-26 21:39:03'),
(61, '23430517884614_1904781989754276_8246816685849039153_n.jpg', 73, '2017-04-26 21:43:05', '2017-04-26 21:43:05'),
(62, '2356431298308603-68820.jpg', 79, '2017-04-26 21:56:44', '2017-04-26 21:56:44'),
(63, '2356441298308624-68821.jpg', 79, '2017-04-26 21:56:44', '2017-04-26 21:56:44'),
(64, '2356441298308679-68823.jpg', 79, '2017-04-26 21:56:44', '2017-04-26 21:56:44'),
(65, '2356441298308702-68824.jpg', 79, '2017-04-26 21:56:44', '2017-04-26 21:56:44'),
(66, '0034391298308603-68820.jpg', 80, '2017-04-26 22:34:39', '2017-04-26 22:34:39'),
(67, '0034391298308624-68821.jpg', 80, '2017-04-26 22:34:39', '2017-04-26 22:34:39'),
(68, '0034391298308679-68823.jpg', 80, '2017-04-26 22:34:39', '2017-04-26 22:34:39'),
(69, '0034391298308702-68824.jpg', 80, '2017-04-26 22:34:39', '2017-04-26 22:34:39'),
(70, '0106441298308702-68824.jpg', 81, '2017-04-26 23:06:44', '2017-04-26 23:06:44'),
(71, '062802images (4).jpg', 84, '2017-05-03 04:28:02', '2017-05-03 04:28:02'),
(72, '062802images.jpg', 84, '2017-05-03 04:28:02', '2017-05-03 04:28:02'),
(73, '063156333-1.jpg', 85, '2017-05-03 04:31:56', '2017-05-03 04:31:56'),
(74, '1023371298312160-68825.jpg', 89, '2017-05-03 08:23:37', '2017-05-03 08:23:37'),
(75, '1023371298308702-68824.jpg', 89, '2017-05-03 08:23:37', '2017-05-03 08:23:37'),
(76, '1023371298308679-68823.jpg', 89, '2017-05-03 08:23:37', '2017-05-03 08:23:37'),
(77, '10310311103-5.jpg', 90, '2017-05-03 08:31:03', '2017-05-03 08:31:03'),
(78, '10310316388650_503222876514674_2048625559_o.jpg', 90, '2017-05-03 08:31:03', '2017-05-03 08:31:03'),
(79, '10310316409670_503222823181346_145415621_o.jpg', 90, '2017-05-03 08:31:03', '2017-05-03 08:31:03'),
(80, '140742images (1).jpg', 91, '2017-05-03 12:07:42', '2017-05-03 12:07:42'),
(81, '140742images (2).jpg', 91, '2017-05-03 12:07:42', '2017-05-03 12:07:42'),
(82, '140742tapis-tunisien-1.jpg', 91, '2017-05-03 12:07:42', '2017-05-03 12:07:42'),
(83, '141654DSC05646.JPG', 92, '2017-05-03 12:16:54', '2017-05-03 12:16:54'),
(84, '141654gite cuisinesalon.JPG', 92, '2017-05-03 12:16:54', '2017-05-03 12:16:54'),
(85, '141654image-4.jpg', 92, '2017-05-03 12:16:54', '2017-05-03 12:16:54'),
(86, '141654un_appartement_meuble_satisfaisant_lac_1520132453329628771.jpg', 92, '2017-05-03 12:16:54', '2017-05-03 12:16:54'),
(87, '14331911103-5.jpg', 93, '2017-05-03 12:33:19', '2017-05-03 12:33:19'),
(88, '143319annonces_en_tunisie_maison_a_kelibia_500_dt_nabeul_ahaya_tn_4500133471204648134.jpg', 93, '2017-05-03 12:33:19', '2017-05-03 12:33:19'),
(89, '143319DSC05646.JPG', 93, '2017-05-03 12:33:19', '2017-05-03 12:33:19'),
(90, '14403116388650_503222876514674_2048625559_o.jpg', 94, '2017-05-03 12:40:31', '2017-05-03 12:40:31'),
(91, '14403116466087_503222206514741_1239905245_o.jpg', 94, '2017-05-03 12:40:31', '2017-05-03 12:40:31'),
(92, '1534372072775-1442716238785-y (1).jpg', 97, '2017-05-05 13:34:37', '2017-05-05 13:34:37'),
(93, '16133914889170242014-07-10 16.18.53.jpg', 104, '2017-05-15 14:13:39', '2017-05-15 14:13:39'),
(94, '16133914889170242014-07-10 16.20.33.jpg', 104, '2017-05-15 14:13:39', '2017-05-15 14:13:39'),
(95, '16133914889170242014-07-10 16.22.41.jpg', 104, '2017-05-15 14:13:39', '2017-05-15 14:13:39'),
(96, '16133914889170242014-07-10 16.23.21.jpg', 104, '2017-05-15 14:13:39', '2017-05-15 14:13:39'),
(97, '1617401394052_5.jpg', 105, '2017-05-15 14:17:40', '2017-05-15 14:17:40'),
(98, '1617401394052_4.jpg', 105, '2017-05-15 14:17:40', '2017-05-15 14:17:40'),
(99, '1617401394052_3.jpg', 105, '2017-05-15 14:17:40', '2017-05-15 14:17:40'),
(100, '1617401394052_2.jpg', 105, '2017-05-15 14:17:40', '2017-05-15 14:17:40'),
(101, '1617401394052_1.jpg', 105, '2017-05-15 14:17:40', '2017-05-15 14:17:40'),
(102, '162000images.jpg', 106, '2017-05-15 14:20:00', '2017-05-15 14:20:00'),
(103, '162000107074041151e9de468ebf63.13052701_1920.jpg', 106, '2017-05-15 14:20:00', '2017-05-15 14:20:00'),
(104, '1622301340438430-106930.jpg', 107, '2017-05-15 14:22:30', '2017-05-15 14:22:30'),
(105, '135545éééé.jpg', 116, '2017-05-17 11:55:46', '2017-05-17 11:55:46');

-- --------------------------------------------------------

--
-- Structure de la table `articles_sim`
--

CREATE TABLE `articles_sim` (
  `Offre_user` int(11) NOT NULL,
  `Demande_user` int(11) NOT NULL,
  `Offre_id` int(11) NOT NULL,
  `Demande_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `bu`
--

CREATE TABLE `bu` (
  `id` int(11) NOT NULL,
  `bu_name` varchar(100) NOT NULL,
  `bu_price` varchar(20) NOT NULL,
  `bu_square` varchar(10) NOT NULL,
  `bu_small_desc` varchar(255) NOT NULL,
  `bu_large_desc` longtext NOT NULL,
  `bu_langtuide` varchar(50) NOT NULL,
  `bu_latitude` varchar(50) NOT NULL,
  `bu_place` varchar(10) NOT NULL,
  `bu_rooms` int(11) NOT NULL,
  `bu_status` tinyint(4) NOT NULL,
  `bu_type` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `bu`
--

INSERT INTO `bu` (`id`, `bu_name`, `bu_price`, `bu_square`, `bu_small_desc`, `bu_large_desc`, `bu_langtuide`, `bu_latitude`, `bu_place`, `bu_rooms`, `bu_status`, `bu_type`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'studio', '500', '1000', 'jdiuuiziu', 'jdiuizuzièrèzrèrz', '', '', 'n-1', 3, 0, 2, 1, '2017-04-04 17:41:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_subject` varchar(50) NOT NULL,
  `contact_message` text NOT NULL,
  `view` tinyint(4) NOT NULL,
  `contact_type` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`, `view`, `contact_type`, `created_at`, `updated_at`) VALUES
(5, 'mariam', 'ghalleb.meriem@gmail.com', '', 'ooo', 1, 1, '2017-04-21 03:32:09', '2017-04-21 01:32:09'),
(17, 'meriem ', 'mariem.ghalleb@gmail.com', '', 'salut', 1, 1, '2017-04-25 04:29:20', '2017-04-25 02:29:20'),
(18, 'Contactez nous', 'mariem.ghalleb@gmail.com', '', 'Contactez nous\r\n', 1, 3, '2017-04-25 04:41:33', '2017-04-25 02:41:33'),
(19, 'mariam', 'mariem.ghalleb@gmail.com', '', 'var geocoder;\r\nvar map;\r\nfunction initialize() {\r\n  geocoder = new google.maps.Geocoder();\r\n  var latlng = new google.maps.LatLng(-34.397, 150.644);\r\n  var mapOptions = {\r\n    zoom: 8,\r\n    center: latlng\r\n  }\r\n  map = new google.maps.Map(document.getElementById(\'map-canvas\'), mapOptions);\r\n}\r\n\r\nfunction codeAddress() {\r\n  var address = document.getElementById(\'address\').value;\r\n  geocoder.geocode( { \'address\': address}, function(results, status) {\r\n    if (status == google.maps.GeocoderStatus.OK) {\r\n      map.setCenter(results[0].geometry.location);\r\n      var marker = new google.maps.Marker({\r\n          map: map,\r\n          position: results[0].geometry.location\r\n      });\r\n    } else {\r\n      alert(\'Geocode was not successful for the following reason: \' + status);\r\n    }\r\n  });\r\n}\r\n\r\ngoogle.maps.event.addDomListener(window, \'load\', initialize);', 1, 1, '2017-04-25 04:42:50', '2017-04-25 02:42:50'),
(20, 'ANNONCEUR2', 'mariem.ghalleb@gmail.com', '', 'J\'arrive pas à trouver mes annonces! urgent ! ', 1, 2, '2017-04-25 06:01:20', '2017-04-25 04:01:20'),
(21, 'mariam', 'meriem08@hotmail.fr', '', 'Contactez nous', 1, 1, '2017-04-25 06:02:12', '2017-04-25 04:02:12'),
(22, 'meriem', 'meriem08@hotmail.fr', '', 'ceci est un test 1 ', 1, 1, '2017-04-25 08:44:31', '2017-04-25 06:44:31'),
(23, 'mariam', 'admin8@gmail.com', '', 'https://www.facebook.com/events/199861327187362/', 1, 5, '2017-05-03 10:15:10', '2017-05-03 08:15:10');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `emetteur` int(11) NOT NULL,
  `contenu` longtext NOT NULL,
  `recepteur` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `emetteur`, `contenu`, `recepteur`, `created_at`, `updated_at`) VALUES
(26, 70, 'aaaaa', 64, '2017-04-18 13:31:35', '2017-04-18 13:31:35'),
(27, 64, 'aaaaaaa', 70, '2017-04-18 13:32:20', '2017-04-18 13:32:20'),
(28, 64, 'aaa', 70, '2017-04-18 13:32:29', '2017-04-18 13:32:29'),
(29, 64, 'aaa', 70, '2017-04-18 13:32:36', '2017-04-18 13:32:36'),
(30, 70, 'aa', 70, '2017-04-18 13:32:51', '2017-04-18 13:32:51'),
(31, 70, 'aaaa', 70, '2017-04-18 13:32:58', '2017-04-18 13:32:58'),
(32, 55, 'this is a message test ! ', 64, '2017-04-18 18:27:26', '2017-04-18 18:27:26'),
(33, 63, 'lol', 72, '2017-04-24 04:11:47', '2017-04-24 02:11:05'),
(34, 72, ':) ok', 63, '2017-04-24 02:12:03', '2017-04-24 02:12:03'),
(35, 73, 'aaaaa', 63, '2017-04-25 06:35:29', '2017-04-25 06:35:29'),
(36, 63, 'test message', 73, '2017-04-25 08:36:09', '2017-04-25 06:35:49'),
(37, 76, 'salut ! ', 67, '2017-05-03 06:36:02', '2017-05-03 06:36:02'),
(38, 76, 'zzzzzzzz', 60, '2017-05-03 07:27:50', '2017-05-03 07:27:50'),
(39, 76, 'aa', 76, '2017-05-03 07:29:11', '2017-05-03 07:29:11'),
(40, 76, 'aaaaaa', 76, '2017-05-03 07:34:43', '2017-05-03 07:34:43'),
(41, 76, 'panel', 76, '2017-05-03 07:38:28', '2017-05-03 07:38:28'),
(42, 76, '    @endif', 60, '2017-05-03 07:51:37', '2017-05-03 07:51:37'),
(43, 76, 'mesAnnonces', 70, '2017-05-03 08:05:09', '2017-05-03 08:05:09'),
(44, 78, 'Tunis Centre, Gouvernorat de Tunis, Tunisie', 70, '2017-05-03 08:31:39', '2017-05-03 08:31:39'),
(45, 80, 'Votre message à meri.gh@gmail.com\r\n', 79, '2017-05-03 12:44:42', '2017-05-03 12:44:42'),
(46, 67, 'meri ', 80, '2017-05-05 08:15:41', '2017-05-05 08:15:41'),
(47, 67, 'hjknk', 79, '2017-05-10 16:26:11', '2017-05-10 16:26:11'),
(48, 67, 'cc', 76, '2017-05-16 12:58:05', '2017-05-16 12:58:05'),
(49, 67, 'test ', 78, '2017-05-16 12:59:03', '2017-05-16 12:59:03'),
(50, 67, 'rtu(yu', 78, '2017-05-16 13:07:19', '2017-05-16 13:07:19'),
(51, 67, 'aa', 78, '2017-05-16 16:18:17', '2017-05-16 16:18:17');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mariem@gmail.com', '6dad0e4536639aaffe9e99a89c0207b675b82aeecdf8412a53a9fedda5d14ab0', '2017-04-24 02:44:38'),
('superadmin@gmail.com', 'b51eb674ba1bc3b8239ac77192974b59f85d3e5b2d0b32d94feb005051a7a686', '2017-05-03 17:43:02');

-- --------------------------------------------------------

--
-- Structure de la table `sitesetting`
--

CREATE TABLE `sitesetting` (
  `id` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `namesetting` varchar(50) NOT NULL,
  `value` text NOT NULL,
  `type` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `sitesetting`
--

INSERT INTO `sitesetting` (`id`, `slug`, `namesetting`, `value`, `type`, `created_at`, `updated_at`) VALUES
(14, 'nom de site', 'sitename', 'coloc.tn', 0, '2017-05-12 17:44:50', '2017-05-12 15:44:50'),
(17, 'mobile', 'mobile', '+216 26980594', 0, '2017-04-12 00:11:13', '0000-00-00 00:00:00'),
(18, 'facebook', 'facebook', 'https://www.facebook.com/meriGaming/', 0, '2017-04-12 01:47:49', '2017-04-11 23:47:49'),
(19, 'twitter', 'twitter', 'https://twitter.com/MariamGhalleb', 0, '2017-04-12 01:49:01', '2017-04-11 23:49:01'),
(20, 'youtube', 'youtube', 'https://www.youtube.com/channel/UCF524zDjl3zWW8IdKXUj65g', 0, '2017-04-12 01:47:49', '2017-04-11 23:47:49'),
(21, 'adresse', 'address', '', 0, '2017-04-12 00:41:39', '0000-00-00 00:00:00'),
(22, 'les mots clés', 'keywords', '', 1, '2017-04-12 00:43:10', '0000-00-00 00:00:00'),
(23, 'Description', 'description', '', 1, '2017-04-12 00:43:23', '0000-00-00 00:00:00'),
(24, 'Linkedin', 'linkedin', 'https://www.linkedin.com/in/mariamghalleb/', 0, '2017-04-12 01:47:49', '2017-04-11 23:47:49'),
(25, 'Default image', 'no_image', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlQ1vYm4nfFz_nMWcn0LGJbbf94Fjhh96VtZqxxbqy08OsJQnKIg', 0, '2017-05-15 16:24:52', '2017-05-15 14:24:52'),
(26, 'background welcome page', 'main_slider', 'aaa.jpg', 3, '2017-05-12 18:02:44', '2017-05-12 16:02:44');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(66, 'SuperAdmin', 'superadmin@gmail.com', '$2y$10$YOgPuYLnwOXMlP348sBteO4fGn5Om7Pg/rBJu29m/T54DaSBqJCpa', NULL, '2017-04-14 22:38:12', '2017-04-14 22:38:12', 1),
(67, 'mariam ghalleb', 'ghalleb.meriem@gmail.com', '$2y$10$HLuLRS4JiialrQU3xAWqR.8DGLPJFfSeJRTN1JrbVOlNBPmQQtJ.q', 'm6xVHv4UBwVbyoY77QIzCTYaliQfkpIpshXBBcoXJWJBQs651EppqgrENWML', '2017-04-14 22:42:30', '2017-05-16 17:53:29', 1),
(75, 'meri', 'meri.gh@gmail.com', '$2y$10$WCINftLD4dXHDI/qeND0EekoRvHvyJ9ePbpCG3V2UEKPsPIysrrfK', NULL, '2017-04-25 20:50:10', '2017-05-18 19:07:32', 0),
(76, 'mariam ghalleb', 'admin8@gmail.com', '$2y$10$Tlry/smVVWg6bkqRUn8lFemahdKgqLt1HXjsVPmH4X.JxG0zzJa4.', 'Phfj9AvwTrATwJT0rfFUmUN6o9jyTA6iF4dzORqWGhRK7lA95AIhQgJxo9QP', '2017-04-26 01:11:15', '2017-05-03 18:19:21', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `articles_images`
--
ALTER TABLE `articles_images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bu`
--
ALTER TABLE `bu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Index pour la table `sitesetting`
--
ALTER TABLE `sitesetting`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT pour la table `articles_images`
--
ALTER TABLE `articles_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT pour la table `bu`
--
ALTER TABLE `bu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT pour la table `sitesetting`
--
ALTER TABLE `sitesetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
