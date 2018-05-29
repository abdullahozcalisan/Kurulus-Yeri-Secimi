-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 29 May 2018, 16:03:23
-- Sunucu sürümü: 5.7.21
-- PHP Sürümü: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kurulusy`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurulus`
--

DROP TABLE IF EXISTS `kurulus`;
CREATE TABLE IF NOT EXISTS `kurulus` (
  `Il` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `Pazara_Yakinlik` int(11) NOT NULL,
  `Altyapi` int(11) NOT NULL,
  `Ulasim` int(11) NOT NULL,
  `Isgucu` int(11) NOT NULL,
  `Tesvik_Edici_Faktorler` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kurulus`
--

INSERT INTO `kurulus` (`Il`, `Pazara_Yakinlik`, `Altyapi`, `Ulasim`, `Isgucu`, `Tesvik_Edici_Faktorler`) VALUES
('Bursa', 50, 40, 50, 35, 60),
('Adana', 45, 55, 40, 60, 40),
('İzmir', 55, 45, 45, 50, 65),
('İstanbul', 50, 70, 45, 60, 65),
('Afyon', 40, 42, 53, 50, 35),
('Trabzon', 30, 40, 45, 35, 40),
('Antalya', 45, 55, 40, 60, 65),
('Yozgat', 35, 40, 52, 62, 54),
('Bayburt', 40, 35, 20, 20, 35),
('Muğla ', 35, 40, 35, 60, 70),
('Hakkari', 30, 45, 30, 25, 20),
('muş', 30, 34, 46, 45, 52);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
