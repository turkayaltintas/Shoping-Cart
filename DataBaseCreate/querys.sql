CREATE DATABASE `freetimers` COLLATE 'utf8_general_ci';

CREATE TABLE `cart` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `total_item` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8_general_ci',
    `total_price` FLOAT(14,2) NULL DEFAULT NULL,
    `product_values` JSON NULL DEFAULT NULL,
    `customer_id` VARCHAR(250) NULL DEFAULT NULL COLLATE 'utf8_general_ci',
    PRIMARY KEY (`id`) USING BTREE
)
    COLLATE='utf8_general_ci'
    ENGINE=InnoDB
;
