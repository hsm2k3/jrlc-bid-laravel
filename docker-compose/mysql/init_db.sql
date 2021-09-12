DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
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

DROP TABLE IF EXISTS `holidays`;
CREATE TABLE `holidays` (
                            `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                            `created_at` timestamp NULL DEFAULT NULL,
                            `updated_at` timestamp NULL DEFAULT NULL,
                            `deleted_at` timestamp NULL DEFAULT NULL,
                            `holiday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                            PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
                              `id` int unsigned NOT NULL AUTO_INCREMENT,
                              `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                              `batch` int NOT NULL,
                              PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
                                   `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                   `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                   `created_at` timestamp NULL DEFAULT NULL,
                                   KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
                         `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                         `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `email_verified_at` timestamp NULL DEFAULT NULL,
                         `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL,
                         PRIMARY KEY (`id`),
                         UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `descriptions`;
CREATE TABLE `descriptions` (
                                `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                `created_at` timestamp NULL DEFAULT NULL,
                                `updated_at` timestamp NULL DEFAULT NULL,
                                `deleted_at` timestamp NULL DEFAULT NULL,
                                `aliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `holiday_id` bigint unsigned NOT NULL,
                                PRIMARY KEY (`id`),
                                KEY `descriptions_holiday_id_foreign` (`holiday_id`),
                                CONSTRAINT `descriptions_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `fifth_aliyahs`;
CREATE TABLE `fifth_aliyahs` (
                                 `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                 `created_at` timestamp NULL DEFAULT NULL,
                                 `updated_at` timestamp NULL DEFAULT NULL,
                                 `deleted_at` timestamp NULL DEFAULT NULL,
                                 `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `aliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `amount` decimal(8,2) NOT NULL,
                                 `holiday_id` bigint unsigned NOT NULL,
                                 PRIMARY KEY (`id`),
                                 KEY `fifth_aliyahs_holiday_id_foreign` (`holiday_id`),
                                 CONSTRAINT `fifth_aliyahs_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `first_aliyahs`;
CREATE TABLE `first_aliyahs` (
                                 `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                 `created_at` timestamp NULL DEFAULT NULL,
                                 `updated_at` timestamp NULL DEFAULT NULL,
                                 `deleted_at` timestamp NULL DEFAULT NULL,
                                 `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `aliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `amount` decimal(8,2) NOT NULL,
                                 `holiday_id` bigint unsigned NOT NULL,
                                 PRIMARY KEY (`id`),
                                 KEY `first_aliyahs_holiday_id_foreign` (`holiday_id`),
                                 CONSTRAINT `first_aliyahs_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `fourth_aliyahs`;
CREATE TABLE `fourth_aliyahs` (
                                  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                  `created_at` timestamp NULL DEFAULT NULL,
                                  `updated_at` timestamp NULL DEFAULT NULL,
                                  `deleted_at` timestamp NULL DEFAULT NULL,
                                  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `aliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                  `amount` decimal(8,2) NOT NULL,
                                  `holiday_id` bigint unsigned NOT NULL,
                                  PRIMARY KEY (`id`),
                                  KEY `fourth_aliyahs_holiday_id_foreign` (`holiday_id`),
                                  CONSTRAINT `fourth_aliyahs_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `gelilah_ones`;
CREATE TABLE `gelilah_ones` (
                                `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                `created_at` timestamp NULL DEFAULT NULL,
                                `updated_at` timestamp NULL DEFAULT NULL,
                                `deleted_at` timestamp NULL DEFAULT NULL,
                                `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `aliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                `amount` decimal(8,2) NOT NULL,
                                `holiday_id` bigint unsigned NOT NULL,
                                PRIMARY KEY (`id`),
                                KEY `gelilah_ones_holiday_id_foreign` (`holiday_id`),
                                CONSTRAINT `gelilah_ones_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `gelilah_twos`;
CREATE TABLE `gelilah_twos` (
                                `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                `created_at` timestamp NULL DEFAULT NULL,
                                `updated_at` timestamp NULL DEFAULT NULL,
                                `deleted_at` timestamp NULL DEFAULT NULL,
                                `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `aliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                `amount` decimal(8,2) NOT NULL,
                                `holiday_id` bigint unsigned NOT NULL,
                                PRIMARY KEY (`id`),
                                KEY `gelilah_twos_holiday_id_foreign` (`holiday_id`),
                                CONSTRAINT `gelilah_twos_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `hag_bah_ones`;
CREATE TABLE `hag_bah_ones` (
                                `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                `created_at` timestamp NULL DEFAULT NULL,
                                `updated_at` timestamp NULL DEFAULT NULL,
                                `deleted_at` timestamp NULL DEFAULT NULL,
                                `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `aliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                `amount` decimal(8,2) NOT NULL,
                                `holiday_id` bigint unsigned NOT NULL,
                                PRIMARY KEY (`id`),
                                KEY `hag_bah_ones_holiday_id_foreign` (`holiday_id`),
                                CONSTRAINT `hag_bah_ones_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `hag_bah_twos`;
CREATE TABLE `hag_bah_twos` (
                                `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                `created_at` timestamp NULL DEFAULT NULL,
                                `updated_at` timestamp NULL DEFAULT NULL,
                                `deleted_at` timestamp NULL DEFAULT NULL,
                                `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `aliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                `amount` decimal(8,2) NOT NULL,
                                `holiday_id` bigint unsigned NOT NULL,
                                PRIMARY KEY (`id`),
                                KEY `hag_bah_twos_holiday_id_foreign` (`holiday_id`),
                                CONSTRAINT `hag_bah_twos_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `holiday_aliyah_details`;
CREATE TABLE `holiday_aliyah_details` (
                                          `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                          `created_at` timestamp NULL DEFAULT NULL,
                                          `updated_at` timestamp NULL DEFAULT NULL,
                                          `deleted_at` timestamp NULL DEFAULT NULL,
                                          `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                          `holiday_id` bigint unsigned NOT NULL,
                                          PRIMARY KEY (`id`),
                                          KEY `holiday_aliyah_details_holiday_id_foreign` (`holiday_id`),
                                          CONSTRAINT `holiday_aliyah_details_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `maftirs`;
CREATE TABLE `maftirs` (
                           `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                           `created_at` timestamp NULL DEFAULT NULL,
                           `updated_at` timestamp NULL DEFAULT NULL,
                           `deleted_at` timestamp NULL DEFAULT NULL,
                           `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                           `aliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                           `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                           `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                           `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                           `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                           `amount` decimal(8,2) NOT NULL,
                           `holiday_id` bigint unsigned NOT NULL,
                           PRIMARY KEY (`id`),
                           KEY `maftirs_holiday_id_foreign` (`holiday_id`),
                           CONSTRAINT `maftirs_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `opening_the_arks`;
CREATE TABLE `opening_the_arks` (
                                    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                    `created_at` timestamp NULL DEFAULT NULL,
                                    `updated_at` timestamp NULL DEFAULT NULL,
                                    `deleted_at` timestamp NULL DEFAULT NULL,
                                    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `aliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `amount` decimal(8,2) NOT NULL,
                                    `holiday_id` bigint unsigned NOT NULL,
                                    PRIMARY KEY (`id`),
                                    KEY `opening_the_arks_holiday_id_foreign` (`holiday_id`),
                                    CONSTRAINT `opening_the_arks_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `putting_on_the_crown_ones`;
CREATE TABLE `putting_on_the_crown_ones` (
                                             `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                             `created_at` timestamp NULL DEFAULT NULL,
                                             `updated_at` timestamp NULL DEFAULT NULL,
                                             `deleted_at` timestamp NULL DEFAULT NULL,
                                             `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                             `aliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                             `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                             `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                             `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                             `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                             `amount` decimal(8,2) NOT NULL,
                                             `holiday_id` bigint unsigned NOT NULL,
                                             PRIMARY KEY (`id`),
                                             KEY `putting_on_the_crown_ones_holiday_id_foreign` (`holiday_id`),
                                             CONSTRAINT `putting_on_the_crown_ones_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `putting_on_the_crown_twos`;
CREATE TABLE `putting_on_the_crown_twos` (
                                             `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                             `created_at` timestamp NULL DEFAULT NULL,
                                             `updated_at` timestamp NULL DEFAULT NULL,
                                             `deleted_at` timestamp NULL DEFAULT NULL,
                                             `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                             `aliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                             `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                             `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                             `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                             `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                             `amount` decimal(8,2) NOT NULL,
                                             `holiday_id` bigint unsigned NOT NULL,
                                             PRIMARY KEY (`id`),
                                             KEY `putting_on_the_crown_twos_holiday_id_foreign` (`holiday_id`),
                                             CONSTRAINT `putting_on_the_crown_twos_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `putting_on_the_shield_ones`;
CREATE TABLE `putting_on_the_shield_ones` (
                                              `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                              `created_at` timestamp NULL DEFAULT NULL,
                                              `updated_at` timestamp NULL DEFAULT NULL,
                                              `deleted_at` timestamp NULL DEFAULT NULL,
                                              `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                              `aliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                              `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                              `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                              `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                              `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                              `amount` decimal(8,2) NOT NULL,
                                              `holiday_id` bigint unsigned NOT NULL,
                                              PRIMARY KEY (`id`),
                                              KEY `putting_on_the_shield_ones_holiday_id_foreign` (`holiday_id`),
                                              CONSTRAINT `putting_on_the_shield_ones_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `putting_on_the_shield_twos`;
CREATE TABLE `putting_on_the_shield_twos` (
                                              `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                              `created_at` timestamp NULL DEFAULT NULL,
                                              `updated_at` timestamp NULL DEFAULT NULL,
                                              `deleted_at` timestamp NULL DEFAULT NULL,
                                              `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                              `aliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                              `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                              `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                              `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                              `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                              `amount` decimal(8,2) NOT NULL,
                                              `holiday_id` bigint unsigned NOT NULL,
                                              PRIMARY KEY (`id`),
                                              KEY `putting_on_the_shield_twos_holiday_id_foreign` (`holiday_id`),
                                              CONSTRAINT `putting_on_the_shield_twos_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `second_aliyahs`;
CREATE TABLE `second_aliyahs` (
                                  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                  `created_at` timestamp NULL DEFAULT NULL,
                                  `updated_at` timestamp NULL DEFAULT NULL,
                                  `deleted_at` timestamp NULL DEFAULT NULL,
                                  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `aliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                  `amount` decimal(8,2) NOT NULL,
                                  `holiday_id` bigint unsigned NOT NULL,
                                  PRIMARY KEY (`id`),
                                  KEY `second_aliyahs_holiday_id_foreign` (`holiday_id`),
                                  CONSTRAINT `second_aliyahs_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `third_aliyahs`;
CREATE TABLE `third_aliyahs` (
                                 `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                 `created_at` timestamp NULL DEFAULT NULL,
                                 `updated_at` timestamp NULL DEFAULT NULL,
                                 `deleted_at` timestamp NULL DEFAULT NULL,
                                 `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `aliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `amount` decimal(8,2) NOT NULL,
                                 `holiday_id` bigint unsigned NOT NULL,
                                 PRIMARY KEY (`id`),
                                 KEY `third_aliyahs_holiday_id_foreign` (`holiday_id`),
                                 CONSTRAINT `third_aliyahs_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
