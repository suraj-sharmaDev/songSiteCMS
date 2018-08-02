DROP DATABASE `songs`;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `songs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;

USE `songs`;



CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
);

insert into `admin` (`username`,`password`) VALUES
  ('suraj','hello');

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL,
  `count` varchar(45) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`,`category`)
);

insert into `categories` (`category`) VALUES
  ('Malayalam'),
  ('English'),
  ('Telugu');

CREATE TABLE IF NOT EXISTS `songs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `song_title` varchar(45) NOT NULL,
  `album` varchar(45) DEFAULT 'Latest',
  `category` varchar(45),
  `url` varchar(80) NOT NULL,  
  `size` varchar(20),
  `added_on` varchar(30),
  PRIMARY KEY (`id`,`song_title`)
);

INSERT INTO `songs` (`song_title`,`album`,`category`,`url`,`size`,`added_on`) VALUES
('Neerali Azhake Azhake','Neerali','Malayalam','http://mallumusic.net/server/local2/14788.xhtml','9.6 MiB','2018-06-23'),
('Kannane Kannalane','Neerali','Malayalam','http://mallumusic.net/server/local2/14790.xhtml','9.3 MiB','2018-06-23'),
('Neeyen Kinaavo Hello My Dear Wrong Number','Hello My Dear Wrong Number ','Malayalam','http://mallumusic.net/server/local2/14779.xhtml','3.56 MiB','2018-06-23'),
('Ore Nila Ore Veyil BTech','BTech','Malayalam','http://mallumusic.net/server/local2/14612.xhtml','9.77 MiB','2018-06-23'),
('Peda Glassu','BTech','Malayalam','http://mallumusic.net/server/local2/14744.xhtml','7.94 MiB','2018-06-23'),
('Azaadi','BTech','Malayalam','http://mallumusic.net/server/local2/14746.xhtml','7.62 MiB','2018-06-23'),
('Aparaada Panka','Maradona','Malayalam','http://mallumusic.net/server/local2/14785.xhtml','8.48 MiB','2018-06-23'),
('Maradona Kaadhale','Maradona','Malayalam','http://mallumusic.net/server/local2/14676.xhtml','8.08 MiB','2018-06-23');

UPDATE `categories` SET `count`=8 WHERE `category`='Malayalam';

CREATE TABLE IF NOT EXISTS `check` (
  `name` varchar(20) NOT NULL
);
