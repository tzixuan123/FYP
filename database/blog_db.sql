-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2023 at 06:52 AM
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
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 = Inactive, 1 = Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `status`) VALUES
(2, 'PHP', 'Sample Category', 0),
(3, 'JavaScript', 'Sample 2', 0),
(4, 'Sadasd', '', 0),
(5, 'Liquid', 'dw', 1),
(6, 'Blood', '', 0),
(7, 'Basic', 'Basic knowledge', 1),
(8, 'Local Stores', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `post` longtext NOT NULL,
  `category_id` int(30) NOT NULL,
  `img_path` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0= for review, 1= published',
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_published` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `post`, `category_id`, `img_path`, `status`, `date_updated`, `date_published`) VALUES
(14, 'Eu Yan Sang', '&lt;p style=&quot;margin-top: 13px; margin-bottom: 13px; color: rgb(88, 91, 94); font-size: 13px; font-family: Asap, SimSun, sans-serif; text-align: justify;&quot;&gt;For over 140 years, Eu Yan Sang has been empowering people to live the best quality of life through accessible healthcare, based on Traditional Chinese Medicine (TCM) wisdom.&lt;/p&gt;&lt;p style=&quot;margin-top: 13px; margin-bottom: 13px; color: rgb(88, 91, 94); font-size: 13px; font-family: Asap, SimSun, sans-serif;&quot;&gt;Today, Eu Yan Sang has become a trusted name for generations of customers, recognised for its high quality and standards. In Asia, Eu Yan Sang is recognized as a leader in TCM health and wellness, providing healthcare innovations that combine the science of medicine with the wisdom of TCM, all guided by its mission of &quot;caring for mankind&quot;.&lt;/p&gt;&lt;p style=&quot;margin-top: 13px; margin-bottom: 13px; color: rgb(88, 91, 94); font-size: 13px; font-family: Asap, SimSun, sans-serif;&quot;&gt;Eu Yan Sang has an extensive distribution network with over 170 Eu Yan Sang retail outlets in China, Hong Kong, Macau, Malaysia, and Singapore. Additionally, it operates 30 TCM clinics in Singapore, Malaysia, Hong Kong, and China and a food and beverage outlet in Malaysia. &lt;/p&gt;&lt;p class=&quot;footerLink-Header&quot; style=&quot;font-weight: 700; font-size: 0.875rem; color: rgb(145, 0, 39); text-transform: uppercase; line-height: 1.125rem; font-family: Asap, SimSun, sans-serif; background-color: rgb(255, 251, 245);&quot;&gt;NEED HELP?&lt;/p&gt;&lt;p class=&quot;office-time&quot; style=&quot;font-size: 0.688rem; color: rgb(88, 91, 94); margin-bottom: unset; line-height: 0.613rem; font-family: Asap, SimSun, sans-serif; background-color: rgb(255, 251, 245);&quot;&gt;(Mon-Fri : 9:00am - 6:00pm GMT+8)&lt;/p&gt;&lt;ul class=&quot;menu menu-footer pipe contact-details&quot; style=&quot;margin: 0.996rem 0px; list-style: none; padding: 0px; line-height: 1.594rem; left: unset; color: rgb(0, 0, 0); font-family: Asap, SimSun, sans-serif; font-size: 11.7072px; background-color: rgb(255, 251, 245);&quot;&gt;&lt;li style=&quot;display: block; float: none; line-height: 1.875rem; font-size: 0.813rem; color: rgb(88, 91, 94); height: 30px;&quot;&gt;1300 888 213 (Local Toll-Free)&lt;/li&gt;&lt;li style=&quot;display: block; float: none; line-height: 1.875rem; font-size: 0.813rem; color: rgb(88, 91, 94); height: 30px;&quot;&gt;info@euyansang.com.my (Email)&lt;/li&gt;&lt;li style=&quot;display: block; float: none; line-height: 1.875rem; font-size: 0.813rem; color: rgb(88, 91, 94); height: 30px;&quot;&gt;&lt;a href=&quot;https://www.euyansang.com.my/en_MY/contactus&quot; style=&quot;text-decoration-line: none; outline: medium; line-height: 30px; color: rgb(88, 91, 94) !important;&quot;&gt;Contact Us&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;a href=&quot;https://wa.link/iflg5r&quot;&gt; Click Here to Whatapps Us&lt;/a&gt; 9&lt;/p&gt;', 8, '1698630660_Eu Yan.jpg', 1, '2023-11-01 09:47:43', '2023-11-01 02:47:00'),
(15, 'Hai-O', '&lt;b&gt;&lt;i&gt;About Us&lt;/i&gt;&lt;/b&gt;&lt;p&gt;&lt;/p&gt;&lt;p style=&quot;margin-bottom: 31px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: Roboto, &quot; helvetica=&quot;&quot; neue&quot;,=&quot;&quot; -apple-system,=&quot;&quot; system-ui,=&quot;&quot; blinkmacsystemfont,=&quot;&quot; &quot;segoe=&quot;&quot; ui&quot;,=&quot;&quot; oxygen-sans,=&quot;&quot; sans-serif;=&quot;&quot; font-optical-sizing:=&quot;&quot; inherit;=&quot;&quot; font-kerning:=&quot;&quot; font-feature-settings:=&quot;&quot; font-variation-settings:=&quot;&quot; vertical-align:=&quot;&quot; baseline;&quot;=&quot;&quot;&gt;Hai-O was the first traditional healthcare company listed on Bursa Malaysia Securities Berhad since 1996. From a humble beginning with small start-up capital, Hai-O has over the years been resilient to ride through the many business challenges to emerge stronger now with an equity base of more than RM300 million. Its success had been honoured by various prestigious awards including the Forbes Awards (2007-2010).&lt;/p&gt;&lt;p&gt;&lt;b&gt;Contact&amp;nbsp;&lt;/b&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;&lt;i&gt;&lt;span style=&quot;font-family: Roboto, &quot; helvetica=&quot;&quot; neue&quot;,=&quot;&quot; -apple-system,=&quot;&quot; system-ui,=&quot;&quot; blinkmacsystemfont,=&quot;&quot; &quot;segoe=&quot;&quot; ui&quot;,=&quot;&quot; oxygen-sans,=&quot;&quot; sans-serif;=&quot;&quot; font-size:=&quot;&quot; 16px;&quot;=&quot;&quot;&gt;Wisma Hai-O&lt;/span&gt;&lt;br&gt;&lt;/i&gt;&lt;/b&gt;&lt;/p&gt;&lt;p&gt;&lt;font face=&quot;Roboto, Helvetica Neue, -apple-system, system-ui, BlinkMacSystemFont, Segoe UI, Oxygen-Sans, sans-serif&quot;&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;Lot 11995, Batu 2, Jalan Kapar 41400 Klang, Selangor, Malaysia.&lt;/span&gt;&lt;/font&gt;&lt;/p&gt;&lt;p&gt;&lt;font face=&quot;Roboto, Helvetica Neue, -apple-system, system-ui, BlinkMacSystemFont, Segoe UI, Oxygen-Sans, sans-serif&quot;&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;+ (603)-3343 8889&lt;/span&gt;&lt;/font&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;&lt;b style=&quot;font-size: 16px;&quot;&gt;&lt;i style=&quot;font-size: 16px;&quot;&gt;Operation Hours&lt;/i&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;Monday to Friday, 9am - 6pm&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-size: 16px;&quot;&gt;&lt;b style=&quot;font-size: 16px;&quot;&gt;&lt;i style=&quot;font-size: 16px;&quot;&gt;Sites&lt;/i&gt;&lt;/b&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;i style=&quot;&quot;&gt;&lt;b&gt;https://mall.hai-o.com.my/&lt;/b&gt;&lt;br&gt;&lt;/i&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;b&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;b&gt;&lt;p&gt;&lt;a href=&quot;https://wa.link/3f6fk3&quot;&gt; Click Here to Whatapps Us&lt;/a&gt;&lt;/p&gt;&lt;/b&gt;', 8, '1698630960_Hai.jpg', 1, '2023-10-30 11:52:35', '2023-10-30 04:52:00'),
(16, 'Lo Hang Ka 老行家', '&lt;span style=&quot;font-family: Roboto, &quot;Helvetica Neue&quot;, -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Oxygen-Sans, sans-serif; font-size: 16px;&quot;&gt;Lo Hong Ka Malaysia first opened its doors in 1998, rapidly expanding it&rsquo;s presence nationwide. Today, Lo Hong Ka is trusted international brand with outlets in Malaysia, Singapore and Taiwan along with an ever-growing number of Lo Hong Ka Franchises.&lt;/span&gt;&lt;p&gt;&lt;span style=&quot;font-family: Roboto, &quot;Helvetica Neue&quot;, -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Oxygen-Sans, sans-serif; font-size: 16px;&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;h4 class=&quot;widget-title&quot; style=&quot;margin-bottom: 20px; padding: 0px; border: none rgb(128, 169, 186); outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; font-family: Lato; font-size: 16px; font-weight: 700; letter-spacing: 0.1px; text-transform: uppercase;&quot;&gt;LO HONG KA (INTERNATIONAL) SDN BHD&lt;/h4&gt;&lt;p class=&quot;textwidget&quot; style=&quot;margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; font-family: Lato; font-size: 16px;&quot;&gt;&lt;p style=&quot;margin-bottom: 20px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; font-family: inherit; font-size: 16px; font-style: inherit; font-weight: inherit;&quot;&gt;No 8, Jalan BK 1/11, Kinrara Industrial Park,&lt;br&gt;47100 Puchong, Selangor Darul Ehsan, Malaysia.&lt;/p&gt;&lt;p style=&quot;margin-bottom: 20px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; font-family: inherit; font-size: 16px; font-style: inherit; font-weight: inherit;&quot;&gt;Email :&nbsp;&lt;a href=&quot;mailto:customerservices@lohongka.com&quot; style=&quot;text-decoration-line: none; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; font-family: inherit; font-size: 16px; font-style: inherit; font-weight: inherit; color: rgb(128, 162, 179); transition: all 0.3s ease 0s;&quot;&gt;customerservices@lohongka.com&lt;/a&gt;&lt;/p&gt;&lt;/p&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;https://wa.link/kdhajb&quot;&gt;Click here to consult us&lt;/a&gt;&lt;/p&gt;', 8, '1698631440_Lo Hang.jpg', 1, '2023-11-02 15:29:19', '2023-11-02 08:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `post_img`
--

CREATE TABLE `post_img` (
  `id` int(30) NOT NULL,
  `post_id` int(30) NOT NULL,
  `fname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `about` longtext NOT NULL,
  `blog_name` text NOT NULL,
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `contact`, `email`, `address`, `about`, `blog_name`, `date_updated`) VALUES
(1, '+14526-5455-44', 'sampleblogsite@sample.com', '', '&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;b style=&quot;background: transparent; position: relative; font-size: 14px;&quot;&gt;&lt;span style=&quot;background: transparent; position: relative; font-size: 24px;&quot;&gt;About us&lt;/span&gt;&lt;/b&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: bolder; margin: 0px; padding: 0px; text-align: justify;&quot;&gt;Lorem Ipsum&lt;/span&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;/p&gt;', 'Sample Blog Site', '2020-09-10 11:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(150) NOT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = admin',
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT ' 0 = incative , 1 = active',
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_type`, `username`, `password`, `status`, `date_updated`) VALUES
(1, 'Administrator', 1, 'admin', 'admin123', 1, '2020-09-08 16:42:28'),
(2, 'John Smith', 1, 'jsmth', 'admin123', 1, '2020-09-08 16:13:53'),
(3, 'Sample User', 1, 'sample', 'sampl123', 1, '2020-09-09 11:34:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_img`
--
ALTER TABLE `post_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `post_img`
--
ALTER TABLE `post_img`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
