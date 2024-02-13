-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour sre2
CREATE DATABASE IF NOT EXISTS `sre2` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sre2`;

-- Listage de la structure de table sre2. cap_emplois
CREATE TABLE IF NOT EXISTS `cap_emplois` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dte_inscription` date DEFAULT NULL,
  `nom_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inscrit_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cap_emplois_inscrit_id_foreign` (`inscrit_id`),
  CONSTRAINT `cap_emplois_inscrit_id_foreign` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrits` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. cmas
CREATE TABLE IF NOT EXISTS `cmas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dte_inscription` date DEFAULT NULL,
  `nom_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inscrit_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cmas_inscrit_id_foreign` (`inscrit_id`),
  CONSTRAINT `cmas_inscrit_id_foreign` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrits` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. cvs
CREATE TABLE IF NOT EXISTS `cvs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dte_travailler` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inscrit_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cvs_inscrit_id_foreign` (`inscrit_id`),
  CONSTRAINT `cvs_inscrit_id_foreign` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrits` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. diplomes
CREATE TABLE IF NOT EXISTS `diplomes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nb_annee` int DEFAULT NULL,
  `inscrit_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `specialite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `diplomes_inscrit_id_foreign` (`inscrit_id`),
  CONSTRAINT `diplomes_inscrit_id_foreign` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrits` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. enfants
CREATE TABLE IF NOT EXISTS `enfants` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dte_naissance` date DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inscrit_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `enfants_inscrit_id_foreign` (`inscrit_id`),
  CONSTRAINT `enfants_inscrit_id_foreign` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrits` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. formation_pros
CREATE TABLE IF NOT EXISTS `formation_pros` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inscrit_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `formation_pros_inscrit_id_foreign` (`inscrit_id`),
  CONSTRAINT `formation_pros_inscrit_id_foreign` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrits` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. france_travails
CREATE TABLE IF NOT EXISTS `france_travails` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dte_inscription` date DEFAULT NULL,
  `nom_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inscrit_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `france_travails_inscrit_id_foreign` (`inscrit_id`),
  CONSTRAINT `france_travails_inscrit_id_foreign` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrits` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. horaires
CREATE TABLE IF NOT EXISTS `horaires` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inscrit_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `horaires_inscrit_id_foreign` (`inscrit_id`),
  CONSTRAINT `horaires_inscrit_id_foreign` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrits` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. inscrits
CREATE TABLE IF NOT EXISTS `inscrits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `statut` tinyint(1) NOT NULL DEFAULT '1',
  `dte_contact` date DEFAULT NULL,
  `origine_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_rdc` tinyint(1) NOT NULL DEFAULT '0',
  `is_benevole` tinyint(1) NOT NULL DEFAULT '0',
  `civilite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dte_naissance` date DEFAULT NULL,
  `nationalite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_postal` int DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `situation_perso` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_demande_asile` tinyint(1) NOT NULL DEFAULT '0',
  `is_refugie_politique` tinyint(1) NOT NULL DEFAULT '0',
  `dte_arrivee_fr` date DEFAULT NULL,
  `is_enfant` tinyint(1) NOT NULL DEFAULT '0',
  `nb_enfant` int DEFAULT NULL,
  `nature_revenus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autre_revenus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_soelis` tinyint(1) NOT NULL DEFAULT '0',
  `is_france_travail` tinyint(1) NOT NULL DEFAULT '0',
  `is_cma` tinyint(1) NOT NULL DEFAULT '0',
  `is_mission_locale` tinyint(1) NOT NULL DEFAULT '0',
  `is_cap_emploi` tinyint(1) NOT NULL DEFAULT '0',
  `is_cv` tinyint(1) NOT NULL DEFAULT '0',
  `is_permis` tinyint(1) NOT NULL DEFAULT '0',
  `vehicule_dispo` tinyint(1) NOT NULL DEFAULT '0',
  `prevu_vehicule` tinyint(1) NOT NULL DEFAULT '0',
  `is_diplome` tinyint(1) NOT NULL DEFAULT '0',
  `nb_diplome` tinyint(1) DEFAULT NULL,
  `is_logiciel` tinyint(1) NOT NULL DEFAULT '0',
  `logiciel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emploi_pre_occ` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_reconv_pro` tinyint(1) NOT NULL DEFAULT '0',
  `is_reprise_etudes` tinyint(1) NOT NULL DEFAULT '0',
  `is_formation_pro` tinyint(1) NOT NULL DEFAULT '0',
  `nb_plan_action` int DEFAULT NULL,
  `nb_rdv` int DEFAULT NULL,
  `infos_comp` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `dte_achat` date DEFAULT NULL,
  `dte_cloture` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inscrits_user_id_foreign` (`user_id`),
  CONSTRAINT `inscrits_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. langues
CREATE TABLE IF NOT EXISTS `langues` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `is_atelier` tinyint(1) NOT NULL DEFAULT '0',
  `fr_ecrit` int DEFAULT NULL,
  `fr_parle` int DEFAULT NULL,
  `fr_lu` int DEFAULT NULL,
  `en_ecrit` int DEFAULT NULL,
  `en_parle` int DEFAULT NULL,
  `en_lu` int DEFAULT NULL,
  `is_autre` tinyint(1) NOT NULL DEFAULT '0',
  `autre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inscrit_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `langues_inscrit_id_foreign` (`inscrit_id`),
  CONSTRAINT `langues_inscrit_id_foreign` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrits` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. metier_souhaites
CREATE TABLE IF NOT EXISTS `metier_souhaites` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secteur_act` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secteur_geo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inscrit_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `metier_souhaites_inscrit_id_foreign` (`inscrit_id`),
  CONSTRAINT `metier_souhaites_inscrit_id_foreign` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrits` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. mission_locales
CREATE TABLE IF NOT EXISTS `mission_locales` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dte_inscription` date DEFAULT NULL,
  `nom_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inscrit_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mission_locales_inscrit_id_foreign` (`inscrit_id`),
  CONSTRAINT `mission_locales_inscrit_id_foreign` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrits` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. permis
CREATE TABLE IF NOT EXISTS `permis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inscrit_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `autre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permis_inscrit_id_foreign` (`inscrit_id`),
  CONSTRAINT `permis_inscrit_id_foreign` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrits` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. plan_actions
CREATE TABLE IF NOT EXISTS `plan_actions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `action_menee` text COLLATE utf8mb4_unicode_ci,
  `objectif` text COLLATE utf8mb4_unicode_ci,
  `moyen_oeuvre` text COLLATE utf8mb4_unicode_ci,
  `echeance` date DEFAULT NULL,
  `inscrit_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `plans_action_inscrit_id_foreign` (`inscrit_id`),
  CONSTRAINT `plans_action_inscrit_id_foreign` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrits` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. rdcs
CREATE TABLE IF NOT EXISTS `rdcs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `centre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inscrit_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rdcs_inscrit_id_foreign` (`inscrit_id`),
  CONSTRAINT `rdcs_inscrit_id_foreign` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrits` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. rdvs
CREATE TABLE IF NOT EXISTS `rdvs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `contexte` text COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `inscrit_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rdv_inscrit_id_foreign` (`inscrit_id`),
  CONSTRAINT `rdv_inscrit_id_foreign` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrits` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. reconv_pros
CREATE TABLE IF NOT EXISTS `reconv_pros` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `is_form_prevue` tinyint(1) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `duree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inscrit_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `reconv_pros_inscrit_id_foreign` (`inscrit_id`),
  CONSTRAINT `reconv_pros_inscrit_id_foreign` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrits` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. reprise_etudes
CREATE TABLE IF NOT EXISTS `reprise_etudes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom_diplome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inscrit_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `reprise_etudes_inscrit_id_foreign` (`inscrit_id`),
  CONSTRAINT `reprise_etudes_inscrit_id_foreign` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrits` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. soelis
CREATE TABLE IF NOT EXISTS `soelis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dte_inscription` date DEFAULT NULL,
  `nom_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inscrit_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `soelis_inscrit_id_foreign` (`inscrit_id`),
  CONSTRAINT `soelis_inscrit_id_foreign` FOREIGN KEY (`inscrit_id`) REFERENCES `inscrits` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

-- Listage de la structure de table sre2. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Les données exportées n'étaient pas sélectionnées.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
