-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2019 at 05:36 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `essence`
--

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `name`, `image`, `category`, `description`, `price`, `stock`) VALUES
(1, 'Black Opium Eau De Parfum Shine ', 'ysl-black-opium.jpg', 'Fragrance', 'Iconic Black Opium bottle adorned ', 230000, 3),
(2, 'La Nuit De L\'Homme Le Parfum', 'ysl-lanuit.jpg', 'Fragrance', 'A new side of masculinity', 80000, 12),
(10, 'Bioderma Sebium H2O', 'sebium.jpg', 'Skincare', 'Purifying cleansing micelle solution (500ml)', 400000, 20),
(11, 'Bioderma Sensibio H2O', 'sensibio.jpg', 'Skincare', 'Makeup removing micelle solution', 200000, 14),
(12, 'Clinique', 'facial-soap.jpg', 'Skincare', 'Liquid Facial Soap mild formula(200ml)', 200000, 2),
(13, 'Clinique', 'dark-spot-corrector.jpg', 'Skincare', 'Dark Spot Corrector & Optimizer (50ml)', 1004276, 3),
(14, 'Clinique', 'moist-gel.jpg', 'Skincare', 'Moisturizing Lotion (125ml)', 404500, 5),
(15, 'Lancome', 'anti-stress.jpg', 'Skincare', 'Moisturizing Aqua Gel Fresh (200ml)', 250000, 3),
(16, 'Lancome', 'cleansing-milk.jpg', 'Skincare', 'Gentle Makeup Remover Milk with Papaya Extract (400ml)', 300000, 3),
(17, 'SK-II', 'radical.jpg', 'Skincare', 'SK-II\r\nR.N.A. POWER\r\nR.N.A. Power Radical New Age Essence (50ml)', 260000, 4),
(18, 'SK-II', 'rna.jpg', 'Skincare', 'SK-II\r\nR.N.A. POWER\r\nR.N.A. Power Eye Cream Radical New Age (15g)', 150000, 4),
(19, 'Kiehl\'s', 'calendula.jpg', 'Skincare', 'Kiehl\'s\r\nTONER\r\nCalendula Herbal-Extract Toner (250ml)', 523000, 3),
(20, 'SK-II', 'essence.jpg', 'Skincare', 'Facial Treatment Essence (330ml)', 270000, 5),
(21, 'SK-II', 'lift.jpg', 'Skincare', 'Facial Treatment Clear Lotion (160ml)', 181000, 5),
(22, 'Cle de Peau', 'cdp-enhancer.jpg', 'Makeup', 'Brightening Enhancer Base (30ml)', 120000, 4),
(23, 'Laneige', 'laneige-bb.jpg', 'Makeup', 'BB Cushion Whitening SPF 50++', 290000, 5),
(24, 'Moonshot', 'moonshot.jpg', 'Makeup', 'Jelly Pot #P06 Bronze Champagne', 270000, 1),
(25, 'Maybelline', 'honey.jpg', 'Makeup', 'Concealer #140 Honey (6ml)', 101000, 4),
(27, 'Cyber Colors', 'cc-3in1.jpg', 'Makeup', '3 in 1 Eyebrows Pen (0.34g) (#03 Gray)', 140000, 6),
(28, 'Mistine', 'mistine-3d.jpg', 'Makeup', '#D Brows\' Secret Brow Set (2.45g)', 270000, 7),
(29, 'Eleanor', 'eleanor-eye.jpg', 'Makeup', 'Attractive Eyes (4.4ml) (05 Chocolate Mood)', 83000, 4),
(30, 'L\'Oreal Paris', 'loreal-sharp-liner.jpg', 'Makeup', 'SUPER LINER\r\nUltra Sharp Black (1piece) (Black)', 150000, 12),
(31, 'Club', 'club1.jpg', 'Makeup', 'Nude Skin Make Up Powder (Pastel)', 130000, 5),
(32, 'Cle de Peau', 'cdp-foundation.jpg', 'Makeup', 'SPF25 PA++Radiant Fluid Foundation (30ml) ', 119000, 14),
(33, 'Cosme Decorte', 'cosme-decorte.jpg', 'Makeup', 'AQMW Face Powder #80 Glow Pink (20g) (#80 Glow Pink)', 68000, 7),
(34, 'Giorgio Armani', 'giorgio-armani.jpg', 'Makeup', 'Lasting Silk UV Foundation SPF20 (#04) (30ml) (#04)', 78000, 13),
(35, 'Cyber Colors\r\n', 'cyber.jpg', 'Makeup', 'Bloom Glow Moist CC Cushion SPF50 PA+++ (w/ refill) (30g)\r\n', 83000, 3),
(36, 'Guerlain Neutral Pearls Powder ', 'guerlin.jpg', 'Makeup', 'Light Revealing Pearls Of Powder #2 Clair (1box)', 75000, 6),
(37, 'Christian Dior', 'cdior-lip.jpg', 'Makeup', 'Lip Glow Color Awakening Lipbalm, 001 Pink (3.5g)', 230000, 5),
(38, 'Giogio Armani', 'giorgio-lip-401.jpg', 'Makeup', 'Rouge Ecstasy Lipstick #301 (1piece) (Dragon Red Pearl) ', 1000000, 3),
(39, 'Givenchy', 'givenchy-lip.jpg', 'Makeup', 'Le Rouge Givenchy Lipstick(#303 Corail Decollet)', 94000, 3),
(40, 'Yves Saint Laurent', 'ysl-lip.jpg', 'Makeup', 'Rouge Pur Couture Satin Radiance Lipstick (#01 Le Rouge)', 560000, 8),
(41, 'Tom Ford', 'tomford-lip.jpg', 'Makeup', 'Lip Color (3.5g) (16 SCARLET ROUGE)', 680000, 7),
(42, 'Yves Saint Laurent', 'ysl-lip-60.jpg', '', 'Rouge Volupté Shine (#14 Corail In Touch)', 930000, 2),
(43, 'Opera', 'opera-lip.jpg', 'Makeup', 'Lip Tint Rouge (3.9g) (05 Coral Pink)', 1200000, 3),
(44, 'Helena Rubinstein', 'helena-rubinstein.jpg', 'Makeup', 'Feline Blacks Waterproof Mascara (01 Deep Black)', 940000, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
