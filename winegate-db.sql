-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 09, 2014 at 03:05 AM
-- Server version: 5.5.28
-- PHP Version: 5.3.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `winegate`
--

-- --------------------------------------------------------

--
-- Table structure for table `wg_address`
--

CREATE TABLE IF NOT EXISTS `wg_address` (
  `address_id` int(10) NOT NULL AUTO_INCREMENT,
  `order_id` int(10) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `county` varchar(20) NOT NULL,
  `post_code` varchar(20) NOT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wg_admin`
--

CREATE TABLE IF NOT EXISTS `wg_admin` (
  `admin_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(15) NOT NULL DEFAULT '',
  UNIQUE KEY `admin_id` (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `wg_admin`
--

INSERT INTO `wg_admin` (`admin_id`, `username`, `password`) VALUES
(4, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wg_cart`
--

CREATE TABLE IF NOT EXISTS `wg_cart` (
  `cart_id` int(10) NOT NULL AUTO_INCREMENT,
  `cart_session` varchar(100) NOT NULL DEFAULT '',
  `item_id` int(10) NOT NULL DEFAULT '0',
  `item_price` float NOT NULL DEFAULT '0',
  `item_name` varchar(100) NOT NULL DEFAULT '',
  `item_quantity` int(2) NOT NULL DEFAULT '1',
  `item_total_price` float NOT NULL DEFAULT '0',
  `item_image` varchar(100) NOT NULL,
  `cart_status` varchar(10) NOT NULL,
  `order_id` varchar(10) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=158 ;

-- --------------------------------------------------------

--
-- Table structure for table `wg_categories`
--

CREATE TABLE IF NOT EXISTS `wg_categories` (
  `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL DEFAULT '',
  `status` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

-- --------------------------------------------------------

--
-- Table structure for table `wg_cities`
--

CREATE TABLE IF NOT EXISTS `wg_cities` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`city_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=357 ;

-- --------------------------------------------------------

--
-- Table structure for table `wg_items`
--

CREATE TABLE IF NOT EXISTS `wg_items` (
  `cat_id` int(10) NOT NULL DEFAULT '0',
  `item_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(250) NOT NULL DEFAULT '',
  `item_price` float NOT NULL DEFAULT '0',
  `item_desc` text NOT NULL,
  `item_status` tinyint(1) NOT NULL DEFAULT '0',
  `thumbnail` varchar(100) NOT NULL DEFAULT '',
  `big_image` varchar(100) NOT NULL DEFAULT '',
  `medium_image` varchar(100) NOT NULL,
  `item_stock` int(10) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wg_orders`
--

CREATE TABLE IF NOT EXISTS `wg_orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `cart_session` varchar(100) NOT NULL,
  `user_id` varchar(20) NOT NULL DEFAULT '0',
  `sub_total` varchar(10) NOT NULL,
  `vat` varchar(10) NOT NULL,
  `total_price` double NOT NULL DEFAULT '0',
  `order_date` varchar(50) NOT NULL DEFAULT '',
  `shipment_date` varchar(50) NOT NULL DEFAULT '',
  `order_status` varchar(15) NOT NULL DEFAULT 'New',
  `ipaddress` varchar(30) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wg_order_messages`
--

CREATE TABLE IF NOT EXISTS `wg_order_messages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `order_id` int(10) NOT NULL,
  `message` text NOT NULL,
  `sender` varchar(10) NOT NULL,
  `sentdate` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1709 ;

-- --------------------------------------------------------

--
-- Table structure for table `wg_testimonials`
--

CREATE TABLE IF NOT EXISTS `wg_testimonials` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `totalorders` varchar(10) NOT NULL,
  `ratings` varchar(1) NOT NULL,
  `testimonial` text NOT NULL,
  `date` varchar(30) NOT NULL,
  `approved` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

-- --------------------------------------------------------

--
-- Table structure for table `wg_users`
--

CREATE TABLE IF NOT EXISTS `wg_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL DEFAULT '',
  `user_pass` varchar(10) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `date_joined` varchar(50) NOT NULL DEFAULT '',
  `company_name` char(20) NOT NULL DEFAULT '1',
  `account_type` varchar(20) NOT NULL DEFAULT 'None',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
