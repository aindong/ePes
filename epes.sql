-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2015 at 09:32 AM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epes`
--

-- --------------------------------------------------------

--
-- Table structure for table `celebrations`
--

CREATE TABLE IF NOT EXISTS `celebrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `celebrations`
--

INSERT INTO `celebrations` (`id`, `user_id`, `name`, `description`, `start_at`, `end_at`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 0, 'Ballroom', 'Chachacha', '2015-02-27 07:00:18', '2015-02-27 23:00:18', '2015-02-24 18:43:35', '2015-02-24 17:11:30', '2015-02-24 18:43:35'),
(2, 0, 'Sleep', 'zzzzA', '2015-02-25 03:00:58', '2015-02-25 11:00:58', '2015-03-04 05:32:29', '2015-02-24 18:43:00', '2015-03-04 05:32:29'),
(3, 0, 'Sana MAtapos na po.', 'nagtatanong na po parents ko kung kelan magfifinal defense. :''(', '2015-02-27 11:50:23', '2015-02-28 03:10:23', '2015-03-06 07:18:56', '2015-02-26 13:02:14', '2015-03-06 07:18:56'),
(4, 0, 'MONTH', 'march na po. :''(', '2015-02-10 05:25:04', '2015-01-28 02:10:05', '2015-03-04 13:22:24', '2015-02-28 01:52:39', '2015-03-04 13:22:24'),
(5, 0, 'Judgement Week', 'Urgent submission of the document & fully functional system', '2015-03-03 08:00:49', '2015-03-03 09:00:49', '2015-03-04 05:30:55', '2015-03-02 03:04:24', '2015-03-04 05:30:55'),
(6, 0, 'Department Heads'' Meeting', 'regular monthly meeting of department heads, tarlac provincial jaii', '2015-03-13 09:30:23', '2015-03-13 16:25:23', '2015-03-04 05:30:49', '2015-03-03 08:29:43', '2015-03-04 05:30:49'),
(7, 0, 'DEFENSE', 'Kami na lang po ang hindi nakakapagdefense, promise.', '2015-03-04 09:45:46', '2015-03-11 11:50:46', '2015-03-06 07:18:59', '2015-03-04 05:32:23', '2015-03-06 07:18:59'),
(8, 0, 'Print', 'Ang hirap maghintay sa wala', '2015-03-25 10:50:27', '2015-02-25 06:10:27', '2015-03-06 07:19:05', '2015-03-04 13:22:13', '2015-03-06 07:19:05'),
(9, 0, 'BUGSSS', 'sobrang dami pa', '2015-03-04 21:23:53', '2015-02-26 06:30:38', '2015-03-06 07:19:08', '2015-03-04 13:23:05', '2015-03-06 07:19:08'),
(10, 0, 'a', 'a', '2015-03-05 06:30:06', '2015-03-12 09:25:06', '2015-03-05 08:39:06', '2015-03-04 14:17:42', '2015-03-05 08:39:06'),
(11, 0, '*Sigh*', 'May mga bagay talaga na...\r\n\r\n\r\n\r\n\r\n\r\n\r\nmas masarap\r\n\r\n\r\nkapag PARES.\r\n\r\npero seryoso. Deadline na po. Iyak na ba kami ng 1 liter of tears? :''(', '2015-03-06 07:05:48', '2015-03-06 02:30:48', '2015-03-06 07:19:11', '2015-03-04 15:14:41', '2015-03-06 07:19:11'),
(12, 0, 'event', 'event', '2015-03-05 01:00:57', '2015-03-05 23:35:57', '2015-03-06 07:19:13', '2015-03-05 08:38:43', '2015-03-06 07:19:13'),
(13, 0, 'matapos na', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-03-05 09:00:05', '2015-03-05 08:59:55', '2015-03-05 09:00:05'),
(14, 0, 'Feel', 'ano kayang feeling ng magulang kapag di niya nakitang nagmarcha yung anak niya sa april? di ba ang sakit?', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-03-06 07:19:17', '2015-03-05 09:15:38', '2015-03-06 07:19:17'),
(15, 0, 'Test', 'Testing .', '2015-03-06 15:25:59', '2015-03-07 11:25:00', NULL, '2015-03-06 07:20:48', '2015-03-06 07:20:48'),
(16, 0, 'Testing', 'Test PCEDO', '2015-03-05 11:30:22', '2015-03-05 02:30:22', NULL, '2015-03-06 07:25:59', '2015-03-06 07:25:59');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Provincial Human Resource Management Offices', NULL, '2015-02-24 16:16:23', '2015-03-04 13:21:06'),
(2, 'CBMSU', '2015-03-06 14:02:37', '2015-02-24 16:57:22', '2015-03-06 14:02:37'),
(3, 'PGO', NULL, '2015-02-24 16:57:33', '2015-02-24 16:57:33'),
(4, 'PCEDOW', '2015-02-24 18:40:48', '2015-02-24 18:40:27', '2015-02-24 18:40:48'),
(5, 'PENRO', '2015-03-06 09:02:41', '2015-02-25 23:53:10', '2015-03-06 09:02:41'),
(6, 'Provincial Planning and Development Office', NULL, '2015-03-03 08:26:13', '2015-03-03 08:26:13'),
(7, 'PCEDO', '2015-03-06 08:55:23', '2015-03-04 07:13:21', '2015-03-06 08:55:23'),
(8, 'testing', '2015-03-06 09:02:54', '2015-03-06 07:50:00', '2015-03-06 09:02:54'),
(9, 'PCEDO', NULL, '2015-03-06 08:55:02', '2015-03-06 08:55:02'),
(10, 'PENRO', NULL, '2015-03-06 08:58:00', '2015-03-06 08:58:00'),
(11, 'PHRMO', NULL, '2015-03-06 09:02:34', '2015-03-06 09:02:34'),
(12, 'CBMSUR', '2015-03-08 06:38:58', '2015-03-06 14:01:35', '2015-03-08 06:38:58'),
(13, 'PCEDO', '2015-03-07 12:17:51', '2015-03-06 14:11:07', '2015-03-07 12:17:51'),
(14, 'PCEDO', '2015-03-07 12:17:44', '2015-03-06 23:14:23', '2015-03-07 12:17:44'),
(15, 'PCEDOs', '2015-03-07 12:24:20', '2015-03-07 12:24:12', '2015-03-07 12:24:20'),
(16, 'PGO EXTENSION', NULL, '2015-03-08 06:39:29', '2015-03-08 06:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `evaluations`
--

CREATE TABLE IF NOT EXISTS `evaluations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `start_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `end_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `evaluations`
--

INSERT INTO `evaluations` (`id`, `start_at`, `end_at`, `created_at`, `updated_at`) VALUES
(2, '2015-02-25 02:50:50', '2015-02-26 01:50:51', '2015-02-24 16:47:01', '2015-02-24 16:47:01'),
(7, '2015-03-20 15:30:12', '2015-03-03 05:25:12', '2015-03-06 14:05:30', '2015-03-06 14:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `jobvacancies`
--

CREATE TABLE IF NOT EXISTS `jobvacancies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jobvacancies`
--

INSERT INTO `jobvacancies` (`id`, `title`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Welder', 'Welding', '2015-02-24 18:44:16', '2015-02-24 17:12:27', '2015-02-24 18:44:16'),
(2, 'Helper', 'Help...', '2015-03-06 08:49:50', '2015-02-24 18:43:57', '2015-03-06 08:49:50'),
(3, 'k', 'k', '2015-03-06 08:49:21', '2015-02-24 18:45:35', '2015-03-06 08:49:21'),
(4, 'whogoat', 'hugot lord', '2015-03-06 08:49:24', '2015-03-04 14:13:28', '2015-03-06 08:49:24'),
(5, 'CSR', 'Previous call center experience\r\n\r\nSales experience\r\nComputer skills such as an understanding of Microsoft Office, email and chat technologies\r\nWord processing at a certain WPM\r\nBilingual skills\r\nGood math and writing skills\r\nSpecialized skills, training or licensing (nursing, insurance, IT, etc.)\r\nKnowledge or experience in the company’s industry\r\nSome college or a college degree\r\n6ft''', NULL, '2015-03-04 15:28:41', '2015-03-06 14:14:49'),
(6, 'Encoder', 'Encoder', NULL, '2015-03-06 08:50:21', '2015-03-06 08:50:21');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `action`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'User has logged in', NULL, '2015-03-07 13:06:48', '2015-03-07 13:06:48'),
(2, 1, 'User has logged in', NULL, '2015-03-07 14:13:03', '2015-03-07 14:13:03'),
(3, 1, 'User has logged in', NULL, '2015-03-07 18:31:26', '2015-03-07 18:31:26'),
(4, 1, 'User has logged in', NULL, '2015-03-08 01:41:06', '2015-03-08 01:41:06'),
(5, 31, 'User has logged in', NULL, '2015-03-08 01:44:44', '2015-03-08 01:44:44'),
(6, 30, 'User has logged in', NULL, '2015-03-08 01:46:37', '2015-03-08 01:46:37'),
(7, 1, 'User has logged in', NULL, '2015-03-08 03:49:34', '2015-03-08 03:49:34'),
(8, 39, 'User has logged in', NULL, '2015-03-08 03:52:20', '2015-03-08 03:52:20'),
(9, 1, 'User has logged in', NULL, '2015-03-08 03:58:26', '2015-03-08 03:58:26'),
(10, 1, 'User has logged in', NULL, '2015-03-08 06:33:29', '2015-03-08 06:33:29'),
(11, 9, 'User has logged in', NULL, '2015-03-08 06:48:04', '2015-03-08 06:48:04'),
(12, 1, 'User has logged in', NULL, '2015-03-08 06:49:13', '2015-03-08 06:49:13'),
(13, 55, 'User has logged in', NULL, '2015-03-08 06:58:49', '2015-03-08 06:58:49'),
(14, 55, 'User has logged in', NULL, '2015-03-08 07:15:41', '2015-03-08 07:15:41'),
(15, 9, 'User has logged in', NULL, '2015-03-08 07:16:12', '2015-03-08 07:16:12'),
(16, 1, 'User has logged in', NULL, '2015-03-08 08:28:07', '2015-03-08 08:28:07'),
(17, 1, 'User has logged in', NULL, '2015-03-08 08:33:57', '2015-03-08 08:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_02_10_203624_create_roles_table', 1),
('2015_02_10_203852_create_users_table', 1),
('2015_02_10_204828_create_departments_table', 1),
('2015_02_10_205824_create_usersBios_table', 1),
('2015_02_10_210733_create_usersChildrens_table', 1),
('2015_02_10_210758_create_usersEducations_table', 1),
('2015_02_11_051113_create_usersCivilServices_table', 1),
('2015_02_11_051230_create_usersWorkExperiences_table', 1),
('2015_02_11_051342_create_usersVoluntaryWorks_table', 1),
('2015_02_11_051437_create_usersTrainings_table', 1),
('2015_02_11_051530_create_usersHobbies_table', 1),
('2015_02_11_051621_create_usersRecognitions_table', 1),
('2015_02_11_051717_create_usersOrganizations_table', 1),
('2015_02_11_051817_create_usersQuestionaires_table', 1),
('2015_02_11_052058_create_usersReferences_table', 1),
('2015_02_11_052154_create_usersAccomplishments_table', 1),
('2015_02_11_080652_create_celebrations_table', 1),
('2015_02_11_080833_create_jobvacancies_table', 1),
('2015_02_11_081114_create_logs_table', 1),
('2015_02_19_135237_create_evaluations_table', 1),
('2015_02_19_175645_create_pes', 1),
('2015_03_03_164900_create_positions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pes`
--

CREATE TABLE IF NOT EXISTS `pes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `evaluation_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q10` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `pes`
--

INSERT INTO `pes` (`id`, `employee_no`, `evaluation_id`, `status`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `created_at`, `updated_at`) VALUES
(1, '1', '2', 'inactive', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '2015-02-24 16:53:27', '2015-02-24 16:53:27'),
(4, '1234', '2', 'inactive', 6, 2, 8, 6, 10, 2, 10, 8, 2, 2, '2015-02-25 01:18:18', '2015-02-25 01:18:18'),
(6, '1234', '3', 'inactive', 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, '2015-02-25 02:57:09', '2015-02-25 02:57:09'),
(9, '1234', '4', 'inactive', 2, 8, 2, 2, 6, 2, 4, 8, 6, 10, '2015-03-02 04:36:11', '2015-03-02 04:36:11'),
(14, '4321', '5', 'active', 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, '2015-03-03 08:35:28', '2015-03-05 06:24:41'),
(15, '1234', '5', 'inactive', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '2015-03-03 16:01:28', '2015-03-03 16:01:28'),
(16, '12', '5', 'active', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '2015-03-04 07:24:30', '2015-03-04 13:58:33'),
(17, '4321', '6', 'active', 2, 2, 2, 2, 2, 2, 2, 2, 2, 10, '2015-03-04 15:35:38', '2015-03-05 06:25:08'),
(18, '4444', '6', 'inactive', 10, 8, 8, 6, 6, 4, 2, 6, 2, 2, '2015-03-04 16:28:34', '2015-03-04 16:28:34'),
(19, '21', '6', 'inactive', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '2015-03-04 18:35:59', '2015-03-04 18:35:59'),
(20, 'emptest1', '6', 'inactive', 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, '2015-03-06 08:14:48', '2015-03-06 08:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE IF NOT EXISTS `positions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Admin Aide II', '2015-03-04 06:59:12', '2015-03-04 06:59:12'),
(5, 'Admin Aide III', '2015-03-04 15:02:36', '2015-03-04 15:02:36'),
(9, 'Admin Aide IV', '2015-03-08 06:45:31', '2015-03-08 06:45:31'),
(10, 'Admin Aide V', '2015-03-08 06:45:46', '2015-03-08 06:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, '2015-02-24 16:16:23', '2015-02-24 16:16:23'),
(2, 'supervisor', NULL, '2015-02-24 16:16:23', '2015-02-24 16:16:23'),
(4, 'employee', NULL, '2015-02-24 16:16:23', '2015-02-24 16:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `position` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lockpds` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `registered` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_employee_no_unique` (`employee_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=56 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employee_no`, `department_id`, `position`, `role_id`, `password`, `lockpds`, `registered`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'hraccount', 1, '', 1, '$2y$10$XKnT1JjPZuS5MHOxJ8lpaefrnoMiPmUzZecenXlzmfTdzq2x9pWtG', '', 0, 'JG3LQeyTopV7QT0lS6oz3luW3FotFioECClMdW0yCJWHA6ncn7CmYUcg0EWp', NULL, '2015-02-24 16:16:23', '2015-03-08 07:35:06'),
(2, '1', 1, '1', 4, '$2y$10$jn4z/sTNu86Xpr7iWRskH.MAyuMb7BP62cXy0q9o3wBCW5.b8MxsC', 'unlocked', 0, 'cHEu0bBHmgT2NxW2FPJeriHEPTBMXXeTgzvFrD8uxP0aX7X1dldb93K0RArQ', NULL, '2015-02-24 16:20:41', '2015-03-07 13:07:59'),
(4, '3', 1, '0', 2, '$2y$10$AScfkbXt3wa7cIJtaliBSOZLSi9zag52gpR96YwT.dMItUb/TRsHm', 'locked', 0, 'xuvpCrZISF3SuV9UglxQX3TQPXeae6Bw6cGMr05SyM5gC5COXcJyvkjOjZNN', NULL, '2015-02-24 16:22:10', '2015-02-24 18:54:20'),
(5, '4', 1, '0', 1, '', 'locked', 0, NULL, NULL, '2015-02-24 16:22:18', '2015-02-24 16:22:18'),
(6, '123', 2, '0', 2, '$2y$10$HJCuOFu/x1bnto77RFjtMOwPDPGqsMMExfsrEsqki0ezq614AX8P.', 'locked', 0, 'T8FLz9lkJec6XZJgyjYYRDveVOmIfOBqUqzFc2BAZw2G8EbGQAUO5pvKers1', '2015-03-06 08:43:50', '2015-02-24 16:48:00', '2015-03-06 08:43:50'),
(7, '007', 1, '0', 4, '$2y$10$Uh1tI9a/EuN2FEDjU4FeMu6D9OvVhvaH5HME3MDORhRjzUxuLS1cq', 'locked', 0, NULL, '2015-02-24 17:07:11', '2015-02-24 17:02:31', '2015-02-24 17:07:11'),
(8, '7777', 3, '1', 4, '', 'unlocked', 0, NULL, NULL, '2015-02-24 17:08:23', '2015-02-24 17:29:24'),
(9, '1234', 2, '0', 4, '$2y$10$Hl1Gi7mvIJZpDU.3hBoNcuwYW5giHH2foOfNIV.pgHZebtKw6rCQe', 'unlocked', 1, 'zRjHXHBStdrKqeOqaeiW2f0WDphH0H81bYlfF75lEWZeVZ8BMYVZ7H4V9XPd', NULL, '2015-02-24 17:08:46', '2015-03-08 07:35:12'),
(11, '0079', 1, '0', 4, '$2y$10$sjJ.JGCdxunEq/mM7cC1cO.Q5b5gUN9ZLKQbVJdFLSHeu9gxhRFMu', 'unlocked', 0, 'xm11Bk9MN0Ydx9B12Jkk6XDfh5lmFqVjUOBjLmY3rFi0vMVrJWCuYMLUMyAk', '2015-03-02 00:43:28', '2015-02-24 17:10:05', '2015-03-02 00:43:28'),
(12, 'cc5', 3, '0', 4, '', 'locked', 0, NULL, '2015-02-24 17:31:31', '2015-02-24 17:22:19', '2015-02-24 17:31:31'),
(15, 'test', 3, '1', 4, '', 'locked', 0, NULL, NULL, '2015-02-24 17:23:54', '2015-02-24 17:23:54'),
(16, '555', 3, '0', 4, '$2y$10$Mo2OJrbOnKYFH7I5hnzhBeGNoVuUqEOI44RL3HiB6btYgeHuNMSaO', 'unlocked', 0, 'pzYbqceElib1nEHMC3CfJhU2b2EFcrSYlGz7NXtNrbOBOoAsOmrONhyDEN92', NULL, '2015-02-24 17:24:09', '2015-02-25 02:44:13'),
(23, '09', 1, '0', 1, '', 'locked', 0, NULL, '2015-03-02 00:43:37', '2015-02-24 18:07:37', '2015-03-02 00:43:37'),
(28, '1284', 1, '1', 4, '', 'locked', 0, NULL, NULL, '2015-02-25 23:56:27', '2015-02-25 23:56:27'),
(30, '4321', 5, '1', 4, '$2y$10$ywzm4B69Ev4aMFZi91ghx.lJcWlE40SDh/Vq9lqvL7uFXJAOc7Zka', 'unlocked', 1, 'fofGv2CEVAAX9xQRIcyOczbl3YBmY31uLqUezcaFpQDEJA0XpOKatt1Lmq6G', NULL, '2015-03-02 00:46:31', '2015-03-06 09:09:27'),
(31, '432', 5, '1', 2, '$2y$10$NiRYnwnI9bj5DO/ocQf3L.lsxySX8cmSaNk3c7pfL68b0xfDO3yk2', 'locked', 1, 'IjvzSX5Rwv6ctcarDDvNXwExZM2zvIJ1JmbPHAFVsR73eJZvED4THIrxfwmn', NULL, '2015-03-02 01:51:03', '2015-03-04 07:25:44'),
(34, '2222', 1, 'Admin Aide II', 4, '$2y$10$4UPxzo82jEpHQHvVhZQTN.uPoeeVjDWJssOPUb/9/dj1n/h3zeLAm', 'locked', 0, NULL, NULL, '2015-03-02 04:19:36', '2015-03-05 19:48:29'),
(35, 'try', 1, '0', 4, '$2y$10$WhjfmJPP0lgUMSuzCoshq.mubbdeMAVstRzLZZIYXgMyUnFqzhg.6', 'unlocked', 0, 'BFoG55eUFpBx8zHZax2ZNBbaBrmtsIve8dTINexWdnDQ5qAjdklJci7uxvRl', NULL, '2015-03-02 10:54:05', '2015-03-02 11:45:41'),
(36, '1111', 1, '0', 4, '', 'unlocked', 0, NULL, NULL, '2015-03-02 11:04:36', '2015-03-07 13:07:59'),
(37, '01', 6, '0', 1, '', 'unlocked', 0, NULL, NULL, '2015-03-03 08:27:52', '2015-03-07 13:07:58'),
(38, '21', 7, 'Admin Aide I', 2, '$2y$10$Gp9zGoo.RRNz8/8ESVTzG.UCf32BbA5cbssO2td0f6ml38mx42mee', 'locked', 1, '7ihD5nzrqyXNcK4ascOCZm0dnHizNRJq0M6D2G4h8d0ib2Jx2R3jFxXVuyD7', NULL, '2015-03-04 07:09:55', '2015-03-06 14:14:41'),
(39, '12', 7, 'Admin Aide I', 4, '$2y$10$N7QzXQMGcopaT1jgqnVSauK5PWARqvlYryQVKoosTVnkOTd/DMG4.', 'unlocked', 1, 'dLmImEVhhXJLgL84DlS7IvycdBOtxMapNQ3SWswx3tvvgU7U9wzHruKA7jlo', '2015-03-08 07:02:08', '2015-03-04 07:15:55', '2015-03-08 07:02:08'),
(42, '3434', 7, 'Admin Aide I', 2, '$2y$10$NyxXn0g70CVf.fzIgmr0femJrf5hxdE9KOrs.BlmEZk5xccu/p1/2', 'locked', 1, NULL, NULL, '2015-03-04 16:24:17', '2015-03-04 16:25:11'),
(43, '4343', 1, 'Admin Aide I', 4, '', 'locked', 0, NULL, NULL, '2015-03-04 16:24:55', '2015-03-04 16:24:55'),
(47, '4444', 7, 'Admin Aide I', 4, '$2y$10$SBti.fiHLXyWwmS0SI87nOPvFNluiTzbekfYqzVbDZx9sfaaEAjr2', 'locked', 1, NULL, NULL, '2015-03-04 16:27:02', '2015-03-04 16:27:48'),
(51, 'oh', 1, 'Admin Aide I', 1, '$2y$10$BxDLSX4lXyGRV.pS4UiC.OluxDTrnf.s7rAbaIj/lrzmvS3u6tjwG', 'locked', 1, NULL, NULL, '2015-03-04 16:37:46', '2015-03-04 16:39:20'),
(52, '0000', 1, 'Admin Aide I', 1, '$2y$10$gBh5eSKYFs4DRiyUFMP3WeJd6z0RwbVdBiebSqQv.1mRVwfSsfMqG', 'locked', 1, '9laifspbQq8jBOjexzKXAODkKE2grzyLX88bDARcRvcqqeuxJ7k88xFzu7by', NULL, '2015-03-04 16:40:11', '2015-03-06 09:14:09'),
(53, 'emptest', 8, 'OIC', 2, '$2y$10$JAKaNKhsl8jTauPYnklDyOAuDtn.rt4xmQD4kc1WC7ymCdmCw1uW6', 'locked', 1, NULL, NULL, '2015-03-06 07:51:50', '2015-03-06 07:53:11'),
(54, 'emptest1', 8, 'Admin Aide II', 4, '$2y$10$cDSq.SHBG/IyM37JAWKoZeDZZLqp/WhUrXVoRpzxC1OM51UTBt2Au', 'locked', 1, 'dU8yhtE7zivDasiCC7iiWgenWUiUYgTrlBlj8NphzMAyK9OFNtxxHNSMRYuc', NULL, '2015-03-06 07:52:41', '2015-03-06 08:17:00'),
(55, '22', 8, 'Admin Aide II', 2, '$2y$10$nX2TbtZfBg3OqLAfiPBzdOLlvOXad0g9ZAn3XT9bdnlGLuz1a4IgK', 'locked', 1, 'qhWLD0RScsK7WIeKDM0awL6Aug4uZFWoroXHjSGE0Cm69iCpzVbWtYherHPm', NULL, '2015-03-06 08:12:02', '2015-03-08 07:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `usersaccomplishments`
--

CREATE TABLE IF NOT EXISTS `usersaccomplishments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datefrom` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dateto` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `accomplishment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `usersaccomplishments`
--

INSERT INTO `usersaccomplishments` (`id`, `employee_no`, `datefrom`, `dateto`, `accomplishment`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '4321', '0000-00-00 00:00:00', '2015-03-02 00:48:52', 'Month of March *Nag-ayos ng mga dokumento *Nagfile sa file cabinet *Nagprint gamit ang printer', 'confirmed', NULL, '2015-03-02 00:50:33', '2015-03-08 01:45:37'),
(2, '1234', '0000-00-00 00:00:00', '2015-03-06 09:18:51', 'Printing', 'confirmed', NULL, '2015-03-02 02:10:27', '2015-03-06 09:19:08'),
(3, '1234', '0000-00-00 00:00:00', '2015-03-06 09:17:46', 'Encoding', 'waiting', NULL, '2015-03-02 02:12:03', '2015-03-06 09:18:12'),
(4, '4321', '0000-00-00 00:00:00', '2015-03-06 14:56:33', '•	Perform time-output analysis of Job Order employees ', 'waiting', NULL, '2015-03-02 03:37:52', '2015-03-06 14:57:09'),
(5, '1234', '0000-00-00 00:00:00', '2015-03-06 09:18:17', 'Creating a Report', 'confirmed', NULL, '2015-03-02 10:16:01', '2015-03-06 09:18:40'),
(6, '4321', '0000-00-00 00:00:00', '2015-03-03 02:41:03', 'qwertyuiopasdfghjklzxcvbnm,', 'waiting', NULL, '2015-03-03 02:41:27', '2015-03-03 02:41:27'),
(7, '4321', '0000-00-00 00:00:00', '2015-03-04 15:52:57', 'That thing called Tadhanarrreeaaesas', 'waiting', NULL, '2015-03-04 08:05:49', '2015-03-04 15:53:05'),
(8, '12', '0000-00-00 00:00:00', '2015-03-04 13:44:14', 'yow yow', 'confirmed', NULL, '2015-03-04 13:44:24', '2015-03-05 03:50:44'),
(9, '12', '0000-00-00 00:00:00', '2015-03-05 03:47:21', 'print documents', 'confirmed', NULL, '2015-03-05 03:47:49', '2015-03-05 03:50:38'),
(10, '4321', '0000-00-00 00:00:00', '2015-03-06 14:57:16', '•	Checks pre-employment assessments', '', NULL, '2015-03-05 06:24:01', '2015-03-06 14:57:29'),
(11, 'emptest1', '0000-00-00 00:00:00', '2015-03-06 08:18:34', 'sleep', 'confirmed', NULL, '2015-03-06 08:18:43', '2015-03-06 08:21:08'),
(12, 'emptest1', '0000-00-00 00:00:00', '2015-03-06 08:22:34', 'eat', 'confirmed', NULL, '2015-03-06 08:22:42', '2015-03-06 08:23:23'),
(13, 'emptest1', '0000-00-00 00:00:00', '2015-03-06 08:23:42', 'drink', 'confirmed', NULL, '2015-03-06 08:23:50', '2015-03-06 08:25:20'),
(14, '12', '0000-00-00 00:00:00', '2015-03-06 14:09:11', 'made voucher ', '', NULL, '2015-03-06 14:09:57', '2015-03-06 14:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `usersbios`
--

CREATE TABLE IF NOT EXISTS `usersbios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nameextension` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `birthplace` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `residentialaddress` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `permanentaddress` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `civilstatus` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `citizenship` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `height` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `weight` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bloodtype` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gsis` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `pagibig` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `philhealth` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `sss` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `telno` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `celno` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `agencyemployeeno` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `tin` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `fathername` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `mothername` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `spousefirstname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `spouselastname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `spousemiddlename` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `spouseoccupation` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `spouseemployername` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `spousetelno` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `usersbios`
--

INSERT INTO `usersbios` (`id`, `employee_no`, `firstname`, `lastname`, `middlename`, `nameextension`, `birthdate`, `birthplace`, `gender`, `residentialaddress`, `permanentaddress`, `civilstatus`, `citizenship`, `height`, `weight`, `bloodtype`, `gsis`, `pagibig`, `philhealth`, `sss`, `telno`, `celno`, `email`, `agencyemployeeno`, `tin`, `fathername`, `mothername`, `spousefirstname`, `spouselastname`, `spousemiddlename`, `spouseoccupation`, `spouseemployername`, `spousetelno`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '0079', 'alkaren', 'aljkjkj', 'aa', '', 'asasasas', 'sasasasas', 'male', 'a', 'a', 'single', 'a', '9', '8', 'b', '88', '8', '8', '888', '888', '8888', 'ala', '99', '888', 'jkjj', 'kjkj', 'jkjj', 'kjkjkj', 'j', 'jkjj', 'kjkjkj', '9898', '', NULL, '2015-02-24 17:14:41', '2015-02-24 17:19:58'),
(2, '1', 'be', 'be', 'be', 'jr', '1/1/eerrr', 'dun lang', 'male', 'dito', 'doon', 'single', 'Fil-am', 'aaa', 'aaa', 'aaa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', '11', '1111', '22', '22', '33', '2121', '1212', 'rrrr', '', NULL, '2015-02-24 17:17:41', '2015-02-24 17:17:41'),
(3, '1234', 'aa', 'b', 'f', 'iv', 'frferf', 'frfrf', 'female', 'rgrgre', 'gfgfdg', 'widowed', 'r', 'R', 'Y', 'r', '14hgf', 'A', 'A', '1452', 'AA', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'a', 'a', 'a', '', NULL, '2015-02-24 18:13:55', '2015-03-02 04:45:09'),
(4, '4321', 'Doray', 'Explorer', 'F', 'v', 'Bukas', 'Doon', 'male', 'Kanto', 'Arendelle', 'single', 'Shitzu', '123', 'Small', 'Royal..blu', '123123', '456456', '789789', '222', '8-7000', '*767', 'emailme@gmail,com', '3310', '8888', 'Superman', 'Elsa', 'Im Single', '', '29', 'Model', 'Junkshop', '', '', NULL, '2015-03-02 03:23:48', '2015-03-07 06:46:08'),
(5, 'try', 'a', 'aa`a``a`aa', 'a', '', 'a', 'a', 'male', 'a', 'a', 'single', 'a', 'a', 'a', 'a', 'aa', 'a', 'a', 'aa', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '', NULL, '2015-03-02 11:01:39', '2015-03-02 11:01:39'),
(6, '12', 'naruto', 'uzumaki', 'benevolent', '', '01/01/01', 'konoha', 'male', 'konoha', 'konoha', 'married', 'secret', '5''3"', '50', 'a', '1', '1', '1', '1', '0910', '1234', 'sample@yahoo.com', '1', '1', 'minato', 'kushina', 'a', 'a', 'a', 'a', 'a', 'a', '', NULL, '2015-03-04 13:50:04', '2015-03-08 03:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `userschildrens`
--

CREATE TABLE IF NOT EXISTS `userschildrens` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userscivilservices`
--

CREATE TABLE IF NOT EXISTS `userscivilservices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `careerservice` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rating` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `examinationdate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `examinationplace` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `licensenumber` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `licensereleasedate` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `userscivilservices`
--

INSERT INTO `userscivilservices` (`id`, `employee_no`, `careerservice`, `rating`, `examinationdate`, `examinationplace`, `licensenumber`, `licensereleasedate`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '0079', 'ww', 'w', '1899-12-31 00:00:00', 'ww', 'w', '1899-12-31 00:00:00', NULL, '2015-02-24 17:22:17', '2015-02-24 17:22:17'),
(2, '4321', 'MMDA', 'perfect!', '1899-12-31 00:00:00', 'asa', '00001', '2015-02-26 06:30:27', NULL, '2015-03-04 16:03:29', '2015-03-04 16:03:29'),
(3, '12', 'a', '1', '2015-03-11 09:30:56', 'w', '122', '2015-03-17 06:25:56', NULL, '2015-03-06 07:01:18', '2015-03-06 07:01:18');

-- --------------------------------------------------------

--
-- Table structure for table `userseducations`
--

CREATE TABLE IF NOT EXISTS `userseducations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `schoolname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `degreecourse` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `yeargraduated` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `units` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `attendancefrom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `attendanceto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `awards` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `userseducations`
--

INSERT INTO `userseducations` (`id`, `employee_no`, `level`, `schoolname`, `degreecourse`, `yeargraduated`, `units`, `attendancefrom`, `attendanceto`, `awards`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '0079', 'elementary', 'ww', 'ww', 'www', '22', '1899-12-31 00:00:00', '1899-12-31 00:00:00', 'ww', NULL, '2015-02-24 17:22:00', '2015-02-24 17:22:00'),
(2, '555', 'college', 'TSU', 'BSIT', '2015', '24', '2011 ', '2015', '', NULL, '2015-02-24 17:35:57', '2015-02-24 17:35:57'),
(3, '4321', 'elementary', 'Stella Maris Montessori', 'elementary?', 'Yesterday', '0.1', '2015-02-24 01:05:50', '2015-04-02 14:50:50', 'Best in Spellieeeaeing', NULL, '2015-03-04 16:00:46', '2015-03-04 16:00:46'),
(4, '4321', 'college', 'Hogwarts School of Witchcraft and Wizardry', '', '', '', '', '', '', NULL, '2015-03-04 16:02:37', '2015-03-04 16:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `usershobbies`
--

CREATE TABLE IF NOT EXISTS `usershobbies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hobby` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `usershobbies`
--

INSERT INTO `usershobbies` (`id`, `employee_no`, `hobby`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '0079', 's', NULL, '2015-02-24 17:23:35', '2015-02-24 17:23:35'),
(2, '4321', 'Singing', NULL, '2015-03-04 16:06:20', '2015-03-06 14:55:10'),
(3, '12', 'kage bunshin technique', NULL, '2015-03-05 22:53:41', '2015-03-05 22:53:41'),
(4, '12', 'sexy no jutsu', '2015-03-08 03:54:17', '2015-03-05 23:00:47', '2015-03-08 03:54:17');

-- --------------------------------------------------------

--
-- Table structure for table `usersorganizations`
--

CREATE TABLE IF NOT EXISTS `usersorganizations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usersorganizations`
--

INSERT INTO `usersorganizations` (`id`, `employee_no`, `organization`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1234', 'test organization2', NULL, '2015-03-04 18:19:08', '2015-03-04 18:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `usersquestionaires`
--

CREATE TABLE IF NOT EXISTS `usersquestionaires` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qnumber` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usersrecognitions`
--

CREATE TABLE IF NOT EXISTS `usersrecognitions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recognition` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `usersrecognitions`
--

INSERT INTO `usersrecognitions` (`id`, `employee_no`, `recognition`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '0079', 'dqd', NULL, '2015-02-24 17:23:50', '2015-02-24 17:23:50'),
(2, '4321', 'April 15, 2015', NULL, '2015-03-04 16:06:33', '2015-03-04 16:06:33'),
(3, '12', 'aa', NULL, '2015-03-06 07:00:22', '2015-03-06 07:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `usersreferences`
--

CREATE TABLE IF NOT EXISTS `usersreferences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `telno` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `usersreferences`
--

INSERT INTO `usersreferences` (`id`, `employee_no`, `name`, `address`, `telno`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '0079', 'xd', 'd', 'd', NULL, '2015-02-24 17:24:38', '2015-02-24 17:24:38'),
(2, '0079', 'd', 'dd', 'dd', NULL, '2015-02-24 17:24:50', '2015-02-24 17:24:50'),
(3, '1234', '1', '1', '1', '2015-02-24 17:33:14', '2015-02-24 17:31:17', '2015-02-24 17:33:14'),
(4, '1234', '123', '1', '1', NULL, '2015-02-24 17:37:03', '2015-02-24 17:37:03'),
(5, '12', 'benevolent', 'dysn', '4', NULL, '2015-03-04 13:52:13', '2015-03-04 13:52:13'),
(6, '4321', 'Anna Kendrick', 'Sapang Madagul', '12342', NULL, '2015-03-04 16:07:49', '2015-03-04 16:07:49'),
(7, '12', 'a', 'a', '123', NULL, '2015-03-06 06:59:43', '2015-03-06 06:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `userstrainings`
--

CREATE TABLE IF NOT EXISTS `userstrainings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seminar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `datefrom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dateto` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `numberofhours` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sponsor` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `userstrainings`
--

INSERT INTO `userstrainings` (`id`, `employee_no`, `seminar`, `datefrom`, `dateto`, `numberofhours`, `sponsor`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '4321', 'PMA', '2015-03-03 05:25:13', '', '1', 'mCDO', NULL, '2015-03-04 16:05:52', '2015-03-04 16:05:52');

-- --------------------------------------------------------

--
-- Table structure for table `usersvoluntaryworks`
--

CREATE TABLE IF NOT EXISTS `usersvoluntaryworks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `datefrom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dateto` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `numberofhours` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usersvoluntaryworks`
--

INSERT INTO `usersvoluntaryworks` (`id`, `employee_no`, `organization`, `datefrom`, `dateto`, `numberofhours`, `position`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '0079', 's', '1899-12-31 00:00:00', '1899-12-31 00:00:00', 's', 's', NULL, '2015-02-24 17:22:53', '2015-02-24 17:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `usersworkexperiences`
--

CREATE TABLE IF NOT EXISTS `usersworkexperiences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `employee_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datefrom` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dateto` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `salary` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `salarygrade` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `statusappointment` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `governmentservice` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `usersworkexperiences`
--

INSERT INTO `usersworkexperiences` (`id`, `employee_no`, `datefrom`, `dateto`, `position`, `department`, `salary`, `salarygrade`, `statusappointment`, `governmentservice`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '0079', '1899-12-31 00:00:00', '1899-12-31 00:00:00', 'sSsSs', 's', 's', 's', 's', 's', NULL, '2015-02-24 17:22:35', '2015-02-24 17:22:35'),
(2, '4321', '2015-07-15 14:10:14', '2015-03-18 17:05:14', 'Any', 'OIC', 'BA6', 'Minimum', 'Guard', 'next quest', NULL, '2015-03-04 16:04:49', '2015-03-04 16:04:49');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
