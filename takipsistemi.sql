-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Ara 2019, 22:20:27
-- Sunucu sürümü: 10.4.6-MariaDB
-- PHP Sürümü: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `takipsistemi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `TCKimlikNo` char(11) COLLATE utf8_turkish_ci NOT NULL,
  `Ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kayitTarihi` datetime NOT NULL,
  `role` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kurumId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`id`, `TCKimlikNo`, `Ad`, `Soyad`, `kayitTarihi`, `role`, `username`, `password`, `kurumId`) VALUES
(1, '11111111111', 'Hakan', 'Özkaynak', '2019-11-22 17:26:00', 1, 'hakanozkaynak', '12345', NULL),
(3, '22222222222', 'Furkan', 'Atban', '2019-12-01 21:21:00', 2, 'furkanatban', '12345', 1),
(4, '33333333333', 'Deniz', 'Gül', '2019-12-02 09:20:00', 2, 'denizgul', '12345', 2),
(13, '44669017344', 'Harun', 'Özkaynak', '2019-12-12 00:08:52', 2, 'harunozkaynak', '12345', 25),
(14, '32147896321', 'Tuğçe', 'Yılmaz', '2019-12-12 00:09:37', 2, 'tugceyilmaz', '12345', 24);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `institutions`
--

CREATE TABLE `institutions` (
  `kurumId` int(11) NOT NULL,
  `kurumAdı` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kurumAdresi` text COLLATE utf8_turkish_ci NOT NULL,
  `kurumİli` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `institutions`
--

INSERT INTO `institutions` (`kurumId`, `kurumAdı`, `kurumAdresi`, `kurumİli`) VALUES
(1, 'Gölbaşı KYK Erkek Yurdu', 'Ankara Üniversitesi Gölbaşı Yerleşkesi Bahçelievler Mahallesi 35. Cadde No: 1/F Gölbaşı Ankara', 'Ankara'),
(2, 'Kyk Yurt Gölbaşı Milli İrade Kız Yurdu', 'Bahçelievler Mahallesi 35. Cadde No: 4/B Gölbaşı Ankara', 'Ankara'),
(24, 'KYK Beştepe Kız Öğrenci Yurdu', ' Beştepe, Meriç Sk. No:11, 06560 Yenimahalle/Ankara', 'Ankara'),
(25, 'Kyk Dikimevi Erkek Öğrenci Yurdu', ' Ertuğrulgazi, Uzungemiciler Sk. No:34, 06590 Çankaya/Ankara', 'Ankara');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Kullanici');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `studentlogs`
--

CREATE TABLE `studentlogs` (
  `id` int(11) NOT NULL,
  `kartId` char(11) COLLATE utf8_turkish_ci NOT NULL,
  `girişTarihi` datetime DEFAULT NULL,
  `cikisTarihi` datetime DEFAULT NULL,
  `alarm` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `studentlogs`
--

INSERT INTO `studentlogs` (`id`, `kartId`, `girişTarihi`, `cikisTarihi`, `alarm`) VALUES
(1, '12345678900', '2019-12-01 15:00:00', '2019-12-01 07:30:00', b'0'),
(2, '01234567890', '2019-12-01 19:00:00', '2019-11-30 08:00:00', b'0'),
(3, '12345678901', '2019-12-09 07:00:00', '2019-12-09 22:17:00', b'0'),
(4, '12345678902', '2019-11-20 12:00:00', '2019-11-20 15:11:12', b'0'),
(5, '12345678903', '2019-12-13 08:00:00', NULL, b'1'),
(6, '12345678904', '2019-12-10 10:00:00', '2019-12-11 00:00:00', b'0'),
(7, '98765432100', '2019-12-17 00:00:00', NULL, b'1'),
(8, '12345678900', '2019-12-08 05:00:00', '2019-12-08 14:00:00', b'0'),
(11, '12345678900', '2019-12-13 14:10:50', '2019-12-13 14:41:43', b'0'),
(12, '12345678901', '2019-12-13 14:32:18', '2019-12-20 13:40:40', b'0'),
(13, '12345678900', '2019-12-13 14:41:43', '2019-12-13 14:42:02', b'0'),
(14, '12345678900', '2019-12-13 14:42:02', NULL, b'0'),
(15, '12345678900', '2019-12-13 15:42:03', NULL, b'1'),
(16, '12345678900', '2019-12-13 15:42:47', NULL, b'1'),
(17, '12345678900', '2019-12-13 15:43:18', NULL, b'1'),
(18, '12345678904', '2019-12-15 01:22:32', '2019-12-15 01:24:28', b'0'),
(19, '12345678900', '2019-12-20 13:40:36', NULL, b'0'),
(20, '12345678905', '2019-12-30 00:01:27', '2019-12-30 00:02:01', b'0'),
(21, '12345678902', '2019-12-30 00:01:46', NULL, b'0'),
(22, '12345678906', '2019-12-30 00:01:53', NULL, b'1'),
(23, '12345678906', '2019-12-30 00:02:10', NULL, b'0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `students1`
--

CREATE TABLE `students1` (
  `kartId` char(11) COLLATE utf8_turkish_ci NOT NULL,
  `TCKimlikNo` char(11) COLLATE utf8_turkish_ci NOT NULL,
  `Ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ogrTel` char(11) COLLATE utf8_turkish_ci NOT NULL,
  `dogumTarihi` date NOT NULL,
  `dogumYeri` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `anneAd` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `anneTel` char(11) COLLATE utf8_turkish_ci NOT NULL,
  `babaAd` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `babaTel` char(11) COLLATE utf8_turkish_ci NOT NULL,
  `evAdresi` text COLLATE utf8_turkish_ci NOT NULL,
  `odaNo` int(11) NOT NULL,
  `kurumId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `students1`
--

INSERT INTO `students1` (`kartId`, `TCKimlikNo`, `Ad`, `Soyad`, `ogrTel`, `dogumTarihi`, `dogumYeri`, `anneAd`, `anneTel`, `babaAd`, `babaTel`, `evAdresi`, `odaNo`, `kurumId`) VALUES
('12345678900', '11111111111', 'Tuğba Emine', 'Sivri', '05554443322', '2019-12-15', 'Yenimahalle', 'Ayşe', '05554447788', 'Ali', '06667778899', 'Batıkent/Ankara', 4, 2),
('12345678901', '22222222222', 'Berat Burak', 'Kaya', '09998887766', '2019-12-01', 'Trabzon', 'Emine', '03333333333', 'Osman', '09666666666', 'Altındağ/Ankara', 61, 1),
('12345678902', '33333333333', 'Ömer Faruk', 'Arslan', '09998887766', '2019-12-26', 'Akyurt', 'Ayşe', '04445556677', 'Dede', '05487655287', 'Akyurt/Ankara', 16, 25),
('12345678904', '44444444444', 'Büşra', 'Çelik', '05798953962', '1997-08-23', 'Ankara', 'Fatma', '05648659950', 'Rıza', '05478974216', 'Sincan/Ankara', 8, 24),
('12345678905', '55555555555', 'Esra Nur', 'Özcan', '05647985655', '1997-03-10', 'Ankara', 'Elif', '06598589798', 'Mustafa', '05647874896', 'kırıkkale', 13, 24),
('12345678906', '66666666666', 'Cüneyt', 'Kılıç', '06879874529', '1993-02-27', 'İstanbul', 'Esma', '05749864564', 'Orhan', '05679845748', 'İstanbul', 76, 1),
('12345678907', '77777777777', 'Sinan', 'Gençoğlu', '05748745689', '2019-12-03', 'Ankara', 'Zeynep', '05476748848', 'Akif', '05879875987', 'Keçiören/Ankara', 79, 25);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `TCKimlikNo` (`TCKimlikNo`),
  ADD KEY `kurumId` (`kurumId`);

--
-- Tablo için indeksler `institutions`
--
ALTER TABLE `institutions`
  ADD PRIMARY KEY (`kurumId`);

--
-- Tablo için indeksler `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `studentlogs`
--
ALTER TABLE `studentlogs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `students1`
--
ALTER TABLE `students1`
  ADD PRIMARY KEY (`kartId`),
  ADD UNIQUE KEY `TCKimlikNo` (`TCKimlikNo`),
  ADD KEY `kurumId` (`kurumId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `institutions`
--
ALTER TABLE `institutions`
  MODIFY `kurumId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Tablo için AUTO_INCREMENT değeri `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `studentlogs`
--
ALTER TABLE `studentlogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
