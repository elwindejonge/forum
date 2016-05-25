-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 25 mei 2016 om 10:13
-- Serverversie: 5.6.26
-- PHP-versie: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nieuwspanel`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `nieuws`
--

CREATE TABLE IF NOT EXISTS `nieuws` (
  `id` int(11) NOT NULL,
  `name` varchar(256) CHARACTER SET utf8 NOT NULL,
  `medium_content` mediumtext CHARACTER SET utf8 NOT NULL,
  `long_content` longtext CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `nieuws`
--

INSERT INTO `nieuws` (`id`, `name`, `medium_content`, `long_content`, `created_at`, `image`) VALUES
(1, 'The Walking Dead', 'The Walking Dead is een Amerikaanse televisieserie over een groep mensen die tracht te overleven in een wereld vol zombies. De reeks is gebaseerd op de door Robert Kirkman, Tony Moore en Charlie Adlard bedachte gelijknamige strip en werd ontwikkeld voor televisie door scenarist en regisseur Frank Darabont. Het verhaal speelt zich af in en om Atlanta (Georgia).', 'The Walking Dead is een Amerikaanse televisieserie over een groep mensen die tracht te overleven in een wereld vol zombies. De reeks is gebaseerd op de door Robert Kirkman, Tony Moore en Charlie Adlard bedachte gelijknamige strip en werd ontwikkeld voor televisie door scenarist en regisseur Frank Darabont. Het verhaal speelt zich af in en om Atlanta (Georgia).\r\n\r\nDe eerste aflevering werd in de Verenigde Staten op 31 oktober 2010 uitgezonden. De serie wordt in 120 landen uitgezonden, waaronder in Nederland (op het kabelkanaal FOXlife en op Fox) en Belgie (op 2BE). De serie omvat tot op heden 6 seizoenen. Het zesde seizoen begon op 11 oktober 2015. Er is aangekondigd dat er ook een zevende seizoen uitgebracht zal worden. Vanaf 23 augustus 2015 werd er ook gestart met de uitzendingen van een spin-offserie, Fear the Walking Dead.', '2016-05-23 10:53:16', 'img/uploads/wd.jpg'),
(2, 'Prison break', 'Prison Break is een Amerikaanse televisieserie van de zender Fox. In de Verenigde Staten kwamen de pilot en de tweede aflevering (Allen) op 29 augustus 2005 op de buis. Op 21 augustus 2006 zijn de uitzendingen van het tweede seizoen in de Verenigde Staten begonnen. De uitzendingen van het derde seizoen begonnen in de Verenigde Staten op 17 september 2007. Op 1 september 2008 is seizoen 4 begonnen.', 'Prison Break is een Amerikaanse televisieserie van de zender Fox. In de Verenigde Staten kwamen de pilot en de tweede aflevering (Allen) op 29 augustus 2005 op de buis. Op 21 augustus 2006 zijn de uitzendingen van het tweede seizoen in de Verenigde Staten begonnen. De uitzendingen van het derde seizoen begonnen in de Verenigde Staten op 17 september 2007. Op 1 september 2008 is seizoen 4 begonnen.\r\n\r\nDe serie is geschreven en gemaakt door Paul Scheuring. Aanvankelijk waren er 13 afleveringen besteld, maar vanwege het grote succes werd dit aantal uitgebreid tot 22 afleveringen. Ook is er een Behind The Wall-aflevering uitgezonden, waarin het verhaal verder werd uitgediept.\r\n\r\nIn de Verenigde Staten heeft de serie twee nominaties voor een Golden Globe en een prijs voor Favorite New TV Drama ontvangen. Het eerste seizoen werd in de Verenigde Staten gemiddeld door ruim 9 miljoen mensen bekeken. Dit kwam mede door de vele reclamespots die Fox uitzond vlak voordat de serie van start ging. In augustus 2005 trok het programma 10,5 miljoen kijkers, en dergelijke kijkcijfers had Fox in die maand sinds 1998 niet meer gehad voor een programma dat in de zomer op maandagavond wordt uitgezonden.\r\n\r\nDe titelsong van Prison Break voor het eerste en tweede seizoen werd ingezongen door Kaye Styles voor de Belgische televisie. De originele titelsong is gecomponeerd door Ramin Djawadi. Deze titelsong werd genomineerd voor een Primetime Emmy Award in 2006. Op 21 november 2006 kwam in de VS het eerste nummer van Prison Break-magazine uit. De titelsong van het derde en vierde seizoen nam de Belgische zangeres Leki voor haar rekening, met het nummer: "Over the rainbow".\r\n\r\nWegens de dalende kijkcijfers trok Fox op 13 januari 2009 de stekker uit de reeks. De resterende afleveringen van seizoen 4 werden uitgezonden vanaf 17 april 2009.[1]\r\n\r\nOp 6 augustus 2015 werd door Fox bevestigd dat Prison Break een vervolg zal krijgen. Naar verwachting krijgt het vervolg in de vorm van een mini-serie tien afleveringen.[2]', '2016-05-23 11:05:23', 'img/uploads/prison.jpg'),
(3, 'Vikings', 'De reeks begint aan het begin van het tijdperk van de vikingen, rond de 9e eeuw, in Scandinavie. De mannen van het Kattegat worden jaarlijks op rooftocht naar het oosten gestuurd door de jarl (gekozen hoofdman). Boer Ragnar heeft echter verhalen gehoord over de "grote schatten" die in het westen te rapen vallen en wil eens graag die kant op. ', 'De reeks begint aan het begin van het tijdperk van de vikingen, rond de 9e eeuw, in Scandinavie. De mannen van het Kattegat worden jaarlijks op rooftocht naar het oosten gestuurd door de jarl (gekozen hoofdman). Boer Ragnar heeft echter verhalen gehoord over de "grote schatten" die in het westen te rapen vallen en wil eens graag die kant op. Van een reiziger heeft hij ook een zonnewijzer en -steen gekregen om op koers te blijven in open zee. De jarl verbiedt het echter en dus bouwt Ragnars vriend en scheepsbouwer Floki heimelijk een langboot voor hem. Ragnar gaat tegen de wil van de jarl in op zoek naar de veelbelovende landen en stuit zo op Engeland. Wanneer hij echter terugkeert bemerkt hij dat de jarl niet blij is met zijn wilde plannen en hem wil laten terechtstellen, Daarom geeft Ragnar de buit aan de Jarl. Ragnar blijft ondanks alles nog altijd zijn wilde plannen houden, waardoor er een confrontatie is tussen hem en de Jarl, hierdoor daagt ragnar de jarl uit tot een gevecht en doordat hij wint en de Jarl dood, wordt hij zo zelf jarl van Kattegat. Hierna gaat hij meermaals op plundertocht naar Engeland waar zijn rooftocht uiteindelijk wordt stopgezet door koning Eckbert van Wessex. Later wordt Ragnar zelfs koning als hij de voormalige koning doodt. Ragnar trekt hierna verder door te gaan plunderen in Frankia (Frankrijk), waar zijn broer Rollo, die na een plundering voor dood achter wordt gelaten, later tegen hem spant en als hertog de stad Parijs verdedigt.', '2016-05-23 11:08:37', 'img/uploads/vikings.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `content` longtext CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) unsigned NOT NULL,
  `topic_id` int(11) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `posts`
--

INSERT INTO `posts` (`id`, `name`, `content`, `created_at`, `user_id`, `topic_id`) VALUES
(34, '', 'Hallo', '2016-05-19 12:26:20', 27, 1),
(35, '', 'Hallo', '2016-05-19 12:26:20', 28, 2),
(36, '', 'Hallo', '2016-05-19 12:26:43', 29, 3),
(37, '', 'Hallo', '2016-05-19 12:26:43', 30, 4),
(38, '', '<p>Dashdhasdhsd</p>', '2016-05-19 13:31:38', 32, 2),
(39, '', '<p>asdsdasdasdasdasdasd</p>', '2016-05-19 13:32:03', 32, 2),
(40, '', '<p>asdsdasdasdasdasdasd</p>', '2016-05-19 13:32:07', 32, 2),
(41, '', '<p>Hallo ik ben blij dat dit werkt!</p>', '2016-05-21 17:22:15', 31, 1),
(42, '', '<p>kanker</p>', '2016-05-22 16:12:25', 31, 2),
(43, '', '<p>Kuthoer</p>', '2016-05-22 16:15:33', 31, 2),
(44, '', '<p>******</p>', '2016-05-22 16:15:40', 31, 2),
(45, '', '<p>Hallo</p>', '2016-05-22 16:16:14', 31, 2),
(46, '', '<p>test</p>', '2016-05-22 16:17:58', 34, 2),
(47, '', '<p>Heyy alles goed jongens?!</p>', '2016-05-23 11:06:25', 34, 2),
(48, '', '<p>heey</p>', '2016-05-24 12:14:16', 34, 2),
(49, '', '<h1 style="text-align: center;"><em><strong>sdfdsfdsfsdf</strong></em></h1>', '2016-05-24 12:16:15', 34, 2),
(50, '', '<p>***</p>', '2016-05-24 12:16:41', 34, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `content` mediumtext CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `topics`
--

INSERT INTO `topics` (`id`, `name`, `content`, `created_at`) VALUES
(1, 'Breaking Bad', 'Breaking bad is een leuke serie voor drugsdealers en kogelvangers.', '2014-08-12 09:30:00'),
(2, 'Prison Break', 'Prison break is een leuke serie voor mensen die in een gevangenis geleefd hebben het nogmaals willen beleven en uitbreken.', '2016-05-18 06:19:00'),
(3, 'Better Call Saul', 'Voor de echte advocaat moet je weten wat je moet doen dus "Better call saul"', '2016-02-09 10:27:24'),
(4, 'Vikings', 'Dit is een leuke serie voor murderest verkrachters en plunderaars', '2015-09-15 10:39:26');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`) VALUES
(27, 'Elwin', '3d1e357635bb33310f31d1c79c1255705fc8d0e7', 'elwindejonge@hotmail.com', 0),
(28, 'pieter', '945d0708936a74d63f88b0dd781808c47eb3a054', 'pietergriep@live.nl', 0),
(29, 'iris', '3e9afe235a0ebee72d1969e8b4a886d5bd30c515', 'iris@live.nl', 0),
(30, 'henkie', '0dbd769736bbeb8f3bf01f9fba9f33ef02761355', 'henkei@wenk.nl', 0),
(31, 'irisvdh', '0dbd769736bbeb8f3bf01f9fba9f33ef02761355', 'irisdikkop@live.nl', 0),
(32, 'elwin090', '0dbd769736bbeb8f3bf01f9fba9f33ef02761355', 'elwindejonge@hotmail.com', 0),
(33, 'gonny', '0dbd769736bbeb8f3bf01f9fba9f33ef02761355', 'gonnyblabla@live.nl', 0),
(34, 'thijskuiper', '0dbd769736bbeb8f3bf01f9fba9f33ef02761355', 'thijs@alda;sd.nl', 0),
(35, 'Elwin090', '0dbd769736bbeb8f3bf01f9fba9f33ef02761355', 'elwindejonge@hotmail.com', 0),
(36, 'Elwin090', '0dbd769736bbeb8f3bf01f9fba9f33ef02761355', 'elwindejonge@hotmail.com', 0),
(37, 'Admin', '0dbd769736bbeb8f3bf01f9fba9f33ef02761355', 'admin@serieforum.nl', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `nieuws`
--
ALTER TABLE `nieuws`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `nieuws`
--
ALTER TABLE `nieuws`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT voor een tabel `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
