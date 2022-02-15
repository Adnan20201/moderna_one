-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 08:01 AM
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
-- Database: `moderna_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `deatil` longtext NOT NULL,
  `button_text` varchar(300) NOT NULL,
  `button_link` varchar(200) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `deatil`, `button_text`, `button_link`, `status`) VALUES
(9, 'Welcome to Moderna', 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.', 'Read More', 'http://localhost/moderna_master/dashboard/add_banner.php', 0),
(10, 'Sequi ea ut et est quaerat', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'LOREM IPSUM', 'http://localhost/moderna_master/dashboard/add_banner.php', 0),
(11, 'Sed ut perspiciatis', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Quas soluta r', 'http://localhost/moderna_master/dashboard/add_banner.php', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icons_class` varchar(50) NOT NULL,
  `icons_box_color` varchar(150) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `data_delay` int(10) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icons_class`, `icons_box_color`, `title`, `description`, `data_delay`, `status`) VALUES
(3, 'bxl-dribbble', 'pink', 'Lorem Ipsum', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 20, 0),
(4, 'bx-file', 'cyan', 'Sed ut perspiciatis', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 111, 0),
(5, ' bx-tachometer', 'green', 'Magni Dolores', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 120, 0),
(6, ' bx-world', 'blue', 'Nemo Enim', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque', 200, 0);

-- --------------------------------------------------------

--
-- Table structure for table `submit_form_table`
--

CREATE TABLE `submit_form_table` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `profile_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submit_form_table`
--

INSERT INTO `submit_form_table` (`id`, `name`, `email`, `password`, `profile_img`) VALUES
(18, 'Afiful Hoque Adnan', 'afifuladnan2020@gamil.com', '3459e53125121bda92cd573b2fdcd8cc57724cfc', 'user-6207e42f8412e.jpg'),
(19, 'Afiful Adnan', 'afifuladnan@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'user-6207e77796b9c.jpg'),
(20, 'Afiful Hoque Adnan', 'afifuladnan2020@gmail.com', '3459e53125121bda92cd573b2fdcd8cc57724cfc', 'user-6208dbf216734.jpg'),
(21, 'Afiful Hoque Adnan', 'afifuladnan2020@gmail.com', '3459e53125121bda92cd573b2fdcd8cc57724cfc', 'user-620a90a74637d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `why_us`
--

CREATE TABLE `why_us` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `video_link` longtext NOT NULL,
  `title_one` varchar(100) NOT NULL,
  `text_one` longtext NOT NULL,
  `icon_one` varchar(50) NOT NULL,
  `title_two` varchar(100) NOT NULL,
  `text_two` longtext NOT NULL,
  `icon_two` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `why_us`
--

INSERT INTO `why_us` (`id`, `image`, `video_link`, `title_one`, `text_one`, `icon_one`, `title_two`, `text_two`, `icon_two`) VALUES
(1, 'user_620a5b381a76d.jpeg', 'https://https://www.youtube.com/watch?v=m8WIdVwgsoo.youtube.com/watch?v=m8WIdVwgsoo', ' Nemo Enim ', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque ', 'bx-world', 'Magni Dolores ', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum ', 'bx-tachometer'),
(5, 'user-620a9165e2223.', 'Afiful Adnan', 'Hoque', 'Afiful Hoque Adnan', 'Afiful Hoque Adnan', 'Afiful Hoque Adnan', ' Afiful Hoque Adnan  ', 'Afiful Hoque Adnan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit_form_table`
--
ALTER TABLE `submit_form_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_us`
--
ALTER TABLE `why_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `submit_form_table`
--
ALTER TABLE `submit_form_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `why_us`
--
ALTER TABLE `why_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
