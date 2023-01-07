-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2023 at 02:43 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkingmans`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_owner_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `parking_slot_id` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booked_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `vehicle_owner_id`, `vehicle_id`, `parking_slot_id`, `duration`, `status_id`, `notes`, `booked_date`, `created_at`, `updated_at`) VALUES
(1, 3, 3, 7, 72, 2, 'Debitis omnis inventore id et.', '2023-01-01 09:16:11', '2023-01-03 05:28:53', '2023-01-03 05:28:53'),
(2, 18, 21, 11, 2, 3, 'Et illo officia ab voluptate consequatur.', '2023-01-02 12:40:38', '2023-01-03 05:28:53', '2023-01-03 05:28:53'),
(3, 11, 11, 14, 48, 1, 'Similique dolore cumque culpa ab quas laudantium soluta.', '2023-01-03 00:13:48', '2023-01-03 05:28:53', '2023-01-03 05:28:53'),
(4, 2, 2, 8, 8, 3, 'Sit et non officiis est itaque.', '2023-01-02 00:15:06', '2023-01-03 05:28:53', '2023-01-03 05:28:53'),
(5, 20, 25, 5, 8, 1, 'Quia error id provident perspiciatis.', '2023-01-01 20:14:42', '2023-01-03 05:28:53', '2023-01-03 05:28:53'),
(6, 2, 2, 5, 48, 2, 'Facere numquam harum doloribus laboriosam deleniti et.', '2023-01-01 15:39:25', '2023-01-03 05:28:53', '2023-01-03 05:28:53'),
(7, 16, 16, 1, 72, 3, 'Hic maiores eum nihil repellendus.', '2023-01-02 21:19:27', '2023-01-03 05:28:53', '2023-01-03 05:28:53'),
(8, 9, 9, 3, 48, 0, 'Consequuntur sed quis earum omnis.', '2023-01-01 03:10:27', '2023-01-03 05:28:53', '2023-01-03 05:28:53'),
(9, 9, 9, 7, 2, 3, 'Ut mollitia necessitatibus placeat neque expedita illo et voluptates.', '2023-01-01 07:44:01', '2023-01-03 05:28:53', '2023-01-03 05:28:53'),
(10, 12, 12, 12, 48, 3, 'Laudantium dolorum officia sequi voluptas inventore.', '2023-01-01 04:00:19', '2023-01-03 05:28:53', '2023-01-03 05:28:53'),
(11, 16, 17, 10, 8, 3, 'Qui sed quod voluptas at itaque qui numquam alias.', '2023-01-01 06:33:39', '2023-01-03 05:28:53', '2023-01-03 05:28:53'),
(12, 22, 31, 4, 2, 1, 'Et dignissimos qui cupiditate quis qui necessitatibus.', '2023-01-01 22:12:14', '2023-01-03 05:28:53', '2023-01-03 05:28:53'),
(13, 1, 1, 15, 24, 4, 'Facere illo in expedita consequatur numquam totam.', '2023-01-01 06:47:19', '2023-01-03 05:28:53', '2023-01-03 05:28:53'),
(14, 21, 28, 8, 24, 3, 'Nihil corrupti aliquid consequatur porro aut rerum saepe.', '2023-01-02 09:43:49', '2023-01-03 05:28:54', '2023-01-03 05:28:54'),
(15, 14, 14, 13, 48, 4, 'Aliquam provident tempora molestias perspiciatis.', '2023-01-02 16:44:26', '2023-01-03 05:28:54', '2023-01-03 05:28:54'),
(16, 4, 4, 15, 72, 2, 'At soluta et aliquam dolorem recusandae ratione repudiandae rem.', '2023-01-02 22:29:01', '2023-01-03 05:28:54', '2023-01-03 05:28:54'),
(17, 11, 11, 7, 72, 0, 'Voluptas atque numquam molestias esse.', '2023-01-03 05:52:47', '2023-01-03 05:28:54', '2023-01-03 05:28:54'),
(18, 21, 26, 14, 8, 0, 'Iusto assumenda possimus molestias nihil tempore deleniti qui.', '2023-01-03 05:42:10', '2023-01-03 05:28:55', '2023-01-03 05:28:55'),
(19, 13, 13, 10, 4, 4, 'A occaecati tempora veniam voluptatum ut.', '2023-01-01 14:38:31', '2023-01-03 05:28:55', '2023-01-03 05:28:55'),
(20, 9, 9, 10, 72, 3, 'Ad quam omnis doloribus maiores possimus.', '2023-01-01 22:37:47', '2023-01-03 05:28:55', '2023-01-03 05:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `booking_statuses`
--

CREATE TABLE `booking_statuses` (
  `id` int(11) NOT NULL,
  `status_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_statuses`
--

INSERT INTO `booking_statuses` (`id`, `status_name`) VALUES
(0, 'Processing'),
(1, 'Approved'),
(2, 'Rejected'),
(3, 'Cancelled'),
(4, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_12_050757_create_vehicles_table', 1),
(6, '2022_11_12_050825_create_vehicle_categories_table', 1),
(7, '2022_11_12_050843_create_vehicle_owners_table', 1),
(8, '2022_12_01_081221_create_parking_slots_table', 1),
(9, '2022_12_01_081324_create_parking_slot_statuses_table', 1),
(10, '2022_12_01_111913_create_bookings_table', 1),
(11, '2022_12_01_111958_create_booking_statuses_table', 1),
(12, '2022_12_02_113949_create_payments_table', 1),
(13, '2022_12_02_114226_create_payment_statuses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parking_slots`
--

CREATE TABLE `parking_slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slot_number` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parking_slots`
--

INSERT INTO `parking_slots` (`id`, `slot_number`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(2, 2, 1, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(3, 3, 1, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(4, 4, 2, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(5, 5, 2, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(6, 6, 0, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(7, 7, 0, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(8, 8, 1, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(9, 9, 1, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(10, 10, 0, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(11, 11, 1, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(12, 12, 0, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(13, 13, 1, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(14, 14, 1, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(15, 15, 0, '2023-01-03 05:28:52', '2023-01-03 05:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `parking_slot_statuses`
--

CREATE TABLE `parking_slot_statuses` (
  `id` int(11) NOT NULL,
  `status_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parking_slot_statuses`
--

INSERT INTO `parking_slot_statuses` (`id`, `status_name`) VALUES
(0, 'Available'),
(1, 'Occupied'),
(2, 'Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` int(11) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(11) NOT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `booking_id`, `amount`, `method`, `status_id`, `notes`, `paid_by`, `paid_date`, `created_at`, `updated_at`) VALUES
(1, 1, '10000.00', 'Cash', 1, 'Tempore id ut minus facilis omnis voluptatem sed.', 'Prof. Sigmund Stoltenberg Jr.', '2023-01-01 03:45:54', '2023-01-03 05:28:55', '2023-01-03 05:28:55'),
(2, 2, '150000.00', 'Bank Transfers', 1, 'Et ipsum tempora ipsum sed distinctio.', 'Mrs. Vergie Kutch I', '2023-01-01 05:14:51', '2023-01-03 05:28:55', '2023-01-03 05:28:55'),
(3, 3, '200000.00', 'Bank Transfers', 2, 'Fuga dolor corporis non maxime explicabo.', 'Mr. Carey Hahn PhD', '2023-01-03 03:17:27', '2023-01-03 05:28:56', '2023-01-03 05:28:56'),
(4, 4, '50000.00', 'Credit Card', 2, 'Amet optio minus beatae provident rerum.', 'Kirsten Leffler', '2023-01-01 01:51:09', '2023-01-03 05:28:56', '2023-01-03 05:28:56'),
(5, 5, '200000.00', 'Credit Card', 0, 'Et porro eum ut.', 'Wilfrid Deckow III', '2023-01-02 13:40:22', '2023-01-03 05:28:56', '2023-01-03 05:28:56'),
(6, 6, '10000.00', 'Bank Transfers', 1, 'Hic ut dolorum nemo architecto quis veniam.', 'Aliza Kunze', '2023-01-03 03:23:28', '2023-01-03 05:28:56', '2023-01-03 05:28:56'),
(7, 7, '50000.00', 'Credit Card', 1, 'Aut a adipisci veniam deleniti aut voluptas.', 'Hilario Towne', '2023-01-01 20:01:22', '2023-01-03 05:28:57', '2023-01-03 05:28:57'),
(8, 8, '200000.00', 'Credit Card', 1, 'Amet quia repellat velit voluptatem quas minima.', 'Furman Cartwright', '2023-01-03 07:49:38', '2023-01-03 05:28:57', '2023-01-03 05:28:57'),
(9, 9, '200000.00', 'Bank Transfers', 1, 'Omnis eveniet nemo qui pariatur eum.', 'Jovan Koss', '2023-01-01 22:23:09', '2023-01-03 05:28:57', '2023-01-03 05:28:57'),
(10, 10, '150000.00', 'Bank Transfers', 3, 'Ut et est qui harum.', 'Isobel Morar', '2023-01-02 11:26:44', '2023-01-03 05:28:57', '2023-01-03 05:28:57'),
(11, 11, '10000.00', 'Cash', 0, 'Deserunt quibusdam recusandae saepe dolorem possimus tenetur.', 'Erin Kuhn', '2023-01-01 02:31:58', '2023-01-03 05:28:58', '2023-01-03 05:28:58'),
(12, 12, '150000.00', 'Cash', 3, 'Ut mollitia quis neque et sunt ipsam.', 'Mrs. Rosamond Flatley DVM', '2023-01-02 18:48:01', '2023-01-03 05:28:58', '2023-01-03 05:28:58'),
(13, 13, '100000.00', 'Credit Card', 0, 'Nihil at hic sit veniam officia aut sint.', 'Etha Klein', '2023-01-02 23:06:05', '2023-01-03 05:28:58', '2023-01-03 05:28:58'),
(14, 14, '10000.00', 'Credit Card', 0, 'Officiis consequatur quidem molestiae.', 'Clifford Armstrong', '2023-01-01 01:11:17', '2023-01-03 05:28:59', '2023-01-03 05:28:59'),
(15, 15, '10000.00', 'Bank Transfers', 3, 'Dolore repudiandae explicabo sunt libero repellendus voluptatibus cupiditate nihil.', 'Linnie Boehm', '2023-01-01 12:17:30', '2023-01-03 05:28:59', '2023-01-03 05:28:59'),
(16, 16, '10000.00', 'Credit Card', 0, 'Est dolores quia perferendis et aspernatur consequuntur repudiandae.', 'Joesph Rempel', '2023-01-01 13:17:58', '2023-01-03 05:28:59', '2023-01-03 05:28:59'),
(17, 17, '50000.00', 'Credit Card', 3, 'Ea vero itaque ex et et.', 'Agustina Schaden', '2023-01-03 09:52:11', '2023-01-03 05:29:00', '2023-01-03 05:29:00'),
(18, 18, '10000.00', 'Bank Transfers', 1, 'Quam aut amet est atque sed ut eos.', 'Lelia Deckow', '2023-01-02 10:59:19', '2023-01-03 05:29:00', '2023-01-03 05:29:00'),
(19, 19, '100000.00', 'Cash', 3, 'Consequatur et magni eaque laborum neque.', 'Dr. Trisha Herzog Sr.', '2023-01-02 07:21:47', '2023-01-03 05:29:00', '2023-01-03 05:29:00'),
(20, 20, '100000.00', 'Credit Card', 2, 'Velit fuga facere consequatur enim id nostrum veritatis.', 'Marcellus Bergstrom', '2023-01-01 10:07:31', '2023-01-03 05:29:01', '2023-01-03 05:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `payment_statuses`
--

CREATE TABLE `payment_statuses` (
  `id` int(11) NOT NULL,
  `status_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_statuses`
--

INSERT INTO `payment_statuses` (`id`, `status_name`) VALUES
(0, 'Pending'),
(1, 'Completed'),
(2, 'Expired'),
(3, 'Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `avatar`, `contact`, `email`, `user_level`, `created_at`, `updated_at`) VALUES
(1, 'deckow.alanna', 'mPTqR7', 'Lottie Thiel', '25.jpg', '086647181247', 'zachary.goyette@hotmail.com', 1, '2023-01-03 05:29:01', '2023-01-03 05:29:01'),
(2, 'gmcglynn', '#2xxatTG92sH+i$J', 'Bret Witting', '49.jpg', '085487112634', 'koss.margaretta@gmail.com', 1, '2023-01-03 05:29:01', '2023-01-03 05:29:01'),
(3, 'ron24', '*\'\\5V|&d*G', 'Curt Hill MD', '36.jpg', '083201240410', 'bailey.eladio@yahoo.com', 2, '2023-01-03 05:29:01', '2023-01-03 05:29:01'),
(4, 'alisha.kilback', 'fp]A\'Kybc9l4', 'Mr. Gregg Luettgen MD', '54.jpg', '088476568272', 'rwitting@yahoo.com', 1, '2023-01-03 05:29:02', '2023-01-03 05:29:02'),
(5, 'ryleigh.gerhold', 'gc9iP:$5vX)7', 'Kaelyn Gutmann', '10.jpg', '085310545659', 'okiehn@yahoo.com', 2, '2023-01-03 05:29:03', '2023-01-03 05:29:03'),
(6, 'coba_adm', '$2y$10$V6LysSx5BfHnnsH3dS3TOOhjvhX/dNjSQSBcKcRpkwj/MubLKF.Sq', 'adssad', '1672756074.jpg', '085111222334', 'coba@gmail.com', 2, '2023-01-03 07:19:13', '2023-01-03 07:28:23'),
(7, 'admin_falah2129', '$2y$10$tvzeWyZEXQ5wxz53ZqcmT.XKoUViIDIKCflxPStuySv0cmho3G5wG', 'Admin Falah9', 'avatar.jpg', '0851112223339', 'test9@gmail.com', 1, '2023-01-06 19:11:12', '2023-01-06 19:15:19'),
(8, 'admin_falah1', '$2y$10$E85cMenRW.OEB1aGbK7MNuGWi6fw.rW5BN7u5ybGSAPkD8Vit9496', 'Admin Falah', '/images/avatar/543210.jpg', '085111222333', 'adminfalah@gmail.com', 2, '2023-01-06 19:11:42', '2023-01-06 19:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_category_id` int(11) NOT NULL,
  `plate_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_owner_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `vehicle_category_id`, `plate_number`, `description`, `image`, `vehicle_owner_id`, `created_at`, `updated_at`) VALUES
(1, 4, 'G 1034 JLP', 'Facere eos qui quaerat omnis.', 'v4.jpg', 1, '2023-01-03 05:28:50', '2023-01-03 05:28:50'),
(2, 4, 'M 3959 ECF', 'Ut delectus doloribus laudantium vel necessitatibus est numquam tenetur.', 'v4.jpg', 2, '2023-01-03 05:28:50', '2023-01-03 05:28:50'),
(3, 2, 'N 3895 QLC', 'Eligendi harum animi eum itaque est molestiae.', 'v2.jpg', 3, '2023-01-03 05:28:50', '2023-01-03 05:28:50'),
(4, 2, 'R 5510 CJN', 'Voluptatem reiciendis qui iure.', 'v2.jpg', 4, '2023-01-03 05:28:50', '2023-01-03 05:28:50'),
(5, 5, 'B 5144 CRW', 'Sit voluptatum sit qui aliquid enim maiores tempore.', 'v5.jpg', 5, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(6, 4, 'P 6315 JNI', 'Facilis temporibus occaecati facere modi.', 'v4.jpg', 6, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(7, 4, 'G 1675 NWW', 'Nobis ea deserunt consequuntur id doloribus vel.', 'v4.jpg', 7, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(8, 1, 'B 7837 CQR', 'Illo voluptas esse blanditiis cupiditate quam qui in numquam.', 'v1.jpg', 8, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(9, 5, 'H 1878 RDF', 'Exercitationem sit consequatur aut aut qui.', 'v5.jpg', 9, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(10, 2, 'F 2307 HFJ', 'Unde est ut voluptates ut quia dolor autem nihil.', 'v2.jpg', 10, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(11, 3, 'K 1098 DZJ', 'Modi fuga mollitia laudantium magni.', 'v3.jpg', 11, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(12, 3, 'L 5229 ZGG', 'Consequatur optio aperiam alias dolorum facere.', 'v3.jpg', 12, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(13, 2, 'L 2934 SPL', 'Nihil et molestiae velit voluptates quas dolorum dolorem.', 'v2.jpg', 13, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(14, 1, 'S 4848 KJE', 'Eveniet officiis labore nesciunt nobis.', 'v1.jpg', 14, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(15, 4, 'N 6579 IPR', 'Nulla placeat repellendus veritatis.', 'v4.jpg', 15, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(16, 4, 'Z 0987 GYZ', 'At voluptas doloremque est explicabo iste veritatis ut.', 'image.jpg', 15, '2023-01-03 05:28:51', '2023-01-06 19:08:44'),
(17, 1, 'A 5157 ATQ', 'Iste quo itaque non culpa aut consequatur molestiae.', 'v1.jpg', 16, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(18, 1, 'N 0980 BYF', 'Placeat quas saepe cumque odio rem modi.', 'v1.jpg', 17, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(19, 4, 'E 8795 JWV', 'Deserunt ipsam ab quo recusandae.', 'v4.jpg', 17, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(20, 2, 'U 3495 XBS', 'Quia quis ipsa voluptates sint.', 'v2.jpg', 18, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(21, 2, 'L 2308 FTO', 'Explicabo ex inventore debitis dolores qui et.', 'v2.jpg', 18, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(22, 4, 'S 6724 KQI', 'Dolorum fuga beatae rerum eos non dolor eius.', 'v4.jpg', 19, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(23, 1, 'J 9515 WGV', 'Sit sed quis est veniam voluptas debitis doloribus.', 'v1.jpg', 19, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(24, 4, 'I 4183 BDK', 'Velit et doloribus eum ipsa et.', 'v4.jpg', 20, '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(25, 3, 'N 3334 PNK', 'Aperiam occaecati et qui omnis minima.', 'v3.jpg', 20, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(26, 2, 'M 8349 WGX', 'Voluptatum incidunt facilis non atque.', 'v2.jpg', 21, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(27, 4, 'U 3056 GAQ', 'Et omnis nam dolorum.', 'v4.jpg', 21, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(28, 3, 'S 0551 YCK', 'Vel sed assumenda qui odio.', 'v3.jpg', 21, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(29, 5, 'H 2299 TUR', 'Sit commodi placeat consequatur quos facere deserunt consequuntur.', 'v5.jpg', 22, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(30, 2, 'L 1053 UIK', 'Molestiae dolore dignissimos aliquam voluptate consequatur voluptatem.', 'v2.jpg', 22, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(31, 2, 'V 4728 JRX', 'Est nihil vero magni est cupiditate.', 'v2.jpg', 22, '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(32, 5, 'H 1234 VZ', 'asdf', '1672758281.jpg', 3, '2023-01-03 07:53:37', '2023-01-03 08:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_categories`
--

CREATE TABLE `vehicle_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_categories`
--

INSERT INTO `vehicle_categories` (`id`, `category_name`) VALUES
(1, 'Car'),
(2, 'Motorcycle'),
(3, 'Bicycle'),
(4, 'Truck'),
(5, 'Bus');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_owners`
--

CREATE TABLE `vehicle_owners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_owners`
--

INSERT INTO `vehicle_owners` (`id`, `username`, `password`, `fullname`, `avatar`, `contact`, `email`, `created_at`, `updated_at`) VALUES
(1, 'estelle.stamm', '&Q.~gR(4R7BxQo)P&dk', 'Mrs. Annamae Pouros', '41.jpg', '080184041856', 'asipes@yahoo.com', '2023-01-03 05:28:50', '2023-01-03 05:28:50'),
(2, 'ahegmann', '&Rc!aNbI\\ys&*=UK(.i!', 'Maximus Graham', '5.jpg', '083896066265', 'kzboncak@yahoo.com', '2023-01-03 05:28:50', '2023-01-03 05:28:50'),
(3, 'wisoky.mittie', '+Eh3dt<U', 'Nelle Sporer', '35.jpg', '084638781312', 'marquardt.jackeline@hotmail.com', '2023-01-03 05:28:50', '2023-01-03 05:28:50'),
(4, 'shad.nitzsche', 'wi`@:H]|Oz_;uC+^~', 'Lyla Bashirian V', '27.jpg', '080189545159', 'graham75@yahoo.com', '2023-01-03 05:28:50', '2023-01-03 05:28:50'),
(5, 'alda47', '*e\"!xQ<L.`\'-f)6?8Dr', 'Dr. Laurianne Tromp', '9.jpg', '082906950367', 'eloisa.romaguera@gmail.com', '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(6, 'jakob.shanahan', 'qCu6@Ad6?eq', 'Isabell Rolfson PhD', '18.jpg', '082851673466', 'schuster.kristy@gmail.com', '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(7, 'karine.collier', 'PUXg:L)*0v^x?L~k=i%', 'Jared Fisher', '42.jpg', '087959689873', 'jmckenzie@gmail.com', '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(8, 'durward52', 'j.eK6gC.7fm', 'Modesta Gleichner III', '26.jpg', '086765798527', 'meredith10@yahoo.com', '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(9, 'clowe', 'aa~re3_', 'Mr. Juvenal Pouros', '22.jpg', '081363106960', 'ukertzmann@hotmail.com', '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(10, 'jacobi.granville', 'z]G\"g0y^1/', 'Peter Hickle IV', '54.jpg', '082555135201', 'doug88@gmail.com', '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(11, 'nbruen', 'ZKm$e@e\\J', 'Aniyah Mante', '45.jpg', '080000551602', 'green.favian@yahoo.com', '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(12, 'kaylah39', '_sufNY#N%%^Zjb+;Y', 'Chase Beier', '18.jpg', '089912949213', 'rswift@hotmail.com', '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(13, 'ytorphy', '?etkh^Uv3X', 'Angelina Rodriguez', '36.jpg', '089231563326', 'purdy.alta@yahoo.com', '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(14, 'bayer.roman', '8#F>kd*HCj0-Zi', 'Nikki Bailey', '16.jpg', '089049196137', 'ara66@gmail.com', '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(15, 'fdare', '!WT;t2!;L', 'Alessandra Frami', '7.jpg', '082798290823', 'mraz.elmore@gmail.com', '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(16, 'daron56', 'OdaxCru:[W/Ckp~', 'Anita Rosenbaum', '55.jpg', '085353872634', 'arielle53@yahoo.com', '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(17, 'ebert.marilou', '~1k2qzi', 'Jessie Simonis', '17.jpg', '088372108177', 'fzulauf@hotmail.com', '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(18, 'willymorgan4561', '$2y$10$4Unq7V10GrDOBPHbOR9nc.68wRD/zAwItpKtvIM4hzBf5omPL4pcS', 'Willy Morgan 4561', 'avatar.jpg', '0852345678911', 'willymorgan4562@yahoo.com', '2023-01-03 05:28:51', '2023-01-06 19:03:23'),
(19, 'jennings.ledner', '@MkCOhZm%]cibWf\"kH', 'Evan Runolfsdottir', '15.jpg', '083013803072', 'murazik.misael@yahoo.com', '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(20, 'gideon.moen', 'X\"{B@u1iO\'kF\'+VvE-`', 'Prof. Deborah Prohaska', '19.jpg', '082320779300', 'crooks.judd@hotmail.com', '2023-01-03 05:28:51', '2023-01-03 05:28:51'),
(21, 'khoppe', 'B2Dm;f6', 'Marietta Walter', '51.jpg', '089161755470', 'laufderhar@hotmail.com', '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(22, 'maci.schowalter', '93D0HA%Y8\\vZ', 'Tressie Mills', '28.jpg', '087359254214', 'liliana.block@yahoo.com', '2023-01-03 05:28:52', '2023-01-03 05:28:52'),
(23, 'coba', '$2y$10$eq87DAGLd0BISivAXBzEj.aj13Yw8k1udF9U5LS0mYA8hvd.8okAu', 'AFDdfadf', '1672750247.jpg', '0234567890', 'afda@mail.com', '2023-01-03 05:50:48', '2023-01-03 05:50:48'),
(24, 'adfafa', '$2y$10$0.X.XvN28w3Kb8CgE6X3uuuJWf6aEdsVqhe.a1rVRihqh/cu5ib/2', 'adssad', '1672753765.jpg', '085123456789', 'youremail@gmail.com', '2023-01-03 06:17:54', '2023-01-03 06:49:26'),
(25, 'tvczv', '$2y$10$XaeEBNB0MckTkmAj044CZ./pfBXnftYZ0L/XsdmtAQIvVUqpLlRD6', 'TCVzxvc', '1672753800.jpg', '081234567890', 'test@mail.com', '2023-01-03 06:36:09', '2023-01-03 06:50:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_statuses`
--
ALTER TABLE `booking_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking_slots`
--
ALTER TABLE `parking_slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking_slot_statuses`
--
ALTER TABLE `parking_slot_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_statuses`
--
ALTER TABLE `payment_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_categories`
--
ALTER TABLE `vehicle_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_owners`
--
ALTER TABLE `vehicle_owners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `parking_slots`
--
ALTER TABLE `parking_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `vehicle_categories`
--
ALTER TABLE `vehicle_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicle_owners`
--
ALTER TABLE `vehicle_owners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
