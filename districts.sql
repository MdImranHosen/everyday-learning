-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2020 at 04:45 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.1.28-1+ubuntu18.04.1+deb.sury.org+3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myride`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(2) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `bn_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lon` double DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `bn_name`, `lat`, `lon`, `website`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 'ঢাকা', 23.7115253, 90.4111451, 'www.dhaka.gov.bd', 1, NULL, NULL),
(2, 'Faridpur', 'ফরিদপুর', 23.6070822, 89.8429406, 'www.faridpur.gov.bd', 1, NULL, NULL),
(3, 'Gazipur', 'গাজীপুর', 24.0022858, 90.4264283, 'www.gazipur.gov.bd', 1, NULL, NULL),
(4, 'Gopalganj', 'গোপালগঞ্জ', 23.0050857, 89.8266059, 'www.gopalganj.gov.bd', 1, NULL, NULL),
(5, 'Jamalpur', 'জামালপুর', 24.937533, 89.937775, 'www.jamalpur.gov.bd', 0, NULL, NULL),
(6, 'Kishoreganj', 'কিশোরগঞ্জ', 24.444937, 90.776575, 'www.kishoreganj.gov.bd', 1, NULL, NULL),
(7, 'Madaripur', 'মাদারীপুর', 23.164102, 90.1896805, 'www.madaripur.gov.bd', 0, NULL, NULL),
(8, 'Manikganj', 'মানিকগঞ্জ', 23.8644, 90.0047, 'www.manikganj.gov.bd', 0, NULL, NULL),
(9, 'Munshiganj', 'মুন্সিগঞ্জ', 23.5422, 90.5305, 'www.munshiganj.gov.bd', 0, NULL, NULL),
(10, 'Mymensingh', 'ময়মনসিংহ', 24.7471, 90.4203, 'www.mymensingh.gov.bd', 0, NULL, NULL),
(11, 'Narayanganj', 'নারায়াণগঞ্জ', 23.63366, 90.496482, 'www.narayanganj.gov.bd', 0, NULL, NULL),
(12, 'Narsingdi', 'নরসিংদী', 23.932233, 90.71541, 'www.narsingdi.gov.bd', 1, NULL, NULL),
(13, 'Netrokona', 'নেত্রকোণা', 24.870955, 90.727887, 'www.netrokona.gov.bd', 0, NULL, NULL),
(14, 'Rajbari', 'রাজবাড়ি', 23.7574305, 89.6444665, 'www.rajbari.gov.bd', 0, NULL, NULL),
(15, 'Shariatpur', 'শরীয়তপুর', 23.2197, 90.3501, 'www.shariatpur.gov.bd', 0, NULL, NULL),
(16, 'Sherpur', 'শেরপুর', 25.0204933, 90.0152966, 'www.sherpur.gov.bd', 0, NULL, NULL),
(17, 'Tangail', 'টাঙ্গাইল', 24.2513, 89.9167, 'www.tangail.gov.bd', 0, NULL, NULL),
(18, 'Bogura', 'বগুড়া', 24.8465228, 89.377755, 'www.bogra.gov.bd', 0, NULL, NULL),
(19, 'Joypurhat', 'জয়পুরহাট', 25.0968, 89.0227, 'www.joypurhat.gov.bd', 0, NULL, NULL),
(20, 'Naogaon', 'নওগাঁ', 24.7936, 88.9318, 'www.naogaon.gov.bd', 0, NULL, NULL),
(21, 'Natore', 'নাটোর', 24.420556, 89.000282, 'www.natore.gov.bd', 0, NULL, NULL),
(22, 'Chapainawabganj', 'চাঁপাইনবাবগঞ্জ', 24.5965034, 88.2775122, 'www.chapainawabganj.gov.bd', 0, NULL, NULL),
(23, 'Pabna', 'পাবনা', 23.998524, 89.233645, 'www.pabna.gov.bd', 0, NULL, NULL),
(24, 'Rajshahi', 'রাজশাহী', 24.3636, 88.6241, 'www.rajshahi.gov.bd', 0, NULL, NULL),
(25, 'Sirajgonj', 'সিরাজগঞ্জ', 24.4533978, 89.7006815, 'www.sirajganj.gov.bd', 0, NULL, NULL),
(26, 'Dinajpur', 'দিনাজপুর', 25.6217061, 88.6354504, 'www.dinajpur.gov.bd', 0, NULL, NULL),
(27, 'Gaibandha', 'গাইবান্ধা', 25.328751, 89.528088, 'www.gaibandha.gov.bd', 0, NULL, NULL),
(28, 'Kurigram', 'কুড়িগ্রাম', 25.805445, 89.636174, 'www.kurigram.gov.bd', 0, NULL, NULL),
(29, 'Lalmonirhat', 'লালমনিরহাট', 25.9162, 89.4506, 'www.lalmonirhat.gov.bd', 0, NULL, NULL),
(30, 'Nilphamari', 'নীলফামারী', 25.931794, 88.856006, 'www.nilphamari.gov.bd', 0, NULL, NULL),
(31, 'Panchagarh', 'পঞ্চগড়', 26.3411, 88.5541606, 'www.panchagarh.gov.bd', 0, NULL, NULL),
(32, 'Rangpur', 'রংপুর', 25.7558096, 89.244462, 'www.rangpur.gov.bd', 0, NULL, NULL),
(33, 'Thakurgaon', 'ঠাকুরগাঁও', 26.0336945, 88.4616834, 'www.thakurgaon.gov.bd', 0, NULL, NULL),
(34, 'Barguna', 'বরগুনা', 22.1579, 90.1144, 'www.barguna.gov.bd', 0, NULL, NULL),
(35, 'Barishal', 'বরিশাল', 22.701, 90.3535, 'www.barisal.gov.bd', 0, NULL, NULL),
(36, 'Bhola', 'ভোলা', 22.685923, 90.648179, 'www.bhola.gov.bd', 0, NULL, NULL),
(37, 'Jhalokati', 'ঝালকাঠি', 22.6406, 90.1987, 'www.jhalakathi.gov.bd', 0, NULL, NULL),
(38, 'Patuakhali', 'পটুয়াখালী', 22.3596316, 90.3298712, 'www.patuakhali.gov.bd', 0, NULL, NULL),
(39, 'Pirojpur', 'পিরোজপুর', 22.5841, 89.972, 'www.pirojpur.gov.bd', 0, NULL, NULL),
(40, 'Bandarban', 'বান্দরবান', 22.1953275, 92.2183773, 'www.bandarban.gov.bd', 0, NULL, NULL),
(41, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', 23.9570904, 91.1119286, 'www.brahmanbaria.gov.bd', 0, NULL, NULL),
(42, 'Chandpur', 'চাঁদপুর', 23.2332585, 90.6712912, 'www.chandpur.gov.bd', 0, NULL, NULL),
(43, 'Chattogram', 'চট্টগ্রাম', 22.335109, 91.834073, 'www.chittagong.gov.bd', 1, NULL, NULL),
(44, 'Cumilla', 'কুমিল্লা', 23.4682747, 91.1788135, 'www.comilla.gov.bd', 0, NULL, NULL),
(45, 'Cox\'s Bazar', 'কক্স বাজার', 21.4272, 92.0058, 'www.coxsbazar.gov.bd', 0, NULL, NULL),
(46, 'Feni', 'ফেনী', 23.023231, 91.3840844, 'www.feni.gov.bd', 0, NULL, NULL),
(47, 'Khagrachhari', 'খাগড়াছড়ি', 23.119285, 91.984663, 'www.khagrachhari.gov.bd', 0, NULL, NULL),
(48, 'Lakshmipur', 'লক্ষ্মীপুর', 22.942477, 90.841184, 'www.lakshmipur.gov.bd', 0, NULL, NULL),
(49, 'Noakhali', 'নোয়াখালী', 22.869563, 91.099398, 'www.noakhali.gov.bd', 0, NULL, NULL),
(50, 'Rangamati', 'রাঙ্গামাটি', 22.6573, 92.1733, 'www.rangamati.gov.bd', 0, NULL, NULL),
(51, 'Habiganj', 'হবিগঞ্জ', 24.374945, 91.41553, 'www.habiganj.gov.bd', 0, NULL, NULL),
(52, 'Moulvibazar', 'মৌলভীবাজার', 24.482934, 91.777417, 'www.moulvibazar.gov.bd', 0, NULL, NULL),
(53, 'Sunamganj', 'সুনামগঞ্জ', 25.0658042, 91.3950115, 'www.sunamganj.gov.bd', 0, NULL, NULL),
(54, 'Sylhet', 'সিলেট', 24.8897956, 91.8697894, 'www.sylhet.gov.bd', 0, NULL, NULL),
(55, 'Bagerhat', 'বাগেরহাট', 22.651568, 89.785938, 'www.bagerhat.gov.bd', 0, NULL, NULL),
(56, 'Chuadanga', 'চুয়াডাঙ্গা', 23.6401961, 88.841841, 'www.chuadanga.gov.bd', 0, NULL, NULL),
(57, 'Jashore', 'যশোর', 23.16643, 89.2081126, 'www.jessore.gov.bd', 0, NULL, NULL),
(58, 'Jhenaidah', 'ঝিনাইদহ', 23.5448176, 89.1539213, 'www.jhenaidah.gov.bd', 0, NULL, NULL),
(59, 'Khulna', 'খুলনা', 22.815774, 89.568679, 'www.khulna.gov.bd', 0, NULL, NULL),
(60, 'Kushtia', 'কুষ্টিয়া', 23.901258, 89.120482, 'www.kushtia.gov.bd', 1, NULL, NULL),
(61, 'Magura', 'মাগুরা', 23.487337, 89.419956, 'www.magura.gov.bd', 0, NULL, NULL),
(62, 'Meherpur', 'মেহেরপুর', 23.762213, 88.631821, 'www.meherpur.gov.bd', 0, NULL, NULL),
(63, 'Narail', 'নড়াইল', 23.172534, 89.512672, 'www.narail.gov.bd', 0, NULL, NULL),
(64, 'Satkhira', 'সাতক্ষীরা', 22.7185, 89.0705, 'www.satkhira.gov.bd', 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
