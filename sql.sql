-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.48 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных u121949297_truck
CREATE DATABASE IF NOT EXISTS `u121949297_truck` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `u121949297_truck`;


-- Дамп структуры для таблица u121949297_truck.makeTrucks
CREATE TABLE IF NOT EXISTS `makeTrucks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы u121949297_truck.makeTrucks: ~3 rows (приблизительно)
DELETE FROM `makeTrucks`;
/*!40000 ALTER TABLE `makeTrucks` DISABLE KEYS */;
INSERT INTO `makeTrucks` (`id`, `Title`, `Country`, `Type`, `created_at`, `updated_at`) VALUES
	(10, 'VOLVO', 'Sweden', 'Truck', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(11, 'MAN', 'Germany', 'Truck', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(12, 'RENAULT', 'France', 'Truck', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `makeTrucks` ENABLE KEYS */;


-- Дамп структуры для таблица u121949297_truck.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы u121949297_truck.migrations: ~6 rows (приблизительно)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2014_10_12_100000_create_password_resets_table', 1),
	('2016_05_19_081400_create_tasks_table', 2),
	('2016_05_19_081457_tasks', 2),
	('2016_05_19_183639_create_make_truck', 3),
	('2016_05_19_183914_create_model_truck', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Дамп структуры для таблица u121949297_truck.modelTrucks
CREATE TABLE IF NOT EXISTS `modelTrucks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idMakeTruck` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы u121949297_truck.modelTrucks: ~4 rows (приблизительно)
DELETE FROM `modelTrucks`;
/*!40000 ALTER TABLE `modelTrucks` DISABLE KEYS */;
INSERT INTO `modelTrucks` (`id`, `Title`, `idMakeTruck`, `created_at`, `updated_at`) VALUES
	(1, 'FH 13.400', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 'FH 12.420', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 'TGX', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(4, 'TGA L37', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `modelTrucks` ENABLE KEYS */;


-- Дамп структуры для таблица u121949297_truck.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы u121949297_truck.password_resets: ~0 rows (приблизительно)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Дамп структуры для таблица u121949297_truck.tasks
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `makeTruck` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modelTruck` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `licensePlate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateTechnicalInspection` date NOT NULL,
  `isCheked` tinyint(1) unsigned NOT NULL,
  `odometr` int(11) unsigned NOT NULL,
  `greadeEngineOil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nextServiceKm` int(11) unsigned NOT NULL,
  `nextServiceDate` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы u121949297_truck.tasks: ~0 rows (приблизительно)
DELETE FROM `tasks`;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;


-- Дамп структуры для таблица u121949297_truck.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы u121949297_truck.users: ~2 rows (приблизительно)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'support', 'grosesdorf@gmail.com', '$2y$10$vFAyNyTcyEiR7qXuPZcHFedjrJ2Eoy/l1nzSjcOidivm9lu0UEUQS', 't9GNIo6GbNOWyoMYa5kMklkX53nar9mu7UhPm4qskUF52Ydgtq4VIKNCEvLK', '2016-05-19 06:45:01', '2016-05-19 15:48:43'),
	(2, 'Valeriya', 'truck-support@yandex.ru', '$2y$10$iLbFmz9A3MEcaAnc6to8juk1UAK2gSbLpYYI.hI31oGfTJ0922UYO', 'Dguxb6cYNASs8tciFsyipMcg7J4DsWKPgbeDknImAeH0qzoUOwjymPalol1t', '2016-05-19 07:37:40', '2016-05-19 07:37:45');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
