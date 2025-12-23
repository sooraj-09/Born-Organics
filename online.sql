-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 24, 2021 at 02:41 PM
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
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(11) NOT NULL,
  `userid` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
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

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `type` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`, `status`) VALUES
('admin@gmail.com', 'admin', 'admin', 1),
('jijo@gmail.com', 'jijo', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `oid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `uid` text NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `phno` text NOT NULL,
  `itemname` text NOT NULL,
  `qty` text NOT NULL,
  `amount` text NOT NULL,
  `ostatus` int(11) NOT NULL,
  `pstatus` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`oid`, `itemid`, `uid`, `name`, `address`, `phno`, `itemname`, `qty`, `amount`, `ostatus`, `pstatus`) VALUES
(1, 2, 'jijo@gmail.com', 'vaishnav', 'Lekshmi,Palathara,Kollam, Kerala,Kerala,691020,India', '+918547764104', 'Casual Shoes', '2', '0', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `dob` date NOT NULL,
  `housename` text NOT NULL,
  `streetname` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `pincode` text NOT NULL,
  `country` text NOT NULL,
  `mobileno` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `title`, `firstname`, `lastname`, `email`, `dob`, `housename`, `streetname`, `city`, `state`, `pincode`, `country`, `mobileno`) VALUES
(1, 'Mr', 'JIJO', 'J S', 'jijo@gmail.com', '2000-12-11', 'LEKSHMI', 'PALATHARA', 'KOLLAM', 'KERALA', '691020', 'INDIA', '9895391005');
