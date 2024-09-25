CREATE DATABASE library;

USE library;

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookid` bigint(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `title` varchar(40) DEFAULT NULL,
  `author` varchar(40) DEFAULT NULL,
  `genre` varchar(30) DEFAULT NULL,
  `published` year(4) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;