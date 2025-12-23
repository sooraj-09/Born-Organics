-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2021 at 05:12 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `itemid` int(11) NOT NULL,
  `itemname` text NOT NULL,
  `imgid` text NOT NULL,
  `brand` text NOT NULL,
  `category` text NOT NULL,
  `rate` text NOT NULL,
  `desc` text NOT NULL,
  `stock` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemid`, `itemname`, `imgid`, `brand`, `category`, `rate`, `desc`, `stock`) VALUES
(1, 'Fujifilm FinePix S2950 Digital Camera', 'img/1.jpg', 'Fujifilm', 'Electronics', '2500', '14 Megapixels. 18.0 x Optical Zoom. 3.0-inch LCD Screen. Full HD photos and 1280 x 720p HD movie capture. ISO sensitivity ISO6400 at reduced resolution. Tracking Auto Focus. Motion Panorama Mode. Face Detection technology with Blink detection and Smile and shoot mode. 4 x AA batteries not included. WxDxH 110.2 Ã—81.4x73.4mm. Weight 0.341kg (excluding battery and memory card). Weight 0.437kg (including battery and memory card).', '10'),
(2, 'Casual Shoes', 'img/2.jpg', 'bata', 'Chappels', '1000', 'Casual Shoes', '20'),
(3, 'shirt', 'img/3.jpg', 'dj', 'Furniture', '200', 'dhcgdkjchedkchi', '30'),
(4, 'shirt', 'img/4.jpg', 'def', 'Furniture', 'dfc', 'ddfwf', '5'),
(5, 'mevaram', 'img/5.jpg', 'bulli', 'Electronics', '200', 'wfvg', '5');
