SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `czat`
--
CREATE DATABASE IF NOT EXISTS `czat` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `czat`;

-- --------------------------------------------------------

--
-- table `czat`
--

CREATE TABLE IF NOT EXISTS `czat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wiadomosc` text COLLATE utf8_polish_ci NOT NULL,
  `data` text CHARACTER SET latin1 NOT NULL,
  `nazwa` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `zdjecie` text COLLATE utf8_polish_ci NOT NULL,
  `przegladarka` text COLLATE utf8_polish_ci NOT NULL,
  `ip` text COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=235 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- data for `czat` table
--

INSERT INTO `czat` (`id`, `wiadomosc`, `data`, `nazwa`, `zdjecie`, `przegladarka`, `ip`) VALUES
(1, 'Dobry wieczor. Cos sie... cos sie popsulo i nie bylo mnie slychac, to powtorze jeszcze raz. Wynik wyborczy KWW Stonogi to jest jakas porazka, ja mysle ze to polskie, beep glupie spoleczenstwo, te beep banda imbecyli ktora glosowala na tych beep karakanow z PiSu to jest jakies beep nieporozumienie. Jesli tyle dla was znaczy... jesli tyle dla was znaczy, ludzie takie zaangazowanie spoleczne, jak moje gdzie postawilem moja rodzine, moje zycie prywatne, biznes, wszystko inne i dla was tylko znaczylo to beep 70 czy 80 tysiecy glosow, to was powinno sie beep beep, tak sie powinno was beep, jak tylko was moze beep PiS. Platforma was tak nie beep, jak wyrucha was PiS, beep. Az wasz kukle beep beda swedzialy z bolu. To jest dramat gurwa. To jest dramat, ze w tym antyludzkim panstwie, w tym panstwie w ktorym media beep nie byly w stanie powiedziec, ze Zbigniewa Stonoge zbezczeszczono, ze ten czlowiek ma 118 wyrokow uniewinniajacych, ze te sadowe beep powtarzam sadowe beep! sadowe beep tego czlowieka oskarzaly bezpodstawnie i po latach uniewinnialy, ze to nie jest czyms wartym tego, by tego czlowieka wprowadzic do parlamentu. Bedzie was PiS beep w pupe, bedzie was PiS beep dymal tak, jak was Platforma nie dymala. Ta beep, ten maly karakan, beep Kaczynski smiec, zniszczy was. Sumlinskie, Kanie, Rachonie, telewizje republiki beda wam beep odbieraly smak zycia wy beep idioci. Narodowi, polscy idioci. Ja mam to w pizdzie beep, bo mnie stac na wszystko. Bede zyl beep tak! beep jeszcze dzisiaj, juz bilet kupiony z Polski i bede sie z was beep polskie frajery smial, zescie takie glupie sa, tacy beep debile, ktorzy te beep PiSowskie wybrali. Nie na Korwina, nie na Stonoge, tylko na jakies beep Petru, Zydow w beep beep beep, na Kukizow beep glosowali. To wlasnie jest ta beep Polska. Przez taka beep Polske, przez was beep beep nic sie w tym kraju nie zmieni, bo jestescie beep warci i trzeba was beep, beep i na was zarabiac, bo jestescie banda narodowych beep, nieudacznikow. Rozumiecie to? A wam kochani, ktorzyscie glosowali na mnie, ktorzyscie wspomagali mnie, dziekuje. Bo to garstka Polakow, garstka Polakow, dzisiaj to jest 70 tysiecy osob, moze 80. (Wylacz ten telefon, bo ci go wylacze na amen) Tak, tak, tylko to sie beep w tej beep Polsce nadaje. Powiedziec wam w ryj wreszcie, wy glupie beep, ze jestescie prymitywami, ze beep wasze beep karty kredytowe to jest wasz majestat, wasza godnosc. Robota beep w korporacji i karta z debetem, to wy beep Polacy, beep z wami. Nie warto bylo beep, nie warto bylo zrobic nic... co by sie... a szkoda beep gadac, szkoda strzepic ryja naprawde. Niech was... Sluchajcie. Ci, ktorzyscie glupie beep glosowaly na PiS niech was szlag trafi, beep warci jestescie, anty-polakami jestescie. Dobranoc. Co jest? Co chciales powiedziec? No. Dobra, na razie, beep. beep, szkoda bylo 9 spraw karnych, szkola bylo beep ujawniac afery podsluchowej. Glupia polska, glupie polaczki beep, was do Auschwitz tylko zaprowadzic beep, piecyki wlaczyc. Szkoda beep bylo na was cokolwiek wy glupie beep wy.', '22:03 16.04.2018', 'Zbysiu', 'https://i2.wp.com/brzeg24.pl/wp-content/uploads/2015/06/Zbigniew-Stonoga-e1434539892479.jpg?fit=800%2C801', '', ''),
(2, 'Koniec smieszkowania', '22:05 16.04.2018', 'Andrju', 'https://pbs.twimg.com/profile_images/556495456805453826/wKEOCDN0_400x400.png', '', ''),
(3, '3:14 slychac strzaly', '22:08 16.04.2018', 'Antus', 'http://muzeum4rp.iq.pl/wiki/images/9/95/Antek.jpg', '', ''),
(4, 'Co wy tu robicie o tej porze', '22:10 16.04.2018', 'Jaroslaw', 'https://www.termedia.pl/f/pages/19371_e44a4fa159d332ad4b0782e6068b2e88_blog.jpg', '', ''),
(5, 'Do mycia!', '22:10 16.04.2018', 'Jaroslaw', 'https://www.termedia.pl/f/pages/19371_e44a4fa159d332ad4b0782e6068b2e88_blog.jpg', '', ''),
(6, 'To jest dramat', '22:11 16.04.2018', 'Zbysiu', 'https://i2.wp.com/brzeg24.pl/wp-content/uploads/2015/06/Zbigniew-Stonoga-e1434539892479.jpg?fit=800%2C801', '', ''),
(7, 'Test', '19:54 18.04.2018', 'Ben', 'img/av.png', '', ''),
(8, 'Awesome!', '19:55 18.04.2018', 'Ben', 'img/av.png', '', ''),
(9, 'u good?', '19:55 18.04.2018', 'Zbysiu', 'https://i2.wp.com/brzeg24.pl/wp-content/uploads/2015/06/Zbigniew-Stonoga-e1434539892479.jpg?fit=800%2C801', '', ''),
(10, 'm8?', '01:04 21.04.2018', 'Zbysiu', 'https://i2.wp.com/brzeg24.pl/wp-content/uploads/2015/06/Zbigniew-Stonoga-e1434539892479.jpg?fit=800%2C801', '', '');
COMMIT;