-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 06:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_listing`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `content` longtext DEFAULT NULL,
  `blog_image` varchar(255) DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `blog_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `summary`, `content`, `blog_image`, `meta_keywords`, `meta_description`, `blog_category_id`, `created_at`, `updated_at`) VALUES
(1, 'Navigating Higher Ed: A Comprehensive Guide to College Applications', 'navigating-higher-ed-college-applications', 'Learn the ins and outs of the college application process,\n         from selecting the right schools to crafting compelling essays', 'This blog series will break down each step of applying to college, \n        offering practical tips and advice to help students successfully navigate this important journey', 'blog_image/blog1.jpg', 'This blog series will break down each step of applying to college, \n        offering practical tips and advice to help students successfully navigate this important journey', 'This blog series will break down each step of applying to college, \n        offering practical tips and advice to help students successfully navigate this important journey', 1, '2024-04-21 10:43:38', '2024-04-21 10:43:38'),
(2, 'Decoding Financial Aid: Understanding Your Options for College Funding', 'decoding-financial-aid-college-funding', 'Unravel the complexities of financial aid, \n        scholarships, and grants to make college more affordable.', 'This series will provide clarity on the various forms of financial assistance available to students,\n         empowering them to make informed decisions about financing their college education.', 'blog_image/blog2.jpg', 'This series will provide clarity on the various forms of financial assistance available to students, \n        empowering them to make informed decisions about financing their college education.', 'This series will provide clarity on the various forms of financial assistance available to students,\n        empowering them to make informed decisions about financing their college education.', 1, '2024-04-21 10:43:38', '2024-04-21 10:43:38'),
(3, 'College Life Unplugged: A Student\'s Guide to Thriving on Campus', 'college-life-unplugged-campus-guide', 'Discover strategies for academic success, \n        social integration, and personal well-being in the college environment.', 'From time management tips to campus resources, this blog series will equip students\n         with the knowledge and skills they need to thrive both academically and personally during their college years.', 'blog_image/blog3.jpg', 'From time management tips to campus resources, this blog series will equip students with the knowledge and \n        skills they need to thrive both academically and personally during their college years.', 'From time management tips to campus resources, this blog series will equip students with the knowledge and \n        skills they need to thrive both academically and personally during their college years.', 2, '2024-04-21 10:43:38', '2024-04-21 10:43:38'),
(4, 'Beyond the Classroom: Exploring Experiential Learning Opportunities in College', 'beyond-classroom-experiential-learning-college', ' Explore internship programs, study abroad opportunities, \n        and other hands-on experiences to enrich your college education.', 'This series will highlight the value of experiential learning in college and provide guidance on how students can leverage these opportunities to \n        enhance their skills, broaden their perspectives, and prepare for their future careers.', 'blog_image/blog4.jpg', 'This series will highlight the value of experiential learning in college and provide guidance on how students can leverage these opportunities to \n        enhance their skills, broaden their perspectives, and prepare for their future careers.', 'This series will highlight the value of experiential learning in college and provide guidance on how students can leverage these opportunities to \n        enhance their skills, broaden their perspectives, and prepare for their future careers.', 2, '2024-04-21 10:43:38', '2024-04-21 10:43:38'),
(5, 'College Survival Guide: Tips and Tricks for Navigating Freshman Year', 'college-survival-guide-freshman-year', 'Get practical advice on making a smooth transition to college life and overcoming common challenges faced by incoming freshmen.', 'From adjusting to dormitory living to managing academic expectations, this blog series will offer valuable insights and \n        actionable tips to help freshmen navigate their first year of college with confidence.', 'blog_image/blog5.jpg', 'From adjusting to dormitory living to managing academic expectations, this blog series will offer valuable insights \n        and actionable tips to help freshmen navigate their first year of college with confidence.', 'From adjusting to dormitory living to managing academic expectations, this blog series will offer valuable insights and \n        actionable tips to help freshmen navigate their first year of college with confidence.', 3, '2024-04-21 10:43:38', '2024-04-21 10:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Engineering', 'engineering', '2024-04-21 10:43:38', '2024-04-21 10:43:38'),
(2, 'Business Studies', 'business-studies', '2024-04-21 10:43:38', '2024-04-21 10:43:38'),
(3, 'Arts', 'arts', '2024-04-21 10:43:38', '2024-04-21 10:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `campuses`
--

CREATE TABLE `campuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campuses`
--

INSERT INTO `campuses` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Amedabad', 'amedabad', NULL, NULL),
(2, 'Pani Path', 'pani-path', NULL, NULL),
(3, 'Ladak', 'ladak', NULL, NULL),
(4, 'Kashmir', 'kashmir', NULL, NULL),
(5, 'Asam', 'asam', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campus_college`
--

CREATE TABLE `campus_college` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `campus_id` bigint(20) UNSIGNED NOT NULL,
  `college_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campus_college`
--

INSERT INTO `campus_college` (`id`, `campus_id`, `college_id`) VALUES
(1, 1, 9),
(2, 2, 9),
(3, 3, 9),
(4, 4, 9),
(5, 5, 9),
(6, 1, 1),
(7, 3, 1),
(8, 4, 1),
(9, 3, 2),
(10, 4, 2),
(11, 1, 3),
(12, 2, 3),
(13, 3, 3),
(14, 4, 3),
(15, 5, 3),
(16, 2, 4),
(17, 4, 4),
(18, 1, 5),
(19, 4, 5),
(20, 5, 5),
(21, 1, 6),
(22, 5, 7),
(23, 1, 8),
(24, 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category_icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `category_icon`, `created_at`, `updated_at`) VALUES
(1, 'Engineering', 'engineering', 'category_icon/engineering.jpg', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(2, 'Business Studies', 'business-studies', 'category_icon/business-studies.jpg', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(3, 'Arts', 'arts', 'category_icon/arts.jpg', '2024-04-21 10:43:37', '2024-04-21 10:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `about_college` longtext NOT NULL,
  `admisstion_current_time` longtext DEFAULT NULL,
  `schollership` longtext DEFAULT NULL,
  `faculty` longtext DEFAULT NULL,
  `hostel` longtext DEFAULT NULL,
  `thumbline` varchar(255) NOT NULL,
  `gallery` varchar(255) DEFAULT NULL,
  `brochuri` varchar(255) DEFAULT NULL,
  `placement` longtext DEFAULT NULL,
  `ranking_number` varchar(255) DEFAULT NULL,
  `type_of_college_id` varchar(255) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `publish` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `slug`, `summary`, `video_link`, `about_college`, `admisstion_current_time`, `schollership`, `faculty`, `hostel`, `thumbline`, `gallery`, `brochuri`, `placement`, `ranking_number`, `type_of_college_id`, `views`, `meta_keywords`, `meta_description`, `publish`, `created_at`, `updated_at`) VALUES
(1, 'Liberty University', 'liberty-university', 'Liberty University is a private Christian university located in Lynchburg, \r\n        Virginia. Known for its commitment to Christian values, Liberty offers a wide range of undergraduate \r\n        and graduate programs.', 'https://www.youtube.com/watch?v=1234567890', '<p>Liberty University offers a vibrant campus life with numerous student organizations, athletic teams, and spiritual growth opportunities. The university emphasizes academic excellence and provides a supportive environment for students to pursue their passions and achieve their goals</p>', '<p>Prospective students can apply online through the university website. Admission requirements vary by program, but all applicants are encouraged to submit their transcripts, standardized test scores, and letters of recommendation.</p>', '<p>Liberty University offers a range of scholarships and financial aid options to eligible students based on academic achievement, extracurricular involvement, and financial need.</p>', '<p>The faculty at Liberty University are experts in their respective fields and are dedicated to providing students with a high-quality education. They are committed to mentoring students both academically and spiritually.</p>', '<p>On-campus housing is available for students, with options ranging from traditional dormitories to apartment-style living. The university also offers dining facilities, study lounges, and recreational amenities.</p>', 'college_thumbline/college1.jpg', 'college_gallery/college2.jpg', NULL, '<p>Liberty University has a strong track record of helping students secure internships and job placements in their chosen fields. The university&#39;s Career Center provides resources and support to students throughout their job search process.</p>', '5', NULL, 4010, 'Liberty University, Christian university, undergraduate programs, \r\n        graduate programs, Lynchburg, Virginia, academic excellence, scholarships, faculty, placement.', 'Explore Liberty University, a leading Christian university in Lynchburg, Virginia, offering undergraduate and\r\n         graduate programs in a supportive and vibrant campus environment.', 1, '2024-04-21 10:43:38', '2024-04-21 10:52:35'),
(2, 'Evergreen University', 'evergreen-university', 'Liberty University is a private Christian university located in Lynchburg, \r\n        Virginia. Known for its commitment to Christian values, Liberty offers a wide range of undergraduate \r\n        and graduate programs.', 'https://www.youtube.com/watch?v=1234567890', '<p>Liberty University offers a vibrant campus life with numerous student organizations, athletic teams, and spiritual growth opportunities. The university emphasizes academic excellence and provides a supportive environment for students to pursue their passions and achieve their goals</p>', '<p>Prospective students can apply online through the university website. Admission requirements vary by program, but all applicants are encouraged to submit their transcripts, standardized test scores, and letters of recommendation.</p>', '<p>Liberty University offers a range of scholarships and financial aid options to eligible students based on academic achievement, extracurricular involvement, and financial need.</p>', '<p>The faculty at Liberty University are experts in their respective fields and are dedicated to providing students with a high-quality education. They are committed to mentoring students both academically and spiritually.</p>', '<p>On-campus housing is available for students, with options ranging from traditional dormitories to apartment-style living. The university also offers dining facilities, study lounges, and recreational amenities.</p>', 'college_thumbline/college2.jpg', 'college_gallery/college3.jpg', NULL, '<p>Liberty University has a strong track record of helping students secure internships and job placements in their chosen fields. The university&#39;s Career Center provides resources and support to students throughout their job search process.</p>', '6', NULL, 125, 'Liberty University, Christian university, undergraduate programs, \r\n        graduate programs, Lynchburg, Virginia, academic excellence, scholarships, faculty, placement.', 'Explore Liberty University, a leading Christian university in Lynchburg, Virginia, offering undergraduate and\r\n         graduate programs in a supportive and vibrant campus environment.', 1, '2024-04-21 10:43:38', '2024-04-21 10:53:04'),
(3, 'Pacific Shores College', 'pacific-shores-college', 'Liberty University is a private Christian university located in Lynchburg, \r\n        Virginia. Known for its commitment to Christian values, Liberty offers a wide range of undergraduate \r\n        and graduate programs.', 'https://www.youtube.com/watch?v=1234567890', '<p>Liberty University offers a vibrant campus life with numerous student organizations, athletic teams, and spiritual growth opportunities. The university emphasizes academic excellence and provides a supportive environment for students to pursue their passions and achieve their goals</p>', '<p>Prospective students can apply online through the university website. Admission requirements vary by program, but all applicants are encouraged to submit their transcripts, standardized test scores, and letters of recommendation.</p>', '<p>Liberty University offers a range of scholarships and financial aid options to eligible students based on academic achievement, extracurricular involvement, and financial need.</p>', '<p>The faculty at Liberty University are experts in their respective fields and are dedicated to providing students with a high-quality education. They are committed to mentoring students both academically and spiritually.</p>', '<p>On-campus housing is available for students, with options ranging from traditional dormitories to apartment-style living. The university also offers dining facilities, study lounges, and recreational amenities.</p>', 'college_thumbline/college3.jpg', 'college_gallery/college4.jpg', NULL, '<p>Liberty University has a strong track record of helping students secure internships and job placements in their chosen fields. The university&#39;s Career Center provides resources and support to students throughout their job search process.</p>', '7', NULL, 4713, 'Liberty University, Christian university, undergraduate programs, \r\n        graduate programs, Lynchburg, Virginia, academic excellence, scholarships, faculty, placement.', 'Explore Liberty University, a leading Christian university in Lynchburg, Virginia, offering undergraduate and\r\n         graduate programs in a supportive and vibrant campus environment.', 1, '2024-04-21 10:43:38', '2024-04-21 10:53:27'),
(4, 'Mountainview State University', 'mountainview-state-university', 'Liberty University is a private Christian university located in Lynchburg, \r\n        Virginia. Known for its commitment to Christian values, Liberty offers a wide range of undergraduate \r\n        and graduate programs.', 'https://www.youtube.com/watch?v=1234567890', '<p>Liberty University offers a vibrant campus life with numerous student organizations, athletic teams, and spiritual growth opportunities. The university emphasizes academic excellence and provides a supportive environment for students to pursue their passions and achieve their goals</p>', '<p>Prospective students can apply online through the university website. Admission requirements vary by program, but all applicants are encouraged to submit their transcripts, standardized test scores, and letters of recommendation.</p>', '<p>Liberty University offers a range of scholarships and financial aid options to eligible students based on academic achievement, extracurricular involvement, and financial need.</p>', '<p>The faculty at Liberty University are experts in their respective fields and are dedicated to providing students with a high-quality education. They are committed to mentoring students both academically and spiritually.</p>', '<p>On-campus housing is available for students, with options ranging from traditional dormitories to apartment-style living. The university also offers dining facilities, study lounges, and recreational amenities.</p>', 'college_thumbline/college4.jpg', 'college_gallery/college5.jpg', NULL, '<p>Liberty University has a strong track record of helping students secure internships and job placements in their chosen fields. The university&#39;s Career Center provides resources and support to students throughout their job search process.</p>', '8', NULL, 2324, 'Liberty University, Christian university, undergraduate programs, \r\n        graduate programs, Lynchburg, Virginia, academic excellence, scholarships, faculty, placement.', 'Explore Liberty University, a leading Christian university in Lynchburg, Virginia, offering undergraduate and\r\n         graduate programs in a supportive and vibrant campus environment.', 1, '2024-04-21 10:43:38', '2024-04-21 10:53:48'),
(5, 'Harborview College', 'harborview-college', 'Liberty University is a private Christian university located in Lynchburg, \r\n        Virginia. Known for its commitment to Christian values, Liberty offers a wide range of undergraduate \r\n        and graduate programs.', 'https://www.youtube.com/watch?v=1234567890', '<p>Liberty University offers a vibrant campus life with numerous student organizations, athletic teams, and spiritual growth opportunities. The university emphasizes academic excellence and provides a supportive environment for students to pursue their passions and achieve their goals</p>', '<p>Prospective students can apply online through the university website. Admission requirements vary by program, but all applicants are encouraged to submit their transcripts, standardized test scores, and letters of recommendation.</p>', '<p>Liberty University offers a range of scholarships and financial aid options to eligible students based on academic achievement, extracurricular involvement, and financial need.</p>', '<p>The faculty at Liberty University are experts in their respective fields and are dedicated to providing students with a high-quality education. They are committed to mentoring students both academically and spiritually.</p>', '<p>On-campus housing is available for students, with options ranging from traditional dormitories to apartment-style living. The university also offers dining facilities, study lounges, and recreational amenities.</p>', 'college_thumbline/college5.jpg', 'college_gallery/college6.jpg', NULL, '<p>Liberty University has a strong track record of helping students secure internships and job placements in their chosen fields. The university&#39;s Career Center provides resources and support to students throughout their job search process.</p>', '1', NULL, 2947, 'Liberty University, Christian university, undergraduate programs, \r\n        graduate programs, Lynchburg, Virginia, academic excellence, scholarships, faculty, placement.', 'Explore Liberty University, a leading Christian university in Lynchburg, Virginia, offering undergraduate and\r\n         graduate programs in a supportive and vibrant campus environment.', 1, '2024-04-21 10:43:38', '2024-04-21 10:54:06'),
(6, 'Golden Valley Institute', 'golden-valley-institute', 'Liberty University is a private Christian university located in Lynchburg, \r\n        Virginia. Known for its commitment to Christian values, Liberty offers a wide range of undergraduate \r\n        and graduate programs.', 'https://www.youtube.com/watch?v=1234567890', '<p>Liberty University offers a vibrant campus life with numerous student organizations, athletic teams, and spiritual growth opportunities. The university emphasizes academic excellence and provides a supportive environment for students to pursue their passions and achieve their goals</p>', '<p>Prospective students can apply online through the university website. Admission requirements vary by program, but all applicants are encouraged to submit their transcripts, standardized test scores, and letters of recommendation.</p>', '<p>Liberty University offers a range of scholarships and financial aid options to eligible students based on academic achievement, extracurricular involvement, and financial need.</p>', '<p>The faculty at Liberty University are experts in their respective fields and are dedicated to providing students with a high-quality education. They are committed to mentoring students both academically and spiritually.</p>', '<p>On-campus housing is available for students, with options ranging from traditional dormitories to apartment-style living. The university also offers dining facilities, study lounges, and recreational amenities.</p>', 'college_thumbline/college6.jpg', 'college_gallery/college7.jpg', NULL, '<p>Liberty University has a strong track record of helping students secure internships and job placements in their chosen fields. The university&#39;s Career Center provides resources and support to students throughout their job search process.</p>', '2', NULL, 3809, 'Liberty University, Christian university, undergraduate programs, \r\n        graduate programs, Lynchburg, Virginia, academic excellence, scholarships, faculty, placement.', 'Explore Liberty University, a leading Christian university in Lynchburg, Virginia, offering undergraduate and\r\n         graduate programs in a supportive and vibrant campus environment.', 1, '2024-04-21 10:43:38', '2024-04-21 10:54:24'),
(7, 'Sunset Hills University', 'sunset-hills-university', 'Liberty University is a private Christian university located in Lynchburg, \r\n        Virginia. Known for its commitment to Christian values, Liberty offers a wide range of undergraduate \r\n        and graduate programs.', 'https://www.youtube.com/watch?v=1234567890', '<p>Liberty University offers a vibrant campus life with numerous student organizations, athletic teams, and spiritual growth opportunities. The university emphasizes academic excellence and provides a supportive environment for students to pursue their passions and achieve their goals</p>', '<p>Prospective students can apply online through the university website. Admission requirements vary by program, but all applicants are encouraged to submit their transcripts, standardized test scores, and letters of recommendation.</p>', '<p>Liberty University offers a range of scholarships and financial aid options to eligible students based on academic achievement, extracurricular involvement, and financial need.</p>', '<p>The faculty at Liberty University are experts in their respective fields and are dedicated to providing students with a high-quality education. They are committed to mentoring students both academically and spiritually.</p>', '<p>On-campus housing is available for students, with options ranging from traditional dormitories to apartment-style living. The university also offers dining facilities, study lounges, and recreational amenities.</p>', 'college_thumbline/college7.jpg', 'college_gallery/college8.jpg', NULL, '<p>Liberty University has a strong track record of helping students secure internships and job placements in their chosen fields. The university&#39;s Career Center provides resources and support to students throughout their job search process.</p>', '3', NULL, 3675, 'Liberty University, Christian university, undergraduate programs, \r\n        graduate programs, Lynchburg, Virginia, academic excellence, scholarships, faculty, placement.', 'Explore Liberty University, a leading Christian university in Lynchburg, Virginia, offering undergraduate and\r\n         graduate programs in a supportive and vibrant campus environment.', 1, '2024-04-21 10:43:38', '2024-04-21 10:54:44'),
(8, 'Lakefront Academy', 'lakefront-academy', 'Liberty University is a private Christian university located in Lynchburg, \r\n         Virginia. Known for its commitment to Christian values, Liberty offers a wide range of undergraduate \r\n         and graduate programs.', 'https://www.youtube.com/watch?v=1234567890', '<p>Liberty University offers a vibrant campus life with numerous student organizations, athletic teams, and spiritual growth opportunities. The university emphasizes academic excellence and provides a supportive environment for students to pursue their passions and achieve their goals</p>', '<p>Prospective students can apply online through the university website. Admission requirements vary by program, but all applicants are encouraged to submit their transcripts, standardized test scores, and letters of recommendation.</p>', '<p>Liberty University offers a range of scholarships and financial aid options to eligible students based on academic achievement, extracurricular involvement, and financial need.</p>', '<p>The faculty at Liberty University are experts in their respective fields and are dedicated to providing students with a high-quality education. They are committed to mentoring students both academically and spiritually.</p>', '<p>On-campus housing is available for students, with options ranging from traditional dormitories to apartment-style living. The university also offers dining facilities, study lounges, and recreational amenities.</p>', 'college_thumbline/college8.jpg', 'college_gallery/college9.jpg', NULL, '<p>Liberty University has a strong track record of helping students secure internships and job placements in their chosen fields. The university&#39;s Career Center provides resources and support to students throughout their job search process.</p>', '4', NULL, 586, 'Liberty University, Christian university, undergraduate programs, \r\n         graduate programs, Lynchburg, Virginia, academic excellence, scholarships, faculty, placement.', 'Explore Liberty University, a leading Christian university in Lynchburg, Virginia, offering undergraduate and\r\n          graduate programs in a supportive and vibrant campus environment.', 1, '2024-04-21 10:43:38', '2024-04-21 10:55:07'),
(9, 'Cedarwood College', 'cedarwood-college', 'Liberty University is a private Christian university located in Lynchburg, \r\n          Virginia. Known for its commitment to Christian values, Liberty offers a wide range of undergraduate \r\n          and graduate programs.', 'https://www.youtube.com/watch?v=1234567890', '<p>Liberty University offers a vibrant campus life with numerous student organizations, athletic teams, and spiritual growth opportunities. The university emphasizes academic excellence and provides a supportive environment for students to pursue their passions and achieve their goals</p>', '<p>Prospective students can apply online through the university website. Admission requirements vary by program, but all applicants are encouraged to submit their transcripts, standardized test scores, and letters of recommendation.</p>', '<p>Liberty University offers a range of scholarships and financial aid options to eligible students based on academic achievement, extracurricular involvement, and financial need.</p>', '<p>The faculty at Liberty University are experts in their respective fields and are dedicated to providing students with a high-quality education. They are committed to mentoring students both academically and spiritually.</p>', '<p>On-campus housing is available for students, with options ranging from traditional dormitories to apartment-style living. The university also offers dining facilities, study lounges, and recreational amenities.</p>', 'college_thumbline/thumbline20240421165219.jpg', 'college_gallery/college1.jpg', NULL, '<p>Liberty University has a strong track record of helping students secure internships and job placements in their chosen fields. The university&#39;s Career Center provides resources and support to students throughout their job search process.</p>', '9', NULL, 3472, 'Liberty University, Christian university, undergraduate programs, \r\n          graduate programs, Lynchburg, Virginia, academic excellence, scholarships, faculty, placement.', 'Explore Liberty University, a leading Christian university in Lynchburg, Virginia, offering undergraduate and\r\n           graduate programs in a supportive and vibrant campus environment.', 1, '2024-04-21 10:43:38', '2024-04-21 10:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `college_country`
--

CREATE TABLE `college_country` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `college_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `college_country`
--

INSERT INTO `college_country` (`id`, `college_id`, `country_id`) VALUES
(1, 9, 1),
(2, 1, 1),
(3, 2, 1),
(4, 3, 1),
(5, 4, 1),
(6, 5, 1),
(7, 6, 1),
(8, 7, 1),
(9, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `college_course`
--

CREATE TABLE `college_course` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `college_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `college_course`
--

INSERT INTO `college_course` (`id`, `college_id`, `course_id`) VALUES
(1, 9, 1),
(2, 9, 2),
(3, 9, 3),
(4, 1, 1),
(5, 1, 2),
(6, 1, 3),
(7, 2, 2),
(8, 3, 2),
(9, 3, 3),
(10, 4, 1),
(11, 4, 2),
(12, 5, 1),
(13, 5, 2),
(14, 5, 3),
(15, 6, 1),
(16, 6, 2),
(17, 6, 3),
(18, 7, 3),
(19, 8, 2),
(20, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'india', 'active', '2024-04-21 16:43:38', '2024-04-21 16:43:38', NULL),
(2, 'bangladesh', 'active', '2024-04-21 16:43:38', '2024-04-21 16:43:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `credit` varchar(255) DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `course_duration_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `slug`, `semester`, `credit`, `meta_keywords`, `meta_description`, `course_duration_id`, `sub_category_id`, `created_at`, `updated_at`) VALUES
(1, 'Data Science Fundamentals', 'data-science-essentials', '10', '160', 'data science, machine learning, Python, statistics, data analysis', 'Dive into the core concepts of data science, covering topics such as machine learning algorithms, statistical analysis, data manipulation with Python, and practical data analysis techniques to extract insights from complex datasets.', 1, 1, '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(2, 'Financial Management for Entrepreneurs', 'financial-management-for-entrepreneurs', '8', '140', 'financial management, entrepreneurship, budgeting, accounting, investment', 'Gain a comprehensive understanding of financial management principles tailored for entrepreneurs, covering topics such as budgeting, accounting basics, financial analysis, and investment strategies to support business growth and sustainability', 2, 2, '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(3, 'Introduction to Artificial Intelligence', 'introduction-to-artificial-intelligence', '8', '145', 'artificial intelligence, machine learning, neural networks, AI applications', 'Explore the fascinating world of artificial intelligence and machine learning in this introductory course, where you\'ll learn about neural networks, AI algorithms, and real-world applications of AI technology across various industries.', 2, 3, '2024-04-21 10:43:37', '2024-04-21 10:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `course_college`
--

CREATE TABLE `course_college` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `college_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_durations`
--

CREATE TABLE `course_durations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_durations`
--

INSERT INTO `course_durations` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, '4 Year', '4-year', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(2, '3 Year', '3-year', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(3, '2 Year', '2-year', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(4, '1 Year', '1-year', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(5, '6 Month', '6-month', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(6, '2 Month', '2-month', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(7, '1 Month', '1-month', '2024-04-21 10:43:37', '2024-04-21 10:43:37');

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
(1, '01_create_settings_table', 1),
(2, '02_create_categories_table', 1),
(3, '03_create_sub_categories_table', 1),
(4, '04_create_blog_categories_table', 1),
(5, '05_create_blogs_table', 1),
(6, '06_create_campuses_table', 1),
(7, '07_create_course_durations_table', 1),
(8, '08_create_courses_table', 1),
(9, '091_create_colleges_table', 1),
(10, '09_create_type_of_colleges_table', 1),
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2024_02_28_005230_create_permission_tables', 1),
(16, '2024_04_10_094753_create_country_state_city_table', 1),
(17, '2024_04_13_060124_create_campus_colleges_table', 1),
(18, '2024_04_13_060302_create_course_colleges_table', 1),
(19, '2024_04_13_060911_create_college_countries_table', 1),
(20, '2024_04_13_084735_create_college_courses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view user', 'web', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(2, 'create user', 'web', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(3, 'update user', 'web', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(4, 'Delete user', 'web', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(5, 'view role', 'web', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(6, 'create role', 'web', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(7, 'update role', 'web', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(8, 'Delete role', 'web', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(9, 'view permission', 'web', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(10, 'create permission', 'web', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(11, 'update permission', 'web', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(12, 'Delete permission', 'web', '2024-04-21 10:43:37', '2024-04-21 10:43:37');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-04-21 10:43:36', '2024-04-21 10:43:36'),
(2, 'writer', 'web', '2024-04-21 10:43:36', '2024-04-21 10:43:36'),
(3, 'user', 'web', '2024-04-21 10:43:36', '2024-04-21 10:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `about` longtext DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `icon`, `logo`, `name`, `address`, `about`, `email`, `phone`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'site_icon/favicon.svg', 'site_logo/logo.svg', 'College Listing', '134, Khonikaloy, Sabujbag 4th Len, Patuakhali sadar, Patuakhali', 'How Many College in Bangladesh', 'masum4it@gmail.com', '+880 17898 08879', 'college listing, universities, higher education, academic programs, campus life, faculty, student resources, admissions, college search, higher ed institutions', 'Discover top colleges and universities around the world. Compare programs, faculty, campus life, and more to find the perfect fit for your academic and career goals.', '2024-04-21 10:43:36', '2024-04-21 10:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `slug`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Diploma', 'diploma', 1, '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(2, 'B.Sc', 'b-sc', 1, '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(3, 'M.Sc', 'm-sc', 1, '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(7, 'Inter', 'inter-arts', 3, '2024-04-21 10:43:37', '2024-04-21 10:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_colleges`
--

CREATE TABLE `type_of_colleges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_of_colleges`
--

INSERT INTO `type_of_colleges` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Private', 'private', '2024-04-21 10:43:37', '2024-04-21 10:43:37'),
(2, 'Goverment', 'goverment', '2024-04-21 10:43:37', '2024-04-21 10:43:37');

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
  `profile_picture` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_picture`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md Shofiq', 'admin@codetechbd.com', NULL, '$2y$12$Io9LEtskXxhooBdn6H.EaeanjIlQuXLxmRqEsjtcuMRc/z46DOBO6', NULL, NULL, '2024-04-21 10:43:37', '2024-04-21 10:43:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_blog_category_id_foreign` (`blog_category_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campuses`
--
ALTER TABLE `campuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_college`
--
ALTER TABLE `campus_college`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campus_college_campus_id_foreign` (`campus_id`),
  ADD KEY `campus_college_college_id_foreign` (`college_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_state_id_foreign` (`state_id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_country`
--
ALTER TABLE `college_country`
  ADD PRIMARY KEY (`id`),
  ADD KEY `college_country_college_id_foreign` (`college_id`),
  ADD KEY `college_country_country_id_foreign` (`country_id`);

--
-- Indexes for table `college_course`
--
ALTER TABLE `college_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `college_course_college_id_foreign` (`college_id`),
  ADD KEY `college_course_course_id_foreign` (`course_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_college`
--
ALTER TABLE `course_college`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_college_course_id_foreign` (`course_id`),
  ADD KEY `course_college_college_id_foreign` (`college_id`);

--
-- Indexes for table `course_durations`
--
ALTER TABLE `course_durations`
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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `type_of_colleges`
--
ALTER TABLE `type_of_colleges`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `campuses`
--
ALTER TABLE `campuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `campus_college`
--
ALTER TABLE `campus_college`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `college_country`
--
ALTER TABLE `college_country`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `college_course`
--
ALTER TABLE `college_course`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_college`
--
ALTER TABLE `course_college`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_durations`
--
ALTER TABLE `course_durations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `type_of_colleges`
--
ALTER TABLE `type_of_colleges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_blog_category_id_foreign` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `campus_college`
--
ALTER TABLE `campus_college`
  ADD CONSTRAINT `campus_college_campus_id_foreign` FOREIGN KEY (`campus_id`) REFERENCES `campuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `campus_college_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `college_country`
--
ALTER TABLE `college_country`
  ADD CONSTRAINT `college_country_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `college_country_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `college_course`
--
ALTER TABLE `college_course`
  ADD CONSTRAINT `college_course_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `college_course_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_college`
--
ALTER TABLE `course_college`
  ADD CONSTRAINT `course_college_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_college_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
