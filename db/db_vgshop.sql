-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 11:34 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vgshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `messagein`
--

CREATE TABLE `messagein` (
  `Id` int(11) NOT NULL,
  `SendTime` datetime DEFAULT NULL,
  `ReceiveTime` datetime DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `SMSC` varchar(80) DEFAULT NULL,
  `MessageText` text DEFAULT NULL,
  `MessageType` varchar(80) DEFAULT NULL,
  `MessageParts` int(11) DEFAULT NULL,
  `MessagePDU` text DEFAULT NULL,
  `Gateway` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagein`
--

INSERT INTO `messagein` (`Id`, `SendTime`, `ReceiveTime`, `MessageFrom`, `MessageTo`, `SMSC`, `MessageText`, `MessageType`, `MessageParts`, `MessagePDU`, `Gateway`, `UserId`) VALUES
(1, '2017-11-02 05:19:29', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FB0302,870906890101C651018715060350524F585932000187070603534D415254204D4D530001C65201872F060350524F5859325F3100018720060331302E3130322E36312E343600018721068501872206034E4150475052535F320001C6530187230603383038300001010101C600015501873606037734000187070603534D4152', NULL, NULL, NULL, NULL, NULL),
(2, '2017-11-02 05:19:34', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FB0303,54204D4D5300018739060350524F585932000187340603687474703A2F2F31302E3130322E36312E3233383A383030322F00010101', NULL, NULL, NULL, NULL, NULL),
(3, '2017-11-02 05:19:14', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FA0201,6C062F1F2DB69180923646443032463643313042394231363544354242413143304143413232424334343239453236423600030B6A00C54503312E310001C6560187070603534D41525420494E5445524E4554000101C65501871106034E4150475052535F330001871006AB0187070603534D41525420494E5445524E455400', NULL, NULL, NULL, NULL, NULL),
(4, '2017-11-02 05:19:19', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FA0202,0187140187080603696E7465726E65740001870906890101C600015501873606037732000187070603534D41525420494E5445524E45540001872206034E4150475052535F330001C65901873A0603687474703A2F2F6D2E736D6172742E636F6D2E7068000187070603484F4D450001871C01010101', NULL, NULL, NULL, NULL, NULL),
(5, '2017-11-02 05:19:24', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FB0301,6D062F1F2DB69180923432373832413042464145313131463335303137323744303141433530304134373930423843334500030B6A00C54503312E310001C6560187070603534D415254204D4D53000101C65501871106034E4150475052535F320001871006AB0187070603534D415254204D4D530001870806036D6D730001', NULL, NULL, NULL, NULL, NULL),
(6, '2017-11-02 05:19:29', NULL, '211', '+639305235027', NULL, '0B05040B8423F00003FB0302,870906890101C651018715060350524F585932000187070603534D415254204D4D530001C65201872F060350524F5859325F3100018720060331302E3130322E36312E343600018721068501872206034E4150475052535F320001C6530187230603383038300001010101C600015501873606037734000187070603534D4152', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messagelog`
--

CREATE TABLE `messagelog` (
  `Id` int(11) NOT NULL,
  `SendTime` datetime DEFAULT NULL,
  `ReceiveTime` datetime DEFAULT NULL,
  `StatusCode` int(11) DEFAULT NULL,
  `StatusText` varchar(80) DEFAULT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageText` text DEFAULT NULL,
  `MessageType` varchar(80) DEFAULT NULL,
  `MessageId` varchar(80) DEFAULT NULL,
  `ErrorCode` varchar(80) DEFAULT NULL,
  `ErrorText` varchar(80) DEFAULT NULL,
  `Gateway` varchar(80) DEFAULT NULL,
  `MessageParts` int(11) DEFAULT NULL,
  `MessagePDU` text DEFAULT NULL,
  `Connector` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL,
  `UserInfo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagelog`
--

INSERT INTO `messagelog` (`Id`, `SendTime`, `ReceiveTime`, `StatusCode`, `StatusText`, `MessageTo`, `MessageFrom`, `MessageText`, `MessageType`, `MessageId`, `ErrorCode`, `ErrorText`, `Gateway`, `MessageParts`, `MessagePDU`, `Connector`, `UserId`, `UserInfo`) VALUES
(1, '2018-01-27 20:38:08', NULL, 300, NULL, '09305235027', 'Hello Poh', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2018-01-27 20:39:06', NULL, 300, NULL, '09305235027', 'Hello Poh', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2018-01-27 20:49:14', NULL, 300, NULL, '09305235027', 'hi poh', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '2018-01-27 20:50:56', NULL, 300, NULL, '09508767867', 'hi poh', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '2018-02-09 17:52:26', NULL, 300, NULL, '09486457414', 'Test to send', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '2018-02-09 17:54:27', NULL, 300, NULL, '09486457414', 'Test to send', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '2018-02-09 17:55:11', NULL, 300, NULL, '09486457414', 'Test to send', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '2018-02-09 17:59:11', NULL, 300, NULL, '09486457414', 'Test to send', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '2018-02-09 18:00:12', NULL, 200, NULL, '+639486457414', 'yes', NULL, NULL, '1:+639486457414:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '2018-02-09 18:01:12', NULL, 200, NULL, '+639486457414', 'Test to send', NULL, NULL, '1:+639486457414:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '2018-02-09 18:02:58', NULL, 200, NULL, '+639486457414', 'FROM JANNO : Confirmed', NULL, NULL, '1:+639486457414:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '2018-02-09 18:05:22', NULL, 200, NULL, '+639486457414', 'FROM Bachelor of Science and Entrepreneurs : Your order has been .Confirmed', NULL, NULL, '1:+639486457414:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '2018-02-09 18:08:14', NULL, 200, NULL, '+639486457414', 'FROM Bachelor of Science and Entrepreneurs : Your order has been .Confirmed', NULL, NULL, '1:+639486457414:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '2018-02-09 18:21:41', NULL, 200, NULL, '+639486457414', 'FROM Bachelor of Science and Entrepreneurs : Your order has been .Confirmed', NULL, NULL, '1:+639486457414:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '2018-04-01 22:17:34', NULL, 300, NULL, '09123586545', 'Your code is .6048', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, '2018-04-01 22:18:20', NULL, 300, NULL, '09123586545', 'Your code is .9305', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '2018-04-01 22:20:15', NULL, 300, NULL, '09123586545', 'Your code is .2924', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '2018-04-01 22:42:36', NULL, 300, NULL, '09123586545', 'Your code is .6938', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '2018-04-02 00:40:53', NULL, 300, NULL, '9956112920', 'Your code is .7290', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '2018-04-02 00:42:14', NULL, 300, NULL, '9956112920', 'Your code is .4506', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, '2018-04-02 00:43:46', NULL, 300, NULL, '9956112920', 'Your code is .4506', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '2018-04-02 00:45:56', NULL, 300, NULL, '09956112920', 'Your code is .6988', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, '2018-04-02 00:47:17', NULL, 300, NULL, '09956112920', 'Your code is .4380', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '2018-04-02 00:48:53', NULL, 200, NULL, '639956112920', 'Your code is .5936', NULL, NULL, '1:639956112920:129', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, '2018-04-02 00:50:29', NULL, 200, NULL, '639956112920', 'Your code is .5349', NULL, NULL, '1:639956112920:130', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, '2018-04-02 00:53:32', NULL, 200, NULL, '639956112920', 'Your code is', NULL, NULL, '1:639956112920:131', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '2018-04-02 00:54:43', NULL, 200, NULL, '639956112920', 'Your code is 3407', NULL, NULL, '1:639956112920:132', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messageout`
--

CREATE TABLE `messageout` (
  `Id` int(11) NOT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageText` text DEFAULT NULL,
  `MessageType` varchar(80) DEFAULT NULL,
  `Gateway` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL,
  `UserInfo` text DEFAULT NULL,
  `Priority` int(11) DEFAULT NULL,
  `Scheduled` datetime DEFAULT NULL,
  `ValidityPeriod` int(11) DEFAULT NULL,
  `IsSent` tinyint(1) NOT NULL DEFAULT 0,
  `IsRead` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblabout`
--

CREATE TABLE `tblabout` (
  `CMS_ABOUT_ID` int(11) NOT NULL,
  `CMS_ABOUT_STORY` varchar(1999) NOT NULL,
  `CMS_ABOUT_MISSION` varchar(1999) NOT NULL,
  `CMS_ABOUT_VISION` varchar(1999) NOT NULL,
  `CMS_ABOUT_BUSINESSLOGO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblabout`
--

INSERT INTO `tblabout` (`CMS_ABOUT_ID`, `CMS_ABOUT_STORY`, `CMS_ABOUT_MISSION`, `CMS_ABOUT_VISION`, `CMS_ABOUT_BUSINESSLOGO`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '<p>Our Mission aims to be a service dedicated supplier of high-quality fresh fruit and vegetables; products of an outstanding quality, with guaranteed food safety and grown under circumstances with attention to people and the environment. We achieve this by acting with discretion, passion and commitment.</p>\r\n\r\n<p>1. &ldquo;To provide the highest quality product at the lowest possible price, the best consumer experience in the industry, and respect for our employees, business partners, and community.&rdquo;</p>\r\n\r\n<p>2.&nbsp;&ldquo;Inspire Loyalty in both our guests and in our staff.&rdquo;</p>\r\n', '<p>Fresh fruit and vegetables&nbsp;are a delicious, healthy food. Our products not only give you the vitamins, minerals and fibres you need to take care of your health, but thanks to their fragrance, flavour and colour, they give our consumers a shared pleasure: good food.</p>\r\n\r\n<p>Since our inception, we have not just grown food to feed people, but also to inspire people through our production system and sustainable way of doing business. We live in balance and harmony, both amongst ourselves as well as with our environment, maintaining the highest standards of quality and using only the best seeds.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '../../images/home/msqgelogo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblautonumber`
--

CREATE TABLE `tblautonumber` (
  `ID` int(11) NOT NULL,
  `AUTOSTART` varchar(11) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOEND` int(11) NOT NULL,
  `AUTOKEY` varchar(12) NOT NULL,
  `AUTONUM` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautonumber`
--

INSERT INTO `tblautonumber` (`ID`, `AUTOSTART`, `AUTOINC`, `AUTOEND`, `AUTOKEY`, `AUTONUM`) VALUES
(1, '2017', 1, 63, 'PROID', 10),
(2, '0', 1, 122, 'ordernumber', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `CATEGID` int(11) NOT NULL,
  `CATEGORIES` varchar(255) NOT NULL,
  `IS_VEGETABLE` tinyint(1) NOT NULL DEFAULT 0,
  `USERID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`CATEGID`, `CATEGORIES`, `IS_VEGETABLE`, `USERID`) VALUES
(38, 'BULBS', 1, 0),
(39, 'FLOWERS', 1, 0),
(41, 'LEAVES', 1, 0),
(42, 'ROOTS', 1, 0),
(43, 'SEEDS', 1, 0),
(44, 'STEMS', 1, 0),
(45, 'TUBERS', 1, 0),
(46, 'Marrow', 1, 0),
(47, 'CITRUS', 0, 0),
(48, 'BERRIES', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `CMS_CONTACT_ID` int(11) NOT NULL,
  `CMS_CONTACT_NAME` varchar(255) NOT NULL,
  `CMS_CONTACT_ADDRESS` varchar(255) NOT NULL,
  `CMS_CONTACT_EMAIL` varchar(255) NOT NULL,
  `CMS_CONTACT_PHONE` varchar(255) NOT NULL,
  `CMS_CONTACT_FB` varchar(255) NOT NULL,
  `CMS_CONTACT_IG` varchar(255) NOT NULL,
  `CMS_CONTACT_TWT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`CMS_CONTACT_ID`, `CMS_CONTACT_NAME`, `CMS_CONTACT_ADDRESS`, `CMS_CONTACT_EMAIL`, `CMS_CONTACT_PHONE`, `CMS_CONTACT_FB`, `CMS_CONTACT_IG`, `CMS_CONTACT_TWT`) VALUES
(1, 'Eduard and Edleen Fruits and Vegetable Shop', 'Kadiwa Market, Dasmarinas Cavite', 'EduardEdleenShop@gmail.com', '+63 919 988 1891', 'VFSHOP', 'VFSHOP', 'VFSHOP');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `CUSTOMERID` int(11) NOT NULL,
  `FNAME` varchar(30) NOT NULL,
  `LNAME` varchar(30) NOT NULL,
  `MNAME` varchar(30) NOT NULL,
  `CUSHOMENUM` varchar(90) NOT NULL,
  `STREETADD` text NOT NULL,
  `BRGYADD` text NOT NULL,
  `CITYADD` text NOT NULL,
  `PROVINCE` varchar(80) NOT NULL,
  `COUNTRY` varchar(30) NOT NULL,
  `DBIRTH` date NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `EMAILADD` varchar(40) NOT NULL,
  `ZIPCODE` int(6) NOT NULL,
  `CUSUNAME` varchar(20) NOT NULL,
  `CUSPASS` varchar(90) NOT NULL,
  `CUSPHOTO` varchar(255) NOT NULL,
  `TERMS` tinyint(4) NOT NULL,
  `DATEJOIN` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`CUSTOMERID`, `FNAME`, `LNAME`, `MNAME`, `CUSHOMENUM`, `STREETADD`, `BRGYADD`, `CITYADD`, `PROVINCE`, `COUNTRY`, `DBIRTH`, `GENDER`, `PHONE`, `EMAILADD`, `ZIPCODE`, `CUSUNAME`, `CUSPASS`, `CUSPHOTO`, `TERMS`, `DATEJOIN`) VALUES
(11, 'Juan', 'Sipag', '', '', '', '', '34 Brgy. Gwapo Dasma ', '', '', '0000-00-00', 'Male', '0992993939', '', 0, 'Juan', '242fabf3ae96975d16deb787215ae6c747661c12', '', 1, '2021-05-13'),
(12, 'Michelle', 'Amistad', '', '', '', '', '12 Brgy. Malagasang Imus', '', '', '0000-00-00', 'Female', '09123456789', '', 0, 'Mich', '7e9f57f8887c90895b7a41dd5a2724cfff2c12be', '', 1, '2021-05-13'),
(15, 'James', 'Ilog', '', '', '', '', '60 St. Paul Brgy. Burgos Silang, Cavite', '', '', '0000-00-00', 'Male', '0464150010', '', 0, 'James', '1565d65384368ebefbbd43aa37a4907385acff7f', '', 1, '2021-06-22'),
(17, 'test ', 'user', '', '', '', '', '61 St. Paul Street Brgy. Miguel Mojica', '', '', '0000-00-00', 'Male', '0464150010', '', 0, 'Rencel', 'ee349445116c2f7b1cf4c73abe45fe11d2f14e19', '', 1, '2021-07-04'),
(18, 'test ', 'test', '', '', '', '', 'Dasmariñas', '', '', '0000-00-00', 'Male', '09358007862', '', 0, 'Janno', '002eba9bfd9fc81c3d00d5b5ec983fac6f78023d', '', 1, '2021-07-04'),
(19, 'USER1', 'USER', '', '', '', '', 'DASMA', '', '', '0000-00-00', 'Male', '63921212123', '', 0, 'USER1', '4fa078779d5769efecf3784fec9f6b484cc178c0', '', 1, '2021-09-18'),
(20, 'Alejandro', 'De la Merced', '', '', '', '', 'the istana, imus city', '', '', '0000-00-00', 'Male', '0949914487', '', 0, 'alisaurus', 'e125f278bb775f2083f60d1aedfb0b38ab62f761', '', 1, '2021-10-10'),
(21, 'TEST', 'USER', '', '', '', '', 'TEST ADDRESS', '', '', '0000-00-00', 'Male', '0949914487', '', 0, 'sadasd', '3bc4e2bb17583a7c03c60e3d8f2c2b155946e02d', '', 1, '2021-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `tblinquiry`
--

CREATE TABLE `tblinquiry` (
  `INQID` int(11) NOT NULL,
  `INQNAME` varchar(255) NOT NULL,
  `INQEMAIL` varchar(255) NOT NULL,
  `INQSUBJ` varchar(255) NOT NULL,
  `INQMSG` varchar(255) NOT NULL,
  `INQDATECREATED` varchar(255) NOT NULL,
  `INQSTATUS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblinquiry`
--

INSERT INTO `tblinquiry` (`INQID`, `INQNAME`, `INQEMAIL`, `INQSUBJ`, `INQMSG`, `INQDATECREATED`, `INQSTATUS`) VALUES
(3, 'Juan Dela Cruz', 'jdlc@gmail.com', 'How to order?', 'Hi just wanted to ask how to order at your store from Dasma here as well', '2021-09-19 08:18:33', 'READ'),
(4, 'Anna Ann', 'ann@gmail.com', 'What is the best fruits here', 'hi asking what is the best fruit you offer here', '2021-09-19 14:20:35', 'READ'),
(5, 'Eduard Edleen', 'EduardEdleenShop@gmail.com', 'Website is great', 'Hi, this is the owner please be informed that we are please with the website', '2021-09-19 16:07:53', 'NEW');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `ORDERID` int(11) NOT NULL,
  `PROID` int(11) NOT NULL,
  `ORDEREDQTY` int(11) NOT NULL,
  `ORDEREDPRICE` double NOT NULL,
  `ORDEREDNUM` int(11) NOT NULL,
  `USERID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`ORDERID`, `PROID`, `ORDEREDQTY`, `ORDEREDPRICE`, `ORDEREDNUM`, `USERID`) VALUES
(13, 201757, 2, 160, 104, 0),
(14, 201754, 5, 300, 105, 0),
(15, 201759, 3, 120, 105, 0),
(16, 201760, 2, 140, 105, 0),
(17, 201761, 2, 100, 106, 0),
(18, 201754, 1, 60, 108, 0),
(19, 201754, 2, 120, 109, 0),
(20, 201758, 3, 240, 110, 0),
(21, 201759, 3, 120, 111, 0),
(22, 201761, 2, 100, 112, 0),
(23, 201760, 1, 70, 113, 0),
(24, 201755, 1, 50, 113, 0),
(25, 201754, 1, 60, 114, 0),
(26, 201757, 1, 80, 114, 0),
(27, 201754, 5, 300, 115, 0),
(28, 201758, 1, 80, 115, 0),
(29, 201754, 1, 60, 116, 0),
(30, 201754, 1, 60, 119, 0),
(31, 201755, 1, 50, 120, 0),
(32, 201754, 1, 60, 121, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `PROID` int(11) NOT NULL,
  `PRODNAME` varchar(100) NOT NULL,
  `PRODESC` varchar(255) DEFAULT NULL,
  `INGREDIENTS` varchar(255) NOT NULL,
  `PROQTY` int(11) DEFAULT NULL,
  `ORIGINALPRICE` double NOT NULL,
  `PROPRICE` double DEFAULT NULL,
  `CATEGID` int(11) DEFAULT NULL,
  `IMAGES` varchar(255) DEFAULT NULL,
  `PROSTATS` varchar(30) DEFAULT NULL,
  `OWNERNAME` varchar(90) NOT NULL,
  `OWNERPHONE` varchar(90) NOT NULL,
  `PROD_STATUS` varchar(255) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`PROID`, `PRODNAME`, `PRODESC`, `INGREDIENTS`, `PROQTY`, `ORIGINALPRICE`, `PROPRICE`, `CATEGID`, `IMAGES`, `PROSTATS`, `OWNERNAME`, `OWNERPHONE`, `PROD_STATUS`) VALUES
(201754, 'Garlic', '60 per kg.                                                                  ', '', 81, 0, 60, 38, 'uploaded_photos/2.jpg', 'Available', '', '', 'Active'),
(201755, 'Onion', '50 per kg.', '', 118, 0, 50, 38, 'uploaded_photos/3.jpg', 'Available', '', '', 'Active'),
(201757, 'Brocolli', '80 per pc.', '', 7, 0, 80, 39, 'uploaded_photos/Brocolli.jpg', 'Available', '', '', 'Active'),
(201758, 'Cauliflower', '80 per pc', '', 16, 0, 80, 39, 'uploaded_photos/Cauliflower.jpg', 'Available', '', '', 'Active'),
(201759, 'Eggplant', '40 per kg.', '', 44, 0, 40, 40, 'uploaded_photos/eggplant.jpg', 'Available', '', '', 'Active'),
(201760, 'Cabbage', '70 per pc.', '', 27, 0, 70, 41, 'uploaded_photos/cabbage.jpg', 'Available', '', '', 'Active'),
(201761, 'Kalabasa', '50 per kg.', '', 36, 0, 50, 46, 'uploaded_photos/pumpkin.jpg', 'Available', '', '', 'Active'),
(201762, 'Carrots', 'sdadasd                      ', '', 100, 0, 100, 47, 'uploaded_photos/carrots-7-1200.jpg', 'Available', '', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tblpromopro`
--

CREATE TABLE `tblpromopro` (
  `PROMOID` int(11) NOT NULL,
  `PROID` int(11) NOT NULL,
  `PRODISCOUNT` double NOT NULL,
  `PRODISPRICE` double NOT NULL,
  `PROBANNER` tinyint(4) NOT NULL,
  `PRONEW` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpromopro`
--

INSERT INTO `tblpromopro` (`PROMOID`, `PROID`, `PRODISCOUNT`, `PRODISPRICE`, `PROBANNER`, `PRONEW`) VALUES
(18, 201754, 0, 60, 0, 0),
(19, 201755, 0, 50, 0, 0),
(21, 201757, 0, 80, 0, 0),
(22, 201758, 0, 80, 0, 0),
(23, 201759, 0, 40, 0, 0),
(24, 201760, 0, 70, 0, 0),
(25, 201761, 0, 50, 0, 0),
(26, 201762, 0, 100, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblsetting`
--

CREATE TABLE `tblsetting` (
  `SETTINGID` int(11) NOT NULL,
  `PLACE` text NOT NULL,
  `BRGY` varchar(90) NOT NULL,
  `DELPRICE` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsetting`
--

INSERT INTO `tblsetting` (`SETTINGID`, `PLACE`, `BRGY`, `DELPRICE`) VALUES
(1, 'Imus City', 'Brgy. 1', 50),
(2, 'Bacoor City', 'Brgy. 1', 70);

-- --------------------------------------------------------

--
-- Table structure for table `tblstockin`
--

CREATE TABLE `tblstockin` (
  `STOCKINID` int(11) NOT NULL,
  `STOCKDATE` datetime DEFAULT NULL,
  `PROID` int(11) DEFAULT NULL,
  `STOCKQTY` int(11) DEFAULT NULL,
  `STOCKPRICE` double DEFAULT NULL,
  `USERID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblsummary`
--

CREATE TABLE `tblsummary` (
  `SUMMARYID` int(11) NOT NULL,
  `ORDEREDDATE` datetime NOT NULL,
  `CUSTOMERID` int(11) NOT NULL,
  `ORDEREDNUM` int(11) NOT NULL,
  `DELFEE` double NOT NULL,
  `PAYMENT` double NOT NULL,
  `PAYMENTMETHOD` varchar(30) NOT NULL,
  `reference_number` varchar(100) NOT NULL,
  `ORDEREDSTATS` varchar(30) NOT NULL,
  `ORDEREDREMARKS` varchar(125) NOT NULL,
  `ORDERADD` varchar(255) NOT NULL,
  `CLAIMEDADTE` datetime NOT NULL,
  `HVIEW` tinyint(4) NOT NULL,
  `USERID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsummary`
--

INSERT INTO `tblsummary` (`SUMMARYID`, `ORDEREDDATE`, `CUSTOMERID`, `ORDEREDNUM`, `DELFEE`, `PAYMENT`, `PAYMENTMETHOD`, `reference_number`, `ORDEREDSTATS`, `ORDEREDREMARKS`, `ORDERADD`, `CLAIMEDADTE`, `HVIEW`, `USERID`) VALUES
(18, '2021-06-22 03:55:11', 15, 108, 50, 110, 'Cash on Delivery', 'NA', 'Confirmed', 'Your order has been confirmed.', '', '2021-07-04 00:00:00', 0, 0),
(19, '2021-07-04 12:50:29', 17, 109, 50, 0, 'Cash on Delivery', 'NA', 'Delivered', 'Your order has been delivered.', '', '2021-10-10 00:00:00', 0, 0),
(21, '2021-07-04 01:45:38', 18, 111, 50, 85, 'Cash on Delivery', '5762738', 'Confirmed', 'Your order has been confirmed.', '', '2021-07-04 00:00:00', 0, 0),
(23, '2021-09-18 02:14:00', 19, 113, 50, 170, 'Cash on Delivery', '1232131', 'Pending', 'Your order is on process.', '', '0000-00-00 00:00:00', 0, 0),
(25, '2021-09-19 12:16:46', 19, 114, 50, 190, 'Cash on Delivery', 'NA', 'Pending', 'Your order is on process.', '', '0000-00-00 00:00:00', 0, 0),
(27, '2021-09-19 12:58:37', 19, 115, 0, 430, 'Cash on Delivery', 'NA', 'Pending', 'Your order is on process.', '', '0000-00-00 00:00:00', 0, 0),
(29, '2021-09-19 01:07:53', 19, 116, 0, 110, 'Cash on Delivery', 'NA', 'Pending', 'Your order is on process.', '0', '0000-00-00 00:00:00', 0, 0),
(30, '2021-09-19 01:13:16', 19, 119, 0, 110, 'Cash on Delivery', 'NA', 'Pending', 'Your order is on process.', 'qwe', '0000-00-00 00:00:00', 0, 0),
(31, '2021-09-19 01:13:39', 19, 120, 50, 100, 'Cash on Delivery', 'NA', 'Pending', 'Your order is on process.', 'DEFAULT', '0000-00-00 00:00:00', 0, 0),
(32, '2021-10-10 07:52:04', 20, 121, 50, 0, 'Cash on Delivery', '094323', 'Delivered', 'Your order has been delivered.', 'DEFAULT', '2021-10-10 00:00:00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblsupplier`
--

CREATE TABLE `tblsupplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `supplier_address` varchar(255) NOT NULL,
  `supplier_num` varchar(255) NOT NULL,
  `fbname` varchar(255) NOT NULL,
  `email_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsupplier`
--

INSERT INTO `tblsupplier` (`supplier_id`, `supplier_name`, `supplier_address`, `supplier_num`, `fbname`, `email_add`) VALUES
(1, 'TEST USER', 'TEST ADDRESS', '0949914487', 'hahahhaa', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

CREATE TABLE `tbluseraccount` (
  `USERID` int(11) NOT NULL,
  `U_NAME` varchar(122) NOT NULL,
  `U_USERNAME` varchar(122) NOT NULL,
  `U_PASS` varchar(122) NOT NULL,
  `U_ROLE` varchar(30) NOT NULL,
  `USERIMAGE` varchar(255) NOT NULL,
  `U_STATUS` varchar(255) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`USERID`, `U_NAME`, `U_USERNAME`, `U_PASS`, `U_ROLE`, `USERIMAGE`, `U_STATUS`) VALUES
(126, 'Admin1', 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'photos/10329236_874204835938922_6636897990257224477_n.jpg', 'Active'),
(127, 'Admin2', 'Admin1', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tblwishlist`
--

CREATE TABLE `tblwishlist` (
  `id` int(11) NOT NULL,
  `CUSID` int(11) NOT NULL,
  `PROID` int(11) NOT NULL,
  `WISHDATE` date NOT NULL,
  `WISHSTATS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblwishlist`
--

INSERT INTO `tblwishlist` (`id`, `CUSID`, `PROID`, `WISHDATE`, `WISHSTATS`) VALUES
(2, 9, 201742, '2019-08-21', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_homeinfo`
--

CREATE TABLE `tbl_homeinfo` (
  `CMS_HOME_ID` int(11) NOT NULL,
  `CMS_SLIDER_1_PICTURE` varchar(255) NOT NULL,
  `CMS_SLIDER_1_TITLE` varchar(255) NOT NULL,
  `CMS_SLIDER_1_SUBTITLE` varchar(255) NOT NULL,
  `CMS_SLIDER_2_PICTURE` varchar(255) NOT NULL,
  `CMS_SLIDER_2_TITLE` varchar(255) NOT NULL,
  `CMS_SLIDER_2_SUBTITLE` varchar(255) NOT NULL,
  `CMS_SLIDER_3_PICTURE` varchar(255) NOT NULL,
  `CMS_SLIDER_3_TITLE` varchar(255) NOT NULL,
  `CMS_SLIDER_3_SUBTITLE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_homeinfo`
--

INSERT INTO `tbl_homeinfo` (`CMS_HOME_ID`, `CMS_SLIDER_1_PICTURE`, `CMS_SLIDER_1_TITLE`, `CMS_SLIDER_1_SUBTITLE`, `CMS_SLIDER_2_PICTURE`, `CMS_SLIDER_2_TITLE`, `CMS_SLIDER_2_SUBTITLE`, `CMS_SLIDER_3_PICTURE`, `CMS_SLIDER_3_TITLE`, `CMS_SLIDER_3_SUBTITLE`) VALUES
(1, '../../images/home/ebgwfgirl3.jpg', 'Fresh Fruits and Vegetables', 'Fresh Fruits and Vegetabless Fresh Fruits and Vegetabless Fresh Fruits and Vegetables', '../../images/home/woytqgirl1.jpg', 'Healthy Lifestyles', 'Healthy Lifestyles Healthy Lifestyles Healthy Lifestyles Healthy Lifestyles', '../../images/home/tclpfdpahngirl2.jpg', 'Farm Fresh', 'Farm Freshness');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messagein`
--
ALTER TABLE `messagein`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `messagelog`
--
ALTER TABLE `messagelog`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_MessageId` (`MessageId`,`SendTime`);

--
-- Indexes for table `messageout`
--
ALTER TABLE `messageout`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_IsRead` (`IsRead`);

--
-- Indexes for table `tblabout`
--
ALTER TABLE `tblabout`
  ADD PRIMARY KEY (`CMS_ABOUT_ID`);

--
-- Indexes for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`CATEGID`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`CMS_CONTACT_ID`);

--
-- Indexes for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`CUSTOMERID`);

--
-- Indexes for table `tblinquiry`
--
ALTER TABLE `tblinquiry`
  ADD PRIMARY KEY (`INQID`);

--
-- Indexes for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD PRIMARY KEY (`ORDERID`),
  ADD KEY `USERID` (`USERID`),
  ADD KEY `PROID` (`PROID`),
  ADD KEY `ORDEREDNUM` (`ORDEREDNUM`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`PROID`),
  ADD KEY `CATEGID` (`CATEGID`);

--
-- Indexes for table `tblpromopro`
--
ALTER TABLE `tblpromopro`
  ADD PRIMARY KEY (`PROMOID`),
  ADD UNIQUE KEY `PROID` (`PROID`);

--
-- Indexes for table `tblsetting`
--
ALTER TABLE `tblsetting`
  ADD PRIMARY KEY (`SETTINGID`);

--
-- Indexes for table `tblstockin`
--
ALTER TABLE `tblstockin`
  ADD PRIMARY KEY (`STOCKINID`),
  ADD KEY `PROID` (`PROID`,`USERID`),
  ADD KEY `USERID` (`USERID`);

--
-- Indexes for table `tblsummary`
--
ALTER TABLE `tblsummary`
  ADD PRIMARY KEY (`SUMMARYID`),
  ADD UNIQUE KEY `ORDEREDNUM` (`ORDEREDNUM`),
  ADD KEY `CUSTOMERID` (`CUSTOMERID`),
  ADD KEY `USERID` (`USERID`);

--
-- Indexes for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  ADD PRIMARY KEY (`USERID`);

--
-- Indexes for table `tblwishlist`
--
ALTER TABLE `tblwishlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_homeinfo`
--
ALTER TABLE `tbl_homeinfo`
  ADD PRIMARY KEY (`CMS_HOME_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messagein`
--
ALTER TABLE `messagein`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messagelog`
--
ALTER TABLE `messagelog`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `messageout`
--
ALTER TABLE `messageout`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblabout`
--
ALTER TABLE `tblabout`
  MODIFY `CMS_ABOUT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `CATEGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `CMS_CONTACT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `CUSTOMERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblinquiry`
--
ALTER TABLE `tblinquiry`
  MODIFY `INQID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `ORDERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tblpromopro`
--
ALTER TABLE `tblpromopro`
  MODIFY `PROMOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tblsetting`
--
ALTER TABLE `tblsetting`
  MODIFY `SETTINGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblstockin`
--
ALTER TABLE `tblstockin`
  MODIFY `STOCKINID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblsummary`
--
ALTER TABLE `tblsummary`
  MODIFY `SUMMARYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `tblwishlist`
--
ALTER TABLE `tblwishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_homeinfo`
--
ALTER TABLE `tbl_homeinfo`
  MODIFY `CMS_HOME_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
