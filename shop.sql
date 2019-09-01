-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2019 at 12:16 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `description`, `photo`) VALUES
(3, 'books', 'A book is a set of sheets of paper, parchment, or similar materials that are fastened together to hinge at one side', 'EW94efqlbHCjVz0h3PDR.jpg'),
(1, 'sports', 'Sport (British English) or sports (American English) includes all forms of competitive physical activity or games which,[1] through casual or organised participation, aim to use, maintain or improve physical ability and skills while providing enjoyment to participants, and in some cases, entertainment for spectators.[2] Usually the contest or game is between two sides, each attempting to exceed the other. Some sports allow a tie game; others provide tie-breaking methods, to ensure one winner and one loser.', 'aXZI6CF7pNHK9b3DPcUj.jpg'),
(2, 'elecronics', 'Consumer electronics or home electronics are electronic or digital equipment intended for everyday use, typically in private homes. Consumer electronics include devices used for entertainment (flatscreen TVs, DVD players, DVD movies, iPods, video games, remote control cars, etc.), communications (telephones, cell phones, e-mail-capable laptops, etc.), and home-office activities (e.g., desktop computers, printers, paper shredders', 'v34xg0ZiEHwMLRmNVkWh.jpg'),
(4, 'fitness', 'Physical fitness is a state of health and well-being and, more specifically, the ability to perform aspects of sports, occupations and daily activities.', 'GApJb39Qvmo8DaUPdylI.jpg'),
(5, 'cosmetics', 'Cosmetics are substances or products used to enhance or alter the appearance or fragrance of the body. Many cosmetics are designed for use of applying to the face and hair.', 'n4zclSDEwyFKRjYAImeW.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `guest_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(20) NOT NULL,
  `mobile_number` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`guest_id`, `email`, `name`, `address`, `city`, `country`, `mobile_number`) VALUES
(1, 'dhagarra@yahoo.com', 'Alok Bisht', 'Mohit Nagar', 'New Delhi', 'India', '8954689842'),
(2, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `order_date` date NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `email`, `order_date`, `amount`) VALUES
(1, 'ndhagarra@gmail.com', '2017-07-25', 6030),
(2, 'dhagarra@yahoo.com', '2017-07-25', 4470),
(3, '', '2019-07-18', 540),
(4, '', '2019-07-18', 0),
(5, '', '2019-07-18', 0),
(6, '', '2019-07-18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`details_id`, `order_id`, `product_id`, `name`, `quantity`, `price`) VALUES
(1, 1, 8, 'javascript', 2, 540),
(2, 1, 3, 'pendrive', 3, 1500),
(3, 1, 13, 'skipping_rope', 1, 450),
(4, 2, 9, 'php', 3, 690),
(5, 2, 5, 'football', 2, 1200),
(6, 3, 8, 'javascript', 1, 540);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `company_name` varchar(40) NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `company_name`, `price`, `photo`, `category_id`) VALUES
(5, 'football', 'Football is a family of team sports that involve, to varying degrees, kicking a ball with the foot to score a goal. Unqualified, the word football is understood to refer to whichever form of football is the most popular in the regional context in which the word appears. ', 'addidas', 1200, 'j5hwrflx9Us2vYoW6LZ8.jpg', 1),
(2, 'mobile', 'Cosmetics are substances or products used to enhance or alter the appearance or fragrance of the body. Many cosmetics are designed for use of applying to the face and hair. They are generally mixtures of chemical compounds.', 'apple', 40000, 'D7R6um4qzXiM83OYfI2p.jpg', 2),
(3, 'pendrive', 'A USB flash drive, also variously known as a USB drive, USB stick, thumb drive, pen drive, jump drive, disk key, disk on key, flash-drive, memory stick or USB memory', 'hp', 1500, 'F6Rag04fmpwtshoZSHLy.jpg', 2),
(4, 'laptop', 'A laptop, often called a notebook or \"notebook computer\", is a small, portable personal computer with a \"clamshell\" form factor, an alphanumeric keyboard on the lower part of the \"clamshell\" and a thin LCD or LED computer screen on the upper portion', 'acer', 42000, 'cReiLvgYUK6yfjE3kmza.jpg', 2),
(6, 'tennis', 'Tennis is a racket sport that can be played individually against a single opponent (singles) or between two teams of two players each (doubles). Each player uses a tennis racket that is strung with cord to strike a hollow rubber ball covered with felt over ', 'jonex', 2300, 'lCXFB6kb2wI7i5jfsmQH.jpg', 1),
(7, 'vollyball', 'Volleyball is a team sport in which two teams of six players are separated by a net.', 'molten', 1150, 'gr2Lxone97RTifhFOjsI.jpg', 1),
(8, 'javascript', 'A book is a set of sheets of paper, parchment, or similar materials that are fastened together to hinge at one side. A single sheet within a book is a leaf, and each side of a leaf is a page.', 'oreilly', 540, 'HVqAvyROmtP85xUoFNBr.jpg', 3),
(9, 'php', 'A book is a set of sheets of paper, parchment, or similar materials that are fastened together to hinge at one side. A single sheet within a book is a leaf, and each side of a leaf is a page.', 'oreilly', 690, 'Fi9aP56l8xeHCfgY4zTc.jpg', 3),
(10, 'word power', 'A book is a set of sheets of paper, parchment, or similar materials that are fastened together to hinge at one side. A single sheet within a book is a leaf, and each side of a leaf is a page.', 'norman lewis', 350, 'p36JqDkP9NwalMdXKLES.jpg', 3),
(11, 'treadmill', 'Physical fitness is a state of health and well-being and, more specifically, the ability to perform aspects of sports', 'style', 14500, 'Q9ohuMksj6pJevtOdF87.jpg', 4),
(12, 'dumbbell', 'Physical fitness is a state of health and well-being and, more specifically, the ability to perform aspects of sports', 'style', 1500, 'CAw1GWEXi3IvTgLDSa75.jpg', 4),
(13, 'skipping_rope', 'Physical fitness is a state of health and well-being and, more specifically, the ability to perform aspects of sports', 'nivia', 450, 'VPnDj9yExLd2QJN5pKzk.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_name` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(20) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `verified` int(11) NOT NULL,
  `verification_code` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `role_name`, `name`, `question`, `answer`, `address`, `city`, `country`, `mobile_number`, `verified`, `verification_code`) VALUES
('ndhagarra@gmail.com', 'f491398da0fd62dfed4cb8c7bb5f31fae2b117ea', 'member', 'Nagendra Dhagarra', 'Your favourite food', 'Dal', '334-F, Lane No 13\r\nMohit Nagar', 'Dehradun', 'India', '9319056587', 1, 'UWDj574gTG9kV8dIPYF9u4iTU783R4f7e6REw8Et6rg36'),
('', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'member', '', '', '', '', '', '', '', 1, 'DE864W57G7kgU69F6PeTiI3uR847R4djgUwr9ftEVY38T');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`details_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
