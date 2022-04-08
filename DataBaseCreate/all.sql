-- --------------------------------------------------------
-- Sunucu:                       127.0.0.1
-- Sunucu sürümü:                5.7.33 - MySQL Community Server (GPL)
-- Sunucu İşletim Sistemi:       Win64
-- HeidiSQL Sürüm:               11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- freetimers için veritabanı yapısı dökülüyor
CREATE DATABASE IF NOT EXISTS `freetimers` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `freetimers`;

-- tablo yapısı dökülüyor freetimers.cart
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `total_quantity` varchar(50) DEFAULT NULL,
  `total_price` float(14,2) DEFAULT NULL,
  `product_values` json DEFAULT NULL,
  `customer_id` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- freetimers.cart: ~0 rows (yaklaşık) tablosu için veriler indiriliyor
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` (`id`, `total_quantity`, `total_price`, `product_values`, `customer_id`) VALUES
	(35, '2', 144.00, '{"depth": "1", "price": "72", "width": "1", "length": "1"}', '09c98075a3fb5923e1d74fd0c03216bd'),
	(36, '1', 72.00, '{"depth": "2", "price": "72", "width": "2", "length": "2"}', '09c98075a3fb5923e1d74fd0c03216bd');
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
