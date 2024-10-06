-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Okt 06. 21:15
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `shadowweb`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `guns`
--

CREATE TABLE `guns` (
  `id` int(11) NOT NULL,
  `gun_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `picture_path` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `guns`
--

INSERT INTO `guns` (`id`, `gun_name`, `price`, `picture_path`, `description`) VALUES
(1, 'M1911', 20000.00, '/AFP2024/projekt/web/images/1911.jpg', 'Az M1911 egy klasszikus félautomata pisztoly, amelyet John Browning tervezett, és 1911-ben rendszeresítették az Egyesült Államok hadseregében. A fegyver több mint 70 évig volt szolgálatban, és számos konfliktusban használták, ami kiemeli megbízhatóságát és időtállóságát. Az M1911 .45 ACP (Automatic Colt Pistol) kalibert használ, amely nagy átütőerőt és megállító erőt biztosít.\r\n\r\nA pisztoly fémből készült váza és egyszerű, mégis rendkívül hatékony működési mechanizmusa miatt népszerű volt mind katonai, mind civil felhasználók körében. Kiemelkedő jellemzője az egyeslövetű elsütőszerkezet, amely pontos lövéseket tesz lehetővé, miközben a masszív felépítése biztos fogást és stabilitást nyújt lövés közben.\r\n\r\nAz airsoft változatoknál az M1911 replikák hűen tükrözik a fegyver eredeti megjelenését és működését. Klasszikus dizájnja és megbízhatósága miatt az airsoft játékosok körében is közkedvelt, különösen azok számára, akik a hagyományos stílusú, jól kezelhető pisztolyokat kedvelik.'),
(2, 'Desert Eagle .50AE', 35000.00, '/AFP2024/projekt/web/images/desert.jpg', 'A Desert Eagle .50 AE egy legendás félautomata pisztoly, amelyet elsősorban a hatalmas ereje és ikonikus megjelenése miatt ismernek. A Magnum Research által fejlesztett fegyver a .50 Action Express (AE) kalibert használja, ami az egyik legerősebb lőszer, amit pisztolyokhoz terveztek. Ez a masszív kaliber rendkívüli átütőerőt és torkolati energiát biztosít, így a Desert Eagle nemcsak vadászatnál, hanem sportlövészetnél is kiváló választás.'),
(3, 'MP5', 55000.00, '/AFP2024/projekt/web/images/mp5.jpg', ''),
(4, 'MP7', 60000.00, '/AFP2024/projekt/web/images/mp7.jpg', ''),
(5, 'AK-47', 80000.00, '/AFP2024/projekt/web/images/ak47.jpg', ''),
(6, 'M4', 90000.00, '/AFP2024/projekt/web/images/M4.jpg', ''),
(7, 'Dragunov', 120000.00, '/AFP2024/projekt/web/images/Dragunov.jpg', ''),
(8, 'Kar98K', 140000.00, '/AFP2024/projekt/web/images/kar98.png', ''),
(9, 'M249', 200000.00, '/AFP2024/projekt/web/images/M249.jpg', ''),
(10, 'PKM', 225000.00, '/AFP2024/projekt/web/images/pkm.jpg\r\n', ''),
(11, 'Ballistic Shield', 30000.00, '/AFP2024/projekt/web/images/Ballistic.jpg', '');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `inventories`
--

CREATE TABLE `inventories` (
  `user_id` int(11) NOT NULL,
  `gun_id` int(11) NOT NULL,
  `bought_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `birthdate`, `role`, `created_at`) VALUES
(1, 'admin123', 'admin', 'admin@admin.com', '1900-01-01', 'admin', '2024-09-27 18:02:20'),
(2, 'Lajos', 'asd', 'asd@vmi.com', '2002-02-03', 'user', '2024-10-06 17:20:10');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `guns`
--
ALTER TABLE `guns`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_inventories_user_id` (`user_id`),
  ADD KEY `fk_inventories_gun_id` (`gun_id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `guns`
--
ALTER TABLE `guns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT a táblához `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `inventories`
--
ALTER TABLE `inventories`
  ADD CONSTRAINT `fk_inventories_gun_id` FOREIGN KEY (`gun_id`) REFERENCES `guns` (`id`),
  ADD CONSTRAINT `fk_inventories_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
