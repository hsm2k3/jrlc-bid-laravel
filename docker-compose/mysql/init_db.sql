DROP TABLE IF EXISTS `bids`;

CREATE TABLE `bids` (
                          `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
                          `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                          `amount` decimal COLLATE utf8mb4_unicode_ci NOT NULL,
                          PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `bids` (name, designation, email, phone, comment, amount) VALUES ('John Doe', 'Rabbi', 'fake@email.com', '555-555-5555','Mazel Tov!', 1000.00), ('Jane Doe', 'myself', 'fake@email.com', '555-555-5555','Good Shabbos!', 500.00);
