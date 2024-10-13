-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2024 at 03:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boxprintlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_desc` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `slug`, `description`, `featured_image`, `banner_image`, `meta_title`, `meta_keyword`, `meta_desc`, `status`, `is_delete`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 'test', NULL, NULL, 'test', 'test', 'test', 0, 1, 1, NULL, '2024-08-29 22:59:56'),
(2, 'How Custom Cereal Boxes Attract Hungry Customers', 'how-custom-cereal-boxes-attract-hungry-customers', '<div class=\"blog_det_detail\"><p>Do you remember your walk in a store? \r\nWhat captivates you there? The colorful customized packaging boxes have a\r\n moment of rest on shelves. Remember your last visit to the store? \r\nSomething must have caught your eye. And that must be something packaged\r\n in an alluring and enticing box. It is fitting that a well-designed \r\npackaging box can give life to the product. On the other hand, dull, \r\nboring, and colorless packaging never attracts customers. Packaging \r\nboxes are used not only to protect the product but also to grab customer\r\n attention and promotions.</p>\r\n<h2>The Cereal Showdown: Standing Out in a Sea of Cardboard</h2>\r\n<p>When you go for groceries, what is one of the significant items you buy? It is the <a href=\"https://boxprint.ca/product/cereal-boxes\">cereal box</a>,\r\n a must-have product for breakfast. You saw so many flavors with \r\ndifferent benefits and nutritional values. It is just like you are \r\nstanding out in the sea of cereal. However, something extraordinary must\r\n have caught your attention. What was unique about that? Without any \r\ndoubt, we can say that the mighty cereal box.</p>\r\n<p>Cereal boxes have evolved from a shield to a promotional tool. They \r\nhave become quite different from the past and are now more functional \r\nand practical. Before buying a product, customers can only look at the \r\npackaging box. Hence, packaging boxes influence customers\' buying \r\ndecisions. So, how can we take the importance of custom cereal boxes for\r\n granted?</p>\r\n<p>Let\'s dive into more details to know the importance of custom cereal boxes.</p>\r\n<h2>Unleashing the Power of Custom Cereal Boxes</h2>\r\n<p>Custom cereal boxes are a modern marketing tool used by brands. \r\nPackaging has evolved from traditional to contemporary. No, packaging \r\nboxes are more functional and have several other advantages.</p>\r\n<h3>From Bland Canvas to Storytelling Powerhouse</h3>\r\n<p>Cereal boxes have a spacious canvas for the brand\'s storytelling. \r\nStorytelling is a powerhouse of marketing. You must have excellent \r\nstorytelling skills to introduce or expand your brand. Here comes the \r\npower of a bland canvas. Yes, you read it right. From a bland canvas, \r\nwe\'ll take it to the next level.</p>\r\n<p>The vast canvas of these boxes incorporates branding elements. Use \r\nthese elements to create a story and engage with your customers. \r\nManufacturers use vibrant colors, captivating illustrations, and \r\nstrategic tools to engage and resonate with customers. Your storytelling\r\n skill will make customers excited, curious, and happy about buying and \r\nhaving your cereal brand.</p>\r\n<h3>More Than Meets the Eye: Functionality Matters Too</h3>\r\n<p>Living in this modern era, we know that aesthetics are critical. So, \r\nare they for packaging boxes? To remove the dullness and boring \r\npresentation, brands can use this opportunity. Add customized features \r\nto your<a href=\"https://boxprint.ca/\"> packaging boxes</a>, such as \r\ngetting boxes with clear windows, product information, and nutritional \r\nvalue. Furthermore, brands can opt for packaging boxes with innovative \r\npresentation. Add the touch of technology by having puzzles on cereal \r\nboxes, QR codes, and hidden messages. Interact with your customers \r\nthrough custom cereal boxes.</p>\r\n<h2>How Custom Packaging Influences Buying Decisions</h2>\r\n<p>Want to know the psychology that influences our buying decisions? The\r\n color, shape, size, and illustration on the packaging boxes ultimately \r\ninfluence a customer\'s brain and buying decision. Cereal boxes with \r\ncustomized elements attract customers more than other things. The box \r\ntriggers the customers as soon they look at it. Besides this, the more \r\nattractive packaging boxes you use, your sales will increase. More \r\npeople would love to try your brand of cereal.</p>\r\n<h3>Beyond the Supermarket Shelf: The Social Media Buzz of Custom Cereal Boxes</h3>\r\n<p>Want to go viral with your custom cereal boxes? It is now possible to\r\n do this with different social media platforms. Go viral and create a \r\nbuzz and sensation with your well-designed cereal boxes. Thoughtfully \r\ndesigned cereal boxes can easily go viral. Influencers and social media \r\nstars can easily promote your content. They have a massive fan \r\nfollowing, which means if they like the product, their fans must like \r\nit. So, you can be the next social media buzz using modern marketing \r\ntools.</p>\r\n<h3>Beyond Breakfast: The Versatility of Custom Cereal Boxes</h3>\r\n<p>Cereal boxes are versatile and multi-functional in application. The \r\ndesign of the cereal boxes is versatile. They can be used for different \r\nfood products to pack, ship, and stack. Enhance your shelving appeal \r\nwith appealing custom cereal boxes.</p>\r\n<h2>Get the Subscription Box and Cherish the Happy Moments</h2>\r\n<p>Attract your hungry customers by giving them something extraordinary.\r\n Get subscription cereal boxes and add an extra fee. It is an ideal way \r\nto attract customers and boost sales. <a href=\"https://boxprint.ca/category/custom-shipping-boxes\">Subscription boxes</a>\r\n have special features for the customers. They are a bit costly. \r\nHowever, they give customers extra leverage. Customers can get boxes \r\nwith their names and their favorite flavors. Moreover, brands can add \r\ngoodies and merchandise to stand out.</p>\r\n<h2>Conclusion</h2>\r\n<p>This blog has shown how brands can captivate customers with cereal \r\nboxes. By infusing your products with a touch of excitement and joy, you\r\n can become the Market King. The key is to unleash your creativity in \r\ndesigning interactive and innovative displays for your cereal boxes, \r\ninspiring your customers and boosting your sales.</p></div>', '20240829105803cfrqrrivgj.webp', '20240829105803snxsedze6c.webp', 'Custom Pre Roll Boxes', 'Custom Pre Roll BoxesCustom Pre Roll Boxes', 'The vast canvas of these boxes incorporates branding elements. Use these elements to create a story and engage with your customers. Manufacturers use vibrant colors, captivating illustrations, and strategic tools to engage and resonate with customers. Your storytelling skill will make customers excited, curious, and happy about buying and having your cereal brand.', 0, 0, 1, '2024-08-29 22:58:03', '2024-08-29 22:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_desc` text DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `meta_title`, `meta_keyword`, `meta_desc`, `featured_image`, `banner_image`, `status`, `is_delete`, `created_by`, `created_at`, `updated_at`) VALUES
(6, 'Industies', 'industies', 'Industies', 'Industies', 'IndustiesIndustiesIndustiesIndustiesIndusties', NULL, '202408260234466umuh4f7wt.webp', 0, 0, 1, '2024-08-06 21:01:44', '2024-08-26 02:34:46'),
(7, 'Styles', 'styles', 'Styles', 'Styles', 'StylesStylesStylesStylesStylesStylesStylesStylesStylesStylesStylesStylesStylesStylesStylesStyles', NULL, '202408260234371vygaevihz.webp', 0, 0, 1, '2024-08-06 21:02:11', '2024-08-26 02:34:37'),
(8, 'Material', 'material', 'Material', 'Material', 'MaterialMaterialMaterialMaterialMaterialMaterialMaterialMaterialMaterialMaterialMaterialMaterialMaterialMaterialMaterialMaterialMaterialMaterialMaterial', NULL, '20240826023425azt5cbzk5a.webp', 0, 0, 1, '2024-08-06 21:02:29', '2024-08-26 02:34:25'),
(9, 'Printing Services', 'printing-services', 'Printing Services', 'Printing Services', 'Printing ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting ServicesPrinting Services', '202408201029216frj1w2vxp.webp', '202408260234146vmzvi0eco.webp', 0, 0, 1, '2024-08-06 21:02:46', '2024-08-26 02:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `custom_quote`
--

CREATE TABLE `custom_quote` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `instant_quote`
--

CREATE TABLE `instant_quote` (
  `id` int(100) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instant_quote`
--

INSERT INTO `instant_quote` (`id`, `name`, `phone`, `email`, `product_name`, `quantity`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Test', '324234', 'admin@admin.com', NULL, NULL, NULL, '2024-08-28 00:36:41', '2024-08-28 00:36:41'),
(2, 'Test', '324234', 'admin@adminasd.com', 'asd', '213', 'asdasdad', '2024-08-28 00:37:13', '2024-08-28 00:37:13');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `additional_info` text DEFAULT NULL,
  `shipping` text DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_desc` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:active , 1:inactive',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:active , 1:inactive',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `sub_category_id`, `short_description`, `description`, `additional_info`, `shipping`, `meta_title`, `meta_keyword`, `meta_desc`, `status`, `is_delete`, `created_by`, `created_at`, `updated_at`) VALUES
(9, 'Perfume Boxes', 'perfume-boxes', 6, 7, 'Perfume Boxes Perfume Boxes  Perfume Boxes Perfume Boxes  Perfume Boxes Perfume Boxes  Perfume Boxes Perfume Boxes  Perfume Boxes Perfume Boxes', '&nbsp;Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes <br>', '&nbsp;Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes <br>', '&nbsp;Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes&nbsp; Perfume Boxes Perfume Boxes <br>', 'Perfume Boxes', 'Perfume Boxes', 'Perfume Boxes Perfume Boxes Perfume Boxes Perfume Boxes Perfume Boxes Perfume Boxes Perfume Boxes Perfume Boxes Perfume Boxes Perfume Boxes Perfume Boxes Perfume Boxes Perfume Boxes', 0, 0, 1, '2024-08-10 19:35:09', '2024-08-10 19:35:09'),
(10, 'Makeup Boxes', 'makeup-boxes', 6, 7, 'Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes', '&nbsp;Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes <br>', '&nbsp;Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes <br>', '&nbsp;Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes&nbsp; Makeup Boxes <br>', 'Makeup Boxes', 'Makeup Boxes', 'Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes  Makeup Boxes', 0, 0, 1, '2024-08-10 19:37:04', '2024-08-10 19:37:04'),
(11, 'Eyeshadow Boxes', 'eyeshadow-boxes', 6, 7, 'Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes', '&nbsp;Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes <br>', '&nbsp;Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes <br>', '&nbsp;Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes&nbsp; Eyeshadow Boxes <br>', 'Eyeshadow Boxes', 'Eyeshadow Boxes', 'Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes  Eyeshadow Boxes', 0, 0, 1, '2024-08-10 19:38:17', '2024-08-10 19:38:17'),
(12, 'Lip Balm Boxes', 'lip-balm-boxes', 6, 7, 'Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes', '&nbsp;Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes <br>', '&nbsp;Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes <br>', '&nbsp;Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes&nbsp; Lip Balm Boxes <br>', 'Lip Balm Boxes', 'Lip Balm Boxes', 'Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes  Lip Balm Boxes', 0, 0, 1, '2024-08-10 19:39:25', '2024-08-10 19:39:25'),
(13, 'Phone Case Boxes', 'phone-case-boxes', 6, 8, 'Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes', '&nbsp;Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes <br>', '&nbsp;Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes <br>', '&nbsp;Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes&nbsp; Phone Case Boxes <br>', 'Phone Case Boxes', 'Phone Case Boxes', 'Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes  Phone Case Boxes', 0, 0, 1, '2024-08-10 19:42:35', '2024-08-10 19:42:35'),
(14, 'Cube Boxes', 'cube-boxes', 6, 8, 'Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes', '&nbsp;Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes <br>', '&nbsp;Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes <br>', '&nbsp;Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes&nbsp; Cube Boxes <br>', 'Cube Boxes', 'Cube Boxes', 'Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes  Cube Boxes', 0, 0, 1, '2024-08-10 19:43:29', '2024-08-10 19:43:29'),
(15, 'Triangle Boxes', 'triangle-boxes', 6, 8, 'Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes', '&nbsp;Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes <br>', '&nbsp;Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes <br>', '&nbsp;Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes&nbsp; Triangle Boxes <br>', 'Triangle Boxes', 'Triangle Boxes', 'Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes  Triangle Boxes', 0, 0, 1, '2024-08-10 19:44:26', '2024-08-10 19:44:26'),
(16, 'Bagel Boxes', 'bagel-bxes', 6, 9, 'Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes', '&nbsp;Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes <br>', '&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; \r\nBagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; \r\nBagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; \r\nBagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; \r\nBagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; \r\nBagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes <br>', '&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; \r\nBagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; \r\nBagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; \r\nBagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; \r\nBagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; \r\nBagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; \r\nBagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; \r\nBagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; \r\nBagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel \r\nBoxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes&nbsp; Bagel Boxes <br>', 'Bagel Boxes', 'Bagel Boxes', 'Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes  Bagel Boxes', 0, 0, 1, '2024-08-10 19:45:43', '2024-08-10 19:45:43'),
(17, 'Coffee Boxes', 'coffee-boxes', 6, 9, 'Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes', '&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes &nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes &nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes <br>', '&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes &nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes &nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes &nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes &nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes <br>', '&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes &nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes &nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes &nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes &nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes&nbsp; Coffee Boxes <br>', 'Coffee Boxes', 'Coffee Boxes', 'Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes  Coffee Boxes', 0, 0, 1, '2024-08-10 19:46:39', '2024-08-10 19:46:39'),
(18, 'Macaron Boxes', 'macaron-bxes', 6, 9, 'Macaron Boxes\r\n Macaron Boxes\r\n Macaron Boxes\r\n Macaron Boxes', '&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br><br>', '&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br><br>', '&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br>&nbsp;Macaron Boxes<br><br>', 'Macaron Boxes', 'Macaron Boxes', 'Macaron Boxes\r\n Macaron Boxes\r\n Macaron Boxes\r\n Macaron Boxes\r\n Macaron Boxes\r\n Macaron Boxes\r\n Macaron Boxes\r\n Macaron Boxes\r\n Macaron Boxes\r\n Macaron Boxes\r\n Macaron Boxes\r\n Macaron Boxes', 0, 0, 1, '2024-08-10 19:48:00', '2024-08-10 19:48:00'),
(19, 'Baseball Boxes', 'baseball-boxes', 6, 10, 'Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes', '&nbsp;Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes <br>', '&nbsp;Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes <br>', '&nbsp;Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes&nbsp; Baseball Boxes <br>', 'Baseball Boxes', 'Baseball Boxes', 'Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes  Baseball Boxes', 0, 0, 1, '2024-08-10 19:49:02', '2024-08-10 19:49:02'),
(20, 'Basketball Boxes', 'basketball-boxes', 6, 10, 'Basketball Boxes  Basketball Boxes  Basketball Boxes  Basketball Boxes  Basketball Boxes  Basketball Boxes  Basketball Boxes  Basketball Boxes  Basketball Boxes  Basketball Boxes  Basketball Boxes', '&nbsp;Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes <br>', '&nbsp;Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes <br>', '&nbsp;Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes&nbsp; Basketball Boxes <br>', 'Basketball Boxes', 'Basketball Boxes', 'Basketball Boxes  Basketball Boxes  Basketball Boxes  Basketball Boxes  Basketball Boxes  Basketball Boxes  Basketball Boxes  Basketball Boxes  Basketball Boxes  Basketball Boxes  Basketball Boxes', 0, 0, 1, '2024-08-10 19:50:00', '2024-08-10 19:50:00');
INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `sub_category_id`, `short_description`, `description`, `additional_info`, `shipping`, `meta_title`, `meta_keyword`, `meta_desc`, `status`, `is_delete`, `created_by`, `created_at`, `updated_at`) VALUES
(21, 'Tennis Ball Boxes', 'tennis-ball-boxes', 6, 10, 'Tennis Ball Boxes  Tennis Ball Boxes  Tennis Ball Boxes  Tennis Ball Boxes  Tennis Ball Boxes  Tennis Ball Boxes  Tennis Ball Boxes  Tennis Ball Boxes  Tennis Ball Boxes', '&nbsp;Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes <br>', '&nbsp;Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes <br>', '&nbsp;Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes&nbsp; Tennis Ball Boxes <br>', 'Tennis Ball Boxes', 'Tennis Ball Boxes', 'Tennis Ball Boxes  Tennis Ball Boxes  Tennis Ball Boxes  Tennis Ball Boxes  Tennis Ball Boxes  Tennis Ball Boxes  Tennis Ball Boxes  Tennis Ball Boxes  Tennis Ball Boxes', 0, 0, 1, '2024-08-10 19:51:09', '2024-08-10 19:51:09'),
(22, 'Pencil Boxes', 'pencil-boxes', 6, 11, 'Pencil Boxes  Pencil Boxes \r\n  Pencil Boxes \r\n  Pencil Boxes \r\n  Pencil Boxes \r\n  Pencil Boxes \r\n  Pencil Boxes \r\n  Pencil Boxes \r\n  Pencil Boxes \r\n  Pencil Boxes', '&nbsp; Pencil Boxes&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes &nbsp; Pencil Boxes&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes &nbsp; Pencil Boxes&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes &nbsp; Pencil Boxes&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes &nbsp; Pencil Boxes&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>', '&nbsp; Pencil Boxes&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes &nbsp; Pencil Boxes&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>', '&nbsp; Pencil Boxes&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes&nbsp;<br>&nbsp; Pencil Boxes &nbsp; Pencil Boxes&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes &nbsp; Pencil Boxes&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>&nbsp; Pencil Boxes <br>', 'Pencil Boxes', 'Pencil Boxes', 'Pencil Boxes  Pencil Boxes \r\n  Pencil Boxes \r\n  Pencil Boxes \r\n  Pencil Boxes \r\n  Pencil Boxes \r\n  Pencil Boxes \r\n  Pencil Boxes \r\n  Pencil Boxes \r\n  Pencil Boxes', 0, 0, 1, '2024-08-10 19:52:54', '2024-08-10 19:52:54'),
(23, 'Staple Boxes', 'staple-boxes', 6, 11, 'Staple Boxes  Staple Boxes  Staple Boxes  Staple Boxes  Staple Boxes  Staple Boxes  Staple Boxes  Staple Boxes  Staple Boxes  Staple Boxes', '&nbsp;Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes <br>', '&nbsp;Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes <br>', '&nbsp;Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes&nbsp; Staple Boxes <br>', 'Staple Boxes', 'Staple Boxes', 'Staple Boxes  Staple Boxes  Staple Boxes  Staple Boxes  Staple Boxes  Staple Boxes  Staple Boxes  Staple Boxes  Staple Boxes  Staple Boxes', 0, 0, 1, '2024-08-10 19:53:57', '2024-08-10 19:53:57'),
(24, 'Pen Boxes', 'pen-boxes', 6, 11, 'Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes', 'Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes <br>', 'Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes <br>', 'Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes <br>', 'Pen Boxes', 'Pen Boxes', 'Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes Pen Boxes', 0, 0, 1, '2024-08-10 19:55:44', '2024-08-10 19:55:44'),
(25, 'Gloves Boxes', 'gloves-boxes', 6, 12, 'Gloves Boxes  Gloves Boxes  Gloves Boxes  Gloves Boxes  Gloves Boxes  Gloves Boxes  Gloves Boxes  Gloves Boxes  Gloves Boxes  Gloves Boxes  Gloves Boxes', '&nbsp;Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes <br>', '&nbsp;Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes <br>', '&nbsp;Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes&nbsp; Gloves Boxes <br>', 'Gloves Boxes', 'Gloves Boxes', 'Gloves Boxes  Gloves Boxes  Gloves Boxes  Gloves Boxes  Gloves Boxes  Gloves Boxes  Gloves Boxes  Gloves Boxes  Gloves Boxes  Gloves Boxes  Gloves Boxes', 0, 0, 1, '2024-08-10 19:57:03', '2024-08-10 19:57:03'),
(26, 'Bandage Boxes', 'Bandage Boxes', 6, 12, 'Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes', 'Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes <br>', 'Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes <br>', 'Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes <br>', 'Bandage Boxes', 'Bandage Boxes', 'Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes Bandage Boxes', 0, 0, 1, '2024-08-10 19:57:52', '2024-08-10 19:57:52'),
(27, 'Capsule Pills Boxes', 'capsule-pills-boxes', 6, 12, 'Capsule Pills Boxes  Capsule Pills Boxes  Capsule Pills Boxes  Capsule Pills Boxes  Capsule Pills Boxes  Capsule Pills Boxes', '&nbsp;Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes <br>', '&nbsp;Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes <br>', '&nbsp;Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes&nbsp; Capsule Pills Boxes <br>', 'Capsule Pills Boxes', 'Capsule Pills Boxes', 'Capsule Pills Boxes  Capsule Pills Boxes  Capsule Pills Boxes  Capsule Pills Boxes  Capsule Pills Boxes  Capsule Pills Boxes', 0, 0, 1, '2024-08-10 19:59:19', '2024-08-10 19:59:19'),
(28, 'Presentation Boxes', 'presentation-boxes', 7, 21, 'Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes', '&nbsp;Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes <br>', '&nbsp;Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes <br>', '&nbsp;Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes&nbsp; Presentation Boxes <br>', 'Presentation Boxes', 'Presentation Boxes', 'Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes  Presentation Boxes', 0, 0, 1, '2024-08-10 20:00:57', '2024-08-10 20:00:57'),
(29, 'Wallet Boxes', 'wallet-boxes', 7, 21, 'Wallet Boxes  Wallet Boxes  Wallet Boxes  Wallet Boxes  Wallet Boxes  Wallet Boxes  Wallet Boxes', '&nbsp;Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes <br>', '&nbsp;Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes <br>', '&nbsp;Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes&nbsp; Wallet Boxes <br>', 'Wallet Boxes', 'Wallet Boxes', 'Wallet Boxes  Wallet Boxes  Wallet Boxes  Wallet Boxes  Wallet Boxes  Wallet Boxes  Wallet Boxes', 0, 0, 1, '2024-08-10 20:01:46', '2024-08-10 20:01:46'),
(30, 'Credit Card Boxes', 'credit-card-boxes', 7, 21, 'Credit Card Boxes  Credit Card Boxes  Credit Card Boxes  Credit Card Boxes  Credit Card Boxes  Credit Card Boxes  Credit Card Boxes  Credit Card Boxes', '<h3> Heading <br></h3><p><br></p><p>Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes <br></p>', '<h4>&nbsp; Specifications</h4><p>Credit <b>Card Boxes&nbsp; Credit Card Boxes</b>&nbsp; Credit Card Boxes&nbsp; <u>Credit Card Boxes</u>&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes&nbsp; Credit Card Boxes <br></p>', '<ul><li>&nbsp;Credit Card Boxes </li><li>Credit Card Boxes </li><li>Credit Card Boxes </li><li>Credit Card Boxes </li></ul>', 'Credit Card Boxes', 'Credit Card Boxes', 'Credit Card Boxes  Credit Card Boxes  Credit Card Boxes  Credit Card Boxes  Credit Card Boxes  Credit Card Boxes  Credit Card Boxes  Credit Card Boxes', 0, 0, 1, '2024-08-10 20:03:00', '2024-08-25 17:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_ext` varchar(25) NOT NULL,
  `order_by` int(11) NOT NULL DEFAULT 100,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `image_name`, `image_ext`, `order_by`, `created_at`, `updated_at`) VALUES
(5, 8, '20240804114220wk1k9krj2x.webp', 'webp', 100, '2024-08-04 23:42:20', '2024-08-04 23:42:20'),
(6, 8, '20240804114238ilmsuhv69r.webp', 'webp', 100, '2024-08-04 23:42:38', '2024-08-04 23:42:38'),
(7, 9, '20240810073509dza8twexoy.webp', 'webp', 100, '2024-08-10 19:35:09', '2024-08-10 19:35:09'),
(8, 9, '20240810073509rl7vlvhav7.webp', 'webp', 100, '2024-08-10 19:35:09', '2024-08-10 19:35:09'),
(9, 9, '202408100735090vlafmmacq.webp', 'webp', 100, '2024-08-10 19:35:09', '2024-08-10 19:35:09'),
(10, 9, '20240810073509ca6tca43sg.webp', 'webp', 100, '2024-08-10 19:35:09', '2024-08-10 19:35:09'),
(11, 10, '20240810073704tf8imgiw31.webp', 'webp', 100, '2024-08-10 19:37:04', '2024-08-10 19:37:04'),
(12, 10, '20240810073704dpprudxlfr.webp', 'webp', 100, '2024-08-10 19:37:04', '2024-08-10 19:37:04'),
(13, 10, '20240810073704r0l5uuz8bh.webp', 'webp', 100, '2024-08-10 19:37:04', '2024-08-10 19:37:04'),
(14, 10, '20240810073704hlvqrd9tyk.webp', 'webp', 100, '2024-08-10 19:37:04', '2024-08-10 19:37:04'),
(15, 11, '20240810073817vexyjm8q4w.webp', 'webp', 100, '2024-08-10 19:38:17', '2024-08-10 19:38:17'),
(16, 11, '202408100738173zwpyoflnw.webp', 'webp', 100, '2024-08-10 19:38:17', '2024-08-10 19:38:17'),
(17, 11, '20240810073817zjusstjujb.webp', 'webp', 100, '2024-08-10 19:38:17', '2024-08-10 19:38:17'),
(18, 11, '20240810073817zzsskbzvyg.webp', 'webp', 100, '2024-08-10 19:38:17', '2024-08-10 19:38:17'),
(19, 13, '202408100742356c1s1m4ica.webp', 'webp', 100, '2024-08-10 19:42:35', '2024-08-10 19:42:35'),
(20, 13, '20240810074235qpqxub78wx.webp', 'webp', 100, '2024-08-10 19:42:35', '2024-08-10 19:42:35'),
(21, 13, '20240810074235xnvn4fihpq.webp', 'webp', 100, '2024-08-10 19:42:35', '2024-08-10 19:42:35'),
(22, 13, '20240810074235xkaaqmgyz3.webp', 'webp', 100, '2024-08-10 19:42:35', '2024-08-10 19:42:35'),
(23, 14, '20240810074329yy8st71idf.webp', 'webp', 100, '2024-08-10 19:43:29', '2024-08-10 19:43:29'),
(24, 14, '202408100743293ib4zuhpy6.webp', 'webp', 100, '2024-08-10 19:43:29', '2024-08-10 19:43:29'),
(25, 14, '20240810074329uxqlcylxxm.webp', 'webp', 100, '2024-08-10 19:43:29', '2024-08-10 19:43:29'),
(26, 14, '20240810074329ujclevwznj.webp', 'webp', 100, '2024-08-10 19:43:29', '2024-08-10 19:43:29'),
(27, 16, '20240810074543vrlx2c7wyc.webp', 'webp', 100, '2024-08-10 19:45:43', '2024-08-10 19:45:43'),
(28, 16, '20240810074543hogi4t0gc7.webp', 'webp', 100, '2024-08-10 19:45:43', '2024-08-10 19:45:43'),
(29, 16, '20240810074543sdh0fn3lod.webp', 'webp', 100, '2024-08-10 19:45:43', '2024-08-10 19:45:43'),
(30, 16, '20240810074543rc1tro6mvs.webp', 'webp', 100, '2024-08-10 19:45:43', '2024-08-10 19:45:43'),
(31, 17, '20240810074639nrbgksnrlt.webp', 'webp', 100, '2024-08-10 19:46:39', '2024-08-10 19:46:39'),
(32, 17, '20240810074639jdb7g8uejy.webp', 'webp', 100, '2024-08-10 19:46:39', '2024-08-10 19:46:39'),
(33, 17, '20240810074639osjiictw6v.webp', 'webp', 100, '2024-08-10 19:46:39', '2024-08-10 19:46:39'),
(34, 17, '20240810074639hkvqvzekeh.webp', 'webp', 100, '2024-08-10 19:46:39', '2024-08-10 19:46:39'),
(35, 18, '20240810074800nwybnqpkcj.webp', 'webp', 100, '2024-08-10 19:48:00', '2024-08-10 19:48:00'),
(36, 18, '20240810074800wzs2eudpi1.webp', 'webp', 100, '2024-08-10 19:48:00', '2024-08-10 19:48:00'),
(37, 18, '20240810074800cinux6ddm0.webp', 'webp', 100, '2024-08-10 19:48:00', '2024-08-10 19:48:00'),
(38, 18, '20240810074800txxxht8bfh.webp', 'webp', 100, '2024-08-10 19:48:00', '2024-08-10 19:48:00'),
(39, 19, '202408100749022nokv5z5rw.webp', 'webp', 100, '2024-08-10 19:49:02', '2024-08-10 19:49:02'),
(40, 19, '20240810074902m5xrmrozod.webp', 'webp', 100, '2024-08-10 19:49:02', '2024-08-10 19:49:02'),
(41, 19, '202408100749022hfo8kgpu0.webp', 'webp', 100, '2024-08-10 19:49:02', '2024-08-10 19:49:02'),
(42, 19, '20240810074902uiyjxhmgw2.webp', 'webp', 100, '2024-08-10 19:49:02', '2024-08-10 19:49:02'),
(43, 20, '20240810075000c6hbt2heha.webp', 'webp', 100, '2024-08-10 19:50:00', '2024-08-10 19:50:00'),
(44, 20, '20240810075000yteskfwzdx.webp', 'webp', 100, '2024-08-10 19:50:00', '2024-08-10 19:50:00'),
(45, 20, '20240810075000omh0xpu4iw.webp', 'webp', 100, '2024-08-10 19:50:00', '2024-08-10 19:50:00'),
(46, 20, '20240810075000aiw2qn2dwl.webp', 'webp', 100, '2024-08-10 19:50:00', '2024-08-10 19:50:00'),
(47, 21, '20240810075109ixsdh2gyyp.webp', 'webp', 100, '2024-08-10 19:51:09', '2024-08-10 19:51:09'),
(48, 21, '20240810075109qcp4jxdvno.webp', 'webp', 100, '2024-08-10 19:51:09', '2024-08-10 19:51:09'),
(49, 21, '20240810075109ymn1h8tjww.webp', 'webp', 100, '2024-08-10 19:51:09', '2024-08-10 19:51:09'),
(50, 21, '20240810075109ltdfj2ziyo.webp', 'webp', 100, '2024-08-10 19:51:09', '2024-08-10 19:51:09'),
(51, 22, '20240810075254jrzbdraojg.webp', 'webp', 100, '2024-08-10 19:52:54', '2024-08-10 19:52:54'),
(52, 22, '20240810075254djg8qgkwmr.webp', 'webp', 100, '2024-08-10 19:52:54', '2024-08-10 19:52:54'),
(53, 22, '20240810075254jwljzsiaaq.webp', 'webp', 100, '2024-08-10 19:52:54', '2024-08-10 19:52:54'),
(54, 22, '20240810075254l9ccbpc8aq.webp', 'webp', 100, '2024-08-10 19:52:54', '2024-08-10 19:52:54'),
(55, 23, '20240810075357zndv3ocv3q.webp', 'webp', 100, '2024-08-10 19:53:57', '2024-08-10 19:53:57'),
(56, 23, '20240810075357thqzjjz5aw.webp', 'webp', 100, '2024-08-10 19:53:57', '2024-08-10 19:53:57'),
(57, 23, '202408100753571svkj5jbvj.webp', 'webp', 100, '2024-08-10 19:53:57', '2024-08-10 19:53:57'),
(58, 23, '20240810075357gropixtrsi.webp', 'webp', 100, '2024-08-10 19:53:57', '2024-08-10 19:53:57'),
(59, 25, '20240810075703grsuoyqmn2.webp', 'webp', 100, '2024-08-10 19:57:03', '2024-08-10 19:57:03'),
(60, 25, '20240810075703pgftfzbdnl.webp', 'webp', 100, '2024-08-10 19:57:03', '2024-08-10 19:57:03'),
(61, 25, '20240810075703nyy38fgvrw.webp', 'webp', 100, '2024-08-10 19:57:03', '2024-08-10 19:57:03'),
(62, 25, '20240810075703cwutio1unk.webp', 'webp', 100, '2024-08-10 19:57:03', '2024-08-10 19:57:03'),
(63, 26, '20240810075752iy2iunhnyu.webp', 'webp', 100, '2024-08-10 19:57:52', '2024-08-10 19:57:52'),
(64, 26, '20240810075752e8i0ohvxhn.webp', 'webp', 100, '2024-08-10 19:57:52', '2024-08-10 19:57:52'),
(65, 26, '20240810075752sytpgcaym7.webp', 'webp', 100, '2024-08-10 19:57:52', '2024-08-10 19:57:52'),
(66, 26, '20240810075752ymi3zvtkzb.webp', 'webp', 100, '2024-08-10 19:57:52', '2024-08-10 19:57:52'),
(67, 27, '20240810075919qkp0cafvhe.webp', 'webp', 100, '2024-08-10 19:59:19', '2024-08-10 19:59:19'),
(68, 27, '20240810075919trxlrxkctx.webp', 'webp', 100, '2024-08-10 19:59:19', '2024-08-10 19:59:19'),
(69, 27, '20240810075919kynnxyajxz.webp', 'webp', 100, '2024-08-10 19:59:19', '2024-08-10 19:59:19'),
(70, 27, '20240810075919bd4z5wayyh.webp', 'webp', 100, '2024-08-10 19:59:19', '2024-08-10 19:59:19'),
(71, 28, '202408100800577ffmj2sndx.webp', 'webp', 100, '2024-08-10 20:00:57', '2024-08-10 20:00:57'),
(72, 28, '202408100800577xarlcpryv.webp', 'webp', 100, '2024-08-10 20:00:57', '2024-08-10 20:00:57'),
(73, 28, '20240810080057fph52bzowx.webp', 'webp', 100, '2024-08-10 20:00:57', '2024-08-10 20:00:57'),
(74, 28, '20240810080057gxnq9blcyw.webp', 'webp', 100, '2024-08-10 20:00:57', '2024-08-10 20:00:57'),
(75, 29, '20240810080146tpslpeve6o.webp', 'webp', 100, '2024-08-10 20:01:46', '2024-08-10 20:01:46'),
(76, 29, '20240810080146j82xmdt5lc.webp', 'webp', 100, '2024-08-10 20:01:46', '2024-08-10 20:01:46'),
(77, 29, '20240810080146gz6qguknx0.webp', 'webp', 100, '2024-08-10 20:01:46', '2024-08-10 20:01:46'),
(78, 29, '20240810080146egedewedje.webp', 'webp', 100, '2024-08-10 20:01:46', '2024-08-10 20:01:46'),
(79, 30, '20240810080300zksgnmyus1.webp', 'webp', 100, '2024-08-10 20:03:00', '2024-08-10 20:03:00'),
(80, 30, '20240810080300qk2qfsihef.webp', 'webp', 100, '2024-08-10 20:03:00', '2024-08-10 20:03:00'),
(81, 30, '202408100803007tzgytirue.webp', 'webp', 100, '2024-08-10 20:03:00', '2024-08-10 20:03:00'),
(82, 30, '202408100803000ffd3iqzxg.webp', 'webp', 100, '2024-08-10 20:03:00', '2024-08-10 20:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_desc` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `name`, `slug`, `featured_image`, `banner_image`, `meta_title`, `meta_keyword`, `meta_desc`, `status`, `is_delete`, `created_by`, `created_at`, `updated_at`) VALUES
(7, 6, 'Cosmetic Boxes', 'cosmetic-boxes', '20240823082552zgzzx12j4f.webp', '2024082308255211vdpadpvc.webp', 'Cosmetic Boxes', 'Cosmetic Boxes', 'Cosmetic Boxes\r\nCosmetic Boxes\r\nCosmetic Boxes\r\nCosmetic Boxes\r\nCosmetic Boxes\r\nCosmetic Boxes\r\nCosmetic Boxes\r\nCosmetic Boxes\r\nCosmetic Boxes\r\nCosmetic Boxes', 0, 0, 1, '2024-08-06 21:03:37', '2024-08-23 20:25:52'),
(8, 6, 'Retail Boxes', 'retail-boxes', '20240823082617cpcjwn1ivo.webp', '20240823082617lv7qgun7wg.webp', 'Retail Boxes', 'Retail Boxes', 'Retail Boxes\r\nRetail Boxes\r\nRetail Boxes\r\nRetail Boxes\r\nRetail Boxes\r\nRetail Boxes\r\nRetail Boxes\r\nRetail Boxes', 0, 0, 1, '2024-08-06 21:03:55', '2024-08-23 20:26:17'),
(9, 6, 'Food Boxes', 'food-boxes', '20240823083054w78qccd0z5.webp', '20240823083054vqblzup3mk.webp', 'Food Boxes', 'Food Boxes', 'Food Boxes\r\nFood Boxes\r\nFood Boxes\r\nFood Boxes\r\nFood Boxes\r\nFood Boxes\r\nFood Boxes\r\nFood Boxes\r\nFood Boxes\r\nFood Boxes\r\nFood Boxes', 0, 0, 1, '2024-08-06 21:04:14', '2024-08-23 20:30:54'),
(10, 6, 'Sports Boxes', 'sports-boxes', '202408230830337sgerfjvii.webp', '20240823083033blvfpir7bd.webp', 'Sports Boxes', 'Sports Boxes', 'Sports Boxes\r\nSports Boxes\r\nSports Boxes\r\nSports Boxes\r\nSports Boxes\r\nSports Boxes\r\nSports Boxes\r\nSports Boxes\r\nSports Boxes\r\nSports Boxes', 0, 0, 1, '2024-08-06 21:04:28', '2024-08-23 20:30:33'),
(11, 6, 'Stationery Boxes', 'stationery-boxes', '20240823083009zk14itjh9v.webp', '20240823083009ybye5s6uz9.webp', 'Stationery Boxes', 'Stationery Boxes', 'Stationery Boxes\r\nStationery Boxes\r\nStationery Boxes\r\nStationery Boxes\r\nStationery Boxes\r\nStationery Boxes\r\nStationery Boxes\r\nStationery Boxes\r\nStationery Boxes\r\nStationery Boxes\r\nStationery Boxes\r\nStationery Boxes\r\nStationery Boxes', 0, 0, 1, '2024-08-06 21:04:46', '2024-08-23 20:30:09'),
(12, 6, 'Healthcare Products', 'healthcare-products', '20240823082942d4ifp6bvxq.webp', '20240823082942koxconlhmd.webp', 'Healthcare Products', 'Healthcare Products', 'Healthcare Products\r\nHealthcare Products\r\nHealthcare Products\r\nHealthcare Products\r\nHealthcare Products\r\nHealthcare Products\r\nHealthcare Products\r\nHealthcare Products\r\nHealthcare Products\r\nHealthcare Products\r\nHealthcare Products', 0, 0, 1, '2024-08-06 21:05:15', '2024-08-23 20:29:42'),
(13, 6, 'Essential Oil Boxes', 'essential-oil-boxes', '20240823082915xi80st4smq.webp', '20240823082915dqfe8mhuag.webp', 'Essential Oil Boxes', 'Essential Oil Boxes', 'Essential Oil Boxes\r\nEssential Oil Boxes\r\nEssential Oil Boxes\r\nEssential Oil Boxes\r\nEssential Oil Boxes\r\nEssential Oil Boxes\r\nEssential Oil Boxes\r\nEssential Oil Boxes\r\nEssential Oil Boxes\r\nEssential Oil Boxes\r\nEssential Oil Boxes\r\nEssential Oil Boxes\r\nEssential Oil Boxes\r\nEssential Oil Boxes\r\nEssential Oil Boxes\r\nEssential Oil Boxes\r\nEssential Oil Boxes\r\nEssential Oil Boxes', 0, 0, 1, '2024-08-06 21:05:40', '2024-08-23 20:29:15'),
(14, 6, 'Jewelry Boxes', 'jewelry-boxes', '202408230828430zzvsjumzj.webp', '20240823082843na8w0x1dyd.webp', 'Jewelry Boxes', 'Jewelry Boxes', 'Jewelry Boxes\r\nJewelry Boxes\r\nJewelry Boxes\r\nJewelry Boxes\r\nJewelry Boxes\r\nJewelry Boxes\r\nJewelry Boxes\r\nJewelry Boxes\r\nJewelry Boxes\r\nJewelry Boxes\r\nJewelry Boxes\r\nJewelry Boxes\r\nJewelry Boxes', 0, 0, 1, '2024-08-06 21:05:57', '2024-08-23 20:28:43'),
(15, 6, 'Tobacco Boxes', 'tobacco-boxes', '20240823082802ifd5o4kqqz.webp', '202408230828028lsqwg9t4x.webp', 'Tobacco Boxes', 'Tobacco Boxes', 'Tobacco Boxes\r\nTobacco Boxes\r\nTobacco Boxes\r\nTobacco Boxes\r\nTobacco Boxes\r\nTobacco Boxes\r\nTobacco Boxes\r\nTobacco Boxes\r\nTobacco Boxes\r\nTobacco Boxes\r\nTobacco Boxes\r\nTobacco Boxes\r\nTobacco Boxes', 0, 0, 1, '2024-08-06 21:06:12', '2024-08-23 20:28:02'),
(16, 6, 'CBD Boxes', 'cbd-boxes', '20240823082742vhtuhog55e.webp', '20240823082742el6ieqtl2g.webp', 'CBD Boxes', 'CBD Boxes', 'CBD Boxes\r\nCBD Boxes\r\nCBD Boxes\r\nCBD Boxes\r\nCBD Boxes\r\nCBD Boxes\r\nCBD Boxes\r\nCBD Boxes\r\nCBD Boxes\r\nCBD Boxes\r\nCBD Boxes\r\nCBD Boxes', 0, 0, 1, '2024-08-06 21:06:29', '2024-08-23 20:27:42'),
(17, 6, 'Vape Boxes', 'vape-boxes', '20240823082708fe19amxll9.webp', '20240823082708zsprrt0rao.webp', 'Vape Boxes', 'Vape Boxes', 'Vape Boxes\r\nVape Boxes\r\nVape Boxes\r\nVape Boxes\r\nVape Boxes\r\nVape Boxes\r\nVape Boxes\r\nVape Boxes\r\nVape Boxes\r\nVape Boxes\r\nVape Boxes\r\nVape Boxes', 0, 0, 1, '2024-08-06 21:06:48', '2024-08-23 20:27:08'),
(18, 6, 'Apperal Boxes', 'apperal-boxes', '20240823082643efkyamnoiq.webp', '20240823082643d9fawe5uef.webp', 'Apperal Boxes', 'Apperal Boxes', 'Apperal Boxes\r\nApperal Boxes\r\nApperal Boxes\r\nApperal Boxes\r\nApperal Boxes\r\nApperal Boxes\r\nApperal Boxes\r\nApperal Boxes\r\nApperal Boxes\r\nApperal Boxes\r\nApperal Boxes\r\nApperal Boxes\r\nApperal Boxes\r\nApperal Boxes\r\nApperal Boxes', 0, 0, 1, '2024-08-06 21:07:03', '2024-08-23 20:26:43'),
(19, 6, 'Bakery Boxes', 'bakery-boxes', '202408230825231j02xev9cs.webp', '20240823082523lyjbgovtwe.webp', 'Bakery Boxes', 'Bakery Boxes', 'Bakery Boxes\r\nBakery Boxes\r\nBakery Boxes\r\nBakery Boxes\r\nBakery Boxes\r\nBakery Boxes\r\nBakery Boxes\r\nBakery Boxes\r\nBakery Boxes\r\nBakery Boxes\r\nBakery Boxes\r\nBakery Boxes\r\nBakery Boxes\r\nBakery Boxes\r\nBakery Boxes\r\nBakery Boxes\r\nBakery Boxes\r\nBakery Boxes', 0, 0, 1, '2024-08-06 21:07:21', '2024-08-23 20:25:23'),
(20, 6, 'Mylar Bags', 'mylar-bags', '20240823082506hgskktutwg.webp', '20240823082506wmprbdzfpr.webp', 'Mylar Bags', 'Mylar Bags', 'Mylar Bags\r\nMylar Bags\r\nMylar Bags\r\nMylar Bags\r\nMylar Bags\r\nMylar Bags\r\nMylar Bags\r\nMylar Bags\r\nMylar Bags\r\nMylar Bags\r\nMylar Bags\r\nMylar Bags\r\nMylar Bags\r\nMylar Bags\r\nMylar Bags\r\nMylar Bags', 0, 0, 1, '2024-08-06 21:07:40', '2024-08-23 20:25:06'),
(21, 7, 'Flip Top Boxes', 'flip-top-boxes', '20240823082439lalcuecze1.webp', '20240823082439clgdpcxvyz.webp', 'Flip Top Boxes', 'Flip Top Boxes', 'Flip Top Boxes\r\nFlip Top Boxes\r\nFlip Top Boxes\r\nFlip Top Boxes\r\nFlip Top Boxes\r\nFlip Top Boxes\r\nFlip Top Boxes\r\nFlip Top Boxes\r\nFlip Top Boxes\r\nFlip Top Boxes\r\nFlip Top Boxes', 0, 0, 1, '2024-08-06 21:08:22', '2024-08-23 20:24:39'),
(22, 7, 'Display Boxes', 'display-boxes', '20240823082418r2n2wsfplq.webp', '20240823082418mb0p41ms27.webp', 'Display Boxes', 'Display Boxes', 'Display Boxes\r\nDisplay Boxes\r\nDisplay Boxes\r\nDisplay Boxes\r\nDisplay Boxes\r\nDisplay Boxes\r\nDisplay Boxes\r\nDisplay Boxes\r\nDisplay Boxes\r\nDisplay Boxes\r\nDisplay Boxes\r\nDisplay Boxes\r\nDisplay Boxes\r\nDisplay Boxes\r\nDisplay Boxes\r\nDisplay Boxes\r\nDisplay Boxes\r\nDisplay Boxes\r\nDisplay Boxes\r\nDisplay Boxes', 0, 0, 1, '2024-08-06 21:08:37', '2024-08-23 20:24:18'),
(23, 7, 'Mailer Boxes', 'mailer-boxes', '20240823082357agccmbxvlv.webp', '20240823082357gitwhpny47.webp', 'Mailer Boxes', 'Mailer Boxes', 'Mailer Boxes\r\nMailer Boxes\r\nMailer Boxes\r\nMailer Boxes\r\nMailer Boxes\r\nMailer Boxes\r\nMailer Boxes\r\nMailer Boxes\r\nMailer Boxes\r\nMailer Boxes\r\nMailer Boxes\r\nMailer Boxes\r\nMailer Boxes\r\nMailer Boxes', 0, 0, 1, '2024-08-06 21:08:56', '2024-08-23 20:23:57'),
(24, 7, 'Shipping Boxes', 'shipping-boxes', '20240823082253wjtxujchzu.webp', '20240823082253wuv4dagf9o.webp', 'Shipping Boxes', 'Shipping Boxes', 'Shipping Boxes\r\nShipping Boxes\r\nShipping Boxes\r\nShipping Boxes\r\nShipping Boxes\r\nShipping Boxes\r\nShipping Boxes\r\nShipping Boxes\r\nShipping Boxes\r\nShipping Boxes\r\nShipping Boxes\r\nShipping Boxes\r\nShipping Boxes', 0, 0, 1, '2024-08-06 21:09:10', '2024-08-23 20:22:53'),
(25, 8, 'Rigid Boxes', 'rigid-boxes', '20240823082223npcoh6ahpj.webp', '202408230822230zjazuduh3.webp', 'Rigid Boxes', 'Rigid Boxes', 'Rigid Boxes\r\nRigid Boxes\r\nRigid Boxes\r\nRigid Boxes\r\nRigid Boxes\r\nRigid Boxes\r\nRigid Boxes\r\nRigid Boxes\r\nRigid Boxes\r\nRigid Boxes\r\nRigid Boxes', 0, 0, 1, '2024-08-06 21:09:26', '2024-08-23 20:22:23'),
(26, 8, 'Kraft Boxes', 'kraft-boxes', '20240823082137eehkavjjqs.webp', '202408230821377wupdjb3g2.webp', 'Kraft Boxes', 'Kraft Boxes', 'Kraft Boxes\r\nKraft Boxes\r\nKraft Boxes\r\nKraft Boxes\r\nKraft Boxes\r\nKraft Boxes\r\nKraft Boxes\r\nKraft Boxes\r\nKraft Boxes\r\nKraft Boxes\r\nKraft Boxes\r\nKraft Boxes', 0, 0, 1, '2024-08-06 21:09:41', '2024-08-23 20:21:37'),
(27, 8, 'Cardboard Boxes', 'cardboard-boxes', '20240823082111rolhbhgbo2.webp', '20240823082111k4niwo4tae.webp', 'Cardboard Boxes', 'Cardboard Boxes', 'Cardboard Boxes\r\nCardboard Boxes\r\nCardboard Boxes\r\nCardboard Boxes\r\nCardboard Boxes\r\nCardboard Boxes\r\nCardboard Boxes\r\nCardboard Boxes\r\nCardboard Boxes\r\nCardboard Boxes', 0, 0, 1, '2024-08-06 21:09:55', '2024-08-23 20:21:11'),
(28, 8, 'Corrugated Boxes', 'corrugated-boxes', '20240823082047uzx1jlikul.webp', '202408230820479uhjozbooz.webp', 'Corrugated Boxes', 'Corrugated Boxes', 'Corrugated Boxes\r\nCorrugated Boxes\r\nCorrugated Boxes\r\nCorrugated Boxes\r\nCorrugated Boxes\r\nCorrugated Boxes\r\nCorrugated Boxes\r\nCorrugated Boxes\r\nCorrugated Boxes\r\nCorrugated Boxes\r\nCorrugated Boxes', 0, 0, 1, '2024-08-06 21:10:10', '2024-08-23 20:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:custmer, 1:admin\r\n',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:active, 1:inactive',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: not, 1: Deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_admin`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2024-07-24 20:45:18', '$2y$10$d12YoT/LTrlrk/lr6QyNxuLKi1Vk0DsHjKDc6AdwCQOYhreAQqjoG', 'H7gFDCLlOGZoTykNQF4f1o8VPGk0fYCETFjzU8WPoPKzXIBN4bvyNxg8kv3x', 1, 0, 0, '2024-07-24 20:39:06', '2024-07-24 20:45:18'),
(4, 'test', 'test@admin.com', NULL, '$2y$10$6akamQLFf0UjjhMaVt1qMeHhtLikTMpFSI5wrle3tecuR54xtiI6C', '1NsoD4Jng6blBDLmqDZ4qTAsyGar3sifGV7IEnYG', 1, 0, 0, '2024-07-26 01:45:05', '2024-07-26 20:18:15'),
(5, 'admin2', 'admin2@gmail.com', NULL, '$2y$10$ZvWHh1CkZu0CsSDhAhzDduXzesPeR0pHh4KimL9/oSXKteCYbcNuu', 'llVjjsNWCyvIOe8B8IwuYGVWYVkcHieEc8OhpjyG', 1, 0, 1, '2024-07-26 02:02:37', '2024-07-26 20:18:58'),
(6, 'test3', 'test3@gmail.com', '2024-07-26 20:44:36', '$2y$10$wJRv/Q6270wXeoEju9huT.MsaLkT885CZ4FFZXsygIQW4qj4gLvoa', 'zlKr2nnaS3xpNZAbLsP7K4qAqgcuY5HpTBlfV0UA', 1, 0, 0, '2024-07-26 02:02:56', '2024-07-26 20:44:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_quote`
--
ALTER TABLE `custom_quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `instant_quote`
--
ALTER TABLE `instant_quote`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `custom_quote`
--
ALTER TABLE `custom_quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instant_quote`
--
ALTER TABLE `instant_quote`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
