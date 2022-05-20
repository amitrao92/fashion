-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 01:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wardrobe_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', '2017-01-24 16:21:18', '04-05-2022 08:33:48 AM');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(12, 'Men', 'Lorem Ipsum is simply dummy text of the printing and typesetting ', '2022-05-08 07:10:46', NULL),
(13, 'Women', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '2022-05-08 07:11:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_equiry`
--

CREATE TABLE `contact_equiry` (
  `id` bigint(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_equiry`
--

INSERT INTO `contact_equiry` (`id`, `fname`, `lname`, `phone`, `email`, `message`) VALUES
(1, 'amit', 'rao', '9803437850', 'raoamit558@gmail.com', 'ssss');

-- --------------------------------------------------------

--
-- Table structure for table `online_payment`
--

CREATE TABLE `online_payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `country` varchar(287) NOT NULL,
  `provienc` varchar(55) NOT NULL,
  `cardholder_name` varchar(100) NOT NULL,
  `card_num` varchar(100) NOT NULL,
  `expire_date` date NOT NULL,
  `cvv` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_payment`
--

INSERT INTO `online_payment` (`id`, `user_id`, `fname`, `lname`, `email`, `phone`, `address`, `country`, `provienc`, `cardholder_name`, `card_num`, `expire_date`, `cvv`) VALUES
(3, 0, 'raman', 'singh', 'raman44@gmain.com', '1234556', 'new ss', 'Uk', '2', 'raman', '123', '0000-00-00', '233'),
(4, 0, 'raman', 'singh', 'raman44@gmain.com', '1234556', 'new ss', 'Uk', '2', 'raman', '123', '0000-00-00', '233'),
(5, 0, 'amit', 'rao', 'raoamit558@gmail.com', '9803437850', 'new sunder nagar', 'China', '3', 'raman', '2233333', '0000-00-00', '555'),
(6, 0, 'amit', 'rao', 'raoamit55800@gmail.com', '9803437850', 'new sunder nagar', 'Uk', '2', 'raman', 'gdhgf', '0000-00-00', 'ggg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`) VALUES
(1, 1, '3', 1, '2017-03-07 19:32:57', 'COD', NULL),
(3, 1, '4', 1, '2017-03-10 19:43:04', 'Debit / Credit card', 'Delivered'),
(4, 1, '17', 1, '2017-03-08 16:14:17', 'COD', 'in Process'),
(5, 1, '3', 1, '2017-03-08 19:21:38', 'COD', NULL),
(6, 1, '4', 1, '2017-03-08 19:21:38', 'COD', NULL),
(7, 5, '3', 1, '2022-05-04 02:57:26', 'COD', 'Delivered'),
(8, 6, '21', 1, '2022-05-04 12:06:51', 'Internet Banking', 'Delivered'),
(9, 6, '21', 1, '2022-05-04 16:53:56', 'COD', 'Delivered'),
(10, 7, '40', 1, '2022-05-08 10:04:51', 'COD', NULL),
(12, 7, '46', 1, '2022-05-08 13:11:12', NULL, NULL),
(13, 8, '49', 1, '2022-05-08 15:26:37', '', 'Delivered'),
(14, 8, '46', 4, '2022-05-08 16:29:28', '', 'Delivered'),
(15, 8, '32', 2, '2022-05-11 15:26:12', '', 'Delivered'),
(16, 8, '51', 1, '2022-05-11 15:27:59', 'COD', 'Delivered'),
(19, 8, '30', 1, '2022-05-16 17:04:59', 'COD', NULL),
(20, 8, '55', 1, '2022-05-16 17:07:18', '', NULL),
(21, 8, '30', 1, '2022-05-16 17:17:49', 'COD', NULL),
(22, 8, '55', 1, '2022-05-19 15:55:16', 'COD', NULL),
(23, 8, '32', 1, '2022-05-19 15:59:44', 'COD', NULL),
(24, 14, '55', 2, '2022-05-19 16:03:38', 'COD', NULL),
(25, 15, '51', 1, '2022-05-19 16:09:53', 'COD', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderId` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertrackhistory`
--

INSERT INTO `ordertrackhistory` (`id`, `orderId`, `status`, `remark`, `postingDate`) VALUES
(1, 3, 'in Process', 'Order has been Shipped.', '2017-03-10 19:36:45'),
(2, 1, 'Delivered', 'Order Has been delivered', '2017-03-10 19:37:31'),
(3, 3, 'Delivered', 'Product delivered successfully', '2017-03-10 19:43:04'),
(4, 4, 'in Process', 'Product ready for Shipping', '2017-03-10 19:50:36'),
(5, 7, 'Delivered', 'okk', '2022-05-04 03:05:19'),
(6, 8, 'Delivered', 'ok reched', '2022-05-04 12:08:00'),
(7, 9, 'Delivered', 'enjoy ', '2022-05-04 16:55:22'),
(8, 13, 'Delivered', 'gg', '2022-05-16 17:01:13'),
(9, 15, 'Delivered', 'yyy', '2022-05-16 17:01:46'),
(10, 18, 'Delivered', 'ghuj', '2022-05-16 17:02:09'),
(11, 14, 'Delivered', 'yukk', '2022-05-16 17:02:30'),
(12, 17, 'Delivered', 'gl,h', '2022-05-16 17:02:49'),
(13, 16, 'Delivered', 'jkgggkjk..', '2022-05-16 17:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productCompany` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productPriceBeforeDiscount` int(11) DEFAULT NULL,
  `productDescription` longtext DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `shippingCharge` int(11) DEFAULT NULL,
  `productAvailability` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `subCategory`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productDescription`, `productImage1`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`) VALUES
(30, 13, 28, 'Tshirts', 'Gucci', 4400, 3000, '<strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry.</span>', 'download (3).jfif', 55, 'In Stock', '2022-05-08 07:57:38', NULL),
(31, 13, 28, 'Shirts', 'Nyaka', 500, 600, '<strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry.</span><br>', 'download (2).jfif', 40, 'Out of Stock', '2022-05-08 08:19:27', NULL),
(32, 13, 28, 'Tshirt-top', 'Mintra', 600, 5000, '<strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry.</span><br>', 'download (1).jfif', 66, 'In Stock', '2022-05-08 08:29:18', NULL),
(33, 13, 30, 'Formal trousers for women', 'Classical', 499, 500, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable looking at its layout.&nbsp;</span><br>', 'Neelam-Fashion-Rayon-Palazzos-Single-SDL275694615-1-bdabd.jpg', 20, 'In Stock', '2022-05-08 08:34:36', NULL),
(34, 13, 30, 'Trousers & Pants for Women ', ' AJIO', 300, 800, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.&nbsp;</span><br>', 'Neelam-Fashion-Rayon-Palazzos-Single-SDL275694615-3-7fd6c.jpg', 30, 'In Stock', '2022-05-08 08:36:53', NULL),
(35, 13, 30, 'Poly Lounge', 'Zivame Knit', 250, 300, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.&nbsp;</span><br>', 'Neelam-Fashion-Rayon-Palazzos-Single-SDL275694615-2-13eec.jpg', 10, 'In Stock', '2022-05-08 08:39:19', NULL),
(36, 13, 32, 'Denim Jeans', 'Denim', 300, 0, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.&nbsp;</span><br>', 'download (6).jfif', 40, 'In Stock', '2022-05-08 08:42:37', NULL),
(37, 13, 32, 'Denim Jeans women', 'Denim Demo', 300, 600, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.&nbsp;</span><br>', 'download (8).jfif', 10, 'In Stock', '2022-05-08 08:44:34', NULL),
(38, 13, 32, 'Denim Demo1', 'Denim ', 500, 800, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.&nbsp;</span><br>', 'download (5).jfif', 40, 'Out of Stock', '2022-05-08 08:46:03', NULL),
(39, 14, 33, 'Casual ', 'Peetar England', 488, 599, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.&nbsp;</span><br>', 'download (15).jfif', 30, 'In Stock', '2022-05-08 08:53:03', NULL),
(40, 14, 33, 'Shirts', 'Shirts', 599, 600, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.&nbsp;</span><br>', 'images (7).jfif', 52, 'In Stock', '2022-05-08 09:00:28', NULL),
(41, 14, 33, 'testii', 'neww', 566, 5999, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content&nbsp;</span><br>', 'images (6).jfif', 56, 'In Stock', '2022-05-08 09:01:49', NULL),
(42, 14, 34, 'Clothing Bottom', 'Trendy', 300, 600, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content&nbsp;</span><br>', 'download (24).jfif', 80, 'In Stock', '2022-05-08 09:05:16', NULL),
(43, 14, 34, 'Clothing One', 'Realeyone', 400, 700, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content&nbsp;</span><br>', 'download (23).jfif', 20, 'In Stock', '2022-05-08 09:06:37', NULL),
(44, 14, 34, 'Clothing Two', 'Clothingway', 500, 700, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content&nbsp;</span><br>', 'images (10).jfif', 30, 'In Stock', '2022-05-08 09:09:07', NULL),
(45, 15, 35, 'Fashion', 'FashionStyle', 300, 800, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content&nbsp;</span><br>', 'images (4).jfif', 29, 'In Stock', '2022-05-08 09:11:18', NULL),
(46, 15, 35, 'Fashion Style', 'FashionTrendy', 200, 300, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content&nbsp;</span><br>', 'images (2).jfif', 5, 'In Stock', '2022-05-08 09:12:37', NULL),
(47, 15, 35, 'Fashion ', 'Fashion Clear', 400, 800, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content&nbsp;</span><br>', 'images (1).jfif', 76, 'Out of Stock', '2022-05-08 09:15:14', NULL),
(48, 16, 37, 'NewinBottom', 'Newindemo', 5000, 6000, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content&nbsp;</span><br>', 'download (22).jfif', 34, 'In Stock', '2022-05-08 09:20:16', NULL),
(49, 16, 37, 'NewTops', 'Newproduct', 200, 500, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content&nbsp;</span><br>', 'images (8).jfif', 10, 'In Stock', '2022-05-08 09:21:47', NULL),
(50, 16, 38, 'NewonBottom', 'NewonCompany', 200, 700, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content&nbsp;</span><br>', 'images (2).jfif', 50, 'In Stock', '2022-05-08 09:23:31', NULL),
(51, 12, 27, 'Tshirts', 'roker', 200, 600, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content&nbsp;</span><br>', 'download (14).jfif', 20, 'In Stock', '2022-05-08 09:27:23', NULL),
(52, 13, 41, 'newin test-w', 'roker', 800, 1200, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content&nbsp;</span><br>', 'download (2).jfif', 40, 'In Stock', '2022-05-08 17:05:32', NULL),
(53, 13, 41, 'newin2', 'test1', 588, 3000, '<span style=\"color: rgb(0, 0, 0); font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content&nbsp;</span><br>', 'download (3).jfif', 20, 'In Stock', '2022-05-08 17:12:40', NULL),
(54, 12, 40, 'newin-m', 'testttnn', 22, 299, 'dddddddddddddddddddddddddd', 'download (20).jfif', 22, 'In Stock', '2022-05-08 17:28:54', NULL),
(55, 12, 40, 'testt-mm', 'nem-m', 200, 300, 'rrrrrrrrrrrrrrrrrrrrr', 'download (22).jfif', 300, 'In Stock', '2022-05-08 17:34:38', NULL),
(56, 13, 45, 'clothing-w1', 'clothing-w1', 122, 233, 'clothing-w1clothing-w1clothing-w1<br>', 'download (5).jfif', 21, 'In Stock', '2022-05-08 17:36:45', NULL),
(57, 13, 45, 'cothing-w2', 'cothing-w2', 500, 700, 'cothing-w2cothing-w2cothing-w2cothing-w2cothing-w2<br>', 'download.jfif', 40, 'In Stock', '2022-05-08 17:38:06', NULL),
(58, 12, 44, 'clothing-m1', 'clothing-m1', 123, 2333, 'clothing-m1clothing-m1clothing-m1<br>', 'download (13).jfif', 12, 'In Stock', '2022-05-08 17:39:22', NULL),
(59, 12, 44, 'clothing-m2', 'clothing-m2', 455, 500, 'clothing-m2clothing-m2clothing-m2<br>', 'download (15).jfif', 33, 'In Stock', '2022-05-08 17:40:14', NULL),
(60, 13, 43, 'Fashion-w1', 'Fashion-w1', 333, 599, 'Fashion-w1Fashion-w1Fashion-w1<br>', 'download (6).jfif', 67, 'Out of Stock', '2022-05-08 17:41:59', NULL),
(61, 13, 43, 'fashion-w2', 'fashion-w2', 455, 599, 'fashion-w2fashion-w2fashion-w2fashion-w2<br>', 'download (8).jfif', 6, 'In Stock', '2022-05-08 17:43:06', NULL),
(62, 12, 42, 'fashion-m1', 'fashion-m1', 1000, 20000, 'fashion-m1fashion-m1fashion-m1fashion-m1<br>', 'download (23).jfif', 20, 'In Stock', '2022-05-08 17:44:30', NULL),
(63, 12, 42, 'fashion-m2', 'fashion-m2', 123, 1234, 'fashion-m2fashion-m2fashion-m2fashion-m2<br>', 'download (19).jfif', 12, 'In Stock', '2022-05-08 17:45:34', NULL),
(64, 13, 47, 'sale-w1', 'sale-w1', 10, 20, 'sale-w1sale-w1sale-w1<br>', 'Neelam-Fashion-Rayon-Palazzos-Single-SDL275694615-1-bdabd.jpg', 2, 'Out of Stock', '2022-05-08 17:47:41', NULL),
(65, 13, 47, 'sale-w2', 'sale-w2', 50, 80, 'sale-w2sale-w2sale-w2sale-w2<br>', 'download (9).jfif', 3, 'In Stock', '2022-05-08 17:48:55', NULL),
(66, 12, 46, 'sale-m1', 'sale-m1', 20, 200, 'sale-m1sale-m1sale-m1<br>', 'images (4).jfif', 10, 'In Stock', '2022-05-08 17:51:15', NULL),
(67, 12, 46, 'sale-m2', 'sale-m1', 300, 600, 'sale-m1sale-m1sale-m1<br>', 'images (3).jfif', 23, 'Out of Stock', '2022-05-08 17:52:07', NULL),
(68, 13, 43, 'tttttttoooooooooooo', 'tttttttoooooooooooo', 22, 222, 'tttttttooooooooooootttttttoooooooooooo11', 'download (12).jfif', 22, 'In Stock', '2022-05-09 03:49:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(27, 12, ' Top M', '2022-05-08 07:11:19', NULL),
(28, 13, ' TOP W', '2022-05-08 07:11:25', NULL),
(29, 12, 'Bottom M', '2022-05-08 07:11:37', NULL),
(30, 13, 'Bottom W', '2022-05-08 07:11:47', NULL),
(32, 13, 'Denim', '2022-05-08 08:41:01', NULL),
(33, 14, 'Top', '2022-05-08 08:50:54', NULL),
(34, 14, 'Bottom', '2022-05-08 09:03:01', NULL),
(35, 15, 'Top', '2022-05-08 09:10:00', NULL),
(36, 15, 'Bottom', '2022-05-08 09:10:13', NULL),
(37, 16, 'Top', '2022-05-08 09:18:21', NULL),
(38, 16, 'Bottom', '2022-05-08 09:18:56', NULL),
(39, 12, 'Denim', '2022-05-08 16:57:14', NULL),
(40, 12, 'newin', '2022-05-08 16:58:13', NULL),
(41, 13, 'newin', '2022-05-08 16:58:21', NULL),
(42, 12, 'Fashion', '2022-05-08 16:58:48', NULL),
(43, 13, 'Fashion', '2022-05-08 16:59:00', NULL),
(44, 12, 'Clothing', '2022-05-08 17:00:12', NULL),
(45, 13, 'Clothing', '2022-05-08 17:00:17', NULL),
(46, 12, 'Mansale', '2022-05-08 17:00:57', NULL),
(47, 13, 'Womensale', '2022-05-08 17:01:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(24, 'aman@digihand.co.in', 0x3a3a3100000000000000000000000000, '2021-03-14 07:26:52', NULL, 1),
(25, 'gkamit943@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-04 02:54:10', NULL, 0),
(26, 'raoamit558@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-04 02:55:05', NULL, 1),
(27, 'sak@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-04 12:06:29', '04-05-2022 05:49:14 PM', 1),
(28, 'sak@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-04 16:53:24', '04-05-2022 10:51:06 PM', 1),
(29, '', 0x3a3a3100000000000000000000000000, '2022-05-07 15:59:48', NULL, 0),
(30, '', 0x3a3a3100000000000000000000000000, '2022-05-07 16:16:02', NULL, 0),
(31, '', 0x3a3a3100000000000000000000000000, '2022-05-07 16:32:47', NULL, 0),
(32, '', 0x3a3a3100000000000000000000000000, '2022-05-07 17:10:44', NULL, 0),
(33, 'raj@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-07 17:15:45', '07-05-2022 10:46:49 PM', 1),
(34, '', 0x3a3a3100000000000000000000000000, '2022-05-08 00:40:34', NULL, 0),
(35, 'raj@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-08 00:54:34', '08-05-2022 07:32:40 AM', 1),
(36, 'raj@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-08 02:19:29', NULL, 1),
(37, 'raj@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-08 10:03:28', '08-05-2022 05:00:31 PM', 1),
(38, 'raj@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-08 12:26:38', NULL, 0),
(39, 'raj@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-08 12:26:57', NULL, 1),
(40, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-08 15:26:11', '08-05-2022 09:07:44 PM', 1),
(41, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-08 16:27:49', '08-05-2022 11:22:27 PM', 1),
(42, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-08 18:13:58', '08-05-2022 11:44:57 PM', 1),
(43, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-08 18:15:17', '08-05-2022 11:48:08 PM', 1),
(44, '', 0x3a3a3100000000000000000000000000, '2022-05-08 19:53:23', NULL, 0),
(45, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-08 19:54:46', '09-05-2022 01:53:01 AM', 1),
(46, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-08 20:23:35', '09-05-2022 01:53:38 AM', 1),
(47, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-09 15:47:44', '09-05-2022 09:20:24 PM', 1),
(48, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-09 15:57:40', '09-05-2022 10:55:06 PM', 1),
(49, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-09 17:44:11', '09-05-2022 11:18:43 PM', 1),
(50, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-11 15:24:53', '11-05-2022 08:58:44 PM', 1),
(51, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-11 15:40:57', NULL, 1),
(52, 'user@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-13 12:02:35', NULL, 0),
(53, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-13 12:02:58', NULL, 0),
(54, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-13 12:03:07', '13-05-2022 05:34:20 PM', 1),
(55, '', 0x3a3a3100000000000000000000000000, '2022-05-13 12:19:37', NULL, 0),
(56, 'pawan@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-14 00:46:19', '14-05-2022 06:20:46 AM', 1),
(57, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-14 00:51:04', NULL, 0),
(58, 'pawan@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-14 00:51:21', '14-05-2022 06:21:31 AM', 1),
(59, 'pawan@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-14 00:52:23', '14-05-2022 06:26:57 AM', 1),
(60, 'pawan@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-14 01:08:21', '14-05-2022 06:38:56 AM', 1),
(61, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-14 01:09:10', '14-05-2022 06:40:15 AM', 1),
(62, 'pawan@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-14 01:14:01', '14-05-2022 06:44:03 AM', 1),
(63, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-14 01:14:15', NULL, 0),
(64, 'pawan@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-14 02:13:42', '14-05-2022 07:43:44 AM', 1),
(65, 'pawan@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-14 02:14:08', NULL, 0),
(66, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-14 06:40:17', NULL, 0),
(67, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-14 06:41:36', '14-05-2022 12:15:32 PM', 1),
(68, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-14 06:47:36', '14-05-2022 12:21:07 PM', 1),
(69, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-14 06:52:33', '14-05-2022 12:23:58 PM', 1),
(70, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-14 06:56:56', '14-05-2022 12:32:18 PM', 1),
(71, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-14 07:16:20', '14-05-2022 12:52:29 PM', 1),
(72, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-14 07:24:08', '14-05-2022 12:54:22 PM', 1),
(73, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-14 07:25:53', '14-05-2022 01:07:48 PM', 1),
(74, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-15 08:46:33', NULL, 0),
(75, 'pawan@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-15 08:49:58', NULL, 0),
(76, 'pawan@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-15 08:50:06', NULL, 0),
(77, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-15 08:50:19', NULL, 0),
(78, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-15 08:51:00', '15-05-2022 02:21:24 PM', 1),
(79, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-15 08:51:40', NULL, 0),
(80, 'romy@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-15 08:54:43', '15-05-2022 02:28:15 PM', 1),
(81, 'romy@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-15 08:58:33', '15-05-2022 02:29:17 PM', 1),
(82, 'romy@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-15 08:59:33', NULL, 0),
(83, 'romy@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-15 09:01:54', NULL, 0),
(84, 'romy@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-15 09:02:27', '15-05-2022 02:32:31 PM', 1),
(85, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-15 09:05:02', NULL, 0),
(86, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-15 09:05:26', '15-05-2022 02:35:28 PM', 1),
(87, 'silly@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-15 09:06:39', NULL, 1),
(88, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-16 16:51:22', NULL, 0),
(89, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-16 16:55:33', NULL, 1),
(90, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-18 00:35:34', NULL, 1),
(91, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-18 14:21:23', NULL, 1),
(92, 'raman@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-19 15:54:13', '19-05-2022 09:30:14 PM', 1),
(93, 'sak@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-19 16:00:27', NULL, 0),
(94, 'sak@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-19 16:00:36', '19-05-2022 09:30:50 PM', 1),
(95, 'rajdeep@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-19 16:02:19', '19-05-2022 09:37:41 PM', 1),
(96, 'kamal@gmail.com', 0x3a3a3100000000000000000000000000, '2022-05-19 16:08:47', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `faq_question` varchar(100) NOT NULL,
  `faq_answer` varchar(100) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `shippingAddress` longtext DEFAULT NULL,
  `shippingState` varchar(255) DEFAULT NULL,
  `shippingCity` varchar(255) DEFAULT NULL,
  `shippingPincode` int(11) DEFAULT NULL,
  `billingAddress` longtext DEFAULT NULL,
  `billingState` varchar(255) DEFAULT NULL,
  `billingCity` varchar(255) DEFAULT NULL,
  `billingPincode` int(11) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `status`, `faq_question`, `faq_answer`, `name`, `email`, `contactno`, `password`, `shippingAddress`, `shippingState`, `shippingCity`, `shippingPincode`, `billingAddress`, `billingState`, `billingCity`, `billingPincode`, `regDate`, `updationDate`) VALUES
(4, 1, '', '', 'aman', 'aman@digihand.co.in', 8058596008, '73b25522615dac9cfd289ee35faef4ef', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-14 07:26:38', NULL),
(5, 0, '', '', 'amit', 'raoamit558@gmail.com', 1234567890, '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-04 02:53:47', NULL),
(6, 0, '', '', 'sak', 'sak@gmail.com', 1234567890, 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-04 12:06:16', NULL),
(8, 0, '', '', 'raman', 'raman@gmail.com', 9999999999, 'e10adc3949ba59abbe56e057f20f883e', 'shahin bagh77', 'Delhi', 'Delhi', 141010, 'ontario', 'Delhi', 'Delhi', 141010, '2022-05-08 15:25:44', NULL),
(13, 0, 'your_nick_nane', 'sal', 'silly', 'silly@gmail.com', 9999999999, '25d55ad283aa400af464c76d713c07ad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-15 09:06:28', NULL),
(15, 0, 'your_best_friend_nane', 'cake', 'kamal', 'kamal@gmail.com', 1234567890, '25d55ad283aa400af464c76d713c07ad', 'rajiv  nagar', 'Punjab', 'Ludhiana', 141010, 'rajiv nagar', 'Punjab11', 'Ludhiana', 141010, '2022-05-19 16:08:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `userId`, `productId`, `postingDate`) VALUES
(1, 1, 0, '2017-02-27 18:53:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_equiry`
--
ALTER TABLE `contact_equiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_payment`
--
ALTER TABLE `online_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact_equiry`
--
ALTER TABLE `contact_equiry`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `online_payment`
--
ALTER TABLE `online_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
