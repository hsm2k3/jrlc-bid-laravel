DROP TABLE IF EXISTS `holidays`;
CREATE TABLE `holidays` (
                            `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                            `created_at` timestamp NULL DEFAULT NULL,
                            `updated_at` timestamp NULL DEFAULT NULL,
                            `holiday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                            PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `opening_the_arks`;
CREATE TABLE `opening_the_arks` (
                                    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                    `created_at` timestamp NULL DEFAULT NULL,
                                    `updated_at` timestamp NULL DEFAULT NULL,
                                    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `aliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                    `amount` decimal(8,2) NOT NULL,
                                    `holiday_id` bigint unsigned NOT NULL,
                                    PRIMARY KEY (`id`),
                                    KEY `opening_the_arks_holiday_id_foreign` (`holiday_id`),
                                    CONSTRAINT `opening_the_arks_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `first_aliyahs`;
CREATE TABLE `first_aliyahs` (
                                 `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                 `created_at` timestamp NULL DEFAULT NULL,
                                 `updated_at` timestamp NULL DEFAULT NULL,
                                 `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `amount` decimal(8,2) NOT NULL,
                                 `holiday_id` bigint unsigned NOT NULL,
                                 PRIMARY KEY (`id`),
                                 KEY `first_aliyahs_holiday_id_foreign` (`holiday_id`),
                                 CONSTRAINT `first_aliyahs_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `second_aliyahs`;
CREATE TABLE `second_aliyahs` (
                                  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                  `created_at` timestamp NULL DEFAULT NULL,
                                  `updated_at` timestamp NULL DEFAULT NULL,
                                  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
                                 `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `amount` decimal(8,2) NOT NULL,
                                 `holiday_id` bigint unsigned NOT NULL,
                                 PRIMARY KEY (`id`),
                                 KEY `third_aliyahs_holiday_id_foreign` (`holiday_id`),
                                 CONSTRAINT `third_aliyahs_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `fourth_aliyahs`;
CREATE TABLE `fourth_aliyahs` (
                                  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                  `created_at` timestamp NULL DEFAULT NULL,
                                  `updated_at` timestamp NULL DEFAULT NULL,
                                  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                  `amount` decimal(8,2) NOT NULL,
                                  `holiday_id` bigint unsigned NOT NULL,
                                  PRIMARY KEY (`id`),
                                  KEY `fourth_aliyahs_holiday_id_foreign` (`holiday_id`),
                                  CONSTRAINT `fourth_aliyahs_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `fifth_aliyahs`;
CREATE TABLE `fifth_aliyahs` (
                                 `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                 `created_at` timestamp NULL DEFAULT NULL,
                                 `updated_at` timestamp NULL DEFAULT NULL,
                                 `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                                 `amount` decimal(8,2) NOT NULL,
                                 `holiday_id` bigint unsigned NOT NULL,
                                 PRIMARY KEY (`id`),
                                 KEY `fifth_aliyahs_holiday_id_foreign` (`holiday_id`),
                                 CONSTRAINT `fifth_aliyahs_holiday_id_foreign` FOREIGN KEY (`holiday_id`) REFERENCES `holidays` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `maftir`;
