-- CREATE DATABASE IF NOT EXIST `IpData` DEFAULT CHARACTER SET latin 1 COLLATE latin1_swedish_ci;
-- USE 'IpData';


-- CREATE TABLE IF NOT EXISTS IpData(
-- 	id INT AUTO_INCREMENT_PRIMARY KEY,
-- 	name VARCHAR (255) NOT NULL,
-- 	phone NUMBER(10) NOT NULL,
-- 	email VARCHAR(225) NOT NULL,
-- 	subject VARCHAR(225) NOT NULL,
-- 	message VARCHAR(225) NOT NULL,

-- );



CREATE DATABASE IF NOT EXISTS `IpData` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `IpData`;

CREATE TABLE IF NOT EXISTS `IpData` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(10) NOT NULL,
  `email` VARCHAR(225) NOT NULL,
  `subject` VARCHAR(225) NOT NULL,
  `message` VARCHAR(225) NOT NULL
);






