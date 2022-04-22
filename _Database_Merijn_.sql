-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 11:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `berichten`
--

CREATE TABLE `berichten` (
  `id` int(255) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bericht` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berichten`
--

INSERT INTO `berichten` (`id`, `naam`, `email`, `bericht`) VALUES
(41, 'jan', 'jan@hotmail.com', ' ik vond de pizza heel lekker'),
(44, 'gert', 'gert@email.com', ' Ik wil mijn  geld terug want mijn pizza was koud.'),
(46, 'albert', 'albert @test.com', 'Joehoe!'),
(47, 'merijn', 'merijn@gmail.com', 'wat een fantastische site! ');

-- --------------------------------------------------------

--
-- Table structure for table `menukaart`
--

CREATE TABLE `menukaart` (
  `id` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `ingredienten` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `prijs` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menukaart`
--

INSERT INTO `menukaart` (`id`, `tag`, `product`, `ingredienten`, `categorie`, `prijs`) VALUES
(1, 'pizza, eten', 'margherita', 'Tomatensaus, extra mozzarella en pizzakruide', 'pizza', '4.99'),
(2, 'pizza, eten', 'double pepperoni', 'Tomatensaus, extra veel mozzarella en extra veel pepperoni', 'pizza', '6.99'),
(3, 'pizza, eten', 'tex mex mix', 'Tomatensaus, mozzarella, pepperoni, paprika, ui en jalapeños.', 'pizza', '5.99'),
(4, 'pizza, eten', 'pizza hawaii', 'Tomatensaus, mozzarella en salami', 'pizza', '4.99'),
(6, 'pizza, eten', 'veggie chicken', 'Tomatensaus, mozzarella, ui, paprika, vegetarische kip, verse tomaat en pizzakruiden', '', '6.99'),
(7, 'pizza, eten', 'pizza padenstoel', 'Tomatensaus, mozzarella, champignons en pizzakruiden', '', '7.99'),
(28, 'frisdrank, drinken', 'coca cola', '', '', '1.49'),
(29, 'frisdrank, drinken', 'fanta', '', '', '1.49'),
(30, 'sandwich, hot, broodje, eten', 'kip hot sandwich', 'kip, chili sauce, ijsbergsla', '', '4.99'),
(31, 'hot sandwich, vegan, eten', 'vegan hot sandwich', 'kaas, chili saus, vega kip', '', '5.99'),
(32, 'chicken wings, eten, snacks', '6 chicken wings', 'kip, chili saus', '', '2.99'),
(33, 'chicken wings, eten, snacks', '3 chicken wings', 'kip, chili saus', '', '1.99'),
(34, 'drinken, milkshake', 'milkshake chocolade', '', '', '2.99'),
(35, 'drinken, milkshake', 'milkshake banaan', '', '', '3.49'),
(36, 'drinken, milkshake', 'milkshake aardbij', '', '', '2.99'),
(37, 'drinken, frisdrank', 'cassis', '', '', '0.99'),
(38, 'drinken', 'chocomel', '', '', '1.99'),
(39, 'drinken', 'fristi', '', '', '1.99'),
(40, 'drinken, frisdrank', 'icetea', '', '', '1.49'),
(41, 'drinken', 'icetea green', '', '', '1.49'),
(42, 'pizza, eten', 'bbq chicken', 'bbq saus, kip, bacon, mozarella', '', '6.99'),
(43, 'pizza, eten', 'pizza caprese', 'tomatensaus, spinazie, pese, kaas, tomaat', '', '6.99'),
(44, 'pizza, eten', '4 kazen pizza', 'tomatensaus, mozarella, gouda, cheddar en franse kaas', '', '7.99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berichten`
--
ALTER TABLE `berichten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menukaart`
--
ALTER TABLE `menukaart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berichten`
--
ALTER TABLE `berichten`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `menukaart`
--
ALTER TABLE `menukaart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
