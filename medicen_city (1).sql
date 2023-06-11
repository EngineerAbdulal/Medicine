-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 04:24 PM
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
-- Database: `medicen_city`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `medecine` varchar(35) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `email`, `medecine`, `message`) VALUES
(1, 'gdsf', 23435434, 'dsfsdf', 'safasdf', 'asdfafsd'),
(2, 'محمد', 592826339, 'maycraft89@gmail.com', 'الدواء 1', 'محمدمحمدمحمدمحمدم محمدمحمدمحمدمحمدمحمدمحمد  محمدمحمدمحمدمحمدمحمدمحمد محمدمحمدمحمدمحمدمحمدمحمد محمدمحمدمحمدمحمدمحمدمحمد حمدمحمد  محمدمحمدمحمدمحمدمحمدمحمد محمدمحمدمحمدمحمدمحمدمحمد محمدمحمدمحمدمحمدمحمدمحمد'),
(3, 'سيبس', 0, 'maycraft89@gmail.com', 'الدواء 2', 'بسيبسيب'),
(4, 'سيبس', 0, 'maycraft89@gmail.com', 'الدواء 2', 'بسيبسيب'),
(5, 'سيبس', 0, 'maycraft89@gmail.com', 'الدواء 2', 'بسيبسيب'),
(6, 'سيبس', 0, 'maycraft89@gmail.com', 'الدواء 2', 'بسيبسيب'),
(7, 'asdddddddd', 0, 'maycraft89@gmail.com', 'الدواء 1', 'asssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss'),
(8, 'asdddddddd', 0, 'maycraft89@gmail.com', 'الدواء 1', 'asssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss'),
(9, 'وىوة', 75676, 'maycraft89@gmail.com', 'الدواء 1', 'محمدمحمدمحمدمحمدم محمدمحمدمحمدمحمدمحمدمحمد  محمدمحمدمحمدمحمدمحمدمحمد محمدمحمدمحمدمحمدمحمدمحمد محمدمحمدمحمدمحمدمحمدمحمد حمدمحمد  محمدمحمدمحمدمحمدمحمدمحمد محمدمحمدمحمدمحمدمحمدمحمد محمدمحمدمحمدمحمدمحمدمحمد');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `price` varchar(11) NOT NULL,
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`title`, `description`, `img`, `price`, `id`, `category`) VALUES
('سبليس', 'يبيبس', 'images/dream_TradingCard (1).jpg', '2', 63, 'دواء'),
('e', 'e', 'images/pexels-karolina-grabowska-4021775.jpg', 'e', 64, 'الصنف'),
('e', 'e', 'images/pexels-anna-shvets-3683099.jpg', 'e', 66, 'الصنف'),
('t', 't', 'images/pexels-rfstudio-3825529.jpg', 't', 67, 'الصنف'),
('y', 'y', 'images/pexels-anna-shvets-3683098-removebg-preview.png', 'y', 68, 'دواء'),
('r', 'r', 'images/pexels-alfo-medeiros-11556008.jpg', 'r', 69, 'إسعافات أولية'),
('m', 'm', 'images/pexels-suzy-hazelwood-3652097-removebg-preview.png', 'm', 70, 'الصنف'),
('mh', 'mhmh', 'images/pexels-cottonbro-studio-3923156.jpg', 'mh', 73, 'الصنف'),
('mama', 'mama', 'images/pexels-pixabay-67857.jpg', '1500$', 82, 'إسعافات أولية'),
('عبد الله', 'يبلابسسيبب', 'images/pexels-karolina-grabowska-4021775.jpg', '1500$', 83, 'جمال');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`) VALUES
(1, '', 'srtrbsr', 'momostbrbbr'),
(2, '', 'srtrbsr', 'momostbrbbr'),
(3, '', 'srtrbsr', 'momostbrbbr'),
(4, '', 'momosddfsdf', 'momofsdfsdf'),
(5, '', 'momosddfsdf', 'momofsdfsdf'),
(6, 'dfgdg', 'gdfgdf', 'gdfgdfg'),
(7, 'momo', 'dsds', 'sdsd'),
(8, 'momo', 'dsds', 'sdsd'),
(9, 'dsd', 'sds', 'sdsd'),
(10, 'dsd', 'sds', 'sdsd'),
(11, 'sdddd', 'dsdd', 'dsdddddd'),
(12, 'sdddd', 'dsdd', 'dsdddddd'),
(13, 'sdddd', 'dsdd', 'dsdddddd'),
(14, 'sdddd', 'dsdd', 'dsdddddd'),
(15, 'sdddd', 'dsdd', 'dsdddddd'),
(16, 'sdddd', 'dsdd', 'dsdddddd'),
(17, 'sdddd', 'dsdd', 'dsdddddd'),
(18, 'sdddd', 'dsdd', 'dsdddddd'),
(19, 'sdddd', 'dsdd', 'dsdddddd'),
(20, 'sdddd', 'dsdd', 'dsdddddd'),
(21, 'sdddd', 'dsdd', 'dsdddddd'),
(22, 'sdddd', 'dsdd', 'dsdddddd'),
(23, 'momo', 'maycraft89@gmail.com', 'momoalmasri'),
(24, 'momo', 'momo', 'momo');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `user_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(25) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`user_id`, `name`, `phone`, `email`, `password`, `img`) VALUES
(1, 'سقففقق', '543212', 'maycraft89@gmail.com', 'فقفقص', 'user_images/dream_TradingCard (10).jpg'),
(2, 'dghhhhhhhhh', '0592826339', 'momoalmasri89@gmail.com', 'stfjnsfg', 'user_images/pexels-anna-shvets-3683099.jpg'),
(3, 'wrrrrrrrrrrrr', '5643214', 'momoalmasri890@gmail.com', '54578675432', 'user_images/dream_TradingCard (9).jpg'),
(4, 'dddddddd', '0', 'mddddddomo', 'momo', 'user_images/dream_TradingCard (10).jpg'),
(5, 'mommomoooo', '0', 'momo', 'momo', 'user_images/dream_TradingCard (3).jpg'),
(6, 'sthtrhs', '32534', 'maycraft89@gmail.com', 'strshrt', 'user_images/dream_TradingCard (10).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
