DROP TABLE IF EXISTS `bid`;

CREATE TABLE `holiday` (
                       `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                       `created_at` timestamp NULL DEFAULT NULL,
                       `updated_at` timestamp NULL DEFAULT NULL,
                       `holiday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                       `first_aliyah` decimal(8,2) NOT NULL,
                       `second_aliyah` decimal(8,2) NOT NULL,
                       `third_aliyah` decimal(8,2) NOT NULL,
                       `fourth_aliyah` decimal(8,2) NOT NULL,
                       `fifth_aliyah` decimal(8,2) NOT NULL,
                       `maftir` decimal(8,2) NOT NULL,
                       PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `first_aliyah`;

CREATE TABLE `first_aliyah` (
                                `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                `created_at` timestamp NULL DEFAULT NULL,
                                `updated_at` timestamp NULL DEFAULT NULL,
                                `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `holiday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `amount` decimal(8,2) NOT NULL,
                                PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `second_aliyah`;

CREATE TABLE `second_aliyah` (
                                 `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                 `created_at` timestamp NULL DEFAULT NULL,
                                 `updated_at` timestamp NULL DEFAULT NULL,
                                 `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `holiday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `amount` decimal(8,2) NOT NULL,
                                 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `third_aliyah`;

CREATE TABLE `third_aliyah` (
                                `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                `created_at` timestamp NULL DEFAULT NULL,
                                `updated_at` timestamp NULL DEFAULT NULL,
                                `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `holiday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `amount` decimal(8,2) NOT NULL,
                                PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `fourth_aliyah`;

CREATE TABLE `fourth_aliyah` (
                                 `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                 `created_at` timestamp NULL DEFAULT NULL,
                                 `updated_at` timestamp NULL DEFAULT NULL,
                                 `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `holiday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                 `amount` decimal(8,2) NOT NULL,
                                 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `fifth_aliyah`;

CREATE TABLE `fifth_aliyah` (
                                `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                `created_at` timestamp NULL DEFAULT NULL,
                                `updated_at` timestamp NULL DEFAULT NULL,
                                `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `holiday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                `amount` decimal(8,2) NOT NULL,
                                PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `maftir`;

CREATE TABLE `maftir` (
                          `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                          `created_at` timestamp NULL DEFAULT NULL,
                          `updated_at` timestamp NULL DEFAULT NULL,
                          `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `holiday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `amount` decimal(8,2) NOT NULL,
                          PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

