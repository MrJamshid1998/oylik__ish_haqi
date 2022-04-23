-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 04 2022 г., 07:42
-- Версия сервера: 10.1.30-MariaDB
-- Версия PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `oylik`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aloqa`
--

CREATE TABLE `aloqa` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `aloqa`
--

INSERT INTO `aloqa` (`id`, `name`, `email`, `message`) VALUES
(1, 'Mirshod', 'mirshod@mail.ru', 'sdsfdsf');

-- --------------------------------------------------------

--
-- Структура таблицы `ishchilar`
--

CREATE TABLE `ishchilar` (
  `id` int(11) NOT NULL,
  `fio` varchar(100) NOT NULL,
  `inn` int(9) NOT NULL,
  `ish_joyi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ishchilar`
--

INSERT INTO `ishchilar` (`id`, `fio`, `inn`, `ish_joyi`) VALUES
(2, 'Mirshod', 123456789, 'Buxoro viloyati'),
(3, 'Azim', 213256543, 'Buxoro viloyati Kogon shahar'),
(4, 'Ulug`bek', 123454321, 'Buxoro viloyati, Buxoro shahar, BDU ');

-- --------------------------------------------------------

--
-- Структура таблицы `oylik_hisobot`
--

CREATE TABLE `oylik_hisobot` (
  `id` int(11) NOT NULL,
  `ishchi_id` int(11) NOT NULL,
  `ish_stafka` float NOT NULL,
  `oklad` int(11) NOT NULL,
  `podo_nalog` int(11) NOT NULL,
  `profsoyuz` int(11) NOT NULL,
  `inps` int(11) NOT NULL,
  `oylik` int(11) NOT NULL,
  `ish_kuni` int(11) NOT NULL,
  `oylik_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `oylik_hisobot`
--

INSERT INTO `oylik_hisobot` (`id`, `ishchi_id`, `ish_stafka`, `oklad`, `podo_nalog`, `profsoyuz`, `inps`, `oylik`, `ish_kuni`, `oylik_date`) VALUES
(3, 4, 0.5, 123456, 7346, 617, 62, 46596, 26, '2022-03-31'),
(4, 2, 1, 3000000, 357000, 30000, 3000, 2436000, 28, '2022-01-31'),
(5, 3, 0.75, 2600000, 232050, 19500, 1950, 1357200, 24, '2022-03-31');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `aloqa`
--
ALTER TABLE `aloqa`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ishchilar`
--
ALTER TABLE `ishchilar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `oylik_hisobot`
--
ALTER TABLE `oylik_hisobot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `aloqa`
--
ALTER TABLE `aloqa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `ishchilar`
--
ALTER TABLE `ishchilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `oylik_hisobot`
--
ALTER TABLE `oylik_hisobot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
