-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2025 at 01:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetc`
--

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_lieu_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `commentaire` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `avis`
--

INSERT INTO `avis` (`id`, `user_id`, `id_lieu_id`, `date`, `commentaire`) VALUES
(1, 1, 6, '2024-12-05', 'ddddfddf'),
(2, 1, 6, '2024-12-05', '51651'),
(3, 1, 4, '2024-12-05', 'zezed'),
(4, 1, 4, '2024-12-05', 'fvdf'),
(5, 1, 4, '2024-12-26', 'drctfvgybhjk'),
(6, 1, 6, '2025-01-06', 'un tres bon lieu de cmping'),
(7, 8, 4, '2025-01-09', 'sxss'),
(8, 8, 6, '2025-01-09', 'szsas'),
(9, 8, 6, '2025-01-09', 'dazd'),
(10, 1, 4, '2025-01-10', '5615'),
(11, 1, 11, '2025-01-10', 'c fkdjfds'),
(12, 1, 11, '2025-01-10', 'c fkdjfds');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20241114083254', '2024-11-14 09:33:10', 1394),
('DoctrineMigrations\\Version20241126114830', '2024-11-26 12:48:42', 1198),
('DoctrineMigrations\\Version20241203122847', '2024-12-03 13:28:55', 34),
('DoctrineMigrations\\Version20241203124821', '2024-12-03 13:48:24', 25),
('DoctrineMigrations\\Version20241203191223', '2024-12-03 20:12:27', 24),
('DoctrineMigrations\\Version20241203191536', '2024-12-03 20:15:40', 25),
('DoctrineMigrations\\Version20241203192641', '2024-12-03 20:26:46', 51),
('DoctrineMigrations\\Version20241203193321', '2024-12-03 20:33:36', 48),
('DoctrineMigrations\\Version20241225220446', '2024-12-25 23:04:57', 1325),
('DoctrineMigrations\\Version20250109191026', '2025-01-09 20:10:34', 27),
('DoctrineMigrations\\Version20250109194155', '2025-01-09 20:42:00', 29);

-- --------------------------------------------------------

--
-- Table structure for table `favorit`
--

CREATE TABLE `favorit` (
  `id` int(11) NOT NULL,
  `date_fav` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorit_lieucamping`
--

CREATE TABLE `favorit_lieucamping` (
  `favorit_id` int(11) NOT NULL,
  `lieucamping_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorit_user`
--

CREATE TABLE `favorit_user` (
  `favorit_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lieucamping`
--

CREATE TABLE `lieucamping` (
  `id` int(11) NOT NULL,
  `region_id_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordonner` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `places_restantes` int(11) DEFAULT NULL,
  `capacite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lieucamping`
--

INSERT INTO `lieucamping` (`id`, `region_id_id`, `nom`, `description`, `coordonner`, `photo`, `places_restantes`, `capacite`) VALUES
(4, 1, 'Zaghouan Camping Center', '<div>ssc&nbsp;</div>', '46.177940, 6.131003', '676c64308cbe2.jpg', -32, 20),
(6, 1, 'testest', '<div>sdbngbfvd</div>', '2155421', '676d23ed6dd84.jpg', 49, 100),
(11, 2, 'test', 'goirofpsfd', '89486517.29851', '67810eca3533a.jpg', -52, 2);

-- --------------------------------------------------------

--
-- Table structure for table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `nom_region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `nom_region`) VALUES
(1, 'nord'),
(2, 'Sud tunisien'),
(3, 'Nord-Est'),
(4, 'Nord-Ouest'),
(5, 'Sud-Est');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `lieu_camping_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date_d` date NOT NULL,
  `date_f` date NOT NULL,
  `nombre_personnes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `lieu_camping_id`, `user_id`, `date_d`, `date_f`, `nombre_personnes`) VALUES
(14, 6, 1, '2024-12-27', '2024-12-29', 18),
(17, 6, 1, '2024-12-05', '2024-12-14', 12),
(18, 6, 1, '2024-12-18', '2024-12-21', 14),
(19, 4, 1, '2024-12-26', '2024-12-28', 2),
(20, 4, 8, '2025-01-10', '2025-01-18', 5),
(21, 4, 9, '2025-01-17', '2025-01-25', 1),
(22, 11, 1, '2025-01-11', '2025-01-24', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_region_id` int(11) DEFAULT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_region_id`, `email`, `roles`, `password`, `nom`, `prenom`) VALUES
(1, 3, 'aymen@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$13$qP3c1h8B4bkvhQxseZALK.uzorQQmOUOZRYMVh13Vm2nZUlUVrcg.', 'aymen2', 'nasri'),
(7, 3, 'rezgui', '[]', '$2y$13$Ik35gE6ryr2klzLWJ2GnE.Pz2DZhUBtxAF3KNkgPApTx0IJgvcIkG', 'siwar', 'siwar'),
(8, 3, 'siwar@gmail.com', '[]', '$2y$13$V1KyJutQ3Uk3ehKhhncnPOGo0cLIOFABRBakCS8yZiVX5qO6o/KW6', 'siwar', 'rezgui'),
(9, 2, 'waffe@gmail.com', '[]', '$2y$13$7adGquQrB1VYH/WrNTL6IeO8jUNS/0xmxypIaciV4XHHFae34nE9y', 'wafee', 'wafee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8F91ABF0A76ED395` (`user_id`),
  ADD KEY `IDX_8F91ABF0B42FBABC` (`id_lieu_id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `favorit`
--
ALTER TABLE `favorit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorit_lieucamping`
--
ALTER TABLE `favorit_lieucamping`
  ADD PRIMARY KEY (`favorit_id`,`lieucamping_id`),
  ADD KEY `IDX_71A4D6CCCC3FBFA2` (`favorit_id`),
  ADD KEY `IDX_71A4D6CC2137592F` (`lieucamping_id`);

--
-- Indexes for table `favorit_user`
--
ALTER TABLE `favorit_user`
  ADD PRIMARY KEY (`favorit_id`,`user_id`),
  ADD KEY `IDX_23117C96CC3FBFA2` (`favorit_id`),
  ADD KEY `IDX_23117C96A76ED395` (`user_id`);

--
-- Indexes for table `lieucamping`
--
ALTER TABLE `lieucamping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F23A1A2CC7209D4F` (`region_id_id`);

--
-- Indexes for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_42C8495556A62231` (`lieu_camping_id`),
  ADD KEY `IDX_42C84955A76ED395` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  ADD KEY `IDX_8D93D6491813BD72` (`id_region_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `favorit`
--
ALTER TABLE `favorit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lieucamping`
--
ALTER TABLE `lieucamping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `FK_8F91ABF0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_8F91ABF0B42FBABC` FOREIGN KEY (`id_lieu_id`) REFERENCES `lieucamping` (`id`);

--
-- Constraints for table `favorit_lieucamping`
--
ALTER TABLE `favorit_lieucamping`
  ADD CONSTRAINT `FK_71A4D6CC2137592F` FOREIGN KEY (`lieucamping_id`) REFERENCES `lieucamping` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_71A4D6CCCC3FBFA2` FOREIGN KEY (`favorit_id`) REFERENCES `favorit` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `favorit_user`
--
ALTER TABLE `favorit_user`
  ADD CONSTRAINT `FK_23117C96A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_23117C96CC3FBFA2` FOREIGN KEY (`favorit_id`) REFERENCES `favorit` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lieucamping`
--
ALTER TABLE `lieucamping`
  ADD CONSTRAINT `FK_F23A1A2CC7209D4F` FOREIGN KEY (`region_id_id`) REFERENCES `region` (`id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_42C8495556A62231` FOREIGN KEY (`lieu_camping_id`) REFERENCES `lieucamping` (`id`),
  ADD CONSTRAINT `FK_42C84955A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D6491813BD72` FOREIGN KEY (`id_region_id`) REFERENCES `region` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
