-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 07:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel-room`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `weburl` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `email`, `phone`, `weburl`, `created_at`, `updated_at`) VALUES
(1, 'main street', 'admin@admin.com', '0777777777', 'example.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'lohee', 'admin@admin.com', 'i need mojito', 'gcgfxugjhytfuyucgyvuhg', '2023-07-24 08:30:55', NULL),
(2, 'rakavan loheeshan', 'etec099@gmail.com', 'i need mojito GRGERG', 'qwffwergerhgerhetrjhtrhethetr', '2023-07-24 09:07:10', NULL),
(3, 'rakavan loheeshan', 'etec099@gmail.com', 'i Am rishishanan', 'vuwefyehyfbgjvfguiywegvf', '2023-07-26 12:12:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_icons`
--

CREATE TABLE `contact_icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address_icon` text NOT NULL,
  `email_icon` varchar(255) NOT NULL,
  `phone_icon` varchar(255) NOT NULL,
  `weburl_icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_icons`
--

INSERT INTO `contact_icons` (`id`, `address_icon`, `email_icon`, `phone_icon`, `weburl_icon`, `created_at`, `updated_at`) VALUES
(1, 'fa-solid fa-bed fa-beat fa-2xs', 'fa-solid fa-bed fa-beat fa-2xs', 'fa-solid fa-bed fa-beat fa-2xs', 'fa-solid fa-bed fa-beat fa-2xs', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_abouts`
--

CREATE TABLE `home_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `head` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `short_dis` text NOT NULL,
  `imageone` text NOT NULL,
  `imagetwo` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_abouts`
--

INSERT INTO `home_abouts` (`id`, `head`, `tittle`, `short_dis`, `imageone`, `imagetwo`, `created_at`, `updated_at`) VALUES
(1, 'LOTUSPARK HOTTEL', 'Welcome Our Hotel', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'storage/image/home_about/image-1/1771893870358894.jpg', 'storage/image/home_about/image-2/1771893870548167.jpg', '2023-07-19 18:04:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_pics`
--

CREATE TABLE `home_pics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imageone` text NOT NULL,
  `imagetwo` text NOT NULL,
  `imagethree` text NOT NULL,
  `imagefour` text NOT NULL,
  `imagefive` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pics`
--

INSERT INTO `home_pics` (`id`, `imageone`, `imagetwo`, `imagethree`, `imagefour`, `imagefive`, `created_at`, `updated_at`) VALUES
(1, 'storage/image/home_pic/1/insta-1.jpg', 'storage/image/home_pic/2/insta-1.jpg', 'storage/image/home_pic/3/insta-1.jpg', 'storage/image/home_pic/4/insta-1.jpg', 'storage/image/home_pic/5/insta-1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_restaurants`
--

CREATE TABLE `home_restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `short_dis` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_rests`
--

CREATE TABLE `home_rests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `short_dis` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_rests`
--

INSERT INTO `home_rests` (`id`, `tittle`, `price`, `short_dis`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Grilled Crab with Prawn with Chilly', 5550, 'A small river named Duden flows by their place and supplies More', 'storage/image/home_rest/1771893973358346.jpg', '2023-07-19 18:06:13', NULL),
(2, 'Welcome Our Hotel', 5550, 'A small river named Duden flows by their place and supplies More', 'storage/image/home_rest/1771893983291830.jpg', '2023-07-19 18:06:23', NULL),
(3, 'Grilled Crab with Prawn with Chilly', 555, 'A small river named Duden flows by their place and supplies More', 'storage/image/home_rest/1771893998888653.jpg', '2023-07-19 18:06:38', NULL),
(4, 'Grilled Crab with Prawn with Chilly', 5550, 'A small river named Duden flows by their place and supplies More', 'storage/image/home_rest/1771894019768500.jpg', '2023-07-19 18:06:58', NULL),
(5, 'Grilled Crab with Prawn with Chilly', 2000, 'A small river named Duden flows by their place and supplies More', 'storage/image/home_rest/1771894030509926.jpg', '2023-07-19 18:07:08', NULL),
(6, 'Welcome Our Hotel', 5550, 'A small river named Duden flows by their place and supplies More', 'storage/image/home_rest/1771894041610659.jpg', '2023-07-19 18:07:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_rooms`
--

CREATE TABLE `home_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `head` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `roomone` varchar(255) NOT NULL,
  `roomoneimg` text NOT NULL,
  `roomtwo` varchar(255) NOT NULL,
  `roomtwoimg` varchar(255) NOT NULL,
  `roomthree` varchar(255) NOT NULL,
  `roomthreeimg` varchar(255) NOT NULL,
  `roomfour` varchar(255) NOT NULL,
  `roomfourimg` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_rooms`
--

INSERT INTO `home_rooms` (`id`, `head`, `tittle`, `roomone`, `roomoneimg`, `roomtwo`, `roomtwoimg`, `roomthree`, `roomthreeimg`, `roomfour`, `roomfourimg`, `created_at`, `updated_at`) VALUES
(1, 'Master Rooms', 'Master Rooms', 'FAmily rooms', 'storage/image/home_rooms/roomone/room-5.jpg', 'FAmily rooms', 'storage/image/home_rooms/roomtwo/1772312960221379.jpg', 'FAmily rooms', 'storage/image/home_rooms/roomthree/1772312975882681.jpg', 'FAmily rooms', 'storage/image/home_rooms/roomfour/1772312988308379.jpg', NULL, '2023-07-24 09:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `home_services`
--

CREATE TABLE `home_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `head` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `servicenameone` varchar(255) NOT NULL,
  `serviceiconone` text NOT NULL,
  `servicenametwo` varchar(255) NOT NULL,
  `serviceicontwo` text NOT NULL,
  `servicenamethree` varchar(255) NOT NULL,
  `serviceiconthree` text NOT NULL,
  `servicenamefour` varchar(255) NOT NULL,
  `serviceiconfour` text NOT NULL,
  `servicenamefive` varchar(255) NOT NULL,
  `serviceiconfive` text NOT NULL,
  `servicenamesix` varchar(255) NOT NULL,
  `serviceiconsix` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_services`
--

INSERT INTO `home_services` (`id`, `head`, `tittle`, `servicenameone`, `serviceiconone`, `servicenametwo`, `serviceicontwo`, `servicenamethree`, `serviceiconthree`, `servicenamefour`, `serviceiconfour`, `servicenamefive`, `serviceiconfive`, `servicenamesix`, `serviceiconsix`, `created_at`, `updated_at`) VALUES
(1, 'LOTUSPARK HOTTEL', 'You\'ll Never Want To Leave', 'Friendly Service', 'fa-solid fa-wifi fa-beat fa-2xs', 'Friendly Service', 'fa-solid fa-bed fa-beat fa-2xs', 'Pets', 'fa-solid fa-cat fa-beat fa-2xs', 'Bell Concierge', 'fa-solid fa-bell-concierge fa-beat fa-2xs', 'Friendly Service', 'fa-solid fa-bed fa-beat fa-2xs', 'Friendly Service', 'fa-solid fa-bed fa-beat fa-2xs', NULL, '2023-07-26 11:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `home_testimonies`
--

CREATE TABLE `home_testimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `ptofile` text NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_testimonies`
--

INSERT INTO `home_testimonies` (`id`, `name`, `profession`, `ptofile`, `message`, `created_at`, `updated_at`) VALUES
(1, 'rakavan loheeshan', 'Web Developer', 'storage/image/home_testimony/profile/1771893902613783.jpg', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.', '2023-07-19 18:05:06', NULL),
(2, 'lohee', 'Developer', 'storage/image/home_testimony/profile/1771893913283660.jpg', 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.', '2023-07-19 18:05:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(30, '2023_07_19_150901_create_home_testimonies_table', 10),
(70, '2014_10_12_000000_create_users_table', 11),
(71, '2014_10_12_100000_create_password_reset_tokens_table', 11),
(72, '2014_10_12_200000_add_two_factor_columns_to_users_table', 11),
(73, '2019_08_19_000000_create_failed_jobs_table', 11),
(74, '2019_12_14_000001_create_personal_access_tokens_table', 11),
(75, '2023_07_14_194419_create_sessions_table', 11),
(76, '2023_07_15_140039_create_sliders_table', 11),
(77, '2023_07_16_193106_create_home_abouts_table', 11),
(78, '2023_07_17_090732_create_home_services_table', 11),
(79, '2023_07_17_142826_create_home_rooms_table', 11),
(80, '2023_07_17_183213_create_home_rests_table', 11),
(81, '2023_07_18_193418_create_home_pics_table', 11),
(82, '2023_07_18_202730_create_contacts_table', 11),
(83, '2023_07_18_223258_create_contact_icons_table', 11),
(84, '2023_07_19_130259_create_contact_forms_table', 11),
(85, '2023_07_19_152952_create_home_testimonies_table', 11),
(86, '2023_07_19_194505_create_home_restaurants_table', 11),
(87, '2023_07_19_204620_create_restaurant_abouts_table', 11),
(88, '2023_07_20_122909_create_amenities_table', 12),
(90, '2023_07_20_155849_create_room_cards_table', 13),
(91, '2023_07_25_181940_create_bookings_table', 14),
(92, '2023_07_26_024641_create_boards_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_abouts`
--

CREATE TABLE `restaurant_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `head` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `short_dis` text NOT NULL,
  `imageone` text NOT NULL,
  `imagetwo` text NOT NULL,
  `imagethree` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('dprw36xEX1gTvbVyIYJ9sENrAOHT3qyTtymnGDEV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.183', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQ1BFa09VMUx1VzZmVzgyb29pUHVvN0tFM3NNZ214bjZ0ZUtFVHZYeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yb29tcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDJybnBtVkVjM0FhVkl2VUNKa2VQOHVOSjRRMzNPOUkvOFFVdXh2cjI5Nkt2cEpzbUMvaWtxIjt9', 1690559664);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `discription` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `tittle`, `discription`, `created_at`, `updated_at`) VALUES
(1, 'storage/image/slider/1771893823359332.jpg', 'Grilled Crab with Prawn with Chilly', 'dbvdgiyefjebfujhsvjndjhkvfuiwfiwjlfbwvuiqwfipqjoplkvfbihwuoqwfopqweofnjeguihegopwofjiowhf', '2023-07-19 18:03:51', NULL),
(2, 'storage/image/slider/1771893835712002.jpg', 'Welcome Our Hotel Loheeshan', 'dbvdgiyefjebfujhsvjndjhkvfuiwfiwjlfbwvuiqwfipqjoplkvfbihwuoqwfopqweofnjeguihegopwofjiowhf', '2023-07-19 18:04:02', '2023-07-24 08:28:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'loheeshan', 'admin@admin.com', '1', '2023-07-19 18:37:12', '$2y$10$2rnpmVEc3AaVIvUCJkeP8uNJ4Q33O9I/8QUuxvr296KvpJsmC/ikq', NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-19 18:36:54', '2023-07-19 18:37:12'),
(2, 'lohee', 'lohee@gmail.com', '1', '2023-07-20 00:12:22', 'lohee123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_icons`
--
ALTER TABLE `contact_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_abouts`
--
ALTER TABLE `home_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pics`
--
ALTER TABLE `home_pics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_restaurants`
--
ALTER TABLE `home_restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_rests`
--
ALTER TABLE `home_rests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_rooms`
--
ALTER TABLE `home_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_services`
--
ALTER TABLE `home_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_testimonies`
--
ALTER TABLE `home_testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `restaurant_abouts`
--
ALTER TABLE `restaurant_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_icons`
--
ALTER TABLE `contact_icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_abouts`
--
ALTER TABLE `home_abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_pics`
--
ALTER TABLE `home_pics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_restaurants`
--
ALTER TABLE `home_restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_rests`
--
ALTER TABLE `home_rests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `home_rooms`
--
ALTER TABLE `home_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_services`
--
ALTER TABLE `home_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_testimonies`
--
ALTER TABLE `home_testimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurant_abouts`
--
ALTER TABLE `restaurant_abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
