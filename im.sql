-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 28 2019 г., 14:17
-- Версия сервера: 5.7.20
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `im`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `parent_id`) VALUES
(1, 'Ноутбуки, планшеты, смартфоны', 0),
(2, 'Компьютеры, комплектующие, периферия', 0),
(3, 'Смартфоны', 1),
(4, 'Ноутбуки', 1),
(5, 'Моноблоки', 2),
(6, 'Планшеты', 1),
(7, 'Системные блоки', 2),
(8, 'Комплектующие для ПК', 2),
(9, 'Мониторы', 2),
(10, 'Оргтехника', 2),
(21, 'Процессоры', 8),
(22, 'Материнские платы', 8),
(23, 'Модули память', 8),
(24, 'Видеокарты', 8),
(25, 'Блоки питания', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `total` float NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `date`, `total`, `status_id`) VALUES
(11, 0, '2018-12-27', 99000, 1),
(12, 0, '2018-12-27', 63000, 1),
(13, 0, '2018-12-28', 99000, 1),
(14, 0, '2019-01-10', 58000, 1),
(15, 0, '2019-01-14', 55000, 1),
(16, 1, '2019-01-14', 30000, 1),
(17, 1, '2019-01-15', 69000, 1),
(18, 1, '2019-01-15', 111000, 1),
(19, 2, '2019-01-15', 86000, 1),
(20, 1, '2019-01-17', 55555, 1),
(21, 1, '2019-01-17', 55555, 1),
(22, 1, '2019-01-17', 5455, 1),
(23, 1, '2019-01-17', 5455, 1),
(24, 1, '2019-01-17', 5455, 1),
(25, 1, '2019-01-17', 5455, 1),
(26, 1, '2019-01-17', 5455, 1),
(27, 1, '2019-01-17', 5455, 1),
(28, 1, '2019-01-17', 5455, 1),
(29, 0, '2019-01-18', 130000, 1),
(30, 0, '2019-01-18', 60000, 1),
(31, 1, '2019-01-18', 150000, 1),
(32, 1, '2019-01-18', 51780, 1),
(33, 0, '2019-01-22', 110000, 1),
(34, 0, '2019-01-23', 203850, 1),
(35, 0, '2019-01-23', 54700, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `order_products`
--

CREATE TABLE `order_products` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '1',
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_products`
--

INSERT INTO `order_products` (`order_id`, `product_id`, `count`, `price`) VALUES
(0, 1, 1, 25000),
(0, 2, 1, 30000),
(0, 3, 1, 33000),
(0, 4, 1, 11000),
(11, 1, 1, 25000),
(11, 2, 1, 30000),
(11, 3, 1, 33000),
(11, 4, 1, 11000),
(12, 1, 0, 25000),
(12, 2, 1, 30000),
(12, 3, 1, 33000),
(13, 1, 1, 25000),
(13, 2, 1, 30000),
(13, 3, 1, 33000),
(13, 4, 1, 11000),
(14, 1, 1, 25000),
(14, 3, 1, 33000),
(15, 1, 1, 25000),
(15, 2, 1, 30000),
(16, 2, 1, 30000),
(17, 1, 1, 25000),
(17, 3, 1, 33000),
(17, 4, 1, 11000),
(18, 1, 4, 25000),
(18, 4, 1, 11000),
(19, 1, 3, 25000),
(19, 4, 1, 11000),
(20, 1, 1, 25000),
(21, 2, 1, 30000),
(22, 2, 1, 30000),
(23, 2, 1, 30000),
(24, 2, 1, 30000),
(25, 2, 1, 30000),
(26, 2, 1, 30000),
(27, 2, 1, 30000),
(28, 1, 2, 25000),
(29, 1, 4, 25000),
(29, 2, 1, 30000),
(30, 2, 2, 30000),
(31, 2, 5, 30000),
(32, 2, 1, 30000),
(32, 4, 2, 10890),
(33, 1, 2, 25000),
(33, 2, 2, 30000),
(34, 2, 3, 30000),
(34, 3, 3, 29700),
(34, 4, 3, 8250),
(35, 1, 1, 25000),
(35, 3, 1, 29700);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `count` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `price`, `count`, `img`, `sale_id`, `category_id`) VALUES
(1, 'Видеокарта PALIT nVidia GeForce GTX 1050TI , PA-GTX1050Ti Dual OC 4G', 'Код: 403025; nVidia GeForce GTX 1050TI ; частота процессора: 1366 МГц (1480 МГц, в режиме Boost); частота памяти: 7000МГц; объём видеопамяти: 4Гб; тип видеопамяти: GDDR5; OverClock Edition; DirectX 12/OpenGL 4.5; доп. питание: 6 pin; блок питания не менее: 300Вт;...', 12400, 0, '403025_v01_s.jpg', 0, 24),
(2, 'Модуль памяти CRUCIAL CT8G4DFS824A DDR4 — 8Гб', 'Код: 419981; 288-pin; частота: 2400; латентность: CL17; форм-фактор: DIMM; тип поставки: Ret', 4290, 0, '419981_v01_s.jpg', 0, 23),
(3, 'Блок питания AEROCOOL VX PLUS 600W, черный', 'Код: 1049258; ATX12V v2.3; размер вентилятора 120мм; мощность: 600Вт; питание MB и CPU: 24+4+4 pin; питание видеокарты: 2х(6+2) pin; разъемы Molex: 3шт; разъемы SATA: 3шт; цвет: черный; тип поставки Ret', 2400, 0, '1049258_v01_s.jpg', 10, 25),
(4, 'Модуль памяти KINGMAX DDR4 — 8Гб', 'Код: 1030633; 288-pin; частота: 2400; латентность: CL16; форм-фактор: DIMM; тип поставки: Ret', 4410, 0, '1030633_v01_s.jpg', 25, 23),
(5, 'Видеокарта PALIT nVidia GeForce GTX 1060 , PA-GTX1060 DUAL 6G', 'Код: 384557; nVidia GeForce GTX 1060 ; частота процессора: 1506 МГц (1708 МГц, в режиме Boost); частота памяти: 8000МГц; объём видеопамяти: 6Гб; тип видеопамяти: GDDR5; DirectX 12/OpenGL 4.5; доп. питание: 6 pin; блок питания не менее: 400Вт; тип поставки: Ret', 20500, 0, '384557_v01_s.jpg', 0, 24),
(6, 'Видеокарта PALIT nVidia GeForce GTX 1050TI , PA-GTX1050Ti Dual 4G', 'Код: 417629; nVidia GeForce GTX 1050TI ; частота процессора: 1290 МГц (1392 МГц, в режиме Boost); частота памяти: 7000МГц; объём видеопамяти: 4Гб; тип видеопамяти: GDDR5; DirectX 12/OpenGL 4.5; доп. питание: 6 pin; блок питания не менее: 300Вт; тип поставки:...', 12210, 0, '417629_v01_s.jpg', 0, 23);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `fio` varchar(150) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `login`, `fio`, `password`, `role_id`) VALUES
(1, 'admin', 'Иванов Иван Петровичес', '12311', 1),
(2, 'user1', 'Петров Петр Валерьевич', '1245', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Индексы таблицы `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
