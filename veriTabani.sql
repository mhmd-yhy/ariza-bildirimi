-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 18 Nis 2024, 09:02:31
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `phpodev`
--
CREATE DATABASE IF NOT EXISTS `phpodev` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `phpodev`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `arizabildirimi`
--

CREATE TABLE `arizabildirimi` (
  `id` int(8) NOT NULL,
  `AdSoyad` varchar(50) NOT NULL,
  `MarkaModel` varchar(50) NOT NULL,
  `SeriNo` int(8) NOT NULL,
  `ArizaAciklamasi` varchar(250) NOT NULL,
  `ArizaKayitTarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `arizabildirimi`
--

INSERT INTO `arizabildirimi` (`id`, `AdSoyad`, `MarkaModel`, `SeriNo`, `ArizaAciklamasi`, `ArizaKayitTarihi`) VALUES
(1, 'Muhammed Shella', 'Ariza 1', 536685, 'Ariza 1 Aciklamasi', '2024-04-17 16:42:56'),
(2, 'Ahmed Yahya', 'Ariza 2', 536777, 'Ariza 2 Aciklamasi', '2024-04-17 16:42:56'),
(3, 'Kamel Hatip', 'Ariza 3', 963214, 'Ariza 3 Aciklamasi', '2024-04-17 16:42:56'),
(4, 'Sidra Mahmoud', 'Ariza 4', 741236, 'Ariza 4 Aciklamasi', '2024-04-17 16:42:56');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `arizabildirimi`
--
ALTER TABLE `arizabildirimi`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `arizabildirimi`
--
ALTER TABLE `arizabildirimi`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
