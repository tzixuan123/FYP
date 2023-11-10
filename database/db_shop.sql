-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2023 at 06:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `adminPassword` varchar(32) NOT NULL,
  `level` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminUser`, `adminEmail`, `adminPassword`, `level`) VALUES
(1, 'Bey Xuan', 'bey', 'beyxuan77@gmail.com', '5827c93490b5240595dd15a5566ca20b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(7, 'Pills'),
(8, 'Capsules'),
(9, 'Powder'),
(10, 'Tea'),
(11, 'Brew'),
(12, 'Toku Tsuru'),
(13, 'Sun Ten'),
(14, 'Le Shenz'),
(15, 'Wen Ken');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `sId` varchar(255) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `sId`, `productId`, `productName`, `price`, `quantity`, `image`) VALUES
(39, 'ttq1tmev5p5k5kh9r77j5qmlo3', 47, '3ORANGE COUGH POWDER NO.3', 12.00, 1, 'uploads/16d9639ca8.jpg'),
(40, 'ttq1tmev5p5k5kh9r77j5qmlo3', 48, 'FAR THAM 2G', 6.30, 1, 'uploads/4bf29f298f.jpg'),
(41, '94pb7av27snmoiu4hh0udtcf9g', 48, 'FAR THAM 2G', 6.30, 1, 'uploads/4bf29f298f.jpg'),
(42, '94pb7av27snmoiu4hh0udtcf9g', 44, 'CSL BAO YING POWDER', 31.20, 1, 'uploads/4dbacedf7b.jpg'),
(50, 'qr2b5op316bam1kg4ijp76ahek', 53, 'Gui Lu Er Xian Jiao', 120.00, 1, 'uploads/8eb2aa02e7.jpg'),
(53, 'qr2b5op316bam1kg4ijp76ahek', 58, 'LE Shenz Shenz ', 60.00, 1, 'uploads/f07e5203b7.jpg'),
(54, 'qr2b5op316bam1kg4ijp76ahek', 60, 'Three Legs Cooling Water', 7.60, 1, 'uploads/455b3101d3.jpg'),
(55, 'qr2b5op316bam1kg4ijp76ahek', 40, 'PEARL POLLEN PAI FONG WAN(BIG PILL)', 40.90, 1, 'uploads/aedb82fd67.jpg'),
(56, 'qr2b5op316bam1kg4ijp76ahek', 55, 'Ginger Drink', 54.00, 1, 'uploads/16c8b503f0.png'),
(57, 'qr2b5op316bam1kg4ijp76ahek', 59, 'Pe Pa Kao', 45.00, 1, 'uploads/1d37877b06.jpg'),
(58, 'qr2b5op316bam1kg4ijp76ahek', 54, 'Herbal Balm ', 35.00, 1, 'uploads/a7df49027a.jpg'),
(66, 'otn8uvdlv8jk43u8i4g3uvsgoc', 55, 'Ginger Drink', 54.00, 2, 'uploads/16c8b503f0.png'),
(81, 'ar5lodf77lphtg39lod0dee5s0', 44, 'CSL BAO YING POWDER', 31.20, 8, 'uploads/4dbacedf7b.jpg'),
(82, 'ar5lodf77lphtg39lod0dee5s0', 53, 'Gui Lu Er Xian Jiao', 120.00, 1, 'uploads/8eb2aa02e7.jpg'),
(83, 'ar5lodf77lphtg39lod0dee5s0', 59, 'Pe Pa Kao', 45.00, 9, 'uploads/1d37877b06.jpg'),
(84, 'ar5lodf77lphtg39lod0dee5s0', 50, 'Qi Drink', 77.00, 9, 'uploads/52a4faf8df.jpg'),
(85, 'ar5lodf77lphtg39lod0dee5s0', 37, 'DAAI WOOT LOK DAAN', 159.00, 6, 'uploads/5b906d4f05.jpg'),
(86, 'gtihuj3f9beec1r498e3hrq44i', 59, 'Pe Pa Kao', 45.00, 7, 'uploads/1d37877b06.jpg'),
(87, '370sjftrqv7ndhj7ao2jgcgik8', 58, 'LE Shenz Shenz ', 60.00, 3, 'uploads/f07e5203b7.jpg'),
(88, 'uctbtavpb2pasdssen2s757eqr', 60, 'Three Legs Cooling Water', 7.60, 1, 'uploads/455b3101d3.jpg'),
(124, 'm0j9q2ms1ki4qfp53a6e071n1v', 58, 'LE Shenz Shenz ', 60.00, 1, 'uploads/f07e5203b7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(11, 'Blood Circulation'),
(12, 'Cholestrol'),
(13, 'Confinement'),
(14, 'Cought'),
(15, 'Health Food'),
(16, 'Traditional Chinese Medicines'),
(17, 'Heat Relief');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_compare`
--

CREATE TABLE `tbl_compare` (
  `id` int(11) NOT NULL,
  `cmrId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `contact`, `message`, `status`, `date`) VALUES
(2, 'md.alvi islam', 'customer@gmail.com', '1622425286', 'szzss', 1, '2018-08-05 23:23:25'),
(3, 'bey', 'beyxuan123@outlook.com', '0164033128', 'dwdwd', 1, '2023-10-25 13:01:43'),
(4, 'bey', 'beyxuan123@outlook.com', '0164033128', 'dwdwd', 1, '2023-10-25 13:16:04'),
(5, 'Teoh', 'weijieteoh26@gmail.com', '0123456779', 'hi', 1, '2023-10-26 06:22:25'),
(6, 'beytzixuan', 'beyxuan123@outlook.com', '0164033128', 'dwdw', 1, '2023-10-26 07:05:07'),
(7, 'bey', 'beyxuan123@outlook.com', '0164033128', 'dwdw', 1, '2023-10-28 15:15:43'),
(8, 'bey', 'beyxuan123@outlook.com', '0164033128', 'dwd', 1, '2023-11-02 12:20:44'),
(9, 'bey', 'beyxuan123@outlook.com', '0164033128', 'dwdw', 1, '2023-11-02 12:21:11'),
(10, 'Johanthan', 'tzixuan123@gmail.com', '0164033128', 'I have a question regarding the stock?', 0, '2023-11-07 06:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `address`, `city`, `country`, `zip`, `phone`, `email`, `pass`) VALUES
(2, 'bey1', 'dwdw', '', 'MYR', '', '0164033128', 'beyxuan123@gmail.com', '5827c93490b5240595dd15a5566ca20b'),
(4, 'Johnathan ', '39, Jalan Chee Seng 7, Tanjung Bungah, 11200, Pulau Pinang', '', 'MYR', '', '0103954087', 'johnathan.teng2001@gmail.com', '6be98e735c790ecc9208ff6c3273e915'),
(5, 'wdwdw', 'dwdw', '', '11900', '', '0164033128', 'tzixuan123@gmail.com', 'f65fce1dfb03b908b81b490359b58345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `cmrId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `cmrId`, `productId`, `productName`, `quantity`, `price`, `image`, `date`, `status`) VALUES
(22, 1, 14, 'Lorem Ipsum is simply', 1, 505.22, 'uploads/bb49c3ce4e.png', '2018-08-01 20:45:34', 0),
(23, 1, 15, 'Lorem Ipsum is simply', 3, 1515.66, 'uploads/d712a37947.png', '2018-08-01 21:23:42', 0),
(24, 1, 11, 'Lorem ipsum dolor sit amet sed do eiusmod', 3, 1501.65, 'uploads/4ebef5562f.png', '2018-08-02 00:14:55', 0),
(25, 1, 15, 'Lorem Ipsum is simply', 1, 505.22, 'uploads/d712a37947.png', '2018-08-02 00:15:23', 0),
(26, 1, 15, 'Lorem Ipsum is simply', 1, 505.22, 'uploads/d712a37947.png', '2018-08-02 00:19:13', 0),
(27, 1, 12, 'Lorem Ipsum is simply', 2, 856.04, 'uploads/8147397401.png', '2018-08-02 00:19:45', 0),
(28, 1, 11, 'Lorem ipsum dolor sit amet sed do eiusmod', 1, 500.55, 'uploads/4ebef5562f.png', '2018-08-02 02:39:52', 0),
(29, 1, 12, 'Lorem Ipsum is simply', 1, 428.02, 'uploads/8147397401.png', '2018-08-02 02:50:52', 0),
(30, 1, 15, 'Lorem Ipsum is simply', 1, 505.22, 'uploads/d712a37947.png', '2018-08-02 02:50:52', 1),
(31, 1, 4, 'Lorem Ipsum is simply', 1, 220.97, 'uploads/fa56e62bef.jpg', '2018-08-02 02:50:52', 0),
(32, 1, 13, 'Lorem Ipsum is simply', 1, 505.22, 'uploads/bd293afbce.jpg', '2018-08-06 03:29:05', 0),
(33, 2, 22, 'nice2023', 1, 200.00, 'uploads/f6fef7ccd3.jpg', '2023-10-25 20:52:11', 0),
(34, 2, 23, 'Orange', 1, 200.00, 'uploads/b968f511b7.jpg', '2023-10-25 21:00:46', 0),
(35, 2, 27, 'Ornagedeli', 1, 300.00, 'uploads/a63d4bee8c.jpg', '2023-10-25 21:19:30', 0),
(36, 2, 26, 'orange1223', 1, 200.00, 'uploads/3185a7b587.jpg', '2023-10-25 21:19:30', 0),
(37, 2, 26, 'orange1223', 5, 1000.00, 'uploads/3185a7b587.jpg', '2023-10-25 21:27:02', 0),
(38, 2, 28, 'Mango', 1, 200.00, 'uploads/1b7fb9bde5.jpg', '2023-10-25 21:48:41', 0),
(39, 2, 2, 'Travelmate  - Core i5 ', 1, 38500.00, 'uploads/f685d89450.jpeg', '2023-10-25 23:19:11', 2),
(40, 2, 37, 'DAAI WOOT LOK DAAN', 1, 159.00, 'uploads/5b906d4f05.jpg', '2023-10-26 11:25:23', 1),
(41, 2, 39, 'JIA GU LAN TEA 80G', 1, 15.90, 'uploads/32bdc0da77.jpg', '2023-10-26 11:25:23', 2),
(43, 2, 37, 'DAAI WOOT LOK DAAN', 1, 159.00, 'uploads/5b906d4f05.jpg', '2023-10-26 14:13:10', 1),
(45, 2, 18, 'iPhone 8 Plus', 1, 109999.00, 'uploads/33ce6b99f4.jpg', '2023-10-28 12:55:32', 0),
(46, 2, 28, 'Mango', 1, 200.00, 'uploads/1b7fb9bde5.jpg', '2023-10-28 13:03:30', 0),
(47, 2, 15, 'Laundry machine ', 1, 3200.00, 'uploads/d712a37947.png', '2023-10-28 16:15:16', 0),
(48, 2, 44, 'CSL BAO YING POWDER', 1, 31.20, 'uploads/4dbacedf7b.jpg', '2023-10-28 16:15:16', 0),
(49, 2, 37, 'DAAI WOOT LOK DAAN', 1, 159.00, 'uploads/5b906d4f05.jpg', '2023-10-28 16:15:16', 0),
(50, 2, 40, 'PEARL POLLEN PAI FONG WAN(BIG PILL)', 1, 40.90, 'uploads/aedb82fd67.jpg', '2023-10-28 16:15:16', 0),
(51, 2, 58, 'LE Shenz Shenz ', 1, 60.00, 'uploads/f07e5203b7.jpg', '2023-10-30 10:26:16', 0),
(52, 2, 60, 'Three Legs Cooling Water', 21, 159.60, 'uploads/455b3101d3.jpg', '2023-10-30 10:26:16', 0),
(53, 2, 58, 'LE Shenz Shenz ', 4, 240.00, 'uploads/f07e5203b7.jpg', '2023-11-01 10:04:10', 1),
(54, 2, 58, 'LE Shenz Shenz ', 10, 600.00, 'uploads/f07e5203b7.jpg', '2023-11-01 23:34:14', 0),
(55, 2, 54, 'Herbal Balm ', 7, 245.00, 'uploads/a7df49027a.jpg', '2023-11-01 23:34:14', 0),
(56, 2, 59, 'Pe Pa Kao', 4, 180.00, 'uploads/1d37877b06.jpg', '2023-11-01 23:34:14', 0),
(57, 2, 58, 'LE Shenz Shenz ', 1, 60.00, 'uploads/f07e5203b7.jpg', '2023-11-02 15:27:27', 0),
(58, 2, 55, 'Ginger Drink', 1, 54.00, 'uploads/16c8b503f0.png', '2023-11-02 15:29:59', 0),
(59, 2, 55, 'Ginger Drink', 1, 54.00, 'uploads/16c8b503f0.png', '2023-11-02 15:30:38', 0),
(60, 2, 55, 'Ginger Drink', 1, 54.00, 'uploads/16c8b503f0.png', '2023-11-02 19:50:40', 0),
(61, 2, 55, 'Ginger Drink', 1, 54.00, 'uploads/16c8b503f0.png', '2023-11-02 19:51:22', 0),
(62, 2, 55, 'Ginger Drink', 6, 324.00, 'uploads/16c8b503f0.png', '2023-11-02 19:54:34', 0),
(63, 2, 58, 'LE Shenz Shenz ', 1, 60.00, 'uploads/f07e5203b7.jpg', '2023-11-02 19:57:16', 0),
(64, 2, 60, 'Three Legs Cooling Water', 7, 53.20, 'uploads/455b3101d3.jpg', '2023-11-02 19:57:55', 0),
(65, 2, 55, 'Ginger Drink', 1, 54.00, 'uploads/16c8b503f0.png', '2023-11-02 19:58:15', 0),
(66, 2, 58, 'LE Shenz Shenz ', 1, 60.00, 'uploads/f07e5203b7.jpg', '2023-11-02 20:01:26', 0),
(67, 2, 57, 'Le Shenz Beauy', 1, 75.00, 'uploads/3a920e9b82.jpg', '2023-11-02 20:08:54', 2),
(69, 2, 55, 'Ginger Drink', 3, 162.00, 'uploads/16c8b503f0.png', '2023-11-02 21:15:03', 1),
(70, 2, 60, 'Three Legs Cooling Water', 5, 38.00, 'uploads/455b3101d3.jpg', '2023-11-02 21:15:03', 1),
(71, 2, 57, 'Le Shenz Beauy', 8, 600.00, 'uploads/3a920e9b82.jpg', '2023-11-02 21:15:03', 1),
(72, 2, 58, 'LE Shenz Shenz ', 1, 60.00, 'uploads/f07e5203b7.jpg', '2023-11-07 13:01:26', 0),
(73, 4, 52, 'Drip Essence of Chicken ', 1, 510.00, 'uploads/bc251e7f20.jpg', '2023-11-07 23:10:52', 0),
(74, 2, 55, 'Ginger Drink', 4, 216.00, 'uploads/16c8b503f0.png', '2023-11-08 22:39:03', 0),
(75, 2, 58, 'LE Shenz Shenz ', 1, 60.00, 'uploads/f07e5203b7.jpg', '2023-11-09 18:30:47', 0),
(76, 2, 54, 'Herbal Balm ', 1, 35.00, 'uploads/a7df49027a.jpg', '2023-11-10 13:13:25', 2),
(77, 2, 40, 'PEARL POLLEN PAI FONG WAN(BIG PILL)', 7, 286.30, 'uploads/aedb82fd67.jpg', '2023-11-10 13:13:25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `body` text NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `brandId`, `body`, `price`, `image`, `type`, `stock`) VALUES
(34, 'YUNNAN BAIYAO CAPSULES', 11, 8, '<p><span><br /></span></p>\r\n<p><span><span>Yunnan Baiyao (also known as Yunnan Paiyao) is a Chinese herbal mixture consisting primarily of notoginseng that has become a popular product among veterinary clients, particularly those caring for animals with hemangiosarcoma.</span></span></p>\r\n<p><span><br /></span></p>\r\n<p><span>Indication:Traditionally used for improving blood circulation.</span><br /><span>Dosage:To be taken orally and for adults:0.25g-0.50g(1-2capsule)each time,4 times daily.For children of 2-5 years,1/4 of the adult dosage.For children of 6-12 years,1/2of the adult dosage.</span></p>\r\n<p><span><br /></span></p>\r\n<p>Want to read more?<a href=\"https://drjohnson.com/wp-content/uploads/2023/09/Yunnan-Baiyao.pdf\"> Click Here</a></p>', 29.90, 'uploads/0e694ea467.jpg', 1, 20),
(35, 'SHEN BAO TIENCHI TABLET 36\'S', 11, 7, '<p><strong>Indication</strong><span>: Traditionally used to promote blood circulation and for general health.</span><br /><strong>Directions</strong><span>: Adults:2 tablets each time,3 times a day,preferably with lukewarm water.</span></p>', 29.90, 'uploads/958323b594.jpg', 1, 20),
(36, 'RAW TIENCHI TABLETS 60\'S', 11, 7, '<p><span>Indication:Traditionally used for symptomatic relief of fatigue.</span><br /><span>Dosage:4 tablets,3 times daily,to be taken with boiled water.Can also be added to milk,coffee.any meat soup,or steampot stewed chicken in such a dose as is compatible in taste with the respective,beverage.</span></p>', 18.00, 'uploads/e6142075f8.jpg', 1, 20),
(37, 'DAAI WOOT LOK DAAN', 11, 7, '<p><span>Indication: Traditionally used to invigorate blood circulation, expel wind, strengthening muscle and bone.</span><br /><span>Dosage: Adult:To be taken orally after food,1-2 pills each time.2 times per day.To be taken with boiled water or yellow rice wine.</span><br /><span>Precaution:This is a tradisional medicine.Please consult your pharmacist/doctor before taking this product.This product contains animal parts.Keep out of reach of children &amp;Jauhi daripada kanak-kanak.Contraindicated in pregnant women.Safe use in lactating women and children has not been astablished.Do not exceed the stated dose.Safety on long term use has not been established.Do not use when bdominal pain,nausea or vomiting is present.Frequent or prolonged use of this preparation may result in dependence towards the product and imbalanced electrolytes.Please consult a health care practitioner for use beyond 7 days.</span></p>', 159.00, 'uploads/5b906d4f05.jpg', 0, 20),
(38, 'YUNNAN BAIYAO POWDER 4GX6BOT', 11, 9, '<p><span>Traditionally used for improving blood circulation. </span></p>\r\n<p>&nbsp;</p>\r\n<p><span>Product Usage 0.25-0.4g, 4 times daily </span></p>\r\n<p><span>Product Warnings:</span></p>\r\n<p><span>Contraindicated in pregnant women, contraindicated in people who are allergic o Yunnan Baiyao </span></p>\r\n<p><span>Storage Condition:</span></p>\r\n<p><span>Keep in cool place </span></p>\r\n<p><span>Benefit:</span></p>\r\n<p><span> Activate Blood and resolve stasis, desperse swelling to relieve pain Origin China</span></p>', 20.50, 'uploads/01aef0de76.jpg', 1, 30),
(39, 'JIA GU LAN TEA 80G', 12, 10, '<p><span>This is a healthcane foodstuff extracted from the plant Jiaogulan.</span></p>\r\n<p><span>Functional tests have been proved that it regulates the blood fat,that is,it lowers the aggregart cholesterol level,and delays the ageing proecess.</span><br /><span>Indications:It regulates blood fat,i,e,lowers the total cholesterol level,and slows the ageing process.</span><br /><span>Suitable for:Individuls with high blood fat level and middle-aged and aged individuals.</span><br /><span>Dosage:Dissolve 1 packet in 200-300 ml of hot water.Drink after 3 minutes.4 times per day.</span></p>', 15.90, 'uploads/32bdc0da77.jpg', 1, 50),
(40, 'PEARL POLLEN PAI FONG WAN(BIG PILL)', 13, 7, '<div class=\"product-description\">Traditionally used for symptomatic relief of headache, syomachache, to regulate menstruation and malnutrition after childbirth.</div>\r\n<div>&nbsp;</div>\r\n<div class=\"addthis_content\">&nbsp;</div>\r\n<form id=\"contact-form\" method=\"post\" enctype=\"multipart/form-data\">\r\n<h3 id=\"result\">&nbsp;</h3>\r\n</form>', 40.90, 'uploads/aedb82fd67.jpg', 1, 10),
(44, 'CSL BAO YING POWDER', 14, 9, '<p><span>Indication:Traditionally used for symptomatic relief of flatulence,mild vomiting,fever,cold and to reduce phlegm.</span><br /><span>Dosage:Children 1-2 years old:1 packet (400mg) each time;3-4 years old:2 packets (800mg) each time;5-6 years old:3 packets (1200mg) each time.Can be taken 4 hourly with warm water.Taken after food.</span><br /><span>Attention:</span><br /><span>a.This is a tradisional medicine.</span><br /><span>b.If symptoms persist,please consult a doctor.</span><br /><span>c.Keep out of reach of children.</span><br /><span>d.This product contains animal part.</span></p>', 31.20, 'uploads/4dbacedf7b.jpg', 0, 10),
(49, 'Rosy Shenz ', 15, 12, '<p>INGREDIENTS: Sugar, Mulberry, Angelica, Ligusticum, Cooked Rehmannia, Salvia Root, Jujube (red), Black Ginger, and Licorice.</p>\r\n<p>PACKAGING: 24g x 12&rsquo;s</p>\r\n<p>DIRECTION:<br />&bull; Add each serving with 200ml-250ml warm or hot water according to your preference.<br />&bull; Consume during menstruation.<br />&bull; Each day 2 serving (day and night).</p>\r\n<p>SUITABLE:<br />Suitable for women during menstruation, especially individuals with menstrual pain or menstrual clot</p>', 77.00, 'uploads/c19efdad53.jpg', 1, 20),
(50, 'Qi Drink', 15, 12, '<p>INGREDIENTS: Rhodiola, Acanthopanax, Panax quinquefolius, ginseng, aged citrus peel</p>\r\n<p>PACKAGING: 24g x 12&rsquo;s</p>\r\n<p>DIRECTION:<br />Use 200c.c. of cold or hot water to brew.</p>\r\n<p>SUITABLE:<br />Those who declined in attention, stay up all night, fatigue or undergo high intensity activities; office workers; mountain climbers; athlete</p>', 77.00, 'uploads/52a4faf8df.jpg', 1, 25),
(51, 'Drip Essence of Chicken 6’s', 15, 12, '<p>PRODUCT FEATURES:<br />Extracted from 100 days Taiwan black-feathered chicken by using advanced technologies to remove the poultry smell from chicken but retaining the tastiness of pure chicken essence.</p>\r\n<p>BENEFITS:<br />1. Proteins help to build and repair tissues.<br />2. A healthy intake of protein during pregnancy supports baby&rsquo;s growth.<br />3. Promote and maintain a healthy milk supply for breastfeeding mothers.<br />4. Improve iron absorption and mobilization of iron stores in the body and also rich in gelatin which known as beauty superfoods &ndash; collagen.</p>\r\n<p>INGREDIENTS:<br />Chicken essence</p>\r\n<p>SUITABLE FOR:<br />Children, teenagers, working adults, elderly, pregnant and postpartum mother, postperative care. For individuals with serious illness, please check with your doctor before consume.</p>', 240.00, 'uploads/65a71b28a2.jpg', 1, 10),
(52, 'Drip Essence of Chicken ', 15, 12, '<p>PRODUCT FEATURES:<br />Extracted from 100 days Taiwan black-feathered chicken by using advanced technologies to remove the poultry smell from chicken but retaining the tastiness of pure chicken essence.</p>\r\n<p>BENEFITS:<br />1. Proteins help to build and repair tissues.<br />2. A healthy intake of protein during pregnancy supports baby&rsquo;s growth.<br />3. Promote and maintain a healthy milk supply for breastfeeding mothers.<br />4. Improve iron absorption and mobilization of iron stores in the body and also rich in gelatin which known as beauty superfoods &ndash; collagen.</p>\r\n<p>INGREDIENTS:<br />Chicken essence</p>\r\n<p>SUITABLE FOR:<br />Children, teenagers, working adults, elderly, pregnant and postpartum mother, postperative care. For individuals with serious illness, please check with your doctor before consume.</p>\r\n<p>PACKING: 50ml x 15 servings</p>\r\n<p>PRODUCT ORIGIN: Taiwan</p>', 510.00, 'uploads/bc251e7f20.jpg', 1, 10),
(53, 'Gui Lu Er Xian Jiao', 16, 13, '<div class=\"woocommerce-product-details__short-description\">\r\n<p>USAGE?<br />Traditionally used for health and strengthening the body ; to invigorate vital energy and for maintain healthy eyes.</p>\r\n<p>INSTRUCTION:<br />Adults: Take 2.0 g each time, 3 times per day before or between meals with warm water<br />Children: 7 to 15 Years: 4.0 g per day<br />4 to 6 Years: 3.0 g per day<br />2 to 3 Years: 2.0 g per day</p>\r\n<p>INGREDIENTS:<br />Cornus Cervi, Plastrum Testudinis, Fructus Lycium barbarum, Radix Panax ginseng</p>\r\n<p>PRECAUTION:<br />&bull; Safe use of ginseng in pregnant women and children has not been established.<br />&bull; Do not exceed the stated dose.<br />&bull; Safety on long term use has not been established.</p>\r\n<p>*This is a traditional product advertisement<br />KKLIU 1188/2020<br />MAL08120895T</p>\r\n<div>&nbsp;</div>\r\n</div>\r\n<div class=\"product_meta\">&nbsp;</div>', 120.00, 'uploads/8eb2aa02e7.jpg', 1, 20),
(54, 'Herbal Balm ', 16, 13, '<p>USAGE: Traditionally used for relief of pain and itch associated with insect bites, minor burns and cut.</p>\r\n<p>PRODUCT FEATURES:</p>\r\n<ul>\r\n<li>Made in Taiwan</li>\r\n<li>For pain relieving (burn or cut)</li>\r\n</ul>\r\n<p>INGREDIENTS:<br />&bull; Radix Arnebiae euchroma (Shikonin)<br />&bull; Radix Angelicae sinensis (Angelica)<br />&bull; Cera Flava (Beewax)<br />&bull; Oleum Sesami indicum (Sesame oil)</p>\r\n<p>Direction:<br />Apply few times per day to the affected area and bind the affected area with gauze to protect it.</p>\r\n<p>PACKING: 450 g</p>\r\n<p>RECOMMENDED FOR: Individual who seek for skin injury recovery (burn or cut)</p>\r\n<p>Note:<br />The purple colour of cream is the natural purple color, carefully apply to avoid contamination of clothing.</p>\r\n<p>*This is a traditional product advertisement<br />KKLIU 1200/2020<br />MAL09111752T</p>', 35.00, 'uploads/a7df49027a.jpg', 1, 30),
(55, 'Ginger Drink', 15, 12, '<p>BENEFITS:<br />1. Improve blood circulation<br />2. Keep the body warm and prevent cold hands and feet<br />3. Prevent the nausea and vomiting<br />4. Helps to remove dampness and coldness<br />5. Relieve menstrual cramps and discomfort</p>\r\n<p>CONSUMPTION METHOD:<br />Add 200cc of warm water to each serving</p>\r\n<p>INGREDIENTS:<br />Sugar, Ginger, Brown Sugar, Water, Longan.</p>', 54.00, 'uploads/16c8b503f0.png', 1, 20),
(57, 'Le Shenz Beauy', 15, 14, '<h1 class=\"product_title entry-title\"><span style=\"font-size: 10px;\">&nbsp;</span></h1>\r\n<p>BENEFITS:<br />&bull;Nourishes blood<br />&bull;Tonifying Qi<br />&bull;Reduces swelling<br />&bull;Helps to relieve fatigue<br />&bull;Helps to relieve backache during monthly blue<br />&bull;Regulates monthly cycle.</p>\r\n<p>PACKAGE: 50 ml x 6 bottles</p>\r\n<p>CONSUMPTION METHOD:<br />Consume 1 bottle daily after Monthly Blue, consume 6 continuous days</p>\r\n<p>INGREDIENTS:<br />Jujube, Rehmanniae, Angelicae Sinensis, Chuanxiong, Schisandra Chinensis, Paeoniae Alba, Wolfiporia Cocos, Atractylodis Macrocephalae, Glycyrrhizae Preparata, Cranberry, American Ginseng, Water, Sugar.</p>\r\n<p>PRECAUTION:<br />&bull;Not suitable for women suffering from influenza and fever<br />&bull;Not suitable for women who plan to conceive</p>\r\n<div class=\"woocommerce-product-details__short-description\">&nbsp;</div>', 75.00, 'uploads/3a920e9b82.jpg', 1, 10),
(58, 'LE Shenz Shenz ', 15, 14, '<p>BENEFITS:<br />&bull;Helps to relieve monthly menstrual pain<br />&bull;Reduces blood stasis<br />&bull;Improves blood circulation<br />&bull;Promotes monthly flow<br />&bull;Nourishes blood<br />&bull;Postpartum</p>\r\n<p>PACKAGE: 50 ml x 6 bottles</p>\r\n<p>CONSUMPTION METHOD:<br />1 bottle daily during monthly blue</p>\r\n<p>INGREDIENTS:<br />Jujube, Polygonatum Sibiricum, Angelicae Sinensis, Chuanxiong, Rehmannia Glutinosa, Mulberry, Savia Miltiorrhiza, Black Ginger, Hibiscus Sabdariffa, Glycyrrhizae, Water, Sugar</p>\r\n<p>PRECAUTION:<br />&bull;Not suitable for women suffering from influenza and fever<br />&bull;Not suitable for women who plan to conceive</p>', 60.00, 'uploads/f07e5203b7.jpg', 1, 30),
(59, 'Pe Pa Kao', 14, 15, '<p>Three Legs Pe Pa Kao is made of 15 quality Chinese herbs with honey used as the base in the ingredients mix. It soothes and brings relief to throat discomfort by soothing coughs and reducing phlegm.</p>\r\n<p>This remedy caters to health needs that are suitable for both families, individuals, and, children above three years, making it a deeply-loved family must-have!</p>\r\n<p>The bottle design has also been awarded the 2010 Malaysia Good Design Mark for its lightweight durability. Furthermore, the PET bottle also features a non-drop flip top and a pull-ring cap, which eliminates leakage or breakage from happening.</p>\r\n<p>Based on 10ml teaspoons</p>\r\n<ul>\r\n<li>Adults: 2 teaspoons each time, 3 times daily</li>\r\n<li>Children (3- 12 years old): 1 teaspoon each time, 3 times daily</li>\r\n</ul>', 45.00, 'uploads/1d37877b06.jpg', 1, 20),
(60, 'Three Legs Cooling Water', 17, 15, '<p>Since its production in 1937, Three Legs Cooling Water has been the go-to choice of cooling water with millions consuming it throughout Southeast Asia for the past 80 years.</p>\r\n<p>Three Legs Cooling Water consists of deionized water and Gypsum Fibrosum which is a natural ingredient traditionally used by the Chinese to reduce &ldquo;heatiness&rdquo; in the body. The packaging has since evolved from its original glass bottle and metal cap version to a PET bottle and plastic cap for improved hygiene standards and mobility.</p>\r\n<p>&nbsp;</p>\r\n<p>Based on 200ml bottle:</p>\r\n<ul>\r\n<li>Adults: 1 Bottle each time, 4 times daily</li>\r\n<li>Children (4-12 years old): &frac12; bottle each time, 4 times daily</li>\r\n</ul>', 17.60, 'uploads/455b3101d3.jpg', 1, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
