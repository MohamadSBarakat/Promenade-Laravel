-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 01 Mai 2019 à 11:59
-- Version du serveur :  5.7.26-0ubuntu0.18.04.1
-- Version de PHP :  7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `PromoLaravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_29_071323_create_promos_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `promos`
--

CREATE TABLE `promos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieuDeDepart` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duree` int(11) NOT NULL,
  `pourFamille` tinyint(1) NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `promos`
--

INSERT INTO `promos` (`id`, `titre`, `description`, `lieuDeDepart`, `duree`, `pourFamille`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Promenade De Laussane', 'Promenade De Laussane Promenade De Laussane Promenade De Laussane Promenade De Laussane Promenade De Laussane', 'La Gare Cornavin', 3, 0, 'large.jpg', '2019-04-29 06:18:43', '2019-04-29 06:18:43'),
(2, 'Promenade De Luzern', 'Promenade De Luzern Promenade De Luzern Promenade De Luzern Promenade De Luzern Promenade De Luzern', 'La Gare Cornavin', 2, 1, 'large.jpg', '2019-04-29 06:24:43', '2019-04-29 06:24:43'),
(4, 'Promenade de Russin', '<p>Promenade de Russin</p>\r\n\r\n<p>Promenade de Russin</p>\r\n\r\n<p>Promenade de RussinPromenade de Russin</p>\r\n\r\n<p>Promenade de Russin</p>', 'La gare Cornavin', 1, 0, 'noimage.jpg', '2019-04-30 10:30:49', '2019-04-30 10:30:49'),
(5, 'Promenade de Zurick', '<p>The photo must be an image.</p>\r\n\r\n<p>The photo must be an image.</p>\r\n\r\n<p>The photo must be an image.</p>\r\n\r\n<p>The photo must be an image.</p>\r\n\r\n<p>&nbsp;</p>', 'La gare Cornavin', 3, 0, 'large_1556631886.jpg', '2019-04-30 11:44:46', '2019-04-30 11:44:46'),
(6, 'Promenade de Coppet', '<p>Promenade de Coppet</p>\r\n\r\n<p>Promenade de Coppet</p>\r\n\r\n<p>Promenade de CoppetPromenade de CoppetPromenade de Coppet</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'La gare Cornavin', 2, 0, 'europe-4149947__340_1556694005.jpg', '2019-05-01 05:00:05', '2019-05-01 05:00:05'),
(7, 'Promenade de Satigny', '<p>Promenade de Satigny Promenade de Satigny Promenade de Satigny Promenade de Satigny Promenade de Satigny</p>\r\n\r\n<p>Promenade de Satigny</p>\r\n\r\n<p>Promenade de Satigny</p>', 'La gare Cornavin', 1, 0, 'wp2777161_1556694403.jpg', '2019-05-01 05:06:43', '2019-05-01 05:06:43'),
(8, 'Promenade de Zirmatt', '<p>Promenade de Zirmatt Promenade de Zirmatt Promenade de Zirmatt Promenade de Zirmatt Promenade de Zirmatt Promenade de Zirmatt</p>', 'La gare Cornavin', 3, 0, 'matterhorn-918442__340_1556703282.jpg', '2019-05-01 07:34:42', '2019-05-01 07:34:42'),
(9, 'Promenade de Coppet', '<p>Promenade de Coppet Promenade de Coppet Promenade de Coppet</p>', 'La gare Cornavin', 2, 0, 'cervin-971230__340_1556704614.jpg', '2019-05-01 07:56:54', '2019-05-01 07:56:54');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `promos`
--
ALTER TABLE `promos`
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
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `promos`
--
ALTER TABLE `promos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
