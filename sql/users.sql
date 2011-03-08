-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2010 at 11:41 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prospace_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fb_id` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `activation_code` varchar(255) NOT NULL,
  `activated` int(1) NOT NULL,
  `reset_code` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fb_id`, `username`, `email`, `firstname`, `lastname`, `password`, `activation_code`, `activated`, `reset_code`, `created`, `updated`) VALUES
(1, NULL, 'jamesming', 'jamesming@gmail.com', 'James', 'Ming', 'c0706ec64484fe506f89ab69e78427cb', 'test', 1, '5diF3OkaJu', '0000-00-00 00:00:00', '2010-11-23 14:01:45'),
(3, NULL, 'donroskos', 'donny@tenexsys.com', 'Don', 'Rosko', '01db19f28b2e6806d485ca20b733f3b5', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, NULL, 'MaryS', 'mary@aol.com', 'Mary', 'Shetfield', '9fca07ce329c33ac37c843799cab7e84', '', 0, '', '2010-11-23 15:45:20', '2010-11-23 15:46:43'),
(19, NULL, 'HenryEighth', 'hmoore@gmail.com', 'Henry', 'Moore', '63ee451939ed580ef3c4b6f0109d1fd0', 'afNpjLajWo', 0, '', '2010-11-23 15:14:22', '0000-00-00 00:00:00');
