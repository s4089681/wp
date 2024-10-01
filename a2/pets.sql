CREATE DATABASE petsvictoria;
USE petsvictoria;
CREATE TABLE `pets` (
  `petid` int (11) NOT NULL AUTO_INCREMENT,
  `petname` varchar (255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar (255) NOT NULL,
  `caption` varchar (255) NOT NULL,
  `age` double NOT NULL,
  `location` varchar (255) NOT NULL,
  `type` varchar (255) NOT NULL,
  PRIMARY KEY (`petid`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;