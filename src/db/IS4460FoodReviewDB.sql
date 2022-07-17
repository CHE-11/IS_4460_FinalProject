/*
This File has all the create Table and Insert statements in it
you should only need to import this one file into phpMyAdmin
the import should create and populate the database all at once

phpMyAdmin SQL Dump
version 5.1.1
https://www.phpmyadmin.net/

Host: 127.0.0.1:3306
Generation Time: Jul 16, 2022 at 08:27 PM
Server version: 8.0.27
PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
*/


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `is4460foodreview`
--

CREATE DATABASE IF NOT EXISTS `is4460foodreview` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `is4460foodreview`;

-- --------------------------------------------------------

--
-- Table structure for table `followmember`
--

DROP TABLE IF EXISTS `followmember`;
CREATE TABLE IF NOT EXISTS `followmember` (
  `RelationshipID` int NOT NULL AUTO_INCREMENT,
  `PrimaryMemberID` int NOT NULL,
  `FollowerMemberID` int NOT NULL,
  `FollowStartDate` date NOT NULL,
  PRIMARY KEY (`RelationshipID`),
  KEY `FollowerMemberID` (`FollowerMemberID`),
  KEY `PrimaryMemberID` (`PrimaryMemberID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `followmember`
--

INSERT INTO `followmember` (`RelationshipID`, `PrimaryMemberID`, `FollowerMemberID`, `FollowStartDate`) VALUES
(1, 2, 1, '2021-12-07'),
(2, 2, 3, '2022-03-08'),
(3, 2, 4, '2020-02-11'),
(4, 4, 1, '2022-07-27'),
(5, 3, 2, '2022-07-12'),
(6, 1, 2, '2022-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `followrestaurant`
--

DROP TABLE IF EXISTS `followrestaurant`;
CREATE TABLE IF NOT EXISTS `followrestaurant` (
  `FollowID` int NOT NULL AUTO_INCREMENT,
  `MemberID` int NOT NULL,
  `RestaurantID` int NOT NULL,
  `FollowDate` date NOT NULL,
  PRIMARY KEY (`FollowID`),
  KEY `MemberID` (`MemberID`),
  KEY `RestaurantID` (`RestaurantID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `followrestaurant`
--

INSERT INTO `followrestaurant` (`FollowID`, `MemberID`, `RestaurantID`, `FollowDate`) VALUES
(1, 1, 1, '2021-07-13'),
(2, 1, 2, '2021-12-14'),
(3, 2, 1, '2021-12-01'),
(4, 3, 1, '2022-04-03'),
(5, 4, 1, '2021-04-14'),
(6, 4, 2, '2022-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `FoodID` int NOT NULL AUTO_INCREMENT,
  `RestaurantID` int NOT NULL,
  `ItemName` varchar(128) NOT NULL,
  `ItemDescription` varchar(600) NOT NULL,
  `ItemType` varchar(128) NOT NULL,
  `Price` decimal(6,2) NOT NULL,
  `imagepath` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`FoodID`),
  KEY `RestaurantID` (`RestaurantID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`FoodID`, `RestaurantID`, `ItemName`, `ItemDescription`, `ItemType`, `Price`, `imagepath`) VALUES
(1, 1, 'Filet Mignon', 'The best cut of meat money can buy', 'entree', '125.00', NULL),
(2, 1, 'Garlic Mashed Potatoes with Gravy', 'Creamy potatoes covered in a gravy made from our secret recipe', 'Side', '25.00', NULL),
(3, 1, 'Caesar Salad', 'Fresh greens covered in our house made Caesar dressing sprinkled with aged parmesan cheese and hand cut croutons. ', 'side', '22.00', NULL),
(4, 2, 'Wender Burger', 'Two 1/4 lb. beef patties with onion rings and BBQ sauce.', 'entree', '7.15', NULL),
(5, 2, 'Cheese Fries', 'Fries covered in gooey American cheese.', 'side', '2.99', NULL),
(6, 2, 'Chocolate Shake', 'Cold and creamy shake to cool you down on hot days.', 'dessert', '4.55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `MemberID` int NOT NULL AUTO_INCREMENT,
  `UserID` int NOT NULL,
  `FirstName` varchar(128) NOT NULL,
  `LastName` varchar(128) NOT NULL,
  PRIMARY KEY (`MemberID`),
  KEY `UserID` (`UserID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MemberID`, `UserID`, `FirstName`, `LastName`) VALUES
(1, 2, 'John', 'Doe'),
(2, 3, 'Jane', 'Doe'),
(3, 4, 'Miles', 'Teller'),
(4, 1, 'TestFirstName', 'TestLastName');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE IF NOT EXISTS `restaurant` (
  `RestaurantID` int NOT NULL AUTO_INCREMENT,
  `RestaurantName` varchar(128) NOT NULL,
  `Description` varchar(600) NOT NULL,
  `Street` varchar(128) NOT NULL,
  `City` varchar(128) NOT NULL,
  `ZipCode` char(5) NOT NULL,
  `state` char(2) NOT NULL,
  `OwnerName` varchar(128) NOT NULL,
  `Phone` char(12) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `RestaurantType` varchar(128) NOT NULL,
  `MembershipType` int NOT NULL,
  `UserID` int NOT NULL,
  `imagepath` varchar(128) NOT NULL,
  PRIMARY KEY (`RestaurantID`),
  KEY `MembershipType` (`MembershipType`),
  KEY `UserID` (`UserID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`RestaurantID`, `RestaurantName`, `Description`, `Street`, `City`, `ZipCode`, `state`, `OwnerName`, `Phone`, `Email`, `RestaurantType`, `MembershipType`, `UserID`, `imagepath`) VALUES
(1, 'Money Street Grill', 'The most expensive place in town that is sure to amaze your taste buds.', '1234 Money St.', 'Salt Lake City', '84100', 'UT', 'Reginald Monopoly', '810-123-4567', 'moneystgrill@grill.com', 'Fancy', 1, 5, '\\test\\moneystreet'),
(2, 'Wender\'s', 'Quick and cheap fast food that still tastes good.', '5467 Main St.', 'Salt Lake City', '84111', 'UT', 'Ronald Wendy', '789-654-1234', 'admin@wenders.com', 'Fast Food', 2, 6, '\\test\\wenders');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `ReviewID` int NOT NULL AUTO_INCREMENT,
  `FoodID` int NOT NULL,
  `MemberID` int NOT NULL,
  `ReviewText` varchar(600) NOT NULL,
  `Rating` decimal(1,0) NOT NULL,
  `Date` date NOT NULL,
  `Response` varchar(600) NOT NULL,
  PRIMARY KEY (`ReviewID`),
  KEY `MemberID` (`MemberID`),
  KEY `FoodID` (`FoodID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ReviewID`, `FoodID`, `MemberID`, `ReviewText`, `Rating`, `Date`, `Response`) VALUES
(1, 1, 1, 'The filet mignon is amazing at Money Street. If you like food and have tons of money this is the item to get', '9', '2022-07-14', 'We are the best place in town, and we\'re glad you felt that way too.'),
(2, 2, 3, 'They\'re potatoes, definitely not worth the money it cost to get them. Plus they were a little lumpy.', '3', '2022-07-01', 'We\'re sorry you don\'t have a refined palate worthy of our chefs\' creation.'),
(3, 4, 2, 'Great burger for the price you pay. A little greasy, but sometimes that\'s just what you want.', '8', '2022-05-17', ''),
(4, 6, 3, 'The chocolate shake at Wender\'s is more like chocolate milk than a shake.', '3', '2022-05-02', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

DROP TABLE IF EXISTS `subscription`;
CREATE TABLE IF NOT EXISTS `subscription` (
  `MembershipType` int NOT NULL AUTO_INCREMENT,
  `Amount` decimal(7,2) NOT NULL,
  `MembershipDesc` varchar(128) NOT NULL,
  PRIMARY KEY (`MembershipType`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`MembershipType`, `Amount`, `MembershipDesc`) VALUES
(1, '100.75', 'Premium'),
(2, '55.55', 'Standard');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL UNIQUE,
  `phone` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `password` (`password`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `email`, `phone`, `name`, `password`, `Role`) VALUES
(1, 'test email', 'test phone', 'test name', 'test password', 'member'),
(2, 'johndoe@gmail.com', '801-123-4567', 'jdoe124', 'is4460', 'member'),
(3, 'janedoe@gmail.com', '385-123-4567', 'jdoelovesfood', 'foodie1234', 'member'),
(4, 'mteller@hotmail.com', '801-321-6547', 'tellerme', '546beach!', 'member'),
(5, 'mrmonopoly@gmail.com', '485-564-7894', 'moneymoney', 'allthe$4me', 'restaurant'),
(6, 'ronaldwendy@gmail.com', '321-654-9874', 'rwendy12', 'IloveFries', 'restaurant');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
