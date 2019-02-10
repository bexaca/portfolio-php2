-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2019 at 07:42 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `about_born` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `about_school` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `about_sports` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `about_image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `about_academy` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `about_hobbies` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_born`, `about_school`, `about_sports`, `about_image`, `about_academy`, `about_hobbies`) VALUES
(1, 'I was born on 26th of June in 1997 in Aleksinac, Serbia', 'I am curently attending \'Visoka ICT\' school in Belgrade where I am studying internet technologies', 'Voleyball and handball are my favourite sports', 'img/timeline.svg', 'I finished aviation academy in Belgrade', 'My hobbies are music and dogs');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contact_location` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_phone` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `contact_location`, `contact_phone`, `contact_email`) VALUES
(1, 'Milosa Obilica 14, Nova Pazova', '+381 69 563 64 15', 'isidora.nikolic.167.15@ict.edu.rs');

-- --------------------------------------------------------

--
-- Table structure for table `nav_meni`
--

CREATE TABLE `nav_meni` (
  `id` int(10) NOT NULL,
  `admin` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `korisnik` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `izlogovan` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nav_meni`
--

INSERT INTO `nav_meni` (`id`, `admin`, `korisnik`, `izlogovan`) VALUES
(1, 'index', 'index', '0'),
(2, 'skills', 'skills', '0'),
(3, 'work', 'work', '0'),
(4, 'about', 'about', '0'),
(5, 'contact', 'contact', '0'),
(6, '0', '0', 'login'),
(7, 'panel', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `rezultat`
--

CREATE TABLE `rezultat` (
  `id_rezultat` int(10) NOT NULL,
  `id_ankete` int(10) NOT NULL,
  `id_odgovori` int(10) NOT NULL,
  `rezultat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rezultat`
--

INSERT INTO `rezultat` (`id_rezultat`, `id_ankete`, `id_odgovori`, `rezultat`) VALUES
(1, 31, 27, 1),
(2, 31, 28, 0),
(36, 33, 60, 0);

-- --------------------------------------------------------

--
-- Table structure for table `site_text`
--

CREATE TABLE `site_text` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `site_text`
--

INSERT INTO `site_text` (`id`, `text`) VALUES
(1, 'Hi, My Name Is Isidora And I Am Future Freelance Frontend Developer');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill_image` text COLLATE utf8_unicode_ci NOT NULL,
  `skill_heading` text COLLATE utf8_unicode_ci NOT NULL,
  `skill_text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_image`, `skill_heading`, `skill_text`) VALUES
(1, 'img/design.svg', 'web design', 'From simple wireframes through to creating a modern fresh website design reflecting your brand, I can help.'),
(2, 'img/development.svg', 'web development', 'From basic scratch through to creating a mock up high-level prototyping. I can bring your design to life!'),
(3, 'img/photography.svg', 'photography', 'From eye to frame. Every photo that needs to be on website is not a problem. I convert 3D world to 2D picture in a snap.');

-- --------------------------------------------------------

--
-- Table structure for table `slika`
--

CREATE TABLE `slika` (
  `slika_id` int(10) NOT NULL,
  `ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `putanja` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slika`
--

INSERT INTO `slika` (`slika_id`, `ime`, `putanja`) VALUES
(4, 'prva', 'img/gal1.jpg'),
(5, 'druga', 'img/gal2.jpg'),
(6, 'treca', 'img/gal3.jpg'),
(7, 'cetvrta', 'img/gal4.jpg'),
(8, 'peta', 'img/gal5.jpg'),
(9, 'sesta', 'img/gal6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `uloga` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `ime`, `prezime`, `email`, `uloga`) VALUES
(16, 'Isidoraaaaaa', 'hjvjhvjvj', 'Isidoraaaaaaaa', 'Isidoraaaaa', 'Isidora@gmaaaaaaail.com', 'korisnici'),
(33, 'administrator', '200ceb26807d6bf99fd6f4f0d1ca54d4', '', '', '', 'admin'),
(35, 'beki', '3aa00f6bf44ef9dedba2bdaaefd02941', 'Aleksandar', 'Beronja', 'bexaca@gmail.com', 'korisnici'),
(42, 'sava', '9cbdac81135e956ea0415a1d201147d9', 'Sava', 'Maric', 'sava@sasa.ca', 'korisnici');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav_meni`
--
ALTER TABLE `nav_meni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezultat`
--
ALTER TABLE `rezultat`
  ADD PRIMARY KEY (`id_rezultat`);

--
-- Indexes for table `site_text`
--
ALTER TABLE `site_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slika`
--
ALTER TABLE `slika`
  ADD PRIMARY KEY (`slika_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nav_meni`
--
ALTER TABLE `nav_meni`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rezultat`
--
ALTER TABLE `rezultat`
  MODIFY `id_rezultat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `site_text`
--
ALTER TABLE `site_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slika`
--
ALTER TABLE `slika`
  MODIFY `slika_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
