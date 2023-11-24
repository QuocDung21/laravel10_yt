-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 17, 2023 lúc 11:52 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project-laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_24_012021_create_tbl_admin_table', 1),
(6, '2023_05_26_000529_create_tbl_category_product', 2),
(7, '2023_05_26_001552_create_tbl_category_product', 3),
(8, '2023_05_26_001807_create_tbl_category_product', 4),
(9, '2023_06_03_081145_create_tbl_brand_product', 5),
(10, '2023_06_03_081957_create_tbl_brand_product', 6),
(11, '2023_06_09_085000_create_tbl_category_product_2', 7),
(12, '2023_06_09_085717_create_tbl_category_product_2', 8),
(13, '2023_06_10_182343_create_tbl_product_classification', 9),
(14, '2023_06_11_031826_create_tbl_product', 10),
(15, '2023_06_22_170939_create_tbl_description', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `phone`, `created_at`, `updated_at`) VALUES
(2, 'thanh@gmail.com', '12345', 'Tuấn Thành', '0397892603', '2023-05-24 17:32:09', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `banner_id` int(11) NOT NULL,
  `banner_path` text NOT NULL,
  `banner_status` int(1) NOT NULL,
  `cropped_image_data` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_banner`
--

INSERT INTO `tbl_banner` (`banner_id`, `banner_path`, `banner_status`, `cropped_image_data`, `created_at`) VALUES
(11, '392x134-1684299714213_2023-08-02 22:13:24.jpeg', 0, NULL, '2023-08-02 22:39:11'),
(12, '392x134-1684299714213_2023-08-02 22:25:02.jpeg', 1, NULL, '2023-08-02 22:39:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_bill`
--

CREATE TABLE `tbl_bill` (
  `bill_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bill_date` date DEFAULT NULL,
  `bill_status` int(11) DEFAULT 0 COMMENT '0: CHờ xác nhận\r\n1: Đang xử lý\r\n2: Đang giao\r\n3: Hoàn thành\r\n4: Đã huỷ',
  `bill_note` varchar(255) DEFAULT NULL,
  `bill_payments` varchar(11) NOT NULL,
  `id_address` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bill_totalAll` int(20) NOT NULL,
  `bill_total` int(20) NOT NULL,
  `bill_discount` int(20) DEFAULT NULL,
  `bill_shipping` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_bill`
--

INSERT INTO `tbl_bill` (`bill_id`, `user_id`, `bill_date`, `bill_status`, `bill_note`, `bill_payments`, `id_address`, `created_at`, `bill_totalAll`, `bill_total`, `bill_discount`, `bill_shipping`) VALUES
(32, 18, '2023-07-22', 3, NULL, 'cash', 44, '2023-07-24 12:17:43', 763000, 720000, 0, 43000),
(33, 18, '2023-07-22', 3, NULL, 'cash', 44, '2023-07-24 12:35:20', 393000, 350000, 0, 43000),
(34, 18, '2023-07-22', 4, 'note đơn hàng', 'cash', 44, '2023-07-30 13:51:35', 393000, 350000, 0, 43000),
(35, 18, '2023-07-22', 2, NULL, 'cash', 45, '2023-07-23 13:06:44', 393000, 350000, 0, 43000),
(36, 18, '2023-07-30', 3, NULL, 'cash', 44, '2023-07-30 13:48:26', 684000, 700000, 70000, 54000),
(37, 18, '2023-08-03', 0, NULL, 'cash', 44, '2023-08-03 22:25:54', 88500, 70000, 0, 18500),
(38, 18, '2023-08-03', 0, NULL, 'cash', 44, '2023-08-03 22:26:47', 88500, 70000, 0, 18500),
(39, 18, '2023-08-03', 3, NULL, 'cash', 44, '2023-08-03 22:27:39', 88500, 70000, 0, 18500),
(40, 18, '2023-08-10', 1, NULL, 'cash', 44, '2023-08-15 16:32:38', 38500, 20000, 0, 18500),
(41, 18, '2023-08-10', 1, NULL, 'vnpay', 44, '2023-08-15 16:32:21', 38500, 20000, 0, 18500),
(42, 18, '2023-08-10', 1, NULL, 'cash', 44, '2023-08-15 16:31:33', 38500, 20000, 0, 18500);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_bill_detail`
--

CREATE TABLE `tbl_bill_detail` (
  `bill_detail_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_price_old` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_bill_detail`
--

INSERT INTO `tbl_bill_detail` (`bill_detail_id`, `bill_id`, `product_id`, `product_quantity`, `product_price`, `product_price_old`) VALUES
(1, 3, 25, 2, 350000, 380000),
(5, 5, 25, 2, 350000, 380000),
(26, 24, 25, 2, 350000, 380000),
(27, 25, 25, 2, 350000, 380000),
(28, 26, 25, 2, 350000, 380000),
(29, 27, 25, 2, 350000, 380000),
(30, 28, 25, 2, 350000, 380000),
(33, 31, 25, 2, 350000, 380000),
(34, 32, 25, 2, 350000, 380000),
(35, 32, 27, 1, 20000, 33000),
(36, 33, 25, 1, 350000, 380000),
(37, 34, 25, 1, 350000, 380000),
(38, 35, 25, 1, 350000, 380000),
(39, 36, 25, 2, 350000, 380000),
(40, 38, 29, 1, 70000, NULL),
(41, 39, 29, 1, 70000, NULL),
(42, 40, 27, 1, 20000, 33000),
(43, 41, 27, 1, 20000, 33000),
(44, 42, 27, 1, 20000, 33000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_post`
--

CREATE TABLE `tbl_category_post` (
  `cate_post_id` int(10) UNSIGNED NOT NULL,
  `cate_post_name` text NOT NULL,
  `cate_post_status` int(11) NOT NULL,
  `cate_post_slug` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `display_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_post`
--

INSERT INTO `tbl_category_post` (`cate_post_id`, `cate_post_name`, `cate_post_status`, `cate_post_slug`, `created_at`, `display_order`) VALUES
(12, 'Làm đẹp', 0, 'lam-dep', '2023-08-09 11:41:38', 3),
(14, 'Tin tức', 0, 'tin-tuc', '2023-08-09 11:41:38', 2),
(15, 'Mẹ và bé', 0, 'me-va-be', '2023-08-09 13:22:35', 4),
(16, 'Dinh dưỡng', 0, 'dinh-du', '2023-08-09 13:22:48', 5),
(17, 'COVID-19', 0, 'covid-19', '2023-08-09 13:22:57', 6),
(18, 'Cẩm nang', 0, 'cam-nang', '2023-08-09 13:23:06', 7),
(19, 'Bệnh thường gặp', 0, 'benh-thuong-g', '2023-08-09 13:23:22', 8),
(20, 'Bệnh mãn tính', 0, 'benh-man-tinh', '2023-08-09 13:23:34', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `category_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `display_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_status`, `category_img`, `created_at`, `updated_at`, `display_order`) VALUES
(32, 'Dược phẩm', 1, 'duocpham_2023-07-07 20:09:40.png', '2023-08-15 09:30:12', NULL, 1),
(33, 'Chăm sóc sức khoẻ', 1, 'chamsocsuckhoe_2023-07-07 20:11:25.png', '2023-08-15 09:30:12', NULL, 2),
(34, 'Chăm sóc cá nhân', 1, 'chamsoccanhan_2023-07-07 20:12:08.png', '2023-07-07 13:12:08', NULL, 3),
(35, 'Sản phẩm tiện lợi', 1, 'sanphamtienloi_2023-07-07 20:12:46.png', '2023-07-07 13:12:46', NULL, 4),
(36, 'Thực phẩm chức năng', 1, 'thucphamchucnang_2023-07-07 20:13:17.png', '2023-07-07 13:13:17', NULL, 5),
(37, 'Mẹ và bé', 1, 'mevabe_2023-07-07 20:13:52.png', '2023-07-07 13:13:52', NULL, 6),
(38, 'Chăm sóc sắc đẹp', 1, 'chamsocsacdep_2023-07-07 20:14:20.png', '2023-07-07 13:14:20', NULL, 7),
(39, 'Thiết bị y tế', 1, 'thietbiyte_2023-07-07 20:14:51.png', '2023-07-07 13:14:51', NULL, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_product_detail`
--

CREATE TABLE `tbl_category_product_detail` (
  `category_detail_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_detail_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_detail_status` int(11) NOT NULL,
  `category_detail_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_product_detail`
--

INSERT INTO `tbl_category_product_detail` (`category_detail_id`, `category_id`, `category_detail_name`, `category_detail_status`, `category_detail_img`, `created_at`, `updated_at`) VALUES
(17, 32, 'Thuốc kháng dị ứng', 1, 'thuockhangdiung_2023-07-07_20:23:24.png', '2023-07-07 13:23:24', NULL),
(18, 32, 'Thuốc kháng viêm', 1, 'thuockhangviem_2023-07-07_20:24:17.png', '2023-07-07 13:24:17', NULL),
(19, 33, 'Thực phẩm dinh dưỡng', 1, 'thucphamdinhduong_2023-07-07 20:20:02.jpg', '2023-07-07 13:20:02', NULL),
(21, 33, 'Kế hoạch gia đình', 1, 'kehoachgiadinh_2023-07-07 20:21:06.jpg', '2023-07-07 13:21:38', NULL),
(22, 32, 'Thuốc da liễu', 1, 'thuocdalieu_2023-07-07 20:25:20.png', '2023-07-07 13:25:20', NULL),
(23, 32, 'Vitamin & Khoáng chất', 1, 'vitamin_2023-07-07 20:26:11.png', '2023-07-07 13:26:37', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_description`
--

CREATE TABLE `tbl_description` (
  `description_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `description_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_description`
--

INSERT INTO `tbl_description` (`description_id`, `product_id`, `description_title`, `description_detail`, `created_at`, `updated_at`) VALUES
(9, 25, 'Nơi sản xuất', 'Công ty Cổ phần Dược phẩm Agimexpharm (Việt Nam)', '2023-08-03 10:31:59', NULL),
(10, 25, 'Chỉ định', '- Viêm mũi dị ứng. Viêm kết mạc dị ứng. Ngứa và mày đay liên quan đến histamin', '2023-07-07 13:32:06', NULL),
(11, 25, 'Chống chỉ định', 'Quá mẫn với loratadin hoặc với bất kỳ thành phần nào của thuốc. Dùng dạng kết hợp với loratadin và pseudoephedrin trong khi người bệnh đang dùng và đã dùng thuốc ức chế MAO trong vòng 10 ngày.', '2023-07-07 13:32:06', NULL),
(12, 25, 'Liều dùng và cách dùng', 'Người lớn và trẻ em từ 12 tuổi trở lên: Uống 1 viên một lần trong ngày. Trẻ em 2-12 tuổi: Chỉ dùng cho trẻ em có trọng lượng cơ thể >30kg: Uống 1 viên một lần trong ngày. Không dùng dạng viên nén cho trẻ em có trọng lượng cơ thể <30kg.', '2023-07-07 13:32:06', NULL),
(13, 25, 'Tác dụng phụ', 'Loạn nhịp thất nặng đã xảy ra khi điều trị với một số thuốc kháng thụ thể histamin H1 thế hệ 2.', '2023-07-07 13:32:06', NULL),
(14, 25, 'Bảo quản', 'Nhiệt độ dưới 30°C, tránh ẩm và ánh sáng', '2023-07-07 13:32:06', NULL),
(15, 25, 'Đóng gói', 'Hộp 10 vỉ x 10 viên nén', '2023-07-07 13:32:06', NULL),
(16, 25, 'Thương hiệu', 'Agimexpharm', '2023-07-07 13:32:06', NULL),
(17, 25, 'Nơi sản xuất', 'Công ty Cổ phần Dược phẩm Agimexpharm (Việt Nam)', '2023-07-07 13:32:06', NULL),
(18, 27, 'f', 'f', '2023-07-07 17:30:52', NULL),
(19, 28, NULL, '', '2023-08-03 07:19:17', NULL),
(20, 29, 'Thành phần', 'Diclofenac diethylamine;Tá dược', '2023-08-03 07:20:50', NULL),
(21, 29, 'Cách sử dụng', 'Người lớn và trẻ em trên 12 tuổi: bôi 2-4g x 3-4 lần/ngày. Không dùng lâu quá 14 ngày.', '2023-08-03 07:20:50', NULL),
(22, 29, 'Bảo quản', 'Bảo quản ở nhiệt độ không quá 30 độ C.', '2023-08-03 07:20:50', NULL),
(23, 30, 'Dạng bào chế', 'Viên nén', '2023-08-03 07:23:49', NULL),
(24, 30, 'Thành phần', 'Mỗi viên nén bao phim CETIMED chứa cetirizin dihydroclorid;Tá dược: tình bột ngô, lactose monohydrat, povidon, magnesi stearat, hypromellose, propylene glycol, titan dioxid (E171) và talc.', '2023-08-03 07:23:49', NULL),
(25, 31, NULL, '', '2023-08-03 09:19:45', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_discount`
--

CREATE TABLE `tbl_discount` (
  `discount_id` int(11) NOT NULL,
  `discount_voucher` varchar(100) DEFAULT NULL,
  `discount_method` int(1) NOT NULL COMMENT '0: Mã giảm. \r\n1: Voucher',
  `created_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `discount_percent` int(20) DEFAULT NULL,
  `discount_price` int(20) DEFAULT NULL,
  `discount_code` text DEFAULT NULL,
  `discount_status` int(11) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_discount`
--

INSERT INTO `tbl_discount` (`discount_id`, `discount_voucher`, `discount_method`, `created_at`, `discount_percent`, `discount_price`, `discount_code`, `discount_status`, `discount`) VALUES
(7, NULL, 0, '2023-07-20 14:57:00', 10, NULL, 'CODE01', 0, 0),
(8, NULL, 0, '2023-07-20 14:57:15', NULL, 8000, 'CODE02', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_email_promotional`
--

CREATE TABLE `tbl_email_promotional` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_email_promotional`
--

INSERT INTO `tbl_email_promotional` (`id`, `email`, `created_at`) VALUES
(15, 'tuanthanhktltk21@gmail.com', '2023-08-10 11:04:27'),
(16, 'tuanthanh29263@gmail.com', '2023-08-10 11:04:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `post_id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_desc` text DEFAULT NULL,
  `post_content` text NOT NULL,
  `post_status` int(11) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_slug` varchar(255) NOT NULL,
  `cate_post_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_posts`
--

INSERT INTO `tbl_posts` (`post_id`, `post_title`, `post_desc`, `post_content`, `post_status`, `post_image`, `post_slug`, `cate_post_id`, `created_at`) VALUES
(3, 'Khẩu trang y tế Pharmacity: phòng ngừa bụi bẩn và các bệnh lây lan qua đường hô hấp.', NULL, '<p><em>Khẩu trang y tế m&agrave;u trắng 3 lớp Pharmacity - Sự lựa chọn an to&agrave;n cho sức khỏe của bạn. Với thiết kế 3 lớp : Lớp ngo&agrave;i chống thấm, lớp giữa kh&aacute;ng khuẩn, lớp trong mềm mại với da. Pharmacity được l&agrave;m từ nguy&ecirc;n liệu chống dị ứng chất lượng cao, c&oacute; hiệu quả lọc khuẩn tr&ecirc;n 99%, gi&uacute;p ph&ograve;ng ngừa bụi bẩn v&agrave; c&aacute;c bệnh l&acirc;y lan qua đường h&ocirc; hấp.</em></p>\r\n\r\n<h2><strong>M&ocirc; tả sản phẩm Khẩu trang y tế Pharmacity</strong></h2>\r\n\r\n<p><em><strong>Khẩu trang y tế 3 lớp m&agrave;u trắng Pharmacity:</strong></em></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Lớp ngo&agrave;i chống thấm, lớp giữa kh&aacute;ng khuẩn, lớp trong mềm mại với da.</p>\r\n	</li>\r\n	<li>\r\n	<p>Hiệu quả lọc khuẩn tr&ecirc;n 99%.</p>\r\n	</li>\r\n	<li>\r\n	<p>Nguy&ecirc;n liệu chống dị ứng chất lượng cao.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p><img alt=\"\" height=\"460\" src=\"https://data-service.pharmacity.io/pmc-upload-media/production/pmc-ecm-asm/posts/p21593-1-l-large.webp\" width=\"460\" /></p>\r\n\r\n<p><em><strong>Khẩu trang y tế m&agrave;u trắng 3 lớp Pharmacity (Hộp 50 c&aacute;i)</strong></em></p>\r\n\r\n<h2><strong>C&ocirc;ng dụng</strong></h2>\r\n\r\n<p>Ngo&agrave;i việc gi&uacute;p che nắng, ngăn bụi, giảm được m&ugrave;i kh&oacute;i xe, kh&iacute; thải độc hại&hellip;khẩu trang Khẩu trang y tế 3 lớp m&agrave;u trắng Pharmacity c&ograve;n gi&uacute;p ngăn chặn mầm bệnh từ người bệnh kh&ocirc;ng ph&aacute;t t&aacute;n ra b&ecirc;n ngo&agrave;i v&agrave; nhằm bảo vệ ch&iacute;nh bản th&acirc;n người mang khẩu trang tr&aacute;nh phải một số bệnh truyền nhiễm qua đường h&ocirc; hấp từ người kh&aacute;c.</p>\r\n\r\n<h2><strong>Hướng dẫn sử dụng</strong></h2>\r\n\r\n<p>D&ugrave;ng tay cầm v&agrave;o hai d&acirc;y v&agrave; đeo v&agrave;o tai. Kh&ocirc;ng n&ecirc;n để tay chạm v&agrave;o mặt trong khẩu trang.</p>\r\n\r\n<p>Cố định thanh ngang m&uacute;i s&aacute;t với sống mũi.</p>\r\n\r\n<p>Điều chỉnh nếp gấp xuống ph&ugrave; hợp với khu&ocirc;n mặt, che k&iacute;n mũi, miệng v&agrave; cằm.</p>\r\n\r\n<h2><strong>Lưu &yacute; khi sử dụng khẩu trang y tế Pharmacity</strong></h2>\r\n\r\n<p>1. Mặt m&agrave;u trắng mịn l&agrave; mặt trong tiếp x&uacute;c với da mặt. Mặt c&ograve;n lại hướng quay ra ngo&agrave;i.</p>\r\n\r\n<p>2. Khi th&aacute;o khẩu trang ra, d&ugrave;ng tay th&aacute;o d&acirc;y đeo xuống. Kh&ocirc;ng chạm tay v&agrave;o bề mặt khẩu trang.</p>\r\n\r\n<p>3. Kh&ocirc;ng sử dụng khi sản phẩm bị đổi m&agrave;u.</p>\r\n\r\n<p>4. Kh&ocirc;ng sử dụng sản phẩm với mục đ&iacute;ch kh&aacute;c.</p>\r\n\r\n<p>5. Sản phẩm chỉ sử dụng 1 lần.</p>', 0, 'ban-sao-p21593-1-l-large_2023-08-09 11:30:49.png', 'khau-trang-y-te-pharmacity-phong-ngua-bui-ban-va-cac-benh-lay-lan-qua-duong-ho-hap', 14, '2023-08-09 11:30:49'),
(4, 'Nguyên nhân và cách khắc phục triệu chứng đầy bụng, khó tiêu ở trẻ', NULL, '<p><strong><em>Đầy bụng, ăn kh&oacute; ti&ecirc;u, đi ngo&agrave;i ph&acirc;n sống l&agrave; t&igrave;nh trạng thường gặp ở trẻ nhỏ. Vậy nguy&ecirc;n nh&acirc;n l&agrave; g&igrave;? L&agrave;m c&aacute;ch n&agrave;o để cải thiện khả năng hấp thu dinh dưỡng cho b&eacute;?</em></strong></p>\r\n\r\n<p><img alt=\"Trẻ đầy bụng khó tiêu\" height=\"801\" src=\"https://data-service.pharmacity.io/pmc-upload-media/production/pmc-ecm-asm/posts/tre-bieng-an-21.webp\" width=\"1200\" /></p>\r\n\r\n<p><em><strong>L&agrave;m sao để cải thiện t&igrave;nh trạng đầy bụng, kh&oacute; ti&ecirc;u cho b&eacute;?</strong></em></p>\r\n\r\n<h2><strong>V&igrave; sao trẻ bị đầy bụng, kh&oacute; ti&ecirc;u, đi ngo&agrave;i ph&acirc;n sống?</strong></h2>\r\n\r\n<p>Đầy bụng, kh&oacute; ti&ecirc;u, đi ngo&agrave;i ph&acirc;n sống, biếng ăn,&hellip;l&agrave; một trong những t&igrave;nh trạng thường gặp ở trẻ nhỏ. C&oacute; nhiều nguy&ecirc;n nh&acirc;n g&acirc;y n&ecirc;n:</p>\r\n\r\n<p><strong><em>Chế độ dinh dưỡng kh&ocirc;ng c&acirc;n đối:</em></strong>&nbsp;Chế độ ăn chứa qu&aacute; nhiều thức ăn gi&agrave;u chất b&eacute;o v&agrave; đường, tinh bột c&oacute; thể g&acirc;y kh&oacute; ti&ecirc;u v&agrave; tạo cảm gi&aacute;c đầy bụng cho trẻ.</p>\r\n\r\n<p><strong><em>Thay đổi chế độ ăn uống đột ngột:</em></strong>&nbsp;Hệ ti&ecirc;u h&oacute;a của trẻ c&ograve;n non nớt, nếu thay đổi chế độ ăn cho trẻ đột ngột (như ăn uống ki&ecirc;ng khem, hay ăn bồi bổ qu&aacute; nhiều sau một đợt bệnh nặng) c&oacute; thể khiến cơ thể trẻ kh&ocirc;ng th&iacute;ch nghi kịp dẫn đến kh&oacute; ti&ecirc;u, đầy bụng, đi ngo&agrave;i ph&acirc;n sống,&hellip;</p>\r\n\r\n<p><strong><em>Kh&ocirc;ng dung nạp được c&aacute;c loại protein trong sữa:</em></strong>&nbsp;Khi trẻ bị dị ứng với một hoặc một số loại protein c&oacute; trong sữa, ngo&agrave;i biểu hiện đầy bụng, kh&oacute; ti&ecirc;u, trẻ c&oacute; thể bị n&ocirc;n trớ, ti&ecirc;u chảy thường xuy&ecirc;n v&agrave; kh&ocirc;ng giảm với c&aacute;c thuốc trị rối loạn ti&ecirc;u h&oacute;a th&ocirc;ng thường.</p>\r\n\r\n<p><strong><em>Dị ứng thực phẩm:</em></strong>&nbsp;B&eacute; c&oacute; thể phản ứng dị ứng với một số loại thực phẩm, g&acirc;y ra triệu chứng đầy bụng, kh&oacute; ti&ecirc;u v&agrave; buồn n&ocirc;n. Ngo&agrave;i triệu chứng ti&ecirc;u h&oacute;a, trẻ c&oacute; thể c&oacute; một số triệu chứng kh&aacute;c ở da hay đường h&ocirc; hấp.</p>\r\n\r\n<p><strong><em>D&ugrave;ng kh&aacute;ng sinh hoặc thuốc điều trị bệnh</em></strong>: C&aacute;c loại thuốc kh&aacute;ng sinh sẽ ti&ecirc;u diệt cả vi khuẩn g&acirc;y bệnh v&agrave; lợi khuẩn đường ruột, do đ&oacute; l&agrave;m rối loạn hệ vi sinh đường ruột v&agrave; g&acirc;y ra những vấn đề về ti&ecirc;u h&oacute;a ở trẻ.</p>\r\n\r\n<p><strong><em>Cảm gi&aacute;c căng thẳng, lo lắng</em></strong>: Trường hợp trẻ bị căng thẳng, lo lắng ảnh hưởng đến t&acirc;m l&yacute; t&acirc;m thần kinh c&oacute; thể khiến trẻ c&oacute; cảm gi&aacute;c đầy bụng v&agrave; kh&oacute; ti&ecirc;u.</p>\r\n\r\n<p><strong><em>Rối loạn ti&ecirc;u h&oacute;a:</em></strong>&nbsp;Khi b&eacute; bị tr&agrave;o ngược dạ d&agrave;y, hay ti&ecirc;u chảy do nhiễm khuẩn, b&eacute; dễ bị chướng bụng, ợ hơi, dễ n&ocirc;n &oacute;i.</p>\r\n\r\n<p>Nguy&ecirc;n nh&acirc;n g&acirc;y đầy bụng, ăn kh&oacute; ti&ecirc;u, đi ngo&agrave;i ph&acirc;n sống,&hellip;ở trẻ em rất đa dạng, v&igrave; vậy h&atilde;y theo d&otilde;i t&igrave;nh trạng của b&eacute;, t&igrave;m hiểu nguy&ecirc;n nh&acirc;n để khắc phục triệu chứng.</p>\r\n\r\n<h2><strong>C&aacute;ch khắc phục triệu chứng đầy bụng, kh&oacute; ti&ecirc;u ở trẻ</strong></h2>\r\n\r\n<p>Để xử l&yacute; triệu chứng b&eacute; đầy bụng, ăn chậm ti&ecirc;u v&agrave; đi ngo&agrave;i ph&acirc;n sống, phụ huynh c&oacute; [<sub>Ma1</sub>] thể tham khảo c&aacute;c phương ph&aacute;p v&agrave; biện ph&aacute;p sau:</p>\r\n\r\n<p><strong><em>Thay đổi chế độ ăn:</em></strong>&nbsp;Cung cấp cho b&eacute; một chế độ ăn gi&agrave;u chất xơ từ rau, tr&aacute;i c&acirc;y v&agrave; ngũ cốc nguy&ecirc;n hạt. Chất xơ gi&uacute;p tăng cường chuyển h&oacute;a thực phẩm v&agrave; cải thiện ti&ecirc;u h&oacute;a. Hạn chế c&aacute;c thực phẩm kh&oacute; ti&ecirc;u như đồ chi&ecirc;n x&agrave;o dầu mỡ, đồ ngọt, đồ nhiều chất b&eacute;o v&agrave; thức ăn nhanh.</p>\r\n\r\n<p><strong><em>Uống đủ nước:</em></strong>&nbsp;Đảm bảo rằng b&eacute; uống đủ nước trong ng&agrave;y để gi&uacute;p duy tr&igrave; sự th&ocirc;ng tho&aacute;ng của hệ ti&ecirc;u h&oacute;a. Nước gi&uacute;p mềm ph&acirc;n v&agrave; giảm đầy bụng, chướng bụng, t&aacute;o b&oacute;n.</p>\r\n\r\n<p><strong><em>Vận động thể chất:</em></strong>&nbsp;Khuyến kh&iacute;ch b&eacute; thực hiện c&aacute;c hoạt động vận động nhẹ nh&agrave;ng như đi dạo, vui chơi ngo&agrave;i trời hoặc tham gia v&agrave;o c&aacute;c hoạt động thể thao. Việc vận động gi&uacute;p k&iacute;ch th&iacute;ch hoạt động ruột v&agrave; cải thiện chuyển h&oacute;a thức ăn hiệu quả hơn.</p>\r\n\r\n<p><strong><em>X&acirc;y dựng th&oacute;i quen ăn uống v&agrave; vệ sinh l&agrave;nh mạnh:</em></strong>&nbsp;Đảm bảo b&eacute; c&oacute; một m&ocirc;i trường ăn uống v&agrave; vệ sinh l&agrave;nh mạnh. Tạo cho trẻ th&oacute;i quen ăn uống đ&uacute;ng giờ v&agrave; ăn chậm, nhai kỹ.</p>\r\n\r\n<p><strong><em>Bổ sung men ti&ecirc;u h&oacute;a cho trẻ:</em></strong>&nbsp;Men ti&ecirc;u h&oacute;a c&oacute; t&aacute;c dụng hỗ trợ ph&acirc;n cắt thức ăn v&agrave; gi&uacute;p cơ thể hấp thu dinh dưỡng. Từ đ&oacute;, cải thiện c&aacute;c triệu chứng đầy bụng kh&oacute; ti&ecirc;u, giảm t&igrave;nh trạng đi ngo&agrave;i ph&acirc;n sống v&agrave; tăng khả năng hấp thu chất dinh dưỡng cho b&eacute;.</p>', 0, 'tre-bieng-an-2_2023-08-09 13:33:19.png', 'nguyen-nhan-va-cach-khac-phuc-trieu-chung-day-bung-kho-tieu-o-tre', 15, '2023-08-09 13:33:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_prescription`
--

CREATE TABLE `tbl_prescription` (
  `prescription_id` int(30) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `prescription_desc` text DEFAULT NULL,
  `prescription_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_prescription`
--

INSERT INTO `tbl_prescription` (`prescription_id`, `user_id`, `user_name`, `user_phone`, `prescription_desc`, `prescription_status`) VALUES
(15, 0, 'a', '1', NULL, 0),
(16, 0, 'b', 'c', NULL, 0),
(17, 0, 'a', 'c', NULL, 0),
(18, 0, 'a', 'c', NULL, 0),
(19, NULL, 'a', 'c', NULL, 0),
(20, NULL, 'c', 'c', NULL, 0),
(21, NULL, 'e', 'e', NULL, 0),
(22, 0, 'v', 'v', NULL, 0),
(23, 0, 'b', 'b', NULL, 0),
(24, 0, 'f', 'f', NULL, 0),
(25, 0, 'g', 'g', NULL, 0),
(26, 0, 'g', 'g', NULL, 0),
(27, 0, '1', '1', NULL, 0),
(28, 0, 'e', 'e', NULL, 0),
(29, 0, 'e', 'e', NULL, 0),
(30, 0, 'n', 'n', NULL, 0),
(31, 0, 'm', 'm', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_prescription_image`
--

CREATE TABLE `tbl_prescription_image` (
  `prescription_image_id` int(11) NOT NULL,
  `prescription_id` int(11) NOT NULL,
  `prescription_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_prescription_image`
--

INSERT INTO `tbl_prescription_image` (`prescription_image_id`, `prescription_id`, `prescription_image`) VALUES
(1, 7, '121066207_833679377376694_4099525131891764313_n.jpeg'),
(2, 7, '07-164 copy.png'),
(3, 19, '121066207_833679377376694_4099525131891764313_n.jpeg'),
(4, 20, '121066207_833679377376694_4099525131891764313_n.jpeg'),
(5, 21, 'hh.jpeg'),
(6, 21, '07-164 copy.png'),
(7, 24, '121066207_833679377376694_4099525131891764313_n.jpeg'),
(8, 31, 'hh.jpeg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_detail_id` int(11) NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_img1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_img2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_img3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_img4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price_in` int(11) DEFAULT NULL,
  `product_price_old` int(11) DEFAULT NULL,
  `product_price` int(255) DEFAULT NULL,
  `product_status` int(11) DEFAULT 0 COMMENT '(2)Ẩn (1)hiện (0) Chờ xử lý',
  `product_out` int(11) DEFAULT 0 COMMENT '(0)Bán trực tuyến (1)Bán theo đơn\r\n(2) Hết hàng',
  `created_at_product` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `productUnit` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `category_id`, `category_detail_id`, `product_name`, `product_desc`, `product_img1`, `product_img2`, `product_img3`, `product_img4`, `product_price_in`, `product_price_old`, `product_price`, `product_status`, `product_out`, `created_at_product`, `updated_at`, `productUnit`) VALUES
(25, 32, 17, 'Agilodin 10g (Hộp 10 vỉ x 10 viên)', '<p>Điều trị vi&ecirc;m mũi dị ứng, vi&ecirc;m kết mạc dị ứng, ngứa v&agrave; m&agrave;y đay li&ecirc;n quan đến histamin</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Điều trị&nbsp;<span style=\"font-size:18px\">231</span></p>', 'Agilodin_2023-07-07 20:32:06.png', NULL, NULL, NULL, 400000, 380000, 350000, 1, 0, '2023-08-03 10:33:21', NULL, 'Hộp'),
(27, 32, 18, 'Sản phẩm 4', NULL, 'thuocdalieu_2023-07-08 00:30:52.png', NULL, NULL, NULL, 1, 33000, 20000, 1, 0, '2023-07-22 16:02:17', NULL, 'Chai'),
(29, 32, 18, 'Voltaren Emulgel (Tuýp 20g)', 'Công dụng: Điều trị bên ngoài về đau, viêm và sưng trong các trường hợp tổn thương gân, dây chằng, cơ và khớp…', 'P01421_1_l_2023-08-03 14:20:50.png', NULL, NULL, NULL, 65000, NULL, 70000, 1, 0, '2023-08-03 07:24:34', NULL, 'Tuýp'),
(30, 32, 17, 'Cetimed 10mg (Hộp 1 vỉ x 10 viên)', '<p>C&ocirc;ng dụng: Điều trị triệu chứng vi&ecirc;m mũi dị ứng, m&agrave;y đay</p>', 'P15186_1_l_2023-08-03 14:23:49.png', 'P15186_4_l_2023-08-03 14:23:49.png', NULL, NULL, 40000, NULL, 40500, 1, 0, '2023-08-09 10:26:49', NULL, 'Hộp'),
(31, 33, 19, 't', NULL, 'P15186_4_l_2023-08-03 16:19:45.png', NULL, NULL, NULL, 2, 2, 2, 0, 0, '2023-08-03 09:46:40', NULL, 'Hộp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping_unit`
--

CREATE TABLE `tbl_shipping_unit` (
  `shipping_id` int(11) NOT NULL,
  `shipping_name` varchar(100) NOT NULL,
  `shipping_method` int(1) NOT NULL COMMENT '0: Nhanh. 1: Tiêu chuẩn',
  `shipping_price` int(20) NOT NULL,
  `shipping_status` int(1) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_default` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping_unit`
--

INSERT INTO `tbl_shipping_unit` (`shipping_id`, `shipping_name`, `shipping_method`, `shipping_price`, `shipping_status`, `created_at`, `is_default`) VALUES
(1, 'Viettel Post', 0, 54000, 0, '2023-07-30 13:58:15', 0),
(2, 'Viettel Post', 1, 18500, 0, '2023-08-15 16:41:21', 0),
(4, 'VietNam Post', 0, 43000, 0, '2023-07-30 13:45:00', 0),
(5, 'GHN', 0, 34000, 0, '2023-08-15 16:41:21', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_social`
--

CREATE TABLE `tbl_social` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(100) NOT NULL,
  `provider` varchar(100) NOT NULL,
  `user` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_phone` varchar(30) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `user_avatar` varchar(200) DEFAULT NULL,
  `user_sex` int(11) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT 'Khách hàng',
  `user_bithday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_phone`, `user_email`, `user_password`, `user_avatar`, `user_sex`, `user_name`, `user_bithday`) VALUES
(18, '0397892603', 'thanh@gmail.com', '12121212', 'user_avatar_2023-07-23_15-42-38.jpeg', 0, 'Tuấn Thành', '2002-03-26'),
(21, '0877717575', NULL, '0877717575', NULL, NULL, 'Khách hàng', NULL),
(22, NULL, 'tuanthanhktltk21@gmail.com', NULL, NULL, NULL, 'Tuấn Thành', NULL),
(23, NULL, 'tuanthanh29263@gmail.com', NULL, NULL, NULL, 'Đặng Tuấn Thành', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user_address`
--

CREATE TABLE `tbl_user_address` (
  `id_address` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` text DEFAULT NULL,
  `user_phone` varchar(30) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_city` varchar(50) DEFAULT NULL,
  `user_district` varchar(50) DEFAULT NULL,
  `user_ward` varchar(50) DEFAULT NULL,
  `user_address` text DEFAULT NULL,
  `user_note` text DEFAULT NULL,
  `is_default` tinyint(1) DEFAULT 0,
  `user_ward_text` varchar(150) NOT NULL,
  `user_district_text` varchar(150) NOT NULL,
  `user_city_text` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_user_address`
--

INSERT INTO `tbl_user_address` (`id_address`, `user_id`, `user_name`, `user_phone`, `user_email`, `user_city`, `user_district`, `user_ward`, `user_address`, `user_note`, `is_default`, `user_ward_text`, `user_district_text`, `user_city_text`) VALUES
(44, 18, 'Đặng Tuấn Thành', '0397892603', NULL, '66', '643', '24118', '102A/11/5 Nguyễn Tất Thành', NULL, 1, 'Phường Tân Lập', 'Thành phố Buôn Ma Thuột', 'Tỉnh Đắk Lắk'),
(45, 18, 'thanh2', '0397892603', NULL, '01', '002', '00037', '20', NULL, 0, 'Phường Phúc Tân', 'Quận Hoàn Kiếm', 'Thành phố Hà Nội'),
(46, 18, 'thanh 3', '0397892603', NULL, '08', '071', '02242', '30', NULL, 0, 'Xã Xuân Lập', 'Huyện Lâm Bình', 'Tỉnh Tuyên Quang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Chỉ mục cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Chỉ mục cho bảng `tbl_bill_detail`
--
ALTER TABLE `tbl_bill_detail`
  ADD PRIMARY KEY (`bill_detail_id`);

--
-- Chỉ mục cho bảng `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  ADD PRIMARY KEY (`cate_post_id`);

--
-- Chỉ mục cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_category_product_detail`
--
ALTER TABLE `tbl_category_product_detail`
  ADD PRIMARY KEY (`category_detail_id`);

--
-- Chỉ mục cho bảng `tbl_description`
--
ALTER TABLE `tbl_description`
  ADD PRIMARY KEY (`description_id`);

--
-- Chỉ mục cho bảng `tbl_discount`
--
ALTER TABLE `tbl_discount`
  ADD PRIMARY KEY (`discount_id`);

--
-- Chỉ mục cho bảng `tbl_email_promotional`
--
ALTER TABLE `tbl_email_promotional`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Chỉ mục cho bảng `tbl_prescription`
--
ALTER TABLE `tbl_prescription`
  ADD PRIMARY KEY (`prescription_id`);

--
-- Chỉ mục cho bảng `tbl_prescription_image`
--
ALTER TABLE `tbl_prescription_image`
  ADD PRIMARY KEY (`prescription_image_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_shipping_unit`
--
ALTER TABLE `tbl_shipping_unit`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Chỉ mục cho bảng `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `tbl_user_address`
--
ALTER TABLE `tbl_user_address`
  ADD PRIMARY KEY (`id_address`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `tbl_bill_detail`
--
ALTER TABLE `tbl_bill_detail`
  MODIFY `bill_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `tbl_category_post`
--
ALTER TABLE `tbl_category_post`
  MODIFY `cate_post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `tbl_category_product_detail`
--
ALTER TABLE `tbl_category_product_detail`
  MODIFY `category_detail_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tbl_description`
--
ALTER TABLE `tbl_description`
  MODIFY `description_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tbl_discount`
--
ALTER TABLE `tbl_discount`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_email_promotional`
--
ALTER TABLE `tbl_email_promotional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_prescription`
--
ALTER TABLE `tbl_prescription`
  MODIFY `prescription_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `tbl_prescription_image`
--
ALTER TABLE `tbl_prescription_image`
  MODIFY `prescription_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping_unit`
--
ALTER TABLE `tbl_shipping_unit`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tbl_user_address`
--
ALTER TABLE `tbl_user_address`
  MODIFY `id_address` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
