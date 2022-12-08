-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2022 at 08:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baby_care`
--
CREATE DATABASE IF NOT EXISTS `baby_care` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `baby_care`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` bigint(20) NOT NULL,
  `admin_psw` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_pic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_address_line1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_address_line2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_state` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_pin_code` bigint(20) NOT NULL,
  `admin_varification_question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_varification_answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_id`, `admin_name`, `admin_email`, `admin_phone`, `admin_psw`, `admin_pic`, `admin_address_line1`, `admin_address_line2`, `admin_city`, `admin_state`, `admin_pin_code`, `admin_varification_question`, `admin_varification_answer`, `admin_status`, `created_at`, `updated_at`) VALUES
(1, 'Teena', 'teena@gmail.com', 6354083921, 'teena', '1664989873baby_care_admin.jpg', 'shree nathji marg', 'govardhan nagar', 'jetpur', 'gujarat', 360370, 'What is your date of birth?', '28-04-1996', 1, '2022-10-02 05:35:05', '2022-10-05 11:41:13'),
(2, 'Prajesh', 'prajesh@gmail.com', 7016053334, 'prajesh', '1664708872baby_care_admin.jpg', 'shanti nagar', 'behind bosamiya college', 'jetpur', 'gujarat', 360370, 'What was your first car?', 'MG Hector', 1, '2022-10-02 05:37:52', '2022-10-02 05:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `brand_logo`, `brand_status`, `created_at`, `updated_at`) VALUES
(1, 'Mamaearth', '1664785727brands.png', 1, '2022-10-03 02:58:47', '2022-10-03 02:58:47'),
(2, 'Himalaya', '1664785793brands.jpg', 1, '2022-10-03 02:59:53', '2022-10-03 02:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `pro_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `pro_id`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 2, '1', 399, '2022-10-05 01:40:15', '2022-10-05 01:40:15'),
(2, 2, '2', 848, '2022-10-05 01:40:41', '2022-10-05 01:40:41'),
(3, 2, ',1,2', 848, '2022-10-05 01:46:36', '2022-10-05 01:46:36'),
(4, 2, ',1-1,2-1', 848, '2022-10-05 01:47:35', '2022-10-05 01:47:35'),
(5, 2, ',1-1,2-1', 848, '2022-10-05 01:50:50', '2022-10-05 01:50:50'),
(6, 2, ',1-5', 1995, '2022-10-05 01:55:40', '2022-10-05 01:55:40'),
(7, 2, ',2-1', 449, '2022-10-05 02:04:56', '2022-10-05 02:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_img`, `cat_status`, `created_at`, `updated_at`) VALUES
(1, 'Lotion', '1664781501category.jpg', 1, '2022-10-03 01:48:21', '2022-10-03 01:48:21'),
(2, 'Sampoo', '1664781813category.jpg', 1, '2022-10-03 01:53:33', '2022-10-03 01:53:33'),
(3, 'Cream', '1664781981category.jpg', 1, '2022-10-03 01:56:21', '2022-10-03 01:56:21'),
(4, 'BodyWash', '1664783925category.jpg', 1, '2022-10-03 02:28:45', '2022-10-03 02:28:45'),
(5, 'HairOil', '1664784168category.jpg', 1, '2022-10-03 02:32:49', '2022-10-03 02:32:49'),
(6, 'SunScreen', '1664784387category.jpg', 1, '2022-10-03 02:36:27', '2022-10-03 02:36:27'),
(8, 'MassageOil', '1664979500category.jpg', 1, '2022-10-05 08:48:20', '2022-10-05 08:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_id` bigint(20) UNSIGNED NOT NULL,
  `con_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con_sub` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `con_messege` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `con_name`, `con_email`, `con_sub`, `con_messege`, `created_at`, `updated_at`) VALUES
(1, 'Vidhi', 'vidhi@gmail.com', 'about more brands', 'we love this site but can your provide more brands for lovely babies. Thank You', '2022-10-05 11:47:39', '2022-10-05 11:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` bigint(20) UNSIGNED NOT NULL,
  `pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feed_sub` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feed_messege` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feed_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `pro_id`, `user_id`, `feed_sub`, `feed_messege`, `feed_status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Shampoo', 'very good product for babies.', 1, '2022-10-04 06:32:09', '2022-10-04 06:32:25'),
(2, 5, 2, 'body wash', 'It\'s really tear free product.', 1, '2022-10-05 11:30:09', '2022-10-05 11:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_09_13_115051_create_cart_table', 1),
(5, '2022_09_13_115249_create_category_table', 2),
(6, '2022_09_13_115347_create_brand_table', 2),
(7, '2022_09_13_115653_create_product_table', 2),
(8, '2022_09_13_120154_create_contact_table', 2),
(9, '2022_09_13_120355_create_feedback_table', 2),
(10, '2022_09_13_120812_create_user_details_table', 2),
(11, '2022_09_13_121532_create_rating_table', 2),
(12, '2022_09_13_121722_create_admin_details_table', 2),
(13, '2022_09_14_102911_create_product_table', 3),
(14, '2022_09_18_154445_create_user_details_table', 4),
(15, '2022_09_18_154629_create_user_details_table', 5),
(16, '2022_09_18_164208_create_admin_details_table', 6),
(17, '2022_10_02_070527_create_product_table', 7),
(18, '2022_10_02_072026_create_product_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `pro_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_price` bigint(20) NOT NULL,
  `pro_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_unit` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `cat_id`, `brand_id`, `pro_name`, `pro_price`, `pro_img`, `pro_unit`, `pro_description`, `pro_status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Gentle Cleansing Shampoo', 399, '1664786242product.jpg', '400', 'It is enriched with the goodness of Coconut-based cleansers and Jojoba Oil. They help nourish the skin and increase its moisture content. It is Tear-free, gentle yet efficient, with a 5.6 pH level – best suited for baby skin.', 1, '2022-10-03 03:07:22', '2022-10-03 03:07:22'),
(2, 2, 1, 'Milky Soft Shampoo with Oats, Milk and Calendula', 449, '1664786481product.jpg', '400', 'Hair as soft as a feather and as smooth as silk! All thanks to the nourishing and conditioning natural ingredients present in the Milky Soft Shampoo. Say hello to your baby’s healthy, bouncy and silky hair. Flakey and itchy scalp don’t stand a chance with safe and gentle Milky Soft Shampoo! Oats, Milk and Calendula come together to nourish the scalp after every wash, leaving you with a happy baby who loves bath time. Splish splash, it’s your munchkin’s bath time. Cleanse your baby’s scalp and hair gently, keeping them healthy. Don’t worry about spill-ups either as the shampoo is tear-free. So, say goodbye to tears and say hello to clean and fresh-smelling hair.', 1, '2022-10-03 03:11:21', '2022-10-03 03:11:21'),
(3, 5, 1, 'Nourishing Hair Oil for Babies with Almond Oil', 399, '1664786666product.jpg', '200', 'With a blend of 100% natural & nourishing ingredients such as Almond, Argan, Avocado oil and more, this oil helps in nourishing the scalp & aids in the growth of healthier hair. A wholesome nourishment for your baby\'s head, from scalp to the tip of their hair, the oil is everything your baby needs for healthy & soft hair. An effective combination of Almond and Coconut Oil soothes irritation and comforts scalp with cradle cap. Enriched with Vitamin E, it moisturizes and loosens cradle cap while nourishing the scalp', 1, '2022-10-03 03:14:26', '2022-10-03 03:14:26'),
(4, 4, 1, 'Milky Soft Body Wash', 499, '1664973662product.jpg', '400', 'It has anti-inflammatory properties which help soothe the baby\'s skin. It also helps maintain moisture, and hydrates the skin.\r\nMamaearth Milky Soft Body Wash with Milk Protein Milk Protein: It keeps skin hydrated and keeps the moisture content intact. It also reduces allergic infections like rashes.\r\nBaby Body Wash with Calendula Calendula: It is rich in Vitamin E & amino acids, which deeply nourishes the skin. It also has anti-fungal, antioxidant & anti-inflammatory benefits.\r\nMamaearth Baby Body Wash with Citric Acid Citric Acid: It helps cleans the skin properly but gently. It also helps in maintaining the optimum pH level of the skin.', 1, '2022-10-05 07:11:02', '2022-10-05 07:11:02'),
(5, 4, 1, 'Deeply Nourishing', 399, '1664973853product.jpg', '400', 'Coconut Oil : It reduces the chances of developing irritation or inflammation on the skin. It increases moisture retention and prevents the skin from becoming too dry.\r\nBaby body wash Orange Essential Oil Orange Essential Oil : It is an antiseptic and an anti-inflammatory ingredient. Vitamin C present in this oil helps in protecting and healing the skin.\r\nBest baby body wash in India with Jojoba Oil Jojoba Oil : It is rich in essential Vitamins and Minerals, including Vitamins E and B-complex, Zinc, Copper, Selenium, Chromium, and Iodine, which provide nourishment to baby’s skin.\r\nDeeply Nourishing Body Wash for babies with aloe vera extract Aloe Vera Extract : It is a gel extracted from plants, and has immense powers to heal and moisturize the skin while being gentle', 1, '2022-10-05 07:14:13', '2022-10-05 07:14:13'),
(6, 1, 1, 'Moisturizing Daily Lotion', 199, '1664978769product.jpg', '200', 'Shea Butter : It nourishes the skin from within while moisturizing it deeply.\r\nmamaearth Moisturizing Daily Lotion with Cocoa Butter Cocoa Butter : It is an excellent remedy for naturally healing any damaged or dry skin.\r\nMamaearth baby lotion for skin whitening with Calendula Extract Calendula Extract : It is anti-bacterial, anti-fungal, and anti-inflammatory, making it ideal for reducing excessive skin dryness and rashes.\r\nbaby body lotion with Aloe Vera Extract Aloe Vera Extract : It soothes the skin while healing any damage due to weather like being too dry or too hot.Deeply Nourishes|Relieves Dryness| Irritation-Free', 1, '2022-10-05 08:36:09', '2022-10-05 08:36:09'),
(7, 2, 2, 'gentle baby shampoo', 190, '1664979124product.jpg', '200', 'Chickpea : Chickpea helps nourish and gives shine to hair.\r\n\r\nHibiscus : Hibiscus, A well-known hair conditioner, Hibiscus helps moisturize baby\'s hair.\r\n\r\nKhus Grass :-  Khus Grass A revered herb for its cooling, antibacterial and antifungal properties.\r\nSoftens, nourishes, and improves hair luster\r\n\r\nHimalaya Gentle Baby Shampoo is a mild, “no tears\" shampoo that gently cleanses hair making it soft, shiny, and easy to manage.', 1, '2022-10-05 08:42:04', '2022-10-05 08:42:04'),
(8, 5, 2, 'Baby Hair Oil', 220, '1664979345product.jpg', '200', 'Himalaya Baby Hair Oil is specially formulated for babies, enriched with Amla, gotukola, and Bhringaraja to nourish hair and make it soft and healthy.', 1, '2022-10-05 08:45:45', '2022-10-05 08:45:45'),
(9, 8, 2, 'Himalaya Face Body Massage Oil', 400, '1664979676product.jpg', '500', 'Daily massage with Himalaya Baby Massage Oil helps improve your baby\'s growth and development. The light and non-staining formula of the oil has dual benefits and can be used for massaging before bathing and for moisturizing after bathing.', 1, '2022-10-05 08:51:16', '2022-10-05 08:51:16'),
(10, 3, 2, 'Himalaya Baby Day Cream', 180, '1664979808product.jpg', '200', 'Himalaya Baby Cream is specially formulated to protect your little one\'s chapped cheeks, \'crawler\'s knee\', tender nose, and rubbed elbows. Our Baby Cream has soothing effect on baby\'s skin. The key ingredients work to moisturize along with preserving the natural softness of your baby\'s skin.', 1, '2022-10-05 08:53:28', '2022-10-05 08:53:28'),
(11, 1, 2, 'Himalaya Refreshing Baby Lotion', 240, '1664979997product.jpg', '400', 'Himalaya Refreshing Baby Lotion is a light, non-greasy, fast absorbing formulation specially made to refresh, hydrate and protect baby’s skin from dryness. This pH balanced lotion keeps baby’s skin soft, refreshed and is ideal for summer months.', 1, '2022-10-05 08:56:37', '2022-10-05 08:56:37'),
(12, 3, 1, 'Milky Soft Natural Baby Face Cream', 199, '1664980426product.jpg', '50', 'Skin protectant moisturizer: It is specially formulated with care for delicate, soft and sensitive skin of babies. It also soothes and intensely moisturizes baby’s itchy and extra dry skin.', 1, '2022-10-05 09:03:46', '2022-10-05 09:04:09'),
(13, 4, 2, 'Himalaya Refreshing Baby Wash', 200, '1664980629product.jpg', '400', 'Himalaya Refreshing Baby Wash has ingredients with cooling, refreshing and antibacterial properties cleanses and refreshes your baby\'s skin. Our baby wash is designed for use in summer', 1, '2022-10-05 09:07:09', '2022-10-05 09:07:09'),
(14, 8, 1, 'Mamaearth Coco Soft Massage Oil', 399, '1664980800product.jpg', '200', 'DEEPLY MOISTURIZES SKIN: Crafted with Coconut Oil, Coco Soft Massage Oil deeply moisturizes your baby’s delicate skin & keeps it nourished all day long.\r\nSOOTHES ITCHINESS: Our Coco Soft Massage Oil is enriched with Turmeric that soothes itchiness and safeguards your baby’s skin from infections.\r\nNON-STICKY FORMULA: The mild and non-sticky formula helps the oil get absorbed into the skin quickly without leaving any residue or stickiness.\r\nMADE SAFE CERTIFIED: The Coco Soft Massage Oil has been tested and certified by Made Safe, making it suitable for all skin types.', 1, '2022-10-05 09:10:00', '2022-10-05 09:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rate_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `rate_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` bigint(20) NOT NULL,
  `user_psw` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_pic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address_line1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address_line2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_state` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_pin_code` bigint(20) NOT NULL,
  `user_varification_question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_varification_answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_psw`, `user_pic`, `user_address_line1`, `user_address_line2`, `user_city`, `user_state`, `user_pin_code`, `user_varification_question`, `user_varification_answer`, `user_status`, `created_at`, `updated_at`) VALUES
(1, 'Astha', 'astha@gmail.com', 6352412030, 'raval', '', 'Navagadh ,', 'street number 1,', 'Jetpur', 'Gujarat', 360370, 'What is your favorite food?', 'Maggie', 1, '2022-10-03 08:41:40', '2022-10-05 05:27:43'),
(2, 'Zarana', 'zarana@gmail.com', 3020105040, 'zarana', '', 'Laxmi Nagar,', 'street 1,', 'jetpur', 'Gujarat', 360370, 'What is your favorite food?', 'Pizza', 1, '2022-10-04 05:42:39', '2022-10-05 11:24:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rate_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
