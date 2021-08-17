DROP TABLE IF EXISTS `bids`;

CREATE TABLE `bids` (
                        `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                        `created_at` timestamp NULL DEFAULT NULL,
                        `updated_at` timestamp NULL DEFAULT NULL,
                        `aliyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                        `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                        `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                        `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                        `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                        `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                        `amount` decimal(8,2) NOT NULL,
                          PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
