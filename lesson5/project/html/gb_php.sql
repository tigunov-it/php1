-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: mariadb
-- Время создания: Сен 28 2021 г., 03:12
-- Версия сервера: 10.5.12-MariaDB
-- Версия PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gb_php`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `likes`) VALUES
(1, 'Три человека погибли в результате крушения поезда в США', 'По меньшей мере три человека погибли в результате крушения пассажирского поезда в штате Монтана в США, сообщает ABC News со ссылкой на власти.\r\n\r\nПоезд Empire Builder, следовавший из Чикаго в Сиэтл, сошел с рельсов возле местечка Джоплин. Всего с рельсов соскочили пять вагонов и опрокинулись набок.\r\n\r\nПо данным перевозчика — компании Amtrak, в поезде ехали около 160 человек, в том числе 147 пассажиров. Газета The New York Times со ссылкой на экстренные службы сообщает, что в результате аварии пострадали более 50 человек.', 0),
(2, 'В Краснодаре самолет совершил экстренную посадку после удара молнии', 'В самолет авиакомпании Azur Air, летевший из Екатеринбурга в Сочи, ударила молния, борт совершил экстренную посадку в аэропорту Краснодара. Об этом сообщает Е1.RU со ссылкой на пассажиров самолета.\r\n\r\n«При заходе на посадку была сильная облачность и дождь, было темно. Началась сильная болтанка: мы пошли на второй круг, когда набирали высоту, в какой-то момент мы «провалились» и начали падать, несколько секунд. <...> Затем в нас попала молния: был громкий хлопок и яркая вспышка», — рассказал очевидец.', 1),
(3, 'Хорошая новость', 'lorem10 lorem10lorem10lorem10lorem10lorem10lorem10lorem10lorem10lorem10lorem10lorem10lorem10lorem10lorem10lorem10lorem10  lorem10lorem10lorem10lorem10lorem10   lorem10lorem10lorem10', 0),
(4, 'Очень хорошая новость', '0lorem10lorem10lorem10lorem10  lorem10lorem10lorem10lorem10lorem10   lorem10lorem10lorem10', 0),
(5, 'Еще одна новость', 'Сегодня ывафываыа Сегодня ывафываыа \r\nСегодня ывафываыа \r\nСегодня ывафываыа \r\nСегодня ывафываыа \r\nСегодня ывафываыа Сегодня ывафываыа Сегодня ывафываыа Сегодня ывафываыа Сегодня ывафываыа Сегодня ывафываыа Сегодня ывафываыа Сегодня ывафываыа Сегодня ывафываыа Сегодня ывафываыа ', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `url`, `name`, `size`, `count`) VALUES
(1, '/gallery_img/small/', '01.jpg', '150 x 100', 12),
(2, '/gallery_img/small/', '02.jpg', '150 x 100', 5),
(3, '/gallery_img/small/', '03.jpg', '150 x 100', 17),
(4, '/gallery_img/small/', '04.jpg', '150 x 100', 3),
(5, '/gallery_img/small/', '05.jpg', '150 x 100', 1),
(6, '/gallery_img/small/', '06.jpg', '150 x 100', 1),
(7, '/gallery_img/small/', '07.jpg', '150 x 100', 2),
(8, '/gallery_img/small/', '08.jpg', '150 x 100', 1),
(9, '/gallery_img/small/', '09.jpg', '150 x 100', 1),
(10, '/gallery_img/small/', '10.jpg', '150 x 100', 1),
(11, '/gallery_img/small/', '11.jpg', '150 x 100', 0),
(12, '/gallery_img/small/', '12.jpg', '150 x 100', 0),
(13, '/gallery_img/small/', '13.jpg', '150 x 100', 1),
(14, '/gallery_img/small/', '14.jpg', '150 x 100', 2),
(15, '/gallery_img/small/', '15.jpg', '150 x 100', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
