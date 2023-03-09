-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 13 2022 г., 11:40
-- Версия сервера: 10.1.48-MariaDB
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `teeth`
--

-- --------------------------------------------------------

--
-- Структура таблицы `application`
--

CREATE TABLE `application` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `job`, `created_at`, `updated_at`) VALUES
(1, 'Алексей', 'Замечательная стоматология', '2021-06-05 09:13:39', '2021-06-05 09:13:39'),
(2, 'Петя', 'Все плохо', '2021-06-05 09:16:30', '2021-06-05 09:25:16'),
(3, 'Рустам', 'Вырвали зуб больно', '2021-06-06 09:37:29', '2021-06-06 09:37:29'),
(5, 'Саня', 'Оторвали челюсть', '2021-06-08 04:22:09', '2021-06-09 06:07:22'),
(8, 'Пупсик', 'Круто', '2021-06-12 03:33:05', '2021-06-12 03:33:05'),
(9, 'Вася', 'Круто', '2021-06-12 03:39:14', '2021-06-12 03:39:14'),
(10, 'Рустам', 'Круто', '2021-06-12 03:52:25', '2021-06-12 03:52:25');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Авокий', '1@box.com', 'Плохое обслуживаниеа', 'а', '2022-03-13 05:36:01', '2022-03-13 05:36:01');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_03_23_093056_create_categories_table', 1),
(6, '2021_04_02_101701_create_posts_table', 1),
(7, '2021_04_02_112350_create_permission_tables', 2),
(8, '2021_04_13_151934_post', 3),
(9, '2021_06_01_101755_reviews', 4),
(10, '2021_03_18_081254_create_contacts_table', 5),
(11, '2021_06_03_075715_create_prices_table', 6),
(12, '2021_06_03_085724_create_prices_table', 7),
(13, '2021_06_03_085827_create_prices_table', 8),
(14, '2021_05_29_160240_categories', 9),
(15, '2021_06_07_095808_create_prices_table', 10),
(16, '2021_06_09_112921_create_records_table', 11),
(17, '2021_06_09_113538_create_records_table', 12),
(18, '2021_06_10_110502_create_words_table', 13);

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 4),
(1, 'App\\Models\\User', 5),
(1, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('vasa@gmail.com', '$2y$10$ISfSt6rXEsJ4IGfMm/ABG.Ocll5dyZx/F.7wTH1f3ACSCiscqOFQS', '2021-06-09 07:19:40'),
('vlad@gmail.com', '$2y$10$Ett24ESXG29sma8p.8slZ.st1Jxi3cLQCht4OfDBNJQY5w8PKotw6', '2021-06-09 07:23:27');

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `prices`
--

INSERT INTO `prices` (`id`, `title`, `price`, `created_at`, `updated_at`) VALUES
(2, 'Консультация и план лечения', 'Бесплатно', '2021-06-07 05:00:11', '2021-06-07 05:00:11'),
(3, 'Лечение десен с аппаратом Vector', '18 000', '2021-06-07 05:00:52', '2021-06-07 05:00:52'),
(4, '1 имплант Osstem', '18 000', '2021-06-07 05:01:09', '2021-06-07 05:01:09'),
(5, '2 импланта Osstem', '36 000', '2021-06-07 05:02:14', '2021-06-07 05:02:14'),
(6, 'Отбеливание системой Zoom 4 – 2 челюсти', 'от 22 000', '2021-06-07 05:02:36', '2021-06-07 05:02:36'),
(7, 'Консультация врача – ортодонта', '500', '2021-06-07 05:03:11', '2021-06-07 05:03:11'),
(8, 'Диагностической обследование (Изготовление и анализ диагностических моделей, анализ снимка ОПТГ, постановка диагноза)', '5 000', '2021-06-07 05:09:48', '2021-06-07 05:09:48'),
(9, 'Консультация по результатам диагноза, составление плана лечения, конструкция аппарата, подбор, расчет стоимости', '1 500', '2021-06-07 05:10:06', '2021-06-07 05:10:06'),
(10, 'Составление плана лечения', '1 000', '2021-06-07 05:10:15', '2021-06-07 05:10:15'),
(11, 'Снятие слепков (1 челюсть)', '500', '2021-06-07 05:10:37', '2021-06-07 05:10:37'),
(12, 'Отливка моделей (1 челюсть)', '500', '2021-06-07 05:10:50', '2021-06-07 05:10:50'),
(13, 'Ортодонтическая пластина', 'от 14000-25000', '2021-06-07 05:21:27', '2021-06-07 05:21:27'),
(14, 'Профессиональная гигиена полости рта Air flow + ультразвук', '6 000', '2021-06-08 12:52:11', '2022-03-13 05:18:56');

-- --------------------------------------------------------

--
-- Структура таблицы `records`
--

CREATE TABLE `records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `records`
--

INSERT INTO `records` (`id`, `name`, `phone`, `created_at`, `updated_at`) VALUES
(2, 'Леонид', '795456476', '2021-06-09 12:34:19', '2021-06-09 12:34:19'),
(5, 'Саня', '88005553535', '2021-06-10 10:01:05', '2021-06-10 10:01:05'),
(8, 'vlad', '+7 (___) ___ __ __', '2021-06-12 03:49:29', '2021-06-12 03:49:29'),
(9, 'Авокий', '8800555355', '2022-03-13 05:36:39', '2022-03-13 05:36:39'),
(10, 'Кохан Аркадий Миронович', '8800555355', '2022-03-13 05:38:04', '2022-03-13 05:38:04');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'writer', 'web', '2021-04-02 06:26:14', '2021-04-02 06:26:14'),
(2, 'admin', 'web', '2021-04-02 06:27:57', '2021-04-02 06:27:57'),
(3, 'user', 'web', '2021-06-12 03:06:18', '2021-06-12 03:06:18');

-- --------------------------------------------------------

--
-- Структура таблицы `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vlad', 'vlad@gmail.com', NULL, '$2y$10$LXxb7EXl/WNMYe8QiY3LvuPr8CCst98zHLolnhJZvUYQnPjZlgkWK', NULL, NULL, NULL, '2021-04-02 06:41:01', '2021-04-02 06:41:01'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$5ketgWNYZ1ln0iM6E.hZ0.isuHag6/BPCArBOhVmldtWTxkD5yk8m', NULL, NULL, 'XAUs3D1gQmp6NFlDW9bReCrrysj8z3XDm60kyrq402xxfMXddeuig9uAvFuu', '2021-04-02 06:42:25', '2021-04-02 06:42:25'),
(4, 'Вася', 'vasa@gmail.com', NULL, '$2y$10$AMwr3PwHRvgF8g.ottFYe.mwrbScY.PLRVqdon40GpxCY/MpxjRli', NULL, NULL, NULL, '2021-06-09 05:08:01', '2021-06-09 05:08:01'),
(5, 'Рустам', 'Rustam@mail.ru', NULL, '$2y$10$UwtC.7s4TWIZXu2NkK2eNe/R0ZDk0ouAAkt3GnVlVG2Hn/G2h.RUS', NULL, NULL, NULL, '2021-06-10 10:48:07', '2021-06-10 10:48:07'),
(6, 'Вася', 'vasa@gmail.xn--com-med', NULL, '$2y$10$FWWVkInoofEYUhy8cGqupehPyT9SL6P/pwMMNbeOkPexJL.CXcnkO', NULL, NULL, NULL, '2021-06-12 03:02:52', '2021-06-12 03:02:52'),
(7, 'Пушкин', 'pup@gmail.com', NULL, '$2y$10$kUxC1hnnLS5TAQltCRql/e4FHZZgoGVfxXypj0UjO6OCTHy3yzYCi', NULL, NULL, NULL, '2021-06-12 03:11:01', '2021-06-12 03:11:01');

-- --------------------------------------------------------

--
-- Структура таблицы `words`
--

CREATE TABLE `words` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `words`
--

INSERT INTO `words` (`id`, `name`, `des`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Мараничев Михаил Александрович', 'Врач-стоматолог, хирург, имплантолог, ортопед', 'workers.png', '2021-06-10 06:18:08', '2021-06-10 07:29:48'),
(2, 'Березикова Марина Александровна', 'Врач-ортодонт', 'workers2.png', '2021-06-10 06:28:35', '2021-06-10 07:30:29'),
(3, 'Тоцкойнов Иван Иосифович', 'Врач-ортопед', 'workers3.png', '2021-06-10 06:30:56', '2021-06-10 07:30:51'),
(4, 'Лукоянова Татьяна Владиславовна', 'Врач стоматолог – терапевт, высшей квалификационной категории, кандидат медицинских наук', 'lukoyanova.png', '2021-06-10 06:32:02', '2021-06-10 07:33:21'),
(5, 'Кохан Аркадий Миронович', 'Анестезиолог', 'Kohan-2.png', '2021-06-10 08:47:34', '2022-03-13 05:17:31');

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `img` blob,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `records`
--
ALTER TABLE `records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `words`
--
ALTER TABLE `words`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
