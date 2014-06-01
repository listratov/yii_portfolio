-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 12 2014 г., 09:46
-- Версия сервера: 5.5.37-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `yii_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `yii_portfolio`
--

CREATE TABLE IF NOT EXISTS `yii_portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `author` varchar(255) CHARACTER SET utf8 NOT NULL,
  `year` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `development` text CHARACTER SET utf8 NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 NOT NULL,
  `img_thumb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `yii_portfolio`
--

INSERT INTO `yii_portfolio` (`id`, `title`, `author`, `year`, `description`, `development`, `link`, `img_thumb`, `img`) VALUES
(1, 'Городской портал "Go-Yo"', 'Арк Солис Груп', 2013, '<p>\r\n	Учитывая одну из основных целей портала, а именно &ndash; предоставление возможности удобно и быстро найти нужные фирмы и организации, сайт оснащён системой поиска по разделам рубрикатора. Для максимального удобства пользователей основное горизонтальное меню оформлено как можно проще и понятнее. Отличает сайт компании GO-YO наличие уникальных разделов. Раздел &laquo;Куда пойти&raquo; поможет сориентироваться в событиях города Нижнего Новгорода и выбрать для себя подходящее мероприятие. Разработана также рубрика &laquo;Акции&raquo;, в которой размещается информация о текущих спецпредложениях различных фирм Нижнего Новгорода.</p>\r\n', 'Участие в разработке. Использование umi cms Написание кастомных методов. Подключение 2Gis api.\r\n', 'www.go-yo.ru', 'go-yo1_435_auto_png.png', 'go-yo-ico1.png'),
(2, 'Кладовка - подарки своими руками', 'Арк Солис Груп', 2013, '<p>\r\n	Сайт компании &ldquo;i-Кладовочка&rdquo; привлекает внимание своей необычностью. Ему присуща сказочная атмосфера праздника, потому что деятельность организации &ndash; продажа подарков. И это не просто подарки, а подарки ручной работы. Каждый раздел содержит определенный вид товара и присущую ему забавную анимацию. Меню и яркий, разноцветный ассортимент легко воспринимаются, несмотря на обилие графики. Это сайт &ndash; праздник, сайт, дарящий вам хорошее настроение!</p>\r\n', 'Участие в разработке. Использование umi cms Написание кастомных методов для сайта и настройка.', 'ikladovochka.ru', 'kladovka.png', 'kladovka-ic_435_auto_png.png'),
(3, 'Управляющая компания «Русинкор»', 'Арк Солис Груп', 2013, '<p style="font-family: Tahoma, sans-serif; margin: 5px; padding: 0px 0px 2px; font-size: 14px; line-height: 22px; font-style: italic; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Меню сайта расположено так, чтобы перемещение по страницам было максимально удобным: общее меню горизонтального расположения, а также дополнительное - вертикального расположения для быстрой навигации по разделам.</p>\r\n<p style="font-family: Tahoma, sans-serif; margin: 5px; padding: 0px 0px 2px; font-size: 14px; line-height: 22px; font-style: italic; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Лента новостей, которая необходима для отображения основных событий компании, создана в виде пролистывающегося горизонтального списка.</p>\r\n<p style="font-family: Tahoma, sans-serif; margin: 5px; padding: 0px 0px 2px; font-size: 14px; line-height: 22px; font-style: italic; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Для того, чтобы сайт был востребован более широкой аудиторией, разработана система переключения языков.</p>\r\n', 'Участие в разработке. Использование umi cms Написание кастомных методов для сайта и настройка.\r\n', 'rusincor.ru', 'rusinkor.png', 'rusinkor-ico_435_auto_png.png'),
(4, 'Фотоконкурс от портала Go-Yo', 'Арк Солис Груп', 2013, '<p style="font-family: Tahoma, sans-serif; margin: 5px; padding: 0px 0px 2px; font-size: 14px; line-height: 22px; font-style: italic; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Но за этой простой оболочкой скрывается трудоёмкая работа по организации основного пространства сайта и технологии для реализации честного проекта, исключающего накрутку голосов.</p>\r\n<p style="font-family: Tahoma, sans-serif; margin: 5px; padding: 0px 0px 2px; font-size: 14px; line-height: 22px; font-style: italic; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Разработан особый алгоритм выбора пары следующих фотографий для голосования и подсчета полученных голосов за каждую из них. Для контроля над загружаемыми файлами установлен раздел модерации.</p>\r\n', 'Участие в разработке. Использование umi cms Написание кастомных методов для сайта и настройка.\r\n', 'foto.go-yo.ru', 'foto-go-yo.png', 'foto-go-yo-ico1_435_auto_png.png'),
(5, 'Компания ООО "Вита"', 'Арк Солис Груп', 2013, '<p>\r\n	<span style="font-family: Tahoma, sans-serif; font-size: 14px; font-style: italic; line-height: 22px; text-align: justify; background-color: rgb(255, 255, 255);">Сайт для компании Вита оформлен таким образом, чтобы не только преподнести аудитории информацию о предлагаемом товаре, но и установить систему обратной связи. Для этого создана функция оставления комментария для каждого из позиций в каталоге. Внедрена динамическая форма обратной связи. Чтобы все позиции в каталоге были доступны для просмотра, организована разветвлённая система.</span></p>\r\n', 'Участие в разработке. Использование umi cms Написание кастомных методов для сайта и настройка.\r\n', 'vitann.ru', 'vita-nn.png', 'vita-nn-ico_435_auto_png.png'),
(6, 'Компания "Спектр-НН"', 'Арк Солис Груп', 2013, '<p style="font-family: Tahoma, sans-serif; margin: 5px; padding: 0px 0px 2px; font-size: 14px; line-height: 22px; font-style: italic; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Для компании Спектр-НН создан проект, который называется сайт-визитка. Название говорит само за себя, так как назначением сайта является презентация компании потенциальным клиентам и представление об услугах, предоставляемых организацией.&nbsp;</p>\r\n<p style="font-family: Tahoma, sans-serif; margin: 5px; padding: 0px 0px 2px; font-size: 14px; line-height: 22px; font-style: italic; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	&nbsp;</p>\r\n<p style="font-family: Tahoma, sans-serif; margin: 5px; padding: 0px 0px 2px; font-size: 14px; line-height: 22px; font-style: italic; background-color: rgb(255, 255, 255); text-align: justify;">\r\n	Задача привлечь и заинтересовать аудиторию возложена на уникальный дизайн, а также такие особенности сайта, как простота и удобство перемещения по разделам.</p>\r\n', 'Участие в разработке. Использование umi cms Написание кастомных методов для сайта и настройка.\r\n', 'nnspektr.ru', 'spektr-nn.png', 'vita-nn-ico_435_auto_png.png');

-- --------------------------------------------------------

--
-- Структура таблицы `yii_site_information`
--

CREATE TABLE IF NOT EXISTS `yii_site_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `desc` varchar(255) CHARACTER SET utf8 NOT NULL,
  `author` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 NOT NULL,
  `about` text CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `yii_site_information`
--

INSERT INTO `yii_site_information` (`id`, `title`, `desc`, `author`, `email`, `phone`, `about`, `text`, `img`) VALUES
(2, 'Михаил Моренов', 'Web Developer', 'Author', 'listratov.m@gmail.com', '+7 910 799 10 67', '<div class="row">\r\n	<div class="col-lg-4 col-lg-offset-2">\r\n		<p>\r\n			Профессиональные навыки</p>\r\n		<p>\r\n			- PHP 5&sbquo; СSS&sbquo; HTML&sbquo; Jquery;</p>\r\n		<p>\r\n			- Практика работы с MVC и ООП;</p>\r\n		<p>\r\n			- XML, XSLT;</p>\r\n		<p>\r\n			- mySQL&sbquo; NoSQL (MongoDb);</p>\r\n		<p>\r\n			- IDE NetBeans&sbquo;</p>\r\n		<p>\r\n			- Система контроля версий Git</p>\r\n		<p>\r\n			- ОС Linux;</p>\r\n	</div>\r\n	<div class="col-lg-4">\r\n		<p>\r\n			-Разработка сайтов на CMS</p>\r\n		<p>\r\n			(umi, bitrix, drupal, Joomla, PyroCms, Modx)</p>\r\n		<p>\r\n			-Работа с шаблонизаторами xslt и tpl</p>\r\n		<p>\r\n			Использовал при разработке framework (codeigniter, yii) и фреймворки типа umi framework и пр.</p>\r\n		<p>\r\n			Работал с API 2Gis , API Вконтакте , API UMI&nbsp;</p>\r\n		<p>\r\n			Работал с ISPmanager&sbquo; phpmyadmin&sbquo; webmin и пр.</p>\r\n		<p>\r\n			&nbsp;</p>\r\n	</div>\r\n</div>\r\n', '<h3 style="color:blue;">\r\n	TEXT&nbsp;</h3>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	вфывфывфыв</p>\r\n', 'my_img.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `yii_test_pages`
--

CREATE TABLE IF NOT EXISTS `yii_test_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `yii_test_pages`
--

INSERT INTO `yii_test_pages` (`id`, `title`, `text`) VALUES
(1, 'Главная', 'Портфолио'),
(2, 'ыва', 'ываыва');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

