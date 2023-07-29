INSERT INTO `amenagements` (`id`, `dateAme`, `Qtier`, `descriptionAmen`, `type`, `deleted_at`, `created_at`, `updated_at`, `habitant_id`) VALUES
(4, '2023-07-18', 'duekoue', 'gdbrtey', 0, NULL, '2023-07-29 07:17:58', '2023-07-29 08:11:06', 7),
(5, '2023-07-18', 'duekoue', 'ftyguiojk', 1, NULL, '2023-07-29 08:00:58', '2023-07-29 08:00:58', 8);



INSERT INTO `habitants` (`id`, `nomHabi`, `prenHabi`, `dateNHabi`, `lieuNHabi`, `sexeHabi`, `telHabi`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 'GUEY', 'CHRISTIAN NOEL', '2012-12-12', 'ABIDJAN', 'M', '08108641', 'public/images/KhChRd22iWgoN4bpx7lajaXVKD9ehl2nv1mWr8RC.png', NULL, '2023-07-28 21:01:38', '2023-07-28 21:01:38'),
(8, 'ACHI', 'ACHAZ', '2012-12-12', 'ABIDJAN', 'M', '08108641', 'public/images/miy376FIAnE8TTWEvOcAIAmwwupxCO9cJ6H0Qf69.jpg', NULL, '2023-07-28 21:01:56', '2023-07-28 21:01:56');

-- --------------------------------------------------------

--

INSERT INTO `metiers` (`id`, `nomMtie`, `typeMtie`, `statutMtie`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'tguj', 'ku,t', ',kuy', NULL, '2023-07-28 17:36:26', '2023-07-28 17:36:26');

-- --------------------------------------------------------



--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3);


--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', NULL, NULL, '2023-07-21 18:02:35', '2023-07-21 18:02:35'),
(2, 'role-create', 'web', NULL, NULL, '2023-07-21 18:02:35', '2023-07-21 18:02:35'),
(3, 'role-edit', 'web', NULL, NULL, '2023-07-21 18:02:35', '2023-07-21 18:02:35'),
(4, 'role-delete', 'web', NULL, NULL, '2023-07-21 18:02:35', '2023-07-21 18:02:35'),
(5, 'product-list', 'web', NULL, NULL, '2023-07-21 18:02:35', '2023-07-21 18:02:35'),
(6, 'product-create', 'web', NULL, NULL, '2023-07-21 18:02:35', '2023-07-21 18:02:35'),
(7, 'product-edit', 'web', NULL, NULL, '2023-07-21 18:02:35', '2023-07-21 18:02:35'),
(8, 'product-delete', 'web', NULL, NULL, '2023-07-21 18:02:35', '2023-07-21 18:02:35'),
(9, 'liste', 'web', 'tous', NULL, '2023-07-22 08:44:26', '2023-07-22 08:45:25'),
(10, 'creer', 'web', 'tous', NULL, '2023-07-22 08:44:44', '2023-07-22 08:44:44'),
(11, 'supprimer', 'web', 'tous', NULL, '2023-07-22 08:44:58', '2023-07-22 08:44:58'),
(12, 'modifier', 'web', 'tous', NULL, '2023-07-22 08:45:09', '2023-07-22 08:45:09'),
(13, 'GUEY', 'web', 'habitant', '2023-07-24 16:02:25', '2023-07-24 16:02:19', '2023-07-24 16:02:25'),
(15, 'GUEY ACHIM', 'web', 'habitant', '2023-07-26 15:38:06', '2023-07-26 15:38:00', '2023-07-26 15:38:06');

-- --------------------------------------------------------

--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2023-07-21 18:02:43', '2023-07-21 18:02:43'),
(2, 'Super Admin', 'web', '2023-07-22 08:53:45', '2023-07-22 08:53:45');

-- --------------------------------------------------------

--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2);*

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`, `last_seen`) VALUES
(1, 'Hardik Savani', 'admin@gmail.com', NULL, '$2y$10$1kym/bVcGJSNzvlahvvTyemoqz9JB05pBj21gEE2uQ2w3HT1BwCN.', 1, NULL, '2023-07-21 18:02:43', '2023-07-29 13:38:06', '2023-07-29 13:38:06'),
(2, 'ADMIN', 'christian.guey@uvci.edu.ci', NULL, '$2y$10$TA2nRN2Kn4oKHEZQSNmPJO7Sd6HD9JyuAuBMR4j3iRmflEJVfWVA6', 1, NULL, '2023-07-24 10:50:38', '2023-07-28 17:45:19', NULL),
(3, 'GUEY', 'admin@admin.com', NULL, '$2y$10$clxqhvcBxNvG0h1cFNopK.hrpxMXmfIPuqzt.9BzSnulKSi8ZLWua', 1, NULL, '2023-07-26 13:20:44', '2023-07-26 13:20:44', NULL);
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 29 juil. 2023 à 15:48
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
-- Base de données : `laravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

DROP TABLE IF EXISTS `activites`;
CREATE TABLE IF NOT EXISTS `activites` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomActi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeActi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
CREATE TABLE IF NOT EXISTS `actualites` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeActu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statutActu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `amenagements`
--

DROP TABLE IF EXISTS `amenagements`;
CREATE TABLE IF NOT EXISTS `amenagements` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `dateAme` date NOT NULL,
  `Qtier` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionAmen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `habitant_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `amenagements_habitant_id_foreign` (`habitant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `amenagements`
--

INSERT INTO `amenagements` (`id`, `dateAme`, `Qtier`, `descriptionAmen`, `type`, `deleted_at`, `created_at`, `updated_at`, `habitant_id`) VALUES
(4, '2023-07-18', 'duekoue', 'gdbrtey', 0, NULL, '2023-07-29 07:17:58', '2023-07-29 08:11:06', 7),
(5, '2023-07-18', 'duekoue', 'ftyguiojk', 1, NULL, '2023-07-29 08:00:58', '2023-07-29 08:00:58', 8);

-- --------------------------------------------------------

--
-- Structure de la table `centre_interets`
--

DROP TABLE IF EXISTS `centre_interets`;
CREATE TABLE IF NOT EXISTS `centre_interets` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idHom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeCeIn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `habitant_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `centre_interets_habitant_id_foreign` (`habitant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `centre_santes`
--

DROP TABLE IF EXISTS `centre_santes`;
CREATE TABLE IF NOT EXISTS `centre_santes` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeCent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statutCent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `deces`
--

DROP TABLE IF EXISTS `deces`;
CREATE TABLE IF NOT EXISTS `deces` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `deces_date` date NOT NULL,
  `deces_cause` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `habitant_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `deces_habitant_id_foreign` (`habitant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_emplois`
--

DROP TABLE IF EXISTS `demande_emplois`;
CREATE TABLE IF NOT EXISTS `demande_emplois` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `descriptionDman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvDman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateDman` date NOT NULL,
  `statutDman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `habitant_id` bigint UNSIGNED NOT NULL,
  `offre_emploi_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `demande_emplois_habitant_id_foreign` (`habitant_id`),
  KEY `demande_emplois_offre_emploi_id_foreign` (`offre_emploi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demenagements`
--

DROP TABLE IF EXISTS `demenagements`;
CREATE TABLE IF NOT EXISTS `demenagements` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `dateDme` date NOT NULL,
  `nouveauQtier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `habitant_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `demenagements_habitant_id_foreign` (`habitant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `divoces`
--

DROP TABLE IF EXISTS `divoces`;
CREATE TABLE IF NOT EXISTS `divoces` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `divoces_date` date NOT NULL,
  `divoces_lieu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `homme_id` bigint UNSIGNED NOT NULL,
  `femme_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `divoces_homme_id_foreign` (`homme_id`),
  KEY `divoces_femme_id_foreign` (`femme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `habitants`
--

DROP TABLE IF EXISTS `habitants`;
CREATE TABLE IF NOT EXISTS `habitants` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomHabi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenHabi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateNHabi` date NOT NULL,
  `lieuNHabi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexeHabi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telHabi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `habitants`
--

INSERT INTO `habitants` (`id`, `nomHabi`, `prenHabi`, `dateNHabi`, `lieuNHabi`, `sexeHabi`, `telHabi`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 'GUEY', 'CHRISTIAN NOEL', '2012-12-12', 'ABIDJAN', 'M', '08108641', 'public/images/KhChRd22iWgoN4bpx7lajaXVKD9ehl2nv1mWr8RC.png', NULL, '2023-07-28 21:01:38', '2023-07-28 21:01:38'),
(8, 'ACHI', 'ACHAZ', '2012-12-12', 'ABIDJAN', 'M', '08108641', 'public/images/miy376FIAnE8TTWEvOcAIAmwwupxCO9cJ6H0Qf69.jpg', NULL, '2023-07-28 21:01:56', '2023-07-28 21:01:56');

-- --------------------------------------------------------

--
-- Structure de la table `mariages`
--

DROP TABLE IF EXISTS `mariages`;
CREATE TABLE IF NOT EXISTS `mariages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `mariage_date` date NOT NULL,
  `mariage_lieu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `homme_id` bigint UNSIGNED NOT NULL,
  `femme_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mariages_homme_id_foreign` (`homme_id`),
  KEY `mariages_femme_id_foreign` (`femme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `metiers`
--

DROP TABLE IF EXISTS `metiers`;
CREATE TABLE IF NOT EXISTS `metiers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomMtie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeMtie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statutMtie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `metiers`
--

INSERT INTO `metiers` (`id`, `nomMtie`, `typeMtie`, `statutMtie`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'tguj', 'ku,t', ',kuy', NULL, '2023-07-28 17:36:26', '2023-07-28 17:36:26');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_15_160421_create_habitants_table', 1),
(6, '2023_07_15_160943_create_actualites_table', 1),
(7, '2023_07_15_161604_create_permission_tables', 1),
(8, '2023_07_15_170003_create_hommes_table', 1),
(9, '2023_07_15_170004_create_femmes_table', 1),
(10, '2023_07_16_125612_create_centre_interets_table', 1),
(11, '2023_07_16_130213_create_metiers_table', 1),
(12, '2023_07_16_131615_create_ref_metiers_table', 1),
(13, '2023_07_16_132229_create_activites_table', 1),
(14, '2023_07_16_132443_create_centre_santes_table', 1),
(15, '2023_07_16_132721_create_pharmacies_table', 1),
(16, '2023_07_16_133155_create_naissances_table', 1),
(17, '2023_07_16_155243_create_mariages_table', 1),
(18, '2023_07_16_160353_create_divoces_table', 1),
(19, '2023_07_16_160925_create_deces_table', 1),
(20, '2023_07_16_161126_create_amenagements_table', 1),
(21, '2023_07_16_161313_create_demenagements_table', 1),
(22, '2023_07_16_161502_create_offre_emplois_table', 1),
(23, '2023_07_16_162221_create_demande_emplois_table', 1),
(24, '2023_07_20_225706_add_last_seen_to_users_table', 1),
(28, '2023_07_26_154106_create_products_table', 2),
(29, '2023_07_29_120339_create_naissances_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Structure de la table `naissances`
--

DROP TABLE IF EXISTS `naissances`;
CREATE TABLE IF NOT EXISTS `naissances` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_nais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenoms_nais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateNaissance_nais` date NOT NULL,
  `lieuNaissance_nais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode_nais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieuHabitation_nais` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statutChef` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `homme_id` bigint UNSIGNED NOT NULL,
  `femme_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `naissances_homme_id_foreign` (`homme_id`),
  KEY `naissances_femme_id_foreign` (`femme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `offre_emplois`
--

DROP TABLE IF EXISTS `offre_emplois`;
CREATE TABLE IF NOT EXISTS `offre_emplois` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `descriptionOfr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateDebutOfr` date NOT NULL,
  `dateFinOfr` date NOT NULL,
  `entrepriseOfr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statutOfr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', NULL, NULL, '2023-07-21 18:02:35', '2023-07-21 18:02:35'),
(2, 'role-create', 'web', NULL, NULL, '2023-07-21 18:02:35', '2023-07-21 18:02:35'),
(3, 'role-edit', 'web', NULL, NULL, '2023-07-21 18:02:35', '2023-07-21 18:02:35'),
(4, 'role-delete', 'web', NULL, NULL, '2023-07-21 18:02:35', '2023-07-21 18:02:35'),
(5, 'product-list', 'web', NULL, NULL, '2023-07-21 18:02:35', '2023-07-21 18:02:35'),
(6, 'product-create', 'web', NULL, NULL, '2023-07-21 18:02:35', '2023-07-21 18:02:35'),
(7, 'product-edit', 'web', NULL, NULL, '2023-07-21 18:02:35', '2023-07-21 18:02:35'),
(8, 'product-delete', 'web', NULL, NULL, '2023-07-21 18:02:35', '2023-07-21 18:02:35'),
(9, 'liste', 'web', 'tous', NULL, '2023-07-22 08:44:26', '2023-07-22 08:45:25'),
(10, 'creer', 'web', 'tous', NULL, '2023-07-22 08:44:44', '2023-07-22 08:44:44'),
(11, 'supprimer', 'web', 'tous', NULL, '2023-07-22 08:44:58', '2023-07-22 08:44:58'),
(12, 'modifier', 'web', 'tous', NULL, '2023-07-22 08:45:09', '2023-07-22 08:45:09'),
(13, 'GUEY', 'web', 'habitant', '2023-07-24 16:02:25', '2023-07-24 16:02:19', '2023-07-24 16:02:25'),
(15, 'GUEY ACHIM', 'web', 'habitant', '2023-07-26 15:38:06', '2023-07-26 15:38:00', '2023-07-26 15:38:06');

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pharmacies`
--

DROP TABLE IF EXISTS `pharmacies`;
CREATE TABLE IF NOT EXISTS `pharmacies` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `typePhar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statutPhar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gardePhar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ref_metiers`
--

DROP TABLE IF EXISTS `ref_metiers`;
CREATE TABLE IF NOT EXISTS `ref_metiers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `metier_id` bigint UNSIGNED NOT NULL,
  `habitant_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ref_metiers_metier_id_foreign` (`metier_id`),
  KEY `ref_metiers_habitant_id_foreign` (`habitant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2023-07-21 18:02:43', '2023-07-21 18:02:43'),
(2, 'Super Admin', 'web', '2023-07-22 08:53:45', '2023-07-22 08:53:45');

-- --------------------------------------------------------

--
-- Structure de la table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`, `last_seen`) VALUES
(1, 'Hardik Savani', 'admin@gmail.com', NULL, '$2y$10$1kym/bVcGJSNzvlahvvTyemoqz9JB05pBj21gEE2uQ2w3HT1BwCN.', 1, NULL, '2023-07-21 18:02:43', '2023-07-29 13:38:06', '2023-07-29 13:38:06'),
(2, 'ADMIN', 'christian.guey@uvci.edu.ci', NULL, '$2y$10$TA2nRN2Kn4oKHEZQSNmPJO7Sd6HD9JyuAuBMR4j3iRmflEJVfWVA6', 1, NULL, '2023-07-24 10:50:38', '2023-07-28 17:45:19', NULL),
(3, 'GUEY', 'admin@admin.com', NULL, '$2y$10$clxqhvcBxNvG0h1cFNopK.hrpxMXmfIPuqzt.9BzSnulKSi8ZLWua', 1, NULL, '2023-07-26 13:20:44', '2023-07-26 13:20:44', NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `amenagements`
--
ALTER TABLE `amenagements`
  ADD CONSTRAINT `amenagements_habitant_id_foreign` FOREIGN KEY (`habitant_id`) REFERENCES `habitants` (`id`);

--
-- Contraintes pour la table `centre_interets`
--
ALTER TABLE `centre_interets`
  ADD CONSTRAINT `centre_interets_habitant_id_foreign` FOREIGN KEY (`habitant_id`) REFERENCES `habitants` (`id`);

--
-- Contraintes pour la table `deces`
--
ALTER TABLE `deces`
  ADD CONSTRAINT `deces_habitant_id_foreign` FOREIGN KEY (`habitant_id`) REFERENCES `habitants` (`id`);

--
-- Contraintes pour la table `demande_emplois`
--
ALTER TABLE `demande_emplois`
  ADD CONSTRAINT `demande_emplois_habitant_id_foreign` FOREIGN KEY (`habitant_id`) REFERENCES `habitants` (`id`),
  ADD CONSTRAINT `demande_emplois_offre_emploi_id_foreign` FOREIGN KEY (`offre_emploi_id`) REFERENCES `offre_emplois` (`id`);

--
-- Contraintes pour la table `demenagements`
--
ALTER TABLE `demenagements`
  ADD CONSTRAINT `demenagements_habitant_id_foreign` FOREIGN KEY (`habitant_id`) REFERENCES `habitants` (`id`);

--
-- Contraintes pour la table `divoces`
--
ALTER TABLE `divoces`
  ADD CONSTRAINT `divoces_femme_id_foreign` FOREIGN KEY (`femme_id`) REFERENCES `femmes` (`id`),
  ADD CONSTRAINT `divoces_homme_id_foreign` FOREIGN KEY (`homme_id`) REFERENCES `hommes` (`id`);

--
-- Contraintes pour la table `mariages`
--
ALTER TABLE `mariages`
  ADD CONSTRAINT `mariages_femme_id_foreign` FOREIGN KEY (`femme_id`) REFERENCES `femmes` (`id`),
  ADD CONSTRAINT `mariages_homme_id_foreign` FOREIGN KEY (`homme_id`) REFERENCES `hommes` (`id`);

--
-- Contraintes pour la table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `naissances`
--
ALTER TABLE `naissances`
  ADD CONSTRAINT `naissances_femme_id_foreign` FOREIGN KEY (`femme_id`) REFERENCES `femmes` (`id`),
  ADD CONSTRAINT `naissances_homme_id_foreign` FOREIGN KEY (`homme_id`) REFERENCES `hommes` (`id`);

--
-- Contraintes pour la table `ref_metiers`
--
ALTER TABLE `ref_metiers`
  ADD CONSTRAINT `ref_metiers_habitant_id_foreign` FOREIGN KEY (`habitant_id`) REFERENCES `habitants` (`id`),
  ADD CONSTRAINT `ref_metiers_metier_id_foreign` FOREIGN KEY (`metier_id`) REFERENCES `metiers` (`id`);

--
-- Contraintes pour la table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
