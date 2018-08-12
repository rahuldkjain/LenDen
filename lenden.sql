-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2017 at 05:30 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lenden`
--
CREATE DATABASE IF NOT EXISTS `lenden` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lenden`;

-- --------------------------------------------------------

--
-- Table structure for table `buys`
--

CREATE TABLE IF NOT EXISTS `buys` (
  `username` int(7) NOT NULL,
  `pid` int(4) NOT NULL,
  `quantity` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`datetime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buys`
--

INSERT INTO `buys` (`username`, `pid`, `quantity`, `datetime`) VALUES
(2016115, 3, 1, '2017-11-28 04:37:30'),
(2016115, 6, 10, '2017-11-28 05:26:20');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `iusername` int(7) DEFAULT NULL,
  `name` varchar(500) DEFAULT 'no.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`iusername`, `name`) VALUES
(2016115, 'WIN_20170205_152116.JPG'),
(2016237, 'no.jpg'),
(2016117, 'no.jpg'),
(2016197, '59124415dark-gray-heather-puma-m-original-imaepz4zmgemd65q.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pimage`
--

CREATE TABLE IF NOT EXISTS `pimage` (
  `pid` int(11) NOT NULL,
  `img1` varchar(500) DEFAULT 'n.jpg',
  `img2` varchar(500) DEFAULT 'n.jpg',
  `img3` varchar(500) DEFAULT 'n.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pimage`
--

INSERT INTO `pimage` (`pid`, `img1`, `img2`, `img3`) VALUES
(1, 'vv60201rblu1135blkrd-vvoguish-l-original-imaeghbedhhfddrb.jpeg', 'vv1030mgnt1135blkrd-vvoguish-l-original-imaeghber92wjzgn.jpeg', 'vvpnttp1135blkgmrd-vvoguish-m-original-imaeghbez4yfhbs3.jpeg'),
(2, 'l-545jac-clo-clu-original-imaeuhfm3gjrwcmc.jpeg', 'l-545jac-clo-clu-original-imaeuzegyhkcqxaf.jpeg', 's-545jac-clo-clu-original-imaeuzeghwrtpevs.jpeg'),
(3, 'elon-musk-how-the-billionaire-ceo-of-spacex-and-tesla-is-shaping-original-imaeaf75vejwyhev.jpeg', 'n.jpg', 'n.jpg'),
(4, 'samsung-galaxy-on7-sm-g600f-original-imaecqgcq7a2pzem.jpeg', 'samsung-galaxy-on7-sm-g600f-original-imaecqgcukgwbbqc.jpeg', 'samsung-galaxy-on7-sm-g600f-original-imaecqkgfgtmaw2y.jpeg'),
(5, 'pmr-can-love-happen-twice-r-j-original-imaepgzhsyryynhk.jpeg', 'n.jpg', 'n.jpg'),
(6, 'download (1).jpg', 'download (2).jpg', 'n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE IF NOT EXISTS `rent` (
  `username` int(7) NOT NULL,
  `pid` int(4) NOT NULL,
  `quantity` int(11) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`datetime`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`username`, `pid`, `quantity`, `datetime`) VALUES
(2016197, 2, 1, '2017-11-28 05:28:35');

-- --------------------------------------------------------

--
-- Table structure for table `rentuploaddur`
--

CREATE TABLE IF NOT EXISTS `rentuploaddur` (
  `pid` int(4) NOT NULL,
  `timedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentuploaddur`
--

INSERT INTO `rentuploaddur` (`pid`, `timedate`) VALUES
(1, '2017-11-28 04:18:26'),
(2, '2017-11-28 04:22:13'),
(3, '2017-11-28 04:25:04');

-- --------------------------------------------------------

--
-- Table structure for table `rimage`
--

CREATE TABLE IF NOT EXISTS `rimage` (
  `pid` int(11) NOT NULL,
  `img1` varchar(500) DEFAULT 'n.jpg',
  `img2` varchar(500) DEFAULT 'n.jpg',
  `img3` varchar(500) DEFAULT 'n.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rimage`
--

INSERT INTO `rimage` (`pid`, `img1`, `img2`, `img3`) VALUES
(1, 'casio-fx-991es-plus-original-imaegcqnvbgxe6zq.jpeg', 'casio-fx-991es-plus-original-imaegcqz98bvzfhm.jpeg', 'casio-fx-991es-plus-scientific-original-imaeh9crvhm4vyct.jpeg'),
(2, 'tread-fast-9-reebok-black-pewter-original-imaez8nvhduhnuft.jpeg', 'tread-fast-9-reebok-black-pewter-original-imaez8nvmzczygv5.jpeg', 'tread-fast-9-reebok-black-pewter-original-imaez8nvwnbt9zz8.jpeg'),
(3, 'discovery-of-india-original-imaetzusepnfzyhg.jpeg', 'n.jpg', 'n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `r_product`
--

CREATE TABLE IF NOT EXISTS `r_product` (
  `p_id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` text,
  `quantity` int(2) NOT NULL,
  `category` varchar(15) NOT NULL,
  `date_of_upload` date DEFAULT NULL,
  `username` int(7) NOT NULL,
  `rentperday` int(4) NOT NULL,
  `penaltyperday` int(3) NOT NULL,
  `availability` char(1) DEFAULT 'y',
  PRIMARY KEY (`p_id`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `r_product`
--

INSERT INTO `r_product` (`p_id`, `name`, `description`, `quantity`, `category`, `date_of_upload`, `username`, `rentperday`, `penaltyperday`, `availability`) VALUES
(1, 'calculator', 'scientific calc', 2, 'Electronics', '2017-11-28', 2016115, 20, 50, 'y'),
(2, 'sneakers', 'for men', 0, 'Others', '2017-11-28', 2016237, 50, 90, 'y'),
(3, 'Biography', 'Biography on jawaharlal nehru', 1, 'Books', '2017-11-28', 2016117, 10, 40, 'y');

--
-- Triggers `r_product`
--
DROP TRIGGER IF EXISTS `rentupload`;
DELIMITER //
CREATE TRIGGER `rentupload` AFTER INSERT ON `r_product`
 FOR EACH ROW insert into rentuploaddur VALUES(new.p_id, CURRENT_TIMESTAMP())
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `selluploaddur`
--

CREATE TABLE IF NOT EXISTS `selluploaddur` (
  `pid` int(4) NOT NULL,
  `timedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selluploaddur`
--

INSERT INTO `selluploaddur` (`pid`, `timedate`) VALUES
(1, '2017-11-28 04:17:10'),
(2, '2017-11-28 04:19:30'),
(3, '2017-11-28 04:21:29'),
(4, '2017-11-28 04:24:08'),
(5, '2017-11-28 04:51:15'),
(6, '2017-11-28 05:23:48');

-- --------------------------------------------------------

--
-- Table structure for table `s_product`
--

CREATE TABLE IF NOT EXISTS `s_product` (
  `p_id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` text,
  `quantity` int(2) NOT NULL,
  `category` varchar(15) NOT NULL,
  `date_of_upload` date DEFAULT NULL,
  `username` int(7) NOT NULL,
  `price` int(4) NOT NULL,
  `availability` char(1) DEFAULT 'y',
  PRIMARY KEY (`p_id`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `s_product`
--

INSERT INTO `s_product` (`p_id`, `name`, `description`, `quantity`, `category`, `date_of_upload`, `username`, `price`, `availability`) VALUES
(1, 'sweatshirt', 'better for winters', 3, 'Clothings', '2017-11-28', 2016115, 1200, 'y'),
(2, 'tee', 't-shirt', 2, 'Clothings', '2017-11-28', 2016115, 400, 'y'),
(3, 'elon musk', 'novel by ...', 1, 'Books', '2017-11-28', 2016237, 400, 'y'),
(4, 'samsung j7', '1 year used', 1, 'Electronics', '2017-11-28', 2016117, 9000, 'y'),
(5, 'novel', 'genre: romantic', 1, 'Books', '2017-11-28', 2016115, 150, 'y'),
(6, 'laptop', 'fjdkjx', 0, 'Electronics', '2017-11-28', 2016197, 90000, 'y');

--
-- Triggers `s_product`
--
DROP TRIGGER IF EXISTS `sellupload`;
DELIMITER //
CREATE TRIGGER `sellupload` AFTER INSERT ON `s_product`
 FOR EACH ROW insert into selluploaddur VALUES(new.p_id, CURRENT_TIMESTAMP())
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` int(7) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mob_no` bigint(10) DEFAULT NULL,
  `hall_number` int(1) NOT NULL,
  `room_no` varchar(6) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `email`, `mob_no`, `hall_number`, `room_no`) VALUES
(2016115, 'kd', 'kanika', 'dhimankanika17@gmail.com', 9412911940, 1, 'b-407'),
(2016117, 'gk', 'garima', 'garima@gmail.com', 9898776509, 1, 'b-212'),
(2016197, 'r', 'rahul', 'r@e', 9090909090, 4, 'b-909'),
(2016237, 's', 'saurav', 'saurav@gmail.com', 9709919055, 4, 'f-303');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `r_product`
--
ALTER TABLE `r_product`
  ADD CONSTRAINT `r_product_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `s_product`
--
ALTER TABLE `s_product`
  ADD CONSTRAINT `s_product_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
