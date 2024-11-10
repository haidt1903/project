-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 06, 2024 at 08:43 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Phụ kiện', '2024-10-24 19:06:15', '2024-10-28 07:52:45'),
(2, 'Quần áo', '2024-10-24 19:07:51', '2024-10-24 19:07:51'),
(3, 'Điện thoại', '2024-10-24 19:07:54', '2024-10-24 19:07:54'),
(4, 'Máy tính bảng', '2024-10-24 19:07:56', '2024-10-24 19:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` tinyint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `rating`, `image`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(2, 'Sản phẩm rất tốt. Dùng rất thích. Lần sau sẽ mua lại của sốp', 4, NULL, 3, 6, '2024-10-31 05:56:27', '2024-10-31 05:56:27'),
(3, 'Sản phẩm ok', 2, NULL, 3, 6, '2024-10-31 06:01:30', '2024-10-31 06:01:30'),
(4, 'cũng được', 1, NULL, 3, 6, '2024-10-31 06:05:57', '2024-10-31 06:05:57'),
(6, 'Dùng cũng ổn.Lần sau sẽ mua tiếp', 4, NULL, 3, 5, '2024-10-31 06:16:52', '2024-10-31 06:16:52'),
(7, 'Iphone dùng siêu thích. Rất đáng tiền mua', 5, NULL, 3, 8, '2024-10-31 07:33:45', '2024-10-31 07:33:45'),
(8, 'sản phẩm ok', 3, NULL, 5, 5, '2024-11-04 06:40:02', '2024-11-04 06:40:02'),
(9, 'Tạm ổn', 4, NULL, 5, 6, '2024-11-04 07:17:46', '2024-11-04 07:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Vũ Nhật Quỳnh', 'vunhatquynh2004@gmail.com', '017294629002', 'Tôi gặp vấn đề với sản phẩm của mình và cần hướng dẫn khắc phục.', '2024-10-30 02:38:51', '2024-10-30 02:38:51'),
(10, 'Hoa Hương Quỳnh', 'hoahuongquynh58@gmail.com', '0399174933', 'Tôi muốn chia sẻ trải nghiệm của mình khi sử dụng dịch vụ của bạn', '2024-10-30 02:54:13', '2024-10-30 02:54:13'),
(11, 'Trần Thị Hồng Gian', 'giang123@gmail.com', '0838315779', 'Xin vui lòng gửi cho tôi báo giá cho dịch vụ ABC', '2024-10-30 02:54:51', '2024-10-30 02:54:51'),
(13, 'Lan', 'quynhhhph44910@fpt.edu.vn', '1234511234', 'shbwhbqab', '2024-10-30 06:45:25', '2024-10-30 06:45:25'),
(14, 'Vũ Nhật Quỳnh', 'vunhatquynh2004@gmail.com', '1234511234345', 'Giúp tôi xem sản phẩm Iphone15 còn mẫu nào không', '2024-10-31 07:31:14', '2024-10-31 07:31:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_10_16_130833_create_categories_table', 1),
(6, '2024_10_16_131012_create_products_table', 1),
(7, '2024_10_28_152614_create_carts_table', 2),
(8, '2024_10_30_082427_create_contact_controllers_table', 2),
(9, '2024_10_30_082930_create_contacts_table', 3),
(10, '2024_10_30_085607_create_contacts_table', 4),
(11, '2024_10_31_123257_create_comments_table', 5),
(12, '2024_10_31_124738_create_comments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `price`, `image`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(5, 'Camera DJI Osmo Pocket 3 Creator', 145, 16490000, 'images/y2AjNvNxTigaUUboCiaV8evrNOKRvObn9s5ww03g.jpg', 'Thông tin sản phẩm\r\n\r\nMới, đầy đủ phụ kiện từ nhà sản xuất\r\nDJI Osmo Pocket 3, Cáp Type-C, Vỏ bảo vệ, Dây đeo, Tay cầm, Ống kính, DJI Mic 2, Bông chắn gió, Kẹp Mic, Tay cầm pin, Chân máy, Túi đựng\r\nBảo hành 12 tháng chính hãng tại CellphoneS, 1 đổi 1 trong 15 ngày nếu có lỗi phần cứng từ nhà sản xuất (xem chi tiết)\r\nGiá sản phẩm đã bao gồm VAT', 1, '2024-10-24 19:31:13', '2024-11-05 20:22:33'),
(6, 'Củ sạc Anker 30W Nano 3 PD Type-C A2147', 46, 250000, 'images/m8ykZwwmrFuONbLAC0dbIIP8jQ2tAksaNHqyVd5z.jpg', 'Thông tin sản phẩm\r\n\r\nMới, đầy đủ phụ kiện từ nhà sản xuất\r\nCủ sạc, Sách hướng dẫn\r\nBảo hành 18 tháng chính hãng, 1 đổi 1(xem chi tiết)\r\nGiá sản phẩm đã bao gồm VAT', 1, '2024-10-28 06:26:03', '2024-11-05 20:21:52'),
(7, 'Galaxy Tab S10 Ultra 5G', 46, 33990000, 'images/Qbh8EcLPPOyGkSLVhaf6CDvzRUT4wAYdBiRmGlrA.jpg', '- Thanh toán trước ưu đãi thêm đến 1TR\r\n- Lấy code giảm thêm 2 triệu tại Samsung Member\r\n- Tích lũy 1% Samsung Rewards. Ưu đãi x2 giá trị đổi điểm tối đa 1 triệu\r\n- Tặng bao da trị giá đến 2,7 triệu\r\n- Giảm 50% khi mua kèm phụ kiện\r\n- Mua kèm củ sạc 45W giá chỉ 100K\r\nGhi chú nâng cao với AI\r\nPhác thảo thông minh - Sketch to Image\r\nCông nghệ chống chói đình cao - Anti reflection', 4, '2024-10-28 07:00:24', '2024-11-05 20:21:40'),
(8, 'Galaxy Tab S10 Ultra 4G', 16, 25000000, 'images/LwD1vpovs2CICdVsQlDK552XoLsqASiN49DRqYfM.jpg', 'Máy mới 100% , chính hãng Apple Việt Nam.\r\n- CellphoneS hiện là đại lý bán lẻ uỷ quyền iPhone chính hãng VN/A của Apple Việt Nam\r\n- Hộp, Sách hướng dẫn, Cây lấy sim, Cáp Type C\r\n- 1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple: CareS.vn(xem chi tiết)\r\nGiá sản phẩm đã bao gồm VAT', 3, '2024-10-28 07:07:34', '2024-11-05 20:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_vouchers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `email`, `image`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `user_vouchers`) VALUES
(3, 'quynhqwe', 'Vũ Nhật Quỳnh', 'vunhatquynh2004@gmail.com', 'images/gqqWzISmbL6UeaMDZEqXrcZU0NQfXnMqnrmUr6K4.jpg', NULL, '$2y$12$kaPcYplMAsjPwRycJ7v4iejciPCcKSzqgi4Fpbnu8K8FpUiJavK9y', 'user', NULL, '2024-10-31 05:55:19', '2024-10-31 05:55:19', ''),
(5, 'quynh', 'hoaquynh', 'quynhhhph44910@fpt.edu.vn', 'images/IoFyQEXO4C9sbaTrTS6QRMNvcKAYoPqfeqOzXmGg.jpg', NULL, '$2y$12$lutNngZuc8DLyc2cwpQx6u4Z9zCifx.x72yKtzljX18wLfXn0ereO', 'admin', NULL, '2024-10-31 07:25:30', '2024-10-31 07:25:30', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_product_id_foreign` (`product_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
