-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 29, 2021 at 05:41 AM
-- Server version: 10.3.28-MariaDB-log-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phoegzju_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@email.com', 'admin', NULL, '$2y$10$IHFbw8.KHJQZ4RB3khJ80Og72IrS8OgKfyJsQDPnBmIyuGV9.Htgy', 'SZRAxn2yTTFThdTY6yEaNHxEFtiYMsFs8KG0jypRXiW3UVJq4naedfMwe1nm', NULL, '2021-05-26 21:22:45'),
(2, 'Administrator', 'admin1@email.com', 'admin1', NULL, '$2y$12$cpsL7WgrYkBBxEp3w0Ua.OqkOXtmGkd/CD09upu/P/l0Pqug7WL9W', 'SZRAxn2yTTFThdTY6yEaNHxEFtiYMsFs8KG0jypRXiW3UVJq4naedfMwe1nm', NULL, '2021-05-26 21:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `admin_wallet_addresses`
--

CREATE TABLE `admin_wallet_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_wallet_addresses`
--

INSERT INTO `admin_wallet_addresses` (`id`, `name`, `address`, `image`, `created_at`, `updated_at`) VALUES
(1, 'BTC', '3MNVPUwfph2NaRViKGfv1Q7rBjaQ3zvaQY', NULL, NULL, '2020-12-23 11:27:48'),
(2, 'ETH', '1BfSBpGosSzV3ytHXK1xHH14RWyGBfVrMu', NULL, NULL, '2020-12-23 11:27:48'),
(3, 'LTC', 'LdcriFxmxit6hzj9JNbZZBacC1L4vV8Qx1', NULL, NULL, '2020-12-23 11:27:48'),
(4, 'XRP', '864212964', NULL, NULL, '2020-12-23 11:27:48'),
(5, 'TRON', 'TDkKDLFmARzBrSpUt6Nxn6T3bBxfYJHFo9', NULL, NULL, '2020-12-23 11:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `investments`
--

CREATE TABLE `investments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invest_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `investment_package_id` int(10) UNSIGNED DEFAULT NULL,
  `cryptocurrency` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investments`
--

INSERT INTO `investments` (`id`, `invest_id`, `investment_package_id`, `cryptocurrency`, `user_id`, `amount`, `is_approved`, `created_at`, `updated_at`) VALUES
(19, 'DMI-03844', 2, 'Bitcoin Cash', 11, 2000, 1, '2021-03-14 11:33:24', '2021-03-14 11:33:24'),
(18, 'DMI-59109', 1, 'Binance Coin', 11, 400, 1, '2021-03-14 11:33:03', '2021-03-14 11:33:03'),
(20, 'DMI-54342', 3, NULL, 15, 3000, 0, '2021-05-27 15:58:39', '2021-05-27 15:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `investment_packages`
--

CREATE TABLE `investment_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `referral_bonus` int(11) DEFAULT NULL,
  `monthly_profit` int(11) DEFAULT NULL,
  `days_turnover` int(11) DEFAULT NULL,
  `expert_advice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_bonus` int(11) DEFAULT NULL,
  `option1` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option2` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option3` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roi` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `compound_roi` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investment_packages`
--

INSERT INTO `investment_packages` (`id`, `name`, `min`, `max`, `referral_bonus`, `monthly_profit`, `days_turnover`, `expert_advice`, `deposit_bonus`, `option1`, `option2`, `option3`, `description`, `roi`, `compound_roi`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Basic', 50, 499, NULL, NULL, 24, '24/7 Support: YES', NULL, NULL, 'Money Back guaranteed', 'Instant Automatic Withdrawal', 'Build an emergency fund so you can weather any storm. We recommend this for every client, because life happens.', '10% after 24 hours', NULL, 1, NULL, NULL),
(2, 'Silver', 500, 4999, NULL, NULL, 48, '24/7 Support: YES', NULL, NULL, 'Money Back guaranteed', 'Instant Automatic Withdrawal', 'Helps investors lower risk; whether you’re saving for a purchase, short-term goal or a payment plan. This plan will help you achieve it Faster', '20% after 48 hours ', NULL, 1, NULL, NULL),
(3, 'Gold', 2000, NULL, NULL, NULL, 72, '24/7 Support: YES', NULL, NULL, 'Money Back guaranteed', 'Instant Automatic Withdrawal', 'Start on the path of financial freedom. It may seem far away, but starting sooner makes it easier to get the retirement lifestyle you want.\r\n            (You can make daily/weekly/Monthly deposits till you get to the minimum investment)\r\n            ', '50% after 72 hours', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_30_200519_create_wallets_table', 1),
(5, '2020_05_30_200548_create_admins_table', 1),
(6, '2020_05_30_200614_create_investments_table', 1),
(7, '2020_06_03_082900_create_investment_packages_table', 1),
(9, '2020_10_16_004759_create_transactions_table', 2),
(10, '2020_12_22_061339_create_admin_wallet_addresses_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `debit`, `credit`, `description`, `created_at`, `updated_at`) VALUES
(1, 10, 10000, 0, 'You made an investment request', '2020-10-16 11:31:01', '2020-10-16 11:31:01'),
(2, 10, 0, 10000, 'Congratulations, Your Investment Has Been Approved', '2020-10-16 11:59:15', '2020-10-16 11:59:15'),
(3, 10, 0, 30000, 'Congratulations, Your Investment Has Been Approved', '2020-10-16 12:03:38', '2020-10-16 12:03:38'),
(4, 10, 0, 30000, 'Congratulations, Your Investment Has Been Approved', '2020-10-16 12:05:46', '2020-10-16 12:05:46'),
(5, 10, 0, 30000, 'Congratulations, Your Investment Has Been Approved', '2020-10-16 12:09:08', '2020-10-16 12:09:08'),
(6, 11, 0, 400, 'profit from', '2020-11-15 11:29:29', '2020-11-15 11:29:29'),
(7, 12, 0, 300, 'for commission', '2020-11-15 11:33:21', '2020-11-15 11:33:21'),
(8, 12, 0, 800, NULL, '2020-11-21 13:16:54', '2020-11-21 13:16:54'),
(9, 11, 400, 0, 'You made an investment request', '2020-12-27 09:02:20', '2020-12-27 09:02:20'),
(10, 11, 500, 0, 'You made an investment request', '2021-03-07 13:22:34', '2021-03-07 13:22:34'),
(11, 11, 555, 0, 'You made an investment request', '2021-03-07 13:27:01', '2021-03-07 13:27:01'),
(12, 11, 0, 555, 'Congratulations, Your Investment Has Been Approved', '2021-03-07 13:28:38', '2021-03-07 13:28:38'),
(13, 11, 0, 500, 'Congratulations, Your Investment Has Been Approved', '2021-03-07 13:28:49', '2021-03-07 13:28:49'),
(14, 11, 400, 0, 'You made an investment request', '2021-03-07 13:32:04', '2021-03-07 13:32:04'),
(15, 11, 0, 400, 'Congratulations, Your Investment Has Been Approved', '2021-03-07 13:34:02', '2021-03-07 13:34:02'),
(16, 11, 700, 0, 'You made an investment request', '2021-03-07 13:35:19', '2021-03-07 13:35:19'),
(17, 11, 2000, 0, 'You made an investment request', '2021-03-09 13:56:10', '2021-03-09 13:56:10'),
(18, 11, 0, 2000, 'Congratulations, Your Investment Has Been Approved', '2021-03-09 13:57:29', '2021-03-09 13:57:29'),
(19, 11, 600, 0, 'You made an investment request', '2021-03-13 09:18:55', '2021-03-13 09:18:55'),
(20, 11, 7000, 0, 'You made an investment request', '2021-03-13 09:19:18', '2021-03-13 09:19:18'),
(21, 11, 400, 0, 'You made an investment request', '2021-03-13 09:30:31', '2021-03-13 09:30:31'),
(22, 11, 400, 0, 'You made an investment request', '2021-03-14 11:33:03', '2021-03-14 11:33:03'),
(23, 11, 2000, 0, 'You made an investment request', '2021-03-14 11:33:24', '2021-03-14 11:33:24'),
(24, 15, 3000, 0, 'You made an investment request', '2021-05-27 15:58:39', '2021-05-27 15:58:39'),
(25, 18, 0, 5000, NULL, '2021-05-27 16:04:10', '2021-05-27 16:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_backup` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valid_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet_id` int(10) UNSIGNED NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bitcoin_wallet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethereum_wallet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `password_backup`, `image`, `valid_id`, `wallet_id`, `mobile`, `country`, `state`, `address`, `bitcoin_wallet`, `ethereum_wallet`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(17, 'xedd emeka', 'dex@email.com', NULL, '$2y$10$10HeSMAN7P8ncVDUR7Wx8uKnmpoQELmNXznkNo/rZypaT8AisPh16', '11111111', NULL, NULL, 21, NULL, 'Antartica', 'Antartica', NULL, NULL, NULL, 1, NULL, '2021-05-27 15:33:46', '2021-05-27 15:33:46'),
(18, 'Jay', 'jayklyn45@gmail.com', NULL, '$2y$10$4/K3UL8kiX0l4/bSgH6QBORzlF/kAHraouultSAGhaKBT/0nWbbl2', 'fineface', NULL, NULL, 22, '+20452318156', 'Angola', 'Benguela', '305 Bolivia Bosnia', 'Ghdjduhhdbeuhebdjjdjdjdjuygggeheujehd', NULL, 1, 'pUKWeME9YAXWGFcDA0DV8xYSVOaeIoskrC1Tz7Zjd1OGBC47T1p5mx6toCDK', '2021-05-27 15:42:08', '2021-05-27 15:42:08'),
(15, 'Emeka Mbachu', 'neutrondeveloper@gmail.com', NULL, '$2y$10$gdeKvaKelH23TH6wzVc.BOiyoSUWnzMvQH/8CcZdzMUzAQnJxureG', '11111111', '1622102631181928316_255974172935640_2235694839840283790_n.jpg', NULL, 19, '111111111111', 'Armenia', 'Lorri', 'Address and stuff', 'rrg[ergnpnrnerpnew;wenpnwpnow r', NULL, 1, NULL, '2021-05-27 12:03:51', '2021-05-27 12:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL DEFAULT 0,
  `profit` int(11) DEFAULT 0,
  `commission` int(11) DEFAULT 0,
  `bonus` int(12) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `amount`, `profit`, `commission`, `bonus`, `created_at`, `updated_at`) VALUES
(11, 0, 0, 0, 0, '2020-10-15 22:37:34', '2020-10-15 22:37:34'),
(10, 0, 0, 0, 0, '2020-10-15 22:33:35', '2020-10-15 22:33:35'),
(9, 0, 0, 0, 0, '2020-10-15 22:32:41', '2020-10-15 22:32:41'),
(8, 0, 0, 0, 0, '2020-10-15 22:30:37', '2020-10-15 22:30:37'),
(7, 0, 0, 0, 0, '2020-10-04 05:59:23', '2020-10-04 05:59:23'),
(6, 723, 0, 0, 0, '2020-06-03 21:51:09', '2020-06-13 10:08:47'),
(12, 0, 0, 0, 0, '2020-10-15 22:39:25', '2020-10-15 22:39:25'),
(13, 0, 500, 0, 0, '2020-10-15 22:42:23', '2021-05-26 13:59:32'),
(14, 0, 400, 0, 0, '2020-10-15 22:45:47', '2020-11-15 11:29:29'),
(15, 800, 500, 300, 0, '2020-10-17 19:58:16', '2021-03-17 21:56:01'),
(16, 0, 0, 0, 0, '2021-05-27 11:27:59', '2021-05-27 11:27:59'),
(17, 0, 0, 0, 0, '2021-05-27 11:52:20', '2021-05-27 11:52:20'),
(18, 0, 0, 0, 0, '2021-05-27 12:01:56', '2021-05-27 12:01:56'),
(19, 0, 0, 0, 0, '2021-05-27 12:03:51', '2021-05-27 12:03:51'),
(20, 0, 0, 0, 0, '2021-05-27 15:28:06', '2021-05-27 15:28:06'),
(21, 0, 0, 0, 0, '2021-05-27 15:33:46', '2021-05-27 15:33:46'),
(22, 5000, 1000, 0, 1500, '2021-05-27 15:42:08', '2021-05-28 11:52:30'),
(23, 0, 0, 0, 0, '2021-05-27 15:48:47', '2021-05-27 15:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `bitcoin_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `user_id`, `bitcoin_address`, `amount`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 5, '', 20, 0, '2020-07-20 13:35:43', '2020-07-20 15:53:26'),
(2, 5, '', 20, 1, '2020-07-20 13:36:30', '2020-07-20 16:06:11'),
(3, 5, '', 230, 1, '2020-07-20 13:41:19', '2020-07-20 15:57:52'),
(4, 5, 'kkkkkkkkkkkkkkkkkkkkkkkkkkk', 50, 0, '2020-09-20 21:17:59', '2020-09-20 21:17:59'),
(5, 5, 'kkkkkkkkkkkkkkkkkkkkkkkkkkk', 344, 0, '2020-10-15 14:07:44', '2020-10-15 14:07:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `admin_wallet_addresses`
--
ALTER TABLE `admin_wallet_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investments`
--
ALTER TABLE `investments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `investments_investment_package_id_index` (`investment_package_id`),
  ADD KEY `investments_user_id_index` (`user_id`);

--
-- Indexes for table `investment_packages`
--
ALTER TABLE `investment_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_wallet_id_index` (`wallet_id`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `withdrawals_user_id_index` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_wallet_addresses`
--
ALTER TABLE `admin_wallet_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investments`
--
ALTER TABLE `investments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `investment_packages`
--
ALTER TABLE `investment_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
