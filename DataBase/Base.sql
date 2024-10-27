-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 27 2024 г., 15:46
-- Версия сервера: 8.0.30
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `DDL.sql`
--
CREATE DATABASE IF NOT EXISTS `DDL.sql` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `DDL.sql`;
--
-- База данных: `DDM.sql`
--
CREATE DATABASE IF NOT EXISTS `DDM.sql` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `DDM.sql`;
--
-- База данных: `keysbaza`
--
CREATE DATABASE IF NOT EXISTS `keysbaza` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `keysbaza`;

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int NOT NULL,
  `user` int NOT NULL,
  `title` text NOT NULL,
  `time` int NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `user`, `title`, `time`, `date`) VALUES
(1, 1, 'Поиграю в Chivalry 2', 1729689015, '08-11-2024'),
(4, 1, 'Вместо курса пойду гулять', 1729689117, '07-12-2024'),
(6, 1, 'Приготовить завтрак', 1729696001, '10-11-2024'),
(8, 1, 'Пойду плавать', 1729698467, '10-11-2024'),
(10, 5, 'Купить алкоголь', 1729700159, '10-11-2024');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(35) NOT NULL,
  `password` varchar(40) NOT NULL,
  `date` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='Пользователи';

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `date`) VALUES
(1, 'qwerty', 'd2c6c69f7b3cc1ee7799c6d3b2bd2a08', 1729609211),
(4, 'qwerty1', 'e6e8bbe351bf19f963820a96543f25db', 1729684649),
(5, 'qwerty2', '3eca79884526bc633714bdc79c19acab', 1729700108),
(6, 'qwerty3', '3eca79884526bc633714bdc79c19acab', 1729700868),
(7, 'qwerty5', '3eca79884526bc633714bdc79c19acab', 1729701356),
(8, 'qwerty6', '3eca79884526bc633714bdc79c19acab', 1729701714);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
