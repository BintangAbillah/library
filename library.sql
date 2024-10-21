-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
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


-- Dumping database structure for library
DROP DATABASE IF EXISTS `library`;
CREATE DATABASE IF NOT EXISTS `library` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `library`;

-- Dumping structure for table library.books
DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `published_year` int DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table library.books: ~10 rows (approximately)
INSERT INTO `books` (`id`, `title`, `author`, `published_year`, `genre`, `created_at`) VALUES
	(1, 'The Catcher in the Rye', 'J.D. Salinger', 1951, 'Fiction', '2024-10-21 16:14:00'),
	(2, 'To Kill a Mockingbird', 'Harper Lee', 1960, 'Historical Fiction', '2024-10-21 16:14:00'),
	(3, '1984', 'George Orwell', 1949, 'Dystopian', '2024-10-21 16:14:00'),
	(4, 'Pride and Prejudice', 'Jane Austen', 1813, 'Romance', '2024-10-21 16:14:00'),
	(5, 'The Great Gatsby', 'F. Scott Fitzgerald', 1925, 'Fiction', '2024-10-21 16:14:00'),
	(6, 'Moby-Dick', 'Herman Melville', 1851, 'Adventure', '2024-10-21 16:14:00'),
	(7, 'War and Peace', 'Leo Tolstoy', 1869, 'Historical Fiction', '2024-10-21 16:14:00'),
	(8, 'The Odyssey', 'Homer', -800, 'Epic Poetry', '2024-10-21 16:14:00'),
	(9, 'The Catch-22', 'Joseph Heller', 1961, 'Satire', '2024-10-21 16:14:00'),
	(10, 'Brave New World', 'Aldous Huxley', 1932, 'Dystopian', '2024-10-21 16:14:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
