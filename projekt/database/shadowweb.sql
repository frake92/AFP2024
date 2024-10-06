-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Okt 06. 22:08
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
(3, 'MP5', 55000.00, '/AFP2024/projekt/web/images/mp5.jpg', 'Az MP5 egy híres géppisztoly, amelyet a német Heckler & Koch cég fejlesztett ki az 1960-as években. Az MP5 kompakt mérete, pontossága és megbízhatósága miatt világszerte a rendvédelmi és katonai egységek kedvelt fegyvere lett. A fegyver 9x19 mm Parabellum lőszert használ, ami ideális közelharci és taktikai műveletekhez, különösen városi környezetben.\r\n\r\nAz MP5 egyik legnagyobb előnye, hogy rendkívül könnyen kezelhető, minimális visszarúgással rendelkezik, és magas tűzgyorsaságot biztosít, ami lehetővé teszi a pontos sorozatlövéseket is. A moduláris kialakítás lehetővé teszi különféle kiegészítők, például hangtompító, optikai irányzékok vagy lámpák felszerelését.\r\n\r\nAz airsoft világában az MP5 egy népszerű replika, főleg a gyors mozgást és precíziós játékot kedvelő játékosok körében. Kompakt mérete miatt ideális választás beltéri (CQB) játékszituációkhoz, ahol a manőverezhetőség és gyors reakcióidő kulcsfontosságú.'),
(4, 'MP7', 60000.00, '/AFP2024/projekt/web/images/mp7.jpg', 'Az MP7 egy kompakt géppisztoly, amelyet a német Heckler & Koch cég fejlesztett ki a 2000-es évek elején, válaszul a modern hadviselés igényeire. Az MP7 legfőbb előnye a kis méret és a könnyű súly mellett az, hogy 4.6x30 mm-es lőszert használ, amely képes áthatolni a modern testpáncélokon is, miközben minimális visszarúgást biztosít. Ezáltal a fegyver hatékony közelharci eszköz, de közepes távolságokra is kiválóan alkalmazható.\r\n\r\nAz MP7 moduláris kialakítású, könnyen felszerelhető különféle taktikai kiegészítőkkel, mint például irányzékok, lámpák vagy hangtompítók. Kompakt méretének köszönhetően rendkívül jól manőverezhető, és tökéletesen alkalmas szűk, zárt terekben történő bevetésekhez, mint amilyenek a városi harcok vagy a különleges műveletek.\r\n\r\nAz airsoftban az MP7 replikák a kis méretük és gyorsaságuk miatt különösen népszerűek, főként beltéri (CQB) játékok során. A realisztikus megjelenés és a megbízható működés miatt sok játékos kedvenc fegyvere, akik a gyors taktikai manővereket és a precíziós lövéseket részesítik előnyben. '),
(5, 'AK-47', 80000.00, '/AFP2024/projekt/web/images/ak47.jpg', 'Az AK-47, amelyet Mihail Kalasnyikov tervezett 1947-ben, az egyik legismertebb és legikonikusabb gépkarabély a világon. A szovjet hadsereg által rendszeresített fegyver egyszerű, megbízható és strapabíró kialakításáról híres. Az AK-47 alapvetően 7.62x39 mm-es lőszert használ, ami nagy átütőerőt biztosít, különösen közepes hatótávolságú harcok során.'),
(6, 'M4', 90000.00, '/AFP2024/projekt/web/images/M4.jpg', 'Az M4 egy rendkívül népszerű gépkarabély, amelyet az Egyesült Államok hadserege használ, és az M16-os rövidebb, kompaktabb változata. Az M4 kialakításának köszönhetően ideális közelharci és városi hadviselésre, ahol a rövidebb csőhossz előnyt jelent. A fegyver félautomata és automata tüzelési módot is támogat, így sokféle harci helyzetben alkalmazható.\r\n\r\nAz M4 5.56x45 mm NATO lőszert használ, és számos tartozékkal szerelhető fel, például optikai irányzékokkal, hangtompítókkal, lézeres irányzékkal, vagy gránátvetővel. A fegyver könnyű és moduláris kialakítása lehetővé teszi, hogy a katonák testre szabják azt a saját igényeiknek és feladataiknak megfelelően.\r\n\r\nAz airsoft világában az M4 replikák szintén rendkívül népszerűek, köszönhetően sokoldalúságuknak, megbízhatóságuknak és a hozzájuk elérhető kiegészítők széles választékának.'),
(7, 'Dragunov', 120000.00, '/AFP2024/projekt/web/images/Dragunov.jpg', 'Az SVD Dragunov egy híres szovjet mesterlövészpuska, amelyet 1963-ban vezettek be a Szovjet Hadseregben. Az SVD-t Jevgenyij Dragunov tervezte, és kifejezetten távharcokhoz, illetve a gyalogság tűzerejének növelésére készült. A fegyver 7.62x54R lőszert használ, ami kiváló pontosságot és átütőerőt biztosít, akár 800-1000 méteres távolságokon is. Az SVD nem hagyományos mesterlövészpuska, inkább egy félautomata precíziós fegyver, amely gyors tüzelést tesz lehetővé.'),
(8, 'Kar98K', 140000.00, '/AFP2024/projekt/web/images/kar98.png', 'A Kar98k (Karabiner 98 Kurz) egy híres ismétlőpuska, amelyet a náci Németország fejlesztett ki és használt a második világháború során. Az 1898-as Mauser puska modernizált változata, amelyet a Wehrmacht szabványosított gyalogsági fegyvereként használt. A Kar98k 7.92x57 mm-es Mauser lőszert használ, ami kiváló pontosságot és hosszú hatótávolságot biztosít, így a mesterlövészek is gyakran alkalmazták, optikai irányzékkal felszerelve.\r\n\r\nA fegyver hírneve a megbízhatóságában és egyszerűségében rejlik. Bolt-action (zárdugattyús) rendszerű, ami gyors és könnyű újratöltést tesz lehetővé. A faagyazás és a fém alkatrészek klasszikus, letisztult megjelenést biztosítanak, miközben robusztus, tartós szerkezet jellemzi.\r\n\r\nAz airsoftban a Kar98k replikák különösen népszerűek azok körében, akik történelmi témájú játékokat játszanak, vagy a mesterlövész szerepkört preferálják. A realisztikus megjelenés, az ismétlő mechanizmus és a hagyományos faagyazás miatt az airsoftosok körében is elismert, autentikus játékelményt biztosít.'),
(9, 'M249', 200000.00, '/AFP2024/projekt/web/images/M249.jpg', 'Az M249 egy könnyű géppuska (Squad Automatic Weapon, SAW), amelyet az amerikai haderő az 1980-as évek óta használ. Az FN Herstal által tervezett M249 5.56x45 mm-es NATO lőszert használ, és célja, hogy folyamatos tűztámogatást nyújtson a gyalogsági egységek számára. A fegyver félautomata és teljesen automata tüzelési módban is használható, ami lehetővé teszi a nagy tűzsűrűséget és a tartós tüzelést ellenséges célpontok ellen.\r\n\r\nAz M249 egyik legfontosabb jellemzője a sokoldalúsága. Használható szalagos lőszerrel és hagyományos tárakkal is, így rugalmas megoldás a harctéren. A fegyver gázelvételes működési rendszert használ, amely biztosítja a megbízhatóságot hosszabb sorozatok esetén is. A cserélhető cső lehetővé teszi, hogy a fegyvert hosszan lehessen tüzelni túlmelegedés nélkül.\r\n\r\nAz airsoft világában az M249 replikák közkedveltek a nehézgéppuskás szerepben, főleg azok körében, akik szeretnék a csapatuk tűztámogatását biztosítani. A realisztikus méret és súly, valamint a nagy kapacitású tárak miatt az M249 airsoft változatai különleges játékélményt nyújtanak, és stratégiai előnyt biztosítanak a hosszan tartó automata tüzelés során.'),
(10, 'PKM', 225000.00, '/AFP2024/projekt/web/images/pkm.jpg\r\n', 'A PKM egy ikonikus szovjet nehézgéppuska, amelyet Mihail Kalasnyikov tervezett az 1960-as években. A PKM a PK sorozat része, és rendkívül megbízható, tartós, ugyanakkor viszonylag könnyű géppuska, amelyet világszerte használnak katonai erők és fegyveres csoportok. A PKM 7.62x54 mm-es R (rimmed) lőszert használ, ami jelentős tűzerőt és nagy hatótávolságot biztosít, akár 1000 méteres távolságon túl is.\r\n\r\nA PKM működése gázelvételes, szalagos lőszert használ, ami lehetővé teszi a folyamatos, hosszú sorozatok tüzelését anélkül, hogy újra kellene tölteni. Könnyű, hordozható kialakítása miatt könnyebben kezelhető a hagyományos nehézgéppuskáknál, ugyanakkor ugyanolyan tűztámogatást biztosít. Strapabíró kialakítása és megbízhatósága miatt szélsőséges környezetben is jól teljesít, legyen szó sivatagról, dzsungelről vagy hideg éghajlatról.\r\n\r\nAz airsoft változatoknál a PKM replikák rendkívül népszerűek azok körében, akik szeretik a csapattámogató szerepeket, mivel a nagy kapacitású szalagok és a hosszú sorozatlövés lehetősége nagy előnyt biztosít. Az airsoft PKM-ek valósághű megjelenése és súlya autentikus játékélményt nyújt, miközben a csapat számára létfontosságú tűzerőt biztosít.'),
(11, 'Ballistic Shield', 30000.00, '/AFP2024/projekt/web/images/Ballistic.jpg', 'A ballisztikus pajzs egy védelmi eszköz, amelyet főként rendvédelmi és katonai egységek használnak a tüzelés elleni védelem biztosítására. A pajzs célja, hogy megvédje a viselőjét, valamint a mögötte álló személyeket a lövedékektől és más potenciális veszélyektől, mint például robbanóanyagoktól vagy szilánkoktól.\r\n\r\nA ballisztikus pajzs jellemzői:\r\n\r\nAnyag és védelmi szint: A pajzs általában kompozit anyagokból, például aramidból (mint a Kevlar) vagy polikarbonátból készült, amelyek képesek elnyelni és eloszlatni a lövedékek energiáját. A védelmi szintet általában a NIJ (National Institute of Justice) besorolás határozza meg, ami jelzi, hogy a pajzs milyen típusú és sebességű lövedékekkel szemben nyújt védelmet.\r\n\r\nKialakítás: A ballisztikus pajzsok különböző méretűek és formájúak lehetnek, a könnyű és hordozható modellektől kezdve a nehéz, megerősített verziókig. Sok pajzs beépített látónyílással és kiegészítő tartozékokkal rendelkezik, mint például világítás vagy kommunikációs eszközök.\r\n\r\nHasználat: A pajzsokat gyakran alkalmazzák túszejtési helyzetek, házkutatások vagy más veszélyes bevetések során, amikor a személyzetnek védelemre van szüksége a potenciálisan fegyveres ellenfelekkel szemben. A pajzs viselése lehetővé teszi a rendvédelmi személyzet számára, hogy taktikusan megközelítse a veszélyforrást, miközben minimalizálják a sérülés kockázatát.\r\n\r\nTaktikai előny: A ballisztikus pajzs nemcsak a lövedékek ellen véd, hanem pszichológiai hatást is gyakorol, mivel a jelenléte megnehezíti az ellenfél célzását, és növeli a védelmi személyzet biztonságérzetét.\r\n\r\nAz airsoftban a ballisztikus pajzsok replikái szintén népszerűek, mivel lehetővé teszik a játékosok számára, hogy a taktikai szimulációk során különböző védelmi technikákat alkalmazzanak, miközben növelik a játékélményt és a realizmust.');

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
