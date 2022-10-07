-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Okt 07. 17:38
-- Kiszolgáló verziója: 10.4.24-MariaDB
-- PHP verzió: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `space`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `comments`
--

CREATE TABLE `comments` (
  `ID` int(11) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Comment` varchar(300) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `comments`
--

INSERT INTO `comments` (`ID`, `Username`, `Comment`, `Date`) VALUES
(1, 'TestUSer:3', 'Ez egyértelműen egy kép', '2022-10-06'),
(2, 'TestUSer:3', 'ez egy kép <3', '2022-10-06'),
(3, '', '', '0000-00-00'),
(4, 'ooer', 'is kép', '2022-10-06'),
(5, 'xd', 'valóban kép', '2022-10-06'),
(6, 'xd', 'valóban kép', '2022-10-06'),
(7, 'nagyon', 'is kép', '2022-10-06'),
(8, 'nagyon', 'is kép', '2022-10-06'),
(9, 'nagyon', 'is kép', '2022-10-06'),
(10, 'nagyon', 'is kép', '2022-10-06'),
(11, 'ez', 'egy kép', '2022-10-06'),
(12, 'nagyon', 'egy kép', '2022-10-06'),
(13, 'ez egy', 'fa', '2022-10-06');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `image`
--

CREATE TABLE `image` (
  `ID` int(11) NOT NULL,
  `ImageUrl` text NOT NULL,
  `Displaydate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `image`
--

INSERT INTO `image` (`ID`, `ImageUrl`, `Displaydate`) VALUES
(1, 'https://media.tenor.com/g5ZphcWaj1MAAAAC/dancing-duck-vibing-duck.gif', '2022-10-06');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`);

--
-- A tábla indexei `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`ID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT a táblához `image`
--
ALTER TABLE `image`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
