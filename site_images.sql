-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 07 2024 г., 13:08
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `site_images`
--

-- --------------------------------------------------------

--
-- Структура таблицы `albums`
--

CREATE TABLE `albums` (
  `id_album` int UNSIGNED NOT NULL,
  `id_user` int UNSIGNED NOT NULL,
  `album_name` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `album_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `album_dt_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
-- ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `albums`
--

INSERT INTO `albums` (`id_album`, `id_user`, `album_name`, `album_description`, `album_dt_add`) VALUES
(17, 5, 'Горы', 'Горы - это высокие и обширные природные образования, состоящие из большого количества скал, холмов и вершин, которые поднимаются над окружающей местностью. Они являются одной из основных географических форм на земной поверхности. Высокие и обширные природные образования, состоящие из большого количества скал, холмов и вершин, которые поднимаются над окружающей местностью. Они являются одной из основных географических форм на земной поверхности.', '2024-03-07 09:14:17'),
(18, 1, 'Море', 'Часть Мирового океана, обособленная сушей или возвышениями подводного рельефа.', '2024-03-07 09:17:20'),
(19, 3, 'Небо в фотографиях известных фотографов 23 века', 'пространство над поверхностью Земли или любого другого астрономического объекта. В общем случае — панорама, открывающаяся при взгляде с этого объекта в направлении космоса.', '2024-03-07 09:20:14'),
(20, 4, 'Красоты леса', 'Совокупность биологических (деревья, кустарники, живой напочвенный покров, животные и микроорганизмы и др.) и абиотических (почва, материнская порода, атмосферный воздух) компонентов на определённом участке земной поверхности. Совокупность биологических (деревья, кустарники, живой напочвенный покров, животные и микроорганизмы и др.) и абиотических (почва, материнская порода, атмосферный воздух) компонентов на определённом участке земной поверхности. Совокупность биологических (деревья, кустарники, живой напочвенный покров, животные и микроорганизмы и др.) и абиотических (почва, материнская порода, атмосферный воздух) компонентов на определённом участке земной поверхности.', '2024-03-07 09:24:01'),
(21, 5, 'Яхты разрезающие водную гладь', 'Первоначально лёгкое и быстрое судно для перевозки отдельных персон, оборудованное палубой и каютой (каютами).', '2024-03-07 09:27:32');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id_comment` int UNSIGNED NOT NULL,
  `id_image` int UNSIGNED NOT NULL,
  `id_user` int UNSIGNED NOT NULL,
  `comment_text` text NOT NULL,
  `comment_dt_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
-- ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id_comment`, `id_image`, `id_user`, `comment_text`, `comment_dt_add`) VALUES
(270, 163, 5, 'вау.. красота))', '2024-03-07 09:27:50'),
(271, 165, 5, 'так себе', '2024-03-07 09:27:59'),
(272, 153, 3, 'не очень фото', '2024-03-07 09:28:49'),
(273, 155, 3, 'неплохо', '2024-03-07 09:28:59'),
(274, 155, 3, 'Красиво', '2024-03-07 09:29:37'),
(275, 155, 1, 'ну так себе', '2024-03-07 09:35:07'),
(276, 154, 1, 'ярко', '2024-03-07 09:35:17'),
(277, 168, 1, 'о у меня такая', '2024-03-07 09:36:04'),
(278, 168, 1, 'была', '2024-03-07 09:36:09'),
(279, 168, 4, 'и у меня', '2024-03-07 09:36:36'),
(280, 164, 1, 'нравится такой', '2024-03-07 09:53:39'),
(281, 166, 1, 'красотааааа', '2024-03-07 09:54:59');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id_image` int UNSIGNED NOT NULL,
  `id_album` int UNSIGNED NOT NULL,
  `image_name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name_text` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
-- ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id_image`, `id_album`, `image_name`, `image_name_text`, `image_description`) VALUES
(143, 17, '94722.jpg', 'Величественные вершины', 'Горы, возвышающиеся к небу, словно стражи природы. Горы, возвышающиеся к небу, словно стражи природы.'),
(144, 17, '12546.jpg', 'Облака над горами', 'Туман, окутывающий вершины, создавая загадочную атмосферу.'),
(145, 17, '74768.jpg', 'Закат в горах', 'Солнце, касающееся вершин, окрашивая небо в оранжевые и розовые оттенки.'),
(146, 17, '15806.jpg', 'Скалистые утёсы', 'Острые скалы, высоко возвышающиеся над долиной. Острые скалы, высоко возвышающиеся над долиной. Острые скалы, высоко возвышающиеся над долиной.'),
(147, 17, '83953.jpg', 'Горные хребты', 'Бескрайние цепи гор, простирающиеся на горизонте.'),
(148, 17, '29674.jpg', 'Заснеженные пики:', 'Белоснежные вершины, покрытые вечным снегом.'),
(149, 17, '35751.webp', 'Альпийские луга', 'Зелёные поля, усеянные цветами, среди гор.'),
(150, 18, '74398.jpg', 'Мощное море', 'Могущественные волны, бьющие о берег. Характеризующееся короткими, бурными волнами.'),
(151, 18, '84102.jpg', 'Игривое море', 'Живые и подвижные воды, приглашающие к игре.'),
(152, 18, '89827.jpg', 'Прозрачное море', 'Воды, в которых можно видеть глубоко вниз.'),
(153, 18, '5320.jpg', 'Воды, в которых можно видеть глубоко вниз.', 'Отсылающее к низким температурам в определенных морских районах. Характеризующееся короткими, бурными волнами.'),
(154, 18, '37898.jpg', 'Безмятежное море', 'Гладкие и спокойные воды без волнений. Гладкие и спокойные воды без волнений. Гладкие и спокойные воды без волнений.'),
(155, 18, '86203.jpg', 'Сияющее море', 'Блестящая поверхность воды, отражающая свет.'),
(156, 18, '43044.jpg', 'Очень бурное море', 'Характеризующееся короткими, бурными волнами.'),
(157, 19, '22816.jpg', 'Сияющее небо', 'Небо, сверкающее от солнечных лучей.'),
(158, 19, '90496.jpg', 'Безмятежное небо', 'Голубое небо без облачка, словно бескрайний холст.'),
(159, 19, '72154.jpg', 'Закатное небо', 'Оранжево-розовое небо, когда солнце медленно опускается за горизонт.'),
(160, 19, '22949.jpg', 'Облачное небо', 'Небо, усыпанное пушистыми облаками разных форм и размеров. Небо, усыпанное пушистыми облаками разных форм и размеров.'),
(161, 19, '77856.jpg', 'Небо в тумане', 'Облака, словно покрытые вуалью, придающие небу загадочность.'),
(162, 19, '4438.jpg', 'Рассеянное небо', 'Небо с разбросанными облаками, создающими интересные узоры.'),
(163, 20, '11836.jpg', 'Старый лес', 'Древние деревья, многие из которых существуют уже веками, создают уникальную атмосферу.'),
(164, 20, '56306.jpg', 'Среднеземноморский лес', 'Смена четырёх ярко выраженных времён года, смешанные леса из хвойных и лиственных деревьев.'),
(165, 20, '53979.jpg', 'Лес на горе', 'Деревья, встречающиеся на склонах гор, адаптированные к неровной местности.'),
(166, 20, '11259.jpg', 'Лес весной', 'Пробуждающиеся деревья, цветущие и наполняющие воздух ароматом. Пробуждающиеся деревья, цветущие и наполняющие воздух ароматом.'),
(167, 20, '82025.jpg', 'Тропический лес', 'Богатство биоразнообразия, влажный климат и вечнозелёные деревья.'),
(168, 21, '58366.jpg', 'Тримаран', 'Трёхкорпусное судно с тремя параллельными корпусами и парусами'),
(169, 21, '57095.jpg', 'Парусная яхта', 'Грациозное судно с великолепными парусами, которые позволяют передвигаться под воздушным ветром'),
(170, 21, '96847.jpg', 'Моторная яхта', 'Элегантное судно с мощным двигателем, предназначенное для комфортных путешествий по воде'),
(171, 21, '31115.jpg', 'Суперяхта', 'Роскошное и эксклюзивное судно, обычно с большими размерами и высоким уровнем комфорта'),
(172, 21, '7953.jpg', 'Катамаран', 'Двухкорпусное судно с парусами, расположенными на двух параллельных корпусах'),
(173, 21, '94448.jpg', 'Экспедиционная яхта', 'Прочная и функциональная яхта, предназначенная для долгих путешествий и исследований'),
(174, 21, '61594.jpg', 'Классическая яхта', 'Старинное судно с деревянным корпусом и традиционными парусами'),
(175, 21, '22689.jpg', 'Катер', 'Быстрое и маневренное судно с мотором, часто используется для развлечений и спорта\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `likes`
--

CREATE TABLE `likes` (
  `id_like` int UNSIGNED NOT NULL,
  `id_image` int UNSIGNED NOT NULL,
  `id_user` int UNSIGNED NOT NULL,
  `like_type` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
-- ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `likes`
--

INSERT INTO `likes` (`id_like`, `id_image`, `id_user`, `like_type`) VALUES
(22, 172, 5, 1),
(23, 170, 5, 1),
(24, 171, 5, 1),
(25, 169, 5, 1),
(26, 168, 5, 1),
(27, 173, 5, 1),
(28, 163, 5, 1),
(29, 165, 5, -1),
(30, 166, 5, 1),
(31, 167, 5, 1),
(32, 163, 3, 1),
(33, 165, 3, -1),
(34, 166, 3, 1),
(35, 164, 3, 1),
(36, 167, 3, 1),
(37, 168, 3, 1),
(38, 169, 3, 1),
(39, 170, 3, 1),
(40, 171, 3, 1),
(41, 172, 3, 1),
(42, 174, 3, 1),
(43, 175, 3, 1),
(44, 173, 3, 1),
(45, 150, 3, -1),
(46, 151, 3, 1),
(47, 152, 3, 1),
(48, 153, 3, -1),
(49, 154, 3, 1),
(50, 156, 3, -1),
(51, 155, 3, 1),
(52, 155, 1, -1),
(53, 154, 1, 1),
(54, 146, 1, 1),
(55, 145, 1, 1),
(56, 144, 1, 1),
(57, 143, 1, 1),
(58, 148, 1, 1),
(59, 147, 1, 1),
(60, 149, 1, 1),
(61, 165, 1, 1),
(62, 164, 1, 1),
(63, 163, 1, 1),
(64, 167, 1, 1),
(65, 166, 1, 1),
(66, 168, 1, 1),
(67, 169, 1, 1),
(68, 170, 1, 1),
(69, 171, 1, 1),
(70, 172, 1, 1),
(71, 174, 1, 1),
(72, 175, 1, 1),
(73, 173, 1, 1),
(74, 168, 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int UNSIGNED NOT NULL,
  `user_login` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
-- ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `user_login`, `user_password`, `user_role`) VALUES
(1, 'qwe', '123', 0),
(3, 'admin', 'admin', 1),
(4, 'vasya-pupkin', '123', 1),
(5, 'root', '123', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id_album`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_image` (`id_image`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `id_album` (`id_album`),
  ADD KEY `id_album_2` (`id_album`);

--
-- Индексы таблицы `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_image` (`id_image`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `albums`
--
ALTER TABLE `albums`
  MODIFY `id_album` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT для таблицы `likes`
--
ALTER TABLE `likes`
  MODIFY `id_like` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_image`) REFERENCES `images` (`id_image`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id_album`) REFERENCES `albums` (`id_album`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`id_image`) REFERENCES `images` (`id_image`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
