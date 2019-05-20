-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 03:33 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kl_timejpr`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_kl`
--

CREATE TABLE `category_kl` (
  `id_category` int(11) NOT NULL,
  `job_position` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ow_day` varchar(15) CHARACTER SET utf8 NOT NULL,
  `salary_category` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `status`) VALUES
(1, 'Operasi & Pemeliharaan', 1),
(2, 'Engineering', 1),
(3, 'Keuangan SDM & ADM', 1),
(4, 'Operasi Sistem dan Penyaluran', 1),
(5, 'Pengadaan Barang & Jasa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `type` longtext CHARACTER SET utf8 NOT NULL,
  `description` longtext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES
(1, 'system_name', 'KL PLN JPR'),
(2, 'system_title', 'KL PLN JPR');

-- --------------------------------------------------------

--
-- Table structure for table `task_admin`
--

CREATE TABLE `task_admin` (
  `id_task_admin` int(11) NOT NULL,
  `title_task` varchar(100) CHARACTER SET utf8 NOT NULL,
  `id_admin` varchar(15) CHARACTER SET utf8 NOT NULL,
  `date_time` datetime NOT NULL,
  `photo_task_admin` longtext CHARACTER SET utf8 NOT NULL,
  `desc_task` longtext CHARACTER SET utf8 NOT NULL,
  `id_manager` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task_manager`
--

CREATE TABLE `task_manager` (
  `id_task_manager` int(11) NOT NULL,
  `title_task` varchar(100) CHARACTER SET utf8 NOT NULL,
  `id_manager` varchar(15) CHARACTER SET utf8 NOT NULL,
  `date_time` datetime NOT NULL,
  `photo_task_manager` longtext CHARACTER SET utf8 NOT NULL,
  `desc_task` longtext CHARACTER SET utf8 NOT NULL,
  `id_staff` varchar(15) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task_staff`
--

CREATE TABLE `task_staff` (
  `id_task_staff` int(11) NOT NULL,
  `id_pegawai` varchar(15) CHARACTER SET utf8 NOT NULL,
  `date_time` datetime NOT NULL,
  `photo_task_staff` longtext CHARACTER SET utf8 NOT NULL,
  `desc_task` longtext CHARACTER SET utf8 NOT NULL,
  `id_manager` varchar(15) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nipeg` varchar(15) CHARACTER SET utf8 NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 NOT NULL,
  `birth_place` varchar(15) CHARACTER SET utf8 NOT NULL,
  `birth_date` date NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 NOT NULL,
  `department` varchar(30) CHARACTER SET utf8 NOT NULL,
  `job_position` varchar(30) CHARACTER SET utf8 NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `photo_profile` varchar(100) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL,
  `role` varchar(12) CHARACTER SET utf8 NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nipeg`, `name`, `password`, `birth_place`, `birth_date`, `address`, `gender`, `department`, `job_position`, `mobile`, `email`, `photo_profile`, `status`, `role`, `create_at`) VALUES
(29497, 'zed29', 'zed', 'admin', 'jayapura', '1997-04-29', 'jl. wonorejo malang', 'female', 'Engineering', 'Asman Engineering', 857, 'anisatuzzahro1997@gmail.com', 'zed.jpeg', 1, 'admin', '2019-05-19 13:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_power`
--

CREATE TABLE `user_power` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `power_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_power`
--

INSERT INTO `user_power` (`id`, `name`, `power_id`) VALUES
(1, 'Add', 3),
(2, 'Edit', 1),
(3, 'Delete', 4),
(4, 'Power', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `working_overtime`
--

CREATE TABLE `working_overtime` (
  `id_wo` int(11) NOT NULL,
  `date_time_start` datetime NOT NULL,
  `date_time_finish` datetime NOT NULL,
  `id_user` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `job_position` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `wo_category` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `wo_salary` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `task_admin`
--
ALTER TABLE `task_admin`
  ADD PRIMARY KEY (`id_task_admin`);

--
-- Indexes for table `task_manager`
--
ALTER TABLE `task_manager`
  ADD PRIMARY KEY (`id_task_manager`);

--
-- Indexes for table `task_staff`
--
ALTER TABLE `task_staff`
  ADD PRIMARY KEY (`id_task_staff`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_power`
--
ALTER TABLE `user_power`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `working_overtime`
--
ALTER TABLE `working_overtime`
  ADD PRIMARY KEY (`id_wo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `task_admin`
--
ALTER TABLE `task_admin`
  MODIFY `id_task_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task_manager`
--
ALTER TABLE `task_manager`
  MODIFY `id_task_manager` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task_staff`
--
ALTER TABLE `task_staff`
  MODIFY `id_task_staff` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29498;

--
-- AUTO_INCREMENT for table `user_power`
--
ALTER TABLE `user_power`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `working_overtime`
--
ALTER TABLE `working_overtime`
  MODIFY `id_wo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
